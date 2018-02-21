<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_cb70da5bfc6393b5b5e2c5bae9dd210cb047d4d0bf08508bcc030ddbe7fe4bdf extends Twig_Template
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
        $__internal_7bd974d4dc3ddc736263c5a48255f65391c547b1fd4df724d45fbdddb4f1764c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd974d4dc3ddc736263c5a48255f65391c547b1fd4df724d45fbdddb4f1764c->enter($__internal_7bd974d4dc3ddc736263c5a48255f65391c547b1fd4df724d45fbdddb4f1764c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_5979fc3e611e2444210469af454d9fa0cd0f062f0190ec495d1efde18454e950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5979fc3e611e2444210469af454d9fa0cd0f062f0190ec495d1efde18454e950->enter($__internal_5979fc3e611e2444210469af454d9fa0cd0f062f0190ec495d1efde18454e950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_7bd974d4dc3ddc736263c5a48255f65391c547b1fd4df724d45fbdddb4f1764c->leave($__internal_7bd974d4dc3ddc736263c5a48255f65391c547b1fd4df724d45fbdddb4f1764c_prof);

        
        $__internal_5979fc3e611e2444210469af454d9fa0cd0f062f0190ec495d1efde18454e950->leave($__internal_5979fc3e611e2444210469af454d9fa0cd0f062f0190ec495d1efde18454e950_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
