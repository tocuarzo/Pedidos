<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_a07bd69fc2679712797fbd926afff21a9da50d0f313e3eed91e2ec27cc1c9194 extends Twig_Template
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
        $__internal_fc9670814444e2dd3c9176bf8dbe943b83d58516132ce6aa9d9f7ee1110dc481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc9670814444e2dd3c9176bf8dbe943b83d58516132ce6aa9d9f7ee1110dc481->enter($__internal_fc9670814444e2dd3c9176bf8dbe943b83d58516132ce6aa9d9f7ee1110dc481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_6bc52058dbc518a86962d89017ba7f8f7dec9f8b3181e3dd38382f7768da80e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bc52058dbc518a86962d89017ba7f8f7dec9f8b3181e3dd38382f7768da80e7->enter($__internal_6bc52058dbc518a86962d89017ba7f8f7dec9f8b3181e3dd38382f7768da80e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_fc9670814444e2dd3c9176bf8dbe943b83d58516132ce6aa9d9f7ee1110dc481->leave($__internal_fc9670814444e2dd3c9176bf8dbe943b83d58516132ce6aa9d9f7ee1110dc481_prof);

        
        $__internal_6bc52058dbc518a86962d89017ba7f8f7dec9f8b3181e3dd38382f7768da80e7->leave($__internal_6bc52058dbc518a86962d89017ba7f8f7dec9f8b3181e3dd38382f7768da80e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
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
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\time_widget.html.php");
    }
}