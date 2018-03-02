<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_8b1b87901db227b3e9596d39e4a8d733c531d93346857376f6832296100b3bf5 extends Twig_Template
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
        $__internal_560eaac9b151dd9999b6309ddb51abcd39ede08296b99b58b68fca64701aca3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_560eaac9b151dd9999b6309ddb51abcd39ede08296b99b58b68fca64701aca3f->enter($__internal_560eaac9b151dd9999b6309ddb51abcd39ede08296b99b58b68fca64701aca3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_0985e842b4bcb0f88b4395775b9f0d32dee506794b61a12841e21b4f4a4b23d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0985e842b4bcb0f88b4395775b9f0d32dee506794b61a12841e21b4f4a4b23d9->enter($__internal_0985e842b4bcb0f88b4395775b9f0d32dee506794b61a12841e21b4f4a4b23d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_560eaac9b151dd9999b6309ddb51abcd39ede08296b99b58b68fca64701aca3f->leave($__internal_560eaac9b151dd9999b6309ddb51abcd39ede08296b99b58b68fca64701aca3f_prof);

        
        $__internal_0985e842b4bcb0f88b4395775b9f0d32dee506794b61a12841e21b4f4a4b23d9->leave($__internal_0985e842b4bcb0f88b4395775b9f0d32dee506794b61a12841e21b4f4a4b23d9_prof);

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
