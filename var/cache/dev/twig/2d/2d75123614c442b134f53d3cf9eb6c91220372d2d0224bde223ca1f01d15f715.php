<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_885107039ff7ddd836c043bc70b1a4a567eb48a1c8ff0cf4d3f175b47a4bee0e extends Twig_Template
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
        $__internal_8a4d78566c39afa25efa70033b4eba1706639ef21dc9be1170d5278aa34f1a72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a4d78566c39afa25efa70033b4eba1706639ef21dc9be1170d5278aa34f1a72->enter($__internal_8a4d78566c39afa25efa70033b4eba1706639ef21dc9be1170d5278aa34f1a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_05355fe092fcac5def60638ca124c151980f9e5302bec6a457376b5163276a42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05355fe092fcac5def60638ca124c151980f9e5302bec6a457376b5163276a42->enter($__internal_05355fe092fcac5def60638ca124c151980f9e5302bec6a457376b5163276a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_8a4d78566c39afa25efa70033b4eba1706639ef21dc9be1170d5278aa34f1a72->leave($__internal_8a4d78566c39afa25efa70033b4eba1706639ef21dc9be1170d5278aa34f1a72_prof);

        
        $__internal_05355fe092fcac5def60638ca124c151980f9e5302bec6a457376b5163276a42->leave($__internal_05355fe092fcac5def60638ca124c151980f9e5302bec6a457376b5163276a42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
