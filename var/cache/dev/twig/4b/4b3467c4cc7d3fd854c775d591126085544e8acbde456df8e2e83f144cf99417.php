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
        $__internal_d05e01cc493d480a97f2bf271bed31d2a42602af4d04b8f2416daf5b4391b548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d05e01cc493d480a97f2bf271bed31d2a42602af4d04b8f2416daf5b4391b548->enter($__internal_d05e01cc493d480a97f2bf271bed31d2a42602af4d04b8f2416daf5b4391b548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tienda/carrito.html.twig"));

        $__internal_b8600664165dc882b75f17a14119ddece0114275e5224a62b62f1c8004de4c63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8600664165dc882b75f17a14119ddece0114275e5224a62b62f1c8004de4c63->enter($__internal_b8600664165dc882b75f17a14119ddece0114275e5224a62b62f1c8004de4c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tienda/carrito.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d05e01cc493d480a97f2bf271bed31d2a42602af4d04b8f2416daf5b4391b548->leave($__internal_d05e01cc493d480a97f2bf271bed31d2a42602af4d04b8f2416daf5b4391b548_prof);

        
        $__internal_b8600664165dc882b75f17a14119ddece0114275e5224a62b62f1c8004de4c63->leave($__internal_b8600664165dc882b75f17a14119ddece0114275e5224a62b62f1c8004de4c63_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c7cc48f840b0ac7e414a932235c0b806785b28a3c951340879d5fd9b3619828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c7cc48f840b0ac7e414a932235c0b806785b28a3c951340879d5fd9b3619828->enter($__internal_0c7cc48f840b0ac7e414a932235c0b806785b28a3c951340879d5fd9b3619828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_686cf2bf1a8956bf2775d748e328c1192796917523e55e2a6a35080d45f6672e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_686cf2bf1a8956bf2775d748e328c1192796917523e55e2a6a35080d45f6672e->enter($__internal_686cf2bf1a8956bf2775d748e328c1192796917523e55e2a6a35080d45f6672e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $context["compra"] = false;
        // line 4
        echo "    <div class=\"jumbotron container p-4\">
        <table class=\"table table-bordered table-striped bg-light\">
            <thead>
            <tr>
                <th class=\"text-center\" width=\"5%\" scope=\"col\">id de articulo</th>
                <th class=\"align-middle text-center\" width=\"50%\" scope=\"col\">nombre de articulo</th>
                <th class=\"align-middle text-center\" width=\"10%\" scope=\"col\">Categoria</th>
                <th class=\"align-middle text-center\" width=\"10%\" scope=\"col\">precio Total</th>
                <th class=\"align-middle text-center\" width=\"10%\" scope=\"col\">Unidades</th>
                <th class=\"align-middle text-center\" width=\"15%\" scope=\"col\">Borrar del carrito</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carrito"]) || array_key_exists("carrito", $context) ? $context["carrito"] : (function () { throw new Twig_Error_Runtime('Variable "carrito" does not exist.', 17, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 18
            echo "                <tr>
                    <th class=\"align-middle text-center\" scope=\"row\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "producto", array()), "cod_prod", array()), "html", null, true);
            echo "</th><td class=\"align-middle\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "producto", array()), "nombre", array()), "html", null, true);
            echo "</td><td class=\"align-middle text-center\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "producto", array()), "categoria", array()), "nombre", array()), "html", null, true);
            echo "</td>
                    <td class=\"align-middle text-center\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "unidades", array()), "html", null, true);
            echo "</td>
                    <td class=\"align-middle text-center\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "unidades", array()), "html", null, true);
            echo "</td>
                    <td class=\"align-middle text-center\"><i><a class=\"align-middle badge badge-danger text-center p-2 px-3\" href='";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteCarrito", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "producto", array()), "cod_prod", array()), "cantidad" => 1)), "html", null, true);
            echo "'>X</a></i></td>
                </tr>
                ";
            // line 24
            $context["compra"] = true;
            // line 25
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </tbody>
        </table>
        ";
        // line 28
        if ((isset($context["compra"]) || array_key_exists("compra", $context) ? $context["compra"] : (function () { throw new Twig_Error_Runtime('Variable "compra" does not exist.', 28, $this->getSourceContext()); })())) {
            // line 29
            echo "            <div class=\"text-center\">
                <button class=\"btn btn-success px-5\">Comprar</button>
            </div>

        ";
        }
        // line 34
        echo "    </div>

";
        
        $__internal_686cf2bf1a8956bf2775d748e328c1192796917523e55e2a6a35080d45f6672e->leave($__internal_686cf2bf1a8956bf2775d748e328c1192796917523e55e2a6a35080d45f6672e_prof);

        
        $__internal_0c7cc48f840b0ac7e414a932235c0b806785b28a3c951340879d5fd9b3619828->leave($__internal_0c7cc48f840b0ac7e414a932235c0b806785b28a3c951340879d5fd9b3619828_prof);

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
        return array (  116 => 34,  109 => 29,  107 => 28,  103 => 26,  97 => 25,  95 => 24,  90 => 22,  86 => 21,  82 => 20,  74 => 19,  71 => 18,  67 => 17,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block body %}
    {% set compra = false %}
    <div class=\"jumbotron container p-4\">
        <table class=\"table table-bordered table-striped bg-light\">
            <thead>
            <tr>
                <th class=\"text-center\" width=\"5%\" scope=\"col\">id de articulo</th>
                <th class=\"align-middle text-center\" width=\"50%\" scope=\"col\">nombre de articulo</th>
                <th class=\"align-middle text-center\" width=\"10%\" scope=\"col\">Categoria</th>
                <th class=\"align-middle text-center\" width=\"10%\" scope=\"col\">precio Total</th>
                <th class=\"align-middle text-center\" width=\"10%\" scope=\"col\">Unidades</th>
                <th class=\"align-middle text-center\" width=\"15%\" scope=\"col\">Borrar del carrito</th>
            </tr>
            </thead>
            <tbody>
            {% for item in carrito %}
                <tr>
                    <th class=\"align-middle text-center\" scope=\"row\">{{ item.producto.cod_prod }}</th><td class=\"align-middle\">{{ item.producto.nombre }}</td><td class=\"align-middle text-center\">{{ item.producto.categoria.nombre}}</td>
                    <td class=\"align-middle text-center\">{{ item.unidades }}</td>
                    <td class=\"align-middle text-center\">{{ item.unidades }}</td>
                    <td class=\"align-middle text-center\"><i><a class=\"align-middle badge badge-danger text-center p-2 px-3\" href='{{ path('deleteCarrito', {'id' : item.producto.cod_prod, 'cantidad' : 1})}}'>X</a></i></td>
                </tr>
                {% set compra = true %}
            {% endfor %}
            </tbody>
        </table>
        {% if (compra) %}
            <div class=\"text-center\">
                <button class=\"btn btn-success px-5\">Comprar</button>
            </div>

        {% endif %}
    </div>

{% endblock %}", "tienda/carrito.html.twig", "D:\\Pedidos\\templates\\tienda\\carrito.html.twig");
    }
}
