<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4f0501995fe25825fb880ae3848c8211a4279d4d647988ccf1804ee3fb762a87 extends Twig_Template
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
        $__internal_6bbe7caead0752df157906f742e8908d87d592b56fb291269344aff80ebf57ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bbe7caead0752df157906f742e8908d87d592b56fb291269344aff80ebf57ae->enter($__internal_6bbe7caead0752df157906f742e8908d87d592b56fb291269344aff80ebf57ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_d24af569ff77502f8feb1afd907e03473e5195bdf7e62204039c048cc3ee508b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d24af569ff77502f8feb1afd907e03473e5195bdf7e62204039c048cc3ee508b->enter($__internal_d24af569ff77502f8feb1afd907e03473e5195bdf7e62204039c048cc3ee508b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6bbe7caead0752df157906f742e8908d87d592b56fb291269344aff80ebf57ae->leave($__internal_6bbe7caead0752df157906f742e8908d87d592b56fb291269344aff80ebf57ae_prof);

        
        $__internal_d24af569ff77502f8feb1afd907e03473e5195bdf7e62204039c048cc3ee508b->leave($__internal_d24af569ff77502f8feb1afd907e03473e5195bdf7e62204039c048cc3ee508b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
