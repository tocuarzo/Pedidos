<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_8daa4c092001834d920f8301d97e9e8b3c36521a23e29b3e2ff88d2ebb20f313 extends Twig_Template
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
        $__internal_30f3076ba919cef3419f61ba0befd24830f743efd3c3c8445c9d92dbae75ccbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30f3076ba919cef3419f61ba0befd24830f743efd3c3c8445c9d92dbae75ccbf->enter($__internal_30f3076ba919cef3419f61ba0befd24830f743efd3c3c8445c9d92dbae75ccbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_9cf4a5a786b4d6ba6634599f822ec094998fca1721d9e9c10cc2d205d349d065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cf4a5a786b4d6ba6634599f822ec094998fca1721d9e9c10cc2d205d349d065->enter($__internal_9cf4a5a786b4d6ba6634599f822ec094998fca1721d9e9c10cc2d205d349d065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_30f3076ba919cef3419f61ba0befd24830f743efd3c3c8445c9d92dbae75ccbf->leave($__internal_30f3076ba919cef3419f61ba0befd24830f743efd3c3c8445c9d92dbae75ccbf_prof);

        
        $__internal_9cf4a5a786b4d6ba6634599f822ec094998fca1721d9e9c10cc2d205d349d065->leave($__internal_9cf4a5a786b4d6ba6634599f822ec094998fca1721d9e9c10cc2d205d349d065_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
