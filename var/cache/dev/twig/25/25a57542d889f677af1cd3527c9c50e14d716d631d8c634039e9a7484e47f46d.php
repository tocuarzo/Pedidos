<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_daad39d21b542db0345310b004f4a61d06c93c37583b52753d83c4f9582afc5a extends Twig_Template
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
        $__internal_f6629ea0435041c008f940ee2dede66b59edd7d345477794ee45f979185989e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6629ea0435041c008f940ee2dede66b59edd7d345477794ee45f979185989e8->enter($__internal_f6629ea0435041c008f940ee2dede66b59edd7d345477794ee45f979185989e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_bb83b5e09a9695b28923f019cadac8c1323780e8b4c4295ee2d9e648d6509c4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb83b5e09a9695b28923f019cadac8c1323780e8b4c4295ee2d9e648d6509c4f->enter($__internal_bb83b5e09a9695b28923f019cadac8c1323780e8b4c4295ee2d9e648d6509c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_f6629ea0435041c008f940ee2dede66b59edd7d345477794ee45f979185989e8->leave($__internal_f6629ea0435041c008f940ee2dede66b59edd7d345477794ee45f979185989e8_prof);

        
        $__internal_bb83b5e09a9695b28923f019cadac8c1323780e8b4c4295ee2d9e648d6509c4f->leave($__internal_bb83b5e09a9695b28923f019cadac8c1323780e8b4c4295ee2d9e648d6509c4f_prof);

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
