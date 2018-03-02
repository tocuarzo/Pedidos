<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_4c39a990facc9d9566d7700b765e5cdbd8380452ea6100227bb7e4e5f1a021ba extends Twig_Template
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
        $__internal_200402a28ebc8c1ac10e59306586afc3e6257aa37bbc8333b8eacd17d661bb38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_200402a28ebc8c1ac10e59306586afc3e6257aa37bbc8333b8eacd17d661bb38->enter($__internal_200402a28ebc8c1ac10e59306586afc3e6257aa37bbc8333b8eacd17d661bb38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_dff146f4c76a95d63acaff5e283a502148bb39768ce52b0c67786910dcc3ccde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dff146f4c76a95d63acaff5e283a502148bb39768ce52b0c67786910dcc3ccde->enter($__internal_dff146f4c76a95d63acaff5e283a502148bb39768ce52b0c67786910dcc3ccde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_200402a28ebc8c1ac10e59306586afc3e6257aa37bbc8333b8eacd17d661bb38->leave($__internal_200402a28ebc8c1ac10e59306586afc3e6257aa37bbc8333b8eacd17d661bb38_prof);

        
        $__internal_dff146f4c76a95d63acaff5e283a502148bb39768ce52b0c67786910dcc3ccde->leave($__internal_dff146f4c76a95d63acaff5e283a502148bb39768ce52b0c67786910dcc3ccde_prof);

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
