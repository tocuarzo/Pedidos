<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_1049776fb873378ae1844aaf75def742a2dd7533f03dc01f13ab161467283b40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_610cc13532d1aa49f004c438210b8d164495c776129198ad6b334aec5d3f74bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_610cc13532d1aa49f004c438210b8d164495c776129198ad6b334aec5d3f74bf->enter($__internal_610cc13532d1aa49f004c438210b8d164495c776129198ad6b334aec5d3f74bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_545f11f0fcccae6d1a855e016777ca1d02f6bb389287591d2a3c00ff6ab8f097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_545f11f0fcccae6d1a855e016777ca1d02f6bb389287591d2a3c00ff6ab8f097->enter($__internal_545f11f0fcccae6d1a855e016777ca1d02f6bb389287591d2a3c00ff6ab8f097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_610cc13532d1aa49f004c438210b8d164495c776129198ad6b334aec5d3f74bf->leave($__internal_610cc13532d1aa49f004c438210b8d164495c776129198ad6b334aec5d3f74bf_prof);

        
        $__internal_545f11f0fcccae6d1a855e016777ca1d02f6bb389287591d2a3c00ff6ab8f097->leave($__internal_545f11f0fcccae6d1a855e016777ca1d02f6bb389287591d2a3c00ff6ab8f097_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\Pedidos\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
