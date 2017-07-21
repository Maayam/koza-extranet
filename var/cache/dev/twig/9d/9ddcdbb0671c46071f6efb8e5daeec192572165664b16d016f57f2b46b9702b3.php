<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c8d21550850074782862265b813a9c2aea7c608253db98e24225c2ea859cc33f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c2aecaa267ecdb2a3bf4daf5cc6395b29898da5089855b65182447bca798387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c2aecaa267ecdb2a3bf4daf5cc6395b29898da5089855b65182447bca798387->enter($__internal_9c2aecaa267ecdb2a3bf4daf5cc6395b29898da5089855b65182447bca798387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1bd00e91a98932e7a78f7f22eddef3bda85a2da5a4d67854c73bba2c3f21b1c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd00e91a98932e7a78f7f22eddef3bda85a2da5a4d67854c73bba2c3f21b1c1->enter($__internal_1bd00e91a98932e7a78f7f22eddef3bda85a2da5a4d67854c73bba2c3f21b1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c2aecaa267ecdb2a3bf4daf5cc6395b29898da5089855b65182447bca798387->leave($__internal_9c2aecaa267ecdb2a3bf4daf5cc6395b29898da5089855b65182447bca798387_prof);

        
        $__internal_1bd00e91a98932e7a78f7f22eddef3bda85a2da5a4d67854c73bba2c3f21b1c1->leave($__internal_1bd00e91a98932e7a78f7f22eddef3bda85a2da5a4d67854c73bba2c3f21b1c1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8fde179ca70ba2b86a8ad30684e80b30d09d57130a917208e2a9a22ec1963d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fde179ca70ba2b86a8ad30684e80b30d09d57130a917208e2a9a22ec1963d44->enter($__internal_8fde179ca70ba2b86a8ad30684e80b30d09d57130a917208e2a9a22ec1963d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3468f4218b70c06612e7c00f34d0462e34627fa9e3dbaa6f29a4691fa5952b2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3468f4218b70c06612e7c00f34d0462e34627fa9e3dbaa6f29a4691fa5952b2a->enter($__internal_3468f4218b70c06612e7c00f34d0462e34627fa9e3dbaa6f29a4691fa5952b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3468f4218b70c06612e7c00f34d0462e34627fa9e3dbaa6f29a4691fa5952b2a->leave($__internal_3468f4218b70c06612e7c00f34d0462e34627fa9e3dbaa6f29a4691fa5952b2a_prof);

        
        $__internal_8fde179ca70ba2b86a8ad30684e80b30d09d57130a917208e2a9a22ec1963d44->leave($__internal_8fde179ca70ba2b86a8ad30684e80b30d09d57130a917208e2a9a22ec1963d44_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f8159c23b3d5912b486df0f730a666107cb0fe63439d0e65a233f4dc74804c4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8159c23b3d5912b486df0f730a666107cb0fe63439d0e65a233f4dc74804c4d->enter($__internal_f8159c23b3d5912b486df0f730a666107cb0fe63439d0e65a233f4dc74804c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5874bee80346280da99ec428430c403fffb5ce2755100c2f9c4cc46c1fe86d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5874bee80346280da99ec428430c403fffb5ce2755100c2f9c4cc46c1fe86d6a->enter($__internal_5874bee80346280da99ec428430c403fffb5ce2755100c2f9c4cc46c1fe86d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5874bee80346280da99ec428430c403fffb5ce2755100c2f9c4cc46c1fe86d6a->leave($__internal_5874bee80346280da99ec428430c403fffb5ce2755100c2f9c4cc46c1fe86d6a_prof);

        
        $__internal_f8159c23b3d5912b486df0f730a666107cb0fe63439d0e65a233f4dc74804c4d->leave($__internal_f8159c23b3d5912b486df0f730a666107cb0fe63439d0e65a233f4dc74804c4d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fe70c52e6ce58606a5b87af5f3e2809d516979f562b3c8cf2918ae2ac7a1f9c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe70c52e6ce58606a5b87af5f3e2809d516979f562b3c8cf2918ae2ac7a1f9c5->enter($__internal_fe70c52e6ce58606a5b87af5f3e2809d516979f562b3c8cf2918ae2ac7a1f9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2d377fa7a846935a8750675f6cff29b7446bb63de491f8e9e19cb005352edb51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d377fa7a846935a8750675f6cff29b7446bb63de491f8e9e19cb005352edb51->enter($__internal_2d377fa7a846935a8750675f6cff29b7446bb63de491f8e9e19cb005352edb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2d377fa7a846935a8750675f6cff29b7446bb63de491f8e9e19cb005352edb51->leave($__internal_2d377fa7a846935a8750675f6cff29b7446bb63de491f8e9e19cb005352edb51_prof);

        
        $__internal_fe70c52e6ce58606a5b87af5f3e2809d516979f562b3c8cf2918ae2ac7a1f9c5->leave($__internal_fe70c52e6ce58606a5b87af5f3e2809d516979f562b3c8cf2918ae2ac7a1f9c5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
