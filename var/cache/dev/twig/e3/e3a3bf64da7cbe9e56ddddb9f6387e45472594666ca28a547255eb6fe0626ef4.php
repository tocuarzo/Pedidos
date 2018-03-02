<?php

/* @EasyAdmin/default/show.html.twig */
class __TwigTemplate_b121590ef809233a8c44c721d71d6e6dfb31f60228e0c37abb9456bab632f695 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'show_fields' => array($this, 'block_show_fields'),
            'show_field' => array($this, 'block_show_field'),
            'item_actions' => array($this, 'block_item_actions'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 7, $this->getSourceContext()); })()), "templates", array()), "layout", array()), "@EasyAdmin/default/show.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6852bb4bf35e6b59d75f7897e8cd46783c4617110b3bfe7f19423332021d8fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6852bb4bf35e6b59d75f7897e8cd46783c4617110b3bfe7f19423332021d8fc->enter($__internal_d6852bb4bf35e6b59d75f7897e8cd46783c4617110b3bfe7f19423332021d8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/show.html.twig"));

        $__internal_b50ef904b59fdf26f3841b4ef9c8b0a91f4744d4d62ffd3e7abf9e9fd0ed1dee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b50ef904b59fdf26f3841b4ef9c8b0a91f4744d4d62ffd3e7abf9e9fd0ed1dee->enter($__internal_b50ef904b59fdf26f3841b4ef9c8b0a91f4744d4d62ffd3e7abf9e9fd0ed1dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/show.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $context["_entity_id"] = ("" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 3, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 3, $this->getSourceContext()); })()), "primary_key_field_name", array())));
        // line 4
        $context["__internal_7b3e098ca1b6dff381727b12d801550d170943f4283717b8049f7bc30fc04e1b"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 4, $this->getSourceContext()); })()), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "name", array()), array(),         // line 4
(isset($context["__internal_7b3e098ca1b6dff381727b12d801550d170943f4283717b8049f7bc30fc04e1b"]) || array_key_exists("__internal_7b3e098ca1b6dff381727b12d801550d170943f4283717b8049f7bc30fc04e1b", $context) ? $context["__internal_7b3e098ca1b6dff381727b12d801550d170943f4283717b8049f7bc30fc04e1b"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_7b3e098ca1b6dff381727b12d801550d170943f4283717b8049f7bc30fc04e1b" does not exist.', 4, $this->getSourceContext()); })())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(),         // line 5
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "label", array()), array(),         // line 4
(isset($context["__internal_7b3e098ca1b6dff381727b12d801550d170943f4283717b8049f7bc30fc04e1b"]) || array_key_exists("__internal_7b3e098ca1b6dff381727b12d801550d170943f4283717b8049f7bc30fc04e1b", $context) ? $context["__internal_7b3e098ca1b6dff381727b12d801550d170943f4283717b8049f7bc30fc04e1b"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_7b3e098ca1b6dff381727b12d801550d170943f4283717b8049f7bc30fc04e1b" does not exist.', 4, $this->getSourceContext()); })())), "%entity_id%" =>         // line 5
(isset($context["_entity_id"]) || array_key_exists("_entity_id", $context) ? $context["_entity_id"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_id" does not exist.', 5, $this->getSourceContext()); })()));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6852bb4bf35e6b59d75f7897e8cd46783c4617110b3bfe7f19423332021d8fc->leave($__internal_d6852bb4bf35e6b59d75f7897e8cd46783c4617110b3bfe7f19423332021d8fc_prof);

        
        $__internal_b50ef904b59fdf26f3841b4ef9c8b0a91f4744d4d62ffd3e7abf9e9fd0ed1dee->leave($__internal_b50ef904b59fdf26f3841b4ef9c8b0a91f4744d4d62ffd3e7abf9e9fd0ed1dee_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_0b97b8eb931e12ee2a0cf8412b6fa3a5665e00b77787079db21c17a7c0521e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b97b8eb931e12ee2a0cf8412b6fa3a5665e00b77787079db21c17a7c0521e77->enter($__internal_0b97b8eb931e12ee2a0cf8412b6fa3a5665e00b77787079db21c17a7c0521e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_850f08bb46dd9fd7750260c1ed0ffe6e09b66c8925797ef10bafbe057da06e9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_850f08bb46dd9fd7750260c1ed0ffe6e09b66c8925797ef10bafbe057da06e9d->enter($__internal_850f08bb46dd9fd7750260c1ed0ffe6e09b66c8925797ef10bafbe057da06e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-show-" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 9, $this->getSourceContext()); })()), "name", array())) . "-") . (isset($context["_entity_id"]) || array_key_exists("_entity_id", $context) ? $context["_entity_id"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_id" does not exist.', 9, $this->getSourceContext()); })())), "html", null, true);
        
        $__internal_850f08bb46dd9fd7750260c1ed0ffe6e09b66c8925797ef10bafbe057da06e9d->leave($__internal_850f08bb46dd9fd7750260c1ed0ffe6e09b66c8925797ef10bafbe057da06e9d_prof);

        
        $__internal_0b97b8eb931e12ee2a0cf8412b6fa3a5665e00b77787079db21c17a7c0521e77->leave($__internal_0b97b8eb931e12ee2a0cf8412b6fa3a5665e00b77787079db21c17a7c0521e77_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_b9af39a722c9ae4019e27c76291c9b9592852bb53efd91f43b87b667811e5120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9af39a722c9ae4019e27c76291c9b9592852bb53efd91f43b87b667811e5120->enter($__internal_b9af39a722c9ae4019e27c76291c9b9592852bb53efd91f43b87b667811e5120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_81a7443ea5fd94a0bae323be353c2321e5911e214b312a32edc7e78573dd6659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81a7443ea5fd94a0bae323be353c2321e5911e214b312a32edc7e78573dd6659->enter($__internal_81a7443ea5fd94a0bae323be353c2321e5911e214b312a32edc7e78573dd6659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 10, $this->getSourceContext()); })()), "name", array()))), "html", null, true);
        
        $__internal_81a7443ea5fd94a0bae323be353c2321e5911e214b312a32edc7e78573dd6659->leave($__internal_81a7443ea5fd94a0bae323be353c2321e5911e214b312a32edc7e78573dd6659_prof);

        
        $__internal_b9af39a722c9ae4019e27c76291c9b9592852bb53efd91f43b87b667811e5120->leave($__internal_b9af39a722c9ae4019e27c76291c9b9592852bb53efd91f43b87b667811e5120_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_921746092c0f9863bc912ec9dfb1ac8a027900455bdedcccac56a4fc26d61211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_921746092c0f9863bc912ec9dfb1ac8a027900455bdedcccac56a4fc26d61211->enter($__internal_921746092c0f9863bc912ec9dfb1ac8a027900455bdedcccac56a4fc26d61211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_f8a509153b8cf35056ece8f4c3c4785fb52358fe9c0c4614eb29bda982e9638e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8a509153b8cf35056ece8f4c3c4785fb52358fe9c0c4614eb29bda982e9638e->enter($__internal_f8a509153b8cf35056ece8f4c3c4785fb52358fe9c0c4614eb29bda982e9638e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show.page_title", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 14, $this->getSourceContext()); })()), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 15, $this->getSourceContext()); })()), "show", array()), "title", array()), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 15, $this->getSourceContext()); })()),         // line 4
(isset($context["__internal_7b3e098ca1b6dff381727b12d801550d170943f4283717b8049f7bc30fc04e1b"]) || array_key_exists("__internal_7b3e098ca1b6dff381727b12d801550d170943f4283717b8049f7bc30fc04e1b", $context) ? $context["__internal_7b3e098ca1b6dff381727b12d801550d170943f4283717b8049f7bc30fc04e1b"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_7b3e098ca1b6dff381727b12d801550d170943f4283717b8049f7bc30fc04e1b" does not exist.', 4, $this->getSourceContext()); })()))) : (        // line 15
(isset($context["_default_title"]) || array_key_exists("_default_title", $context) ? $context["_default_title"] : (function () { throw new Twig_Error_Runtime('Variable "_default_title" does not exist.', 15, $this->getSourceContext()); })()))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f8a509153b8cf35056ece8f4c3c4785fb52358fe9c0c4614eb29bda982e9638e->leave($__internal_f8a509153b8cf35056ece8f4c3c4785fb52358fe9c0c4614eb29bda982e9638e_prof);

        
        $__internal_921746092c0f9863bc912ec9dfb1ac8a027900455bdedcccac56a4fc26d61211->leave($__internal_921746092c0f9863bc912ec9dfb1ac8a027900455bdedcccac56a4fc26d61211_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_5ed08940d54a27a5ac484a469c0d18d12867c0d83aea66afbf3c5ee1972060ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ed08940d54a27a5ac484a469c0d18d12867c0d83aea66afbf3c5ee1972060ef->enter($__internal_5ed08940d54a27a5ac484a469c0d18d12867c0d83aea66afbf3c5ee1972060ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_b8ccf8cb0b1814a402cae9c918093511fd90262a1e65d35862d27819b2a2e078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8ccf8cb0b1814a402cae9c918093511fd90262a1e65d35862d27819b2a2e078->enter($__internal_b8ccf8cb0b1814a402cae9c918093511fd90262a1e65d35862d27819b2a2e078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    <div class=\"form-horizontal\">
        ";
        // line 21
        $this->displayBlock('show_fields', $context, $blocks);
        // line 41
        echo "
        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            ";
        // line 44
        $this->displayBlock('item_actions', $context, $blocks);
        // line 56
        echo "            </div>
        </div>
    </div>

    ";
        // line 60
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_b8ccf8cb0b1814a402cae9c918093511fd90262a1e65d35862d27819b2a2e078->leave($__internal_b8ccf8cb0b1814a402cae9c918093511fd90262a1e65d35862d27819b2a2e078_prof);

        
        $__internal_5ed08940d54a27a5ac484a469c0d18d12867c0d83aea66afbf3c5ee1972060ef->leave($__internal_5ed08940d54a27a5ac484a469c0d18d12867c0d83aea66afbf3c5ee1972060ef_prof);

    }

    // line 21
    public function block_show_fields($context, array $blocks = array())
    {
        $__internal_f6ded4c4e0518207cb957eee4b62c650cca788636458ef0406e1d78e07c4a385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6ded4c4e0518207cb957eee4b62c650cca788636458ef0406e1d78e07c4a385->enter($__internal_f6ded4c4e0518207cb957eee4b62c650cca788636458ef0406e1d78e07c4a385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_fields"));

        $__internal_48b8f4f1f40f3ce4ee75a204032c4103178f30837913ce32ed415f4b1506d62e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48b8f4f1f40f3ce4ee75a204032c4103178f30837913ce32ed415f4b1506d62e->enter($__internal_48b8f4f1f40f3ce4ee75a204032c4103178f30837913ce32ed415f4b1506d62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_fields"));

        // line 22
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new Twig_Error_Runtime('Variable "fields" does not exist.', 22, $this->getSourceContext()); })()));
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
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 23
            echo "                ";
            $this->displayBlock('show_field', $context, $blocks);
            // line 39
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        ";
        
        $__internal_48b8f4f1f40f3ce4ee75a204032c4103178f30837913ce32ed415f4b1506d62e->leave($__internal_48b8f4f1f40f3ce4ee75a204032c4103178f30837913ce32ed415f4b1506d62e_prof);

        
        $__internal_f6ded4c4e0518207cb957eee4b62c650cca788636458ef0406e1d78e07c4a385->leave($__internal_f6ded4c4e0518207cb957eee4b62c650cca788636458ef0406e1d78e07c4a385_prof);

    }

    // line 23
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_2c3b8bf296b2dadfa33ce798f8ccaacc9eb70120862e48d31d0008fec206effe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c3b8bf296b2dadfa33ce798f8ccaacc9eb70120862e48d31d0008fec206effe->enter($__internal_2c3b8bf296b2dadfa33ce798f8ccaacc9eb70120862e48d31d0008fec206effe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_d0dc9984e7f414cba6519716d547989d888dc596fcfa47067c40cd3229e6c182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0dc9984e7f414cba6519716d547989d888dc596fcfa47067c40cd3229e6c182->enter($__internal_d0dc9984e7f414cba6519716d547989d888dc596fcfa47067c40cd3229e6c182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 24
        echo "                    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["metadata"] ?? null), "type", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["metadata"] ?? null), "type", array()), "default")) : ("default"))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["metadata"] ?? null), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["metadata"] ?? null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
                        <label class=\"col-sm-2 control-label\">
                            ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 26, $this->getSourceContext()); })()), "label", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 26, $this->getSourceContext()); })()), "label", array())) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 26, $this->getSourceContext()); })())))), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 26, $this->getSourceContext()); })()),         // line 4
(isset($context["__internal_7b3e098ca1b6dff381727b12d801550d170943f4283717b8049f7bc30fc04e1b"]) || array_key_exists("__internal_7b3e098ca1b6dff381727b12d801550d170943f4283717b8049f7bc30fc04e1b", $context) ? $context["__internal_7b3e098ca1b6dff381727b12d801550d170943f4283717b8049f7bc30fc04e1b"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_7b3e098ca1b6dff381727b12d801550d170943f4283717b8049f7bc30fc04e1b" does not exist.', 4, $this->getSourceContext()); })()));
        // line 26
        echo "
                        </label>
                        <div class=\"col-sm-10\">
                            <div class=\"form-control\">
                                ";
        // line 30
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "show", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 30, $this->getSourceContext()); })()), "name", array()), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 30, $this->getSourceContext()); })()), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 30, $this->getSourceContext()); })()));
        echo "
                            </div>

                            ";
        // line 33
        if ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["metadata"] ?? null), "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["metadata"] ?? null), "help", array()), "")) : ("")) != "")) {
            // line 34
            echo "                                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 34, $this->getSourceContext()); })()), "help", array()), array(),             // line 4
(isset($context["__internal_7b3e098ca1b6dff381727b12d801550d170943f4283717b8049f7bc30fc04e1b"]) || array_key_exists("__internal_7b3e098ca1b6dff381727b12d801550d170943f4283717b8049f7bc30fc04e1b", $context) ? $context["__internal_7b3e098ca1b6dff381727b12d801550d170943f4283717b8049f7bc30fc04e1b"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_7b3e098ca1b6dff381727b12d801550d170943f4283717b8049f7bc30fc04e1b" does not exist.', 4, $this->getSourceContext()); })()));
            // line 34
            echo "</span>
                            ";
        }
        // line 36
        echo "                        </div>
                    </div>
                ";
        
        $__internal_d0dc9984e7f414cba6519716d547989d888dc596fcfa47067c40cd3229e6c182->leave($__internal_d0dc9984e7f414cba6519716d547989d888dc596fcfa47067c40cd3229e6c182_prof);

        
        $__internal_2c3b8bf296b2dadfa33ce798f8ccaacc9eb70120862e48d31d0008fec206effe->leave($__internal_2c3b8bf296b2dadfa33ce798f8ccaacc9eb70120862e48d31d0008fec206effe_prof);

    }

    // line 44
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_deeb768d0580fdf91e508eea105b97fc9f680e727c2c8edc0de4c4c058e94241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deeb768d0580fdf91e508eea105b97fc9f680e727c2c8edc0de4c4c058e94241->enter($__internal_deeb768d0580fdf91e508eea105b97fc9f680e727c2c8edc0de4c4c058e94241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_336f48d826194be3dd40463ae68052219ee7e6762c0d95ef8daa223f1a94fa3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_336f48d826194be3dd40463ae68052219ee7e6762c0d95ef8daa223f1a94fa3b->enter($__internal_336f48d826194be3dd40463ae68052219ee7e6762c0d95ef8daa223f1a94fa3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 45
        echo "                ";
        $context["_show_actions"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("show", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 45, $this->getSourceContext()); })()), "name", array()));
        // line 46
        echo "                ";
        $context["_request_parameters"] = array("entity" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 46, $this->getSourceContext()); })()), "name", array()), "referer" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 46, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 47
        echo "
                ";
        // line 48
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 49
(isset($context["_show_actions"]) || array_key_exists("_show_actions", $context) ? $context["_show_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_show_actions" does not exist.', 49, $this->getSourceContext()); })()), "request_parameters" =>         // line 50
(isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 50, $this->getSourceContext()); })()), "translation_domain" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 51
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 51, $this->getSourceContext()); })()), "translation_domain", array()), "trans_parameters" =>         // line 52
(isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 52, $this->getSourceContext()); })()), "item_id" =>         // line 53
(isset($context["_entity_id"]) || array_key_exists("_entity_id", $context) ? $context["_entity_id"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_id" does not exist.', 53, $this->getSourceContext()); })())), false);
        // line 54
        echo "
            ";
        
        $__internal_336f48d826194be3dd40463ae68052219ee7e6762c0d95ef8daa223f1a94fa3b->leave($__internal_336f48d826194be3dd40463ae68052219ee7e6762c0d95ef8daa223f1a94fa3b_prof);

        
        $__internal_deeb768d0580fdf91e508eea105b97fc9f680e727c2c8edc0de4c4c058e94241->leave($__internal_deeb768d0580fdf91e508eea105b97fc9f680e727c2c8edc0de4c4c058e94241_prof);

    }

    // line 60
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_1b98bade5319f1a2eb16d19417bef864b64bcac5dc09ddd7861000e7976065bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b98bade5319f1a2eb16d19417bef864b64bcac5dc09ddd7861000e7976065bf->enter($__internal_1b98bade5319f1a2eb16d19417bef864b64bcac5dc09ddd7861000e7976065bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_fb5ee6a9a42d1fb8ea4bfbbce120c071261e22886b286dbdb6c760b096c354b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb5ee6a9a42d1fb8ea4bfbbce120c071261e22886b286dbdb6c760b096c354b1->enter($__internal_fb5ee6a9a42d1fb8ea4bfbbce120c071261e22886b286dbdb6c760b096c354b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 61
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "show", "referer" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 63
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 63, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 64
(isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 64, $this->getSourceContext()); })()), "_translation_domain" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 65
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 65, $this->getSourceContext()); })()), "translation_domain", array()), "_trans_parameters" =>         // line 66
(isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 66, $this->getSourceContext()); })()), "_entity_config" =>         // line 67
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 67, $this->getSourceContext()); })())), false);
        // line 68
        echo "
    ";
        
        $__internal_fb5ee6a9a42d1fb8ea4bfbbce120c071261e22886b286dbdb6c760b096c354b1->leave($__internal_fb5ee6a9a42d1fb8ea4bfbbce120c071261e22886b286dbdb6c760b096c354b1_prof);

        
        $__internal_1b98bade5319f1a2eb16d19417bef864b64bcac5dc09ddd7861000e7976065bf->leave($__internal_1b98bade5319f1a2eb16d19417bef864b64bcac5dc09ddd7861000e7976065bf_prof);

    }

    // line 72
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_efea1f6dc5f0e58f15dbd4d290b962b6241f56a244ddff1c72bf85f8f61f4dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efea1f6dc5f0e58f15dbd4d290b962b6241f56a244ddff1c72bf85f8f61f4dd2->enter($__internal_efea1f6dc5f0e58f15dbd4d290b962b6241f56a244ddff1c72bf85f8f61f4dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_567880548696cd13bb8e51f359084c95e9c8f25ff835a42a309760962c7f0210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_567880548696cd13bb8e51f359084c95e9c8f25ff835a42a309760962c7f0210->enter($__internal_567880548696cd13bb8e51f359084c95e9c8f25ff835a42a309760962c7f0210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 73
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
";
        
        $__internal_567880548696cd13bb8e51f359084c95e9c8f25ff835a42a309760962c7f0210->leave($__internal_567880548696cd13bb8e51f359084c95e9c8f25ff835a42a309760962c7f0210_prof);

        
        $__internal_efea1f6dc5f0e58f15dbd4d290b962b6241f56a244ddff1c72bf85f8f61f4dd2->leave($__internal_efea1f6dc5f0e58f15dbd4d290b962b6241f56a244ddff1c72bf85f8f61f4dd2_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 73,  335 => 72,  324 => 68,  322 => 67,  321 => 66,  320 => 65,  319 => 64,  318 => 63,  316 => 61,  307 => 60,  296 => 54,  294 => 53,  293 => 52,  292 => 51,  291 => 50,  290 => 49,  289 => 48,  286 => 47,  283 => 46,  280 => 45,  271 => 44,  259 => 36,  255 => 34,  253 => 4,  251 => 34,  249 => 33,  243 => 30,  237 => 26,  235 => 4,  234 => 26,  226 => 24,  217 => 23,  207 => 40,  193 => 39,  190 => 23,  172 => 22,  163 => 21,  153 => 60,  147 => 56,  145 => 44,  140 => 41,  138 => 21,  135 => 20,  126 => 19,  113 => 15,  112 => 4,  110 => 15,  107 => 14,  105 => 13,  96 => 12,  78 => 10,  60 => 9,  50 => 7,  48 => 5,  47 => 4,  46 => 5,  45 => 4,  44 => 5,  42 => 4,  40 => 3,  38 => 1,  26 => 7,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}
{% set _entity_id = '' ~ attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-show-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'show show-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'show.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.show.title is defined ? _entity_config.show.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    <div class=\"form-horizontal\">
        {% block show_fields %}
            {% for field, metadata in fields %}
                {% block show_field %}
                    <div class=\"form-group field-{{ metadata.type|default('default')|lower }} {{ metadata.css_class|default('') }}\">
                        <label class=\"col-sm-2 control-label\">
                            {{ (metadata.label ?: field|humanize)|trans(_trans_parameters)|raw }}
                        </label>
                        <div class=\"col-sm-10\">
                            <div class=\"form-control\">
                                {{ easyadmin_render_field_for_show_view(_entity_config.name, entity, metadata) }}
                            </div>

                            {% if metadata.help|default('') != '' %}
                                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ metadata.help|trans|raw }}</span>
                            {% endif %}
                        </div>
                    </div>
                {% endblock %}
            {% endfor %}
        {% endblock %}

        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            {% block item_actions %}
                {% set _show_actions = easyadmin_get_actions_for_show_item(_entity_config.name) %}
                {% set _request_parameters = { entity: _entity_config.name, referer: app.request.query.get('referer') } %}

                {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                    actions: _show_actions,
                    request_parameters: _request_parameters,
                    translation_domain: _entity_config.translation_domain,
                    trans_parameters: _trans_parameters,
                    item_id: _entity_id
                }, with_context = false) }}
            {% endblock item_actions %}
            </div>
        </div>
    </div>

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'show',
            referer: app.request.query.get('referer', ''),
            delete_form: delete_form,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
{% endblock %}
", "@EasyAdmin/default/show.html.twig", "C:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\show.html.twig");
    }
}
