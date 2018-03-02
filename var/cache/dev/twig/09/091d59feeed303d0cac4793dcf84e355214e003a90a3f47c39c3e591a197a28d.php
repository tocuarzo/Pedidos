<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_54e1fd47a7d2f5e0ce482c93fea2deaa4cd162849a54a8b882e9a23178c44ef1 extends Twig_Template
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
        $__internal_f38b29f772c2392018428b466ed1c77766a179c826ee29877733256c471e7ce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f38b29f772c2392018428b466ed1c77766a179c826ee29877733256c471e7ce4->enter($__internal_f38b29f772c2392018428b466ed1c77766a179c826ee29877733256c471e7ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_3487a9ddde684460f157493b7be5121e032ed033196263310c87b93bebc4f879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3487a9ddde684460f157493b7be5121e032ed033196263310c87b93bebc4f879->enter($__internal_3487a9ddde684460f157493b7be5121e032ed033196263310c87b93bebc4f879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_f38b29f772c2392018428b466ed1c77766a179c826ee29877733256c471e7ce4->leave($__internal_f38b29f772c2392018428b466ed1c77766a179c826ee29877733256c471e7ce4_prof);

        
        $__internal_3487a9ddde684460f157493b7be5121e032ed033196263310c87b93bebc4f879->leave($__internal_3487a9ddde684460f157493b7be5121e032ed033196263310c87b93bebc4f879_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
