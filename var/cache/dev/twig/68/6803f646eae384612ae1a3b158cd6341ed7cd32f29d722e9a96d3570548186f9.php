<?php

/* admin/new_mission.html.twig */
class __TwigTemplate_c2650300974537bd3e1280ba861f10dcd0b181bea72330edeea77956292d3852 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/new_mission.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f90bf3164dec030b5c43119d038e8e2396d4eb386f175ec00bf0a997d4d7c03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f90bf3164dec030b5c43119d038e8e2396d4eb386f175ec00bf0a997d4d7c03->enter($__internal_9f90bf3164dec030b5c43119d038e8e2396d4eb386f175ec00bf0a997d4d7c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/new_mission.html.twig"));

        $__internal_5ea1b36cc160bb0962a3bc92dad093442893ea4e1d9515363d039b521374a8e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ea1b36cc160bb0962a3bc92dad093442893ea4e1d9515363d039b521374a8e9->enter($__internal_5ea1b36cc160bb0962a3bc92dad093442893ea4e1d9515363d039b521374a8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/new_mission.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f90bf3164dec030b5c43119d038e8e2396d4eb386f175ec00bf0a997d4d7c03->leave($__internal_9f90bf3164dec030b5c43119d038e8e2396d4eb386f175ec00bf0a997d4d7c03_prof);

        
        $__internal_5ea1b36cc160bb0962a3bc92dad093442893ea4e1d9515363d039b521374a8e9->leave($__internal_5ea1b36cc160bb0962a3bc92dad093442893ea4e1d9515363d039b521374a8e9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_de500bf3deac968f5aa7116b83454eb982203eb5dfedd345aa0d44da3974c362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de500bf3deac968f5aa7116b83454eb982203eb5dfedd345aa0d44da3974c362->enter($__internal_de500bf3deac968f5aa7116b83454eb982203eb5dfedd345aa0d44da3974c362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_659023e82bf93bbec551780d46aa5b613af98f262db98293301ee785cb83e349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_659023e82bf93bbec551780d46aa5b613af98f262db98293301ee785cb83e349->enter($__internal_659023e82bf93bbec551780d46aa5b613af98f262db98293301ee785cb83e349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section class=\"popup\">
    <h1>Nouvelle mission</h1>
    ";
        // line 6
        if (array_key_exists("errors", $context)) {
            // line 7
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 8
                echo "        ";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    ";
        }
        // line 11
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</section>
";
        
        $__internal_659023e82bf93bbec551780d46aa5b613af98f262db98293301ee785cb83e349->leave($__internal_659023e82bf93bbec551780d46aa5b613af98f262db98293301ee785cb83e349_prof);

        
        $__internal_de500bf3deac968f5aa7116b83454eb982203eb5dfedd345aa0d44da3974c362->leave($__internal_de500bf3deac968f5aa7116b83454eb982203eb5dfedd345aa0d44da3974c362_prof);

    }

    public function getTemplateName()
    {
        return "admin/new_mission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 12,  72 => 11,  69 => 10,  60 => 8,  55 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<section class=\"popup\">
    <h1>Nouvelle mission</h1>
    {% if errors is defined %}
        {% for error in errors %}
        {{ error }}
        {% endfor %}
    {% endif %}
    {{ form_start(form) }}
    {{ form_end(form) }}
</section>
{% endblock %}
", "admin/new_mission.html.twig", "/home/ubuntu/workspace/app/Resources/views/admin/new_mission.html.twig");
    }
}
