<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_51f518961416efb858905ddc1592e140d44cab01270e4dd231b0621d536743cf extends Twig_Template
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
        $__internal_6b58027290b6ce3a9677359d0df3ae5b530c41dbe90a581f5bb49f9184d8e955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b58027290b6ce3a9677359d0df3ae5b530c41dbe90a581f5bb49f9184d8e955->enter($__internal_6b58027290b6ce3a9677359d0df3ae5b530c41dbe90a581f5bb49f9184d8e955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_0fc95ab355644fa74976275c9ab240dd9448001c88a03b8960321a54a1f8e328 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fc95ab355644fa74976275c9ab240dd9448001c88a03b8960321a54a1f8e328->enter($__internal_0fc95ab355644fa74976275c9ab240dd9448001c88a03b8960321a54a1f8e328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_6b58027290b6ce3a9677359d0df3ae5b530c41dbe90a581f5bb49f9184d8e955->leave($__internal_6b58027290b6ce3a9677359d0df3ae5b530c41dbe90a581f5bb49f9184d8e955_prof);

        
        $__internal_0fc95ab355644fa74976275c9ab240dd9448001c88a03b8960321a54a1f8e328->leave($__internal_0fc95ab355644fa74976275c9ab240dd9448001c88a03b8960321a54a1f8e328_prof);

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
