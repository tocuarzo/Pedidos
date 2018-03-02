<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_11ae064c3c313e574121aab9058bee4bd617259b38eadd7ff4941686ae743153 extends Twig_Template
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
        $__internal_03b5caf8caa3c880dddc0f7ffc8c0644e41aee488e3792a838527e7775e9f45a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03b5caf8caa3c880dddc0f7ffc8c0644e41aee488e3792a838527e7775e9f45a->enter($__internal_03b5caf8caa3c880dddc0f7ffc8c0644e41aee488e3792a838527e7775e9f45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_9d8cb3ac2c55d4e053087de7c7d572efdb6fe192c6f0d7686d2c16dcfcb3c017 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d8cb3ac2c55d4e053087de7c7d572efdb6fe192c6f0d7686d2c16dcfcb3c017->enter($__internal_9d8cb3ac2c55d4e053087de7c7d572efdb6fe192c6f0d7686d2c16dcfcb3c017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_03b5caf8caa3c880dddc0f7ffc8c0644e41aee488e3792a838527e7775e9f45a->leave($__internal_03b5caf8caa3c880dddc0f7ffc8c0644e41aee488e3792a838527e7775e9f45a_prof);

        
        $__internal_9d8cb3ac2c55d4e053087de7c7d572efdb6fe192c6f0d7686d2c16dcfcb3c017->leave($__internal_9d8cb3ac2c55d4e053087de7c7d572efdb6fe192c6f0d7686d2c16dcfcb3c017_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
