<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_bf24b03cad5d0925e7a9aedfb22819ba3afc7ec852b07672b4a7509aa2af2f45 extends Twig_Template
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
        $__internal_5d37871326cf154d5d621716c82e769bddb41541b737a64ada2fe0f651367d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d37871326cf154d5d621716c82e769bddb41541b737a64ada2fe0f651367d05->enter($__internal_5d37871326cf154d5d621716c82e769bddb41541b737a64ada2fe0f651367d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_3fa66ed245d47b243fc57a0cd2e2398d7147db11ad28a02b682bd211bb30ad20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fa66ed245d47b243fc57a0cd2e2398d7147db11ad28a02b682bd211bb30ad20->enter($__internal_3fa66ed245d47b243fc57a0cd2e2398d7147db11ad28a02b682bd211bb30ad20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_5d37871326cf154d5d621716c82e769bddb41541b737a64ada2fe0f651367d05->leave($__internal_5d37871326cf154d5d621716c82e769bddb41541b737a64ada2fe0f651367d05_prof);

        
        $__internal_3fa66ed245d47b243fc57a0cd2e2398d7147db11ad28a02b682bd211bb30ad20->leave($__internal_3fa66ed245d47b243fc57a0cd2e2398d7147db11ad28a02b682bd211bb30ad20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
