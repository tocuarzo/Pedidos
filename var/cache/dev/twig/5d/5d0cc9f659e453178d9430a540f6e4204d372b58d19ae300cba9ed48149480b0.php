<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_d2cbb62ce90f89fd90cc89aa67adc5561e95b2fc34a634b458c481781656ec27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_538894022f46417b19b10212861c2211a3aff0d23e0190f024a8e2c38ea44ee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_538894022f46417b19b10212861c2211a3aff0d23e0190f024a8e2c38ea44ee1->enter($__internal_538894022f46417b19b10212861c2211a3aff0d23e0190f024a8e2c38ea44ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_e4d122efd26a0b72873b320c785deb8f7932a19d11084319bdf19cc9d45462f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4d122efd26a0b72873b320c785deb8f7932a19d11084319bdf19cc9d45462f6->enter($__internal_e4d122efd26a0b72873b320c785deb8f7932a19d11084319bdf19cc9d45462f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_538894022f46417b19b10212861c2211a3aff0d23e0190f024a8e2c38ea44ee1->leave($__internal_538894022f46417b19b10212861c2211a3aff0d23e0190f024a8e2c38ea44ee1_prof);

        
        $__internal_e4d122efd26a0b72873b320c785deb8f7932a19d11084319bdf19cc9d45462f6->leave($__internal_e4d122efd26a0b72873b320c785deb8f7932a19d11084319bdf19cc9d45462f6_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_e6e8d4b6a8bfefec951508ed35e7ce153d20d28751bd1f7b501353891010a4a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6e8d4b6a8bfefec951508ed35e7ce153d20d28751bd1f7b501353891010a4a2->enter($__internal_e6e8d4b6a8bfefec951508ed35e7ce153d20d28751bd1f7b501353891010a4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_645f4370bd58f1c7f5ec90c2a6aae101efb47cf9c27b4e156a010ec59b44c190 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_645f4370bd58f1c7f5ec90c2a6aae101efb47cf9c27b4e156a010ec59b44c190->enter($__internal_645f4370bd58f1c7f5ec90c2a6aae101efb47cf9c27b4e156a010ec59b44c190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_645f4370bd58f1c7f5ec90c2a6aae101efb47cf9c27b4e156a010ec59b44c190->leave($__internal_645f4370bd58f1c7f5ec90c2a6aae101efb47cf9c27b4e156a010ec59b44c190_prof);

        
        $__internal_e6e8d4b6a8bfefec951508ed35e7ce153d20d28751bd1f7b501353891010a4a2->leave($__internal_e6e8d4b6a8bfefec951508ed35e7ce153d20d28751bd1f7b501353891010a4a2_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a5a7948b96e9cdaf97ac2caa170bb8b9c19e68dc88896fc8121a99bc3bf962ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5a7948b96e9cdaf97ac2caa170bb8b9c19e68dc88896fc8121a99bc3bf962ae->enter($__internal_a5a7948b96e9cdaf97ac2caa170bb8b9c19e68dc88896fc8121a99bc3bf962ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4603a60bf9eb8300155d0d717816ca89e5ed97b530ff785de632246b43a9a6cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4603a60bf9eb8300155d0d717816ca89e5ed97b530ff785de632246b43a9a6cf->enter($__internal_4603a60bf9eb8300155d0d717816ca89e5ed97b530ff785de632246b43a9a6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_4603a60bf9eb8300155d0d717816ca89e5ed97b530ff785de632246b43a9a6cf->leave($__internal_4603a60bf9eb8300155d0d717816ca89e5ed97b530ff785de632246b43a9a6cf_prof);

        
        $__internal_a5a7948b96e9cdaf97ac2caa170bb8b9c19e68dc88896fc8121a99bc3bf962ae->leave($__internal_a5a7948b96e9cdaf97ac2caa170bb8b9c19e68dc88896fc8121a99bc3bf962ae_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\Pedidos\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
