<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_679d25b8c07d64ca5fa47aa580075a84733232a9e91ace6376bf81c0dd83fbeb extends Twig_Template
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
        $__internal_4b662a428002475d5ccfd3251d5626055ce816b19875ef696d3f802da7eb4cdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b662a428002475d5ccfd3251d5626055ce816b19875ef696d3f802da7eb4cdc->enter($__internal_4b662a428002475d5ccfd3251d5626055ce816b19875ef696d3f802da7eb4cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_3be1a71ea4bf25a17f0141c8d3ea6062cb50f50485b8d7b09f8fc2510f81ed26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3be1a71ea4bf25a17f0141c8d3ea6062cb50f50485b8d7b09f8fc2510f81ed26->enter($__internal_3be1a71ea4bf25a17f0141c8d3ea6062cb50f50485b8d7b09f8fc2510f81ed26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_4b662a428002475d5ccfd3251d5626055ce816b19875ef696d3f802da7eb4cdc->leave($__internal_4b662a428002475d5ccfd3251d5626055ce816b19875ef696d3f802da7eb4cdc_prof);

        
        $__internal_3be1a71ea4bf25a17f0141c8d3ea6062cb50f50485b8d7b09f8fc2510f81ed26->leave($__internal_3be1a71ea4bf25a17f0141c8d3ea6062cb50f50485b8d7b09f8fc2510f81ed26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
