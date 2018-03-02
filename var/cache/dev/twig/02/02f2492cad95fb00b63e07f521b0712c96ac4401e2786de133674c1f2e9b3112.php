<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_922f456e0a342f4dac7080d37f1c0f86a37ef1bead37013dbb6e102c645248ed extends Twig_Template
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
        $__internal_30ce3ff8eb9f7a1f1d7e91e2601bffe2686034bfece806e55fea99a2b0480bdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30ce3ff8eb9f7a1f1d7e91e2601bffe2686034bfece806e55fea99a2b0480bdd->enter($__internal_30ce3ff8eb9f7a1f1d7e91e2601bffe2686034bfece806e55fea99a2b0480bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_f3f7acece8e358b8958be321a732f76a78facd806b6fe33a807ac7ae171ab4bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3f7acece8e358b8958be321a732f76a78facd806b6fe33a807ac7ae171ab4bc->enter($__internal_f3f7acece8e358b8958be321a732f76a78facd806b6fe33a807ac7ae171ab4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_30ce3ff8eb9f7a1f1d7e91e2601bffe2686034bfece806e55fea99a2b0480bdd->leave($__internal_30ce3ff8eb9f7a1f1d7e91e2601bffe2686034bfece806e55fea99a2b0480bdd_prof);

        
        $__internal_f3f7acece8e358b8958be321a732f76a78facd806b6fe33a807ac7ae171ab4bc->leave($__internal_f3f7acece8e358b8958be321a732f76a78facd806b6fe33a807ac7ae171ab4bc_prof);

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
