<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_6d891c9ef28354617f93aa442fa534d0f7ac6eb01eb727245439d12c9b9ff7a7 extends Twig_Template
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
        $__internal_084ef941f8a24cdaf212167d32b88f0d6587ebc67cb8cfc146176dbca612ff42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_084ef941f8a24cdaf212167d32b88f0d6587ebc67cb8cfc146176dbca612ff42->enter($__internal_084ef941f8a24cdaf212167d32b88f0d6587ebc67cb8cfc146176dbca612ff42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_2fe3b9e746e956e815429d9bca3308bb0fc04672f4cda47d0c3bd7f1c54b8043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fe3b9e746e956e815429d9bca3308bb0fc04672f4cda47d0c3bd7f1c54b8043->enter($__internal_2fe3b9e746e956e815429d9bca3308bb0fc04672f4cda47d0c3bd7f1c54b8043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_084ef941f8a24cdaf212167d32b88f0d6587ebc67cb8cfc146176dbca612ff42->leave($__internal_084ef941f8a24cdaf212167d32b88f0d6587ebc67cb8cfc146176dbca612ff42_prof);

        
        $__internal_2fe3b9e746e956e815429d9bca3308bb0fc04672f4cda47d0c3bd7f1c54b8043->leave($__internal_2fe3b9e746e956e815429d9bca3308bb0fc04672f4cda47d0c3bd7f1c54b8043_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
