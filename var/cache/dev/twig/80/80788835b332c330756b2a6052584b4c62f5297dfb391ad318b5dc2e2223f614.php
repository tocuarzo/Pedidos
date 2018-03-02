<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_757583aa40fbee1fdb3937d9cc1f869732ba30f2bb40681b4b6d941814bdb598 extends Twig_Template
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
        $__internal_4b8e5be2d4526e45725224d3ef02127a85b012aeda2e54d618d42df480e1538c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8e5be2d4526e45725224d3ef02127a85b012aeda2e54d618d42df480e1538c->enter($__internal_4b8e5be2d4526e45725224d3ef02127a85b012aeda2e54d618d42df480e1538c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_ed50279aaa46674f48ecaa6b2ddc43e7e778e4fc131e180f3092b5b372515680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed50279aaa46674f48ecaa6b2ddc43e7e778e4fc131e180f3092b5b372515680->enter($__internal_ed50279aaa46674f48ecaa6b2ddc43e7e778e4fc131e180f3092b5b372515680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_4b8e5be2d4526e45725224d3ef02127a85b012aeda2e54d618d42df480e1538c->leave($__internal_4b8e5be2d4526e45725224d3ef02127a85b012aeda2e54d618d42df480e1538c_prof);

        
        $__internal_ed50279aaa46674f48ecaa6b2ddc43e7e778e4fc131e180f3092b5b372515680->leave($__internal_ed50279aaa46674f48ecaa6b2ddc43e7e778e4fc131e180f3092b5b372515680_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_0b7e3800e810a2ca60f727fbfc1b75453aba8cf1b06f8145ea1d34ba324dc812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b7e3800e810a2ca60f727fbfc1b75453aba8cf1b06f8145ea1d34ba324dc812->enter($__internal_0b7e3800e810a2ca60f727fbfc1b75453aba8cf1b06f8145ea1d34ba324dc812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_28417f2cdbe7bafc727cc508b7dd5268ad0a7c64a6073326aba380f0226e52ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28417f2cdbe7bafc727cc508b7dd5268ad0a7c64a6073326aba380f0226e52ad->enter($__internal_28417f2cdbe7bafc727cc508b7dd5268ad0a7c64a6073326aba380f0226e52ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_28417f2cdbe7bafc727cc508b7dd5268ad0a7c64a6073326aba380f0226e52ad->leave($__internal_28417f2cdbe7bafc727cc508b7dd5268ad0a7c64a6073326aba380f0226e52ad_prof);

        
        $__internal_0b7e3800e810a2ca60f727fbfc1b75453aba8cf1b06f8145ea1d34ba324dc812->leave($__internal_0b7e3800e810a2ca60f727fbfc1b75453aba8cf1b06f8145ea1d34ba324dc812_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_9dbe389833038a2a806ee8844d95bf3d945bac44613088fb65b37d57d4da6c00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dbe389833038a2a806ee8844d95bf3d945bac44613088fb65b37d57d4da6c00->enter($__internal_9dbe389833038a2a806ee8844d95bf3d945bac44613088fb65b37d57d4da6c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_06c334bcd6a6aaa5afca42ce0bb56ed55d468bb6482d174bf7e257a0a52e3937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06c334bcd6a6aaa5afca42ce0bb56ed55d468bb6482d174bf7e257a0a52e3937->enter($__internal_06c334bcd6a6aaa5afca42ce0bb56ed55d468bb6482d174bf7e257a0a52e3937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_06c334bcd6a6aaa5afca42ce0bb56ed55d468bb6482d174bf7e257a0a52e3937->leave($__internal_06c334bcd6a6aaa5afca42ce0bb56ed55d468bb6482d174bf7e257a0a52e3937_prof);

        
        $__internal_9dbe389833038a2a806ee8844d95bf3d945bac44613088fb65b37d57d4da6c00->leave($__internal_9dbe389833038a2a806ee8844d95bf3d945bac44613088fb65b37d57d4da6c00_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_cc38754d28656f49fe18239bb2bd62ca2ee661a11e18788166adcc3a5602c1a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc38754d28656f49fe18239bb2bd62ca2ee661a11e18788166adcc3a5602c1a8->enter($__internal_cc38754d28656f49fe18239bb2bd62ca2ee661a11e18788166adcc3a5602c1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_f39ee032072bbaa6631a68d2c5209739c6127afc0af2775920e9b95c4e1aaa54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f39ee032072bbaa6631a68d2c5209739c6127afc0af2775920e9b95c4e1aaa54->enter($__internal_f39ee032072bbaa6631a68d2c5209739c6127afc0af2775920e9b95c4e1aaa54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_f39ee032072bbaa6631a68d2c5209739c6127afc0af2775920e9b95c4e1aaa54->leave($__internal_f39ee032072bbaa6631a68d2c5209739c6127afc0af2775920e9b95c4e1aaa54_prof);

        
        $__internal_cc38754d28656f49fe18239bb2bd62ca2ee661a11e18788166adcc3a5602c1a8->leave($__internal_cc38754d28656f49fe18239bb2bd62ca2ee661a11e18788166adcc3a5602c1a8_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e87bd65989cf2907b5a2a17bdec42fc7b180f645bb3c7d778801b9c3cf33a8f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e87bd65989cf2907b5a2a17bdec42fc7b180f645bb3c7d778801b9c3cf33a8f0->enter($__internal_e87bd65989cf2907b5a2a17bdec42fc7b180f645bb3c7d778801b9c3cf33a8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_35bcdaf83069ae3289bd8a0fc2f3f4d894bad88427c9d92800817952caf098ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35bcdaf83069ae3289bd8a0fc2f3f4d894bad88427c9d92800817952caf098ed->enter($__internal_35bcdaf83069ae3289bd8a0fc2f3f4d894bad88427c9d92800817952caf098ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_35bcdaf83069ae3289bd8a0fc2f3f4d894bad88427c9d92800817952caf098ed->leave($__internal_35bcdaf83069ae3289bd8a0fc2f3f4d894bad88427c9d92800817952caf098ed_prof);

        
        $__internal_e87bd65989cf2907b5a2a17bdec42fc7b180f645bb3c7d778801b9c3cf33a8f0->leave($__internal_e87bd65989cf2907b5a2a17bdec42fc7b180f645bb3c7d778801b9c3cf33a8f0_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_ba4f32f5fdd1bedd64a60af7e027ff5c036e8feb2c745e8015b5dc6c5981ca76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba4f32f5fdd1bedd64a60af7e027ff5c036e8feb2c745e8015b5dc6c5981ca76->enter($__internal_ba4f32f5fdd1bedd64a60af7e027ff5c036e8feb2c745e8015b5dc6c5981ca76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_a251899d93eed8b2067fd6939780d859aa54710f5b1edf5b3145e0e47b04c7ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a251899d93eed8b2067fd6939780d859aa54710f5b1edf5b3145e0e47b04c7ad->enter($__internal_a251899d93eed8b2067fd6939780d859aa54710f5b1edf5b3145e0e47b04c7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_a251899d93eed8b2067fd6939780d859aa54710f5b1edf5b3145e0e47b04c7ad->leave($__internal_a251899d93eed8b2067fd6939780d859aa54710f5b1edf5b3145e0e47b04c7ad_prof);

        
        $__internal_ba4f32f5fdd1bedd64a60af7e027ff5c036e8feb2c745e8015b5dc6c5981ca76->leave($__internal_ba4f32f5fdd1bedd64a60af7e027ff5c036e8feb2c745e8015b5dc6c5981ca76_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_4b89ae05e4670ba4cf6f5b4bf5e3934e54d5e0e555de0426e16ba413f5526555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b89ae05e4670ba4cf6f5b4bf5e3934e54d5e0e555de0426e16ba413f5526555->enter($__internal_4b89ae05e4670ba4cf6f5b4bf5e3934e54d5e0e555de0426e16ba413f5526555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_dbbcee07e8833b87239350ad6afe4a09e663616b79b8dd464376f4467d7fb847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbbcee07e8833b87239350ad6afe4a09e663616b79b8dd464376f4467d7fb847->enter($__internal_dbbcee07e8833b87239350ad6afe4a09e663616b79b8dd464376f4467d7fb847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_dbbcee07e8833b87239350ad6afe4a09e663616b79b8dd464376f4467d7fb847->leave($__internal_dbbcee07e8833b87239350ad6afe4a09e663616b79b8dd464376f4467d7fb847_prof);

        
        $__internal_4b89ae05e4670ba4cf6f5b4bf5e3934e54d5e0e555de0426e16ba413f5526555->leave($__internal_4b89ae05e4670ba4cf6f5b4bf5e3934e54d5e0e555de0426e16ba413f5526555_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_c5c331680af9f81b9d3d404fe90576e0ff548edccee7bf47e18b537385fc1873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5c331680af9f81b9d3d404fe90576e0ff548edccee7bf47e18b537385fc1873->enter($__internal_c5c331680af9f81b9d3d404fe90576e0ff548edccee7bf47e18b537385fc1873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_3fa20850a8d45e7f747b0182cd353920997f6d350605685df23d99278ad04d58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fa20850a8d45e7f747b0182cd353920997f6d350605685df23d99278ad04d58->enter($__internal_3fa20850a8d45e7f747b0182cd353920997f6d350605685df23d99278ad04d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_3fa20850a8d45e7f747b0182cd353920997f6d350605685df23d99278ad04d58->leave($__internal_3fa20850a8d45e7f747b0182cd353920997f6d350605685df23d99278ad04d58_prof);

        
        $__internal_c5c331680af9f81b9d3d404fe90576e0ff548edccee7bf47e18b537385fc1873->leave($__internal_c5c331680af9f81b9d3d404fe90576e0ff548edccee7bf47e18b537385fc1873_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_1223e9923f56e3529f9529a31832a2d159ff5855c2ffbd2e31dddd561b9e26de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1223e9923f56e3529f9529a31832a2d159ff5855c2ffbd2e31dddd561b9e26de->enter($__internal_1223e9923f56e3529f9529a31832a2d159ff5855c2ffbd2e31dddd561b9e26de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_461a8a958e3b94a80ed801ccef9f77bd1420ce8efbc68e72d3b93fba0ab6955d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_461a8a958e3b94a80ed801ccef9f77bd1420ce8efbc68e72d3b93fba0ab6955d->enter($__internal_461a8a958e3b94a80ed801ccef9f77bd1420ce8efbc68e72d3b93fba0ab6955d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_461a8a958e3b94a80ed801ccef9f77bd1420ce8efbc68e72d3b93fba0ab6955d->leave($__internal_461a8a958e3b94a80ed801ccef9f77bd1420ce8efbc68e72d3b93fba0ab6955d_prof);

        
        $__internal_1223e9923f56e3529f9529a31832a2d159ff5855c2ffbd2e31dddd561b9e26de->leave($__internal_1223e9923f56e3529f9529a31832a2d159ff5855c2ffbd2e31dddd561b9e26de_prof);

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
