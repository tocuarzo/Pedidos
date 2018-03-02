<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_aff3a5f191ba94e66423a8cb99bc10dade37b04d52e5f0cdf5f937bcaf9494a5 extends Twig_Template
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
        $__internal_4a9322aa9218c1a2fb6b4c93aec4300c08d339e8354fecf61f6ad954c4f34e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a9322aa9218c1a2fb6b4c93aec4300c08d339e8354fecf61f6ad954c4f34e24->enter($__internal_4a9322aa9218c1a2fb6b4c93aec4300c08d339e8354fecf61f6ad954c4f34e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_e190e57d02c9ad64a04d8ca18e6bcc38810dbaeaea134ddff987772cf5d28658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e190e57d02c9ad64a04d8ca18e6bcc38810dbaeaea134ddff987772cf5d28658->enter($__internal_e190e57d02c9ad64a04d8ca18e6bcc38810dbaeaea134ddff987772cf5d28658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_4a9322aa9218c1a2fb6b4c93aec4300c08d339e8354fecf61f6ad954c4f34e24->leave($__internal_4a9322aa9218c1a2fb6b4c93aec4300c08d339e8354fecf61f6ad954c4f34e24_prof);

        
        $__internal_e190e57d02c9ad64a04d8ca18e6bcc38810dbaeaea134ddff987772cf5d28658->leave($__internal_e190e57d02c9ad64a04d8ca18e6bcc38810dbaeaea134ddff987772cf5d28658_prof);

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
