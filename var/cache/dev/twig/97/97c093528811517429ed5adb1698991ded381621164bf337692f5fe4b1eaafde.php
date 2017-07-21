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
        $__internal_4a5dd040ea98286e4b2ed7cd53891df1e9cdcbd16042ff787d6a36ae81ccb7ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a5dd040ea98286e4b2ed7cd53891df1e9cdcbd16042ff787d6a36ae81ccb7ca->enter($__internal_4a5dd040ea98286e4b2ed7cd53891df1e9cdcbd16042ff787d6a36ae81ccb7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_303961fb8cd4c375dfb97248be454cc47033283c4d19c0202d9f9674f9560738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_303961fb8cd4c375dfb97248be454cc47033283c4d19c0202d9f9674f9560738->enter($__internal_303961fb8cd4c375dfb97248be454cc47033283c4d19c0202d9f9674f9560738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a5dd040ea98286e4b2ed7cd53891df1e9cdcbd16042ff787d6a36ae81ccb7ca->leave($__internal_4a5dd040ea98286e4b2ed7cd53891df1e9cdcbd16042ff787d6a36ae81ccb7ca_prof);

        
        $__internal_303961fb8cd4c375dfb97248be454cc47033283c4d19c0202d9f9674f9560738->leave($__internal_303961fb8cd4c375dfb97248be454cc47033283c4d19c0202d9f9674f9560738_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c66f1d62b8a50ce8fa69b1c247868a5d6e9d4f7050e7a32ce54df49c2d3acf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c66f1d62b8a50ce8fa69b1c247868a5d6e9d4f7050e7a32ce54df49c2d3acf9->enter($__internal_8c66f1d62b8a50ce8fa69b1c247868a5d6e9d4f7050e7a32ce54df49c2d3acf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf658864e39a0ddb4e9a95b6dd8901809bb45c4b6d9cd28092647a0044b987eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf658864e39a0ddb4e9a95b6dd8901809bb45c4b6d9cd28092647a0044b987eb->enter($__internal_cf658864e39a0ddb4e9a95b6dd8901809bb45c4b6d9cd28092647a0044b987eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cf658864e39a0ddb4e9a95b6dd8901809bb45c4b6d9cd28092647a0044b987eb->leave($__internal_cf658864e39a0ddb4e9a95b6dd8901809bb45c4b6d9cd28092647a0044b987eb_prof);

        
        $__internal_8c66f1d62b8a50ce8fa69b1c247868a5d6e9d4f7050e7a32ce54df49c2d3acf9->leave($__internal_8c66f1d62b8a50ce8fa69b1c247868a5d6e9d4f7050e7a32ce54df49c2d3acf9_prof);

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
