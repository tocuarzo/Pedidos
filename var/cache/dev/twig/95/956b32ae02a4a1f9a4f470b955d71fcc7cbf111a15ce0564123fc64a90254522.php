<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_26e6ce62641da468fdf1027ae7d114ebe0a867174c0e15c5e3d0ecd2139b371f extends Twig_Template
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
        $__internal_4fff881c38e4e23daca18c788a45b118f262ee5fd80cd657561ca1c8ccac378c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fff881c38e4e23daca18c788a45b118f262ee5fd80cd657561ca1c8ccac378c->enter($__internal_4fff881c38e4e23daca18c788a45b118f262ee5fd80cd657561ca1c8ccac378c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_8834f95357aaa02420aed2fde6ed2ec83e8d17a07d1febe7c0f9135e79d28756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8834f95357aaa02420aed2fde6ed2ec83e8d17a07d1febe7c0f9135e79d28756->enter($__internal_8834f95357aaa02420aed2fde6ed2ec83e8d17a07d1febe7c0f9135e79d28756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_4fff881c38e4e23daca18c788a45b118f262ee5fd80cd657561ca1c8ccac378c->leave($__internal_4fff881c38e4e23daca18c788a45b118f262ee5fd80cd657561ca1c8ccac378c_prof);

        
        $__internal_8834f95357aaa02420aed2fde6ed2ec83e8d17a07d1febe7c0f9135e79d28756->leave($__internal_8834f95357aaa02420aed2fde6ed2ec83e8d17a07d1febe7c0f9135e79d28756_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
