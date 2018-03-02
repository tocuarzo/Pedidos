<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_375288c038b558c20efbca3382881eea18b56a68a9dd2eb021402c01ec045966 extends Twig_Template
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
        $__internal_0f6ec802be7c9280471299a20021a13ddfe2d5ec14cbe27c6219b5f8791ee8f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f6ec802be7c9280471299a20021a13ddfe2d5ec14cbe27c6219b5f8791ee8f2->enter($__internal_0f6ec802be7c9280471299a20021a13ddfe2d5ec14cbe27c6219b5f8791ee8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_a878c995a8b145f0c6d72427b1b004c254cb5d46a73c2eca9ed7c9a502452032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a878c995a8b145f0c6d72427b1b004c254cb5d46a73c2eca9ed7c9a502452032->enter($__internal_a878c995a8b145f0c6d72427b1b004c254cb5d46a73c2eca9ed7c9a502452032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_0f6ec802be7c9280471299a20021a13ddfe2d5ec14cbe27c6219b5f8791ee8f2->leave($__internal_0f6ec802be7c9280471299a20021a13ddfe2d5ec14cbe27c6219b5f8791ee8f2_prof);

        
        $__internal_a878c995a8b145f0c6d72427b1b004c254cb5d46a73c2eca9ed7c9a502452032->leave($__internal_a878c995a8b145f0c6d72427b1b004c254cb5d46a73c2eca9ed7c9a502452032_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form.html.php");
    }
}
