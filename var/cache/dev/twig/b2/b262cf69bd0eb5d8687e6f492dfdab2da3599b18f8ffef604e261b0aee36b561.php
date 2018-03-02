<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_a0901590c1a8186f58e9b2bf91bf3e8a0187d86c6c6d1afd4adfcc0fcbbf19ef extends Twig_Template
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
        $__internal_375f1fb4d32f98752b827f42affe84697ee3b1ecf655e33c9ab0d3c0259c9920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_375f1fb4d32f98752b827f42affe84697ee3b1ecf655e33c9ab0d3c0259c9920->enter($__internal_375f1fb4d32f98752b827f42affe84697ee3b1ecf655e33c9ab0d3c0259c9920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_46c4596a68bce225635b1fbd9ff84ecec47be9a46b45d15b5361f7f99e6281d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46c4596a68bce225635b1fbd9ff84ecec47be9a46b45d15b5361f7f99e6281d8->enter($__internal_46c4596a68bce225635b1fbd9ff84ecec47be9a46b45d15b5361f7f99e6281d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_375f1fb4d32f98752b827f42affe84697ee3b1ecf655e33c9ab0d3c0259c9920->leave($__internal_375f1fb4d32f98752b827f42affe84697ee3b1ecf655e33c9ab0d3c0259c9920_prof);

        
        $__internal_46c4596a68bce225635b1fbd9ff84ecec47be9a46b45d15b5361f7f99e6281d8->leave($__internal_46c4596a68bce225635b1fbd9ff84ecec47be9a46b45d15b5361f7f99e6281d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_label.html.php");
    }
}
