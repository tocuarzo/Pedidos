<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_332613b8e8b8f616fb028861003546d9553839afbc50bbee11c7a627b3d33364 extends Twig_Template
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
        $__internal_6483917509ef12602e98dcd38b2b7da4fb874e23d406528089e05cc71ed963ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6483917509ef12602e98dcd38b2b7da4fb874e23d406528089e05cc71ed963ec->enter($__internal_6483917509ef12602e98dcd38b2b7da4fb874e23d406528089e05cc71ed963ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_cf68d075e2792a84ddfa913373387652fff9998aae7547bdea7056f6fdf508c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf68d075e2792a84ddfa913373387652fff9998aae7547bdea7056f6fdf508c8->enter($__internal_cf68d075e2792a84ddfa913373387652fff9998aae7547bdea7056f6fdf508c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_6483917509ef12602e98dcd38b2b7da4fb874e23d406528089e05cc71ed963ec->leave($__internal_6483917509ef12602e98dcd38b2b7da4fb874e23d406528089e05cc71ed963ec_prof);

        
        $__internal_cf68d075e2792a84ddfa913373387652fff9998aae7547bdea7056f6fdf508c8->leave($__internal_cf68d075e2792a84ddfa913373387652fff9998aae7547bdea7056f6fdf508c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
