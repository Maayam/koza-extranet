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
        $__internal_32a903957c4b2d73e3e1cee9bfa8b97945485094a0ea5ef82ec10b7118e86f6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32a903957c4b2d73e3e1cee9bfa8b97945485094a0ea5ef82ec10b7118e86f6c->enter($__internal_32a903957c4b2d73e3e1cee9bfa8b97945485094a0ea5ef82ec10b7118e86f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_eea376b2572cf845aa33d268b53c5314c1898084acc363a4639f79da4f4ddb58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea376b2572cf845aa33d268b53c5314c1898084acc363a4639f79da4f4ddb58->enter($__internal_eea376b2572cf845aa33d268b53c5314c1898084acc363a4639f79da4f4ddb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32a903957c4b2d73e3e1cee9bfa8b97945485094a0ea5ef82ec10b7118e86f6c->leave($__internal_32a903957c4b2d73e3e1cee9bfa8b97945485094a0ea5ef82ec10b7118e86f6c_prof);

        
        $__internal_eea376b2572cf845aa33d268b53c5314c1898084acc363a4639f79da4f4ddb58->leave($__internal_eea376b2572cf845aa33d268b53c5314c1898084acc363a4639f79da4f4ddb58_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a6e6691f37cf5b62591b55c7375e3ce11df38e62f808dce9db80b2e16777d61f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6e6691f37cf5b62591b55c7375e3ce11df38e62f808dce9db80b2e16777d61f->enter($__internal_a6e6691f37cf5b62591b55c7375e3ce11df38e62f808dce9db80b2e16777d61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3d508d775022b2c82854d16a1876fda00b8c6a2c4350bc770d4b80a43cddc791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d508d775022b2c82854d16a1876fda00b8c6a2c4350bc770d4b80a43cddc791->enter($__internal_3d508d775022b2c82854d16a1876fda00b8c6a2c4350bc770d4b80a43cddc791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3d508d775022b2c82854d16a1876fda00b8c6a2c4350bc770d4b80a43cddc791->leave($__internal_3d508d775022b2c82854d16a1876fda00b8c6a2c4350bc770d4b80a43cddc791_prof);

        
        $__internal_a6e6691f37cf5b62591b55c7375e3ce11df38e62f808dce9db80b2e16777d61f->leave($__internal_a6e6691f37cf5b62591b55c7375e3ce11df38e62f808dce9db80b2e16777d61f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e80aa23596b50865fc4a4db9e3516755b1b8ae2879430793a6b8af101774100d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e80aa23596b50865fc4a4db9e3516755b1b8ae2879430793a6b8af101774100d->enter($__internal_e80aa23596b50865fc4a4db9e3516755b1b8ae2879430793a6b8af101774100d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_18a165f321d4e39401be717a1630ada053237b1f67e0ce383f0cedec5d9279ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a165f321d4e39401be717a1630ada053237b1f67e0ce383f0cedec5d9279ec->enter($__internal_18a165f321d4e39401be717a1630ada053237b1f67e0ce383f0cedec5d9279ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_18a165f321d4e39401be717a1630ada053237b1f67e0ce383f0cedec5d9279ec->leave($__internal_18a165f321d4e39401be717a1630ada053237b1f67e0ce383f0cedec5d9279ec_prof);

        
        $__internal_e80aa23596b50865fc4a4db9e3516755b1b8ae2879430793a6b8af101774100d->leave($__internal_e80aa23596b50865fc4a4db9e3516755b1b8ae2879430793a6b8af101774100d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3fb20043be3053040047c5b80e76d8ff3eaea42d06bc83907e154e59a9bcb958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fb20043be3053040047c5b80e76d8ff3eaea42d06bc83907e154e59a9bcb958->enter($__internal_3fb20043be3053040047c5b80e76d8ff3eaea42d06bc83907e154e59a9bcb958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_58f90ad4ee578db64f7d1c9c9d346f18ac27a45c89a532dd62ab408d73a366b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58f90ad4ee578db64f7d1c9c9d346f18ac27a45c89a532dd62ab408d73a366b6->enter($__internal_58f90ad4ee578db64f7d1c9c9d346f18ac27a45c89a532dd62ab408d73a366b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_58f90ad4ee578db64f7d1c9c9d346f18ac27a45c89a532dd62ab408d73a366b6->leave($__internal_58f90ad4ee578db64f7d1c9c9d346f18ac27a45c89a532dd62ab408d73a366b6_prof);

        
        $__internal_3fb20043be3053040047c5b80e76d8ff3eaea42d06bc83907e154e59a9bcb958->leave($__internal_3fb20043be3053040047c5b80e76d8ff3eaea42d06bc83907e154e59a9bcb958_prof);

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
