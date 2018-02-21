<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_3c47e24f734f8d3524846c96200f0b9cebc3c6e200aea0618006e90ac51e56b3 extends Twig_Template
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
        $__internal_1b2fcfdf3ceb13c321bb7933635feb385b9bd35d56913f3f6150e90a9f252e16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b2fcfdf3ceb13c321bb7933635feb385b9bd35d56913f3f6150e90a9f252e16->enter($__internal_1b2fcfdf3ceb13c321bb7933635feb385b9bd35d56913f3f6150e90a9f252e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_bba89eaa189ca74fdefdfd03a5d98d4cfe5943aa1b79061b1917aef49098aa94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bba89eaa189ca74fdefdfd03a5d98d4cfe5943aa1b79061b1917aef49098aa94->enter($__internal_bba89eaa189ca74fdefdfd03a5d98d4cfe5943aa1b79061b1917aef49098aa94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_1b2fcfdf3ceb13c321bb7933635feb385b9bd35d56913f3f6150e90a9f252e16->leave($__internal_1b2fcfdf3ceb13c321bb7933635feb385b9bd35d56913f3f6150e90a9f252e16_prof);

        
        $__internal_bba89eaa189ca74fdefdfd03a5d98d4cfe5943aa1b79061b1917aef49098aa94->leave($__internal_bba89eaa189ca74fdefdfd03a5d98d4cfe5943aa1b79061b1917aef49098aa94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
