<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_1f6c2d79b3f3515c4e6f105a91c0452a05668d5afa4f40f0072a23ec30935bd4 extends Twig_Template
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
        $__internal_085dbc3ea75240c0e7915e5a1640fb1f45e5d44fac43a31f3861ae53fe6cda10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_085dbc3ea75240c0e7915e5a1640fb1f45e5d44fac43a31f3861ae53fe6cda10->enter($__internal_085dbc3ea75240c0e7915e5a1640fb1f45e5d44fac43a31f3861ae53fe6cda10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_43a3432babacf2cb05138ad7413ebcf213b6548ee5ecf0b380b2ba5ae7ca601f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43a3432babacf2cb05138ad7413ebcf213b6548ee5ecf0b380b2ba5ae7ca601f->enter($__internal_43a3432babacf2cb05138ad7413ebcf213b6548ee5ecf0b380b2ba5ae7ca601f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_085dbc3ea75240c0e7915e5a1640fb1f45e5d44fac43a31f3861ae53fe6cda10->leave($__internal_085dbc3ea75240c0e7915e5a1640fb1f45e5d44fac43a31f3861ae53fe6cda10_prof);

        
        $__internal_43a3432babacf2cb05138ad7413ebcf213b6548ee5ecf0b380b2ba5ae7ca601f->leave($__internal_43a3432babacf2cb05138ad7413ebcf213b6548ee5ecf0b380b2ba5ae7ca601f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
