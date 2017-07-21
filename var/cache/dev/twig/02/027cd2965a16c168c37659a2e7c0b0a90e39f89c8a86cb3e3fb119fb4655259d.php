<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_65b0bf2c49e268c7d26f31dd8017b95702475dd50002c89d66863729a228a54e extends Twig_Template
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
        $__internal_a1326f392359f3a3daaa00e131be204ba20a75f3ee11140aeac0abd71bad2571 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1326f392359f3a3daaa00e131be204ba20a75f3ee11140aeac0abd71bad2571->enter($__internal_a1326f392359f3a3daaa00e131be204ba20a75f3ee11140aeac0abd71bad2571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3747741474b4eea3eb88a0ad38b034caec66beb4ba7d54276871ec88abe90248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3747741474b4eea3eb88a0ad38b034caec66beb4ba7d54276871ec88abe90248->enter($__internal_3747741474b4eea3eb88a0ad38b034caec66beb4ba7d54276871ec88abe90248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1326f392359f3a3daaa00e131be204ba20a75f3ee11140aeac0abd71bad2571->leave($__internal_a1326f392359f3a3daaa00e131be204ba20a75f3ee11140aeac0abd71bad2571_prof);

        
        $__internal_3747741474b4eea3eb88a0ad38b034caec66beb4ba7d54276871ec88abe90248->leave($__internal_3747741474b4eea3eb88a0ad38b034caec66beb4ba7d54276871ec88abe90248_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_59b1bec1617e6eccbd4e03f0b78050ac212d47fdb27215479b5a874e80742f38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59b1bec1617e6eccbd4e03f0b78050ac212d47fdb27215479b5a874e80742f38->enter($__internal_59b1bec1617e6eccbd4e03f0b78050ac212d47fdb27215479b5a874e80742f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f1b465b1653ee4d5eba0c13892c697a8bbc010e9522c284ebb9c3b802acdf81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f1b465b1653ee4d5eba0c13892c697a8bbc010e9522c284ebb9c3b802acdf81->enter($__internal_6f1b465b1653ee4d5eba0c13892c697a8bbc010e9522c284ebb9c3b802acdf81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6f1b465b1653ee4d5eba0c13892c697a8bbc010e9522c284ebb9c3b802acdf81->leave($__internal_6f1b465b1653ee4d5eba0c13892c697a8bbc010e9522c284ebb9c3b802acdf81_prof);

        
        $__internal_59b1bec1617e6eccbd4e03f0b78050ac212d47fdb27215479b5a874e80742f38->leave($__internal_59b1bec1617e6eccbd4e03f0b78050ac212d47fdb27215479b5a874e80742f38_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eb5b0db195643f1a994288ee3420e09ede95309a574d1aacc681989c86cbad53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb5b0db195643f1a994288ee3420e09ede95309a574d1aacc681989c86cbad53->enter($__internal_eb5b0db195643f1a994288ee3420e09ede95309a574d1aacc681989c86cbad53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f5711ef040d5788b325ce516c6ee76a7fda83bca862ca1816a48b7339002e0b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5711ef040d5788b325ce516c6ee76a7fda83bca862ca1816a48b7339002e0b8->enter($__internal_f5711ef040d5788b325ce516c6ee76a7fda83bca862ca1816a48b7339002e0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f5711ef040d5788b325ce516c6ee76a7fda83bca862ca1816a48b7339002e0b8->leave($__internal_f5711ef040d5788b325ce516c6ee76a7fda83bca862ca1816a48b7339002e0b8_prof);

        
        $__internal_eb5b0db195643f1a994288ee3420e09ede95309a574d1aacc681989c86cbad53->leave($__internal_eb5b0db195643f1a994288ee3420e09ede95309a574d1aacc681989c86cbad53_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2923f2c5c37b668a4d816a8bfdc91e0b1a9afc6897568a4363e8613324c11b36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2923f2c5c37b668a4d816a8bfdc91e0b1a9afc6897568a4363e8613324c11b36->enter($__internal_2923f2c5c37b668a4d816a8bfdc91e0b1a9afc6897568a4363e8613324c11b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c819330d5e7b8ebf1d1f98e4e310a7b898e0f1fccd17da11cd395b9ac1495478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c819330d5e7b8ebf1d1f98e4e310a7b898e0f1fccd17da11cd395b9ac1495478->enter($__internal_c819330d5e7b8ebf1d1f98e4e310a7b898e0f1fccd17da11cd395b9ac1495478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c819330d5e7b8ebf1d1f98e4e310a7b898e0f1fccd17da11cd395b9ac1495478->leave($__internal_c819330d5e7b8ebf1d1f98e4e310a7b898e0f1fccd17da11cd395b9ac1495478_prof);

        
        $__internal_2923f2c5c37b668a4d816a8bfdc91e0b1a9afc6897568a4363e8613324c11b36->leave($__internal_2923f2c5c37b668a4d816a8bfdc91e0b1a9afc6897568a4363e8613324c11b36_prof);

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
