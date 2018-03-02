<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_72f33d057620675ac72bdff2e0e60a646d3046d68659fcc702a6b10a646f6403 extends Twig_Template
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
        $__internal_6f2d08a0f3f13b3d004969b7c3a27bcc1af5fc6745570b3b906f9c4db3da7339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f2d08a0f3f13b3d004969b7c3a27bcc1af5fc6745570b3b906f9c4db3da7339->enter($__internal_6f2d08a0f3f13b3d004969b7c3a27bcc1af5fc6745570b3b906f9c4db3da7339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_996d51b0d92182a5803ce0864995c82bc07bdfb5b81c3607aa658ca4830fd604 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_996d51b0d92182a5803ce0864995c82bc07bdfb5b81c3607aa658ca4830fd604->enter($__internal_996d51b0d92182a5803ce0864995c82bc07bdfb5b81c3607aa658ca4830fd604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_6f2d08a0f3f13b3d004969b7c3a27bcc1af5fc6745570b3b906f9c4db3da7339->leave($__internal_6f2d08a0f3f13b3d004969b7c3a27bcc1af5fc6745570b3b906f9c4db3da7339_prof);

        
        $__internal_996d51b0d92182a5803ce0864995c82bc07bdfb5b81c3607aa658ca4830fd604->leave($__internal_996d51b0d92182a5803ce0864995c82bc07bdfb5b81c3607aa658ca4830fd604_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "C:\\Pedidos\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
