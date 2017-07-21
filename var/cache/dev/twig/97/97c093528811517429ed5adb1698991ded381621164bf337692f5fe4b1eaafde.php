<?php

/* security/login.html.twig */
class __TwigTemplate_c2a1bcc00e813a5e65ccfa2fb3926450aa3737f32ce1fbd7425e1a813c32fbee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 3);
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
        $__internal_d0d566690c75ea3a56472e142c3b9850fe6c421c9ab4ff98c13ac732cc39f605 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0d566690c75ea3a56472e142c3b9850fe6c421c9ab4ff98c13ac732cc39f605->enter($__internal_d0d566690c75ea3a56472e142c3b9850fe6c421c9ab4ff98c13ac732cc39f605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_de56aeaf9404b1d7ac5413ebb71064d093aae72f85f12a375493b73e83876518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de56aeaf9404b1d7ac5413ebb71064d093aae72f85f12a375493b73e83876518->enter($__internal_de56aeaf9404b1d7ac5413ebb71064d093aae72f85f12a375493b73e83876518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0d566690c75ea3a56472e142c3b9850fe6c421c9ab4ff98c13ac732cc39f605->leave($__internal_d0d566690c75ea3a56472e142c3b9850fe6c421c9ab4ff98c13ac732cc39f605_prof);

        
        $__internal_de56aeaf9404b1d7ac5413ebb71064d093aae72f85f12a375493b73e83876518->leave($__internal_de56aeaf9404b1d7ac5413ebb71064d093aae72f85f12a375493b73e83876518_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5cc4a9d015e9ae8b515ed9c090b13a11ecdbf4b43d3b89b84327c0e666ebfa42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cc4a9d015e9ae8b515ed9c090b13a11ecdbf4b43d3b89b84327c0e666ebfa42->enter($__internal_5cc4a9d015e9ae8b515ed9c090b13a11ecdbf4b43d3b89b84327c0e666ebfa42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_71141d5d2062ab365dcb0964f719707764cd32508423cc1e216ad1bc67e5a882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71141d5d2062ab365dcb0964f719707764cd32508423cc1e216ad1bc67e5a882->enter($__internal_71141d5d2062ab365dcb0964f719707764cd32508423cc1e216ad1bc67e5a882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<!-- WORK AREA -->
<section id=\"login-section\">
\t<header id=\"login-section-header\">
\t\t<img id=\"login-section-logo\" src=\"static/img/koza-logo.png\" title=\"Koza Logo\" alt=\"Logo de Koza\">
\t\t<h1>Connexion à l'espace client</h1>
        ";
        // line 11
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 12
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 14
        echo "\t</header>
    <form action=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
        <label for=\"username\">Identifiant :</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
    
        <label for=\"password\">Mot de passe :</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
    
        <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\" />
    
        <button type=\"submit\">Se connecter</button>
    </form>
    <p>Mot de passe ou identifiant oublié ? <a href=\"https://koza.fr/contact\">Contactez Directement Koza</a> par téléphone ou par mail !</p>
    <ul>
        <li><a href=\"mailto://contact@koza.fr\">contact@koza.fr</a></li>
    </ul>
</section>
";
        
        $__internal_71141d5d2062ab365dcb0964f719707764cd32508423cc1e216ad1bc67e5a882->leave($__internal_71141d5d2062ab365dcb0964f719707764cd32508423cc1e216ad1bc67e5a882_prof);

        
        $__internal_5cc4a9d015e9ae8b515ed9c090b13a11ecdbf4b43d3b89b84327c0e666ebfa42->leave($__internal_5cc4a9d015e9ae8b515ed9c090b13a11ecdbf4b43d3b89b84327c0e666ebfa42_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 22,  72 => 17,  67 => 15,  64 => 14,  58 => 12,  56 => 11,  49 => 6,  40 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/security/login.html.twig #}
{# ... you will probably extend your base template, like base.html.twig #}
{% extends \"base.html.twig\" %}

{% block body %}
<!-- WORK AREA -->
<section id=\"login-section\">
\t<header id=\"login-section-header\">
\t\t<img id=\"login-section-logo\" src=\"static/img/koza-logo.png\" title=\"Koza Logo\" alt=\"Logo de Koza\">
\t\t<h1>Connexion à l'espace client</h1>
        {% if error %}
            <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
        {% endif %}
\t</header>
    <form action=\"{{ path('login') }}\" method=\"post\">
        <label for=\"username\">Identifiant :</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />
    
        <label for=\"password\">Mot de passe :</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
    
        <input type=\"hidden\" name=\"_target_path\" value=\"{{path('home')}}\" />
    
        <button type=\"submit\">Se connecter</button>
    </form>
    <p>Mot de passe ou identifiant oublié ? <a href=\"https://koza.fr/contact\">Contactez Directement Koza</a> par téléphone ou par mail !</p>
    <ul>
        <li><a href=\"mailto://contact@koza.fr\">contact@koza.fr</a></li>
    </ul>
</section>
{% endblock %}", "security/login.html.twig", "/home/ubuntu/workspace/app/Resources/views/security/login.html.twig");
    }
}
