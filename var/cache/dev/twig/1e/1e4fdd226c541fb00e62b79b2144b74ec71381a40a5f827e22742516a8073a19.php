<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_8e8df3a42c4ef631dd1f75b1139fa281838b58024a8a4d3950c1a80f6a3a62e0 extends Twig_Template
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
        $__internal_593b9c33a2d764147b937cca9a5d1d6dfe33a98b8e0bcaea94009310103a2d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_593b9c33a2d764147b937cca9a5d1d6dfe33a98b8e0bcaea94009310103a2d83->enter($__internal_593b9c33a2d764147b937cca9a5d1d6dfe33a98b8e0bcaea94009310103a2d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_0e290cc3f39cd544692801da1cb4a5089999bda89eb9931450642c16cb77e839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e290cc3f39cd544692801da1cb4a5089999bda89eb9931450642c16cb77e839->enter($__internal_0e290cc3f39cd544692801da1cb4a5089999bda89eb9931450642c16cb77e839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_593b9c33a2d764147b937cca9a5d1d6dfe33a98b8e0bcaea94009310103a2d83->leave($__internal_593b9c33a2d764147b937cca9a5d1d6dfe33a98b8e0bcaea94009310103a2d83_prof);

        
        $__internal_0e290cc3f39cd544692801da1cb4a5089999bda89eb9931450642c16cb77e839->leave($__internal_0e290cc3f39cd544692801da1cb4a5089999bda89eb9931450642c16cb77e839_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\Pedidos\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
