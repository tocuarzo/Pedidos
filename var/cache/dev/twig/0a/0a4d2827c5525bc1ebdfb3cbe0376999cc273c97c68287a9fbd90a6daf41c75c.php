<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_b9129dc2ef53b37c061fbf5132eaa0cea1c68c543e12b9f4ba06db99aa276f7d extends Twig_Template
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
        $__internal_6a3367494b933b9372450d76b77254eeebc5185ebdb90f09dcff4e4806e3eeea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a3367494b933b9372450d76b77254eeebc5185ebdb90f09dcff4e4806e3eeea->enter($__internal_6a3367494b933b9372450d76b77254eeebc5185ebdb90f09dcff4e4806e3eeea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_f9bfb1b32e7db0285b89a2815f5cfaeebf597816c4a786e22bdba47fa66c3b00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9bfb1b32e7db0285b89a2815f5cfaeebf597816c4a786e22bdba47fa66c3b00->enter($__internal_f9bfb1b32e7db0285b89a2815f5cfaeebf597816c4a786e22bdba47fa66c3b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_6a3367494b933b9372450d76b77254eeebc5185ebdb90f09dcff4e4806e3eeea->leave($__internal_6a3367494b933b9372450d76b77254eeebc5185ebdb90f09dcff4e4806e3eeea_prof);

        
        $__internal_f9bfb1b32e7db0285b89a2815f5cfaeebf597816c4a786e22bdba47fa66c3b00->leave($__internal_f9bfb1b32e7db0285b89a2815f5cfaeebf597816c4a786e22bdba47fa66c3b00_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\Pedidos\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
