<?php

/* tienda/carrito.html.twig */
class __TwigTemplate_22842ef6e06da2f9ae1716f7c34bc59c7da47010087690d1a09283aa187a2746 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tienda/carrito.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4c1784031320c4f36b02823ca62f23a6f7ca43a82622f2ef5ca48c4a78c42af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c1784031320c4f36b02823ca62f23a6f7ca43a82622f2ef5ca48c4a78c42af->enter($__internal_c4c1784031320c4f36b02823ca62f23a6f7ca43a82622f2ef5ca48c4a78c42af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tienda/carrito.html.twig"));

        $__internal_9b68d72e648d06df4266bdaaf3d86834c037e6306458af780e0fcbe8477c6b60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b68d72e648d06df4266bdaaf3d86834c037e6306458af780e0fcbe8477c6b60->enter($__internal_9b68d72e648d06df4266bdaaf3d86834c037e6306458af780e0fcbe8477c6b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tienda/carrito.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4c1784031320c4f36b02823ca62f23a6f7ca43a82622f2ef5ca48c4a78c42af->leave($__internal_c4c1784031320c4f36b02823ca62f23a6f7ca43a82622f2ef5ca48c4a78c42af_prof);

        
        $__internal_9b68d72e648d06df4266bdaaf3d86834c037e6306458af780e0fcbe8477c6b60->leave($__internal_9b68d72e648d06df4266bdaaf3d86834c037e6306458af780e0fcbe8477c6b60_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_345fe8bb572cd167f3b071fb2ac79caec8f82e30f11c848111092567c3451d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_345fe8bb572cd167f3b071fb2ac79caec8f82e30f11c848111092567c3451d5e->enter($__internal_345fe8bb572cd167f3b071fb2ac79caec8f82e30f11c848111092567c3451d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b27e1d425e2056c87361a4e69c2991965ce587fa5b466a0ea16c7d2fd9495b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b27e1d425e2056c87361a4e69c2991965ce587fa5b466a0ea16c7d2fd9495b6->enter($__internal_0b27e1d425e2056c87361a4e69c2991965ce587fa5b466a0ea16c7d2fd9495b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carrito"]) || array_key_exists("carrito", $context) ? $context["carrito"] : (function () { throw new Twig_Error_Runtime('Variable "carrito" does not exist.', 3, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 4
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["carrito"]) || array_key_exists("carrito", $context) ? $context["carrito"] : (function () { throw new Twig_Error_Runtime('Variable "carrito" does not exist.', 4, $this->getSourceContext()); })()), "producto", array()), "nombre", array()), "html", null, true);
            echo "<br>
        ";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["carrito"]) || array_key_exists("carrito", $context) ? $context["carrito"] : (function () { throw new Twig_Error_Runtime('Variable "carrito" does not exist.', 5, $this->getSourceContext()); })()), "cantidad", array()), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "
";
        
        $__internal_0b27e1d425e2056c87361a4e69c2991965ce587fa5b466a0ea16c7d2fd9495b6->leave($__internal_0b27e1d425e2056c87361a4e69c2991965ce587fa5b466a0ea16c7d2fd9495b6_prof);

        
        $__internal_345fe8bb572cd167f3b071fb2ac79caec8f82e30f11c848111092567c3451d5e->leave($__internal_345fe8bb572cd167f3b071fb2ac79caec8f82e30f11c848111092567c3451d5e_prof);

    }

    public function getTemplateName()
    {
        return "tienda/carrito.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 7,  59 => 5,  54 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block body %}
    {% for producto in carrito %}
        {{ carrito.producto.nombre }}<br>
        {{ carrito.cantidad }}
    {% endfor %}

{% endblock %}", "tienda/carrito.html.twig", "C:\\Pedidos\\templates\\tienda\\carrito.html.twig");
    }
}
