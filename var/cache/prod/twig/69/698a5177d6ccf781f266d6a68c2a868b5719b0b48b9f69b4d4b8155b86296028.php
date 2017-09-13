<?php

/* admin/new_mission.html.twig */
class __TwigTemplate_db483651f035ab779866c3cd76043e19ecdba0c474eb8840f1f54da134956d6f extends Twig_Template
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
        $__internal_74fb681fcca10c3825b47dc2f339ee39732387235ad5ba525a50d990edbaa6c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74fb681fcca10c3825b47dc2f339ee39732387235ad5ba525a50d990edbaa6c1->enter($__internal_74fb681fcca10c3825b47dc2f339ee39732387235ad5ba525a50d990edbaa6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/new_mission.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74fb681fcca10c3825b47dc2f339ee39732387235ad5ba525a50d990edbaa6c1->leave($__internal_74fb681fcca10c3825b47dc2f339ee39732387235ad5ba525a50d990edbaa6c1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a43cbe7a1200f5430611e37b20b8fe7ac956a754ed57e44807d7dc0c8b73f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a43cbe7a1200f5430611e37b20b8fe7ac956a754ed57e44807d7dc0c8b73f40->enter($__internal_7a43cbe7a1200f5430611e37b20b8fe7ac956a754ed57e44807d7dc0c8b73f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7a43cbe7a1200f5430611e37b20b8fe7ac956a754ed57e44807d7dc0c8b73f40->leave($__internal_7a43cbe7a1200f5430611e37b20b8fe7ac956a754ed57e44807d7dc0c8b73f40_prof);

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
        return array (  68 => 12,  63 => 11,  60 => 10,  51 => 8,  46 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
