<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_32c4c55bc9f0a92b5d816afc79189d984273d62bdd5d6a63b5c20cc1502d493d extends Twig_Template
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
        $__internal_aedea5e1347e70ad3a2b6aac6510b058cb94b6f9547cebc929f7238b74b259d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aedea5e1347e70ad3a2b6aac6510b058cb94b6f9547cebc929f7238b74b259d2->enter($__internal_aedea5e1347e70ad3a2b6aac6510b058cb94b6f9547cebc929f7238b74b259d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        $__internal_99a076daaa6b4aa4f778de8ed682b992869870abbb39f6bacd12a9a9c3d3f4d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99a076daaa6b4aa4f778de8ed682b992869870abbb39f6bacd12a9a9c3d3f4d1->enter($__internal_99a076daaa6b4aa4f778de8ed682b992869870abbb39f6bacd12a9a9c3d3f4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new Twig_Error_Runtime('Variable "year" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new Twig_Error_Runtime('Variable "month" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new Twig_Error_Runtime('Variable "day" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_aedea5e1347e70ad3a2b6aac6510b058cb94b6f9547cebc929f7238b74b259d2->leave($__internal_aedea5e1347e70ad3a2b6aac6510b058cb94b6f9547cebc929f7238b74b259d2_prof);

        
        $__internal_99a076daaa6b4aa4f778de8ed682b992869870abbb39f6bacd12a9a9c3d3f4d1->leave($__internal_99a076daaa6b4aa4f778de8ed682b992869870abbb39f6bacd12a9a9c3d3f4d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
", "@Framework/Form/date_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\date_widget.html.php");
    }
}
