<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_311ade94a5817889a15671ab15f5dfeec222cbf2369d5cad2abd452105f23181 extends Twig_Template
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
        $__internal_24597583304b110d2084ad3ae5fa1b4a50d1c148baf2cb972a4f9e8f2fafe64f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24597583304b110d2084ad3ae5fa1b4a50d1c148baf2cb972a4f9e8f2fafe64f->enter($__internal_24597583304b110d2084ad3ae5fa1b4a50d1c148baf2cb972a4f9e8f2fafe64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_4296c28756c26f35be46791da60bcc56f2e0fb18cffd205a5cecdc74efa47c73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4296c28756c26f35be46791da60bcc56f2e0fb18cffd205a5cecdc74efa47c73->enter($__internal_4296c28756c26f35be46791da60bcc56f2e0fb18cffd205a5cecdc74efa47c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_24597583304b110d2084ad3ae5fa1b4a50d1c148baf2cb972a4f9e8f2fafe64f->leave($__internal_24597583304b110d2084ad3ae5fa1b4a50d1c148baf2cb972a4f9e8f2fafe64f_prof);

        
        $__internal_4296c28756c26f35be46791da60bcc56f2e0fb18cffd205a5cecdc74efa47c73->leave($__internal_4296c28756c26f35be46791da60bcc56f2e0fb18cffd205a5cecdc74efa47c73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
