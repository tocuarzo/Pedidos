<?php

/* @EasyAdmin/default/field_object.html.twig */
class __TwigTemplate_bce005a6929607aed9700f6369b80758b960ce21b42126d17959f95caca9cffc extends Twig_Template
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
        $__internal_de73ce79e8e1d983fed8d3dfe8d8055e288c0933cd34848bc0c6131084b5dad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de73ce79e8e1d983fed8d3dfe8d8055e288c0933cd34848bc0c6131084b5dad7->enter($__internal_de73ce79e8e1d983fed8d3dfe8d8055e288c0933cd34848bc0c6131084b5dad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_object.html.twig"));

        $__internal_a5de00e69928730bcfe4635280177f3d52af2718f9209b46b3d246a15238ad16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5de00e69928730bcfe4635280177f3d52af2718f9209b46b3d246a15238ad16->enter($__internal_a5de00e69928730bcfe4635280177f3d52af2718f9209b46b3d246a15238ad16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_object.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.object", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_de73ce79e8e1d983fed8d3dfe8d8055e288c0933cd34848bc0c6131084b5dad7->leave($__internal_de73ce79e8e1d983fed8d3dfe8d8055e288c0933cd34848bc0c6131084b5dad7_prof);

        
        $__internal_a5de00e69928730bcfe4635280177f3d52af2718f9209b46b3d246a15238ad16->leave($__internal_a5de00e69928730bcfe4635280177f3d52af2718f9209b46b3d246a15238ad16_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_object.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"label\">{{ 'label.object'|trans(domain = 'EasyAdminBundle') }}</span>
", "@EasyAdmin/default/field_object.html.twig", "C:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\field_object.html.twig");
    }
}
