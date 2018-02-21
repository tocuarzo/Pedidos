<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_6cd91d909f1a33c7ccb297ed7c80ceffc4f2dde794f982dcb0bde1ba7fa5d6e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81abb44bc03716849314502d7346e365e85920d83b2dc546b5afe4993922ea44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81abb44bc03716849314502d7346e365e85920d83b2dc546b5afe4993922ea44->enter($__internal_81abb44bc03716849314502d7346e365e85920d83b2dc546b5afe4993922ea44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_dafcf7243672e1eabb8dca88ef95c86ac12c7762c92e599ba3418939c3c98b40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dafcf7243672e1eabb8dca88ef95c86ac12c7762c92e599ba3418939c3c98b40->enter($__internal_dafcf7243672e1eabb8dca88ef95c86ac12c7762c92e599ba3418939c3c98b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('form_label', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('choice_label', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('radio_label', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 88
        echo "
";
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('form_row', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('button_row', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('choice_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('date_row', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('time_row', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('radio_row', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_81abb44bc03716849314502d7346e365e85920d83b2dc546b5afe4993922ea44->leave($__internal_81abb44bc03716849314502d7346e365e85920d83b2dc546b5afe4993922ea44_prof);

        
        $__internal_dafcf7243672e1eabb8dca88ef95c86ac12c7762c92e599ba3418939c3c98b40->leave($__internal_dafcf7243672e1eabb8dca88ef95c86ac12c7762c92e599ba3418939c3c98b40_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_cf072cc956f38f5be26d49c428335f58c5981688c74408297fc36ae5c683d558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf072cc956f38f5be26d49c428335f58c5981688c74408297fc36ae5c683d558->enter($__internal_cf072cc956f38f5be26d49c428335f58c5981688c74408297fc36ae5c683d558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_17fde334e55569d1c55f97e85f13ec704013afc7ade620eb8ef574bd429b1c3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17fde334e55569d1c55f97e85f13ec704013afc7ade620eb8ef574bd429b1c3e->enter($__internal_17fde334e55569d1c55f97e85f13ec704013afc7ade620eb8ef574bd429b1c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_17fde334e55569d1c55f97e85f13ec704013afc7ade620eb8ef574bd429b1c3e->leave($__internal_17fde334e55569d1c55f97e85f13ec704013afc7ade620eb8ef574bd429b1c3e_prof);

        
        $__internal_cf072cc956f38f5be26d49c428335f58c5981688c74408297fc36ae5c683d558->leave($__internal_cf072cc956f38f5be26d49c428335f58c5981688c74408297fc36ae5c683d558_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_7262756ca9979fae827b2b267608eb549a60a26e7cf79e69596a3174c848f007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7262756ca9979fae827b2b267608eb549a60a26e7cf79e69596a3174c848f007->enter($__internal_7262756ca9979fae827b2b267608eb549a60a26e7cf79e69596a3174c848f007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_47e2e922aeacd387a31d088f69aa4bf24ba7963615d56f03b998832b8a98e126 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47e2e922aeacd387a31d088f69aa4bf24ba7963615d56f03b998832b8a98e126->enter($__internal_47e2e922aeacd387a31d088f69aa4bf24ba7963615d56f03b998832b8a98e126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_47e2e922aeacd387a31d088f69aa4bf24ba7963615d56f03b998832b8a98e126->leave($__internal_47e2e922aeacd387a31d088f69aa4bf24ba7963615d56f03b998832b8a98e126_prof);

        
        $__internal_7262756ca9979fae827b2b267608eb549a60a26e7cf79e69596a3174c848f007->leave($__internal_7262756ca9979fae827b2b267608eb549a60a26e7cf79e69596a3174c848f007_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_6b33d898b8a63582dee39754a920bcbce22b326d30997c47bcc4f388a159803f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b33d898b8a63582dee39754a920bcbce22b326d30997c47bcc4f388a159803f->enter($__internal_6b33d898b8a63582dee39754a920bcbce22b326d30997c47bcc4f388a159803f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_36c439ff0ea3216fa6db12626acf2bda0dee5fbdb97bea380c94a96d16c96753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36c439ff0ea3216fa6db12626acf2bda0dee5fbdb97bea380c94a96d16c96753->enter($__internal_36c439ff0ea3216fa6db12626acf2bda0dee5fbdb97bea380c94a96d16c96753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 18
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 18, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 19
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 19, $this->getSourceContext()); })()))) {
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 22
            echo "<div class=\"checkbox\">";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 24
            echo "</div>";
        }
        
        $__internal_36c439ff0ea3216fa6db12626acf2bda0dee5fbdb97bea380c94a96d16c96753->leave($__internal_36c439ff0ea3216fa6db12626acf2bda0dee5fbdb97bea380c94a96d16c96753_prof);

        
        $__internal_6b33d898b8a63582dee39754a920bcbce22b326d30997c47bcc4f388a159803f->leave($__internal_6b33d898b8a63582dee39754a920bcbce22b326d30997c47bcc4f388a159803f_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_33ad994edcb0747c9f3c1c2a05b4cdc661a0a418009207b5b7a838b76461784e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33ad994edcb0747c9f3c1c2a05b4cdc661a0a418009207b5b7a838b76461784e->enter($__internal_33ad994edcb0747c9f3c1c2a05b4cdc661a0a418009207b5b7a838b76461784e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_7c72948a32b8d8817b20169d7f8a05af42c68748e2102c11b6ddc3fa88873cde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c72948a32b8d8817b20169d7f8a05af42c68748e2102c11b6ddc3fa88873cde->enter($__internal_7c72948a32b8d8817b20169d7f8a05af42c68748e2102c11b6ddc3fa88873cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 29
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 29, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 30
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 30, $this->getSourceContext()); })()))) {
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 33
            echo "<div class=\"radio\">";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 35
            echo "</div>";
        }
        
        $__internal_7c72948a32b8d8817b20169d7f8a05af42c68748e2102c11b6ddc3fa88873cde->leave($__internal_7c72948a32b8d8817b20169d7f8a05af42c68748e2102c11b6ddc3fa88873cde_prof);

        
        $__internal_33ad994edcb0747c9f3c1c2a05b4cdc661a0a418009207b5b7a838b76461784e->leave($__internal_33ad994edcb0747c9f3c1c2a05b4cdc661a0a418009207b5b7a838b76461784e_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_0e2c59fee90e4ebeabd92ffa066824040b1e289a7013d39f757c5737a3199ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e2c59fee90e4ebeabd92ffa066824040b1e289a7013d39f757c5737a3199ed0->enter($__internal_0e2c59fee90e4ebeabd92ffa066824040b1e289a7013d39f757c5737a3199ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_53b5b167dafde18174c93c7d399069baa2815cd7744a73e200e395ed2be59a95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53b5b167dafde18174c93c7d399069baa2815cd7744a73e200e395ed2be59a95->enter($__internal_53b5b167dafde18174c93c7d399069baa2815cd7744a73e200e395ed2be59a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_53b5b167dafde18174c93c7d399069baa2815cd7744a73e200e395ed2be59a95->leave($__internal_53b5b167dafde18174c93c7d399069baa2815cd7744a73e200e395ed2be59a95_prof);

        
        $__internal_0e2c59fee90e4ebeabd92ffa066824040b1e289a7013d39f757c5737a3199ed0->leave($__internal_0e2c59fee90e4ebeabd92ffa066824040b1e289a7013d39f757c5737a3199ed0_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_38bd2834133190cafc325d4af96b8a4261ae7a06cd18c2941ba10cb7a189782f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38bd2834133190cafc325d4af96b8a4261ae7a06cd18c2941ba10cb7a189782f->enter($__internal_38bd2834133190cafc325d4af96b8a4261ae7a06cd18c2941ba10cb7a189782f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_82685a82c7a86526b13e088b022f200ff3dcfa3e15b21678bfce7b4477ee682b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82685a82c7a86526b13e088b022f200ff3dcfa3e15b21678bfce7b4477ee682b->enter($__internal_82685a82c7a86526b13e088b022f200ff3dcfa3e15b21678bfce7b4477ee682b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_82685a82c7a86526b13e088b022f200ff3dcfa3e15b21678bfce7b4477ee682b->leave($__internal_82685a82c7a86526b13e088b022f200ff3dcfa3e15b21678bfce7b4477ee682b_prof);

        
        $__internal_38bd2834133190cafc325d4af96b8a4261ae7a06cd18c2941ba10cb7a189782f->leave($__internal_38bd2834133190cafc325d4af96b8a4261ae7a06cd18c2941ba10cb7a189782f_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_30a8c66217f13ef7150622f03cedb0e4b9df492ce39cf3d74d7c269faaa33f29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a8c66217f13ef7150622f03cedb0e4b9df492ce39cf3d74d7c269faaa33f29->enter($__internal_30a8c66217f13ef7150622f03cedb0e4b9df492ce39cf3d74d7c269faaa33f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_bbb1e8cbea45532dd68c0942f85fd80c626a2b7eea58d7f11074a38dbad934f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbb1e8cbea45532dd68c0942f85fd80c626a2b7eea58d7f11074a38dbad934f1->enter($__internal_bbb1e8cbea45532dd68c0942f85fd80c626a2b7eea58d7f11074a38dbad934f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_bbb1e8cbea45532dd68c0942f85fd80c626a2b7eea58d7f11074a38dbad934f1->leave($__internal_bbb1e8cbea45532dd68c0942f85fd80c626a2b7eea58d7f11074a38dbad934f1_prof);

        
        $__internal_30a8c66217f13ef7150622f03cedb0e4b9df492ce39cf3d74d7c269faaa33f29->leave($__internal_30a8c66217f13ef7150622f03cedb0e4b9df492ce39cf3d74d7c269faaa33f29_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_7cc1c24b6813c55d37dd6ac9b02a300b0fdb1e330ac4a42021acf65f01018dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cc1c24b6813c55d37dd6ac9b02a300b0fdb1e330ac4a42021acf65f01018dcb->enter($__internal_7cc1c24b6813c55d37dd6ac9b02a300b0fdb1e330ac4a42021acf65f01018dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_dba4c11802d22038842ccea4c55ee9e9198c40ecb8413fc7f5b597719cac4688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dba4c11802d22038842ccea4c55ee9e9198c40ecb8413fc7f5b597719cac4688->enter($__internal_dba4c11802d22038842ccea4c55ee9e9198c40ecb8413fc7f5b597719cac4688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_dba4c11802d22038842ccea4c55ee9e9198c40ecb8413fc7f5b597719cac4688->leave($__internal_dba4c11802d22038842ccea4c55ee9e9198c40ecb8413fc7f5b597719cac4688_prof);

        
        $__internal_7cc1c24b6813c55d37dd6ac9b02a300b0fdb1e330ac4a42021acf65f01018dcb->leave($__internal_7cc1c24b6813c55d37dd6ac9b02a300b0fdb1e330ac4a42021acf65f01018dcb_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_fe73de70ed20e82261d557f6020c5d948cd0d5a9582b06615ee24d7b65cbb54b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe73de70ed20e82261d557f6020c5d948cd0d5a9582b06615ee24d7b65cbb54b->enter($__internal_fe73de70ed20e82261d557f6020c5d948cd0d5a9582b06615ee24d7b65cbb54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_7488247a01a584dc28d97fbeb5a424d2e8486db128eb1c0d97ad29d3545aaa3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7488247a01a584dc28d97fbeb5a424d2e8486db128eb1c0d97ad29d3545aaa3b->enter($__internal_7488247a01a584dc28d97fbeb5a424d2e8486db128eb1c0d97ad29d3545aaa3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 66
        if (array_key_exists("widget", $context)) {
            // line 67
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 67, $this->getSourceContext()); })())) {
                // line 68
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 68, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 70
            if (array_key_exists("parent_label_class", $context)) {
                // line 71
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 71, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 71, $this->getSourceContext()); })())))));
            }
            // line 73
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })())))) {
                // line 74
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 74, $this->getSourceContext()); })()))) {
                    // line 75
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 75, $this->getSourceContext()); })()), array("%name%" =>                     // line 76
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 76, $this->getSourceContext()); })()), "%id%" =>                     // line 77
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 77, $this->getSourceContext()); })())));
                } else {
                    // line 80
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 80, $this->getSourceContext()); })()));
                }
            }
            // line 83
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 83, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 84
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 84, $this->getSourceContext()); })());
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            // line 85
            echo "</label>";
        }
        
        $__internal_7488247a01a584dc28d97fbeb5a424d2e8486db128eb1c0d97ad29d3545aaa3b->leave($__internal_7488247a01a584dc28d97fbeb5a424d2e8486db128eb1c0d97ad29d3545aaa3b_prof);

        
        $__internal_fe73de70ed20e82261d557f6020c5d948cd0d5a9582b06615ee24d7b65cbb54b->leave($__internal_fe73de70ed20e82261d557f6020c5d948cd0d5a9582b06615ee24d7b65cbb54b_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_db65f3edf3730b4a0c9e49c2d33a0eb9ebf2897dabd68740ccbf9db18708db1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db65f3edf3730b4a0c9e49c2d33a0eb9ebf2897dabd68740ccbf9db18708db1b->enter($__internal_db65f3edf3730b4a0c9e49c2d33a0eb9ebf2897dabd68740ccbf9db18708db1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6db89ac14a0a07ece6c8b9e9b7937770360c39e7d60543493be96f2e18cf948f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6db89ac14a0a07ece6c8b9e9b7937770360c39e7d60543493be96f2e18cf948f->enter($__internal_6db89ac14a0a07ece6c8b9e9b7937770360c39e7d60543493be96f2e18cf948f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 92
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 92, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 92, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 92, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->getSourceContext()); })()), 'label');
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->getSourceContext()); })()), 'widget');
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->getSourceContext()); })()), 'errors');
        // line 96
        echo "</div>";
        
        $__internal_6db89ac14a0a07ece6c8b9e9b7937770360c39e7d60543493be96f2e18cf948f->leave($__internal_6db89ac14a0a07ece6c8b9e9b7937770360c39e7d60543493be96f2e18cf948f_prof);

        
        $__internal_db65f3edf3730b4a0c9e49c2d33a0eb9ebf2897dabd68740ccbf9db18708db1b->leave($__internal_db65f3edf3730b4a0c9e49c2d33a0eb9ebf2897dabd68740ccbf9db18708db1b_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_3fddf3fc6f81224a737f1a317d8dbaaf28e71a3aa0f33a54edcceb0078e02b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fddf3fc6f81224a737f1a317d8dbaaf28e71a3aa0f33a54edcceb0078e02b9f->enter($__internal_3fddf3fc6f81224a737f1a317d8dbaaf28e71a3aa0f33a54edcceb0078e02b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_1dd11fc695c000255ed03939adeec605fb7b9c9b3f2e7c9f8f7c2fbf11b06da0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dd11fc695c000255ed03939adeec605fb7b9c9b3f2e7c9f8f7c2fbf11b06da0->enter($__internal_1dd11fc695c000255ed03939adeec605fb7b9c9b3f2e7c9f8f7c2fbf11b06da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_1dd11fc695c000255ed03939adeec605fb7b9c9b3f2e7c9f8f7c2fbf11b06da0->leave($__internal_1dd11fc695c000255ed03939adeec605fb7b9c9b3f2e7c9f8f7c2fbf11b06da0_prof);

        
        $__internal_3fddf3fc6f81224a737f1a317d8dbaaf28e71a3aa0f33a54edcceb0078e02b9f->leave($__internal_3fddf3fc6f81224a737f1a317d8dbaaf28e71a3aa0f33a54edcceb0078e02b9f_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_5710aabd4405161889ccd7742a284d782b40a59f3f92dc1f3ad7a8342a398c54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5710aabd4405161889ccd7742a284d782b40a59f3f92dc1f3ad7a8342a398c54->enter($__internal_5710aabd4405161889ccd7742a284d782b40a59f3f92dc1f3ad7a8342a398c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_09fbf061a5ff62a50054460ac33e2fdb42174908c8bb518eef820ef90b82cc86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09fbf061a5ff62a50054460ac33e2fdb42174908c8bb518eef820ef90b82cc86->enter($__internal_09fbf061a5ff62a50054460ac33e2fdb42174908c8bb518eef820ef90b82cc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_09fbf061a5ff62a50054460ac33e2fdb42174908c8bb518eef820ef90b82cc86->leave($__internal_09fbf061a5ff62a50054460ac33e2fdb42174908c8bb518eef820ef90b82cc86_prof);

        
        $__internal_5710aabd4405161889ccd7742a284d782b40a59f3f92dc1f3ad7a8342a398c54->leave($__internal_5710aabd4405161889ccd7742a284d782b40a59f3f92dc1f3ad7a8342a398c54_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_9d4e16f4569623b2f03f37e389e09d8997737c2f32ed9dccd479629503945c81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4e16f4569623b2f03f37e389e09d8997737c2f32ed9dccd479629503945c81->enter($__internal_9d4e16f4569623b2f03f37e389e09d8997737c2f32ed9dccd479629503945c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_9e7188a04f50982a2253cdb109788631107222ade6b13adfbd7329c84950e33b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e7188a04f50982a2253cdb109788631107222ade6b13adfbd7329c84950e33b->enter($__internal_9e7188a04f50982a2253cdb109788631107222ade6b13adfbd7329c84950e33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9e7188a04f50982a2253cdb109788631107222ade6b13adfbd7329c84950e33b->leave($__internal_9e7188a04f50982a2253cdb109788631107222ade6b13adfbd7329c84950e33b_prof);

        
        $__internal_9d4e16f4569623b2f03f37e389e09d8997737c2f32ed9dccd479629503945c81->leave($__internal_9d4e16f4569623b2f03f37e389e09d8997737c2f32ed9dccd479629503945c81_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_bac3b7e28a0aa4aba707b6753fd0b0192f95decc2bdf073fa28043721c8420dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bac3b7e28a0aa4aba707b6753fd0b0192f95decc2bdf073fa28043721c8420dc->enter($__internal_bac3b7e28a0aa4aba707b6753fd0b0192f95decc2bdf073fa28043721c8420dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_ed6ddfe5d2775ee9f1421d3b1312f1a66c65adb9204da5ee87e957e431e0adca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed6ddfe5d2775ee9f1421d3b1312f1a66c65adb9204da5ee87e957e431e0adca->enter($__internal_ed6ddfe5d2775ee9f1421d3b1312f1a66c65adb9204da5ee87e957e431e0adca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ed6ddfe5d2775ee9f1421d3b1312f1a66c65adb9204da5ee87e957e431e0adca->leave($__internal_ed6ddfe5d2775ee9f1421d3b1312f1a66c65adb9204da5ee87e957e431e0adca_prof);

        
        $__internal_bac3b7e28a0aa4aba707b6753fd0b0192f95decc2bdf073fa28043721c8420dc->leave($__internal_bac3b7e28a0aa4aba707b6753fd0b0192f95decc2bdf073fa28043721c8420dc_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_ea83c149f74175e022a4a68b79d8d3f829c1addf22c439acce1bf40cb67615bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea83c149f74175e022a4a68b79d8d3f829c1addf22c439acce1bf40cb67615bb->enter($__internal_ea83c149f74175e022a4a68b79d8d3f829c1addf22c439acce1bf40cb67615bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_e72c3badc71b82159e2d4230fb6cea246758fc36e3a4e9641d27cc086a2b0634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e72c3badc71b82159e2d4230fb6cea246758fc36e3a4e9641d27cc086a2b0634->enter($__internal_e72c3badc71b82159e2d4230fb6cea246758fc36e3a4e9641d27cc086a2b0634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e72c3badc71b82159e2d4230fb6cea246758fc36e3a4e9641d27cc086a2b0634->leave($__internal_e72c3badc71b82159e2d4230fb6cea246758fc36e3a4e9641d27cc086a2b0634_prof);

        
        $__internal_ea83c149f74175e022a4a68b79d8d3f829c1addf22c439acce1bf40cb67615bb->leave($__internal_ea83c149f74175e022a4a68b79d8d3f829c1addf22c439acce1bf40cb67615bb_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_cc9557a151c183f92a20caec6874057c63806eb3fcd4860ee927f5e240764faf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9557a151c183f92a20caec6874057c63806eb3fcd4860ee927f5e240764faf->enter($__internal_cc9557a151c183f92a20caec6874057c63806eb3fcd4860ee927f5e240764faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_5cd094efe2546a6855b081e30b20c0f35c01acc4453ed496f116de79aeb51ffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cd094efe2546a6855b081e30b20c0f35c01acc4453ed496f116de79aeb51ffc->enter($__internal_5cd094efe2546a6855b081e30b20c0f35c01acc4453ed496f116de79aeb51ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 126
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 126, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 127, $this->getSourceContext()); })()), 'widget');
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), 'errors');
        // line 129
        echo "</div>";
        
        $__internal_5cd094efe2546a6855b081e30b20c0f35c01acc4453ed496f116de79aeb51ffc->leave($__internal_5cd094efe2546a6855b081e30b20c0f35c01acc4453ed496f116de79aeb51ffc_prof);

        
        $__internal_cc9557a151c183f92a20caec6874057c63806eb3fcd4860ee927f5e240764faf->leave($__internal_cc9557a151c183f92a20caec6874057c63806eb3fcd4860ee927f5e240764faf_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_438cd069e5d8ef5664355159e7e67ec5d3b23282aa8d177f81b3d61dd35e979a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_438cd069e5d8ef5664355159e7e67ec5d3b23282aa8d177f81b3d61dd35e979a->enter($__internal_438cd069e5d8ef5664355159e7e67ec5d3b23282aa8d177f81b3d61dd35e979a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_36f62181f2819eb55903be171158a4f3aba4cc5acb589121d48532ba041d426d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36f62181f2819eb55903be171158a4f3aba4cc5acb589121d48532ba041d426d->enter($__internal_36f62181f2819eb55903be171158a4f3aba4cc5acb589121d48532ba041d426d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 133
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 133, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), 'widget');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 135, $this->getSourceContext()); })()), 'errors');
        // line 136
        echo "</div>";
        
        $__internal_36f62181f2819eb55903be171158a4f3aba4cc5acb589121d48532ba041d426d->leave($__internal_36f62181f2819eb55903be171158a4f3aba4cc5acb589121d48532ba041d426d_prof);

        
        $__internal_438cd069e5d8ef5664355159e7e67ec5d3b23282aa8d177f81b3d61dd35e979a->leave($__internal_438cd069e5d8ef5664355159e7e67ec5d3b23282aa8d177f81b3d61dd35e979a_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_0324293b9a8bc372962308292171b467da40bae1e306a4fa8f65e7c9b9156182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0324293b9a8bc372962308292171b467da40bae1e306a4fa8f65e7c9b9156182->enter($__internal_0324293b9a8bc372962308292171b467da40bae1e306a4fa8f65e7c9b9156182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_ad94633442fd77c2750a76f718dd39f4a84fb1234e9a1314962fd84ae9e20f4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad94633442fd77c2750a76f718dd39f4a84fb1234e9a1314962fd84ae9e20f4c->enter($__internal_ad94633442fd77c2750a76f718dd39f4a84fb1234e9a1314962fd84ae9e20f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 142
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 142, $this->getSourceContext()); })())) > 0)) {
            // line 143
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 144
            echo "    <ul class=\"list-unstyled\">";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 145, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 146
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "</ul>
    ";
            // line 149
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 149, $this->getSourceContext()); })()))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_ad94633442fd77c2750a76f718dd39f4a84fb1234e9a1314962fd84ae9e20f4c->leave($__internal_ad94633442fd77c2750a76f718dd39f4a84fb1234e9a1314962fd84ae9e20f4c_prof);

        
        $__internal_0324293b9a8bc372962308292171b467da40bae1e306a4fa8f65e7c9b9156182->leave($__internal_0324293b9a8bc372962308292171b467da40bae1e306a4fa8f65e7c9b9156182_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  650 => 149,  647 => 148,  639 => 146,  635 => 145,  633 => 144,  627 => 143,  625 => 142,  616 => 141,  606 => 136,  604 => 135,  602 => 134,  596 => 133,  587 => 132,  577 => 129,  575 => 128,  573 => 127,  567 => 126,  558 => 125,  548 => 122,  546 => 121,  537 => 120,  527 => 117,  525 => 116,  516 => 115,  506 => 112,  504 => 111,  495 => 110,  485 => 107,  483 => 106,  474 => 105,  464 => 102,  462 => 101,  460 => 100,  451 => 99,  441 => 96,  439 => 95,  437 => 94,  435 => 93,  429 => 92,  420 => 91,  409 => 85,  405 => 84,  390 => 83,  386 => 80,  383 => 77,  382 => 76,  381 => 75,  379 => 74,  377 => 73,  374 => 71,  372 => 70,  369 => 68,  367 => 67,  365 => 66,  356 => 64,  346 => 61,  344 => 59,  335 => 58,  325 => 55,  323 => 53,  314 => 52,  304 => 49,  302 => 48,  293 => 46,  283 => 43,  281 => 42,  272 => 41,  261 => 35,  259 => 34,  257 => 33,  254 => 31,  252 => 30,  250 => 29,  241 => 28,  230 => 24,  228 => 23,  226 => 22,  223 => 20,  221 => 19,  219 => 18,  210 => 17,  200 => 14,  198 => 13,  189 => 12,  179 => 9,  176 => 7,  174 => 6,  165 => 5,  155 => 141,  152 => 140,  149 => 138,  147 => 132,  144 => 131,  142 => 125,  139 => 124,  137 => 120,  134 => 119,  132 => 115,  129 => 114,  127 => 110,  124 => 109,  122 => 105,  119 => 104,  117 => 99,  114 => 98,  112 => 91,  109 => 90,  106 => 88,  104 => 64,  101 => 63,  99 => 58,  96 => 57,  94 => 52,  91 => 51,  89 => 46,  86 => 45,  84 => 41,  81 => 40,  78 => 38,  76 => 28,  73 => 27,  71 => 17,  68 => 16,  66 => 12,  63 => 11,  61 => 5,  58 => 4,  55 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {%- if widget is defined -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\Pedidos\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
