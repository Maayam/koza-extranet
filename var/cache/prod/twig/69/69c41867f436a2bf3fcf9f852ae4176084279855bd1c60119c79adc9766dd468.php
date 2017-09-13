<?php

/* explorer/mission.html.twig */
class __TwigTemplate_0d185980ea6cb6d267467de9c013d96b278ce9dd61db2ecda455ab1d4cdb2a8e extends Twig_Template
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
        $__internal_b63d7e5df60bdf32ddcd7e011c992f1b8ad81cd93c2c7b713fa45faa44e73b83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b63d7e5df60bdf32ddcd7e011c992f1b8ad81cd93c2c7b713fa45faa44e73b83->enter($__internal_b63d7e5df60bdf32ddcd7e011c992f1b8ad81cd93c2c7b713fa45faa44e73b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "explorer/mission.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b63d7e5df60bdf32ddcd7e011c992f1b8ad81cd93c2c7b713fa45faa44e73b83->leave($__internal_b63d7e5df60bdf32ddcd7e011c992f1b8ad81cd93c2c7b713fa45faa44e73b83_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_587186a8fbc302fb451134803049d8527398e4197b1b7ea31d40c249b2144492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_587186a8fbc302fb451134803049d8527398e4197b1b7ea31d40c249b2144492->enter($__internal_587186a8fbc302fb451134803049d8527398e4197b1b7ea31d40c249b2144492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "company", array()) != "")) {
            // line 17
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "company", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
        } else {
            // line 19
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "familyName", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
        }
        // line 21
        echo "\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb\">
\t\t\t\t\t\t<a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_mission", array("missionId" => $this->getAttribute((isset($context["mission"]) ? $context["mission"] : $this->getContext($context, "mission")), "id", array()))), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : $this->getContext($context, "mission")), "name", array()), "html", null, true);
        echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</header>
\t\t<div id=\"left-pane\">
\t\t\t<table id=\"details\">
\t\t\t\t";
        // line 33
        if (($this->getAttribute((isset($context["mission"]) ? $context["mission"] : $this->getContext($context, "mission")), "path", array()) != "")) {
            // line 34
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<img class=\"mission-thumbnail\" src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("web/thumbnails/mission/" . $this->getAttribute((isset($context["mission"]) ? $context["mission"] : $this->getContext($context, "mission")), "path", array()))), "html", null, true);
            echo "\" />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : $this->getContext($context, "mission")), "name", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td><strong>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : $this->getContext($context, "mission")), "type", array()), "html", null, true);
        echo "</strong></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td><strong>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : $this->getContext($context, "mission")), "adress", array()), "html", null, true);
        echo "</strong></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : $this->getContext($context, "mission")), "tasks", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "gender", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "familyName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : $this->getContext($context, "mission")), "time", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>";
        // line 59
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : $this->getContext($context, "mission")), "created", array()), "d-m-Y"), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t";
        // line 62
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array") == "ROLE_ADMIN")) {
            // line 63
            echo "\t\t\t<ul id=\"toolbar\">
\t\t\t\t<header>
\t\t\t\t\tAdministration
\t\t\t\t</header>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_media", array("missionId" => $this->getAttribute((isset($context["mission"]) ? $context["mission"] : $this->getContext($context, "mission")), "id", array()))), "html", null, true);
            echo "\">Téléverser un document</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_mission", array("missionId" => $this->getAttribute((isset($context["mission"]) ? $context["mission"] : $this->getContext($context, "mission")), "id", array()))), "html", null, true);
            echo "\">éditer cette mission</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"delete\" href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_mission", array("missionId" => $this->getAttribute((isset($context["mission"]) ? $context["mission"] : $this->getContext($context, "mission")), "id", array()))), "html", null, true);
            echo "\">Supprimer cette mission</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t";
        }
        // line 78
        echo "\t\t</div>
\t\t<section id=\"right-pane\">
\t\t\t<table id=\"mission-table\">
\t\t\t";
        // line 81
        if ((twig_length_filter($this->env, (isset($context["mediaList"]) ? $context["mediaList"] : $this->getContext($context, "mediaList"))) > 0)) {
            // line 82
            echo "\t\t\t\t<tr>
\t\t\t\t\t<th></th>
\t\t\t\t\t<th>Fichier</th>
\t\t\t\t\t<th>description</th>
\t\t\t\t\t<th>date dérnière mise à jour</th>
\t\t\t\t\t<th>Actions</th>
\t\t\t\t</tr>
\t\t\t";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mediaList"]) ? $context["mediaList"] : $this->getContext($context, "mediaList")));
            foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                // line 90
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td class=\"icon file col-10\"></td>
\t\t\t\t\t<td class=\"col-20 text-center\">
\t\t\t\t\t\t<div class=\"title\">";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($context["media"], "name", array()), "html", null, true);
                echo "</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"col-30\">
\t\t\t\t\t\t<div class=\"title\">";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($context["media"], "message", array()), "html", null, true);
                echo "</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"col-10\">
\t\t\t\t\t\t<div class=\"title\">";
                // line 99
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["media"], "created", array()), "d/m/Y"), "html", null, true);
                echo "</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"col-30 text-right\"><ul>
\t\t\t\t\t\t<li><a href=\"";
                // line 102
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_media", array("mediaId" => $this->getAttribute($context["media"], "id", array()))), "html", null, true);
                echo "\">Télécharger</a></li>
\t\t\t\t\t";
                // line 103
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array") == "ROLE_ADMIN")) {
                    // line 104
                    echo "\t\t\t\t\t\t<li><a class=\"delete\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_media", array("mediaId" => $this->getAttribute($context["media"], "id", array()))), "html", null, true);
                    echo "\">Supprimer</a></li>
\t\t\t\t\t";
                }
                // line 106
                echo "\t\t\t\t\t</ul></td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "\t\t\t";
        } else {
            // line 110
            echo "\t\t\t\t<p>Aucun document n'a été enregistrée pour le moment...</p>
\t\t\t";
        }
        // line 112
        echo "\t\t\t</table>
\t\t</section>
\t</section>
";
        
        $__internal_587186a8fbc302fb451134803049d8527398e4197b1b7ea31d40c249b2144492->leave($__internal_587186a8fbc302fb451134803049d8527398e4197b1b7ea31d40c249b2144492_prof);

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
        return array (  256 => 112,  252 => 110,  249 => 109,  241 => 106,  235 => 104,  233 => 103,  229 => 102,  223 => 99,  217 => 96,  211 => 93,  206 => 90,  202 => 89,  193 => 82,  191 => 81,  186 => 78,  179 => 74,  173 => 71,  167 => 68,  160 => 63,  158 => 62,  152 => 59,  146 => 56,  136 => 53,  130 => 50,  124 => 47,  118 => 44,  112 => 41,  109 => 40,  102 => 36,  98 => 34,  96 => 33,  85 => 25,  81 => 24,  76 => 21,  68 => 19,  62 => 17,  60 => 16,  56 => 15,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
\t\t\t\t\t\t\t{% if(user.company != '') %}
\t\t\t\t\t\t\t{{user.company}}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{{user.firstName}} {{user.familyName}}
\t\t\t\t\t\t\t{% endif %}
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
\t\t\t\t{% if(mission.path != '') %}
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<img class=\"mission-thumbnail\" src=\"{{asset(\"web/thumbnails/mission/\"~mission.path)}}\" />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t{% endif %}
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
\t\t\t\t\t<a class=\"delete\" href=\"{{path('delete_mission', {'missionId': mission.id})}}\">Supprimer cette mission</a>
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
\t\t\t\t\t\t<li><a class=\"delete\" href=\"{{path('delete_media', {'mediaId': media.id})}}\">Supprimer</a></li>
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
