<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_36df9cb6efb5766d2fc94fa80a6cecd2020d94a2c7c793c0957997d9182ad59c extends Twig_Template
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
        $__internal_6622351847d34a5e67b87bf1cae36f3baa9bf54d616d36af68c40ab209efd6db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6622351847d34a5e67b87bf1cae36f3baa9bf54d616d36af68c40ab209efd6db->enter($__internal_6622351847d34a5e67b87bf1cae36f3baa9bf54d616d36af68c40ab209efd6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_999aa8c2ea344f61c0295631b81ac6365b685b8cf25459b45cbc583341f8b7a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_999aa8c2ea344f61c0295631b81ac6365b685b8cf25459b45cbc583341f8b7a4->enter($__internal_999aa8c2ea344f61c0295631b81ac6365b685b8cf25459b45cbc583341f8b7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_6622351847d34a5e67b87bf1cae36f3baa9bf54d616d36af68c40ab209efd6db->leave($__internal_6622351847d34a5e67b87bf1cae36f3baa9bf54d616d36af68c40ab209efd6db_prof);

        
        $__internal_999aa8c2ea344f61c0295631b81ac6365b685b8cf25459b45cbc583341f8b7a4->leave($__internal_999aa8c2ea344f61c0295631b81ac6365b685b8cf25459b45cbc583341f8b7a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
