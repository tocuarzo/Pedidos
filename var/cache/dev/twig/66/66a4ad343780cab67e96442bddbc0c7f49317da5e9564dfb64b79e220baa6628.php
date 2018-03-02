<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2d7af88cfd2f47b5dd02f54d9d8167f37b4407eef9acc3b82d7c3ebbd196cff4 extends Twig_Template
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
        $__internal_147a3c2860ec772c083e99801772094a08722e39549935e6c4404cb3c0f47445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_147a3c2860ec772c083e99801772094a08722e39549935e6c4404cb3c0f47445->enter($__internal_147a3c2860ec772c083e99801772094a08722e39549935e6c4404cb3c0f47445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_60a72fc7614215ec91ffcbedcc5c97dbf2e9b87327c4a35d5f20af00673395c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60a72fc7614215ec91ffcbedcc5c97dbf2e9b87327c4a35d5f20af00673395c4->enter($__internal_60a72fc7614215ec91ffcbedcc5c97dbf2e9b87327c4a35d5f20af00673395c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_147a3c2860ec772c083e99801772094a08722e39549935e6c4404cb3c0f47445->leave($__internal_147a3c2860ec772c083e99801772094a08722e39549935e6c4404cb3c0f47445_prof);

        
        $__internal_60a72fc7614215ec91ffcbedcc5c97dbf2e9b87327c4a35d5f20af00673395c4->leave($__internal_60a72fc7614215ec91ffcbedcc5c97dbf2e9b87327c4a35d5f20af00673395c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
