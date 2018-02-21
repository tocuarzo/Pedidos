<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_2c9cd677c34597849251de9564a756a964a3dbe15b19216df3a2339466473411 extends Twig_Template
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
        $__internal_cf818319f534c3b9ab2714bc4d54ab8b286c66db28484ab49a92dba1fee2aaeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf818319f534c3b9ab2714bc4d54ab8b286c66db28484ab49a92dba1fee2aaeb->enter($__internal_cf818319f534c3b9ab2714bc4d54ab8b286c66db28484ab49a92dba1fee2aaeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_7709bb2e662345d22d6d090867b121b83324956dc23c09c3ac190f96191d20bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7709bb2e662345d22d6d090867b121b83324956dc23c09c3ac190f96191d20bb->enter($__internal_7709bb2e662345d22d6d090867b121b83324956dc23c09c3ac190f96191d20bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_cf818319f534c3b9ab2714bc4d54ab8b286c66db28484ab49a92dba1fee2aaeb->leave($__internal_cf818319f534c3b9ab2714bc4d54ab8b286c66db28484ab49a92dba1fee2aaeb_prof);

        
        $__internal_7709bb2e662345d22d6d090867b121b83324956dc23c09c3ac190f96191d20bb->leave($__internal_7709bb2e662345d22d6d090867b121b83324956dc23c09c3ac190f96191d20bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
