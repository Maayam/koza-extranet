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
        $__internal_60d5c8b4270944f032477db7498cdf7e2b20371062864a8dbf5d945f3a7c033d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60d5c8b4270944f032477db7498cdf7e2b20371062864a8dbf5d945f3a7c033d->enter($__internal_60d5c8b4270944f032477db7498cdf7e2b20371062864a8dbf5d945f3a7c033d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4b88cae53f6ed369817c6f1b9bbd0a94ae44d771cf18560289c75d52bbdd4cf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b88cae53f6ed369817c6f1b9bbd0a94ae44d771cf18560289c75d52bbdd4cf1->enter($__internal_4b88cae53f6ed369817c6f1b9bbd0a94ae44d771cf18560289c75d52bbdd4cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60d5c8b4270944f032477db7498cdf7e2b20371062864a8dbf5d945f3a7c033d->leave($__internal_60d5c8b4270944f032477db7498cdf7e2b20371062864a8dbf5d945f3a7c033d_prof);

        
        $__internal_4b88cae53f6ed369817c6f1b9bbd0a94ae44d771cf18560289c75d52bbdd4cf1->leave($__internal_4b88cae53f6ed369817c6f1b9bbd0a94ae44d771cf18560289c75d52bbdd4cf1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_95727002fc7c518945f93c2792e9a13b8e386a7c0733a4218aeae93ffd6efcdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95727002fc7c518945f93c2792e9a13b8e386a7c0733a4218aeae93ffd6efcdc->enter($__internal_95727002fc7c518945f93c2792e9a13b8e386a7c0733a4218aeae93ffd6efcdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fc2e62261d4995b2e564e113037f5aa9eaabf640373c1a2ea5fd6b3a9bc2504a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc2e62261d4995b2e564e113037f5aa9eaabf640373c1a2ea5fd6b3a9bc2504a->enter($__internal_fc2e62261d4995b2e564e113037f5aa9eaabf640373c1a2ea5fd6b3a9bc2504a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fc2e62261d4995b2e564e113037f5aa9eaabf640373c1a2ea5fd6b3a9bc2504a->leave($__internal_fc2e62261d4995b2e564e113037f5aa9eaabf640373c1a2ea5fd6b3a9bc2504a_prof);

        
        $__internal_95727002fc7c518945f93c2792e9a13b8e386a7c0733a4218aeae93ffd6efcdc->leave($__internal_95727002fc7c518945f93c2792e9a13b8e386a7c0733a4218aeae93ffd6efcdc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_82d839c07578140511be0092cbef849d4695d1eb3e816d3bdf6a1c6f6eef1bc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82d839c07578140511be0092cbef849d4695d1eb3e816d3bdf6a1c6f6eef1bc8->enter($__internal_82d839c07578140511be0092cbef849d4695d1eb3e816d3bdf6a1c6f6eef1bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b5b3ae405c17e9b9bf595edfcf2b73dcf59646478be0b2d8533e1a1bb6647867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b3ae405c17e9b9bf595edfcf2b73dcf59646478be0b2d8533e1a1bb6647867->enter($__internal_b5b3ae405c17e9b9bf595edfcf2b73dcf59646478be0b2d8533e1a1bb6647867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b5b3ae405c17e9b9bf595edfcf2b73dcf59646478be0b2d8533e1a1bb6647867->leave($__internal_b5b3ae405c17e9b9bf595edfcf2b73dcf59646478be0b2d8533e1a1bb6647867_prof);

        
        $__internal_82d839c07578140511be0092cbef849d4695d1eb3e816d3bdf6a1c6f6eef1bc8->leave($__internal_82d839c07578140511be0092cbef849d4695d1eb3e816d3bdf6a1c6f6eef1bc8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3f2c5d1186a625b4d491c06c7d26c8aee98ec19e6be1bed25432003a256c9145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f2c5d1186a625b4d491c06c7d26c8aee98ec19e6be1bed25432003a256c9145->enter($__internal_3f2c5d1186a625b4d491c06c7d26c8aee98ec19e6be1bed25432003a256c9145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4a93c36a1b41918bc828a3509808bab51f7b00777e809781fdb4070ac1ecf3ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a93c36a1b41918bc828a3509808bab51f7b00777e809781fdb4070ac1ecf3ae->enter($__internal_4a93c36a1b41918bc828a3509808bab51f7b00777e809781fdb4070ac1ecf3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4a93c36a1b41918bc828a3509808bab51f7b00777e809781fdb4070ac1ecf3ae->leave($__internal_4a93c36a1b41918bc828a3509808bab51f7b00777e809781fdb4070ac1ecf3ae_prof);

        
        $__internal_3f2c5d1186a625b4d491c06c7d26c8aee98ec19e6be1bed25432003a256c9145->leave($__internal_3f2c5d1186a625b4d491c06c7d26c8aee98ec19e6be1bed25432003a256c9145_prof);

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
