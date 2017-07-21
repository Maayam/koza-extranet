<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_09a4032973f8cc4f1c86fa4e79b429fc42c726d6c905186ea2a27c83f32cef1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_30845a956e6303f5d181477fcc1a6108de48b472296b5162638560323c76d12b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30845a956e6303f5d181477fcc1a6108de48b472296b5162638560323c76d12b->enter($__internal_30845a956e6303f5d181477fcc1a6108de48b472296b5162638560323c76d12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_121169c94fd91fecaf3cfd21cec851b6b29b307740cb8a9968e0504533c6ba40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_121169c94fd91fecaf3cfd21cec851b6b29b307740cb8a9968e0504533c6ba40->enter($__internal_121169c94fd91fecaf3cfd21cec851b6b29b307740cb8a9968e0504533c6ba40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30845a956e6303f5d181477fcc1a6108de48b472296b5162638560323c76d12b->leave($__internal_30845a956e6303f5d181477fcc1a6108de48b472296b5162638560323c76d12b_prof);

        
        $__internal_121169c94fd91fecaf3cfd21cec851b6b29b307740cb8a9968e0504533c6ba40->leave($__internal_121169c94fd91fecaf3cfd21cec851b6b29b307740cb8a9968e0504533c6ba40_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_75da5a2943b2766debd555047b7e30e86d103ef4771fadbe7b289092bd7cf0d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75da5a2943b2766debd555047b7e30e86d103ef4771fadbe7b289092bd7cf0d3->enter($__internal_75da5a2943b2766debd555047b7e30e86d103ef4771fadbe7b289092bd7cf0d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a3ffacb8b33fd836161ce287ce4ebeb2dd3e0bcf6a5db583bb2b3af196916b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ffacb8b33fd836161ce287ce4ebeb2dd3e0bcf6a5db583bb2b3af196916b19->enter($__internal_a3ffacb8b33fd836161ce287ce4ebeb2dd3e0bcf6a5db583bb2b3af196916b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a3ffacb8b33fd836161ce287ce4ebeb2dd3e0bcf6a5db583bb2b3af196916b19->leave($__internal_a3ffacb8b33fd836161ce287ce4ebeb2dd3e0bcf6a5db583bb2b3af196916b19_prof);

        
        $__internal_75da5a2943b2766debd555047b7e30e86d103ef4771fadbe7b289092bd7cf0d3->leave($__internal_75da5a2943b2766debd555047b7e30e86d103ef4771fadbe7b289092bd7cf0d3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eaf3904fc3254c79b95a0fcd0bf21f94d99ce48c5f831dcfc7ce60a84887cb3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaf3904fc3254c79b95a0fcd0bf21f94d99ce48c5f831dcfc7ce60a84887cb3b->enter($__internal_eaf3904fc3254c79b95a0fcd0bf21f94d99ce48c5f831dcfc7ce60a84887cb3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b060256aa2e875a13e093b91b2dcb0cbfc2577eaf5a2fd323301efc9002cc5c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b060256aa2e875a13e093b91b2dcb0cbfc2577eaf5a2fd323301efc9002cc5c7->enter($__internal_b060256aa2e875a13e093b91b2dcb0cbfc2577eaf5a2fd323301efc9002cc5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b060256aa2e875a13e093b91b2dcb0cbfc2577eaf5a2fd323301efc9002cc5c7->leave($__internal_b060256aa2e875a13e093b91b2dcb0cbfc2577eaf5a2fd323301efc9002cc5c7_prof);

        
        $__internal_eaf3904fc3254c79b95a0fcd0bf21f94d99ce48c5f831dcfc7ce60a84887cb3b->leave($__internal_eaf3904fc3254c79b95a0fcd0bf21f94d99ce48c5f831dcfc7ce60a84887cb3b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f416d2793e491620965ca1f7a981d218e4c9b73619110894fa81bfd90902e272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f416d2793e491620965ca1f7a981d218e4c9b73619110894fa81bfd90902e272->enter($__internal_f416d2793e491620965ca1f7a981d218e4c9b73619110894fa81bfd90902e272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_73f8d258845a1ce8c2c69853750635b8901ce257829433347fc480e10628a6e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73f8d258845a1ce8c2c69853750635b8901ce257829433347fc480e10628a6e6->enter($__internal_73f8d258845a1ce8c2c69853750635b8901ce257829433347fc480e10628a6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_73f8d258845a1ce8c2c69853750635b8901ce257829433347fc480e10628a6e6->leave($__internal_73f8d258845a1ce8c2c69853750635b8901ce257829433347fc480e10628a6e6_prof);

        
        $__internal_f416d2793e491620965ca1f7a981d218e4c9b73619110894fa81bfd90902e272->leave($__internal_f416d2793e491620965ca1f7a981d218e4c9b73619110894fa81bfd90902e272_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
