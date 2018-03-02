<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_2f256efad0f8318a2e0525aa74717f2bf6c2393c91321b44110b5bdd8490b2d9 extends Twig_Template
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
        $__internal_56c0e0ab9e646a22d75eec076836e33e632ceaaf925f2c7dd7ade7dc4e61feba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56c0e0ab9e646a22d75eec076836e33e632ceaaf925f2c7dd7ade7dc4e61feba->enter($__internal_56c0e0ab9e646a22d75eec076836e33e632ceaaf925f2c7dd7ade7dc4e61feba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_acee1fcac4f5616ceaee0e94ebe83ced8e1bfcf4b7b1120b5f85f9cb471d7234 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acee1fcac4f5616ceaee0e94ebe83ced8e1bfcf4b7b1120b5f85f9cb471d7234->enter($__internal_acee1fcac4f5616ceaee0e94ebe83ced8e1bfcf4b7b1120b5f85f9cb471d7234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_56c0e0ab9e646a22d75eec076836e33e632ceaaf925f2c7dd7ade7dc4e61feba->leave($__internal_56c0e0ab9e646a22d75eec076836e33e632ceaaf925f2c7dd7ade7dc4e61feba_prof);

        
        $__internal_acee1fcac4f5616ceaee0e94ebe83ced8e1bfcf4b7b1120b5f85f9cb471d7234->leave($__internal_acee1fcac4f5616ceaee0e94ebe83ced8e1bfcf4b7b1120b5f85f9cb471d7234_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
