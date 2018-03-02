<?php

/* @EasyAdmin/default/field_datetimetz.html.twig */
class __TwigTemplate_bcda901d73efd4fb04f78c75cd12d46c88b012808d245bb6b8c961487c71cd3f extends Twig_Template
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
        $__internal_2fcda08635ac3ce55ab0d4572d10c3fd7a91f389b559a5f03572bca8bbdadf6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fcda08635ac3ce55ab0d4572d10c3fd7a91f389b559a5f03572bca8bbdadf6e->enter($__internal_2fcda08635ac3ce55ab0d4572d10c3fd7a91f389b559a5f03572bca8bbdadf6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetimetz.html.twig"));

        $__internal_8cccc991ee640028df3b0c7806ed5da1e462c737ecd314302ae69b25ce195745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cccc991ee640028df3b0c7806ed5da1e462c737ecd314302ae69b25ce195745->enter($__internal_8cccc991ee640028df3b0c7806ed5da1e462c737ecd314302ae69b25ce195745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetimetz.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new Twig_Error_Runtime('Variable "field_options" does not exist.', 1, $this->getSourceContext()); })()), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_2fcda08635ac3ce55ab0d4572d10c3fd7a91f389b559a5f03572bca8bbdadf6e->leave($__internal_2fcda08635ac3ce55ab0d4572d10c3fd7a91f389b559a5f03572bca8bbdadf6e_prof);

        
        $__internal_8cccc991ee640028df3b0c7806ed5da1e462c737ecd314302ae69b25ce195745->leave($__internal_8cccc991ee640028df3b0c7806ed5da1e462c737ecd314302ae69b25ce195745_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_datetimetz.html.twig";
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
", "@EasyAdmin/default/field_datetimetz.html.twig", "C:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\field_datetimetz.html.twig");
    }
}
