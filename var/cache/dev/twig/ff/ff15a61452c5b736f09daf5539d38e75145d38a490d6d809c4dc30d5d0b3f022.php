<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_642c46df8dd4d1ba273bb6d9859c127372e7e1b5e11ad031c2fc00521765c00f extends Twig_Template
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
        $__internal_3e106687e42e246f78e91139b7536c2114cb164f899e35bec742e0cd5c77f709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e106687e42e246f78e91139b7536c2114cb164f899e35bec742e0cd5c77f709->enter($__internal_3e106687e42e246f78e91139b7536c2114cb164f899e35bec742e0cd5c77f709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_a41bde322ccb811bf7a04dd6fabd6dbb9697796c11ffacabe3cd03c9dde3f91e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a41bde322ccb811bf7a04dd6fabd6dbb9697796c11ffacabe3cd03c9dde3f91e->enter($__internal_a41bde322ccb811bf7a04dd6fabd6dbb9697796c11ffacabe3cd03c9dde3f91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_3e106687e42e246f78e91139b7536c2114cb164f899e35bec742e0cd5c77f709->leave($__internal_3e106687e42e246f78e91139b7536c2114cb164f899e35bec742e0cd5c77f709_prof);

        
        $__internal_a41bde322ccb811bf7a04dd6fabd6dbb9697796c11ffacabe3cd03c9dde3f91e->leave($__internal_a41bde322ccb811bf7a04dd6fabd6dbb9697796c11ffacabe3cd03c9dde3f91e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
