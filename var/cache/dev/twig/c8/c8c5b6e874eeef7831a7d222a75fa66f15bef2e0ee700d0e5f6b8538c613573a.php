<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_bc66c4b04e4a2e8482dea6145b93742f636f73a5eb597b3fede55551515d6e4e extends Twig_Template
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
        $__internal_f127ef14f8ed8b53f2be364e3a1528cb89193f32acf801ec04729fb9c3e58171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f127ef14f8ed8b53f2be364e3a1528cb89193f32acf801ec04729fb9c3e58171->enter($__internal_f127ef14f8ed8b53f2be364e3a1528cb89193f32acf801ec04729fb9c3e58171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_807c3770c7aa9f9da49da9abf62527062ab91a017047c8429e2eaf610c9f9a75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_807c3770c7aa9f9da49da9abf62527062ab91a017047c8429e2eaf610c9f9a75->enter($__internal_807c3770c7aa9f9da49da9abf62527062ab91a017047c8429e2eaf610c9f9a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f127ef14f8ed8b53f2be364e3a1528cb89193f32acf801ec04729fb9c3e58171->leave($__internal_f127ef14f8ed8b53f2be364e3a1528cb89193f32acf801ec04729fb9c3e58171_prof);

        
        $__internal_807c3770c7aa9f9da49da9abf62527062ab91a017047c8429e2eaf610c9f9a75->leave($__internal_807c3770c7aa9f9da49da9abf62527062ab91a017047c8429e2eaf610c9f9a75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
