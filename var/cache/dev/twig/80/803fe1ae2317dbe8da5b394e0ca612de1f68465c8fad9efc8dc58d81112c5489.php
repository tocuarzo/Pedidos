<?php

/* @EasyAdmin/default/field_toggle.html.twig */
class __TwigTemplate_8af357abf932fb89e48130b99d481ac1bea9f7c849f04ffc39e319d795ed3dbe extends Twig_Template
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
        $__internal_5928ced3ea00e1dfd82d0edf5b30044e25b898c707e547f223284aa78f0695cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5928ced3ea00e1dfd82d0edf5b30044e25b898c707e547f223284aa78f0695cb->enter($__internal_5928ced3ea00e1dfd82d0edf5b30044e25b898c707e547f223284aa78f0695cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_toggle.html.twig"));

        $__internal_e9ba3e5df6964f19508db2f3468c0f6807ca0adeac2bdbe4c50dd1bdf9128d7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9ba3e5df6964f19508db2f3468c0f6807ca0adeac2bdbe4c50dd1bdf9128d7c->enter($__internal_e9ba3e5df6964f19508db2f3468c0f6807ca0adeac2bdbe4c50dd1bdf9128d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_toggle.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((((isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 3, $this->getSourceContext()); })()) == "show") || twig_in_filter("edit", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["backend_config"]) || array_key_exists("backend_config", $context) ? $context["backend_config"] : (function () { throw new Twig_Error_Runtime('Variable "backend_config" does not exist.', 3, $this->getSourceContext()); })()), "disabled_actions", array())))) {
            // line 4
            echo "    ";
            if (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })()) == true)) {
                // line 5
                echo "        <span class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
    ";
            } else {
                // line 7
                echo "        <span class=\"label label-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
    ";
            }
        } else {
            // line 10
            echo "    <input type=\"checkbox\" ";
            echo ((((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 10, $this->getSourceContext()); })()) == true)) ? ("checked") : (""));
            echo "
       data-toggle=\"toggle\" data-size=\"mini\"
       data-onstyle=\"success\" data-offstyle=\"danger\"
       data-on=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
            echo "\" data-off=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
            echo "\">
";
        }
        
        $__internal_5928ced3ea00e1dfd82d0edf5b30044e25b898c707e547f223284aa78f0695cb->leave($__internal_5928ced3ea00e1dfd82d0edf5b30044e25b898c707e547f223284aa78f0695cb_prof);

        
        $__internal_e9ba3e5df6964f19508db2f3468c0f6807ca0adeac2bdbe4c50dd1bdf9128d7c->leave($__internal_e9ba3e5df6964f19508db2f3468c0f6807ca0adeac2bdbe4c50dd1bdf9128d7c_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  46 => 10,  39 => 7,  33 => 5,  30 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

{% if view == 'show' or ('edit' in backend_config.disabled_actions) %}
    {% if value == true %}
        <span class=\"label label-success\">{{ 'label.true'|trans }}</span>
    {% else %}
        <span class=\"label label-danger\">{{ 'label.false'|trans }}</span>
    {% endif %}
{% else %}
    <input type=\"checkbox\" {{ value == true ? 'checked' : '' }}
       data-toggle=\"toggle\" data-size=\"mini\"
       data-onstyle=\"success\" data-offstyle=\"danger\"
       data-on=\"{{ 'label.true'|trans }}\" data-off=\"{{ 'label.false'|trans }}\">
{% endif %}
", "@EasyAdmin/default/field_toggle.html.twig", "D:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\field_toggle.html.twig");
    }
}
