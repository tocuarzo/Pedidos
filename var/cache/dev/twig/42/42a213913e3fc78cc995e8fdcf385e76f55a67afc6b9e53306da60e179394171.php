<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_c311cda2307ea1eccda997a46e7d2417ce9d18c5112c693c86ff6d0122a9d0fa extends Twig_Template
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
        $__internal_f6bbe3437a04e0ed3ac529d8aac7e969509fcc5833f0460f51f2c689db7bf8d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6bbe3437a04e0ed3ac529d8aac7e969509fcc5833f0460f51f2c689db7bf8d1->enter($__internal_f6bbe3437a04e0ed3ac529d8aac7e969509fcc5833f0460f51f2c689db7bf8d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_313abb17e279697f82147e4b27ff36a165fc90b26d9ea8c1d59f34902f24949d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_313abb17e279697f82147e4b27ff36a165fc90b26d9ea8c1d59f34902f24949d->enter($__internal_313abb17e279697f82147e4b27ff36a165fc90b26d9ea8c1d59f34902f24949d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f6bbe3437a04e0ed3ac529d8aac7e969509fcc5833f0460f51f2c689db7bf8d1->leave($__internal_f6bbe3437a04e0ed3ac529d8aac7e969509fcc5833f0460f51f2c689db7bf8d1_prof);

        
        $__internal_313abb17e279697f82147e4b27ff36a165fc90b26d9ea8c1d59f34902f24949d->leave($__internal_313abb17e279697f82147e4b27ff36a165fc90b26d9ea8c1d59f34902f24949d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
