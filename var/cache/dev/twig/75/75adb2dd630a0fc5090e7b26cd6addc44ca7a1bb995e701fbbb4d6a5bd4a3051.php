<?php

/* @EasyAdmin/default/field_id.html.twig */
class __TwigTemplate_cf2d517e536d296d2153497a38c8b6528349f21f6b42f3e0f6c5599f95f8fdd0 extends Twig_Template
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
        $__internal_a5b2edf3656e3a4197b898743aa44cbeb30b5f2a38646fcb8b9f1fbf38203e79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b2edf3656e3a4197b898743aa44cbeb30b5f2a38646fcb8b9f1fbf38203e79->enter($__internal_a5b2edf3656e3a4197b898743aa44cbeb30b5f2a38646fcb8b9f1fbf38203e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        $__internal_85ffc4a1e0d4aac4292de271e317413028aff94e2b43094010e6498eeb82ee9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85ffc4a1e0d4aac4292de271e317413028aff94e2b43094010e6498eeb82ee9f->enter($__internal_85ffc4a1e0d4aac4292de271e317413028aff94e2b43094010e6498eeb82ee9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
        echo "
";
        
        $__internal_a5b2edf3656e3a4197b898743aa44cbeb30b5f2a38646fcb8b9f1fbf38203e79->leave($__internal_a5b2edf3656e3a4197b898743aa44cbeb30b5f2a38646fcb8b9f1fbf38203e79_prof);

        
        $__internal_85ffc4a1e0d4aac4292de271e317413028aff94e2b43094010e6498eeb82ee9f->leave($__internal_85ffc4a1e0d4aac4292de271e317413028aff94e2b43094010e6498eeb82ee9f_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "@EasyAdmin/default/field_id.html.twig", "C:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\field_id.html.twig");
    }
}
