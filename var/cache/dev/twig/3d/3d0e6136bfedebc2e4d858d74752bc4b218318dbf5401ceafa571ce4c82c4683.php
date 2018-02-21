<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_5706a2b61a67ea274f09f6cbbfc0d03f5a26e92f1637e2c07d238f5d63545004 extends Twig_Template
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
        $__internal_ab5938b1e8459cf11a5db300dd58f9f8e7afea5dcbc5fdb0e1e7bb1a699256a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab5938b1e8459cf11a5db300dd58f9f8e7afea5dcbc5fdb0e1e7bb1a699256a3->enter($__internal_ab5938b1e8459cf11a5db300dd58f9f8e7afea5dcbc5fdb0e1e7bb1a699256a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_77998c58f251f7f123c8cb46be29b14c8983f08f1978f0447a33986a8d822727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77998c58f251f7f123c8cb46be29b14c8983f08f1978f0447a33986a8d822727->enter($__internal_77998c58f251f7f123c8cb46be29b14c8983f08f1978f0447a33986a8d822727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_ab5938b1e8459cf11a5db300dd58f9f8e7afea5dcbc5fdb0e1e7bb1a699256a3->leave($__internal_ab5938b1e8459cf11a5db300dd58f9f8e7afea5dcbc5fdb0e1e7bb1a699256a3_prof);

        
        $__internal_77998c58f251f7f123c8cb46be29b14c8983f08f1978f0447a33986a8d822727->leave($__internal_77998c58f251f7f123c8cb46be29b14c8983f08f1978f0447a33986a8d822727_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
