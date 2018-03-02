<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_2b319af641318fdb30dd17f06c2178396d1969505afb0425a3e633a4d5edadb7 extends Twig_Template
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
        $__internal_424f738858f07611f77f9e1d7978dd577de7b305ec33c109b6a6d4a0951de38a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_424f738858f07611f77f9e1d7978dd577de7b305ec33c109b6a6d4a0951de38a->enter($__internal_424f738858f07611f77f9e1d7978dd577de7b305ec33c109b6a6d4a0951de38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_8f27bdbb566308559405e9f09dc341548e0b07c15f0995ffb94a9bbac2b6c39a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f27bdbb566308559405e9f09dc341548e0b07c15f0995ffb94a9bbac2b6c39a->enter($__internal_8f27bdbb566308559405e9f09dc341548e0b07c15f0995ffb94a9bbac2b6c39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_424f738858f07611f77f9e1d7978dd577de7b305ec33c109b6a6d4a0951de38a->leave($__internal_424f738858f07611f77f9e1d7978dd577de7b305ec33c109b6a6d4a0951de38a_prof);

        
        $__internal_8f27bdbb566308559405e9f09dc341548e0b07c15f0995ffb94a9bbac2b6c39a->leave($__internal_8f27bdbb566308559405e9f09dc341548e0b07c15f0995ffb94a9bbac2b6c39a_prof);

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
