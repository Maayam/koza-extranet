<?php

/* admin/new_media.html.twig */
class __TwigTemplate_b0b241e1493e5eec8e97668984eb94dfee6842ce938e961fc0389b29b7ebb004 extends Twig_Template
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
        $__internal_850facecbd6a689b7457b6b500ca645f6b82608a9ac60296f7e5ce50e9f5dd41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_850facecbd6a689b7457b6b500ca645f6b82608a9ac60296f7e5ce50e9f5dd41->enter($__internal_850facecbd6a689b7457b6b500ca645f6b82608a9ac60296f7e5ce50e9f5dd41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/new_media.html.twig"));

        $__internal_49df2a24606847fd7ec57e647e9341566ca2e66c718e344a78f0f760dc4d836c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49df2a24606847fd7ec57e647e9341566ca2e66c718e344a78f0f760dc4d836c->enter($__internal_49df2a24606847fd7ec57e647e9341566ca2e66c718e344a78f0f760dc4d836c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/new_media.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_850facecbd6a689b7457b6b500ca645f6b82608a9ac60296f7e5ce50e9f5dd41->leave($__internal_850facecbd6a689b7457b6b500ca645f6b82608a9ac60296f7e5ce50e9f5dd41_prof);

        
        $__internal_49df2a24606847fd7ec57e647e9341566ca2e66c718e344a78f0f760dc4d836c->leave($__internal_49df2a24606847fd7ec57e647e9341566ca2e66c718e344a78f0f760dc4d836c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8262108df91addb9460c4f7bc9fab980a933f2771586885e383307caf9e2b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8262108df91addb9460c4f7bc9fab980a933f2771586885e383307caf9e2b80->enter($__internal_a8262108df91addb9460c4f7bc9fab980a933f2771586885e383307caf9e2b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f44310abdb6b287dacfe03012d8c0863bcec26acc3865011fa54d98a5705ccc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f44310abdb6b287dacfe03012d8c0863bcec26acc3865011fa54d98a5705ccc0->enter($__internal_f44310abdb6b287dacfe03012d8c0863bcec26acc3865011fa54d98a5705ccc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f44310abdb6b287dacfe03012d8c0863bcec26acc3865011fa54d98a5705ccc0->leave($__internal_f44310abdb6b287dacfe03012d8c0863bcec26acc3865011fa54d98a5705ccc0_prof);

        
        $__internal_a8262108df91addb9460c4f7bc9fab980a933f2771586885e383307caf9e2b80->leave($__internal_a8262108df91addb9460c4f7bc9fab980a933f2771586885e383307caf9e2b80_prof);

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
        return array (  78 => 13,  72 => 11,  69 => 10,  60 => 8,  55 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
