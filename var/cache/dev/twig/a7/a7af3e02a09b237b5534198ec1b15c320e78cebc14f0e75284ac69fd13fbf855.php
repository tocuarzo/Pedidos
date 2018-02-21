<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_114fb0bcf7b92274952223c84c4327e80ff3ea69b2115c5b10e89bf062f1f1cd extends Twig_Template
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
        $__internal_136ea6115c29dc652f292fd2c382c2b950fd97d63b2aec099eb86a62322e4639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_136ea6115c29dc652f292fd2c382c2b950fd97d63b2aec099eb86a62322e4639->enter($__internal_136ea6115c29dc652f292fd2c382c2b950fd97d63b2aec099eb86a62322e4639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_5018821973fb55fd896b0cd6d946437c8ba73826bab3e410752b3142bdabd685 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5018821973fb55fd896b0cd6d946437c8ba73826bab3e410752b3142bdabd685->enter($__internal_5018821973fb55fd896b0cd6d946437c8ba73826bab3e410752b3142bdabd685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_136ea6115c29dc652f292fd2c382c2b950fd97d63b2aec099eb86a62322e4639->leave($__internal_136ea6115c29dc652f292fd2c382c2b950fd97d63b2aec099eb86a62322e4639_prof);

        
        $__internal_5018821973fb55fd896b0cd6d946437c8ba73826bab3e410752b3142bdabd685->leave($__internal_5018821973fb55fd896b0cd6d946437c8ba73826bab3e410752b3142bdabd685_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\Pedidos\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
