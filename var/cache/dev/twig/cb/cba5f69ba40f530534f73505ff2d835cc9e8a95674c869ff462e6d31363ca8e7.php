<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_aaf803a854a331cee0471f2e4fdc07a3e61692155ba86c8c3b481cebf7b73eb7 extends Twig_Template
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
        $__internal_aed5a0924344a43c38abf665e8c5df39465416715bce176b5d457e5165c14328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed5a0924344a43c38abf665e8c5df39465416715bce176b5d457e5165c14328->enter($__internal_aed5a0924344a43c38abf665e8c5df39465416715bce176b5d457e5165c14328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_cfc1314608a690e604390dcf74ca86d31680f10be044abb72889614e42a04a2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfc1314608a690e604390dcf74ca86d31680f10be044abb72889614e42a04a2b->enter($__internal_cfc1314608a690e604390dcf74ca86d31680f10be044abb72889614e42a04a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_aed5a0924344a43c38abf665e8c5df39465416715bce176b5d457e5165c14328->leave($__internal_aed5a0924344a43c38abf665e8c5df39465416715bce176b5d457e5165c14328_prof);

        
        $__internal_cfc1314608a690e604390dcf74ca86d31680f10be044abb72889614e42a04a2b->leave($__internal_cfc1314608a690e604390dcf74ca86d31680f10be044abb72889614e42a04a2b_prof);

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
