<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_3a95e3cbb8fe63ea51bb7cdf18208e3941b0fc6eb8eb8ca48f73f7045af9679a extends Twig_Template
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
        $__internal_6b03baa3db527ee65aa8d5d52494ade860bf3aee7b8ce2ab544f299593f27602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b03baa3db527ee65aa8d5d52494ade860bf3aee7b8ce2ab544f299593f27602->enter($__internal_6b03baa3db527ee65aa8d5d52494ade860bf3aee7b8ce2ab544f299593f27602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_d07f6818494d9445df65405431255fdf1b2680b504e63d0053134c35bb15a39a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d07f6818494d9445df65405431255fdf1b2680b504e63d0053134c35bb15a39a->enter($__internal_d07f6818494d9445df65405431255fdf1b2680b504e63d0053134c35bb15a39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6b03baa3db527ee65aa8d5d52494ade860bf3aee7b8ce2ab544f299593f27602->leave($__internal_6b03baa3db527ee65aa8d5d52494ade860bf3aee7b8ce2ab544f299593f27602_prof);

        
        $__internal_d07f6818494d9445df65405431255fdf1b2680b504e63d0053134c35bb15a39a->leave($__internal_d07f6818494d9445df65405431255fdf1b2680b504e63d0053134c35bb15a39a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
