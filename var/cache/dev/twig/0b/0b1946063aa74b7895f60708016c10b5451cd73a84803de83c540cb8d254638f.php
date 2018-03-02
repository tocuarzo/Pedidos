<?php

/* @EasyAdmin/default/label_null.html.twig */
class __TwigTemplate_b691d89f25830fa18f91cddaa19272e0ddb0b39f9155f40d1c839b0bdffa2bd2 extends Twig_Template
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
        $__internal_d318ef8550bb4757b27b35020d2ddd3bf083e0f4769ab3ada0d09bff28d48caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d318ef8550bb4757b27b35020d2ddd3bf083e0f4769ab3ada0d09bff28d48caf->enter($__internal_d318ef8550bb4757b27b35020d2ddd3bf083e0f4769ab3ada0d09bff28d48caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        $__internal_6eb137753b6c196a69308319c35d523a96d71fe0212303dcae1f3df194fcc6f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eb137753b6c196a69308319c35d523a96d71fe0212303dcae1f3df194fcc6f5->enter($__internal_6eb137753b6c196a69308319c35d523a96d71fe0212303dcae1f3df194fcc6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_d318ef8550bb4757b27b35020d2ddd3bf083e0f4769ab3ada0d09bff28d48caf->leave($__internal_d318ef8550bb4757b27b35020d2ddd3bf083e0f4769ab3ada0d09bff28d48caf_prof);

        
        $__internal_6eb137753b6c196a69308319c35d523a96d71fe0212303dcae1f3df194fcc6f5->leave($__internal_6eb137753b6c196a69308319c35d523a96d71fe0212303dcae1f3df194fcc6f5_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_null.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"label\">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>
", "@EasyAdmin/default/label_null.html.twig", "C:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\label_null.html.twig");
    }
}
