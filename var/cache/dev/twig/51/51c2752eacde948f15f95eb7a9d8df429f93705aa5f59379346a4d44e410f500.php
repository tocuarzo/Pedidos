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
        $__internal_b3783686c6ad9c48edea373bae54e15b6a36f3e680f72530f99ccc66ea79a88a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3783686c6ad9c48edea373bae54e15b6a36f3e680f72530f99ccc66ea79a88a->enter($__internal_b3783686c6ad9c48edea373bae54e15b6a36f3e680f72530f99ccc66ea79a88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_b08307d3ab4ba0ff25da8d802a6b3ab44bc2e6768fbc339db0bf9f091ddb6f73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b08307d3ab4ba0ff25da8d802a6b3ab44bc2e6768fbc339db0bf9f091ddb6f73->enter($__internal_b08307d3ab4ba0ff25da8d802a6b3ab44bc2e6768fbc339db0bf9f091ddb6f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_b3783686c6ad9c48edea373bae54e15b6a36f3e680f72530f99ccc66ea79a88a->leave($__internal_b3783686c6ad9c48edea373bae54e15b6a36f3e680f72530f99ccc66ea79a88a_prof);

        
        $__internal_b08307d3ab4ba0ff25da8d802a6b3ab44bc2e6768fbc339db0bf9f091ddb6f73->leave($__internal_b08307d3ab4ba0ff25da8d802a6b3ab44bc2e6768fbc339db0bf9f091ddb6f73_prof);

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
", "@WebProfiler/Profiler/header.html.twig", "D:\\Pedidos\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
