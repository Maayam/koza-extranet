<?php

/* explorer/mission.html.twig */
class __TwigTemplate_8c6b4bc6cf1ce461ef60a759e028dca0309bd8d76420cbfed3dd305f506e5926 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "explorer/mission.html.twig", 1);
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
        $__internal_237550a20b95759c5559725df9663f56685b6e8b92c1542469ed9b3b90cea63c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_237550a20b95759c5559725df9663f56685b6e8b92c1542469ed9b3b90cea63c->enter($__internal_237550a20b95759c5559725df9663f56685b6e8b92c1542469ed9b3b90cea63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "explorer/mission.html.twig"));

        $__internal_fe13cb3fd612bb9bb0b91a447924f3355dec229c47bd479564f5cb8cc55863a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe13cb3fd612bb9bb0b91a447924f3355dec229c47bd479564f5cb8cc55863a5->enter($__internal_fe13cb3fd612bb9bb0b91a447924f3355dec229c47bd479564f5cb8cc55863a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "explorer/mission.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_237550a20b95759c5559725df9663f56685b6e8b92c1542469ed9b3b90cea63c->leave($__internal_237550a20b95759c5559725df9663f56685b6e8b92c1542469ed9b3b90cea63c_prof);

        
        $__internal_fe13cb3fd612bb9bb0b91a447924f3355dec229c47bd479564f5cb8cc55863a5->leave($__internal_fe13cb3fd612bb9bb0b91a447924f3355dec229c47bd479564f5cb8cc55863a5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a98de17a27821b5ab4a6ad062db336ecf91b1995147ea06bae7808f80c68745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a98de17a27821b5ab4a6ad062db336ecf91b1995147ea06bae7808f80c68745->enter($__internal_1a98de17a27821b5ab4a6ad062db336ecf91b1995147ea06bae7808f80c68745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_09e750efe6868c4096d514f77c0ed8fd6d2c9005d72a2cf9bf22b370b9fc3db7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e750efe6868c4096d514f77c0ed8fd6d2c9005d72a2cf9bf22b370b9fc3db7->enter($__internal_09e750efe6868c4096d514f77c0ed8fd6d2c9005d72a2cf9bf22b370b9fc3db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t\t\t<li class=\"breadcrumb\">
\t\t\t\t\t\t<a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_mission", array("missionId" => $this->getAttribute((isset($context["mission"]) ? $context["mission"] : $this->getContext($context, "mission")), "id", array()))), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : $this->getContext($context, "mission")), "name", array()), "html", null, true);
        echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</header>
\t\t<div id=\"left-pane\">
\t\t\t<table id=\"details\">
\t\t\t\t<tr>
\t\t\t\t\t<td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : $this->getContext($context, "mission")), "name", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td><strong>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : $this->getContext($context, "mission")), "type", array()), "html", null, true);
        echo "</strong></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td><strong>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : $this->getContext($context, "mission")), "adress", array()), "html", null, true);
        echo "</strong></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : $this->getContext($context, "mission")), "tasks", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "gender", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "familyName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : $this->getContext($context, "mission")), "time", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : $this->getContext($context, "mission")), "created", array()), "d-m-Y"), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t";
        // line 51
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array") == "ROLE_ADMIN")) {
            // line 52
            echo "\t\t\t<ul id=\"toolbar\">
\t\t\t\t<header>
\t\t\t\t\tAdministration
\t\t\t\t</header>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_media", array("missionId" => $this->getAttribute((isset($context["mission"]) ? $context["mission"] : $this->getContext($context, "mission")), "id", array()))), "html", null, true);
            echo "\">Téléverser un document</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_mission", array("missionId" => $this->getAttribute((isset($context["mission"]) ? $context["mission"] : $this->getContext($context, "mission")), "id", array()))), "html", null, true);
            echo "\">éditer cette mission</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_mission", array("missionId" => $this->getAttribute((isset($context["mission"]) ? $context["mission"] : $this->getContext($context, "mission")), "id", array()))), "html", null, true);
            echo "\">Supprimer cette mission</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t";
        }
        // line 67
        echo "\t\t</div>
\t\t<section id=\"right-pane\">
\t\t\t<table id=\"mission-table\">
\t\t\t";
        // line 70
        if ((twig_length_filter($this->env, (isset($context["mediaList"]) ? $context["mediaList"] : $this->getContext($context, "mediaList"))) > 0)) {
            // line 71
            echo "\t\t\t\t<tr>
\t\t\t\t\t<th></th>
\t\t\t\t\t<th>Fichier</th>
\t\t\t\t\t<th>description</th>
\t\t\t\t\t<th>date dérnière mise à jour</th>
\t\t\t\t\t<th>Actions</th>
\t\t\t\t</tr>
\t\t\t";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mediaList"]) ? $context["mediaList"] : $this->getContext($context, "mediaList")));
            foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                // line 79
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td class=\"icon file col-10\"></td>
\t\t\t\t\t<td class=\"col-20 text-center\">
\t\t\t\t\t\t<div class=\"title\">";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($context["media"], "name", array()), "html", null, true);
                echo "</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"col-30\">
\t\t\t\t\t\t<div class=\"title\">";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["media"], "message", array()), "html", null, true);
                echo "</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"col-10\">
\t\t\t\t\t\t<div class=\"title\">";
                // line 88
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["media"], "created", array()), "d/m/Y"), "html", null, true);
                echo "</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"col-30 text-right\"><ul>
\t\t\t\t\t\t<li><a href=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_media", array("mediaId" => $this->getAttribute($context["media"], "id", array()))), "html", null, true);
                echo "\">Télécharger</a></li>
\t\t\t\t\t";
                // line 92
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array") == "ROLE_ADMIN")) {
                    // line 93
                    echo "\t\t\t\t\t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_media", array("mediaId" => $this->getAttribute($context["media"], "id", array()))), "html", null, true);
                    echo "\">Supprimer</a></li>
\t\t\t\t\t";
                }
                // line 95
                echo "\t\t\t\t\t</ul></td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "\t\t\t";
        } else {
            // line 99
            echo "\t\t\t\t<p>Aucun document n'a été enregistrée pour le moment...</p>
\t\t\t";
        }
        // line 101
        echo "\t\t\t</table>
\t\t</section>
\t</section>
";
        
        $__internal_09e750efe6868c4096d514f77c0ed8fd6d2c9005d72a2cf9bf22b370b9fc3db7->leave($__internal_09e750efe6868c4096d514f77c0ed8fd6d2c9005d72a2cf9bf22b370b9fc3db7_prof);

        
        $__internal_1a98de17a27821b5ab4a6ad062db336ecf91b1995147ea06bae7808f80c68745->leave($__internal_1a98de17a27821b5ab4a6ad062db336ecf91b1995147ea06bae7808f80c68745_prof);

    }

    public function getTemplateName()
    {
        return "explorer/mission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 101,  234 => 99,  231 => 98,  223 => 95,  217 => 93,  215 => 92,  211 => 91,  205 => 88,  199 => 85,  193 => 82,  188 => 79,  184 => 78,  175 => 71,  173 => 70,  168 => 67,  161 => 63,  155 => 60,  149 => 57,  142 => 52,  140 => 51,  134 => 48,  128 => 45,  118 => 42,  112 => 39,  106 => 36,  100 => 33,  94 => 30,  82 => 21,  78 => 20,  69 => 16,  65 => 15,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
\t\t\t\t\t<li class=\"breadcrumb\">
\t\t\t\t\t\t<a href=\"{{path('show_mission', {'missionId': mission.id})}}\">
\t\t\t\t\t\t\t{{mission.name}}
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</header>
\t\t<div id=\"left-pane\">
\t\t\t<table id=\"details\">
\t\t\t\t<tr>
\t\t\t\t\t<td>{{mission.name}}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td><strong>{{mission.type}}</strong></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td><strong>{{mission.adress}}</strong></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>{{mission.tasks}}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>{{user.gender}} {{user.familyName}} {{user.firstName}}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>{{mission.time}}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>{{mission.created|date('d-m-Y')}}</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t{% if (app.user.roles[0] == 'ROLE_ADMIN') %}
\t\t\t<ul id=\"toolbar\">
\t\t\t\t<header>
\t\t\t\t\tAdministration
\t\t\t\t</header>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{path('new_media', {'missionId': mission.id})}}\">Téléverser un document</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{path('edit_mission', {'missionId': mission.id})}}\">éditer cette mission</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{path('delete_mission', {'missionId': mission.id})}}\">Supprimer cette mission</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t{% endif %}
\t\t</div>
\t\t<section id=\"right-pane\">
\t\t\t<table id=\"mission-table\">
\t\t\t{% if mediaList|length>0 %}
\t\t\t\t<tr>
\t\t\t\t\t<th></th>
\t\t\t\t\t<th>Fichier</th>
\t\t\t\t\t<th>description</th>
\t\t\t\t\t<th>date dérnière mise à jour</th>
\t\t\t\t\t<th>Actions</th>
\t\t\t\t</tr>
\t\t\t{% for media in mediaList %}
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"icon file col-10\"></td>
\t\t\t\t\t<td class=\"col-20 text-center\">
\t\t\t\t\t\t<div class=\"title\">{{media.name}}</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"col-30\">
\t\t\t\t\t\t<div class=\"title\">{{media.message}}</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"col-10\">
\t\t\t\t\t\t<div class=\"title\">{{media.created|date('d/m/Y')}}</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"col-30 text-right\"><ul>
\t\t\t\t\t\t<li><a href=\"{{path('show_media', {'mediaId': media.id})}}\">Télécharger</a></li>
\t\t\t\t\t{% if (app.user.roles[0] == 'ROLE_ADMIN') %}
\t\t\t\t\t\t<li><a href=\"{{path('delete_media', {'mediaId': media.id})}}\">Supprimer</a></li>
\t\t\t\t\t{% endif %}
\t\t\t\t\t</ul></td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t\t{% else %}
\t\t\t\t<p>Aucun document n'a été enregistrée pour le moment...</p>
\t\t\t{% endif %}
\t\t\t</table>
\t\t</section>
\t</section>
{% endblock %}
", "explorer/mission.html.twig", "/home/ubuntu/workspace/app/Resources/views/explorer/mission.html.twig");
    }
}
