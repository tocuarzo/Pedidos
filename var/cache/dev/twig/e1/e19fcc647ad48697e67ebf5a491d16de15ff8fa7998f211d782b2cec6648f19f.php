<?php

/* @EasyAdmin/default/field_email.html.twig */
class __TwigTemplate_832fc3a53387d7b016dc0aaadd2a48fcf1889634d3ea6663f2b2f7a33f4ec0bf extends Twig_Template
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
        $__internal_20fc61b0953cdf888a950e19e57145bd8db6c006f6c9cf5a8090ed6f1ac780a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20fc61b0953cdf888a950e19e57145bd8db6c006f6c9cf5a8090ed6f1ac780a0->enter($__internal_20fc61b0953cdf888a950e19e57145bd8db6c006f6c9cf5a8090ed6f1ac780a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_email.html.twig"));

        $__internal_9ef1cb8762c8f059a3fd504f9757e4508dd55fbfcadb02011bac8459eac5cf3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ef1cb8762c8f059a3fd504f9757e4508dd55fbfcadb02011bac8459eac5cf3e->enter($__internal_9ef1cb8762c8f059a3fd504f9757e4508dd55fbfcadb02011bac8459eac5cf3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_email.html.twig"));

        // line 1
        if (((isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 1, $this->getSourceContext()); })()) == "show")) {
            // line 2
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
            echo "</a>
";
        } else {
            // line 4
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })())), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_20fc61b0953cdf888a950e19e57145bd8db6c006f6c9cf5a8090ed6f1ac780a0->leave($__internal_20fc61b0953cdf888a950e19e57145bd8db6c006f6c9cf5a8090ed6f1ac780a0_prof);

        
        $__internal_9ef1cb8762c8f059a3fd504f9757e4508dd55fbfcadb02011bac8459eac5cf3e->leave($__internal_9ef1cb8762c8f059a3fd504f9757e4508dd55fbfcadb02011bac8459eac5cf3e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    <a href=\"mailto:{{ value }}\">{{ value }}</a>
{% else %}
    <a href=\"mailto:{{ value }}\">{{ value|easyadmin_truncate }}</a>
{% endif %}
", "@EasyAdmin/default/field_email.html.twig", "D:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\field_email.html.twig");
    }
}
