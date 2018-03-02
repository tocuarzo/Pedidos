<?php

/* @EasyAdmin/default/field_decimal.html.twig */
class __TwigTemplate_21d2b8440e3d691aa5c3eb144fa1375d28c5150779d0fdf6daf550e91da49c2a extends Twig_Template
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
        $__internal_7503c01e05aeccd90af068771accf342eec85fa7b53d567c99ce26cce8618807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7503c01e05aeccd90af068771accf342eec85fa7b53d567c99ce26cce8618807->enter($__internal_7503c01e05aeccd90af068771accf342eec85fa7b53d567c99ce26cce8618807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_decimal.html.twig"));

        $__internal_c31c76342d5f1f6d48e8f97d2bcd820aaecc869f04ad5aec5d8dda0b8eb5118a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c31c76342d5f1f6d48e8f97d2bcd820aaecc869f04ad5aec5d8dda0b8eb5118a->enter($__internal_c31c76342d5f1f6d48e8f97d2bcd820aaecc869f04ad5aec5d8dda0b8eb5118a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_decimal.html.twig"));

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
        
        $__internal_7503c01e05aeccd90af068771accf342eec85fa7b53d567c99ce26cce8618807->leave($__internal_7503c01e05aeccd90af068771accf342eec85fa7b53d567c99ce26cce8618807_prof);

        
        $__internal_c31c76342d5f1f6d48e8f97d2bcd820aaecc869f04ad5aec5d8dda0b8eb5118a->leave($__internal_c31c76342d5f1f6d48e8f97d2bcd820aaecc869f04ad5aec5d8dda0b8eb5118a_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_decimal.html.twig";
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
", "@EasyAdmin/default/field_decimal.html.twig", "C:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\field_decimal.html.twig");
    }
}
