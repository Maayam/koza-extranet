<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d7db43716bbbe95314fd5e28329260580562e33bbeecd326d40fe0e8ba7bfa07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33f34defa77680f88e02ea02ff46d637a6e861f3bb8bacc3697c6b08164fc166 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33f34defa77680f88e02ea02ff46d637a6e861f3bb8bacc3697c6b08164fc166->enter($__internal_33f34defa77680f88e02ea02ff46d637a6e861f3bb8bacc3697c6b08164fc166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d610c2612c408fdbaf038567a703992b91666440dd16616664794f43427a6964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d610c2612c408fdbaf038567a703992b91666440dd16616664794f43427a6964->enter($__internal_d610c2612c408fdbaf038567a703992b91666440dd16616664794f43427a6964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33f34defa77680f88e02ea02ff46d637a6e861f3bb8bacc3697c6b08164fc166->leave($__internal_33f34defa77680f88e02ea02ff46d637a6e861f3bb8bacc3697c6b08164fc166_prof);

        
        $__internal_d610c2612c408fdbaf038567a703992b91666440dd16616664794f43427a6964->leave($__internal_d610c2612c408fdbaf038567a703992b91666440dd16616664794f43427a6964_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d6b8800bcae05488a89e600960699eac8f2bd1382960dede7b11e87c72b6ec79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6b8800bcae05488a89e600960699eac8f2bd1382960dede7b11e87c72b6ec79->enter($__internal_d6b8800bcae05488a89e600960699eac8f2bd1382960dede7b11e87c72b6ec79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ab713e745b5c04dc7d03c49e47090072fe342e9b9e7f5a163846d234a5107bf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab713e745b5c04dc7d03c49e47090072fe342e9b9e7f5a163846d234a5107bf1->enter($__internal_ab713e745b5c04dc7d03c49e47090072fe342e9b9e7f5a163846d234a5107bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_ab713e745b5c04dc7d03c49e47090072fe342e9b9e7f5a163846d234a5107bf1->leave($__internal_ab713e745b5c04dc7d03c49e47090072fe342e9b9e7f5a163846d234a5107bf1_prof);

        
        $__internal_d6b8800bcae05488a89e600960699eac8f2bd1382960dede7b11e87c72b6ec79->leave($__internal_d6b8800bcae05488a89e600960699eac8f2bd1382960dede7b11e87c72b6ec79_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_fea0232e92b95299cecb8eba9568f8900bb8a772cd55510ce49904e730171a38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fea0232e92b95299cecb8eba9568f8900bb8a772cd55510ce49904e730171a38->enter($__internal_fea0232e92b95299cecb8eba9568f8900bb8a772cd55510ce49904e730171a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5c5e48a70379caa3287c6d37ff71c2995912b1a2ac2a94018b57e8dd41a98ddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c5e48a70379caa3287c6d37ff71c2995912b1a2ac2a94018b57e8dd41a98ddd->enter($__internal_5c5e48a70379caa3287c6d37ff71c2995912b1a2ac2a94018b57e8dd41a98ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5c5e48a70379caa3287c6d37ff71c2995912b1a2ac2a94018b57e8dd41a98ddd->leave($__internal_5c5e48a70379caa3287c6d37ff71c2995912b1a2ac2a94018b57e8dd41a98ddd_prof);

        
        $__internal_fea0232e92b95299cecb8eba9568f8900bb8a772cd55510ce49904e730171a38->leave($__internal_fea0232e92b95299cecb8eba9568f8900bb8a772cd55510ce49904e730171a38_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_935ead73ec9cda9b6fedaa5bba5f21cdd72e3e6d252637f11476acda0cbea403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_935ead73ec9cda9b6fedaa5bba5f21cdd72e3e6d252637f11476acda0cbea403->enter($__internal_935ead73ec9cda9b6fedaa5bba5f21cdd72e3e6d252637f11476acda0cbea403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2d602bd50d24bfd1d2081eda699db21b8c70cdee51e379692d508d47d034439d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d602bd50d24bfd1d2081eda699db21b8c70cdee51e379692d508d47d034439d->enter($__internal_2d602bd50d24bfd1d2081eda699db21b8c70cdee51e379692d508d47d034439d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_2d602bd50d24bfd1d2081eda699db21b8c70cdee51e379692d508d47d034439d->leave($__internal_2d602bd50d24bfd1d2081eda699db21b8c70cdee51e379692d508d47d034439d_prof);

        
        $__internal_935ead73ec9cda9b6fedaa5bba5f21cdd72e3e6d252637f11476acda0cbea403->leave($__internal_935ead73ec9cda9b6fedaa5bba5f21cdd72e3e6d252637f11476acda0cbea403_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
