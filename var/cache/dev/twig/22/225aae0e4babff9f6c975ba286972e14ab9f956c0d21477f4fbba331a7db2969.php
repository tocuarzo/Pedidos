<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_463fcb2a31677875c0d15337b7d8220e5524509fc6148d5530568497a8a1fb24 extends Twig_Template
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
        $__internal_19374c55b1ab9082872e98c611b8f31a6fc1434fc1bdd0c0a22b8a7efce2b0fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19374c55b1ab9082872e98c611b8f31a6fc1434fc1bdd0c0a22b8a7efce2b0fd->enter($__internal_19374c55b1ab9082872e98c611b8f31a6fc1434fc1bdd0c0a22b8a7efce2b0fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e5733d0fb13b16f90c1ddf5716b15548f83e5d65a7aba1ec4702779905d2bec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5733d0fb13b16f90c1ddf5716b15548f83e5d65a7aba1ec4702779905d2bec1->enter($__internal_e5733d0fb13b16f90c1ddf5716b15548f83e5d65a7aba1ec4702779905d2bec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19374c55b1ab9082872e98c611b8f31a6fc1434fc1bdd0c0a22b8a7efce2b0fd->leave($__internal_19374c55b1ab9082872e98c611b8f31a6fc1434fc1bdd0c0a22b8a7efce2b0fd_prof);

        
        $__internal_e5733d0fb13b16f90c1ddf5716b15548f83e5d65a7aba1ec4702779905d2bec1->leave($__internal_e5733d0fb13b16f90c1ddf5716b15548f83e5d65a7aba1ec4702779905d2bec1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_66c68be1442188da05d1bde2a5bca52b7c99d5aee007aafa768252741936f1c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c68be1442188da05d1bde2a5bca52b7c99d5aee007aafa768252741936f1c9->enter($__internal_66c68be1442188da05d1bde2a5bca52b7c99d5aee007aafa768252741936f1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_608b9ca736ec4c64c13880abe6a36be9175c14f8e5ead17eca53f1ee252fb0e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_608b9ca736ec4c64c13880abe6a36be9175c14f8e5ead17eca53f1ee252fb0e5->enter($__internal_608b9ca736ec4c64c13880abe6a36be9175c14f8e5ead17eca53f1ee252fb0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_608b9ca736ec4c64c13880abe6a36be9175c14f8e5ead17eca53f1ee252fb0e5->leave($__internal_608b9ca736ec4c64c13880abe6a36be9175c14f8e5ead17eca53f1ee252fb0e5_prof);

        
        $__internal_66c68be1442188da05d1bde2a5bca52b7c99d5aee007aafa768252741936f1c9->leave($__internal_66c68be1442188da05d1bde2a5bca52b7c99d5aee007aafa768252741936f1c9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_44e18db754222dc48cc33a57c893bd3ebd6c4bb632409d04eda6003da80f8301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e18db754222dc48cc33a57c893bd3ebd6c4bb632409d04eda6003da80f8301->enter($__internal_44e18db754222dc48cc33a57c893bd3ebd6c4bb632409d04eda6003da80f8301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6d0cbf81465ee000efb3422d346f2b9ad949869d656470db04285725abcaaa54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d0cbf81465ee000efb3422d346f2b9ad949869d656470db04285725abcaaa54->enter($__internal_6d0cbf81465ee000efb3422d346f2b9ad949869d656470db04285725abcaaa54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6d0cbf81465ee000efb3422d346f2b9ad949869d656470db04285725abcaaa54->leave($__internal_6d0cbf81465ee000efb3422d346f2b9ad949869d656470db04285725abcaaa54_prof);

        
        $__internal_44e18db754222dc48cc33a57c893bd3ebd6c4bb632409d04eda6003da80f8301->leave($__internal_44e18db754222dc48cc33a57c893bd3ebd6c4bb632409d04eda6003da80f8301_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8177a2ffcfdbc203ace8ec5ce1ffab6ccea542f75884d2e74e81ea69cf999a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8177a2ffcfdbc203ace8ec5ce1ffab6ccea542f75884d2e74e81ea69cf999a2d->enter($__internal_8177a2ffcfdbc203ace8ec5ce1ffab6ccea542f75884d2e74e81ea69cf999a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_adfdf2bf6c535133f53b347e447955dff3881c7732d9555127aaad31e240b4f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adfdf2bf6c535133f53b347e447955dff3881c7732d9555127aaad31e240b4f7->enter($__internal_adfdf2bf6c535133f53b347e447955dff3881c7732d9555127aaad31e240b4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_adfdf2bf6c535133f53b347e447955dff3881c7732d9555127aaad31e240b4f7->leave($__internal_adfdf2bf6c535133f53b347e447955dff3881c7732d9555127aaad31e240b4f7_prof);

        
        $__internal_8177a2ffcfdbc203ace8ec5ce1ffab6ccea542f75884d2e74e81ea69cf999a2d->leave($__internal_8177a2ffcfdbc203ace8ec5ce1ffab6ccea542f75884d2e74e81ea69cf999a2d_prof);

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
", "@WebProfiler/Collector/router.html.twig", "D:\\Pedidos\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
