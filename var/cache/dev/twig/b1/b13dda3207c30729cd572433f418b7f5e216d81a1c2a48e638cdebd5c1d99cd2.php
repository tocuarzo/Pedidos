<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_0acc9bf6893d5760779cf9b4812ba2094c77d46e8920a05e71de0bb20eec7a92 extends Twig_Template
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
        $__internal_f70aa794756cbda7bf9a6273e8766b8667a9348bc825b21387c65ba4f0cf56ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f70aa794756cbda7bf9a6273e8766b8667a9348bc825b21387c65ba4f0cf56ba->enter($__internal_f70aa794756cbda7bf9a6273e8766b8667a9348bc825b21387c65ba4f0cf56ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_6b91dfcbae05f83297148b86f97441c31e29b75be7f6dcdd6ebc7a8e0a0bfc10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b91dfcbae05f83297148b86f97441c31e29b75be7f6dcdd6ebc7a8e0a0bfc10->enter($__internal_6b91dfcbae05f83297148b86f97441c31e29b75be7f6dcdd6ebc7a8e0a0bfc10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f70aa794756cbda7bf9a6273e8766b8667a9348bc825b21387c65ba4f0cf56ba->leave($__internal_f70aa794756cbda7bf9a6273e8766b8667a9348bc825b21387c65ba4f0cf56ba_prof);

        
        $__internal_6b91dfcbae05f83297148b86f97441c31e29b75be7f6dcdd6ebc7a8e0a0bfc10->leave($__internal_6b91dfcbae05f83297148b86f97441c31e29b75be7f6dcdd6ebc7a8e0a0bfc10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
