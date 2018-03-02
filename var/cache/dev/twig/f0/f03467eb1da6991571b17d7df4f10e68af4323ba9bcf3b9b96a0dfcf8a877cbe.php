<?php

/* @EasyAdmin/default/field_string.html.twig */
class __TwigTemplate_0b41b39e016064c485618706fd81bf8fbbf214c2bf5d2ace1ac49f40405f6866 extends Twig_Template
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
        $__internal_fdb8a7ec4f660764fb9341090a0344eb6bb6837ad493f4157744a92d51309774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdb8a7ec4f660764fb9341090a0344eb6bb6837ad493f4157744a92d51309774->enter($__internal_fdb8a7ec4f660764fb9341090a0344eb6bb6837ad493f4157744a92d51309774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        $__internal_a6081c08d9012cf380a03e358d9d548398b6996b08f6712eca4c5a802980c86f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6081c08d9012cf380a03e358d9d548398b6996b08f6712eca4c5a802980c86f->enter($__internal_a6081c08d9012cf380a03e358d9d548398b6996b08f6712eca4c5a802980c86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        // line 1
        if (((isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 1, $this->getSourceContext()); })()) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })())), "html", null, true);
            echo "
";
        }
        
        $__internal_fdb8a7ec4f660764fb9341090a0344eb6bb6837ad493f4157744a92d51309774->leave($__internal_fdb8a7ec4f660764fb9341090a0344eb6bb6837ad493f4157744a92d51309774_prof);

        
        $__internal_a6081c08d9012cf380a03e358d9d548398b6996b08f6712eca4c5a802980c86f->leave($__internal_a6081c08d9012cf380a03e358d9d548398b6996b08f6712eca4c5a802980c86f_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "@EasyAdmin/default/field_string.html.twig", "C:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\field_string.html.twig");
    }
}
