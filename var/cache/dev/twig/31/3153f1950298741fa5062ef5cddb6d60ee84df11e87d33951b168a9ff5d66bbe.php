<?php

/* bootstrap_4_layout.html.twig */
class __TwigTemplate_ce6cf96fc6e166e8eac4883e7bb1a3897d1163a651e4bc389870fd092fbd9078 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_4_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'money_widget' => array($this, 'block_money_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'widget_attributes' => array($this, 'block_widget_attributes'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'form_label' => array($this, 'block_form_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9be77638dadc20002d035351acc545a4faee64840fad967154d19c38f569b46d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9be77638dadc20002d035351acc545a4faee64840fad967154d19c38f569b46d->enter($__internal_9be77638dadc20002d035351acc545a4faee64840fad967154d19c38f569b46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        $__internal_870a933994934cafb47c8854294c9fc19c74236b8beeb514176d133200c8c1ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_870a933994934cafb47c8854294c9fc19c74236b8beeb514176d133200c8c1ad->enter($__internal_870a933994934cafb47c8854294c9fc19c74236b8beeb514176d133200c8c1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('money_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('date_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('time_widget', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 60
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 67
        $this->displayBlock('button_widget', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 87
        echo "
";
        // line 88
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 99
        echo "
";
        // line 100
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 124
        echo "
";
        // line 126
        echo "
";
        // line 127
        $this->displayBlock('form_label', $context, $blocks);
        // line 136
        echo "
";
        // line 137
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 162
        echo "
";
        // line 164
        echo "
";
        // line 165
        $this->displayBlock('form_row', $context, $blocks);
        // line 175
        echo "
";
        // line 177
        echo "
";
        // line 178
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_9be77638dadc20002d035351acc545a4faee64840fad967154d19c38f569b46d->leave($__internal_9be77638dadc20002d035351acc545a4faee64840fad967154d19c38f569b46d_prof);

        
        $__internal_870a933994934cafb47c8854294c9fc19c74236b8beeb514176d133200c8c1ad->leave($__internal_870a933994934cafb47c8854294c9fc19c74236b8beeb514176d133200c8c1ad_prof);

    }

    // line 5
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_ac1022b2f942d1d52013b17ad648cf14ff18480541d527e9375fe62f23a7ac1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac1022b2f942d1d52013b17ad648cf14ff18480541d527e9375fe62f23a7ac1e->enter($__internal_ac1022b2f942d1d52013b17ad648cf14ff18480541d527e9375fe62f23a7ac1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_4617e22d7f546c710121b0311902b7dbf2860032d6217229ddcd26f3904bb817 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4617e22d7f546c710121b0311902b7dbf2860032d6217229ddcd26f3904bb817->enter($__internal_4617e22d7f546c710121b0311902b7dbf2860032d6217229ddcd26f3904bb817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 6
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 6, $this->getSourceContext()); })())) {
            // line 7
            echo "        ";
            $context["group_class"] = " form-control is-invalid";
            // line 8
            echo "        ";
            $context["valid"] = true;
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("money_widget", $context, $blocks);
        
        $__internal_4617e22d7f546c710121b0311902b7dbf2860032d6217229ddcd26f3904bb817->leave($__internal_4617e22d7f546c710121b0311902b7dbf2860032d6217229ddcd26f3904bb817_prof);

        
        $__internal_ac1022b2f942d1d52013b17ad648cf14ff18480541d527e9375fe62f23a7ac1e->leave($__internal_ac1022b2f942d1d52013b17ad648cf14ff18480541d527e9375fe62f23a7ac1e_prof);

    }

    // line 13
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_1617a5413793156d0aed4154cd95f5fe7bc3c968812e106e6dd5be0c1d4fdd49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1617a5413793156d0aed4154cd95f5fe7bc3c968812e106e6dd5be0c1d4fdd49->enter($__internal_1617a5413793156d0aed4154cd95f5fe7bc3c968812e106e6dd5be0c1d4fdd49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_125664c55bcec342a628c9fec1e1f6c1db9ffc9fe17517c7a5d77ef63b255fce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_125664c55bcec342a628c9fec1e1f6c1db9ffc9fe17517c7a5d77ef63b255fce->enter($__internal_125664c55bcec342a628c9fec1e1f6c1db9ffc9fe17517c7a5d77ef63b255fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 14
        if ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 14, $this->getSourceContext()); })()) != "single_text") &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 14, $this->getSourceContext()); })()))) {
            // line 15
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 15, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 16
            $context["valid"] = true;
        }
        // line 18
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        
        $__internal_125664c55bcec342a628c9fec1e1f6c1db9ffc9fe17517c7a5d77ef63b255fce->leave($__internal_125664c55bcec342a628c9fec1e1f6c1db9ffc9fe17517c7a5d77ef63b255fce_prof);

        
        $__internal_1617a5413793156d0aed4154cd95f5fe7bc3c968812e106e6dd5be0c1d4fdd49->leave($__internal_1617a5413793156d0aed4154cd95f5fe7bc3c968812e106e6dd5be0c1d4fdd49_prof);

    }

    // line 21
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_2c49d36d857aed93b9825a2924ad2a9f5988d905ad16b4d99f5fc72793d7fe49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c49d36d857aed93b9825a2924ad2a9f5988d905ad16b4d99f5fc72793d7fe49->enter($__internal_2c49d36d857aed93b9825a2924ad2a9f5988d905ad16b4d99f5fc72793d7fe49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_6c1cd79d38406e3323322fa7fda76575f412f97610f8f71bfe984290db7d7a8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c1cd79d38406e3323322fa7fda76575f412f97610f8f71bfe984290db7d7a8c->enter($__internal_6c1cd79d38406e3323322fa7fda76575f412f97610f8f71bfe984290db7d7a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 22
        if ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 22, $this->getSourceContext()); })()) != "single_text") &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 22, $this->getSourceContext()); })()))) {
            // line 23
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 23, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 24
            $context["valid"] = true;
        }
        // line 26
        $this->displayParentBlock("date_widget", $context, $blocks);
        
        $__internal_6c1cd79d38406e3323322fa7fda76575f412f97610f8f71bfe984290db7d7a8c->leave($__internal_6c1cd79d38406e3323322fa7fda76575f412f97610f8f71bfe984290db7d7a8c_prof);

        
        $__internal_2c49d36d857aed93b9825a2924ad2a9f5988d905ad16b4d99f5fc72793d7fe49->leave($__internal_2c49d36d857aed93b9825a2924ad2a9f5988d905ad16b4d99f5fc72793d7fe49_prof);

    }

    // line 29
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_e59c337c626525028428312bc50342407e59caba72aeadd2044170653d9b6b2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e59c337c626525028428312bc50342407e59caba72aeadd2044170653d9b6b2f->enter($__internal_e59c337c626525028428312bc50342407e59caba72aeadd2044170653d9b6b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_a662cbcef6cadd23cb878f58d9a457c8cf9e37be519988a05e1f08fcd131a724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a662cbcef6cadd23cb878f58d9a457c8cf9e37be519988a05e1f08fcd131a724->enter($__internal_a662cbcef6cadd23cb878f58d9a457c8cf9e37be519988a05e1f08fcd131a724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 30
        if ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 30, $this->getSourceContext()); })()) != "single_text") &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 30, $this->getSourceContext()); })()))) {
            // line 31
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 31, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 32
            $context["valid"] = true;
        }
        // line 34
        $this->displayParentBlock("time_widget", $context, $blocks);
        
        $__internal_a662cbcef6cadd23cb878f58d9a457c8cf9e37be519988a05e1f08fcd131a724->leave($__internal_a662cbcef6cadd23cb878f58d9a457c8cf9e37be519988a05e1f08fcd131a724_prof);

        
        $__internal_e59c337c626525028428312bc50342407e59caba72aeadd2044170653d9b6b2f->leave($__internal_e59c337c626525028428312bc50342407e59caba72aeadd2044170653d9b6b2f_prof);

    }

    // line 37
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_f1c28a4863f6f3b34f96cc56c0598ef651e4cd901605c197103d73aa9462a523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c28a4863f6f3b34f96cc56c0598ef651e4cd901605c197103d73aa9462a523->enter($__internal_f1c28a4863f6f3b34f96cc56c0598ef651e4cd901605c197103d73aa9462a523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_af78edd103b598d8b355579562576d34367105fbf64d964151f4225cb43afbf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af78edd103b598d8b355579562576d34367105fbf64d964151f4225cb43afbf3->enter($__internal_af78edd103b598d8b355579562576d34367105fbf64d964151f4225cb43afbf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 38
        if ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 38, $this->getSourceContext()); })()) != "single_text") &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 38, $this->getSourceContext()); })()))) {
            // line 39
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 39, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 40
            $context["valid"] = true;
        }
        // line 42
        $this->displayParentBlock("dateinterval_widget", $context, $blocks);
        
        $__internal_af78edd103b598d8b355579562576d34367105fbf64d964151f4225cb43afbf3->leave($__internal_af78edd103b598d8b355579562576d34367105fbf64d964151f4225cb43afbf3_prof);

        
        $__internal_f1c28a4863f6f3b34f96cc56c0598ef651e4cd901605c197103d73aa9462a523->leave($__internal_f1c28a4863f6f3b34f96cc56c0598ef651e4cd901605c197103d73aa9462a523_prof);

    }

    // line 45
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_47115ff50e22f7da4ec1e9616d18e3205d879bdc2018089c3eb148487a9ce13e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47115ff50e22f7da4ec1e9616d18e3205d879bdc2018089c3eb148487a9ce13e->enter($__internal_47115ff50e22f7da4ec1e9616d18e3205d879bdc2018089c3eb148487a9ce13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_4becb5dbfa92c6b89e407985451a70854bf82a05f94875c8574bb60cca3953fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4becb5dbfa92c6b89e407985451a70854bf82a05f94875c8574bb60cca3953fa->enter($__internal_4becb5dbfa92c6b89e407985451a70854bf82a05f94875c8574bb60cca3953fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 46
        echo "<div class=\"input-group";
        echo (( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 46, $this->getSourceContext()); })())) ? (" form-control is-invalid") : (""));
        echo "\">
        ";
        // line 47
        $context["valid"] = true;
        // line 48
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 49
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_4becb5dbfa92c6b89e407985451a70854bf82a05f94875c8574bb60cca3953fa->leave($__internal_4becb5dbfa92c6b89e407985451a70854bf82a05f94875c8574bb60cca3953fa_prof);

        
        $__internal_47115ff50e22f7da4ec1e9616d18e3205d879bdc2018089c3eb148487a9ce13e->leave($__internal_47115ff50e22f7da4ec1e9616d18e3205d879bdc2018089c3eb148487a9ce13e_prof);

    }

    // line 53
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_05a7e336c321c3c895e2537557e6ecf276cb0f1c36ecce5e8344b11d0f7d6abb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05a7e336c321c3c895e2537557e6ecf276cb0f1c36ecce5e8344b11d0f7d6abb->enter($__internal_05a7e336c321c3c895e2537557e6ecf276cb0f1c36ecce5e8344b11d0f7d6abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_448c8995250a7004415d93cead524c0df9d0abbe4be2f92dfdf72971b50b8143 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_448c8995250a7004415d93cead524c0df9d0abbe4be2f92dfdf72971b50b8143->enter($__internal_448c8995250a7004415d93cead524c0df9d0abbe4be2f92dfdf72971b50b8143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 54
        if (( !array_key_exists("type", $context) || ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 54, $this->getSourceContext()); })()) != "hidden"))) {
            // line 55
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 55, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control") . (((((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 55, $this->getSourceContext()); })()), "")) : ("")) == "file")) ? ("-file") : (""))))));
        }
        // line 57
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_448c8995250a7004415d93cead524c0df9d0abbe4be2f92dfdf72971b50b8143->leave($__internal_448c8995250a7004415d93cead524c0df9d0abbe4be2f92dfdf72971b50b8143_prof);

        
        $__internal_05a7e336c321c3c895e2537557e6ecf276cb0f1c36ecce5e8344b11d0f7d6abb->leave($__internal_05a7e336c321c3c895e2537557e6ecf276cb0f1c36ecce5e8344b11d0f7d6abb_prof);

    }

    // line 60
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_046e09c4eec496d0679a47a38b9def6b78e3eda9c4f31f660821482ec5b7e399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_046e09c4eec496d0679a47a38b9def6b78e3eda9c4f31f660821482ec5b7e399->enter($__internal_046e09c4eec496d0679a47a38b9def6b78e3eda9c4f31f660821482ec5b7e399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_dceaa678e18aa7076b1580285b40f55d26395f4ebe53ecc16d45c2a02b5a3656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dceaa678e18aa7076b1580285b40f55d26395f4ebe53ecc16d45c2a02b5a3656->enter($__internal_dceaa678e18aa7076b1580285b40f55d26395f4ebe53ecc16d45c2a02b5a3656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 61
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 61, $this->getSourceContext()); })())) {
            // line 62
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 62, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 63
            echo "    ";
        }
        // line 64
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        
        $__internal_dceaa678e18aa7076b1580285b40f55d26395f4ebe53ecc16d45c2a02b5a3656->leave($__internal_dceaa678e18aa7076b1580285b40f55d26395f4ebe53ecc16d45c2a02b5a3656_prof);

        
        $__internal_046e09c4eec496d0679a47a38b9def6b78e3eda9c4f31f660821482ec5b7e399->leave($__internal_046e09c4eec496d0679a47a38b9def6b78e3eda9c4f31f660821482ec5b7e399_prof);

    }

    // line 67
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_caaa82e1b08621868013ef382f579ff51885ebc3bbe480a96df0fa632faa21be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caaa82e1b08621868013ef382f579ff51885ebc3bbe480a96df0fa632faa21be->enter($__internal_caaa82e1b08621868013ef382f579ff51885ebc3bbe480a96df0fa632faa21be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_70898cf852132dd4728c69cbec1bc0da686113729758bc8db8c22a74c78b7af8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70898cf852132dd4728c69cbec1bc0da686113729758bc8db8c22a74c78b7af8->enter($__internal_70898cf852132dd4728c69cbec1bc0da686113729758bc8db8c22a74c78b7af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 68
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 68, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-secondary")) : ("btn-secondary")) . " btn"))));
        // line 69
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_70898cf852132dd4728c69cbec1bc0da686113729758bc8db8c22a74c78b7af8->leave($__internal_70898cf852132dd4728c69cbec1bc0da686113729758bc8db8c22a74c78b7af8_prof);

        
        $__internal_caaa82e1b08621868013ef382f579ff51885ebc3bbe480a96df0fa632faa21be->leave($__internal_caaa82e1b08621868013ef382f579ff51885ebc3bbe480a96df0fa632faa21be_prof);

    }

    // line 72
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_7721604cbeb5295bd2be9766246b4bfbbbcd86fa20a3d5e927c6b0aba46a3477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7721604cbeb5295bd2be9766246b4bfbbbcd86fa20a3d5e927c6b0aba46a3477->enter($__internal_7721604cbeb5295bd2be9766246b4bfbbbcd86fa20a3d5e927c6b0aba46a3477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_053b306a4773f4a407dc16ea3fdeeb188fa0298194f49088dd83e9a707544c3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_053b306a4773f4a407dc16ea3fdeeb188fa0298194f49088dd83e9a707544c3c->enter($__internal_053b306a4773f4a407dc16ea3fdeeb188fa0298194f49088dd83e9a707544c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 73
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 73, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 74
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 74, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 75
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 75, $this->getSourceContext()); })()))) {
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } elseif (twig_in_filter("form-check-inline",         // line 77
(isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 77, $this->getSourceContext()); })()))) {
            // line 78
            echo "        <div class=\"form-check";
            echo (( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 78, $this->getSourceContext()); })())) ? (" form-control is-invalid") : (""));
            echo " form-check-inline\">";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 79, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 80
            echo "</div>
    ";
        } else {
            // line 82
            echo "<div class=\"form-check";
            echo (( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 82, $this->getSourceContext()); })())) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 83, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 84
            echo "</div>";
        }
        
        $__internal_053b306a4773f4a407dc16ea3fdeeb188fa0298194f49088dd83e9a707544c3c->leave($__internal_053b306a4773f4a407dc16ea3fdeeb188fa0298194f49088dd83e9a707544c3c_prof);

        
        $__internal_7721604cbeb5295bd2be9766246b4bfbbbcd86fa20a3d5e927c6b0aba46a3477->leave($__internal_7721604cbeb5295bd2be9766246b4bfbbbcd86fa20a3d5e927c6b0aba46a3477_prof);

    }

    // line 88
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_be420c366338c56cf9558e6383a67e04332b2e0848f51e6171b80abf2f5188fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be420c366338c56cf9558e6383a67e04332b2e0848f51e6171b80abf2f5188fa->enter($__internal_be420c366338c56cf9558e6383a67e04332b2e0848f51e6171b80abf2f5188fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_be3f2c7cb7e14b18732928e51211082703dac54c36bd358b7bd213548dad0782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be3f2c7cb7e14b18732928e51211082703dac54c36bd358b7bd213548dad0782->enter($__internal_be3f2c7cb7e14b18732928e51211082703dac54c36bd358b7bd213548dad0782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 89
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 89, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 90
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 90, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 91
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 91, $this->getSourceContext()); })()))) {
            // line 92
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 92, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 94
            echo "<div class=\"form-check";
            echo (( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 94, $this->getSourceContext()); })())) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 95
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 96
            echo "</div>";
        }
        
        $__internal_be3f2c7cb7e14b18732928e51211082703dac54c36bd358b7bd213548dad0782->leave($__internal_be3f2c7cb7e14b18732928e51211082703dac54c36bd358b7bd213548dad0782_prof);

        
        $__internal_be420c366338c56cf9558e6383a67e04332b2e0848f51e6171b80abf2f5188fa->leave($__internal_be420c366338c56cf9558e6383a67e04332b2e0848f51e6171b80abf2f5188fa_prof);

    }

    // line 100
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_f0595d4487112dadeece58a41471b326f05aa2f8440a02078c577cb420896d28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0595d4487112dadeece58a41471b326f05aa2f8440a02078c577cb420896d28->enter($__internal_f0595d4487112dadeece58a41471b326f05aa2f8440a02078c577cb420896d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_ec46d090047791fe0d7512ad08f291bfd904f042e608ac4a2c7bb42796f03110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec46d090047791fe0d7512ad08f291bfd904f042e608ac4a2c7bb42796f03110->enter($__internal_ec46d090047791fe0d7512ad08f291bfd904f042e608ac4a2c7bb42796f03110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 101
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 103
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 104
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 105
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 105, $this->getSourceContext()); })()), "valid" =>                 // line 106
(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 106, $this->getSourceContext()); })())));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 110
            if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 110, $this->getSourceContext()); })())) {
                // line 111
                $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 111, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            }
            // line 113
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 114, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 115
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 116
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 117
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 117, $this->getSourceContext()); })()), "valid" => true));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "</div>";
        }
        
        $__internal_ec46d090047791fe0d7512ad08f291bfd904f042e608ac4a2c7bb42796f03110->leave($__internal_ec46d090047791fe0d7512ad08f291bfd904f042e608ac4a2c7bb42796f03110_prof);

        
        $__internal_f0595d4487112dadeece58a41471b326f05aa2f8440a02078c577cb420896d28->leave($__internal_f0595d4487112dadeece58a41471b326f05aa2f8440a02078c577cb420896d28_prof);

    }

    // line 127
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d4cacbbd9da3607aee51b56fddfd799dfd1e79421c378b14475cd9e8301572e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4cacbbd9da3607aee51b56fddfd799dfd1e79421c378b14475cd9e8301572e1->enter($__internal_d4cacbbd9da3607aee51b56fddfd799dfd1e79421c378b14475cd9e8301572e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_96735de053cf9cc26ea30dc25e85b765e6f3c05734d4eec9d99dc1917f21db3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96735de053cf9cc26ea30dc25e85b765e6f3c05734d4eec9d99dc1917f21db3f->enter($__internal_96735de053cf9cc26ea30dc25e85b765e6f3c05734d4eec9d99dc1917f21db3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 128
        if ((array_key_exists("compound", $context) && (isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 128, $this->getSourceContext()); })()))) {
            // line 129
            $context["element"] = "legend";
            // line 130
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 130, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-legend"))));
        } else {
            // line 132
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 132, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-control-label"))));
        }
        // line 134
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_96735de053cf9cc26ea30dc25e85b765e6f3c05734d4eec9d99dc1917f21db3f->leave($__internal_96735de053cf9cc26ea30dc25e85b765e6f3c05734d4eec9d99dc1917f21db3f_prof);

        
        $__internal_d4cacbbd9da3607aee51b56fddfd799dfd1e79421c378b14475cd9e8301572e1->leave($__internal_d4cacbbd9da3607aee51b56fddfd799dfd1e79421c378b14475cd9e8301572e1_prof);

    }

    // line 137
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_a90e6abab05aa9c859f2e48dac16420d00deb2efd41ca198a8584612a4fdc84e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a90e6abab05aa9c859f2e48dac16420d00deb2efd41ca198a8584612a4fdc84e->enter($__internal_a90e6abab05aa9c859f2e48dac16420d00deb2efd41ca198a8584612a4fdc84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_b692453595353406e84f8dabb1dc5484dbd6c7a161f87edc64a709b265a0ce0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b692453595353406e84f8dabb1dc5484dbd6c7a161f87edc64a709b265a0ce0f->enter($__internal_b692453595353406e84f8dabb1dc5484dbd6c7a161f87edc64a709b265a0ce0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 139
        if (array_key_exists("widget", $context)) {
            // line 140
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 140, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-check-label"))));
            // line 141
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 141, $this->getSourceContext()); })())) {
                // line 142
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 142, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 144
            if (array_key_exists("parent_label_class", $context)) {
                // line 145
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 145, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 145, $this->getSourceContext()); })())))));
            }
            // line 147
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 147, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 147, $this->getSourceContext()); })())))) {
                // line 148
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 148, $this->getSourceContext()); })()))) {
                    // line 149
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 149, $this->getSourceContext()); })()), array("%name%" =>                     // line 150
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 150, $this->getSourceContext()); })()), "%id%" =>                     // line 151
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 151, $this->getSourceContext()); })())));
                } else {
                    // line 154
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 154, $this->getSourceContext()); })()));
                }
            }
            // line 157
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 157, $this->getSourceContext()); })()));
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
            // line 158
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 158, $this->getSourceContext()); })());
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 158, $this->getSourceContext()); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 158, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 158, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 158, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 158, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            // line 159
            echo "</label>";
        }
        
        $__internal_b692453595353406e84f8dabb1dc5484dbd6c7a161f87edc64a709b265a0ce0f->leave($__internal_b692453595353406e84f8dabb1dc5484dbd6c7a161f87edc64a709b265a0ce0f_prof);

        
        $__internal_a90e6abab05aa9c859f2e48dac16420d00deb2efd41ca198a8584612a4fdc84e->leave($__internal_a90e6abab05aa9c859f2e48dac16420d00deb2efd41ca198a8584612a4fdc84e_prof);

    }

    // line 165
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c3a91bb1d7687591762e1c4e4430ebcaca7fca32b2cc198b1c926334a994abad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a91bb1d7687591762e1c4e4430ebcaca7fca32b2cc198b1c926334a994abad->enter($__internal_c3a91bb1d7687591762e1c4e4430ebcaca7fca32b2cc198b1c926334a994abad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_05baa0a9653aabc8d391415d2be6480b21328f45ea0e063258563008566e34b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05baa0a9653aabc8d391415d2be6480b21328f45ea0e063258563008566e34b4->enter($__internal_05baa0a9653aabc8d391415d2be6480b21328f45ea0e063258563008566e34b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 166
        if ((array_key_exists("compound", $context) && (isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 166, $this->getSourceContext()); })()))) {
            // line 167
            $context["element"] = "fieldset";
        }
        // line 169
        echo "<";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 169, $this->getSourceContext()); })()), "div")) : ("div")), "html", null, true);
        echo " class=\"form-group\">";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 170, $this->getSourceContext()); })()), 'label');
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 171, $this->getSourceContext()); })()), 'widget');
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 172, $this->getSourceContext()); })()), 'errors');
        // line 173
        echo "</";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 173, $this->getSourceContext()); })()), "div")) : ("div")), "html", null, true);
        echo ">";
        
        $__internal_05baa0a9653aabc8d391415d2be6480b21328f45ea0e063258563008566e34b4->leave($__internal_05baa0a9653aabc8d391415d2be6480b21328f45ea0e063258563008566e34b4_prof);

        
        $__internal_c3a91bb1d7687591762e1c4e4430ebcaca7fca32b2cc198b1c926334a994abad->leave($__internal_c3a91bb1d7687591762e1c4e4430ebcaca7fca32b2cc198b1c926334a994abad_prof);

    }

    // line 178
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_b7a24e25504b79a182e8c0a5bce3985b2b6579c814fe6584a880ba38c4525574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7a24e25504b79a182e8c0a5bce3985b2b6579c814fe6584a880ba38c4525574->enter($__internal_b7a24e25504b79a182e8c0a5bce3985b2b6579c814fe6584a880ba38c4525574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_9564f9087013ad333ea37e3c088eb8ff92f835b15c2fb9adabb9b5efe2fdfb7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9564f9087013ad333ea37e3c088eb8ff92f835b15c2fb9adabb9b5efe2fdfb7d->enter($__internal_9564f9087013ad333ea37e3c088eb8ff92f835b15c2fb9adabb9b5efe2fdfb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 179
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 179, $this->getSourceContext()); })())) > 0)) {
            // line 180
            echo "<div class=\"";
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 180, $this->getSourceContext()); })()))) {
                echo "invalid-feedback";
            } else {
                echo "alert alert-danger";
            }
            echo "\">
        <ul class=\"list-unstyled mb-0\">";
            // line 182
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 182, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 183
                echo "<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "</ul>
    </div>";
        }
        
        $__internal_9564f9087013ad333ea37e3c088eb8ff92f835b15c2fb9adabb9b5efe2fdfb7d->leave($__internal_9564f9087013ad333ea37e3c088eb8ff92f835b15c2fb9adabb9b5efe2fdfb7d_prof);

        
        $__internal_b7a24e25504b79a182e8c0a5bce3985b2b6579c814fe6584a880ba38c4525574->leave($__internal_b7a24e25504b79a182e8c0a5bce3985b2b6579c814fe6584a880ba38c4525574_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  683 => 185,  675 => 183,  671 => 182,  662 => 180,  660 => 179,  651 => 178,  639 => 173,  637 => 172,  635 => 171,  633 => 170,  629 => 169,  626 => 167,  624 => 166,  615 => 165,  604 => 159,  600 => 158,  585 => 157,  581 => 154,  578 => 151,  577 => 150,  576 => 149,  574 => 148,  572 => 147,  569 => 145,  567 => 144,  564 => 142,  562 => 141,  560 => 140,  558 => 139,  549 => 137,  539 => 134,  536 => 132,  533 => 130,  531 => 129,  529 => 128,  520 => 127,  509 => 121,  503 => 117,  502 => 116,  501 => 115,  497 => 114,  493 => 113,  490 => 111,  488 => 110,  481 => 106,  480 => 105,  479 => 104,  478 => 103,  474 => 102,  472 => 101,  463 => 100,  452 => 96,  450 => 95,  446 => 94,  443 => 92,  441 => 91,  439 => 90,  437 => 89,  428 => 88,  417 => 84,  415 => 83,  411 => 82,  407 => 80,  405 => 79,  401 => 78,  399 => 77,  397 => 76,  395 => 75,  393 => 74,  391 => 73,  382 => 72,  372 => 69,  370 => 68,  361 => 67,  351 => 64,  348 => 63,  345 => 62,  343 => 61,  334 => 60,  324 => 57,  321 => 55,  319 => 54,  310 => 53,  299 => 49,  297 => 48,  295 => 47,  290 => 46,  281 => 45,  271 => 42,  268 => 40,  266 => 39,  264 => 38,  255 => 37,  245 => 34,  242 => 32,  240 => 31,  238 => 30,  229 => 29,  219 => 26,  216 => 24,  214 => 23,  212 => 22,  203 => 21,  193 => 18,  190 => 16,  188 => 15,  186 => 14,  177 => 13,  167 => 10,  164 => 9,  161 => 8,  158 => 7,  156 => 6,  147 => 5,  137 => 178,  134 => 177,  131 => 175,  129 => 165,  126 => 164,  123 => 162,  121 => 137,  118 => 136,  116 => 127,  113 => 126,  110 => 124,  108 => 100,  105 => 99,  103 => 88,  100 => 87,  98 => 72,  95 => 71,  93 => 67,  91 => 60,  89 => 53,  86 => 52,  84 => 45,  81 => 44,  79 => 37,  76 => 36,  74 => 29,  71 => 28,  69 => 21,  66 => 20,  64 => 13,  61 => 12,  59 => 5,  56 => 4,  53 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block money_widget -%}
    {% if not valid %}
        {% set group_class = ' form-control is-invalid' %}
        {% set valid = true %}
    {% endif %}
    {{- parent() -}}
{%- endblock money_widget %}

{% block datetime_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock time_widget %}

{% block dateinterval_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock dateinterval_widget %}

{% block percent_widget -%}
    <div class=\"input-group{{ not valid ? ' form-control is-invalid' }}\">
        {% set valid = true %}
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type != 'hidden' %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control' ~ (type|default('') == 'file' ? '-file' : ''))|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{%- block widget_attributes -%}
    {%- if not valid %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
    {% endif -%}
    {{ parent() }}
{%- endblock widget_attributes -%}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-secondary') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% elseif 'form-check-inline' in parent_label_class %}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }} form-check-inline\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {% else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
                valid: valid,
            }) -}}
        {% endfor -%}
    {%- else -%}
        {%- if not valid -%}
            {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
        {%- endif -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                    valid: true,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block form_label -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'legend' -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-legend')|trim}) -%}
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-control-label')|trim}) -%}
    {%- endif -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block checkbox_radio_label -%}
    {#- Do not display the label if widget is not defined in order to prevent double label rendering -#}
    {%- if widget is defined -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-check-label')|trim}) -%}
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
                {%- set label = name|humanize -%}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'fieldset' -%}
    {%- endif -%}
    <{{ element|default('div') }} class=\"form-group\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </{{ element|default('div') }}>
{%- endblock form_row %}

{# Errors #}

{% block form_errors -%}
    {%- if errors|length > 0 -%}
    <div class=\"{% if form is not rootform %}invalid-feedback{% else %}alert alert-danger{% endif %}\">
        <ul class=\"list-unstyled mb-0\">
            {%- for error in errors -%}
                <li>{{ error.message }}</li>
            {%- endfor -%}
        </ul>
    </div>
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_4_layout.html.twig", "C:\\Pedidos\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_4_layout.html.twig");
    }
}
