<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_1db1418371292b8eab03fe007ee6161b43e4d53790b54208272ff5edbcf8029c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_label' => array($this, 'block_choice_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'form_row' => array($this, 'block_form_row'),
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6445b872874011c5025cd8341e09a4b3ac3ef479df3d21de8dc94e142865428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6445b872874011c5025cd8341e09a4b3ac3ef479df3d21de8dc94e142865428->enter($__internal_e6445b872874011c5025cd8341e09a4b3ac3ef479df3d21de8dc94e142865428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_49afaf7b3be92c385e5bcad5324183ad11e9fd0635f22739a7772f1349c0c556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49afaf7b3be92c385e5bcad5324183ad11e9fd0635f22739a7772f1349c0c556->enter($__internal_49afaf7b3be92c385e5bcad5324183ad11e9fd0635f22739a7772f1349c0c556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6445b872874011c5025cd8341e09a4b3ac3ef479df3d21de8dc94e142865428->leave($__internal_e6445b872874011c5025cd8341e09a4b3ac3ef479df3d21de8dc94e142865428_prof);

        
        $__internal_49afaf7b3be92c385e5bcad5324183ad11e9fd0635f22739a7772f1349c0c556->leave($__internal_49afaf7b3be92c385e5bcad5324183ad11e9fd0635f22739a7772f1349c0c556_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_a9353eae72fbcf2125c7373286c6d78ab4da4d3247d7b58dbceb521c1e11b9b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9353eae72fbcf2125c7373286c6d78ab4da4d3247d7b58dbceb521c1e11b9b6->enter($__internal_a9353eae72fbcf2125c7373286c6d78ab4da4d3247d7b58dbceb521c1e11b9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_82a554ab1ef8a5bbc06afb5b5a3316f2562d5f820bd48aea33576abb00d2226b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82a554ab1ef8a5bbc06afb5b5a3316f2562d5f820bd48aea33576abb00d2226b->enter($__internal_82a554ab1ef8a5bbc06afb5b5a3316f2562d5f820bd48aea33576abb00d2226b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 7, $this->getSourceContext()); })())) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 8, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_82a554ab1ef8a5bbc06afb5b5a3316f2562d5f820bd48aea33576abb00d2226b->leave($__internal_82a554ab1ef8a5bbc06afb5b5a3316f2562d5f820bd48aea33576abb00d2226b_prof);

        
        $__internal_a9353eae72fbcf2125c7373286c6d78ab4da4d3247d7b58dbceb521c1e11b9b6->leave($__internal_a9353eae72fbcf2125c7373286c6d78ab4da4d3247d7b58dbceb521c1e11b9b6_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_65761185a3c094e872a38c19790442ce7fee5e2ea70998db51d74876f3bb2e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65761185a3c094e872a38c19790442ce7fee5e2ea70998db51d74876f3bb2e1e->enter($__internal_65761185a3c094e872a38c19790442ce7fee5e2ea70998db51d74876f3bb2e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_83265abd1765b94eee338352a67021f75911b677cc358c7291fc4350402bd8fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83265abd1765b94eee338352a67021f75911b677cc358c7291fc4350402bd8fa->enter($__internal_83265abd1765b94eee338352a67021f75911b677cc358c7291fc4350402bd8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 14, $this->getSourceContext()); })())) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 15, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_83265abd1765b94eee338352a67021f75911b677cc358c7291fc4350402bd8fa->leave($__internal_83265abd1765b94eee338352a67021f75911b677cc358c7291fc4350402bd8fa_prof);

        
        $__internal_65761185a3c094e872a38c19790442ce7fee5e2ea70998db51d74876f3bb2e1e->leave($__internal_65761185a3c094e872a38c19790442ce7fee5e2ea70998db51d74876f3bb2e1e_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_51c115a84ea03f9466e764ca46ce3175b9d4199369dbdad34aa62b093f0cd68e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c115a84ea03f9466e764ca46ce3175b9d4199369dbdad34aa62b093f0cd68e->enter($__internal_51c115a84ea03f9466e764ca46ce3175b9d4199369dbdad34aa62b093f0cd68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_c2bf6c7aa5fbb5ce0b1e4468ee1e55957ec3eb804b49e3064cf2ccc273551b13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2bf6c7aa5fbb5ce0b1e4468ee1e55957ec3eb804b49e3064cf2ccc273551b13->enter($__internal_c2bf6c7aa5fbb5ce0b1e4468ee1e55957ec3eb804b49e3064cf2ccc273551b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 21, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_c2bf6c7aa5fbb5ce0b1e4468ee1e55957ec3eb804b49e3064cf2ccc273551b13->leave($__internal_c2bf6c7aa5fbb5ce0b1e4468ee1e55957ec3eb804b49e3064cf2ccc273551b13_prof);

        
        $__internal_51c115a84ea03f9466e764ca46ce3175b9d4199369dbdad34aa62b093f0cd68e->leave($__internal_51c115a84ea03f9466e764ca46ce3175b9d4199369dbdad34aa62b093f0cd68e_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_1931134de9ed4be7150b6da65ff01f983feda92187ccd12d2d86cc918af4edae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1931134de9ed4be7150b6da65ff01f983feda92187ccd12d2d86cc918af4edae->enter($__internal_1931134de9ed4be7150b6da65ff01f983feda92187ccd12d2d86cc918af4edae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_c196f30758fb7a66c387dc6977256566063607e748b6a0bee1bc880fb30c7e6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c196f30758fb7a66c387dc6977256566063607e748b6a0bee1bc880fb30c7e6f->enter($__internal_c196f30758fb7a66c387dc6977256566063607e748b6a0bee1bc880fb30c7e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 27, $this->getSourceContext()); })()), 0, 2));
        // line 28
        echo "        ";
        if ( !(isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new Twig_Error_Runtime('Variable "prepend" does not exist.', 28, $this->getSourceContext()); })())) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 30, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if ((isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new Twig_Error_Runtime('Variable "prepend" does not exist.', 36, $this->getSourceContext()); })())) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 38, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_c196f30758fb7a66c387dc6977256566063607e748b6a0bee1bc880fb30c7e6f->leave($__internal_c196f30758fb7a66c387dc6977256566063607e748b6a0bee1bc880fb30c7e6f_prof);

        
        $__internal_1931134de9ed4be7150b6da65ff01f983feda92187ccd12d2d86cc918af4edae->leave($__internal_1931134de9ed4be7150b6da65ff01f983feda92187ccd12d2d86cc918af4edae_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_3cf79dd95230cdee6f453a7810b9bbbce20a2dce8af6b980949a58c1bf225f5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cf79dd95230cdee6f453a7810b9bbbce20a2dce8af6b980949a58c1bf225f5a->enter($__internal_3cf79dd95230cdee6f453a7810b9bbbce20a2dce8af6b980949a58c1bf225f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_828f40187c2667a89bcdd55169b6ec4362c28b730a3928956603d80cdd61728c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_828f40187c2667a89bcdd55169b6ec4362c28b730a3928956603d80cdd61728c->enter($__internal_828f40187c2667a89bcdd55169b6ec4362c28b730a3928956603d80cdd61728c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_828f40187c2667a89bcdd55169b6ec4362c28b730a3928956603d80cdd61728c->leave($__internal_828f40187c2667a89bcdd55169b6ec4362c28b730a3928956603d80cdd61728c_prof);

        
        $__internal_3cf79dd95230cdee6f453a7810b9bbbce20a2dce8af6b980949a58c1bf225f5a->leave($__internal_3cf79dd95230cdee6f453a7810b9bbbce20a2dce8af6b980949a58c1bf225f5a_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_2248d81177abd44f06af833c138027feb4fd976062fdaf4c3aa0a8c0cbfb7722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2248d81177abd44f06af833c138027feb4fd976062fdaf4c3aa0a8c0cbfb7722->enter($__internal_2248d81177abd44f06af833c138027feb4fd976062fdaf4c3aa0a8c0cbfb7722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_4ee7f5d6eb0023fa61cee5604bb5764945c655332b0c08f33234fd7019045869 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ee7f5d6eb0023fa61cee5604bb5764945c655332b0c08f33234fd7019045869->enter($__internal_4ee7f5d6eb0023fa61cee5604bb5764945c655332b0c08f33234fd7019045869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 56, $this->getSourceContext()); })()) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 59, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->getSourceContext()); })()), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->getSourceContext()); })()), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_4ee7f5d6eb0023fa61cee5604bb5764945c655332b0c08f33234fd7019045869->leave($__internal_4ee7f5d6eb0023fa61cee5604bb5764945c655332b0c08f33234fd7019045869_prof);

        
        $__internal_2248d81177abd44f06af833c138027feb4fd976062fdaf4c3aa0a8c0cbfb7722->leave($__internal_2248d81177abd44f06af833c138027feb4fd976062fdaf4c3aa0a8c0cbfb7722_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_a8208cca2b8881738fd1a9c4e4b5ef73d24a351a7fdd3c331077be178a4e6c58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8208cca2b8881738fd1a9c4e4b5ef73d24a351a7fdd3c331077be178a4e6c58->enter($__internal_a8208cca2b8881738fd1a9c4e4b5ef73d24a351a7fdd3c331077be178a4e6c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_27bba9b085986d609bc3251645b4852a5eb26005e66a1d037927ef2c33a3e92b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27bba9b085986d609bc3251645b4852a5eb26005e66a1d037927ef2c33a3e92b->enter($__internal_27bba9b085986d609bc3251645b4852a5eb26005e66a1d037927ef2c33a3e92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 72, $this->getSourceContext()); })()) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 75, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 76, $this->getSourceContext()); })()))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 79, $this->getSourceContext()); })()), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 80, $this->getSourceContext()); })()), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 81, $this->getSourceContext()); })()), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 82, $this->getSourceContext()); })()), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 84, $this->getSourceContext()); })()))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_27bba9b085986d609bc3251645b4852a5eb26005e66a1d037927ef2c33a3e92b->leave($__internal_27bba9b085986d609bc3251645b4852a5eb26005e66a1d037927ef2c33a3e92b_prof);

        
        $__internal_a8208cca2b8881738fd1a9c4e4b5ef73d24a351a7fdd3c331077be178a4e6c58->leave($__internal_a8208cca2b8881738fd1a9c4e4b5ef73d24a351a7fdd3c331077be178a4e6c58_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_2112e6d1d015f64c5b270c56676c4e8d497d6934c227b6c09af36b65125bbb2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2112e6d1d015f64c5b270c56676c4e8d497d6934c227b6c09af36b65125bbb2b->enter($__internal_2112e6d1d015f64c5b270c56676c4e8d497d6934c227b6c09af36b65125bbb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_8070371c7a31ab63f2584763770f2401abb2a6da30196db35a08e67d70216818 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8070371c7a31ab63f2584763770f2401abb2a6da30196db35a08e67d70216818->enter($__internal_8070371c7a31ab63f2584763770f2401abb2a6da30196db35a08e67d70216818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 91, $this->getSourceContext()); })()) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 94, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 95, $this->getSourceContext()); })())))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 98, $this->getSourceContext()); })())) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 99, $this->getSourceContext()); })()), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 106, $this->getSourceContext()); })()), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->getSourceContext()); })()), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 121, $this->getSourceContext()); })()), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 133, $this->getSourceContext()); })())))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_8070371c7a31ab63f2584763770f2401abb2a6da30196db35a08e67d70216818->leave($__internal_8070371c7a31ab63f2584763770f2401abb2a6da30196db35a08e67d70216818_prof);

        
        $__internal_2112e6d1d015f64c5b270c56676c4e8d497d6934c227b6c09af36b65125bbb2b->leave($__internal_2112e6d1d015f64c5b270c56676c4e8d497d6934c227b6c09af36b65125bbb2b_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_c97beaecd6a67b18a52c851719e2fbe581be75d7c7209ed4832bce149e9282ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c97beaecd6a67b18a52c851719e2fbe581be75d7c7209ed4832bce149e9282ba->enter($__internal_c97beaecd6a67b18a52c851719e2fbe581be75d7c7209ed4832bce149e9282ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_9bf0d034cba234ffe557b1e17ab2430e005dac77699e396e2f39737d3b688fec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bf0d034cba234ffe557b1e17ab2430e005dac77699e396e2f39737d3b688fec->enter($__internal_9bf0d034cba234ffe557b1e17ab2430e005dac77699e396e2f39737d3b688fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 140, $this->getSourceContext()); })())) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 141, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 144, $this->getSourceContext()); })())) {
            // line 145
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 145, $this->getSourceContext()); })()), array("style" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if (((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 148, $this->getSourceContext()); })()) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 148, $this->getSourceContext()); })()))) &&  !(isset($context["placeholder_in_choices"]) || array_key_exists("placeholder_in_choices", $context) ? $context["placeholder_in_choices"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder_in_choices" does not exist.', 148, $this->getSourceContext()); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 148, $this->getSourceContext()); })()))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 151, $this->getSourceContext()); })())) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 152, $this->getSourceContext()); })()))) {
            // line 153
            echo "<option value=\"\"";
            if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 153, $this->getSourceContext()); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 153, $this->getSourceContext()); })())))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 153, $this->getSourceContext()); })()) === false)) ? ((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 153, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 153, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 153, $this->getSourceContext()); })())))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 155, $this->getSourceContext()); })())) > 0)) {
            // line 156
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 156, $this->getSourceContext()); })());
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 158, $this->getSourceContext()); })())) > 0) &&  !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 158, $this->getSourceContext()); })())))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 159, $this->getSourceContext()); })()), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 162, $this->getSourceContext()); })());
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_9bf0d034cba234ffe557b1e17ab2430e005dac77699e396e2f39737d3b688fec->leave($__internal_9bf0d034cba234ffe557b1e17ab2430e005dac77699e396e2f39737d3b688fec_prof);

        
        $__internal_c97beaecd6a67b18a52c851719e2fbe581be75d7c7209ed4832bce149e9282ba->leave($__internal_c97beaecd6a67b18a52c851719e2fbe581be75d7c7209ed4832bce149e9282ba_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_fb4f74431dd540e76aef4971d3d7a37840375cf902198b317930f27f70788cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb4f74431dd540e76aef4971d3d7a37840375cf902198b317930f27f70788cd1->enter($__internal_fb4f74431dd540e76aef4971d3d7a37840375cf902198b317930f27f70788cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_1fe42ed1173dc184b7c6e87b0f92624f278918ef434b15ab7ca2e08dc0d37d9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fe42ed1173dc184b7c6e87b0f92624f278918ef434b15ab7ca2e08dc0d37d9e->enter($__internal_1fe42ed1173dc184b7c6e87b0f92624f278918ef434b15ab7ca2e08dc0d37d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 170, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 178, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_1fe42ed1173dc184b7c6e87b0f92624f278918ef434b15ab7ca2e08dc0d37d9e->leave($__internal_1fe42ed1173dc184b7c6e87b0f92624f278918ef434b15ab7ca2e08dc0d37d9e_prof);

        
        $__internal_fb4f74431dd540e76aef4971d3d7a37840375cf902198b317930f27f70788cd1->leave($__internal_fb4f74431dd540e76aef4971d3d7a37840375cf902198b317930f27f70788cd1_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_f9c7cb03d8b5b327432d2728c0ed09c7d256db752af4d567a06b450b7d2eca82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c7cb03d8b5b327432d2728c0ed09c7d256db752af4d567a06b450b7d2eca82->enter($__internal_f9c7cb03d8b5b327432d2728c0ed09c7d256db752af4d567a06b450b7d2eca82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_414e24f36bf76af27d754ce0ea4fde8cfcdbb9a9c6e2251b0a70cd0a0336f74c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_414e24f36bf76af27d754ce0ea4fde8cfcdbb9a9c6e2251b0a70cd0a0336f74c->enter($__internal_414e24f36bf76af27d754ce0ea4fde8cfcdbb9a9c6e2251b0a70cd0a0336f74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 188, $this->getSourceContext()); })()), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 189, $this->getSourceContext()); })())) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 190, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 192, $this->getSourceContext()); })()))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 193, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 196, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_414e24f36bf76af27d754ce0ea4fde8cfcdbb9a9c6e2251b0a70cd0a0336f74c->leave($__internal_414e24f36bf76af27d754ce0ea4fde8cfcdbb9a9c6e2251b0a70cd0a0336f74c_prof);

        
        $__internal_f9c7cb03d8b5b327432d2728c0ed09c7d256db752af4d567a06b450b7d2eca82->leave($__internal_f9c7cb03d8b5b327432d2728c0ed09c7d256db752af4d567a06b450b7d2eca82_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_cc44b1734118a31ad1afeea16d5f3941e21889526afc0669ceade1c8eb979b87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc44b1734118a31ad1afeea16d5f3941e21889526afc0669ceade1c8eb979b87->enter($__internal_cc44b1734118a31ad1afeea16d5f3941e21889526afc0669ceade1c8eb979b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_151f365be18d7d5ea166387a139732aaf4c1935cbac5a31171488e7747a96088 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_151f365be18d7d5ea166387a139732aaf4c1935cbac5a31171488e7747a96088->enter($__internal_151f365be18d7d5ea166387a139732aaf4c1935cbac5a31171488e7747a96088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 202, $this->getSourceContext()); })()), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 203, $this->getSourceContext()); })()))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 204, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 206, $this->getSourceContext()); })())) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 207, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 210, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_151f365be18d7d5ea166387a139732aaf4c1935cbac5a31171488e7747a96088->leave($__internal_151f365be18d7d5ea166387a139732aaf4c1935cbac5a31171488e7747a96088_prof);

        
        $__internal_cc44b1734118a31ad1afeea16d5f3941e21889526afc0669ceade1c8eb979b87->leave($__internal_cc44b1734118a31ad1afeea16d5f3941e21889526afc0669ceade1c8eb979b87_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_2920cd5e7e0f0e1e55f938be2adef4d6ab1a89fb56fc921cdb6015c278af5769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2920cd5e7e0f0e1e55f938be2adef4d6ab1a89fb56fc921cdb6015c278af5769->enter($__internal_2920cd5e7e0f0e1e55f938be2adef4d6ab1a89fb56fc921cdb6015c278af5769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_5e06d1d2ecba239c8ad75c1c6cf3598e8baa6527f54b174b65bf2dbef00a6d89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e06d1d2ecba239c8ad75c1c6cf3598e8baa6527f54b174b65bf2dbef00a6d89->enter($__internal_5e06d1d2ecba239c8ad75c1c6cf3598e8baa6527f54b174b65bf2dbef00a6d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 218, $this->getSourceContext()); })())) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 219, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_5e06d1d2ecba239c8ad75c1c6cf3598e8baa6527f54b174b65bf2dbef00a6d89->leave($__internal_5e06d1d2ecba239c8ad75c1c6cf3598e8baa6527f54b174b65bf2dbef00a6d89_prof);

        
        $__internal_2920cd5e7e0f0e1e55f938be2adef4d6ab1a89fb56fc921cdb6015c278af5769->leave($__internal_2920cd5e7e0f0e1e55f938be2adef4d6ab1a89fb56fc921cdb6015c278af5769_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_fed156bafbc1b6a86209f8b2fdbe85b657d5cd4a6dc8befe101983d70febf1b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed156bafbc1b6a86209f8b2fdbe85b657d5cd4a6dc8befe101983d70febf1b3->enter($__internal_fed156bafbc1b6a86209f8b2fdbe85b657d5cd4a6dc8befe101983d70febf1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_d810d3e4e3f5c74c66cca30b4c013c9a8750aa112e3e38c4f50045c50d0e2772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d810d3e4e3f5c74c66cca30b4c013c9a8750aa112e3e38c4f50045c50d0e2772->enter($__internal_d810d3e4e3f5c74c66cca30b4c013c9a8750aa112e3e38c4f50045c50d0e2772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 225, $this->getSourceContext()); })())) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 226, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 229, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_d810d3e4e3f5c74c66cca30b4c013c9a8750aa112e3e38c4f50045c50d0e2772->leave($__internal_d810d3e4e3f5c74c66cca30b4c013c9a8750aa112e3e38c4f50045c50d0e2772_prof);

        
        $__internal_fed156bafbc1b6a86209f8b2fdbe85b657d5cd4a6dc8befe101983d70febf1b3->leave($__internal_fed156bafbc1b6a86209f8b2fdbe85b657d5cd4a6dc8befe101983d70febf1b3_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_dc5ef4bf08888d32dde4e3b95f59a88ef4c4948a9e00e8c87d7d08ad03d75c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5ef4bf08888d32dde4e3b95f59a88ef4c4948a9e00e8c87d7d08ad03d75c22->enter($__internal_dc5ef4bf08888d32dde4e3b95f59a88ef4c4948a9e00e8c87d7d08ad03d75c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_7607401aee719c8ab1c90857a46f348a3d481fa8eb54c2c2ba565455b196abeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7607401aee719c8ab1c90857a46f348a3d481fa8eb54c2c2ba565455b196abeb->enter($__internal_7607401aee719c8ab1c90857a46f348a3d481fa8eb54c2c2ba565455b196abeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_7607401aee719c8ab1c90857a46f348a3d481fa8eb54c2c2ba565455b196abeb->leave($__internal_7607401aee719c8ab1c90857a46f348a3d481fa8eb54c2c2ba565455b196abeb_prof);

        
        $__internal_dc5ef4bf08888d32dde4e3b95f59a88ef4c4948a9e00e8c87d7d08ad03d75c22->leave($__internal_dc5ef4bf08888d32dde4e3b95f59a88ef4c4948a9e00e8c87d7d08ad03d75c22_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_a2bd561bb509e438f78bd625919c9304ae3d3998c694a9246aefb30d92379323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2bd561bb509e438f78bd625919c9304ae3d3998c694a9246aefb30d92379323->enter($__internal_a2bd561bb509e438f78bd625919c9304ae3d3998c694a9246aefb30d92379323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_aa86201e2f1906b3747794720dad622f679de115ec93667f14770c46be3dbf77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa86201e2f1906b3747794720dad622f679de115ec93667f14770c46be3dbf77->enter($__internal_aa86201e2f1906b3747794720dad622f679de115ec93667f14770c46be3dbf77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_aa86201e2f1906b3747794720dad622f679de115ec93667f14770c46be3dbf77->leave($__internal_aa86201e2f1906b3747794720dad622f679de115ec93667f14770c46be3dbf77_prof);

        
        $__internal_a2bd561bb509e438f78bd625919c9304ae3d3998c694a9246aefb30d92379323->leave($__internal_a2bd561bb509e438f78bd625919c9304ae3d3998c694a9246aefb30d92379323_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_80850ff5c304cfc0c01c727446df25fbb391c0c9f5fe0c3e793e2c0e75182ff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80850ff5c304cfc0c01c727446df25fbb391c0c9f5fe0c3e793e2c0e75182ff0->enter($__internal_80850ff5c304cfc0c01c727446df25fbb391c0c9f5fe0c3e793e2c0e75182ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_f27b683c19eeda7a58485775dd1e3810ba0dc091b28f5b7cb50917acd40fa968 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f27b683c19eeda7a58485775dd1e3810ba0dc091b28f5b7cb50917acd40fa968->enter($__internal_f27b683c19eeda7a58485775dd1e3810ba0dc091b28f5b7cb50917acd40fa968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 242, $this->getSourceContext()); })())) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 243, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 245, $this->getSourceContext()); })())) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 246, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 249, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 249, $this->getSourceContext()); })())))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 251, $this->getSourceContext()); })()))) {
            // line 252
            if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 252, $this->getSourceContext()); })()))) {
                // line 253
                $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 253, $this->getSourceContext()); })()), array("%name%" =>                 // line 254
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 254, $this->getSourceContext()); })()), "%id%" =>                 // line 255
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 255, $this->getSourceContext()); })())));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 258, $this->getSourceContext()); })()));
            }
        }
        // line 261
        echo "    <label";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 261, $this->getSourceContext()); })()));
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
        echo ">
        ";
        // line 262
        echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 262, $this->getSourceContext()); })());
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 263, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 263, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 263, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 263, $this->getSourceContext()); })())))), "html", null, true);
        echo "
    </label>";
        
        $__internal_f27b683c19eeda7a58485775dd1e3810ba0dc091b28f5b7cb50917acd40fa968->leave($__internal_f27b683c19eeda7a58485775dd1e3810ba0dc091b28f5b7cb50917acd40fa968_prof);

        
        $__internal_80850ff5c304cfc0c01c727446df25fbb391c0c9f5fe0c3e793e2c0e75182ff0->leave($__internal_80850ff5c304cfc0c01c727446df25fbb391c0c9f5fe0c3e793e2c0e75182ff0_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_127f052bb002b3046f059cd5a1e430954fe607dc1af415cd5507046e006b70bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_127f052bb002b3046f059cd5a1e430954fe607dc1af415cd5507046e006b70bc->enter($__internal_127f052bb002b3046f059cd5a1e430954fe607dc1af415cd5507046e006b70bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_c740877a5d2ba1ad6acf449655e67a79aa75d1e15df8be0f369813fa8ae86906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c740877a5d2ba1ad6acf449655e67a79aa75d1e15df8be0f369813fa8ae86906->enter($__internal_c740877a5d2ba1ad6acf449655e67a79aa75d1e15df8be0f369813fa8ae86906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 271, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 271, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 271, $this->getSourceContext()); })()))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 272, $this->getSourceContext()); })()), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 273, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 274, $this->getSourceContext()); })()), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_c740877a5d2ba1ad6acf449655e67a79aa75d1e15df8be0f369813fa8ae86906->leave($__internal_c740877a5d2ba1ad6acf449655e67a79aa75d1e15df8be0f369813fa8ae86906_prof);

        
        $__internal_127f052bb002b3046f059cd5a1e430954fe607dc1af415cd5507046e006b70bc->leave($__internal_127f052bb002b3046f059cd5a1e430954fe607dc1af415cd5507046e006b70bc_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_38e4a8b9502423d0ea97c7f79deb91840efd9a692282d87104593cbfad360286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e4a8b9502423d0ea97c7f79deb91840efd9a692282d87104593cbfad360286->enter($__internal_38e4a8b9502423d0ea97c7f79deb91840efd9a692282d87104593cbfad360286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_c94121f4fe23e35ee9ff4d819d7fc6e9d2dd7bef043f84531d8cd57eb6e32be2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c94121f4fe23e35ee9ff4d819d7fc6e9d2dd7bef043f84531d8cd57eb6e32be2->enter($__internal_c94121f4fe23e35ee9ff4d819d7fc6e9d2dd7bef043f84531d8cd57eb6e32be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c94121f4fe23e35ee9ff4d819d7fc6e9d2dd7bef043f84531d8cd57eb6e32be2->leave($__internal_c94121f4fe23e35ee9ff4d819d7fc6e9d2dd7bef043f84531d8cd57eb6e32be2_prof);

        
        $__internal_38e4a8b9502423d0ea97c7f79deb91840efd9a692282d87104593cbfad360286->leave($__internal_38e4a8b9502423d0ea97c7f79deb91840efd9a692282d87104593cbfad360286_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_76259500a642074db4f956d5c066cb0d80e3fca7ad0787e46e1aa13bea8c8dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76259500a642074db4f956d5c066cb0d80e3fca7ad0787e46e1aa13bea8c8dc3->enter($__internal_76259500a642074db4f956d5c066cb0d80e3fca7ad0787e46e1aa13bea8c8dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_90ec1454322656fa0eabaed07b066948a5ca96afd01444b50fcba5ae200cdf47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90ec1454322656fa0eabaed07b066948a5ca96afd01444b50fcba5ae200cdf47->enter($__internal_90ec1454322656fa0eabaed07b066948a5ca96afd01444b50fcba5ae200cdf47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_90ec1454322656fa0eabaed07b066948a5ca96afd01444b50fcba5ae200cdf47->leave($__internal_90ec1454322656fa0eabaed07b066948a5ca96afd01444b50fcba5ae200cdf47_prof);

        
        $__internal_76259500a642074db4f956d5c066cb0d80e3fca7ad0787e46e1aa13bea8c8dc3->leave($__internal_76259500a642074db4f956d5c066cb0d80e3fca7ad0787e46e1aa13bea8c8dc3_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_cd5e363be545b687db44a4a1562417f2ce05e44a4b942ba904f1e22b02fa8103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd5e363be545b687db44a4a1562417f2ce05e44a4b942ba904f1e22b02fa8103->enter($__internal_cd5e363be545b687db44a4a1562417f2ce05e44a4b942ba904f1e22b02fa8103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_755e1bded7257b0551286a42d112328f6a0bfdf74a34c0b94a90292b0eeaf1ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_755e1bded7257b0551286a42d112328f6a0bfdf74a34c0b94a90292b0eeaf1ff->enter($__internal_755e1bded7257b0551286a42d112328f6a0bfdf74a34c0b94a90292b0eeaf1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_755e1bded7257b0551286a42d112328f6a0bfdf74a34c0b94a90292b0eeaf1ff->leave($__internal_755e1bded7257b0551286a42d112328f6a0bfdf74a34c0b94a90292b0eeaf1ff_prof);

        
        $__internal_cd5e363be545b687db44a4a1562417f2ce05e44a4b942ba904f1e22b02fa8103->leave($__internal_cd5e363be545b687db44a4a1562417f2ce05e44a4b942ba904f1e22b02fa8103_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_6379ca8156ffd52e61490590f135fe231657094529848db08b77d5ce7a6feace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6379ca8156ffd52e61490590f135fe231657094529848db08b77d5ce7a6feace->enter($__internal_6379ca8156ffd52e61490590f135fe231657094529848db08b77d5ce7a6feace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_31e40459b9a8388e2a5b40fb09addff49f24e8f6bb4512250104bb22ce188aee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31e40459b9a8388e2a5b40fb09addff49f24e8f6bb4512250104bb22ce188aee->enter($__internal_31e40459b9a8388e2a5b40fb09addff49f24e8f6bb4512250104bb22ce188aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_31e40459b9a8388e2a5b40fb09addff49f24e8f6bb4512250104bb22ce188aee->leave($__internal_31e40459b9a8388e2a5b40fb09addff49f24e8f6bb4512250104bb22ce188aee_prof);

        
        $__internal_6379ca8156ffd52e61490590f135fe231657094529848db08b77d5ce7a6feace->leave($__internal_6379ca8156ffd52e61490590f135fe231657094529848db08b77d5ce7a6feace_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_cf2eb56fe0af976a14679bc6c9260eff87b3540c6e098f826dd00cf7261389c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf2eb56fe0af976a14679bc6c9260eff87b3540c6e098f826dd00cf7261389c6->enter($__internal_cf2eb56fe0af976a14679bc6c9260eff87b3540c6e098f826dd00cf7261389c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_4aa4ebc66fd19cfa69c39af57dc3a72a7fe5d3ea872d77c986a66ea644cb698a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aa4ebc66fd19cfa69c39af57dc3a72a7fe5d3ea872d77c986a66ea644cb698a->enter($__internal_4aa4ebc66fd19cfa69c39af57dc3a72a7fe5d3ea872d77c986a66ea644cb698a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 301, $this->getSourceContext()); })())) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 302, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 303, $this->getSourceContext()); })()), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_4aa4ebc66fd19cfa69c39af57dc3a72a7fe5d3ea872d77c986a66ea644cb698a->leave($__internal_4aa4ebc66fd19cfa69c39af57dc3a72a7fe5d3ea872d77c986a66ea644cb698a_prof);

        
        $__internal_cf2eb56fe0af976a14679bc6c9260eff87b3540c6e098f826dd00cf7261389c6->leave($__internal_cf2eb56fe0af976a14679bc6c9260eff87b3540c6e098f826dd00cf7261389c6_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_6f3fa8f45e77f31eb118b7107cbe2d3f66581a3ae71406f1615381bf749f63df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3fa8f45e77f31eb118b7107cbe2d3f66581a3ae71406f1615381bf749f63df->enter($__internal_6f3fa8f45e77f31eb118b7107cbe2d3f66581a3ae71406f1615381bf749f63df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_ef5bdb57da0e41c47ec2136cdb3cad2c3477f8639c719c0d27f821d30a983c0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef5bdb57da0e41c47ec2136cdb3cad2c3477f8639c719c0d27f821d30a983c0c->enter($__internal_ef5bdb57da0e41c47ec2136cdb3cad2c3477f8639c719c0d27f821d30a983c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 310, $this->getSourceContext()); })())) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 311, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 312, $this->getSourceContext()); })()), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_ef5bdb57da0e41c47ec2136cdb3cad2c3477f8639c719c0d27f821d30a983c0c->leave($__internal_ef5bdb57da0e41c47ec2136cdb3cad2c3477f8639c719c0d27f821d30a983c0c_prof);

        
        $__internal_6f3fa8f45e77f31eb118b7107cbe2d3f66581a3ae71406f1615381bf749f63df->leave($__internal_6f3fa8f45e77f31eb118b7107cbe2d3f66581a3ae71406f1615381bf749f63df_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_ef928ed76f7e5320737dd21deac7f4aa3997d62c74cf8dc9cf5555d08ebb38f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef928ed76f7e5320737dd21deac7f4aa3997d62c74cf8dc9cf5555d08ebb38f9->enter($__internal_ef928ed76f7e5320737dd21deac7f4aa3997d62c74cf8dc9cf5555d08ebb38f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_5612cf09174234901915596dd373d72ed9bb6839f9d7f135aa5b3d51e6ad77f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5612cf09174234901915596dd373d72ed9bb6839f9d7f135aa5b3d51e6ad77f4->enter($__internal_5612cf09174234901915596dd373d72ed9bb6839f9d7f135aa5b3d51e6ad77f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 320, $this->getSourceContext()); })())) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 321, $this->getSourceContext()); })()))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 322, $this->getSourceContext()); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    echo ", ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 326, $this->getSourceContext()); })()))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_5612cf09174234901915596dd373d72ed9bb6839f9d7f135aa5b3d51e6ad77f4->leave($__internal_5612cf09174234901915596dd373d72ed9bb6839f9d7f135aa5b3d51e6ad77f4_prof);

        
        $__internal_ef928ed76f7e5320737dd21deac7f4aa3997d62c74cf8dc9cf5555d08ebb38f9->leave($__internal_ef928ed76f7e5320737dd21deac7f4aa3997d62c74cf8dc9cf5555d08ebb38f9_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock button_widget %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock choice_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {% endif %}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form is not rootform %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form is not rootform %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "C:\\Pedidos\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\foundation_5_layout.html.twig");
    }
}
