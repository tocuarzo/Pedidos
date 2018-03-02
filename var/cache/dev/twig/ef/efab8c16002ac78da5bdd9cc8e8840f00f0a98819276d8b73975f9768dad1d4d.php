<?php

/* @EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_ae383f26285e4257347b8700951906f1d29954e94569e0ced490dc871b8c1a50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@EasyAdmin/form/bootstrap_3_layout.html.twig", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@EasyAdmin/form/bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25e8d4753a77b81bf7dff6c771b6f080feb672219aa7462d2211302e4d1b1848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25e8d4753a77b81bf7dff6c771b6f080feb672219aa7462d2211302e4d1b1848->enter($__internal_25e8d4753a77b81bf7dff6c771b6f080feb672219aa7462d2211302e4d1b1848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig"));

        $__internal_f8a06807bfa89f95ff81b0bcd221155a65ee6948c81c35344851ec398d0431a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8a06807bfa89f95ff81b0bcd221155a65ee6948c81c35344851ec398d0431a1->enter($__internal_f8a06807bfa89f95ff81b0bcd221155a65ee6948c81c35344851ec398d0431a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('radio_row', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('submit_row', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('reset_row', $context, $blocks);
        // line 93
        echo "
";
        // line 94
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_25e8d4753a77b81bf7dff6c771b6f080feb672219aa7462d2211302e4d1b1848->leave($__internal_25e8d4753a77b81bf7dff6c771b6f080feb672219aa7462d2211302e4d1b1848_prof);

        
        $__internal_f8a06807bfa89f95ff81b0bcd221155a65ee6948c81c35344851ec398d0431a1->leave($__internal_f8a06807bfa89f95ff81b0bcd221155a65ee6948c81c35344851ec398d0431a1_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_b910e52dc42d5d6145082ffc7f402dc1342cb3f15123affab55c886add16f077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b910e52dc42d5d6145082ffc7f402dc1342cb3f15123affab55c886add16f077->enter($__internal_b910e52dc42d5d6145082ffc7f402dc1342cb3f15123affab55c886add16f077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_394b81f49930ab4d314b615fe0349af747837e7efd498e72b73006b178836e4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_394b81f49930ab4d314b615fe0349af747837e7efd498e72b73006b178836e4d->enter($__internal_394b81f49930ab4d314b615fe0349af747837e7efd498e72b73006b178836e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["_easyadmin_form_type"] = "horizontal";
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_394b81f49930ab4d314b615fe0349af747837e7efd498e72b73006b178836e4d->leave($__internal_394b81f49930ab4d314b615fe0349af747837e7efd498e72b73006b178836e4d_prof);

        
        $__internal_b910e52dc42d5d6145082ffc7f402dc1342cb3f15123affab55c886add16f077->leave($__internal_b910e52dc42d5d6145082ffc7f402dc1342cb3f15123affab55c886add16f077_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_45ed9402a453cea1409d35d0c9e83cc77b02fa5b0484797f8a25d2634f688b1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45ed9402a453cea1409d35d0c9e83cc77b02fa5b0484797f8a25d2634f688b1e->enter($__internal_45ed9402a453cea1409d35d0c9e83cc77b02fa5b0484797f8a25d2634f688b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_4241ab88ac62e9119641a445204cf9eca438b551cd9c182c5271d383a627f0d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4241ab88ac62e9119641a445204cf9eca438b551cd9c182c5271d383a627f0d0->enter($__internal_4241ab88ac62e9119641a445204cf9eca438b551cd9c182c5271d383a627f0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 12, $this->getSourceContext()); })()) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 15, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4241ab88ac62e9119641a445204cf9eca438b551cd9c182c5271d383a627f0d0->leave($__internal_4241ab88ac62e9119641a445204cf9eca438b551cd9c182c5271d383a627f0d0_prof);

        
        $__internal_45ed9402a453cea1409d35d0c9e83cc77b02fa5b0484797f8a25d2634f688b1e->leave($__internal_45ed9402a453cea1409d35d0c9e83cc77b02fa5b0484797f8a25d2634f688b1e_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_c4dfff11af1acf7cb1114c7b181fbdfce65d84d7d35c3399291e992e22c543e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4dfff11af1acf7cb1114c7b181fbdfce65d84d7d35c3399291e992e22c543e4->enter($__internal_c4dfff11af1acf7cb1114c7b181fbdfce65d84d7d35c3399291e992e22c543e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_7b8f49e4e0ff129d383532c4e67a234ae26891bfb652e2715cf447ac30ff01db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b8f49e4e0ff129d383532c4e67a234ae26891bfb652e2715cf447ac30ff01db->enter($__internal_7b8f49e4e0ff129d383532c4e67a234ae26891bfb652e2715cf447ac30ff01db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        echo "col-sm-2";
        
        $__internal_7b8f49e4e0ff129d383532c4e67a234ae26891bfb652e2715cf447ac30ff01db->leave($__internal_7b8f49e4e0ff129d383532c4e67a234ae26891bfb652e2715cf447ac30ff01db_prof);

        
        $__internal_c4dfff11af1acf7cb1114c7b181fbdfce65d84d7d35c3399291e992e22c543e4->leave($__internal_c4dfff11af1acf7cb1114c7b181fbdfce65d84d7d35c3399291e992e22c543e4_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a74679c64b3b42bc91fdbec0efb3b875480c81cdab9b975024839c5214e6a178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74679c64b3b42bc91fdbec0efb3b875480c81cdab9b975024839c5214e6a178->enter($__internal_a74679c64b3b42bc91fdbec0efb3b875480c81cdab9b975024839c5214e6a178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_54d4f405f3f98e256e4a8677de6d4519c10a67a586a2b18659bdcc1b6cb10e1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54d4f405f3f98e256e4a8677de6d4519c10a67a586a2b18659bdcc1b6cb10e1a->enter($__internal_54d4f405f3f98e256e4a8677de6d4519c10a67a586a2b18659bdcc1b6cb10e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        ob_start();
        // line 27
        echo "    ";
        $context["_field_type"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 28
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 28, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 28, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 28, $this->getSourceContext()); })()))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 28, $this->getSourceContext()); })()),  -2)), "html", null, true);
        echo "\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'label');
        echo "
        <div class=\"";
        // line 30
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'widget');
        echo "

            ";
        // line 33
        if ((twig_in_filter((isset($context["_field_type"]) || array_key_exists("_field_type", $context) ? $context["_field_type"] : (function () { throw new Twig_Error_Runtime('Variable "_field_type" does not exist.', 33, $this->getSourceContext()); })()), array(0 => "datetime", 1 => "datetime_immutable", 2 => "date", 3 => "date_immutable", 4 => "time", 5 => "time_immutable", 6 => "birthday")) && ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 34
            echo "                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" ";
            // line 36
            if ((null === (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 36, $this->getSourceContext()); })()))) {
                echo "checked=\"checked\"";
            }
            echo ">
                        ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                    </label>
                </div>
            ";
        }
        // line 41
        echo "
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'errors');
        echo "

            ";
        // line 44
        if ((((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 45
            echo "                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 45, $this->getSourceContext()); })()), "field", array()), "help", array()), array(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 45, $this->getSourceContext()); })()), "entity", array()), "translation_domain", array()));
            echo "</span>
            ";
        }
        // line 47
        echo "        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_54d4f405f3f98e256e4a8677de6d4519c10a67a586a2b18659bdcc1b6cb10e1a->leave($__internal_54d4f405f3f98e256e4a8677de6d4519c10a67a586a2b18659bdcc1b6cb10e1a_prof);

        
        $__internal_a74679c64b3b42bc91fdbec0efb3b875480c81cdab9b975024839c5214e6a178->leave($__internal_a74679c64b3b42bc91fdbec0efb3b875480c81cdab9b975024839c5214e6a178_prof);

    }

    // line 52
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_8424372e847b2f8cbfc8f1be785d5aa42da54600396b330b2d2fab140c682441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8424372e847b2f8cbfc8f1be785d5aa42da54600396b330b2d2fab140c682441->enter($__internal_8424372e847b2f8cbfc8f1be785d5aa42da54600396b330b2d2fab140c682441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_b0e7301780055354cd54e5f7ad3dff6ef7a384857747bc55a205b3a856beef3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0e7301780055354cd54e5f7ad3dff6ef7a384857747bc55a205b3a856beef3c->enter($__internal_b0e7301780055354cd54e5f7ad3dff6ef7a384857747bc55a205b3a856beef3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 53
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_b0e7301780055354cd54e5f7ad3dff6ef7a384857747bc55a205b3a856beef3c->leave($__internal_b0e7301780055354cd54e5f7ad3dff6ef7a384857747bc55a205b3a856beef3c_prof);

        
        $__internal_8424372e847b2f8cbfc8f1be785d5aa42da54600396b330b2d2fab140c682441->leave($__internal_8424372e847b2f8cbfc8f1be785d5aa42da54600396b330b2d2fab140c682441_prof);

    }

    // line 56
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_913b1ccd4d5a02cba4686b0613f371e471f43073d890b85ef268fb939e784ee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_913b1ccd4d5a02cba4686b0613f371e471f43073d890b85ef268fb939e784ee4->enter($__internal_913b1ccd4d5a02cba4686b0613f371e471f43073d890b85ef268fb939e784ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_bcf2a5eb1579d9d9dc5570d4780f8dd1f1b18e34f3c300f3e7bf6eaa9ea32cb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcf2a5eb1579d9d9dc5570d4780f8dd1f1b18e34f3c300f3e7bf6eaa9ea32cb0->enter($__internal_bcf2a5eb1579d9d9dc5570d4780f8dd1f1b18e34f3c300f3e7bf6eaa9ea32cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 57
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_bcf2a5eb1579d9d9dc5570d4780f8dd1f1b18e34f3c300f3e7bf6eaa9ea32cb0->leave($__internal_bcf2a5eb1579d9d9dc5570d4780f8dd1f1b18e34f3c300f3e7bf6eaa9ea32cb0_prof);

        
        $__internal_913b1ccd4d5a02cba4686b0613f371e471f43073d890b85ef268fb939e784ee4->leave($__internal_913b1ccd4d5a02cba4686b0613f371e471f43073d890b85ef268fb939e784ee4_prof);

    }

    // line 60
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_b4bcd95b4c1d49cdf2ca6ff7ab60a2adb53358c3fffb6c3f9e50a15dcaa1a05f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4bcd95b4c1d49cdf2ca6ff7ab60a2adb53358c3fffb6c3f9e50a15dcaa1a05f->enter($__internal_b4bcd95b4c1d49cdf2ca6ff7ab60a2adb53358c3fffb6c3f9e50a15dcaa1a05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_edafcba2d8249e1e32be9af5d0291f63c636b16b9daccf255e974d6f0bbf4829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edafcba2d8249e1e32be9af5d0291f63c636b16b9daccf255e974d6f0bbf4829->enter($__internal_edafcba2d8249e1e32be9af5d0291f63c636b16b9daccf255e974d6f0bbf4829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 61
        ob_start();
        // line 62
        echo "    <div class=\"form-group ";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 62, $this->getSourceContext()); })())) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 62, $this->getSourceContext()); })()),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 63
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 64
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->getSourceContext()); })()), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_edafcba2d8249e1e32be9af5d0291f63c636b16b9daccf255e974d6f0bbf4829->leave($__internal_edafcba2d8249e1e32be9af5d0291f63c636b16b9daccf255e974d6f0bbf4829_prof);

        
        $__internal_b4bcd95b4c1d49cdf2ca6ff7ab60a2adb53358c3fffb6c3f9e50a15dcaa1a05f->leave($__internal_b4bcd95b4c1d49cdf2ca6ff7ab60a2adb53358c3fffb6c3f9e50a15dcaa1a05f_prof);

    }

    // line 72
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_0dcee1799bde51d1e2f7b3ba2b7761a85f33ac4dc0562c318c72dfa02e560e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dcee1799bde51d1e2f7b3ba2b7761a85f33ac4dc0562c318c72dfa02e560e7f->enter($__internal_0dcee1799bde51d1e2f7b3ba2b7761a85f33ac4dc0562c318c72dfa02e560e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_e3c0f00dffb4e2e8fc867a5411b91eeae2f5088170a9d5e5332d3d2271a00b2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3c0f00dffb4e2e8fc867a5411b91eeae2f5088170a9d5e5332d3d2271a00b2a->enter($__internal_e3c0f00dffb4e2e8fc867a5411b91eeae2f5088170a9d5e5332d3d2271a00b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 73
        ob_start();
        // line 74
        echo "    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 74, $this->getSourceContext()); })()),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 75
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 76
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 77, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e3c0f00dffb4e2e8fc867a5411b91eeae2f5088170a9d5e5332d3d2271a00b2a->leave($__internal_e3c0f00dffb4e2e8fc867a5411b91eeae2f5088170a9d5e5332d3d2271a00b2a_prof);

        
        $__internal_0dcee1799bde51d1e2f7b3ba2b7761a85f33ac4dc0562c318c72dfa02e560e7f->leave($__internal_0dcee1799bde51d1e2f7b3ba2b7761a85f33ac4dc0562c318c72dfa02e560e7f_prof);

    }

    // line 83
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_a17a116fadf69e360969e89c65be5642189085fb647668b7451137bddab068aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a17a116fadf69e360969e89c65be5642189085fb647668b7451137bddab068aa->enter($__internal_a17a116fadf69e360969e89c65be5642189085fb647668b7451137bddab068aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_b1fe66e380e1f8b2319186f68ef5b698106221e5fcba32d7667803320559ebec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1fe66e380e1f8b2319186f68ef5b698106221e5fcba32d7667803320559ebec->enter($__internal_b1fe66e380e1f8b2319186f68ef5b698106221e5fcba32d7667803320559ebec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 84
        ob_start();
        // line 85
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 86
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 87
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b1fe66e380e1f8b2319186f68ef5b698106221e5fcba32d7667803320559ebec->leave($__internal_b1fe66e380e1f8b2319186f68ef5b698106221e5fcba32d7667803320559ebec_prof);

        
        $__internal_a17a116fadf69e360969e89c65be5642189085fb647668b7451137bddab068aa->leave($__internal_a17a116fadf69e360969e89c65be5642189085fb647668b7451137bddab068aa_prof);

    }

    // line 94
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_5b5e64f64b597bc88a80b53bb80e211c8347efda1aeaf260f7b1b3401cfe5369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5e64f64b597bc88a80b53bb80e211c8347efda1aeaf260f7b1b3401cfe5369->enter($__internal_5b5e64f64b597bc88a80b53bb80e211c8347efda1aeaf260f7b1b3401cfe5369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_a12a768e62c7bf114743805c631010356ec8a00693da19ba17014ac0623411c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a12a768e62c7bf114743805c631010356ec8a00693da19ba17014ac0623411c5->enter($__internal_a12a768e62c7bf114743805c631010356ec8a00693da19ba17014ac0623411c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        echo "col-sm-10";
        
        $__internal_a12a768e62c7bf114743805c631010356ec8a00693da19ba17014ac0623411c5->leave($__internal_a12a768e62c7bf114743805c631010356ec8a00693da19ba17014ac0623411c5_prof);

        
        $__internal_5b5e64f64b597bc88a80b53bb80e211c8347efda1aeaf260f7b1b3401cfe5369->leave($__internal_5b5e64f64b597bc88a80b53bb80e211c8347efda1aeaf260f7b1b3401cfe5369_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  430 => 94,  415 => 88,  411 => 87,  407 => 86,  404 => 85,  402 => 84,  393 => 83,  378 => 77,  374 => 76,  370 => 75,  365 => 74,  363 => 73,  354 => 72,  339 => 66,  335 => 65,  331 => 64,  327 => 63,  318 => 62,  316 => 61,  307 => 60,  297 => 57,  288 => 56,  278 => 53,  269 => 52,  256 => 47,  250 => 45,  248 => 44,  243 => 42,  240 => 41,  233 => 37,  227 => 36,  223 => 34,  221 => 33,  216 => 31,  212 => 30,  208 => 29,  199 => 28,  196 => 27,  194 => 26,  185 => 25,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 94,  98 => 93,  96 => 83,  93 => 82,  91 => 72,  88 => 71,  86 => 60,  83 => 59,  81 => 56,  78 => 55,  76 => 52,  73 => 51,  71 => 25,  68 => 24,  65 => 22,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"@EasyAdmin/form/bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set _easyadmin_form_type = 'horizontal' %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class 'col-sm-2' %}

{# Rows #}

{% block form_row -%}
{% spaceless %}
    {% set _field_type = easyadmin.field.fieldType|default('default') %}
    <div class=\"form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{ form_label(form) }}
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}

            {% if _field_type in ['datetime', 'datetime_immutable', 'date', 'date_immutable', 'time', 'time_immutable', 'birthday'] and easyadmin.field.nullable|default(false) %}
                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                        {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                    </label>
                </div>
            {% endif %}

            {{ form_errors(form) }}

            {% if easyadmin.field.help|default('') != '' %}
                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ easyadmin.field.help|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>
            {% endif %}
        </div>
    </div>
{% endspaceless %}
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class 'col-sm-10' %}
", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig", "C:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
