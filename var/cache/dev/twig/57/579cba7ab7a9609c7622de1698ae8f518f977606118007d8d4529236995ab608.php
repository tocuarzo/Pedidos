<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_ccb12d057fd483725cca954cfde9c44d348aa7af9220f032b77da50f6bc00e2a extends Twig_Template
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
        $__internal_aa4808e383d033c08becbec95cea2313e8b1d5565569363fee1c3d6d0ada8e07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa4808e383d033c08becbec95cea2313e8b1d5565569363fee1c3d6d0ada8e07->enter($__internal_aa4808e383d033c08becbec95cea2313e8b1d5565569363fee1c3d6d0ada8e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_443c9e869b31905c6d0f1da47970d2aa80572bd18f961c54aead19fbff189f63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_443c9e869b31905c6d0f1da47970d2aa80572bd18f961c54aead19fbff189f63->enter($__internal_443c9e869b31905c6d0f1da47970d2aa80572bd18f961c54aead19fbff189f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_aa4808e383d033c08becbec95cea2313e8b1d5565569363fee1c3d6d0ada8e07->leave($__internal_aa4808e383d033c08becbec95cea2313e8b1d5565569363fee1c3d6d0ada8e07_prof);

        
        $__internal_443c9e869b31905c6d0f1da47970d2aa80572bd18f961c54aead19fbff189f63->leave($__internal_443c9e869b31905c6d0f1da47970d2aa80572bd18f961c54aead19fbff189f63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
