<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_949956a5a8290a297078da4059cbbeb5a05dd35de68d76850f21ed28e34aed49 extends Twig_Template
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
        $__internal_e5762b50216a4a1310c0973393f6e37c01f547f111bc4301a02e4a9906c5aea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5762b50216a4a1310c0973393f6e37c01f547f111bc4301a02e4a9906c5aea0->enter($__internal_e5762b50216a4a1310c0973393f6e37c01f547f111bc4301a02e4a9906c5aea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_bb4e82d61e21cc4fa79e58ad8b28c891d6e42470f71fc4ff500170e37e22c4f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb4e82d61e21cc4fa79e58ad8b28c891d6e42470f71fc4ff500170e37e22c4f6->enter($__internal_bb4e82d61e21cc4fa79e58ad8b28c891d6e42470f71fc4ff500170e37e22c4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_e5762b50216a4a1310c0973393f6e37c01f547f111bc4301a02e4a9906c5aea0->leave($__internal_e5762b50216a4a1310c0973393f6e37c01f547f111bc4301a02e4a9906c5aea0_prof);

        
        $__internal_bb4e82d61e21cc4fa79e58ad8b28c891d6e42470f71fc4ff500170e37e22c4f6->leave($__internal_bb4e82d61e21cc4fa79e58ad8b28c891d6e42470f71fc4ff500170e37e22c4f6_prof);

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
