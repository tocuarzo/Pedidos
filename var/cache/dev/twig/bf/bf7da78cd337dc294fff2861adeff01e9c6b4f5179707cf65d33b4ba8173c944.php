<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_e57a2382a51c264bcb046145282807c83aaab91d88ab3a1736de600974d797f9 extends Twig_Template
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
        $__internal_76ac523ec83b3331f863f33f7e2db54e73a3cc18f405d1075fedf405c3f49c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ac523ec83b3331f863f33f7e2db54e73a3cc18f405d1075fedf405c3f49c4e->enter($__internal_76ac523ec83b3331f863f33f7e2db54e73a3cc18f405d1075fedf405c3f49c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_65ea16f91895220486031cd32c569c56c27c3881d859ba5f03da3d57240687ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65ea16f91895220486031cd32c569c56c27c3881d859ba5f03da3d57240687ad->enter($__internal_65ea16f91895220486031cd32c569c56c27c3881d859ba5f03da3d57240687ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_76ac523ec83b3331f863f33f7e2db54e73a3cc18f405d1075fedf405c3f49c4e->leave($__internal_76ac523ec83b3331f863f33f7e2db54e73a3cc18f405d1075fedf405c3f49c4e_prof);

        
        $__internal_65ea16f91895220486031cd32c569c56c27c3881d859ba5f03da3d57240687ad->leave($__internal_65ea16f91895220486031cd32c569c56c27c3881d859ba5f03da3d57240687ad_prof);

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
