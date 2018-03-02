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
        $__internal_495880f6a167627c98955b03d6e48a81b34b7956bbad39c78e7820a965dfb7b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_495880f6a167627c98955b03d6e48a81b34b7956bbad39c78e7820a965dfb7b7->enter($__internal_495880f6a167627c98955b03d6e48a81b34b7956bbad39c78e7820a965dfb7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_integer.html.twig"));

        $__internal_35f349ddca4e1fdcf729415ed09ca8f9d1cc781c9b6ffa9ff8f208b13b9033f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35f349ddca4e1fdcf729415ed09ca8f9d1cc781c9b6ffa9ff8f208b13b9033f4->enter($__internal_35f349ddca4e1fdcf729415ed09ca8f9d1cc781c9b6ffa9ff8f208b13b9033f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_integer.html.twig"));

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
        
        $__internal_495880f6a167627c98955b03d6e48a81b34b7956bbad39c78e7820a965dfb7b7->leave($__internal_495880f6a167627c98955b03d6e48a81b34b7956bbad39c78e7820a965dfb7b7_prof);

        
        $__internal_35f349ddca4e1fdcf729415ed09ca8f9d1cc781c9b6ffa9ff8f208b13b9033f4->leave($__internal_35f349ddca4e1fdcf729415ed09ca8f9d1cc781c9b6ffa9ff8f208b13b9033f4_prof);

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
", "@EasyAdmin/default/field_integer.html.twig", "C:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\field_integer.html.twig");
    }
}
