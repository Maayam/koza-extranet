<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_fc9abcb20a4afe17de75a55851aa04d226fae91a9ecf8de642b08493f42edfa9 extends Twig_Template
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
        $__internal_5ff78990cda12bed72c17c6d2d160040f0d6849bd763a8ebb51187e22b0c7999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ff78990cda12bed72c17c6d2d160040f0d6849bd763a8ebb51187e22b0c7999->enter($__internal_5ff78990cda12bed72c17c6d2d160040f0d6849bd763a8ebb51187e22b0c7999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_c7b7ea4d69a2a8fc2eb9ee1a8d5e0eac12ac25360087e0a1126cff89fd69b9ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b7ea4d69a2a8fc2eb9ee1a8d5e0eac12ac25360087e0a1126cff89fd69b9ec->enter($__internal_c7b7ea4d69a2a8fc2eb9ee1a8d5e0eac12ac25360087e0a1126cff89fd69b9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_5ff78990cda12bed72c17c6d2d160040f0d6849bd763a8ebb51187e22b0c7999->leave($__internal_5ff78990cda12bed72c17c6d2d160040f0d6849bd763a8ebb51187e22b0c7999_prof);

        
        $__internal_c7b7ea4d69a2a8fc2eb9ee1a8d5e0eac12ac25360087e0a1126cff89fd69b9ec->leave($__internal_c7b7ea4d69a2a8fc2eb9ee1a8d5e0eac12ac25360087e0a1126cff89fd69b9ec_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d5236cef64c1a1e125a39b32bbabff0fd5bbb71107ad1002fa2ff5ad355f886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d5236cef64c1a1e125a39b32bbabff0fd5bbb71107ad1002fa2ff5ad355f886->enter($__internal_6d5236cef64c1a1e125a39b32bbabff0fd5bbb71107ad1002fa2ff5ad355f886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ca007359d6e27de16bb3f806ab1296582c3f481e7f67f52b5d635c3eaecd99ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca007359d6e27de16bb3f806ab1296582c3f481e7f67f52b5d635c3eaecd99ec->enter($__internal_ca007359d6e27de16bb3f806ab1296582c3f481e7f67f52b5d635c3eaecd99ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ca007359d6e27de16bb3f806ab1296582c3f481e7f67f52b5d635c3eaecd99ec->leave($__internal_ca007359d6e27de16bb3f806ab1296582c3f481e7f67f52b5d635c3eaecd99ec_prof);

        
        $__internal_6d5236cef64c1a1e125a39b32bbabff0fd5bbb71107ad1002fa2ff5ad355f886->leave($__internal_6d5236cef64c1a1e125a39b32bbabff0fd5bbb71107ad1002fa2ff5ad355f886_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_712f9ef2dd2fbb11d5929e9c98bcf14323fea4609fcf7a31ae0c987373921052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_712f9ef2dd2fbb11d5929e9c98bcf14323fea4609fcf7a31ae0c987373921052->enter($__internal_712f9ef2dd2fbb11d5929e9c98bcf14323fea4609fcf7a31ae0c987373921052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_102dd2e8f8b098efc0806907348152b01d22ce3e51597be1356a2749f270cf7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_102dd2e8f8b098efc0806907348152b01d22ce3e51597be1356a2749f270cf7c->enter($__internal_102dd2e8f8b098efc0806907348152b01d22ce3e51597be1356a2749f270cf7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_102dd2e8f8b098efc0806907348152b01d22ce3e51597be1356a2749f270cf7c->leave($__internal_102dd2e8f8b098efc0806907348152b01d22ce3e51597be1356a2749f270cf7c_prof);

        
        $__internal_712f9ef2dd2fbb11d5929e9c98bcf14323fea4609fcf7a31ae0c987373921052->leave($__internal_712f9ef2dd2fbb11d5929e9c98bcf14323fea4609fcf7a31ae0c987373921052_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d66e22038567b9b67e5d422dcbd6e49c969cfdd5337fbeda547a1312fdf213d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d66e22038567b9b67e5d422dcbd6e49c969cfdd5337fbeda547a1312fdf213d4->enter($__internal_d66e22038567b9b67e5d422dcbd6e49c969cfdd5337fbeda547a1312fdf213d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_95687f122d569483956b0804fbf918370f7f9fbb077e17c282ec360bfbd1f6d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95687f122d569483956b0804fbf918370f7f9fbb077e17c282ec360bfbd1f6d7->enter($__internal_95687f122d569483956b0804fbf918370f7f9fbb077e17c282ec360bfbd1f6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_95687f122d569483956b0804fbf918370f7f9fbb077e17c282ec360bfbd1f6d7->leave($__internal_95687f122d569483956b0804fbf918370f7f9fbb077e17c282ec360bfbd1f6d7_prof);

        
        $__internal_d66e22038567b9b67e5d422dcbd6e49c969cfdd5337fbeda547a1312fdf213d4->leave($__internal_d66e22038567b9b67e5d422dcbd6e49c969cfdd5337fbeda547a1312fdf213d4_prof);

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
