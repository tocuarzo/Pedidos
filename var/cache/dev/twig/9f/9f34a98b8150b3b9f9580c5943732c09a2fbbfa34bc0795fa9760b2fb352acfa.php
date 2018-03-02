<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_7ec77972f1be8b62d40dfeb9f5ad73d8b2272e7d76681dd2bccc85494b0e1336 extends Twig_Template
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
        $__internal_901d14702fb92edd6227a6e3abeddf1a425756d2feae76cad0a483ccda5339bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_901d14702fb92edd6227a6e3abeddf1a425756d2feae76cad0a483ccda5339bf->enter($__internal_901d14702fb92edd6227a6e3abeddf1a425756d2feae76cad0a483ccda5339bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_856cebc116d65bdd747156000f10b3b40fe370ea006c60955492648d907fc971 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_856cebc116d65bdd747156000f10b3b40fe370ea006c60955492648d907fc971->enter($__internal_856cebc116d65bdd747156000f10b3b40fe370ea006c60955492648d907fc971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_901d14702fb92edd6227a6e3abeddf1a425756d2feae76cad0a483ccda5339bf->leave($__internal_901d14702fb92edd6227a6e3abeddf1a425756d2feae76cad0a483ccda5339bf_prof);

        
        $__internal_856cebc116d65bdd747156000f10b3b40fe370ea006c60955492648d907fc971->leave($__internal_856cebc116d65bdd747156000f10b3b40fe370ea006c60955492648d907fc971_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
