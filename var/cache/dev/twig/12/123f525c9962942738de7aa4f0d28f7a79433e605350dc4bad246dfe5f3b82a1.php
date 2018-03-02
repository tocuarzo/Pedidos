<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_a8fabfabf9ff66a0e1fd0f1b7a47e6b28c854c01953f62523b76a705b4145bd3 extends Twig_Template
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
        $__internal_bb85a6b4baf33ee087f0d8cd6c33c283acb309a4a0490870df1f300535becdfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb85a6b4baf33ee087f0d8cd6c33c283acb309a4a0490870df1f300535becdfe->enter($__internal_bb85a6b4baf33ee087f0d8cd6c33c283acb309a4a0490870df1f300535becdfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_b3fb746a6950145dda1a131a420dc955bd8f4c11e6b9adc58ca92b245d682896 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3fb746a6950145dda1a131a420dc955bd8f4c11e6b9adc58ca92b245d682896->enter($__internal_b3fb746a6950145dda1a131a420dc955bd8f4c11e6b9adc58ca92b245d682896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_bb85a6b4baf33ee087f0d8cd6c33c283acb309a4a0490870df1f300535becdfe->leave($__internal_bb85a6b4baf33ee087f0d8cd6c33c283acb309a4a0490870df1f300535becdfe_prof);

        
        $__internal_b3fb746a6950145dda1a131a420dc955bd8f4c11e6b9adc58ca92b245d682896->leave($__internal_b3fb746a6950145dda1a131a420dc955bd8f4c11e6b9adc58ca92b245d682896_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
