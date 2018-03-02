<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_f868f3cbe0473ac95f901927adb3ac084497de3479f087c0177f194ecd316453 extends Twig_Template
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
        $__internal_eb3f73c78867e96b702476c93ab29061bdcc523346f6400c2f3a30df826052bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb3f73c78867e96b702476c93ab29061bdcc523346f6400c2f3a30df826052bc->enter($__internal_eb3f73c78867e96b702476c93ab29061bdcc523346f6400c2f3a30df826052bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        $__internal_ebfc7c182db7c0b6ae7f603f2a5000890bee4e3af42c5475bf33a79c472b1a6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebfc7c182db7c0b6ae7f603f2a5000890bee4e3af42c5475bf33a79c472b1a6c->enter($__internal_ebfc7c182db7c0b6ae7f603f2a5000890bee4e3af42c5475bf33a79c472b1a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_eb3f73c78867e96b702476c93ab29061bdcc523346f6400c2f3a30df826052bc->leave($__internal_eb3f73c78867e96b702476c93ab29061bdcc523346f6400c2f3a30df826052bc_prof);

        
        $__internal_ebfc7c182db7c0b6ae7f603f2a5000890bee4e3af42c5475bf33a79c472b1a6c->leave($__internal_ebfc7c182db7c0b6ae7f603f2a5000890bee4e3af42c5475bf33a79c472b1a6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
", "@Framework/Form/color_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\color_widget.html.php");
    }
}
