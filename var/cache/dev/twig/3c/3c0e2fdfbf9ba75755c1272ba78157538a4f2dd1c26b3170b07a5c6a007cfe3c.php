<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_aaf7cb9a8d45462d4253eb1b2bebabadb173504651a167420df6bb2dd37c58f9 extends Twig_Template
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
        $__internal_6d14b261058d052ba1a747c2d5f64f43e35aca95da62d8c2a19d992f530bb5de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d14b261058d052ba1a747c2d5f64f43e35aca95da62d8c2a19d992f530bb5de->enter($__internal_6d14b261058d052ba1a747c2d5f64f43e35aca95da62d8c2a19d992f530bb5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_7491aabd7d1cab85472eb02a1ba635a3c00ae8c580ae0fffcfbd19a9a84d6513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7491aabd7d1cab85472eb02a1ba635a3c00ae8c580ae0fffcfbd19a9a84d6513->enter($__internal_7491aabd7d1cab85472eb02a1ba635a3c00ae8c580ae0fffcfbd19a9a84d6513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6d14b261058d052ba1a747c2d5f64f43e35aca95da62d8c2a19d992f530bb5de->leave($__internal_6d14b261058d052ba1a747c2d5f64f43e35aca95da62d8c2a19d992f530bb5de_prof);

        
        $__internal_7491aabd7d1cab85472eb02a1ba635a3c00ae8c580ae0fffcfbd19a9a84d6513->leave($__internal_7491aabd7d1cab85472eb02a1ba635a3c00ae8c580ae0fffcfbd19a9a84d6513_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
