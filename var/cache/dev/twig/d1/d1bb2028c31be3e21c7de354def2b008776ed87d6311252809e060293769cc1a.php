<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_1bc7dde995860602a1cb910c28fb62f2355b981ada7f40155ee9826e827b9896 extends Twig_Template
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
        $__internal_b8503dede15e30a3544d6abd81df47f99c19702d34182e8532a45f3a8f056237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8503dede15e30a3544d6abd81df47f99c19702d34182e8532a45f3a8f056237->enter($__internal_b8503dede15e30a3544d6abd81df47f99c19702d34182e8532a45f3a8f056237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_d1ea9dbf31d077f26b68f301e71ab1526693aefdcd387adb9a451c22bee9161e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ea9dbf31d077f26b68f301e71ab1526693aefdcd387adb9a451c22bee9161e->enter($__internal_d1ea9dbf31d077f26b68f301e71ab1526693aefdcd387adb9a451c22bee9161e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_b8503dede15e30a3544d6abd81df47f99c19702d34182e8532a45f3a8f056237->leave($__internal_b8503dede15e30a3544d6abd81df47f99c19702d34182e8532a45f3a8f056237_prof);

        
        $__internal_d1ea9dbf31d077f26b68f301e71ab1526693aefdcd387adb9a451c22bee9161e->leave($__internal_d1ea9dbf31d077f26b68f301e71ab1526693aefdcd387adb9a451c22bee9161e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_start.html.php");
    }
}
