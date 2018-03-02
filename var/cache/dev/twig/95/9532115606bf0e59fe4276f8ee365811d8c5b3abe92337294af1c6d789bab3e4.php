<?php

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_7e2797ddf6094a7938e0e52607995850714c4d5c77f0586b8ffd62ff2c8d33aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'user_menu_dropdown' => array($this, 'block_user_menu_dropdown'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'content_help' => array($this, 'block_content_help'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e41dc252cbf76be02d5fdb319f8953679414dfd57aaf95209120ca03fcd6b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e41dc252cbf76be02d5fdb319f8953679414dfd57aaf95209120ca03fcd6b2c->enter($__internal_2e41dc252cbf76be02d5fdb319f8953679414dfd57aaf95209120ca03fcd6b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        $__internal_d42f6480c91179d298d4fb260a6f77efb15484c5bcdab133a6804ceaec0c1ea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d42f6480c91179d298d4fb260a6f77efb15484c5bcdab133a6804ceaec0c1ea6->enter($__internal_d42f6480c91179d298d4fb260a6f77efb15484c5bcdab133a6804ceaec0c1ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->getSourceContext()); })()), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) {
            // line 47
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-rtl.min.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/adminlte-rtl.min.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 50
        echo "    </head>

    ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 167
        echo "</html>
";
        
        $__internal_2e41dc252cbf76be02d5fdb319f8953679414dfd57aaf95209120ca03fcd6b2c->leave($__internal_2e41dc252cbf76be02d5fdb319f8953679414dfd57aaf95209120ca03fcd6b2c_prof);

        
        $__internal_d42f6480c91179d298d4fb260a6f77efb15484c5bcdab133a6804ceaec0c1ea6->leave($__internal_d42f6480c91179d298d4fb260a6f77efb15484c5bcdab133a6804ceaec0c1ea6_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_86e65b52285b50de9bc54e44d888766d57e8e15b9dc262162c57126f371671c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86e65b52285b50de9bc54e44d888766d57e8e15b9dc262162c57126f371671c3->enter($__internal_86e65b52285b50de9bc54e44d888766d57e8e15b9dc262162c57126f371671c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_7e317e8d33cc5584fd571ba815768a57a560528dab87b8526a45cd221e39c45e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e317e8d33cc5584fd571ba815768a57a560528dab87b8526a45cd221e39c45e->enter($__internal_7e317e8d33cc5584fd571ba815768a57a560528dab87b8526a45cd221e39c45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_7e317e8d33cc5584fd571ba815768a57a560528dab87b8526a45cd221e39c45e->leave($__internal_7e317e8d33cc5584fd571ba815768a57a560528dab87b8526a45cd221e39c45e_prof);

        
        $__internal_86e65b52285b50de9bc54e44d888766d57e8e15b9dc262162c57126f371671c3->leave($__internal_86e65b52285b50de9bc54e44d888766d57e8e15b9dc262162c57126f371671c3_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_bf2cefe50d892b52001ad2066498c4ed6f4562683351bc5f06d710f058e03bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf2cefe50d892b52001ad2066498c4ed6f4562683351bc5f06d710f058e03bf3->enter($__internal_bf2cefe50d892b52001ad2066498c4ed6f4562683351bc5f06d710f058e03bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_577f6fd47c5db78ffe8ff547d6ec0826609bf64af3481ac72c982e37cca7f7bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_577f6fd47c5db78ffe8ff547d6ec0826609bf64af3481ac72c982e37cca7f7bf->enter($__internal_577f6fd47c5db78ffe8ff547d6ec0826609bf64af3481ac72c982e37cca7f7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 15
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_577f6fd47c5db78ffe8ff547d6ec0826609bf64af3481ac72c982e37cca7f7bf->leave($__internal_577f6fd47c5db78ffe8ff547d6ec0826609bf64af3481ac72c982e37cca7f7bf_prof);

        
        $__internal_bf2cefe50d892b52001ad2066498c4ed6f4562683351bc5f06d710f058e03bf3->leave($__internal_bf2cefe50d892b52001ad2066498c4ed6f4562683351bc5f06d710f058e03bf3_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_69b7cf80ade4606e574807e35ec18b45769dd8d5098e081dbacb14f5f9cc42f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b7cf80ade4606e574807e35ec18b45769dd8d5098e081dbacb14f5f9cc42f8->enter($__internal_69b7cf80ade4606e574807e35ec18b45769dd8d5098e081dbacb14f5f9cc42f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_881dce21af77672c9b4da1df845c1ab0462210d08fdcf5ef848333e7d013af24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_881dce21af77672c9b4da1df845c1ab0462210d08fdcf5ef848333e7d013af24->enter($__internal_881dce21af77672c9b4da1df845c1ab0462210d08fdcf5ef848333e7d013af24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 24
        echo "            ";
        $context["favicon"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.favicon");
        // line 25
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["favicon"]) || array_key_exists("favicon", $context) ? $context["favicon"] : (function () { throw new Twig_Error_Runtime('Variable "favicon" does not exist.', 25, $this->getSourceContext()); })()), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["favicon"]) || array_key_exists("favicon", $context) ? $context["favicon"] : (function () { throw new Twig_Error_Runtime('Variable "favicon" does not exist.', 25, $this->getSourceContext()); })()), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_881dce21af77672c9b4da1df845c1ab0462210d08fdcf5ef848333e7d013af24->leave($__internal_881dce21af77672c9b4da1df845c1ab0462210d08fdcf5ef848333e7d013af24_prof);

        
        $__internal_69b7cf80ade4606e574807e35ec18b45769dd8d5098e081dbacb14f5f9cc42f8->leave($__internal_69b7cf80ade4606e574807e35ec18b45769dd8d5098e081dbacb14f5f9cc42f8_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_c3ea9803ff800a49b4a4c958974ab6a28043c2655b731b8daeb76da9a280aa08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ea9803ff800a49b4a4c958974ab6a28043c2655b731b8daeb76da9a280aa08->enter($__internal_c3ea9803ff800a49b4a4c958974ab6a28043c2655b731b8daeb76da9a280aa08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_df52582fe4675103f089a64720778a312957dbd0396d1b40f93c5cbb9f9d3a8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df52582fe4675103f089a64720778a312957dbd0396d1b40f93c5cbb9f9d3a8b->enter($__internal_df52582fe4675103f089a64720778a312957dbd0396d1b40f93c5cbb9f9d3a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 29
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 42
        echo "
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_df52582fe4675103f089a64720778a312957dbd0396d1b40f93c5cbb9f9d3a8b->leave($__internal_df52582fe4675103f089a64720778a312957dbd0396d1b40f93c5cbb9f9d3a8b_prof);

        
        $__internal_c3ea9803ff800a49b4a4c958974ab6a28043c2655b731b8daeb76da9a280aa08->leave($__internal_c3ea9803ff800a49b4a4c958974ab6a28043c2655b731b8daeb76da9a280aa08_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_eb7698363dc093daf6becb5cf269ac93a38747ffa9662ae63638adba6f7bfb6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb7698363dc093daf6becb5cf269ac93a38747ffa9662ae63638adba6f7bfb6f->enter($__internal_eb7698363dc093daf6becb5cf269ac93a38747ffa9662ae63638adba6f7bfb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_813403ef34fd70efb88c706cc0872e1abf1754940b473f347b436cb5a3b12f7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_813403ef34fd70efb88c706cc0872e1abf1754940b473f347b436cb5a3b12f7e->enter($__internal_813403ef34fd70efb88c706cc0872e1abf1754940b473f347b436cb5a3b12f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 30
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_813403ef34fd70efb88c706cc0872e1abf1754940b473f347b436cb5a3b12f7e->leave($__internal_813403ef34fd70efb88c706cc0872e1abf1754940b473f347b436cb5a3b12f7e_prof);

        
        $__internal_eb7698363dc093daf6becb5cf269ac93a38747ffa9662ae63638adba6f7bfb6f->leave($__internal_eb7698363dc093daf6becb5cf269ac93a38747ffa9662ae63638adba6f7bfb6f_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a070ee0bf433850532c3db25af615219a49b938b7c4bd5c98bd1fea0e931587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a070ee0bf433850532c3db25af615219a49b938b7c4bd5c98bd1fea0e931587->enter($__internal_0a070ee0bf433850532c3db25af615219a49b938b7c4bd5c98bd1fea0e931587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2695459b9dcf5f0d1b69261d393d0404a185c34d39ea061f19a398a7331d4dbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2695459b9dcf5f0d1b69261d393d0404a185c34d39ea061f19a398a7331d4dbb->enter($__internal_2695459b9dcf5f0d1b69261d393d0404a185c34d39ea061f19a398a7331d4dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 53, $this->getSourceContext()); })()), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 55
        $this->displayBlock('wrapper', $context, $blocks);
        // line 158
        echo "        </div>

        ";
        // line 160
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 161
        echo "
        ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 163
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "    </body>
    ";
        
        $__internal_2695459b9dcf5f0d1b69261d393d0404a185c34d39ea061f19a398a7331d4dbb->leave($__internal_2695459b9dcf5f0d1b69261d393d0404a185c34d39ea061f19a398a7331d4dbb_prof);

        
        $__internal_0a070ee0bf433850532c3db25af615219a49b938b7c4bd5c98bd1fea0e931587->leave($__internal_0a070ee0bf433850532c3db25af615219a49b938b7c4bd5c98bd1fea0e931587_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_60a857f004753f6f662c6d2c86025f5d57765575fbf50a29556a1f5532ae884f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60a857f004753f6f662c6d2c86025f5d57765575fbf50a29556a1f5532ae884f->enter($__internal_60a857f004753f6f662c6d2c86025f5d57765575fbf50a29556a1f5532ae884f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_f9bf649021e583b7025783f700c9353ef2ef92c17f70340a94ac03fecadb87a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9bf649021e583b7025783f700c9353ef2ef92c17f70340a94ac03fecadb87a6->enter($__internal_f9bf649021e583b7025783f700c9353ef2ef92c17f70340a94ac03fecadb87a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_f9bf649021e583b7025783f700c9353ef2ef92c17f70340a94ac03fecadb87a6->leave($__internal_f9bf649021e583b7025783f700c9353ef2ef92c17f70340a94ac03fecadb87a6_prof);

        
        $__internal_60a857f004753f6f662c6d2c86025f5d57765575fbf50a29556a1f5532ae884f->leave($__internal_60a857f004753f6f662c6d2c86025f5d57765575fbf50a29556a1f5532ae884f_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_2e5f91aa04ffa725850bc863c147d79a99a99994ab3d09df4eece77c2644385d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5f91aa04ffa725850bc863c147d79a99a99994ab3d09df4eece77c2644385d->enter($__internal_2e5f91aa04ffa725850bc863c147d79a99a99994ab3d09df4eece77c2644385d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_c021609fea4fd92e9c901ad2b81045a44fa1b41949dfcee542632213c33c9efd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c021609fea4fd92e9c901ad2b81045a44fa1b41949dfcee542632213c33c9efd->enter($__internal_c021609fea4fd92e9c901ad2b81045a44fa1b41949dfcee542632213c33c9efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_c021609fea4fd92e9c901ad2b81045a44fa1b41949dfcee542632213c33c9efd->leave($__internal_c021609fea4fd92e9c901ad2b81045a44fa1b41949dfcee542632213c33c9efd_prof);

        
        $__internal_2e5f91aa04ffa725850bc863c147d79a99a99994ab3d09df4eece77c2644385d->leave($__internal_2e5f91aa04ffa725850bc863c147d79a99a99994ab3d09df4eece77c2644385d_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_6a1ee4e71cebae674488681d6e7edfd8021f2bdb72a60022a84e851bfd9f5ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a1ee4e71cebae674488681d6e7edfd8021f2bdb72a60022a84e851bfd9f5ed7->enter($__internal_6a1ee4e71cebae674488681d6e7edfd8021f2bdb72a60022a84e851bfd9f5ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_88599631802d129c074bc109a843a0f8e1e0f9e187df905cccd372968dae0937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88599631802d129c074bc109a843a0f8e1e0f9e187df905cccd372968dae0937->enter($__internal_88599631802d129c074bc109a843a0f8e1e0f9e187df905cccd372968dae0937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 56
        echo "            <header class=\"main-header\">
            ";
        // line 57
        $this->displayBlock('header', $context, $blocks);
        // line 115
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 118
        $this->displayBlock('sidebar', $context, $blocks);
        // line 129
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 132
        $this->displayBlock('content', $context, $blocks);
        // line 156
        echo "            </div>
        ";
        
        $__internal_88599631802d129c074bc109a843a0f8e1e0f9e187df905cccd372968dae0937->leave($__internal_88599631802d129c074bc109a843a0f8e1e0f9e187df905cccd372968dae0937_prof);

        
        $__internal_6a1ee4e71cebae674488681d6e7edfd8021f2bdb72a60022a84e851bfd9f5ed7->leave($__internal_6a1ee4e71cebae674488681d6e7edfd8021f2bdb72a60022a84e851bfd9f5ed7_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_5201ab6349d7efff707f1a0a31a76860d5cf7d9f38fb5e5e36053527c67ed732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5201ab6349d7efff707f1a0a31a76860d5cf7d9f38fb5e5e36053527c67ed732->enter($__internal_5201ab6349d7efff707f1a0a31a76860d5cf7d9f38fb5e5e36053527c67ed732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_cb10320649ca4b844757d3469e85a61e25b5fec6dbab5b47a13fe9d00d8ea981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb10320649ca4b844757d3469e85a61e25b5fec6dbab5b47a13fe9d00d8ea981->enter($__internal_cb10320649ca4b844757d3469e85a61e25b5fec6dbab5b47a13fe9d00d8ea981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 58
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 64
        $this->displayBlock('header_logo', $context, $blocks);
        // line 69
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 72
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 112
        echo "                    </div>
                </nav>
            ";
        
        $__internal_cb10320649ca4b844757d3469e85a61e25b5fec6dbab5b47a13fe9d00d8ea981->leave($__internal_cb10320649ca4b844757d3469e85a61e25b5fec6dbab5b47a13fe9d00d8ea981_prof);

        
        $__internal_5201ab6349d7efff707f1a0a31a76860d5cf7d9f38fb5e5e36053527c67ed732->leave($__internal_5201ab6349d7efff707f1a0a31a76860d5cf7d9f38fb5e5e36053527c67ed732_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_be319128f31107b9a3a5599d4ceb83d0a2981b9b94a5c309b0da72fb7d47a27d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be319128f31107b9a3a5599d4ceb83d0a2981b9b94a5c309b0da72fb7d47a27d->enter($__internal_be319128f31107b9a3a5599d4ceb83d0a2981b9b94a5c309b0da72fb7d47a27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_382c92de8ecb6d058ff7fd0a572afa8ee9f982711e6b2adf4b439ecf187fd70f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382c92de8ecb6d058ff7fd0a572afa8ee9f982711e6b2adf4b439ecf187fd70f->enter($__internal_382c92de8ecb6d058ff7fd0a572afa8ee9f982711e6b2adf4b439ecf187fd70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 65
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                ";
        // line 66
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_382c92de8ecb6d058ff7fd0a572afa8ee9f982711e6b2adf4b439ecf187fd70f->leave($__internal_382c92de8ecb6d058ff7fd0a572afa8ee9f982711e6b2adf4b439ecf187fd70f_prof);

        
        $__internal_be319128f31107b9a3a5599d4ceb83d0a2981b9b94a5c309b0da72fb7d47a27d->leave($__internal_be319128f31107b9a3a5599d4ceb83d0a2981b9b94a5c309b0da72fb7d47a27d_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_aae36216ed57ae222028dd2e2c3dad56b477f2032b3ef865134e5144df7ded15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae36216ed57ae222028dd2e2c3dad56b477f2032b3ef865134e5144df7ded15->enter($__internal_aae36216ed57ae222028dd2e2c3dad56b477f2032b3ef865134e5144df7ded15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_5b3a626ad29e7af0a259a782afa863766c197b5b852028c65f75a2187ba5bdae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b3a626ad29e7af0a259a782afa863766c197b5b852028c65f75a2187ba5bdae->enter($__internal_5b3a626ad29e7af0a259a782afa863766c197b5b852028c65f75a2187ba5bdae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 73
        echo "                        ";
        $context["_logout_path"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getLogoutPath();
        // line 74
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                ";
        // line 76
        $this->displayBlock('user_menu', $context, $blocks);
        // line 109
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_5b3a626ad29e7af0a259a782afa863766c197b5b852028c65f75a2187ba5bdae->leave($__internal_5b3a626ad29e7af0a259a782afa863766c197b5b852028c65f75a2187ba5bdae_prof);

        
        $__internal_aae36216ed57ae222028dd2e2c3dad56b477f2032b3ef865134e5144df7ded15->leave($__internal_aae36216ed57ae222028dd2e2c3dad56b477f2032b3ef865134e5144df7ded15_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_ae1d54e8ce7f7a2d7aac88c0ca773eca620f6d4f01cf9a10e452cdab81052246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae1d54e8ce7f7a2d7aac88c0ca773eca620f6d4f01cf9a10e452cdab81052246->enter($__internal_ae1d54e8ce7f7a2d7aac88c0ca773eca620f6d4f01cf9a10e452cdab81052246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_b7909dd617bf086dc6eb70c3312faef7906afcb78a9fda2a0af8bb6066f529b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7909dd617bf086dc6eb70c3312faef7906afcb78a9fda2a0af8bb6066f529b9->enter($__internal_b7909dd617bf086dc6eb70c3312faef7906afcb78a9fda2a0af8bb6066f529b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 77
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>

                                    ";
        // line 79
        if ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), false)) : (false)) == false)) {
            // line 80
            echo "                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        ";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        } elseif ( !        // line 82
(isset($context["_logout_path"]) || array_key_exists("_logout_path", $context) ? $context["_logout_path"] : (function () { throw new Twig_Error_Runtime('Variable "_logout_path" does not exist.', 82, $this->getSourceContext()); })())) {
            // line 83
            echo "                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        ";
            // line 84
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 86
            echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                ";
            // line 89
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                ";
            // line 95
            $this->displayBlock('user_menu_dropdown', $context, $blocks);
            // line 105
            echo "                                            </ul>
                                        </div>
                                    ";
        }
        // line 108
        echo "                                ";
        
        $__internal_b7909dd617bf086dc6eb70c3312faef7906afcb78a9fda2a0af8bb6066f529b9->leave($__internal_b7909dd617bf086dc6eb70c3312faef7906afcb78a9fda2a0af8bb6066f529b9_prof);

        
        $__internal_ae1d54e8ce7f7a2d7aac88c0ca773eca620f6d4f01cf9a10e452cdab81052246->leave($__internal_ae1d54e8ce7f7a2d7aac88c0ca773eca620f6d4f01cf9a10e452cdab81052246_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_173cc2f7817211d796810da8d044bbf5410f489f74063ef4be136de0abe2798f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_173cc2f7817211d796810da8d044bbf5410f489f74063ef4be136de0abe2798f->enter($__internal_173cc2f7817211d796810da8d044bbf5410f489f74063ef4be136de0abe2798f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_bc7fe297dc18f47ccef0638fdc99647d9060406b7c42797b3bb1f67ec49d30af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc7fe297dc18f47ccef0638fdc99647d9060406b7c42797b3bb1f67ec49d30af->enter($__internal_bc7fe297dc18f47ccef0638fdc99647d9060406b7c42797b3bb1f67ec49d30af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        // line 96
        echo "                                                <li>
                                                    <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["_logout_path"]) || array_key_exists("_logout_path", $context) ? $context["_logout_path"] : (function () { throw new Twig_Error_Runtime('Variable "_logout_path" does not exist.', 97, $this->getSourceContext()); })()), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
        echo "</a>
                                                </li>
                                                ";
        // line 99
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PREVIOUS_ADMIN")) {
            // line 100
            echo "                                                    <li>
                                                        <a href=\"?_switch_user=_exit\"><i class=\"fa fa-sign-out\"></i> ";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.exit_impersonation", array(), "EasyAdminBundle"), "html", null, true);
            echo "</a>
                                                    </li>
                                                ";
        }
        // line 104
        echo "                                                ";
        
        $__internal_bc7fe297dc18f47ccef0638fdc99647d9060406b7c42797b3bb1f67ec49d30af->leave($__internal_bc7fe297dc18f47ccef0638fdc99647d9060406b7c42797b3bb1f67ec49d30af_prof);

        
        $__internal_173cc2f7817211d796810da8d044bbf5410f489f74063ef4be136de0abe2798f->leave($__internal_173cc2f7817211d796810da8d044bbf5410f489f74063ef4be136de0abe2798f_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e2a840747233f97de2fadd88aa536956ba8f96490a2ce07d6ca903864c8e9693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2a840747233f97de2fadd88aa536956ba8f96490a2ce07d6ca903864c8e9693->enter($__internal_e2a840747233f97de2fadd88aa536956ba8f96490a2ce07d6ca903864c8e9693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_475fe404b44c67b512d84a04bc200af185a4e1e856f4e2e1a2522b845ab4930e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_475fe404b44c67b512d84a04bc200af185a4e1e856f4e2e1a2522b845ab4930e->enter($__internal_475fe404b44c67b512d84a04bc200af185a4e1e856f4e2e1a2522b845ab4930e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_475fe404b44c67b512d84a04bc200af185a4e1e856f4e2e1a2522b845ab4930e->leave($__internal_475fe404b44c67b512d84a04bc200af185a4e1e856f4e2e1a2522b845ab4930e_prof);

        
        $__internal_e2a840747233f97de2fadd88aa536956ba8f96490a2ce07d6ca903864c8e9693->leave($__internal_e2a840747233f97de2fadd88aa536956ba8f96490a2ce07d6ca903864c8e9693_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_64910d8c0440e241435e81e7d8d2985b0a2a51849b79ebb1e26e504c8fd5d447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64910d8c0440e241435e81e7d8d2985b0a2a51849b79ebb1e26e504c8fd5d447->enter($__internal_64910d8c0440e241435e81e7d8d2985b0a2a51849b79ebb1e26e504c8fd5d447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_fc391751e989c7ba225f466f896781aa580f19c57dfd1aff522e7a527b680c2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc391751e989c7ba225f466f896781aa580f19c57dfd1aff522e7a527b680c2a->enter($__internal_fc391751e989c7ba225f466f896781aa580f19c57dfd1aff522e7a527b680c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 122, $this->getSourceContext()); })()), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_fc391751e989c7ba225f466f896781aa580f19c57dfd1aff522e7a527b680c2a->leave($__internal_fc391751e989c7ba225f466f896781aa580f19c57dfd1aff522e7a527b680c2a_prof);

        
        $__internal_64910d8c0440e241435e81e7d8d2985b0a2a51849b79ebb1e26e504c8fd5d447->leave($__internal_64910d8c0440e241435e81e7d8d2985b0a2a51849b79ebb1e26e504c8fd5d447_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_640bf85c3824ab185e99cd6b247632b70d013c6c546173617388ad31a26ceb2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_640bf85c3824ab185e99cd6b247632b70d013c6c546173617388ad31a26ceb2e->enter($__internal_640bf85c3824ab185e99cd6b247632b70d013c6c546173617388ad31a26ceb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d4ecfc482acb3935b9d5f15d52621b2c504892858bc0e81849f2610b4930af1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4ecfc482acb3935b9d5f15d52621b2c504892858bc0e81849f2610b4930af1c->enter($__internal_d4ecfc482acb3935b9d5f15d52621b2c504892858bc0e81849f2610b4930af1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 133
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 136
        echo "
                <section class=\"content-header\">
                ";
        // line 138
        $this->displayBlock('content_header', $context, $blocks);
        // line 141
        echo "                ";
        $this->displayBlock('content_help', $context, $blocks);
        // line 150
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 153
        $this->displayBlock('main', $context, $blocks);
        // line 154
        echo "                </section>
            ";
        
        $__internal_d4ecfc482acb3935b9d5f15d52621b2c504892858bc0e81849f2610b4930af1c->leave($__internal_d4ecfc482acb3935b9d5f15d52621b2c504892858bc0e81849f2610b4930af1c_prof);

        
        $__internal_640bf85c3824ab185e99cd6b247632b70d013c6c546173617388ad31a26ceb2e->leave($__internal_640bf85c3824ab185e99cd6b247632b70d013c6c546173617388ad31a26ceb2e_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_4c0bfbfac98f11f728b0d0797ce430f2c59fd4882d38b282f3fc144546580723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c0bfbfac98f11f728b0d0797ce430f2c59fd4882d38b282f3fc144546580723->enter($__internal_4c0bfbfac98f11f728b0d0797ce430f2c59fd4882d38b282f3fc144546580723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_8d704247079dcd5e506fdab924d7f3f1f3200714e7ee7562adf01618bc71a803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d704247079dcd5e506fdab924d7f3f1f3200714e7ee7562adf01618bc71a803->enter($__internal_8d704247079dcd5e506fdab924d7f3f1f3200714e7ee7562adf01618bc71a803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 134, $this->getSourceContext()); })()), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_8d704247079dcd5e506fdab924d7f3f1f3200714e7ee7562adf01618bc71a803->leave($__internal_8d704247079dcd5e506fdab924d7f3f1f3200714e7ee7562adf01618bc71a803_prof);

        
        $__internal_4c0bfbfac98f11f728b0d0797ce430f2c59fd4882d38b282f3fc144546580723->leave($__internal_4c0bfbfac98f11f728b0d0797ce430f2c59fd4882d38b282f3fc144546580723_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_074777dc109e6e8b07c05f8bc040af4ab86d38cba79d91dcba39f80f2494ce54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_074777dc109e6e8b07c05f8bc040af4ab86d38cba79d91dcba39f80f2494ce54->enter($__internal_074777dc109e6e8b07c05f8bc040af4ab86d38cba79d91dcba39f80f2494ce54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_fa7f7fd4a7bbbce89e6e8e6fa63c8ee76895a2bdc13de73aeba995e9d02fd16e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa7f7fd4a7bbbce89e6e8e6fa63c8ee76895a2bdc13de73aeba995e9d02fd16e->enter($__internal_fa7f7fd4a7bbbce89e6e8e6fa63c8ee76895a2bdc13de73aeba995e9d02fd16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_fa7f7fd4a7bbbce89e6e8e6fa63c8ee76895a2bdc13de73aeba995e9d02fd16e->leave($__internal_fa7f7fd4a7bbbce89e6e8e6fa63c8ee76895a2bdc13de73aeba995e9d02fd16e_prof);

        
        $__internal_074777dc109e6e8b07c05f8bc040af4ab86d38cba79d91dcba39f80f2494ce54->leave($__internal_074777dc109e6e8b07c05f8bc040af4ab86d38cba79d91dcba39f80f2494ce54_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_820927a445e5a7ee6f750dd3880f15d931442cf3ae3f6cdcca824e16df3cec4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_820927a445e5a7ee6f750dd3880f15d931442cf3ae3f6cdcca824e16df3cec4e->enter($__internal_820927a445e5a7ee6f750dd3880f15d931442cf3ae3f6cdcca824e16df3cec4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_0ce5a881d739a028a45d387128f7c66896acbcc725c143665de0bf1e59773b03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ce5a881d739a028a45d387128f7c66896acbcc725c143665de0bf1e59773b03->enter($__internal_0ce5a881d739a028a45d387128f7c66896acbcc725c143665de0bf1e59773b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_0ce5a881d739a028a45d387128f7c66896acbcc725c143665de0bf1e59773b03->leave($__internal_0ce5a881d739a028a45d387128f7c66896acbcc725c143665de0bf1e59773b03_prof);

        
        $__internal_820927a445e5a7ee6f750dd3880f15d931442cf3ae3f6cdcca824e16df3cec4e->leave($__internal_820927a445e5a7ee6f750dd3880f15d931442cf3ae3f6cdcca824e16df3cec4e_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_97df77a41c161e7f3bbfb61c3aafe59b3466b31a5a79d6b0beb9b1f92e9ce851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97df77a41c161e7f3bbfb61c3aafe59b3466b31a5a79d6b0beb9b1f92e9ce851->enter($__internal_97df77a41c161e7f3bbfb61c3aafe59b3466b31a5a79d6b0beb9b1f92e9ce851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_c3284906418960f299a5058ff1515f262ace2177bab25bcf6d88332f3975118c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3284906418960f299a5058ff1515f262ace2177bab25bcf6d88332f3975118c->enter($__internal_c3284906418960f299a5058ff1515f262ace2177bab25bcf6d88332f3975118c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        // line 142
        echo "                    ";
        if ((array_key_exists("_entity_config", $context) && ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 142, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 142, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array"), false)) : (false)))) {
            // line 143
            echo "                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                ";
            // line 145
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 145, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 145, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array"), "help", array(), "array"));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 149
        echo "                ";
        
        $__internal_c3284906418960f299a5058ff1515f262ace2177bab25bcf6d88332f3975118c->leave($__internal_c3284906418960f299a5058ff1515f262ace2177bab25bcf6d88332f3975118c_prof);

        
        $__internal_97df77a41c161e7f3bbfb61c3aafe59b3466b31a5a79d6b0beb9b1f92e9ce851->leave($__internal_97df77a41c161e7f3bbfb61c3aafe59b3466b31a5a79d6b0beb9b1f92e9ce851_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_212db519548069c68cf5595086747f3db13db9a0e03cd1e843c74b882cba42d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_212db519548069c68cf5595086747f3db13db9a0e03cd1e843c74b882cba42d4->enter($__internal_212db519548069c68cf5595086747f3db13db9a0e03cd1e843c74b882cba42d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_600c75e8823449e4c31b5db0d85f4bdd3ae323f1f0b6271f6cf10e496a6381fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_600c75e8823449e4c31b5db0d85f4bdd3ae323f1f0b6271f6cf10e496a6381fe->enter($__internal_600c75e8823449e4c31b5db0d85f4bdd3ae323f1f0b6271f6cf10e496a6381fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_600c75e8823449e4c31b5db0d85f4bdd3ae323f1f0b6271f6cf10e496a6381fe->leave($__internal_600c75e8823449e4c31b5db0d85f4bdd3ae323f1f0b6271f6cf10e496a6381fe_prof);

        
        $__internal_212db519548069c68cf5595086747f3db13db9a0e03cd1e843c74b882cba42d4->leave($__internal_212db519548069c68cf5595086747f3db13db9a0e03cd1e843c74b882cba42d4_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_16b1d9bb82321b0ded2ee9c2e7ec4d223a5ac3abeb117aeb2efb7f715f305082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16b1d9bb82321b0ded2ee9c2e7ec4d223a5ac3abeb117aeb2efb7f715f305082->enter($__internal_16b1d9bb82321b0ded2ee9c2e7ec4d223a5ac3abeb117aeb2efb7f715f305082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_fd7c8ac0027b89961266504b1285bcdb91703a9d248b29da91f027f18719bd23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd7c8ac0027b89961266504b1285bcdb91703a9d248b29da91f027f18719bd23->enter($__internal_fd7c8ac0027b89961266504b1285bcdb91703a9d248b29da91f027f18719bd23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_fd7c8ac0027b89961266504b1285bcdb91703a9d248b29da91f027f18719bd23->leave($__internal_fd7c8ac0027b89961266504b1285bcdb91703a9d248b29da91f027f18719bd23_prof);

        
        $__internal_16b1d9bb82321b0ded2ee9c2e7ec4d223a5ac3abeb117aeb2efb7f715f305082->leave($__internal_16b1d9bb82321b0ded2ee9c2e7ec4d223a5ac3abeb117aeb2efb7f715f305082_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  788 => 160,  771 => 153,  761 => 149,  754 => 145,  750 => 143,  747 => 142,  738 => 141,  709 => 139,  700 => 138,  687 => 134,  678 => 133,  667 => 154,  665 => 153,  660 => 150,  657 => 141,  655 => 138,  651 => 136,  648 => 133,  639 => 132,  628 => 125,  626 => 122,  624 => 121,  615 => 120,  604 => 127,  602 => 120,  599 => 119,  590 => 118,  580 => 104,  574 => 101,  571 => 100,  569 => 99,  562 => 97,  559 => 96,  550 => 95,  540 => 108,  535 => 105,  533 => 95,  524 => 89,  519 => 86,  514 => 84,  511 => 83,  509 => 82,  505 => 81,  502 => 80,  500 => 79,  494 => 77,  485 => 76,  473 => 109,  471 => 76,  467 => 74,  464 => 73,  455 => 72,  442 => 66,  433 => 65,  424 => 64,  412 => 112,  410 => 72,  405 => 69,  403 => 64,  396 => 60,  392 => 58,  383 => 57,  372 => 156,  370 => 132,  365 => 129,  363 => 118,  358 => 115,  356 => 57,  353 => 56,  344 => 55,  311 => 53,  300 => 165,  291 => 163,  287 => 162,  284 => 161,  282 => 160,  278 => 158,  276 => 55,  266 => 53,  257 => 52,  236 => 30,  227 => 29,  215 => 43,  212 => 42,  209 => 29,  200 => 28,  185 => 25,  182 => 24,  173 => 23,  160 => 15,  154 => 13,  145 => 12,  127 => 10,  116 => 167,  114 => 52,  110 => 50,  105 => 48,  100 => 47,  98 => 46,  95 => 45,  93 => 28,  90 => 27,  88 => 23,  85 => 22,  76 => 20,  72 => 19,  69 => 18,  67 => 12,  62 => 10,  51 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale|split('_')|first|default('en') }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>

        {% block head_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}\">
            <style>
                {{ easyadmin_config('_internal.custom_css')|raw }}
            </style>
        {% endblock %}

        {% for css_asset in easyadmin_config('design.assets.css') %}
            <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
        {% endfor %}

        {% block head_favicon %}
            {% set favicon = easyadmin_config('design.assets.favicon') %}
            <link rel=\"icon\" type=\"{{ favicon.mime_type }}\" href=\"{{ asset(favicon.path) }}\" />
        {% endblock %}

        {% block head_javascript %}
            {% block adminlte_options %}
                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            {% endblock %}

            <script src=\"{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}\"></script>
        {% endblock head_javascript %}

        {% if easyadmin_config('design.rtl') %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/bootstrap-rtl.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/adminlte-rtl.min.css') }}\">
        {% endif %}
    </head>

    {% block body %}
    <body id=\"{% block body_id %}{% endblock %}\" class=\"easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}\">
        <div class=\"wrapper\">
        {% block wrapper %}
            <header class=\"main-header\">
            {% block header %}
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>
                    </a>

                    <div id=\"header-logo\">
                        {% block header_logo %}
                            <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                                {{ easyadmin_config('site_name')|raw }}
                            </a>
                        {% endblock header_logo %}
                    </div>

                    <div class=\"navbar-custom-menu\">
                    {% block header_custom_menu %}
                        {% set _logout_path = easyadmin_logout_path() %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                {% block user_menu %}
                                    <span class=\"sr-only\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>

                                    {% if app.user|default(false) == false %}
                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
                                    {% elseif not _logout_path %}
                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                    {% else %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                {% block user_menu_dropdown %}
                                                <li>
                                                    <a href=\"{{ _logout_path }}\"><i class=\"fa fa-sign-out\"></i> {{ 'user.signout'|trans(domain = 'EasyAdminBundle') }}</a>
                                                </li>
                                                {% if is_granted('ROLE_PREVIOUS_ADMIN') %}
                                                    <li>
                                                        <a href=\"?_switch_user=_exit\"><i class=\"fa fa-sign-out\"></i> {{ 'user.exit_impersonation'|trans(domain = 'EasyAdminBundle') }}</a>
                                                    </li>
                                                {% endif %}
                                                {% endblock user_menu_dropdown %}
                                            </ul>
                                        </div>
                                    {% endif %}
                                {% endblock user_menu %}
                            </li>
                        </ul>
                    {% endblock header_custom_menu %}
                    </div>
                </nav>
            {% endblock header %}
            </header>

            <aside class=\"main-sidebar\">
            {% block sidebar %}
                <section class=\"sidebar\">
                    {% block main_menu_wrapper %}
                        {{ include([
                            _entity_config is defined ? _entity_config.templates.menu,
                            easyadmin_config('design.templates.menu'),
                            '@EasyAdmin/default/menu.html.twig'
                        ]) }}
                    {% endblock main_menu_wrapper %}
                </section>
            {% endblock sidebar %}
            </aside>

            <div class=\"content-wrapper\">
            {% block content %}
                {% block flash_messages %}
                    {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}
                {% endblock flash_messages %}

                <section class=\"content-header\">
                {% block content_header %}
                    <h1 class=\"title\">{% block content_title %}{% endblock %}</h1>
                {% endblock content_header %}
                {% block content_help %}
                    {% if _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}
                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                {{ _entity_config[app.request.query.get('action')]['help']|trans|raw }}
                            </div>
                        </div>
                    {% endif %}
                {% endblock content_help %}
                </section>

                <section id=\"main\" class=\"content\">
                    {% block main %}{% endblock %}
                </section>
            {% endblock content %}
            </div>
        {% endblock wrapper %}
        </div>

        {% block body_javascript %}{% endblock body_javascript %}

        {% for js_asset in easyadmin_config('design.assets.js') %}
            <script src=\"{{ asset(js_asset) }}\"></script>
        {% endfor %}
    </body>
    {% endblock body %}
</html>
", "@EasyAdmin/default/layout.html.twig", "C:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\layout.html.twig");
    }
}
