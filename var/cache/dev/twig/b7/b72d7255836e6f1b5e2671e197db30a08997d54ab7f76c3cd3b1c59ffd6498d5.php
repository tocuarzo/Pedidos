<?php

/* @EasyAdmin/default/field_text.html.twig */
class __TwigTemplate_35f072842516e645a21175f51381794303c1b743c13abf28f5e1842c202fcd42 extends Twig_Template
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
        $__internal_e4904d3c4bd97338e3445db53417b5b3972d76a9e0639dc2785acdacffaa7dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4904d3c4bd97338e3445db53417b5b3972d76a9e0639dc2785acdacffaa7dfe->enter($__internal_e4904d3c4bd97338e3445db53417b5b3972d76a9e0639dc2785acdacffaa7dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_text.html.twig"));

        $__internal_9fac5d09afda4987d2f4ea4d7f7581beb9d133a941eabf78cefebce8de567e76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fac5d09afda4987d2f4ea4d7f7581beb9d133a941eabf78cefebce8de567e76->enter($__internal_9fac5d09afda4987d2f4ea4d7f7581beb9d133a941eabf78cefebce8de567e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_text.html.twig"));

        // line 1
        if (((isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 1, $this->getSourceContext()); })()) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })())), "html", null, true);
            echo "
";
        }
        
        $__internal_e4904d3c4bd97338e3445db53417b5b3972d76a9e0639dc2785acdacffaa7dfe->leave($__internal_e4904d3c4bd97338e3445db53417b5b3972d76a9e0639dc2785acdacffaa7dfe_prof);

        
        $__internal_9fac5d09afda4987d2f4ea4d7f7581beb9d133a941eabf78cefebce8de567e76->leave($__internal_9fac5d09afda4987d2f4ea4d7f7581beb9d133a941eabf78cefebce8de567e76_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_text.html.twig";
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
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "@EasyAdmin/default/field_text.html.twig", "D:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\field_text.html.twig");
    }
}
