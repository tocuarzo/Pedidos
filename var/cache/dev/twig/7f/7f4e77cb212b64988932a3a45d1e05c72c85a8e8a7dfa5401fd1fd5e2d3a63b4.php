<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_239ebe569c7c8c536e86b9e2fe7b099ee6df17059c276a9065fc0b558fada5f8 extends Twig_Template
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
        $__internal_d43949becd249162b7562ccc33588f22748eb5fb014a2cc8a61fae145cf85f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d43949becd249162b7562ccc33588f22748eb5fb014a2cc8a61fae145cf85f67->enter($__internal_d43949becd249162b7562ccc33588f22748eb5fb014a2cc8a61fae145cf85f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_fbd6035f8ff43761cd0cbfdc943b1b9d52cd0e33e9dc6ae78de47a909b33d7e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbd6035f8ff43761cd0cbfdc943b1b9d52cd0e33e9dc6ae78de47a909b33d7e7->enter($__internal_fbd6035f8ff43761cd0cbfdc943b1b9d52cd0e33e9dc6ae78de47a909b33d7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d43949becd249162b7562ccc33588f22748eb5fb014a2cc8a61fae145cf85f67->leave($__internal_d43949becd249162b7562ccc33588f22748eb5fb014a2cc8a61fae145cf85f67_prof);

        
        $__internal_fbd6035f8ff43761cd0cbfdc943b1b9d52cd0e33e9dc6ae78de47a909b33d7e7->leave($__internal_fbd6035f8ff43761cd0cbfdc943b1b9d52cd0e33e9dc6ae78de47a909b33d7e7_prof);

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
