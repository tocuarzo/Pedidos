<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_8760a1e1925ab97d2d0274fa2b5c78c9869df9911e8f5200da91a89990e41adc extends Twig_Template
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
        $__internal_b0a37fbd574613eef2968a2da53633ebdccccdff25d2d276a106ab7c57dd6485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0a37fbd574613eef2968a2da53633ebdccccdff25d2d276a106ab7c57dd6485->enter($__internal_b0a37fbd574613eef2968a2da53633ebdccccdff25d2d276a106ab7c57dd6485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_5c9fbdcdde7226e0f136e181a8bc305e054c861f90e4a354a920506dfb767716 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c9fbdcdde7226e0f136e181a8bc305e054c861f90e4a354a920506dfb767716->enter($__internal_5c9fbdcdde7226e0f136e181a8bc305e054c861f90e4a354a920506dfb767716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_b0a37fbd574613eef2968a2da53633ebdccccdff25d2d276a106ab7c57dd6485->leave($__internal_b0a37fbd574613eef2968a2da53633ebdccccdff25d2d276a106ab7c57dd6485_prof);

        
        $__internal_5c9fbdcdde7226e0f136e181a8bc305e054c861f90e4a354a920506dfb767716->leave($__internal_5c9fbdcdde7226e0f136e181a8bc305e054c861f90e4a354a920506dfb767716_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
