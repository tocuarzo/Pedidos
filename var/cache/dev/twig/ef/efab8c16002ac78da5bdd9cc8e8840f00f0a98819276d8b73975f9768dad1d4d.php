<?php

/* @EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_ae383f26285e4257347b8700951906f1d29954e94569e0ced490dc871b8c1a50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@EasyAdmin/form/bootstrap_3_layout.html.twig", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@EasyAdmin/form/bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
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
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a3a56f976c813b3a09a95dbbeb6e29962ec4ba2e44d3efd770e4ea5e7f8149e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a3a56f976c813b3a09a95dbbeb6e29962ec4ba2e44d3efd770e4ea5e7f8149e->enter($__internal_7a3a56f976c813b3a09a95dbbeb6e29962ec4ba2e44d3efd770e4ea5e7f8149e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig"));

        $__internal_d692c3351e537b1622505e0aea1d218dcbf6a1c82827e12d9d84b6b9b89a2db1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d692c3351e537b1622505e0aea1d218dcbf6a1c82827e12d9d84b6b9b89a2db1->enter($__internal_d692c3351e537b1622505e0aea1d218dcbf6a1c82827e12d9d84b6b9b89a2db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig"));

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
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('radio_row', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('submit_row', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('reset_row', $context, $blocks);
        // line 93
        echo "
";
        // line 94
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_7a3a56f976c813b3a09a95dbbeb6e29962ec4ba2e44d3efd770e4ea5e7f8149e->leave($__internal_7a3a56f976c813b3a09a95dbbeb6e29962ec4ba2e44d3efd770e4ea5e7f8149e_prof);

        
        $__internal_d692c3351e537b1622505e0aea1d218dcbf6a1c82827e12d9d84b6b9b89a2db1->leave($__internal_d692c3351e537b1622505e0aea1d218dcbf6a1c82827e12d9d84b6b9b89a2db1_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_de503dd54fba43b893ff2bfb30842c6a2178cf51082a8905113ec5e8794feb2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de503dd54fba43b893ff2bfb30842c6a2178cf51082a8905113ec5e8794feb2b->enter($__internal_de503dd54fba43b893ff2bfb30842c6a2178cf51082a8905113ec5e8794feb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_09c8cc6f48a8104ae1bd7ae71f18d05d5d5a428a8cdcfea52b30b892313c1e3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09c8cc6f48a8104ae1bd7ae71f18d05d5d5a428a8cdcfea52b30b892313c1e3b->enter($__internal_09c8cc6f48a8104ae1bd7ae71f18d05d5d5a428a8cdcfea52b30b892313c1e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["_easyadmin_form_type"] = "horizontal";
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_09c8cc6f48a8104ae1bd7ae71f18d05d5d5a428a8cdcfea52b30b892313c1e3b->leave($__internal_09c8cc6f48a8104ae1bd7ae71f18d05d5d5a428a8cdcfea52b30b892313c1e3b_prof);

        
        $__internal_de503dd54fba43b893ff2bfb30842c6a2178cf51082a8905113ec5e8794feb2b->leave($__internal_de503dd54fba43b893ff2bfb30842c6a2178cf51082a8905113ec5e8794feb2b_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_3cfe7055317d43d35de0208e8f411dd5ffe57b685a341d2703bfa23f4cc76063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cfe7055317d43d35de0208e8f411dd5ffe57b685a341d2703bfa23f4cc76063->enter($__internal_3cfe7055317d43d35de0208e8f411dd5ffe57b685a341d2703bfa23f4cc76063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_108a4aa79678a86355d7d5ee287f54d5640b2e0e019d9ac8c8c86f3da1613b72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_108a4aa79678a86355d7d5ee287f54d5640b2e0e019d9ac8c8c86f3da1613b72->enter($__internal_108a4aa79678a86355d7d5ee287f54d5640b2e0e019d9ac8c8c86f3da1613b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 12, $this->getSourceContext()); })()) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 15, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_108a4aa79678a86355d7d5ee287f54d5640b2e0e019d9ac8c8c86f3da1613b72->leave($__internal_108a4aa79678a86355d7d5ee287f54d5640b2e0e019d9ac8c8c86f3da1613b72_prof);

        
        $__internal_3cfe7055317d43d35de0208e8f411dd5ffe57b685a341d2703bfa23f4cc76063->leave($__internal_3cfe7055317d43d35de0208e8f411dd5ffe57b685a341d2703bfa23f4cc76063_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_0906398c0e4302d242b097c668f7908db41d3b2c5b2912180bbbbc072895e0f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0906398c0e4302d242b097c668f7908db41d3b2c5b2912180bbbbc072895e0f9->enter($__internal_0906398c0e4302d242b097c668f7908db41d3b2c5b2912180bbbbc072895e0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_d48dd5883b1b3b661894663548cd0c70b8ec0d01e37feafda0e062c5fb0e3197 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d48dd5883b1b3b661894663548cd0c70b8ec0d01e37feafda0e062c5fb0e3197->enter($__internal_d48dd5883b1b3b661894663548cd0c70b8ec0d01e37feafda0e062c5fb0e3197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        echo "col-sm-2";
        
        $__internal_d48dd5883b1b3b661894663548cd0c70b8ec0d01e37feafda0e062c5fb0e3197->leave($__internal_d48dd5883b1b3b661894663548cd0c70b8ec0d01e37feafda0e062c5fb0e3197_prof);

        
        $__internal_0906398c0e4302d242b097c668f7908db41d3b2c5b2912180bbbbc072895e0f9->leave($__internal_0906398c0e4302d242b097c668f7908db41d3b2c5b2912180bbbbc072895e0f9_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_4671020b54c841a5bbe6eb7334e1f3d504915f4fdfc46ae1fc087230d0673a0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4671020b54c841a5bbe6eb7334e1f3d504915f4fdfc46ae1fc087230d0673a0e->enter($__internal_4671020b54c841a5bbe6eb7334e1f3d504915f4fdfc46ae1fc087230d0673a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_39d5f44892b5121ea42376b1cc16782158dc03e37d9664faacf707c3d0390a04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39d5f44892b5121ea42376b1cc16782158dc03e37d9664faacf707c3d0390a04->enter($__internal_39d5f44892b5121ea42376b1cc16782158dc03e37d9664faacf707c3d0390a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        ob_start();
        // line 27
        echo "    ";
        $context["_field_type"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 28
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 28, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 28, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 28, $this->getSourceContext()); })()))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 28, $this->getSourceContext()); })()),  -2)), "html", null, true);
        echo "\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'label');
        echo "
        <div class=\"";
        // line 30
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'widget');
        echo "

            ";
        // line 33
        if ((twig_in_filter((isset($context["_field_type"]) || array_key_exists("_field_type", $context) ? $context["_field_type"] : (function () { throw new Twig_Error_Runtime('Variable "_field_type" does not exist.', 33, $this->getSourceContext()); })()), array(0 => "datetime", 1 => "datetime_immutable", 2 => "date", 3 => "date_immutable", 4 => "time", 5 => "time_immutable", 6 => "birthday")) && ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 34
            echo "                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" ";
            // line 36
            if ((null === (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 36, $this->getSourceContext()); })()))) {
                echo "checked=\"checked\"";
            }
            echo ">
                        ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                    </label>
                </div>
            ";
        }
        // line 41
        echo "
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'errors');
        echo "

            ";
        // line 44
        if ((((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 45
            echo "                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 45, $this->getSourceContext()); })()), "field", array()), "help", array()), array(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 45, $this->getSourceContext()); })()), "entity", array()), "translation_domain", array()));
            echo "</span>
            ";
        }
        // line 47
        echo "        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_39d5f44892b5121ea42376b1cc16782158dc03e37d9664faacf707c3d0390a04->leave($__internal_39d5f44892b5121ea42376b1cc16782158dc03e37d9664faacf707c3d0390a04_prof);

        
        $__internal_4671020b54c841a5bbe6eb7334e1f3d504915f4fdfc46ae1fc087230d0673a0e->leave($__internal_4671020b54c841a5bbe6eb7334e1f3d504915f4fdfc46ae1fc087230d0673a0e_prof);

    }

    // line 52
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_521a5804c85584051f38ba19d92379a6f56bbd9239e04fab4704b145b577629c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_521a5804c85584051f38ba19d92379a6f56bbd9239e04fab4704b145b577629c->enter($__internal_521a5804c85584051f38ba19d92379a6f56bbd9239e04fab4704b145b577629c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_cc12f102c7c99f0973fe194b0df0a5a713184ca4db759d0e5f923c00afc56051 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc12f102c7c99f0973fe194b0df0a5a713184ca4db759d0e5f923c00afc56051->enter($__internal_cc12f102c7c99f0973fe194b0df0a5a713184ca4db759d0e5f923c00afc56051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 53
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_cc12f102c7c99f0973fe194b0df0a5a713184ca4db759d0e5f923c00afc56051->leave($__internal_cc12f102c7c99f0973fe194b0df0a5a713184ca4db759d0e5f923c00afc56051_prof);

        
        $__internal_521a5804c85584051f38ba19d92379a6f56bbd9239e04fab4704b145b577629c->leave($__internal_521a5804c85584051f38ba19d92379a6f56bbd9239e04fab4704b145b577629c_prof);

    }

    // line 56
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_30161f4e0072089840266e14a092961ee3a20a7fd2c52fa1cce7a7e65ad27782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30161f4e0072089840266e14a092961ee3a20a7fd2c52fa1cce7a7e65ad27782->enter($__internal_30161f4e0072089840266e14a092961ee3a20a7fd2c52fa1cce7a7e65ad27782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_c348ba48fc8067627d3a2c15d405d1473538fe8713077c381a018a2ce4d093ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c348ba48fc8067627d3a2c15d405d1473538fe8713077c381a018a2ce4d093ce->enter($__internal_c348ba48fc8067627d3a2c15d405d1473538fe8713077c381a018a2ce4d093ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 57
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_c348ba48fc8067627d3a2c15d405d1473538fe8713077c381a018a2ce4d093ce->leave($__internal_c348ba48fc8067627d3a2c15d405d1473538fe8713077c381a018a2ce4d093ce_prof);

        
        $__internal_30161f4e0072089840266e14a092961ee3a20a7fd2c52fa1cce7a7e65ad27782->leave($__internal_30161f4e0072089840266e14a092961ee3a20a7fd2c52fa1cce7a7e65ad27782_prof);

    }

    // line 60
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_25f5f8e454edff99180535265574312e537076c8a38f5698bb506918e555d5ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25f5f8e454edff99180535265574312e537076c8a38f5698bb506918e555d5ae->enter($__internal_25f5f8e454edff99180535265574312e537076c8a38f5698bb506918e555d5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_c0cf7a7f652d885c1d447b6cd845feb732fb005de24f704feed82c2e4513527e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0cf7a7f652d885c1d447b6cd845feb732fb005de24f704feed82c2e4513527e->enter($__internal_c0cf7a7f652d885c1d447b6cd845feb732fb005de24f704feed82c2e4513527e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 61
        ob_start();
        // line 62
        echo "    <div class=\"form-group ";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 62, $this->getSourceContext()); })())) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 62, $this->getSourceContext()); })()),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 63
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 64
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->getSourceContext()); })()), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c0cf7a7f652d885c1d447b6cd845feb732fb005de24f704feed82c2e4513527e->leave($__internal_c0cf7a7f652d885c1d447b6cd845feb732fb005de24f704feed82c2e4513527e_prof);

        
        $__internal_25f5f8e454edff99180535265574312e537076c8a38f5698bb506918e555d5ae->leave($__internal_25f5f8e454edff99180535265574312e537076c8a38f5698bb506918e555d5ae_prof);

    }

    // line 72
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_18f390eb407b0bcd41e06043bc090d4bf21a802c662512c4342f69239d617e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f390eb407b0bcd41e06043bc090d4bf21a802c662512c4342f69239d617e17->enter($__internal_18f390eb407b0bcd41e06043bc090d4bf21a802c662512c4342f69239d617e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_8d3fccd761af972bc1513a430431f5e03d7d5e497385c67d94d3d21c51843d68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d3fccd761af972bc1513a430431f5e03d7d5e497385c67d94d3d21c51843d68->enter($__internal_8d3fccd761af972bc1513a430431f5e03d7d5e497385c67d94d3d21c51843d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 73
        ob_start();
        // line 74
        echo "    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 74, $this->getSourceContext()); })()),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 75
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 76
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 77, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8d3fccd761af972bc1513a430431f5e03d7d5e497385c67d94d3d21c51843d68->leave($__internal_8d3fccd761af972bc1513a430431f5e03d7d5e497385c67d94d3d21c51843d68_prof);

        
        $__internal_18f390eb407b0bcd41e06043bc090d4bf21a802c662512c4342f69239d617e17->leave($__internal_18f390eb407b0bcd41e06043bc090d4bf21a802c662512c4342f69239d617e17_prof);

    }

    // line 83
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_825e31d71fe26b6c7e428be46a03c30419cea39164168bf0bac378f571bb05b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_825e31d71fe26b6c7e428be46a03c30419cea39164168bf0bac378f571bb05b2->enter($__internal_825e31d71fe26b6c7e428be46a03c30419cea39164168bf0bac378f571bb05b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_447f263ff2be557e96950bee4cd4c4b7e0cc4d96e20df29dfc4e4dd035d6a4bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_447f263ff2be557e96950bee4cd4c4b7e0cc4d96e20df29dfc4e4dd035d6a4bf->enter($__internal_447f263ff2be557e96950bee4cd4c4b7e0cc4d96e20df29dfc4e4dd035d6a4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 84
        ob_start();
        // line 85
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 86
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 87
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_447f263ff2be557e96950bee4cd4c4b7e0cc4d96e20df29dfc4e4dd035d6a4bf->leave($__internal_447f263ff2be557e96950bee4cd4c4b7e0cc4d96e20df29dfc4e4dd035d6a4bf_prof);

        
        $__internal_825e31d71fe26b6c7e428be46a03c30419cea39164168bf0bac378f571bb05b2->leave($__internal_825e31d71fe26b6c7e428be46a03c30419cea39164168bf0bac378f571bb05b2_prof);

    }

    // line 94
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_e751b337c6a000677b9a81436ab467206e22ec92b1344873bcc1406862dd59a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e751b337c6a000677b9a81436ab467206e22ec92b1344873bcc1406862dd59a9->enter($__internal_e751b337c6a000677b9a81436ab467206e22ec92b1344873bcc1406862dd59a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_fdfbdc5061197c86c9aa23d0d6496b5998de56ee5765b84aa7a590e99beb9579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdfbdc5061197c86c9aa23d0d6496b5998de56ee5765b84aa7a590e99beb9579->enter($__internal_fdfbdc5061197c86c9aa23d0d6496b5998de56ee5765b84aa7a590e99beb9579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        echo "col-sm-10";
        
        $__internal_fdfbdc5061197c86c9aa23d0d6496b5998de56ee5765b84aa7a590e99beb9579->leave($__internal_fdfbdc5061197c86c9aa23d0d6496b5998de56ee5765b84aa7a590e99beb9579_prof);

        
        $__internal_e751b337c6a000677b9a81436ab467206e22ec92b1344873bcc1406862dd59a9->leave($__internal_e751b337c6a000677b9a81436ab467206e22ec92b1344873bcc1406862dd59a9_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  430 => 94,  415 => 88,  411 => 87,  407 => 86,  404 => 85,  402 => 84,  393 => 83,  378 => 77,  374 => 76,  370 => 75,  365 => 74,  363 => 73,  354 => 72,  339 => 66,  335 => 65,  331 => 64,  327 => 63,  318 => 62,  316 => 61,  307 => 60,  297 => 57,  288 => 56,  278 => 53,  269 => 52,  256 => 47,  250 => 45,  248 => 44,  243 => 42,  240 => 41,  233 => 37,  227 => 36,  223 => 34,  221 => 33,  216 => 31,  212 => 30,  208 => 29,  199 => 28,  196 => 27,  194 => 26,  185 => 25,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 94,  98 => 93,  96 => 83,  93 => 82,  91 => 72,  88 => 71,  86 => 60,  83 => 59,  81 => 56,  78 => 55,  76 => 52,  73 => 51,  71 => 25,  68 => 24,  65 => 22,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"@EasyAdmin/form/bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set _easyadmin_form_type = 'horizontal' %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class 'col-sm-2' %}

{# Rows #}

{% block form_row -%}
{% spaceless %}
    {% set _field_type = easyadmin.field.fieldType|default('default') %}
    <div class=\"form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{ form_label(form) }}
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}

            {% if _field_type in ['datetime', 'datetime_immutable', 'date', 'date_immutable', 'time', 'time_immutable', 'birthday'] and easyadmin.field.nullable|default(false) %}
                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                        {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                    </label>
                </div>
            {% endif %}

            {{ form_errors(form) }}

            {% if easyadmin.field.help|default('') != '' %}
                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ easyadmin.field.help|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>
            {% endif %}
        </div>
    </div>
{% endspaceless %}
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class 'col-sm-10' %}
", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig", "D:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
