<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_cc86fdebabb14632b4fc1b9c813babae96095aefb70d1c54a574895ddad179c5 extends Twig_Template
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
        $__internal_a479394f322bf5c6afce9a4b9126334b8a5272bb15f36961a33ba216f893771c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a479394f322bf5c6afce9a4b9126334b8a5272bb15f36961a33ba216f893771c->enter($__internal_a479394f322bf5c6afce9a4b9126334b8a5272bb15f36961a33ba216f893771c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_045afd78d845406a7908af2ed6af5935f1600abf28773dffb462b92b548966f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_045afd78d845406a7908af2ed6af5935f1600abf28773dffb462b92b548966f6->enter($__internal_045afd78d845406a7908af2ed6af5935f1600abf28773dffb462b92b548966f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_a479394f322bf5c6afce9a4b9126334b8a5272bb15f36961a33ba216f893771c->leave($__internal_a479394f322bf5c6afce9a4b9126334b8a5272bb15f36961a33ba216f893771c_prof);

        
        $__internal_045afd78d845406a7908af2ed6af5935f1600abf28773dffb462b92b548966f6->leave($__internal_045afd78d845406a7908af2ed6af5935f1600abf28773dffb462b92b548966f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
