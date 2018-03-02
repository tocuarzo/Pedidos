<?php

/* @EasyAdmin/default/field_float.html.twig */
class __TwigTemplate_127e0cdfd74b1e055bc6b6466bbfa9412df0780a7bed07c61da6c89e6371a577 extends Twig_Template
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
        $__internal_047b6a3e4a6f4aa7fd82394464682ad43d6c814b3b3a026bd2c09eda7e1d0100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_047b6a3e4a6f4aa7fd82394464682ad43d6c814b3b3a026bd2c09eda7e1d0100->enter($__internal_047b6a3e4a6f4aa7fd82394464682ad43d6c814b3b3a026bd2c09eda7e1d0100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_float.html.twig"));

        $__internal_01a06136d3cd888689d96089218b862f96d6286218721cb7d60ade08e4732e6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01a06136d3cd888689d96089218b862f96d6286218721cb7d60ade08e4732e6f->enter($__internal_01a06136d3cd888689d96089218b862f96d6286218721cb7d60ade08e4732e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_float.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new Twig_Error_Runtime('Variable "field_options" does not exist.', 1, $this->getSourceContext()); })()), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new Twig_Error_Runtime('Variable "field_options" does not exist.', 2, $this->getSourceContext()); })()), "format", array()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })())), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })()), 2), "html", null, true);
            echo "
";
        }
        
        $__internal_047b6a3e4a6f4aa7fd82394464682ad43d6c814b3b3a026bd2c09eda7e1d0100->leave($__internal_047b6a3e4a6f4aa7fd82394464682ad43d6c814b3b3a026bd2c09eda7e1d0100_prof);

        
        $__internal_01a06136d3cd888689d96089218b862f96d6286218721cb7d60ade08e4732e6f->leave($__internal_01a06136d3cd888689d96089218b862f96d6286218721cb7d60ade08e4732e6f_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_float.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if field_options.format %}
    {{ field_options.format|format(value) }}
{% else %}
    {{ value|number_format(2) }}
{% endif %}
", "@EasyAdmin/default/field_float.html.twig", "C:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\field_float.html.twig");
    }
}
