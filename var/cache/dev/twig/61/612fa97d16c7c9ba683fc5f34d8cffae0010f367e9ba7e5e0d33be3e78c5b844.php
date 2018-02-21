<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_a0570c99c4a968784a1340bacaaf76f327571db11e9fa4ddafd63f0abb5135cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6fb8dd656abae1fbd12f4bbe3fe5210a3206a066f1789bbd45a1ac492173c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6fb8dd656abae1fbd12f4bbe3fe5210a3206a066f1789bbd45a1ac492173c4b->enter($__internal_e6fb8dd656abae1fbd12f4bbe3fe5210a3206a066f1789bbd45a1ac492173c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_18fc35ae58a11bdbcb9630d85d7637c229c50d31c269ffd8556e9779910acfda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18fc35ae58a11bdbcb9630d85d7637c229c50d31c269ffd8556e9779910acfda->enter($__internal_18fc35ae58a11bdbcb9630d85d7637c229c50d31c269ffd8556e9779910acfda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6fb8dd656abae1fbd12f4bbe3fe5210a3206a066f1789bbd45a1ac492173c4b->leave($__internal_e6fb8dd656abae1fbd12f4bbe3fe5210a3206a066f1789bbd45a1ac492173c4b_prof);

        
        $__internal_18fc35ae58a11bdbcb9630d85d7637c229c50d31c269ffd8556e9779910acfda->leave($__internal_18fc35ae58a11bdbcb9630d85d7637c229c50d31c269ffd8556e9779910acfda_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9345fef1a7125979644eec3df6278dd0f8f1152860caf03e2363e477cd41565f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9345fef1a7125979644eec3df6278dd0f8f1152860caf03e2363e477cd41565f->enter($__internal_9345fef1a7125979644eec3df6278dd0f8f1152860caf03e2363e477cd41565f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bf061caff5c2620839127c163a83809c7ff300ec90f3effcd7356ee7d5b405ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf061caff5c2620839127c163a83809c7ff300ec90f3effcd7356ee7d5b405ed->enter($__internal_bf061caff5c2620839127c163a83809c7ff300ec90f3effcd7356ee7d5b405ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_bf061caff5c2620839127c163a83809c7ff300ec90f3effcd7356ee7d5b405ed->leave($__internal_bf061caff5c2620839127c163a83809c7ff300ec90f3effcd7356ee7d5b405ed_prof);

        
        $__internal_9345fef1a7125979644eec3df6278dd0f8f1152860caf03e2363e477cd41565f->leave($__internal_9345fef1a7125979644eec3df6278dd0f8f1152860caf03e2363e477cd41565f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f79bdaa3552f3a6712ed4b1d8a8528b548aab0a483ac8225c47e169d2f4d9d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f79bdaa3552f3a6712ed4b1d8a8528b548aab0a483ac8225c47e169d2f4d9d4->enter($__internal_2f79bdaa3552f3a6712ed4b1d8a8528b548aab0a483ac8225c47e169d2f4d9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a70618c8d33346a27b9a6386a9f80e2280316ed0cf2f9db6ed74904e0c109e92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a70618c8d33346a27b9a6386a9f80e2280316ed0cf2f9db6ed74904e0c109e92->enter($__internal_a70618c8d33346a27b9a6386a9f80e2280316ed0cf2f9db6ed74904e0c109e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_a70618c8d33346a27b9a6386a9f80e2280316ed0cf2f9db6ed74904e0c109e92->leave($__internal_a70618c8d33346a27b9a6386a9f80e2280316ed0cf2f9db6ed74904e0c109e92_prof);

        
        $__internal_2f79bdaa3552f3a6712ed4b1d8a8528b548aab0a483ac8225c47e169d2f4d9d4->leave($__internal_2f79bdaa3552f3a6712ed4b1d8a8528b548aab0a483ac8225c47e169d2f4d9d4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\Pedidos\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
