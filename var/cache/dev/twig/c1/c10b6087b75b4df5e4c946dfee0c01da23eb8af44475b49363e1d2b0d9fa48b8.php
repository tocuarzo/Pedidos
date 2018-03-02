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
        $__internal_b9688222befb29a2dffd4477d4d3a610d4ddaade5976b853dc799c47c5b1d663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9688222befb29a2dffd4477d4d3a610d4ddaade5976b853dc799c47c5b1d663->enter($__internal_b9688222befb29a2dffd4477d4d3a610d4ddaade5976b853dc799c47c5b1d663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_fad219516cc982796d3f65a239b3a54322015b399a0e96f1ee32e48845edc185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fad219516cc982796d3f65a239b3a54322015b399a0e96f1ee32e48845edc185->enter($__internal_fad219516cc982796d3f65a239b3a54322015b399a0e96f1ee32e48845edc185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9688222befb29a2dffd4477d4d3a610d4ddaade5976b853dc799c47c5b1d663->leave($__internal_b9688222befb29a2dffd4477d4d3a610d4ddaade5976b853dc799c47c5b1d663_prof);

        
        $__internal_fad219516cc982796d3f65a239b3a54322015b399a0e96f1ee32e48845edc185->leave($__internal_fad219516cc982796d3f65a239b3a54322015b399a0e96f1ee32e48845edc185_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_11e233dcb5264a74e0bfa59695f1df79af02bca58a5c388cc9036c96aa5047a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11e233dcb5264a74e0bfa59695f1df79af02bca58a5c388cc9036c96aa5047a9->enter($__internal_11e233dcb5264a74e0bfa59695f1df79af02bca58a5c388cc9036c96aa5047a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b777b0898fe3fb3e7b62d049dddaf52f860f48496d88ece3910957e0d87bcd49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b777b0898fe3fb3e7b62d049dddaf52f860f48496d88ece3910957e0d87bcd49->enter($__internal_b777b0898fe3fb3e7b62d049dddaf52f860f48496d88ece3910957e0d87bcd49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b777b0898fe3fb3e7b62d049dddaf52f860f48496d88ece3910957e0d87bcd49->leave($__internal_b777b0898fe3fb3e7b62d049dddaf52f860f48496d88ece3910957e0d87bcd49_prof);

        
        $__internal_11e233dcb5264a74e0bfa59695f1df79af02bca58a5c388cc9036c96aa5047a9->leave($__internal_11e233dcb5264a74e0bfa59695f1df79af02bca58a5c388cc9036c96aa5047a9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_df65290b550cb17dda246c41aa5987c6950bbe59c2aa4ccf010f6a6a42d0fbae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df65290b550cb17dda246c41aa5987c6950bbe59c2aa4ccf010f6a6a42d0fbae->enter($__internal_df65290b550cb17dda246c41aa5987c6950bbe59c2aa4ccf010f6a6a42d0fbae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_79c6e67d13c551e93eaaa5a0c9c2e335e6c4f2c15a68ddc94c3a14a256981434 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79c6e67d13c551e93eaaa5a0c9c2e335e6c4f2c15a68ddc94c3a14a256981434->enter($__internal_79c6e67d13c551e93eaaa5a0c9c2e335e6c4f2c15a68ddc94c3a14a256981434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_79c6e67d13c551e93eaaa5a0c9c2e335e6c4f2c15a68ddc94c3a14a256981434->leave($__internal_79c6e67d13c551e93eaaa5a0c9c2e335e6c4f2c15a68ddc94c3a14a256981434_prof);

        
        $__internal_df65290b550cb17dda246c41aa5987c6950bbe59c2aa4ccf010f6a6a42d0fbae->leave($__internal_df65290b550cb17dda246c41aa5987c6950bbe59c2aa4ccf010f6a6a42d0fbae_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1410e877fd2d65485083eeaaf323357d5f002a0f0306006c40b478a11a64f767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1410e877fd2d65485083eeaaf323357d5f002a0f0306006c40b478a11a64f767->enter($__internal_1410e877fd2d65485083eeaaf323357d5f002a0f0306006c40b478a11a64f767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2bc2054049d04810e7e2cc3143fe14e3e7376c76b2a3780ae51b64db09208708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bc2054049d04810e7e2cc3143fe14e3e7376c76b2a3780ae51b64db09208708->enter($__internal_2bc2054049d04810e7e2cc3143fe14e3e7376c76b2a3780ae51b64db09208708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2bc2054049d04810e7e2cc3143fe14e3e7376c76b2a3780ae51b64db09208708->leave($__internal_2bc2054049d04810e7e2cc3143fe14e3e7376c76b2a3780ae51b64db09208708_prof);

        
        $__internal_1410e877fd2d65485083eeaaf323357d5f002a0f0306006c40b478a11a64f767->leave($__internal_1410e877fd2d65485083eeaaf323357d5f002a0f0306006c40b478a11a64f767_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "D:\\Pedidos\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
