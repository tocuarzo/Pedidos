<?php

/* form_table_layout.html.twig */
class __TwigTemplate_93b899ec76ac28b5f605a81f3dac763eb6d520bd544150d3f9d7e853283faa8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63536f0a8df946122496224f4571634f0a451f8ad1b91682820261e6a52a2cd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63536f0a8df946122496224f4571634f0a451f8ad1b91682820261e6a52a2cd6->enter($__internal_63536f0a8df946122496224f4571634f0a451f8ad1b91682820261e6a52a2cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_d28eaae15d87fc4c4f2ebc69b8010ead7beacedf9ee7c4505fefff3100e29a43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d28eaae15d87fc4c4f2ebc69b8010ead7beacedf9ee7c4505fefff3100e29a43->enter($__internal_d28eaae15d87fc4c4f2ebc69b8010ead7beacedf9ee7c4505fefff3100e29a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_63536f0a8df946122496224f4571634f0a451f8ad1b91682820261e6a52a2cd6->leave($__internal_63536f0a8df946122496224f4571634f0a451f8ad1b91682820261e6a52a2cd6_prof);

        
        $__internal_d28eaae15d87fc4c4f2ebc69b8010ead7beacedf9ee7c4505fefff3100e29a43->leave($__internal_d28eaae15d87fc4c4f2ebc69b8010ead7beacedf9ee7c4505fefff3100e29a43_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e574331bcdf6e96c05430e2bc6569e5864aa64029e569d694d79838c3c70dbcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e574331bcdf6e96c05430e2bc6569e5864aa64029e569d694d79838c3c70dbcc->enter($__internal_e574331bcdf6e96c05430e2bc6569e5864aa64029e569d694d79838c3c70dbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_8a269f666e9180bb01083eaac277b4923de51f45605049fc972176970e6c970d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a269f666e9180bb01083eaac277b4923de51f45605049fc972176970e6c970d->enter($__internal_8a269f666e9180bb01083eaac277b4923de51f45605049fc972176970e6c970d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_8a269f666e9180bb01083eaac277b4923de51f45605049fc972176970e6c970d->leave($__internal_8a269f666e9180bb01083eaac277b4923de51f45605049fc972176970e6c970d_prof);

        
        $__internal_e574331bcdf6e96c05430e2bc6569e5864aa64029e569d694d79838c3c70dbcc->leave($__internal_e574331bcdf6e96c05430e2bc6569e5864aa64029e569d694d79838c3c70dbcc_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_57b146f5a234787f88a2517e6c246e400c7ecdfbc08906946c4a68016800c65e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b146f5a234787f88a2517e6c246e400c7ecdfbc08906946c4a68016800c65e->enter($__internal_57b146f5a234787f88a2517e6c246e400c7ecdfbc08906946c4a68016800c65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_34ae630c47a1fc463b80c6032d7de50594db54390cbda397448ca2c650b0d397 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34ae630c47a1fc463b80c6032d7de50594db54390cbda397448ca2c650b0d397->enter($__internal_34ae630c47a1fc463b80c6032d7de50594db54390cbda397448ca2c650b0d397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_34ae630c47a1fc463b80c6032d7de50594db54390cbda397448ca2c650b0d397->leave($__internal_34ae630c47a1fc463b80c6032d7de50594db54390cbda397448ca2c650b0d397_prof);

        
        $__internal_57b146f5a234787f88a2517e6c246e400c7ecdfbc08906946c4a68016800c65e->leave($__internal_57b146f5a234787f88a2517e6c246e400c7ecdfbc08906946c4a68016800c65e_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_52292c452fbb74efdf1704f4e8ba21d7c3344181ef1c5268a84ffe7eb13f3025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52292c452fbb74efdf1704f4e8ba21d7c3344181ef1c5268a84ffe7eb13f3025->enter($__internal_52292c452fbb74efdf1704f4e8ba21d7c3344181ef1c5268a84ffe7eb13f3025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_c12da20ac7249b628dede2e7fe1f53632b6470ae989a1fe1bc9a13b412195136 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c12da20ac7249b628dede2e7fe1f53632b6470ae989a1fe1bc9a13b412195136->enter($__internal_c12da20ac7249b628dede2e7fe1f53632b6470ae989a1fe1bc9a13b412195136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_c12da20ac7249b628dede2e7fe1f53632b6470ae989a1fe1bc9a13b412195136->leave($__internal_c12da20ac7249b628dede2e7fe1f53632b6470ae989a1fe1bc9a13b412195136_prof);

        
        $__internal_52292c452fbb74efdf1704f4e8ba21d7c3344181ef1c5268a84ffe7eb13f3025->leave($__internal_52292c452fbb74efdf1704f4e8ba21d7c3344181ef1c5268a84ffe7eb13f3025_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_6ba61feafd17e1edfd1699da62226f9fb71e57b17bd7c19df424053853d98fd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba61feafd17e1edfd1699da62226f9fb71e57b17bd7c19df424053853d98fd8->enter($__internal_6ba61feafd17e1edfd1699da62226f9fb71e57b17bd7c19df424053853d98fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_bf5534fc1887cbef85c255238dc3e6a8614074fe25c66a212ebf00fa488e2c58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf5534fc1887cbef85c255238dc3e6a8614074fe25c66a212ebf00fa488e2c58->enter($__internal_bf5534fc1887cbef85c255238dc3e6a8614074fe25c66a212ebf00fa488e2c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_bf5534fc1887cbef85c255238dc3e6a8614074fe25c66a212ebf00fa488e2c58->leave($__internal_bf5534fc1887cbef85c255238dc3e6a8614074fe25c66a212ebf00fa488e2c58_prof);

        
        $__internal_6ba61feafd17e1edfd1699da62226f9fb71e57b17bd7c19df424053853d98fd8->leave($__internal_6ba61feafd17e1edfd1699da62226f9fb71e57b17bd7c19df424053853d98fd8_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "C:\\Pedidos\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
