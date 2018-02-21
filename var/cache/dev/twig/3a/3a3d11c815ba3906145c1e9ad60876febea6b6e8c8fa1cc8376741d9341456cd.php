<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0846e1930ee20b54fad0fd0890abdd19f6dacc82d00b80c55ee7ea3aec753926 extends Twig_Template
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
        $__internal_ee57a9910d109368e50085e0ca6467b2e3bf7861ec2f4d088f484346bb9b19be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee57a9910d109368e50085e0ca6467b2e3bf7861ec2f4d088f484346bb9b19be->enter($__internal_ee57a9910d109368e50085e0ca6467b2e3bf7861ec2f4d088f484346bb9b19be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_4c5ffcc95a1fed11fac680d51382d54d432d8070c29b9db217d86bbf8944ccee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c5ffcc95a1fed11fac680d51382d54d432d8070c29b9db217d86bbf8944ccee->enter($__internal_4c5ffcc95a1fed11fac680d51382d54d432d8070c29b9db217d86bbf8944ccee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_ee57a9910d109368e50085e0ca6467b2e3bf7861ec2f4d088f484346bb9b19be->leave($__internal_ee57a9910d109368e50085e0ca6467b2e3bf7861ec2f4d088f484346bb9b19be_prof);

        
        $__internal_4c5ffcc95a1fed11fac680d51382d54d432d8070c29b9db217d86bbf8944ccee->leave($__internal_4c5ffcc95a1fed11fac680d51382d54d432d8070c29b9db217d86bbf8944ccee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
