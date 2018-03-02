<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_87f5bb6a73fa7c40b16c3d478a402ece713f3001bcff251fb0dce91e9d88d92d extends Twig_Template
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
        $__internal_02b683a2b204770f7c4b5037a3eebb07593cace28b2385adb26da1f4090b7c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02b683a2b204770f7c4b5037a3eebb07593cace28b2385adb26da1f4090b7c28->enter($__internal_02b683a2b204770f7c4b5037a3eebb07593cace28b2385adb26da1f4090b7c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_dae9d6eae46ad14d6c683b39f546e069dd3a0f666df42c72df2020d071cf28f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dae9d6eae46ad14d6c683b39f546e069dd3a0f666df42c72df2020d071cf28f9->enter($__internal_dae9d6eae46ad14d6c683b39f546e069dd3a0f666df42c72df2020d071cf28f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_02b683a2b204770f7c4b5037a3eebb07593cace28b2385adb26da1f4090b7c28->leave($__internal_02b683a2b204770f7c4b5037a3eebb07593cace28b2385adb26da1f4090b7c28_prof);

        
        $__internal_dae9d6eae46ad14d6c683b39f546e069dd3a0f666df42c72df2020d071cf28f9->leave($__internal_dae9d6eae46ad14d6c683b39f546e069dd3a0f666df42c72df2020d071cf28f9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\Pedidos\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
