<?php

/* @EasyAdmin/default/field_guid.html.twig */
class __TwigTemplate_5ad8ff1e7f46577f876a0aefd6c60a821b91f8d552d0694aa6c24e79e5dc1b57 extends Twig_Template
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
        $__internal_f49bf0564f02fc076f5639addf35b781c5a5b94dfabe9e793c69875bb28dab4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f49bf0564f02fc076f5639addf35b781c5a5b94dfabe9e793c69875bb28dab4f->enter($__internal_f49bf0564f02fc076f5639addf35b781c5a5b94dfabe9e793c69875bb28dab4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_guid.html.twig"));

        $__internal_4548a1da45b825751400c7bfc795b36fd338857a60ad0acd36a3ac7708584bc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4548a1da45b825751400c7bfc795b36fd338857a60ad0acd36a3ac7708584bc4->enter($__internal_4548a1da45b825751400c7bfc795b36fd338857a60ad0acd36a3ac7708584bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_guid.html.twig"));

        // line 1
        if (((isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 1, $this->getSourceContext()); })()) == "show")) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })()), 7), "html", null, true);
            echo "
";
        }
        
        $__internal_f49bf0564f02fc076f5639addf35b781c5a5b94dfabe9e793c69875bb28dab4f->leave($__internal_f49bf0564f02fc076f5639addf35b781c5a5b94dfabe9e793c69875bb28dab4f_prof);

        
        $__internal_4548a1da45b825751400c7bfc795b36fd338857a60ad0acd36a3ac7708584bc4->leave($__internal_4548a1da45b825751400c7bfc795b36fd338857a60ad0acd36a3ac7708584bc4_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_guid.html.twig";
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
        return new Twig_Source("{% if view == 'show' %}
    {{ value }}
{% else %}
    {{ value|easyadmin_truncate(7) }}
{% endif %}
", "@EasyAdmin/default/field_guid.html.twig", "C:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\field_guid.html.twig");
    }
}
