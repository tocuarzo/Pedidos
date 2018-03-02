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
        $__internal_3797f7b7bd54f1c91e2500a0e7a4e5a98c516deb6ec26872a6dfd791b144502f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3797f7b7bd54f1c91e2500a0e7a4e5a98c516deb6ec26872a6dfd791b144502f->enter($__internal_3797f7b7bd54f1c91e2500a0e7a4e5a98c516deb6ec26872a6dfd791b144502f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_text.html.twig"));

        $__internal_ce623c3d15922c153b69a33b67e8b3c7b154b5c978cc9daffc801ad78469e550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce623c3d15922c153b69a33b67e8b3c7b154b5c978cc9daffc801ad78469e550->enter($__internal_ce623c3d15922c153b69a33b67e8b3c7b154b5c978cc9daffc801ad78469e550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_text.html.twig"));

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
        
        $__internal_3797f7b7bd54f1c91e2500a0e7a4e5a98c516deb6ec26872a6dfd791b144502f->leave($__internal_3797f7b7bd54f1c91e2500a0e7a4e5a98c516deb6ec26872a6dfd791b144502f_prof);

        
        $__internal_ce623c3d15922c153b69a33b67e8b3c7b154b5c978cc9daffc801ad78469e550->leave($__internal_ce623c3d15922c153b69a33b67e8b3c7b154b5c978cc9daffc801ad78469e550_prof);

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
", "@EasyAdmin/default/field_text.html.twig", "C:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\field_text.html.twig");
    }
}
