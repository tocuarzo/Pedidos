<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_c16e106cea98ee9b03e1a9cf66376fe3bc26fb7b240f070287013d25b4275b81 extends Twig_Template
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
        $__internal_ba74f681a9c9eba7b39d81b4268f1da345b51e91d7cd4e5f39f026b601d17a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba74f681a9c9eba7b39d81b4268f1da345b51e91d7cd4e5f39f026b601d17a58->enter($__internal_ba74f681a9c9eba7b39d81b4268f1da345b51e91d7cd4e5f39f026b601d17a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_323db3cb851335476eceb240c0e27b03afd7a2a4912ad3e667e88ea9d65c0ac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_323db3cb851335476eceb240c0e27b03afd7a2a4912ad3e667e88ea9d65c0ac5->enter($__internal_323db3cb851335476eceb240c0e27b03afd7a2a4912ad3e667e88ea9d65c0ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_ba74f681a9c9eba7b39d81b4268f1da345b51e91d7cd4e5f39f026b601d17a58->leave($__internal_ba74f681a9c9eba7b39d81b4268f1da345b51e91d7cd4e5f39f026b601d17a58_prof);

        
        $__internal_323db3cb851335476eceb240c0e27b03afd7a2a4912ad3e667e88ea9d65c0ac5->leave($__internal_323db3cb851335476eceb240c0e27b03afd7a2a4912ad3e667e88ea9d65c0ac5_prof);

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
