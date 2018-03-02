<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_eb5a89d7ccb5c773fa48215c42ed7c9e3ebfba397f5fda0093b69fb91d72e66b extends Twig_Template
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
        $__internal_9bf710dbbf32504d0234125cfb59c03d3bd08d89195901e23c0bfea3f44c7da6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf710dbbf32504d0234125cfb59c03d3bd08d89195901e23c0bfea3f44c7da6->enter($__internal_9bf710dbbf32504d0234125cfb59c03d3bd08d89195901e23c0bfea3f44c7da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_2d3f07334787417754815b0ad61449987ec31fafcb4a0a1f35c3702f956ca1e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d3f07334787417754815b0ad61449987ec31fafcb4a0a1f35c3702f956ca1e2->enter($__internal_2d3f07334787417754815b0ad61449987ec31fafcb4a0a1f35c3702f956ca1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_9bf710dbbf32504d0234125cfb59c03d3bd08d89195901e23c0bfea3f44c7da6->leave($__internal_9bf710dbbf32504d0234125cfb59c03d3bd08d89195901e23c0bfea3f44c7da6_prof);

        
        $__internal_2d3f07334787417754815b0ad61449987ec31fafcb4a0a1f35c3702f956ca1e2->leave($__internal_2d3f07334787417754815b0ad61449987ec31fafcb4a0a1f35c3702f956ca1e2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "C:\\Pedidos\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
