<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_0dd0bcfc51512f5b00ccf40c4c2d2e20a0831893944a09d96d09c9969562676e extends Twig_Template
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
        $__internal_3cd123e5dab6443dfb73e093812cb09a41af2ae21f3c5d19d027b926f4d19e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd123e5dab6443dfb73e093812cb09a41af2ae21f3c5d19d027b926f4d19e75->enter($__internal_3cd123e5dab6443dfb73e093812cb09a41af2ae21f3c5d19d027b926f4d19e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_3455c67b0be166fb05a20f66236e02add57fc8e4adfa38d2b3cea39ca3540bc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3455c67b0be166fb05a20f66236e02add57fc8e4adfa38d2b3cea39ca3540bc7->enter($__internal_3455c67b0be166fb05a20f66236e02add57fc8e4adfa38d2b3cea39ca3540bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_3cd123e5dab6443dfb73e093812cb09a41af2ae21f3c5d19d027b926f4d19e75->leave($__internal_3cd123e5dab6443dfb73e093812cb09a41af2ae21f3c5d19d027b926f4d19e75_prof);

        
        $__internal_3455c67b0be166fb05a20f66236e02add57fc8e4adfa38d2b3cea39ca3540bc7->leave($__internal_3455c67b0be166fb05a20f66236e02add57fc8e4adfa38d2b3cea39ca3540bc7_prof);

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
