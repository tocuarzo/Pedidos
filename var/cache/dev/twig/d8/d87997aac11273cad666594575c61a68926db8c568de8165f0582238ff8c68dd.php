<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_4665a774854135f687ae668133c5199ee17c3717de7519ef822e52af106bcecb extends Twig_Template
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
        $__internal_e4ecb9aca847603814edb0e74d3631c1f1186f5c3e6902e3a078ab3b712eece3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4ecb9aca847603814edb0e74d3631c1f1186f5c3e6902e3a078ab3b712eece3->enter($__internal_e4ecb9aca847603814edb0e74d3631c1f1186f5c3e6902e3a078ab3b712eece3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_bfc3e3e1179d033420047d1bd64b7a8a9a863387c9dcba0c5adbb16db68ebedc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfc3e3e1179d033420047d1bd64b7a8a9a863387c9dcba0c5adbb16db68ebedc->enter($__internal_bfc3e3e1179d033420047d1bd64b7a8a9a863387c9dcba0c5adbb16db68ebedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_e4ecb9aca847603814edb0e74d3631c1f1186f5c3e6902e3a078ab3b712eece3->leave($__internal_e4ecb9aca847603814edb0e74d3631c1f1186f5c3e6902e3a078ab3b712eece3_prof);

        
        $__internal_bfc3e3e1179d033420047d1bd64b7a8a9a863387c9dcba0c5adbb16db68ebedc->leave($__internal_bfc3e3e1179d033420047d1bd64b7a8a9a863387c9dcba0c5adbb16db68ebedc_prof);

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
