<?php

/* security/login.html.twig */
class __TwigTemplate_cb90cf41709b5889c519a0e49a7dd53eb4f12c35d4a2695fdb27c885c7749cb0 extends Twig_Template
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
        $__internal_e375f08b026bcd90b25661033c98da6965edcef3b8152d7f1d23f23430437cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e375f08b026bcd90b25661033c98da6965edcef3b8152d7f1d23f23430437cae->enter($__internal_e375f08b026bcd90b25661033c98da6965edcef3b8152d7f1d23f23430437cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e375f08b026bcd90b25661033c98da6965edcef3b8152d7f1d23f23430437cae->leave($__internal_e375f08b026bcd90b25661033c98da6965edcef3b8152d7f1d23f23430437cae_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_32b6c0b70d477401a555eb623896b4978d1e032966f0685f796892b330b19728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b6c0b70d477401a555eb623896b4978d1e032966f0685f796892b330b19728->enter($__internal_32b6c0b70d477401a555eb623896b4978d1e032966f0685f796892b330b19728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_32b6c0b70d477401a555eb623896b4978d1e032966f0685f796892b330b19728->leave($__internal_32b6c0b70d477401a555eb623896b4978d1e032966f0685f796892b330b19728_prof);

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
        return array (  71 => 22,  63 => 17,  58 => 15,  55 => 14,  49 => 12,  47 => 11,  40 => 6,  34 => 5,  11 => 3,);
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
