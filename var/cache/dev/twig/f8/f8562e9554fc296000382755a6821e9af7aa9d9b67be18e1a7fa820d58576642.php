<?php

/* form_div_layout.html.twig */
class __TwigTemplate_99521c3b142fc60c2846763891ff70907e6a40fc74ff88869a93ae8166cf8176 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'tel_widget' => array($this, 'block_tel_widget'),
            'color_widget' => array($this, 'block_color_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34f6bb4eb2818ca229b1560e52e88ea8792f7eb3cf5df33c042f5a4e6cc5cbe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34f6bb4eb2818ca229b1560e52e88ea8792f7eb3cf5df33c042f5a4e6cc5cbe6->enter($__internal_34f6bb4eb2818ca229b1560e52e88ea8792f7eb3cf5df33c042f5a4e6cc5cbe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        $__internal_287eb60a6058fe75085dfbe2d398a2aef6b3dee546ab3243392ab7a9d7f1d52d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_287eb60a6058fe75085dfbe2d398a2aef6b3dee546ab3243392ab7a9d7f1d52d->enter($__internal_287eb60a6058fe75085dfbe2d398a2aef6b3dee546ab3243392ab7a9d7f1d52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 168
        $this->displayBlock('number_widget', $context, $blocks);
        // line 174
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 179
        $this->displayBlock('money_widget', $context, $blocks);
        // line 183
        $this->displayBlock('url_widget', $context, $blocks);
        // line 188
        $this->displayBlock('search_widget', $context, $blocks);
        // line 193
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 198
        $this->displayBlock('password_widget', $context, $blocks);
        // line 203
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 208
        $this->displayBlock('email_widget', $context, $blocks);
        // line 213
        $this->displayBlock('range_widget', $context, $blocks);
        // line 218
        $this->displayBlock('button_widget', $context, $blocks);
        // line 234
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 239
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 244
        $this->displayBlock('tel_widget', $context, $blocks);
        // line 249
        $this->displayBlock('color_widget', $context, $blocks);
        // line 256
        $this->displayBlock('form_label', $context, $blocks);
        // line 278
        $this->displayBlock('button_label', $context, $blocks);
        // line 282
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 290
        $this->displayBlock('form_row', $context, $blocks);
        // line 298
        $this->displayBlock('button_row', $context, $blocks);
        // line 304
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 310
        $this->displayBlock('form', $context, $blocks);
        // line 316
        $this->displayBlock('form_start', $context, $blocks);
        // line 330
        $this->displayBlock('form_end', $context, $blocks);
        // line 337
        $this->displayBlock('form_errors', $context, $blocks);
        // line 347
        $this->displayBlock('form_rest', $context, $blocks);
        // line 368
        echo "
";
        // line 371
        $this->displayBlock('form_rows', $context, $blocks);
        // line 377
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 384
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 389
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 394
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_34f6bb4eb2818ca229b1560e52e88ea8792f7eb3cf5df33c042f5a4e6cc5cbe6->leave($__internal_34f6bb4eb2818ca229b1560e52e88ea8792f7eb3cf5df33c042f5a4e6cc5cbe6_prof);

        
        $__internal_287eb60a6058fe75085dfbe2d398a2aef6b3dee546ab3243392ab7a9d7f1d52d->leave($__internal_287eb60a6058fe75085dfbe2d398a2aef6b3dee546ab3243392ab7a9d7f1d52d_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_87f535c2b0a4e8de5641497b4e093d0b7415e5d776bfa0b0a0754eb72649cdfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87f535c2b0a4e8de5641497b4e093d0b7415e5d776bfa0b0a0754eb72649cdfb->enter($__internal_87f535c2b0a4e8de5641497b4e093d0b7415e5d776bfa0b0a0754eb72649cdfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_a676952b6d18e36468d8d7ffa9b263be3620777bada2a8d3ed777d28e80cf517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a676952b6d18e36468d8d7ffa9b263be3620777bada2a8d3ed777d28e80cf517->enter($__internal_a676952b6d18e36468d8d7ffa9b263be3620777bada2a8d3ed777d28e80cf517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_a676952b6d18e36468d8d7ffa9b263be3620777bada2a8d3ed777d28e80cf517->leave($__internal_a676952b6d18e36468d8d7ffa9b263be3620777bada2a8d3ed777d28e80cf517_prof);

        
        $__internal_87f535c2b0a4e8de5641497b4e093d0b7415e5d776bfa0b0a0754eb72649cdfb->leave($__internal_87f535c2b0a4e8de5641497b4e093d0b7415e5d776bfa0b0a0754eb72649cdfb_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_0553292d85c89562b1404385da5c5ccc046aaf2240c3be8d29f24246b08fcdfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0553292d85c89562b1404385da5c5ccc046aaf2240c3be8d29f24246b08fcdfc->enter($__internal_0553292d85c89562b1404385da5c5ccc046aaf2240c3be8d29f24246b08fcdfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_983b369d5adf77f64745e9544471623277c90dc76d752728f9a961de4e44d380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_983b369d5adf77f64745e9544471623277c90dc76d752728f9a961de4e44d380->enter($__internal_983b369d5adf77f64745e9544471623277c90dc76d752728f9a961de4e44d380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 12, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_983b369d5adf77f64745e9544471623277c90dc76d752728f9a961de4e44d380->leave($__internal_983b369d5adf77f64745e9544471623277c90dc76d752728f9a961de4e44d380_prof);

        
        $__internal_0553292d85c89562b1404385da5c5ccc046aaf2240c3be8d29f24246b08fcdfc->leave($__internal_0553292d85c89562b1404385da5c5ccc046aaf2240c3be8d29f24246b08fcdfc_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_df12a24c34b02dc97db2d63bedb815415fe314beeb6a39d64f414f9d63c3ff32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df12a24c34b02dc97db2d63bedb815415fe314beeb6a39d64f414f9d63c3ff32->enter($__internal_df12a24c34b02dc97db2d63bedb815415fe314beeb6a39d64f414f9d63c3ff32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_27def1ecc2f48c91ba2ccba2b91339f85f12a180ed23fe313e5f590d9a302630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27def1ecc2f48c91ba2ccba2b91339f85f12a180ed23fe313e5f590d9a302630->enter($__internal_27def1ecc2f48c91ba2ccba2b91339f85f12a180ed23fe313e5f590d9a302630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()))) {
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_27def1ecc2f48c91ba2ccba2b91339f85f12a180ed23fe313e5f590d9a302630->leave($__internal_27def1ecc2f48c91ba2ccba2b91339f85f12a180ed23fe313e5f590d9a302630_prof);

        
        $__internal_df12a24c34b02dc97db2d63bedb815415fe314beeb6a39d64f414f9d63c3ff32->leave($__internal_df12a24c34b02dc97db2d63bedb815415fe314beeb6a39d64f414f9d63c3ff32_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_19b4f88190762c19bbbe2afecd8d64edb706d30ac671dde2c5d5a8f1d1dbf97a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19b4f88190762c19bbbe2afecd8d64edb706d30ac671dde2c5d5a8f1d1dbf97a->enter($__internal_19b4f88190762c19bbbe2afecd8d64edb706d30ac671dde2c5d5a8f1d1dbf97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_8a519de03a45be40041be52729c040a966e8a3f9a4def84ce2d44bfb69b76b28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a519de03a45be40041be52729c040a966e8a3f9a4def84ce2d44bfb69b76b28->enter($__internal_8a519de03a45be40041be52729c040a966e8a3f9a4def84ce2d44bfb69b76b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 28, $this->getSourceContext()); })()), array("data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 28, $this->getSourceContext()); })()), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_8a519de03a45be40041be52729c040a966e8a3f9a4def84ce2d44bfb69b76b28->leave($__internal_8a519de03a45be40041be52729c040a966e8a3f9a4def84ce2d44bfb69b76b28_prof);

        
        $__internal_19b4f88190762c19bbbe2afecd8d64edb706d30ac671dde2c5d5a8f1d1dbf97a->leave($__internal_19b4f88190762c19bbbe2afecd8d64edb706d30ac671dde2c5d5a8f1d1dbf97a_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_133b0ecdb738208143a00f753b59285903168f39e59b1a0256f02b41c096682b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_133b0ecdb738208143a00f753b59285903168f39e59b1a0256f02b41c096682b->enter($__internal_133b0ecdb738208143a00f753b59285903168f39e59b1a0256f02b41c096682b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_245dec9513a20553a6d9342801ae239e56d1878e259831d6db301dc417c0a4c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_245dec9513a20553a6d9342801ae239e56d1878e259831d6db301dc417c0a4c2->enter($__internal_245dec9513a20553a6d9342801ae239e56d1878e259831d6db301dc417c0a4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>";
        
        $__internal_245dec9513a20553a6d9342801ae239e56d1878e259831d6db301dc417c0a4c2->leave($__internal_245dec9513a20553a6d9342801ae239e56d1878e259831d6db301dc417c0a4c2_prof);

        
        $__internal_133b0ecdb738208143a00f753b59285903168f39e59b1a0256f02b41c096682b->leave($__internal_133b0ecdb738208143a00f753b59285903168f39e59b1a0256f02b41c096682b_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_1006ae9a79611eabc62161ac1653a21fa172ddf47cc9d4c1474c5a5138cb63ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1006ae9a79611eabc62161ac1653a21fa172ddf47cc9d4c1474c5a5138cb63ac->enter($__internal_1006ae9a79611eabc62161ac1653a21fa172ddf47cc9d4c1474c5a5138cb63ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        $__internal_a996effd0beb8d28899b5ad06ee4f7ecd31d7f40f3ecc04250799ca40a15a087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a996effd0beb8d28899b5ad06ee4f7ecd31d7f40f3ecc04250799ca40a15a087->enter($__internal_a996effd0beb8d28899b5ad06ee4f7ecd31d7f40f3ecc04250799ca40a15a087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 38, $this->getSourceContext()); })())) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_a996effd0beb8d28899b5ad06ee4f7ecd31d7f40f3ecc04250799ca40a15a087->leave($__internal_a996effd0beb8d28899b5ad06ee4f7ecd31d7f40f3ecc04250799ca40a15a087_prof);

        
        $__internal_1006ae9a79611eabc62161ac1653a21fa172ddf47cc9d4c1474c5a5138cb63ac->leave($__internal_1006ae9a79611eabc62161ac1653a21fa172ddf47cc9d4c1474c5a5138cb63ac_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_bc1d497965370471dd9d7763c406a363816cbb4425c27aae194c563eb78d18e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc1d497965370471dd9d7763c406a363816cbb4425c27aae194c563eb78d18e5->enter($__internal_bc1d497965370471dd9d7763c406a363816cbb4425c27aae194c563eb78d18e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_4c68362fec0f07363481df539cef29dc7b37ccb6c68538eca2f7db3a76ef1c66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c68362fec0f07363481df539cef29dc7b37ccb6c68538eca2f7db3a76ef1c66->enter($__internal_4c68362fec0f07363481df539cef29dc7b37ccb6c68538eca2f7db3a76ef1c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 49, $this->getSourceContext()); })())));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_4c68362fec0f07363481df539cef29dc7b37ccb6c68538eca2f7db3a76ef1c66->leave($__internal_4c68362fec0f07363481df539cef29dc7b37ccb6c68538eca2f7db3a76ef1c66_prof);

        
        $__internal_bc1d497965370471dd9d7763c406a363816cbb4425c27aae194c563eb78d18e5->leave($__internal_bc1d497965370471dd9d7763c406a363816cbb4425c27aae194c563eb78d18e5_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_de4f4789063db3026a16a089ba1d21f8198c4b3c5b5f42ccec3068fdab716a65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4f4789063db3026a16a089ba1d21f8198c4b3c5b5f42ccec3068fdab716a65->enter($__internal_de4f4789063db3026a16a089ba1d21f8198c4b3c5b5f42ccec3068fdab716a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_98f162ac70968970cc58da945d929b4b23ae90f717957bcd11cff4c251629da2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98f162ac70968970cc58da945d929b4b23ae90f717957bcd11cff4c251629da2->enter($__internal_98f162ac70968970cc58da945d929b4b23ae90f717957bcd11cff4c251629da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 55, $this->getSourceContext()); })()) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 55, $this->getSourceContext()); })()))) &&  !(isset($context["placeholder_in_choices"]) || array_key_exists("placeholder_in_choices", $context) ? $context["placeholder_in_choices"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder_in_choices" does not exist.', 55, $this->getSourceContext()); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 55, $this->getSourceContext()); })())) && ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "size", array(), "any", true, true) || (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 55, $this->getSourceContext()); })()), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 59, $this->getSourceContext()); })()))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 60, $this->getSourceContext()); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 60, $this->getSourceContext()); })())))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()) != "")) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()) === false)) ? ((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 62, $this->getSourceContext()); })())) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 63, $this->getSourceContext()); })());
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 65, $this->getSourceContext()); })())) > 0) &&  !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 65, $this->getSourceContext()); })())))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 66, $this->getSourceContext()); })()), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 69, $this->getSourceContext()); })());
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_98f162ac70968970cc58da945d929b4b23ae90f717957bcd11cff4c251629da2->leave($__internal_98f162ac70968970cc58da945d929b4b23ae90f717957bcd11cff4c251629da2_prof);

        
        $__internal_de4f4789063db3026a16a089ba1d21f8198c4b3c5b5f42ccec3068fdab716a65->leave($__internal_de4f4789063db3026a16a089ba1d21f8198c4b3c5b5f42ccec3068fdab716a65_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_01825d06afd542a1dafba6e2c7111c6b3abcc631203e2509495f0dadc4457e13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01825d06afd542a1dafba6e2c7111c6b3abcc631203e2509495f0dadc4457e13->enter($__internal_01825d06afd542a1dafba6e2c7111c6b3abcc631203e2509495f0dadc4457e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        $__internal_068074ab54d7e7050ae1d4aa33a463a18829c34a945679f9ebc9f2c5068c8b9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_068074ab54d7e7050ae1d4aa33a463a18829c34a945679f9ebc9f2c5068c8b9a->enter($__internal_068074ab54d7e7050ae1d4aa33a463a18829c34a945679f9ebc9f2c5068c8b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 75, $this->getSourceContext()); })()));
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
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })()) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })())))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array())) {
                    $__internal_cd211c5976c49e5ed5e79633c2f817251058e61eb5ac7f47b6aa67b81e29c504 = array("attr" => twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array()));
                    if (!is_array($__internal_cd211c5976c49e5ed5e79633c2f817251058e61eb5ac7f47b6aa67b81e29c504)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_cd211c5976c49e5ed5e79633c2f817251058e61eb5ac7f47b6aa67b81e29c504);
                    $this->displayBlock("attributes", $context, $blocks);
                    $context = $context['_parent'];
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 82, $this->getSourceContext()); })()))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })()) === false)) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })())))), "html", null, true);
                echo "</option>";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_068074ab54d7e7050ae1d4aa33a463a18829c34a945679f9ebc9f2c5068c8b9a->leave($__internal_068074ab54d7e7050ae1d4aa33a463a18829c34a945679f9ebc9f2c5068c8b9a_prof);

        
        $__internal_01825d06afd542a1dafba6e2c7111c6b3abcc631203e2509495f0dadc4457e13->leave($__internal_01825d06afd542a1dafba6e2c7111c6b3abcc631203e2509495f0dadc4457e13_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_e8f143ed6acafa85c7e9d5afe74a59caf0904908d00e59d939f2d460de6108b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f143ed6acafa85c7e9d5afe74a59caf0904908d00e59d939f2d460de6108b1->enter($__internal_e8f143ed6acafa85c7e9d5afe74a59caf0904908d00e59d939f2d460de6108b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_40a98b73c78794066a0ee29eceba64dfb7edf4a84bc57057b4cdf39d0ada8774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40a98b73c78794066a0ee29eceba64dfb7edf4a84bc57057b4cdf39d0ada8774->enter($__internal_40a98b73c78794066a0ee29eceba64dfb7edf4a84bc57057b4cdf39d0ada8774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 88, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 88, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_40a98b73c78794066a0ee29eceba64dfb7edf4a84bc57057b4cdf39d0ada8774->leave($__internal_40a98b73c78794066a0ee29eceba64dfb7edf4a84bc57057b4cdf39d0ada8774_prof);

        
        $__internal_e8f143ed6acafa85c7e9d5afe74a59caf0904908d00e59d939f2d460de6108b1->leave($__internal_e8f143ed6acafa85c7e9d5afe74a59caf0904908d00e59d939f2d460de6108b1_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_f39d73215649c386ca707824237be3fdf8ad66e7829cdd6454d17ae8b9ad3cc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f39d73215649c386ca707824237be3fdf8ad66e7829cdd6454d17ae8b9ad3cc3->enter($__internal_f39d73215649c386ca707824237be3fdf8ad66e7829cdd6454d17ae8b9ad3cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_23c0b753709ae6e2ca901ca0b4b7a9125cb85a0022526f1a9129cf0faf4df64d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23c0b753709ae6e2ca901ca0b4b7a9125cb85a0022526f1a9129cf0faf4df64d->enter($__internal_23c0b753709ae6e2ca901ca0b4b7a9125cb85a0022526f1a9129cf0faf4df64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 92, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 92, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_23c0b753709ae6e2ca901ca0b4b7a9125cb85a0022526f1a9129cf0faf4df64d->leave($__internal_23c0b753709ae6e2ca901ca0b4b7a9125cb85a0022526f1a9129cf0faf4df64d_prof);

        
        $__internal_f39d73215649c386ca707824237be3fdf8ad66e7829cdd6454d17ae8b9ad3cc3->leave($__internal_f39d73215649c386ca707824237be3fdf8ad66e7829cdd6454d17ae8b9ad3cc3_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_18d4e307a0dbc96ed38550e33068b32c4ea80460d68637833c9d71db3d9bcd1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18d4e307a0dbc96ed38550e33068b32c4ea80460d68637833c9d71db3d9bcd1a->enter($__internal_18d4e307a0dbc96ed38550e33068b32c4ea80460d68637833c9d71db3d9bcd1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_2ca10d3a5af2e1dbad97b7c553dfa9c853a535d1badff9209eb38258303f42b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ca10d3a5af2e1dbad97b7c553dfa9c853a535d1badff9209eb38258303f42b2->enter($__internal_2ca10d3a5af2e1dbad97b7c553dfa9c853a535d1badff9209eb38258303f42b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 96, $this->getSourceContext()); })()) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 100, $this->getSourceContext()); })()), "date", array()), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), "time", array()), 'errors');
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->getSourceContext()); })()), "date", array()), 'widget');
            // line 103
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 103, $this->getSourceContext()); })()), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_2ca10d3a5af2e1dbad97b7c553dfa9c853a535d1badff9209eb38258303f42b2->leave($__internal_2ca10d3a5af2e1dbad97b7c553dfa9c853a535d1badff9209eb38258303f42b2_prof);

        
        $__internal_18d4e307a0dbc96ed38550e33068b32c4ea80460d68637833c9d71db3d9bcd1a->leave($__internal_18d4e307a0dbc96ed38550e33068b32c4ea80460d68637833c9d71db3d9bcd1a_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_7b943255f864b9532a3aad2f890bcd8fe9ecc863f370bab5521072a82a098cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b943255f864b9532a3aad2f890bcd8fe9ecc863f370bab5521072a82a098cbb->enter($__internal_7b943255f864b9532a3aad2f890bcd8fe9ecc863f370bab5521072a82a098cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_1ff974cc8fc52e6aa1926b632b1cd010c7dee08d78fde216acbfca37d0389847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ff974cc8fc52e6aa1926b632b1cd010c7dee08d78fde216acbfca37d0389847->enter($__internal_1ff974cc8fc52e6aa1926b632b1cd010c7dee08d78fde216acbfca37d0389847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 109, $this->getSourceContext()); })()) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 113, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 114
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 114, $this->getSourceContext()); })()), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 115, $this->getSourceContext()); })()), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->getSourceContext()); })()), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_1ff974cc8fc52e6aa1926b632b1cd010c7dee08d78fde216acbfca37d0389847->leave($__internal_1ff974cc8fc52e6aa1926b632b1cd010c7dee08d78fde216acbfca37d0389847_prof);

        
        $__internal_7b943255f864b9532a3aad2f890bcd8fe9ecc863f370bab5521072a82a098cbb->leave($__internal_7b943255f864b9532a3aad2f890bcd8fe9ecc863f370bab5521072a82a098cbb_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_a4c835d6c6396ae32d63470c3d382d52f48fd92d95541f85ea773c80f8728c2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4c835d6c6396ae32d63470c3d382d52f48fd92d95541f85ea773c80f8728c2d->enter($__internal_a4c835d6c6396ae32d63470c3d382d52f48fd92d95541f85ea773c80f8728c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_1f63441af6f4d3b455acec713a941a6437db92685cd14c759d74f70d8970b924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f63441af6f4d3b455acec713a941a6437db92685cd14c759d74f70d8970b924->enter($__internal_1f63441af6f4d3b455acec713a941a6437db92685cd14c759d74f70d8970b924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 123, $this->getSourceContext()); })()) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 126, $this->getSourceContext()); })()) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "hour", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "minute", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "second", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_1f63441af6f4d3b455acec713a941a6437db92685cd14c759d74f70d8970b924->leave($__internal_1f63441af6f4d3b455acec713a941a6437db92685cd14c759d74f70d8970b924_prof);

        
        $__internal_a4c835d6c6396ae32d63470c3d382d52f48fd92d95541f85ea773c80f8728c2d->leave($__internal_a4c835d6c6396ae32d63470c3d382d52f48fd92d95541f85ea773c80f8728c2d_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_d8604ce1633f69f4a678f9524387f47dd3fa9c7b2b785752e534ec8a8a3b89dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8604ce1633f69f4a678f9524387f47dd3fa9c7b2b785752e534ec8a8a3b89dc->enter($__internal_d8604ce1633f69f4a678f9524387f47dd3fa9c7b2b785752e534ec8a8a3b89dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_6038bf46ee5078a195a22240c2219697a3aeb4559bdfe7d171d15dc8fba396a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6038bf46ee5078a195a22240c2219697a3aeb4559bdfe7d171d15dc8fba396a6->enter($__internal_6038bf46ee5078a195a22240c2219697a3aeb4559bdfe7d171d15dc8fba396a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 134
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 134, $this->getSourceContext()); })()) == "single_text")) {
            // line 135
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 137
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 138, $this->getSourceContext()); })()), 'errors');
            // line 139
            echo "<table class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) || array_key_exists("table_class", $context) ? $context["table_class"] : (function () { throw new Twig_Error_Runtime('Variable "table_class" does not exist.', 139, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
            echo "\">
                <thead>
                    <tr>";
            // line 142
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 142, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 142, $this->getSourceContext()); })()), "years", array()), 'label');
                echo "</th>";
            }
            // line 143
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 143, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()), "months", array()), 'label');
                echo "</th>";
            }
            // line 144
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 144, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 144, $this->getSourceContext()); })()), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 145
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 145, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 145, $this->getSourceContext()); })()), "days", array()), 'label');
                echo "</th>";
            }
            // line 146
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 146, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 146, $this->getSourceContext()); })()), "hours", array()), 'label');
                echo "</th>";
            }
            // line 147
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 147, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 147, $this->getSourceContext()); })()), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 148
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 148, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 148, $this->getSourceContext()); })()), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 149
            echo "</tr>
                </thead>
                <tbody>
                    <tr>";
            // line 153
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 153, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 153, $this->getSourceContext()); })()), "years", array()), 'widget');
                echo "</td>";
            }
            // line 154
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 154, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 154, $this->getSourceContext()); })()), "months", array()), 'widget');
                echo "</td>";
            }
            // line 155
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 155, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 155, $this->getSourceContext()); })()), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 156
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 156, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 156, $this->getSourceContext()); })()), "days", array()), 'widget');
                echo "</td>";
            }
            // line 157
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 157, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 157, $this->getSourceContext()); })()), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 158
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 158, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 158, $this->getSourceContext()); })()), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 159
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 159, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 159, $this->getSourceContext()); })()), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 160
            echo "</tr>
                </tbody>
            </table>";
            // line 163
            if ((isset($context["with_invert"]) || array_key_exists("with_invert", $context) ? $context["with_invert"] : (function () { throw new Twig_Error_Runtime('Variable "with_invert" does not exist.', 163, $this->getSourceContext()); })())) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 163, $this->getSourceContext()); })()), "invert", array()), 'widget');
            }
            // line 164
            echo "</div>";
        }
        
        $__internal_6038bf46ee5078a195a22240c2219697a3aeb4559bdfe7d171d15dc8fba396a6->leave($__internal_6038bf46ee5078a195a22240c2219697a3aeb4559bdfe7d171d15dc8fba396a6_prof);

        
        $__internal_d8604ce1633f69f4a678f9524387f47dd3fa9c7b2b785752e534ec8a8a3b89dc->leave($__internal_d8604ce1633f69f4a678f9524387f47dd3fa9c7b2b785752e534ec8a8a3b89dc_prof);

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_38ac40419b1b80941a90ae8da0332e4c6339c53c75e6bcdc1538769b9d40253b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38ac40419b1b80941a90ae8da0332e4c6339c53c75e6bcdc1538769b9d40253b->enter($__internal_38ac40419b1b80941a90ae8da0332e4c6339c53c75e6bcdc1538769b9d40253b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_2c1024da9e81f5bbe8b20391d8872372c8b5537c0baba3d25a6a29c84b67460a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c1024da9e81f5bbe8b20391d8872372c8b5537c0baba3d25a6a29c84b67460a->enter($__internal_2c1024da9e81f5bbe8b20391d8872372c8b5537c0baba3d25a6a29c84b67460a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 170, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_2c1024da9e81f5bbe8b20391d8872372c8b5537c0baba3d25a6a29c84b67460a->leave($__internal_2c1024da9e81f5bbe8b20391d8872372c8b5537c0baba3d25a6a29c84b67460a_prof);

        
        $__internal_38ac40419b1b80941a90ae8da0332e4c6339c53c75e6bcdc1538769b9d40253b->leave($__internal_38ac40419b1b80941a90ae8da0332e4c6339c53c75e6bcdc1538769b9d40253b_prof);

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_3f9dc9fe015bce40f72a0f820dfefcee7524a6c5a0ded20f66161475acb879cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f9dc9fe015bce40f72a0f820dfefcee7524a6c5a0ded20f66161475acb879cc->enter($__internal_3f9dc9fe015bce40f72a0f820dfefcee7524a6c5a0ded20f66161475acb879cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        $__internal_d5edc084349415cf78e6ee21853062ee4edd2d5957539c6ada899d14c4773355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5edc084349415cf78e6ee21853062ee4edd2d5957539c6ada899d14c4773355->enter($__internal_d5edc084349415cf78e6ee21853062ee4edd2d5957539c6ada899d14c4773355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 175, $this->getSourceContext()); })()), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d5edc084349415cf78e6ee21853062ee4edd2d5957539c6ada899d14c4773355->leave($__internal_d5edc084349415cf78e6ee21853062ee4edd2d5957539c6ada899d14c4773355_prof);

        
        $__internal_3f9dc9fe015bce40f72a0f820dfefcee7524a6c5a0ded20f66161475acb879cc->leave($__internal_3f9dc9fe015bce40f72a0f820dfefcee7524a6c5a0ded20f66161475acb879cc_prof);

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_ffe90a677daa2b0699a247566f6fc8e1fc3303c290fcd1f9a4c4f885826302c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffe90a677daa2b0699a247566f6fc8e1fc3303c290fcd1f9a4c4f885826302c1->enter($__internal_ffe90a677daa2b0699a247566f6fc8e1fc3303c290fcd1f9a4c4f885826302c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_45220c3370de98b39bb7c5d77e739379f42a8d525e7b21ecb971e06aa30264d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45220c3370de98b39bb7c5d77e739379f42a8d525e7b21ecb971e06aa30264d7->enter($__internal_45220c3370de98b39bb7c5d77e739379f42a8d525e7b21ecb971e06aa30264d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 180
        echo twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 180, $this->getSourceContext()); })()), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_45220c3370de98b39bb7c5d77e739379f42a8d525e7b21ecb971e06aa30264d7->leave($__internal_45220c3370de98b39bb7c5d77e739379f42a8d525e7b21ecb971e06aa30264d7_prof);

        
        $__internal_ffe90a677daa2b0699a247566f6fc8e1fc3303c290fcd1f9a4c4f885826302c1->leave($__internal_ffe90a677daa2b0699a247566f6fc8e1fc3303c290fcd1f9a4c4f885826302c1_prof);

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_065ea335f6171ad9cab5e9c7c4984aeb752c28d9e6878d359e6e1043e25a7209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065ea335f6171ad9cab5e9c7c4984aeb752c28d9e6878d359e6e1043e25a7209->enter($__internal_065ea335f6171ad9cab5e9c7c4984aeb752c28d9e6878d359e6e1043e25a7209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        $__internal_e2c51cd903b6053c5eb7848c63af0b6a1db682e1a386dbe6ebfe87c2165cd99e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2c51cd903b6053c5eb7848c63af0b6a1db682e1a386dbe6ebfe87c2165cd99e->enter($__internal_e2c51cd903b6053c5eb7848c63af0b6a1db682e1a386dbe6ebfe87c2165cd99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 184, $this->getSourceContext()); })()), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e2c51cd903b6053c5eb7848c63af0b6a1db682e1a386dbe6ebfe87c2165cd99e->leave($__internal_e2c51cd903b6053c5eb7848c63af0b6a1db682e1a386dbe6ebfe87c2165cd99e_prof);

        
        $__internal_065ea335f6171ad9cab5e9c7c4984aeb752c28d9e6878d359e6e1043e25a7209->leave($__internal_065ea335f6171ad9cab5e9c7c4984aeb752c28d9e6878d359e6e1043e25a7209_prof);

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_c64ed9dc2c65e9f10c650182267599755a5359aaeb48925bf5e486da3661a0d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c64ed9dc2c65e9f10c650182267599755a5359aaeb48925bf5e486da3661a0d8->enter($__internal_c64ed9dc2c65e9f10c650182267599755a5359aaeb48925bf5e486da3661a0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        $__internal_2f6fade788f18fe5ffb01bc382295f2d4de3feb8b3f92b047106d8198cb376d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f6fade788f18fe5ffb01bc382295f2d4de3feb8b3f92b047106d8198cb376d3->enter($__internal_2f6fade788f18fe5ffb01bc382295f2d4de3feb8b3f92b047106d8198cb376d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 189, $this->getSourceContext()); })()), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_2f6fade788f18fe5ffb01bc382295f2d4de3feb8b3f92b047106d8198cb376d3->leave($__internal_2f6fade788f18fe5ffb01bc382295f2d4de3feb8b3f92b047106d8198cb376d3_prof);

        
        $__internal_c64ed9dc2c65e9f10c650182267599755a5359aaeb48925bf5e486da3661a0d8->leave($__internal_c64ed9dc2c65e9f10c650182267599755a5359aaeb48925bf5e486da3661a0d8_prof);

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_8c3ed1dfffdd04e87b0f667a83ea7e987ebcfdc96d941eafacf1b099451c3d7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c3ed1dfffdd04e87b0f667a83ea7e987ebcfdc96d941eafacf1b099451c3d7d->enter($__internal_8c3ed1dfffdd04e87b0f667a83ea7e987ebcfdc96d941eafacf1b099451c3d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_e1e654d8ec0daa042ad5767fb485f903ad01fab65afbd04c3f6d166cb54df572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1e654d8ec0daa042ad5767fb485f903ad01fab65afbd04c3f6d166cb54df572->enter($__internal_e1e654d8ec0daa042ad5767fb485f903ad01fab65afbd04c3f6d166cb54df572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 194, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_e1e654d8ec0daa042ad5767fb485f903ad01fab65afbd04c3f6d166cb54df572->leave($__internal_e1e654d8ec0daa042ad5767fb485f903ad01fab65afbd04c3f6d166cb54df572_prof);

        
        $__internal_8c3ed1dfffdd04e87b0f667a83ea7e987ebcfdc96d941eafacf1b099451c3d7d->leave($__internal_8c3ed1dfffdd04e87b0f667a83ea7e987ebcfdc96d941eafacf1b099451c3d7d_prof);

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_ecdf2252eef3a76dc3175c9e9f9d586d7b01d92c228826f425b129813932b86a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecdf2252eef3a76dc3175c9e9f9d586d7b01d92c228826f425b129813932b86a->enter($__internal_ecdf2252eef3a76dc3175c9e9f9d586d7b01d92c228826f425b129813932b86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        $__internal_28821e5f5ab6443f2f3d129642dd92a945f5f567982662d02eba009062bffc92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28821e5f5ab6443f2f3d129642dd92a945f5f567982662d02eba009062bffc92->enter($__internal_28821e5f5ab6443f2f3d129642dd92a945f5f567982662d02eba009062bffc92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 199, $this->getSourceContext()); })()), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_28821e5f5ab6443f2f3d129642dd92a945f5f567982662d02eba009062bffc92->leave($__internal_28821e5f5ab6443f2f3d129642dd92a945f5f567982662d02eba009062bffc92_prof);

        
        $__internal_ecdf2252eef3a76dc3175c9e9f9d586d7b01d92c228826f425b129813932b86a->leave($__internal_ecdf2252eef3a76dc3175c9e9f9d586d7b01d92c228826f425b129813932b86a_prof);

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_39968b80079ca22329c8b4d86917d434d1bebe47470393e342b8c30fb09fe3d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39968b80079ca22329c8b4d86917d434d1bebe47470393e342b8c30fb09fe3d4->enter($__internal_39968b80079ca22329c8b4d86917d434d1bebe47470393e342b8c30fb09fe3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        $__internal_19a58710f3d4eb3659128aa57af609bba7f470f57a6ce852986298c5ed243758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19a58710f3d4eb3659128aa57af609bba7f470f57a6ce852986298c5ed243758->enter($__internal_19a58710f3d4eb3659128aa57af609bba7f470f57a6ce852986298c5ed243758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 204, $this->getSourceContext()); })()), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_19a58710f3d4eb3659128aa57af609bba7f470f57a6ce852986298c5ed243758->leave($__internal_19a58710f3d4eb3659128aa57af609bba7f470f57a6ce852986298c5ed243758_prof);

        
        $__internal_39968b80079ca22329c8b4d86917d434d1bebe47470393e342b8c30fb09fe3d4->leave($__internal_39968b80079ca22329c8b4d86917d434d1bebe47470393e342b8c30fb09fe3d4_prof);

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_5b2116a389eaa550259ece2f4d7341b76599657290a8fc9c405a37df6dc0d234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b2116a389eaa550259ece2f4d7341b76599657290a8fc9c405a37df6dc0d234->enter($__internal_5b2116a389eaa550259ece2f4d7341b76599657290a8fc9c405a37df6dc0d234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_c2d4ccfcfaee243a8d7b876bf3ed968a522117991e8b9dfc65574bfab051d423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2d4ccfcfaee243a8d7b876bf3ed968a522117991e8b9dfc65574bfab051d423->enter($__internal_c2d4ccfcfaee243a8d7b876bf3ed968a522117991e8b9dfc65574bfab051d423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 209, $this->getSourceContext()); })()), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_c2d4ccfcfaee243a8d7b876bf3ed968a522117991e8b9dfc65574bfab051d423->leave($__internal_c2d4ccfcfaee243a8d7b876bf3ed968a522117991e8b9dfc65574bfab051d423_prof);

        
        $__internal_5b2116a389eaa550259ece2f4d7341b76599657290a8fc9c405a37df6dc0d234->leave($__internal_5b2116a389eaa550259ece2f4d7341b76599657290a8fc9c405a37df6dc0d234_prof);

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_93ee314f17375f7390cc0a38ec2d85eb41f12e581294fcef8b13c1b1dc0325f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ee314f17375f7390cc0a38ec2d85eb41f12e581294fcef8b13c1b1dc0325f9->enter($__internal_93ee314f17375f7390cc0a38ec2d85eb41f12e581294fcef8b13c1b1dc0325f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        $__internal_4b7249548daf16b7c918cfa3cc60aeb23ce8bbce789e3ce686d222bc24805f31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b7249548daf16b7c918cfa3cc60aeb23ce8bbce789e3ce686d222bc24805f31->enter($__internal_4b7249548daf16b7c918cfa3cc60aeb23ce8bbce789e3ce686d222bc24805f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 214, $this->getSourceContext()); })()), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_4b7249548daf16b7c918cfa3cc60aeb23ce8bbce789e3ce686d222bc24805f31->leave($__internal_4b7249548daf16b7c918cfa3cc60aeb23ce8bbce789e3ce686d222bc24805f31_prof);

        
        $__internal_93ee314f17375f7390cc0a38ec2d85eb41f12e581294fcef8b13c1b1dc0325f9->leave($__internal_93ee314f17375f7390cc0a38ec2d85eb41f12e581294fcef8b13c1b1dc0325f9_prof);

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_05bf6ee26bc1a266485f3f690409ba1c586a71e142ed2bd12dcd2ee08d935c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05bf6ee26bc1a266485f3f690409ba1c586a71e142ed2bd12dcd2ee08d935c3f->enter($__internal_05bf6ee26bc1a266485f3f690409ba1c586a71e142ed2bd12dcd2ee08d935c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_fd2b92cee5401eaa683713d360a10ed584c8e184e84c6a7396f8ccdde6ca866f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd2b92cee5401eaa683713d360a10ed584c8e184e84c6a7396f8ccdde6ca866f->enter($__internal_fd2b92cee5401eaa683713d360a10ed584c8e184e84c6a7396f8ccdde6ca866f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 219
        if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 219, $this->getSourceContext()); })()))) {
            // line 220
            if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 220, $this->getSourceContext()); })()))) {
                // line 221
                $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 221, $this->getSourceContext()); })()), array("%name%" =>                 // line 222
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 222, $this->getSourceContext()); })()), "%id%" =>                 // line 223
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 223, $this->getSourceContext()); })())));
            } elseif ((            // line 225
(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 225, $this->getSourceContext()); })()) === false)) {
                // line 226
                $context["translation_domain"] = false;
            } else {
                // line 228
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 228, $this->getSourceContext()); })()));
            }
        }
        // line 231
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 231, $this->getSourceContext()); })()), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 231, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 231, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 231, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 231, $this->getSourceContext()); })())))), "html", null, true);
        echo "</button>";
        
        $__internal_fd2b92cee5401eaa683713d360a10ed584c8e184e84c6a7396f8ccdde6ca866f->leave($__internal_fd2b92cee5401eaa683713d360a10ed584c8e184e84c6a7396f8ccdde6ca866f_prof);

        
        $__internal_05bf6ee26bc1a266485f3f690409ba1c586a71e142ed2bd12dcd2ee08d935c3f->leave($__internal_05bf6ee26bc1a266485f3f690409ba1c586a71e142ed2bd12dcd2ee08d935c3f_prof);

    }

    // line 234
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_91074f18b48bb37a035eda2120554f30ae3e287d563b5af36cefa540d487ac17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91074f18b48bb37a035eda2120554f30ae3e287d563b5af36cefa540d487ac17->enter($__internal_91074f18b48bb37a035eda2120554f30ae3e287d563b5af36cefa540d487ac17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        $__internal_e724205a5f5ba575ee7103bbad23a3922125215796f354a83e39d6383dddc09c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e724205a5f5ba575ee7103bbad23a3922125215796f354a83e39d6383dddc09c->enter($__internal_e724205a5f5ba575ee7103bbad23a3922125215796f354a83e39d6383dddc09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 235
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 235, $this->getSourceContext()); })()), "submit")) : ("submit"));
        // line 236
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_e724205a5f5ba575ee7103bbad23a3922125215796f354a83e39d6383dddc09c->leave($__internal_e724205a5f5ba575ee7103bbad23a3922125215796f354a83e39d6383dddc09c_prof);

        
        $__internal_91074f18b48bb37a035eda2120554f30ae3e287d563b5af36cefa540d487ac17->leave($__internal_91074f18b48bb37a035eda2120554f30ae3e287d563b5af36cefa540d487ac17_prof);

    }

    // line 239
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_2f4d75d708c04e7a3561eeafee3c6a4cef0be6242e5b880887cffa6fccb9003d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f4d75d708c04e7a3561eeafee3c6a4cef0be6242e5b880887cffa6fccb9003d->enter($__internal_2f4d75d708c04e7a3561eeafee3c6a4cef0be6242e5b880887cffa6fccb9003d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        $__internal_cc3761a7339f9850008d875adc105abd680074f5f1a89422aadbe7269f94e070 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc3761a7339f9850008d875adc105abd680074f5f1a89422aadbe7269f94e070->enter($__internal_cc3761a7339f9850008d875adc105abd680074f5f1a89422aadbe7269f94e070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 240
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 240, $this->getSourceContext()); })()), "reset")) : ("reset"));
        // line 241
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_cc3761a7339f9850008d875adc105abd680074f5f1a89422aadbe7269f94e070->leave($__internal_cc3761a7339f9850008d875adc105abd680074f5f1a89422aadbe7269f94e070_prof);

        
        $__internal_2f4d75d708c04e7a3561eeafee3c6a4cef0be6242e5b880887cffa6fccb9003d->leave($__internal_2f4d75d708c04e7a3561eeafee3c6a4cef0be6242e5b880887cffa6fccb9003d_prof);

    }

    // line 244
    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_29d747542841bd4d61b4c00de07e07f7a6f7bb90be7c5392ee86e4cfb2e5f8c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29d747542841bd4d61b4c00de07e07f7a6f7bb90be7c5392ee86e4cfb2e5f8c7->enter($__internal_29d747542841bd4d61b4c00de07e07f7a6f7bb90be7c5392ee86e4cfb2e5f8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_ed7688623de2c4f368ea853ec5f5e7fdf7f4ba3fb61048ddddc7e0ea5b3a5237 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed7688623de2c4f368ea853ec5f5e7fdf7f4ba3fb61048ddddc7e0ea5b3a5237->enter($__internal_ed7688623de2c4f368ea853ec5f5e7fdf7f4ba3fb61048ddddc7e0ea5b3a5237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 245
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 245, $this->getSourceContext()); })()), "tel")) : ("tel"));
        // line 246
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ed7688623de2c4f368ea853ec5f5e7fdf7f4ba3fb61048ddddc7e0ea5b3a5237->leave($__internal_ed7688623de2c4f368ea853ec5f5e7fdf7f4ba3fb61048ddddc7e0ea5b3a5237_prof);

        
        $__internal_29d747542841bd4d61b4c00de07e07f7a6f7bb90be7c5392ee86e4cfb2e5f8c7->leave($__internal_29d747542841bd4d61b4c00de07e07f7a6f7bb90be7c5392ee86e4cfb2e5f8c7_prof);

    }

    // line 249
    public function block_color_widget($context, array $blocks = array())
    {
        $__internal_92910c24d189f328b1c22ea8041d6868669403f8f5bf267a5506d6268f45e206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92910c24d189f328b1c22ea8041d6868669403f8f5bf267a5506d6268f45e206->enter($__internal_92910c24d189f328b1c22ea8041d6868669403f8f5bf267a5506d6268f45e206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        $__internal_d3d8b9df9bbe112e88e2a2ad66d5416e1ebd7f7088a41d8cb357c1d43fd0a0cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3d8b9df9bbe112e88e2a2ad66d5416e1ebd7f7088a41d8cb357c1d43fd0a0cc->enter($__internal_d3d8b9df9bbe112e88e2a2ad66d5416e1ebd7f7088a41d8cb357c1d43fd0a0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        // line 250
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 250, $this->getSourceContext()); })()), "color")) : ("color"));
        // line 251
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d3d8b9df9bbe112e88e2a2ad66d5416e1ebd7f7088a41d8cb357c1d43fd0a0cc->leave($__internal_d3d8b9df9bbe112e88e2a2ad66d5416e1ebd7f7088a41d8cb357c1d43fd0a0cc_prof);

        
        $__internal_92910c24d189f328b1c22ea8041d6868669403f8f5bf267a5506d6268f45e206->leave($__internal_92910c24d189f328b1c22ea8041d6868669403f8f5bf267a5506d6268f45e206_prof);

    }

    // line 256
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_eae04b618810fc693c5772b69eba97abff421a61cf744e5b2ef22323bab0a211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eae04b618810fc693c5772b69eba97abff421a61cf744e5b2ef22323bab0a211->enter($__internal_eae04b618810fc693c5772b69eba97abff421a61cf744e5b2ef22323bab0a211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_29c139f1d2dd5281fce96b3ed77586b334bce6e5ceae6429c69258974b4cb401 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29c139f1d2dd5281fce96b3ed77586b334bce6e5ceae6429c69258974b4cb401->enter($__internal_29c139f1d2dd5281fce96b3ed77586b334bce6e5ceae6429c69258974b4cb401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 257
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 257, $this->getSourceContext()); })()) === false)) {
            // line 258
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 258, $this->getSourceContext()); })())) {
                // line 259
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 259, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 259, $this->getSourceContext()); })())));
            }
            // line 261
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 261, $this->getSourceContext()); })())) {
                // line 262
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 262, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 264
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 264, $this->getSourceContext()); })()))) {
                // line 265
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 265, $this->getSourceContext()); })()))) {
                    // line 266
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 266, $this->getSourceContext()); })()), array("%name%" =>                     // line 267
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 267, $this->getSourceContext()); })()), "%id%" =>                     // line 268
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 268, $this->getSourceContext()); })())));
                } else {
                    // line 271
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 271, $this->getSourceContext()); })()));
                }
            }
            // line 274
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 274, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            if ((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 274, $this->getSourceContext()); })())) {
                $__internal_0d4ef67822b76a5c94def4b0ef2a2f1fa08d3df83bc2009abf08173577b4a8ad = array("attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 274, $this->getSourceContext()); })()));
                if (!is_array($__internal_0d4ef67822b76a5c94def4b0ef2a2f1fa08d3df83bc2009abf08173577b4a8ad)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_0d4ef67822b76a5c94def4b0ef2a2f1fa08d3df83bc2009abf08173577b4a8ad);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 274, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 274, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 274, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 274, $this->getSourceContext()); })())))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 274, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_29c139f1d2dd5281fce96b3ed77586b334bce6e5ceae6429c69258974b4cb401->leave($__internal_29c139f1d2dd5281fce96b3ed77586b334bce6e5ceae6429c69258974b4cb401_prof);

        
        $__internal_eae04b618810fc693c5772b69eba97abff421a61cf744e5b2ef22323bab0a211->leave($__internal_eae04b618810fc693c5772b69eba97abff421a61cf744e5b2ef22323bab0a211_prof);

    }

    // line 278
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_0134e6cdb2a0491bd7ed4dcb4594184ecec586b8692faea8411ba4187b8c82f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0134e6cdb2a0491bd7ed4dcb4594184ecec586b8692faea8411ba4187b8c82f3->enter($__internal_0134e6cdb2a0491bd7ed4dcb4594184ecec586b8692faea8411ba4187b8c82f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        $__internal_c3d3f5e712a4f47485603a1693e8be10be02336823a22a8c08ca948ccb3aa7a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3d3f5e712a4f47485603a1693e8be10be02336823a22a8c08ca948ccb3aa7a3->enter($__internal_c3d3f5e712a4f47485603a1693e8be10be02336823a22a8c08ca948ccb3aa7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_c3d3f5e712a4f47485603a1693e8be10be02336823a22a8c08ca948ccb3aa7a3->leave($__internal_c3d3f5e712a4f47485603a1693e8be10be02336823a22a8c08ca948ccb3aa7a3_prof);

        
        $__internal_0134e6cdb2a0491bd7ed4dcb4594184ecec586b8692faea8411ba4187b8c82f3->leave($__internal_0134e6cdb2a0491bd7ed4dcb4594184ecec586b8692faea8411ba4187b8c82f3_prof);

    }

    // line 282
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_49a2425e94e3e068c2f71db95aad1e1e27464819944f55c8f1edf2d1948de958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49a2425e94e3e068c2f71db95aad1e1e27464819944f55c8f1edf2d1948de958->enter($__internal_49a2425e94e3e068c2f71db95aad1e1e27464819944f55c8f1edf2d1948de958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        $__internal_e65ee971a92fe7fcf733c67d8f8695f886d8255148af99fe1a9166c60a6262de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e65ee971a92fe7fcf733c67d8f8695f886d8255148af99fe1a9166c60a6262de->enter($__internal_e65ee971a92fe7fcf733c67d8f8695f886d8255148af99fe1a9166c60a6262de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 287
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_e65ee971a92fe7fcf733c67d8f8695f886d8255148af99fe1a9166c60a6262de->leave($__internal_e65ee971a92fe7fcf733c67d8f8695f886d8255148af99fe1a9166c60a6262de_prof);

        
        $__internal_49a2425e94e3e068c2f71db95aad1e1e27464819944f55c8f1edf2d1948de958->leave($__internal_49a2425e94e3e068c2f71db95aad1e1e27464819944f55c8f1edf2d1948de958_prof);

    }

    // line 290
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_3f593a49a015cfcc4fc3ec03dffdf346f24b8a0102206f40ae84e3cd999ad9b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f593a49a015cfcc4fc3ec03dffdf346f24b8a0102206f40ae84e3cd999ad9b5->enter($__internal_3f593a49a015cfcc4fc3ec03dffdf346f24b8a0102206f40ae84e3cd999ad9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_11108759a82d6ba43f9460e37441b1d0ad822068c6abb35b7d4eb286c698a360 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11108759a82d6ba43f9460e37441b1d0ad822068c6abb35b7d4eb286c698a360->enter($__internal_11108759a82d6ba43f9460e37441b1d0ad822068c6abb35b7d4eb286c698a360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 291
        echo "<div>";
        // line 292
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 292, $this->getSourceContext()); })()), 'label');
        // line 293
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 293, $this->getSourceContext()); })()), 'errors');
        // line 294
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 294, $this->getSourceContext()); })()), 'widget');
        // line 295
        echo "</div>";
        
        $__internal_11108759a82d6ba43f9460e37441b1d0ad822068c6abb35b7d4eb286c698a360->leave($__internal_11108759a82d6ba43f9460e37441b1d0ad822068c6abb35b7d4eb286c698a360_prof);

        
        $__internal_3f593a49a015cfcc4fc3ec03dffdf346f24b8a0102206f40ae84e3cd999ad9b5->leave($__internal_3f593a49a015cfcc4fc3ec03dffdf346f24b8a0102206f40ae84e3cd999ad9b5_prof);

    }

    // line 298
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_ca23e750f09c68c72086f50ef5c92c350484038575b7f9355854d6e23115f610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca23e750f09c68c72086f50ef5c92c350484038575b7f9355854d6e23115f610->enter($__internal_ca23e750f09c68c72086f50ef5c92c350484038575b7f9355854d6e23115f610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_d9c5bfd68e653a38b5b5a8bd5702aa5d272a9b67acf3726b273f46434b6b0d31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9c5bfd68e653a38b5b5a8bd5702aa5d272a9b67acf3726b273f46434b6b0d31->enter($__internal_d9c5bfd68e653a38b5b5a8bd5702aa5d272a9b67acf3726b273f46434b6b0d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 299
        echo "<div>";
        // line 300
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 300, $this->getSourceContext()); })()), 'widget');
        // line 301
        echo "</div>";
        
        $__internal_d9c5bfd68e653a38b5b5a8bd5702aa5d272a9b67acf3726b273f46434b6b0d31->leave($__internal_d9c5bfd68e653a38b5b5a8bd5702aa5d272a9b67acf3726b273f46434b6b0d31_prof);

        
        $__internal_ca23e750f09c68c72086f50ef5c92c350484038575b7f9355854d6e23115f610->leave($__internal_ca23e750f09c68c72086f50ef5c92c350484038575b7f9355854d6e23115f610_prof);

    }

    // line 304
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_723ae62cd7fb9e36b749e442b41512138697078d60e1292ba7aa3344cea09c08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_723ae62cd7fb9e36b749e442b41512138697078d60e1292ba7aa3344cea09c08->enter($__internal_723ae62cd7fb9e36b749e442b41512138697078d60e1292ba7aa3344cea09c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_cb9c8834ec9c2a2fa82f19349bfd78ef5c7e3706a6e968b4fa4e2da1d2f615f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb9c8834ec9c2a2fa82f19349bfd78ef5c7e3706a6e968b4fa4e2da1d2f615f1->enter($__internal_cb9c8834ec9c2a2fa82f19349bfd78ef5c7e3706a6e968b4fa4e2da1d2f615f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 305
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 305, $this->getSourceContext()); })()), 'widget');
        
        $__internal_cb9c8834ec9c2a2fa82f19349bfd78ef5c7e3706a6e968b4fa4e2da1d2f615f1->leave($__internal_cb9c8834ec9c2a2fa82f19349bfd78ef5c7e3706a6e968b4fa4e2da1d2f615f1_prof);

        
        $__internal_723ae62cd7fb9e36b749e442b41512138697078d60e1292ba7aa3344cea09c08->leave($__internal_723ae62cd7fb9e36b749e442b41512138697078d60e1292ba7aa3344cea09c08_prof);

    }

    // line 310
    public function block_form($context, array $blocks = array())
    {
        $__internal_d523f38a10969c2015e999eb86970be334d30dc9e1fcfde8cf6eb0060a86117d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d523f38a10969c2015e999eb86970be334d30dc9e1fcfde8cf6eb0060a86117d->enter($__internal_d523f38a10969c2015e999eb86970be334d30dc9e1fcfde8cf6eb0060a86117d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_48e569cb9ef30d8684891d8ae5c0313ee24e5a9b572b5dcae43b53f4642fc746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48e569cb9ef30d8684891d8ae5c0313ee24e5a9b572b5dcae43b53f4642fc746->enter($__internal_48e569cb9ef30d8684891d8ae5c0313ee24e5a9b572b5dcae43b53f4642fc746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 311
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 311, $this->getSourceContext()); })()), 'form_start');
        // line 312
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 312, $this->getSourceContext()); })()), 'widget');
        // line 313
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 313, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_48e569cb9ef30d8684891d8ae5c0313ee24e5a9b572b5dcae43b53f4642fc746->leave($__internal_48e569cb9ef30d8684891d8ae5c0313ee24e5a9b572b5dcae43b53f4642fc746_prof);

        
        $__internal_d523f38a10969c2015e999eb86970be334d30dc9e1fcfde8cf6eb0060a86117d->leave($__internal_d523f38a10969c2015e999eb86970be334d30dc9e1fcfde8cf6eb0060a86117d_prof);

    }

    // line 316
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_e836e3a4ba1edc79030ce86c6f294cbbede21d683ab2e77d10ad78e72266d70a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e836e3a4ba1edc79030ce86c6f294cbbede21d683ab2e77d10ad78e72266d70a->enter($__internal_e836e3a4ba1edc79030ce86c6f294cbbede21d683ab2e77d10ad78e72266d70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_55c5b37fbcb793b83627d1de53b9457dca9e9175cb23ed4ae2dd48512b9526aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55c5b37fbcb793b83627d1de53b9457dca9e9175cb23ed4ae2dd48512b9526aa->enter($__internal_55c5b37fbcb793b83627d1de53b9457dca9e9175cb23ed4ae2dd48512b9526aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 317
        twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 317, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
        // line 318
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 318, $this->getSourceContext()); })()));
        // line 319
        if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 319, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
            // line 320
            $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 320, $this->getSourceContext()); })());
        } else {
            // line 322
            $context["form_method"] = "POST";
        }
        // line 324
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 324, $this->getSourceContext()); })()), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 324, $this->getSourceContext()); })())), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 324, $this->getSourceContext()); })()) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 324, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 324, $this->getSourceContext()); })()));
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
        if ((isset($context["multipart"]) || array_key_exists("multipart", $context) ? $context["multipart"] : (function () { throw new Twig_Error_Runtime('Variable "multipart" does not exist.', 324, $this->getSourceContext()); })())) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 325
        if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 325, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 325, $this->getSourceContext()); })()))) {
            // line 326
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 326, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />";
        }
        
        $__internal_55c5b37fbcb793b83627d1de53b9457dca9e9175cb23ed4ae2dd48512b9526aa->leave($__internal_55c5b37fbcb793b83627d1de53b9457dca9e9175cb23ed4ae2dd48512b9526aa_prof);

        
        $__internal_e836e3a4ba1edc79030ce86c6f294cbbede21d683ab2e77d10ad78e72266d70a->leave($__internal_e836e3a4ba1edc79030ce86c6f294cbbede21d683ab2e77d10ad78e72266d70a_prof);

    }

    // line 330
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_f0b92f46485272505890a0675b30ea3f7f6295744281864be8e834268b1aa17b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0b92f46485272505890a0675b30ea3f7f6295744281864be8e834268b1aa17b->enter($__internal_f0b92f46485272505890a0675b30ea3f7f6295744281864be8e834268b1aa17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        $__internal_bc271a476dba5a0560b137340d8c7c9c388157c085c24fa2f288ecd3f44eef94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc271a476dba5a0560b137340d8c7c9c388157c085c24fa2f288ecd3f44eef94->enter($__internal_bc271a476dba5a0560b137340d8c7c9c388157c085c24fa2f288ecd3f44eef94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 331
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new Twig_Error_Runtime('Variable "render_rest" does not exist.', 331, $this->getSourceContext()); })()))) {
            // line 332
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 332, $this->getSourceContext()); })()), 'rest');
        }
        // line 334
        echo "</form>";
        
        $__internal_bc271a476dba5a0560b137340d8c7c9c388157c085c24fa2f288ecd3f44eef94->leave($__internal_bc271a476dba5a0560b137340d8c7c9c388157c085c24fa2f288ecd3f44eef94_prof);

        
        $__internal_f0b92f46485272505890a0675b30ea3f7f6295744281864be8e834268b1aa17b->leave($__internal_f0b92f46485272505890a0675b30ea3f7f6295744281864be8e834268b1aa17b_prof);

    }

    // line 337
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_ba9c550c1f3add8736b4ce7624158b378942db89cd80caef3cf0bfc8d5e09968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba9c550c1f3add8736b4ce7624158b378942db89cd80caef3cf0bfc8d5e09968->enter($__internal_ba9c550c1f3add8736b4ce7624158b378942db89cd80caef3cf0bfc8d5e09968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_48348db961a0d739ea806abd2712bb1ac85a6634069931edcc5d7bd9d3f969f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48348db961a0d739ea806abd2712bb1ac85a6634069931edcc5d7bd9d3f969f5->enter($__internal_48348db961a0d739ea806abd2712bb1ac85a6634069931edcc5d7bd9d3f969f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 338
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 338, $this->getSourceContext()); })())) > 0)) {
            // line 339
            echo "<ul>";
            // line 340
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 340, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 341
                echo "<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 343
            echo "</ul>";
        }
        
        $__internal_48348db961a0d739ea806abd2712bb1ac85a6634069931edcc5d7bd9d3f969f5->leave($__internal_48348db961a0d739ea806abd2712bb1ac85a6634069931edcc5d7bd9d3f969f5_prof);

        
        $__internal_ba9c550c1f3add8736b4ce7624158b378942db89cd80caef3cf0bfc8d5e09968->leave($__internal_ba9c550c1f3add8736b4ce7624158b378942db89cd80caef3cf0bfc8d5e09968_prof);

    }

    // line 347
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_f8a19bd374248fb9ca587ff79def77f2a72391b6d12489771103f763c228bc65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8a19bd374248fb9ca587ff79def77f2a72391b6d12489771103f763c228bc65->enter($__internal_f8a19bd374248fb9ca587ff79def77f2a72391b6d12489771103f763c228bc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        $__internal_5339c5410ad67750fa9a4f079dceb0b8733c7ced5cb289bfeaf34371a9e1fb21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5339c5410ad67750fa9a4f079dceb0b8733c7ced5cb289bfeaf34371a9e1fb21->enter($__internal_5339c5410ad67750fa9a4f079dceb0b8733c7ced5cb289bfeaf34371a9e1fb21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 348
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 348, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 349
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "rendered", array())) {
                // line 350
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 354
        if (( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 354, $this->getSourceContext()); })()), "methodRendered", array()) && Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 354, $this->getSourceContext()); })())))) {
            // line 355
            twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 355, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
            // line 356
            $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 356, $this->getSourceContext()); })()));
            // line 357
            if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 357, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
                // line 358
                $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 358, $this->getSourceContext()); })());
            } else {
                // line 360
                $context["form_method"] = "POST";
            }
            // line 363
            if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 363, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 363, $this->getSourceContext()); })()))) {
                // line 364
                echo "<input type=\"hidden\" name=\"_method\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 364, $this->getSourceContext()); })()), "html", null, true);
                echo "\" />";
            }
        }
        
        $__internal_5339c5410ad67750fa9a4f079dceb0b8733c7ced5cb289bfeaf34371a9e1fb21->leave($__internal_5339c5410ad67750fa9a4f079dceb0b8733c7ced5cb289bfeaf34371a9e1fb21_prof);

        
        $__internal_f8a19bd374248fb9ca587ff79def77f2a72391b6d12489771103f763c228bc65->leave($__internal_f8a19bd374248fb9ca587ff79def77f2a72391b6d12489771103f763c228bc65_prof);

    }

    // line 371
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_39d78578ca3541676cd79eb1287a7d7022a8b64e82b52e00b0ce509d03906584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d78578ca3541676cd79eb1287a7d7022a8b64e82b52e00b0ce509d03906584->enter($__internal_39d78578ca3541676cd79eb1287a7d7022a8b64e82b52e00b0ce509d03906584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        $__internal_64beb6a2740736c03f495133c3ed7205662b245b2d2ec4ceb2c8a21ad87a200d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64beb6a2740736c03f495133c3ed7205662b245b2d2ec4ceb2c8a21ad87a200d->enter($__internal_64beb6a2740736c03f495133c3ed7205662b245b2d2ec4ceb2c8a21ad87a200d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 372
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 372, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 373
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_64beb6a2740736c03f495133c3ed7205662b245b2d2ec4ceb2c8a21ad87a200d->leave($__internal_64beb6a2740736c03f495133c3ed7205662b245b2d2ec4ceb2c8a21ad87a200d_prof);

        
        $__internal_39d78578ca3541676cd79eb1287a7d7022a8b64e82b52e00b0ce509d03906584->leave($__internal_39d78578ca3541676cd79eb1287a7d7022a8b64e82b52e00b0ce509d03906584_prof);

    }

    // line 377
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_36548b8dd12f0c349a6981df2926bc01e607a150d0f35db7b742402acd91667c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36548b8dd12f0c349a6981df2926bc01e607a150d0f35db7b742402acd91667c->enter($__internal_36548b8dd12f0c349a6981df2926bc01e607a150d0f35db7b742402acd91667c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_c5253985fcd850c3f2074a5d3bcfb3819a2a24950ae9703b5d7e2cf0d5b5aa3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5253985fcd850c3f2074a5d3bcfb3819a2a24950ae9703b5d7e2cf0d5b5aa3c->enter($__internal_c5253985fcd850c3f2074a5d3bcfb3819a2a24950ae9703b5d7e2cf0d5b5aa3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 378
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 378, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 378, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        // line 379
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 379, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 380
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 380, $this->getSourceContext()); })())) {
            echo " required=\"required\"";
        }
        // line 381
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_c5253985fcd850c3f2074a5d3bcfb3819a2a24950ae9703b5d7e2cf0d5b5aa3c->leave($__internal_c5253985fcd850c3f2074a5d3bcfb3819a2a24950ae9703b5d7e2cf0d5b5aa3c_prof);

        
        $__internal_36548b8dd12f0c349a6981df2926bc01e607a150d0f35db7b742402acd91667c->leave($__internal_36548b8dd12f0c349a6981df2926bc01e607a150d0f35db7b742402acd91667c_prof);

    }

    // line 384
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_fd1182634d1243834214544d238b50bd53206f04e13b744e1bdefe5e70f7d804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd1182634d1243834214544d238b50bd53206f04e13b744e1bdefe5e70f7d804->enter($__internal_fd1182634d1243834214544d238b50bd53206f04e13b744e1bdefe5e70f7d804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        $__internal_558b2c54f8612c3a60f589ed1d6446bdb2023308b306b8778e3122057df43b13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_558b2c54f8612c3a60f589ed1d6446bdb2023308b306b8778e3122057df43b13->enter($__internal_558b2c54f8612c3a60f589ed1d6446bdb2023308b306b8778e3122057df43b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 385
        if ( !twig_test_empty((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 385, $this->getSourceContext()); })()))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 385, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        // line 386
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_558b2c54f8612c3a60f589ed1d6446bdb2023308b306b8778e3122057df43b13->leave($__internal_558b2c54f8612c3a60f589ed1d6446bdb2023308b306b8778e3122057df43b13_prof);

        
        $__internal_fd1182634d1243834214544d238b50bd53206f04e13b744e1bdefe5e70f7d804->leave($__internal_fd1182634d1243834214544d238b50bd53206f04e13b744e1bdefe5e70f7d804_prof);

    }

    // line 389
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_792a5125b0d94413e1dcca55b86b7ed3be726adb3425a72c920eec381b8db733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_792a5125b0d94413e1dcca55b86b7ed3be726adb3425a72c920eec381b8db733->enter($__internal_792a5125b0d94413e1dcca55b86b7ed3be726adb3425a72c920eec381b8db733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        $__internal_f960c9ba194bedcb7cb4ba1147298171f1e018370fb51392edbeb70e1d64b5d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f960c9ba194bedcb7cb4ba1147298171f1e018370fb51392edbeb70e1d64b5d1->enter($__internal_f960c9ba194bedcb7cb4ba1147298171f1e018370fb51392edbeb70e1d64b5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 390
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 390, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 390, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 390, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 391
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_f960c9ba194bedcb7cb4ba1147298171f1e018370fb51392edbeb70e1d64b5d1->leave($__internal_f960c9ba194bedcb7cb4ba1147298171f1e018370fb51392edbeb70e1d64b5d1_prof);

        
        $__internal_792a5125b0d94413e1dcca55b86b7ed3be726adb3425a72c920eec381b8db733->leave($__internal_792a5125b0d94413e1dcca55b86b7ed3be726adb3425a72c920eec381b8db733_prof);

    }

    // line 394
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_06a41173b68d8f87c78f1d461650f27638547102acb0756adf78ec2a5f670fc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06a41173b68d8f87c78f1d461650f27638547102acb0756adf78ec2a5f670fc7->enter($__internal_06a41173b68d8f87c78f1d461650f27638547102acb0756adf78ec2a5f670fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        $__internal_e6ecf02daff033ae367b569276deda3dd5bbc09590e4444792fd4b41ec73c6b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6ecf02daff033ae367b569276deda3dd5bbc09590e4444792fd4b41ec73c6b8->enter($__internal_e6ecf02daff033ae367b569276deda3dd5bbc09590e4444792fd4b41ec73c6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 395
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 395, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 396
            echo " ";
            // line 397
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 398
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 398, $this->getSourceContext()); })()) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 398, $this->getSourceContext()); })())))), "html", null, true);
                echo "\"";
            } elseif ((            // line 399
$context["attrvalue"] === true)) {
                // line 400
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 401
$context["attrvalue"] === false)) {
                // line 402
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e6ecf02daff033ae367b569276deda3dd5bbc09590e4444792fd4b41ec73c6b8->leave($__internal_e6ecf02daff033ae367b569276deda3dd5bbc09590e4444792fd4b41ec73c6b8_prof);

        
        $__internal_06a41173b68d8f87c78f1d461650f27638547102acb0756adf78ec2a5f670fc7->leave($__internal_06a41173b68d8f87c78f1d461650f27638547102acb0756adf78ec2a5f670fc7_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1658 => 402,  1656 => 401,  1651 => 400,  1649 => 399,  1644 => 398,  1642 => 397,  1640 => 396,  1636 => 395,  1627 => 394,  1617 => 391,  1608 => 390,  1599 => 389,  1589 => 386,  1583 => 385,  1574 => 384,  1564 => 381,  1560 => 380,  1556 => 379,  1550 => 378,  1541 => 377,  1527 => 373,  1523 => 372,  1514 => 371,  1500 => 364,  1498 => 363,  1495 => 360,  1492 => 358,  1490 => 357,  1488 => 356,  1486 => 355,  1484 => 354,  1477 => 350,  1475 => 349,  1471 => 348,  1462 => 347,  1451 => 343,  1443 => 341,  1439 => 340,  1437 => 339,  1435 => 338,  1426 => 337,  1416 => 334,  1413 => 332,  1411 => 331,  1402 => 330,  1389 => 326,  1387 => 325,  1360 => 324,  1357 => 322,  1354 => 320,  1352 => 319,  1350 => 318,  1348 => 317,  1339 => 316,  1329 => 313,  1327 => 312,  1325 => 311,  1316 => 310,  1306 => 305,  1297 => 304,  1287 => 301,  1285 => 300,  1283 => 299,  1274 => 298,  1264 => 295,  1262 => 294,  1260 => 293,  1258 => 292,  1256 => 291,  1247 => 290,  1237 => 287,  1228 => 282,  1211 => 278,  1184 => 274,  1180 => 271,  1177 => 268,  1176 => 267,  1175 => 266,  1173 => 265,  1171 => 264,  1168 => 262,  1166 => 261,  1163 => 259,  1161 => 258,  1159 => 257,  1150 => 256,  1140 => 251,  1138 => 250,  1129 => 249,  1119 => 246,  1117 => 245,  1108 => 244,  1098 => 241,  1096 => 240,  1087 => 239,  1077 => 236,  1075 => 235,  1066 => 234,  1050 => 231,  1046 => 228,  1043 => 226,  1041 => 225,  1039 => 223,  1038 => 222,  1037 => 221,  1035 => 220,  1033 => 219,  1024 => 218,  1014 => 215,  1012 => 214,  1003 => 213,  993 => 210,  991 => 209,  982 => 208,  972 => 205,  970 => 204,  961 => 203,  951 => 200,  949 => 199,  940 => 198,  929 => 195,  927 => 194,  918 => 193,  908 => 190,  906 => 189,  897 => 188,  887 => 185,  885 => 184,  876 => 183,  866 => 180,  857 => 179,  847 => 176,  845 => 175,  836 => 174,  826 => 171,  824 => 170,  815 => 168,  804 => 164,  800 => 163,  796 => 160,  790 => 159,  784 => 158,  778 => 157,  772 => 156,  766 => 155,  760 => 154,  754 => 153,  749 => 149,  743 => 148,  737 => 147,  731 => 146,  725 => 145,  719 => 144,  713 => 143,  707 => 142,  701 => 139,  699 => 138,  695 => 137,  692 => 135,  690 => 134,  681 => 133,  670 => 129,  660 => 128,  655 => 127,  653 => 126,  650 => 124,  648 => 123,  639 => 122,  628 => 118,  626 => 116,  625 => 115,  624 => 114,  623 => 113,  619 => 112,  616 => 110,  614 => 109,  605 => 108,  594 => 104,  592 => 103,  590 => 102,  588 => 101,  586 => 100,  582 => 99,  579 => 97,  577 => 96,  568 => 95,  548 => 92,  539 => 91,  519 => 88,  510 => 87,  469 => 82,  466 => 80,  464 => 79,  462 => 78,  457 => 77,  455 => 76,  438 => 75,  429 => 74,  419 => 71,  417 => 70,  415 => 69,  409 => 66,  407 => 65,  405 => 64,  403 => 63,  401 => 62,  392 => 60,  390 => 59,  383 => 58,  380 => 56,  378 => 55,  369 => 54,  359 => 51,  353 => 49,  351 => 48,  347 => 47,  343 => 46,  334 => 45,  323 => 41,  320 => 39,  318 => 38,  309 => 37,  295 => 34,  286 => 33,  276 => 30,  273 => 28,  271 => 27,  262 => 26,  252 => 23,  250 => 22,  248 => 21,  245 => 19,  243 => 18,  239 => 17,  230 => 16,  210 => 13,  208 => 12,  199 => 11,  188 => 7,  185 => 5,  183 => 4,  174 => 3,  164 => 394,  162 => 389,  160 => 384,  158 => 377,  156 => 371,  153 => 368,  151 => 347,  149 => 337,  147 => 330,  145 => 316,  143 => 310,  141 => 304,  139 => 298,  137 => 290,  135 => 282,  133 => 278,  131 => 256,  129 => 249,  127 => 244,  125 => 239,  123 => 234,  121 => 218,  119 => 213,  117 => 208,  115 => 203,  113 => 198,  111 => 193,  109 => 188,  107 => 183,  105 => 179,  103 => 174,  101 => 168,  99 => 133,  97 => 122,  95 => 108,  93 => 95,  91 => 91,  89 => 87,  87 => 74,  85 => 54,  83 => 45,  81 => 37,  79 => 33,  77 => 26,  75 => 16,  73 => 11,  71 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form is rootform -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %}{% with { attr: choice.attr } %}{{ block('attributes') }}{% endwith %}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <table class=\"{{ table_class|default('') }}\">
                <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                </tbody>
            </table>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- elseif label is same as(false) -%}
            {% set translation_domain = false %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{%- block tel_widget -%}
    {%- set type = type|default('tel') -%}
    {{ block('form_widget_simple') }}
{%- endblock tel_widget -%}

{%- block color_widget -%}
    {%- set type = type|default('color') -%}
    {{ block('form_widget_simple') }}
{%- endblock color_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <{{ element|default('label') }}{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</{{ element|default('label') }}>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {%- do form.setMethodRendered() -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor -%}

    {% if not form.methodRendered and form is rootform %}
        {%- do form.setMethodRendered() -%}
        {% set method = method|upper %}
        {%- if method in [\"GET\", \"POST\"] -%}
            {% set form_method = method %}
        {%- else -%}
            {% set form_method = \"POST\" %}
        {%- endif -%}

        {%- if form_method != method -%}
            <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
        {%- endif -%}
    {% endif -%}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {{ block('attributes') }}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "D:\\Pedidos\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\form_div_layout.html.twig");
    }
}
