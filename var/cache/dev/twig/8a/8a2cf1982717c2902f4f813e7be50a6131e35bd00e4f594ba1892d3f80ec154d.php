<?php

/* @EasyAdmin/form/bootstrap_3_layout.html.twig */
class __TwigTemplate_8a9bec6570811cf8855adfab23a97cc5fdd0921bfbad5cea12045ac46b7e3256 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "@EasyAdmin/form/bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_widget' => array($this, 'block_form_widget'),
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
                'collection_row' => array($this, 'block_collection_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'empty_collection' => array($this, 'block_empty_collection'),
                'vich_file_row' => array($this, 'block_vich_file_row'),
                'vich_file_widget' => array($this, 'block_vich_file_widget'),
                'vich_image_row' => array($this, 'block_vich_image_row'),
                'vich_image_widget' => array($this, 'block_vich_image_widget'),
                'easyadmin_rest' => array($this, 'block_easyadmin_rest'),
                'item_actions' => array($this, 'block_item_actions'),
                'easyadmin_widget' => array($this, 'block_easyadmin_widget'),
                'easyadmin_widget_groups' => array($this, 'block_easyadmin_widget_groups'),
                'easyadmin_autocomplete_widget' => array($this, 'block_easyadmin_autocomplete_widget'),
                'easyadmin_autocomplete_inner_label' => array($this, 'block_easyadmin_autocomplete_inner_label'),
                'easyadmin_divider_row' => array($this, 'block_easyadmin_divider_row'),
                'easyadmin_section_row' => array($this, 'block_easyadmin_section_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52fb8d034090759c4deafb8215f43e70cd1c503df7fa4fbd3a2a45af45a58a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52fb8d034090759c4deafb8215f43e70cd1c503df7fa4fbd3a2a45af45a58a1e->enter($__internal_52fb8d034090759c4deafb8215f43e70cd1c503df7fa4fbd3a2a45af45a58a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_layout.html.twig"));

        $__internal_c7e511cf919ea191218d0be8c8e3fe0aec096af92d3069fc66681dbbf26eebcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7e511cf919ea191218d0be8c8e3fe0aec096af92d3069fc66681dbbf26eebcb->enter($__internal_c7e511cf919ea191218d0be8c8e3fe0aec096af92d3069fc66681dbbf26eebcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('form_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('button_widget', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('money_widget', $context, $blocks);
        // line 85
        echo "
";
        // line 86
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 106
        echo "
";
        // line 107
        $this->displayBlock('date_widget', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('time_widget', $context, $blocks);
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 190
        echo "
";
        // line 191
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 201
        echo "
";
        // line 202
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 212
        echo "
";
        // line 214
        echo "
";
        // line 215
        $this->displayBlock('form_label', $context, $blocks);
        // line 219
        echo "
";
        // line 220
        $this->displayBlock('choice_label', $context, $blocks);
        // line 225
        echo "
";
        // line 226
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 229
        echo "
";
        // line 230
        $this->displayBlock('radio_label', $context, $blocks);
        // line 233
        echo "
";
        // line 234
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 252
        echo "
";
        // line 254
        echo "
";
        // line 255
        $this->displayBlock('form_row', $context, $blocks);
        // line 277
        echo "
";
        // line 278
        $this->displayBlock('collection_row', $context, $blocks);
        // line 313
        echo "
";
        // line 314
        $this->displayBlock('button_row', $context, $blocks);
        // line 319
        echo "
";
        // line 320
        $this->displayBlock('choice_row', $context, $blocks);
        // line 324
        echo "
";
        // line 325
        $this->displayBlock('date_row', $context, $blocks);
        // line 329
        echo "
";
        // line 330
        $this->displayBlock('time_row', $context, $blocks);
        // line 334
        echo "
";
        // line 335
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 339
        echo "
";
        // line 340
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 346
        echo "
";
        // line 347
        $this->displayBlock('radio_row', $context, $blocks);
        // line 353
        echo "
";
        // line 355
        $this->displayBlock('form_errors', $context, $blocks);
        // line 373
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 386
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 391
        echo "
";
        // line 392
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 396
        echo "
";
        // line 397
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 418
        echo "
";
        // line 419
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 423
        echo "
";
        // line 424
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 446
        echo "
";
        // line 447
        $this->displayBlock('easyadmin_rest', $context, $blocks);
        // line 459
        echo "
";
        // line 460
        $this->displayBlock('item_actions', $context, $blocks);
        // line 487
        echo "
";
        // line 489
        $this->displayBlock('easyadmin_widget', $context, $blocks);
        // line 528
        echo "
";
        // line 529
        $this->displayBlock('easyadmin_widget_groups', $context, $blocks);
        // line 569
        echo "
";
        // line 571
        $this->displayBlock('easyadmin_autocomplete_widget', $context, $blocks);
        // line 581
        echo "
";
        // line 582
        $this->displayBlock('easyadmin_autocomplete_inner_label', $context, $blocks);
        // line 586
        echo "
";
        // line 588
        $this->displayBlock('easyadmin_divider_row', $context, $blocks);
        // line 593
        echo "
";
        // line 595
        $this->displayBlock('easyadmin_section_row', $context, $blocks);
        
        $__internal_52fb8d034090759c4deafb8215f43e70cd1c503df7fa4fbd3a2a45af45a58a1e->leave($__internal_52fb8d034090759c4deafb8215f43e70cd1c503df7fa4fbd3a2a45af45a58a1e_prof);

        
        $__internal_c7e511cf919ea191218d0be8c8e3fe0aec096af92d3069fc66681dbbf26eebcb->leave($__internal_c7e511cf919ea191218d0be8c8e3fe0aec096af92d3069fc66681dbbf26eebcb_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_202451ba4fc0d23550297012567e9719c0e1eb0c0787fbef227470d279fa3d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_202451ba4fc0d23550297012567e9719c0e1eb0c0787fbef227470d279fa3d65->enter($__internal_202451ba4fc0d23550297012567e9719c0e1eb0c0787fbef227470d279fa3d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_5c3a8b8e60253a7f92b3b7235e7f98d2eedfd3e7f776a5eb1510bc89856a0018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c3a8b8e60253a7f92b3b7235e7f98d2eedfd3e7f776a5eb1510bc89856a0018->enter($__internal_5c3a8b8e60253a7f92b3b7235e7f98d2eedfd3e7f776a5eb1510bc89856a0018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        if (("easyadmin" == twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 4, $this->getSourceContext()); })()),  -2)))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 5, $this->getSourceContext()); })()), array("class" => twig_join_filter(array(0 => (((((            // line 7
array_key_exists("_easyadmin_form_type", $context)) ? (_twig_default_filter((isset($context["_easyadmin_form_type"]) || array_key_exists("_easyadmin_form_type", $context) ? $context["_easyadmin_form_type"] : (function () { throw new Twig_Error_Runtime('Variable "_easyadmin_form_type" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "horizontal")) ? ("form-horizontal") : ("form-vertical")), 1 => ((twig_get_attribute($this->env, $this->getSourceContext(),             // line 8
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")), 2 => (twig_get_attribute($this->env, $this->getSourceContext(),             // line 9
(isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 9, $this->getSourceContext()); })()), "view", array()) . "-form")), " "), "data-view" => twig_get_attribute($this->env, $this->getSourceContext(),             // line 11
(isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 11, $this->getSourceContext()); })()), "view", array()), "data-entity" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 12
(isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 12, $this->getSourceContext()); })()), "entity", array()), "name", array()), "data-entity-id" => twig_get_attribute($this->env, $this->getSourceContext(),             // line 13
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 13, $this->getSourceContext()); })()), "entity", array()), "primary_key_field_name", array()))));
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "vars", array()), "errors", array())) > 0)) {
            // line 18
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), 'errors');
            echo "
    ";
        }
        // line 21
        $this->displayParentBlock("form_start", $context, $blocks);
        // line 23
        echo "<input type=\"hidden\" name=\"referer\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 23, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "html", null, true);
        echo "\"/>";
        
        $__internal_5c3a8b8e60253a7f92b3b7235e7f98d2eedfd3e7f776a5eb1510bc89856a0018->leave($__internal_5c3a8b8e60253a7f92b3b7235e7f98d2eedfd3e7f776a5eb1510bc89856a0018_prof);

        
        $__internal_202451ba4fc0d23550297012567e9719c0e1eb0c0787fbef227470d279fa3d65->leave($__internal_202451ba4fc0d23550297012567e9719c0e1eb0c0787fbef227470d279fa3d65_prof);

    }

    // line 28
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_8693918530a0140528aae98c0de55a3ef11eb4ec35533c834ca8e62c18439b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8693918530a0140528aae98c0de55a3ef11eb4ec35533c834ca8e62c18439b76->enter($__internal_8693918530a0140528aae98c0de55a3ef11eb4ec35533c834ca8e62c18439b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_3dc4912a2702f03e319bad598d3c7477768b83844a08e040efb878b66b6f8984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dc4912a2702f03e319bad598d3c7477768b83844a08e040efb878b66b6f8984->enter($__internal_3dc4912a2702f03e319bad598d3c7477768b83844a08e040efb878b66b6f8984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 29
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 31
        if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 32
            echo "        ";
            ob_start();
            // line 33
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 36, $this->getSourceContext()); })()), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 46
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 48
            echo (isset($context["remove_item_javascript"]) || array_key_exists("remove_item_javascript", $context) ? $context["remove_item_javascript"] : (function () { throw new Twig_Error_Runtime('Variable "remove_item_javascript" does not exist.', 48, $this->getSourceContext()); })());
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_3dc4912a2702f03e319bad598d3c7477768b83844a08e040efb878b66b6f8984->leave($__internal_3dc4912a2702f03e319bad598d3c7477768b83844a08e040efb878b66b6f8984_prof);

        
        $__internal_8693918530a0140528aae98c0de55a3ef11eb4ec35533c834ca8e62c18439b76->leave($__internal_8693918530a0140528aae98c0de55a3ef11eb4ec35533c834ca8e62c18439b76_prof);

    }

    // line 56
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_2149f781e8e7e851be6d0ee6bbcb21d26cf7f2b341b2f2920a021f67badd0d77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2149f781e8e7e851be6d0ee6bbcb21d26cf7f2b341b2f2920a021f67badd0d77->enter($__internal_2149f781e8e7e851be6d0ee6bbcb21d26cf7f2b341b2f2920a021f67badd0d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_282c92001efed326b8eaa81f9a48a9ce499beee33eec3ae715ae19db90631681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_282c92001efed326b8eaa81f9a48a9ce499beee33eec3ae715ae19db90631681->enter($__internal_282c92001efed326b8eaa81f9a48a9ce499beee33eec3ae715ae19db90631681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 57
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 57, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 58
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 58, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 60
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_282c92001efed326b8eaa81f9a48a9ce499beee33eec3ae715ae19db90631681->leave($__internal_282c92001efed326b8eaa81f9a48a9ce499beee33eec3ae715ae19db90631681_prof);

        
        $__internal_2149f781e8e7e851be6d0ee6bbcb21d26cf7f2b341b2f2920a021f67badd0d77->leave($__internal_2149f781e8e7e851be6d0ee6bbcb21d26cf7f2b341b2f2920a021f67badd0d77_prof);

    }

    // line 63
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_dbe9addd69e2276dd380901179a741af3a6ebbe04ae9c21f3337aaf1362f117d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbe9addd69e2276dd380901179a741af3a6ebbe04ae9c21f3337aaf1362f117d->enter($__internal_dbe9addd69e2276dd380901179a741af3a6ebbe04ae9c21f3337aaf1362f117d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_eb27e1b8a00d7a849c94808f9950a6715e54895f2904910c9d4b4bb111005ae7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb27e1b8a00d7a849c94808f9950a6715e54895f2904910c9d4b4bb111005ae7->enter($__internal_eb27e1b8a00d7a849c94808f9950a6715e54895f2904910c9d4b4bb111005ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 64
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 64, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 65
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_eb27e1b8a00d7a849c94808f9950a6715e54895f2904910c9d4b4bb111005ae7->leave($__internal_eb27e1b8a00d7a849c94808f9950a6715e54895f2904910c9d4b4bb111005ae7_prof);

        
        $__internal_dbe9addd69e2276dd380901179a741af3a6ebbe04ae9c21f3337aaf1362f117d->leave($__internal_dbe9addd69e2276dd380901179a741af3a6ebbe04ae9c21f3337aaf1362f117d_prof);

    }

    // line 68
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_3100f23e98c9f59f01cb449fe913e4305e04f279895e9e6d7db40d07312d8543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3100f23e98c9f59f01cb449fe913e4305e04f279895e9e6d7db40d07312d8543->enter($__internal_3100f23e98c9f59f01cb449fe913e4305e04f279895e9e6d7db40d07312d8543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_d0c85222c2722abed844b86552917a6e93b04462de6d661c1ccf65dd1bbe9781 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0c85222c2722abed844b86552917a6e93b04462de6d661c1ccf65dd1bbe9781->enter($__internal_d0c85222c2722abed844b86552917a6e93b04462de6d661c1ccf65dd1bbe9781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 69
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 69, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 70
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_d0c85222c2722abed844b86552917a6e93b04462de6d661c1ccf65dd1bbe9781->leave($__internal_d0c85222c2722abed844b86552917a6e93b04462de6d661c1ccf65dd1bbe9781_prof);

        
        $__internal_3100f23e98c9f59f01cb449fe913e4305e04f279895e9e6d7db40d07312d8543->leave($__internal_3100f23e98c9f59f01cb449fe913e4305e04f279895e9e6d7db40d07312d8543_prof);

    }

    // line 73
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_9bbdec5446d52d9179dd811a653725bb53272b8b96531981e1c297a18fa63ff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bbdec5446d52d9179dd811a653725bb53272b8b96531981e1c297a18fa63ff0->enter($__internal_9bbdec5446d52d9179dd811a653725bb53272b8b96531981e1c297a18fa63ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_b8e240366eebd380a04eae9592c3d65311931777b4c43ae78641901b01443bdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8e240366eebd380a04eae9592c3d65311931777b4c43ae78641901b01443bdd->enter($__internal_b8e240366eebd380a04eae9592c3d65311931777b4c43ae78641901b01443bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 74
        echo "<div class=\"input-group\">
        ";
        // line 75
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 75, $this->getSourceContext()); })()), 0, 2));
        // line 76
        echo "        ";
        if ( !(isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new Twig_Error_Runtime('Variable "prepend" does not exist.', 76, $this->getSourceContext()); })())) {
            // line 77
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 77, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 79
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 80
        if ((isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new Twig_Error_Runtime('Variable "prepend" does not exist.', 80, $this->getSourceContext()); })())) {
            // line 81
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 81, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 83
        echo "    </div>";
        
        $__internal_b8e240366eebd380a04eae9592c3d65311931777b4c43ae78641901b01443bdd->leave($__internal_b8e240366eebd380a04eae9592c3d65311931777b4c43ae78641901b01443bdd_prof);

        
        $__internal_9bbdec5446d52d9179dd811a653725bb53272b8b96531981e1c297a18fa63ff0->leave($__internal_9bbdec5446d52d9179dd811a653725bb53272b8b96531981e1c297a18fa63ff0_prof);

    }

    // line 86
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_3b6e53ee3477a3572ad3322b4d0f81cbf91ba41a141b9373e3363f0ef04a1e74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6e53ee3477a3572ad3322b4d0f81cbf91ba41a141b9373e3363f0ef04a1e74->enter($__internal_3b6e53ee3477a3572ad3322b4d0f81cbf91ba41a141b9373e3363f0ef04a1e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_22e08ea3e050efda3dbc5d6f0a7e2c3856522d994f52cdda5addc1ad02555d31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22e08ea3e050efda3dbc5d6f0a7e2c3856522d994f52cdda5addc1ad02555d31->enter($__internal_22e08ea3e050efda3dbc5d6f0a7e2c3856522d994f52cdda5addc1ad02555d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 87
        echo "<div class=\"input-group\">";
        // line 88
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 89
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_22e08ea3e050efda3dbc5d6f0a7e2c3856522d994f52cdda5addc1ad02555d31->leave($__internal_22e08ea3e050efda3dbc5d6f0a7e2c3856522d994f52cdda5addc1ad02555d31_prof);

        
        $__internal_3b6e53ee3477a3572ad3322b4d0f81cbf91ba41a141b9373e3363f0ef04a1e74->leave($__internal_3b6e53ee3477a3572ad3322b4d0f81cbf91ba41a141b9373e3363f0ef04a1e74_prof);

    }

    // line 93
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_45d1b9ebfc78d56e7277a2183cad7e0820123c990fbe37b900f46b16cb2b20fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d1b9ebfc78d56e7277a2183cad7e0820123c990fbe37b900f46b16cb2b20fa->enter($__internal_45d1b9ebfc78d56e7277a2183cad7e0820123c990fbe37b900f46b16cb2b20fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_90affafb4e66555098b7c196bc03103c466d81d9ffd02c26279fa2bf56255bf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90affafb4e66555098b7c196bc03103c466d81d9ffd02c26279fa2bf56255bf0->enter($__internal_90affafb4e66555098b7c196bc03103c466d81d9ffd02c26279fa2bf56255bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 94
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 94, $this->getSourceContext()); })()) == "single_text")) {
            // line 95
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 97
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 97, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 98
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 99
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 99, $this->getSourceContext()); })()), "date", array()), 'errors');
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 100, $this->getSourceContext()); })()), "time", array()), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), "date", array()), 'widget', array("datetime" => true));
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->getSourceContext()); })()), "time", array()), 'widget', array("datetime" => true));
            // line 103
            echo "</div>";
        }
        
        $__internal_90affafb4e66555098b7c196bc03103c466d81d9ffd02c26279fa2bf56255bf0->leave($__internal_90affafb4e66555098b7c196bc03103c466d81d9ffd02c26279fa2bf56255bf0_prof);

        
        $__internal_45d1b9ebfc78d56e7277a2183cad7e0820123c990fbe37b900f46b16cb2b20fa->leave($__internal_45d1b9ebfc78d56e7277a2183cad7e0820123c990fbe37b900f46b16cb2b20fa_prof);

    }

    // line 107
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_7e67837746586003b1f132080afdc74453d87180bd46f0e088189df394748ea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e67837746586003b1f132080afdc74453d87180bd46f0e088189df394748ea3->enter($__internal_7e67837746586003b1f132080afdc74453d87180bd46f0e088189df394748ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_d53d12d0aa0c5c2a4d653a9fe007aa6954ef1366b943c32ac3fd5f4af4bcd3cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d53d12d0aa0c5c2a4d653a9fe007aa6954ef1366b943c32ac3fd5f4af4bcd3cf->enter($__internal_d53d12d0aa0c5c2a4d653a9fe007aa6954ef1366b943c32ac3fd5f4af4bcd3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 108
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 108, $this->getSourceContext()); })()) == "single_text")) {
            // line 109
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 111
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 111, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 112
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 112, $this->getSourceContext()); })()))) {
                // line 113
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 115
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 115, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 116
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->getSourceContext()); })()), "year", array()), 'widget'), "{{ month }}" =>             // line 117
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 117, $this->getSourceContext()); })()), "month", array()), 'widget'), "{{ day }}" =>             // line 118
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 118, $this->getSourceContext()); })()), "day", array()), 'widget')));
            // line 120
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 120, $this->getSourceContext()); })()))) {
                // line 121
                echo "</div>";
            }
        }
        
        $__internal_d53d12d0aa0c5c2a4d653a9fe007aa6954ef1366b943c32ac3fd5f4af4bcd3cf->leave($__internal_d53d12d0aa0c5c2a4d653a9fe007aa6954ef1366b943c32ac3fd5f4af4bcd3cf_prof);

        
        $__internal_7e67837746586003b1f132080afdc74453d87180bd46f0e088189df394748ea3->leave($__internal_7e67837746586003b1f132080afdc74453d87180bd46f0e088189df394748ea3_prof);

    }

    // line 126
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_01b9b916189e353cd170397b1f9bdac8984760699ef5becb8216d151d69e8e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01b9b916189e353cd170397b1f9bdac8984760699ef5becb8216d151d69e8e15->enter($__internal_01b9b916189e353cd170397b1f9bdac8984760699ef5becb8216d151d69e8e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_c3df255190b215eeea7967f1d30b45dbca09c46d5bd06b598cba430ff12a5729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3df255190b215eeea7967f1d30b45dbca09c46d5bd06b598cba430ff12a5729->enter($__internal_c3df255190b215eeea7967f1d30b45dbca09c46d5bd06b598cba430ff12a5729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 127
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 127, $this->getSourceContext()); })()) == "single_text")) {
            // line 128
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 130
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 130, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 131
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 131, $this->getSourceContext()); })())))) {
                // line 132
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 134
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), "minute", array()), 'widget');
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 134, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), "second", array()), 'widget');
            }
            // line 135
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 135, $this->getSourceContext()); })())))) {
                // line 136
                echo "</div>";
            }
        }
        
        $__internal_c3df255190b215eeea7967f1d30b45dbca09c46d5bd06b598cba430ff12a5729->leave($__internal_c3df255190b215eeea7967f1d30b45dbca09c46d5bd06b598cba430ff12a5729_prof);

        
        $__internal_01b9b916189e353cd170397b1f9bdac8984760699ef5becb8216d151d69e8e15->leave($__internal_01b9b916189e353cd170397b1f9bdac8984760699ef5becb8216d151d69e8e15_prof);

    }

    // line 141
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_f9b201abe79207a20b4e858825bac6f691b8bdbcf6f088d63e76540f3d45fc60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b201abe79207a20b4e858825bac6f691b8bdbcf6f088d63e76540f3d45fc60->enter($__internal_f9b201abe79207a20b4e858825bac6f691b8bdbcf6f088d63e76540f3d45fc60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_8d6143686510fafad1ae7863669fe1bb46798db37d70a8673488dddadad99c38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d6143686510fafad1ae7863669fe1bb46798db37d70a8673488dddadad99c38->enter($__internal_8d6143686510fafad1ae7863669fe1bb46798db37d70a8673488dddadad99c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 142
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 142, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 143
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        // line 144
        if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 145
            echo "        ";
            ob_start();
            // line 146
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 149
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 149, $this->getSourceContext()); })()), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 159
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 161
            echo (isset($context["remove_item_javascript"]) || array_key_exists("remove_item_javascript", $context) ? $context["remove_item_javascript"] : (function () { throw new Twig_Error_Runtime('Variable "remove_item_javascript" does not exist.', 161, $this->getSourceContext()); })());
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 163
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_8d6143686510fafad1ae7863669fe1bb46798db37d70a8673488dddadad99c38->leave($__internal_8d6143686510fafad1ae7863669fe1bb46798db37d70a8673488dddadad99c38_prof);

        
        $__internal_f9b201abe79207a20b4e858825bac6f691b8bdbcf6f088d63e76540f3d45fc60->leave($__internal_f9b201abe79207a20b4e858825bac6f691b8bdbcf6f088d63e76540f3d45fc60_prof);

    }

    // line 169
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_6897b3f1acb13b290f275d406fb6397aa4a4ebd810992213ce6350a75e9faec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6897b3f1acb13b290f275d406fb6397aa4a4ebd810992213ce6350a75e9faec8->enter($__internal_6897b3f1acb13b290f275d406fb6397aa4a4ebd810992213ce6350a75e9faec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_ac78d7b2f7fcef72889a69f6f103cc2b5c4e13aff15a97e7479963b9966bcafa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac78d7b2f7fcef72889a69f6f103cc2b5c4e13aff15a97e7479963b9966bcafa->enter($__internal_ac78d7b2f7fcef72889a69f6f103cc2b5c4e13aff15a97e7479963b9966bcafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 170
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 171
            echo "<div class=\"control-group\">";
            // line 172
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 172, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 173
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 174
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 175
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 175, $this->getSourceContext()); })())));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 178
            echo "</div>";
        } else {
            // line 180
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 181
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 181, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 182
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 183
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 184
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 184, $this->getSourceContext()); })())));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "</div>";
        }
        
        $__internal_ac78d7b2f7fcef72889a69f6f103cc2b5c4e13aff15a97e7479963b9966bcafa->leave($__internal_ac78d7b2f7fcef72889a69f6f103cc2b5c4e13aff15a97e7479963b9966bcafa_prof);

        
        $__internal_6897b3f1acb13b290f275d406fb6397aa4a4ebd810992213ce6350a75e9faec8->leave($__internal_6897b3f1acb13b290f275d406fb6397aa4a4ebd810992213ce6350a75e9faec8_prof);

    }

    // line 191
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_bf67e6d0bfac0a95fb19d1a85c4fef8ac13bd6ff6fbf93af87a5c07e099744b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf67e6d0bfac0a95fb19d1a85c4fef8ac13bd6ff6fbf93af87a5c07e099744b4->enter($__internal_bf67e6d0bfac0a95fb19d1a85c4fef8ac13bd6ff6fbf93af87a5c07e099744b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_ed69da443a280cf2b05124305e9aa4b2a88a6ef0c2ad4c66a70d71dfc68f804c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed69da443a280cf2b05124305e9aa4b2a88a6ef0c2ad4c66a70d71dfc68f804c->enter($__internal_ed69da443a280cf2b05124305e9aa4b2a88a6ef0c2ad4c66a70d71dfc68f804c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 192
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 192, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 193
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 193, $this->getSourceContext()); })()))) {
            // line 194
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 194, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 196
            echo "<div class=\"checkbox\">";
            // line 197
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 197, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 198
            echo "</div>";
        }
        
        $__internal_ed69da443a280cf2b05124305e9aa4b2a88a6ef0c2ad4c66a70d71dfc68f804c->leave($__internal_ed69da443a280cf2b05124305e9aa4b2a88a6ef0c2ad4c66a70d71dfc68f804c_prof);

        
        $__internal_bf67e6d0bfac0a95fb19d1a85c4fef8ac13bd6ff6fbf93af87a5c07e099744b4->leave($__internal_bf67e6d0bfac0a95fb19d1a85c4fef8ac13bd6ff6fbf93af87a5c07e099744b4_prof);

    }

    // line 202
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_a0f0f0bba757dd074b499c10d5ff6eca99f9e249702bbd9eee731247c2aba5cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f0f0bba757dd074b499c10d5ff6eca99f9e249702bbd9eee731247c2aba5cc->enter($__internal_a0f0f0bba757dd074b499c10d5ff6eca99f9e249702bbd9eee731247c2aba5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_323d0f77b5c747f6c017c0057376eaa933ed2adc8a3ad2827d72dcc1a971a351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_323d0f77b5c747f6c017c0057376eaa933ed2adc8a3ad2827d72dcc1a971a351->enter($__internal_323d0f77b5c747f6c017c0057376eaa933ed2adc8a3ad2827d72dcc1a971a351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 203
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 203, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 204
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 204, $this->getSourceContext()); })()))) {
            // line 205
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 205, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 207
            echo "<div class=\"radio\">";
            // line 208
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 208, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 209
            echo "</div>";
        }
        
        $__internal_323d0f77b5c747f6c017c0057376eaa933ed2adc8a3ad2827d72dcc1a971a351->leave($__internal_323d0f77b5c747f6c017c0057376eaa933ed2adc8a3ad2827d72dcc1a971a351_prof);

        
        $__internal_a0f0f0bba757dd074b499c10d5ff6eca99f9e249702bbd9eee731247c2aba5cc->leave($__internal_a0f0f0bba757dd074b499c10d5ff6eca99f9e249702bbd9eee731247c2aba5cc_prof);

    }

    // line 215
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_9c978ef7808b290dccef3394b9c1d39d4842a95cb5d0ab0fe3cab12de64078c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c978ef7808b290dccef3394b9c1d39d4842a95cb5d0ab0fe3cab12de64078c6->enter($__internal_9c978ef7808b290dccef3394b9c1d39d4842a95cb5d0ab0fe3cab12de64078c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_dc8c63e7c72967de89c14def99a861168c0a16a883b0fb15ffde0ac91c679071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc8c63e7c72967de89c14def99a861168c0a16a883b0fb15ffde0ac91c679071->enter($__internal_dc8c63e7c72967de89c14def99a861168c0a16a883b0fb15ffde0ac91c679071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 216
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 216, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 217
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_dc8c63e7c72967de89c14def99a861168c0a16a883b0fb15ffde0ac91c679071->leave($__internal_dc8c63e7c72967de89c14def99a861168c0a16a883b0fb15ffde0ac91c679071_prof);

        
        $__internal_9c978ef7808b290dccef3394b9c1d39d4842a95cb5d0ab0fe3cab12de64078c6->leave($__internal_9c978ef7808b290dccef3394b9c1d39d4842a95cb5d0ab0fe3cab12de64078c6_prof);

    }

    // line 220
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_8144783c14748af5743d7e74e7d019030c5c37aa7bceddb4afbbc229f30c59ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8144783c14748af5743d7e74e7d019030c5c37aa7bceddb4afbbc229f30c59ed->enter($__internal_8144783c14748af5743d7e74e7d019030c5c37aa7bceddb4afbbc229f30c59ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_c80a5c1b826d907adba5d453e819eefea43c1fb970507b7fe612eef15d2cfcc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c80a5c1b826d907adba5d453e819eefea43c1fb970507b7fe612eef15d2cfcc6->enter($__internal_c80a5c1b826d907adba5d453e819eefea43c1fb970507b7fe612eef15d2cfcc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 222
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 222, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 223
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_c80a5c1b826d907adba5d453e819eefea43c1fb970507b7fe612eef15d2cfcc6->leave($__internal_c80a5c1b826d907adba5d453e819eefea43c1fb970507b7fe612eef15d2cfcc6_prof);

        
        $__internal_8144783c14748af5743d7e74e7d019030c5c37aa7bceddb4afbbc229f30c59ed->leave($__internal_8144783c14748af5743d7e74e7d019030c5c37aa7bceddb4afbbc229f30c59ed_prof);

    }

    // line 226
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_303d0cc227ecc32c28ec39df2e35926c7efb57994afc96d557aaee66a4e7c8f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_303d0cc227ecc32c28ec39df2e35926c7efb57994afc96d557aaee66a4e7c8f0->enter($__internal_303d0cc227ecc32c28ec39df2e35926c7efb57994afc96d557aaee66a4e7c8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_869fe0337e1e77629bee8721cf51cfcd5dbe90a0bbe683690859c9dbc0494784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_869fe0337e1e77629bee8721cf51cfcd5dbe90a0bbe683690859c9dbc0494784->enter($__internal_869fe0337e1e77629bee8721cf51cfcd5dbe90a0bbe683690859c9dbc0494784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 227
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_869fe0337e1e77629bee8721cf51cfcd5dbe90a0bbe683690859c9dbc0494784->leave($__internal_869fe0337e1e77629bee8721cf51cfcd5dbe90a0bbe683690859c9dbc0494784_prof);

        
        $__internal_303d0cc227ecc32c28ec39df2e35926c7efb57994afc96d557aaee66a4e7c8f0->leave($__internal_303d0cc227ecc32c28ec39df2e35926c7efb57994afc96d557aaee66a4e7c8f0_prof);

    }

    // line 230
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_d38a7d119c5a2202f29d5578774ce6654216df00a3da7c5eae363d0062ae30cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d38a7d119c5a2202f29d5578774ce6654216df00a3da7c5eae363d0062ae30cc->enter($__internal_d38a7d119c5a2202f29d5578774ce6654216df00a3da7c5eae363d0062ae30cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_19abcac6f7eaab6b36b6fee3609a716a0ea1af87ae4ca40031e133b6061a8d56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19abcac6f7eaab6b36b6fee3609a716a0ea1af87ae4ca40031e133b6061a8d56->enter($__internal_19abcac6f7eaab6b36b6fee3609a716a0ea1af87ae4ca40031e133b6061a8d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 231
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_19abcac6f7eaab6b36b6fee3609a716a0ea1af87ae4ca40031e133b6061a8d56->leave($__internal_19abcac6f7eaab6b36b6fee3609a716a0ea1af87ae4ca40031e133b6061a8d56_prof);

        
        $__internal_d38a7d119c5a2202f29d5578774ce6654216df00a3da7c5eae363d0062ae30cc->leave($__internal_d38a7d119c5a2202f29d5578774ce6654216df00a3da7c5eae363d0062ae30cc_prof);

    }

    // line 234
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_f7e6395143b9b6b3ce8181fbf8233020c0f7806a4b6930bb0f3d98656973b200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e6395143b9b6b3ce8181fbf8233020c0f7806a4b6930bb0f3d98656973b200->enter($__internal_f7e6395143b9b6b3ce8181fbf8233020c0f7806a4b6930bb0f3d98656973b200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_bf5e18e3c13e2d919f9cce724acea5f5705e441fb02db587c2219c8bc4965213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf5e18e3c13e2d919f9cce724acea5f5705e441fb02db587c2219c8bc4965213->enter($__internal_bf5e18e3c13e2d919f9cce724acea5f5705e441fb02db587c2219c8bc4965213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 235
        echo "    ";
        // line 236
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 237
            echo "        ";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 237, $this->getSourceContext()); })())) {
                // line 238
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 238, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 239
                echo "        ";
            }
            // line 240
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 241
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 241, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 241, $this->getSourceContext()); })())))));
                // line 242
                echo "        ";
            }
            // line 243
            echo "        ";
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 243, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 243, $this->getSourceContext()); })())))) {
                // line 244
                echo "            ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 244, $this->getSourceContext()); })()));
                // line 245
                echo "        ";
            }
            // line 246
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 246, $this->getSourceContext()); })()));
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
            // line 247
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 247, $this->getSourceContext()); })());
            // line 248
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 248, $this->getSourceContext()); })()) === false)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 248, $this->getSourceContext()); })()), array(), (((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 248, $this->getSourceContext()); })())) ? ((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 248, $this->getSourceContext()); })())) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 248, $this->getSourceContext()); })()), "entity", array()), "translation_domain", array()))))) : ("")), "html", null, true);
            // line 249
            echo "</label>
    ";
        }
        
        $__internal_bf5e18e3c13e2d919f9cce724acea5f5705e441fb02db587c2219c8bc4965213->leave($__internal_bf5e18e3c13e2d919f9cce724acea5f5705e441fb02db587c2219c8bc4965213_prof);

        
        $__internal_f7e6395143b9b6b3ce8181fbf8233020c0f7806a4b6930bb0f3d98656973b200->leave($__internal_f7e6395143b9b6b3ce8181fbf8233020c0f7806a4b6930bb0f3d98656973b200_prof);

    }

    // line 255
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_fe1430ed79348a361ddac630e6a1a70ef96054553cb9d1ddd9a8ce031f2b63f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe1430ed79348a361ddac630e6a1a70ef96054553cb9d1ddd9a8ce031f2b63f2->enter($__internal_fe1430ed79348a361ddac630e6a1a70ef96054553cb9d1ddd9a8ce031f2b63f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_cee631892196fd063e3368dac92d8fae16ec5e2aa7e5ee1328e5f24df4fb36c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cee631892196fd063e3368dac92d8fae16ec5e2aa7e5ee1328e5f24df4fb36c8->enter($__internal_cee631892196fd063e3368dac92d8fae16ec5e2aa7e5ee1328e5f24df4fb36c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 256
        $context["_field_type"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 257
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 257, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 257, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 257, $this->getSourceContext()); })()))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 257, $this->getSourceContext()); })()),  -2)), "html", null, true);
        echo "\">";
        // line 258
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 258, $this->getSourceContext()); })()), 'label');
        // line 259
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 259, $this->getSourceContext()); })()), 'widget');
        // line 261
        if ((twig_in_filter((isset($context["_field_type"]) || array_key_exists("_field_type", $context) ? $context["_field_type"] : (function () { throw new Twig_Error_Runtime('Variable "_field_type" does not exist.', 261, $this->getSourceContext()); })()), array(0 => "datetime", 1 => "datetime_immutable", 2 => "date", 3 => "date_immutable", 4 => "time", 5 => "time_immutable", 6 => "birthday")) && ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 262
            echo "            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" ";
            // line 264
            if ((null === (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 264, $this->getSourceContext()); })()))) {
                echo "checked=\"checked\"";
            }
            echo ">
                    ";
            // line 265
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                </label>
            </div>
        ";
        }
        // line 270
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 270, $this->getSourceContext()); })()), 'errors');
        // line 272
        if ((((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 273
            echo "            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 273, $this->getSourceContext()); })()), "field", array()), "help", array()), array(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 273, $this->getSourceContext()); })()), "entity", array()), "translation_domain", array()));
            echo "</span>
        ";
        }
        // line 275
        echo "    </div>";
        
        $__internal_cee631892196fd063e3368dac92d8fae16ec5e2aa7e5ee1328e5f24df4fb36c8->leave($__internal_cee631892196fd063e3368dac92d8fae16ec5e2aa7e5ee1328e5f24df4fb36c8_prof);

        
        $__internal_fe1430ed79348a361ddac630e6a1a70ef96054553cb9d1ddd9a8ce031f2b63f2->leave($__internal_fe1430ed79348a361ddac630e6a1a70ef96054553cb9d1ddd9a8ce031f2b63f2_prof);

    }

    // line 278
    public function block_collection_row($context, array $blocks = array())
    {
        $__internal_feb3a0350d1ce437187ff7baa67f2a9c6340778ec847ae80e229e35080b2bf9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb3a0350d1ce437187ff7baa67f2a9c6340778ec847ae80e229e35080b2bf9e->enter($__internal_feb3a0350d1ce437187ff7baa67f2a9c6340778ec847ae80e229e35080b2bf9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        $__internal_65d0ef76f05574dcb1fdc4acd2cdb865d0e1429a23ca5c4bdb0f15554acdd764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65d0ef76f05574dcb1fdc4acd2cdb865d0e1429a23ca5c4bdb0f15554acdd764->enter($__internal_65d0ef76f05574dcb1fdc4acd2cdb865d0e1429a23ca5c4bdb0f15554acdd764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        // line 279
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 281
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter((isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new Twig_Error_Runtime('Variable "allow_add" does not exist.', 281, $this->getSourceContext()); })()), false)) : (false))) {
            // line 282
            echo "        ";
            ob_start();
            // line 283
            echo "            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#";
            // line 286
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 286, $this->getSourceContext()); })()), "html", null, true);
            echo "');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 294
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 294, $this->getSourceContext()); })()), "html", null, true);
            echo "___name__/g, '_";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 294, $this->getSourceContext()); })()), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 295
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 295, $this->getSourceContext()); })()), "html", null, true);
            echo "\\]\\[__name__\\]/g, '";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 295, $this->getSourceContext()); })()), "html", null, true);
            echo "][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        ";
            $context["js_add_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 304
            echo "
        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"";
            // line 306
            echo (isset($context["js_add_item"]) || array_key_exists("js_add_item", $context) ? $context["js_add_item"] : (function () { throw new Twig_Error_Runtime('Variable "js_add_item" does not exist.', 306, $this->getSourceContext()); })());
            echo "\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                ";
            // line 308
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((((twig_length_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 308, $this->getSourceContext()); })())) == 0)) ? ("action.add_new_item") : ("action.add_another_item")), array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_65d0ef76f05574dcb1fdc4acd2cdb865d0e1429a23ca5c4bdb0f15554acdd764->leave($__internal_65d0ef76f05574dcb1fdc4acd2cdb865d0e1429a23ca5c4bdb0f15554acdd764_prof);

        
        $__internal_feb3a0350d1ce437187ff7baa67f2a9c6340778ec847ae80e229e35080b2bf9e->leave($__internal_feb3a0350d1ce437187ff7baa67f2a9c6340778ec847ae80e229e35080b2bf9e_prof);

    }

    // line 314
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_eacc4be9f9a273f5736c93ca49c15071492106c6858bd73c4ca69c43b1cd5271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eacc4be9f9a273f5736c93ca49c15071492106c6858bd73c4ca69c43b1cd5271->enter($__internal_eacc4be9f9a273f5736c93ca49c15071492106c6858bd73c4ca69c43b1cd5271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_df3c38f1ab1da5aedf15f0d24012c3292e5f02a97453b285f4617785fad757b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df3c38f1ab1da5aedf15f0d24012c3292e5f02a97453b285f4617785fad757b6->enter($__internal_df3c38f1ab1da5aedf15f0d24012c3292e5f02a97453b285f4617785fad757b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 315
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 315, $this->getSourceContext()); })()),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">";
        // line 316
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 316, $this->getSourceContext()); })()), 'widget');
        // line 317
        echo "</div>";
        
        $__internal_df3c38f1ab1da5aedf15f0d24012c3292e5f02a97453b285f4617785fad757b6->leave($__internal_df3c38f1ab1da5aedf15f0d24012c3292e5f02a97453b285f4617785fad757b6_prof);

        
        $__internal_eacc4be9f9a273f5736c93ca49c15071492106c6858bd73c4ca69c43b1cd5271->leave($__internal_eacc4be9f9a273f5736c93ca49c15071492106c6858bd73c4ca69c43b1cd5271_prof);

    }

    // line 320
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_4478238bb5686e3bafb0b72e2686a705b9527e03d08e02eef6c9034a2c19463f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4478238bb5686e3bafb0b72e2686a705b9527e03d08e02eef6c9034a2c19463f->enter($__internal_4478238bb5686e3bafb0b72e2686a705b9527e03d08e02eef6c9034a2c19463f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_34fea47e3612a974fa812817ca90372894a09d2e4a607e694502129a8485cd35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34fea47e3612a974fa812817ca90372894a09d2e4a607e694502129a8485cd35->enter($__internal_34fea47e3612a974fa812817ca90372894a09d2e4a607e694502129a8485cd35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 321
        $context["force_error"] = true;
        // line 322
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_34fea47e3612a974fa812817ca90372894a09d2e4a607e694502129a8485cd35->leave($__internal_34fea47e3612a974fa812817ca90372894a09d2e4a607e694502129a8485cd35_prof);

        
        $__internal_4478238bb5686e3bafb0b72e2686a705b9527e03d08e02eef6c9034a2c19463f->leave($__internal_4478238bb5686e3bafb0b72e2686a705b9527e03d08e02eef6c9034a2c19463f_prof);

    }

    // line 325
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_89ab7e5b444b3cc0374e0c6009070e143aeb97430ca5da8e43d8ae94e71d89b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ab7e5b444b3cc0374e0c6009070e143aeb97430ca5da8e43d8ae94e71d89b5->enter($__internal_89ab7e5b444b3cc0374e0c6009070e143aeb97430ca5da8e43d8ae94e71d89b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_dcdc1b5e3264ebd9ca6ff0bbf8e41bbb23feeaf76d932844cce6a7e466361e03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcdc1b5e3264ebd9ca6ff0bbf8e41bbb23feeaf76d932844cce6a7e466361e03->enter($__internal_dcdc1b5e3264ebd9ca6ff0bbf8e41bbb23feeaf76d932844cce6a7e466361e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 326
        $context["force_error"] = true;
        // line 327
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_dcdc1b5e3264ebd9ca6ff0bbf8e41bbb23feeaf76d932844cce6a7e466361e03->leave($__internal_dcdc1b5e3264ebd9ca6ff0bbf8e41bbb23feeaf76d932844cce6a7e466361e03_prof);

        
        $__internal_89ab7e5b444b3cc0374e0c6009070e143aeb97430ca5da8e43d8ae94e71d89b5->leave($__internal_89ab7e5b444b3cc0374e0c6009070e143aeb97430ca5da8e43d8ae94e71d89b5_prof);

    }

    // line 330
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_e47bc5d84bfa8c01f1fa256b42d22a3f22925e9f404ea514e51d896fa89eb950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e47bc5d84bfa8c01f1fa256b42d22a3f22925e9f404ea514e51d896fa89eb950->enter($__internal_e47bc5d84bfa8c01f1fa256b42d22a3f22925e9f404ea514e51d896fa89eb950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_1db9a0b986adf0175ae0a64a163e25b7cff20457361ba5033ffb9ebcebd81628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1db9a0b986adf0175ae0a64a163e25b7cff20457361ba5033ffb9ebcebd81628->enter($__internal_1db9a0b986adf0175ae0a64a163e25b7cff20457361ba5033ffb9ebcebd81628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 331
        $context["force_error"] = true;
        // line 332
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1db9a0b986adf0175ae0a64a163e25b7cff20457361ba5033ffb9ebcebd81628->leave($__internal_1db9a0b986adf0175ae0a64a163e25b7cff20457361ba5033ffb9ebcebd81628_prof);

        
        $__internal_e47bc5d84bfa8c01f1fa256b42d22a3f22925e9f404ea514e51d896fa89eb950->leave($__internal_e47bc5d84bfa8c01f1fa256b42d22a3f22925e9f404ea514e51d896fa89eb950_prof);

    }

    // line 335
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_8d8ec6692649324edb02606fdd33e4543515b0ff374b149808529f0784f7ea01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d8ec6692649324edb02606fdd33e4543515b0ff374b149808529f0784f7ea01->enter($__internal_8d8ec6692649324edb02606fdd33e4543515b0ff374b149808529f0784f7ea01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_9bcc7bce67ec2eb43f174ae3d606946ec9342e493511a0f45536dde6f39d4773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bcc7bce67ec2eb43f174ae3d606946ec9342e493511a0f45536dde6f39d4773->enter($__internal_9bcc7bce67ec2eb43f174ae3d606946ec9342e493511a0f45536dde6f39d4773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 336
        $context["force_error"] = true;
        // line 337
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9bcc7bce67ec2eb43f174ae3d606946ec9342e493511a0f45536dde6f39d4773->leave($__internal_9bcc7bce67ec2eb43f174ae3d606946ec9342e493511a0f45536dde6f39d4773_prof);

        
        $__internal_8d8ec6692649324edb02606fdd33e4543515b0ff374b149808529f0784f7ea01->leave($__internal_8d8ec6692649324edb02606fdd33e4543515b0ff374b149808529f0784f7ea01_prof);

    }

    // line 340
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_55a0b6c6630ba471ce66a9e73959a2c3cac6450b2086c77c8f160cbc57d8f8bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55a0b6c6630ba471ce66a9e73959a2c3cac6450b2086c77c8f160cbc57d8f8bd->enter($__internal_55a0b6c6630ba471ce66a9e73959a2c3cac6450b2086c77c8f160cbc57d8f8bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_9ca9dab6141faddf5271a82fe1261a378cb5ef28e099ec99808ff8ddf5771109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ca9dab6141faddf5271a82fe1261a378cb5ef28e099ec99808ff8ddf5771109->enter($__internal_9ca9dab6141faddf5271a82fe1261a378cb5ef28e099ec99808ff8ddf5771109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 341
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 341, $this->getSourceContext()); })())) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 341, $this->getSourceContext()); })()),  -2)), "html", null, true);
        echo "\">";
        // line 342
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 342, $this->getSourceContext()); })()), 'widget');
        // line 343
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 343, $this->getSourceContext()); })()), 'errors');
        // line 344
        echo "</div>";
        
        $__internal_9ca9dab6141faddf5271a82fe1261a378cb5ef28e099ec99808ff8ddf5771109->leave($__internal_9ca9dab6141faddf5271a82fe1261a378cb5ef28e099ec99808ff8ddf5771109_prof);

        
        $__internal_55a0b6c6630ba471ce66a9e73959a2c3cac6450b2086c77c8f160cbc57d8f8bd->leave($__internal_55a0b6c6630ba471ce66a9e73959a2c3cac6450b2086c77c8f160cbc57d8f8bd_prof);

    }

    // line 347
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_9da3107a362f56b855833a2d959ad9755daebca5cb314b9d216c29aa1f17faaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9da3107a362f56b855833a2d959ad9755daebca5cb314b9d216c29aa1f17faaf->enter($__internal_9da3107a362f56b855833a2d959ad9755daebca5cb314b9d216c29aa1f17faaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_714fff7e607570985c612d94e08271b3f41d6e7be0410155457abaa8e557487b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_714fff7e607570985c612d94e08271b3f41d6e7be0410155457abaa8e557487b->enter($__internal_714fff7e607570985c612d94e08271b3f41d6e7be0410155457abaa8e557487b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 348
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 348, $this->getSourceContext()); })())) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 348, $this->getSourceContext()); })()),  -2)), "html", null, true);
        echo "\">";
        // line 349
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 349, $this->getSourceContext()); })()), 'widget');
        // line 350
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 350, $this->getSourceContext()); })()), 'errors');
        // line 351
        echo "</div>";
        
        $__internal_714fff7e607570985c612d94e08271b3f41d6e7be0410155457abaa8e557487b->leave($__internal_714fff7e607570985c612d94e08271b3f41d6e7be0410155457abaa8e557487b_prof);

        
        $__internal_9da3107a362f56b855833a2d959ad9755daebca5cb314b9d216c29aa1f17faaf->leave($__internal_9da3107a362f56b855833a2d959ad9755daebca5cb314b9d216c29aa1f17faaf_prof);

    }

    // line 355
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_c3a81b2a01887b7ac61ea6db45f9010dcbe50cbbe704cbb8c4fdb61fa8457cd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a81b2a01887b7ac61ea6db45f9010dcbe50cbbe704cbb8c4fdb61fa8457cd6->enter($__internal_c3a81b2a01887b7ac61ea6db45f9010dcbe50cbbe704cbb8c4fdb61fa8457cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_620cc8bba1b27e5bc703576193c6f1ad34885424acbeeeb10ee6feef5f1ead1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_620cc8bba1b27e5bc703576193c6f1ad34885424acbeeeb10ee6feef5f1ead1e->enter($__internal_620cc8bba1b27e5bc703576193c6f1ad34885424acbeeeb10ee6feef5f1ead1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 356
        echo "    ";
        $context["error_count"] = twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 356, $this->getSourceContext()); })()));
        // line 357
        echo "    ";
        if (((isset($context["error_count"]) || array_key_exists("error_count", $context) ? $context["error_count"] : (function () { throw new Twig_Error_Runtime('Variable "error_count" does not exist.', 357, $this->getSourceContext()); })()) >= 1)) {
            // line 358
            echo "        <div class=\"error-block\">
            <span class=\"label label-danger\">";
            // line 359
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", (isset($context["error_count"]) || array_key_exists("error_count", $context) ? $context["error_count"] : (function () { throw new Twig_Error_Runtime('Variable "error_count" does not exist.', 359, $this->getSourceContext()); })()), array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
            ";
            // line 360
            if (((isset($context["error_count"]) || array_key_exists("error_count", $context) ? $context["error_count"] : (function () { throw new Twig_Error_Runtime('Variable "error_count" does not exist.', 360, $this->getSourceContext()); })()) == 1)) {
                // line 361
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_first($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 361, $this->getSourceContext()); })())), "message", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 363
                echo "                <ul>
                    ";
                // line 364
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 364, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 365
                    echo "                        <li>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                    echo "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 367
                echo "                </ul>
            ";
            }
            // line 369
            echo "        </div>
    ";
        }
        
        $__internal_620cc8bba1b27e5bc703576193c6f1ad34885424acbeeeb10ee6feef5f1ead1e->leave($__internal_620cc8bba1b27e5bc703576193c6f1ad34885424acbeeeb10ee6feef5f1ead1e_prof);

        
        $__internal_c3a81b2a01887b7ac61ea6db45f9010dcbe50cbbe704cbb8c4fdb61fa8457cd6->leave($__internal_c3a81b2a01887b7ac61ea6db45f9010dcbe50cbbe704cbb8c4fdb61fa8457cd6_prof);

    }

    // line 373
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_88ab12a5c7603464cbd285cb165e2742d27a4f4d9aa342df110de85f87895a43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ab12a5c7603464cbd285cb165e2742d27a4f4d9aa342df110de85f87895a43->enter($__internal_88ab12a5c7603464cbd285cb165e2742d27a4f4d9aa342df110de85f87895a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_3412b8a8ce426c1d24db9e53b4631375ed73a6001d113a8bb72d3f09eb0b318f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3412b8a8ce426c1d24db9e53b4631375ed73a6001d113a8bb72d3f09eb0b318f->enter($__internal_3412b8a8ce426c1d24db9e53b4631375ed73a6001d113a8bb72d3f09eb0b318f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 376
        echo "    ";
        if ((twig_test_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 376, $this->getSourceContext()); })())) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 376, $this->getSourceContext()); })())))) {
            // line 377
            echo "        ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
    ";
        }
        // line 379
        echo "    ";
        if (((twig_test_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 379, $this->getSourceContext()); })())) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 379, $this->getSourceContext()); })()))) || twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array(), "any", false, true), "prototype", array(), "any", true, true))) {
            // line 380
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 380, $this->getSourceContext()); })()), array("data-empty-collection" =>             $this->renderBlock("empty_collection", $context, $blocks)));
            // line 381
            echo "    ";
        }
        // line 382
        echo "
    ";
        // line 383
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        
        $__internal_3412b8a8ce426c1d24db9e53b4631375ed73a6001d113a8bb72d3f09eb0b318f->leave($__internal_3412b8a8ce426c1d24db9e53b4631375ed73a6001d113a8bb72d3f09eb0b318f_prof);

        
        $__internal_88ab12a5c7603464cbd285cb165e2742d27a4f4d9aa342df110de85f87895a43->leave($__internal_88ab12a5c7603464cbd285cb165e2742d27a4f4d9aa342df110de85f87895a43_prof);

    }

    // line 386
    public function block_empty_collection($context, array $blocks = array())
    {
        $__internal_6792baa3b6a37a77d6d0ad3d4762f92c615afd94d63d2ef361fcdd14df402f1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6792baa3b6a37a77d6d0ad3d4762f92c615afd94d63d2ef361fcdd14df402f1b->enter($__internal_6792baa3b6a37a77d6d0ad3d4762f92c615afd94d63d2ef361fcdd14df402f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        $__internal_c6c50a5ab0661241393cdb25529171c35c2c40d3c66b2684f9ed111290b9cb64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6c50a5ab0661241393cdb25529171c35c2c40d3c66b2684f9ed111290b9cb64->enter($__internal_c6c50a5ab0661241393cdb25529171c35c2c40d3c66b2684f9ed111290b9cb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        // line 387
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 388
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 388, $this->getSourceContext()); })()), "entity", array()), "templates", array()), "label_empty", array()));
        echo "
    </div>
";
        
        $__internal_c6c50a5ab0661241393cdb25529171c35c2c40d3c66b2684f9ed111290b9cb64->leave($__internal_c6c50a5ab0661241393cdb25529171c35c2c40d3c66b2684f9ed111290b9cb64_prof);

        
        $__internal_6792baa3b6a37a77d6d0ad3d4762f92c615afd94d63d2ef361fcdd14df402f1b->leave($__internal_6792baa3b6a37a77d6d0ad3d4762f92c615afd94d63d2ef361fcdd14df402f1b_prof);

    }

    // line 392
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_2b4ffb0e297a064b917d00447d26faa1df35e6fa213c7246483f0d0e4a9da60e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b4ffb0e297a064b917d00447d26faa1df35e6fa213c7246483f0d0e4a9da60e->enter($__internal_2b4ffb0e297a064b917d00447d26faa1df35e6fa213c7246483f0d0e4a9da60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_1b4654cb4df93dc8ac2f28802d68b5aa8ad80b3a6abfdc0648149e68aa06a703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b4654cb4df93dc8ac2f28802d68b5aa8ad80b3a6abfdc0648149e68aa06a703->enter($__internal_1b4654cb4df93dc8ac2f28802d68b5aa8ad80b3a6abfdc0648149e68aa06a703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 393
        echo "    ";
        $context["force_error"] = true;
        // line 394
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_1b4654cb4df93dc8ac2f28802d68b5aa8ad80b3a6abfdc0648149e68aa06a703->leave($__internal_1b4654cb4df93dc8ac2f28802d68b5aa8ad80b3a6abfdc0648149e68aa06a703_prof);

        
        $__internal_2b4ffb0e297a064b917d00447d26faa1df35e6fa213c7246483f0d0e4a9da60e->leave($__internal_2b4ffb0e297a064b917d00447d26faa1df35e6fa213c7246483f0d0e4a9da60e_prof);

    }

    // line 397
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_12b40728e2567be092296222a8c06d6b7213407ca9bd04ae15df650c0156af85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b40728e2567be092296222a8c06d6b7213407ca9bd04ae15df650c0156af85->enter($__internal_12b40728e2567be092296222a8c06d6b7213407ca9bd04ae15df650c0156af85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_af63afb7f23910229c20e9de23dc37dbb12316333a7705036a80bbc3333538f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af63afb7f23910229c20e9de23dc37dbb12316333a7705036a80bbc3333538f3->enter($__internal_af63afb7f23910229c20e9de23dc37dbb12316333a7705036a80bbc3333538f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 398
        ob_start();
        // line 399
        echo "    <div class=\"easyadmin-vich-file\">
        ";
        // line 400
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 400, $this->getSourceContext()); })()), "")) : ("")))) {
            // line 401
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 401, $this->getSourceContext()); })()), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 401, $this->getSourceContext()); })()), "/"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle")));
            // line 402
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 402, $this->getSourceContext()); })())), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["download_title"]) || array_key_exists("download_title", $context) ? $context["download_title"] : (function () { throw new Twig_Error_Runtime('Variable "download_title" does not exist.', 402, $this->getSourceContext()); })()), "html", null, true);
            echo "</a>
        ";
        }
        // line 404
        echo "
        <div class=\"row\">
            ";
        // line 406
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 407
            echo "            <div class=\"col-sm-3 col-md-2\">
                ";
            // line 408
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 408, $this->getSourceContext()); })()), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
            </div>
            ";
        }
        // line 411
        echo "            <div class=\"";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "delete", array(), "any", true, true)) ? ("col-sm-9 col-md-10") : ("col-sm-12"));
        echo "\">
                ";
        // line 412
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 412, $this->getSourceContext()); })()), "file", array()), 'widget');
        echo "
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_af63afb7f23910229c20e9de23dc37dbb12316333a7705036a80bbc3333538f3->leave($__internal_af63afb7f23910229c20e9de23dc37dbb12316333a7705036a80bbc3333538f3_prof);

        
        $__internal_12b40728e2567be092296222a8c06d6b7213407ca9bd04ae15df650c0156af85->leave($__internal_12b40728e2567be092296222a8c06d6b7213407ca9bd04ae15df650c0156af85_prof);

    }

    // line 419
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_483f98af29caa1c1f5ecaefff5de3daebee65efa8bbad1bc83f405c4f3f42fa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_483f98af29caa1c1f5ecaefff5de3daebee65efa8bbad1bc83f405c4f3f42fa8->enter($__internal_483f98af29caa1c1f5ecaefff5de3daebee65efa8bbad1bc83f405c4f3f42fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_77344720603bb1b316d5064c3b45fff2158586e2c642175424442e79a21c9e05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77344720603bb1b316d5064c3b45fff2158586e2c642175424442e79a21c9e05->enter($__internal_77344720603bb1b316d5064c3b45fff2158586e2c642175424442e79a21c9e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 420
        echo "    ";
        $context["force_error"] = true;
        // line 421
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_77344720603bb1b316d5064c3b45fff2158586e2c642175424442e79a21c9e05->leave($__internal_77344720603bb1b316d5064c3b45fff2158586e2c642175424442e79a21c9e05_prof);

        
        $__internal_483f98af29caa1c1f5ecaefff5de3daebee65efa8bbad1bc83f405c4f3f42fa8->leave($__internal_483f98af29caa1c1f5ecaefff5de3daebee65efa8bbad1bc83f405c4f3f42fa8_prof);

    }

    // line 424
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_acc7a71d2f12f153dfb19bc4a59780698b8ccad9be3f430ca7c2625265d1c55c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc7a71d2f12f153dfb19bc4a59780698b8ccad9be3f430ca7c2625265d1c55c->enter($__internal_acc7a71d2f12f153dfb19bc4a59780698b8ccad9be3f430ca7c2625265d1c55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_4ba5b9669da1a67d3a5a6b9cdbdd705e35ed32469899526a378a980b394e3041 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ba5b9669da1a67d3a5a6b9cdbdd705e35ed32469899526a378a980b394e3041->enter($__internal_4ba5b9669da1a67d3a5a6b9cdbdd705e35ed32469899526a378a980b394e3041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 425
        ob_start();
        // line 426
        echo "    <div class=\"easyadmin-vich-image\">
        ";
        // line 427
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 427, $this->getSourceContext()); })()), "file", array()), 'widget');
        echo "
        ";
        // line 428
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 429
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 429, $this->getSourceContext()); })()), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
        ";
        }
        // line 431
        echo "
        ";
        // line 432
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 432, $this->getSourceContext()); })()), "")) : ("")))) {
            // line 433
            echo "            ";
            $context["_lightbox_id"] = ("easyadmin-lightbox-" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 433, $this->getSourceContext()); })()));
            // line 434
            echo "
            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#";
            // line 435
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) || array_key_exists("_lightbox_id", $context) ? $context["_lightbox_id"] : (function () { throw new Twig_Error_Runtime('Variable "_lightbox_id" does not exist.', 435, $this->getSourceContext()); })()), "html", null, true);
            echo "\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"";
            // line 436
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 436, $this->getSourceContext()); })())), "html", null, true);
            echo "\">
            </a>

            <div id=\"";
            // line 439
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) || array_key_exists("_lightbox_id", $context) ? $context["_lightbox_id"] : (function () { throw new Twig_Error_Runtime('Variable "_lightbox_id" does not exist.', 439, $this->getSourceContext()); })()), "html", null, true);
            echo "\" class=\"easyadmin-lightbox\">
                <img src=\"";
            // line 440
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 440, $this->getSourceContext()); })())), "html", null, true);
            echo "\">
            </div>
        ";
        }
        // line 443
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4ba5b9669da1a67d3a5a6b9cdbdd705e35ed32469899526a378a980b394e3041->leave($__internal_4ba5b9669da1a67d3a5a6b9cdbdd705e35ed32469899526a378a980b394e3041_prof);

        
        $__internal_acc7a71d2f12f153dfb19bc4a59780698b8ccad9be3f430ca7c2625265d1c55c->leave($__internal_acc7a71d2f12f153dfb19bc4a59780698b8ccad9be3f430ca7c2625265d1c55c_prof);

    }

    // line 447
    public function block_easyadmin_rest($context, array $blocks = array())
    {
        $__internal_a84283c392cd5664f66f4ab104e75a7a59405ce207b3d8432d32cd2bd2eb42b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a84283c392cd5664f66f4ab104e75a7a59405ce207b3d8432d32cd2bd2eb42b6->enter($__internal_a84283c392cd5664f66f4ab104e75a7a59405ce207b3d8432d32cd2bd2eb42b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_rest"));

        $__internal_24423e7d9593e92659bcdf64a7ed25aea466cf02b940681073d0612af721750d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24423e7d9593e92659bcdf64a7ed25aea466cf02b940681073d0612af721750d->enter($__internal_24423e7d9593e92659bcdf64a7ed25aea466cf02b940681073d0612af721750d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_rest"));

        // line 448
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 448, $this->getSourceContext()); })()), 'rest');
        // line 449
        echo "<div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">";
        // line 453
        $this->displayBlock("item_actions", $context, $blocks);
        // line 454
        echo "</div>
            </div>
        </div>
    </div>
";
        
        $__internal_24423e7d9593e92659bcdf64a7ed25aea466cf02b940681073d0612af721750d->leave($__internal_24423e7d9593e92659bcdf64a7ed25aea466cf02b940681073d0612af721750d_prof);

        
        $__internal_a84283c392cd5664f66f4ab104e75a7a59405ce207b3d8432d32cd2bd2eb42b6->leave($__internal_a84283c392cd5664f66f4ab104e75a7a59405ce207b3d8432d32cd2bd2eb42b6_prof);

    }

    // line 460
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_ee0172ce064c382467c6955d6aae73b0705839c188ccb2acac69b76f2c124117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee0172ce064c382467c6955d6aae73b0705839c188ccb2acac69b76f2c124117->enter($__internal_ee0172ce064c382467c6955d6aae73b0705839c188ccb2acac69b76f2c124117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_a49aad900910d2c139b5f3323376dc6a139c7887dc2a2a33ae8e0742fe24ab51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a49aad900910d2c139b5f3323376dc6a139c7887dc2a2a33ae8e0742fe24ab51->enter($__internal_a49aad900910d2c139b5f3323376dc6a139c7887dc2a2a33ae8e0742fe24ab51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 461
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 461, $this->getSourceContext()); })()), "entity", array()), "translation_domain", array());
        // line 462
        echo "    ";
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 462, $this->getSourceContext()); })()), "entity", array()), "name", array())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 462, $this->getSourceContext()); })()), "entity", array()), "label", array())));
        // line 463
        echo "
    ";
        // line 465
        echo "    <button type=\"submit\" class=\"btn btn-primary action-save\">
        <i class=\"fa fa-save\"></i> ";
        // line 466
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.save", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 466, $this->getSourceContext()); })()), (isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "_translation_domain" does not exist.', 466, $this->getSourceContext()); })())), "html", null, true);
        echo "
    </button>

    ";
        // line 469
        $context["_entity_actions"] = (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 469, $this->getSourceContext()); })()), "view", array()) == "new")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("new", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 470
(isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 470, $this->getSourceContext()); })()), "entity", array()), "name", array()))) : ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("edit", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 471
(isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 471, $this->getSourceContext()); })()), "entity", array()), "name", array()))));
        // line 472
        echo "
    ";
        // line 473
        $context["_entity_id"] = (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 473, $this->getSourceContext()); })()), "view", array()) == "new")) ? (null) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 475
(isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 475, $this->getSourceContext()); })()), "item", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 475, $this->getSourceContext()); })()), "entity", array()), "primary_key_field_name", array()))));
        // line 476
        echo "
    ";
        // line 477
        $context["_request_parameters"] = array("entity" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 477, $this->getSourceContext()); })()), "entity", array()), "name", array()), "referer" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 477, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 478
        echo "
    ";
        // line 479
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 480
(isset($context["_entity_actions"]) || array_key_exists("_entity_actions", $context) ? $context["_entity_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_actions" does not exist.', 480, $this->getSourceContext()); })()), "request_parameters" =>         // line 481
(isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 481, $this->getSourceContext()); })()), "translation_domain" =>         // line 482
(isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "_translation_domain" does not exist.', 482, $this->getSourceContext()); })()), "trans_parameters" =>         // line 483
(isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 483, $this->getSourceContext()); })()), "item_id" =>         // line 484
(isset($context["_entity_id"]) || array_key_exists("_entity_id", $context) ? $context["_entity_id"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_id" does not exist.', 484, $this->getSourceContext()); })())), false);
        // line 485
        echo "
";
        
        $__internal_a49aad900910d2c139b5f3323376dc6a139c7887dc2a2a33ae8e0742fe24ab51->leave($__internal_a49aad900910d2c139b5f3323376dc6a139c7887dc2a2a33ae8e0742fe24ab51_prof);

        
        $__internal_ee0172ce064c382467c6955d6aae73b0705839c188ccb2acac69b76f2c124117->leave($__internal_ee0172ce064c382467c6955d6aae73b0705839c188ccb2acac69b76f2c124117_prof);

    }

    // line 489
    public function block_easyadmin_widget($context, array $blocks = array())
    {
        $__internal_fc7c79f21a6aeb59faa705d99f6034757839ea6602001451689809b059a52d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc7c79f21a6aeb59faa705d99f6034757839ea6602001451689809b059a52d05->enter($__internal_fc7c79f21a6aeb59faa705d99f6034757839ea6602001451689809b059a52d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        $__internal_6f8c89e43f646a880716fd64acb7ab322a14c5b41bf43d374062bce49a06692d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f8c89e43f646a880716fd64acb7ab322a14c5b41bf43d374062bce49a06692d->enter($__internal_6f8c89e43f646a880716fd64acb7ab322a14c5b41bf43d374062bce49a06692d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        // line 490
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 490, $this->getSourceContext()); })()), "entity", array()), "translation_domain", array());
        // line 491
        echo "    <div class=\"row\">
        ";
        // line 492
        if ((twig_length_filter($this->env, (isset($context["easyadmin_form_tabs"]) || array_key_exists("easyadmin_form_tabs", $context) ? $context["easyadmin_form_tabs"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin_form_tabs" does not exist.', 492, $this->getSourceContext()); })())) > 0)) {
            // line 493
            echo "            <div class=\"col-xs-12\">
                <div class=\"nav-tabs-custom\">
                    <ul class=\"nav nav-tabs\">
                        ";
            // line 496
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["easyadmin_form_tabs"]) || array_key_exists("easyadmin_form_tabs", $context) ? $context["easyadmin_form_tabs"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin_form_tabs" does not exist.', 496, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 497
                echo "                            <li class=\"";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["tab_config"], "active", array())) {
                    echo "active";
                }
                echo "\">
                                <a href=\"#";
                // line 498
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tab_config"], "id", array(), "array"), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tab_config"], "id", array(), "array"), "html", null, true);
                echo "-tab\" data-toggle=\"tab\">
                                    ";
                // line 499
                if (((twig_get_attribute($this->env, $this->getSourceContext(), $context["tab_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["tab_config"], "icon", array()), false)) : (false))) {
                    // line 500
                    echo "                                        <i class=\"fa fa-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tab_config"], "icon", array()), "html", null, true);
                    echo "\"></i>
                                    ";
                }
                // line 502
                echo "                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tab_config"], "label", array(), "array"), "html", null, true);
                echo "
                                    ";
                // line 503
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["tab_config"], "errors", array()) > 0)) {
                    // line 504
                    echo "                                        <span class=\"label label-danger\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("form.tab.error_badge_title", twig_get_attribute($this->env, $this->getSourceContext(), $context["tab_config"], "errors", array()), array(), "EasyAdminBundle"), "html", null, true);
                    echo "\">
                                            ";
                    // line 505
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tab_config"], "errors", array()), "html", null, true);
                    echo "
                                        </span>
                                    ";
                }
                // line 508
                echo "                                </a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 511
            echo "                    </ul>
                    <div class=\"tab-content\">
                        ";
            // line 513
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["easyadmin_form_tabs"]) || array_key_exists("easyadmin_form_tabs", $context) ? $context["easyadmin_form_tabs"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin_form_tabs" does not exist.', 513, $this->getSourceContext()); })()));
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
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 514
                echo "                            <div id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tab_config"], "id", array(), "array"), "html", null, true);
                echo "\" class=\"tab-pane ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["tab_config"], "active", array())) {
                    echo "active";
                }
                echo "\">
                                <div class=\"row\">
                                    ";
                // line 516
                $this->displayBlock("easyadmin_widget_groups", $context, $blocks);
                echo "
                                </div>
                            </div>
                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 520
            echo "                    </div>
                </div>
            </div>
        ";
        } else {
            // line 524
            echo "            ";
            $this->displayBlock("easyadmin_widget_groups", $context, $blocks);
            echo "
        ";
        }
        // line 526
        echo "    </div>
";
        
        $__internal_6f8c89e43f646a880716fd64acb7ab322a14c5b41bf43d374062bce49a06692d->leave($__internal_6f8c89e43f646a880716fd64acb7ab322a14c5b41bf43d374062bce49a06692d_prof);

        
        $__internal_fc7c79f21a6aeb59faa705d99f6034757839ea6602001451689809b059a52d05->leave($__internal_fc7c79f21a6aeb59faa705d99f6034757839ea6602001451689809b059a52d05_prof);

    }

    // line 529
    public function block_easyadmin_widget_groups($context, array $blocks = array())
    {
        $__internal_45c997497804f9c61ca775f341b498324c84bd734dc292cd2db3f1d6a86e6069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45c997497804f9c61ca775f341b498324c84bd734dc292cd2db3f1d6a86e6069->enter($__internal_45c997497804f9c61ca775f341b498324c84bd734dc292cd2db3f1d6a86e6069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget_groups"));

        $__internal_c8fee446aaa4bbb46a3591409bd65882147b809e6e8b5c4ff58378d63be493e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8fee446aaa4bbb46a3591409bd65882147b809e6e8b5c4ff58378d63be493e7->enter($__internal_c8fee446aaa4bbb46a3591409bd65882147b809e6e8b5c4ff58378d63be493e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget_groups"));

        // line 530
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["easyadmin_form_groups"]) || array_key_exists("easyadmin_form_groups", $context) ? $context["easyadmin_form_groups"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin_form_groups" does not exist.', 530, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["group_name"] => $context["group_config"]) {
            if (( !twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "form_tab", array()) || (twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "form_tab", array()) == (isset($context["tab_name"]) || array_key_exists("tab_name", $context) ? $context["tab_name"] : (function () { throw new Twig_Error_Runtime('Variable "tab_name" does not exist.', 530, $this->getSourceContext()); })())))) {
                // line 531
                echo "        <div class=\"field-group col-xs-12 ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "css_class", array()), "")) : ("")), "html", null, true);
                echo "\">
            <div class=\"box box-default\">
                ";
                // line 533
                if ((((twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "label", array()), false)) : (false)) || ((twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "icon", array()), false)) : (false)))) {
                    // line 534
                    echo "                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">
                            ";
                    // line 536
                    if (((twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "icon", array()), false)) : (false))) {
                        // line 537
                        echo "                                <i class=\"fa fa-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "icon", array()), "html", null, true);
                        echo "\"></i>
                            ";
                    }
                    // line 539
                    echo "                            ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "label", array()), array(), (isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "_translation_domain" does not exist.', 539, $this->getSourceContext()); })()));
                    echo "
                        </h3>
                    </div>
                ";
                }
                // line 543
                echo "
                <div class=\"box-body\">
                    ";
                // line 545
                if (((twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "help", array()), false)) : (false))) {
                    // line 546
                    echo "                        <p class=\"help-block\">";
                    echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "help", array()), array(), (isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "_translation_domain" does not exist.', 546, $this->getSourceContext()); })())), "html", null, true));
                    echo "</p>
                    ";
                }
                // line 548
                echo "
                    <div class=\"row\">
                        ";
                // line 550
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 550, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    if ((!twig_in_filter("hidden", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array()), "block_prefixes", array())) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array()), "easyadmin", array()), "form_group", array()) == $context["group_name"]))) {
                        // line 551
                        echo "                            ";
                        if (( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) || (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) == (isset($context["tab_name"]) || array_key_exists("tab_name", $context) ? $context["tab_name"] : (function () { throw new Twig_Error_Runtime('Variable "tab_name" does not exist.', 551, $this->getSourceContext()); })())))) {
                            // line 552
                            echo "                                <div class=\"col-xs-12 ";
                            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                            echo "\">
                                    ";
                            // line 553
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                            echo "
                                </div>
                            ";
                        }
                        // line 556
                        echo "                        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 557
                echo "                    </div>
                </div>
            </div>
        </div>
    ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 562
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 562, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if ((!twig_in_filter("hidden", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array()), "block_prefixes", array())) && ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) || (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) == (isset($context["tab_name"]) || array_key_exists("tab_name", $context) ? $context["tab_name"] : (function () { throw new Twig_Error_Runtime('Variable "tab_name" does not exist.', 562, $this->getSourceContext()); })()))))) {
                    // line 563
                    echo "            <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                ";
                    // line 564
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
            </div>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 567
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c8fee446aaa4bbb46a3591409bd65882147b809e6e8b5c4ff58378d63be493e7->leave($__internal_c8fee446aaa4bbb46a3591409bd65882147b809e6e8b5c4ff58378d63be493e7_prof);

        
        $__internal_45c997497804f9c61ca775f341b498324c84bd734dc292cd2db3f1d6a86e6069->leave($__internal_45c997497804f9c61ca775f341b498324c84bd734dc292cd2db3f1d6a86e6069_prof);

    }

    // line 571
    public function block_easyadmin_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_0c0da200cbdd75338f92ba0b4678be48df97e6d7984f0e11ee830dedc29dfea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0da200cbdd75338f92ba0b4678be48df97e6d7984f0e11ee830dedc29dfea0->enter($__internal_0c0da200cbdd75338f92ba0b4678be48df97e6d7984f0e11ee830dedc29dfea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        $__internal_4997394f5cd1f535a2138b887740460e034daa20b9202b7a7c8f43bfb70443ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4997394f5cd1f535a2138b887740460e034daa20b9202b7a7c8f43bfb70443ef->enter($__internal_4997394f5cd1f535a2138b887740460e034daa20b9202b7a7c8f43bfb70443ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        // line 572
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 572, $this->getSourceContext()); })()), "autocomplete", array()), 'widget', array("attr" => twig_array_merge(        // line 573
(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 573, $this->getSourceContext()); })()), array("data-easyadmin-autocomplete-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "autocomplete", "entity" =>         // line 576
(isset($context["autocomplete_entity_name"]) || array_key_exists("autocomplete_entity_name", $context) ? $context["autocomplete_entity_name"] : (function () { throw new Twig_Error_Runtime('Variable "autocomplete_entity_name" does not exist.', 576, $this->getSourceContext()); })())))))));
        // line 579
        echo "
";
        
        $__internal_4997394f5cd1f535a2138b887740460e034daa20b9202b7a7c8f43bfb70443ef->leave($__internal_4997394f5cd1f535a2138b887740460e034daa20b9202b7a7c8f43bfb70443ef_prof);

        
        $__internal_0c0da200cbdd75338f92ba0b4678be48df97e6d7984f0e11ee830dedc29dfea0->leave($__internal_0c0da200cbdd75338f92ba0b4678be48df97e6d7984f0e11ee830dedc29dfea0_prof);

    }

    // line 582
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = array())
    {
        $__internal_14f96c38fa5c857972043fefa9168b20c0ab1aa3d885ccfbb641ceae79ff4c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f96c38fa5c857972043fefa9168b20c0ab1aa3d885ccfbb641ceae79ff4c66->enter($__internal_14f96c38fa5c857972043fefa9168b20c0ab1aa3d885ccfbb641ceae79ff4c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        $__internal_af508c02f422affebaf8e9cc71b447e09326e3276051603d9c8006761b7211b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af508c02f422affebaf8e9cc71b447e09326e3276051603d9c8006761b7211b5->enter($__internal_af508c02f422affebaf8e9cc71b447e09326e3276051603d9c8006761b7211b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        // line 583
        echo "    ";
        $context["name"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 583, $this->getSourceContext()); })()), "parent", array()), "vars", array()), "name", array());
        // line 584
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_af508c02f422affebaf8e9cc71b447e09326e3276051603d9c8006761b7211b5->leave($__internal_af508c02f422affebaf8e9cc71b447e09326e3276051603d9c8006761b7211b5_prof);

        
        $__internal_14f96c38fa5c857972043fefa9168b20c0ab1aa3d885ccfbb641ceae79ff4c66->leave($__internal_14f96c38fa5c857972043fefa9168b20c0ab1aa3d885ccfbb641ceae79ff4c66_prof);

    }

    // line 588
    public function block_easyadmin_divider_row($context, array $blocks = array())
    {
        $__internal_c3c16f3af0178c6400a78e7333d91e067818b1446d564679f9584eeb7ebeeb01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3c16f3af0178c6400a78e7333d91e067818b1446d564679f9584eeb7ebeeb01->enter($__internal_c3c16f3af0178c6400a78e7333d91e067818b1446d564679f9584eeb7ebeeb01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        $__internal_90af3e7a37756ec053779a164d1bd637889241df55e8d4dbb138c30b0584cf26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90af3e7a37756ec053779a164d1bd637889241df55e8d4dbb138c30b0584cf26->enter($__internal_90af3e7a37756ec053779a164d1bd637889241df55e8d4dbb138c30b0584cf26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        // line 589
        echo "    <div class=\"field-divider\">
        <hr>
    </div>
";
        
        $__internal_90af3e7a37756ec053779a164d1bd637889241df55e8d4dbb138c30b0584cf26->leave($__internal_90af3e7a37756ec053779a164d1bd637889241df55e8d4dbb138c30b0584cf26_prof);

        
        $__internal_c3c16f3af0178c6400a78e7333d91e067818b1446d564679f9584eeb7ebeeb01->leave($__internal_c3c16f3af0178c6400a78e7333d91e067818b1446d564679f9584eeb7ebeeb01_prof);

    }

    // line 595
    public function block_easyadmin_section_row($context, array $blocks = array())
    {
        $__internal_e47cb6e5c9780c29c86ae9ed8aef50f79a189928126acbe7386359ccec7c3164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e47cb6e5c9780c29c86ae9ed8aef50f79a189928126acbe7386359ccec7c3164->enter($__internal_e47cb6e5c9780c29c86ae9ed8aef50f79a189928126acbe7386359ccec7c3164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        $__internal_7096bd8b6481db996f76266cc8367b8a65e23845d7911cba192d2be2f1344693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7096bd8b6481db996f76266cc8367b8a65e23845d7911cba192d2be2f1344693->enter($__internal_7096bd8b6481db996f76266cc8367b8a65e23845d7911cba192d2be2f1344693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        // line 596
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 596, $this->getSourceContext()); })()), "entity", array()), "translation_domain", array());
        // line 597
        echo "    <div class=\"field-section ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
        ";
        // line 598
        if ((((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array()), false)) : (false)) || ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array()), false)) : (false)))) {
            // line 599
            echo "            <h2>
                ";
            // line 600
            if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array()), false)) : (false))) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 600, $this->getSourceContext()); })()), "field", array()), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 601
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array()), "")) : ("")), array(), (isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "_translation_domain" does not exist.', 601, $this->getSourceContext()); })()));
            echo "
            </h2>
        ";
        }
        // line 604
        echo "
        ";
        // line 605
        if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), false)) : (false))) {
            // line 606
            echo "            <p class=\"help-block\">";
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 606, $this->getSourceContext()); })()), "field", array()), "help", array()), array(), (isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "_translation_domain" does not exist.', 606, $this->getSourceContext()); })())), "html", null, true));
            echo "</p>
        ";
        }
        // line 608
        echo "    </div>
";
        
        $__internal_7096bd8b6481db996f76266cc8367b8a65e23845d7911cba192d2be2f1344693->leave($__internal_7096bd8b6481db996f76266cc8367b8a65e23845d7911cba192d2be2f1344693_prof);

        
        $__internal_e47cb6e5c9780c29c86ae9ed8aef50f79a189928126acbe7386359ccec7c3164->leave($__internal_e47cb6e5c9780c29c86ae9ed8aef50f79a189928126acbe7386359ccec7c3164_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2111 => 608,  2105 => 606,  2103 => 605,  2100 => 604,  2093 => 601,  2087 => 600,  2084 => 599,  2082 => 598,  2077 => 597,  2074 => 596,  2065 => 595,  2052 => 589,  2043 => 588,  2033 => 584,  2030 => 583,  2021 => 582,  2010 => 579,  2008 => 576,  2007 => 573,  2005 => 572,  1996 => 571,  1982 => 567,  1972 => 564,  1967 => 563,  1961 => 562,  1951 => 557,  1944 => 556,  1938 => 553,  1933 => 552,  1930 => 551,  1925 => 550,  1921 => 548,  1915 => 546,  1913 => 545,  1909 => 543,  1901 => 539,  1895 => 537,  1893 => 536,  1889 => 534,  1887 => 533,  1881 => 531,  1874 => 530,  1865 => 529,  1854 => 526,  1848 => 524,  1842 => 520,  1824 => 516,  1814 => 514,  1797 => 513,  1793 => 511,  1785 => 508,  1779 => 505,  1774 => 504,  1772 => 503,  1767 => 502,  1761 => 500,  1759 => 499,  1753 => 498,  1746 => 497,  1742 => 496,  1737 => 493,  1735 => 492,  1732 => 491,  1729 => 490,  1720 => 489,  1709 => 485,  1707 => 484,  1706 => 483,  1705 => 482,  1704 => 481,  1703 => 480,  1702 => 479,  1699 => 478,  1697 => 477,  1694 => 476,  1692 => 475,  1691 => 473,  1688 => 472,  1686 => 471,  1685 => 470,  1684 => 469,  1678 => 466,  1675 => 465,  1672 => 463,  1669 => 462,  1666 => 461,  1657 => 460,  1643 => 454,  1641 => 453,  1636 => 449,  1634 => 448,  1625 => 447,  1613 => 443,  1607 => 440,  1603 => 439,  1597 => 436,  1593 => 435,  1590 => 434,  1587 => 433,  1585 => 432,  1582 => 431,  1576 => 429,  1574 => 428,  1570 => 427,  1567 => 426,  1565 => 425,  1556 => 424,  1543 => 421,  1540 => 420,  1531 => 419,  1515 => 412,  1510 => 411,  1504 => 408,  1501 => 407,  1499 => 406,  1495 => 404,  1487 => 402,  1484 => 401,  1482 => 400,  1479 => 399,  1477 => 398,  1468 => 397,  1455 => 394,  1452 => 393,  1443 => 392,  1430 => 388,  1427 => 387,  1418 => 386,  1408 => 383,  1405 => 382,  1402 => 381,  1399 => 380,  1396 => 379,  1390 => 377,  1387 => 376,  1378 => 373,  1366 => 369,  1362 => 367,  1353 => 365,  1349 => 364,  1346 => 363,  1340 => 361,  1338 => 360,  1334 => 359,  1331 => 358,  1328 => 357,  1325 => 356,  1316 => 355,  1306 => 351,  1304 => 350,  1302 => 349,  1294 => 348,  1285 => 347,  1275 => 344,  1273 => 343,  1271 => 342,  1263 => 341,  1254 => 340,  1244 => 337,  1242 => 336,  1233 => 335,  1223 => 332,  1221 => 331,  1212 => 330,  1202 => 327,  1200 => 326,  1191 => 325,  1181 => 322,  1179 => 321,  1170 => 320,  1160 => 317,  1158 => 316,  1152 => 315,  1143 => 314,  1128 => 308,  1123 => 306,  1119 => 304,  1105 => 295,  1099 => 294,  1088 => 286,  1083 => 283,  1080 => 282,  1078 => 281,  1072 => 279,  1063 => 278,  1053 => 275,  1047 => 273,  1045 => 272,  1043 => 270,  1036 => 265,  1030 => 264,  1026 => 262,  1024 => 261,  1022 => 259,  1020 => 258,  1012 => 257,  1010 => 256,  1001 => 255,  989 => 249,  987 => 248,  985 => 247,  970 => 246,  967 => 245,  964 => 244,  961 => 243,  958 => 242,  955 => 241,  952 => 240,  949 => 239,  946 => 238,  943 => 237,  940 => 236,  938 => 235,  929 => 234,  919 => 231,  910 => 230,  900 => 227,  891 => 226,  881 => 223,  879 => 222,  870 => 220,  860 => 217,  858 => 216,  849 => 215,  838 => 209,  836 => 208,  834 => 207,  831 => 205,  829 => 204,  827 => 203,  818 => 202,  807 => 198,  805 => 197,  803 => 196,  800 => 194,  798 => 193,  796 => 192,  787 => 191,  776 => 187,  770 => 184,  769 => 183,  768 => 182,  764 => 181,  760 => 180,  757 => 178,  751 => 175,  750 => 174,  749 => 173,  745 => 172,  743 => 171,  741 => 170,  732 => 169,  717 => 163,  712 => 161,  708 => 159,  695 => 149,  690 => 146,  687 => 145,  685 => 144,  683 => 143,  681 => 142,  672 => 141,  660 => 136,  657 => 135,  649 => 134,  644 => 132,  642 => 131,  640 => 130,  637 => 128,  635 => 127,  626 => 126,  614 => 121,  612 => 120,  610 => 118,  609 => 117,  608 => 116,  607 => 115,  602 => 113,  600 => 112,  598 => 111,  595 => 109,  593 => 108,  584 => 107,  573 => 103,  571 => 102,  569 => 101,  567 => 100,  565 => 99,  561 => 98,  559 => 97,  556 => 95,  554 => 94,  545 => 93,  534 => 89,  532 => 88,  530 => 87,  521 => 86,  511 => 83,  505 => 81,  503 => 80,  501 => 79,  495 => 77,  492 => 76,  490 => 75,  487 => 74,  478 => 73,  468 => 70,  466 => 69,  457 => 68,  447 => 65,  445 => 64,  436 => 63,  426 => 60,  423 => 58,  421 => 57,  412 => 56,  397 => 50,  392 => 48,  388 => 46,  375 => 36,  370 => 33,  367 => 32,  365 => 31,  363 => 29,  354 => 28,  342 => 23,  340 => 21,  334 => 18,  332 => 17,  329 => 16,  326 => 15,  324 => 13,  323 => 12,  322 => 11,  321 => 9,  320 => 8,  319 => 7,  317 => 5,  315 => 4,  306 => 3,  296 => 595,  293 => 593,  291 => 588,  288 => 586,  286 => 582,  283 => 581,  281 => 571,  278 => 569,  276 => 529,  273 => 528,  271 => 489,  268 => 487,  266 => 460,  263 => 459,  261 => 447,  258 => 446,  256 => 424,  253 => 423,  251 => 419,  248 => 418,  246 => 397,  243 => 396,  241 => 392,  238 => 391,  236 => 386,  234 => 373,  232 => 355,  229 => 353,  227 => 347,  224 => 346,  222 => 340,  219 => 339,  217 => 335,  214 => 334,  212 => 330,  209 => 329,  207 => 325,  204 => 324,  202 => 320,  199 => 319,  197 => 314,  194 => 313,  192 => 278,  189 => 277,  187 => 255,  184 => 254,  181 => 252,  179 => 234,  176 => 233,  174 => 230,  171 => 229,  169 => 226,  166 => 225,  164 => 220,  161 => 219,  159 => 215,  156 => 214,  153 => 212,  151 => 202,  148 => 201,  146 => 191,  143 => 190,  141 => 169,  138 => 168,  136 => 141,  133 => 140,  131 => 126,  128 => 125,  126 => 107,  123 => 106,  121 => 93,  118 => 92,  116 => 86,  113 => 85,  111 => 73,  108 => 72,  106 => 68,  103 => 67,  101 => 63,  98 => 62,  96 => 56,  93 => 55,  91 => 28,  88 => 27,  85 => 25,  83 => 3,  80 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use 'form_div_layout.html.twig' %}

{% block form_start -%}
    {% if 'easyadmin' == block_prefixes|slice(-2)|first %}
        {% set attr = attr|merge({
            'class': [
                _easyadmin_form_type|default('') == 'horizontal' ? 'form-horizontal' : 'form-vertical',
                attr.class|default(''),
                easyadmin.view ~ '-form'
            ]|join(' '),
            'data-view': easyadmin.view,
            'data-entity': easyadmin.entity.name,
            'data-entity-id': attribute(value, easyadmin.entity.primary_key_field_name),
        }) %}
    {% endif %}

    {% if form.vars.errors|length > 0 %}
        {{ form_errors(form) }}
    {% endif %}

    {{- parent() -}}

    <input type=\"hidden\" name=\"referer\" value=\"{{ app.request.query.get('referer', '') }}\"/>
{%- endblock form_start %}

{# Widgets #}

{% block form_widget %}
    {{- parent() -}}

    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#{{ id }}').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        {% endset %}

        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"{{ remove_item_javascript|raw }}\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{% endblock form_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#{{ id }}').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        {% endset %}

        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"{{ remove_item_javascript|raw }}\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        <div class=\"control-group\">
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
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
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do no display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {% set label = name|humanize %}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw -}}
            {{- label is not same as(false) ? label|trans({}, translation_domain ?: easyadmin.entity.translation_domain) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {% set _field_type = easyadmin.field.fieldType|default('default') %}
    <div class=\"form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}

        {% if _field_type in ['datetime', 'datetime_immutable', 'date', 'date_immutable', 'time', 'time_immutable', 'birthday'] and easyadmin.field.nullable|default(false) %}
            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                    {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                </label>
            </div>
        {% endif %}

        {{- form_errors(form) -}}

        {% if easyadmin.field.help|default('') != '' %}
            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ easyadmin.field.help|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>
        {% endif %}
    </div>
{%- endblock form_row %}

{% block collection_row %}
    {{ block('form_row') }}

    {% if allow_add|default(false) %}
        {% set js_add_item %}
            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#{{ id }}');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_{{ name }}___name__/g, '_{{ name }}_' + numItems)
                    .replace(/{{ name }}\\]\\[__name__\\]/g, '{{ name }}][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        {% endset %}

        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"{{ js_add_item|raw }}\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                {{ (form|length == 0 ? 'action.add_new_item' : 'action.add_another_item')|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{% endblock collection_row %}

{% block button_row -%}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }} {{ easyadmin.field.css_class|default('') }}\">
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
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}
{% block form_errors %}
    {% set error_count = errors|length %}
    {% if error_count >= 1 %}
        <div class=\"error-block\">
            <span class=\"label label-danger\">{{ 'errors'|transchoice(error_count, {}, 'EasyAdminBundle') }}</span>
            {% if error_count == 1 %}
                {{ errors|first.message }}
            {% else %}
                <ul>
                    {% for error in errors %}
                        <li>{{ error.message }}</li>
                    {% endfor %}
                </ul>
            {% endif %}
        </div>
    {% endif %}
{% endblock form_errors %}

{%- block form_widget_compound -%}
    {# the \"is iterable\" check is needed because if an object implements __toString() and
       returns an empty string, \"is empty\" returns true even if it's not a collection #}
    {% if value is iterable and value is empty %}
        {{ block('empty_collection') }}
    {% endif %}
    {% if value is iterable and value is empty or form.vars.prototype is defined %}
        {% set attr = attr|merge({'data-empty-collection': block('empty_collection') }) %}
    {% endif %}

    {{ parent() }}
{%- endblock form_widget_compound -%}

{% block empty_collection %}
    <div class=\"empty collection-empty\">
        {{ include(easyadmin.entity.templates.label_empty) }}
    </div>
{% endblock empty_collection %}

{% block vich_file_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"easyadmin-vich-file\">
        {% if download_uri|default('') is not empty %}
            {% set download_title = download_uri|split('/')|last ?: 'download'|trans({}, 'VichUploaderBundle') %}
            <a href=\"{{ asset(download_uri) }}\">{{ download_title }}</a>
        {% endif %}

        <div class=\"row\">
            {% if form.delete is defined %}
            <div class=\"col-sm-3 col-md-2\">
                {{ form_row(form.delete, { label: 'action.delete' }) }}
            </div>
            {% endif %}
            <div class=\"{{ form.delete is defined ? 'col-sm-9 col-md-10' : 'col-sm-12' }}\">
                {{ form_widget(form.file) }}
            </div>
        </div>
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"easyadmin-vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
            {{ form_row(form.delete, { label: 'action.delete' }) }}
        {% endif %}

        {% if download_uri|default('') is not empty %}
            {% set _lightbox_id = 'easyadmin-lightbox-' ~ id %}

            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#{{ _lightbox_id }}\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"{{ asset(download_uri) }}\">
            </a>

            <div id=\"{{ _lightbox_id }}\" class=\"easyadmin-lightbox\">
                <img src=\"{{ asset(download_uri) }}\">
            </div>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{% block easyadmin_rest %}
    {{- form_rest(form) -}}
    <div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">
                    {{- block('item_actions') -}}
                </div>
            </div>
        </div>
    </div>
{% endblock easyadmin_rest %}

{% block item_actions %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    {% set _trans_parameters = { '%entity_name%':  easyadmin.entity.name|trans, '%entity_label%': easyadmin.entity.label|trans } %}

    {# the 'save' action is hardcoded for the 'edit' and 'new' views #}
    <button type=\"submit\" class=\"btn btn-primary action-save\">
        <i class=\"fa fa-save\"></i> {{ 'action.save'|trans(_trans_parameters, _translation_domain) }}
    </button>

    {% set _entity_actions = (easyadmin.view == 'new')
        ? easyadmin_get_actions_for_new_item(easyadmin.entity.name)
        : easyadmin_get_actions_for_edit_item(easyadmin.entity.name) %}

    {% set _entity_id = (easyadmin.view == 'new')
        ? null
        : attribute(easyadmin.item, easyadmin.entity.primary_key_field_name) %}

    {% set _request_parameters = { entity: easyadmin.entity.name, referer: app.request.query.get('referer') } %}

    {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
        actions: _entity_actions,
        request_parameters: _request_parameters,
        translation_domain: _translation_domain,
        trans_parameters: _trans_parameters,
        item_id: _entity_id
    }, with_context = false) }}
{% endblock item_actions %}

{# EasyAdmin form type #}
{% block easyadmin_widget %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    <div class=\"row\">
        {% if easyadmin_form_tabs | length > 0 %}
            <div class=\"col-xs-12\">
                <div class=\"nav-tabs-custom\">
                    <ul class=\"nav nav-tabs\">
                        {% for tab_name, tab_config in easyadmin_form_tabs %}
                            <li class=\"{% if tab_config.active %}active{% endif %}\">
                                <a href=\"#{{ tab_config['id'] }}\" id=\"{{ tab_config['id'] }}-tab\" data-toggle=\"tab\">
                                    {% if tab_config.icon|default(false) %}
                                        <i class=\"fa fa-{{ tab_config.icon }}\"></i>
                                    {% endif %}
                                    {{ tab_config['label'] }}
                                    {% if tab_config.errors > 0 %}
                                        <span class=\"label label-danger\" title=\"{{ 'form.tab.error_badge_title'|transchoice(tab_config.errors, {}, 'EasyAdminBundle') }}\">
                                            {{ tab_config.errors }}
                                        </span>
                                    {% endif %}
                                </a>
                            </li>
                        {% endfor %}
                    </ul>
                    <div class=\"tab-content\">
                        {% for tab_name, tab_config in easyadmin_form_tabs %}
                            <div id=\"{{ tab_config['id'] }}\" class=\"tab-pane {% if tab_config.active %}active{% endif %}\">
                                <div class=\"row\">
                                    {{ block('easyadmin_widget_groups') }}
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        {% else %}
            {{ block('easyadmin_widget_groups') }}
        {% endif %}
    </div>
{% endblock easyadmin_widget %}

{% block easyadmin_widget_groups %}
    {% for group_name, group_config in easyadmin_form_groups if not group_config.form_tab or group_config.form_tab == tab_name %}
        <div class=\"field-group col-xs-12 {{ group_config.css_class|default('') }}\">
            <div class=\"box box-default\">
                {% if group_config.label|default(false) or group_config.icon|default(false) %}
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">
                            {% if group_config.icon|default(false) %}
                                <i class=\"fa fa-{{ group_config.icon }}\"></i>
                            {% endif %}
                            {{ group_config.label|trans(domain = _translation_domain)|raw }}
                        </h3>
                    </div>
                {% endif %}

                <div class=\"box-body\">
                    {% if group_config.help|default(false) %}
                        <p class=\"help-block\">{{ group_config.help|trans(domain = _translation_domain)|nl2br|raw }}</p>
                    {% endif %}

                    <div class=\"row\">
                        {% for field in form if 'hidden' not in field.vars.block_prefixes and field.vars.easyadmin.form_group == group_name %}
                            {% if not field.vars.easyadmin.form_tab or field.vars.easyadmin.form_tab == tab_name %}
                                <div class=\"col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}\">
                                    {{ form_row(field) }}
                                </div>
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    {% else %}
        {% for field in form if 'hidden' not in field.vars.block_prefixes and (not field.vars.easyadmin.form_tab or field.vars.easyadmin.form_tab == tab_name) %}
            <div class=\"col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}\">
                {{ form_row(field) }}
            </div>
        {% endfor %}
    {% endfor %}
{% endblock easyadmin_widget_groups %}

{# EasyAdminAutocomplete form type #}
{% block easyadmin_autocomplete_widget %}
    {{ form_widget(form.autocomplete, {
        attr: attr|merge({
            'data-easyadmin-autocomplete-url' : path('easyadmin', {
                action: 'autocomplete',
                entity: autocomplete_entity_name,
            })|raw })
        })
    }}
{% endblock easyadmin_autocomplete_widget %}

{% block easyadmin_autocomplete_inner_label %}
    {% set name = form.parent.vars.name %}
    {{- block('form_label') -}}
{% endblock easyadmin_autocomplete_inner_label %}

{# EasyAdminDivider form type #}
{% block easyadmin_divider_row %}
    <div class=\"field-divider\">
        <hr>
    </div>
{% endblock easyadmin_divider_row %}

{# EasyAdminSection form type #}
{% block easyadmin_section_row %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    <div class=\"field-section {{ easyadmin.field.css_class|default('') }}\">
        {% if easyadmin.field.label|default(false) or easyadmin.field.icon|default(false) %}
            <h2>
                {% if easyadmin.field.icon|default(false) %}<i class=\"fa fa-{{ easyadmin.field.icon }}\"></i>{% endif %}
                {{ easyadmin.field.label|default('')|trans(domain = _translation_domain)|raw }}
            </h2>
        {% endif %}

        {% if easyadmin.field.help|default(false) %}
            <p class=\"help-block\">{{ easyadmin.field.help|trans(domain = _translation_domain)|nl2br|raw }}</p>
        {% endif %}
    </div>
{% endblock easyadmin_section_row %}
", "@EasyAdmin/form/bootstrap_3_layout.html.twig", "D:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\form\\bootstrap_3_layout.html.twig");
    }
}
