<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_a8495d0c937e7f9d0b6dadbfb32555348486f4f1ba142cbed8ae9f3ee42a497f extends Twig_Template
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
        $__internal_124f228e3e9ad6fae29918f80eaf2ddd8fc1f12f770eece72a61e2265fa5eac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_124f228e3e9ad6fae29918f80eaf2ddd8fc1f12f770eece72a61e2265fa5eac4->enter($__internal_124f228e3e9ad6fae29918f80eaf2ddd8fc1f12f770eece72a61e2265fa5eac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_6704bbc1bc16068b68c2bd9c6f2256159727c1834f3936adae810e1a5351fcd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6704bbc1bc16068b68c2bd9c6f2256159727c1834f3936adae810e1a5351fcd6->enter($__internal_6704bbc1bc16068b68c2bd9c6f2256159727c1834f3936adae810e1a5351fcd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_124f228e3e9ad6fae29918f80eaf2ddd8fc1f12f770eece72a61e2265fa5eac4->leave($__internal_124f228e3e9ad6fae29918f80eaf2ddd8fc1f12f770eece72a61e2265fa5eac4_prof);

        
        $__internal_6704bbc1bc16068b68c2bd9c6f2256159727c1834f3936adae810e1a5351fcd6->leave($__internal_6704bbc1bc16068b68c2bd9c6f2256159727c1834f3936adae810e1a5351fcd6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
