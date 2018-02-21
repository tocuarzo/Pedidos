<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d7e6fa4c97ad156e1bad1d78e75f2a364edab9f638c136f11e7711d9daea14dc extends Twig_Template
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
        $__internal_55d0ac0976fd32a7b9dca7e6673558d3bc998e63fcb9786188f0276b044127c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55d0ac0976fd32a7b9dca7e6673558d3bc998e63fcb9786188f0276b044127c0->enter($__internal_55d0ac0976fd32a7b9dca7e6673558d3bc998e63fcb9786188f0276b044127c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_0a9ba200885e0bb80a52fc54f2d63efbaca48e2d48566a47f3d020f6ec0ed83e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a9ba200885e0bb80a52fc54f2d63efbaca48e2d48566a47f3d020f6ec0ed83e->enter($__internal_0a9ba200885e0bb80a52fc54f2d63efbaca48e2d48566a47f3d020f6ec0ed83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_55d0ac0976fd32a7b9dca7e6673558d3bc998e63fcb9786188f0276b044127c0->leave($__internal_55d0ac0976fd32a7b9dca7e6673558d3bc998e63fcb9786188f0276b044127c0_prof);

        
        $__internal_0a9ba200885e0bb80a52fc54f2d63efbaca48e2d48566a47f3d020f6ec0ed83e->leave($__internal_0a9ba200885e0bb80a52fc54f2d63efbaca48e2d48566a47f3d020f6ec0ed83e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
