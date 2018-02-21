<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_569a18b9ab97e18ec7d9ecdb44832126526518efe633c754ffd3d3e9c038f3ca extends Twig_Template
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
        $__internal_3d64eacbe52d8fc6689f40e67112bb80a68bfdb4e15bcc5dbac7063784efc032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d64eacbe52d8fc6689f40e67112bb80a68bfdb4e15bcc5dbac7063784efc032->enter($__internal_3d64eacbe52d8fc6689f40e67112bb80a68bfdb4e15bcc5dbac7063784efc032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3b728d7088107cdaf44bf87168fa6199ccaa459dacf8a5d8586986c16e5c1ee6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b728d7088107cdaf44bf87168fa6199ccaa459dacf8a5d8586986c16e5c1ee6->enter($__internal_3b728d7088107cdaf44bf87168fa6199ccaa459dacf8a5d8586986c16e5c1ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d64eacbe52d8fc6689f40e67112bb80a68bfdb4e15bcc5dbac7063784efc032->leave($__internal_3d64eacbe52d8fc6689f40e67112bb80a68bfdb4e15bcc5dbac7063784efc032_prof);

        
        $__internal_3b728d7088107cdaf44bf87168fa6199ccaa459dacf8a5d8586986c16e5c1ee6->leave($__internal_3b728d7088107cdaf44bf87168fa6199ccaa459dacf8a5d8586986c16e5c1ee6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ce2febf8160bee48b89f4d9ebd73ed7fc7e79b0a50e4dd1c765ca712e294db80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce2febf8160bee48b89f4d9ebd73ed7fc7e79b0a50e4dd1c765ca712e294db80->enter($__internal_ce2febf8160bee48b89f4d9ebd73ed7fc7e79b0a50e4dd1c765ca712e294db80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c7d57b6084f275b3308b56922e028abbc72d7dae5e00a8615344f437cbf996d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7d57b6084f275b3308b56922e028abbc72d7dae5e00a8615344f437cbf996d2->enter($__internal_c7d57b6084f275b3308b56922e028abbc72d7dae5e00a8615344f437cbf996d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c7d57b6084f275b3308b56922e028abbc72d7dae5e00a8615344f437cbf996d2->leave($__internal_c7d57b6084f275b3308b56922e028abbc72d7dae5e00a8615344f437cbf996d2_prof);

        
        $__internal_ce2febf8160bee48b89f4d9ebd73ed7fc7e79b0a50e4dd1c765ca712e294db80->leave($__internal_ce2febf8160bee48b89f4d9ebd73ed7fc7e79b0a50e4dd1c765ca712e294db80_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0dd38778dff92d603df81ab13da2c78eb330123990c2caccaa3a83e625e75b1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dd38778dff92d603df81ab13da2c78eb330123990c2caccaa3a83e625e75b1f->enter($__internal_0dd38778dff92d603df81ab13da2c78eb330123990c2caccaa3a83e625e75b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bec329bc147bb72840407805cd44671f63f3b2880cac4b334c2ee007d3757016 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bec329bc147bb72840407805cd44671f63f3b2880cac4b334c2ee007d3757016->enter($__internal_bec329bc147bb72840407805cd44671f63f3b2880cac4b334c2ee007d3757016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bec329bc147bb72840407805cd44671f63f3b2880cac4b334c2ee007d3757016->leave($__internal_bec329bc147bb72840407805cd44671f63f3b2880cac4b334c2ee007d3757016_prof);

        
        $__internal_0dd38778dff92d603df81ab13da2c78eb330123990c2caccaa3a83e625e75b1f->leave($__internal_0dd38778dff92d603df81ab13da2c78eb330123990c2caccaa3a83e625e75b1f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e335f18e7e2e2ce2ed304ba72cff372002aa361d6128dfc56717e8654240037d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e335f18e7e2e2ce2ed304ba72cff372002aa361d6128dfc56717e8654240037d->enter($__internal_e335f18e7e2e2ce2ed304ba72cff372002aa361d6128dfc56717e8654240037d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f2c55bd4b94f8b42e55f4073a4bbb04d0c76e496e2b8a2e78f68075fe5db7df2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2c55bd4b94f8b42e55f4073a4bbb04d0c76e496e2b8a2e78f68075fe5db7df2->enter($__internal_f2c55bd4b94f8b42e55f4073a4bbb04d0c76e496e2b8a2e78f68075fe5db7df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_f2c55bd4b94f8b42e55f4073a4bbb04d0c76e496e2b8a2e78f68075fe5db7df2->leave($__internal_f2c55bd4b94f8b42e55f4073a4bbb04d0c76e496e2b8a2e78f68075fe5db7df2_prof);

        
        $__internal_e335f18e7e2e2ce2ed304ba72cff372002aa361d6128dfc56717e8654240037d->leave($__internal_e335f18e7e2e2ce2ed304ba72cff372002aa361d6128dfc56717e8654240037d_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\Pedidos\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
