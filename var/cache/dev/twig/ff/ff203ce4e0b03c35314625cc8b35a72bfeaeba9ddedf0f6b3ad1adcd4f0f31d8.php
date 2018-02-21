<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_feae7ce9c0908b665638a740b6b14f2f0469f0cb942bbf591e20c089a76aecd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
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
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7367a84f14282c78e1ebe8b78762978592f31f6b433bd57dc4eb60202bb53253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7367a84f14282c78e1ebe8b78762978592f31f6b433bd57dc4eb60202bb53253->enter($__internal_7367a84f14282c78e1ebe8b78762978592f31f6b433bd57dc4eb60202bb53253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_8705a883162b89a767b9dc1f250d0023fe604af5250b49cb600b65a7d475f7ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8705a883162b89a767b9dc1f250d0023fe604af5250b49cb600b65a7d475f7ca->enter($__internal_8705a883162b89a767b9dc1f250d0023fe604af5250b49cb600b65a7d475f7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_7367a84f14282c78e1ebe8b78762978592f31f6b433bd57dc4eb60202bb53253->leave($__internal_7367a84f14282c78e1ebe8b78762978592f31f6b433bd57dc4eb60202bb53253_prof);

        
        $__internal_8705a883162b89a767b9dc1f250d0023fe604af5250b49cb600b65a7d475f7ca->leave($__internal_8705a883162b89a767b9dc1f250d0023fe604af5250b49cb600b65a7d475f7ca_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_f8123f8b2c16bb0334d3187af2b8c6b0f7096f851ebfaa015b76d4a0513666bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8123f8b2c16bb0334d3187af2b8c6b0f7096f851ebfaa015b76d4a0513666bc->enter($__internal_f8123f8b2c16bb0334d3187af2b8c6b0f7096f851ebfaa015b76d4a0513666bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_7deda4092fe9af0b66caa040110c76d08747ceefe1cbb6e87b22683233cc824f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7deda4092fe9af0b66caa040110c76d08747ceefe1cbb6e87b22683233cc824f->enter($__internal_7deda4092fe9af0b66caa040110c76d08747ceefe1cbb6e87b22683233cc824f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_7deda4092fe9af0b66caa040110c76d08747ceefe1cbb6e87b22683233cc824f->leave($__internal_7deda4092fe9af0b66caa040110c76d08747ceefe1cbb6e87b22683233cc824f_prof);

        
        $__internal_f8123f8b2c16bb0334d3187af2b8c6b0f7096f851ebfaa015b76d4a0513666bc->leave($__internal_f8123f8b2c16bb0334d3187af2b8c6b0f7096f851ebfaa015b76d4a0513666bc_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ae07f27a56c76afbcd447cca316f335dc3cc5f92c71c4b3b803b038eb772d895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae07f27a56c76afbcd447cca316f335dc3cc5f92c71c4b3b803b038eb772d895->enter($__internal_ae07f27a56c76afbcd447cca316f335dc3cc5f92c71c4b3b803b038eb772d895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_9ccddc8d0961df20fc26e8d8e1b501670bd81ff51fd6e0b073d0029a5dbaa2bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ccddc8d0961df20fc26e8d8e1b501670bd81ff51fd6e0b073d0029a5dbaa2bd->enter($__internal_9ccddc8d0961df20fc26e8d8e1b501670bd81ff51fd6e0b073d0029a5dbaa2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 11, $this->getSourceContext()); })()) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 14, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_9ccddc8d0961df20fc26e8d8e1b501670bd81ff51fd6e0b073d0029a5dbaa2bd->leave($__internal_9ccddc8d0961df20fc26e8d8e1b501670bd81ff51fd6e0b073d0029a5dbaa2bd_prof);

        
        $__internal_ae07f27a56c76afbcd447cca316f335dc3cc5f92c71c4b3b803b038eb772d895->leave($__internal_ae07f27a56c76afbcd447cca316f335dc3cc5f92c71c4b3b803b038eb772d895_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_319b97d48378b0a7b2c01ced6ef30ab8c837f51d3cd92e2428aee3a941eaa9ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319b97d48378b0a7b2c01ced6ef30ab8c837f51d3cd92e2428aee3a941eaa9ae->enter($__internal_319b97d48378b0a7b2c01ced6ef30ab8c837f51d3cd92e2428aee3a941eaa9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_8e67672d9811f275450b6fc52f763d123bd3c66c2e1fa94b470aae7edf3ac796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e67672d9811f275450b6fc52f763d123bd3c66c2e1fa94b470aae7edf3ac796->enter($__internal_8e67672d9811f275450b6fc52f763d123bd3c66c2e1fa94b470aae7edf3ac796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_8e67672d9811f275450b6fc52f763d123bd3c66c2e1fa94b470aae7edf3ac796->leave($__internal_8e67672d9811f275450b6fc52f763d123bd3c66c2e1fa94b470aae7edf3ac796_prof);

        
        $__internal_319b97d48378b0a7b2c01ced6ef30ab8c837f51d3cd92e2428aee3a941eaa9ae->leave($__internal_319b97d48378b0a7b2c01ced6ef30ab8c837f51d3cd92e2428aee3a941eaa9ae_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_6d7c669dcf3af52de38195634cc7ae69b9751a06c301013ddcabbeb682d84671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d7c669dcf3af52de38195634cc7ae69b9751a06c301013ddcabbeb682d84671->enter($__internal_6d7c669dcf3af52de38195634cc7ae69b9751a06c301013ddcabbeb682d84671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_4bbb768c4fe039e7b71c7f35843424adbe5adaffaa2f55a637a4e992ef9e83c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bbb768c4fe039e7b71c7f35843424adbe5adaffaa2f55a637a4e992ef9e83c2->enter($__internal_4bbb768c4fe039e7b71c7f35843424adbe5adaffaa2f55a637a4e992ef9e83c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 26, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 26, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 26, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_4bbb768c4fe039e7b71c7f35843424adbe5adaffaa2f55a637a4e992ef9e83c2->leave($__internal_4bbb768c4fe039e7b71c7f35843424adbe5adaffaa2f55a637a4e992ef9e83c2_prof);

        
        $__internal_6d7c669dcf3af52de38195634cc7ae69b9751a06c301013ddcabbeb682d84671->leave($__internal_6d7c669dcf3af52de38195634cc7ae69b9751a06c301013ddcabbeb682d84671_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_1a085422bf35ec2c453d1fb150b62543032b1c2bcb9c443aaa948255697f2efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a085422bf35ec2c453d1fb150b62543032b1c2bcb9c443aaa948255697f2efd->enter($__internal_1a085422bf35ec2c453d1fb150b62543032b1c2bcb9c443aaa948255697f2efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_c912d68026cc54ab8d1db9cd18110e2a42d9033c0d5459761bd9043883136405 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c912d68026cc54ab8d1db9cd18110e2a42d9033c0d5459761bd9043883136405->enter($__internal_c912d68026cc54ab8d1db9cd18110e2a42d9033c0d5459761bd9043883136405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_c912d68026cc54ab8d1db9cd18110e2a42d9033c0d5459761bd9043883136405->leave($__internal_c912d68026cc54ab8d1db9cd18110e2a42d9033c0d5459761bd9043883136405_prof);

        
        $__internal_1a085422bf35ec2c453d1fb150b62543032b1c2bcb9c443aaa948255697f2efd->leave($__internal_1a085422bf35ec2c453d1fb150b62543032b1c2bcb9c443aaa948255697f2efd_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_24e752930ddd788ecf7f6dcc12ce43aba988978d9e00de4545139c1b466c1f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24e752930ddd788ecf7f6dcc12ce43aba988978d9e00de4545139c1b466c1f5d->enter($__internal_24e752930ddd788ecf7f6dcc12ce43aba988978d9e00de4545139c1b466c1f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_b1c68f3ec2b370b457b4fa2abd802f4a98dba1f4449e723ee472fa89da31335b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1c68f3ec2b370b457b4fa2abd802f4a98dba1f4449e723ee472fa89da31335b->enter($__internal_b1c68f3ec2b370b457b4fa2abd802f4a98dba1f4449e723ee472fa89da31335b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_b1c68f3ec2b370b457b4fa2abd802f4a98dba1f4449e723ee472fa89da31335b->leave($__internal_b1c68f3ec2b370b457b4fa2abd802f4a98dba1f4449e723ee472fa89da31335b_prof);

        
        $__internal_24e752930ddd788ecf7f6dcc12ce43aba988978d9e00de4545139c1b466c1f5d->leave($__internal_24e752930ddd788ecf7f6dcc12ce43aba988978d9e00de4545139c1b466c1f5d_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_32cac72d29b3f666c0864b910cd0bee1a5f68866ead3f5d4eacdd5588b28c407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32cac72d29b3f666c0864b910cd0bee1a5f68866ead3f5d4eacdd5588b28c407->enter($__internal_32cac72d29b3f666c0864b910cd0bee1a5f68866ead3f5d4eacdd5588b28c407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_7ff4ec68cf0639797eb706f4bef4c2eba6ab5f212a1fc3709265b18b3b17bf18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ff4ec68cf0639797eb706f4bef4c2eba6ab5f212a1fc3709265b18b3b17bf18->enter($__internal_7ff4ec68cf0639797eb706f4bef4c2eba6ab5f212a1fc3709265b18b3b17bf18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_7ff4ec68cf0639797eb706f4bef4c2eba6ab5f212a1fc3709265b18b3b17bf18->leave($__internal_7ff4ec68cf0639797eb706f4bef4c2eba6ab5f212a1fc3709265b18b3b17bf18_prof);

        
        $__internal_32cac72d29b3f666c0864b910cd0bee1a5f68866ead3f5d4eacdd5588b28c407->leave($__internal_32cac72d29b3f666c0864b910cd0bee1a5f68866ead3f5d4eacdd5588b28c407_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_47830e8c53511c75bf90d73c651611eda096402427ab92d2959a42ada1815a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47830e8c53511c75bf90d73c651611eda096402427ab92d2959a42ada1815a13->enter($__internal_47830e8c53511c75bf90d73c651611eda096402427ab92d2959a42ada1815a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_3221bbd08353e3a494123d4d224010bb6956f66270bb1b2ed98ed8591f617677 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3221bbd08353e3a494123d4d224010bb6956f66270bb1b2ed98ed8591f617677->enter($__internal_3221bbd08353e3a494123d4d224010bb6956f66270bb1b2ed98ed8591f617677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_3221bbd08353e3a494123d4d224010bb6956f66270bb1b2ed98ed8591f617677->leave($__internal_3221bbd08353e3a494123d4d224010bb6956f66270bb1b2ed98ed8591f617677_prof);

        
        $__internal_47830e8c53511c75bf90d73c651611eda096402427ab92d2959a42ada1815a13->leave($__internal_47830e8c53511c75bf90d73c651611eda096402427ab92d2959a42ada1815a13_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
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
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "C:\\Pedidos\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
