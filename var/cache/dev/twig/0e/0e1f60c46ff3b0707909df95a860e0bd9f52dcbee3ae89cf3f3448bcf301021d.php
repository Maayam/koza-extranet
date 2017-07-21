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
        $__internal_24289a63ee085540e752e22a1e05a4e83d66e791cfd24a6f8567f2714050069c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24289a63ee085540e752e22a1e05a4e83d66e791cfd24a6f8567f2714050069c->enter($__internal_24289a63ee085540e752e22a1e05a4e83d66e791cfd24a6f8567f2714050069c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/new_media.html.twig"));

        $__internal_3045a48b35a2ad5393d44d8a6e6f11626b88f61726d0975e63b5ddcd7f711a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3045a48b35a2ad5393d44d8a6e6f11626b88f61726d0975e63b5ddcd7f711a2b->enter($__internal_3045a48b35a2ad5393d44d8a6e6f11626b88f61726d0975e63b5ddcd7f711a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/new_media.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24289a63ee085540e752e22a1e05a4e83d66e791cfd24a6f8567f2714050069c->leave($__internal_24289a63ee085540e752e22a1e05a4e83d66e791cfd24a6f8567f2714050069c_prof);

        
        $__internal_3045a48b35a2ad5393d44d8a6e6f11626b88f61726d0975e63b5ddcd7f711a2b->leave($__internal_3045a48b35a2ad5393d44d8a6e6f11626b88f61726d0975e63b5ddcd7f711a2b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf8f948c43798822da4914e3b35c2ce0c14ec4f0f5a4638232d67f2047b83e88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf8f948c43798822da4914e3b35c2ce0c14ec4f0f5a4638232d67f2047b83e88->enter($__internal_cf8f948c43798822da4914e3b35c2ce0c14ec4f0f5a4638232d67f2047b83e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8108eeede8286bbe6b3b08c4639fcfeaa08c1b84a34bcd1764bf11240c845f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8108eeede8286bbe6b3b08c4639fcfeaa08c1b84a34bcd1764bf11240c845f13->enter($__internal_8108eeede8286bbe6b3b08c4639fcfeaa08c1b84a34bcd1764bf11240c845f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8108eeede8286bbe6b3b08c4639fcfeaa08c1b84a34bcd1764bf11240c845f13->leave($__internal_8108eeede8286bbe6b3b08c4639fcfeaa08c1b84a34bcd1764bf11240c845f13_prof);

        
        $__internal_cf8f948c43798822da4914e3b35c2ce0c14ec4f0f5a4638232d67f2047b83e88->leave($__internal_cf8f948c43798822da4914e3b35c2ce0c14ec4f0f5a4638232d67f2047b83e88_prof);

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
