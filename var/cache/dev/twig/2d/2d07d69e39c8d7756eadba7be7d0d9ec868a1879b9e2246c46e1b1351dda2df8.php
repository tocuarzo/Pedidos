<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_976f3316e513f04662628027701d402bdbf7ef86b03a480b891f1e563e3df422 extends Twig_Template
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
        $__internal_e6ba0123b482176e5a64b83831ef4d7c9324de4ee5e0b98a73183975065d1a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ba0123b482176e5a64b83831ef4d7c9324de4ee5e0b98a73183975065d1a5a->enter($__internal_e6ba0123b482176e5a64b83831ef4d7c9324de4ee5e0b98a73183975065d1a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_5c5411995d3ee9a9368f20723ee2dd38fc9a2e4c6542a43a4365309f594a4e84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c5411995d3ee9a9368f20723ee2dd38fc9a2e4c6542a43a4365309f594a4e84->enter($__internal_5c5411995d3ee9a9368f20723ee2dd38fc9a2e4c6542a43a4365309f594a4e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e6ba0123b482176e5a64b83831ef4d7c9324de4ee5e0b98a73183975065d1a5a->leave($__internal_e6ba0123b482176e5a64b83831ef4d7c9324de4ee5e0b98a73183975065d1a5a_prof);

        
        $__internal_5c5411995d3ee9a9368f20723ee2dd38fc9a2e4c6542a43a4365309f594a4e84->leave($__internal_5c5411995d3ee9a9368f20723ee2dd38fc9a2e4c6542a43a4365309f594a4e84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
