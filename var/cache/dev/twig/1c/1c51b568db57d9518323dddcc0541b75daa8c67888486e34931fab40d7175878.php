<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_966fac66dcfb4c3f7442866733a05190fd3d1703ca90b50b8258474632e15318 extends Twig_Template
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
        $__internal_85ff2b2c3641e597b242c5e39596fcd4fb340eb7ffdb94057480a5fdab499ca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ff2b2c3641e597b242c5e39596fcd4fb340eb7ffdb94057480a5fdab499ca2->enter($__internal_85ff2b2c3641e597b242c5e39596fcd4fb340eb7ffdb94057480a5fdab499ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_16f7c0d06fec25e42609cbfa46628f2d5afcb5d3a02c1e60010ef1e4df8bb5c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16f7c0d06fec25e42609cbfa46628f2d5afcb5d3a02c1e60010ef1e4df8bb5c6->enter($__internal_16f7c0d06fec25e42609cbfa46628f2d5afcb5d3a02c1e60010ef1e4df8bb5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_85ff2b2c3641e597b242c5e39596fcd4fb340eb7ffdb94057480a5fdab499ca2->leave($__internal_85ff2b2c3641e597b242c5e39596fcd4fb340eb7ffdb94057480a5fdab499ca2_prof);

        
        $__internal_16f7c0d06fec25e42609cbfa46628f2d5afcb5d3a02c1e60010ef1e4df8bb5c6->leave($__internal_16f7c0d06fec25e42609cbfa46628f2d5afcb5d3a02c1e60010ef1e4df8bb5c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
