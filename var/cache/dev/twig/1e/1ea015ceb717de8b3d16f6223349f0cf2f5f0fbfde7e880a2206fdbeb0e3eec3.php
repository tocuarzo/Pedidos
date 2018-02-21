<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_e5ebaab8df78d902559bfa9779f964c5671ee1a7e4be0dad860f2fd0b5b2a4b2 extends Twig_Template
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
        $__internal_95d618fff4c78048f8ebebf84b365d4f3a9d4b2139c98761546527420a0da34d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95d618fff4c78048f8ebebf84b365d4f3a9d4b2139c98761546527420a0da34d->enter($__internal_95d618fff4c78048f8ebebf84b365d4f3a9d4b2139c98761546527420a0da34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_027cc81ebe51d9bf65b972c5fec7f782ed712f32a5c66bf34f576dbcec322a02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_027cc81ebe51d9bf65b972c5fec7f782ed712f32a5c66bf34f576dbcec322a02->enter($__internal_027cc81ebe51d9bf65b972c5fec7f782ed712f32a5c66bf34f576dbcec322a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_95d618fff4c78048f8ebebf84b365d4f3a9d4b2139c98761546527420a0da34d->leave($__internal_95d618fff4c78048f8ebebf84b365d4f3a9d4b2139c98761546527420a0da34d_prof);

        
        $__internal_027cc81ebe51d9bf65b972c5fec7f782ed712f32a5c66bf34f576dbcec322a02->leave($__internal_027cc81ebe51d9bf65b972c5fec7f782ed712f32a5c66bf34f576dbcec322a02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\range_widget.html.php");
    }
}
