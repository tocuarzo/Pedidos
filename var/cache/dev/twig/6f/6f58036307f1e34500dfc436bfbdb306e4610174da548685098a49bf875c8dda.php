<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_fa01ecfb346df5882f149e6c744dde5c905f6b02a41be9a22b45af4921d6668b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb837563634d1193ec20f6bc4f3664203cae9357f618a93069737c9354a20b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb837563634d1193ec20f6bc4f3664203cae9357f618a93069737c9354a20b5c->enter($__internal_fb837563634d1193ec20f6bc4f3664203cae9357f618a93069737c9354a20b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_084c9bdbd13141f01409b79d27e36d7f0990af0b19c11ba342459cfc7825d53a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_084c9bdbd13141f01409b79d27e36d7f0990af0b19c11ba342459cfc7825d53a->enter($__internal_084c9bdbd13141f01409b79d27e36d7f0990af0b19c11ba342459cfc7825d53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb837563634d1193ec20f6bc4f3664203cae9357f618a93069737c9354a20b5c->leave($__internal_fb837563634d1193ec20f6bc4f3664203cae9357f618a93069737c9354a20b5c_prof);

        
        $__internal_084c9bdbd13141f01409b79d27e36d7f0990af0b19c11ba342459cfc7825d53a->leave($__internal_084c9bdbd13141f01409b79d27e36d7f0990af0b19c11ba342459cfc7825d53a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_46bdc78db99a457706f2df950d0cde3973b53dcb704386c90786cc2ab05e7cb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46bdc78db99a457706f2df950d0cde3973b53dcb704386c90786cc2ab05e7cb6->enter($__internal_46bdc78db99a457706f2df950d0cde3973b53dcb704386c90786cc2ab05e7cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f3d3a5a63a65272709e636051753679e448746dd3f24448c164c739e85b5cf73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3d3a5a63a65272709e636051753679e448746dd3f24448c164c739e85b5cf73->enter($__internal_f3d3a5a63a65272709e636051753679e448746dd3f24448c164c739e85b5cf73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_f3d3a5a63a65272709e636051753679e448746dd3f24448c164c739e85b5cf73->leave($__internal_f3d3a5a63a65272709e636051753679e448746dd3f24448c164c739e85b5cf73_prof);

        
        $__internal_46bdc78db99a457706f2df950d0cde3973b53dcb704386c90786cc2ab05e7cb6->leave($__internal_46bdc78db99a457706f2df950d0cde3973b53dcb704386c90786cc2ab05e7cb6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\Pedidos\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
