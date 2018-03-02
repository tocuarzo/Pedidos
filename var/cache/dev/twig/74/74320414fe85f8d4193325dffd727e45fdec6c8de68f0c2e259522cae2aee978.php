<?php

/* @EasyAdmin/default/field_boolean.html.twig */
class __TwigTemplate_d8b4e96b826d2ea4e0fc709da6dde4821070cb7ba77197387c99c5f5fabde1f3 extends Twig_Template
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
        $__internal_9b8d6ba55d34302bf766b1d1c769d7f2ba82fa6208f9829876995425f7660512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b8d6ba55d34302bf766b1d1c769d7f2ba82fa6208f9829876995425f7660512->enter($__internal_9b8d6ba55d34302bf766b1d1c769d7f2ba82fa6208f9829876995425f7660512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_boolean.html.twig"));

        $__internal_c9c886fca8b0214471d6bf35dbbfcafa4274b25de32423ce984152e957c05966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9c886fca8b0214471d6bf35dbbfcafa4274b25de32423ce984152e957c05966->enter($__internal_c9c886fca8b0214471d6bf35dbbfcafa4274b25de32423ce984152e957c05966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_boolean.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 3, $this->getSourceContext()); })()) == true)) {
            // line 4
            echo "    <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        } else {
            // line 6
            echo "    <span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        }
        
        $__internal_9b8d6ba55d34302bf766b1d1c769d7f2ba82fa6208f9829876995425f7660512->leave($__internal_9b8d6ba55d34302bf766b1d1c769d7f2ba82fa6208f9829876995425f7660512_prof);

        
        $__internal_c9c886fca8b0214471d6bf35dbbfcafa4274b25de32423ce984152e957c05966->leave($__internal_c9c886fca8b0214471d6bf35dbbfcafa4274b25de32423ce984152e957c05966_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

{% if value == true %}
    <span class=\"label label-success\">{{ 'label.true'|trans }}</span>
{% else %}
    <span class=\"label label-danger\">{{ 'label.false'|trans }}</span>
{% endif %}
", "@EasyAdmin/default/field_boolean.html.twig", "C:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\field_boolean.html.twig");
    }
}
