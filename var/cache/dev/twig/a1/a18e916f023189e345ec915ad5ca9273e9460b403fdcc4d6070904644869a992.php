<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_8519bfaf6111659bd199f76d07c350c9177accd299ed2cc9ceac3ee2cb148587 extends Twig_Template
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
        $__internal_bc7d6dd8394b74c0d5f77008705f047e3c6135fe34f2f7bd283a6808d1598c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc7d6dd8394b74c0d5f77008705f047e3c6135fe34f2f7bd283a6808d1598c16->enter($__internal_bc7d6dd8394b74c0d5f77008705f047e3c6135fe34f2f7bd283a6808d1598c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_6c19b87e920a4ac5ad454ac64388ca6412fedd5dc8f657a51a3154c32b2b7e43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c19b87e920a4ac5ad454ac64388ca6412fedd5dc8f657a51a3154c32b2b7e43->enter($__internal_6c19b87e920a4ac5ad454ac64388ca6412fedd5dc8f657a51a3154c32b2b7e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_bc7d6dd8394b74c0d5f77008705f047e3c6135fe34f2f7bd283a6808d1598c16->leave($__internal_bc7d6dd8394b74c0d5f77008705f047e3c6135fe34f2f7bd283a6808d1598c16_prof);

        
        $__internal_6c19b87e920a4ac5ad454ac64388ca6412fedd5dc8f657a51a3154c32b2b7e43->leave($__internal_6c19b87e920a4ac5ad454ac64388ca6412fedd5dc8f657a51a3154c32b2b7e43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
