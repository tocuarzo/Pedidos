<?php

/* @EasyAdmin/default/field_bigint.html.twig */
class __TwigTemplate_e1d1a519dd93e7317595538df0a8e070135b9f47120cc2662c10127b43655e05 extends Twig_Template
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
        $__internal_05da78eaa2f2939ac1bf5f4a1ee965a5346ccd4abeb4a1b1f41db4d406f3411e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05da78eaa2f2939ac1bf5f4a1ee965a5346ccd4abeb4a1b1f41db4d406f3411e->enter($__internal_05da78eaa2f2939ac1bf5f4a1ee965a5346ccd4abeb4a1b1f41db4d406f3411e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_bigint.html.twig"));

        $__internal_f7c36049c253fa71782ecc04f509da78e4361715f57b05cf2d39f1ee7aaeac0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7c36049c253fa71782ecc04f509da78e4361715f57b05cf2d39f1ee7aaeac0b->enter($__internal_f7c36049c253fa71782ecc04f509da78e4361715f57b05cf2d39f1ee7aaeac0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_bigint.html.twig"));

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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })())), "html", null, true);
            echo "
";
        }
        
        $__internal_05da78eaa2f2939ac1bf5f4a1ee965a5346ccd4abeb4a1b1f41db4d406f3411e->leave($__internal_05da78eaa2f2939ac1bf5f4a1ee965a5346ccd4abeb4a1b1f41db4d406f3411e_prof);

        
        $__internal_f7c36049c253fa71782ecc04f509da78e4361715f57b05cf2d39f1ee7aaeac0b->leave($__internal_f7c36049c253fa71782ecc04f509da78e4361715f57b05cf2d39f1ee7aaeac0b_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_bigint.html.twig";
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
    {{ value|number_format }}
{% endif %}
", "@EasyAdmin/default/field_bigint.html.twig", "C:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\field_bigint.html.twig");
    }
}
