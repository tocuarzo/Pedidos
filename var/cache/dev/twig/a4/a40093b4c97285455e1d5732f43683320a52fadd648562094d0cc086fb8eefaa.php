<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_be6541384f9699d58e540557b5b523b54726e9a3d2e6f3791b979fb52965adb8 extends Twig_Template
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
        $__internal_a0e44cd124dbe31b52577844a2613c07fe47a6890d82419ac45b9a6ddc3956c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0e44cd124dbe31b52577844a2613c07fe47a6890d82419ac45b9a6ddc3956c6->enter($__internal_a0e44cd124dbe31b52577844a2613c07fe47a6890d82419ac45b9a6ddc3956c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_3ee72dd24147b6fe3808c34e80825e1bcde7bcf3541f62e148632b6358fc0e57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee72dd24147b6fe3808c34e80825e1bcde7bcf3541f62e148632b6358fc0e57->enter($__internal_3ee72dd24147b6fe3808c34e80825e1bcde7bcf3541f62e148632b6358fc0e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_a0e44cd124dbe31b52577844a2613c07fe47a6890d82419ac45b9a6ddc3956c6->leave($__internal_a0e44cd124dbe31b52577844a2613c07fe47a6890d82419ac45b9a6ddc3956c6_prof);

        
        $__internal_3ee72dd24147b6fe3808c34e80825e1bcde7bcf3541f62e148632b6358fc0e57->leave($__internal_3ee72dd24147b6fe3808c34e80825e1bcde7bcf3541f62e148632b6358fc0e57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
