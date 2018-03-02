<?php

/* @EasyAdmin/default/field_json.html.twig */
class __TwigTemplate_7ce51adbf147a04bf2c935d42415dfdf5e38edd8876daf813bbab723bf4bdcbd extends Twig_Template
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
        $__internal_9ef5b9c677fcbf93d8fd26f4365d0f36552879b8ec2903885755613d2550c74c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ef5b9c677fcbf93d8fd26f4365d0f36552879b8ec2903885755613d2550c74c->enter($__internal_9ef5b9c677fcbf93d8fd26f4365d0f36552879b8ec2903885755613d2550c74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_json.html.twig"));

        $__internal_91acc63c97fbdf34ba8f42cb7ccea1ed0d841bdd095bb1cb41f1c345e7b184ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91acc63c97fbdf34ba8f42cb7ccea1ed0d841bdd095bb1cb41f1c345e7b184ff->enter($__internal_91acc63c97fbdf34ba8f42cb7ccea1ed0d841bdd095bb1cb41f1c345e7b184ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_json.html.twig"));

        // line 1
        if (((isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 1, $this->getSourceContext()); })()) == "show")) {
            // line 2
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })())) > 0)) {
                // line 3
                echo "        <ul>
            ";
                // line 4
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                    // line 5
                    echo "                <li>";
                    echo twig_escape_filter($this->env, $context["element"], "html", null, true);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 7
                echo "        </ul>
    ";
            } else {
                // line 9
                echo "        <div class=\"empty collection-empty\">
            ";
                // line 10
                echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["entity_config"]) || array_key_exists("entity_config", $context) ? $context["entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "entity_config" does not exist.', 10, $this->getSourceContext()); })()), "templates", array()), "label_empty", array()));
                echo "
        </div>
    ";
            }
        } else {
            // line 14
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, twig_join_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 14, $this->getSourceContext()); })()), ", ")), "html", null, true);
            echo "
";
        }
        
        $__internal_9ef5b9c677fcbf93d8fd26f4365d0f36552879b8ec2903885755613d2550c74c->leave($__internal_9ef5b9c677fcbf93d8fd26f4365d0f36552879b8ec2903885755613d2550c74c_prof);

        
        $__internal_91acc63c97fbdf34ba8f42cb7ccea1ed0d841bdd095bb1cb41f1c345e7b184ff->leave($__internal_91acc63c97fbdf34ba8f42cb7ccea1ed0d841bdd095bb1cb41f1c345e7b184ff_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_json.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  53 => 10,  50 => 9,  46 => 7,  37 => 5,  33 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    {% if value|length > 0 %}
        <ul>
            {% for element in value %}
                <li>{{ element }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div class=\"empty collection-empty\">
            {{ include(entity_config.templates.label_empty) }}
        </div>
    {% endif %}
{% else %}
    {{ value|join(', ')|easyadmin_truncate }}
{% endif %}
", "@EasyAdmin/default/field_json.html.twig", "C:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\field_json.html.twig");
    }
}
