<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_30d7434a7caafcaec78b6c3adc736d63cea300b6b785f55bbae4bba1f4888588 extends Twig_Template
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
        $__internal_a646700e884330d2f2a63e8e49e8b022c0f06decbbc4d94c1bc111a741a36d9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a646700e884330d2f2a63e8e49e8b022c0f06decbbc4d94c1bc111a741a36d9e->enter($__internal_a646700e884330d2f2a63e8e49e8b022c0f06decbbc4d94c1bc111a741a36d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_f0c40d5de8acd391a7df98ebae3071c5a585f57bf992e7280ba5a2c055ddd5b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0c40d5de8acd391a7df98ebae3071c5a585f57bf992e7280ba5a2c055ddd5b8->enter($__internal_f0c40d5de8acd391a7df98ebae3071c5a585f57bf992e7280ba5a2c055ddd5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_a646700e884330d2f2a63e8e49e8b022c0f06decbbc4d94c1bc111a741a36d9e->leave($__internal_a646700e884330d2f2a63e8e49e8b022c0f06decbbc4d94c1bc111a741a36d9e_prof);

        
        $__internal_f0c40d5de8acd391a7df98ebae3071c5a585f57bf992e7280ba5a2c055ddd5b8->leave($__internal_f0c40d5de8acd391a7df98ebae3071c5a585f57bf992e7280ba5a2c055ddd5b8_prof);

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
