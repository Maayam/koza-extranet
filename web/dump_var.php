<?php
/**
 * Use this class to beautify PHP var_dump output.
 * Two modes are available : table mode (default) and light mode.
 * How of use :
 * <code>
 * <?php
 * // Example 1 :
 * $myVar = new My_Class();
 * dump_var($myVar);
 * // Example 2 :
 * $myArray = array('foo', 5 => 'bar');
 * dump_var($myArray);
 * // Example 3 : set the second optional param to true if you want to use light mode
 * $myArray = array('foo', 5 => 'bar');
 * dump_var($myArray, true);
 * ?>
 * </code>
 *
 * @version 0.1
 * @author Johann Reinke <johann.reinke@gmail.com>
 * @copyright Copyright (c) 2008, Johann Reinke
 */
class Dump_Var
{
    /**
     * Defines output CSS styles
     * You can change these settings easily, be careful to type valid CSS values
     * @var array
     * @access protected
     */
    protected $_styles = array(
        // BOTH MODES
        'FONT_FAMILY'            => 'arial, sans-serif',
        'FONT_SIZE'              => '11px',
        'GLOBAL_MARGIN'          => '4px',
        'COLOR_BOOLEAN'          => 'blue',
        'COLOR_STRING'           => 'green',
        'COLOR_FLOAT'            => 'red',
        'COLOR_INTEGER'          => 'red',
        'VAR_VISIBILITY_COLOR'   => 'darkgray',
        'EMPTY_VARIABLE_COLOR'   => 'gray',
        'NULL_VARIABLE_COLOR'    => 'gray',
        'ERROR_VARIABLE_COLOR'   => 'red',
        // TABLE MODE
        'TABLE_COLOR'            => 'black',
        'TABLE_BORDER'           => '2px solid blue',
        'TABLE_BORDER_COLLAPSE'  => 'collapse',
        'TABLE_TEXT_ALIGN'       => 'left',
        'TABLE_TH_BORDER'        => '1px solid blue',
        'TABLE_TH_FONT_WEIGHT'   => 'bold',
        'TABLE_TH_BG_COLOR'      => 'lightgrey',
        'TABLE_TH_PADDING'       => '2px 4px',
        'TABLE_TH_TEXT_ALIGN'    => 'center',
        'TABLE_TD_BORDER'        => '1px solid blue',
        'TABLE_TD_BG_COLOR'      => 'white',
        'TABLE_TD_PADDING'       => '2px 4px',
        'TABLE_TD_NAME_BG_COLOR' => 'lavender',
        // LIGHT MODE
        'MAIN_VAR_NAME_COLOR'    => 'maroon',
        'OBJECT_CLASS_COLOR'     => 'hotpink',
        'DEPTH_COLORS'           => array('firebrick', 'darkorange', 'darkorchid', 'dodgerblue', 'mediumseagreen'),
        'VAR_INFO_COLOR'         => 'gray',
    );

    /**
     * Light mode only
     * Defines indentation length (in spaces)
     * @var int
     * @access protected
     */
    protected $_indentLength = 6;

    /**
     * Dumped variable name
     * @var string
     * @access protected
     */
    protected $_varName = '';

    /**
     * Finds whether the dumped variable is a scalar
     * @var bool
     * @access protected
     */
    protected $_isVarScalar = true;

    /**
     * Finds whether the dumped variable is a resource
     * @var bool
     * @access protected
     */
    protected $_isVarResource = false;

    /**
     * Contains all variable info ready to output
     * @var array
     * @access protected
     */
    protected $_content = array();

    /**
     * Contains original PHP var_dump output splitted into multiple lines
     * @var array
     * @access protected
     */
    protected $_lines = array();

    /**
     * Retrieves var info and launches output
     *
     * @param mixed $var Dumped variable
     * @param string $varName Dumped variable name
     * @param bool $modeLight Enables light mode if set to true
     * @return void
     */
    public function __construct($var, $varName, $modeLight = false)
    {
        $this->_varName = $varName;
        $this->_isVarScalar = is_scalar($var);
        $this->_isVarResource = is_resource($var);
        ob_start();
        var_dump($var);
        $dump = ob_get_contents();
        ob_end_clean();
        $this->_lines = preg_split('/[\r\n]/', $dump);
        $this->_setContent();
        $this->_displayCSS();
        $this->_displayJS();

        if ($modeLight) {
            $this->_displayLight();
        } else {
            $this->_displayTable();
        }
    }

    /**
     * Retrieves values of objects and arrays
     *
     * @param int $count Number of attributes
     * @param bool $extractVisibility If set to true, method will extract object properties visibility from properties name
     * @return array
     */
    protected function _getNonScalarVarValues($count, $extractVisibility = false) {
        $line = trim(next($this->_lines));
        $content = array();

        for ($i = 0; $i < $count; $i++) {
            $data = array();
            $matches = array();
            if (preg_match('/^\["(.+)"\]=>$/', $line, $matches) || preg_match('/^\[(-{0,1}\d+)\]=>$/', $line, $matches)) {
                $line = trim(next($this->_lines));
                $data = $this->_getLineInfo($line);
                $data['NAME'] = $matches[1];
                if (true === $extractVisibility && preg_match('/^(.+):(protected|private)$/', $data['NAME'], $matches)) {
                    $data['NAME'] = $matches[1];
                    $data['VISIBILITY'] = $matches[2];
                }
            } else {
                $data = $this->_getLineInfo($line);
            }
            ksort($data);
            $content[] = $data;
            $line = trim(next($this->_lines));
        }

        return $content;
    }

    /**
     * Parses lines of original var_dump output
     *
     * @param string $line
     * @return array
     */
    protected function _getLineInfo($line)
    {
        $type = '';
        $count = '';
        $value = '';
        $objectClass = '';
        $matches = array();

        if ($line == '*RECURSION*') {
            $type = '';
            $count = null;
            $value = '*RECURSION*';
        } else if (preg_match('/^(&NULL|NULL)$/i', $line, $matches)) {
            $type = $matches[1];
            $count = null;
            $value = 'NULL';
        } else if (preg_match('/^(&string|string)\((\d+)\)\s"(.*)$/', $line, $matches)) {
            $type = $matches[1];
            $count = (int) $matches[2];
            $value = $matches[3];
            if (strlen($value) - 1 < $count) {
                // string is not complete, it contains some new lines
                while (strlen($value) < $count || $value[strlen($value) - 1] != '"') {
                    $line = next($this->_lines);
                    if (empty($line)) {
                        $line .= "\r\n";
                    }
                    $value .= $line;
                }
            }
            $value = substr($value, 0, $count);
            $value = "'$value'";
        } else if (preg_match('/^(&bool|bool)\((true|false)\)$/', $line, $matches)) {
            $type = $matches[1];
            $count = null;
            $value = $matches[2];
        } else if (preg_match('/^(&int|int|&float|float)\((.+)\)$/', $line, $matches)) {
            $type = $matches[1];
            $count = null;
            settype($matches[2], $type);
            $value = $matches[2];
        } else if (preg_match('/^(&array|array)\((\d+)\)\s{$/', $line, $matches)) {
            $type = $matches[1];
            $count = (int) $matches[2];
            $value = $this->_getNonScalarVarValues($count);
        } else if (preg_match('/^(&object|object)\((\w+)\)#\d+\s\((\d+)\)\s{$/', $line, $matches)) {
            $type = $matches[1];
            $count = (int) $matches[3];
            $value = $this->_getNonScalarVarValues($count, true);
            $objectClass = $matches[2];
        } else if (preg_match('/^(resource\(.*\)\sof\stype\s\(.*\))$/', $line, $matches)) {
            $type = 'resource';
            $count = null;
            $value = $matches[1];
        }

        $cssClass = strtolower(ltrim($type, '&'));
        if (empty($value)) {
            $value = 'empty';
            $cssClass = 'empty';
        }

        $data = array(
            'TYPE'         => $type,
            'COUNT'        => $count,
            'VALUE'        => $value,
            'OBJECT_CLASS' => $objectClass,
            'CSS_CLASS'    => $cssClass,
        );

        return $data;
    }

    /**
     * Launches variable values parsing
     *
     * @return void
     */
    protected function _setContent()
    {
        $line = $this->_lines[0];
        $this->_content[] = $this->_getLineInfo($line);
    }

    /**
     * Displays CSS styles
     *
     * @return void
     */
    protected function _displayCSS()
    {
        echo <<< END
<style type="text/css">
    #dump_var * {
        font-family: {$this->_styles['FONT_FAMILY']};
        font-size: {$this->_styles['FONT_SIZE']};
        margin: 0;
        padding: 0;
    }

    #dump_var {
        margin: {$this->_styles['GLOBAL_MARGIN']};
        background-color: white;
    }

    #dump_var p {
        padding:2px 0;
    }

    #dump_var table {
        border-collapse: {$this->_styles['TABLE_BORDER_COLLAPSE']};
        border: {$this->_styles['TABLE_BORDER']};
        color: {$this->_styles['TABLE_COLOR']};
        text-align: {$this->_styles['TABLE_TEXT_ALIGN']};
    }

    #dump_var th {
        border: {$this->_styles['TABLE_TH_BORDER']};
        background-color: {$this->_styles['TABLE_TH_BG_COLOR']};
        padding: {$this->_styles['TABLE_TH_PADDING']};
        font-weight: {$this->_styles['TABLE_TH_FONT_WEIGHT']};
        text-align: {$this->_styles['TABLE_TH_TEXT_ALIGN']};
    }

    #dump_var td {
        border: {$this->_styles['TABLE_TD_BORDER']};
        background-color: {$this->_styles['TABLE_TD_BG_COLOR']};
        padding: {$this->_styles['TABLE_TD_PADDING']};
    }

    #dump_var .bool {
        color: {$this->_styles['COLOR_BOOLEAN']};
    }

    #dump_var .string {
        color: {$this->_styles['COLOR_STRING']};
    }

    #dump_var .float {
        color: {$this->_styles['COLOR_FLOAT']};
    }

    #dump_var .int {
        color: {$this->_styles['COLOR_INTEGER']};
    }

    #dump_var .name {
        background-color: {$this->_styles['TABLE_TD_NAME_BG_COLOR']};
    }

    #dump_var .left {
        text-align: left;
    }

    #dump_var .empty {
        color: {$this->_styles['EMPTY_VARIABLE_COLOR']};
    }

    #dump_var .null {
        color: {$this->_styles['NULL_VARIABLE_COLOR']};
    }

    #dump_var .error {
        font-weight: bold;
        color: {$this->_styles['ERROR_VARIABLE_COLOR']};
    }

    #dump_var .pointer {
        cursor: pointer;
    }

    #dump_var .object_class {
        color: {$this->_styles['OBJECT_CLASS_COLOR']};
        font-weight: bold;
    }

    #dump_var .visibility {
        font-style: italic;
        color: {$this->_styles['VAR_VISIBILITY_COLOR']};
    }

    #dump_var .var_info {
        color: {$this->_styles['VAR_INFO_COLOR']};
    }

    #dump_var .main_var_name {
        color: {$this->_styles['MAIN_VAR_NAME_COLOR']};
    }
</style>
END;
    }

    /**
     * Displays JS functions
     *
     * @return void
     */
    protected function _displayJS()
    {
        echo <<< END
<script type="text/javascript">
    function toggleDisplay(element) {
        var trList = element.parentNode.getElementsByTagName('TR');
        for (var i = 0; i < trList.length; i++) {
            if (trList[i] != element) {
                if (trList[i].style.display != '') {
                    trList[i].style.display = '';
                } else {
                    trList[i].style.display = 'none';
                }
            }
        }
    }
</script>
END;
    }

    /**
     * Initializes table mode display
     *
     * @return void
     */
    protected function _displayTable()
    {
        echo <<< END
            <div id="dump_var">
                <table>
END;
        if (false === $this->_isVarScalar && false === $this->_isVarResource) {
            $mainVarName = $this->_varName;
            $mainVarObjectClass = $this->_content[0]['OBJECT_CLASS'];
            $mainVarType = $this->_content[0]['TYPE'];
            $mainVarCount = $this->_content[0]['COUNT'];
            $mainVarCount = !is_null($mainVarCount) ? "($mainVarCount)" : '';
            echo <<< END
                    <tr>
                        <th colspan="3" class="left">{$mainVarName} {$mainVarObjectClass} {$mainVarType}{$mainVarCount}</th>
                    </tr>
END;
        }
        $this->_displayTableContent($this->_isVarScalar || $this->_isVarResource ? $this->_content : $this->_content[0]['VALUE']);
        echo <<< END
                </table>
            </div>
END;
    }

    /**
     * Displays variable info in table mode
     *
     * @param array $content
     * @return void
     */
    protected function _displayTableContent($content)
    {
        foreach ($content as $row) {
            if (!isset($row['NAME'])) {
                $row['NAME'] = $this->_varName;
            }

            if (!is_null($row['COUNT'])) {
                $row['COUNT'] = '(' . $row['COUNT'] . ')';
            }

            if (!empty($row['ERROR'])) {
                echo <<< END
                        <tr>
                            <th colspan="3" class="left error">{$row['ERROR']}</th>
                        </tr>
END;
            }

            $visibility = isset($row['VISIBILITY']) ? '&nbsp;<span class="visibility">' . $row['VISIBILITY'] . '</span>' : '';
            echo <<< END
                    <tr>
                        <td class="name" title="{$row['NAME']}">{$row['NAME']}{$visibility}</td>
                        <td>{$row['TYPE']}{$row['COUNT']}</td>
                        <td class="{$row['CSS_CLASS']}">
END;
            if (is_array($row['VALUE']) && !empty($row['VALUE'])) {
                echo <<< END
                    <table>
                        <tr onclick="toggleDisplay(this);" class="pointer" title="Show / Hide">
                            <th colspan="3" class="left">{$row['OBJECT_CLASS']} {$row['TYPE']}{$row['COUNT']}</th>
                        </tr>
END;
                $this->_displayTableContent($row['VALUE']);
                echo <<< END
                    </table>
END;
            } else if (is_scalar($row['VALUE'])) {
                echo '<pre>' . htmlspecialchars($row['VALUE']) . '</pre>';
            }

            echo <<< END
                        </td>
                    </tr>
END;
        }
    }

    /**
     * Initializes light mode display
     *
     * @return void
     */
    protected function _displayLight()
    {
        echo <<< END
            <div id="dump_var">
END;
        $mainVarName = $this->_varName;
        $mainVarObjectClass = $this->_content[0]['OBJECT_CLASS'];
        $mainVarType = $this->_content[0]['TYPE'];
        $mainVarCount = $this->_content[0]['COUNT'];
        $mainVarCount = !is_null($mainVarCount) ? "($mainVarCount)" : '';
        if (false === $this->_isVarScalar && false === $this->_isVarResource) {
            echo <<< END
                <p><span class="main_var_name">{$mainVarName}</span>&nbsp;<span class="object_class">{$mainVarObjectClass}</span>&nbsp;<strong>{$mainVarType}</strong>{$mainVarCount}</p>
END;
            $this->_displayLightContent($this->_content[0]['VALUE']);
        } else {
            $mainVarValue = $this->_content[0]['VALUE'];
            $mainVarCssClass = $this->_content[0]['CSS_CLASS'];
            echo <<< END
                <p><span class="main_var_name">{$mainVarName}</span>&nbsp;=&nbsp;<span class="{$mainVarCssClass}">{$mainVarValue}</span>&nbsp;<span class="var_info">{$mainVarType}{$mainVarCount}</span></p>
END;
        }

        echo <<< END
            </div>
END;
    }

    /**
     * Displays variable info in light mode
     *
     * @param array $content Variable info
     * @param int $depth Current depth in variable values
     * @return void
     */
    protected function _displayLightContent($content, $depth = 0)
    {
        foreach ($content as $row) {
            $depth++;
            if (!isset($row['NAME'])) {
                $row['NAME'] = $this->_varName;
            }
            $tabs = str_repeat('&nbsp;', $depth * $this->_indentLength);
            $color = $this->_getDepthColor($depth);
            $visibility = isset($row['VISIBILITY']) ? '&nbsp;<span class="visibility">' . $row['VISIBILITY'] . '</span>' : '';
            echo <<< END
                <p>{$tabs}<span style="color:{$color};">'{$row['NAME']}'</span>{$visibility}&nbsp;=&gt;&nbsp;
END;
            if (is_array($row['VALUE'])) {
                if (!empty($row['OBJECT_CLASS'])) {
                    echo <<< END
<span class="object_class">{$row['OBJECT_CLASS']}</span>&nbsp;
END;
                }
                echo <<< END
<strong>{$row['TYPE']}</strong>({$row['COUNT']})&nbsp;</p>
END;
                $this->_displayLightContent($row['VALUE'], $depth);
            } else {
                $info = !is_null($row['COUNT']) ? "{$row['TYPE']}({$row['COUNT']})" : '';
                if ($row['VALUE'] != 'empty') {
                    echo <<< END
<span class="{$row['CSS_CLASS']}">{$row['VALUE']}</span>&nbsp;
END;
                }
                    echo <<< END
<span class="var_info">{$info}</span></p>
END;
            }
            $depth--;
        }
    }

    /**
     * Returns color of the given depth (defined in CSS styles)
     *
     * @see $this->_styles['DEPTH_COLORS']
     * @param int $depth Depth in variable values
     * @return string Depth color
     */
    protected function _getDepthColor($depth)
    {
        $countColors = count($this->_styles['DEPTH_COLORS']);
        $indexColor = $depth;
        while ($indexColor > $countColors) {
            $indexColor -= $countColors;
        }

        return $this->_styles['DEPTH_COLORS'][$indexColor - 1];
    }
}

/**
 * Retrieves dumped variable name from debug backtrace
 *
 * @param array $backtrace Debug backtrace
 * @return string Dumped variable name
 */
function getVariableName($backtrace)
{
    $varName = '';
    if (!empty($backtrace)) {
        $lineList = file($backtrace['file']);
        $function = $backtrace['function'];
        $lineNr = $backtrace['line'];
        $line = trim($lineList[$lineNr - 1]);
        $varName = preg_replace("/.*$function\((.*)\).*/i", '$1', $line);
        if ($pos = strrpos($varName, ',')) {
            $varName = substr($varName, 0, $pos);
        }
    }

    return trim($varName);
}

function dump_var($var, $modeLight = false)
{
    $backtrace = debug_backtrace();
    $varName = getVariableName($backtrace[0]);
    new Dump_Var($var, $varName, $modeLight);
}

?>