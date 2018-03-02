<?php

/* @EasyAdmin/default/field_datetime.html.twig */
class __TwigTemplate_591f5ee1835c7df59330061035ebfc4d075de4a83e1e7875a44c153559097901 extends Twig_Template
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
        $__internal_14b0ebb5421716ed0ddee5d97ab2bf9b65d7a9945cb8ca983cbbbda1bcbea4be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14b0ebb5421716ed0ddee5d97ab2bf9b65d7a9945cb8ca983cbbbda1bcbea4be->enter($__internal_14b0ebb5421716ed0ddee5d97ab2bf9b65d7a9945cb8ca983cbbbda1bcbea4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        $__internal_0e0a3443076e191e3e6d1fb4b6bb63025915f0f87c0ef057feaf832b054a85e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e0a3443076e191e3e6d1fb4b6bb63025915f0f87c0ef057feaf832b054a85e8->enter($__internal_0e0a3443076e191e3e6d1fb4b6bb63025915f0f87c0ef057feaf832b054a85e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new Twig_Error_Runtime('Variable "field_options" does not exist.', 1, $this->getSourceContext()); })()), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_14b0ebb5421716ed0ddee5d97ab2bf9b65d7a9945cb8ca983cbbbda1bcbea4be->leave($__internal_14b0ebb5421716ed0ddee5d97ab2bf9b65d7a9945cb8ca983cbbbda1bcbea4be_prof);

        
        $__internal_0e0a3443076e191e3e6d1fb4b6bb63025915f0f87c0ef057feaf832b054a85e8->leave($__internal_0e0a3443076e191e3e6d1fb4b6bb63025915f0f87c0ef057feaf832b054a85e8_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_datetime.html.twig";
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
        return new Twig_Source("{{ value|date(field_options.format) }}
", "@EasyAdmin/default/field_datetime.html.twig", "C:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\field_datetime.html.twig");
    }
}
