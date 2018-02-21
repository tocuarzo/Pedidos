<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_cd5987191432ff1880a049217943d9ce2d09511ebcf66bab25a3f4e920d53541 extends Twig_Template
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
        $__internal_77ea6ec740135f13bed136e6f039add7798eb5668ea18dee255c2c78ebd7cfbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77ea6ec740135f13bed136e6f039add7798eb5668ea18dee255c2c78ebd7cfbb->enter($__internal_77ea6ec740135f13bed136e6f039add7798eb5668ea18dee255c2c78ebd7cfbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_4565d3b39593526f2dbcfddab1e6b609a94030e229299a6973978cc694bebf86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4565d3b39593526f2dbcfddab1e6b609a94030e229299a6973978cc694bebf86->enter($__internal_4565d3b39593526f2dbcfddab1e6b609a94030e229299a6973978cc694bebf86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77ea6ec740135f13bed136e6f039add7798eb5668ea18dee255c2c78ebd7cfbb->leave($__internal_77ea6ec740135f13bed136e6f039add7798eb5668ea18dee255c2c78ebd7cfbb_prof);

        
        $__internal_4565d3b39593526f2dbcfddab1e6b609a94030e229299a6973978cc694bebf86->leave($__internal_4565d3b39593526f2dbcfddab1e6b609a94030e229299a6973978cc694bebf86_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f3e28b590a9c2fdd7defd0417d8796a7515e04f939bf01e38c54a54e54bd2ce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e28b590a9c2fdd7defd0417d8796a7515e04f939bf01e38c54a54e54bd2ce3->enter($__internal_f3e28b590a9c2fdd7defd0417d8796a7515e04f939bf01e38c54a54e54bd2ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_110073f03347103d4029e36f8c7776c37e695a672ddaaef5a8a70c0662c896ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_110073f03347103d4029e36f8c7776c37e695a672ddaaef5a8a70c0662c896ac->enter($__internal_110073f03347103d4029e36f8c7776c37e695a672ddaaef5a8a70c0662c896ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_110073f03347103d4029e36f8c7776c37e695a672ddaaef5a8a70c0662c896ac->leave($__internal_110073f03347103d4029e36f8c7776c37e695a672ddaaef5a8a70c0662c896ac_prof);

        
        $__internal_f3e28b590a9c2fdd7defd0417d8796a7515e04f939bf01e38c54a54e54bd2ce3->leave($__internal_f3e28b590a9c2fdd7defd0417d8796a7515e04f939bf01e38c54a54e54bd2ce3_prof);

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
