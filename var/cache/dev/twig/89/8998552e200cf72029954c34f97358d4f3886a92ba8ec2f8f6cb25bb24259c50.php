<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_c7e36d9df6f7b3362f54298a39b564796520313552d1dd666365e4a2beb2281d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a2bc0ab21bf427990008761759b242045b1c5f0cb7fc444c5d2aa75ba3bc489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a2bc0ab21bf427990008761759b242045b1c5f0cb7fc444c5d2aa75ba3bc489->enter($__internal_6a2bc0ab21bf427990008761759b242045b1c5f0cb7fc444c5d2aa75ba3bc489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_941f6f7d84f22ecd5838f835e81f8efa709dd2a415fb8812328b908a9e1fc6dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_941f6f7d84f22ecd5838f835e81f8efa709dd2a415fb8812328b908a9e1fc6dd->enter($__internal_941f6f7d84f22ecd5838f835e81f8efa709dd2a415fb8812328b908a9e1fc6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6a2bc0ab21bf427990008761759b242045b1c5f0cb7fc444c5d2aa75ba3bc489->leave($__internal_6a2bc0ab21bf427990008761759b242045b1c5f0cb7fc444c5d2aa75ba3bc489_prof);

        
        $__internal_941f6f7d84f22ecd5838f835e81f8efa709dd2a415fb8812328b908a9e1fc6dd->leave($__internal_941f6f7d84f22ecd5838f835e81f8efa709dd2a415fb8812328b908a9e1fc6dd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_317db2de89432673df64e9248941033eb3d0c4d39420d0be518979fad094bfe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_317db2de89432673df64e9248941033eb3d0c4d39420d0be518979fad094bfe8->enter($__internal_317db2de89432673df64e9248941033eb3d0c4d39420d0be518979fad094bfe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_399d1c75fea763f6203e5fd0ca9bb9a768601bc0fa9e27671108d520d1fbdfa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_399d1c75fea763f6203e5fd0ca9bb9a768601bc0fa9e27671108d520d1fbdfa4->enter($__internal_399d1c75fea763f6203e5fd0ca9bb9a768601bc0fa9e27671108d520d1fbdfa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_399d1c75fea763f6203e5fd0ca9bb9a768601bc0fa9e27671108d520d1fbdfa4->leave($__internal_399d1c75fea763f6203e5fd0ca9bb9a768601bc0fa9e27671108d520d1fbdfa4_prof);

        
        $__internal_317db2de89432673df64e9248941033eb3d0c4d39420d0be518979fad094bfe8->leave($__internal_317db2de89432673df64e9248941033eb3d0c4d39420d0be518979fad094bfe8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\Pedidos\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
