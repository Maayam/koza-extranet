<?php

/* explorer/explorer.html.twig */
class __TwigTemplate_422421452120fc3a6e43bdedc02a4c1bda07d53b750e84ee7439adfdc2b9b2f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "explorer/explorer.html.twig", 1);
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
        $__internal_62c87c5208c657994c5cbb51055efa49448967ab948c0106adf1fcba327186d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62c87c5208c657994c5cbb51055efa49448967ab948c0106adf1fcba327186d0->enter($__internal_62c87c5208c657994c5cbb51055efa49448967ab948c0106adf1fcba327186d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "explorer/explorer.html.twig"));

        $__internal_d7b41f0176a1557332bcc31c94137ac606f46a1fe9d318be6fe0d3ae023ad91f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b41f0176a1557332bcc31c94137ac606f46a1fe9d318be6fe0d3ae023ad91f->enter($__internal_d7b41f0176a1557332bcc31c94137ac606f46a1fe9d318be6fe0d3ae023ad91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "explorer/explorer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62c87c5208c657994c5cbb51055efa49448967ab948c0106adf1fcba327186d0->leave($__internal_62c87c5208c657994c5cbb51055efa49448967ab948c0106adf1fcba327186d0_prof);

        
        $__internal_d7b41f0176a1557332bcc31c94137ac606f46a1fe9d318be6fe0d3ae023ad91f->leave($__internal_d7b41f0176a1557332bcc31c94137ac606f46a1fe9d318be6fe0d3ae023ad91f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_293c39a6cd21dd046fa040628f1365f1b2a37e62ac13e5aefa32d965f9d8951b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_293c39a6cd21dd046fa040628f1365f1b2a37e62ac13e5aefa32d965f9d8951b->enter($__internal_293c39a6cd21dd046fa040628f1365f1b2a37e62ac13e5aefa32d965f9d8951b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d0341b273d0afdadfeedffd5bbb2971505af666ade9a3bba6e1dc011a9a5fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d0341b273d0afdadfeedffd5bbb2971505af666ade9a3bba6e1dc011a9a5fb1->enter($__internal_3d0341b273d0afdadfeedffd5bbb2971505af666ade9a3bba6e1dc011a9a5fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<!-- WORK AREA -->
\t<section id=\"explorer-section\">
\t\t<header>
\t\t\t<div class=\"breadcrumbs-wrapper\">
\t\t\t\t<ul class=\"breadcrumbs\">
\t\t\t\t\t<li class=\"breadcrumb\">
\t\t\t\t\t\t<a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">
\t\t\t\t\t\t\tExtranet
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</header>
\t\t<div id=\"left-pane\">
\t\t\t";
        // line 18
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array") == "ROLE_ADMIN")) {
            // line 19
            echo "\t\t\t<ul id=\"toolbar\">
\t\t\t\t<header>
\t\t\t\t\tAdministration
\t\t\t\t</header>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_user", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\">Modifier mes paramètres</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t";
        }
        // line 28
        echo "\t\t</div>
\t\t<section id=\"right-pane\">
\t\t\t<a class=\"element-link\" href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_user");
        echo "\">
\t\t\t\t<div class=\"element\">
\t\t\t\t\t<div class=\"icon plus\"></div>
\t\t\t\t\t<div class=\"title\">Nouveau client</div>
\t\t\t\t</div>
\t\t\t</a>
\t\t\t";
        // line 36
        if ((twig_length_filter($this->env, (isset($context["users"]) ? $context["users"] : $this->getContext($context, "users"))) > 0)) {
            // line 37
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 38
                echo "\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($context["user"], "roles", array()), 0, array(), "array") != "ROLE_ADMIN")) {
                    // line 39
                    echo "\t\t\t\t<a class=\"element-link\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_user", array("userId" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                    echo "\">
\t\t\t\t\t<div class=\"element\">
\t\t\t\t\t\t<div class=\"icon client\"></div>
\t\t\t\t\t\t";
                    // line 42
                    if (($this->getAttribute($context["user"], "company", array()) != "")) {
                        // line 43
                        echo "\t\t\t\t\t\t<div class=\"title\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "company", array()), "html", null, true);
                        echo "</div>
\t\t\t\t\t\t";
                    } elseif (((($this->getAttribute(                    // line 44
$context["user"], "gender", array()) != "") || ($this->getAttribute($context["user"], "familyName", array()) != "")) || ($this->getAttribute($context["user"], "firstName", array()) != ""))) {
                        // line 45
                        echo "\t\t\t\t\t\t<div class=\"title\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "gender", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "familyName", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
                        echo "</div>
\t\t\t\t\t\t";
                    } else {
                        // line 47
                        echo "\t\t\t\t\t\t<div class=\"title\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                        echo "</div>
\t\t\t\t\t\t";
                    }
                    // line 49
                    echo "\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t";
                }
                // line 52
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "\t\t\t";
        } else {
            // line 54
            echo "\t\t\t\t<p>Aucun client n'a été enregistrée pour le moment...</p>
\t\t\t";
        }
        // line 56
        echo "\t\t</section>
\t</section>
\t<!--
\t<section id=\"form-name\" class=\"popup\">
\t\t<header>Nom du formulaire</header>
\t\t<form>
\t\t\t<input type=\"text\" name=\"gender\" placeholder=\"Civilité\">
\t\t\t<input type=\"text\" name=\"familyName\" placeholder=\"Nom\">
\t\t\t<input type=\"text\" name=\"firstName\" placeholder=\"Prénom\">
\t\t\t<input type=\"submit\" name=\"isSubmited\" value=\"Envoyer\">
\t\t</form>
\t</section>
\t-->
";
        
        $__internal_3d0341b273d0afdadfeedffd5bbb2971505af666ade9a3bba6e1dc011a9a5fb1->leave($__internal_3d0341b273d0afdadfeedffd5bbb2971505af666ade9a3bba6e1dc011a9a5fb1_prof);

        
        $__internal_293c39a6cd21dd046fa040628f1365f1b2a37e62ac13e5aefa32d965f9d8951b->leave($__internal_293c39a6cd21dd046fa040628f1365f1b2a37e62ac13e5aefa32d965f9d8951b_prof);

    }

    public function getTemplateName()
    {
        return "explorer/explorer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 56,  153 => 54,  150 => 53,  144 => 52,  139 => 49,  133 => 47,  123 => 45,  121 => 44,  116 => 43,  114 => 42,  107 => 39,  104 => 38,  99 => 37,  97 => 36,  88 => 30,  84 => 28,  77 => 24,  70 => 19,  68 => 18,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
\t<!-- WORK AREA -->
\t<section id=\"explorer-section\">
\t\t<header>
\t\t\t<div class=\"breadcrumbs-wrapper\">
\t\t\t\t<ul class=\"breadcrumbs\">
\t\t\t\t\t<li class=\"breadcrumb\">
\t\t\t\t\t\t<a href=\"{{path('home')}}\">
\t\t\t\t\t\t\tExtranet
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</header>
\t\t<div id=\"left-pane\">
\t\t\t{% if (app.user.roles[0] == 'ROLE_ADMIN') %}
\t\t\t<ul id=\"toolbar\">
\t\t\t\t<header>
\t\t\t\t\tAdministration
\t\t\t\t</header>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{path('edit_user', {'userId': app.user.id})}}\">Modifier mes paramètres</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t{% endif %}
\t\t</div>
\t\t<section id=\"right-pane\">
\t\t\t<a class=\"element-link\" href=\"{{path('new_user')}}\">
\t\t\t\t<div class=\"element\">
\t\t\t\t\t<div class=\"icon plus\"></div>
\t\t\t\t\t<div class=\"title\">Nouveau client</div>
\t\t\t\t</div>
\t\t\t</a>
\t\t\t{% if users|length > 0 %}
\t\t\t{% for user in users %}
\t\t\t\t{% if(user.roles[0] != 'ROLE_ADMIN') %}
\t\t\t\t<a class=\"element-link\" href=\"{{path('show_user', {'userId': user.id})}}\">
\t\t\t\t\t<div class=\"element\">
\t\t\t\t\t\t<div class=\"icon client\"></div>
\t\t\t\t\t\t{% if(user.company != '') %}
\t\t\t\t\t\t<div class=\"title\">{{user.company}}</div>
\t\t\t\t\t\t{% elseif(user.gender != '' or user.familyName != '' or user.firstName != '') %}
\t\t\t\t\t\t<div class=\"title\">{{user.gender}} {{user.familyName}} {{user.firstName}}</div>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t<div class=\"title\">{{user.username}}</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t{% endif %}
\t\t\t{% endfor %}
\t\t\t{% else %}
\t\t\t\t<p>Aucun client n'a été enregistrée pour le moment...</p>
\t\t\t{% endif %}
\t\t</section>
\t</section>
\t<!--
\t<section id=\"form-name\" class=\"popup\">
\t\t<header>Nom du formulaire</header>
\t\t<form>
\t\t\t<input type=\"text\" name=\"gender\" placeholder=\"Civilité\">
\t\t\t<input type=\"text\" name=\"familyName\" placeholder=\"Nom\">
\t\t\t<input type=\"text\" name=\"firstName\" placeholder=\"Prénom\">
\t\t\t<input type=\"submit\" name=\"isSubmited\" value=\"Envoyer\">
\t\t</form>
\t</section>
\t-->
{% endblock %}
", "explorer/explorer.html.twig", "/home/ubuntu/workspace/app/Resources/views/explorer/explorer.html.twig");
    }
}
