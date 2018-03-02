<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_463fcb2a31677875c0d15337b7d8220e5524509fc6148d5530568497a8a1fb24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_edfae6d1c19fe1ee2b06c78452bc19085915c6bcff2a81c20f2a0e93e4ab54a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edfae6d1c19fe1ee2b06c78452bc19085915c6bcff2a81c20f2a0e93e4ab54a2->enter($__internal_edfae6d1c19fe1ee2b06c78452bc19085915c6bcff2a81c20f2a0e93e4ab54a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_16fa949497f69b73b3b691643d95ebff179c5256fc6112db09bc2045d452beca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16fa949497f69b73b3b691643d95ebff179c5256fc6112db09bc2045d452beca->enter($__internal_16fa949497f69b73b3b691643d95ebff179c5256fc6112db09bc2045d452beca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edfae6d1c19fe1ee2b06c78452bc19085915c6bcff2a81c20f2a0e93e4ab54a2->leave($__internal_edfae6d1c19fe1ee2b06c78452bc19085915c6bcff2a81c20f2a0e93e4ab54a2_prof);

        
        $__internal_16fa949497f69b73b3b691643d95ebff179c5256fc6112db09bc2045d452beca->leave($__internal_16fa949497f69b73b3b691643d95ebff179c5256fc6112db09bc2045d452beca_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a8295f58df89338c6f93770eddf0f8afbf122554d5f71849a2099d544c4b3970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8295f58df89338c6f93770eddf0f8afbf122554d5f71849a2099d544c4b3970->enter($__internal_a8295f58df89338c6f93770eddf0f8afbf122554d5f71849a2099d544c4b3970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_11551c53122072fca7028ed67758f7ac7b285038f3b1a2e0e965f9347e2b3800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11551c53122072fca7028ed67758f7ac7b285038f3b1a2e0e965f9347e2b3800->enter($__internal_11551c53122072fca7028ed67758f7ac7b285038f3b1a2e0e965f9347e2b3800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_11551c53122072fca7028ed67758f7ac7b285038f3b1a2e0e965f9347e2b3800->leave($__internal_11551c53122072fca7028ed67758f7ac7b285038f3b1a2e0e965f9347e2b3800_prof);

        
        $__internal_a8295f58df89338c6f93770eddf0f8afbf122554d5f71849a2099d544c4b3970->leave($__internal_a8295f58df89338c6f93770eddf0f8afbf122554d5f71849a2099d544c4b3970_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c7f4e8896701865768db59c5631136ef2a2e628f7e0a5a73717e8aec7b8741a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f4e8896701865768db59c5631136ef2a2e628f7e0a5a73717e8aec7b8741a4->enter($__internal_c7f4e8896701865768db59c5631136ef2a2e628f7e0a5a73717e8aec7b8741a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3332d8e0669b182a0f171f716c2fed7f16419f325f825815d12ccfe766592550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3332d8e0669b182a0f171f716c2fed7f16419f325f825815d12ccfe766592550->enter($__internal_3332d8e0669b182a0f171f716c2fed7f16419f325f825815d12ccfe766592550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3332d8e0669b182a0f171f716c2fed7f16419f325f825815d12ccfe766592550->leave($__internal_3332d8e0669b182a0f171f716c2fed7f16419f325f825815d12ccfe766592550_prof);

        
        $__internal_c7f4e8896701865768db59c5631136ef2a2e628f7e0a5a73717e8aec7b8741a4->leave($__internal_c7f4e8896701865768db59c5631136ef2a2e628f7e0a5a73717e8aec7b8741a4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7414ff4377da1f69ec366c5ae3f5f4feab61c333d5971d932876c0f3ffa64a94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7414ff4377da1f69ec366c5ae3f5f4feab61c333d5971d932876c0f3ffa64a94->enter($__internal_7414ff4377da1f69ec366c5ae3f5f4feab61c333d5971d932876c0f3ffa64a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_941331374c6fda02f680b5e2eac542f6ce4cfdc6e33666289f9e0e660b2e33d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_941331374c6fda02f680b5e2eac542f6ce4cfdc6e33666289f9e0e660b2e33d8->enter($__internal_941331374c6fda02f680b5e2eac542f6ce4cfdc6e33666289f9e0e660b2e33d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_941331374c6fda02f680b5e2eac542f6ce4cfdc6e33666289f9e0e660b2e33d8->leave($__internal_941331374c6fda02f680b5e2eac542f6ce4cfdc6e33666289f9e0e660b2e33d8_prof);

        
        $__internal_7414ff4377da1f69ec366c5ae3f5f4feab61c333d5971d932876c0f3ffa64a94->leave($__internal_7414ff4377da1f69ec366c5ae3f5f4feab61c333d5971d932876c0f3ffa64a94_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Pedidos\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
