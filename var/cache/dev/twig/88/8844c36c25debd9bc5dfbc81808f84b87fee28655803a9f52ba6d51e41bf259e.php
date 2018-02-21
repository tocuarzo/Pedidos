<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_7012a9d43d8d30e4c0c4efb84955ee6d20899290d4aa9629465c38d0a6404879 extends Twig_Template
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
        $__internal_c1352ab6f8fbbd11541f7d5570a7ff32843171ae3ae952688655459f77544cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1352ab6f8fbbd11541f7d5570a7ff32843171ae3ae952688655459f77544cc6->enter($__internal_c1352ab6f8fbbd11541f7d5570a7ff32843171ae3ae952688655459f77544cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_c1571f4e711b947cd39bcba0067cf1e23778065c3028218377eea4245ad06014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1571f4e711b947cd39bcba0067cf1e23778065c3028218377eea4245ad06014->enter($__internal_c1571f4e711b947cd39bcba0067cf1e23778065c3028218377eea4245ad06014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_c1352ab6f8fbbd11541f7d5570a7ff32843171ae3ae952688655459f77544cc6->leave($__internal_c1352ab6f8fbbd11541f7d5570a7ff32843171ae3ae952688655459f77544cc6_prof);

        
        $__internal_c1571f4e711b947cd39bcba0067cf1e23778065c3028218377eea4245ad06014->leave($__internal_c1571f4e711b947cd39bcba0067cf1e23778065c3028218377eea4245ad06014_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
