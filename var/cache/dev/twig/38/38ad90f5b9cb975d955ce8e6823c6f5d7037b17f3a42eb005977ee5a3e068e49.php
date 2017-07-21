<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_69bb9c019c1e18ee977ed009a73d7cc82ed4031c14753f5f4fe943c1a81709e9 extends Twig_Template
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
        $__internal_1fe544d1a5b74d7120d895232854aa39f91de82026c00b4bacb377d4de112a2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fe544d1a5b74d7120d895232854aa39f91de82026c00b4bacb377d4de112a2a->enter($__internal_1fe544d1a5b74d7120d895232854aa39f91de82026c00b4bacb377d4de112a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_5cfb28838744b887bc36d77a9a1723b706469ab4c12c6d972d3339dd3b421924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cfb28838744b887bc36d77a9a1723b706469ab4c12c6d972d3339dd3b421924->enter($__internal_5cfb28838744b887bc36d77a9a1723b706469ab4c12c6d972d3339dd3b421924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fe544d1a5b74d7120d895232854aa39f91de82026c00b4bacb377d4de112a2a->leave($__internal_1fe544d1a5b74d7120d895232854aa39f91de82026c00b4bacb377d4de112a2a_prof);

        
        $__internal_5cfb28838744b887bc36d77a9a1723b706469ab4c12c6d972d3339dd3b421924->leave($__internal_5cfb28838744b887bc36d77a9a1723b706469ab4c12c6d972d3339dd3b421924_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b90b5e47abe36ff51abf8cf5627e5619e67099dc37fa39d03ab1dd948d2fc709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b90b5e47abe36ff51abf8cf5627e5619e67099dc37fa39d03ab1dd948d2fc709->enter($__internal_b90b5e47abe36ff51abf8cf5627e5619e67099dc37fa39d03ab1dd948d2fc709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1074dae6a35d605d5daf002e0b338541cca9f89c250d07d2aae86d14ccd447ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1074dae6a35d605d5daf002e0b338541cca9f89c250d07d2aae86d14ccd447ab->enter($__internal_1074dae6a35d605d5daf002e0b338541cca9f89c250d07d2aae86d14ccd447ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_1074dae6a35d605d5daf002e0b338541cca9f89c250d07d2aae86d14ccd447ab->leave($__internal_1074dae6a35d605d5daf002e0b338541cca9f89c250d07d2aae86d14ccd447ab_prof);

        
        $__internal_b90b5e47abe36ff51abf8cf5627e5619e67099dc37fa39d03ab1dd948d2fc709->leave($__internal_b90b5e47abe36ff51abf8cf5627e5619e67099dc37fa39d03ab1dd948d2fc709_prof);

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
