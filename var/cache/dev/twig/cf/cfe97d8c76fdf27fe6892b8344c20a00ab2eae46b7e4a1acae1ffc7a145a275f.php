<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_193ee7239105b453dc7204131e4ab322478a5689bbfed055c637d4effbb31f72 extends Twig_Template
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
        $__internal_27e12e793213fba3da00e8f81e70fba6cd6bf0b4caefa5b3661acb1bb86d82ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e12e793213fba3da00e8f81e70fba6cd6bf0b4caefa5b3661acb1bb86d82ee->enter($__internal_27e12e793213fba3da00e8f81e70fba6cd6bf0b4caefa5b3661acb1bb86d82ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_278a11103ccaa33e90376241ea44cec2e6bac7225a9c5d28f874b539fb87fd06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_278a11103ccaa33e90376241ea44cec2e6bac7225a9c5d28f874b539fb87fd06->enter($__internal_278a11103ccaa33e90376241ea44cec2e6bac7225a9c5d28f874b539fb87fd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_27e12e793213fba3da00e8f81e70fba6cd6bf0b4caefa5b3661acb1bb86d82ee->leave($__internal_27e12e793213fba3da00e8f81e70fba6cd6bf0b4caefa5b3661acb1bb86d82ee_prof);

        
        $__internal_278a11103ccaa33e90376241ea44cec2e6bac7225a9c5d28f874b539fb87fd06->leave($__internal_278a11103ccaa33e90376241ea44cec2e6bac7225a9c5d28f874b539fb87fd06_prof);

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
