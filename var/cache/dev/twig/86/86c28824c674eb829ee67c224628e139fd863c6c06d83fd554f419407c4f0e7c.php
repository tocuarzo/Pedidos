<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_de18c1b9388c02729c1109f9f8aa0893cf0f99ed1b85a624ea4a6082237877fa extends Twig_Template
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
        $__internal_b3fc9c2d512cda209e4d8e824e18276fb8d0e70c4fe46d4a9ee9178c1c40cce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3fc9c2d512cda209e4d8e824e18276fb8d0e70c4fe46d4a9ee9178c1c40cce0->enter($__internal_b3fc9c2d512cda209e4d8e824e18276fb8d0e70c4fe46d4a9ee9178c1c40cce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_712c8c796177189e72b6f989f7a8f54f102208aec4d1f6baabc446d76a4cd706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_712c8c796177189e72b6f989f7a8f54f102208aec4d1f6baabc446d76a4cd706->enter($__internal_712c8c796177189e72b6f989f7a8f54f102208aec4d1f6baabc446d76a4cd706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_b3fc9c2d512cda209e4d8e824e18276fb8d0e70c4fe46d4a9ee9178c1c40cce0->leave($__internal_b3fc9c2d512cda209e4d8e824e18276fb8d0e70c4fe46d4a9ee9178c1c40cce0_prof);

        
        $__internal_712c8c796177189e72b6f989f7a8f54f102208aec4d1f6baabc446d76a4cd706->leave($__internal_712c8c796177189e72b6f989f7a8f54f102208aec4d1f6baabc446d76a4cd706_prof);

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
