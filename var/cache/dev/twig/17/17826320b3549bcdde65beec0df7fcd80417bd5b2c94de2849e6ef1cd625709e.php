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
        $__internal_6a32d6e00a5da3fb571c914bbe94ad590c9b77b467cf801ca5fa90d6ba13b241 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a32d6e00a5da3fb571c914bbe94ad590c9b77b467cf801ca5fa90d6ba13b241->enter($__internal_6a32d6e00a5da3fb571c914bbe94ad590c9b77b467cf801ca5fa90d6ba13b241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_3edf9658bbf3dca87444174ec2871314fda40942c113fdd9eb3312640fd40dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3edf9658bbf3dca87444174ec2871314fda40942c113fdd9eb3312640fd40dcf->enter($__internal_3edf9658bbf3dca87444174ec2871314fda40942c113fdd9eb3312640fd40dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_6a32d6e00a5da3fb571c914bbe94ad590c9b77b467cf801ca5fa90d6ba13b241->leave($__internal_6a32d6e00a5da3fb571c914bbe94ad590c9b77b467cf801ca5fa90d6ba13b241_prof);

        
        $__internal_3edf9658bbf3dca87444174ec2871314fda40942c113fdd9eb3312640fd40dcf->leave($__internal_3edf9658bbf3dca87444174ec2871314fda40942c113fdd9eb3312640fd40dcf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e46cee8d97314ec400c4c0bcd548a14912337275c4b057c62b844b2811fc33f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e46cee8d97314ec400c4c0bcd548a14912337275c4b057c62b844b2811fc33f0->enter($__internal_e46cee8d97314ec400c4c0bcd548a14912337275c4b057c62b844b2811fc33f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_63bc854d4c87936eb98eceb77a877b9c12af3eeaef634518bd054b901e463ede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63bc854d4c87936eb98eceb77a877b9c12af3eeaef634518bd054b901e463ede->enter($__internal_63bc854d4c87936eb98eceb77a877b9c12af3eeaef634518bd054b901e463ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_63bc854d4c87936eb98eceb77a877b9c12af3eeaef634518bd054b901e463ede->leave($__internal_63bc854d4c87936eb98eceb77a877b9c12af3eeaef634518bd054b901e463ede_prof);

        
        $__internal_e46cee8d97314ec400c4c0bcd548a14912337275c4b057c62b844b2811fc33f0->leave($__internal_e46cee8d97314ec400c4c0bcd548a14912337275c4b057c62b844b2811fc33f0_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_fbae7648fb2b2f3c4954f9976a77b33b70800bb57a7a9fd647a7e2c0f46ca177 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbae7648fb2b2f3c4954f9976a77b33b70800bb57a7a9fd647a7e2c0f46ca177->enter($__internal_fbae7648fb2b2f3c4954f9976a77b33b70800bb57a7a9fd647a7e2c0f46ca177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8549c556898d6ed0b0066ec27730181a1a9dd2d2532d0f87865642b0668d2572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8549c556898d6ed0b0066ec27730181a1a9dd2d2532d0f87865642b0668d2572->enter($__internal_8549c556898d6ed0b0066ec27730181a1a9dd2d2532d0f87865642b0668d2572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8549c556898d6ed0b0066ec27730181a1a9dd2d2532d0f87865642b0668d2572->leave($__internal_8549c556898d6ed0b0066ec27730181a1a9dd2d2532d0f87865642b0668d2572_prof);

        
        $__internal_fbae7648fb2b2f3c4954f9976a77b33b70800bb57a7a9fd647a7e2c0f46ca177->leave($__internal_fbae7648fb2b2f3c4954f9976a77b33b70800bb57a7a9fd647a7e2c0f46ca177_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed0d991990242896298299e11616c8770607ae811d470955b0b004628afb55dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed0d991990242896298299e11616c8770607ae811d470955b0b004628afb55dc->enter($__internal_ed0d991990242896298299e11616c8770607ae811d470955b0b004628afb55dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_944b03b7dfe31ccd8bdff6326c6bb29dad3ae50e6da89bfd722449b5f7851cf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_944b03b7dfe31ccd8bdff6326c6bb29dad3ae50e6da89bfd722449b5f7851cf7->enter($__internal_944b03b7dfe31ccd8bdff6326c6bb29dad3ae50e6da89bfd722449b5f7851cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_944b03b7dfe31ccd8bdff6326c6bb29dad3ae50e6da89bfd722449b5f7851cf7->leave($__internal_944b03b7dfe31ccd8bdff6326c6bb29dad3ae50e6da89bfd722449b5f7851cf7_prof);

        
        $__internal_ed0d991990242896298299e11616c8770607ae811d470955b0b004628afb55dc->leave($__internal_ed0d991990242896298299e11616c8770607ae811d470955b0b004628afb55dc_prof);

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
