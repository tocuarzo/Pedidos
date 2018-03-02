<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_a11eafaf28def95eebe8e18c53c358e240f9fe19054824f3062b138ff1c3fdc6 extends Twig_Template
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
        $__internal_19c002f2a99f80a8c5054435e6e10c5f7a98eb8a73d2b0dfcfeba64546e6e968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c002f2a99f80a8c5054435e6e10c5f7a98eb8a73d2b0dfcfeba64546e6e968->enter($__internal_19c002f2a99f80a8c5054435e6e10c5f7a98eb8a73d2b0dfcfeba64546e6e968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_c620026d54096a8e46dd469d085f2d73b0624b880531afd8379410540658d031 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c620026d54096a8e46dd469d085f2d73b0624b880531afd8379410540658d031->enter($__internal_c620026d54096a8e46dd469d085f2d73b0624b880531afd8379410540658d031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_19c002f2a99f80a8c5054435e6e10c5f7a98eb8a73d2b0dfcfeba64546e6e968->leave($__internal_19c002f2a99f80a8c5054435e6e10c5f7a98eb8a73d2b0dfcfeba64546e6e968_prof);

        
        $__internal_c620026d54096a8e46dd469d085f2d73b0624b880531afd8379410540658d031->leave($__internal_c620026d54096a8e46dd469d085f2d73b0624b880531afd8379410540658d031_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
