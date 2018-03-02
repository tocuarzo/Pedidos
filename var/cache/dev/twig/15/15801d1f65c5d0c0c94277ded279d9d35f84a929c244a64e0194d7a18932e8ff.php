<?php

/* @EasyAdmin/default/field_tel.html.twig */
class __TwigTemplate_c3eaecd51b2ec70bbfeb9a4f645df88c81cb1b9f53a2591324c8951e31a56ec6 extends Twig_Template
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
        $__internal_92e053e740f0e2b5fb14914b8bb32f1cbb224e98be8fe8e6e17523ab44b6a391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92e053e740f0e2b5fb14914b8bb32f1cbb224e98be8fe8e6e17523ab44b6a391->enter($__internal_92e053e740f0e2b5fb14914b8bb32f1cbb224e98be8fe8e6e17523ab44b6a391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_tel.html.twig"));

        $__internal_16fd2f25a2784dd0bc53854c0c0491a4cb9e6f688eeb1ed7fc10bbb9507f1834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16fd2f25a2784dd0bc53854c0c0491a4cb9e6f688eeb1ed7fc10bbb9507f1834->enter($__internal_16fd2f25a2784dd0bc53854c0c0491a4cb9e6f688eeb1ed7fc10bbb9507f1834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_tel.html.twig"));

        // line 1
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>
";
        
        $__internal_92e053e740f0e2b5fb14914b8bb32f1cbb224e98be8fe8e6e17523ab44b6a391->leave($__internal_92e053e740f0e2b5fb14914b8bb32f1cbb224e98be8fe8e6e17523ab44b6a391_prof);

        
        $__internal_16fd2f25a2784dd0bc53854c0c0491a4cb9e6f688eeb1ed7fc10bbb9507f1834->leave($__internal_16fd2f25a2784dd0bc53854c0c0491a4cb9e6f688eeb1ed7fc10bbb9507f1834_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_tel.html.twig";
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
        return new Twig_Source("<a href=\"tel:{{ value }}\">{{ value }}</a>
", "@EasyAdmin/default/field_tel.html.twig", "C:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\field_tel.html.twig");
    }
}
