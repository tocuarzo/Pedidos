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
        $__internal_5b96b554189d3d864cee7295b0b5893686e5734e31a0ba798b02e2a1df195f26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b96b554189d3d864cee7295b0b5893686e5734e31a0ba798b02e2a1df195f26->enter($__internal_5b96b554189d3d864cee7295b0b5893686e5734e31a0ba798b02e2a1df195f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        $__internal_402b08f0711338c95d353f4c44c748215713b546823e4988bc9f058bf34f09f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_402b08f0711338c95d353f4c44c748215713b546823e4988bc9f058bf34f09f9->enter($__internal_402b08f0711338c95d353f4c44c748215713b546823e4988bc9f058bf34f09f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

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
        
        $__internal_5b96b554189d3d864cee7295b0b5893686e5734e31a0ba798b02e2a1df195f26->leave($__internal_5b96b554189d3d864cee7295b0b5893686e5734e31a0ba798b02e2a1df195f26_prof);

        
        $__internal_402b08f0711338c95d353f4c44c748215713b546823e4988bc9f058bf34f09f9->leave($__internal_402b08f0711338c95d353f4c44c748215713b546823e4988bc9f058bf34f09f9_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_06527e41abfe2a1b4273308c44d033dac14072ec000b5d0ac419c85026fe9d77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06527e41abfe2a1b4273308c44d033dac14072ec000b5d0ac419c85026fe9d77->enter($__internal_06527e41abfe2a1b4273308c44d033dac14072ec000b5d0ac419c85026fe9d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_8a15042300b1cbc48f4042c657fffe5dc77da8094d59b46c465eff25d72a74b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a15042300b1cbc48f4042c657fffe5dc77da8094d59b46c465eff25d72a74b5->enter($__internal_8a15042300b1cbc48f4042c657fffe5dc77da8094d59b46c465eff25d72a74b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_8a15042300b1cbc48f4042c657fffe5dc77da8094d59b46c465eff25d72a74b5->leave($__internal_8a15042300b1cbc48f4042c657fffe5dc77da8094d59b46c465eff25d72a74b5_prof);

        
        $__internal_06527e41abfe2a1b4273308c44d033dac14072ec000b5d0ac419c85026fe9d77->leave($__internal_06527e41abfe2a1b4273308c44d033dac14072ec000b5d0ac419c85026fe9d77_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_2f0e3ccbd6f641d1e866fbfb8b7a24cb9518d12967dcf9902d69a7dfc47702f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f0e3ccbd6f641d1e866fbfb8b7a24cb9518d12967dcf9902d69a7dfc47702f1->enter($__internal_2f0e3ccbd6f641d1e866fbfb8b7a24cb9518d12967dcf9902d69a7dfc47702f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_365716d8dc0ad78aca6db6d7a102d3237d90e82f2cd7b87084fa216e9f36a8ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_365716d8dc0ad78aca6db6d7a102d3237d90e82f2cd7b87084fa216e9f36a8ad->enter($__internal_365716d8dc0ad78aca6db6d7a102d3237d90e82f2cd7b87084fa216e9f36a8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

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
        
        $__internal_365716d8dc0ad78aca6db6d7a102d3237d90e82f2cd7b87084fa216e9f36a8ad->leave($__internal_365716d8dc0ad78aca6db6d7a102d3237d90e82f2cd7b87084fa216e9f36a8ad_prof);

        
        $__internal_2f0e3ccbd6f641d1e866fbfb8b7a24cb9518d12967dcf9902d69a7dfc47702f1->leave($__internal_2f0e3ccbd6f641d1e866fbfb8b7a24cb9518d12967dcf9902d69a7dfc47702f1_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_73a7115dad4893020571c77c59ce590a20ef72f802d21f09dcb894fc6171e6cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73a7115dad4893020571c77c59ce590a20ef72f802d21f09dcb894fc6171e6cb->enter($__internal_73a7115dad4893020571c77c59ce590a20ef72f802d21f09dcb894fc6171e6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_d9a7b936a422f0a0d2ba098a2e2d8cf63dcbb85aa07a37f086ad3271bb8ffdaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9a7b936a422f0a0d2ba098a2e2d8cf63dcbb85aa07a37f086ad3271bb8ffdaf->enter($__internal_d9a7b936a422f0a0d2ba098a2e2d8cf63dcbb85aa07a37f086ad3271bb8ffdaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

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
        
        $__internal_d9a7b936a422f0a0d2ba098a2e2d8cf63dcbb85aa07a37f086ad3271bb8ffdaf->leave($__internal_d9a7b936a422f0a0d2ba098a2e2d8cf63dcbb85aa07a37f086ad3271bb8ffdaf_prof);

        
        $__internal_73a7115dad4893020571c77c59ce590a20ef72f802d21f09dcb894fc6171e6cb->leave($__internal_73a7115dad4893020571c77c59ce590a20ef72f802d21f09dcb894fc6171e6cb_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_4a0ae906601031f52cb02a830911cfdcbed52e3e06cb1641a7daf9785ae1c09b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a0ae906601031f52cb02a830911cfdcbed52e3e06cb1641a7daf9785ae1c09b->enter($__internal_4a0ae906601031f52cb02a830911cfdcbed52e3e06cb1641a7daf9785ae1c09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_1565df452a59cdb563067bc90610ca7e5930e268d7270a788c760acc06ed1655 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1565df452a59cdb563067bc90610ca7e5930e268d7270a788c760acc06ed1655->enter($__internal_1565df452a59cdb563067bc90610ca7e5930e268d7270a788c760acc06ed1655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

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
        
        $__internal_1565df452a59cdb563067bc90610ca7e5930e268d7270a788c760acc06ed1655->leave($__internal_1565df452a59cdb563067bc90610ca7e5930e268d7270a788c760acc06ed1655_prof);

        
        $__internal_4a0ae906601031f52cb02a830911cfdcbed52e3e06cb1641a7daf9785ae1c09b->leave($__internal_4a0ae906601031f52cb02a830911cfdcbed52e3e06cb1641a7daf9785ae1c09b_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_a6bd5f324b2a6f3e84a5dc848d027f4b91103a70c1522a146c94da0dabc5d0c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6bd5f324b2a6f3e84a5dc848d027f4b91103a70c1522a146c94da0dabc5d0c0->enter($__internal_a6bd5f324b2a6f3e84a5dc848d027f4b91103a70c1522a146c94da0dabc5d0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_749ccfd1590a6f7c86bd4849f4d7031eab49cfe020160b6a458131a07dc4a19b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_749ccfd1590a6f7c86bd4849f4d7031eab49cfe020160b6a458131a07dc4a19b->enter($__internal_749ccfd1590a6f7c86bd4849f4d7031eab49cfe020160b6a458131a07dc4a19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

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
        
        $__internal_749ccfd1590a6f7c86bd4849f4d7031eab49cfe020160b6a458131a07dc4a19b->leave($__internal_749ccfd1590a6f7c86bd4849f4d7031eab49cfe020160b6a458131a07dc4a19b_prof);

        
        $__internal_a6bd5f324b2a6f3e84a5dc848d027f4b91103a70c1522a146c94da0dabc5d0c0->leave($__internal_a6bd5f324b2a6f3e84a5dc848d027f4b91103a70c1522a146c94da0dabc5d0c0_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_c24426ff4bdbcc6b66c90ad9c566bf2972df26fcf8db8043cbada86fa02d734e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24426ff4bdbcc6b66c90ad9c566bf2972df26fcf8db8043cbada86fa02d734e->enter($__internal_c24426ff4bdbcc6b66c90ad9c566bf2972df26fcf8db8043cbada86fa02d734e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_716ea2fc75624016084c23423fe5b036bb8472ebc0bc8739c9a92564ca884160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_716ea2fc75624016084c23423fe5b036bb8472ebc0bc8739c9a92564ca884160->enter($__internal_716ea2fc75624016084c23423fe5b036bb8472ebc0bc8739c9a92564ca884160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_716ea2fc75624016084c23423fe5b036bb8472ebc0bc8739c9a92564ca884160->leave($__internal_716ea2fc75624016084c23423fe5b036bb8472ebc0bc8739c9a92564ca884160_prof);

        
        $__internal_c24426ff4bdbcc6b66c90ad9c566bf2972df26fcf8db8043cbada86fa02d734e->leave($__internal_c24426ff4bdbcc6b66c90ad9c566bf2972df26fcf8db8043cbada86fa02d734e_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_d74bddba70882da4998b67f8ada6e438e1204d715d112f477e932d438d5edcc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d74bddba70882da4998b67f8ada6e438e1204d715d112f477e932d438d5edcc6->enter($__internal_d74bddba70882da4998b67f8ada6e438e1204d715d112f477e932d438d5edcc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_99888c357548373a0857b2a96417b1de15df2b9513586b08481f9045cd5c4260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99888c357548373a0857b2a96417b1de15df2b9513586b08481f9045cd5c4260->enter($__internal_99888c357548373a0857b2a96417b1de15df2b9513586b08481f9045cd5c4260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_99888c357548373a0857b2a96417b1de15df2b9513586b08481f9045cd5c4260->leave($__internal_99888c357548373a0857b2a96417b1de15df2b9513586b08481f9045cd5c4260_prof);

        
        $__internal_d74bddba70882da4998b67f8ada6e438e1204d715d112f477e932d438d5edcc6->leave($__internal_d74bddba70882da4998b67f8ada6e438e1204d715d112f477e932d438d5edcc6_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_7208821a2f3e998d8ee60eec4ff08c7c93b6ea6c056c1c232397c0ceb4a75e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7208821a2f3e998d8ee60eec4ff08c7c93b6ea6c056c1c232397c0ceb4a75e70->enter($__internal_7208821a2f3e998d8ee60eec4ff08c7c93b6ea6c056c1c232397c0ceb4a75e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_f04e3ef3831a02ad6427ca06726df3028b7756cb735dc16794e6b70c7758db5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f04e3ef3831a02ad6427ca06726df3028b7756cb735dc16794e6b70c7758db5a->enter($__internal_f04e3ef3831a02ad6427ca06726df3028b7756cb735dc16794e6b70c7758db5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_f04e3ef3831a02ad6427ca06726df3028b7756cb735dc16794e6b70c7758db5a->leave($__internal_f04e3ef3831a02ad6427ca06726df3028b7756cb735dc16794e6b70c7758db5a_prof);

        
        $__internal_7208821a2f3e998d8ee60eec4ff08c7c93b6ea6c056c1c232397c0ceb4a75e70->leave($__internal_7208821a2f3e998d8ee60eec4ff08c7c93b6ea6c056c1c232397c0ceb4a75e70_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_6175fbe37aa5a5ad966902c4579a3d36edceff22817a2a8d4c80f6fa2862104f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6175fbe37aa5a5ad966902c4579a3d36edceff22817a2a8d4c80f6fa2862104f->enter($__internal_6175fbe37aa5a5ad966902c4579a3d36edceff22817a2a8d4c80f6fa2862104f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_8046b6ea32e716df828e2a52f0d590d91b377cfa11976dcc22c86913eca71f7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8046b6ea32e716df828e2a52f0d590d91b377cfa11976dcc22c86913eca71f7b->enter($__internal_8046b6ea32e716df828e2a52f0d590d91b377cfa11976dcc22c86913eca71f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

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
        
        $__internal_8046b6ea32e716df828e2a52f0d590d91b377cfa11976dcc22c86913eca71f7b->leave($__internal_8046b6ea32e716df828e2a52f0d590d91b377cfa11976dcc22c86913eca71f7b_prof);

        
        $__internal_6175fbe37aa5a5ad966902c4579a3d36edceff22817a2a8d4c80f6fa2862104f->leave($__internal_6175fbe37aa5a5ad966902c4579a3d36edceff22817a2a8d4c80f6fa2862104f_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_cb89f318ecaec9dcb41b036647d9ed28d1f2de66400958347052bc1b985c098e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb89f318ecaec9dcb41b036647d9ed28d1f2de66400958347052bc1b985c098e->enter($__internal_cb89f318ecaec9dcb41b036647d9ed28d1f2de66400958347052bc1b985c098e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_58de5914753eb14df80c498b5a3057c1d6b60eaf2f7232dbf2faf4f082e2f949 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58de5914753eb14df80c498b5a3057c1d6b60eaf2f7232dbf2faf4f082e2f949->enter($__internal_58de5914753eb14df80c498b5a3057c1d6b60eaf2f7232dbf2faf4f082e2f949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_58de5914753eb14df80c498b5a3057c1d6b60eaf2f7232dbf2faf4f082e2f949->leave($__internal_58de5914753eb14df80c498b5a3057c1d6b60eaf2f7232dbf2faf4f082e2f949_prof);

        
        $__internal_cb89f318ecaec9dcb41b036647d9ed28d1f2de66400958347052bc1b985c098e->leave($__internal_cb89f318ecaec9dcb41b036647d9ed28d1f2de66400958347052bc1b985c098e_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_4f80e9511263680663d53bb9a02aac0f725cbf8f75106fa17662938ae6687bfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f80e9511263680663d53bb9a02aac0f725cbf8f75106fa17662938ae6687bfa->enter($__internal_4f80e9511263680663d53bb9a02aac0f725cbf8f75106fa17662938ae6687bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_eb9bf89abbac7e0412791625ec8f956fa822992c79654127da30912412852d04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb9bf89abbac7e0412791625ec8f956fa822992c79654127da30912412852d04->enter($__internal_eb9bf89abbac7e0412791625ec8f956fa822992c79654127da30912412852d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

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
        
        $__internal_eb9bf89abbac7e0412791625ec8f956fa822992c79654127da30912412852d04->leave($__internal_eb9bf89abbac7e0412791625ec8f956fa822992c79654127da30912412852d04_prof);

        
        $__internal_4f80e9511263680663d53bb9a02aac0f725cbf8f75106fa17662938ae6687bfa->leave($__internal_4f80e9511263680663d53bb9a02aac0f725cbf8f75106fa17662938ae6687bfa_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_51a6cafca6bd3f0ec57a1d95c7cbcd63608cc74316b976417df846e38acdb8da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a6cafca6bd3f0ec57a1d95c7cbcd63608cc74316b976417df846e38acdb8da->enter($__internal_51a6cafca6bd3f0ec57a1d95c7cbcd63608cc74316b976417df846e38acdb8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_3fbb8501f4cf5fdbb23690b546d8e45adcb313e5759527fd08fb003dec692284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fbb8501f4cf5fdbb23690b546d8e45adcb313e5759527fd08fb003dec692284->enter($__internal_3fbb8501f4cf5fdbb23690b546d8e45adcb313e5759527fd08fb003dec692284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

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
        
        $__internal_3fbb8501f4cf5fdbb23690b546d8e45adcb313e5759527fd08fb003dec692284->leave($__internal_3fbb8501f4cf5fdbb23690b546d8e45adcb313e5759527fd08fb003dec692284_prof);

        
        $__internal_51a6cafca6bd3f0ec57a1d95c7cbcd63608cc74316b976417df846e38acdb8da->leave($__internal_51a6cafca6bd3f0ec57a1d95c7cbcd63608cc74316b976417df846e38acdb8da_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_ee61389b0bcc8eb8ce42c02469f57ed3c47e30af901e2ca685163af13b4f79db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee61389b0bcc8eb8ce42c02469f57ed3c47e30af901e2ca685163af13b4f79db->enter($__internal_ee61389b0bcc8eb8ce42c02469f57ed3c47e30af901e2ca685163af13b4f79db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_4d798d5676f017a97ce52326fd713d0e0f809252e4353b4cd955c1531d504812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d798d5676f017a97ce52326fd713d0e0f809252e4353b4cd955c1531d504812->enter($__internal_4d798d5676f017a97ce52326fd713d0e0f809252e4353b4cd955c1531d504812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

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
        
        $__internal_4d798d5676f017a97ce52326fd713d0e0f809252e4353b4cd955c1531d504812->leave($__internal_4d798d5676f017a97ce52326fd713d0e0f809252e4353b4cd955c1531d504812_prof);

        
        $__internal_ee61389b0bcc8eb8ce42c02469f57ed3c47e30af901e2ca685163af13b4f79db->leave($__internal_ee61389b0bcc8eb8ce42c02469f57ed3c47e30af901e2ca685163af13b4f79db_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_af06c60d86d4cbb69fc0c0eb4b458adb682e714804b780edcc947e930792ed0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af06c60d86d4cbb69fc0c0eb4b458adb682e714804b780edcc947e930792ed0d->enter($__internal_af06c60d86d4cbb69fc0c0eb4b458adb682e714804b780edcc947e930792ed0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_93c9faf8f9b2f3b9800253f0d0ac873febd4c12b8a89b2c3698615e735a71769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93c9faf8f9b2f3b9800253f0d0ac873febd4c12b8a89b2c3698615e735a71769->enter($__internal_93c9faf8f9b2f3b9800253f0d0ac873febd4c12b8a89b2c3698615e735a71769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

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
        
        $__internal_93c9faf8f9b2f3b9800253f0d0ac873febd4c12b8a89b2c3698615e735a71769->leave($__internal_93c9faf8f9b2f3b9800253f0d0ac873febd4c12b8a89b2c3698615e735a71769_prof);

        
        $__internal_af06c60d86d4cbb69fc0c0eb4b458adb682e714804b780edcc947e930792ed0d->leave($__internal_af06c60d86d4cbb69fc0c0eb4b458adb682e714804b780edcc947e930792ed0d_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_96c03cc47de301af49de48da76b290c277451b1237f85405cfb531ebb39b4792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c03cc47de301af49de48da76b290c277451b1237f85405cfb531ebb39b4792->enter($__internal_96c03cc47de301af49de48da76b290c277451b1237f85405cfb531ebb39b4792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_8736109c694314677a16c6c20f77b83188bdce267590603be87924dd88307e90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8736109c694314677a16c6c20f77b83188bdce267590603be87924dd88307e90->enter($__internal_8736109c694314677a16c6c20f77b83188bdce267590603be87924dd88307e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_8736109c694314677a16c6c20f77b83188bdce267590603be87924dd88307e90->leave($__internal_8736109c694314677a16c6c20f77b83188bdce267590603be87924dd88307e90_prof);

        
        $__internal_96c03cc47de301af49de48da76b290c277451b1237f85405cfb531ebb39b4792->leave($__internal_96c03cc47de301af49de48da76b290c277451b1237f85405cfb531ebb39b4792_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_d207b6413240d7e66871a31a91f94dc6ecbd294c95566de690cc1f71687264af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d207b6413240d7e66871a31a91f94dc6ecbd294c95566de690cc1f71687264af->enter($__internal_d207b6413240d7e66871a31a91f94dc6ecbd294c95566de690cc1f71687264af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_253ea774bba3d28cf5c96a5d92237c1fa623b51c130bb0e0fdf1fe6e40071259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_253ea774bba3d28cf5c96a5d92237c1fa623b51c130bb0e0fdf1fe6e40071259->enter($__internal_253ea774bba3d28cf5c96a5d92237c1fa623b51c130bb0e0fdf1fe6e40071259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 122, $this->getSourceContext()); })()), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_253ea774bba3d28cf5c96a5d92237c1fa623b51c130bb0e0fdf1fe6e40071259->leave($__internal_253ea774bba3d28cf5c96a5d92237c1fa623b51c130bb0e0fdf1fe6e40071259_prof);

        
        $__internal_d207b6413240d7e66871a31a91f94dc6ecbd294c95566de690cc1f71687264af->leave($__internal_d207b6413240d7e66871a31a91f94dc6ecbd294c95566de690cc1f71687264af_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_d138aebb25193e733c698e267e3f4bf8b5314004a5d67162b2b8d5abbc9d6dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d138aebb25193e733c698e267e3f4bf8b5314004a5d67162b2b8d5abbc9d6dd5->enter($__internal_d138aebb25193e733c698e267e3f4bf8b5314004a5d67162b2b8d5abbc9d6dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_15c1ef33b3bd91945be2fbef3aeb5ec4719cafb6cb8af5a769b3174da89f1e19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15c1ef33b3bd91945be2fbef3aeb5ec4719cafb6cb8af5a769b3174da89f1e19->enter($__internal_15c1ef33b3bd91945be2fbef3aeb5ec4719cafb6cb8af5a769b3174da89f1e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_15c1ef33b3bd91945be2fbef3aeb5ec4719cafb6cb8af5a769b3174da89f1e19->leave($__internal_15c1ef33b3bd91945be2fbef3aeb5ec4719cafb6cb8af5a769b3174da89f1e19_prof);

        
        $__internal_d138aebb25193e733c698e267e3f4bf8b5314004a5d67162b2b8d5abbc9d6dd5->leave($__internal_d138aebb25193e733c698e267e3f4bf8b5314004a5d67162b2b8d5abbc9d6dd5_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_42a602bc4156ab4a2210a995d5cb3acd56fbdeca6fc726d296c01d7bbb44bd2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a602bc4156ab4a2210a995d5cb3acd56fbdeca6fc726d296c01d7bbb44bd2d->enter($__internal_42a602bc4156ab4a2210a995d5cb3acd56fbdeca6fc726d296c01d7bbb44bd2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_91ece0e874d5a7f132b43ce3423ad5b320695cdcc2602dacc1fb6447ab2cbe9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91ece0e874d5a7f132b43ce3423ad5b320695cdcc2602dacc1fb6447ab2cbe9a->enter($__internal_91ece0e874d5a7f132b43ce3423ad5b320695cdcc2602dacc1fb6447ab2cbe9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 134, $this->getSourceContext()); })()), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_91ece0e874d5a7f132b43ce3423ad5b320695cdcc2602dacc1fb6447ab2cbe9a->leave($__internal_91ece0e874d5a7f132b43ce3423ad5b320695cdcc2602dacc1fb6447ab2cbe9a_prof);

        
        $__internal_42a602bc4156ab4a2210a995d5cb3acd56fbdeca6fc726d296c01d7bbb44bd2d->leave($__internal_42a602bc4156ab4a2210a995d5cb3acd56fbdeca6fc726d296c01d7bbb44bd2d_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_bfa6d0506bf8a65c275bf82871f287799f06715e8ff51865a50de55aa907c224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa6d0506bf8a65c275bf82871f287799f06715e8ff51865a50de55aa907c224->enter($__internal_bfa6d0506bf8a65c275bf82871f287799f06715e8ff51865a50de55aa907c224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_48059cd982c6a333127bbcff2d6ddee2dd1d798b1ae86e36634c1a388d717f84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48059cd982c6a333127bbcff2d6ddee2dd1d798b1ae86e36634c1a388d717f84->enter($__internal_48059cd982c6a333127bbcff2d6ddee2dd1d798b1ae86e36634c1a388d717f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_48059cd982c6a333127bbcff2d6ddee2dd1d798b1ae86e36634c1a388d717f84->leave($__internal_48059cd982c6a333127bbcff2d6ddee2dd1d798b1ae86e36634c1a388d717f84_prof);

        
        $__internal_bfa6d0506bf8a65c275bf82871f287799f06715e8ff51865a50de55aa907c224->leave($__internal_bfa6d0506bf8a65c275bf82871f287799f06715e8ff51865a50de55aa907c224_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_969e7b784d4abdc988e7f98d454d413f1df55652ac767941d359ab23d5622a08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_969e7b784d4abdc988e7f98d454d413f1df55652ac767941d359ab23d5622a08->enter($__internal_969e7b784d4abdc988e7f98d454d413f1df55652ac767941d359ab23d5622a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_25b0d9748e4ac992bbbf3ceccf5c63f9b007d8045728b3eaa39c6ad2b025e295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25b0d9748e4ac992bbbf3ceccf5c63f9b007d8045728b3eaa39c6ad2b025e295->enter($__internal_25b0d9748e4ac992bbbf3ceccf5c63f9b007d8045728b3eaa39c6ad2b025e295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_25b0d9748e4ac992bbbf3ceccf5c63f9b007d8045728b3eaa39c6ad2b025e295->leave($__internal_25b0d9748e4ac992bbbf3ceccf5c63f9b007d8045728b3eaa39c6ad2b025e295_prof);

        
        $__internal_969e7b784d4abdc988e7f98d454d413f1df55652ac767941d359ab23d5622a08->leave($__internal_969e7b784d4abdc988e7f98d454d413f1df55652ac767941d359ab23d5622a08_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_f0d442fcd7def166dffa64a03c3218c1128faaf0a1702bcdb086928624ae22bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d442fcd7def166dffa64a03c3218c1128faaf0a1702bcdb086928624ae22bf->enter($__internal_f0d442fcd7def166dffa64a03c3218c1128faaf0a1702bcdb086928624ae22bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_0754556dc21f9b1ac48ef57b05b6ce44dda26e7616a9721355c19d6410a2cae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0754556dc21f9b1ac48ef57b05b6ce44dda26e7616a9721355c19d6410a2cae2->enter($__internal_0754556dc21f9b1ac48ef57b05b6ce44dda26e7616a9721355c19d6410a2cae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

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
        
        $__internal_0754556dc21f9b1ac48ef57b05b6ce44dda26e7616a9721355c19d6410a2cae2->leave($__internal_0754556dc21f9b1ac48ef57b05b6ce44dda26e7616a9721355c19d6410a2cae2_prof);

        
        $__internal_f0d442fcd7def166dffa64a03c3218c1128faaf0a1702bcdb086928624ae22bf->leave($__internal_f0d442fcd7def166dffa64a03c3218c1128faaf0a1702bcdb086928624ae22bf_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_e45255bc9ded6e7785515ded7ad4cb42c1109a1a5649236f95f3db30b43386e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e45255bc9ded6e7785515ded7ad4cb42c1109a1a5649236f95f3db30b43386e6->enter($__internal_e45255bc9ded6e7785515ded7ad4cb42c1109a1a5649236f95f3db30b43386e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_8989b10179fd76e4e5d291609141cff066b4e9ee79cb5f4a8ab31b9a3219ce60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8989b10179fd76e4e5d291609141cff066b4e9ee79cb5f4a8ab31b9a3219ce60->enter($__internal_8989b10179fd76e4e5d291609141cff066b4e9ee79cb5f4a8ab31b9a3219ce60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_8989b10179fd76e4e5d291609141cff066b4e9ee79cb5f4a8ab31b9a3219ce60->leave($__internal_8989b10179fd76e4e5d291609141cff066b4e9ee79cb5f4a8ab31b9a3219ce60_prof);

        
        $__internal_e45255bc9ded6e7785515ded7ad4cb42c1109a1a5649236f95f3db30b43386e6->leave($__internal_e45255bc9ded6e7785515ded7ad4cb42c1109a1a5649236f95f3db30b43386e6_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_8bfce874bd61dab52224c1477910822dbaf05dec4629f605e626cae679d23cd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bfce874bd61dab52224c1477910822dbaf05dec4629f605e626cae679d23cd0->enter($__internal_8bfce874bd61dab52224c1477910822dbaf05dec4629f605e626cae679d23cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_0d67758dbc37b834e3660b61c52af3b42f31fd246c267ab3d8ad7f704de2eafb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d67758dbc37b834e3660b61c52af3b42f31fd246c267ab3d8ad7f704de2eafb->enter($__internal_0d67758dbc37b834e3660b61c52af3b42f31fd246c267ab3d8ad7f704de2eafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_0d67758dbc37b834e3660b61c52af3b42f31fd246c267ab3d8ad7f704de2eafb->leave($__internal_0d67758dbc37b834e3660b61c52af3b42f31fd246c267ab3d8ad7f704de2eafb_prof);

        
        $__internal_8bfce874bd61dab52224c1477910822dbaf05dec4629f605e626cae679d23cd0->leave($__internal_8bfce874bd61dab52224c1477910822dbaf05dec4629f605e626cae679d23cd0_prof);

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
", "@EasyAdmin/default/layout.html.twig", "D:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\layout.html.twig");
    }
}
