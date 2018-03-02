<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_f4348e9c4b7d7206a85dc390cfd360e67bb11d2fb32ff94502c15b74a19bbcaa extends Twig_Template
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
        $__internal_db3363b24c8528087e362b5f4793ee6d94aaeb73d06897ab0bf57e605ab9b2d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db3363b24c8528087e362b5f4793ee6d94aaeb73d06897ab0bf57e605ab9b2d6->enter($__internal_db3363b24c8528087e362b5f4793ee6d94aaeb73d06897ab0bf57e605ab9b2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_3722191d8079cc39b8fd5b4f4660ae4521f34ef6156aa511d5c531cb36bbdd53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3722191d8079cc39b8fd5b4f4660ae4521f34ef6156aa511d5c531cb36bbdd53->enter($__internal_3722191d8079cc39b8fd5b4f4660ae4521f34ef6156aa511d5c531cb36bbdd53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_db3363b24c8528087e362b5f4793ee6d94aaeb73d06897ab0bf57e605ab9b2d6->leave($__internal_db3363b24c8528087e362b5f4793ee6d94aaeb73d06897ab0bf57e605ab9b2d6_prof);

        
        $__internal_3722191d8079cc39b8fd5b4f4660ae4521f34ef6156aa511d5c531cb36bbdd53->leave($__internal_3722191d8079cc39b8fd5b4f4660ae4521f34ef6156aa511d5c531cb36bbdd53_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_599d49ef5e2acd1f60f7b08c774256919ef4623bb97dcfe23176cbb04fbb5e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_599d49ef5e2acd1f60f7b08c774256919ef4623bb97dcfe23176cbb04fbb5e30->enter($__internal_599d49ef5e2acd1f60f7b08c774256919ef4623bb97dcfe23176cbb04fbb5e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_1e1783d8e3c870e21d24cbe54bc3ee01ff0a265ac11569f056cc11095f5d7e42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e1783d8e3c870e21d24cbe54bc3ee01ff0a265ac11569f056cc11095f5d7e42->enter($__internal_1e1783d8e3c870e21d24cbe54bc3ee01ff0a265ac11569f056cc11095f5d7e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_1e1783d8e3c870e21d24cbe54bc3ee01ff0a265ac11569f056cc11095f5d7e42->leave($__internal_1e1783d8e3c870e21d24cbe54bc3ee01ff0a265ac11569f056cc11095f5d7e42_prof);

        
        $__internal_599d49ef5e2acd1f60f7b08c774256919ef4623bb97dcfe23176cbb04fbb5e30->leave($__internal_599d49ef5e2acd1f60f7b08c774256919ef4623bb97dcfe23176cbb04fbb5e30_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_12a8e32231bdded306e70c2ac93bb1fa30abdc132c5a424c07ceec9f386a4c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a8e32231bdded306e70c2ac93bb1fa30abdc132c5a424c07ceec9f386a4c96->enter($__internal_12a8e32231bdded306e70c2ac93bb1fa30abdc132c5a424c07ceec9f386a4c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_1d5fab0e8557212391600ef1d0f4a1302087280b1dcb1a2d2ec5f45300beeabc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d5fab0e8557212391600ef1d0f4a1302087280b1dcb1a2d2ec5f45300beeabc->enter($__internal_1d5fab0e8557212391600ef1d0f4a1302087280b1dcb1a2d2ec5f45300beeabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_1d5fab0e8557212391600ef1d0f4a1302087280b1dcb1a2d2ec5f45300beeabc->leave($__internal_1d5fab0e8557212391600ef1d0f4a1302087280b1dcb1a2d2ec5f45300beeabc_prof);

        
        $__internal_12a8e32231bdded306e70c2ac93bb1fa30abdc132c5a424c07ceec9f386a4c96->leave($__internal_12a8e32231bdded306e70c2ac93bb1fa30abdc132c5a424c07ceec9f386a4c96_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c13f93f3532079bde337785000bc3e412ba4ffcf9967216c14bddad5b0910801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c13f93f3532079bde337785000bc3e412ba4ffcf9967216c14bddad5b0910801->enter($__internal_c13f93f3532079bde337785000bc3e412ba4ffcf9967216c14bddad5b0910801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_4f40669d739ce3e5a9aa15321fedfe18a7513033166ef1653d89a773e564d7d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f40669d739ce3e5a9aa15321fedfe18a7513033166ef1653d89a773e564d7d0->enter($__internal_4f40669d739ce3e5a9aa15321fedfe18a7513033166ef1653d89a773e564d7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_4f40669d739ce3e5a9aa15321fedfe18a7513033166ef1653d89a773e564d7d0->leave($__internal_4f40669d739ce3e5a9aa15321fedfe18a7513033166ef1653d89a773e564d7d0_prof);

        
        $__internal_c13f93f3532079bde337785000bc3e412ba4ffcf9967216c14bddad5b0910801->leave($__internal_c13f93f3532079bde337785000bc3e412ba4ffcf9967216c14bddad5b0910801_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_66d48a1476cc93017b4b404c364487cdfcbf86808a11391268e58ca4c4fd5648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66d48a1476cc93017b4b404c364487cdfcbf86808a11391268e58ca4c4fd5648->enter($__internal_66d48a1476cc93017b4b404c364487cdfcbf86808a11391268e58ca4c4fd5648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_426dcc535e01de1ebbb0e889ac42d3bc72d030373187e7be45bcadab1f4a01d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_426dcc535e01de1ebbb0e889ac42d3bc72d030373187e7be45bcadab1f4a01d8->enter($__internal_426dcc535e01de1ebbb0e889ac42d3bc72d030373187e7be45bcadab1f4a01d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_426dcc535e01de1ebbb0e889ac42d3bc72d030373187e7be45bcadab1f4a01d8->leave($__internal_426dcc535e01de1ebbb0e889ac42d3bc72d030373187e7be45bcadab1f4a01d8_prof);

        
        $__internal_66d48a1476cc93017b4b404c364487cdfcbf86808a11391268e58ca4c4fd5648->leave($__internal_66d48a1476cc93017b4b404c364487cdfcbf86808a11391268e58ca4c4fd5648_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_9b2fc7c00fa04141fd40e48f3d5727e3a8704f18740991f2bc0ecca111f6986a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b2fc7c00fa04141fd40e48f3d5727e3a8704f18740991f2bc0ecca111f6986a->enter($__internal_9b2fc7c00fa04141fd40e48f3d5727e3a8704f18740991f2bc0ecca111f6986a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_ebf979ea2456bf8ac9cbb4e92bcdb706fb350c8539c9e7c6118637408c773502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebf979ea2456bf8ac9cbb4e92bcdb706fb350c8539c9e7c6118637408c773502->enter($__internal_ebf979ea2456bf8ac9cbb4e92bcdb706fb350c8539c9e7c6118637408c773502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_ebf979ea2456bf8ac9cbb4e92bcdb706fb350c8539c9e7c6118637408c773502->leave($__internal_ebf979ea2456bf8ac9cbb4e92bcdb706fb350c8539c9e7c6118637408c773502_prof);

        
        $__internal_9b2fc7c00fa04141fd40e48f3d5727e3a8704f18740991f2bc0ecca111f6986a->leave($__internal_9b2fc7c00fa04141fd40e48f3d5727e3a8704f18740991f2bc0ecca111f6986a_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_ca9f4548c382e5440469428a0bbd407b3e4f36c30d05b9b28dfdb8e7f5bf92f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9f4548c382e5440469428a0bbd407b3e4f36c30d05b9b28dfdb8e7f5bf92f8->enter($__internal_ca9f4548c382e5440469428a0bbd407b3e4f36c30d05b9b28dfdb8e7f5bf92f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_02deb4adfe67ea1b04891d90a3185e50e44707b14ea5699ed15efa73dbc356e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02deb4adfe67ea1b04891d90a3185e50e44707b14ea5699ed15efa73dbc356e3->enter($__internal_02deb4adfe67ea1b04891d90a3185e50e44707b14ea5699ed15efa73dbc356e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_02deb4adfe67ea1b04891d90a3185e50e44707b14ea5699ed15efa73dbc356e3->leave($__internal_02deb4adfe67ea1b04891d90a3185e50e44707b14ea5699ed15efa73dbc356e3_prof);

        
        $__internal_ca9f4548c382e5440469428a0bbd407b3e4f36c30d05b9b28dfdb8e7f5bf92f8->leave($__internal_ca9f4548c382e5440469428a0bbd407b3e4f36c30d05b9b28dfdb8e7f5bf92f8_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_1015ab7d01a1096075a149e5f83657fab3e097a2178fd07282958ac68a0a89f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1015ab7d01a1096075a149e5f83657fab3e097a2178fd07282958ac68a0a89f6->enter($__internal_1015ab7d01a1096075a149e5f83657fab3e097a2178fd07282958ac68a0a89f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_e7556b392be83596207bdf13f364c8c880b09ff0634fce331eb0d8c52f43086d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7556b392be83596207bdf13f364c8c880b09ff0634fce331eb0d8c52f43086d->enter($__internal_e7556b392be83596207bdf13f364c8c880b09ff0634fce331eb0d8c52f43086d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_e7556b392be83596207bdf13f364c8c880b09ff0634fce331eb0d8c52f43086d->leave($__internal_e7556b392be83596207bdf13f364c8c880b09ff0634fce331eb0d8c52f43086d_prof);

        
        $__internal_1015ab7d01a1096075a149e5f83657fab3e097a2178fd07282958ac68a0a89f6->leave($__internal_1015ab7d01a1096075a149e5f83657fab3e097a2178fd07282958ac68a0a89f6_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_fe69116cb5aa228d1f11ab63b7aa933fa2a88e28db3146170b011d3685ef789f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe69116cb5aa228d1f11ab63b7aa933fa2a88e28db3146170b011d3685ef789f->enter($__internal_fe69116cb5aa228d1f11ab63b7aa933fa2a88e28db3146170b011d3685ef789f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_43cec4656d3bc83295627c26fc11a10cb25bbadfc0a297ab0e93863c3eb148f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43cec4656d3bc83295627c26fc11a10cb25bbadfc0a297ab0e93863c3eb148f0->enter($__internal_43cec4656d3bc83295627c26fc11a10cb25bbadfc0a297ab0e93863c3eb148f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_43cec4656d3bc83295627c26fc11a10cb25bbadfc0a297ab0e93863c3eb148f0->leave($__internal_43cec4656d3bc83295627c26fc11a10cb25bbadfc0a297ab0e93863c3eb148f0_prof);

        
        $__internal_fe69116cb5aa228d1f11ab63b7aa933fa2a88e28db3146170b011d3685ef789f->leave($__internal_fe69116cb5aa228d1f11ab63b7aa933fa2a88e28db3146170b011d3685ef789f_prof);

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
