<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_b6237dff4fffec1f66b66cf4008a1ec5b37f5ea0bbf22d9ea0b4a806a5553ad9 extends Twig_Template
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
        $__internal_217108044dd6c078732b0020292f1dc904b3eb2401cb26addb4b306520c97e4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217108044dd6c078732b0020292f1dc904b3eb2401cb26addb4b306520c97e4e->enter($__internal_217108044dd6c078732b0020292f1dc904b3eb2401cb26addb4b306520c97e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_b80b29018973b26121ac747df18924408ff923372b600df367c2c962dc2ad08f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b80b29018973b26121ac747df18924408ff923372b600df367c2c962dc2ad08f->enter($__internal_b80b29018973b26121ac747df18924408ff923372b600df367c2c962dc2ad08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

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
        
        $__internal_217108044dd6c078732b0020292f1dc904b3eb2401cb26addb4b306520c97e4e->leave($__internal_217108044dd6c078732b0020292f1dc904b3eb2401cb26addb4b306520c97e4e_prof);

        
        $__internal_b80b29018973b26121ac747df18924408ff923372b600df367c2c962dc2ad08f->leave($__internal_b80b29018973b26121ac747df18924408ff923372b600df367c2c962dc2ad08f_prof);

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
