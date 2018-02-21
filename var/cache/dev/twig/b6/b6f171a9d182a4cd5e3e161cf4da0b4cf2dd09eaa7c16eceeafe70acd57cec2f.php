<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_184290ad257716c7f848695fdecf64168a08ba7b06f95d7ca0373121278fc385 extends Twig_Template
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
        $__internal_d27bbeac5b140c1f2b5f2ebc0061b11c2cd7927dd9b8dca4a61927c318f431f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d27bbeac5b140c1f2b5f2ebc0061b11c2cd7927dd9b8dca4a61927c318f431f3->enter($__internal_d27bbeac5b140c1f2b5f2ebc0061b11c2cd7927dd9b8dca4a61927c318f431f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_e60d1abf978454f7fc57657cefcc792cca493c619edc0fd22a30971b7bec77cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e60d1abf978454f7fc57657cefcc792cca493c619edc0fd22a30971b7bec77cb->enter($__internal_e60d1abf978454f7fc57657cefcc792cca493c619edc0fd22a30971b7bec77cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_d27bbeac5b140c1f2b5f2ebc0061b11c2cd7927dd9b8dca4a61927c318f431f3->leave($__internal_d27bbeac5b140c1f2b5f2ebc0061b11c2cd7927dd9b8dca4a61927c318f431f3_prof);

        
        $__internal_e60d1abf978454f7fc57657cefcc792cca493c619edc0fd22a30971b7bec77cb->leave($__internal_e60d1abf978454f7fc57657cefcc792cca493c619edc0fd22a30971b7bec77cb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\Pedidos\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
