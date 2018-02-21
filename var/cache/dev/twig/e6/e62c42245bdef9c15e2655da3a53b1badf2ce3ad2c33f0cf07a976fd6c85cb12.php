<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_423b0c3d3e0668ad246afe77c7df74674827bec1cd1fe8e66b445c798dbdadb1 extends Twig_Template
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
        $__internal_9a6f4f01478690155f812cb6bb9dcc631cbd64c42d0178122b61ba51e73dadcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a6f4f01478690155f812cb6bb9dcc631cbd64c42d0178122b61ba51e73dadcd->enter($__internal_9a6f4f01478690155f812cb6bb9dcc631cbd64c42d0178122b61ba51e73dadcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_ab550b9b65ade023b5b7604e24dc3975ccef24add75c00a82ed5c357ea017100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab550b9b65ade023b5b7604e24dc3975ccef24add75c00a82ed5c357ea017100->enter($__internal_ab550b9b65ade023b5b7604e24dc3975ccef24add75c00a82ed5c357ea017100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_9a6f4f01478690155f812cb6bb9dcc631cbd64c42d0178122b61ba51e73dadcd->leave($__internal_9a6f4f01478690155f812cb6bb9dcc631cbd64c42d0178122b61ba51e73dadcd_prof);

        
        $__internal_ab550b9b65ade023b5b7604e24dc3975ccef24add75c00a82ed5c357ea017100->leave($__internal_ab550b9b65ade023b5b7604e24dc3975ccef24add75c00a82ed5c357ea017100_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "C:\\Pedidos\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
