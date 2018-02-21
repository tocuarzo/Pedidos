<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6950467b776c0b9bb4282425cbac94ebc303a635aedd093e17839be0d2985a29 extends Twig_Template
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
        $__internal_8d7461e9271fd5aca5c1fc3ac36e4afb7c8db982a10c99ed131ef446880453a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d7461e9271fd5aca5c1fc3ac36e4afb7c8db982a10c99ed131ef446880453a0->enter($__internal_8d7461e9271fd5aca5c1fc3ac36e4afb7c8db982a10c99ed131ef446880453a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_9ff67e6cd5555708282fa0966c4756ba5d3bb841f079162ae7d4ab77a8a18169 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ff67e6cd5555708282fa0966c4756ba5d3bb841f079162ae7d4ab77a8a18169->enter($__internal_9ff67e6cd5555708282fa0966c4756ba5d3bb841f079162ae7d4ab77a8a18169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_8d7461e9271fd5aca5c1fc3ac36e4afb7c8db982a10c99ed131ef446880453a0->leave($__internal_8d7461e9271fd5aca5c1fc3ac36e4afb7c8db982a10c99ed131ef446880453a0_prof);

        
        $__internal_9ff67e6cd5555708282fa0966c4756ba5d3bb841f079162ae7d4ab77a8a18169->leave($__internal_9ff67e6cd5555708282fa0966c4756ba5d3bb841f079162ae7d4ab77a8a18169_prof);

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
