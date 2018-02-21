<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_7f715c0075b41da8c8ee598b1f5e55bdbed2a6ca33a7a69cb62f7c916e668177 extends Twig_Template
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
        $__internal_1b1db8bbc95189d5db6f9538b0bb704fe9acbdca807ee0365adeff3e2d0efef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b1db8bbc95189d5db6f9538b0bb704fe9acbdca807ee0365adeff3e2d0efef8->enter($__internal_1b1db8bbc95189d5db6f9538b0bb704fe9acbdca807ee0365adeff3e2d0efef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_4a277cf02a7c909282e4ece80a75ed388ab2d9325774e5945b9159625f909369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a277cf02a7c909282e4ece80a75ed388ab2d9325774e5945b9159625f909369->enter($__internal_4a277cf02a7c909282e4ece80a75ed388ab2d9325774e5945b9159625f909369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1b1db8bbc95189d5db6f9538b0bb704fe9acbdca807ee0365adeff3e2d0efef8->leave($__internal_1b1db8bbc95189d5db6f9538b0bb704fe9acbdca807ee0365adeff3e2d0efef8_prof);

        
        $__internal_4a277cf02a7c909282e4ece80a75ed388ab2d9325774e5945b9159625f909369->leave($__internal_4a277cf02a7c909282e4ece80a75ed388ab2d9325774e5945b9159625f909369_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
