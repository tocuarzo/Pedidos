<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_fa943a2343ff7571a137e9fe3e878c655e0331a18d4a1351e6d7091b07cf8879 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_0fcd155db6e9ba353ec74a595c1631fc514c11de253da471dc5c25cf5a5ca513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fcd155db6e9ba353ec74a595c1631fc514c11de253da471dc5c25cf5a5ca513->enter($__internal_0fcd155db6e9ba353ec74a595c1631fc514c11de253da471dc5c25cf5a5ca513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_4f73ae6af4d83d70357a485b86a78f1738e5e7d6f0c3ea4eae7bda0ceb100b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f73ae6af4d83d70357a485b86a78f1738e5e7d6f0c3ea4eae7bda0ceb100b34->enter($__internal_4f73ae6af4d83d70357a485b86a78f1738e5e7d6f0c3ea4eae7bda0ceb100b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fcd155db6e9ba353ec74a595c1631fc514c11de253da471dc5c25cf5a5ca513->leave($__internal_0fcd155db6e9ba353ec74a595c1631fc514c11de253da471dc5c25cf5a5ca513_prof);

        
        $__internal_4f73ae6af4d83d70357a485b86a78f1738e5e7d6f0c3ea4eae7bda0ceb100b34->leave($__internal_4f73ae6af4d83d70357a485b86a78f1738e5e7d6f0c3ea4eae7bda0ceb100b34_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4689767191fde386d4e56a7e915d7e6caf3b721c4b83b26467e143e4854321bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4689767191fde386d4e56a7e915d7e6caf3b721c4b83b26467e143e4854321bd->enter($__internal_4689767191fde386d4e56a7e915d7e6caf3b721c4b83b26467e143e4854321bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b3f3c7c0b7043b6c9e22b58117867f29c2bb1ded3c8d7aa19e8cdaf1912f628c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3f3c7c0b7043b6c9e22b58117867f29c2bb1ded3c8d7aa19e8cdaf1912f628c->enter($__internal_b3f3c7c0b7043b6c9e22b58117867f29c2bb1ded3c8d7aa19e8cdaf1912f628c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b3f3c7c0b7043b6c9e22b58117867f29c2bb1ded3c8d7aa19e8cdaf1912f628c->leave($__internal_b3f3c7c0b7043b6c9e22b58117867f29c2bb1ded3c8d7aa19e8cdaf1912f628c_prof);

        
        $__internal_4689767191fde386d4e56a7e915d7e6caf3b721c4b83b26467e143e4854321bd->leave($__internal_4689767191fde386d4e56a7e915d7e6caf3b721c4b83b26467e143e4854321bd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fb8bac75c43a298281ec11aab25643afc1777069b2319340ba628173fb9483c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb8bac75c43a298281ec11aab25643afc1777069b2319340ba628173fb9483c->enter($__internal_6fb8bac75c43a298281ec11aab25643afc1777069b2319340ba628173fb9483c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f38cd09fb872ac59f033fd12d060fe578a6d1ef3770d5b99434dd9a317e1caf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f38cd09fb872ac59f033fd12d060fe578a6d1ef3770d5b99434dd9a317e1caf->enter($__internal_0f38cd09fb872ac59f033fd12d060fe578a6d1ef3770d5b99434dd9a317e1caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_0f38cd09fb872ac59f033fd12d060fe578a6d1ef3770d5b99434dd9a317e1caf->leave($__internal_0f38cd09fb872ac59f033fd12d060fe578a6d1ef3770d5b99434dd9a317e1caf_prof);

        
        $__internal_6fb8bac75c43a298281ec11aab25643afc1777069b2319340ba628173fb9483c->leave($__internal_6fb8bac75c43a298281ec11aab25643afc1777069b2319340ba628173fb9483c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\Pedidos\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
