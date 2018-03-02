<?php

/* @EasyAdmin/default/exception.html.twig */
class __TwigTemplate_29a74d3f680134873532b93ebb102c93987c31e298448260f084dcd57b5decca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_class' => array($this, 'block_body_class'),
            'page_title' => array($this, 'block_page_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(array(0 => ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "templates", array(), "any", false, true), "layout", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "templates", array(), "any", false, true), "layout", array()), "")) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.layout"), 2 => "@EasyAdmin/default/layout.html.twig"), "@EasyAdmin/default/exception.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4b51a3d95151bc0dce51a028f2316e39913194f65b9ff0edc82094c1e1fb071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4b51a3d95151bc0dce51a028f2316e39913194f65b9ff0edc82094c1e1fb071->enter($__internal_d4b51a3d95151bc0dce51a028f2316e39913194f65b9ff0edc82094c1e1fb071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/exception.html.twig"));

        $__internal_f80c7c2086107632d9ae65482107edd65740e87d565b3420c915151c9edade19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f80c7c2086107632d9ae65482107edd65740e87d565b3420c915151c9edade19->enter($__internal_f80c7c2086107632d9ae65482107edd65740e87d565b3420c915151c9edade19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/exception.html.twig"));

        // line 1
        $context["_entity_config"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method"))) : (""));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4b51a3d95151bc0dce51a028f2316e39913194f65b9ff0edc82094c1e1fb071->leave($__internal_d4b51a3d95151bc0dce51a028f2316e39913194f65b9ff0edc82094c1e1fb071_prof);

        
        $__internal_f80c7c2086107632d9ae65482107edd65740e87d565b3420c915151c9edade19->leave($__internal_f80c7c2086107632d9ae65482107edd65740e87d565b3420c915151c9edade19_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_5ae421b8bdb9e7552e53078f466017b39c45414f7b97b68fc9322821e3178e03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ae421b8bdb9e7552e53078f466017b39c45414f7b97b68fc9322821e3178e03->enter($__internal_5ae421b8bdb9e7552e53078f466017b39c45414f7b97b68fc9322821e3178e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_420d731d8f09c4f3ca5f64ca8cb936b9ce4b0ffa0390683ed0d49646d2d358a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_420d731d8f09c4f3ca5f64ca8cb936b9ce4b0ffa0390683ed0d49646d2d358a0->enter($__internal_420d731d8f09c4f3ca5f64ca8cb936b9ce4b0ffa0390683ed0d49646d2d358a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_420d731d8f09c4f3ca5f64ca8cb936b9ce4b0ffa0390683ed0d49646d2d358a0->leave($__internal_420d731d8f09c4f3ca5f64ca8cb936b9ce4b0ffa0390683ed0d49646d2d358a0_prof);

        
        $__internal_5ae421b8bdb9e7552e53078f466017b39c45414f7b97b68fc9322821e3178e03->leave($__internal_5ae421b8bdb9e7552e53078f466017b39c45414f7b97b68fc9322821e3178e03_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_3ab7b8b591d42bafd19f20232881fcaf530fc4376d78af4b3a02463d5eb99aa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ab7b8b591d42bafd19f20232881fcaf530fc4376d78af4b3a02463d5eb99aa0->enter($__internal_3ab7b8b591d42bafd19f20232881fcaf530fc4376d78af4b3a02463d5eb99aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_36a601882b61b7e97c31098043be29db398655e295b704f23a5c689368efa464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36a601882b61b7e97c31098043be29db398655e295b704f23a5c689368efa464->enter($__internal_36a601882b61b7e97c31098043be29db398655e295b704f23a5c689368efa464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", 1, array(), "EasyAdminBundle"), "html", null, true);
        
        $__internal_36a601882b61b7e97c31098043be29db398655e295b704f23a5c689368efa464->leave($__internal_36a601882b61b7e97c31098043be29db398655e295b704f23a5c689368efa464_prof);

        
        $__internal_3ab7b8b591d42bafd19f20232881fcaf530fc4376d78af4b3a02463d5eb99aa0->leave($__internal_3ab7b8b591d42bafd19f20232881fcaf530fc4376d78af4b3a02463d5eb99aa0_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_a245cc8c534d445e4affb3abe3216a58da30c68cf0037da93d97dcf02848c9bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a245cc8c534d445e4affb3abe3216a58da30c68cf0037da93d97dcf02848c9bb->enter($__internal_a245cc8c534d445e4affb3abe3216a58da30c68cf0037da93d97dcf02848c9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2e9ae80c3cc47d8965cd6ca307a1b02f3354065e96e914453b020415d2c4141d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e9ae80c3cc47d8965cd6ca307a1b02f3354065e96e914453b020415d2c4141d->enter($__internal_2e9ae80c3cc47d8965cd6ca307a1b02f3354065e96e914453b020415d2c4141d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 14
        $this->displayBlock("page_title", $context, $blocks);
        echo "</h1>

            <div class=\"error-message\">
                ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 17, $this->getSourceContext()); })()), "publicMessage", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 17, $this->getSourceContext()); })()), "translationParameters", array()), "EasyAdminBundle"), "html", null, true);
        echo "
            </div>
        </div>
    </section>
";
        
        $__internal_2e9ae80c3cc47d8965cd6ca307a1b02f3354065e96e914453b020415d2c4141d->leave($__internal_2e9ae80c3cc47d8965cd6ca307a1b02f3354065e96e914453b020415d2c4141d_prof);

        
        $__internal_a245cc8c534d445e4affb3abe3216a58da30c68cf0037da93d97dcf02848c9bb->leave($__internal_a245cc8c534d445e4affb3abe3216a58da30c68cf0037da93d97dcf02848c9bb_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 17,  93 => 14,  89 => 12,  80 => 11,  62 => 9,  44 => 8,  34 => 3,  32 => 1,  20 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = app.request.query.get('entity') ? easyadmin_entity(app.request.query.get('entity')) %}
{% extends [
    _entity_config.templates.layout|default(''),
    easyadmin_config('design.templates.layout'),
    '@EasyAdmin/default/layout.html.twig'
] %}

{% block body_class 'error' %}
{% block page_title %}{{ 'errors'|transchoice(1, {}, 'EasyAdminBundle') }}{% endblock %}

{% block content %}
    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1><i class=\"fa fa-exclamation-circle\"></i> {{ block('page_title') }}</h1>

            <div class=\"error-message\">
                {{ exception.publicMessage|trans(exception.translationParameters, 'EasyAdminBundle') }}
            </div>
        </div>
    </section>
{% endblock %}
", "@EasyAdmin/default/exception.html.twig", "C:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\exception.html.twig");
    }
}
