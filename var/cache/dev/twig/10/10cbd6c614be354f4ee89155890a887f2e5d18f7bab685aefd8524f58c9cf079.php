<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_c03e6692dbbc6dcf2dbbf1b42c2d6416712b2cf4442b51c13db912aa78b5e6ad extends Twig_Template
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
        $__internal_f4954a6d6b71a8e31b9823bc9dada8ab841cfa578a50b5e28b6b36558d9f9222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4954a6d6b71a8e31b9823bc9dada8ab841cfa578a50b5e28b6b36558d9f9222->enter($__internal_f4954a6d6b71a8e31b9823bc9dada8ab841cfa578a50b5e28b6b36558d9f9222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_cd4b86b2ae42cc3b5bbc2275e59b9eded0e3fc3c93d40c9ce8b287721e871964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd4b86b2ae42cc3b5bbc2275e59b9eded0e3fc3c93d40c9ce8b287721e871964->enter($__internal_cd4b86b2ae42cc3b5bbc2275e59b9eded0e3fc3c93d40c9ce8b287721e871964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_f4954a6d6b71a8e31b9823bc9dada8ab841cfa578a50b5e28b6b36558d9f9222->leave($__internal_f4954a6d6b71a8e31b9823bc9dada8ab841cfa578a50b5e28b6b36558d9f9222_prof);

        
        $__internal_cd4b86b2ae42cc3b5bbc2275e59b9eded0e3fc3c93d40c9ce8b287721e871964->leave($__internal_cd4b86b2ae42cc3b5bbc2275e59b9eded0e3fc3c93d40c9ce8b287721e871964_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\Pedidos\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
