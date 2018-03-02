<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_2b72e97a9b443c92f08f3a78db448646bd3383299ea68d427168b83e3fc14694 extends Twig_Template
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
        $__internal_628d627cefd0595f6ea6f2c8750f9f08812dca299dcff2693bd9033646ef4251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_628d627cefd0595f6ea6f2c8750f9f08812dca299dcff2693bd9033646ef4251->enter($__internal_628d627cefd0595f6ea6f2c8750f9f08812dca299dcff2693bd9033646ef4251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_99c9ffd843f2a3dbe9282693f929f57240912b7e45bd8145142756ee88ded015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99c9ffd843f2a3dbe9282693f929f57240912b7e45bd8145142756ee88ded015->enter($__internal_99c9ffd843f2a3dbe9282693f929f57240912b7e45bd8145142756ee88ded015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_628d627cefd0595f6ea6f2c8750f9f08812dca299dcff2693bd9033646ef4251->leave($__internal_628d627cefd0595f6ea6f2c8750f9f08812dca299dcff2693bd9033646ef4251_prof);

        
        $__internal_99c9ffd843f2a3dbe9282693f929f57240912b7e45bd8145142756ee88ded015->leave($__internal_99c9ffd843f2a3dbe9282693f929f57240912b7e45bd8145142756ee88ded015_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_845da692e84b9f9fa6283dce2e591b942a120c7e690cc3620bb25ef9df87a65b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_845da692e84b9f9fa6283dce2e591b942a120c7e690cc3620bb25ef9df87a65b->enter($__internal_845da692e84b9f9fa6283dce2e591b942a120c7e690cc3620bb25ef9df87a65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_ad2fe5291514f4fe6225fc98a12acaa1c6f4162e96c9fcf8abdf6380c96c9006 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad2fe5291514f4fe6225fc98a12acaa1c6f4162e96c9fcf8abdf6380c96c9006->enter($__internal_ad2fe5291514f4fe6225fc98a12acaa1c6f4162e96c9fcf8abdf6380c96c9006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ad2fe5291514f4fe6225fc98a12acaa1c6f4162e96c9fcf8abdf6380c96c9006->leave($__internal_ad2fe5291514f4fe6225fc98a12acaa1c6f4162e96c9fcf8abdf6380c96c9006_prof);

        
        $__internal_845da692e84b9f9fa6283dce2e591b942a120c7e690cc3620bb25ef9df87a65b->leave($__internal_845da692e84b9f9fa6283dce2e591b942a120c7e690cc3620bb25ef9df87a65b_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_4131db407a68502e9b7d4c63ccb957ac57364d318726b280fad8eb9b3945fe08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4131db407a68502e9b7d4c63ccb957ac57364d318726b280fad8eb9b3945fe08->enter($__internal_4131db407a68502e9b7d4c63ccb957ac57364d318726b280fad8eb9b3945fe08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_22583176a0f9af47b489d1f6019a7887109cb1a5f15a8787d11b803d48894b2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22583176a0f9af47b489d1f6019a7887109cb1a5f15a8787d11b803d48894b2e->enter($__internal_22583176a0f9af47b489d1f6019a7887109cb1a5f15a8787d11b803d48894b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_22583176a0f9af47b489d1f6019a7887109cb1a5f15a8787d11b803d48894b2e->leave($__internal_22583176a0f9af47b489d1f6019a7887109cb1a5f15a8787d11b803d48894b2e_prof);

        
        $__internal_4131db407a68502e9b7d4c63ccb957ac57364d318726b280fad8eb9b3945fe08->leave($__internal_4131db407a68502e9b7d4c63ccb957ac57364d318726b280fad8eb9b3945fe08_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_4918c8eb9bf452fa5ad2a0bd6c60dc11a6bd405c2063f0114c6514cdda68be1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4918c8eb9bf452fa5ad2a0bd6c60dc11a6bd405c2063f0114c6514cdda68be1a->enter($__internal_4918c8eb9bf452fa5ad2a0bd6c60dc11a6bd405c2063f0114c6514cdda68be1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_edfe1f2fd421ce949a68c6d252a46b15c7452005652ae0ed6f1f0bba03ab8e51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edfe1f2fd421ce949a68c6d252a46b15c7452005652ae0ed6f1f0bba03ab8e51->enter($__internal_edfe1f2fd421ce949a68c6d252a46b15c7452005652ae0ed6f1f0bba03ab8e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_edfe1f2fd421ce949a68c6d252a46b15c7452005652ae0ed6f1f0bba03ab8e51->leave($__internal_edfe1f2fd421ce949a68c6d252a46b15c7452005652ae0ed6f1f0bba03ab8e51_prof);

        
        $__internal_4918c8eb9bf452fa5ad2a0bd6c60dc11a6bd405c2063f0114c6514cdda68be1a->leave($__internal_4918c8eb9bf452fa5ad2a0bd6c60dc11a6bd405c2063f0114c6514cdda68be1a_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_87eb26fc4ea45fe4d04d6ca573195c1bebeb4990a305d5dafb5c14e0d9e65a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87eb26fc4ea45fe4d04d6ca573195c1bebeb4990a305d5dafb5c14e0d9e65a6b->enter($__internal_87eb26fc4ea45fe4d04d6ca573195c1bebeb4990a305d5dafb5c14e0d9e65a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_f8b2f4f28a449e8c172103d5f889399916e4d2f0a4d24956e836156f87e6d02a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8b2f4f28a449e8c172103d5f889399916e4d2f0a4d24956e836156f87e6d02a->enter($__internal_f8b2f4f28a449e8c172103d5f889399916e4d2f0a4d24956e836156f87e6d02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_f8b2f4f28a449e8c172103d5f889399916e4d2f0a4d24956e836156f87e6d02a->leave($__internal_f8b2f4f28a449e8c172103d5f889399916e4d2f0a4d24956e836156f87e6d02a_prof);

        
        $__internal_87eb26fc4ea45fe4d04d6ca573195c1bebeb4990a305d5dafb5c14e0d9e65a6b->leave($__internal_87eb26fc4ea45fe4d04d6ca573195c1bebeb4990a305d5dafb5c14e0d9e65a6b_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d523222b8f3b0cc7245ce6ffe659e742f3ff87d844c54bae68bb060e9f5aa97c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d523222b8f3b0cc7245ce6ffe659e742f3ff87d844c54bae68bb060e9f5aa97c->enter($__internal_d523222b8f3b0cc7245ce6ffe659e742f3ff87d844c54bae68bb060e9f5aa97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_225dd9bf2b7f2f955e4d30cf71f2ca7e26cae3a08becfc22463af4b42889163d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_225dd9bf2b7f2f955e4d30cf71f2ca7e26cae3a08becfc22463af4b42889163d->enter($__internal_225dd9bf2b7f2f955e4d30cf71f2ca7e26cae3a08becfc22463af4b42889163d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_225dd9bf2b7f2f955e4d30cf71f2ca7e26cae3a08becfc22463af4b42889163d->leave($__internal_225dd9bf2b7f2f955e4d30cf71f2ca7e26cae3a08becfc22463af4b42889163d_prof);

        
        $__internal_d523222b8f3b0cc7245ce6ffe659e742f3ff87d844c54bae68bb060e9f5aa97c->leave($__internal_d523222b8f3b0cc7245ce6ffe659e742f3ff87d844c54bae68bb060e9f5aa97c_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_f779dce12ede45600b06c6c875643fcb8a33b41d357a47cc206a3d9d4b94adb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f779dce12ede45600b06c6c875643fcb8a33b41d357a47cc206a3d9d4b94adb5->enter($__internal_f779dce12ede45600b06c6c875643fcb8a33b41d357a47cc206a3d9d4b94adb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_963f87170898db3372eefbaf9d7fc1e4cb68059bef113f4049ca523ffb3ced24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_963f87170898db3372eefbaf9d7fc1e4cb68059bef113f4049ca523ffb3ced24->enter($__internal_963f87170898db3372eefbaf9d7fc1e4cb68059bef113f4049ca523ffb3ced24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_963f87170898db3372eefbaf9d7fc1e4cb68059bef113f4049ca523ffb3ced24->leave($__internal_963f87170898db3372eefbaf9d7fc1e4cb68059bef113f4049ca523ffb3ced24_prof);

        
        $__internal_f779dce12ede45600b06c6c875643fcb8a33b41d357a47cc206a3d9d4b94adb5->leave($__internal_f779dce12ede45600b06c6c875643fcb8a33b41d357a47cc206a3d9d4b94adb5_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_8d47a991d1fb7242dbcc152a092a1ba75acb76c0bbe9163d22215fe78751228e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d47a991d1fb7242dbcc152a092a1ba75acb76c0bbe9163d22215fe78751228e->enter($__internal_8d47a991d1fb7242dbcc152a092a1ba75acb76c0bbe9163d22215fe78751228e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_b2b0c9ba1f86a047c38ce354e00dfc3965f8dd1bbd7ddd745ab977b814d9e78f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2b0c9ba1f86a047c38ce354e00dfc3965f8dd1bbd7ddd745ab977b814d9e78f->enter($__internal_b2b0c9ba1f86a047c38ce354e00dfc3965f8dd1bbd7ddd745ab977b814d9e78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_b2b0c9ba1f86a047c38ce354e00dfc3965f8dd1bbd7ddd745ab977b814d9e78f->leave($__internal_b2b0c9ba1f86a047c38ce354e00dfc3965f8dd1bbd7ddd745ab977b814d9e78f_prof);

        
        $__internal_8d47a991d1fb7242dbcc152a092a1ba75acb76c0bbe9163d22215fe78751228e->leave($__internal_8d47a991d1fb7242dbcc152a092a1ba75acb76c0bbe9163d22215fe78751228e_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_099cdd83f70a43790e720e91a0c2c045563b4e35b29f23aa20ce39ea604d1734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_099cdd83f70a43790e720e91a0c2c045563b4e35b29f23aa20ce39ea604d1734->enter($__internal_099cdd83f70a43790e720e91a0c2c045563b4e35b29f23aa20ce39ea604d1734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_9502d5e33c0f539b6b27043bad05492a1262b587025c9733aeca503cb9cbec69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9502d5e33c0f539b6b27043bad05492a1262b587025c9733aeca503cb9cbec69->enter($__internal_9502d5e33c0f539b6b27043bad05492a1262b587025c9733aeca503cb9cbec69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_9502d5e33c0f539b6b27043bad05492a1262b587025c9733aeca503cb9cbec69->leave($__internal_9502d5e33c0f539b6b27043bad05492a1262b587025c9733aeca503cb9cbec69_prof);

        
        $__internal_099cdd83f70a43790e720e91a0c2c045563b4e35b29f23aa20ce39ea604d1734->leave($__internal_099cdd83f70a43790e720e91a0c2c045563b4e35b29f23aa20ce39ea604d1734_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_b1bacae9a5a8980bdbd962f57c9115afe502d2faa8b7842949a0691be287282d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1bacae9a5a8980bdbd962f57c9115afe502d2faa8b7842949a0691be287282d->enter($__internal_b1bacae9a5a8980bdbd962f57c9115afe502d2faa8b7842949a0691be287282d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_8bf9b327fc227684672cdfd59710feb4ed6844ab4f620a987b73f61eca69618f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bf9b327fc227684672cdfd59710feb4ed6844ab4f620a987b73f61eca69618f->enter($__internal_8bf9b327fc227684672cdfd59710feb4ed6844ab4f620a987b73f61eca69618f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_8bf9b327fc227684672cdfd59710feb4ed6844ab4f620a987b73f61eca69618f->leave($__internal_8bf9b327fc227684672cdfd59710feb4ed6844ab4f620a987b73f61eca69618f_prof);

        
        $__internal_b1bacae9a5a8980bdbd962f57c9115afe502d2faa8b7842949a0691be287282d->leave($__internal_b1bacae9a5a8980bdbd962f57c9115afe502d2faa8b7842949a0691be287282d_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_86faed80cce67122a00f958003dcc19f6977e0a6d87b2a20998aa99d6e7e75d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86faed80cce67122a00f958003dcc19f6977e0a6d87b2a20998aa99d6e7e75d3->enter($__internal_86faed80cce67122a00f958003dcc19f6977e0a6d87b2a20998aa99d6e7e75d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_202040ef1889b52360e763765edd70ae4374595514095357bbeb6a92a0233137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_202040ef1889b52360e763765edd70ae4374595514095357bbeb6a92a0233137->enter($__internal_202040ef1889b52360e763765edd70ae4374595514095357bbeb6a92a0233137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_202040ef1889b52360e763765edd70ae4374595514095357bbeb6a92a0233137->leave($__internal_202040ef1889b52360e763765edd70ae4374595514095357bbeb6a92a0233137_prof);

        
        $__internal_86faed80cce67122a00f958003dcc19f6977e0a6d87b2a20998aa99d6e7e75d3->leave($__internal_86faed80cce67122a00f958003dcc19f6977e0a6d87b2a20998aa99d6e7e75d3_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_29f3ba145e0b661c3dc90b866413a8d665d2957d2c40624d287b5c5fb2432260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29f3ba145e0b661c3dc90b866413a8d665d2957d2c40624d287b5c5fb2432260->enter($__internal_29f3ba145e0b661c3dc90b866413a8d665d2957d2c40624d287b5c5fb2432260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_1e7a30dbe5d90a384de35664f1fee64d9d0563ab2aedb264e68af17a90a77d89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e7a30dbe5d90a384de35664f1fee64d9d0563ab2aedb264e68af17a90a77d89->enter($__internal_1e7a30dbe5d90a384de35664f1fee64d9d0563ab2aedb264e68af17a90a77d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_1e7a30dbe5d90a384de35664f1fee64d9d0563ab2aedb264e68af17a90a77d89->leave($__internal_1e7a30dbe5d90a384de35664f1fee64d9d0563ab2aedb264e68af17a90a77d89_prof);

        
        $__internal_29f3ba145e0b661c3dc90b866413a8d665d2957d2c40624d287b5c5fb2432260->leave($__internal_29f3ba145e0b661c3dc90b866413a8d665d2957d2c40624d287b5c5fb2432260_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_959d23641c2ea8bec888743d623ffb1552bb2084a9338c84c6185aa2376119a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_959d23641c2ea8bec888743d623ffb1552bb2084a9338c84c6185aa2376119a8->enter($__internal_959d23641c2ea8bec888743d623ffb1552bb2084a9338c84c6185aa2376119a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_823327dfd2489032572f95c97ed8dbcd9b3c94c1286c033eac4804d86c3a4ec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_823327dfd2489032572f95c97ed8dbcd9b3c94c1286c033eac4804d86c3a4ec7->enter($__internal_823327dfd2489032572f95c97ed8dbcd9b3c94c1286c033eac4804d86c3a4ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_823327dfd2489032572f95c97ed8dbcd9b3c94c1286c033eac4804d86c3a4ec7->leave($__internal_823327dfd2489032572f95c97ed8dbcd9b3c94c1286c033eac4804d86c3a4ec7_prof);

        
        $__internal_959d23641c2ea8bec888743d623ffb1552bb2084a9338c84c6185aa2376119a8->leave($__internal_959d23641c2ea8bec888743d623ffb1552bb2084a9338c84c6185aa2376119a8_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_e301a2ca8cd778b0f069517e8d512d5f6e1a1f6b5cd46780c4b79cbecf4d4b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e301a2ca8cd778b0f069517e8d512d5f6e1a1f6b5cd46780c4b79cbecf4d4b07->enter($__internal_e301a2ca8cd778b0f069517e8d512d5f6e1a1f6b5cd46780c4b79cbecf4d4b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_0461e0e1a22bf4ed40a44a48b069afd1c71f9c0becf9db880e3b557f3b283a3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0461e0e1a22bf4ed40a44a48b069afd1c71f9c0becf9db880e3b557f3b283a3d->enter($__internal_0461e0e1a22bf4ed40a44a48b069afd1c71f9c0becf9db880e3b557f3b283a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0461e0e1a22bf4ed40a44a48b069afd1c71f9c0becf9db880e3b557f3b283a3d->leave($__internal_0461e0e1a22bf4ed40a44a48b069afd1c71f9c0becf9db880e3b557f3b283a3d_prof);

        
        $__internal_e301a2ca8cd778b0f069517e8d512d5f6e1a1f6b5cd46780c4b79cbecf4d4b07->leave($__internal_e301a2ca8cd778b0f069517e8d512d5f6e1a1f6b5cd46780c4b79cbecf4d4b07_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_e0231a3e8bca50b852d27f840e6031ec7a7a279630b47a25287a69c5c1c16b1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0231a3e8bca50b852d27f840e6031ec7a7a279630b47a25287a69c5c1c16b1f->enter($__internal_e0231a3e8bca50b852d27f840e6031ec7a7a279630b47a25287a69c5c1c16b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_3d7f8f922f27167f24de4a6b0d775a38386474f5fc736270e4df8e66509d3877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d7f8f922f27167f24de4a6b0d775a38386474f5fc736270e4df8e66509d3877->enter($__internal_3d7f8f922f27167f24de4a6b0d775a38386474f5fc736270e4df8e66509d3877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3d7f8f922f27167f24de4a6b0d775a38386474f5fc736270e4df8e66509d3877->leave($__internal_3d7f8f922f27167f24de4a6b0d775a38386474f5fc736270e4df8e66509d3877_prof);

        
        $__internal_e0231a3e8bca50b852d27f840e6031ec7a7a279630b47a25287a69c5c1c16b1f->leave($__internal_e0231a3e8bca50b852d27f840e6031ec7a7a279630b47a25287a69c5c1c16b1f_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_4b3295d0ac86e68d98864274869a6673bad4899ab1ee0f8b090db21e81f80d93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b3295d0ac86e68d98864274869a6673bad4899ab1ee0f8b090db21e81f80d93->enter($__internal_4b3295d0ac86e68d98864274869a6673bad4899ab1ee0f8b090db21e81f80d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_754bd73dbb879287ddb87b0414a39f4efa308ac907e8ad6fc2ee15612030f5c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_754bd73dbb879287ddb87b0414a39f4efa308ac907e8ad6fc2ee15612030f5c3->enter($__internal_754bd73dbb879287ddb87b0414a39f4efa308ac907e8ad6fc2ee15612030f5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_754bd73dbb879287ddb87b0414a39f4efa308ac907e8ad6fc2ee15612030f5c3->leave($__internal_754bd73dbb879287ddb87b0414a39f4efa308ac907e8ad6fc2ee15612030f5c3_prof);

        
        $__internal_4b3295d0ac86e68d98864274869a6673bad4899ab1ee0f8b090db21e81f80d93->leave($__internal_4b3295d0ac86e68d98864274869a6673bad4899ab1ee0f8b090db21e81f80d93_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4ef51f776c6a62249137a2af5a36b1f3e55637b08ae8c7cdebea02110d95cf45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef51f776c6a62249137a2af5a36b1f3e55637b08ae8c7cdebea02110d95cf45->enter($__internal_4ef51f776c6a62249137a2af5a36b1f3e55637b08ae8c7cdebea02110d95cf45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_f95c41e6f5bb3497cfeaf7ab0e81a8420ea1b92674adf21da7dfc1d8241cd75f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f95c41e6f5bb3497cfeaf7ab0e81a8420ea1b92674adf21da7dfc1d8241cd75f->enter($__internal_f95c41e6f5bb3497cfeaf7ab0e81a8420ea1b92674adf21da7dfc1d8241cd75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_f95c41e6f5bb3497cfeaf7ab0e81a8420ea1b92674adf21da7dfc1d8241cd75f->leave($__internal_f95c41e6f5bb3497cfeaf7ab0e81a8420ea1b92674adf21da7dfc1d8241cd75f_prof);

        
        $__internal_4ef51f776c6a62249137a2af5a36b1f3e55637b08ae8c7cdebea02110d95cf45->leave($__internal_4ef51f776c6a62249137a2af5a36b1f3e55637b08ae8c7cdebea02110d95cf45_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_038ba845a442e9279d226ad103b065fc88515d8837899e3ffed28cc521e7df52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_038ba845a442e9279d226ad103b065fc88515d8837899e3ffed28cc521e7df52->enter($__internal_038ba845a442e9279d226ad103b065fc88515d8837899e3ffed28cc521e7df52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_242650da537eba92d4cb388db48a343fe40d886e43d80ec74a5191c2f216b266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_242650da537eba92d4cb388db48a343fe40d886e43d80ec74a5191c2f216b266->enter($__internal_242650da537eba92d4cb388db48a343fe40d886e43d80ec74a5191c2f216b266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_242650da537eba92d4cb388db48a343fe40d886e43d80ec74a5191c2f216b266->leave($__internal_242650da537eba92d4cb388db48a343fe40d886e43d80ec74a5191c2f216b266_prof);

        
        $__internal_038ba845a442e9279d226ad103b065fc88515d8837899e3ffed28cc521e7df52->leave($__internal_038ba845a442e9279d226ad103b065fc88515d8837899e3ffed28cc521e7df52_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_fea4cb26fca9c2a325f73ab7b48495b9b40bc5b9ce0465ff35f13bf9b1b646b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea4cb26fca9c2a325f73ab7b48495b9b40bc5b9ce0465ff35f13bf9b1b646b2->enter($__internal_fea4cb26fca9c2a325f73ab7b48495b9b40bc5b9ce0465ff35f13bf9b1b646b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_3e090e482b2d655aeb36055f4c2765f320720ef3eb417364627f0d1f6835e401 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e090e482b2d655aeb36055f4c2765f320720ef3eb417364627f0d1f6835e401->enter($__internal_3e090e482b2d655aeb36055f4c2765f320720ef3eb417364627f0d1f6835e401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_3e090e482b2d655aeb36055f4c2765f320720ef3eb417364627f0d1f6835e401->leave($__internal_3e090e482b2d655aeb36055f4c2765f320720ef3eb417364627f0d1f6835e401_prof);

        
        $__internal_fea4cb26fca9c2a325f73ab7b48495b9b40bc5b9ce0465ff35f13bf9b1b646b2->leave($__internal_fea4cb26fca9c2a325f73ab7b48495b9b40bc5b9ce0465ff35f13bf9b1b646b2_prof);

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
