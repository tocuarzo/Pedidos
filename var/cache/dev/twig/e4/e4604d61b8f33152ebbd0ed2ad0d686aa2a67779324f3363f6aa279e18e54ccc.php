<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_f2955ca3d547de0aa99ce2e5ed1d52650029c04cc17e4e0adbdf56e281194b3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a95d57374de623e428a2638fcbb5b51b17de95584a8e17ff82ec83a2e39393a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a95d57374de623e428a2638fcbb5b51b17de95584a8e17ff82ec83a2e39393a->enter($__internal_3a95d57374de623e428a2638fcbb5b51b17de95584a8e17ff82ec83a2e39393a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_6970276683e3dd0eac32d6931a4f4ad806c07c0acea5cf156f94b1947372e2dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6970276683e3dd0eac32d6931a4f4ad806c07c0acea5cf156f94b1947372e2dc->enter($__internal_6970276683e3dd0eac32d6931a4f4ad806c07c0acea5cf156f94b1947372e2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3a95d57374de623e428a2638fcbb5b51b17de95584a8e17ff82ec83a2e39393a->leave($__internal_3a95d57374de623e428a2638fcbb5b51b17de95584a8e17ff82ec83a2e39393a_prof);

        
        $__internal_6970276683e3dd0eac32d6931a4f4ad806c07c0acea5cf156f94b1947372e2dc->leave($__internal_6970276683e3dd0eac32d6931a4f4ad806c07c0acea5cf156f94b1947372e2dc_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f7089a0a90237d76fc4b8cf68304a3086ffb6a54116658ea88dbf3f00ba0f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f7089a0a90237d76fc4b8cf68304a3086ffb6a54116658ea88dbf3f00ba0f5f->enter($__internal_2f7089a0a90237d76fc4b8cf68304a3086ffb6a54116658ea88dbf3f00ba0f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0df2edc00a78c693d9c43363c446e5714962b3d50e9855e417b35e3af3bac770 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0df2edc00a78c693d9c43363c446e5714962b3d50e9855e417b35e3af3bac770->enter($__internal_0df2edc00a78c693d9c43363c446e5714962b3d50e9855e417b35e3af3bac770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0df2edc00a78c693d9c43363c446e5714962b3d50e9855e417b35e3af3bac770->leave($__internal_0df2edc00a78c693d9c43363c446e5714962b3d50e9855e417b35e3af3bac770_prof);

        
        $__internal_2f7089a0a90237d76fc4b8cf68304a3086ffb6a54116658ea88dbf3f00ba0f5f->leave($__internal_2f7089a0a90237d76fc4b8cf68304a3086ffb6a54116658ea88dbf3f00ba0f5f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\Pedidos\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
