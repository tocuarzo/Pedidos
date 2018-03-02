<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_14955f3485f99a86baf87e449e721b503d33de50f35cfc99f4fe24241e309ffe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d845c2b705fae5c1f2c04f63314420fd8ee6d82a7d95b2be5e9865ea455addb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d845c2b705fae5c1f2c04f63314420fd8ee6d82a7d95b2be5e9865ea455addb->enter($__internal_5d845c2b705fae5c1f2c04f63314420fd8ee6d82a7d95b2be5e9865ea455addb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_8b004b4f5c32b106fa395309ba8222b35860943604d19052ffcc5313d58d79f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b004b4f5c32b106fa395309ba8222b35860943604d19052ffcc5313d58d79f9->enter($__internal_8b004b4f5c32b106fa395309ba8222b35860943604d19052ffcc5313d58d79f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_5d845c2b705fae5c1f2c04f63314420fd8ee6d82a7d95b2be5e9865ea455addb->leave($__internal_5d845c2b705fae5c1f2c04f63314420fd8ee6d82a7d95b2be5e9865ea455addb_prof);

        
        $__internal_8b004b4f5c32b106fa395309ba8222b35860943604d19052ffcc5313d58d79f9->leave($__internal_8b004b4f5c32b106fa395309ba8222b35860943604d19052ffcc5313d58d79f9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\Pedidos\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
