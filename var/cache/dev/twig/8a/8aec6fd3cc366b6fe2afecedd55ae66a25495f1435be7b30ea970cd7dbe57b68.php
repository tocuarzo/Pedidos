<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_4c77ac1a55f32383b3f0bc12a68af9ea2eeefc612219b511754a4567171dee5e extends Twig_Template
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
        $__internal_382217ebc351b6b5ca18a6658e26f4eda0198f43db2a38ee060321a8555850ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_382217ebc351b6b5ca18a6658e26f4eda0198f43db2a38ee060321a8555850ce->enter($__internal_382217ebc351b6b5ca18a6658e26f4eda0198f43db2a38ee060321a8555850ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_ad964b4ef90c1e9a595f5361534ead49c62ecc5a140be372b161b643695624d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad964b4ef90c1e9a595f5361534ead49c62ecc5a140be372b161b643695624d0->enter($__internal_ad964b4ef90c1e9a595f5361534ead49c62ecc5a140be372b161b643695624d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_382217ebc351b6b5ca18a6658e26f4eda0198f43db2a38ee060321a8555850ce->leave($__internal_382217ebc351b6b5ca18a6658e26f4eda0198f43db2a38ee060321a8555850ce_prof);

        
        $__internal_ad964b4ef90c1e9a595f5361534ead49c62ecc5a140be372b161b643695624d0->leave($__internal_ad964b4ef90c1e9a595f5361534ead49c62ecc5a140be372b161b643695624d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
