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
        $__internal_a1faf3d1ccf5d83569087f534a12515a05f5e06da82c6641ac59bdc22460314d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1faf3d1ccf5d83569087f534a12515a05f5e06da82c6641ac59bdc22460314d->enter($__internal_a1faf3d1ccf5d83569087f534a12515a05f5e06da82c6641ac59bdc22460314d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        $__internal_f62f22168b42af6c39bda99b5a9b590927647577d52cb1dad5d8e6df5e779a60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f62f22168b42af6c39bda99b5a9b590927647577d52cb1dad5d8e6df5e779a60->enter($__internal_f62f22168b42af6c39bda99b5a9b590927647577d52cb1dad5d8e6df5e779a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"), true);
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_4c21fffa270e0ac24bcb080d67877d784267e05fd7626afa787ad84625ec9d71"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 4, $this->getSourceContext()); })()), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "name", array()), array(),         // line 4
(isset($context["__internal_4c21fffa270e0ac24bcb080d67877d784267e05fd7626afa787ad84625ec9d71"]) || array_key_exists("__internal_4c21fffa270e0ac24bcb080d67877d784267e05fd7626afa787ad84625ec9d71", $context) ? $context["__internal_4c21fffa270e0ac24bcb080d67877d784267e05fd7626afa787ad84625ec9d71"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_4c21fffa270e0ac24bcb080d67877d784267e05fd7626afa787ad84625ec9d71" does not exist.', 4, $this->getSourceContext()); })())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(),         // line 5
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "label", array()), array(),         // line 4
(isset($context["__internal_4c21fffa270e0ac24bcb080d67877d784267e05fd7626afa787ad84625ec9d71"]) || array_key_exists("__internal_4c21fffa270e0ac24bcb080d67877d784267e05fd7626afa787ad84625ec9d71", $context) ? $context["__internal_4c21fffa270e0ac24bcb080d67877d784267e05fd7626afa787ad84625ec9d71"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_4c21fffa270e0ac24bcb080d67877d784267e05fd7626afa787ad84625ec9d71" does not exist.', 4, $this->getSourceContext()); })())));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1faf3d1ccf5d83569087f534a12515a05f5e06da82c6641ac59bdc22460314d->leave($__internal_a1faf3d1ccf5d83569087f534a12515a05f5e06da82c6641ac59bdc22460314d_prof);

        
        $__internal_f62f22168b42af6c39bda99b5a9b590927647577d52cb1dad5d8e6df5e779a60->leave($__internal_f62f22168b42af6c39bda99b5a9b590927647577d52cb1dad5d8e6df5e779a60_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_1c6575da0926286e8c5e3c2db176bf2e3019f2443e061eda76cd61b05b446306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6575da0926286e8c5e3c2db176bf2e3019f2443e061eda76cd61b05b446306->enter($__internal_1c6575da0926286e8c5e3c2db176bf2e3019f2443e061eda76cd61b05b446306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_8509463d449f3ecc2bf48f11bc87d570531906c3e47e19cfb850c50fe1f66b00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8509463d449f3ecc2bf48f11bc87d570531906c3e47e19cfb850c50fe1f66b00->enter($__internal_8509463d449f3ecc2bf48f11bc87d570531906c3e47e19cfb850c50fe1f66b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 9, $this->getSourceContext()); })()), "name", array())), "html", null, true);
        
        $__internal_8509463d449f3ecc2bf48f11bc87d570531906c3e47e19cfb850c50fe1f66b00->leave($__internal_8509463d449f3ecc2bf48f11bc87d570531906c3e47e19cfb850c50fe1f66b00_prof);

        
        $__internal_1c6575da0926286e8c5e3c2db176bf2e3019f2443e061eda76cd61b05b446306->leave($__internal_1c6575da0926286e8c5e3c2db176bf2e3019f2443e061eda76cd61b05b446306_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_09ac1f214493c63ac508be5634797bc109fe2927ddccb0cc7bcff13d0b1bb2d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09ac1f214493c63ac508be5634797bc109fe2927ddccb0cc7bcff13d0b1bb2d2->enter($__internal_09ac1f214493c63ac508be5634797bc109fe2927ddccb0cc7bcff13d0b1bb2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_ac55fe34b0312b3bf97caee0e795adc978c81586f82d3a951787f7148d9c4e00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac55fe34b0312b3bf97caee0e795adc978c81586f82d3a951787f7148d9c4e00->enter($__internal_ac55fe34b0312b3bf97caee0e795adc978c81586f82d3a951787f7148d9c4e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 10, $this->getSourceContext()); })()), "name", array()))), "html", null, true);
        
        $__internal_ac55fe34b0312b3bf97caee0e795adc978c81586f82d3a951787f7148d9c4e00->leave($__internal_ac55fe34b0312b3bf97caee0e795adc978c81586f82d3a951787f7148d9c4e00_prof);

        
        $__internal_09ac1f214493c63ac508be5634797bc109fe2927ddccb0cc7bcff13d0b1bb2d2->leave($__internal_09ac1f214493c63ac508be5634797bc109fe2927ddccb0cc7bcff13d0b1bb2d2_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_4fe7b5492e314e6972dd02de580bcfb6c1fa014b4c4bdcc6d39e668c1d2968a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fe7b5492e314e6972dd02de580bcfb6c1fa014b4c4bdcc6d39e668c1d2968a1->enter($__internal_4fe7b5492e314e6972dd02de580bcfb6c1fa014b4c4bdcc6d39e668c1d2968a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_632c94714b31048dace84803c3460fc44f38520a7bd770a2612276e589ec2a20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_632c94714b31048dace84803c3460fc44f38520a7bd770a2612276e589ec2a20->enter($__internal_632c94714b31048dace84803c3460fc44f38520a7bd770a2612276e589ec2a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 14, $this->getSourceContext()); })()), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 15, $this->getSourceContext()); })()), "new", array()), "title", array()), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 15, $this->getSourceContext()); })()),         // line 4
(isset($context["__internal_4c21fffa270e0ac24bcb080d67877d784267e05fd7626afa787ad84625ec9d71"]) || array_key_exists("__internal_4c21fffa270e0ac24bcb080d67877d784267e05fd7626afa787ad84625ec9d71", $context) ? $context["__internal_4c21fffa270e0ac24bcb080d67877d784267e05fd7626afa787ad84625ec9d71"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_4c21fffa270e0ac24bcb080d67877d784267e05fd7626afa787ad84625ec9d71" does not exist.', 4, $this->getSourceContext()); })()))) : (        // line 15
(isset($context["_default_title"]) || array_key_exists("_default_title", $context) ? $context["_default_title"] : (function () { throw new Twig_Error_Runtime('Variable "_default_title" does not exist.', 15, $this->getSourceContext()); })()))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_632c94714b31048dace84803c3460fc44f38520a7bd770a2612276e589ec2a20->leave($__internal_632c94714b31048dace84803c3460fc44f38520a7bd770a2612276e589ec2a20_prof);

        
        $__internal_4fe7b5492e314e6972dd02de580bcfb6c1fa014b4c4bdcc6d39e668c1d2968a1->leave($__internal_4fe7b5492e314e6972dd02de580bcfb6c1fa014b4c4bdcc6d39e668c1d2968a1_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_41352efe98a77cba6f32918e00283c27859b61edb0093c27300dd304339acffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41352efe98a77cba6f32918e00283c27859b61edb0093c27300dd304339acffb->enter($__internal_41352efe98a77cba6f32918e00283c27859b61edb0093c27300dd304339acffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_9f98839f69ed691500f8e3633e29580a8906fef802937cfda3604a595a141863 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f98839f69ed691500f8e3633e29580a8906fef802937cfda3604a595a141863->enter($__internal_9f98839f69ed691500f8e3633e29580a8906fef802937cfda3604a595a141863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_9f98839f69ed691500f8e3633e29580a8906fef802937cfda3604a595a141863->leave($__internal_9f98839f69ed691500f8e3633e29580a8906fef802937cfda3604a595a141863_prof);

        
        $__internal_41352efe98a77cba6f32918e00283c27859b61edb0093c27300dd304339acffb->leave($__internal_41352efe98a77cba6f32918e00283c27859b61edb0093c27300dd304339acffb_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_0dd4d1df27ca39719d86ac24ded2966a3b04f77e26dd60d45203b23295e9b0f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dd4d1df27ca39719d86ac24ded2966a3b04f77e26dd60d45203b23295e9b0f4->enter($__internal_0dd4d1df27ca39719d86ac24ded2966a3b04f77e26dd60d45203b23295e9b0f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_76190a86ccfaa015e90c27f06275955450d92c5c832934e16e4ce7821df2d8b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76190a86ccfaa015e90c27f06275955450d92c5c832934e16e4ce7821df2d8b7->enter($__internal_76190a86ccfaa015e90c27f06275955450d92c5c832934e16e4ce7821df2d8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), 'form');
        echo "
    ";
        
        $__internal_76190a86ccfaa015e90c27f06275955450d92c5c832934e16e4ce7821df2d8b7->leave($__internal_76190a86ccfaa015e90c27f06275955450d92c5c832934e16e4ce7821df2d8b7_prof);

        
        $__internal_0dd4d1df27ca39719d86ac24ded2966a3b04f77e26dd60d45203b23295e9b0f4->leave($__internal_0dd4d1df27ca39719d86ac24ded2966a3b04f77e26dd60d45203b23295e9b0f4_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_6878aee6e1fb17ecd9694bfc942036e42f57e3aa11f3dc141a55748e678c1601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6878aee6e1fb17ecd9694bfc942036e42f57e3aa11f3dc141a55748e678c1601->enter($__internal_6878aee6e1fb17ecd9694bfc942036e42f57e3aa11f3dc141a55748e678c1601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_3a4bb05b88d90395a19a572f1c583ded562451fe0501387e5acf8906725bfbc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a4bb05b88d90395a19a572f1c583ded562451fe0501387e5acf8906725bfbc6->enter($__internal_3a4bb05b88d90395a19a572f1c583ded562451fe0501387e5acf8906725bfbc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_3a4bb05b88d90395a19a572f1c583ded562451fe0501387e5acf8906725bfbc6->leave($__internal_3a4bb05b88d90395a19a572f1c583ded562451fe0501387e5acf8906725bfbc6_prof);

        
        $__internal_6878aee6e1fb17ecd9694bfc942036e42f57e3aa11f3dc141a55748e678c1601->leave($__internal_6878aee6e1fb17ecd9694bfc942036e42f57e3aa11f3dc141a55748e678c1601_prof);

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
", "@EasyAdmin/default/new.html.twig", "C:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\new.html.twig");
    }
}
