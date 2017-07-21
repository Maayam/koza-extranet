<?php

/* base.html.twig */
class __TwigTemplate_ccb7c21c8ee1c1afccef7e4a69515dde7bfb6175025858ef133f6fc569bbf07c extends Twig_Template
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
        $__internal_16dcd355be310c614d1ea6e086f78d24a97fd1104b3621a5d9069208b1d1f177 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16dcd355be310c614d1ea6e086f78d24a97fd1104b3621a5d9069208b1d1f177->enter($__internal_16dcd355be310c614d1ea6e086f78d24a97fd1104b3621a5d9069208b1d1f177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_21919ac12046ada806118514a04a35b89055aba5fd8229f04dee4d1a9b2b61d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21919ac12046ada806118514a04a35b89055aba5fd8229f04dee4d1a9b2b61d1->enter($__internal_21919ac12046ada806118514a04a35b89055aba5fd8229f04dee4d1a9b2b61d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css\" />
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js\"></script>
</head>
<body>
\t<!-- TOP BAR -->
\t<header id=\"top-bar\">
\t\t<a class=\"logo-link\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">
\t\t\t<img class=\"logo\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("web/static/img/koza-logo.png"), "html", null, true);
        echo "\" title=\"Koza Logo\" alt=\"Logo de Koza\">
\t\t</a>
\t\t<nav id=\"top-left-nav\">
\t\t\t";
        // line 33
        echo "\t\t</nav>
\t\t<nav id=\"top-right-nav\">
\t\t\t<ul class=\"nav-list\" id=\"top-right-nav-list\">
\t\t\t\t";
        // line 36
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) {
            // line 37
            echo "\t\t\t\t<li class=\"top-right-nav-element\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">déconnection</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 41
        echo "\t\t\t\t<li class=\"top-right-nav-element\">
\t\t\t\t\t<a class=\"nav-link\" href=\"https://koza.fr\">Retour sur Koza.fr</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</nav>
\t</header>
\t<script>
\t\t";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 49
            echo "\t\t\tswal(\"Succès !\", \"";
            echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
            echo "\", \"success\")
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
            echo "\t        swal(\"Succès !\", \"";
            echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
            echo "\", \"error\")
\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t</script>
    ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "</body>
<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("web/static/js/areYouSure.js"), "html", null, true);
        echo "\"></script>
</html>";
        
        $__internal_16dcd355be310c614d1ea6e086f78d24a97fd1104b3621a5d9069208b1d1f177->leave($__internal_16dcd355be310c614d1ea6e086f78d24a97fd1104b3621a5d9069208b1d1f177_prof);

        
        $__internal_21919ac12046ada806118514a04a35b89055aba5fd8229f04dee4d1a9b2b61d1->leave($__internal_21919ac12046ada806118514a04a35b89055aba5fd8229f04dee4d1a9b2b61d1_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_bec8e495169bf7133dbec958db8d35307728a8e6c0c1a1e2d0298a3dd0fdda2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bec8e495169bf7133dbec958db8d35307728a8e6c0c1a1e2d0298a3dd0fdda2a->enter($__internal_bec8e495169bf7133dbec958db8d35307728a8e6c0c1a1e2d0298a3dd0fdda2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa6c8f497076c19555ec191e855619c2f1ead514775b08787dc7157c134f1cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa6c8f497076c19555ec191e855619c2f1ead514775b08787dc7157c134f1cd8->enter($__internal_fa6c8f497076c19555ec191e855619c2f1ead514775b08787dc7157c134f1cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 56
        echo "        No content...
    ";
        
        $__internal_fa6c8f497076c19555ec191e855619c2f1ead514775b08787dc7157c134f1cd8->leave($__internal_fa6c8f497076c19555ec191e855619c2f1ead514775b08787dc7157c134f1cd8_prof);

        
        $__internal_bec8e495169bf7133dbec958db8d35307728a8e6c0c1a1e2d0298a3dd0fdda2a->leave($__internal_bec8e495169bf7133dbec958db8d35307728a8e6c0c1a1e2d0298a3dd0fdda2a_prof);

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
        return array (  134 => 56,  125 => 55,  113 => 59,  110 => 58,  108 => 55,  105 => 54,  96 => 52,  91 => 51,  82 => 49,  78 => 48,  69 => 41,  63 => 38,  60 => 37,  58 => 36,  53 => 33,  47 => 14,  43 => 13,  33 => 6,  26 => 1,);
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
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css\" />
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js\"></script>
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
\t<script>
\t\t{% for flash in app.session.flashBag.get('success') %}
\t\t\tswal(\"Succès !\", \"{{flash}}\", \"success\")
\t    {% endfor %}
\t\t{% for flash in app.session.flashBag.get('error') %}
\t        swal(\"Succès !\", \"{{flash}}\", \"error\")
\t    {% endfor %}
\t</script>
    {% block body %}
        No content...
    {% endblock %}
</body>
<script src=\"{{asset('web/static/js/areYouSure.js')}}\"></script>
</html>", "base.html.twig", "/home/ubuntu/workspace/app/Resources/views/base.html.twig");
    }
}
