<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_5a099fe8ebef036b709dbb1e2fc9d0a6d37855f3afbf4353277ff756291865a0 extends Twig_Template
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
        $__internal_4411f214e3be22d1cb943c423d00f4b94779736469c93df5fc3b9439e3e6bfc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4411f214e3be22d1cb943c423d00f4b94779736469c93df5fc3b9439e3e6bfc5->enter($__internal_4411f214e3be22d1cb943c423d00f4b94779736469c93df5fc3b9439e3e6bfc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_7fd0d48bc11e2106b2ef1e57827bc9c29d1c00fce44e49feddab281555c24a54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fd0d48bc11e2106b2ef1e57827bc9c29d1c00fce44e49feddab281555c24a54->enter($__internal_7fd0d48bc11e2106b2ef1e57827bc9c29d1c00fce44e49feddab281555c24a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_4411f214e3be22d1cb943c423d00f4b94779736469c93df5fc3b9439e3e6bfc5->leave($__internal_4411f214e3be22d1cb943c423d00f4b94779736469c93df5fc3b9439e3e6bfc5_prof);

        
        $__internal_7fd0d48bc11e2106b2ef1e57827bc9c29d1c00fce44e49feddab281555c24a54->leave($__internal_7fd0d48bc11e2106b2ef1e57827bc9c29d1c00fce44e49feddab281555c24a54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
