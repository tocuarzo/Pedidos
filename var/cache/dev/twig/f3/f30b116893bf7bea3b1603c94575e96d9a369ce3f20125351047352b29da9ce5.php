<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b7d329c4abe07e6827c22416b228222a6e656ba622555e88744d46aee0380305 extends Twig_Template
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
        $__internal_bb83927ba2583ad4413f031decb69766fbdd6e796cf2d98031d5e3442b12c9c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb83927ba2583ad4413f031decb69766fbdd6e796cf2d98031d5e3442b12c9c7->enter($__internal_bb83927ba2583ad4413f031decb69766fbdd6e796cf2d98031d5e3442b12c9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_b0a897a45e56a5746858d0d7b9acb5f7f018b4df95cf421d0b1a90b248a19fc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0a897a45e56a5746858d0d7b9acb5f7f018b4df95cf421d0b1a90b248a19fc1->enter($__internal_b0a897a45e56a5746858d0d7b9acb5f7f018b4df95cf421d0b1a90b248a19fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_bb83927ba2583ad4413f031decb69766fbdd6e796cf2d98031d5e3442b12c9c7->leave($__internal_bb83927ba2583ad4413f031decb69766fbdd6e796cf2d98031d5e3442b12c9c7_prof);

        
        $__internal_b0a897a45e56a5746858d0d7b9acb5f7f018b4df95cf421d0b1a90b248a19fc1->leave($__internal_b0a897a45e56a5746858d0d7b9acb5f7f018b4df95cf421d0b1a90b248a19fc1_prof);

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
