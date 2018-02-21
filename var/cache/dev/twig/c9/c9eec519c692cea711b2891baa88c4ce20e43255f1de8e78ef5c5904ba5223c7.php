<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_0f34b55c11de054eee4b4f327052959ca6fbc32e94080798ce8e2944c4631ccf extends Twig_Template
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
        $__internal_38bcfe73717a64e2f32007faf54ff78aa82829ea758dbe691961920cc97be9e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38bcfe73717a64e2f32007faf54ff78aa82829ea758dbe691961920cc97be9e0->enter($__internal_38bcfe73717a64e2f32007faf54ff78aa82829ea758dbe691961920cc97be9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_d4259039eb8ef9d8e541b8203881cd93cc23056bb0b7b5510426f12cab6255ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4259039eb8ef9d8e541b8203881cd93cc23056bb0b7b5510426f12cab6255ac->enter($__internal_d4259039eb8ef9d8e541b8203881cd93cc23056bb0b7b5510426f12cab6255ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_38bcfe73717a64e2f32007faf54ff78aa82829ea758dbe691961920cc97be9e0->leave($__internal_38bcfe73717a64e2f32007faf54ff78aa82829ea758dbe691961920cc97be9e0_prof);

        
        $__internal_d4259039eb8ef9d8e541b8203881cd93cc23056bb0b7b5510426f12cab6255ac->leave($__internal_d4259039eb8ef9d8e541b8203881cd93cc23056bb0b7b5510426f12cab6255ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
