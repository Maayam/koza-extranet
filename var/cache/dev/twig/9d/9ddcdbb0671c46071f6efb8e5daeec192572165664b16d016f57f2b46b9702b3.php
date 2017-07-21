<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c8d21550850074782862265b813a9c2aea7c608253db98e24225c2ea859cc33f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63d0868da35ad1d48354e483888f3887478057201c8c2d870582afc8eac2d8ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63d0868da35ad1d48354e483888f3887478057201c8c2d870582afc8eac2d8ef->enter($__internal_63d0868da35ad1d48354e483888f3887478057201c8c2d870582afc8eac2d8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e912beec333c5d41565d699f71095f06124f2ebfa36f75352b1632312ec0085f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e912beec333c5d41565d699f71095f06124f2ebfa36f75352b1632312ec0085f->enter($__internal_e912beec333c5d41565d699f71095f06124f2ebfa36f75352b1632312ec0085f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63d0868da35ad1d48354e483888f3887478057201c8c2d870582afc8eac2d8ef->leave($__internal_63d0868da35ad1d48354e483888f3887478057201c8c2d870582afc8eac2d8ef_prof);

        
        $__internal_e912beec333c5d41565d699f71095f06124f2ebfa36f75352b1632312ec0085f->leave($__internal_e912beec333c5d41565d699f71095f06124f2ebfa36f75352b1632312ec0085f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_797c4367f6812b29b964e892267378020141d63b53571d736001371638c4ca93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_797c4367f6812b29b964e892267378020141d63b53571d736001371638c4ca93->enter($__internal_797c4367f6812b29b964e892267378020141d63b53571d736001371638c4ca93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fb93cb2e59a629c62364a25a787992599e4c8140d7cd41d205ff993c66dd3caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb93cb2e59a629c62364a25a787992599e4c8140d7cd41d205ff993c66dd3caf->enter($__internal_fb93cb2e59a629c62364a25a787992599e4c8140d7cd41d205ff993c66dd3caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fb93cb2e59a629c62364a25a787992599e4c8140d7cd41d205ff993c66dd3caf->leave($__internal_fb93cb2e59a629c62364a25a787992599e4c8140d7cd41d205ff993c66dd3caf_prof);

        
        $__internal_797c4367f6812b29b964e892267378020141d63b53571d736001371638c4ca93->leave($__internal_797c4367f6812b29b964e892267378020141d63b53571d736001371638c4ca93_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_344131a40e94ce96bb7244fd1f77e5cea1cf1aa4fc4cc32e436f9f02423f0c12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_344131a40e94ce96bb7244fd1f77e5cea1cf1aa4fc4cc32e436f9f02423f0c12->enter($__internal_344131a40e94ce96bb7244fd1f77e5cea1cf1aa4fc4cc32e436f9f02423f0c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c9f49127846e340e9c35994ac4d66c167d3b0c54c3fd4fe65b87ad1abd692b96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9f49127846e340e9c35994ac4d66c167d3b0c54c3fd4fe65b87ad1abd692b96->enter($__internal_c9f49127846e340e9c35994ac4d66c167d3b0c54c3fd4fe65b87ad1abd692b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c9f49127846e340e9c35994ac4d66c167d3b0c54c3fd4fe65b87ad1abd692b96->leave($__internal_c9f49127846e340e9c35994ac4d66c167d3b0c54c3fd4fe65b87ad1abd692b96_prof);

        
        $__internal_344131a40e94ce96bb7244fd1f77e5cea1cf1aa4fc4cc32e436f9f02423f0c12->leave($__internal_344131a40e94ce96bb7244fd1f77e5cea1cf1aa4fc4cc32e436f9f02423f0c12_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_329818c8f3bb5c82cd3fc4734148f6f431562dee24e225df3116035d9b4e5521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_329818c8f3bb5c82cd3fc4734148f6f431562dee24e225df3116035d9b4e5521->enter($__internal_329818c8f3bb5c82cd3fc4734148f6f431562dee24e225df3116035d9b4e5521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e29cbf1ded7c71bc1f526a6340c92980c273931da5142ec25ecc569625e61a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e29cbf1ded7c71bc1f526a6340c92980c273931da5142ec25ecc569625e61a32->enter($__internal_e29cbf1ded7c71bc1f526a6340c92980c273931da5142ec25ecc569625e61a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e29cbf1ded7c71bc1f526a6340c92980c273931da5142ec25ecc569625e61a32->leave($__internal_e29cbf1ded7c71bc1f526a6340c92980c273931da5142ec25ecc569625e61a32_prof);

        
        $__internal_329818c8f3bb5c82cd3fc4734148f6f431562dee24e225df3116035d9b4e5521->leave($__internal_329818c8f3bb5c82cd3fc4734148f6f431562dee24e225df3116035d9b4e5521_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
