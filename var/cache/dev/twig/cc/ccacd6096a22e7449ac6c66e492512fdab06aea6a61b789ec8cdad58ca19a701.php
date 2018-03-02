<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_011af32ec31eb51f0ede5ff3c98ea33492a28ff1dc62de88a039a20c87ba4d5f extends Twig_Template
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
        $__internal_f9c5542d8c4686bc24708f305d0020e746eb39ef7c6f8914498955c3025b0f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c5542d8c4686bc24708f305d0020e746eb39ef7c6f8914498955c3025b0f5f->enter($__internal_f9c5542d8c4686bc24708f305d0020e746eb39ef7c6f8914498955c3025b0f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_c5e6782034ce2c28542a0c82936759b8eb161ce600f04db2e8361476581740c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5e6782034ce2c28542a0c82936759b8eb161ce600f04db2e8361476581740c6->enter($__internal_c5e6782034ce2c28542a0c82936759b8eb161ce600f04db2e8361476581740c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_f9c5542d8c4686bc24708f305d0020e746eb39ef7c6f8914498955c3025b0f5f->leave($__internal_f9c5542d8c4686bc24708f305d0020e746eb39ef7c6f8914498955c3025b0f5f_prof);

        
        $__internal_c5e6782034ce2c28542a0c82936759b8eb161ce600f04db2e8361476581740c6->leave($__internal_c5e6782034ce2c28542a0c82936759b8eb161ce600f04db2e8361476581740c6_prof);

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
