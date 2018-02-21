<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_8cd18a20fa574a707054e3422ecb788280993b5e867501c9a5907f9edd7b4ae8 extends Twig_Template
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
        $__internal_c42dba84f30b11eb49f39019e0fd8d21787ffbc16ca8df591a06239c61ba448f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c42dba84f30b11eb49f39019e0fd8d21787ffbc16ca8df591a06239c61ba448f->enter($__internal_c42dba84f30b11eb49f39019e0fd8d21787ffbc16ca8df591a06239c61ba448f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_85e876fc209ea4b762624c121711a68934f7e13ca613f43b2eb81f7ea2a3616b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85e876fc209ea4b762624c121711a68934f7e13ca613f43b2eb81f7ea2a3616b->enter($__internal_85e876fc209ea4b762624c121711a68934f7e13ca613f43b2eb81f7ea2a3616b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_c42dba84f30b11eb49f39019e0fd8d21787ffbc16ca8df591a06239c61ba448f->leave($__internal_c42dba84f30b11eb49f39019e0fd8d21787ffbc16ca8df591a06239c61ba448f_prof);

        
        $__internal_85e876fc209ea4b762624c121711a68934f7e13ca613f43b2eb81f7ea2a3616b->leave($__internal_85e876fc209ea4b762624c121711a68934f7e13ca613f43b2eb81f7ea2a3616b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "C:\\Pedidos\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
