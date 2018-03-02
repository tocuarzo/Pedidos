<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_6d63ada9e30841a14bcea71008802044d2cad39905f10e5b88501a3e66658849 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d567f4c6bc31eace4e171deefcddc95a003960f7c7d285e3776a2b6c8711029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d567f4c6bc31eace4e171deefcddc95a003960f7c7d285e3776a2b6c8711029->enter($__internal_0d567f4c6bc31eace4e171deefcddc95a003960f7c7d285e3776a2b6c8711029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_06e4c35f8c67f9fc8ee94d3aaaf68b15e30304a00471ecc70295a8b517d35d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e4c35f8c67f9fc8ee94d3aaaf68b15e30304a00471ecc70295a8b517d35d44->enter($__internal_06e4c35f8c67f9fc8ee94d3aaaf68b15e30304a00471ecc70295a8b517d35d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d567f4c6bc31eace4e171deefcddc95a003960f7c7d285e3776a2b6c8711029->leave($__internal_0d567f4c6bc31eace4e171deefcddc95a003960f7c7d285e3776a2b6c8711029_prof);

        
        $__internal_06e4c35f8c67f9fc8ee94d3aaaf68b15e30304a00471ecc70295a8b517d35d44->leave($__internal_06e4c35f8c67f9fc8ee94d3aaaf68b15e30304a00471ecc70295a8b517d35d44_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_053f412377e6d82b74cebe348426891b270e7e83743ae91f0c66eab5214111cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_053f412377e6d82b74cebe348426891b270e7e83743ae91f0c66eab5214111cd->enter($__internal_053f412377e6d82b74cebe348426891b270e7e83743ae91f0c66eab5214111cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_99a7f4b01a7649d12d6b08da1bcf298430ec87a0c8e3553c9c0d7c0436e7b95e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99a7f4b01a7649d12d6b08da1bcf298430ec87a0c8e3553c9c0d7c0436e7b95e->enter($__internal_99a7f4b01a7649d12d6b08da1bcf298430ec87a0c8e3553c9c0d7c0436e7b95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_99a7f4b01a7649d12d6b08da1bcf298430ec87a0c8e3553c9c0d7c0436e7b95e->leave($__internal_99a7f4b01a7649d12d6b08da1bcf298430ec87a0c8e3553c9c0d7c0436e7b95e_prof);

        
        $__internal_053f412377e6d82b74cebe348426891b270e7e83743ae91f0c66eab5214111cd->leave($__internal_053f412377e6d82b74cebe348426891b270e7e83743ae91f0c66eab5214111cd_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7698f278b726f4c3b0e7f67f71993982601e1a85a779b4cf49a40c96b47956ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7698f278b726f4c3b0e7f67f71993982601e1a85a779b4cf49a40c96b47956ea->enter($__internal_7698f278b726f4c3b0e7f67f71993982601e1a85a779b4cf49a40c96b47956ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7610aa66105f2785ce1f235e643116e6e54555a76021eb9d774ac2c61f647ca8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7610aa66105f2785ce1f235e643116e6e54555a76021eb9d774ac2c61f647ca8->enter($__internal_7610aa66105f2785ce1f235e643116e6e54555a76021eb9d774ac2c61f647ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_7610aa66105f2785ce1f235e643116e6e54555a76021eb9d774ac2c61f647ca8->leave($__internal_7610aa66105f2785ce1f235e643116e6e54555a76021eb9d774ac2c61f647ca8_prof);

        
        $__internal_7698f278b726f4c3b0e7f67f71993982601e1a85a779b4cf49a40c96b47956ea->leave($__internal_7698f278b726f4c3b0e7f67f71993982601e1a85a779b4cf49a40c96b47956ea_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\Pedidos\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
