<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c5a266016a1d0e31b6ee35f11dd88d3af10e1e671c98326d11002466de91cf50 extends Twig_Template
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
        $__internal_80db16bbc594d221412015dd5eb87976f4d9581609cf8125a6ca73eace289bde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80db16bbc594d221412015dd5eb87976f4d9581609cf8125a6ca73eace289bde->enter($__internal_80db16bbc594d221412015dd5eb87976f4d9581609cf8125a6ca73eace289bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_330813903d2723c4968f2b72fef18469f653a4a1deec3e9ca7150d83c9bf354e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_330813903d2723c4968f2b72fef18469f653a4a1deec3e9ca7150d83c9bf354e->enter($__internal_330813903d2723c4968f2b72fef18469f653a4a1deec3e9ca7150d83c9bf354e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80db16bbc594d221412015dd5eb87976f4d9581609cf8125a6ca73eace289bde->leave($__internal_80db16bbc594d221412015dd5eb87976f4d9581609cf8125a6ca73eace289bde_prof);

        
        $__internal_330813903d2723c4968f2b72fef18469f653a4a1deec3e9ca7150d83c9bf354e->leave($__internal_330813903d2723c4968f2b72fef18469f653a4a1deec3e9ca7150d83c9bf354e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6f309fae51449cb8c80ed0adcdf1ce58f8ca659799904b74758058955e46f204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f309fae51449cb8c80ed0adcdf1ce58f8ca659799904b74758058955e46f204->enter($__internal_6f309fae51449cb8c80ed0adcdf1ce58f8ca659799904b74758058955e46f204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2ced2a490787563d5bc9a7821584f8381cd8aeee3a422a786de4ac142520c97f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ced2a490787563d5bc9a7821584f8381cd8aeee3a422a786de4ac142520c97f->enter($__internal_2ced2a490787563d5bc9a7821584f8381cd8aeee3a422a786de4ac142520c97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2ced2a490787563d5bc9a7821584f8381cd8aeee3a422a786de4ac142520c97f->leave($__internal_2ced2a490787563d5bc9a7821584f8381cd8aeee3a422a786de4ac142520c97f_prof);

        
        $__internal_6f309fae51449cb8c80ed0adcdf1ce58f8ca659799904b74758058955e46f204->leave($__internal_6f309fae51449cb8c80ed0adcdf1ce58f8ca659799904b74758058955e46f204_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f5bd7237fe9e90e9993ec4c02269bd8a9e991d1a303cca72d0be87a30944a85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f5bd7237fe9e90e9993ec4c02269bd8a9e991d1a303cca72d0be87a30944a85->enter($__internal_7f5bd7237fe9e90e9993ec4c02269bd8a9e991d1a303cca72d0be87a30944a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bbfecb48f1b1ef63fcc17f8f7c4f559966dcb82037411e33e46aa63db20baea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbfecb48f1b1ef63fcc17f8f7c4f559966dcb82037411e33e46aa63db20baea0->enter($__internal_bbfecb48f1b1ef63fcc17f8f7c4f559966dcb82037411e33e46aa63db20baea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bbfecb48f1b1ef63fcc17f8f7c4f559966dcb82037411e33e46aa63db20baea0->leave($__internal_bbfecb48f1b1ef63fcc17f8f7c4f559966dcb82037411e33e46aa63db20baea0_prof);

        
        $__internal_7f5bd7237fe9e90e9993ec4c02269bd8a9e991d1a303cca72d0be87a30944a85->leave($__internal_7f5bd7237fe9e90e9993ec4c02269bd8a9e991d1a303cca72d0be87a30944a85_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_49f8e49100963a45d91fe224ea9d9f24eca16ade59d797b1bb976653a9503b3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49f8e49100963a45d91fe224ea9d9f24eca16ade59d797b1bb976653a9503b3f->enter($__internal_49f8e49100963a45d91fe224ea9d9f24eca16ade59d797b1bb976653a9503b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d4acbe89180862c984b29557ef3f8bbee5528d9a7f7116ac03272f63aade66ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4acbe89180862c984b29557ef3f8bbee5528d9a7f7116ac03272f63aade66ae->enter($__internal_d4acbe89180862c984b29557ef3f8bbee5528d9a7f7116ac03272f63aade66ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d4acbe89180862c984b29557ef3f8bbee5528d9a7f7116ac03272f63aade66ae->leave($__internal_d4acbe89180862c984b29557ef3f8bbee5528d9a7f7116ac03272f63aade66ae_prof);

        
        $__internal_49f8e49100963a45d91fe224ea9d9f24eca16ade59d797b1bb976653a9503b3f->leave($__internal_49f8e49100963a45d91fe224ea9d9f24eca16ade59d797b1bb976653a9503b3f_prof);

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
