<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_6ba7aa2d4d0f58b308b107b7d41f1334452e20f194f1bf637511e029501b1881 extends Twig_Template
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
        $__internal_2d3a4d510bc8b6bbc42650cbab9b26eed0ed57ce52db19f74d0e81c2d87ad7a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d3a4d510bc8b6bbc42650cbab9b26eed0ed57ce52db19f74d0e81c2d87ad7a0->enter($__internal_2d3a4d510bc8b6bbc42650cbab9b26eed0ed57ce52db19f74d0e81c2d87ad7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_52a1cf1e266fef61c8396f4b9e98792fe450864710279e05b252fe20afd95bbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52a1cf1e266fef61c8396f4b9e98792fe450864710279e05b252fe20afd95bbc->enter($__internal_52a1cf1e266fef61c8396f4b9e98792fe450864710279e05b252fe20afd95bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_2d3a4d510bc8b6bbc42650cbab9b26eed0ed57ce52db19f74d0e81c2d87ad7a0->leave($__internal_2d3a4d510bc8b6bbc42650cbab9b26eed0ed57ce52db19f74d0e81c2d87ad7a0_prof);

        
        $__internal_52a1cf1e266fef61c8396f4b9e98792fe450864710279e05b252fe20afd95bbc->leave($__internal_52a1cf1e266fef61c8396f4b9e98792fe450864710279e05b252fe20afd95bbc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\Pedidos\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
