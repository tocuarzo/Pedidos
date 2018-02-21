<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_3a2a6db4b5cc4425ac2d84bce41cde9335c3530d6f60a5651ba31c4393afea22 extends Twig_Template
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
        $__internal_585521e977af00e0d065d841404138cce5807f942e47d297dcfae11b48fd9dfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_585521e977af00e0d065d841404138cce5807f942e47d297dcfae11b48fd9dfa->enter($__internal_585521e977af00e0d065d841404138cce5807f942e47d297dcfae11b48fd9dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_2cc2cbcc902eed3c4b56c0e4be166521f870cd7f98bd0469f03059c6518652b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cc2cbcc902eed3c4b56c0e4be166521f870cd7f98bd0469f03059c6518652b8->enter($__internal_2cc2cbcc902eed3c4b56c0e4be166521f870cd7f98bd0469f03059c6518652b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_585521e977af00e0d065d841404138cce5807f942e47d297dcfae11b48fd9dfa->leave($__internal_585521e977af00e0d065d841404138cce5807f942e47d297dcfae11b48fd9dfa_prof);

        
        $__internal_2cc2cbcc902eed3c4b56c0e4be166521f870cd7f98bd0469f03059c6518652b8->leave($__internal_2cc2cbcc902eed3c4b56c0e4be166521f870cd7f98bd0469f03059c6518652b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
