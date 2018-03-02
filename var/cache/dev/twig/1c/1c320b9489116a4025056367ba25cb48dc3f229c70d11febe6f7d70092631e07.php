<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_0351011cbb0cb39e377945fb9756fd303f7c37e53a19d577cebbcfbcdf63bb84 extends Twig_Template
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
        $__internal_9ff99652e05e61268b7a35ef4b75d38e2e68047fcb08f79551aee404fdadb339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ff99652e05e61268b7a35ef4b75d38e2e68047fcb08f79551aee404fdadb339->enter($__internal_9ff99652e05e61268b7a35ef4b75d38e2e68047fcb08f79551aee404fdadb339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_58828dc9d4fa6d40906020e522e24603f43dab53669616b5d3932241b396dc7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58828dc9d4fa6d40906020e522e24603f43dab53669616b5d3932241b396dc7b->enter($__internal_58828dc9d4fa6d40906020e522e24603f43dab53669616b5d3932241b396dc7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9ff99652e05e61268b7a35ef4b75d38e2e68047fcb08f79551aee404fdadb339->leave($__internal_9ff99652e05e61268b7a35ef4b75d38e2e68047fcb08f79551aee404fdadb339_prof);

        
        $__internal_58828dc9d4fa6d40906020e522e24603f43dab53669616b5d3932241b396dc7b->leave($__internal_58828dc9d4fa6d40906020e522e24603f43dab53669616b5d3932241b396dc7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
