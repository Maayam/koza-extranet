<?php

/* admin/new_mission.html.twig */
class __TwigTemplate_0d1de7e69245d96fd8040539aac395b5b39c3ecef48f6f08c2116eb9a94e4c49 extends Twig_Template
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
        $__internal_e61e2678632db3e80550512bf61614bfa8b689fd3473f9452e86baf630c2f29c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e61e2678632db3e80550512bf61614bfa8b689fd3473f9452e86baf630c2f29c->enter($__internal_e61e2678632db3e80550512bf61614bfa8b689fd3473f9452e86baf630c2f29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/new_mission.html.twig"));

        $__internal_d36f04bf681e939853efcbf563338c099edbb23c5e59efff01fb017555467b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d36f04bf681e939853efcbf563338c099edbb23c5e59efff01fb017555467b86->enter($__internal_d36f04bf681e939853efcbf563338c099edbb23c5e59efff01fb017555467b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/new_mission.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e61e2678632db3e80550512bf61614bfa8b689fd3473f9452e86baf630c2f29c->leave($__internal_e61e2678632db3e80550512bf61614bfa8b689fd3473f9452e86baf630c2f29c_prof);

        
        $__internal_d36f04bf681e939853efcbf563338c099edbb23c5e59efff01fb017555467b86->leave($__internal_d36f04bf681e939853efcbf563338c099edbb23c5e59efff01fb017555467b86_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_528eb32ba615e8b40f7dc8c7800cee1b37b8b727283caf8ec90ee4087867b39c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_528eb32ba615e8b40f7dc8c7800cee1b37b8b727283caf8ec90ee4087867b39c->enter($__internal_528eb32ba615e8b40f7dc8c7800cee1b37b8b727283caf8ec90ee4087867b39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ab8d0f9a459afd1437a463c3536c2eb8364cfbb99c329d6bc32071a0eafabeb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab8d0f9a459afd1437a463c3536c2eb8364cfbb99c329d6bc32071a0eafabeb3->enter($__internal_ab8d0f9a459afd1437a463c3536c2eb8364cfbb99c329d6bc32071a0eafabeb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ab8d0f9a459afd1437a463c3536c2eb8364cfbb99c329d6bc32071a0eafabeb3->leave($__internal_ab8d0f9a459afd1437a463c3536c2eb8364cfbb99c329d6bc32071a0eafabeb3_prof);

        
        $__internal_528eb32ba615e8b40f7dc8c7800cee1b37b8b727283caf8ec90ee4087867b39c->leave($__internal_528eb32ba615e8b40f7dc8c7800cee1b37b8b727283caf8ec90ee4087867b39c_prof);

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
