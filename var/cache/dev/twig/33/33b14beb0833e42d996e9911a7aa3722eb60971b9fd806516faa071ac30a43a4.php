<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_c4994564d2476fbe8f4b9b10e8a92facfbebbb1e00a5c378c0429871b594edea extends Twig_Template
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
        $__internal_721ee325e93dce6721cb27225d9727b7a1850fc4558438dcda23ef48e3414276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_721ee325e93dce6721cb27225d9727b7a1850fc4558438dcda23ef48e3414276->enter($__internal_721ee325e93dce6721cb27225d9727b7a1850fc4558438dcda23ef48e3414276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_6931c1e408c975e7d4fabe6de4fbed1e448d6a6b2503cdce89b78b9474f3241e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6931c1e408c975e7d4fabe6de4fbed1e448d6a6b2503cdce89b78b9474f3241e->enter($__internal_6931c1e408c975e7d4fabe6de4fbed1e448d6a6b2503cdce89b78b9474f3241e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_721ee325e93dce6721cb27225d9727b7a1850fc4558438dcda23ef48e3414276->leave($__internal_721ee325e93dce6721cb27225d9727b7a1850fc4558438dcda23ef48e3414276_prof);

        
        $__internal_6931c1e408c975e7d4fabe6de4fbed1e448d6a6b2503cdce89b78b9474f3241e->leave($__internal_6931c1e408c975e7d4fabe6de4fbed1e448d6a6b2503cdce89b78b9474f3241e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}