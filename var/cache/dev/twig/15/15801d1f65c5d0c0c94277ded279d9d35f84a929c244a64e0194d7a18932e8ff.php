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
        $__internal_e03f1dd4d7c7a9c6bbc5e34d5836a129d355a41c635a5ffadc87457a317e4c2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e03f1dd4d7c7a9c6bbc5e34d5836a129d355a41c635a5ffadc87457a317e4c2c->enter($__internal_e03f1dd4d7c7a9c6bbc5e34d5836a129d355a41c635a5ffadc87457a317e4c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_tel.html.twig"));

        $__internal_53db4fdd294a862f5d5157ef292b7facd6dcb0b9d42d8a18bcb36ca32ec47b9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53db4fdd294a862f5d5157ef292b7facd6dcb0b9d42d8a18bcb36ca32ec47b9e->enter($__internal_53db4fdd294a862f5d5157ef292b7facd6dcb0b9d42d8a18bcb36ca32ec47b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_tel.html.twig"));

        // line 1
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>
";
        
        $__internal_e03f1dd4d7c7a9c6bbc5e34d5836a129d355a41c635a5ffadc87457a317e4c2c->leave($__internal_e03f1dd4d7c7a9c6bbc5e34d5836a129d355a41c635a5ffadc87457a317e4c2c_prof);

        
        $__internal_53db4fdd294a862f5d5157ef292b7facd6dcb0b9d42d8a18bcb36ca32ec47b9e->leave($__internal_53db4fdd294a862f5d5157ef292b7facd6dcb0b9d42d8a18bcb36ca32ec47b9e_prof);

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
", "@EasyAdmin/default/field_tel.html.twig", "D:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\field_tel.html.twig");
    }
}
