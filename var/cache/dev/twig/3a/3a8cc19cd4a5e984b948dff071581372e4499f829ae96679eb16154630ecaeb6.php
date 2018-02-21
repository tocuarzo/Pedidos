<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_8cf4fb53bdc8278d2ca2c17c81153ca81fa8d39dbff20418c9887219cb9f921a extends Twig_Template
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
        $__internal_008920afae98b2c4d9a1f8767585ef5e4f023e26cb97bf2d41e9bbf8ed103fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_008920afae98b2c4d9a1f8767585ef5e4f023e26cb97bf2d41e9bbf8ed103fcb->enter($__internal_008920afae98b2c4d9a1f8767585ef5e4f023e26cb97bf2d41e9bbf8ed103fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_a1ade9346bcfaa753de8dd623fb1a0c12d7f881607ca3a0bc5434de556ccf6e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1ade9346bcfaa753de8dd623fb1a0c12d7f881607ca3a0bc5434de556ccf6e8->enter($__internal_a1ade9346bcfaa753de8dd623fb1a0c12d7f881607ca3a0bc5434de556ccf6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_008920afae98b2c4d9a1f8767585ef5e4f023e26cb97bf2d41e9bbf8ed103fcb->leave($__internal_008920afae98b2c4d9a1f8767585ef5e4f023e26cb97bf2d41e9bbf8ed103fcb_prof);

        
        $__internal_a1ade9346bcfaa753de8dd623fb1a0c12d7f881607ca3a0bc5434de556ccf6e8->leave($__internal_a1ade9346bcfaa753de8dd623fb1a0c12d7f881607ca3a0bc5434de556ccf6e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
