<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_a2f42e4986c4aba85a68912de68e91f12db9b0f4bdd10787f3e44417bc31caf6 extends Twig_Template
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
        $__internal_98a87a88e90da6a4942a321cc6e91f08e0c19128786955f0eecc226f5360bbb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98a87a88e90da6a4942a321cc6e91f08e0c19128786955f0eecc226f5360bbb8->enter($__internal_98a87a88e90da6a4942a321cc6e91f08e0c19128786955f0eecc226f5360bbb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_c3a4cf650c38beef16e2bfd31db0da5746220fb5dec2c143ae04589de234eefa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3a4cf650c38beef16e2bfd31db0da5746220fb5dec2c143ae04589de234eefa->enter($__internal_c3a4cf650c38beef16e2bfd31db0da5746220fb5dec2c143ae04589de234eefa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_98a87a88e90da6a4942a321cc6e91f08e0c19128786955f0eecc226f5360bbb8->leave($__internal_98a87a88e90da6a4942a321cc6e91f08e0c19128786955f0eecc226f5360bbb8_prof);

        
        $__internal_c3a4cf650c38beef16e2bfd31db0da5746220fb5dec2c143ae04589de234eefa->leave($__internal_c3a4cf650c38beef16e2bfd31db0da5746220fb5dec2c143ae04589de234eefa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
