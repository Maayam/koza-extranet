<?php

/* base.html.twig */
class __TwigTemplate_0f210d936d215bff84f8a406c3a2735fd7565e5dc0126f1998185b23893855c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a08d1f1875d5cb86a156ea93a5d994c73dd0aef5c85a0e6ef17faf398e83f8b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a08d1f1875d5cb86a156ea93a5d994c73dd0aef5c85a0e6ef17faf398e83f8b7->enter($__internal_a08d1f1875d5cb86a156ea93a5d994c73dd0aef5c85a0e6ef17faf398e83f8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e2ea61c2dee7648e5c33c9a2e34d4cf692597b4bea0334dd9b7f4622b4e3031f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ea61c2dee7648e5c33c9a2e34d4cf692597b4bea0334dd9b7f4622b4e3031f->enter($__internal_e2ea61c2dee7648e5c33c9a2e34d4cf692597b4bea0334dd9b7f4622b4e3031f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>KOZA extranet</title>
\t<meta charset=\"utf-8\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("web/static/css/main.css"), "html", null, true);
        echo "\">
</head>
<body>
\t<!-- TOP BAR -->
\t<header id=\"top-bar\">
\t\t<a class=\"logo-link\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">
\t\t\t<img class=\"logo\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("web/static/img/koza-logo.png"), "html", null, true);
        echo "\" title=\"Koza Logo\" alt=\"Logo de Koza\">
\t\t</a>
\t\t<nav id=\"top-left-nav\">
\t\t\t";
        // line 31
        echo "\t\t</nav>
\t\t<nav id=\"top-right-nav\">
\t\t\t<ul class=\"nav-list\" id=\"top-right-nav-list\">
\t\t\t\t";
        // line 34
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) {
            // line 35
            echo "\t\t\t\t<li class=\"top-right-nav-element\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">déconnection</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t<li class=\"top-right-nav-element\">
\t\t\t\t\t<a class=\"nav-link\" href=\"https://koza.fr\">Retour sur Koza.fr</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</nav>
\t</header>
\t<aside id=\"flashbag\">
\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 47
            echo "\t    <div class=\"flash-success\">
\t        ";
            // line 48
            echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
            echo "
\t    </div>
\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 52
            echo "\t    <div class=\"flash-error\">
\t        ";
            // line 53
            echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
            echo "
\t    </div>
\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t</aside>
    ";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "</body>
</html>";
        
        $__internal_a08d1f1875d5cb86a156ea93a5d994c73dd0aef5c85a0e6ef17faf398e83f8b7->leave($__internal_a08d1f1875d5cb86a156ea93a5d994c73dd0aef5c85a0e6ef17faf398e83f8b7_prof);

        
        $__internal_e2ea61c2dee7648e5c33c9a2e34d4cf692597b4bea0334dd9b7f4622b4e3031f->leave($__internal_e2ea61c2dee7648e5c33c9a2e34d4cf692597b4bea0334dd9b7f4622b4e3031f_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_813a63b3a611666682bdb86c342169f476de55768634cb948048ecf00a02e348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_813a63b3a611666682bdb86c342169f476de55768634cb948048ecf00a02e348->enter($__internal_813a63b3a611666682bdb86c342169f476de55768634cb948048ecf00a02e348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f1a8dd6a6cced820aa50b0f62349ab645bf150b745bbd46faddcc4dfc9f5d354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1a8dd6a6cced820aa50b0f62349ab645bf150b745bbd46faddcc4dfc9f5d354->enter($__internal_f1a8dd6a6cced820aa50b0f62349ab645bf150b745bbd46faddcc4dfc9f5d354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 58
        echo "        No content...
    ";
        
        $__internal_f1a8dd6a6cced820aa50b0f62349ab645bf150b745bbd46faddcc4dfc9f5d354->leave($__internal_f1a8dd6a6cced820aa50b0f62349ab645bf150b745bbd46faddcc4dfc9f5d354_prof);

        
        $__internal_813a63b3a611666682bdb86c342169f476de55768634cb948048ecf00a02e348->leave($__internal_813a63b3a611666682bdb86c342169f476de55768634cb948048ecf00a02e348_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 58,  125 => 57,  114 => 60,  112 => 57,  109 => 56,  100 => 53,  97 => 52,  92 => 51,  83 => 48,  80 => 47,  76 => 46,  67 => 39,  61 => 36,  58 => 35,  56 => 34,  51 => 31,  45 => 12,  41 => 11,  33 => 6,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
\t<title>KOZA extranet</title>
\t<meta charset=\"utf-8\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('web/static/css/main.css') }}\">
</head>
<body>
\t<!-- TOP BAR -->
\t<header id=\"top-bar\">
\t\t<a class=\"logo-link\" href=\"{{path('home')}}\">
\t\t\t<img class=\"logo\" src=\"{{asset('web/static/img/koza-logo.png')}}\" title=\"Koza Logo\" alt=\"Logo de Koza\">
\t\t</a>
\t\t<nav id=\"top-left-nav\">
\t\t\t{#
\t\t\t<ul class=\"nav-list\" id=\"top-left-nav-list\">
\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t<li class=\"top-left-nav-element\">MENU 1
\t\t\t\t\t</li>
\t\t\t\t</a>
\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t<li class=\"top-left-nav-element\">MENU 2
\t\t\t\t\t</li>
\t\t\t\t</a>
\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t<li class=\"top-left-nav-element\">MENU 3
\t\t\t\t\t</li>
\t\t\t\t</a>
\t\t\t</ul>
\t\t\t#}
\t\t</nav>
\t\t<nav id=\"top-right-nav\">
\t\t\t<ul class=\"nav-list\" id=\"top-right-nav-list\">
\t\t\t\t{% if app.user.username is defined %}
\t\t\t\t<li class=\"top-right-nav-element\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('logout')}}\">déconnection</a>
\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t\t<li class=\"top-right-nav-element\">
\t\t\t\t\t<a class=\"nav-link\" href=\"https://koza.fr\">Retour sur Koza.fr</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</nav>
\t</header>
\t<aside id=\"flashbag\">
\t\t{% for flash in app.session.flashBag.get('success') %}
\t    <div class=\"flash-success\">
\t        {{ flash }}
\t    </div>
\t    {% endfor %}
\t\t{% for flash in app.session.flashBag.get('error') %}
\t    <div class=\"flash-error\">
\t        {{ flash }}
\t    </div>
\t    {% endfor %}
\t</aside>
    {% block body %}
        No content...
    {% endblock %}
</body>
</html>", "base.html.twig", "/home/ubuntu/workspace/app/Resources/views/base.html.twig");
    }
}
