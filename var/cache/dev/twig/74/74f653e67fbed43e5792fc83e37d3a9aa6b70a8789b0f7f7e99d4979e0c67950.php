<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_91768bb7333032a4593277b12613a0951107627063f166a0cbb06e1059b34766 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7eb38fdb1b03e4d06be418c10617f4cbeb4f673a2a6de757e1cb9f5a833f5e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7eb38fdb1b03e4d06be418c10617f4cbeb4f673a2a6de757e1cb9f5a833f5e2->enter($__internal_d7eb38fdb1b03e4d06be418c10617f4cbeb4f673a2a6de757e1cb9f5a833f5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_eaf9b4ffecf936e09c16167bffb5f43d92b7d3357f5497aefaaa6fc8bd19a10c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaf9b4ffecf936e09c16167bffb5f43d92b7d3357f5497aefaaa6fc8bd19a10c->enter($__internal_eaf9b4ffecf936e09c16167bffb5f43d92b7d3357f5497aefaaa6fc8bd19a10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7eb38fdb1b03e4d06be418c10617f4cbeb4f673a2a6de757e1cb9f5a833f5e2->leave($__internal_d7eb38fdb1b03e4d06be418c10617f4cbeb4f673a2a6de757e1cb9f5a833f5e2_prof);

        
        $__internal_eaf9b4ffecf936e09c16167bffb5f43d92b7d3357f5497aefaaa6fc8bd19a10c->leave($__internal_eaf9b4ffecf936e09c16167bffb5f43d92b7d3357f5497aefaaa6fc8bd19a10c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6b1f1f3c9c0789e683c51920d5ff2073b5bd084b0fad50e16a62fb021afa3d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b1f1f3c9c0789e683c51920d5ff2073b5bd084b0fad50e16a62fb021afa3d53->enter($__internal_6b1f1f3c9c0789e683c51920d5ff2073b5bd084b0fad50e16a62fb021afa3d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7e970d1a2804e6495a9192f5c08917a944974884857fd2ff85134741a64b79f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e970d1a2804e6495a9192f5c08917a944974884857fd2ff85134741a64b79f8->enter($__internal_7e970d1a2804e6495a9192f5c08917a944974884857fd2ff85134741a64b79f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7e970d1a2804e6495a9192f5c08917a944974884857fd2ff85134741a64b79f8->leave($__internal_7e970d1a2804e6495a9192f5c08917a944974884857fd2ff85134741a64b79f8_prof);

        
        $__internal_6b1f1f3c9c0789e683c51920d5ff2073b5bd084b0fad50e16a62fb021afa3d53->leave($__internal_6b1f1f3c9c0789e683c51920d5ff2073b5bd084b0fad50e16a62fb021afa3d53_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_59229348c2d480e897d45396f57b28021db715d7d4c0390b61c935405f2dcc8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59229348c2d480e897d45396f57b28021db715d7d4c0390b61c935405f2dcc8d->enter($__internal_59229348c2d480e897d45396f57b28021db715d7d4c0390b61c935405f2dcc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3ef2c6c4b0cc8229d747a3a10fb07914c929059e31abbebc04f805755bf67e0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ef2c6c4b0cc8229d747a3a10fb07914c929059e31abbebc04f805755bf67e0d->enter($__internal_3ef2c6c4b0cc8229d747a3a10fb07914c929059e31abbebc04f805755bf67e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3ef2c6c4b0cc8229d747a3a10fb07914c929059e31abbebc04f805755bf67e0d->leave($__internal_3ef2c6c4b0cc8229d747a3a10fb07914c929059e31abbebc04f805755bf67e0d_prof);

        
        $__internal_59229348c2d480e897d45396f57b28021db715d7d4c0390b61c935405f2dcc8d->leave($__internal_59229348c2d480e897d45396f57b28021db715d7d4c0390b61c935405f2dcc8d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_95278dd1d3223235eacf2f15f64fba714dc7e3abdf117bb37950d36f1bfd6477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95278dd1d3223235eacf2f15f64fba714dc7e3abdf117bb37950d36f1bfd6477->enter($__internal_95278dd1d3223235eacf2f15f64fba714dc7e3abdf117bb37950d36f1bfd6477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e42c163943c81584cd371831bc8d6f5046ea48cde63afce1a431fbc97684f8e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e42c163943c81584cd371831bc8d6f5046ea48cde63afce1a431fbc97684f8e4->enter($__internal_e42c163943c81584cd371831bc8d6f5046ea48cde63afce1a431fbc97684f8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_e42c163943c81584cd371831bc8d6f5046ea48cde63afce1a431fbc97684f8e4->leave($__internal_e42c163943c81584cd371831bc8d6f5046ea48cde63afce1a431fbc97684f8e4_prof);

        
        $__internal_95278dd1d3223235eacf2f15f64fba714dc7e3abdf117bb37950d36f1bfd6477->leave($__internal_95278dd1d3223235eacf2f15f64fba714dc7e3abdf117bb37950d36f1bfd6477_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\Pedidos\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
