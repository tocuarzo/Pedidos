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
        $__internal_20998cbb049824d84e84ef228d678b926d0392603925c5136c50a27988747f9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20998cbb049824d84e84ef228d678b926d0392603925c5136c50a27988747f9a->enter($__internal_20998cbb049824d84e84ef228d678b926d0392603925c5136c50a27988747f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        $__internal_6dc6d230f4bc8f9ccf12f65a691f6e32ac536dae81bf59de2eadbbae4e079512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dc6d230f4bc8f9ccf12f65a691f6e32ac536dae81bf59de2eadbbae4e079512->enter($__internal_6dc6d230f4bc8f9ccf12f65a691f6e32ac536dae81bf59de2eadbbae4e079512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

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
        
        $__internal_20998cbb049824d84e84ef228d678b926d0392603925c5136c50a27988747f9a->leave($__internal_20998cbb049824d84e84ef228d678b926d0392603925c5136c50a27988747f9a_prof);

        
        $__internal_6dc6d230f4bc8f9ccf12f65a691f6e32ac536dae81bf59de2eadbbae4e079512->leave($__internal_6dc6d230f4bc8f9ccf12f65a691f6e32ac536dae81bf59de2eadbbae4e079512_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_d6a5d0ece5848cc8d3784ec4b78da63c962cf70bd9ef65850b2c99d6f3f5ae6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a5d0ece5848cc8d3784ec4b78da63c962cf70bd9ef65850b2c99d6f3f5ae6a->enter($__internal_d6a5d0ece5848cc8d3784ec4b78da63c962cf70bd9ef65850b2c99d6f3f5ae6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_bd430c71fefdabe1f0262371d96212ebaa43b6db2737a427fde8f7a57a599156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd430c71fefdabe1f0262371d96212ebaa43b6db2737a427fde8f7a57a599156->enter($__internal_bd430c71fefdabe1f0262371d96212ebaa43b6db2737a427fde8f7a57a599156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_bd430c71fefdabe1f0262371d96212ebaa43b6db2737a427fde8f7a57a599156->leave($__internal_bd430c71fefdabe1f0262371d96212ebaa43b6db2737a427fde8f7a57a599156_prof);

        
        $__internal_d6a5d0ece5848cc8d3784ec4b78da63c962cf70bd9ef65850b2c99d6f3f5ae6a->leave($__internal_d6a5d0ece5848cc8d3784ec4b78da63c962cf70bd9ef65850b2c99d6f3f5ae6a_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_6ac259a593ddd39960302e90bf8ddbd93408c0026cb8eb94c375cc2056b63e98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ac259a593ddd39960302e90bf8ddbd93408c0026cb8eb94c375cc2056b63e98->enter($__internal_6ac259a593ddd39960302e90bf8ddbd93408c0026cb8eb94c375cc2056b63e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_a1f92dc08ec26e12e596ba499c7ba16a511404d99d78516926ffc8978766b09e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1f92dc08ec26e12e596ba499c7ba16a511404d99d78516926ffc8978766b09e->enter($__internal_a1f92dc08ec26e12e596ba499c7ba16a511404d99d78516926ffc8978766b09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

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
        
        $__internal_a1f92dc08ec26e12e596ba499c7ba16a511404d99d78516926ffc8978766b09e->leave($__internal_a1f92dc08ec26e12e596ba499c7ba16a511404d99d78516926ffc8978766b09e_prof);

        
        $__internal_6ac259a593ddd39960302e90bf8ddbd93408c0026cb8eb94c375cc2056b63e98->leave($__internal_6ac259a593ddd39960302e90bf8ddbd93408c0026cb8eb94c375cc2056b63e98_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_635395d5c6052146172822111a1302c8398e0b5a28cd9792eae07deb3044a08b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_635395d5c6052146172822111a1302c8398e0b5a28cd9792eae07deb3044a08b->enter($__internal_635395d5c6052146172822111a1302c8398e0b5a28cd9792eae07deb3044a08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_c5f9c8349c1846dcb233193aa2f850dcc9fbaa24000991caaa065a7f2e202020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5f9c8349c1846dcb233193aa2f850dcc9fbaa24000991caaa065a7f2e202020->enter($__internal_c5f9c8349c1846dcb233193aa2f850dcc9fbaa24000991caaa065a7f2e202020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_c5f9c8349c1846dcb233193aa2f850dcc9fbaa24000991caaa065a7f2e202020->leave($__internal_c5f9c8349c1846dcb233193aa2f850dcc9fbaa24000991caaa065a7f2e202020_prof);

        
        $__internal_635395d5c6052146172822111a1302c8398e0b5a28cd9792eae07deb3044a08b->leave($__internal_635395d5c6052146172822111a1302c8398e0b5a28cd9792eae07deb3044a08b_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_c74532f45269f6d75104de1d1b9e0371ea8840ad214790eb52802ea092f6a08d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c74532f45269f6d75104de1d1b9e0371ea8840ad214790eb52802ea092f6a08d->enter($__internal_c74532f45269f6d75104de1d1b9e0371ea8840ad214790eb52802ea092f6a08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_94a74e4270ad8244902b3f42afd506adf7c97c77f7b987938ba12232b102d592 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94a74e4270ad8244902b3f42afd506adf7c97c77f7b987938ba12232b102d592->enter($__internal_94a74e4270ad8244902b3f42afd506adf7c97c77f7b987938ba12232b102d592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 28, $this->getSourceContext()); })()), array("data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 28, $this->getSourceContext()); })()), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_94a74e4270ad8244902b3f42afd506adf7c97c77f7b987938ba12232b102d592->leave($__internal_94a74e4270ad8244902b3f42afd506adf7c97c77f7b987938ba12232b102d592_prof);

        
        $__internal_c74532f45269f6d75104de1d1b9e0371ea8840ad214790eb52802ea092f6a08d->leave($__internal_c74532f45269f6d75104de1d1b9e0371ea8840ad214790eb52802ea092f6a08d_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_2d5c8482e61fa8582bac03e39414e7638cf768aa8139cb1e40c84868cd34ce1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d5c8482e61fa8582bac03e39414e7638cf768aa8139cb1e40c84868cd34ce1f->enter($__internal_2d5c8482e61fa8582bac03e39414e7638cf768aa8139cb1e40c84868cd34ce1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_33544b1c5fe31852215a78927dc068260983e6570264e80d7cd3b0ddb70830da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33544b1c5fe31852215a78927dc068260983e6570264e80d7cd3b0ddb70830da->enter($__internal_33544b1c5fe31852215a78927dc068260983e6570264e80d7cd3b0ddb70830da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>";
        
        $__internal_33544b1c5fe31852215a78927dc068260983e6570264e80d7cd3b0ddb70830da->leave($__internal_33544b1c5fe31852215a78927dc068260983e6570264e80d7cd3b0ddb70830da_prof);

        
        $__internal_2d5c8482e61fa8582bac03e39414e7638cf768aa8139cb1e40c84868cd34ce1f->leave($__internal_2d5c8482e61fa8582bac03e39414e7638cf768aa8139cb1e40c84868cd34ce1f_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_a3be2f0d202532ba233716d7c4b08693a31084402a9f8261709ac02059e28c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3be2f0d202532ba233716d7c4b08693a31084402a9f8261709ac02059e28c8e->enter($__internal_a3be2f0d202532ba233716d7c4b08693a31084402a9f8261709ac02059e28c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        $__internal_1ac1fa7aacdc539f93833f299a1a6ed4baae154c45233e7453ca49bc4adf127f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ac1fa7aacdc539f93833f299a1a6ed4baae154c45233e7453ca49bc4adf127f->enter($__internal_1ac1fa7aacdc539f93833f299a1a6ed4baae154c45233e7453ca49bc4adf127f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 38, $this->getSourceContext()); })())) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_1ac1fa7aacdc539f93833f299a1a6ed4baae154c45233e7453ca49bc4adf127f->leave($__internal_1ac1fa7aacdc539f93833f299a1a6ed4baae154c45233e7453ca49bc4adf127f_prof);

        
        $__internal_a3be2f0d202532ba233716d7c4b08693a31084402a9f8261709ac02059e28c8e->leave($__internal_a3be2f0d202532ba233716d7c4b08693a31084402a9f8261709ac02059e28c8e_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_48bb919b64b0367eb2742911112d37c9f8bce4658fc571bb3ab086c1771b13ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48bb919b64b0367eb2742911112d37c9f8bce4658fc571bb3ab086c1771b13ac->enter($__internal_48bb919b64b0367eb2742911112d37c9f8bce4658fc571bb3ab086c1771b13ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_516185d089080a0b8eb465af469bb94446bd7589413c382a6720905e3e1a94c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_516185d089080a0b8eb465af469bb94446bd7589413c382a6720905e3e1a94c7->enter($__internal_516185d089080a0b8eb465af469bb94446bd7589413c382a6720905e3e1a94c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_516185d089080a0b8eb465af469bb94446bd7589413c382a6720905e3e1a94c7->leave($__internal_516185d089080a0b8eb465af469bb94446bd7589413c382a6720905e3e1a94c7_prof);

        
        $__internal_48bb919b64b0367eb2742911112d37c9f8bce4658fc571bb3ab086c1771b13ac->leave($__internal_48bb919b64b0367eb2742911112d37c9f8bce4658fc571bb3ab086c1771b13ac_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_dedadbdbe7c47878a2670a23341e0b8773ebebf1968f37b3ae5f05edeee65a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dedadbdbe7c47878a2670a23341e0b8773ebebf1968f37b3ae5f05edeee65a95->enter($__internal_dedadbdbe7c47878a2670a23341e0b8773ebebf1968f37b3ae5f05edeee65a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_b4ac231d140d243de2cfcce8c5d5178fb4bed3cb7a1ca8c6d9617fc05c1a26cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4ac231d140d243de2cfcce8c5d5178fb4bed3cb7a1ca8c6d9617fc05c1a26cf->enter($__internal_b4ac231d140d243de2cfcce8c5d5178fb4bed3cb7a1ca8c6d9617fc05c1a26cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_b4ac231d140d243de2cfcce8c5d5178fb4bed3cb7a1ca8c6d9617fc05c1a26cf->leave($__internal_b4ac231d140d243de2cfcce8c5d5178fb4bed3cb7a1ca8c6d9617fc05c1a26cf_prof);

        
        $__internal_dedadbdbe7c47878a2670a23341e0b8773ebebf1968f37b3ae5f05edeee65a95->leave($__internal_dedadbdbe7c47878a2670a23341e0b8773ebebf1968f37b3ae5f05edeee65a95_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_3bff9630a54f619b4872b4ddf519283a5af8be6d676e7949374845c40e365c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bff9630a54f619b4872b4ddf519283a5af8be6d676e7949374845c40e365c24->enter($__internal_3bff9630a54f619b4872b4ddf519283a5af8be6d676e7949374845c40e365c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        $__internal_fa9ce135a2581e1cb8ecade3f2257ad4980540522138f1b7b24ffd7952ff6e9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa9ce135a2581e1cb8ecade3f2257ad4980540522138f1b7b24ffd7952ff6e9a->enter($__internal_fa9ce135a2581e1cb8ecade3f2257ad4980540522138f1b7b24ffd7952ff6e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

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
                    $__internal_495f8e70affec3ad2e91cb8b275f2070f63f8e46588062bc77e5c41a12744a8b = array("attr" => twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array()));
                    if (!is_array($__internal_495f8e70affec3ad2e91cb8b275f2070f63f8e46588062bc77e5c41a12744a8b)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_495f8e70affec3ad2e91cb8b275f2070f63f8e46588062bc77e5c41a12744a8b);
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
        
        $__internal_fa9ce135a2581e1cb8ecade3f2257ad4980540522138f1b7b24ffd7952ff6e9a->leave($__internal_fa9ce135a2581e1cb8ecade3f2257ad4980540522138f1b7b24ffd7952ff6e9a_prof);

        
        $__internal_3bff9630a54f619b4872b4ddf519283a5af8be6d676e7949374845c40e365c24->leave($__internal_3bff9630a54f619b4872b4ddf519283a5af8be6d676e7949374845c40e365c24_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_ed1c8ea33700f674200b139a3f5727010cbd128e49e2b576576e7ec6c856c60e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed1c8ea33700f674200b139a3f5727010cbd128e49e2b576576e7ec6c856c60e->enter($__internal_ed1c8ea33700f674200b139a3f5727010cbd128e49e2b576576e7ec6c856c60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_9bdc3528503eb52760ad964f132c6495cebc2de5a693dbc3ae968911d5d9f15f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bdc3528503eb52760ad964f132c6495cebc2de5a693dbc3ae968911d5d9f15f->enter($__internal_9bdc3528503eb52760ad964f132c6495cebc2de5a693dbc3ae968911d5d9f15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_9bdc3528503eb52760ad964f132c6495cebc2de5a693dbc3ae968911d5d9f15f->leave($__internal_9bdc3528503eb52760ad964f132c6495cebc2de5a693dbc3ae968911d5d9f15f_prof);

        
        $__internal_ed1c8ea33700f674200b139a3f5727010cbd128e49e2b576576e7ec6c856c60e->leave($__internal_ed1c8ea33700f674200b139a3f5727010cbd128e49e2b576576e7ec6c856c60e_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_4eab5b8246c9aeb713ecb2017a66957c757b4eadece05174fc71f77d192a51f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eab5b8246c9aeb713ecb2017a66957c757b4eadece05174fc71f77d192a51f2->enter($__internal_4eab5b8246c9aeb713ecb2017a66957c757b4eadece05174fc71f77d192a51f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_d0987826ef888c8e1ec4b188a78b7db673525175a194f2546e649f897c39f74b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0987826ef888c8e1ec4b188a78b7db673525175a194f2546e649f897c39f74b->enter($__internal_d0987826ef888c8e1ec4b188a78b7db673525175a194f2546e649f897c39f74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_d0987826ef888c8e1ec4b188a78b7db673525175a194f2546e649f897c39f74b->leave($__internal_d0987826ef888c8e1ec4b188a78b7db673525175a194f2546e649f897c39f74b_prof);

        
        $__internal_4eab5b8246c9aeb713ecb2017a66957c757b4eadece05174fc71f77d192a51f2->leave($__internal_4eab5b8246c9aeb713ecb2017a66957c757b4eadece05174fc71f77d192a51f2_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_53acd6ecca71f02bc1da894c1d4769dc92fe26a9cbe5f164738bc37aab04eb83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53acd6ecca71f02bc1da894c1d4769dc92fe26a9cbe5f164738bc37aab04eb83->enter($__internal_53acd6ecca71f02bc1da894c1d4769dc92fe26a9cbe5f164738bc37aab04eb83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_4bca4ccfb1f7df3ff4dbe30eef335686b674ea3751560bc4fde00429bd562a91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bca4ccfb1f7df3ff4dbe30eef335686b674ea3751560bc4fde00429bd562a91->enter($__internal_4bca4ccfb1f7df3ff4dbe30eef335686b674ea3751560bc4fde00429bd562a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_4bca4ccfb1f7df3ff4dbe30eef335686b674ea3751560bc4fde00429bd562a91->leave($__internal_4bca4ccfb1f7df3ff4dbe30eef335686b674ea3751560bc4fde00429bd562a91_prof);

        
        $__internal_53acd6ecca71f02bc1da894c1d4769dc92fe26a9cbe5f164738bc37aab04eb83->leave($__internal_53acd6ecca71f02bc1da894c1d4769dc92fe26a9cbe5f164738bc37aab04eb83_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_35bc2f044c5cb11769e07bb397ebb65bae0b35c22f324144ff08b3868afb0d47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35bc2f044c5cb11769e07bb397ebb65bae0b35c22f324144ff08b3868afb0d47->enter($__internal_35bc2f044c5cb11769e07bb397ebb65bae0b35c22f324144ff08b3868afb0d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_de3b720492907bbdeb6ecaa6e594001f8d4d5d63d4e5a7772dfd4636b0aa239f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de3b720492907bbdeb6ecaa6e594001f8d4d5d63d4e5a7772dfd4636b0aa239f->enter($__internal_de3b720492907bbdeb6ecaa6e594001f8d4d5d63d4e5a7772dfd4636b0aa239f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_de3b720492907bbdeb6ecaa6e594001f8d4d5d63d4e5a7772dfd4636b0aa239f->leave($__internal_de3b720492907bbdeb6ecaa6e594001f8d4d5d63d4e5a7772dfd4636b0aa239f_prof);

        
        $__internal_35bc2f044c5cb11769e07bb397ebb65bae0b35c22f324144ff08b3868afb0d47->leave($__internal_35bc2f044c5cb11769e07bb397ebb65bae0b35c22f324144ff08b3868afb0d47_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_3177632b23461ceaa369c90f99bf4ba60c0063cc08d54c73f9e9587e1b7051a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3177632b23461ceaa369c90f99bf4ba60c0063cc08d54c73f9e9587e1b7051a0->enter($__internal_3177632b23461ceaa369c90f99bf4ba60c0063cc08d54c73f9e9587e1b7051a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_b0710f4c553ed29d5e2fc50805ce23946a89fdc5d9cc9bb3ff711fc49b11be6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0710f4c553ed29d5e2fc50805ce23946a89fdc5d9cc9bb3ff711fc49b11be6a->enter($__internal_b0710f4c553ed29d5e2fc50805ce23946a89fdc5d9cc9bb3ff711fc49b11be6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_b0710f4c553ed29d5e2fc50805ce23946a89fdc5d9cc9bb3ff711fc49b11be6a->leave($__internal_b0710f4c553ed29d5e2fc50805ce23946a89fdc5d9cc9bb3ff711fc49b11be6a_prof);

        
        $__internal_3177632b23461ceaa369c90f99bf4ba60c0063cc08d54c73f9e9587e1b7051a0->leave($__internal_3177632b23461ceaa369c90f99bf4ba60c0063cc08d54c73f9e9587e1b7051a0_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_dfe29724375645b8438e60e8605544a3ceacafe8cff82ac19395211097287f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfe29724375645b8438e60e8605544a3ceacafe8cff82ac19395211097287f13->enter($__internal_dfe29724375645b8438e60e8605544a3ceacafe8cff82ac19395211097287f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_6cbb90ddc67900042ae5b087ca5cc104b8eee9cecd6b1b0890af801ef4a8b90e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cbb90ddc67900042ae5b087ca5cc104b8eee9cecd6b1b0890af801ef4a8b90e->enter($__internal_6cbb90ddc67900042ae5b087ca5cc104b8eee9cecd6b1b0890af801ef4a8b90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_6cbb90ddc67900042ae5b087ca5cc104b8eee9cecd6b1b0890af801ef4a8b90e->leave($__internal_6cbb90ddc67900042ae5b087ca5cc104b8eee9cecd6b1b0890af801ef4a8b90e_prof);

        
        $__internal_dfe29724375645b8438e60e8605544a3ceacafe8cff82ac19395211097287f13->leave($__internal_dfe29724375645b8438e60e8605544a3ceacafe8cff82ac19395211097287f13_prof);

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_777ae2db8be46cf6f42c785e6a3a59a52a6144763ac99b2d68ed90708123e4d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_777ae2db8be46cf6f42c785e6a3a59a52a6144763ac99b2d68ed90708123e4d9->enter($__internal_777ae2db8be46cf6f42c785e6a3a59a52a6144763ac99b2d68ed90708123e4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_9fb1be926fce80c20fe1ace8ef0b027333b0a4e7521ba960021727dd3fd3827c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb1be926fce80c20fe1ace8ef0b027333b0a4e7521ba960021727dd3fd3827c->enter($__internal_9fb1be926fce80c20fe1ace8ef0b027333b0a4e7521ba960021727dd3fd3827c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 170, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_9fb1be926fce80c20fe1ace8ef0b027333b0a4e7521ba960021727dd3fd3827c->leave($__internal_9fb1be926fce80c20fe1ace8ef0b027333b0a4e7521ba960021727dd3fd3827c_prof);

        
        $__internal_777ae2db8be46cf6f42c785e6a3a59a52a6144763ac99b2d68ed90708123e4d9->leave($__internal_777ae2db8be46cf6f42c785e6a3a59a52a6144763ac99b2d68ed90708123e4d9_prof);

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_75573da3d530dcb4c58ab8b7b3361fa160c9505644a955726f409d92e0c09a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75573da3d530dcb4c58ab8b7b3361fa160c9505644a955726f409d92e0c09a3b->enter($__internal_75573da3d530dcb4c58ab8b7b3361fa160c9505644a955726f409d92e0c09a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        $__internal_77ee74bec3039ea6e1ec14a67cdc63ffefd265637ff769ac64592c845f3c125d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77ee74bec3039ea6e1ec14a67cdc63ffefd265637ff769ac64592c845f3c125d->enter($__internal_77ee74bec3039ea6e1ec14a67cdc63ffefd265637ff769ac64592c845f3c125d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 175, $this->getSourceContext()); })()), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_77ee74bec3039ea6e1ec14a67cdc63ffefd265637ff769ac64592c845f3c125d->leave($__internal_77ee74bec3039ea6e1ec14a67cdc63ffefd265637ff769ac64592c845f3c125d_prof);

        
        $__internal_75573da3d530dcb4c58ab8b7b3361fa160c9505644a955726f409d92e0c09a3b->leave($__internal_75573da3d530dcb4c58ab8b7b3361fa160c9505644a955726f409d92e0c09a3b_prof);

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_673a4088d4a5ec28ca1961a500278cfd206aa6ca58591eb96622c78a9b0cfa8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_673a4088d4a5ec28ca1961a500278cfd206aa6ca58591eb96622c78a9b0cfa8a->enter($__internal_673a4088d4a5ec28ca1961a500278cfd206aa6ca58591eb96622c78a9b0cfa8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_3b4cf4bfa7954d687fb4f36864537593e4796f1bc25cbabd08675db74e38913c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b4cf4bfa7954d687fb4f36864537593e4796f1bc25cbabd08675db74e38913c->enter($__internal_3b4cf4bfa7954d687fb4f36864537593e4796f1bc25cbabd08675db74e38913c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 180
        echo twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 180, $this->getSourceContext()); })()), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_3b4cf4bfa7954d687fb4f36864537593e4796f1bc25cbabd08675db74e38913c->leave($__internal_3b4cf4bfa7954d687fb4f36864537593e4796f1bc25cbabd08675db74e38913c_prof);

        
        $__internal_673a4088d4a5ec28ca1961a500278cfd206aa6ca58591eb96622c78a9b0cfa8a->leave($__internal_673a4088d4a5ec28ca1961a500278cfd206aa6ca58591eb96622c78a9b0cfa8a_prof);

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_40c6d26438e2c8b1b06ff5f599ab5f36aa077b1989e76df71a52c4e67d226b8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c6d26438e2c8b1b06ff5f599ab5f36aa077b1989e76df71a52c4e67d226b8b->enter($__internal_40c6d26438e2c8b1b06ff5f599ab5f36aa077b1989e76df71a52c4e67d226b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        $__internal_8d75317d215b9029635ac3b197918af0041a982ab9c03af5a02dccd374c816ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d75317d215b9029635ac3b197918af0041a982ab9c03af5a02dccd374c816ab->enter($__internal_8d75317d215b9029635ac3b197918af0041a982ab9c03af5a02dccd374c816ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 184, $this->getSourceContext()); })()), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_8d75317d215b9029635ac3b197918af0041a982ab9c03af5a02dccd374c816ab->leave($__internal_8d75317d215b9029635ac3b197918af0041a982ab9c03af5a02dccd374c816ab_prof);

        
        $__internal_40c6d26438e2c8b1b06ff5f599ab5f36aa077b1989e76df71a52c4e67d226b8b->leave($__internal_40c6d26438e2c8b1b06ff5f599ab5f36aa077b1989e76df71a52c4e67d226b8b_prof);

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_a29507092d62f8c2dbaf4f9048696e587ed60e79e0a8817715c95471a26f3ec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a29507092d62f8c2dbaf4f9048696e587ed60e79e0a8817715c95471a26f3ec2->enter($__internal_a29507092d62f8c2dbaf4f9048696e587ed60e79e0a8817715c95471a26f3ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        $__internal_a37436d3fd0db1293e060370d43fd411b8cc075b18e140ba04f4f836a21b8a43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a37436d3fd0db1293e060370d43fd411b8cc075b18e140ba04f4f836a21b8a43->enter($__internal_a37436d3fd0db1293e060370d43fd411b8cc075b18e140ba04f4f836a21b8a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 189, $this->getSourceContext()); })()), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a37436d3fd0db1293e060370d43fd411b8cc075b18e140ba04f4f836a21b8a43->leave($__internal_a37436d3fd0db1293e060370d43fd411b8cc075b18e140ba04f4f836a21b8a43_prof);

        
        $__internal_a29507092d62f8c2dbaf4f9048696e587ed60e79e0a8817715c95471a26f3ec2->leave($__internal_a29507092d62f8c2dbaf4f9048696e587ed60e79e0a8817715c95471a26f3ec2_prof);

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_d864e30328fc47a1841113fd914d4de069d9c5651f150de1cc734e959f014e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d864e30328fc47a1841113fd914d4de069d9c5651f150de1cc734e959f014e53->enter($__internal_d864e30328fc47a1841113fd914d4de069d9c5651f150de1cc734e959f014e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_045830323421ddec4d026676bbf945571701a4a9cc33ba821177ee16b8f03292 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_045830323421ddec4d026676bbf945571701a4a9cc33ba821177ee16b8f03292->enter($__internal_045830323421ddec4d026676bbf945571701a4a9cc33ba821177ee16b8f03292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 194, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_045830323421ddec4d026676bbf945571701a4a9cc33ba821177ee16b8f03292->leave($__internal_045830323421ddec4d026676bbf945571701a4a9cc33ba821177ee16b8f03292_prof);

        
        $__internal_d864e30328fc47a1841113fd914d4de069d9c5651f150de1cc734e959f014e53->leave($__internal_d864e30328fc47a1841113fd914d4de069d9c5651f150de1cc734e959f014e53_prof);

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_c2398aed9ef3aa15a1eca002f522180f3c69fac5f6af8cd7a8ce9a50d8be40ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2398aed9ef3aa15a1eca002f522180f3c69fac5f6af8cd7a8ce9a50d8be40ea->enter($__internal_c2398aed9ef3aa15a1eca002f522180f3c69fac5f6af8cd7a8ce9a50d8be40ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        $__internal_4b984f072c0c12db4aaf91e4c5f1ac60b4dd274d8c4b2db04f7c36729c05656b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b984f072c0c12db4aaf91e4c5f1ac60b4dd274d8c4b2db04f7c36729c05656b->enter($__internal_4b984f072c0c12db4aaf91e4c5f1ac60b4dd274d8c4b2db04f7c36729c05656b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 199, $this->getSourceContext()); })()), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_4b984f072c0c12db4aaf91e4c5f1ac60b4dd274d8c4b2db04f7c36729c05656b->leave($__internal_4b984f072c0c12db4aaf91e4c5f1ac60b4dd274d8c4b2db04f7c36729c05656b_prof);

        
        $__internal_c2398aed9ef3aa15a1eca002f522180f3c69fac5f6af8cd7a8ce9a50d8be40ea->leave($__internal_c2398aed9ef3aa15a1eca002f522180f3c69fac5f6af8cd7a8ce9a50d8be40ea_prof);

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_57c98286479e9cc248d198ef43e46a289fe44589f278b99f8509eb3df97d6a41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c98286479e9cc248d198ef43e46a289fe44589f278b99f8509eb3df97d6a41->enter($__internal_57c98286479e9cc248d198ef43e46a289fe44589f278b99f8509eb3df97d6a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        $__internal_d51b048eb428ff1fb28b334c59ee780bc13591ec279688cb0dd0f4c6b7266e29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d51b048eb428ff1fb28b334c59ee780bc13591ec279688cb0dd0f4c6b7266e29->enter($__internal_d51b048eb428ff1fb28b334c59ee780bc13591ec279688cb0dd0f4c6b7266e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 204, $this->getSourceContext()); })()), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d51b048eb428ff1fb28b334c59ee780bc13591ec279688cb0dd0f4c6b7266e29->leave($__internal_d51b048eb428ff1fb28b334c59ee780bc13591ec279688cb0dd0f4c6b7266e29_prof);

        
        $__internal_57c98286479e9cc248d198ef43e46a289fe44589f278b99f8509eb3df97d6a41->leave($__internal_57c98286479e9cc248d198ef43e46a289fe44589f278b99f8509eb3df97d6a41_prof);

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_466bbc1d14852762c6308e56ae4e19b8e123890d4c3a8792fa82090d745d6c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_466bbc1d14852762c6308e56ae4e19b8e123890d4c3a8792fa82090d745d6c6b->enter($__internal_466bbc1d14852762c6308e56ae4e19b8e123890d4c3a8792fa82090d745d6c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_92f29ae814b09a90c65788e2ac88bf9cafe3bb1c29436d477eace3049b760d07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92f29ae814b09a90c65788e2ac88bf9cafe3bb1c29436d477eace3049b760d07->enter($__internal_92f29ae814b09a90c65788e2ac88bf9cafe3bb1c29436d477eace3049b760d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 209, $this->getSourceContext()); })()), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_92f29ae814b09a90c65788e2ac88bf9cafe3bb1c29436d477eace3049b760d07->leave($__internal_92f29ae814b09a90c65788e2ac88bf9cafe3bb1c29436d477eace3049b760d07_prof);

        
        $__internal_466bbc1d14852762c6308e56ae4e19b8e123890d4c3a8792fa82090d745d6c6b->leave($__internal_466bbc1d14852762c6308e56ae4e19b8e123890d4c3a8792fa82090d745d6c6b_prof);

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_4c250ff493660c4345a87002bd89f59223bf341ff69d17238f222c9b6a410ece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c250ff493660c4345a87002bd89f59223bf341ff69d17238f222c9b6a410ece->enter($__internal_4c250ff493660c4345a87002bd89f59223bf341ff69d17238f222c9b6a410ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        $__internal_e85f25a387b6f2efb78ea609e1fdb0879ae934927e81f72d2d85dd6992e38050 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e85f25a387b6f2efb78ea609e1fdb0879ae934927e81f72d2d85dd6992e38050->enter($__internal_e85f25a387b6f2efb78ea609e1fdb0879ae934927e81f72d2d85dd6992e38050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 214, $this->getSourceContext()); })()), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e85f25a387b6f2efb78ea609e1fdb0879ae934927e81f72d2d85dd6992e38050->leave($__internal_e85f25a387b6f2efb78ea609e1fdb0879ae934927e81f72d2d85dd6992e38050_prof);

        
        $__internal_4c250ff493660c4345a87002bd89f59223bf341ff69d17238f222c9b6a410ece->leave($__internal_4c250ff493660c4345a87002bd89f59223bf341ff69d17238f222c9b6a410ece_prof);

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_8d360e617cef4fea961bd28a6d209cd2b57d6e00c4469f2f4a56425281c565bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d360e617cef4fea961bd28a6d209cd2b57d6e00c4469f2f4a56425281c565bc->enter($__internal_8d360e617cef4fea961bd28a6d209cd2b57d6e00c4469f2f4a56425281c565bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_ab868af4bd590da7ad715ae20ac7efa0a0db78acbd7913178c903834670293e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab868af4bd590da7ad715ae20ac7efa0a0db78acbd7913178c903834670293e7->enter($__internal_ab868af4bd590da7ad715ae20ac7efa0a0db78acbd7913178c903834670293e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

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
        
        $__internal_ab868af4bd590da7ad715ae20ac7efa0a0db78acbd7913178c903834670293e7->leave($__internal_ab868af4bd590da7ad715ae20ac7efa0a0db78acbd7913178c903834670293e7_prof);

        
        $__internal_8d360e617cef4fea961bd28a6d209cd2b57d6e00c4469f2f4a56425281c565bc->leave($__internal_8d360e617cef4fea961bd28a6d209cd2b57d6e00c4469f2f4a56425281c565bc_prof);

    }

    // line 234
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_76fb66ad0e8f834afcf0cb20a0cd048f24032639bd09c6dbd77e8df7ad5d59ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76fb66ad0e8f834afcf0cb20a0cd048f24032639bd09c6dbd77e8df7ad5d59ca->enter($__internal_76fb66ad0e8f834afcf0cb20a0cd048f24032639bd09c6dbd77e8df7ad5d59ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        $__internal_3ecb38b743febcaa8d953bed04333d6b342f3da78579c1639aa1d6beb610659c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ecb38b743febcaa8d953bed04333d6b342f3da78579c1639aa1d6beb610659c->enter($__internal_3ecb38b743febcaa8d953bed04333d6b342f3da78579c1639aa1d6beb610659c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 235
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 235, $this->getSourceContext()); })()), "submit")) : ("submit"));
        // line 236
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_3ecb38b743febcaa8d953bed04333d6b342f3da78579c1639aa1d6beb610659c->leave($__internal_3ecb38b743febcaa8d953bed04333d6b342f3da78579c1639aa1d6beb610659c_prof);

        
        $__internal_76fb66ad0e8f834afcf0cb20a0cd048f24032639bd09c6dbd77e8df7ad5d59ca->leave($__internal_76fb66ad0e8f834afcf0cb20a0cd048f24032639bd09c6dbd77e8df7ad5d59ca_prof);

    }

    // line 239
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_24655a87bc027e79741bb981809225523848350da2e51c8be80456546e70aaa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24655a87bc027e79741bb981809225523848350da2e51c8be80456546e70aaa9->enter($__internal_24655a87bc027e79741bb981809225523848350da2e51c8be80456546e70aaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        $__internal_72b5069c7232eed63b70766154e57d8f059f89fe2ac74465388462459ba2b43a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72b5069c7232eed63b70766154e57d8f059f89fe2ac74465388462459ba2b43a->enter($__internal_72b5069c7232eed63b70766154e57d8f059f89fe2ac74465388462459ba2b43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 240
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 240, $this->getSourceContext()); })()), "reset")) : ("reset"));
        // line 241
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_72b5069c7232eed63b70766154e57d8f059f89fe2ac74465388462459ba2b43a->leave($__internal_72b5069c7232eed63b70766154e57d8f059f89fe2ac74465388462459ba2b43a_prof);

        
        $__internal_24655a87bc027e79741bb981809225523848350da2e51c8be80456546e70aaa9->leave($__internal_24655a87bc027e79741bb981809225523848350da2e51c8be80456546e70aaa9_prof);

    }

    // line 244
    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_4375011c0bcafb35d32dc4fde4f524e5b0f3a4b1af8556b5cfa30234aec57c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4375011c0bcafb35d32dc4fde4f524e5b0f3a4b1af8556b5cfa30234aec57c75->enter($__internal_4375011c0bcafb35d32dc4fde4f524e5b0f3a4b1af8556b5cfa30234aec57c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_8cf9760aa91119c41261e334421574243149053d8875ccd983b744b995296a31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cf9760aa91119c41261e334421574243149053d8875ccd983b744b995296a31->enter($__internal_8cf9760aa91119c41261e334421574243149053d8875ccd983b744b995296a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 245
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 245, $this->getSourceContext()); })()), "tel")) : ("tel"));
        // line 246
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_8cf9760aa91119c41261e334421574243149053d8875ccd983b744b995296a31->leave($__internal_8cf9760aa91119c41261e334421574243149053d8875ccd983b744b995296a31_prof);

        
        $__internal_4375011c0bcafb35d32dc4fde4f524e5b0f3a4b1af8556b5cfa30234aec57c75->leave($__internal_4375011c0bcafb35d32dc4fde4f524e5b0f3a4b1af8556b5cfa30234aec57c75_prof);

    }

    // line 249
    public function block_color_widget($context, array $blocks = array())
    {
        $__internal_97c5402f59769546480a439f986e8f6f333da03d81b31c9fac0d3c08a30164cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c5402f59769546480a439f986e8f6f333da03d81b31c9fac0d3c08a30164cc->enter($__internal_97c5402f59769546480a439f986e8f6f333da03d81b31c9fac0d3c08a30164cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        $__internal_82434881a23bb74802255838662e0102444136cfd57224cfa10aa38f8d7a36c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82434881a23bb74802255838662e0102444136cfd57224cfa10aa38f8d7a36c6->enter($__internal_82434881a23bb74802255838662e0102444136cfd57224cfa10aa38f8d7a36c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        // line 250
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 250, $this->getSourceContext()); })()), "color")) : ("color"));
        // line 251
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_82434881a23bb74802255838662e0102444136cfd57224cfa10aa38f8d7a36c6->leave($__internal_82434881a23bb74802255838662e0102444136cfd57224cfa10aa38f8d7a36c6_prof);

        
        $__internal_97c5402f59769546480a439f986e8f6f333da03d81b31c9fac0d3c08a30164cc->leave($__internal_97c5402f59769546480a439f986e8f6f333da03d81b31c9fac0d3c08a30164cc_prof);

    }

    // line 256
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_6eeddc67761c16cd6a19c3b951c6eda0a47e30b50948fda27a587cb5c507c709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eeddc67761c16cd6a19c3b951c6eda0a47e30b50948fda27a587cb5c507c709->enter($__internal_6eeddc67761c16cd6a19c3b951c6eda0a47e30b50948fda27a587cb5c507c709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_326ab79ff6bf80ed093a0d7875437c67c13167305f325bb678897bab05217c28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_326ab79ff6bf80ed093a0d7875437c67c13167305f325bb678897bab05217c28->enter($__internal_326ab79ff6bf80ed093a0d7875437c67c13167305f325bb678897bab05217c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
                $__internal_b56376f57e82d3135a33909557279a590c430a5dae6f3ffce475af588a5529ba = array("attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 274, $this->getSourceContext()); })()));
                if (!is_array($__internal_b56376f57e82d3135a33909557279a590c430a5dae6f3ffce475af588a5529ba)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_b56376f57e82d3135a33909557279a590c430a5dae6f3ffce475af588a5529ba);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 274, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 274, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 274, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 274, $this->getSourceContext()); })())))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 274, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_326ab79ff6bf80ed093a0d7875437c67c13167305f325bb678897bab05217c28->leave($__internal_326ab79ff6bf80ed093a0d7875437c67c13167305f325bb678897bab05217c28_prof);

        
        $__internal_6eeddc67761c16cd6a19c3b951c6eda0a47e30b50948fda27a587cb5c507c709->leave($__internal_6eeddc67761c16cd6a19c3b951c6eda0a47e30b50948fda27a587cb5c507c709_prof);

    }

    // line 278
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_93b59bcdd11e08b175ab3e172784205c569b91e3d977b470e081a314ba108545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b59bcdd11e08b175ab3e172784205c569b91e3d977b470e081a314ba108545->enter($__internal_93b59bcdd11e08b175ab3e172784205c569b91e3d977b470e081a314ba108545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        $__internal_d4dfa32ca29ca718acf9e3ff1f604704f22aa81ed6c55001fc9f868c27557cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4dfa32ca29ca718acf9e3ff1f604704f22aa81ed6c55001fc9f868c27557cdb->enter($__internal_d4dfa32ca29ca718acf9e3ff1f604704f22aa81ed6c55001fc9f868c27557cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_d4dfa32ca29ca718acf9e3ff1f604704f22aa81ed6c55001fc9f868c27557cdb->leave($__internal_d4dfa32ca29ca718acf9e3ff1f604704f22aa81ed6c55001fc9f868c27557cdb_prof);

        
        $__internal_93b59bcdd11e08b175ab3e172784205c569b91e3d977b470e081a314ba108545->leave($__internal_93b59bcdd11e08b175ab3e172784205c569b91e3d977b470e081a314ba108545_prof);

    }

    // line 282
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_bdf384d66601e177c6f16b202ba2fe59b5fa8e6aa8792462bb7251c334ef2a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdf384d66601e177c6f16b202ba2fe59b5fa8e6aa8792462bb7251c334ef2a63->enter($__internal_bdf384d66601e177c6f16b202ba2fe59b5fa8e6aa8792462bb7251c334ef2a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        $__internal_a606c7d163e3e44488103419c7567e405a62a70cd6ed886dd2f6d2b0d6252c2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a606c7d163e3e44488103419c7567e405a62a70cd6ed886dd2f6d2b0d6252c2a->enter($__internal_a606c7d163e3e44488103419c7567e405a62a70cd6ed886dd2f6d2b0d6252c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 287
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_a606c7d163e3e44488103419c7567e405a62a70cd6ed886dd2f6d2b0d6252c2a->leave($__internal_a606c7d163e3e44488103419c7567e405a62a70cd6ed886dd2f6d2b0d6252c2a_prof);

        
        $__internal_bdf384d66601e177c6f16b202ba2fe59b5fa8e6aa8792462bb7251c334ef2a63->leave($__internal_bdf384d66601e177c6f16b202ba2fe59b5fa8e6aa8792462bb7251c334ef2a63_prof);

    }

    // line 290
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_35cc0a065a0a16a84dac155c121e5cd0c4518247d80352b47a75d24a57164060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35cc0a065a0a16a84dac155c121e5cd0c4518247d80352b47a75d24a57164060->enter($__internal_35cc0a065a0a16a84dac155c121e5cd0c4518247d80352b47a75d24a57164060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_0edf38408b1f47267359857f602a894ed865733722f0aaba2a5b6fe2449b5dde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0edf38408b1f47267359857f602a894ed865733722f0aaba2a5b6fe2449b5dde->enter($__internal_0edf38408b1f47267359857f602a894ed865733722f0aaba2a5b6fe2449b5dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_0edf38408b1f47267359857f602a894ed865733722f0aaba2a5b6fe2449b5dde->leave($__internal_0edf38408b1f47267359857f602a894ed865733722f0aaba2a5b6fe2449b5dde_prof);

        
        $__internal_35cc0a065a0a16a84dac155c121e5cd0c4518247d80352b47a75d24a57164060->leave($__internal_35cc0a065a0a16a84dac155c121e5cd0c4518247d80352b47a75d24a57164060_prof);

    }

    // line 298
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_09d86aa17a2090a88487e9a36f048456e2a02604efcebf77db4c96fa6e71407c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09d86aa17a2090a88487e9a36f048456e2a02604efcebf77db4c96fa6e71407c->enter($__internal_09d86aa17a2090a88487e9a36f048456e2a02604efcebf77db4c96fa6e71407c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_c1ea672d6722bf11ec3601634507192d17b99aee2e649674b0f5ecb1b51537cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1ea672d6722bf11ec3601634507192d17b99aee2e649674b0f5ecb1b51537cc->enter($__internal_c1ea672d6722bf11ec3601634507192d17b99aee2e649674b0f5ecb1b51537cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 299
        echo "<div>";
        // line 300
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 300, $this->getSourceContext()); })()), 'widget');
        // line 301
        echo "</div>";
        
        $__internal_c1ea672d6722bf11ec3601634507192d17b99aee2e649674b0f5ecb1b51537cc->leave($__internal_c1ea672d6722bf11ec3601634507192d17b99aee2e649674b0f5ecb1b51537cc_prof);

        
        $__internal_09d86aa17a2090a88487e9a36f048456e2a02604efcebf77db4c96fa6e71407c->leave($__internal_09d86aa17a2090a88487e9a36f048456e2a02604efcebf77db4c96fa6e71407c_prof);

    }

    // line 304
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_900b743964a127e846f51fac3a3380b4af9695e5e1560a22fca219b7b2e752bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_900b743964a127e846f51fac3a3380b4af9695e5e1560a22fca219b7b2e752bb->enter($__internal_900b743964a127e846f51fac3a3380b4af9695e5e1560a22fca219b7b2e752bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_3f33dfb0b302d336758c375ba3bd715d07fc8998bc4280d506697e3bdf104b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f33dfb0b302d336758c375ba3bd715d07fc8998bc4280d506697e3bdf104b7e->enter($__internal_3f33dfb0b302d336758c375ba3bd715d07fc8998bc4280d506697e3bdf104b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 305
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 305, $this->getSourceContext()); })()), 'widget');
        
        $__internal_3f33dfb0b302d336758c375ba3bd715d07fc8998bc4280d506697e3bdf104b7e->leave($__internal_3f33dfb0b302d336758c375ba3bd715d07fc8998bc4280d506697e3bdf104b7e_prof);

        
        $__internal_900b743964a127e846f51fac3a3380b4af9695e5e1560a22fca219b7b2e752bb->leave($__internal_900b743964a127e846f51fac3a3380b4af9695e5e1560a22fca219b7b2e752bb_prof);

    }

    // line 310
    public function block_form($context, array $blocks = array())
    {
        $__internal_2116a85175360431e474b81bd7ed156370270721c0aa0955151a33102645a074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2116a85175360431e474b81bd7ed156370270721c0aa0955151a33102645a074->enter($__internal_2116a85175360431e474b81bd7ed156370270721c0aa0955151a33102645a074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_373e5802c33cc0de7a50d81222843389f59a462382357c403366ed6c91a8375f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_373e5802c33cc0de7a50d81222843389f59a462382357c403366ed6c91a8375f->enter($__internal_373e5802c33cc0de7a50d81222843389f59a462382357c403366ed6c91a8375f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 311
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 311, $this->getSourceContext()); })()), 'form_start');
        // line 312
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 312, $this->getSourceContext()); })()), 'widget');
        // line 313
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 313, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_373e5802c33cc0de7a50d81222843389f59a462382357c403366ed6c91a8375f->leave($__internal_373e5802c33cc0de7a50d81222843389f59a462382357c403366ed6c91a8375f_prof);

        
        $__internal_2116a85175360431e474b81bd7ed156370270721c0aa0955151a33102645a074->leave($__internal_2116a85175360431e474b81bd7ed156370270721c0aa0955151a33102645a074_prof);

    }

    // line 316
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_dbea6fb8099a9e28aae6ebff5c4592d6970b2575a50dfec56cc0844e12f1ae58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbea6fb8099a9e28aae6ebff5c4592d6970b2575a50dfec56cc0844e12f1ae58->enter($__internal_dbea6fb8099a9e28aae6ebff5c4592d6970b2575a50dfec56cc0844e12f1ae58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_d1491776309e12b587e3df89d25a8f8716318c1fda293dda72193e0410e38337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1491776309e12b587e3df89d25a8f8716318c1fda293dda72193e0410e38337->enter($__internal_d1491776309e12b587e3df89d25a8f8716318c1fda293dda72193e0410e38337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

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
        
        $__internal_d1491776309e12b587e3df89d25a8f8716318c1fda293dda72193e0410e38337->leave($__internal_d1491776309e12b587e3df89d25a8f8716318c1fda293dda72193e0410e38337_prof);

        
        $__internal_dbea6fb8099a9e28aae6ebff5c4592d6970b2575a50dfec56cc0844e12f1ae58->leave($__internal_dbea6fb8099a9e28aae6ebff5c4592d6970b2575a50dfec56cc0844e12f1ae58_prof);

    }

    // line 330
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_1f429d2cd3a4da2af695a974f2377bfbd368a017ec968c96bac3873e8e7ce1f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f429d2cd3a4da2af695a974f2377bfbd368a017ec968c96bac3873e8e7ce1f5->enter($__internal_1f429d2cd3a4da2af695a974f2377bfbd368a017ec968c96bac3873e8e7ce1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        $__internal_000194b20962766d59b59d5f67926db51232a59a789c721dbf4f02f9bcaa71dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_000194b20962766d59b59d5f67926db51232a59a789c721dbf4f02f9bcaa71dd->enter($__internal_000194b20962766d59b59d5f67926db51232a59a789c721dbf4f02f9bcaa71dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 331
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new Twig_Error_Runtime('Variable "render_rest" does not exist.', 331, $this->getSourceContext()); })()))) {
            // line 332
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 332, $this->getSourceContext()); })()), 'rest');
        }
        // line 334
        echo "</form>";
        
        $__internal_000194b20962766d59b59d5f67926db51232a59a789c721dbf4f02f9bcaa71dd->leave($__internal_000194b20962766d59b59d5f67926db51232a59a789c721dbf4f02f9bcaa71dd_prof);

        
        $__internal_1f429d2cd3a4da2af695a974f2377bfbd368a017ec968c96bac3873e8e7ce1f5->leave($__internal_1f429d2cd3a4da2af695a974f2377bfbd368a017ec968c96bac3873e8e7ce1f5_prof);

    }

    // line 337
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_37d21edb4c6b64953833035ee492b2d6e20420f6a0d3f98a70110c07ba3dc7f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37d21edb4c6b64953833035ee492b2d6e20420f6a0d3f98a70110c07ba3dc7f3->enter($__internal_37d21edb4c6b64953833035ee492b2d6e20420f6a0d3f98a70110c07ba3dc7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_affc13b7bca26bd73899f474985f1e587f56c9b593aa868d91c302d6c10915dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_affc13b7bca26bd73899f474985f1e587f56c9b593aa868d91c302d6c10915dc->enter($__internal_affc13b7bca26bd73899f474985f1e587f56c9b593aa868d91c302d6c10915dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_affc13b7bca26bd73899f474985f1e587f56c9b593aa868d91c302d6c10915dc->leave($__internal_affc13b7bca26bd73899f474985f1e587f56c9b593aa868d91c302d6c10915dc_prof);

        
        $__internal_37d21edb4c6b64953833035ee492b2d6e20420f6a0d3f98a70110c07ba3dc7f3->leave($__internal_37d21edb4c6b64953833035ee492b2d6e20420f6a0d3f98a70110c07ba3dc7f3_prof);

    }

    // line 347
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_0654f00101b863feef3b77f873240ea604bb1d0da7273c740c442a86c5a11a35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0654f00101b863feef3b77f873240ea604bb1d0da7273c740c442a86c5a11a35->enter($__internal_0654f00101b863feef3b77f873240ea604bb1d0da7273c740c442a86c5a11a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        $__internal_630171e673e570317f25734ce1c6cec4a8b6cb504de87d26005ac800c6c07ff5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_630171e673e570317f25734ce1c6cec4a8b6cb504de87d26005ac800c6c07ff5->enter($__internal_630171e673e570317f25734ce1c6cec4a8b6cb504de87d26005ac800c6c07ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

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
        
        $__internal_630171e673e570317f25734ce1c6cec4a8b6cb504de87d26005ac800c6c07ff5->leave($__internal_630171e673e570317f25734ce1c6cec4a8b6cb504de87d26005ac800c6c07ff5_prof);

        
        $__internal_0654f00101b863feef3b77f873240ea604bb1d0da7273c740c442a86c5a11a35->leave($__internal_0654f00101b863feef3b77f873240ea604bb1d0da7273c740c442a86c5a11a35_prof);

    }

    // line 371
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_80d4a9c2e37d9e0289f18ad7f631d1e3d8e31bed539b3b9f8749ab0d4f7cbb08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80d4a9c2e37d9e0289f18ad7f631d1e3d8e31bed539b3b9f8749ab0d4f7cbb08->enter($__internal_80d4a9c2e37d9e0289f18ad7f631d1e3d8e31bed539b3b9f8749ab0d4f7cbb08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        $__internal_b652f805ac23c762287f13f37b15cd3253a7ade48f3a812549763b3e69aea2c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b652f805ac23c762287f13f37b15cd3253a7ade48f3a812549763b3e69aea2c8->enter($__internal_b652f805ac23c762287f13f37b15cd3253a7ade48f3a812549763b3e69aea2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

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
        
        $__internal_b652f805ac23c762287f13f37b15cd3253a7ade48f3a812549763b3e69aea2c8->leave($__internal_b652f805ac23c762287f13f37b15cd3253a7ade48f3a812549763b3e69aea2c8_prof);

        
        $__internal_80d4a9c2e37d9e0289f18ad7f631d1e3d8e31bed539b3b9f8749ab0d4f7cbb08->leave($__internal_80d4a9c2e37d9e0289f18ad7f631d1e3d8e31bed539b3b9f8749ab0d4f7cbb08_prof);

    }

    // line 377
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_53864df09c126bcc443a7d6ffbf4ca4be690cf12a895b3b6e6a760e38882c442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53864df09c126bcc443a7d6ffbf4ca4be690cf12a895b3b6e6a760e38882c442->enter($__internal_53864df09c126bcc443a7d6ffbf4ca4be690cf12a895b3b6e6a760e38882c442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_e19a6de7d11177858d265bf5f453f214c7d98536295e26ed5accc05a42a608df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e19a6de7d11177858d265bf5f453f214c7d98536295e26ed5accc05a42a608df->enter($__internal_e19a6de7d11177858d265bf5f453f214c7d98536295e26ed5accc05a42a608df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

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
        
        $__internal_e19a6de7d11177858d265bf5f453f214c7d98536295e26ed5accc05a42a608df->leave($__internal_e19a6de7d11177858d265bf5f453f214c7d98536295e26ed5accc05a42a608df_prof);

        
        $__internal_53864df09c126bcc443a7d6ffbf4ca4be690cf12a895b3b6e6a760e38882c442->leave($__internal_53864df09c126bcc443a7d6ffbf4ca4be690cf12a895b3b6e6a760e38882c442_prof);

    }

    // line 384
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_6413164e5a5280e2861da10fe43dd20b37bc92b52b4eb9c56c0f9b053465b27b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6413164e5a5280e2861da10fe43dd20b37bc92b52b4eb9c56c0f9b053465b27b->enter($__internal_6413164e5a5280e2861da10fe43dd20b37bc92b52b4eb9c56c0f9b053465b27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        $__internal_099391e0e057ab6a361a4ec04c2190d8509a82ea2d8eac79cf5f0df8ac813907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_099391e0e057ab6a361a4ec04c2190d8509a82ea2d8eac79cf5f0df8ac813907->enter($__internal_099391e0e057ab6a361a4ec04c2190d8509a82ea2d8eac79cf5f0df8ac813907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 385
        if ( !twig_test_empty((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 385, $this->getSourceContext()); })()))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 385, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        // line 386
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_099391e0e057ab6a361a4ec04c2190d8509a82ea2d8eac79cf5f0df8ac813907->leave($__internal_099391e0e057ab6a361a4ec04c2190d8509a82ea2d8eac79cf5f0df8ac813907_prof);

        
        $__internal_6413164e5a5280e2861da10fe43dd20b37bc92b52b4eb9c56c0f9b053465b27b->leave($__internal_6413164e5a5280e2861da10fe43dd20b37bc92b52b4eb9c56c0f9b053465b27b_prof);

    }

    // line 389
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_892e5973095a3f18b1efc0afaa49d72738e9df447609bfec8abdd764fbebcbc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_892e5973095a3f18b1efc0afaa49d72738e9df447609bfec8abdd764fbebcbc8->enter($__internal_892e5973095a3f18b1efc0afaa49d72738e9df447609bfec8abdd764fbebcbc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        $__internal_8790a031a11b54bb840c0a642f4e16d45a9d4d10d2bc554d76f7351df6f7bf82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8790a031a11b54bb840c0a642f4e16d45a9d4d10d2bc554d76f7351df6f7bf82->enter($__internal_8790a031a11b54bb840c0a642f4e16d45a9d4d10d2bc554d76f7351df6f7bf82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

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
        
        $__internal_8790a031a11b54bb840c0a642f4e16d45a9d4d10d2bc554d76f7351df6f7bf82->leave($__internal_8790a031a11b54bb840c0a642f4e16d45a9d4d10d2bc554d76f7351df6f7bf82_prof);

        
        $__internal_892e5973095a3f18b1efc0afaa49d72738e9df447609bfec8abdd764fbebcbc8->leave($__internal_892e5973095a3f18b1efc0afaa49d72738e9df447609bfec8abdd764fbebcbc8_prof);

    }

    // line 394
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_7a9b9983f1227ebdbe099aa71019b9a605709e68b03bdd8061db05784e8b1982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a9b9983f1227ebdbe099aa71019b9a605709e68b03bdd8061db05784e8b1982->enter($__internal_7a9b9983f1227ebdbe099aa71019b9a605709e68b03bdd8061db05784e8b1982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        $__internal_191f015257c26ef84f87f61bfdc7fa14f9262afb9cea7c90b2ebcd97cd6af5cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_191f015257c26ef84f87f61bfdc7fa14f9262afb9cea7c90b2ebcd97cd6af5cb->enter($__internal_191f015257c26ef84f87f61bfdc7fa14f9262afb9cea7c90b2ebcd97cd6af5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

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
        
        $__internal_191f015257c26ef84f87f61bfdc7fa14f9262afb9cea7c90b2ebcd97cd6af5cb->leave($__internal_191f015257c26ef84f87f61bfdc7fa14f9262afb9cea7c90b2ebcd97cd6af5cb_prof);

        
        $__internal_7a9b9983f1227ebdbe099aa71019b9a605709e68b03bdd8061db05784e8b1982->leave($__internal_7a9b9983f1227ebdbe099aa71019b9a605709e68b03bdd8061db05784e8b1982_prof);

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
", "form_div_layout.html.twig", "C:\\Pedidos\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\form_div_layout.html.twig");
    }
}
