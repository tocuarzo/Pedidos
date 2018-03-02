<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_bcff06a65e27ef53c37f836a9a3207b028b8ab58bf8e750c390e867a5786af59 extends Twig_Template
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
        $__internal_1d32cc880cc1979b4d0067de09b51119500c9c345a45f493e240aed0d2fcf7e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d32cc880cc1979b4d0067de09b51119500c9c345a45f493e240aed0d2fcf7e1->enter($__internal_1d32cc880cc1979b4d0067de09b51119500c9c345a45f493e240aed0d2fcf7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_a68a36657b1204b52a0c71f797e25bf5f06f144d3e826547c5b74d1bf065bd75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a68a36657b1204b52a0c71f797e25bf5f06f144d3e826547c5b74d1bf065bd75->enter($__internal_a68a36657b1204b52a0c71f797e25bf5f06f144d3e826547c5b74d1bf065bd75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_1d32cc880cc1979b4d0067de09b51119500c9c345a45f493e240aed0d2fcf7e1->leave($__internal_1d32cc880cc1979b4d0067de09b51119500c9c345a45f493e240aed0d2fcf7e1_prof);

        
        $__internal_a68a36657b1204b52a0c71f797e25bf5f06f144d3e826547c5b74d1bf065bd75->leave($__internal_a68a36657b1204b52a0c71f797e25bf5f06f144d3e826547c5b74d1bf065bd75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
