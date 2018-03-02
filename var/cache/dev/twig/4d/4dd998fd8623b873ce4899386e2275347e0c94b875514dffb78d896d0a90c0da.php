<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_d6dda5f3570d939326e8f8cb9d415e420e582577108527e331b33675edc0f9cc extends Twig_Template
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
        $__internal_d3b4c830cc624dcc80f00ee6063d67afdf74bac1f07ad9af91f57386ea01f0eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b4c830cc624dcc80f00ee6063d67afdf74bac1f07ad9af91f57386ea01f0eb->enter($__internal_d3b4c830cc624dcc80f00ee6063d67afdf74bac1f07ad9af91f57386ea01f0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_5ff235dce80e4d56c1b4a014143b14b0fcf69bc4a3cfaccca742c2511c108d3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ff235dce80e4d56c1b4a014143b14b0fcf69bc4a3cfaccca742c2511c108d3c->enter($__internal_5ff235dce80e4d56c1b4a014143b14b0fcf69bc4a3cfaccca742c2511c108d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_d3b4c830cc624dcc80f00ee6063d67afdf74bac1f07ad9af91f57386ea01f0eb->leave($__internal_d3b4c830cc624dcc80f00ee6063d67afdf74bac1f07ad9af91f57386ea01f0eb_prof);

        
        $__internal_5ff235dce80e4d56c1b4a014143b14b0fcf69bc4a3cfaccca742c2511c108d3c->leave($__internal_5ff235dce80e4d56c1b4a014143b14b0fcf69bc4a3cfaccca742c2511c108d3c_prof);

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
