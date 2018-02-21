<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_15846f2d6bce277cdac7f8c886d1b65a0a259fad66cf5c52ae7c48021905396e extends Twig_Template
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
        $__internal_3f7910900a18cf54586cdf83048c1c4aba6916464dec862293656c7c4c616064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f7910900a18cf54586cdf83048c1c4aba6916464dec862293656c7c4c616064->enter($__internal_3f7910900a18cf54586cdf83048c1c4aba6916464dec862293656c7c4c616064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_af402fa6d8f0a64b177419acf24a4236f3db524bbc39587154ec945b0adbd3dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af402fa6d8f0a64b177419acf24a4236f3db524bbc39587154ec945b0adbd3dd->enter($__internal_af402fa6d8f0a64b177419acf24a4236f3db524bbc39587154ec945b0adbd3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_3f7910900a18cf54586cdf83048c1c4aba6916464dec862293656c7c4c616064->leave($__internal_3f7910900a18cf54586cdf83048c1c4aba6916464dec862293656c7c4c616064_prof);

        
        $__internal_af402fa6d8f0a64b177419acf24a4236f3db524bbc39587154ec945b0adbd3dd->leave($__internal_af402fa6d8f0a64b177419acf24a4236f3db524bbc39587154ec945b0adbd3dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
