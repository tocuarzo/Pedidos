<?php

/* @EasyAdmin/default/field_id.html.twig */
class __TwigTemplate_cf2d517e536d296d2153497a38c8b6528349f21f6b42f3e0f6c5599f95f8fdd0 extends Twig_Template
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
        $__internal_fc8048ff25a80911e5f09e0e7beb5cf817bfaccaeeed83a1111a5346cb623c56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc8048ff25a80911e5f09e0e7beb5cf817bfaccaeeed83a1111a5346cb623c56->enter($__internal_fc8048ff25a80911e5f09e0e7beb5cf817bfaccaeeed83a1111a5346cb623c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        $__internal_ca7515f087a1f28755f96de62043919795f28d8ec092d1aa52bd150d0ca26da1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca7515f087a1f28755f96de62043919795f28d8ec092d1aa52bd150d0ca26da1->enter($__internal_ca7515f087a1f28755f96de62043919795f28d8ec092d1aa52bd150d0ca26da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
        echo "
";
        
        $__internal_fc8048ff25a80911e5f09e0e7beb5cf817bfaccaeeed83a1111a5346cb623c56->leave($__internal_fc8048ff25a80911e5f09e0e7beb5cf817bfaccaeeed83a1111a5346cb623c56_prof);

        
        $__internal_ca7515f087a1f28755f96de62043919795f28d8ec092d1aa52bd150d0ca26da1->leave($__internal_ca7515f087a1f28755f96de62043919795f28d8ec092d1aa52bd150d0ca26da1_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "@EasyAdmin/default/field_id.html.twig", "D:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\field_id.html.twig");
    }
}
