<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_679f27ffbb81960895453db4ecd118342fb2f4d7d58cbaeabd736a29b5ca3977 extends Twig_Template
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
        $__internal_9e55046f516d0d36c174d9beceec3d57034a89a33c0dd12781e9b9c2174148d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e55046f516d0d36c174d9beceec3d57034a89a33c0dd12781e9b9c2174148d9->enter($__internal_9e55046f516d0d36c174d9beceec3d57034a89a33c0dd12781e9b9c2174148d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_9a10f0482a7e8b7769eb3a4fdea400ef8a39bb28a2dbb8c9dd6ec36548395a62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a10f0482a7e8b7769eb3a4fdea400ef8a39bb28a2dbb8c9dd6ec36548395a62->enter($__internal_9a10f0482a7e8b7769eb3a4fdea400ef8a39bb28a2dbb8c9dd6ec36548395a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_9e55046f516d0d36c174d9beceec3d57034a89a33c0dd12781e9b9c2174148d9->leave($__internal_9e55046f516d0d36c174d9beceec3d57034a89a33c0dd12781e9b9c2174148d9_prof);

        
        $__internal_9a10f0482a7e8b7769eb3a4fdea400ef8a39bb28a2dbb8c9dd6ec36548395a62->leave($__internal_9a10f0482a7e8b7769eb3a4fdea400ef8a39bb28a2dbb8c9dd6ec36548395a62_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
