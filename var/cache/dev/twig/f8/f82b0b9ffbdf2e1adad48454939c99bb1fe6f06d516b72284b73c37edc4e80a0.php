<?php

/* @EasyAdmin/default/field_smallint.html.twig */
class __TwigTemplate_34a95dc3849601a9c0ca97c0730c6e408990ec51bca52dfdf5e1e98c3a97b1a1 extends Twig_Template
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
        $__internal_516c57d86a5c62e56180226eaadfa356fe7b3cfa62188ed08844d757b7b8f5e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_516c57d86a5c62e56180226eaadfa356fe7b3cfa62188ed08844d757b7b8f5e4->enter($__internal_516c57d86a5c62e56180226eaadfa356fe7b3cfa62188ed08844d757b7b8f5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_smallint.html.twig"));

        $__internal_30fc5dd6dc87172e8f193696d8cb14fd3ff37b5b66e196187824ac0f16724f78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30fc5dd6dc87172e8f193696d8cb14fd3ff37b5b66e196187824ac0f16724f78->enter($__internal_30fc5dd6dc87172e8f193696d8cb14fd3ff37b5b66e196187824ac0f16724f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_smallint.html.twig"));

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
        
        $__internal_516c57d86a5c62e56180226eaadfa356fe7b3cfa62188ed08844d757b7b8f5e4->leave($__internal_516c57d86a5c62e56180226eaadfa356fe7b3cfa62188ed08844d757b7b8f5e4_prof);

        
        $__internal_30fc5dd6dc87172e8f193696d8cb14fd3ff37b5b66e196187824ac0f16724f78->leave($__internal_30fc5dd6dc87172e8f193696d8cb14fd3ff37b5b66e196187824ac0f16724f78_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_smallint.html.twig";
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
", "@EasyAdmin/default/field_smallint.html.twig", "C:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\field_smallint.html.twig");
    }
}
