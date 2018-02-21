<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_346646e53444994c523caeb6eea842db5231947dd7337c0498e4d11288960ae8 extends Twig_Template
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
        $__internal_c66d49123f25a3571aeb25d9a2637e5a300ccfbf0cf8cbb0320afb367df98188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c66d49123f25a3571aeb25d9a2637e5a300ccfbf0cf8cbb0320afb367df98188->enter($__internal_c66d49123f25a3571aeb25d9a2637e5a300ccfbf0cf8cbb0320afb367df98188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_a23ac9f535e57f8ffbcb977a8b27927524874c1b72236378f60627ec5802492d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a23ac9f535e57f8ffbcb977a8b27927524874c1b72236378f60627ec5802492d->enter($__internal_a23ac9f535e57f8ffbcb977a8b27927524874c1b72236378f60627ec5802492d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_c66d49123f25a3571aeb25d9a2637e5a300ccfbf0cf8cbb0320afb367df98188->leave($__internal_c66d49123f25a3571aeb25d9a2637e5a300ccfbf0cf8cbb0320afb367df98188_prof);

        
        $__internal_a23ac9f535e57f8ffbcb977a8b27927524874c1b72236378f60627ec5802492d->leave($__internal_a23ac9f535e57f8ffbcb977a8b27927524874c1b72236378f60627ec5802492d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
