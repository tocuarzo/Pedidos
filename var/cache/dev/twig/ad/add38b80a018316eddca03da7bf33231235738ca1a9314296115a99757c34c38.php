<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_cfbf061391817e9bc1d71442840690836a547e86485ca9187432e8e3e5b8aaad extends Twig_Template
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
        $__internal_3bcde4d51029757159639860fc389aed6a95e6500162095e4608993649cc8789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bcde4d51029757159639860fc389aed6a95e6500162095e4608993649cc8789->enter($__internal_3bcde4d51029757159639860fc389aed6a95e6500162095e4608993649cc8789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_421bf255670364999493a2e3feefc523279730948ab641debc60259c598178a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_421bf255670364999493a2e3feefc523279730948ab641debc60259c598178a5->enter($__internal_421bf255670364999493a2e3feefc523279730948ab641debc60259c598178a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_3bcde4d51029757159639860fc389aed6a95e6500162095e4608993649cc8789->leave($__internal_3bcde4d51029757159639860fc389aed6a95e6500162095e4608993649cc8789_prof);

        
        $__internal_421bf255670364999493a2e3feefc523279730948ab641debc60259c598178a5->leave($__internal_421bf255670364999493a2e3feefc523279730948ab641debc60259c598178a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
