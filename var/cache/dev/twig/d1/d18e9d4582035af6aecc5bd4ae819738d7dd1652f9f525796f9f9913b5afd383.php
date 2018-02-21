<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_caad682dcf76e7e60db622346920f98912abf6ed758a84b31db35d8fe233a157 extends Twig_Template
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
        $__internal_4a8393675ca4f7bfe2c1307b38df2e329b039e98f5698b22817ae954f30c4f8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a8393675ca4f7bfe2c1307b38df2e329b039e98f5698b22817ae954f30c4f8e->enter($__internal_4a8393675ca4f7bfe2c1307b38df2e329b039e98f5698b22817ae954f30c4f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_609ebb14a8e5d24b75f930436b9a990f45909de7ab8b07cfe4764400b5da0419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_609ebb14a8e5d24b75f930436b9a990f45909de7ab8b07cfe4764400b5da0419->enter($__internal_609ebb14a8e5d24b75f930436b9a990f45909de7ab8b07cfe4764400b5da0419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_4a8393675ca4f7bfe2c1307b38df2e329b039e98f5698b22817ae954f30c4f8e->leave($__internal_4a8393675ca4f7bfe2c1307b38df2e329b039e98f5698b22817ae954f30c4f8e_prof);

        
        $__internal_609ebb14a8e5d24b75f930436b9a990f45909de7ab8b07cfe4764400b5da0419->leave($__internal_609ebb14a8e5d24b75f930436b9a990f45909de7ab8b07cfe4764400b5da0419_prof);

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
