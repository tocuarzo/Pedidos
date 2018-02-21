<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_5110659c6dd9b9d21b6a1db5fbcd75632c0b89bf73fad639404d561fe4f097e3 extends Twig_Template
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
        $__internal_6e567477f0312774629927881a62f7416d86595c64959624ea4228aba19dc138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e567477f0312774629927881a62f7416d86595c64959624ea4228aba19dc138->enter($__internal_6e567477f0312774629927881a62f7416d86595c64959624ea4228aba19dc138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_18ecd9999d4334efe734fdf4d15499865f4052279483b22897a6f3105fe17df1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18ecd9999d4334efe734fdf4d15499865f4052279483b22897a6f3105fe17df1->enter($__internal_18ecd9999d4334efe734fdf4d15499865f4052279483b22897a6f3105fe17df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_6e567477f0312774629927881a62f7416d86595c64959624ea4228aba19dc138->leave($__internal_6e567477f0312774629927881a62f7416d86595c64959624ea4228aba19dc138_prof);

        
        $__internal_18ecd9999d4334efe734fdf4d15499865f4052279483b22897a6f3105fe17df1->leave($__internal_18ecd9999d4334efe734fdf4d15499865f4052279483b22897a6f3105fe17df1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\Pedidos\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
