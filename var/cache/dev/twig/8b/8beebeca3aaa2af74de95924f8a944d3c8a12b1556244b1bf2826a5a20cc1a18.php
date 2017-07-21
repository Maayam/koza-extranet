<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_ccd5724c045eb08e29fbaf06f32643c26fb125141b6f08678f986025c09df898 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7519a8ac25db0891ca28418f523d317af786f559816e451b599b268c5ea9b256 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7519a8ac25db0891ca28418f523d317af786f559816e451b599b268c5ea9b256->enter($__internal_7519a8ac25db0891ca28418f523d317af786f559816e451b599b268c5ea9b256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_9df17e8ac0a238314d082b298423266a5599f6cc302d952cef7b3361cd15c8a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df17e8ac0a238314d082b298423266a5599f6cc302d952cef7b3361cd15c8a1->enter($__internal_9df17e8ac0a238314d082b298423266a5599f6cc302d952cef7b3361cd15c8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_7519a8ac25db0891ca28418f523d317af786f559816e451b599b268c5ea9b256->leave($__internal_7519a8ac25db0891ca28418f523d317af786f559816e451b599b268c5ea9b256_prof);

        
        $__internal_9df17e8ac0a238314d082b298423266a5599f6cc302d952cef7b3361cd15c8a1->leave($__internal_9df17e8ac0a238314d082b298423266a5599f6cc302d952cef7b3361cd15c8a1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a46f8c9b337f7adc91e8e1bcca2daea02d5f2df781ac5bda52c40410301b4edb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a46f8c9b337f7adc91e8e1bcca2daea02d5f2df781ac5bda52c40410301b4edb->enter($__internal_a46f8c9b337f7adc91e8e1bcca2daea02d5f2df781ac5bda52c40410301b4edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2a43b7d98e7bccf3d01fab229dbb36dcfee1f4f24fc5373a444794de09c55887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a43b7d98e7bccf3d01fab229dbb36dcfee1f4f24fc5373a444794de09c55887->enter($__internal_2a43b7d98e7bccf3d01fab229dbb36dcfee1f4f24fc5373a444794de09c55887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2a43b7d98e7bccf3d01fab229dbb36dcfee1f4f24fc5373a444794de09c55887->leave($__internal_2a43b7d98e7bccf3d01fab229dbb36dcfee1f4f24fc5373a444794de09c55887_prof);

        
        $__internal_a46f8c9b337f7adc91e8e1bcca2daea02d5f2df781ac5bda52c40410301b4edb->leave($__internal_a46f8c9b337f7adc91e8e1bcca2daea02d5f2df781ac5bda52c40410301b4edb_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e9d58db46a4c7c54d565fde69fd7e7bdb9a8b36aa1f30b082474428891cdbeeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9d58db46a4c7c54d565fde69fd7e7bdb9a8b36aa1f30b082474428891cdbeeb->enter($__internal_e9d58db46a4c7c54d565fde69fd7e7bdb9a8b36aa1f30b082474428891cdbeeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9ee7c4e08545a59a5da582a50ae45058ed51dd906e81b6fdbc0902f086886e8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee7c4e08545a59a5da582a50ae45058ed51dd906e81b6fdbc0902f086886e8b->enter($__internal_9ee7c4e08545a59a5da582a50ae45058ed51dd906e81b6fdbc0902f086886e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9ee7c4e08545a59a5da582a50ae45058ed51dd906e81b6fdbc0902f086886e8b->leave($__internal_9ee7c4e08545a59a5da582a50ae45058ed51dd906e81b6fdbc0902f086886e8b_prof);

        
        $__internal_e9d58db46a4c7c54d565fde69fd7e7bdb9a8b36aa1f30b082474428891cdbeeb->leave($__internal_e9d58db46a4c7c54d565fde69fd7e7bdb9a8b36aa1f30b082474428891cdbeeb_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f3f3e5f4037c99a2d4f69df4e41ee56d7c728e9de22756ac8f45f46a7f8e1bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f3f3e5f4037c99a2d4f69df4e41ee56d7c728e9de22756ac8f45f46a7f8e1bc->enter($__internal_4f3f3e5f4037c99a2d4f69df4e41ee56d7c728e9de22756ac8f45f46a7f8e1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_29cdf94846135d5b53f85118ceb7a78995b0a64676ed24c337effa431c7cb3cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29cdf94846135d5b53f85118ceb7a78995b0a64676ed24c337effa431c7cb3cf->enter($__internal_29cdf94846135d5b53f85118ceb7a78995b0a64676ed24c337effa431c7cb3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_29cdf94846135d5b53f85118ceb7a78995b0a64676ed24c337effa431c7cb3cf->leave($__internal_29cdf94846135d5b53f85118ceb7a78995b0a64676ed24c337effa431c7cb3cf_prof);

        
        $__internal_4f3f3e5f4037c99a2d4f69df4e41ee56d7c728e9de22756ac8f45f46a7f8e1bc->leave($__internal_4f3f3e5f4037c99a2d4f69df4e41ee56d7c728e9de22756ac8f45f46a7f8e1bc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
