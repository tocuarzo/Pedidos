<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_7979f1dba27ccbf8358a94812d0c3022ee882570c35c28c6a6ef02d8e1b9c5d3 extends Twig_Template
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
        $__internal_77d2a360a1660ee7349a01d303437559fc8f5c6dd05a6e8e487776cb75609bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d2a360a1660ee7349a01d303437559fc8f5c6dd05a6e8e487776cb75609bcd->enter($__internal_77d2a360a1660ee7349a01d303437559fc8f5c6dd05a6e8e487776cb75609bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_11247269f61f25c7ed3f07f5d7f976a671a40ac0083a66895a86034e86ba68f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11247269f61f25c7ed3f07f5d7f976a671a40ac0083a66895a86034e86ba68f6->enter($__internal_11247269f61f25c7ed3f07f5d7f976a671a40ac0083a66895a86034e86ba68f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_77d2a360a1660ee7349a01d303437559fc8f5c6dd05a6e8e487776cb75609bcd->leave($__internal_77d2a360a1660ee7349a01d303437559fc8f5c6dd05a6e8e487776cb75609bcd_prof);

        
        $__internal_11247269f61f25c7ed3f07f5d7f976a671a40ac0083a66895a86034e86ba68f6->leave($__internal_11247269f61f25c7ed3f07f5d7f976a671a40ac0083a66895a86034e86ba68f6_prof);

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
