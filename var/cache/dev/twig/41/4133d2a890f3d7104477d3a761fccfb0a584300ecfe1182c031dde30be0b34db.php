<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_dd1a69a02760a5fe3cc91790d1f0a5c51eff6c2956935edf808418b7620f0cfc extends Twig_Template
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
        $__internal_f55c2a09f9b0cfc1fe6d0e83f2279f5c5f6b7b46f898639dbf17902cf1750097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f55c2a09f9b0cfc1fe6d0e83f2279f5c5f6b7b46f898639dbf17902cf1750097->enter($__internal_f55c2a09f9b0cfc1fe6d0e83f2279f5c5f6b7b46f898639dbf17902cf1750097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_39c75fa516ada5279071bfe382972ec48948bfe6e11a6500c43f20a6784725be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39c75fa516ada5279071bfe382972ec48948bfe6e11a6500c43f20a6784725be->enter($__internal_39c75fa516ada5279071bfe382972ec48948bfe6e11a6500c43f20a6784725be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_f55c2a09f9b0cfc1fe6d0e83f2279f5c5f6b7b46f898639dbf17902cf1750097->leave($__internal_f55c2a09f9b0cfc1fe6d0e83f2279f5c5f6b7b46f898639dbf17902cf1750097_prof);

        
        $__internal_39c75fa516ada5279071bfe382972ec48948bfe6e11a6500c43f20a6784725be->leave($__internal_39c75fa516ada5279071bfe382972ec48948bfe6e11a6500c43f20a6784725be_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\Pedidos\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
