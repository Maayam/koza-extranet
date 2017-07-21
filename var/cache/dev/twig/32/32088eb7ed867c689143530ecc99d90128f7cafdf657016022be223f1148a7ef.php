<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_fad78add6dda3affbf0e1a16f37b6737cea13ea248cb78b0b689a9f48f7c7d97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28d38175129113777d9810db961644eb21e9a0220c31505b6d6824f4babdf991 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28d38175129113777d9810db961644eb21e9a0220c31505b6d6824f4babdf991->enter($__internal_28d38175129113777d9810db961644eb21e9a0220c31505b6d6824f4babdf991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_683d2122df233ad5474e89bfd006e26a55521f05e63facc3d322cd6256122805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_683d2122df233ad5474e89bfd006e26a55521f05e63facc3d322cd6256122805->enter($__internal_683d2122df233ad5474e89bfd006e26a55521f05e63facc3d322cd6256122805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28d38175129113777d9810db961644eb21e9a0220c31505b6d6824f4babdf991->leave($__internal_28d38175129113777d9810db961644eb21e9a0220c31505b6d6824f4babdf991_prof);

        
        $__internal_683d2122df233ad5474e89bfd006e26a55521f05e63facc3d322cd6256122805->leave($__internal_683d2122df233ad5474e89bfd006e26a55521f05e63facc3d322cd6256122805_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3c2df1f2522e2dda3602b94316d4decaf73ea3c2166f0cf7237cec1b94f9ad72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c2df1f2522e2dda3602b94316d4decaf73ea3c2166f0cf7237cec1b94f9ad72->enter($__internal_3c2df1f2522e2dda3602b94316d4decaf73ea3c2166f0cf7237cec1b94f9ad72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b2e8600896076fa01397b80c3d20221faedf81d93da8ccb9b112e9e3cc98a418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e8600896076fa01397b80c3d20221faedf81d93da8ccb9b112e9e3cc98a418->enter($__internal_b2e8600896076fa01397b80c3d20221faedf81d93da8ccb9b112e9e3cc98a418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_b2e8600896076fa01397b80c3d20221faedf81d93da8ccb9b112e9e3cc98a418->leave($__internal_b2e8600896076fa01397b80c3d20221faedf81d93da8ccb9b112e9e3cc98a418_prof);

        
        $__internal_3c2df1f2522e2dda3602b94316d4decaf73ea3c2166f0cf7237cec1b94f9ad72->leave($__internal_3c2df1f2522e2dda3602b94316d4decaf73ea3c2166f0cf7237cec1b94f9ad72_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
