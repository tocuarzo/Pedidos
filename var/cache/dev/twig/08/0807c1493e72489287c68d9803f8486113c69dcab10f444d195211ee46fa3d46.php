<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_956914280ad5833c0a38fdebffea3a15e7bdf7f657699fbbc8c3e59c2603b33b extends Twig_Template
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
        $__internal_a351b173148f34c6e4de6fa8c4bb9a066072605cfa26f2b28501324487a6f60a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a351b173148f34c6e4de6fa8c4bb9a066072605cfa26f2b28501324487a6f60a->enter($__internal_a351b173148f34c6e4de6fa8c4bb9a066072605cfa26f2b28501324487a6f60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_791b596fed02d49472441eeae416a490640d5249e394723ef58231787d24e969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_791b596fed02d49472441eeae416a490640d5249e394723ef58231787d24e969->enter($__internal_791b596fed02d49472441eeae416a490640d5249e394723ef58231787d24e969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_a351b173148f34c6e4de6fa8c4bb9a066072605cfa26f2b28501324487a6f60a->leave($__internal_a351b173148f34c6e4de6fa8c4bb9a066072605cfa26f2b28501324487a6f60a_prof);

        
        $__internal_791b596fed02d49472441eeae416a490640d5249e394723ef58231787d24e969->leave($__internal_791b596fed02d49472441eeae416a490640d5249e394723ef58231787d24e969_prof);

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
