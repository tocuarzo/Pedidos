<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_b655e4a26d8e50826ac3f21eeb2ee6580e173e362e511ed83ea5838ee6547df1 extends Twig_Template
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
        $__internal_9bc2a776e098f2f0208351ff6cc773f3b74c2b2dc07b57f2e25f4cc8aa7f46bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc2a776e098f2f0208351ff6cc773f3b74c2b2dc07b57f2e25f4cc8aa7f46bb->enter($__internal_9bc2a776e098f2f0208351ff6cc773f3b74c2b2dc07b57f2e25f4cc8aa7f46bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        $__internal_1837e55e5c6176bd907df221899da4a4c32a17b9f9f6784fa53935ee9efed11d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1837e55e5c6176bd907df221899da4a4c32a17b9f9f6784fa53935ee9efed11d->enter($__internal_1837e55e5c6176bd907df221899da4a4c32a17b9f9f6784fa53935ee9efed11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_9bc2a776e098f2f0208351ff6cc773f3b74c2b2dc07b57f2e25f4cc8aa7f46bb->leave($__internal_9bc2a776e098f2f0208351ff6cc773f3b74c2b2dc07b57f2e25f4cc8aa7f46bb_prof);

        
        $__internal_1837e55e5c6176bd907df221899da4a4c32a17b9f9f6784fa53935ee9efed11d->leave($__internal_1837e55e5c6176bd907df221899da4a4c32a17b9f9f6784fa53935ee9efed11d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
", "@Framework/Form/color_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\color_widget.html.php");
    }
}
