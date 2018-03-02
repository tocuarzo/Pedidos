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
        $__internal_7d49d7175ee0d27cef56ba4dcfa9a4e7c8c1c3850d1dc6adc2ba61f9eb4f70f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d49d7175ee0d27cef56ba4dcfa9a4e7c8c1c3850d1dc6adc2ba61f9eb4f70f6->enter($__internal_7d49d7175ee0d27cef56ba4dcfa9a4e7c8c1c3850d1dc6adc2ba61f9eb4f70f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_598aee28a93ba3a759d2415a7fcb59d8087c94d734ba4cfb73ec2eecba0d245d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_598aee28a93ba3a759d2415a7fcb59d8087c94d734ba4cfb73ec2eecba0d245d->enter($__internal_598aee28a93ba3a759d2415a7fcb59d8087c94d734ba4cfb73ec2eecba0d245d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d49d7175ee0d27cef56ba4dcfa9a4e7c8c1c3850d1dc6adc2ba61f9eb4f70f6->leave($__internal_7d49d7175ee0d27cef56ba4dcfa9a4e7c8c1c3850d1dc6adc2ba61f9eb4f70f6_prof);

        
        $__internal_598aee28a93ba3a759d2415a7fcb59d8087c94d734ba4cfb73ec2eecba0d245d->leave($__internal_598aee28a93ba3a759d2415a7fcb59d8087c94d734ba4cfb73ec2eecba0d245d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cb83a89897903909f4de5f9d1f66ae7e0fe21b8bd525e26a8ad18edf5ebb20b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb83a89897903909f4de5f9d1f66ae7e0fe21b8bd525e26a8ad18edf5ebb20b3->enter($__internal_cb83a89897903909f4de5f9d1f66ae7e0fe21b8bd525e26a8ad18edf5ebb20b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cbab8dcde51562fd16f2262575bbb93ac228ebec3b38d52694a98ebec49dc32d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbab8dcde51562fd16f2262575bbb93ac228ebec3b38d52694a98ebec49dc32d->enter($__internal_cbab8dcde51562fd16f2262575bbb93ac228ebec3b38d52694a98ebec49dc32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_cbab8dcde51562fd16f2262575bbb93ac228ebec3b38d52694a98ebec49dc32d->leave($__internal_cbab8dcde51562fd16f2262575bbb93ac228ebec3b38d52694a98ebec49dc32d_prof);

        
        $__internal_cb83a89897903909f4de5f9d1f66ae7e0fe21b8bd525e26a8ad18edf5ebb20b3->leave($__internal_cb83a89897903909f4de5f9d1f66ae7e0fe21b8bd525e26a8ad18edf5ebb20b3_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "D:\\Pedidos\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
