<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_d66b880a27c6cf4de4b66f6ae86a3a1808050faeace37ae34681601ab36e8441 extends Twig_Template
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
        $__internal_323f5ff830e7fa382e6216feffac0a498184570563eefbac0add71139cbb92ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_323f5ff830e7fa382e6216feffac0a498184570563eefbac0add71139cbb92ac->enter($__internal_323f5ff830e7fa382e6216feffac0a498184570563eefbac0add71139cbb92ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_2199d253d5bd8cd1e52c236fe0b7efa7ca71970701263d5b4961393a44768a13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2199d253d5bd8cd1e52c236fe0b7efa7ca71970701263d5b4961393a44768a13->enter($__internal_2199d253d5bd8cd1e52c236fe0b7efa7ca71970701263d5b4961393a44768a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_323f5ff830e7fa382e6216feffac0a498184570563eefbac0add71139cbb92ac->leave($__internal_323f5ff830e7fa382e6216feffac0a498184570563eefbac0add71139cbb92ac_prof);

        
        $__internal_2199d253d5bd8cd1e52c236fe0b7efa7ca71970701263d5b4961393a44768a13->leave($__internal_2199d253d5bd8cd1e52c236fe0b7efa7ca71970701263d5b4961393a44768a13_prof);

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
