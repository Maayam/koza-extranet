<?php

/* explorer/user.html.twig */
class __TwigTemplate_cf781db9ac26633689ae7c4ff8c188415f41f797c929befda04969d223817f3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "explorer/user.html.twig", 1);
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
        $__internal_a5a8e6d4e58eee169f4488cf5b875c581cd2dc41fd489fbaa344d18a3f7f448c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5a8e6d4e58eee169f4488cf5b875c581cd2dc41fd489fbaa344d18a3f7f448c->enter($__internal_a5a8e6d4e58eee169f4488cf5b875c581cd2dc41fd489fbaa344d18a3f7f448c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "explorer/user.html.twig"));

        $__internal_54f5e827cf451c2ed2c62eaba02a0a4e9aef5aec3eea46d7f0c7fdb272b772e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f5e827cf451c2ed2c62eaba02a0a4e9aef5aec3eea46d7f0c7fdb272b772e1->enter($__internal_54f5e827cf451c2ed2c62eaba02a0a4e9aef5aec3eea46d7f0c7fdb272b772e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "explorer/user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5a8e6d4e58eee169f4488cf5b875c581cd2dc41fd489fbaa344d18a3f7f448c->leave($__internal_a5a8e6d4e58eee169f4488cf5b875c581cd2dc41fd489fbaa344d18a3f7f448c_prof);

        
        $__internal_54f5e827cf451c2ed2c62eaba02a0a4e9aef5aec3eea46d7f0c7fdb272b772e1->leave($__internal_54f5e827cf451c2ed2c62eaba02a0a4e9aef5aec3eea46d7f0c7fdb272b772e1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4141d0457d1c7d36679ec58c25d5f3441e8974912e226e8055b0b1307e065dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4141d0457d1c7d36679ec58c25d5f3441e8974912e226e8055b0b1307e065dc->enter($__internal_f4141d0457d1c7d36679ec58c25d5f3441e8974912e226e8055b0b1307e065dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d3b21719154cee3b08097d2ade2ec446adcc7fc721f77d3d9dc9f2f8e5022c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d3b21719154cee3b08097d2ade2ec446adcc7fc721f77d3d9dc9f2f8e5022c0->enter($__internal_4d3b21719154cee3b08097d2ade2ec446adcc7fc721f77d3d9dc9f2f8e5022c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t\t\t<li class=\"breadcrumb\">
\t\t\t\t\t\t<a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_user", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "familyName", array()), "html", null, true);
        echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</header>
\t\t<div id=\"left-pane\">
\t\t\t<table id=\"details\">
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"attr\">Societe :</td>
\t\t\t\t\t<td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "company", array()), "html", null, true);
        echo " [siret : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "siret", array()), "html", null, true);
        echo "]</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"attr\">Email :</td>
\t\t\t\t\t<td><strong>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</strong></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"attr\">Telephone :</td>
\t\t\t\t\t<td><strong>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "telephone", array()), "html", null, true);
        echo "</strong></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"attr\">Adresse :</td>
\t\t\t\t\t<td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "address", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"attr\">Enregistré le :</td>
\t\t\t\t\t<td>";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "created", array()), "d-m-Y"), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t";
        // line 45
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array") == "ROLE_ADMIN")) {
            // line 46
            echo "\t\t\t<ul id=\"toolbar\">
\t\t\t\t<header>
\t\t\t\t\tAdministration
\t\t\t\t</header>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_user", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\">éditer ce client</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_user", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\">Supprimer ce client</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_mission", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\">Ajouter une mission</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t";
        }
        // line 61
        echo "\t\t</div>
\t\t<section id=\"right-pane\">
\t\t\t";
        // line 63
        if ((twig_length_filter($this->env, (isset($context["missions"]) ? $context["missions"] : $this->getContext($context, "missions"))) > 0)) {
            // line 64
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["missions"]) ? $context["missions"] : $this->getContext($context, "missions")));
            foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
                // line 65
                echo "\t\t\t\t<a class=\"element-link\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_mission", array("missionId" => $this->getAttribute($context["mission"], "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t<div class=\"element\">
\t\t\t\t\t\t<div class=\"icon folder\"></div>
\t\t\t\t\t\t<div class=\"title\">";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["mission"], "name", array()), "html", null, true);
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "\t\t\t";
        } else {
            // line 73
            echo "\t\t\t\t<p>Aucune mission n'a été enregistrée pour le moment...</p>
\t\t\t";
        }
        // line 75
        echo "\t\t</section>
\t</section>
";
        
        $__internal_4d3b21719154cee3b08097d2ade2ec446adcc7fc721f77d3d9dc9f2f8e5022c0->leave($__internal_4d3b21719154cee3b08097d2ade2ec446adcc7fc721f77d3d9dc9f2f8e5022c0_prof);

        
        $__internal_f4141d0457d1c7d36679ec58c25d5f3441e8974912e226e8055b0b1307e065dc->leave($__internal_f4141d0457d1c7d36679ec58c25d5f3441e8974912e226e8055b0b1307e065dc_prof);

    }

    public function getTemplateName()
    {
        return "explorer/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 75,  179 => 73,  176 => 72,  166 => 68,  159 => 65,  154 => 64,  152 => 63,  148 => 61,  141 => 57,  135 => 54,  129 => 51,  122 => 46,  120 => 45,  114 => 42,  107 => 38,  100 => 34,  93 => 30,  84 => 26,  69 => 16,  65 => 15,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
\t\t\t\t\t<li class=\"breadcrumb\">
\t\t\t\t\t\t<a href=\"{{path('show_user', {'userId': user.id})}}\">
\t\t\t\t\t\t\t{{user.firstName}} {{user.familyName}}
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</header>
\t\t<div id=\"left-pane\">
\t\t\t<table id=\"details\">
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"attr\">Societe :</td>
\t\t\t\t\t<td>{{user.company}} [siret : {{user.siret}}]</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"attr\">Email :</td>
\t\t\t\t\t<td><strong>{{user.email}}</strong></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"attr\">Telephone :</td>
\t\t\t\t\t<td><strong>{{user.telephone}}</strong></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"attr\">Adresse :</td>
\t\t\t\t\t<td>{{user.address}}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"attr\">Enregistré le :</td>
\t\t\t\t\t<td>{{user.created|date('d-m-Y')}}</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t{% if (app.user.roles[0] == 'ROLE_ADMIN') %}
\t\t\t<ul id=\"toolbar\">
\t\t\t\t<header>
\t\t\t\t\tAdministration
\t\t\t\t</header>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{path('edit_user', {'userId': user.id})}}\">éditer ce client</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{path('delete_user', {'userId': user.id})}}\">Supprimer ce client</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{path('new_mission', {'userId': user.id})}}\">Ajouter une mission</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t{% endif %}
\t\t</div>
\t\t<section id=\"right-pane\">
\t\t\t{% if missions|length>0 %}
\t\t\t{% for mission in missions %}
\t\t\t\t<a class=\"element-link\" href=\"{{path('show_mission', {'missionId': mission.id})}}\">
\t\t\t\t\t<div class=\"element\">
\t\t\t\t\t\t<div class=\"icon folder\"></div>
\t\t\t\t\t\t<div class=\"title\">{{mission.name}}</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t{% endfor %}
\t\t\t{% else %}
\t\t\t\t<p>Aucune mission n'a été enregistrée pour le moment...</p>
\t\t\t{% endif %}
\t\t</section>
\t</section>
{% endblock %}
", "explorer/user.html.twig", "/home/ubuntu/workspace/app/Resources/views/explorer/user.html.twig");
    }
}
