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
        $__internal_7e25998788d03d20ac71c93d34a3d40d91f6cdc453929d1c91a39e018877553f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e25998788d03d20ac71c93d34a3d40d91f6cdc453929d1c91a39e018877553f->enter($__internal_7e25998788d03d20ac71c93d34a3d40d91f6cdc453929d1c91a39e018877553f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f86b756f9699502b71f96bab5abd669c24e38a79cc1520bc2012e53ca0cda997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f86b756f9699502b71f96bab5abd669c24e38a79cc1520bc2012e53ca0cda997->enter($__internal_f86b756f9699502b71f96bab5abd669c24e38a79cc1520bc2012e53ca0cda997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e25998788d03d20ac71c93d34a3d40d91f6cdc453929d1c91a39e018877553f->leave($__internal_7e25998788d03d20ac71c93d34a3d40d91f6cdc453929d1c91a39e018877553f_prof);

        
        $__internal_f86b756f9699502b71f96bab5abd669c24e38a79cc1520bc2012e53ca0cda997->leave($__internal_f86b756f9699502b71f96bab5abd669c24e38a79cc1520bc2012e53ca0cda997_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1e9a5158a89ae66cb287c649906b0c7c057ee8f276998bca25dda668b7013a80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e9a5158a89ae66cb287c649906b0c7c057ee8f276998bca25dda668b7013a80->enter($__internal_1e9a5158a89ae66cb287c649906b0c7c057ee8f276998bca25dda668b7013a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_784f4084b42c5cdf088071ac6b0271a561aec4650acc49c350bbb1071e0d398d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_784f4084b42c5cdf088071ac6b0271a561aec4650acc49c350bbb1071e0d398d->enter($__internal_784f4084b42c5cdf088071ac6b0271a561aec4650acc49c350bbb1071e0d398d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_784f4084b42c5cdf088071ac6b0271a561aec4650acc49c350bbb1071e0d398d->leave($__internal_784f4084b42c5cdf088071ac6b0271a561aec4650acc49c350bbb1071e0d398d_prof);

        
        $__internal_1e9a5158a89ae66cb287c649906b0c7c057ee8f276998bca25dda668b7013a80->leave($__internal_1e9a5158a89ae66cb287c649906b0c7c057ee8f276998bca25dda668b7013a80_prof);

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
