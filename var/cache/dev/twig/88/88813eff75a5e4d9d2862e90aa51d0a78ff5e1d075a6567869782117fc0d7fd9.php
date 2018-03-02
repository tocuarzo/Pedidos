<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_ae842d394a145c2321fd4e8afd9f4d87711e8afff5dbcbe9363ea118374a2878 extends Twig_Template
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
        $__internal_2971b6a2e456bcbde5a055207878bddd2e951060d969187d7d38f0556092e1b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2971b6a2e456bcbde5a055207878bddd2e951060d969187d7d38f0556092e1b2->enter($__internal_2971b6a2e456bcbde5a055207878bddd2e951060d969187d7d38f0556092e1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_205955a8311287e34526e4b910d4345ff7cecf10235928d5f68f4422f7976999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_205955a8311287e34526e4b910d4345ff7cecf10235928d5f68f4422f7976999->enter($__internal_205955a8311287e34526e4b910d4345ff7cecf10235928d5f68f4422f7976999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_2971b6a2e456bcbde5a055207878bddd2e951060d969187d7d38f0556092e1b2->leave($__internal_2971b6a2e456bcbde5a055207878bddd2e951060d969187d7d38f0556092e1b2_prof);

        
        $__internal_205955a8311287e34526e4b910d4345ff7cecf10235928d5f68f4422f7976999->leave($__internal_205955a8311287e34526e4b910d4345ff7cecf10235928d5f68f4422f7976999_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
