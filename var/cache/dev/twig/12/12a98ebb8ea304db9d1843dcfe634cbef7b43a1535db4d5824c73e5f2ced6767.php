<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_e3496a38f8d4d83da401c9a46797372541863a354961c54a0f6fbf00bf451755 extends Twig_Template
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
        $__internal_7b4830567fc11e7e429023662e904847a278aa75979bbd48dc7365fddb724863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b4830567fc11e7e429023662e904847a278aa75979bbd48dc7365fddb724863->enter($__internal_7b4830567fc11e7e429023662e904847a278aa75979bbd48dc7365fddb724863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_3061a9b008124df1e14c6dad0bfbd9a0f474d37700a4f8b92da9ebd4f4ecf359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3061a9b008124df1e14c6dad0bfbd9a0f474d37700a4f8b92da9ebd4f4ecf359->enter($__internal_3061a9b008124df1e14c6dad0bfbd9a0f474d37700a4f8b92da9ebd4f4ecf359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_7b4830567fc11e7e429023662e904847a278aa75979bbd48dc7365fddb724863->leave($__internal_7b4830567fc11e7e429023662e904847a278aa75979bbd48dc7365fddb724863_prof);

        
        $__internal_3061a9b008124df1e14c6dad0bfbd9a0f474d37700a4f8b92da9ebd4f4ecf359->leave($__internal_3061a9b008124df1e14c6dad0bfbd9a0f474d37700a4f8b92da9ebd4f4ecf359_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
