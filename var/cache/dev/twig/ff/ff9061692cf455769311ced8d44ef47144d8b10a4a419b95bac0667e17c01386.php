<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_13ba56a0014e1c1bf8f18adffd97ffc73cccefc0515c5cf4bc11e7dbd3bf9696 extends Twig_Template
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
        $__internal_1ae5c59df23592ba0843b203b3eac4aef20a939137ce64082875928f9ef78112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae5c59df23592ba0843b203b3eac4aef20a939137ce64082875928f9ef78112->enter($__internal_1ae5c59df23592ba0843b203b3eac4aef20a939137ce64082875928f9ef78112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_4ae1cbd3450c546a39427bcaa140cbcd8d6e06dc366fc364a32cead2c96a1378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ae1cbd3450c546a39427bcaa140cbcd8d6e06dc366fc364a32cead2c96a1378->enter($__internal_4ae1cbd3450c546a39427bcaa140cbcd8d6e06dc366fc364a32cead2c96a1378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_1ae5c59df23592ba0843b203b3eac4aef20a939137ce64082875928f9ef78112->leave($__internal_1ae5c59df23592ba0843b203b3eac4aef20a939137ce64082875928f9ef78112_prof);

        
        $__internal_4ae1cbd3450c546a39427bcaa140cbcd8d6e06dc366fc364a32cead2c96a1378->leave($__internal_4ae1cbd3450c546a39427bcaa140cbcd8d6e06dc366fc364a32cead2c96a1378_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
