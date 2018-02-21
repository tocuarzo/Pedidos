<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_c77447ed895ec61e6a4e07ea5a310fdaae28b42928f5829c8b6cd5215bc99ee3 extends Twig_Template
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
        $__internal_8cd56d99030d27e7ff2a36e0d9b9d7c3c04448a604e953bae10dee45007a7128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd56d99030d27e7ff2a36e0d9b9d7c3c04448a604e953bae10dee45007a7128->enter($__internal_8cd56d99030d27e7ff2a36e0d9b9d7c3c04448a604e953bae10dee45007a7128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_45e4ffa2f5a27f2764b14bc223f086016326e6734661dd36b42dfdd895c5769d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45e4ffa2f5a27f2764b14bc223f086016326e6734661dd36b42dfdd895c5769d->enter($__internal_45e4ffa2f5a27f2764b14bc223f086016326e6734661dd36b42dfdd895c5769d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_8cd56d99030d27e7ff2a36e0d9b9d7c3c04448a604e953bae10dee45007a7128->leave($__internal_8cd56d99030d27e7ff2a36e0d9b9d7c3c04448a604e953bae10dee45007a7128_prof);

        
        $__internal_45e4ffa2f5a27f2764b14bc223f086016326e6734661dd36b42dfdd895c5769d->leave($__internal_45e4ffa2f5a27f2764b14bc223f086016326e6734661dd36b42dfdd895c5769d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
