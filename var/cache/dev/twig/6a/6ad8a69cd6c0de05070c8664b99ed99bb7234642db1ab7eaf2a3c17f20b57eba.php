<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_36391b4c4455188b9d2cddb6516a798bfaf75884031ec7a0303b76772ccf09bf extends Twig_Template
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
        $__internal_930933bcd7d4c3e172c68cd43eaa1db65ed03eb0dda5b580c6d02e7ec8ef7710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_930933bcd7d4c3e172c68cd43eaa1db65ed03eb0dda5b580c6d02e7ec8ef7710->enter($__internal_930933bcd7d4c3e172c68cd43eaa1db65ed03eb0dda5b580c6d02e7ec8ef7710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_88fa63d930578cdd630fe04a17742ba9243ddc459350e8b2ce8d8c2b7f1218d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88fa63d930578cdd630fe04a17742ba9243ddc459350e8b2ce8d8c2b7f1218d2->enter($__internal_88fa63d930578cdd630fe04a17742ba9243ddc459350e8b2ce8d8c2b7f1218d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_930933bcd7d4c3e172c68cd43eaa1db65ed03eb0dda5b580c6d02e7ec8ef7710->leave($__internal_930933bcd7d4c3e172c68cd43eaa1db65ed03eb0dda5b580c6d02e7ec8ef7710_prof);

        
        $__internal_88fa63d930578cdd630fe04a17742ba9243ddc459350e8b2ce8d8c2b7f1218d2->leave($__internal_88fa63d930578cdd630fe04a17742ba9243ddc459350e8b2ce8d8c2b7f1218d2_prof);

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
