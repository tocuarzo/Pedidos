<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6123888b12eaecafbbfee15bef5cf6fe9914c06c0fa201c4fc46bb25414f69ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ea93e7b8430d4ec322aece0d3b8e2c7012172fee8af506d2e82d718e4a9bc0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ea93e7b8430d4ec322aece0d3b8e2c7012172fee8af506d2e82d718e4a9bc0b->enter($__internal_5ea93e7b8430d4ec322aece0d3b8e2c7012172fee8af506d2e82d718e4a9bc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_0942297be312f89bfbd5a6dc33c8da09feb498ef6f42756c8abbf7fcdcf6aa1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0942297be312f89bfbd5a6dc33c8da09feb498ef6f42756c8abbf7fcdcf6aa1a->enter($__internal_0942297be312f89bfbd5a6dc33c8da09feb498ef6f42756c8abbf7fcdcf6aa1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ea93e7b8430d4ec322aece0d3b8e2c7012172fee8af506d2e82d718e4a9bc0b->leave($__internal_5ea93e7b8430d4ec322aece0d3b8e2c7012172fee8af506d2e82d718e4a9bc0b_prof);

        
        $__internal_0942297be312f89bfbd5a6dc33c8da09feb498ef6f42756c8abbf7fcdcf6aa1a->leave($__internal_0942297be312f89bfbd5a6dc33c8da09feb498ef6f42756c8abbf7fcdcf6aa1a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_da96a54e9ca3baf4b4e6be51e4647088a5ad1b4b9d00cf4217984cc530fefd2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da96a54e9ca3baf4b4e6be51e4647088a5ad1b4b9d00cf4217984cc530fefd2b->enter($__internal_da96a54e9ca3baf4b4e6be51e4647088a5ad1b4b9d00cf4217984cc530fefd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_aa728bb9dd8620fb22cf3fb8b5262ef5a2a592237f9b1402dd1a199563a2cb43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa728bb9dd8620fb22cf3fb8b5262ef5a2a592237f9b1402dd1a199563a2cb43->enter($__internal_aa728bb9dd8620fb22cf3fb8b5262ef5a2a592237f9b1402dd1a199563a2cb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_aa728bb9dd8620fb22cf3fb8b5262ef5a2a592237f9b1402dd1a199563a2cb43->leave($__internal_aa728bb9dd8620fb22cf3fb8b5262ef5a2a592237f9b1402dd1a199563a2cb43_prof);

        
        $__internal_da96a54e9ca3baf4b4e6be51e4647088a5ad1b4b9d00cf4217984cc530fefd2b->leave($__internal_da96a54e9ca3baf4b4e6be51e4647088a5ad1b4b9d00cf4217984cc530fefd2b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab679fe36e74d3127113898ae90d23b84e59aacbed2101f12a8a4b699ad39303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab679fe36e74d3127113898ae90d23b84e59aacbed2101f12a8a4b699ad39303->enter($__internal_ab679fe36e74d3127113898ae90d23b84e59aacbed2101f12a8a4b699ad39303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3d548d94e05a09c6c0c515dbf9ec49cf4f3c9a077a5697a3630aff845752cec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d548d94e05a09c6c0c515dbf9ec49cf4f3c9a077a5697a3630aff845752cec1->enter($__internal_3d548d94e05a09c6c0c515dbf9ec49cf4f3c9a077a5697a3630aff845752cec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_3d548d94e05a09c6c0c515dbf9ec49cf4f3c9a077a5697a3630aff845752cec1->leave($__internal_3d548d94e05a09c6c0c515dbf9ec49cf4f3c9a077a5697a3630aff845752cec1_prof);

        
        $__internal_ab679fe36e74d3127113898ae90d23b84e59aacbed2101f12a8a4b699ad39303->leave($__internal_ab679fe36e74d3127113898ae90d23b84e59aacbed2101f12a8a4b699ad39303_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e175414b7112b03d6a5f2962759c799b5eee8c3185f8dab2968bccfe349f47f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e175414b7112b03d6a5f2962759c799b5eee8c3185f8dab2968bccfe349f47f0->enter($__internal_e175414b7112b03d6a5f2962759c799b5eee8c3185f8dab2968bccfe349f47f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_865aee59cd88caf12885ec032a48acc87f69695fdbfbdaf91415904865809e2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_865aee59cd88caf12885ec032a48acc87f69695fdbfbdaf91415904865809e2a->enter($__internal_865aee59cd88caf12885ec032a48acc87f69695fdbfbdaf91415904865809e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_865aee59cd88caf12885ec032a48acc87f69695fdbfbdaf91415904865809e2a->leave($__internal_865aee59cd88caf12885ec032a48acc87f69695fdbfbdaf91415904865809e2a_prof);

        
        $__internal_e175414b7112b03d6a5f2962759c799b5eee8c3185f8dab2968bccfe349f47f0->leave($__internal_e175414b7112b03d6a5f2962759c799b5eee8c3185f8dab2968bccfe349f47f0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\Pedidos\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
