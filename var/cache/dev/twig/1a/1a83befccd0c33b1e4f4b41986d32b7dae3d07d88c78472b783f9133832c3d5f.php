<?php

/* security/login.html.twig */
class __TwigTemplate_d5828afdebe31230a896254a3df6337f912245264c5899c995a0f733032bce3b extends Twig_Template
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
        $__internal_578ea279b07290f133f0e0efba98e719f82b1d390b5815073257035fbb988c4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_578ea279b07290f133f0e0efba98e719f82b1d390b5815073257035fbb988c4d->enter($__internal_578ea279b07290f133f0e0efba98e719f82b1d390b5815073257035fbb988c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_d1cb2ebb98f51a2cbb7b02f90cb36a5413e9be93bcc318b37f258fc31754a728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1cb2ebb98f51a2cbb7b02f90cb36a5413e9be93bcc318b37f258fc31754a728->enter($__internal_d1cb2ebb98f51a2cbb7b02f90cb36a5413e9be93bcc318b37f258fc31754a728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_578ea279b07290f133f0e0efba98e719f82b1d390b5815073257035fbb988c4d->leave($__internal_578ea279b07290f133f0e0efba98e719f82b1d390b5815073257035fbb988c4d_prof);

        
        $__internal_d1cb2ebb98f51a2cbb7b02f90cb36a5413e9be93bcc318b37f258fc31754a728->leave($__internal_d1cb2ebb98f51a2cbb7b02f90cb36a5413e9be93bcc318b37f258fc31754a728_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d07a0d39630ae97da49a94657a78ea7d7e9b35941f8340be45cc8d2daf9bc01c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d07a0d39630ae97da49a94657a78ea7d7e9b35941f8340be45cc8d2daf9bc01c->enter($__internal_d07a0d39630ae97da49a94657a78ea7d7e9b35941f8340be45cc8d2daf9bc01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b9340d22f99acc839476d98ab16c4ad90fa7182688799fc3d6a29428d17b3cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9340d22f99acc839476d98ab16c4ad90fa7182688799fc3d6a29428d17b3cba->enter($__internal_b9340d22f99acc839476d98ab16c4ad90fa7182688799fc3d6a29428d17b3cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b9340d22f99acc839476d98ab16c4ad90fa7182688799fc3d6a29428d17b3cba->leave($__internal_b9340d22f99acc839476d98ab16c4ad90fa7182688799fc3d6a29428d17b3cba_prof);

        
        $__internal_d07a0d39630ae97da49a94657a78ea7d7e9b35941f8340be45cc8d2daf9bc01c->leave($__internal_d07a0d39630ae97da49a94657a78ea7d7e9b35941f8340be45cc8d2daf9bc01c_prof);

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
