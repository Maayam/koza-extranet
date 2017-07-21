<?php

/* admin/new_client.html.twig */
class __TwigTemplate_0ce866f11e65df8fc25b2910d0e623b8a5a27b568b308a2c125d842db084e69e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/new_client.html.twig", 1);
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
        $__internal_80f1e2e6e68e1bb2dd8042a8c8c8452bc2163b83519a99eb770766a93b02c60c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80f1e2e6e68e1bb2dd8042a8c8c8452bc2163b83519a99eb770766a93b02c60c->enter($__internal_80f1e2e6e68e1bb2dd8042a8c8c8452bc2163b83519a99eb770766a93b02c60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/new_client.html.twig"));

        $__internal_893378dc01404f787754383156c39bff6b6804d4d2d32229d4b73960e8aa1df6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_893378dc01404f787754383156c39bff6b6804d4d2d32229d4b73960e8aa1df6->enter($__internal_893378dc01404f787754383156c39bff6b6804d4d2d32229d4b73960e8aa1df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/new_client.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80f1e2e6e68e1bb2dd8042a8c8c8452bc2163b83519a99eb770766a93b02c60c->leave($__internal_80f1e2e6e68e1bb2dd8042a8c8c8452bc2163b83519a99eb770766a93b02c60c_prof);

        
        $__internal_893378dc01404f787754383156c39bff6b6804d4d2d32229d4b73960e8aa1df6->leave($__internal_893378dc01404f787754383156c39bff6b6804d4d2d32229d4b73960e8aa1df6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1030d29a1f3a8b05251ae4f95a4da1913f76667ee30d2e71e139c12616edeb60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1030d29a1f3a8b05251ae4f95a4da1913f76667ee30d2e71e139c12616edeb60->enter($__internal_1030d29a1f3a8b05251ae4f95a4da1913f76667ee30d2e71e139c12616edeb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b8aae0ab6a5128bc3313c2a5e7752c2bc4a200f50ea3a1d5fe4a60a5ca839046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8aae0ab6a5128bc3313c2a5e7752c2bc4a200f50ea3a1d5fe4a60a5ca839046->enter($__internal_b8aae0ab6a5128bc3313c2a5e7752c2bc4a200f50ea3a1d5fe4a60a5ca839046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section class=\"popup\">
    <h1>Nouveau client</h1>
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
        
        $__internal_b8aae0ab6a5128bc3313c2a5e7752c2bc4a200f50ea3a1d5fe4a60a5ca839046->leave($__internal_b8aae0ab6a5128bc3313c2a5e7752c2bc4a200f50ea3a1d5fe4a60a5ca839046_prof);

        
        $__internal_1030d29a1f3a8b05251ae4f95a4da1913f76667ee30d2e71e139c12616edeb60->leave($__internal_1030d29a1f3a8b05251ae4f95a4da1913f76667ee30d2e71e139c12616edeb60_prof);

    }

    public function getTemplateName()
    {
        return "admin/new_client.html.twig";
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
    <h1>Nouveau client</h1>
    {% if errors is defined %}
        {% for error in errors %}
        {{ error }}
        {% endfor %}
    {% endif %}
    {{ form_start(form) }}
    {{ form_end(form) }}
</section>
{% endblock %}
", "admin/new_client.html.twig", "/home/ubuntu/workspace/app/Resources/views/admin/new_client.html.twig");
    }
}
