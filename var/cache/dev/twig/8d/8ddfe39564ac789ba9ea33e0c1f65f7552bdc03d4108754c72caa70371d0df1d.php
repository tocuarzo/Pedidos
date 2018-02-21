<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_e0f4b6285587c8374d744b22e1c98f1936ba14509503e076fb98fbad84a4a5a1 extends Twig_Template
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
        $__internal_366da6063d834af7abec72aa577328b032ee1a077f1bd19b8248e7b19ec69e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_366da6063d834af7abec72aa577328b032ee1a077f1bd19b8248e7b19ec69e82->enter($__internal_366da6063d834af7abec72aa577328b032ee1a077f1bd19b8248e7b19ec69e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_a68f0bc1309bca3e9ed264317225e89d2bcfa4d6d8b24cd9b4262008dc2a1935 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a68f0bc1309bca3e9ed264317225e89d2bcfa4d6d8b24cd9b4262008dc2a1935->enter($__internal_a68f0bc1309bca3e9ed264317225e89d2bcfa4d6d8b24cd9b4262008dc2a1935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_366da6063d834af7abec72aa577328b032ee1a077f1bd19b8248e7b19ec69e82->leave($__internal_366da6063d834af7abec72aa577328b032ee1a077f1bd19b8248e7b19ec69e82_prof);

        
        $__internal_a68f0bc1309bca3e9ed264317225e89d2bcfa4d6d8b24cd9b4262008dc2a1935->leave($__internal_a68f0bc1309bca3e9ed264317225e89d2bcfa4d6d8b24cd9b4262008dc2a1935_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\Pedidos\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
