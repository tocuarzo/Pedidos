<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_5bada380bf4dbf27acf3e05923945eac04c4eb357fc3e00341e49dabc071247b extends Twig_Template
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
        $__internal_a1778eca82f68813e78c20a9c32b630c1e447a55dd358b448711f3cc02050800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1778eca82f68813e78c20a9c32b630c1e447a55dd358b448711f3cc02050800->enter($__internal_a1778eca82f68813e78c20a9c32b630c1e447a55dd358b448711f3cc02050800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_6fce17cfa41ed7e7968246234d1606d27344efca9b1b35c62e298dc5280f1bd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fce17cfa41ed7e7968246234d1606d27344efca9b1b35c62e298dc5280f1bd4->enter($__internal_6fce17cfa41ed7e7968246234d1606d27344efca9b1b35c62e298dc5280f1bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a1778eca82f68813e78c20a9c32b630c1e447a55dd358b448711f3cc02050800->leave($__internal_a1778eca82f68813e78c20a9c32b630c1e447a55dd358b448711f3cc02050800_prof);

        
        $__internal_6fce17cfa41ed7e7968246234d1606d27344efca9b1b35c62e298dc5280f1bd4->leave($__internal_6fce17cfa41ed7e7968246234d1606d27344efca9b1b35c62e298dc5280f1bd4_prof);

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
