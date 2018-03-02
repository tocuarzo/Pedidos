<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_aa6b32bfe4d4b8203ff8299fe8c5e945dcf93abd586284600b979b4070751c0f extends Twig_Template
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
        $__internal_dd56034de37e98ad11357ba5ad7a212c577cffeca73d25e9e076901164f88bdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd56034de37e98ad11357ba5ad7a212c577cffeca73d25e9e076901164f88bdb->enter($__internal_dd56034de37e98ad11357ba5ad7a212c577cffeca73d25e9e076901164f88bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6bd4516c20e131e071314dcba2e097dbc93637f7c15b6f3973e23e10b3f1212a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bd4516c20e131e071314dcba2e097dbc93637f7c15b6f3973e23e10b3f1212a->enter($__internal_6bd4516c20e131e071314dcba2e097dbc93637f7c15b6f3973e23e10b3f1212a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd56034de37e98ad11357ba5ad7a212c577cffeca73d25e9e076901164f88bdb->leave($__internal_dd56034de37e98ad11357ba5ad7a212c577cffeca73d25e9e076901164f88bdb_prof);

        
        $__internal_6bd4516c20e131e071314dcba2e097dbc93637f7c15b6f3973e23e10b3f1212a->leave($__internal_6bd4516c20e131e071314dcba2e097dbc93637f7c15b6f3973e23e10b3f1212a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4e222c33cddf39ea79b48011e7cc926d79a5d0f33d9c8dfe3ba88d58dd28056d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e222c33cddf39ea79b48011e7cc926d79a5d0f33d9c8dfe3ba88d58dd28056d->enter($__internal_4e222c33cddf39ea79b48011e7cc926d79a5d0f33d9c8dfe3ba88d58dd28056d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7be5e690f2ace71475b2d3ea0d38c54ac99fc29e98b0629ff4f1c8a861c4b757 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7be5e690f2ace71475b2d3ea0d38c54ac99fc29e98b0629ff4f1c8a861c4b757->enter($__internal_7be5e690f2ace71475b2d3ea0d38c54ac99fc29e98b0629ff4f1c8a861c4b757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7be5e690f2ace71475b2d3ea0d38c54ac99fc29e98b0629ff4f1c8a861c4b757->leave($__internal_7be5e690f2ace71475b2d3ea0d38c54ac99fc29e98b0629ff4f1c8a861c4b757_prof);

        
        $__internal_4e222c33cddf39ea79b48011e7cc926d79a5d0f33d9c8dfe3ba88d58dd28056d->leave($__internal_4e222c33cddf39ea79b48011e7cc926d79a5d0f33d9c8dfe3ba88d58dd28056d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_04f22dd5d4dae7a396aba04c6fade439c1a0f36066051b62734d238b712b72a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f22dd5d4dae7a396aba04c6fade439c1a0f36066051b62734d238b712b72a9->enter($__internal_04f22dd5d4dae7a396aba04c6fade439c1a0f36066051b62734d238b712b72a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0fa3a7cb030d9adf05bdf8e646e82b8204bf5c9e6a234cedbdf5fcfccb8fbf45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fa3a7cb030d9adf05bdf8e646e82b8204bf5c9e6a234cedbdf5fcfccb8fbf45->enter($__internal_0fa3a7cb030d9adf05bdf8e646e82b8204bf5c9e6a234cedbdf5fcfccb8fbf45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_0fa3a7cb030d9adf05bdf8e646e82b8204bf5c9e6a234cedbdf5fcfccb8fbf45->leave($__internal_0fa3a7cb030d9adf05bdf8e646e82b8204bf5c9e6a234cedbdf5fcfccb8fbf45_prof);

        
        $__internal_04f22dd5d4dae7a396aba04c6fade439c1a0f36066051b62734d238b712b72a9->leave($__internal_04f22dd5d4dae7a396aba04c6fade439c1a0f36066051b62734d238b712b72a9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eb59dd0beca0ad9d5ab3970fb5a2d5611505cfa9e716a553f7c2b2de80aed520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb59dd0beca0ad9d5ab3970fb5a2d5611505cfa9e716a553f7c2b2de80aed520->enter($__internal_eb59dd0beca0ad9d5ab3970fb5a2d5611505cfa9e716a553f7c2b2de80aed520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_389506ef0c5ac1d1bed9099add93d3f45d2a83c298c619f40e1d5a4b8899c680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_389506ef0c5ac1d1bed9099add93d3f45d2a83c298c619f40e1d5a4b8899c680->enter($__internal_389506ef0c5ac1d1bed9099add93d3f45d2a83c298c619f40e1d5a4b8899c680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_389506ef0c5ac1d1bed9099add93d3f45d2a83c298c619f40e1d5a4b8899c680->leave($__internal_389506ef0c5ac1d1bed9099add93d3f45d2a83c298c619f40e1d5a4b8899c680_prof);

        
        $__internal_eb59dd0beca0ad9d5ab3970fb5a2d5611505cfa9e716a553f7c2b2de80aed520->leave($__internal_eb59dd0beca0ad9d5ab3970fb5a2d5611505cfa9e716a553f7c2b2de80aed520_prof);

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
