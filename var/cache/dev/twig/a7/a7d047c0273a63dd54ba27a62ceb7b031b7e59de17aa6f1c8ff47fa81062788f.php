<?php

/* @EasyAdmin/default/list.html.twig */
class __TwigTemplate_9971912bcd57eacb4f02657b072acbb580fad67a9bb15d99f54cf24597d5ee95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'content_header' => array($this, 'block_content_header'),
            'content_title_wrapper' => array($this, 'block_content_title_wrapper'),
            'global_actions' => array($this, 'block_global_actions'),
            'search_action' => array($this, 'block_search_action'),
            'search_form' => array($this, 'block_search_form'),
            'new_action' => array($this, 'block_new_action'),
            'main' => array($this, 'block_main'),
            'table_head' => array($this, 'block_table_head'),
            'table_body' => array($this, 'block_table_body'),
            'item_actions' => array($this, 'block_item_actions'),
            'paginator' => array($this, 'block_paginator'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "templates", array()), "layout", array()), "@EasyAdmin/default/list.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_327ade766c48c816d19ebbde87cd88e1d63b81755192f6dbe62e2d1950fd1485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_327ade766c48c816d19ebbde87cd88e1d63b81755192f6dbe62e2d1950fd1485->enter($__internal_327ade766c48c816d19ebbde87cd88e1d63b81755192f6dbe62e2d1950fd1485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/list.html.twig"));

        $__internal_89a6e9dcefb61438ed66b5dab0fc2ccab3efd2f50bac1e05a92d74faaaa98e21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89a6e9dcefb61438ed66b5dab0fc2ccab3efd2f50bac1e05a92d74faaaa98e21->enter($__internal_89a6e9dcefb61438ed66b5dab0fc2ccab3efd2f50bac1e05a92d74faaaa98e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/list.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 2
        $context["__internal_2fc627ec9781de506727f78eb9463e2becd501f2b430f29786711314e2f0d062"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 2, $this->getSourceContext()); })()), "translation_domain", array());
        // line 3
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 3, $this->getSourceContext()); })()), "name", array()), array(),         // line 2
(isset($context["__internal_2fc627ec9781de506727f78eb9463e2becd501f2b430f29786711314e2f0d062"]) || array_key_exists("__internal_2fc627ec9781de506727f78eb9463e2becd501f2b430f29786711314e2f0d062", $context) ? $context["__internal_2fc627ec9781de506727f78eb9463e2becd501f2b430f29786711314e2f0d062"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_2fc627ec9781de506727f78eb9463e2becd501f2b430f29786711314e2f0d062" does not exist.', 2, $this->getSourceContext()); })())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(),         // line 3
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 3, $this->getSourceContext()); })()), "label", array()), array(),         // line 2
(isset($context["__internal_2fc627ec9781de506727f78eb9463e2becd501f2b430f29786711314e2f0d062"]) || array_key_exists("__internal_2fc627ec9781de506727f78eb9463e2becd501f2b430f29786711314e2f0d062", $context) ? $context["__internal_2fc627ec9781de506727f78eb9463e2becd501f2b430f29786711314e2f0d062"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_2fc627ec9781de506727f78eb9463e2becd501f2b430f29786711314e2f0d062" does not exist.', 2, $this->getSourceContext()); })())));
        // line 7
        $context["_request_parameters"] = twig_array_merge(twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->getSourceContext()); })()), "request", array()), "query", array()), "all", array()), ((array_key_exists("_request_parameters", $context)) ? (_twig_default_filter((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 7, $this->getSourceContext()); })()), array())) : (array()))), array("action" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 8
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "action"), "method"), "entity" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 9
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 9, $this->getSourceContext()); })()), "name", array()), "menuIndex" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 10
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "menuIndex"), "method"), "submenuIndex" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 11
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "submenuIndex"), "method"), "sortField" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 12
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"), "sortDirection" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 13
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method"), "page" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 14
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "page", 1 => 1), "method")));
        // line 17
        if (("search" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 17, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 18
            $context["_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 18, $this->getSourceContext()); })()), array("query" => ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 19
($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "sortField" => ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 20
($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"))) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"))), "sortDirection" => ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 21
($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 21, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method"))) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 21, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method")))));
        }
        // line 25
        $context["_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 25, $this->getSourceContext()); })()), array("referer" => twig_urlencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 25, $this->getSourceContext()); })())))));
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_327ade766c48c816d19ebbde87cd88e1d63b81755192f6dbe62e2d1950fd1485->leave($__internal_327ade766c48c816d19ebbde87cd88e1d63b81755192f6dbe62e2d1950fd1485_prof);

        
        $__internal_89a6e9dcefb61438ed66b5dab0fc2ccab3efd2f50bac1e05a92d74faaaa98e21->leave($__internal_89a6e9dcefb61438ed66b5dab0fc2ccab3efd2f50bac1e05a92d74faaaa98e21_prof);

    }

    // line 27
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_8da960605678146e5c9436b00081b7b60456ecda63baca86391e3525f222a191 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da960605678146e5c9436b00081b7b60456ecda63baca86391e3525f222a191->enter($__internal_8da960605678146e5c9436b00081b7b60456ecda63baca86391e3525f222a191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_ff3ce50d2a09e72e8c524b0db5afe6f82d101264e1ecc4b74c7d317e36b61018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff3ce50d2a09e72e8c524b0db5afe6f82d101264e1ecc4b74c7d317e36b61018->enter($__internal_ff3ce50d2a09e72e8c524b0db5afe6f82d101264e1ecc4b74c7d317e36b61018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-list-" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 27, $this->getSourceContext()); })()), "name", array())), "html", null, true);
        
        $__internal_ff3ce50d2a09e72e8c524b0db5afe6f82d101264e1ecc4b74c7d317e36b61018->leave($__internal_ff3ce50d2a09e72e8c524b0db5afe6f82d101264e1ecc4b74c7d317e36b61018_prof);

        
        $__internal_8da960605678146e5c9436b00081b7b60456ecda63baca86391e3525f222a191->leave($__internal_8da960605678146e5c9436b00081b7b60456ecda63baca86391e3525f222a191_prof);

    }

    // line 28
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_2d78a483d0a540a7d68345e187c845c06d0782ace16916bc3eb2b5ee80b2ded6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d78a483d0a540a7d68345e187c845c06d0782ace16916bc3eb2b5ee80b2ded6->enter($__internal_2d78a483d0a540a7d68345e187c845c06d0782ace16916bc3eb2b5ee80b2ded6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_43cc54c2c8145be71245f6b15a3b1aa5d151cd524b564903780e8f3daaedd72e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43cc54c2c8145be71245f6b15a3b1aa5d151cd524b564903780e8f3daaedd72e->enter($__internal_43cc54c2c8145be71245f6b15a3b1aa5d151cd524b564903780e8f3daaedd72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("list list-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 28, $this->getSourceContext()); })()), "name", array()))), "html", null, true);
        
        $__internal_43cc54c2c8145be71245f6b15a3b1aa5d151cd524b564903780e8f3daaedd72e->leave($__internal_43cc54c2c8145be71245f6b15a3b1aa5d151cd524b564903780e8f3daaedd72e_prof);

        
        $__internal_2d78a483d0a540a7d68345e187c845c06d0782ace16916bc3eb2b5ee80b2ded6->leave($__internal_2d78a483d0a540a7d68345e187c845c06d0782ace16916bc3eb2b5ee80b2ded6_prof);

    }

    // line 30
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_c75be079d71f56e2cdfb7b178c20ea78157c4f25fe57de018146f9c2c14000b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75be079d71f56e2cdfb7b178c20ea78157c4f25fe57de018146f9c2c14000b1->enter($__internal_c75be079d71f56e2cdfb7b178c20ea78157c4f25fe57de018146f9c2c14000b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_dd2352d8e38e99f03c2f5bc3b3d3a0ae1f7b66a28d54273171764255e34511b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd2352d8e38e99f03c2f5bc3b3d3a0ae1f7b66a28d54273171764255e34511b8->enter($__internal_dd2352d8e38e99f03c2f5bc3b3d3a0ae1f7b66a28d54273171764255e34511b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 31
        ob_start();
        // line 32
        echo "    ";
        if (("search" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 32, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 33
            echo "        ";
            $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("search.page_title", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 33, $this->getSourceContext()); })()), "nbResults", array()), array(), "EasyAdminBundle");
            // line 34
            echo "        ";
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 34, $this->getSourceContext()); })()), "search", array()), "title", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 34, $this->getSourceContext()); })()), "nbResults", array()), array(),             // line 2
(isset($context["__internal_2fc627ec9781de506727f78eb9463e2becd501f2b430f29786711314e2f0d062"]) || array_key_exists("__internal_2fc627ec9781de506727f78eb9463e2becd501f2b430f29786711314e2f0d062", $context) ? $context["__internal_2fc627ec9781de506727f78eb9463e2becd501f2b430f29786711314e2f0d062"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_2fc627ec9781de506727f78eb9463e2becd501f2b430f29786711314e2f0d062" does not exist.', 2, $this->getSourceContext()); })()))) : (            // line 34
(isset($context["_default_title"]) || array_key_exists("_default_title", $context) ? $context["_default_title"] : (function () { throw new Twig_Error_Runtime('Variable "_default_title" does not exist.', 34, $this->getSourceContext()); })())));
            echo "
    ";
        } else {
            // line 36
            echo "        ";
            $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.page_title", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 36, $this->getSourceContext()); })()), "EasyAdminBundle");
            // line 37
            echo "        ";
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "list", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 37, $this->getSourceContext()); })()), "list", array()), "title", array()), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 37, $this->getSourceContext()); })()),             // line 2
(isset($context["__internal_2fc627ec9781de506727f78eb9463e2becd501f2b430f29786711314e2f0d062"]) || array_key_exists("__internal_2fc627ec9781de506727f78eb9463e2becd501f2b430f29786711314e2f0d062", $context) ? $context["__internal_2fc627ec9781de506727f78eb9463e2becd501f2b430f29786711314e2f0d062"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_2fc627ec9781de506727f78eb9463e2becd501f2b430f29786711314e2f0d062" does not exist.', 2, $this->getSourceContext()); })()))) : (            // line 37
(isset($context["_default_title"]) || array_key_exists("_default_title", $context) ? $context["_default_title"] : (function () { throw new Twig_Error_Runtime('Variable "_default_title" does not exist.', 37, $this->getSourceContext()); })())));
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_dd2352d8e38e99f03c2f5bc3b3d3a0ae1f7b66a28d54273171764255e34511b8->leave($__internal_dd2352d8e38e99f03c2f5bc3b3d3a0ae1f7b66a28d54273171764255e34511b8_prof);

        
        $__internal_c75be079d71f56e2cdfb7b178c20ea78157c4f25fe57de018146f9c2c14000b1->leave($__internal_c75be079d71f56e2cdfb7b178c20ea78157c4f25fe57de018146f9c2c14000b1_prof);

    }

    // line 42
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_67c730c51bef326b97252f7287c98cd095e886017ac72e67f0e1621e773cb087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c730c51bef326b97252f7287c98cd095e886017ac72e67f0e1621e773cb087->enter($__internal_67c730c51bef326b97252f7287c98cd095e886017ac72e67f0e1621e773cb087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_a7f8c5490f2c26f7c16feb66c9eafb9ea32220fd7a4894f21bc65d16d10e4f47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7f8c5490f2c26f7c16feb66c9eafb9ea32220fd7a4894f21bc65d16d10e4f47->enter($__internal_a7f8c5490f2c26f7c16feb66c9eafb9ea32220fd7a4894f21bc65d16d10e4f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 43
        echo "    <div class=\"row\">
        <div class=\"col-sm-5\">
            ";
        // line 45
        $this->displayBlock('content_title_wrapper', $context, $blocks);
        // line 48
        echo "        </div>

        <div class=\"col-sm-7\">
            <div class=\"global-actions\">
                ";
        // line 52
        $this->displayBlock('global_actions', $context, $blocks);
        // line 93
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_a7f8c5490f2c26f7c16feb66c9eafb9ea32220fd7a4894f21bc65d16d10e4f47->leave($__internal_a7f8c5490f2c26f7c16feb66c9eafb9ea32220fd7a4894f21bc65d16d10e4f47_prof);

        
        $__internal_67c730c51bef326b97252f7287c98cd095e886017ac72e67f0e1621e773cb087->leave($__internal_67c730c51bef326b97252f7287c98cd095e886017ac72e67f0e1621e773cb087_prof);

    }

    // line 45
    public function block_content_title_wrapper($context, array $blocks = array())
    {
        $__internal_725e46c41c59acb692dfdcb37de3558301125a101a1bf3989b3223e5c333b87d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_725e46c41c59acb692dfdcb37de3558301125a101a1bf3989b3223e5c333b87d->enter($__internal_725e46c41c59acb692dfdcb37de3558301125a101a1bf3989b3223e5c333b87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title_wrapper"));

        $__internal_b2ca3f20d8f3106a9ef8210a5dd3967271cf122732377ac4e3e6dfc087742930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2ca3f20d8f3106a9ef8210a5dd3967271cf122732377ac4e3e6dfc087742930->enter($__internal_b2ca3f20d8f3106a9ef8210a5dd3967271cf122732377ac4e3e6dfc087742930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title_wrapper"));

        // line 46
        echo "                <h1 class=\"title\">";
        $this->displayBlock("content_title", $context, $blocks);
        echo "</h1>
            ";
        
        $__internal_b2ca3f20d8f3106a9ef8210a5dd3967271cf122732377ac4e3e6dfc087742930->leave($__internal_b2ca3f20d8f3106a9ef8210a5dd3967271cf122732377ac4e3e6dfc087742930_prof);

        
        $__internal_725e46c41c59acb692dfdcb37de3558301125a101a1bf3989b3223e5c333b87d->leave($__internal_725e46c41c59acb692dfdcb37de3558301125a101a1bf3989b3223e5c333b87d_prof);

    }

    // line 52
    public function block_global_actions($context, array $blocks = array())
    {
        $__internal_998b1b0e8f1ff749d410567b500293cec05f93633273ea01e34aa822231f3eb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_998b1b0e8f1ff749d410567b500293cec05f93633273ea01e34aa822231f3eb8->enter($__internal_998b1b0e8f1ff749d410567b500293cec05f93633273ea01e34aa822231f3eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions"));

        $__internal_1dab0fb7c061f80492c131dd2e3c8ee35f0513534e9adb654afce01aa3cd249d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dab0fb7c061f80492c131dd2e3c8ee35f0513534e9adb654afce01aa3cd249d->enter($__internal_1dab0fb7c061f80492c131dd2e3c8ee35f0513534e9adb654afce01aa3cd249d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions"));

        // line 53
        echo "                    ";
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->isActionEnabled("list", "search", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 53, $this->getSourceContext()); })()), "name", array()))) {
            // line 54
            echo "                        ";
            $context["_action"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionConfiguration("list", "search", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 54, $this->getSourceContext()); })()), "name", array()));
            // line 55
            echo "
                        ";
            // line 56
            $this->displayBlock('search_action', $context, $blocks);
            // line 79
            echo "                    ";
        }
        // line 80
        echo "
                    ";
        // line 81
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->isActionEnabled("list", "new", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 81, $this->getSourceContext()); })()), "name", array()))) {
            // line 82
            echo "                        ";
            $context["_action"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionConfiguration("list", "new", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 82, $this->getSourceContext()); })()), "name", array()));
            // line 83
            echo "                        ";
            $this->displayBlock('new_action', $context, $blocks);
            // line 91
            echo "                    ";
        }
        // line 92
        echo "                ";
        
        $__internal_1dab0fb7c061f80492c131dd2e3c8ee35f0513534e9adb654afce01aa3cd249d->leave($__internal_1dab0fb7c061f80492c131dd2e3c8ee35f0513534e9adb654afce01aa3cd249d_prof);

        
        $__internal_998b1b0e8f1ff749d410567b500293cec05f93633273ea01e34aa822231f3eb8->leave($__internal_998b1b0e8f1ff749d410567b500293cec05f93633273ea01e34aa822231f3eb8_prof);

    }

    // line 56
    public function block_search_action($context, array $blocks = array())
    {
        $__internal_8bde502a49ffea996e77fed731eeee538bd1a7d2c04db82d153e400f78bcfa97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bde502a49ffea996e77fed731eeee538bd1a7d2c04db82d153e400f78bcfa97->enter($__internal_8bde502a49ffea996e77fed731eeee538bd1a7d2c04db82d153e400f78bcfa97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_action"));

        $__internal_f6d1e249fd1e352e9cec21064c4e8c2722fe9de25de3222caa8cd77f51a51b20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6d1e249fd1e352e9cec21064c4e8c2722fe9de25de3222caa8cd77f51a51b20->enter($__internal_f6d1e249fd1e352e9cec21064c4e8c2722fe9de25de3222caa8cd77f51a51b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_action"));

        // line 57
        echo "                            <div class=\"form-action ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["_action"] ?? null), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["_action"] ?? null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
                                <form method=\"get\" action=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                    ";
        // line 59
        $this->displayBlock('search_form', $context, $blocks);
        // line 76
        echo "                                </form>
                            </div>
                        ";
        
        $__internal_f6d1e249fd1e352e9cec21064c4e8c2722fe9de25de3222caa8cd77f51a51b20->leave($__internal_f6d1e249fd1e352e9cec21064c4e8c2722fe9de25de3222caa8cd77f51a51b20_prof);

        
        $__internal_8bde502a49ffea996e77fed731eeee538bd1a7d2c04db82d153e400f78bcfa97->leave($__internal_8bde502a49ffea996e77fed731eeee538bd1a7d2c04db82d153e400f78bcfa97_prof);

    }

    // line 59
    public function block_search_form($context, array $blocks = array())
    {
        $__internal_c88b78469425c058a360760199d3b598c5ea3b32045c724259c9568bf3761e81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c88b78469425c058a360760199d3b598c5ea3b32045c724259c9568bf3761e81->enter($__internal_c88b78469425c058a360760199d3b598c5ea3b32045c724259c9568bf3761e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_form"));

        $__internal_35b9d31dc365e6c28cc19b079064d4da8748bcc826efa686a2b4dec4a28687e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35b9d31dc365e6c28cc19b079064d4da8748bcc826efa686a2b4dec4a28687e3->enter($__internal_35b9d31dc365e6c28cc19b079064d4da8748bcc826efa686a2b4dec4a28687e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_form"));

        // line 60
        echo "                                        <input type=\"hidden\" name=\"action\" value=\"search\">
                                        <input type=\"hidden\" name=\"entity\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 61, $this->getSourceContext()); })()), "entity", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"sortField\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 62, $this->getSourceContext()); })()), "sortField", array()))) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 62, $this->getSourceContext()); })()), "sortField", array()))), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"sortDirection\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 63, $this->getSourceContext()); })()), "sortDirection", array()))) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 63, $this->getSourceContext()); })()), "sortDirection", array()))), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"menuIndex\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 64, $this->getSourceContext()); })()), "menuIndex", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 65, $this->getSourceContext()); })()), "submenuIndex", array()), "html", null, true);
        echo "\">
                                        <div class=\"input-group\">
                                            <input class=\"form-control\" type=\"search\" name=\"query\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "html", null, true);
        echo "\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn\" type=\"submit\" formtarget=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new Twig_Error_Runtime('Variable "_action" does not exist.', 69, $this->getSourceContext()); })()), "target", array()), "html", null, true);
        echo "\">
                                                    <i class=\"fa fa-search\"></i>
                                                    <span class=\"hidden-xs hidden-sm\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["_action"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["_action"] ?? null), "label", array()), "action.search")) : ("action.search")), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 71, $this->getSourceContext()); })()),         // line 2
(isset($context["__internal_2fc627ec9781de506727f78eb9463e2becd501f2b430f29786711314e2f0d062"]) || array_key_exists("__internal_2fc627ec9781de506727f78eb9463e2becd501f2b430f29786711314e2f0d062", $context) ? $context["__internal_2fc627ec9781de506727f78eb9463e2becd501f2b430f29786711314e2f0d062"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_2fc627ec9781de506727f78eb9463e2becd501f2b430f29786711314e2f0d062" does not exist.', 2, $this->getSourceContext()); })())), "html", null, true);
        // line 71
        echo "</span>
                                                </button>
                                            </span>
                                        </div>
                                    ";
        
        $__internal_35b9d31dc365e6c28cc19b079064d4da8748bcc826efa686a2b4dec4a28687e3->leave($__internal_35b9d31dc365e6c28cc19b079064d4da8748bcc826efa686a2b4dec4a28687e3_prof);

        
        $__internal_c88b78469425c058a360760199d3b598c5ea3b32045c724259c9568bf3761e81->leave($__internal_c88b78469425c058a360760199d3b598c5ea3b32045c724259c9568bf3761e81_prof);

    }

    // line 83
    public function block_new_action($context, array $blocks = array())
    {
        $__internal_21b443b59fb584c596093146188a4bb3e54fe4aecaafeaef00aa77d1c719ba11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b443b59fb584c596093146188a4bb3e54fe4aecaafeaef00aa77d1c719ba11->enter($__internal_21b443b59fb584c596093146188a4bb3e54fe4aecaafeaef00aa77d1c719ba11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "new_action"));

        $__internal_1f32408aa7f2a3d0dd8ccecfa3165a79a1b823002a5c2f1d802a6be94a794e56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f32408aa7f2a3d0dd8ccecfa3165a79a1b823002a5c2f1d802a6be94a794e56->enter($__internal_1f32408aa7f2a3d0dd8ccecfa3165a79a1b823002a5c2f1d802a6be94a794e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "new_action"));

        // line 84
        echo "                            <div class=\"button-action\">
                                <a class=\"";
        // line 85
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["_action"] ?? null), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["_action"] ?? null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 85, $this->getSourceContext()); })()), array("action" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new Twig_Error_Runtime('Variable "_action" does not exist.', 85, $this->getSourceContext()); })()), "name", array())))), "html", null, true);
        echo "\" target=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new Twig_Error_Runtime('Variable "_action" does not exist.', 85, $this->getSourceContext()); })()), "target", array()), "html", null, true);
        echo "\">
                                    ";
        // line 86
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new Twig_Error_Runtime('Variable "_action" does not exist.', 86, $this->getSourceContext()); })()), "icon", array())) {
            echo "<i class=\"fa fa-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new Twig_Error_Runtime('Variable "_action" does not exist.', 86, $this->getSourceContext()); })()), "icon", array()), "html", null, true);
            echo "\"></i>";
        }
        // line 87
        echo "                                    ";
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["_action"] ?? null), "label", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new Twig_Error_Runtime('Variable "_action" does not exist.', 87, $this->getSourceContext()); })()), "label", array())))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new Twig_Error_Runtime('Variable "_action" does not exist.', 87, $this->getSourceContext()); })()), "label", array()), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 87, $this->getSourceContext()); })()),         // line 2
(isset($context["__internal_2fc627ec9781de506727f78eb9463e2becd501f2b430f29786711314e2f0d062"]) || array_key_exists("__internal_2fc627ec9781de506727f78eb9463e2becd501f2b430f29786711314e2f0d062", $context) ? $context["__internal_2fc627ec9781de506727f78eb9463e2becd501f2b430f29786711314e2f0d062"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_2fc627ec9781de506727f78eb9463e2becd501f2b430f29786711314e2f0d062" does not exist.', 2, $this->getSourceContext()); })()))) : ("")), "html", null, true);
        // line 87
        echo "
                                </a>
                            </div>
                        ";
        
        $__internal_1f32408aa7f2a3d0dd8ccecfa3165a79a1b823002a5c2f1d802a6be94a794e56->leave($__internal_1f32408aa7f2a3d0dd8ccecfa3165a79a1b823002a5c2f1d802a6be94a794e56_prof);

        
        $__internal_21b443b59fb584c596093146188a4bb3e54fe4aecaafeaef00aa77d1c719ba11->leave($__internal_21b443b59fb584c596093146188a4bb3e54fe4aecaafeaef00aa77d1c719ba11_prof);

    }

    // line 98
    public function block_main($context, array $blocks = array())
    {
        $__internal_38806606b0b50e7fc9fbd5a45b5144d46262397013ec8e9d74e6dc030b1c2062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38806606b0b50e7fc9fbd5a45b5144d46262397013ec8e9d74e6dc030b1c2062->enter($__internal_38806606b0b50e7fc9fbd5a45b5144d46262397013ec8e9d74e6dc030b1c2062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_d82e1491dd128af9b9e6e2639bd79cde7cc728e98f1cf0488b5eef32ad6bcd70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d82e1491dd128af9b9e6e2639bd79cde7cc728e98f1cf0488b5eef32ad6bcd70->enter($__internal_d82e1491dd128af9b9e6e2639bd79cde7cc728e98f1cf0488b5eef32ad6bcd70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 99
        echo "    ";
        $context["_list_item_actions"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("list", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 99, $this->getSourceContext()); })()), "name", array()));
        // line 100
        echo "
    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
        ";
        // line 104
        $this->displayBlock('table_head', $context, $blocks);
        // line 131
        echo "        </thead>

        <tbody>
        ";
        // line 134
        $this->displayBlock('table_body', $context, $blocks);
        // line 171
        echo "        </tbody>
    </table>
    </div>

    ";
        // line 175
        $this->displayBlock('paginator', $context, $blocks);
        // line 178
        echo "
    ";
        // line 179
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_d82e1491dd128af9b9e6e2639bd79cde7cc728e98f1cf0488b5eef32ad6bcd70->leave($__internal_d82e1491dd128af9b9e6e2639bd79cde7cc728e98f1cf0488b5eef32ad6bcd70_prof);

        
        $__internal_38806606b0b50e7fc9fbd5a45b5144d46262397013ec8e9d74e6dc030b1c2062->leave($__internal_38806606b0b50e7fc9fbd5a45b5144d46262397013ec8e9d74e6dc030b1c2062_prof);

    }

    // line 104
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_df7f7320b9e94e7235ebbbde8bff687666c1fec8cde508ba94bca0a31ea047ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df7f7320b9e94e7235ebbbde8bff687666c1fec8cde508ba94bca0a31ea047ba->enter($__internal_df7f7320b9e94e7235ebbbde8bff687666c1fec8cde508ba94bca0a31ea047ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        $__internal_4ac6e1721749164eedaea8b269485de257cad1d20f71396e3850709d706be671 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ac6e1721749164eedaea8b269485de257cad1d20f71396e3850709d706be671->enter($__internal_4ac6e1721749164eedaea8b269485de257cad1d20f71396e3850709d706be671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        // line 105
        echo "            <tr>
                ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new Twig_Error_Runtime('Variable "fields" does not exist.', 106, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 107
            echo "                    ";
            $context["isSortingField"] = (twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "property", array()) == twig_first($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 107, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "sortField"), "method"), ".")));
            // line 108
            echo "                    ";
            $context["nextSortDirection"] = (((isset($context["isSortingField"]) || array_key_exists("isSortingField", $context) ? $context["isSortingField"] : (function () { throw new Twig_Error_Runtime('Variable "isSortingField" does not exist.', 108, $this->getSourceContext()); })())) ? ((((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 108, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "sortDirection"), "method") == "DESC")) ? ("ASC") : ("DESC"))) : ("DESC"));
            // line 109
            echo "                    ";
            $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "label", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "label", array())) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize($context["field"]))), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 109, $this->getSourceContext()); })()),             // line 2
(isset($context["__internal_2fc627ec9781de506727f78eb9463e2becd501f2b430f29786711314e2f0d062"]) || array_key_exists("__internal_2fc627ec9781de506727f78eb9463e2becd501f2b430f29786711314e2f0d062", $context) ? $context["__internal_2fc627ec9781de506727f78eb9463e2becd501f2b430f29786711314e2f0d062"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_2fc627ec9781de506727f78eb9463e2becd501f2b430f29786711314e2f0d062" does not exist.', 2, $this->getSourceContext()); })()));
            // line 110
            echo "                    ";
            $context["_column_icon"] = (((isset($context["isSortingField"]) || array_key_exists("isSortingField", $context) ? $context["isSortingField"] : (function () { throw new Twig_Error_Runtime('Variable "isSortingField" does not exist.', 110, $this->getSourceContext()); })())) ? (((((isset($context["nextSortDirection"]) || array_key_exists("nextSortDirection", $context) ? $context["nextSortDirection"] : (function () { throw new Twig_Error_Runtime('Variable "nextSortDirection" does not exist.', 110, $this->getSourceContext()); })()) == "DESC")) ? ("fa-caret-up") : ("fa-caret-down"))) : ("fa-sort"));
            // line 111
            echo "
                    <th data-property-name=\"";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "property", array()), "html", null, true);
            echo "\" class=\"";
            echo (((isset($context["isSortingField"]) || array_key_exists("isSortingField", $context) ? $context["isSortingField"] : (function () { throw new Twig_Error_Runtime('Variable "isSortingField" does not exist.', 112, $this->getSourceContext()); })())) ? ("sorted") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "virtual", array())) ? ("virtual") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "dataType", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "css_class", array()), "html", null, true);
            echo "\">
                        ";
            // line 113
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "sortable", array())) {
                // line 114
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 114, $this->getSourceContext()); })()), array("page" => 1, "sortField" => twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "property", array()), "sortDirection" => (isset($context["nextSortDirection"]) || array_key_exists("nextSortDirection", $context) ? $context["nextSortDirection"] : (function () { throw new Twig_Error_Runtime('Variable "nextSortDirection" does not exist.', 114, $this->getSourceContext()); })())))), "html", null, true);
                echo "\">
                                <i class=\"fa ";
                // line 115
                echo twig_escape_filter($this->env, (isset($context["_column_icon"]) || array_key_exists("_column_icon", $context) ? $context["_column_icon"] : (function () { throw new Twig_Error_Runtime('Variable "_column_icon" does not exist.', 115, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></i>
                                ";
                // line 116
                echo (isset($context["_column_label"]) || array_key_exists("_column_label", $context) ? $context["_column_label"] : (function () { throw new Twig_Error_Runtime('Variable "_column_label" does not exist.', 116, $this->getSourceContext()); })());
                echo "
                            </a>
                        ";
            } else {
                // line 119
                echo "                            <span>";
                echo (isset($context["_column_label"]) || array_key_exists("_column_label", $context) ? $context["_column_label"] : (function () { throw new Twig_Error_Runtime('Variable "_column_label" does not exist.', 119, $this->getSourceContext()); })());
                echo "</span>
                        ";
            }
            // line 121
            echo "                    </th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "
                ";
        // line 124
        if ((twig_length_filter($this->env, (isset($context["_list_item_actions"]) || array_key_exists("_list_item_actions", $context) ? $context["_list_item_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_item_actions" does not exist.', 124, $this->getSourceContext()); })())) > 0)) {
            // line 125
            echo "                    <th>
                        <span>";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.row_actions", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 126, $this->getSourceContext()); })()), "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </th>
                ";
        }
        // line 129
        echo "            </tr>
        ";
        
        $__internal_4ac6e1721749164eedaea8b269485de257cad1d20f71396e3850709d706be671->leave($__internal_4ac6e1721749164eedaea8b269485de257cad1d20f71396e3850709d706be671_prof);

        
        $__internal_df7f7320b9e94e7235ebbbde8bff687666c1fec8cde508ba94bca0a31ea047ba->leave($__internal_df7f7320b9e94e7235ebbbde8bff687666c1fec8cde508ba94bca0a31ea047ba_prof);

    }

    // line 134
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_a9a7a3bd2236b3d2c533dbf8cb3e791f8d31bccc89989c8c1e5de1a3f159517e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9a7a3bd2236b3d2c533dbf8cb3e791f8d31bccc89989c8c1e5de1a3f159517e->enter($__internal_a9a7a3bd2236b3d2c533dbf8cb3e791f8d31bccc89989c8c1e5de1a3f159517e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        $__internal_6753451621688aeab53fd2df77082b35eb1cedcf4bcddf1b9ae18ae14600552d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6753451621688aeab53fd2df77082b35eb1cedcf4bcddf1b9ae18ae14600552d->enter($__internal_6753451621688aeab53fd2df77082b35eb1cedcf4bcddf1b9ae18ae14600552d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 135
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 135, $this->getSourceContext()); })()), "currentPageResults", array()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 136
            echo "                ";
            // line 137
            echo "                ";
            $context["_item_id"] = ("" . twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 137, $this->getSourceContext()); })()), "primary_key_field_name", array())));
            // line 138
            echo "                <tr data-id=\"";
            echo twig_escape_filter($this->env, (isset($context["_item_id"]) || array_key_exists("_item_id", $context) ? $context["_item_id"] : (function () { throw new Twig_Error_Runtime('Variable "_item_id" does not exist.', 138, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
                    ";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new Twig_Error_Runtime('Variable "fields" does not exist.', 139, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
                // line 140
                echo "                        ";
                $context["isSortingField"] = (twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "property", array()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 140, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "sortField"), "method"));
                // line 141
                echo "                        ";
                $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "label", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "label", array())) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize($context["field"]))), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 141, $this->getSourceContext()); })()),                 // line 2
(isset($context["__internal_2fc627ec9781de506727f78eb9463e2becd501f2b430f29786711314e2f0d062"]) || array_key_exists("__internal_2fc627ec9781de506727f78eb9463e2becd501f2b430f29786711314e2f0d062", $context) ? $context["__internal_2fc627ec9781de506727f78eb9463e2becd501f2b430f29786711314e2f0d062"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_2fc627ec9781de506727f78eb9463e2becd501f2b430f29786711314e2f0d062" does not exist.', 2, $this->getSourceContext()); })()));
                // line 142
                echo "
                        <td data-label=\"";
                // line 143
                echo twig_escape_filter($this->env, (isset($context["_column_label"]) || array_key_exists("_column_label", $context) ? $context["_column_label"] : (function () { throw new Twig_Error_Runtime('Variable "_column_label" does not exist.', 143, $this->getSourceContext()); })()), "html", null, true);
                echo "\" class=\"";
                echo (((isset($context["isSortingField"]) || array_key_exists("isSortingField", $context) ? $context["isSortingField"] : (function () { throw new Twig_Error_Runtime('Variable "isSortingField" does not exist.', 143, $this->getSourceContext()); })())) ? ("sorted") : (""));
                echo " ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "dataType", array())), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "css_class", array()), "html", null, true);
                echo "\">
                            ";
                // line 144
                echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "list", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 144, $this->getSourceContext()); })()), "name", array()), $context["item"], $context["metadata"]);
                echo "
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "
                    ";
            // line 148
            if ((twig_length_filter($this->env, (isset($context["_list_item_actions"]) || array_key_exists("_list_item_actions", $context) ? $context["_list_item_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_item_actions" does not exist.', 148, $this->getSourceContext()); })())) > 0)) {
                // line 149
                echo "                        ";
                $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.row_actions", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 149, $this->getSourceContext()); })()), "EasyAdminBundle");
                // line 150
                echo "                        <td data-label=\"";
                echo twig_escape_filter($this->env, (isset($context["_column_label"]) || array_key_exists("_column_label", $context) ? $context["_column_label"] : (function () { throw new Twig_Error_Runtime('Variable "_column_label" does not exist.', 150, $this->getSourceContext()); })()), "html", null, true);
                echo "\" class=\"actions\">
                        ";
                // line 151
                $this->displayBlock('item_actions', $context, $blocks);
                // line 160
                echo "                        </td>
                    ";
            }
            // line 162
            echo "                </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 164
            echo "                <tr>
                    <td class=\"no-results\" colspan=\"";
            // line 165
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, (isset($context["_list_item_actions"]) || array_key_exists("_list_item_actions", $context) ? $context["_list_item_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_item_actions" does not exist.', 165, $this->getSourceContext()); })())) > 0)) ? ((twig_length_filter($this->env, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new Twig_Error_Runtime('Variable "fields" does not exist.', 165, $this->getSourceContext()); })())) + 1)) : (twig_length_filter($this->env, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new Twig_Error_Runtime('Variable "fields" does not exist.', 165, $this->getSourceContext()); })())))), "html", null, true);
            echo "\">
                        ";
            // line 166
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search.no_results", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 166, $this->getSourceContext()); })()), "EasyAdminBundle"), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "        ";
        
        $__internal_6753451621688aeab53fd2df77082b35eb1cedcf4bcddf1b9ae18ae14600552d->leave($__internal_6753451621688aeab53fd2df77082b35eb1cedcf4bcddf1b9ae18ae14600552d_prof);

        
        $__internal_a9a7a3bd2236b3d2c533dbf8cb3e791f8d31bccc89989c8c1e5de1a3f159517e->leave($__internal_a9a7a3bd2236b3d2c533dbf8cb3e791f8d31bccc89989c8c1e5de1a3f159517e_prof);

    }

    // line 151
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_f3fb098eb76151efaa53134b91a130149984c5ae4d986b022ac8500f6ee6e28e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3fb098eb76151efaa53134b91a130149984c5ae4d986b022ac8500f6ee6e28e->enter($__internal_f3fb098eb76151efaa53134b91a130149984c5ae4d986b022ac8500f6ee6e28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_10666d086d299f5635c1ac668d78f90dba2c3e248065e02b9c9e180798b7d8e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10666d086d299f5635c1ac668d78f90dba2c3e248065e02b9c9e180798b7d8e7->enter($__internal_10666d086d299f5635c1ac668d78f90dba2c3e248065e02b9c9e180798b7d8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 152
        echo "                            ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 153
(isset($context["_list_item_actions"]) || array_key_exists("_list_item_actions", $context) ? $context["_list_item_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_item_actions" does not exist.', 153, $this->getSourceContext()); })()), "request_parameters" =>         // line 154
(isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 154, $this->getSourceContext()); })()), "translation_domain" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 155
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 155, $this->getSourceContext()); })()), "translation_domain", array()), "trans_parameters" =>         // line 156
(isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 156, $this->getSourceContext()); })()), "item_id" =>         // line 157
(isset($context["_item_id"]) || array_key_exists("_item_id", $context) ? $context["_item_id"] : (function () { throw new Twig_Error_Runtime('Variable "_item_id" does not exist.', 157, $this->getSourceContext()); })())), false);
        // line 158
        echo "
                        ";
        
        $__internal_10666d086d299f5635c1ac668d78f90dba2c3e248065e02b9c9e180798b7d8e7->leave($__internal_10666d086d299f5635c1ac668d78f90dba2c3e248065e02b9c9e180798b7d8e7_prof);

        
        $__internal_f3fb098eb76151efaa53134b91a130149984c5ae4d986b022ac8500f6ee6e28e->leave($__internal_f3fb098eb76151efaa53134b91a130149984c5ae4d986b022ac8500f6ee6e28e_prof);

    }

    // line 175
    public function block_paginator($context, array $blocks = array())
    {
        $__internal_1edf28c6f35ff8425a8297ba52a3181278bb9024ffdbfe5b1d2c69469b8e3690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1edf28c6f35ff8425a8297ba52a3181278bb9024ffdbfe5b1d2c69469b8e3690->enter($__internal_1edf28c6f35ff8425a8297ba52a3181278bb9024ffdbfe5b1d2c69469b8e3690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paginator"));

        $__internal_2cd8d649f7effb806e19c0ce81ab44e4eda3da049b275c7dd2eb6746c9ff956d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cd8d649f7effb806e19c0ce81ab44e4eda3da049b275c7dd2eb6746c9ff956d->enter($__internal_2cd8d649f7effb806e19c0ce81ab44e4eda3da049b275c7dd2eb6746c9ff956d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paginator"));

        // line 176
        echo "        ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 176, $this->getSourceContext()); })()), "templates", array()), "paginator", array()));
        echo "
    ";
        
        $__internal_2cd8d649f7effb806e19c0ce81ab44e4eda3da049b275c7dd2eb6746c9ff956d->leave($__internal_2cd8d649f7effb806e19c0ce81ab44e4eda3da049b275c7dd2eb6746c9ff956d_prof);

        
        $__internal_1edf28c6f35ff8425a8297ba52a3181278bb9024ffdbfe5b1d2c69469b8e3690->leave($__internal_1edf28c6f35ff8425a8297ba52a3181278bb9024ffdbfe5b1d2c69469b8e3690_prof);

    }

    // line 179
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_8d435f8d5ffe4f497e3744c24cae5f1a06b9f66e597476f6f7ccc971edcccf36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d435f8d5ffe4f497e3744c24cae5f1a06b9f66e597476f6f7ccc971edcccf36->enter($__internal_8d435f8d5ffe4f497e3744c24cae5f1a06b9f66e597476f6f7ccc971edcccf36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_89b0235d0e9239389baff4b869f6cf4b41aa29539170cc165b2b63203eee7ea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89b0235d0e9239389baff4b869f6cf4b41aa29539170cc165b2b63203eee7ea7->enter($__internal_89b0235d0e9239389baff4b869f6cf4b41aa29539170cc165b2b63203eee7ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 180
        echo "        ";
        $context["referer"] = (((((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 180, $this->getSourceContext()); })()), "currentPage", array()) == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 180, $this->getSourceContext()); })()), "nbPages", array())) && (1 != twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 180, $this->getSourceContext()); })()), "currentPage", array()))) && (1 == twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 180, $this->getSourceContext()); })()), "currentPageResults", array()))))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 181
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 181, $this->getSourceContext()); })()), "request", array()), "query", array()), array("page" => (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 181, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "page"), "method") - 1))))) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 182
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 182, $this->getSourceContext()); })()), "request", array()), "requestUri", array())));
        // line 184
        echo "
        ";
        // line 185
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "list", "referer" => twig_urlencode_filter(        // line 187
(isset($context["referer"]) || array_key_exists("referer", $context) ? $context["referer"] : (function () { throw new Twig_Error_Runtime('Variable "referer" does not exist.', 187, $this->getSourceContext()); })())), "delete_form" =>         // line 188
(isset($context["delete_form_template"]) || array_key_exists("delete_form_template", $context) ? $context["delete_form_template"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form_template" does not exist.', 188, $this->getSourceContext()); })()), "_translation_domain" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 189
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 189, $this->getSourceContext()); })()), "translation_domain", array()), "_trans_parameters" =>         // line 190
(isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 190, $this->getSourceContext()); })()), "_entity_config" =>         // line 191
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 191, $this->getSourceContext()); })())), false);
        // line 192
        echo "
    ";
        
        $__internal_89b0235d0e9239389baff4b869f6cf4b41aa29539170cc165b2b63203eee7ea7->leave($__internal_89b0235d0e9239389baff4b869f6cf4b41aa29539170cc165b2b63203eee7ea7_prof);

        
        $__internal_8d435f8d5ffe4f497e3744c24cae5f1a06b9f66e597476f6f7ccc971edcccf36->leave($__internal_8d435f8d5ffe4f497e3744c24cae5f1a06b9f66e597476f6f7ccc971edcccf36_prof);

    }

    // line 196
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_343907059851af70e49ec824b2428780a1ec2500a9fc69dcf757ed7a898ac179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_343907059851af70e49ec824b2428780a1ec2500a9fc69dcf757ed7a898ac179->enter($__internal_343907059851af70e49ec824b2428780a1ec2500a9fc69dcf757ed7a898ac179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_be8076e63fdd1a25a9aad3b0cca5598117c004b7194f8189e15a416eb9f04adb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be8076e63fdd1a25a9aad3b0cca5598117c004b7194f8189e15a416eb9f04adb->enter($__internal_be8076e63fdd1a25a9aad3b0cca5598117c004b7194f8189e15a416eb9f04adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 197
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('#main').find('table .toggle input[type=\"checkbox\"]').change(function() {
                var toggle = \$(this);
                var newValue = toggle.prop('checked');
                var oldValue = !newValue;

                var columnIndex = \$(this).closest('td').index() + 1;
                var propertyName = \$('table th.toggle:nth-child(' + columnIndex + ')').data('property-name');

                var toggleUrl = \"";
        // line 209
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "edit", "entity" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 209, $this->getSourceContext()); })()), "name", array()), "view" => "list"));
        echo "\"
                              + \"&id=\" + \$(this).closest('tr').data('id')
                              + \"&property=\" + propertyName
                              + \"&newValue=\" + newValue.toString();

                var toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                toggleRequest.done(function(result) {});

                toggleRequest.fail(function() {
                    // in case of error, restore the original value and disable the toggle
                    toggle.bootstrapToggle(oldValue == true ? 'on' : 'off');
                    toggle.bootstrapToggle('disable');
                });
            });

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                var id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        var deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 240
        if (("search" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 240, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 241
            echo "        <script type=\"text/javascript\">
            var _search_query = \"";
            // line 242
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "js"), "html", null, true);
            echo "\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    ";
        }
        
        $__internal_be8076e63fdd1a25a9aad3b0cca5598117c004b7194f8189e15a416eb9f04adb->leave($__internal_be8076e63fdd1a25a9aad3b0cca5598117c004b7194f8189e15a416eb9f04adb_prof);

        
        $__internal_343907059851af70e49ec824b2428780a1ec2500a9fc69dcf757ed7a898ac179->leave($__internal_343907059851af70e49ec824b2428780a1ec2500a9fc69dcf757ed7a898ac179_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  831 => 242,  828 => 241,  826 => 240,  792 => 209,  776 => 197,  767 => 196,  756 => 192,  754 => 191,  753 => 190,  752 => 189,  751 => 188,  750 => 187,  749 => 185,  746 => 184,  744 => 182,  743 => 181,  741 => 180,  732 => 179,  719 => 176,  710 => 175,  699 => 158,  697 => 157,  696 => 156,  695 => 155,  694 => 154,  693 => 153,  691 => 152,  682 => 151,  672 => 170,  662 => 166,  658 => 165,  655 => 164,  641 => 162,  637 => 160,  635 => 151,  630 => 150,  627 => 149,  625 => 148,  622 => 147,  613 => 144,  603 => 143,  600 => 142,  598 => 2,  596 => 141,  593 => 140,  589 => 139,  584 => 138,  581 => 137,  579 => 136,  560 => 135,  551 => 134,  540 => 129,  534 => 126,  531 => 125,  529 => 124,  526 => 123,  519 => 121,  513 => 119,  507 => 116,  503 => 115,  498 => 114,  496 => 113,  484 => 112,  481 => 111,  478 => 110,  476 => 2,  474 => 109,  471 => 108,  468 => 107,  464 => 106,  461 => 105,  452 => 104,  442 => 179,  439 => 178,  437 => 175,  431 => 171,  429 => 134,  424 => 131,  422 => 104,  416 => 100,  413 => 99,  404 => 98,  391 => 87,  389 => 2,  387 => 87,  381 => 86,  373 => 85,  370 => 84,  361 => 83,  347 => 71,  345 => 2,  344 => 71,  339 => 69,  334 => 67,  329 => 65,  325 => 64,  321 => 63,  317 => 62,  313 => 61,  310 => 60,  301 => 59,  289 => 76,  287 => 59,  283 => 58,  278 => 57,  269 => 56,  259 => 92,  256 => 91,  253 => 83,  250 => 82,  248 => 81,  245 => 80,  242 => 79,  240 => 56,  237 => 55,  234 => 54,  231 => 53,  222 => 52,  209 => 46,  200 => 45,  187 => 93,  185 => 52,  179 => 48,  177 => 45,  173 => 43,  164 => 42,  150 => 37,  149 => 2,  147 => 37,  144 => 36,  139 => 34,  138 => 2,  136 => 34,  133 => 33,  130 => 32,  128 => 31,  119 => 30,  101 => 28,  83 => 27,  73 => 5,  71 => 25,  68 => 21,  67 => 20,  66 => 19,  65 => 18,  63 => 17,  61 => 14,  60 => 13,  59 => 12,  58 => 11,  57 => 10,  56 => 9,  55 => 8,  54 => 7,  52 => 2,  51 => 3,  50 => 2,  49 => 3,  47 => 2,  45 => 1,  33 => 5,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% set _request_parameters = app.request.query.all|merge(_request_parameters|default({}))|merge({
    action: app.request.get('action'),
    entity: _entity_config.name,
    menuIndex: app.request.get('menuIndex'),
    submenuIndex: app.request.get('submenuIndex'),
    sortField: app.request.get('sortField', ''),
    sortDirection: app.request.get('sortDirection', 'DESC'),
    page: app.request.get('page', 1)
}) %}

{% if 'search' == app.request.get('action') %}
    {% set _request_parameters = _request_parameters|merge({
        query: app.request.get('query')|default(''),
        sortField: _entity_config.search.sort.field|default(app.request.get('sortField', '')),
        sortDirection: _entity_config.search.sort.direction|default(app.request.get('sortDirection', 'DESC')),
    }) %}
{% endif %}

{% set _request_parameters = _request_parameters|merge({ referer: path('easyadmin', _request_parameters)|url_encode }) %}

{% block body_id 'easyadmin-list-' ~ _entity_config.name %}
{% block body_class 'list list-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% if 'search' == app.request.get('action') %}
        {% set _default_title = 'search.page_title'|transchoice(paginator.nbResults, {}, 'EasyAdminBundle') %}
        {{ (_entity_config.search.title is defined ? _entity_config.search.title|transchoice(paginator.nbResults) : _default_title)|raw }}
    {% else %}
        {% set _default_title = 'list.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
        {{ (_entity_config.list.title is defined ? _entity_config.list.title|trans(_trans_parameters) : _default_title)|raw }}
    {% endif %}
{% endspaceless %}
{% endblock %}

{% block content_header %}
    <div class=\"row\">
        <div class=\"col-sm-5\">
            {% block content_title_wrapper %}
                <h1 class=\"title\">{{ block('content_title') }}</h1>
            {% endblock %}
        </div>

        <div class=\"col-sm-7\">
            <div class=\"global-actions\">
                {% block global_actions %}
                    {% if easyadmin_action_is_enabled_for_list_view('search', _entity_config.name) %}
                        {% set _action = easyadmin_get_action_for_list_view('search', _entity_config.name) %}

                        {% block search_action %}
                            <div class=\"form-action {{ _action.css_class|default('') }}\">
                                <form method=\"get\" action=\"{{ path('easyadmin') }}\">
                                    {% block search_form %}
                                        <input type=\"hidden\" name=\"action\" value=\"search\">
                                        <input type=\"hidden\" name=\"entity\" value=\"{{ _request_parameters.entity }}\">
                                        <input type=\"hidden\" name=\"sortField\" value=\"{{ _entity_config.search.sort.field|default(_request_parameters.sortField) }}\">
                                        <input type=\"hidden\" name=\"sortDirection\" value=\"{{ _entity_config.search.sort.direction|default(_request_parameters.sortDirection) }}\">
                                        <input type=\"hidden\" name=\"menuIndex\" value=\"{{ _request_parameters.menuIndex }}\">
                                        <input type=\"hidden\" name=\"submenuIndex\" value=\"{{ _request_parameters.submenuIndex }}\">
                                        <div class=\"input-group\">
                                            <input class=\"form-control\" type=\"search\" name=\"query\" value=\"{{ app.request.get('query')|default('') }}\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn\" type=\"submit\" formtarget=\"{{ _action.target }}\">
                                                    <i class=\"fa fa-search\"></i>
                                                    <span class=\"hidden-xs hidden-sm\">{{ _action.label|default('action.search')|trans(_trans_parameters) }}</span>
                                                </button>
                                            </span>
                                        </div>
                                    {% endblock %}
                                </form>
                            </div>
                        {% endblock search_action %}
                    {% endif %}

                    {% if easyadmin_action_is_enabled_for_list_view('new', _entity_config.name) %}
                        {% set _action = easyadmin_get_action_for_list_view('new', _entity_config.name) %}
                        {% block new_action %}
                            <div class=\"button-action\">
                                <a class=\"{{ _action.css_class|default('') }}\" href=\"{{ path('easyadmin', _request_parameters|merge({ action: _action.name })) }}\" target=\"{{ _action.target }}\">
                                    {% if _action.icon %}<i class=\"fa fa-{{ _action.icon }}\"></i>{% endif %}
                                    {{ _action.label is defined and not _action.label is empty ? _action.label|trans(_trans_parameters) }}
                                </a>
                            </div>
                        {% endblock new_action %}
                    {% endif %}
                {% endblock global_actions %}
            </div>
        </div>
    </div>
{% endblock content_header %}

{% block main %}
    {% set _list_item_actions = easyadmin_get_actions_for_list_item(_entity_config.name) %}

    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
        {% block table_head %}
            <tr>
                {% for field, metadata in fields %}
                    {% set isSortingField = metadata.property == app.request.get('sortField')|split('.')|first %}
                    {% set nextSortDirection = isSortingField ? (app.request.get('sortDirection') == 'DESC' ? 'ASC' : 'DESC') : 'DESC' %}
                    {% set _column_label = (metadata.label ?: field|humanize)|trans(_trans_parameters) %}
                    {% set _column_icon = isSortingField ? (nextSortDirection == 'DESC' ? 'fa-caret-up' : 'fa-caret-down') : 'fa-sort' %}

                    <th data-property-name=\"{{ metadata.property }}\" class=\"{{ isSortingField ? 'sorted' }} {{ metadata.virtual ? 'virtual' }} {{ metadata.dataType|lower }} {{ metadata.css_class }}\">
                        {% if metadata.sortable %}
                            <a href=\"{{ path('easyadmin', _request_parameters|merge({ page: 1, sortField: metadata.property, sortDirection: nextSortDirection })) }}\">
                                <i class=\"fa {{ _column_icon }}\"></i>
                                {{ _column_label|raw }}
                            </a>
                        {% else %}
                            <span>{{ _column_label|raw }}</span>
                        {% endif %}
                    </th>
                {% endfor %}

                {% if _list_item_actions|length > 0 %}
                    <th>
                        <span>{{ 'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') }}</span>
                    </th>
                {% endif %}
            </tr>
        {% endblock table_head %}
        </thead>

        <tbody>
        {% block table_body %}
            {% for item in paginator.currentPageResults %}
                {# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}
                {% set _item_id = '' ~ attribute(item, _entity_config.primary_key_field_name) %}
                <tr data-id=\"{{ _item_id }}\">
                    {% for field, metadata in fields %}
                        {% set isSortingField = metadata.property == app.request.get('sortField') %}
                        {% set _column_label =  (metadata.label ?: field|humanize)|trans(_trans_parameters)  %}

                        <td data-label=\"{{ _column_label }}\" class=\"{{ isSortingField ? 'sorted' }} {{ metadata.dataType|lower }} {{ metadata.css_class }}\">
                            {{ easyadmin_render_field_for_list_view(_entity_config.name, item, metadata) }}
                        </td>
                    {% endfor %}

                    {% if _list_item_actions|length > 0 %}
                        {% set _column_label =  'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') %}
                        <td data-label=\"{{ _column_label }}\" class=\"actions\">
                        {% block item_actions %}
                            {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                                actions: _list_item_actions,
                                request_parameters: _request_parameters,
                                translation_domain: _entity_config.translation_domain,
                                trans_parameters: _trans_parameters,
                                item_id: _item_id
                            }, with_context = false) }}
                        {% endblock item_actions %}
                        </td>
                    {% endif %}
                </tr>
            {% else %}
                <tr>
                    <td class=\"no-results\" colspan=\"{{ _list_item_actions|length > 0 ? fields|length + 1 : fields|length }}\">
                        {{ 'search.no_results'|trans(_trans_parameters, 'EasyAdminBundle') }}
                    </td>
                </tr>
            {% endfor %}
        {% endblock table_body %}
        </tbody>
    </table>
    </div>

    {% block paginator %}
        {{ include(_entity_config.templates.paginator) }}
    {% endblock paginator %}

    {% block delete_form %}
        {% set referer = paginator.currentPage == paginator.nbPages and 1 != paginator.currentPage and 1 == paginator.currentPageResults|length
            ? path('easyadmin', app.request.query|merge({ page: app.request.query.get('page') - 1 }))
            : app.request.requestUri
        %}

        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'list',
            referer: referer|url_encode,
            delete_form: delete_form_template,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock main %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('#main').find('table .toggle input[type=\"checkbox\"]').change(function() {
                var toggle = \$(this);
                var newValue = toggle.prop('checked');
                var oldValue = !newValue;

                var columnIndex = \$(this).closest('td').index() + 1;
                var propertyName = \$('table th.toggle:nth-child(' + columnIndex + ')').data('property-name');

                var toggleUrl = \"{{ path('easyadmin', { action: 'edit', entity: _entity_config.name, view: 'list' })|raw }}\"
                              + \"&id=\" + \$(this).closest('tr').data('id')
                              + \"&property=\" + propertyName
                              + \"&newValue=\" + newValue.toString();

                var toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                toggleRequest.done(function(result) {});

                toggleRequest.fail(function() {
                    // in case of error, restore the original value and disable the toggle
                    toggle.bootstrapToggle(oldValue == true ? 'on' : 'off');
                    toggle.bootstrapToggle('disable');
                });
            });

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                var id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        var deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });
        });
    </script>

    {% if 'search' == app.request.get('action') %}
        <script type=\"text/javascript\">
            var _search_query = \"{{ app.request.get('query')|default('')|e('js') }}\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    {% endif %}
{% endblock %}
", "@EasyAdmin/default/list.html.twig", "C:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\list.html.twig");
    }
}
