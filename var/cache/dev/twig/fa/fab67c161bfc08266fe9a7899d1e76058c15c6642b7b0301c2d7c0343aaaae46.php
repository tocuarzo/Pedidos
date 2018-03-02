<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_8e02bb7be9e11426d2572ac6516fe885d2b12037d77d19f75d8c5510cd3a0633 extends Twig_Template
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
        $__internal_4a47d7ac5d7a203363a44198f222b7fb50b960c65026a413914d8fe2bbb427d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a47d7ac5d7a203363a44198f222b7fb50b960c65026a413914d8fe2bbb427d0->enter($__internal_4a47d7ac5d7a203363a44198f222b7fb50b960c65026a413914d8fe2bbb427d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_98310ca68df703ffc81e2d5c5edb2eefd7ec0c3045c916a67b4c150815d31ec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98310ca68df703ffc81e2d5c5edb2eefd7ec0c3045c916a67b4c150815d31ec1->enter($__internal_98310ca68df703ffc81e2d5c5edb2eefd7ec0c3045c916a67b4c150815d31ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_4a47d7ac5d7a203363a44198f222b7fb50b960c65026a413914d8fe2bbb427d0->leave($__internal_4a47d7ac5d7a203363a44198f222b7fb50b960c65026a413914d8fe2bbb427d0_prof);

        
        $__internal_98310ca68df703ffc81e2d5c5edb2eefd7ec0c3045c916a67b4c150815d31ec1->leave($__internal_98310ca68df703ffc81e2d5c5edb2eefd7ec0c3045c916a67b4c150815d31ec1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\Pedidos\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
