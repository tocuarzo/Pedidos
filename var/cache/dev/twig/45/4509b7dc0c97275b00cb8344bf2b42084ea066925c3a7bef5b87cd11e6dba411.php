<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_0e598f33a1cfd9a9d1b6b01d36703e6c29b421a54d65c5a281b2e83938a633b6 extends Twig_Template
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
        $__internal_914a39d2b8514092810306f31916153e774f078f9501119c35d8b7a35ef66e59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_914a39d2b8514092810306f31916153e774f078f9501119c35d8b7a35ef66e59->enter($__internal_914a39d2b8514092810306f31916153e774f078f9501119c35d8b7a35ef66e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_43820d4ea4555c11e5f64a016e4436268562bd73b39ed94062b840783fcb632c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43820d4ea4555c11e5f64a016e4436268562bd73b39ed94062b840783fcb632c->enter($__internal_43820d4ea4555c11e5f64a016e4436268562bd73b39ed94062b840783fcb632c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_914a39d2b8514092810306f31916153e774f078f9501119c35d8b7a35ef66e59->leave($__internal_914a39d2b8514092810306f31916153e774f078f9501119c35d8b7a35ef66e59_prof);

        
        $__internal_43820d4ea4555c11e5f64a016e4436268562bd73b39ed94062b840783fcb632c->leave($__internal_43820d4ea4555c11e5f64a016e4436268562bd73b39ed94062b840783fcb632c_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_b58068c47a554242cf319e3a65be26f904227be4968ae6aaeb39692b991febdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b58068c47a554242cf319e3a65be26f904227be4968ae6aaeb39692b991febdf->enter($__internal_b58068c47a554242cf319e3a65be26f904227be4968ae6aaeb39692b991febdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_016dc91ee4e6ad408119b50e209618165dade82c960e805ad96f24792fa43948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_016dc91ee4e6ad408119b50e209618165dade82c960e805ad96f24792fa43948->enter($__internal_016dc91ee4e6ad408119b50e209618165dade82c960e805ad96f24792fa43948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_016dc91ee4e6ad408119b50e209618165dade82c960e805ad96f24792fa43948->leave($__internal_016dc91ee4e6ad408119b50e209618165dade82c960e805ad96f24792fa43948_prof);

        
        $__internal_b58068c47a554242cf319e3a65be26f904227be4968ae6aaeb39692b991febdf->leave($__internal_b58068c47a554242cf319e3a65be26f904227be4968ae6aaeb39692b991febdf_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ba946f5c567ec9f19e47aea83fbf8878e06df14e2cfe5f57224338cc0263c69e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba946f5c567ec9f19e47aea83fbf8878e06df14e2cfe5f57224338cc0263c69e->enter($__internal_ba946f5c567ec9f19e47aea83fbf8878e06df14e2cfe5f57224338cc0263c69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6b583def131c7a1136befd8a2317dbda4fa807d9ec2ddeef418b6232a12a4691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b583def131c7a1136befd8a2317dbda4fa807d9ec2ddeef418b6232a12a4691->enter($__internal_6b583def131c7a1136befd8a2317dbda4fa807d9ec2ddeef418b6232a12a4691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_6b583def131c7a1136befd8a2317dbda4fa807d9ec2ddeef418b6232a12a4691->leave($__internal_6b583def131c7a1136befd8a2317dbda4fa807d9ec2ddeef418b6232a12a4691_prof);

        
        $__internal_ba946f5c567ec9f19e47aea83fbf8878e06df14e2cfe5f57224338cc0263c69e->leave($__internal_ba946f5c567ec9f19e47aea83fbf8878e06df14e2cfe5f57224338cc0263c69e_prof);

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
