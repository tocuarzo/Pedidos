<?php

/* @EasyAdmin/default/field_integer.html.twig */
class __TwigTemplate_9e99ce1d8888025500b686dcdf5e3c8ceb5521bf2f3b74b250b70d775e8f9aed extends Twig_Template
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
        $__internal_36ed657fdd273adc64379d39c6432bffac5c0d25ec761abf43779acca776f4ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ed657fdd273adc64379d39c6432bffac5c0d25ec761abf43779acca776f4ee->enter($__internal_36ed657fdd273adc64379d39c6432bffac5c0d25ec761abf43779acca776f4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_integer.html.twig"));

        $__internal_b6d6a1aa84044a78c27b8ce773448ef271e2eada145c20b5510e7f12d2ab05a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6d6a1aa84044a78c27b8ce773448ef271e2eada145c20b5510e7f12d2ab05a0->enter($__internal_b6d6a1aa84044a78c27b8ce773448ef271e2eada145c20b5510e7f12d2ab05a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_integer.html.twig"));

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
        
        $__internal_36ed657fdd273adc64379d39c6432bffac5c0d25ec761abf43779acca776f4ee->leave($__internal_36ed657fdd273adc64379d39c6432bffac5c0d25ec761abf43779acca776f4ee_prof);

        
        $__internal_b6d6a1aa84044a78c27b8ce773448ef271e2eada145c20b5510e7f12d2ab05a0->leave($__internal_b6d6a1aa84044a78c27b8ce773448ef271e2eada145c20b5510e7f12d2ab05a0_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_integer.html.twig";
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
", "@EasyAdmin/default/field_integer.html.twig", "D:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\field_integer.html.twig");
    }
}
