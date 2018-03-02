<?php

/* @EasyAdmin/default/field_image.html.twig */
class __TwigTemplate_803e44219caf043b7811febebdac97cf179f9c1a98d798961d68cc0c0b2a0adf extends Twig_Template
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
        $__internal_b79a9b4370f3a85e38e21d2d8371d9c06d8297b3688152724ced0e2d3d0ff1ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b79a9b4370f3a85e38e21d2d8371d9c06d8297b3688152724ced0e2d3d0ff1ea->enter($__internal_b79a9b4370f3a85e38e21d2d8371d9c06d8297b3688152724ced0e2d3d0ff1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_image.html.twig"));

        $__internal_750ee139c9eea9f425795a042066e39467a86699c41e1379f087f20895f99e26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_750ee139c9eea9f425795a042066e39467a86699c41e1379f087f20895f99e26->enter($__internal_750ee139c9eea9f425795a042066e39467a86699c41e1379f087f20895f99e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_image.html.twig"));

        // line 1
        echo "<a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#easyadmin-lightbox-";
        echo twig_escape_filter($this->env, (isset($context["uuid"]) || array_key_exists("uuid", $context) ? $context["uuid"] : (function () { throw new Twig_Error_Runtime('Variable "uuid" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "\" data-featherlight-close-on-click=\"anywhere\">
    <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })())), "html", null, true);
        echo "\">
</a>

<div id=\"easyadmin-lightbox-";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["uuid"]) || array_key_exists("uuid", $context) ? $context["uuid"] : (function () { throw new Twig_Error_Runtime('Variable "uuid" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "\" class=\"easyadmin-lightbox\">
    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 6, $this->getSourceContext()); })())), "html", null, true);
        echo "\">
</div>
";
        
        $__internal_b79a9b4370f3a85e38e21d2d8371d9c06d8297b3688152724ced0e2d3d0ff1ea->leave($__internal_b79a9b4370f3a85e38e21d2d8371d9c06d8297b3688152724ced0e2d3d0ff1ea_prof);

        
        $__internal_750ee139c9eea9f425795a042066e39467a86699c41e1379f087f20895f99e26->leave($__internal_750ee139c9eea9f425795a042066e39467a86699c41e1379f087f20895f99e26_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  36 => 5,  30 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#easyadmin-lightbox-{{ uuid }}\" data-featherlight-close-on-click=\"anywhere\">
    <img src=\"{{ asset(value) }}\">
</a>

<div id=\"easyadmin-lightbox-{{ uuid }}\" class=\"easyadmin-lightbox\">
    <img src=\"{{ asset(value) }}\">
</div>
", "@EasyAdmin/default/field_image.html.twig", "C:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\field_image.html.twig");
    }
}
