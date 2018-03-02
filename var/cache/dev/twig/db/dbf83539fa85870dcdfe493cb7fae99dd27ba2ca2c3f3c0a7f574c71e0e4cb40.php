<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_eb0a39540b80a9abbc6d670b30f8f7d719afb7d9483292bdddeb904bdb346b7a extends Twig_Template
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
        $__internal_a0b93b0371ca9e061ec2879e4e3d4c8c1ff29ae61c3fc20f1242ab213f6692c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0b93b0371ca9e061ec2879e4e3d4c8c1ff29ae61c3fc20f1242ab213f6692c6->enter($__internal_a0b93b0371ca9e061ec2879e4e3d4c8c1ff29ae61c3fc20f1242ab213f6692c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_79c69f21c6253fd2aed6a40310c4f88115d5a655499785cdc63a10782e34fb07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79c69f21c6253fd2aed6a40310c4f88115d5a655499785cdc63a10782e34fb07->enter($__internal_79c69f21c6253fd2aed6a40310c4f88115d5a655499785cdc63a10782e34fb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_a0b93b0371ca9e061ec2879e4e3d4c8c1ff29ae61c3fc20f1242ab213f6692c6->leave($__internal_a0b93b0371ca9e061ec2879e4e3d4c8c1ff29ae61c3fc20f1242ab213f6692c6_prof);

        
        $__internal_79c69f21c6253fd2aed6a40310c4f88115d5a655499785cdc63a10782e34fb07->leave($__internal_79c69f21c6253fd2aed6a40310c4f88115d5a655499785cdc63a10782e34fb07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
