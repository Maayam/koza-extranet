<?php

/* explorer/explorer.html.twig */
class __TwigTemplate_21af1baad43e2bb491fff81d30535b646d1e17ec98a470e26e6a98cfc1ead1a1 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<!-- WORK AREA -->
\t<section id=\"explorer-section\">
\t\t<header>
\t\t\t<div class=\"breadcrumbs-wrapper\">
\t\t\t\t<ul class=\"breadcrumbs\">
\t\t\t\t\t<li class=\"breadcrumb\">Vous</li>
\t\t\t\t\t<li class=\"breadcrumb\">êtes</li>
\t\t\t\t\t<li class=\"breadcrumb\">ici</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</header>
\t\t<div id=\"explorer\">
\t\t\t<a class=\"element-link\" href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_media");
        echo "\">
\t\t\t\t<div class=\"element\">
\t\t\t\t\t<div class=\"icon upload\"></div>
\t\t\t\t\t<div class=\"title\">Téléverser un document</div>
\t\t\t\t</div>
\t\t\t</a>
\t\t</div>
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
        return array (  45 => 16,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "explorer/explorer.html.twig", "/home/ubuntu/workspace/app/Resources/views/explorer/explorer.html.twig");
    }
}
