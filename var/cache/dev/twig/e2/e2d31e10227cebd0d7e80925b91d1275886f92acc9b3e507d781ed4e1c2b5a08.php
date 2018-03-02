<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_1c61576ea121c49a84d4072013405ae8783afc553da641c3117710e649965e0d extends Twig_Template
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
        $__internal_52051091fa982caf0eca50b3ff205ba808c9e17b2ba041f44960fd88dfb85c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52051091fa982caf0eca50b3ff205ba808c9e17b2ba041f44960fd88dfb85c96->enter($__internal_52051091fa982caf0eca50b3ff205ba808c9e17b2ba041f44960fd88dfb85c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_a1fd84d3a670a1472b5e108073d918f760794587f2a2b41bf643d8b085fbb8ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1fd84d3a670a1472b5e108073d918f760794587f2a2b41bf643d8b085fbb8ed->enter($__internal_a1fd84d3a670a1472b5e108073d918f760794587f2a2b41bf643d8b085fbb8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_52051091fa982caf0eca50b3ff205ba808c9e17b2ba041f44960fd88dfb85c96->leave($__internal_52051091fa982caf0eca50b3ff205ba808c9e17b2ba041f44960fd88dfb85c96_prof);

        
        $__internal_a1fd84d3a670a1472b5e108073d918f760794587f2a2b41bf643d8b085fbb8ed->leave($__internal_a1fd84d3a670a1472b5e108073d918f760794587f2a2b41bf643d8b085fbb8ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
