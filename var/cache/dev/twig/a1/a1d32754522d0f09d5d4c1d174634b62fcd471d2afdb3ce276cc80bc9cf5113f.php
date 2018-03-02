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
        $__internal_c2c020a02262aa8b553a1ff34be17c687e89f3e5786386b93167c21cd025a8fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2c020a02262aa8b553a1ff34be17c687e89f3e5786386b93167c21cd025a8fd->enter($__internal_c2c020a02262aa8b553a1ff34be17c687e89f3e5786386b93167c21cd025a8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_inaccessible.html.twig"));

        $__internal_db8d309a49e1c98391f19ccc8bf69591ffe2e650da976d6bb07546f162c8b0c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db8d309a49e1c98391f19ccc8bf69591ffe2e650da976d6bb07546f162c8b0c5->enter($__internal_db8d309a49e1c98391f19ccc8bf69591ffe2e650da976d6bb07546f162c8b0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_inaccessible.html.twig"));

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
        
        $__internal_c2c020a02262aa8b553a1ff34be17c687e89f3e5786386b93167c21cd025a8fd->leave($__internal_c2c020a02262aa8b553a1ff34be17c687e89f3e5786386b93167c21cd025a8fd_prof);

        
        $__internal_db8d309a49e1c98391f19ccc8bf69591ffe2e650da976d6bb07546f162c8b0c5->leave($__internal_db8d309a49e1c98391f19ccc8bf69591ffe2e650da976d6bb07546f162c8b0c5_prof);

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
", "@EasyAdmin/default/label_inaccessible.html.twig", "D:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\label_inaccessible.html.twig");
    }
}
