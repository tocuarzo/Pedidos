<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_9b141ba2c10c5f5d520d7aa12ac2c1afd99ce075ab6acfd1ccbf5a7030811bca extends Twig_Template
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
        $__internal_3b97cbc70a3e37a75a20513540b7b2fb9cda907edb25f40c171f619104b113be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b97cbc70a3e37a75a20513540b7b2fb9cda907edb25f40c171f619104b113be->enter($__internal_3b97cbc70a3e37a75a20513540b7b2fb9cda907edb25f40c171f619104b113be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_1f78f9735ef1e96318b3c38300c167f12e7978016b8543bac9cb358d297871ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f78f9735ef1e96318b3c38300c167f12e7978016b8543bac9cb358d297871ce->enter($__internal_1f78f9735ef1e96318b3c38300c167f12e7978016b8543bac9cb358d297871ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3b97cbc70a3e37a75a20513540b7b2fb9cda907edb25f40c171f619104b113be->leave($__internal_3b97cbc70a3e37a75a20513540b7b2fb9cda907edb25f40c171f619104b113be_prof);

        
        $__internal_1f78f9735ef1e96318b3c38300c167f12e7978016b8543bac9cb358d297871ce->leave($__internal_1f78f9735ef1e96318b3c38300c167f12e7978016b8543bac9cb358d297871ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
