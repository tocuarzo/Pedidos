<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_006b791278996374417f1cd2300987db7f0e105cc7d82853f287ed850f17ddb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d47c8e651dd6ec60ba7e51545c8a5ff89391b269e016cdfb6a56448e67570d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d47c8e651dd6ec60ba7e51545c8a5ff89391b269e016cdfb6a56448e67570d8b->enter($__internal_d47c8e651dd6ec60ba7e51545c8a5ff89391b269e016cdfb6a56448e67570d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_fa0df27e02040b8a90d542933386190c1f1c4e395587482161bf9e755e5c7c1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa0df27e02040b8a90d542933386190c1f1c4e395587482161bf9e755e5c7c1a->enter($__internal_fa0df27e02040b8a90d542933386190c1f1c4e395587482161bf9e755e5c7c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_d47c8e651dd6ec60ba7e51545c8a5ff89391b269e016cdfb6a56448e67570d8b->leave($__internal_d47c8e651dd6ec60ba7e51545c8a5ff89391b269e016cdfb6a56448e67570d8b_prof);

        
        $__internal_fa0df27e02040b8a90d542933386190c1f1c4e395587482161bf9e755e5c7c1a->leave($__internal_fa0df27e02040b8a90d542933386190c1f1c4e395587482161bf9e755e5c7c1a_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_14f8d6094a936b046c49b395b018308923b743f50749a98e4407f68128b9b9e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f8d6094a936b046c49b395b018308923b743f50749a98e4407f68128b9b9e5->enter($__internal_14f8d6094a936b046c49b395b018308923b743f50749a98e4407f68128b9b9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_7dabd6d29332b1eb7820618d1ee05d466a63b9e6c575c6315e1d567d001498f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dabd6d29332b1eb7820618d1ee05d466a63b9e6c575c6315e1d567d001498f2->enter($__internal_7dabd6d29332b1eb7820618d1ee05d466a63b9e6c575c6315e1d567d001498f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 6, $this->getSourceContext()); })()) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !(isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 9, $this->getSourceContext()); })()))) {
                // line 10
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 10, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 12, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_7dabd6d29332b1eb7820618d1ee05d466a63b9e6c575c6315e1d567d001498f2->leave($__internal_7dabd6d29332b1eb7820618d1ee05d466a63b9e6c575c6315e1d567d001498f2_prof);

        
        $__internal_14f8d6094a936b046c49b395b018308923b743f50749a98e4407f68128b9b9e5->leave($__internal_14f8d6094a936b046c49b395b018308923b743f50749a98e4407f68128b9b9e5_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_6a415e286098168f8640d6d31c9375957e8c7fbe6faedfcac818b7d2ed133f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a415e286098168f8640d6d31c9375957e8c7fbe6faedfcac818b7d2ed133f9f->enter($__internal_6a415e286098168f8640d6d31c9375957e8c7fbe6faedfcac818b7d2ed133f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_b79186cb3486ee419b1ae2e2f04c77608dc7c4d9652dc7908ad156d9f95953ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b79186cb3486ee419b1ae2e2f04c77608dc7c4d9652dc7908ad156d9f95953ef->enter($__internal_b79186cb3486ee419b1ae2e2f04c77608dc7c4d9652dc7908ad156d9f95953ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_b79186cb3486ee419b1ae2e2f04c77608dc7c4d9652dc7908ad156d9f95953ef->leave($__internal_b79186cb3486ee419b1ae2e2f04c77608dc7c4d9652dc7908ad156d9f95953ef_prof);

        
        $__internal_6a415e286098168f8640d6d31c9375957e8c7fbe6faedfcac818b7d2ed133f9f->leave($__internal_6a415e286098168f8640d6d31c9375957e8c7fbe6faedfcac818b7d2ed133f9f_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_4c685d7a7e042ce61a008a15300c0548ba308ee17ce5d472d21200a92a83be66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c685d7a7e042ce61a008a15300c0548ba308ee17ce5d472d21200a92a83be66->enter($__internal_4c685d7a7e042ce61a008a15300c0548ba308ee17ce5d472d21200a92a83be66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1147db8b8b8812b2b036de7c3245cd77e4738ad91a94376d1a71cbfe72685258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1147db8b8b8812b2b036de7c3245cd77e4738ad91a94376d1a71cbfe72685258->enter($__internal_1147db8b8b8812b2b036de7c3245cd77e4738ad91a94376d1a71cbfe72685258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && (isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 24, $this->getSourceContext()); })()))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 27, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 27, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 27, $this->getSourceContext()); })()))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_1147db8b8b8812b2b036de7c3245cd77e4738ad91a94376d1a71cbfe72685258->leave($__internal_1147db8b8b8812b2b036de7c3245cd77e4738ad91a94376d1a71cbfe72685258_prof);

        
        $__internal_4c685d7a7e042ce61a008a15300c0548ba308ee17ce5d472d21200a92a83be66->leave($__internal_4c685d7a7e042ce61a008a15300c0548ba308ee17ce5d472d21200a92a83be66_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_b724c588a5980a5d3a70abebc63e72a47c75de6a09f9cd65fc3e3b690e224394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b724c588a5980a5d3a70abebc63e72a47c75de6a09f9cd65fc3e3b690e224394->enter($__internal_b724c588a5980a5d3a70abebc63e72a47c75de6a09f9cd65fc3e3b690e224394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_08d242a9def43b0feb897a5ef6b170142771b304aa98f4bd4a7c251c92eac45d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08d242a9def43b0feb897a5ef6b170142771b304aa98f4bd4a7c251c92eac45d->enter($__internal_08d242a9def43b0feb897a5ef6b170142771b304aa98f4bd4a7c251c92eac45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 39, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 39, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 39, $this->getSourceContext()); })()))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_08d242a9def43b0feb897a5ef6b170142771b304aa98f4bd4a7c251c92eac45d->leave($__internal_08d242a9def43b0feb897a5ef6b170142771b304aa98f4bd4a7c251c92eac45d_prof);

        
        $__internal_b724c588a5980a5d3a70abebc63e72a47c75de6a09f9cd65fc3e3b690e224394->leave($__internal_b724c588a5980a5d3a70abebc63e72a47c75de6a09f9cd65fc3e3b690e224394_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_14a4f093b7ce131f7951fe9352867dc8cfbeb22f6569074b390be987a8dff745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a4f093b7ce131f7951fe9352867dc8cfbeb22f6569074b390be987a8dff745->enter($__internal_14a4f093b7ce131f7951fe9352867dc8cfbeb22f6569074b390be987a8dff745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_50ccac6f8170153428d7610daae88df428e81c6c3f5275280f22fa02e7872a54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50ccac6f8170153428d7610daae88df428e81c6c3f5275280f22fa02e7872a54->enter($__internal_50ccac6f8170153428d7610daae88df428e81c6c3f5275280f22fa02e7872a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_50ccac6f8170153428d7610daae88df428e81c6c3f5275280f22fa02e7872a54->leave($__internal_50ccac6f8170153428d7610daae88df428e81c6c3f5275280f22fa02e7872a54_prof);

        
        $__internal_14a4f093b7ce131f7951fe9352867dc8cfbeb22f6569074b390be987a8dff745->leave($__internal_14a4f093b7ce131f7951fe9352867dc8cfbeb22f6569074b390be987a8dff745_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_4e5197f6c732cc72e39716235f550d7d7a4c717608b53b3bafaeb86b50a7d870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e5197f6c732cc72e39716235f550d7d7a4c717608b53b3bafaeb86b50a7d870->enter($__internal_4e5197f6c732cc72e39716235f550d7d7a4c717608b53b3bafaeb86b50a7d870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_73e9c1477ef2bf4a9fe12269a920f0d553918d11285c3175af75864c942a0053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73e9c1477ef2bf4a9fe12269a920f0d553918d11285c3175af75864c942a0053->enter($__internal_73e9c1477ef2bf4a9fe12269a920f0d553918d11285c3175af75864c942a0053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_73e9c1477ef2bf4a9fe12269a920f0d553918d11285c3175af75864c942a0053->leave($__internal_73e9c1477ef2bf4a9fe12269a920f0d553918d11285c3175af75864c942a0053_prof);

        
        $__internal_4e5197f6c732cc72e39716235f550d7d7a4c717608b53b3bafaeb86b50a7d870->leave($__internal_4e5197f6c732cc72e39716235f550d7d7a4c717608b53b3bafaeb86b50a7d870_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_40bb9b416e728dffa56a01ae4ccccc3bb58057224bc858d91e3e41587b699dda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40bb9b416e728dffa56a01ae4ccccc3bb58057224bc858d91e3e41587b699dda->enter($__internal_40bb9b416e728dffa56a01ae4ccccc3bb58057224bc858d91e3e41587b699dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_5b08f38db23e2d8f3aba4f7b1a3b4d39c98edd2c4134a1b713ed89f0e76beede = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b08f38db23e2d8f3aba4f7b1a3b4d39c98edd2c4134a1b713ed89f0e76beede->enter($__internal_5b08f38db23e2d8f3aba4f7b1a3b4d39c98edd2c4134a1b713ed89f0e76beede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_5b08f38db23e2d8f3aba4f7b1a3b4d39c98edd2c4134a1b713ed89f0e76beede->leave($__internal_5b08f38db23e2d8f3aba4f7b1a3b4d39c98edd2c4134a1b713ed89f0e76beede_prof);

        
        $__internal_40bb9b416e728dffa56a01ae4ccccc3bb58057224bc858d91e3e41587b699dda->leave($__internal_40bb9b416e728dffa56a01ae4ccccc3bb58057224bc858d91e3e41587b699dda_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_e7a468745d6ce79816dcb209015c27f8aefd35b78f864a7e080c1b06332e9340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a468745d6ce79816dcb209015c27f8aefd35b78f864a7e080c1b06332e9340->enter($__internal_e7a468745d6ce79816dcb209015c27f8aefd35b78f864a7e080c1b06332e9340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_e1f74880bf9dc3ef7b81a2b6e0a7b94cad61fbef7034133c568cb588416c0586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1f74880bf9dc3ef7b81a2b6e0a7b94cad61fbef7034133c568cb588416c0586->enter($__internal_e1f74880bf9dc3ef7b81a2b6e0a7b94cad61fbef7034133c568cb588416c0586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->getSourceContext()); })()), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_e1f74880bf9dc3ef7b81a2b6e0a7b94cad61fbef7034133c568cb588416c0586->leave($__internal_e1f74880bf9dc3ef7b81a2b6e0a7b94cad61fbef7034133c568cb588416c0586_prof);

        
        $__internal_e7a468745d6ce79816dcb209015c27f8aefd35b78f864a7e080c1b06332e9340->leave($__internal_e7a468745d6ce79816dcb209015c27f8aefd35b78f864a7e080c1b06332e9340_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 78,  345 => 77,  343 => 76,  341 => 75,  337 => 74,  333 => 73,  331 => 72,  322 => 71,  312 => 68,  303 => 67,  293 => 64,  291 => 63,  289 => 62,  285 => 61,  281 => 60,  279 => 59,  270 => 58,  260 => 55,  258 => 54,  256 => 53,  252 => 52,  248 => 51,  246 => 50,  237 => 49,  227 => 46,  223 => 44,  221 => 43,  219 => 42,  215 => 41,  213 => 40,  208 => 39,  205 => 38,  196 => 37,  185 => 33,  182 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 71,  86 => 70,  84 => 67,  81 => 66,  79 => 58,  76 => 57,  74 => 49,  71 => 48,  69 => 37,  66 => 36,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "C:\\Pedidos\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_4_horizontal_layout.html.twig");
    }
}
