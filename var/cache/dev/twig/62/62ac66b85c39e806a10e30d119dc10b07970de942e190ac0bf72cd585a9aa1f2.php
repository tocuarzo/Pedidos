<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_42f14d682a92b77e25d5acf09c7137fa1ae7f0d125f41b027f8d09b5240a47c0 extends Twig_Template
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
        $__internal_7b4bd54c525ddc47b3114848aa02ea8d32d33f045f0ef1ce98a048b0d4d1a85d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b4bd54c525ddc47b3114848aa02ea8d32d33f045f0ef1ce98a048b0d4d1a85d->enter($__internal_7b4bd54c525ddc47b3114848aa02ea8d32d33f045f0ef1ce98a048b0d4d1a85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_f498ec9d8cb37ca8cbdf22eff01c4deead9074507f9dd3e6acf4d122135efb6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f498ec9d8cb37ca8cbdf22eff01c4deead9074507f9dd3e6acf4d122135efb6c->enter($__internal_f498ec9d8cb37ca8cbdf22eff01c4deead9074507f9dd3e6acf4d122135efb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_7b4bd54c525ddc47b3114848aa02ea8d32d33f045f0ef1ce98a048b0d4d1a85d->leave($__internal_7b4bd54c525ddc47b3114848aa02ea8d32d33f045f0ef1ce98a048b0d4d1a85d_prof);

        
        $__internal_f498ec9d8cb37ca8cbdf22eff01c4deead9074507f9dd3e6acf4d122135efb6c->leave($__internal_f498ec9d8cb37ca8cbdf22eff01c4deead9074507f9dd3e6acf4d122135efb6c_prof);

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
