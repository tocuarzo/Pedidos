<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_af11095560891c1cae898b391b71666e9681675fb104841273dabe42e153164f extends Twig_Template
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
        $__internal_79a7109d17e26fa0864b5d3b906f954284c2741475615ae7ef81c601d005b134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a7109d17e26fa0864b5d3b906f954284c2741475615ae7ef81c601d005b134->enter($__internal_79a7109d17e26fa0864b5d3b906f954284c2741475615ae7ef81c601d005b134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_87796ef2b42dd13f0714db27d503717999bde7b4f5864008a9fb4681c588461b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87796ef2b42dd13f0714db27d503717999bde7b4f5864008a9fb4681c588461b->enter($__internal_87796ef2b42dd13f0714db27d503717999bde7b4f5864008a9fb4681c588461b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_79a7109d17e26fa0864b5d3b906f954284c2741475615ae7ef81c601d005b134->leave($__internal_79a7109d17e26fa0864b5d3b906f954284c2741475615ae7ef81c601d005b134_prof);

        
        $__internal_87796ef2b42dd13f0714db27d503717999bde7b4f5864008a9fb4681c588461b->leave($__internal_87796ef2b42dd13f0714db27d503717999bde7b4f5864008a9fb4681c588461b_prof);

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
