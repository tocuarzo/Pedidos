<?php

/* @EasyAdmin/default/label_empty.html.twig */
class __TwigTemplate_372809fb460a5dc317dc90d1e3301e09e65438f9952ad3975940561676f08dc7 extends Twig_Template
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
        $__internal_0e6968b2c4262dcc04f22ae9271f5afef1b6d507b1fc4a074bc1a48b494cf821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e6968b2c4262dcc04f22ae9271f5afef1b6d507b1fc4a074bc1a48b494cf821->enter($__internal_0e6968b2c4262dcc04f22ae9271f5afef1b6d507b1fc4a074bc1a48b494cf821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_empty.html.twig"));

        $__internal_441a7d357f1cf779d91c5493d7ea574e60ec84788daf341d302268208beb8018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_441a7d357f1cf779d91c5493d7ea574e60ec84788daf341d302268208beb8018->enter($__internal_441a7d357f1cf779d91c5493d7ea574e60ec84788daf341d302268208beb8018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_0e6968b2c4262dcc04f22ae9271f5afef1b6d507b1fc4a074bc1a48b494cf821->leave($__internal_0e6968b2c4262dcc04f22ae9271f5afef1b6d507b1fc4a074bc1a48b494cf821_prof);

        
        $__internal_441a7d357f1cf779d91c5493d7ea574e60ec84788daf341d302268208beb8018->leave($__internal_441a7d357f1cf779d91c5493d7ea574e60ec84788daf341d302268208beb8018_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_empty.html.twig";
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
        return new Twig_Source("<span class=\"label label-empty\">{{ 'label.empty'|trans(domain = 'EasyAdminBundle') }}</span>
", "@EasyAdmin/default/label_empty.html.twig", "C:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\label_empty.html.twig");
    }
}
