<?php

/* @EasyAdmin/default/flash_messages.html.twig */
class __TwigTemplate_af7b0b3c1d862ecea7820abf335f80f4f9c20d46b888b02e104fe33d66c6dca5 extends Twig_Template
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
        $__internal_632a5f98f23f34fbc36b61faa27ae25c48ef7b05802b90d57565f1f45c3723e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_632a5f98f23f34fbc36b61faa27ae25c48ef7b05802b90d57565f1f45c3723e8->enter($__internal_632a5f98f23f34fbc36b61faa27ae25c48ef7b05802b90d57565f1f45c3723e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/flash_messages.html.twig"));

        $__internal_8a179271d08302326afd5c485dea28e7102a29880735cf9a2955244c66ee4535 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a179271d08302326afd5c485dea28e7102a29880735cf9a2955244c66ee4535->enter($__internal_8a179271d08302326afd5c485dea28e7102a29880735cf9a2955244c66ee4535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/flash_messages.html.twig"));

        // line 1
        if (( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "session", array())) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "session", array()), "started", array()))) {
            // line 2
            echo "    <div id=\"flash-messages\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array()));
            foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
                // line 4
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 5
                    echo "                <div class=\"alert alert-";
                    echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                    echo "\">
                    ";
                    // line 6
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 9
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    </div>
";
        }
        
        $__internal_632a5f98f23f34fbc36b61faa27ae25c48ef7b05802b90d57565f1f45c3723e8->leave($__internal_632a5f98f23f34fbc36b61faa27ae25c48ef7b05802b90d57565f1f45c3723e8_prof);

        
        $__internal_8a179271d08302326afd5c485dea28e7102a29880735cf9a2955244c66ee4535->leave($__internal_8a179271d08302326afd5c485dea28e7102a29880735cf9a2955244c66ee4535_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/flash_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  53 => 9,  44 => 6,  39 => 5,  34 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if app.session is not null and app.session.started %}
    <div id=\"flash-messages\">
        {% for label, messages in app.session.flashbag.all %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label }}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}
    </div>
{% endif %}
", "@EasyAdmin/default/flash_messages.html.twig", "D:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\flash_messages.html.twig");
    }
}
