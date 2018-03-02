<?php

/* @EasyAdmin/default/field_time.html.twig */
class __TwigTemplate_6c3b91c4a64f8ccfab4b229ab41afa5387fe92f78ec89568e878fb94787e5824 extends Twig_Template
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
        $__internal_4db5131ca6c68a94fc0124e05aa56363f2c7ded249d6fb693e291b971486f498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4db5131ca6c68a94fc0124e05aa56363f2c7ded249d6fb693e291b971486f498->enter($__internal_4db5131ca6c68a94fc0124e05aa56363f2c7ded249d6fb693e291b971486f498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_time.html.twig"));

        $__internal_31e16da2bded9bb1f28bb3ecc870b5c32bcb68050a7c9104493bfca2cecba782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31e16da2bded9bb1f28bb3ecc870b5c32bcb68050a7c9104493bfca2cecba782->enter($__internal_31e16da2bded9bb1f28bb3ecc870b5c32bcb68050a7c9104493bfca2cecba782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_time.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new Twig_Error_Runtime('Variable "field_options" does not exist.', 1, $this->getSourceContext()); })()), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_4db5131ca6c68a94fc0124e05aa56363f2c7ded249d6fb693e291b971486f498->leave($__internal_4db5131ca6c68a94fc0124e05aa56363f2c7ded249d6fb693e291b971486f498_prof);

        
        $__internal_31e16da2bded9bb1f28bb3ecc870b5c32bcb68050a7c9104493bfca2cecba782->leave($__internal_31e16da2bded9bb1f28bb3ecc870b5c32bcb68050a7c9104493bfca2cecba782_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_time.html.twig";
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
", "@EasyAdmin/default/field_time.html.twig", "C:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\field_time.html.twig");
    }
}
