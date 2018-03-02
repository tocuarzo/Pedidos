<?php

/* @EasyAdmin/default/edit.html.twig */
class __TwigTemplate_a62f5d86e6381c73e4b402387831198ddcd472a6b24a2524ed47e0d69cc39fed extends Twig_Template
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
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 8, $this->getSourceContext()); })()), "templates", array()), "layout", array()), "@EasyAdmin/default/edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3351bba2be47ff78ba229d11ef98b45e965d7ec44a715ec61d6de68f602e706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3351bba2be47ff78ba229d11ef98b45e965d7ec44a715ec61d6de68f602e706->enter($__internal_d3351bba2be47ff78ba229d11ef98b45e965d7ec44a715ec61d6de68f602e706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/edit.html.twig"));

        $__internal_279714d0e909cd3565c37de47bbf125e7b0984963ed1417fe1919c77005c8a47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_279714d0e909cd3565c37de47bbf125e7b0984963ed1417fe1919c77005c8a47->enter($__internal_279714d0e909cd3565c37de47bbf125e7b0984963ed1417fe1919c77005c8a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/edit.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"), true);
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 4, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 4, $this->getSourceContext()); })()), "primary_key_field_name", array()));
        // line 5
        $context["__internal_4207064aade079c7f6be5dd210d80f14fe2f907a7f7bf6886903689955a3f4ee"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 6, $this->getSourceContext()); })()), "name", array()), array(),         // line 5
(isset($context["__internal_4207064aade079c7f6be5dd210d80f14fe2f907a7f7bf6886903689955a3f4ee"]) || array_key_exists("__internal_4207064aade079c7f6be5dd210d80f14fe2f907a7f7bf6886903689955a3f4ee", $context) ? $context["__internal_4207064aade079c7f6be5dd210d80f14fe2f907a7f7bf6886903689955a3f4ee"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_4207064aade079c7f6be5dd210d80f14fe2f907a7f7bf6886903689955a3f4ee" does not exist.', 5, $this->getSourceContext()); })())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(),         // line 6
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 6, $this->getSourceContext()); })()), "label", array()), array(),         // line 5
(isset($context["__internal_4207064aade079c7f6be5dd210d80f14fe2f907a7f7bf6886903689955a3f4ee"]) || array_key_exists("__internal_4207064aade079c7f6be5dd210d80f14fe2f907a7f7bf6886903689955a3f4ee", $context) ? $context["__internal_4207064aade079c7f6be5dd210d80f14fe2f907a7f7bf6886903689955a3f4ee"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_4207064aade079c7f6be5dd210d80f14fe2f907a7f7bf6886903689955a3f4ee" does not exist.', 5, $this->getSourceContext()); })())), "%entity_id%" =>         // line 6
(isset($context["_entity_id"]) || array_key_exists("_entity_id", $context) ? $context["_entity_id"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_id" does not exist.', 6, $this->getSourceContext()); })()));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3351bba2be47ff78ba229d11ef98b45e965d7ec44a715ec61d6de68f602e706->leave($__internal_d3351bba2be47ff78ba229d11ef98b45e965d7ec44a715ec61d6de68f602e706_prof);

        
        $__internal_279714d0e909cd3565c37de47bbf125e7b0984963ed1417fe1919c77005c8a47->leave($__internal_279714d0e909cd3565c37de47bbf125e7b0984963ed1417fe1919c77005c8a47_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_5f014646f0386fb383595c727c50c2c64d4d370a6b2f48c2a82a7ad19a1d5b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f014646f0386fb383595c727c50c2c64d4d370a6b2f48c2a82a7ad19a1d5b07->enter($__internal_5f014646f0386fb383595c727c50c2c64d4d370a6b2f48c2a82a7ad19a1d5b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_0fb236fe5df4f104e84eb9045f346a4aae8ee2005bda3a2992154e6d103a840b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fb236fe5df4f104e84eb9045f346a4aae8ee2005bda3a2992154e6d103a840b->enter($__internal_0fb236fe5df4f104e84eb9045f346a4aae8ee2005bda3a2992154e6d103a840b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 10, $this->getSourceContext()); })()), "name", array())) . "-") . (isset($context["_entity_id"]) || array_key_exists("_entity_id", $context) ? $context["_entity_id"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_id" does not exist.', 10, $this->getSourceContext()); })())), "html", null, true);
        
        $__internal_0fb236fe5df4f104e84eb9045f346a4aae8ee2005bda3a2992154e6d103a840b->leave($__internal_0fb236fe5df4f104e84eb9045f346a4aae8ee2005bda3a2992154e6d103a840b_prof);

        
        $__internal_5f014646f0386fb383595c727c50c2c64d4d370a6b2f48c2a82a7ad19a1d5b07->leave($__internal_5f014646f0386fb383595c727c50c2c64d4d370a6b2f48c2a82a7ad19a1d5b07_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_445abfbe372e8a227365232acfbc1e57269b00a29869d08b33cf8203c31e0e20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445abfbe372e8a227365232acfbc1e57269b00a29869d08b33cf8203c31e0e20->enter($__internal_445abfbe372e8a227365232acfbc1e57269b00a29869d08b33cf8203c31e0e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_c54d31335e216be1980d13d76f4f47901baeca5ac33e1e13a6506c0276789471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c54d31335e216be1980d13d76f4f47901baeca5ac33e1e13a6506c0276789471->enter($__internal_c54d31335e216be1980d13d76f4f47901baeca5ac33e1e13a6506c0276789471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 11, $this->getSourceContext()); })()), "name", array()))), "html", null, true);
        
        $__internal_c54d31335e216be1980d13d76f4f47901baeca5ac33e1e13a6506c0276789471->leave($__internal_c54d31335e216be1980d13d76f4f47901baeca5ac33e1e13a6506c0276789471_prof);

        
        $__internal_445abfbe372e8a227365232acfbc1e57269b00a29869d08b33cf8203c31e0e20->leave($__internal_445abfbe372e8a227365232acfbc1e57269b00a29869d08b33cf8203c31e0e20_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_6d06cd78903ba7ae0593926e1caf8148fea1de2eedaa2a8ad529e2621f1d5069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d06cd78903ba7ae0593926e1caf8148fea1de2eedaa2a8ad529e2621f1d5069->enter($__internal_6d06cd78903ba7ae0593926e1caf8148fea1de2eedaa2a8ad529e2621f1d5069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_a1aaee4751886b39e5d5c37d2945e4724dde7c8f7a3ec470671510dcccb76540 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1aaee4751886b39e5d5c37d2945e4724dde7c8f7a3ec470671510dcccb76540->enter($__internal_a1aaee4751886b39e5d5c37d2945e4724dde7c8f7a3ec470671510dcccb76540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 15, $this->getSourceContext()); })()), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 16, $this->getSourceContext()); })()), "edit", array()), "title", array()), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 16, $this->getSourceContext()); })()),         // line 5
(isset($context["__internal_4207064aade079c7f6be5dd210d80f14fe2f907a7f7bf6886903689955a3f4ee"]) || array_key_exists("__internal_4207064aade079c7f6be5dd210d80f14fe2f907a7f7bf6886903689955a3f4ee", $context) ? $context["__internal_4207064aade079c7f6be5dd210d80f14fe2f907a7f7bf6886903689955a3f4ee"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_4207064aade079c7f6be5dd210d80f14fe2f907a7f7bf6886903689955a3f4ee" does not exist.', 5, $this->getSourceContext()); })()))) : (        // line 16
(isset($context["_default_title"]) || array_key_exists("_default_title", $context) ? $context["_default_title"] : (function () { throw new Twig_Error_Runtime('Variable "_default_title" does not exist.', 16, $this->getSourceContext()); })()))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a1aaee4751886b39e5d5c37d2945e4724dde7c8f7a3ec470671510dcccb76540->leave($__internal_a1aaee4751886b39e5d5c37d2945e4724dde7c8f7a3ec470671510dcccb76540_prof);

        
        $__internal_6d06cd78903ba7ae0593926e1caf8148fea1de2eedaa2a8ad529e2621f1d5069->leave($__internal_6d06cd78903ba7ae0593926e1caf8148fea1de2eedaa2a8ad529e2621f1d5069_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_809d4d3d481c5152e51c1d6ab93fe27475f9b2dcb94485ee0bbb156d546e57b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_809d4d3d481c5152e51c1d6ab93fe27475f9b2dcb94485ee0bbb156d546e57b7->enter($__internal_809d4d3d481c5152e51c1d6ab93fe27475f9b2dcb94485ee0bbb156d546e57b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_f1b6134543222676b9352503173c4114dc7c3eaa2e8d370ae8b51e30632c3fd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1b6134543222676b9352503173c4114dc7c3eaa2e8d370ae8b51e30632c3fd5->enter($__internal_f1b6134543222676b9352503173c4114dc7c3eaa2e8d370ae8b51e30632c3fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_f1b6134543222676b9352503173c4114dc7c3eaa2e8d370ae8b51e30632c3fd5->leave($__internal_f1b6134543222676b9352503173c4114dc7c3eaa2e8d370ae8b51e30632c3fd5_prof);

        
        $__internal_809d4d3d481c5152e51c1d6ab93fe27475f9b2dcb94485ee0bbb156d546e57b7->leave($__internal_809d4d3d481c5152e51c1d6ab93fe27475f9b2dcb94485ee0bbb156d546e57b7_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_0d596943b2eb568d197079735715c31a40e73a65e862ddd4f36df1bfbdeb8a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d596943b2eb568d197079735715c31a40e73a65e862ddd4f36df1bfbdeb8a30->enter($__internal_0d596943b2eb568d197079735715c31a40e73a65e862ddd4f36df1bfbdeb8a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_98c6af27ba67fc44303db6c90520d2a8101bd14a562ac767dd4aee80fc05107b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98c6af27ba67fc44303db6c90520d2a8101bd14a562ac767dd4aee80fc05107b->enter($__internal_98c6af27ba67fc44303db6c90520d2a8101bd14a562ac767dd4aee80fc05107b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'form');
        echo "
    ";
        
        $__internal_98c6af27ba67fc44303db6c90520d2a8101bd14a562ac767dd4aee80fc05107b->leave($__internal_98c6af27ba67fc44303db6c90520d2a8101bd14a562ac767dd4aee80fc05107b_prof);

        
        $__internal_0d596943b2eb568d197079735715c31a40e73a65e862ddd4f36df1bfbdeb8a30->leave($__internal_0d596943b2eb568d197079735715c31a40e73a65e862ddd4f36df1bfbdeb8a30_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_730e8788dd7381ba7d8be918bf3642c4702310802a67cd29617bf71883089a86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_730e8788dd7381ba7d8be918bf3642c4702310802a67cd29617bf71883089a86->enter($__internal_730e8788dd7381ba7d8be918bf3642c4702310802a67cd29617bf71883089a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_fc461feb455716016f24a430d09cdedcaecd7a798ea538152367c1cfe92de8a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc461feb455716016f24a430d09cdedcaecd7a798ea538152367c1cfe92de8a9->enter($__internal_fc461feb455716016f24a430d09cdedcaecd7a798ea538152367c1cfe92de8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 26
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "edit", "referer" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 28
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 28, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 29
(isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 29, $this->getSourceContext()); })()), "_translation_domain" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 30
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 30, $this->getSourceContext()); })()), "translation_domain", array()), "_trans_parameters" =>         // line 31
(isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 31, $this->getSourceContext()); })()), "_entity_config" =>         // line 32
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 32, $this->getSourceContext()); })())), false);
        // line 33
        echo "
    ";
        
        $__internal_fc461feb455716016f24a430d09cdedcaecd7a798ea538152367c1cfe92de8a9->leave($__internal_fc461feb455716016f24a430d09cdedcaecd7a798ea538152367c1cfe92de8a9_prof);

        
        $__internal_730e8788dd7381ba7d8be918bf3642c4702310802a67cd29617bf71883089a86->leave($__internal_730e8788dd7381ba7d8be918bf3642c4702310802a67cd29617bf71883089a86_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_0c72da59c3bdc49de6add2a99fd650f6fb6bd10688127acf9ac2ab0d469d7d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c72da59c3bdc49de6add2a99fd650f6fb6bd10688127acf9ac2ab0d469d7d53->enter($__internal_0c72da59c3bdc49de6add2a99fd650f6fb6bd10688127acf9ac2ab0d469d7d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_19385ea96d1658f31cb4f3d4c784828345cebc0e9499880e497636c23c4893c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19385ea96d1658f31cb4f3d4c784828345cebc0e9499880e497636c23c4893c5->enter($__internal_19385ea96d1658f31cb4f3d4c784828345cebc0e9499880e497636c23c4893c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 38
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '";
        // line 42
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 58
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_19385ea96d1658f31cb4f3d4c784828345cebc0e9499880e497636c23c4893c5->leave($__internal_19385ea96d1658f31cb4f3d4c784828345cebc0e9499880e497636c23c4893c5_prof);

        
        $__internal_0c72da59c3bdc49de6add2a99fd650f6fb6bd10688127acf9ac2ab0d469d7d53->leave($__internal_0c72da59c3bdc49de6add2a99fd650f6fb6bd10688127acf9ac2ab0d469d7d53_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 58,  218 => 42,  210 => 38,  201 => 37,  190 => 33,  188 => 32,  187 => 31,  186 => 30,  185 => 29,  184 => 28,  182 => 26,  173 => 25,  160 => 22,  151 => 21,  141 => 25,  138 => 24,  135 => 21,  126 => 20,  113 => 16,  112 => 5,  110 => 16,  107 => 15,  105 => 14,  96 => 13,  78 => 11,  60 => 10,  50 => 8,  48 => 6,  47 => 5,  46 => 6,  45 => 5,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 1,  24 => 8,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form with easyadmin_config('design.form_theme') %}

{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% set _entity_id = attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-edit-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'edit edit-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'edit.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.edit.title is defined ? _entity_config.edit.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'edit',
            referer: app.request.query.get('referer', ''),
            delete_form: delete_form,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "@EasyAdmin/default/edit.html.twig", "C:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\edit.html.twig");
    }
}
