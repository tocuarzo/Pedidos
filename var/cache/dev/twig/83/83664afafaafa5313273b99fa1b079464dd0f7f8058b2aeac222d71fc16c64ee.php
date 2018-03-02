<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_4fdb7e544167e1b63fcba4540d95439a9c4c88e6da818f688a254b1bb1527b42 extends Twig_Template
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
        $__internal_5b7f845a3fa7083ab2d877ffaab22bb155b75dda88fe9722c92317bff3833ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b7f845a3fa7083ab2d877ffaab22bb155b75dda88fe9722c92317bff3833ff5->enter($__internal_5b7f845a3fa7083ab2d877ffaab22bb155b75dda88fe9722c92317bff3833ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_b00c4b0cc655dc5b4f676349700c5e1b645c8386b72f5c312af1f2d77e9f48f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b00c4b0cc655dc5b4f676349700c5e1b645c8386b72f5c312af1f2d77e9f48f5->enter($__internal_b00c4b0cc655dc5b4f676349700c5e1b645c8386b72f5c312af1f2d77e9f48f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_5b7f845a3fa7083ab2d877ffaab22bb155b75dda88fe9722c92317bff3833ff5->leave($__internal_5b7f845a3fa7083ab2d877ffaab22bb155b75dda88fe9722c92317bff3833ff5_prof);

        
        $__internal_b00c4b0cc655dc5b4f676349700c5e1b645c8386b72f5c312af1f2d77e9f48f5->leave($__internal_b00c4b0cc655dc5b4f676349700c5e1b645c8386b72f5c312af1f2d77e9f48f5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\Pedidos\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
