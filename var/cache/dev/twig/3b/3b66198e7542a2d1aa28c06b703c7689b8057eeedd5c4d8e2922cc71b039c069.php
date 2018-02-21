<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_a1abaee665f965ba2cf3dd747639cdfdf7d55b66ecef5d62c3a8f6511865dab6 extends Twig_Template
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
        $__internal_88fe4ac1876030646ae93406321f8c7c50c111dc5d1755b0a48ff41b6f9e82f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88fe4ac1876030646ae93406321f8c7c50c111dc5d1755b0a48ff41b6f9e82f9->enter($__internal_88fe4ac1876030646ae93406321f8c7c50c111dc5d1755b0a48ff41b6f9e82f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_d353fc914f8976bbdb7339531b8e26fad44f27c474ba2fbee383791e93d0a53c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d353fc914f8976bbdb7339531b8e26fad44f27c474ba2fbee383791e93d0a53c->enter($__internal_d353fc914f8976bbdb7339531b8e26fad44f27c474ba2fbee383791e93d0a53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88fe4ac1876030646ae93406321f8c7c50c111dc5d1755b0a48ff41b6f9e82f9->leave($__internal_88fe4ac1876030646ae93406321f8c7c50c111dc5d1755b0a48ff41b6f9e82f9_prof);

        
        $__internal_d353fc914f8976bbdb7339531b8e26fad44f27c474ba2fbee383791e93d0a53c->leave($__internal_d353fc914f8976bbdb7339531b8e26fad44f27c474ba2fbee383791e93d0a53c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_862254dc473ff247778a9f192269dfdf07b5a9255e6d40569cb36c8fba1497b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_862254dc473ff247778a9f192269dfdf07b5a9255e6d40569cb36c8fba1497b4->enter($__internal_862254dc473ff247778a9f192269dfdf07b5a9255e6d40569cb36c8fba1497b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1738341fb2e22b3833de45ec690d9237fb5a89236c68b1fc21509204ee60f7d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1738341fb2e22b3833de45ec690d9237fb5a89236c68b1fc21509204ee60f7d0->enter($__internal_1738341fb2e22b3833de45ec690d9237fb5a89236c68b1fc21509204ee60f7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1738341fb2e22b3833de45ec690d9237fb5a89236c68b1fc21509204ee60f7d0->leave($__internal_1738341fb2e22b3833de45ec690d9237fb5a89236c68b1fc21509204ee60f7d0_prof);

        
        $__internal_862254dc473ff247778a9f192269dfdf07b5a9255e6d40569cb36c8fba1497b4->leave($__internal_862254dc473ff247778a9f192269dfdf07b5a9255e6d40569cb36c8fba1497b4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5efdb60211258f8162db4b3efabff7287f585deec5d4004f99315f8b173dec24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5efdb60211258f8162db4b3efabff7287f585deec5d4004f99315f8b173dec24->enter($__internal_5efdb60211258f8162db4b3efabff7287f585deec5d4004f99315f8b173dec24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ebcb1324e5f9b40204f9f08ea7655c4de80cd3d4ec78898b721db95b93b638a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebcb1324e5f9b40204f9f08ea7655c4de80cd3d4ec78898b721db95b93b638a6->enter($__internal_ebcb1324e5f9b40204f9f08ea7655c4de80cd3d4ec78898b721db95b93b638a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ebcb1324e5f9b40204f9f08ea7655c4de80cd3d4ec78898b721db95b93b638a6->leave($__internal_ebcb1324e5f9b40204f9f08ea7655c4de80cd3d4ec78898b721db95b93b638a6_prof);

        
        $__internal_5efdb60211258f8162db4b3efabff7287f585deec5d4004f99315f8b173dec24->leave($__internal_5efdb60211258f8162db4b3efabff7287f585deec5d4004f99315f8b173dec24_prof);

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
