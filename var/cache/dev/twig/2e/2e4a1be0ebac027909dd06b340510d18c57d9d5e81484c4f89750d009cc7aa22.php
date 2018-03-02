<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_30ad43bdaa4b8c1a4988ae5209efa2b4e09d35bb57161d2260fb2d94ce2a75b2 extends Twig_Template
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
        $__internal_2a6f97116436c5f09943cda4fbb297cd97bf1b144151a655b4407e3164243609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a6f97116436c5f09943cda4fbb297cd97bf1b144151a655b4407e3164243609->enter($__internal_2a6f97116436c5f09943cda4fbb297cd97bf1b144151a655b4407e3164243609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_08bd3bb0873265b42d85216d1793084b64025c13b12919399ae3c7a49d87444f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08bd3bb0873265b42d85216d1793084b64025c13b12919399ae3c7a49d87444f->enter($__internal_08bd3bb0873265b42d85216d1793084b64025c13b12919399ae3c7a49d87444f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_2a6f97116436c5f09943cda4fbb297cd97bf1b144151a655b4407e3164243609->leave($__internal_2a6f97116436c5f09943cda4fbb297cd97bf1b144151a655b4407e3164243609_prof);

        
        $__internal_08bd3bb0873265b42d85216d1793084b64025c13b12919399ae3c7a49d87444f->leave($__internal_08bd3bb0873265b42d85216d1793084b64025c13b12919399ae3c7a49d87444f_prof);

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
