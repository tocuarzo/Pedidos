<?php

/* @EasyAdmin/default/label_inaccessible.html.twig */
class __TwigTemplate_c1ad85c15638e78a659fca9e0aedbc74beefaf7170e2291d74312fc03aab4282 extends Twig_Template
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
        $__internal_4a4c47131366829554e2fbb7f7855a5e0242abe503691698b4e1b65fded01a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a4c47131366829554e2fbb7f7855a5e0242abe503691698b4e1b65fded01a48->enter($__internal_4a4c47131366829554e2fbb7f7855a5e0242abe503691698b4e1b65fded01a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_inaccessible.html.twig"));

        $__internal_c50f56de06d2eef064719daa07edbf3407cb3ac913e00db971e2cd934e935e30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c50f56de06d2eef064719daa07edbf3407cb3ac913e00db971e2cd934e935e30->enter($__internal_c50f56de06d2eef064719daa07edbf3407cb3ac913e00db971e2cd934e935e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_inaccessible.html.twig"));

        // line 2
        echo "
<span class=\"label label-danger\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible.explanation", array(), "EasyAdminBundle"), "html", null, true);
        echo "\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible", array(), "EasyAdminBundle"), "html", null, true);
        echo "
</span>
";
        
        $__internal_4a4c47131366829554e2fbb7f7855a5e0242abe503691698b4e1b65fded01a48->leave($__internal_4a4c47131366829554e2fbb7f7855a5e0242abe503691698b4e1b65fded01a48_prof);

        
        $__internal_c50f56de06d2eef064719daa07edbf3407cb3ac913e00db971e2cd934e935e30->leave($__internal_c50f56de06d2eef064719daa07edbf3407cb3ac913e00db971e2cd934e935e30_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_inaccessible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

<span class=\"label label-danger\" title=\"{{ 'label.inaccessible.explanation'|trans }}\">
    {{ 'label.inaccessible'|trans }}
</span>
", "@EasyAdmin/default/label_inaccessible.html.twig", "C:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\label_inaccessible.html.twig");
    }
}
