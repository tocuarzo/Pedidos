<?php

/* @EasyAdmin/default/field_date.html.twig */
class __TwigTemplate_6df41a1b0e0851a711439cd68175b456ce1be465b1283f921d62ab0415452d43 extends Twig_Template
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
        $__internal_c6e0f99d93ad0d6318959dce12c2f543300db0a9e6f6a19261bafcaecf904723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e0f99d93ad0d6318959dce12c2f543300db0a9e6f6a19261bafcaecf904723->enter($__internal_c6e0f99d93ad0d6318959dce12c2f543300db0a9e6f6a19261bafcaecf904723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_date.html.twig"));

        $__internal_6b8bd903e24699ff6669a74c685163485b11a799ab2863ea99310dd33ab7fcf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b8bd903e24699ff6669a74c685163485b11a799ab2863ea99310dd33ab7fcf1->enter($__internal_6b8bd903e24699ff6669a74c685163485b11a799ab2863ea99310dd33ab7fcf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new Twig_Error_Runtime('Variable "field_options" does not exist.', 1, $this->getSourceContext()); })()), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_c6e0f99d93ad0d6318959dce12c2f543300db0a9e6f6a19261bafcaecf904723->leave($__internal_c6e0f99d93ad0d6318959dce12c2f543300db0a9e6f6a19261bafcaecf904723_prof);

        
        $__internal_6b8bd903e24699ff6669a74c685163485b11a799ab2863ea99310dd33ab7fcf1->leave($__internal_6b8bd903e24699ff6669a74c685163485b11a799ab2863ea99310dd33ab7fcf1_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_date.html.twig";
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
", "@EasyAdmin/default/field_date.html.twig", "C:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\field_date.html.twig");
    }
}
