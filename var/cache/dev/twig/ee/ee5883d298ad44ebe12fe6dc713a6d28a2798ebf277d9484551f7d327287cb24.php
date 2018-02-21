<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_312a7dcf429293b69f824d48701b28019e2e95023441b1070ca447de8d367bc9 extends Twig_Template
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
        $__internal_1435e551931d6a73ab268491481525b3f8b493c88b6af8f7d9e00321c5c0d98d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1435e551931d6a73ab268491481525b3f8b493c88b6af8f7d9e00321c5c0d98d->enter($__internal_1435e551931d6a73ab268491481525b3f8b493c88b6af8f7d9e00321c5c0d98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_c7ad744f488aa58760acbe6f55a729eb2d19fdc3f3276799b4459be622af462e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7ad744f488aa58760acbe6f55a729eb2d19fdc3f3276799b4459be622af462e->enter($__internal_c7ad744f488aa58760acbe6f55a729eb2d19fdc3f3276799b4459be622af462e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_1435e551931d6a73ab268491481525b3f8b493c88b6af8f7d9e00321c5c0d98d->leave($__internal_1435e551931d6a73ab268491481525b3f8b493c88b6af8f7d9e00321c5c0d98d_prof);

        
        $__internal_c7ad744f488aa58760acbe6f55a729eb2d19fdc3f3276799b4459be622af462e->leave($__internal_c7ad744f488aa58760acbe6f55a729eb2d19fdc3f3276799b4459be622af462e_prof);

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
