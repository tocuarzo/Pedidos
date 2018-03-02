<?php

/* @EasyAdmin/default/new.html.twig */
class __TwigTemplate_8bc90ecf967bf5e60c68b561f7ead7fff77b16e61587e0b2ee0953b42bee236e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 7, $this->getSourceContext()); })()), "templates", array()), "layout", array()), "@EasyAdmin/default/new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8e03acec1da443e69d70c0e9c9ebbf924a43f925e25fce74bb5201697ea65ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8e03acec1da443e69d70c0e9c9ebbf924a43f925e25fce74bb5201697ea65ad->enter($__internal_c8e03acec1da443e69d70c0e9c9ebbf924a43f925e25fce74bb5201697ea65ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        $__internal_1505c86547ce3e972b45cab36c298c58c4d0a3744cd5e680f27fe5cd13604050 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1505c86547ce3e972b45cab36c298c58c4d0a3744cd5e680f27fe5cd13604050->enter($__internal_1505c86547ce3e972b45cab36c298c58c4d0a3744cd5e680f27fe5cd13604050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"), true);
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_791146adf45cfb3b2a4ef5422a04c4eff50d7a1f547c6030d48cf9cb35cdec5a"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 4, $this->getSourceContext()); })()), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "name", array()), array(),         // line 4
(isset($context["__internal_791146adf45cfb3b2a4ef5422a04c4eff50d7a1f547c6030d48cf9cb35cdec5a"]) || array_key_exists("__internal_791146adf45cfb3b2a4ef5422a04c4eff50d7a1f547c6030d48cf9cb35cdec5a", $context) ? $context["__internal_791146adf45cfb3b2a4ef5422a04c4eff50d7a1f547c6030d48cf9cb35cdec5a"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_791146adf45cfb3b2a4ef5422a04c4eff50d7a1f547c6030d48cf9cb35cdec5a" does not exist.', 4, $this->getSourceContext()); })())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(),         // line 5
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "label", array()), array(),         // line 4
(isset($context["__internal_791146adf45cfb3b2a4ef5422a04c4eff50d7a1f547c6030d48cf9cb35cdec5a"]) || array_key_exists("__internal_791146adf45cfb3b2a4ef5422a04c4eff50d7a1f547c6030d48cf9cb35cdec5a", $context) ? $context["__internal_791146adf45cfb3b2a4ef5422a04c4eff50d7a1f547c6030d48cf9cb35cdec5a"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_791146adf45cfb3b2a4ef5422a04c4eff50d7a1f547c6030d48cf9cb35cdec5a" does not exist.', 4, $this->getSourceContext()); })())));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8e03acec1da443e69d70c0e9c9ebbf924a43f925e25fce74bb5201697ea65ad->leave($__internal_c8e03acec1da443e69d70c0e9c9ebbf924a43f925e25fce74bb5201697ea65ad_prof);

        
        $__internal_1505c86547ce3e972b45cab36c298c58c4d0a3744cd5e680f27fe5cd13604050->leave($__internal_1505c86547ce3e972b45cab36c298c58c4d0a3744cd5e680f27fe5cd13604050_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_ed4b84f26d2ffe396a5241127ec3c580acbfe19bbf45980036df023ccd55b9b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed4b84f26d2ffe396a5241127ec3c580acbfe19bbf45980036df023ccd55b9b1->enter($__internal_ed4b84f26d2ffe396a5241127ec3c580acbfe19bbf45980036df023ccd55b9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_7c8a2bcc7c3b29938dac49c299d4e3a9c394ea4d2ae606673a1877b4811ee99d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c8a2bcc7c3b29938dac49c299d4e3a9c394ea4d2ae606673a1877b4811ee99d->enter($__internal_7c8a2bcc7c3b29938dac49c299d4e3a9c394ea4d2ae606673a1877b4811ee99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 9, $this->getSourceContext()); })()), "name", array())), "html", null, true);
        
        $__internal_7c8a2bcc7c3b29938dac49c299d4e3a9c394ea4d2ae606673a1877b4811ee99d->leave($__internal_7c8a2bcc7c3b29938dac49c299d4e3a9c394ea4d2ae606673a1877b4811ee99d_prof);

        
        $__internal_ed4b84f26d2ffe396a5241127ec3c580acbfe19bbf45980036df023ccd55b9b1->leave($__internal_ed4b84f26d2ffe396a5241127ec3c580acbfe19bbf45980036df023ccd55b9b1_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_0eb8fd380cc9c98e05e2019e864594662a6ed7c5542127418b5473c3c71dde20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eb8fd380cc9c98e05e2019e864594662a6ed7c5542127418b5473c3c71dde20->enter($__internal_0eb8fd380cc9c98e05e2019e864594662a6ed7c5542127418b5473c3c71dde20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_68cfd535f6aa1e2c9d0ac190ac0947b27a8dc0e3b8a590e9157c7277c9118705 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68cfd535f6aa1e2c9d0ac190ac0947b27a8dc0e3b8a590e9157c7277c9118705->enter($__internal_68cfd535f6aa1e2c9d0ac190ac0947b27a8dc0e3b8a590e9157c7277c9118705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 10, $this->getSourceContext()); })()), "name", array()))), "html", null, true);
        
        $__internal_68cfd535f6aa1e2c9d0ac190ac0947b27a8dc0e3b8a590e9157c7277c9118705->leave($__internal_68cfd535f6aa1e2c9d0ac190ac0947b27a8dc0e3b8a590e9157c7277c9118705_prof);

        
        $__internal_0eb8fd380cc9c98e05e2019e864594662a6ed7c5542127418b5473c3c71dde20->leave($__internal_0eb8fd380cc9c98e05e2019e864594662a6ed7c5542127418b5473c3c71dde20_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_0ee23e0272fe97e1d1a3f3b3971db599beca1c408b3d5cba62f263dfa855e35d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ee23e0272fe97e1d1a3f3b3971db599beca1c408b3d5cba62f263dfa855e35d->enter($__internal_0ee23e0272fe97e1d1a3f3b3971db599beca1c408b3d5cba62f263dfa855e35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_00f1ef16f8b990f85094fd3384204f6e74cf6bfbb891144b836d663b82c58539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00f1ef16f8b990f85094fd3384204f6e74cf6bfbb891144b836d663b82c58539->enter($__internal_00f1ef16f8b990f85094fd3384204f6e74cf6bfbb891144b836d663b82c58539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 14, $this->getSourceContext()); })()), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 15, $this->getSourceContext()); })()), "new", array()), "title", array()), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 15, $this->getSourceContext()); })()),         // line 4
(isset($context["__internal_791146adf45cfb3b2a4ef5422a04c4eff50d7a1f547c6030d48cf9cb35cdec5a"]) || array_key_exists("__internal_791146adf45cfb3b2a4ef5422a04c4eff50d7a1f547c6030d48cf9cb35cdec5a", $context) ? $context["__internal_791146adf45cfb3b2a4ef5422a04c4eff50d7a1f547c6030d48cf9cb35cdec5a"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_791146adf45cfb3b2a4ef5422a04c4eff50d7a1f547c6030d48cf9cb35cdec5a" does not exist.', 4, $this->getSourceContext()); })()))) : (        // line 15
(isset($context["_default_title"]) || array_key_exists("_default_title", $context) ? $context["_default_title"] : (function () { throw new Twig_Error_Runtime('Variable "_default_title" does not exist.', 15, $this->getSourceContext()); })()))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_00f1ef16f8b990f85094fd3384204f6e74cf6bfbb891144b836d663b82c58539->leave($__internal_00f1ef16f8b990f85094fd3384204f6e74cf6bfbb891144b836d663b82c58539_prof);

        
        $__internal_0ee23e0272fe97e1d1a3f3b3971db599beca1c408b3d5cba62f263dfa855e35d->leave($__internal_0ee23e0272fe97e1d1a3f3b3971db599beca1c408b3d5cba62f263dfa855e35d_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_fc047a64f3042bc8cb7dc20076d5cb61614e3285a224942f59e81ee21b4c82b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc047a64f3042bc8cb7dc20076d5cb61614e3285a224942f59e81ee21b4c82b2->enter($__internal_fc047a64f3042bc8cb7dc20076d5cb61614e3285a224942f59e81ee21b4c82b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_4cc1bc30ac315a9567df27e1f1198bfc1d9fc2dcd5c994249a62bc87d1f34981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cc1bc30ac315a9567df27e1f1198bfc1d9fc2dcd5c994249a62bc87d1f34981->enter($__internal_4cc1bc30ac315a9567df27e1f1198bfc1d9fc2dcd5c994249a62bc87d1f34981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_4cc1bc30ac315a9567df27e1f1198bfc1d9fc2dcd5c994249a62bc87d1f34981->leave($__internal_4cc1bc30ac315a9567df27e1f1198bfc1d9fc2dcd5c994249a62bc87d1f34981_prof);

        
        $__internal_fc047a64f3042bc8cb7dc20076d5cb61614e3285a224942f59e81ee21b4c82b2->leave($__internal_fc047a64f3042bc8cb7dc20076d5cb61614e3285a224942f59e81ee21b4c82b2_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_b0cb88a0a21bd1e4b9cbb079c5d681c49a18ab95a9b964758d3f95e049c09506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0cb88a0a21bd1e4b9cbb079c5d681c49a18ab95a9b964758d3f95e049c09506->enter($__internal_b0cb88a0a21bd1e4b9cbb079c5d681c49a18ab95a9b964758d3f95e049c09506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_f8250c9ac678f81bc17f7851e8a0bbaed1ab16243c9b4bd6498939421f0bdb60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8250c9ac678f81bc17f7851e8a0bbaed1ab16243c9b4bd6498939421f0bdb60->enter($__internal_f8250c9ac678f81bc17f7851e8a0bbaed1ab16243c9b4bd6498939421f0bdb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), 'form');
        echo "
    ";
        
        $__internal_f8250c9ac678f81bc17f7851e8a0bbaed1ab16243c9b4bd6498939421f0bdb60->leave($__internal_f8250c9ac678f81bc17f7851e8a0bbaed1ab16243c9b4bd6498939421f0bdb60_prof);

        
        $__internal_b0cb88a0a21bd1e4b9cbb079c5d681c49a18ab95a9b964758d3f95e049c09506->leave($__internal_b0cb88a0a21bd1e4b9cbb079c5d681c49a18ab95a9b964758d3f95e049c09506_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_c5f0229195e9cba70d18896606a543b6f6b302e98a8559e1b831f4797d83f254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f0229195e9cba70d18896606a543b6f6b302e98a8559e1b831f4797d83f254->enter($__internal_c5f0229195e9cba70d18896606a543b6f6b302e98a8559e1b831f4797d83f254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_d9d55a8beda1b898d23e63f54460be7b179f2ae15f565d782d325cfd90f0c484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9d55a8beda1b898d23e63f54460be7b179f2ae15f565d782d325cfd90f0c484->enter($__internal_d9d55a8beda1b898d23e63f54460be7b179f2ae15f565d782d325cfd90f0c484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 26
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    ";
        // line 36
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_d9d55a8beda1b898d23e63f54460be7b179f2ae15f565d782d325cfd90f0c484->leave($__internal_d9d55a8beda1b898d23e63f54460be7b179f2ae15f565d782d325cfd90f0c484_prof);

        
        $__internal_c5f0229195e9cba70d18896606a543b6f6b302e98a8559e1b831f4797d83f254->leave($__internal_c5f0229195e9cba70d18896606a543b6f6b302e98a8559e1b831f4797d83f254_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 36,  180 => 30,  172 => 26,  163 => 25,  150 => 21,  131 => 20,  122 => 19,  109 => 15,  108 => 4,  106 => 15,  103 => 14,  101 => 13,  92 => 12,  74 => 10,  56 => 9,  46 => 7,  44 => 4,  43 => 5,  42 => 4,  41 => 5,  39 => 4,  37 => 3,  35 => 1,  23 => 7,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form with easyadmin_config('design.form_theme') %}

{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-new-' ~ _entity_config.name %}
{% block body_class 'new new-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'new.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.new.title is defined ? _entity_config.new.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "@EasyAdmin/default/new.html.twig", "D:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\new.html.twig");
    }
}
