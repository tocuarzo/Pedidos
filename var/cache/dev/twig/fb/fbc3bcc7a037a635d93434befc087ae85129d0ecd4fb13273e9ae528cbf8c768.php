<?php

/* @EasyAdmin/default/menu.html.twig */
class __TwigTemplate_218e7659683af1f95a8e6c95cac11364f7b9aceb540eac2a9f7971625af147b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main_menu_before' => array($this, 'block_main_menu_before'),
            'main_menu' => array($this, 'block_main_menu'),
            'menu_item' => array($this, 'block_menu_item'),
            'menu_subitem' => array($this, 'block_menu_subitem'),
            'main_menu_after' => array($this, 'block_main_menu_after'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_edbc2c20ac1bda7ce5207c98da8fdc8d442a1d32459472a48d4394eae68e7fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edbc2c20ac1bda7ce5207c98da8fdc8d442a1d32459472a48d4394eae68e7fad->enter($__internal_edbc2c20ac1bda7ce5207c98da8fdc8d442a1d32459472a48d4394eae68e7fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/menu.html.twig"));

        $__internal_0cbdebc2e3bacaa021c9de49143ea63f56c788774bd614ed6ebef11700c68381 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cbdebc2e3bacaa021c9de49143ea63f56c788774bd614ed6ebef11700c68381->enter($__internal_0cbdebc2e3bacaa021c9de49143ea63f56c788774bd614ed6ebef11700c68381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/menu.html.twig"));

        // line 28
        echo "
";
        // line 29
        $context["helper"] = $this;
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('main_menu_before', $context, $blocks);
        // line 32
        echo "
<ul class=\"sidebar-menu\">
    ";
        // line 34
        $context["_menu_items"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.menu");
        // line 35
        echo "
    ";
        // line 36
        $this->displayBlock('main_menu', $context, $blocks);
        // line 57
        echo "</ul>

";
        // line 59
        $this->displayBlock('main_menu_after', $context, $blocks);
        
        $__internal_edbc2c20ac1bda7ce5207c98da8fdc8d442a1d32459472a48d4394eae68e7fad->leave($__internal_edbc2c20ac1bda7ce5207c98da8fdc8d442a1d32459472a48d4394eae68e7fad_prof);

        
        $__internal_0cbdebc2e3bacaa021c9de49143ea63f56c788774bd614ed6ebef11700c68381->leave($__internal_0cbdebc2e3bacaa021c9de49143ea63f56c788774bd614ed6ebef11700c68381_prof);

    }

    // line 31
    public function block_main_menu_before($context, array $blocks = array())
    {
        $__internal_124bfc22c7cff6baed0fd4bb1c220031b9317377b18076962fdacf08cbb91708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_124bfc22c7cff6baed0fd4bb1c220031b9317377b18076962fdacf08cbb91708->enter($__internal_124bfc22c7cff6baed0fd4bb1c220031b9317377b18076962fdacf08cbb91708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_before"));

        $__internal_d2b1c96636ac650b7955374b51ab167c1d97f9d90563473442785cf50ced5ef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2b1c96636ac650b7955374b51ab167c1d97f9d90563473442785cf50ced5ef0->enter($__internal_d2b1c96636ac650b7955374b51ab167c1d97f9d90563473442785cf50ced5ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_before"));

        
        $__internal_d2b1c96636ac650b7955374b51ab167c1d97f9d90563473442785cf50ced5ef0->leave($__internal_d2b1c96636ac650b7955374b51ab167c1d97f9d90563473442785cf50ced5ef0_prof);

        
        $__internal_124bfc22c7cff6baed0fd4bb1c220031b9317377b18076962fdacf08cbb91708->leave($__internal_124bfc22c7cff6baed0fd4bb1c220031b9317377b18076962fdacf08cbb91708_prof);

    }

    // line 36
    public function block_main_menu($context, array $blocks = array())
    {
        $__internal_2e99df3893fd2420e14b7c5944b683018d53068ac2b4a7be75d86cc63c6c619d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e99df3893fd2420e14b7c5944b683018d53068ac2b4a7be75d86cc63c6c619d->enter($__internal_2e99df3893fd2420e14b7c5944b683018d53068ac2b4a7be75d86cc63c6c619d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

        $__internal_d710aed48e1cb8598b0233a7fb778a18c72cbcca4ecc2c1a1faebf7628204b42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d710aed48e1cb8598b0233a7fb778a18c72cbcca4ecc2c1a1faebf7628204b42->enter($__internal_d710aed48e1cb8598b0233a7fb778a18c72cbcca4ecc2c1a1faebf7628204b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

        // line 37
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["_menu_items"]) || array_key_exists("_menu_items", $context) ? $context["_menu_items"] : (function () { throw new Twig_Error_Runtime('Variable "_menu_items" does not exist.', 37, $this->getSourceContext()); })()));
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
            // line 38
            echo "            ";
            $this->displayBlock('menu_item', $context, $blocks);
            // line 55
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    ";
        
        $__internal_d710aed48e1cb8598b0233a7fb778a18c72cbcca4ecc2c1a1faebf7628204b42->leave($__internal_d710aed48e1cb8598b0233a7fb778a18c72cbcca4ecc2c1a1faebf7628204b42_prof);

        
        $__internal_2e99df3893fd2420e14b7c5944b683018d53068ac2b4a7be75d86cc63c6c619d->leave($__internal_2e99df3893fd2420e14b7c5944b683018d53068ac2b4a7be75d86cc63c6c619d_prof);

    }

    // line 38
    public function block_menu_item($context, array $blocks = array())
    {
        $__internal_80e9d136aceec103545466c2ee4e03ecc2ec2dec8765bb2250189ff4f8ef1335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80e9d136aceec103545466c2ee4e03ecc2ec2dec8765bb2250189ff4f8ef1335->enter($__internal_80e9d136aceec103545466c2ee4e03ecc2ec2dec8765bb2250189ff4f8ef1335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_item"));

        $__internal_6d10e19575dc0ef37e0837a87fb6129cf7606e6690976193802df38581f71cfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d10e19575dc0ef37e0837a87fb6129cf7606e6690976193802df38581f71cfb->enter($__internal_6d10e19575dc0ef37e0837a87fb6129cf7606e6690976193802df38581f71cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_item"));

        // line 39
        echo "                <li class=\"";
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 39, $this->getSourceContext()); })()), "type", array()) == "divider")) ? ("header") : (""));
        echo " ";
        echo (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 39, $this->getSourceContext()); })()), "children", array()))) ? ("treeview") : (""));
        echo " ";
        echo (((((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method"),  -1)) : ( -1)) == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new Twig_Error_Runtime('Variable "loop" does not exist.', 39, $this->getSourceContext()); })()), "index0", array()))) ? ("active") : (""));
        echo " ";
        echo (((((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method"),  -1)) : ( -1)) !=  -1)) ? ("submenu-active") : (""));
        echo "\">
                    ";
        // line 40
        echo $context["helper"]->macro_render_menu_item((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 40, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "translation_domain", array()), "messages")) : ("messages")));
        echo "

                    ";
        // line 42
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "children", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "children", array()), array())) : (array())))) {
            // line 43
            echo "                        <ul class=\"treeview-menu\">
                            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 44, $this->getSourceContext()); })()), "children", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                // line 45
                echo "                                ";
                $this->displayBlock('menu_subitem', $context, $blocks);
                // line 50
                echo "                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                        </ul>
                    ";
        }
        // line 53
        echo "                </li>
            ";
        
        $__internal_6d10e19575dc0ef37e0837a87fb6129cf7606e6690976193802df38581f71cfb->leave($__internal_6d10e19575dc0ef37e0837a87fb6129cf7606e6690976193802df38581f71cfb_prof);

        
        $__internal_80e9d136aceec103545466c2ee4e03ecc2ec2dec8765bb2250189ff4f8ef1335->leave($__internal_80e9d136aceec103545466c2ee4e03ecc2ec2dec8765bb2250189ff4f8ef1335_prof);

    }

    // line 45
    public function block_menu_subitem($context, array $blocks = array())
    {
        $__internal_e519656801efd2f19a5c707c3911a86d61be5900091e7d9373b83dca2c94950b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e519656801efd2f19a5c707c3911a86d61be5900091e7d9373b83dca2c94950b->enter($__internal_e519656801efd2f19a5c707c3911a86d61be5900091e7d9373b83dca2c94950b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_subitem"));

        $__internal_e920549fb6a73260fab7ff7644085f8e611a42f5e24c2b5b970d6f969eb1642d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e920549fb6a73260fab7ff7644085f8e611a42f5e24c2b5b970d6f969eb1642d->enter($__internal_e920549fb6a73260fab7ff7644085f8e611a42f5e24c2b5b970d6f969eb1642d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_subitem"));

        // line 46
        echo "                                    <li class=\"";
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["subitem"]) || array_key_exists("subitem", $context) ? $context["subitem"] : (function () { throw new Twig_Error_Runtime('Variable "subitem" does not exist.', 46, $this->getSourceContext()); })()), "type", array()) == "divider")) ? ("header") : (""));
        echo " ";
        echo ((((((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method"),  -1)) : ( -1)) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new Twig_Error_Runtime('Variable "loop" does not exist.', 46, $this->getSourceContext()); })()), "parent", array()), "loop", array()), "index0", array())) && (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method"),  -1)) : ( -1)) == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new Twig_Error_Runtime('Variable "loop" does not exist.', 46, $this->getSourceContext()); })()), "index0", array())))) ? ("active") : (""));
        echo "\">
                                        ";
        // line 47
        echo $context["helper"]->macro_render_menu_item((isset($context["subitem"]) || array_key_exists("subitem", $context) ? $context["subitem"] : (function () { throw new Twig_Error_Runtime('Variable "subitem" does not exist.', 47, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "translation_domain", array()), "messages")) : ("messages")));
        echo "
                                    </li>
                                ";
        
        $__internal_e920549fb6a73260fab7ff7644085f8e611a42f5e24c2b5b970d6f969eb1642d->leave($__internal_e920549fb6a73260fab7ff7644085f8e611a42f5e24c2b5b970d6f969eb1642d_prof);

        
        $__internal_e519656801efd2f19a5c707c3911a86d61be5900091e7d9373b83dca2c94950b->leave($__internal_e519656801efd2f19a5c707c3911a86d61be5900091e7d9373b83dca2c94950b_prof);

    }

    // line 59
    public function block_main_menu_after($context, array $blocks = array())
    {
        $__internal_d614e7d969e57cf38b44017e4597752a6cfd21be265ba42ea079f7f9f6aed5d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d614e7d969e57cf38b44017e4597752a6cfd21be265ba42ea079f7f9f6aed5d2->enter($__internal_d614e7d969e57cf38b44017e4597752a6cfd21be265ba42ea079f7f9f6aed5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_after"));

        $__internal_a3ad8cac1af52ed58d542241686879877dc5be4026dd94c1c6ee4b888204a8ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3ad8cac1af52ed58d542241686879877dc5be4026dd94c1c6ee4b888204a8ee->enter($__internal_a3ad8cac1af52ed58d542241686879877dc5be4026dd94c1c6ee4b888204a8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_after"));

        
        $__internal_a3ad8cac1af52ed58d542241686879877dc5be4026dd94c1c6ee4b888204a8ee->leave($__internal_a3ad8cac1af52ed58d542241686879877dc5be4026dd94c1c6ee4b888204a8ee_prof);

        
        $__internal_d614e7d969e57cf38b44017e4597752a6cfd21be265ba42ea079f7f9f6aed5d2->leave($__internal_d614e7d969e57cf38b44017e4597752a6cfd21be265ba42ea079f7f9f6aed5d2_prof);

    }

    // line 1
    public function macro_render_menu_item($__item__ = null, $__translation_domain__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "translation_domain" => $__translation_domain__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_7baa4045e3a46627ff2bbeeca9c46c4f6439c14f069547b73fc0506579dc9b1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_7baa4045e3a46627ff2bbeeca9c46c4f6439c14f069547b73fc0506579dc9b1e->enter($__internal_7baa4045e3a46627ff2bbeeca9c46c4f6439c14f069547b73fc0506579dc9b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_menu_item"));

            $__internal_6f9ef5a6f444370f909d9040629cf65a5e75a7412fd77db6d4ac944c62a12be9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_6f9ef5a6f444370f909d9040629cf65a5e75a7412fd77db6d4ac944c62a12be9->enter($__internal_6f9ef5a6f444370f909d9040629cf65a5e75a7412fd77db6d4ac944c62a12be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_menu_item"));

            // line 2
            echo "    ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2, $this->getSourceContext()); })()), "type", array()) == "divider")) {
                // line 3
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 3, $this->getSourceContext()); })()), "label", array()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 3, $this->getSourceContext()); })())), "html", null, true);
                echo "
    ";
            } else {
                // line 5
                echo "        ";
                $context["menu_params"] = array("menuIndex" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 5, $this->getSourceContext()); })()), "menu_index", array()), "submenuIndex" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 5, $this->getSourceContext()); })()), "submenu_index", array()));
                // line 6
                echo "        ";
                $context["path"] = (((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 7
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 7, $this->getSourceContext()); })()), "type", array()) == "link")) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 7, $this->getSourceContext()); })()), "url", array())) : ((((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 8
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 8, $this->getSourceContext()); })()), "type", array()) == "route")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 8, $this->getSourceContext()); })()), "route", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 8, $this->getSourceContext()); })()), "params", array()))) : ((((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 9
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 9, $this->getSourceContext()); })()), "type", array()) == "entity")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(twig_array_merge(array("entity" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 9, $this->getSourceContext()); })()), "entity", array()), "action" => "list"), (isset($context["menu_params"]) || array_key_exists("menu_params", $context) ? $context["menu_params"] : (function () { throw new Twig_Error_Runtime('Variable "menu_params" does not exist.', 9, $this->getSourceContext()); })())), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 9, $this->getSourceContext()); })()), "params", array())))) : ((((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 10
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 10, $this->getSourceContext()); })()), "type", array()) == "empty")) ? ("#") : (""))))))));
                // line 12
                echo "
        ";
                // line 17
                echo "        ";
                if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 17, $this->getSourceContext()); })()), "type", array()) == "route") && (is_string($__internal_ee84b924c7c01af697f295c9471f814384935748839f1b3dd40f134e0d48c729 = (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 17, $this->getSourceContext()); })())) && is_string($__internal_2217581c35c7520ccba94af98c7327a645f48e2672a8da6274684fcce0728489 = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin")) && ('' === $__internal_2217581c35c7520ccba94af98c7327a645f48e2672a8da6274684fcce0728489 || 0 === strpos($__internal_ee84b924c7c01af697f295c9471f814384935748839f1b3dd40f134e0d48c729, $__internal_2217581c35c7520ccba94af98c7327a645f48e2672a8da6274684fcce0728489))))) {
                    // line 18
                    echo "            ";
                    $context["path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 18, $this->getSourceContext()); })()), "route", array()), twig_array_merge((isset($context["menu_params"]) || array_key_exists("menu_params", $context) ? $context["menu_params"] : (function () { throw new Twig_Error_Runtime('Variable "menu_params" does not exist.', 18, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 18, $this->getSourceContext()); })()), "params", array())));
                    // line 19
                    echo "        ";
                }
                // line 20
                echo "
        <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 21, $this->getSourceContext()); })()), "html", null, true);
                echo "\" ";
                if (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "target", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "target", array()), false)) : (false))) {
                    echo "target=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 21, $this->getSourceContext()); })()), "target", array()), "html", null, true);
                    echo "\"";
                }
                echo ">
            ";
                // line 22
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 22, $this->getSourceContext()); })()), "icon", array()))) {
                    echo "<i class=\"fa ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 22, $this->getSourceContext()); })()), "icon", array()), "html", null, true);
                    echo "\"></i>";
                }
                // line 23
                echo "            <span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 23, $this->getSourceContext()); })()), "label", array()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 23, $this->getSourceContext()); })())), "html", null, true);
                echo "</span>
            ";
                // line 24
                if ( !twig_test_empty(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "children", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "children", array()), array())) : (array())))) {
                    echo "<i class=\"fa fa-angle-left pull-right\"></i>";
                }
                // line 25
                echo "        </a>
    ";
            }
            
            $__internal_6f9ef5a6f444370f909d9040629cf65a5e75a7412fd77db6d4ac944c62a12be9->leave($__internal_6f9ef5a6f444370f909d9040629cf65a5e75a7412fd77db6d4ac944c62a12be9_prof);

            
            $__internal_7baa4045e3a46627ff2bbeeca9c46c4f6439c14f069547b73fc0506579dc9b1e->leave($__internal_7baa4045e3a46627ff2bbeeca9c46c4f6439c14f069547b73fc0506579dc9b1e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 25,  335 => 24,  330 => 23,  324 => 22,  314 => 21,  311 => 20,  308 => 19,  305 => 18,  302 => 17,  299 => 12,  297 => 10,  296 => 9,  295 => 8,  294 => 7,  292 => 6,  289 => 5,  283 => 3,  280 => 2,  261 => 1,  244 => 59,  231 => 47,  224 => 46,  215 => 45,  204 => 53,  200 => 51,  186 => 50,  183 => 45,  166 => 44,  163 => 43,  161 => 42,  156 => 40,  145 => 39,  136 => 38,  126 => 56,  112 => 55,  109 => 38,  91 => 37,  82 => 36,  65 => 31,  55 => 59,  51 => 57,  49 => 36,  46 => 35,  44 => 34,  40 => 32,  38 => 31,  35 => 30,  33 => 29,  30 => 28,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro render_menu_item(item, translation_domain) %}
    {% if item.type == 'divider' %}
        {{ item.label|trans(domain = translation_domain) }}
    {% else %}
        {% set menu_params = { menuIndex: item.menu_index, submenuIndex: item.submenu_index } %}
        {% set path =
            item.type == 'link' ? item.url :
            item.type == 'route' ? path(item.route, item.params) :
            item.type == 'entity' ? path('easyadmin', { entity: item.entity, action: 'list' }|merge(menu_params)|merge(item.params)) :
            item.type == 'empty' ? '#' : ''
        %}

        {# if the URL generated for the route belongs to the backend, regenerate
           the URL to include the menu_params to display the selected menu item
           (this is checked comparing the beginning of the route URL with the backend homepage URL)
        #}
        {% if item.type == 'route' and (path starts with path('easyadmin')) %}
            {% set path = path(item.route, menu_params|merge(item.params)) %}
        {% endif %}

        <a href=\"{{ path }}\" {% if item.target|default(false) %}target=\"{{ item.target }}\"{% endif %}>
            {% if item.icon is not empty %}<i class=\"fa {{ item.icon }}\"></i>{% endif %}
            <span>{{ item.label|trans(domain = translation_domain) }}</span>
            {% if item.children|default([]) is not empty %}<i class=\"fa fa-angle-left pull-right\"></i>{% endif %}
        </a>
    {% endif %}
{% endmacro %}

{% import _self as helper %}

{% block main_menu_before %}{% endblock %}

<ul class=\"sidebar-menu\">
    {% set _menu_items = easyadmin_config('design.menu') %}

    {% block main_menu %}
        {% for item in _menu_items %}
            {% block menu_item %}
                <li class=\"{{ item.type == 'divider' ? 'header' }} {{ item.children is not empty ? 'treeview' }} {{ app.request.query.get('menuIndex')|default(-1) == loop.index0 ? 'active' }} {{ app.request.query.get('submenuIndex')|default(-1) != -1 ? 'submenu-active' }}\">
                    {{ helper.render_menu_item(item, _entity_config.translation_domain|default('messages')) }}

                    {% if item.children|default([]) is not empty %}
                        <ul class=\"treeview-menu\">
                            {% for subitem in item.children %}
                                {% block menu_subitem %}
                                    <li class=\"{{ subitem.type == 'divider' ? 'header' }} {{ app.request.query.get('menuIndex')|default(-1) == loop.parent.loop.index0 and app.request.query.get('submenuIndex')|default(-1) == loop.index0 ? 'active' }}\">
                                        {{ helper.render_menu_item(subitem, _entity_config.translation_domain|default('messages')) }}
                                    </li>
                                {% endblock menu_subitem %}
                            {% endfor %}
                        </ul>
                    {% endif %}
                </li>
            {% endblock menu_item %}
        {% endfor %}
    {% endblock main_menu %}
</ul>

{% block main_menu_after %}{% endblock %}
", "@EasyAdmin/default/menu.html.twig", "D:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\menu.html.twig");
    }
}
