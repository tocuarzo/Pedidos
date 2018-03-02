<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_722bf68aeede7ffbdbadd1bedc74baa7c446cd1a7e5b1d1fdf295288b2fc2128 extends Twig_Template
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
        $__internal_4d72ee7085301a9845af6cf299405794e9720fdcc04ff4cc91fe029a4c768dd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d72ee7085301a9845af6cf299405794e9720fdcc04ff4cc91fe029a4c768dd0->enter($__internal_4d72ee7085301a9845af6cf299405794e9720fdcc04ff4cc91fe029a4c768dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_4c964b233677e14b953c7ca5f9bd39b1e53fde97a57e7f6236ff4e174d76f265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c964b233677e14b953c7ca5f9bd39b1e53fde97a57e7f6236ff4e174d76f265->enter($__internal_4c964b233677e14b953c7ca5f9bd39b1e53fde97a57e7f6236ff4e174d76f265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_4d72ee7085301a9845af6cf299405794e9720fdcc04ff4cc91fe029a4c768dd0->leave($__internal_4d72ee7085301a9845af6cf299405794e9720fdcc04ff4cc91fe029a4c768dd0_prof);

        
        $__internal_4c964b233677e14b953c7ca5f9bd39b1e53fde97a57e7f6236ff4e174d76f265->leave($__internal_4c964b233677e14b953c7ca5f9bd39b1e53fde97a57e7f6236ff4e174d76f265_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
