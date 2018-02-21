<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d6d243bbf86e445e198a397bec199ecc4c544df8ca5c99d5ffee71a872ce940f extends Twig_Template
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
        $__internal_efd0acbfd0e1e160907c24e0c646c94fe9209d6f3b3a2c5a71a9ca119b8ebe83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efd0acbfd0e1e160907c24e0c646c94fe9209d6f3b3a2c5a71a9ca119b8ebe83->enter($__internal_efd0acbfd0e1e160907c24e0c646c94fe9209d6f3b3a2c5a71a9ca119b8ebe83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_f34d9a2c93c25447b56b6a88445750b2df98735f92645aa2510a1113ec92b8d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f34d9a2c93c25447b56b6a88445750b2df98735f92645aa2510a1113ec92b8d8->enter($__internal_f34d9a2c93c25447b56b6a88445750b2df98735f92645aa2510a1113ec92b8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_efd0acbfd0e1e160907c24e0c646c94fe9209d6f3b3a2c5a71a9ca119b8ebe83->leave($__internal_efd0acbfd0e1e160907c24e0c646c94fe9209d6f3b3a2c5a71a9ca119b8ebe83_prof);

        
        $__internal_f34d9a2c93c25447b56b6a88445750b2df98735f92645aa2510a1113ec92b8d8->leave($__internal_f34d9a2c93c25447b56b6a88445750b2df98735f92645aa2510a1113ec92b8d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
