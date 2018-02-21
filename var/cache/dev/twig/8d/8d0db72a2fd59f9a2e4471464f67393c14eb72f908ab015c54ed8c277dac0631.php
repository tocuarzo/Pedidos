<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_7b82f03d0e02325f1f026e92fcc225abbb8449a8c72169e22a0df4604b52fd82 extends Twig_Template
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
        $__internal_4e58a4a23a2071b0d8cdd4cc43d852e1f88f96fd1cc48d9d1577d1147088c244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e58a4a23a2071b0d8cdd4cc43d852e1f88f96fd1cc48d9d1577d1147088c244->enter($__internal_4e58a4a23a2071b0d8cdd4cc43d852e1f88f96fd1cc48d9d1577d1147088c244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_395a3cdd19dfc86921b15f1e6ac973021b0bf0658b14dae67c09b8b9f38b2036 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_395a3cdd19dfc86921b15f1e6ac973021b0bf0658b14dae67c09b8b9f38b2036->enter($__internal_395a3cdd19dfc86921b15f1e6ac973021b0bf0658b14dae67c09b8b9f38b2036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_4e58a4a23a2071b0d8cdd4cc43d852e1f88f96fd1cc48d9d1577d1147088c244->leave($__internal_4e58a4a23a2071b0d8cdd4cc43d852e1f88f96fd1cc48d9d1577d1147088c244_prof);

        
        $__internal_395a3cdd19dfc86921b15f1e6ac973021b0bf0658b14dae67c09b8b9f38b2036->leave($__internal_395a3cdd19dfc86921b15f1e6ac973021b0bf0658b14dae67c09b8b9f38b2036_prof);

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
