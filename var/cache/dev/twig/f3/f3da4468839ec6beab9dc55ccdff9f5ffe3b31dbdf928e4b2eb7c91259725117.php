<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_a46a65579a49780b269fb10ff4a835e1bacc8602641e921239dff44d2c22ac98 extends Twig_Template
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
        $__internal_0afeea449a352d31c471e3c50ed00e8fb4977aa67d90dd4d3a7ca2b3326c8ec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0afeea449a352d31c471e3c50ed00e8fb4977aa67d90dd4d3a7ca2b3326c8ec8->enter($__internal_0afeea449a352d31c471e3c50ed00e8fb4977aa67d90dd4d3a7ca2b3326c8ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_6f5099cf98f2028c472bb57797e58d9665f9b37cf14ae3cecd7647cc92d68b90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f5099cf98f2028c472bb57797e58d9665f9b37cf14ae3cecd7647cc92d68b90->enter($__internal_6f5099cf98f2028c472bb57797e58d9665f9b37cf14ae3cecd7647cc92d68b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_0afeea449a352d31c471e3c50ed00e8fb4977aa67d90dd4d3a7ca2b3326c8ec8->leave($__internal_0afeea449a352d31c471e3c50ed00e8fb4977aa67d90dd4d3a7ca2b3326c8ec8_prof);

        
        $__internal_6f5099cf98f2028c472bb57797e58d9665f9b37cf14ae3cecd7647cc92d68b90->leave($__internal_6f5099cf98f2028c472bb57797e58d9665f9b37cf14ae3cecd7647cc92d68b90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
