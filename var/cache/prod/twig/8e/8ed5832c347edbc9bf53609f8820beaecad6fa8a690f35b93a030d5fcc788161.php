<?php

/* admin/new_media.html.twig */
class __TwigTemplate_aa445f82793d80d1eb4f018dda0e44f799be6e896d22e3dabf136e51d01ad257 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/new_media.html.twig", 1);
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
        $__internal_b5bd2a1aca2c768f7b08da6e303f86d30ced27e2498f04443ec94661d5923342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5bd2a1aca2c768f7b08da6e303f86d30ced27e2498f04443ec94661d5923342->enter($__internal_b5bd2a1aca2c768f7b08da6e303f86d30ced27e2498f04443ec94661d5923342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/new_media.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5bd2a1aca2c768f7b08da6e303f86d30ced27e2498f04443ec94661d5923342->leave($__internal_b5bd2a1aca2c768f7b08da6e303f86d30ced27e2498f04443ec94661d5923342_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_25812719b43dd8068fe085c96e761bb32b4dd793037424ad6af5558055e196c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25812719b43dd8068fe085c96e761bb32b4dd793037424ad6af5558055e196c6->enter($__internal_25812719b43dd8068fe085c96e761bb32b4dd793037424ad6af5558055e196c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section class=\"popup\">
    <h1>Nouveau document</h1>
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
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</section>
";
        
        $__internal_25812719b43dd8068fe085c96e761bb32b4dd793037424ad6af5558055e196c6->leave($__internal_25812719b43dd8068fe085c96e761bb32b4dd793037424ad6af5558055e196c6_prof);

    }

    public function getTemplateName()
    {
        return "admin/new_media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  63 => 11,  60 => 10,  51 => 8,  46 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Nouveau document</h1>
    {% if errors is defined %}
        {% for error in errors %}
        {{ error }}
        {% endfor %}
    {% endif %}
    {{ form_start(form) }}
    
    {{ form_end(form) }}
</section>
{% endblock %}
", "admin/new_media.html.twig", "/home/ubuntu/workspace/app/Resources/views/admin/new_media.html.twig");
    }
}
