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
        $__internal_0fc3d2b7049858d919d74f4916ed5fb799c4a4105206764ba3e82d1421b4ea3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc3d2b7049858d919d74f4916ed5fb799c4a4105206764ba3e82d1421b4ea3d->enter($__internal_0fc3d2b7049858d919d74f4916ed5fb799c4a4105206764ba3e82d1421b4ea3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tienda/carrito.html.twig"));

        $__internal_10fc5f53c01c2d96edb44ed093076c32e30c431ddde76e5854cfcf16db7051d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10fc5f53c01c2d96edb44ed093076c32e30c431ddde76e5854cfcf16db7051d2->enter($__internal_10fc5f53c01c2d96edb44ed093076c32e30c431ddde76e5854cfcf16db7051d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tienda/carrito.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fc3d2b7049858d919d74f4916ed5fb799c4a4105206764ba3e82d1421b4ea3d->leave($__internal_0fc3d2b7049858d919d74f4916ed5fb799c4a4105206764ba3e82d1421b4ea3d_prof);

        
        $__internal_10fc5f53c01c2d96edb44ed093076c32e30c431ddde76e5854cfcf16db7051d2->leave($__internal_10fc5f53c01c2d96edb44ed093076c32e30c431ddde76e5854cfcf16db7051d2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_66a89a32a1d3d33812b59fb4dd136e5c5932344a417898bea5034360980be0ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a89a32a1d3d33812b59fb4dd136e5c5932344a417898bea5034360980be0ac->enter($__internal_66a89a32a1d3d33812b59fb4dd136e5c5932344a417898bea5034360980be0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a57d64c3621c9f1891ed2e228d337308303c4eff82497ce93e3914c75b10ca22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a57d64c3621c9f1891ed2e228d337308303c4eff82497ce93e3914c75b10ca22->enter($__internal_a57d64c3621c9f1891ed2e228d337308303c4eff82497ce93e3914c75b10ca22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "</th>
                    <td class=\"align-middle\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "producto", array()), "nombre", array()), "html", null, true);
            echo "</td><td class=\"align-middle text-center\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "producto", array()), "categoria", array()), "nombre", array()), "html", null, true);
            echo "</td>
                    <td class=\"align-middle text-center\">";
            // line 21
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "uds", array()) * twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "producto", array()), "precio", array())), "html", null, true);
            echo " Euros</td>
                    <td class=\"align-middle text-center\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "uds", array()), "html", null, true);
            echo "</td>
                    <form method=\"POST\" action=\"";
            // line 23
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carrito");
            echo "\">
                        <input type=\"hidden\" name=\"id\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "producto", array()), "cod_prod", array()), "html", null, true);
            echo "\">
                        <td class=\"align-middle text-center\">
                            <input type=\"submit\" class=\"btn btn-danger py-0 px-4\" value=\"X\">
                        </td>
                    </form>
                </tr>
                ";
            // line 30
            $context["compra"] = true;
            // line 31
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </tbody>
        </table>
        ";
        // line 34
        if ((isset($context["compra"]) || array_key_exists("compra", $context) ? $context["compra"] : (function () { throw new Twig_Error_Runtime('Variable "compra" does not exist.', 34, $this->getSourceContext()); })())) {
            // line 35
            echo "            <div class=\"text-center\">
                <button class=\"btn btn-success px-5\">Comprar</button>
            </div>

        ";
        }
        // line 40
        echo "    </div>

";
        
        $__internal_a57d64c3621c9f1891ed2e228d337308303c4eff82497ce93e3914c75b10ca22->leave($__internal_a57d64c3621c9f1891ed2e228d337308303c4eff82497ce93e3914c75b10ca22_prof);

        
        $__internal_66a89a32a1d3d33812b59fb4dd136e5c5932344a417898bea5034360980be0ac->leave($__internal_66a89a32a1d3d33812b59fb4dd136e5c5932344a417898bea5034360980be0ac_prof);

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
        return array (  126 => 40,  119 => 35,  117 => 34,  113 => 32,  107 => 31,  105 => 30,  96 => 24,  92 => 23,  88 => 22,  84 => 21,  78 => 20,  74 => 19,  71 => 18,  67 => 17,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
                    <th class=\"align-middle text-center\" scope=\"row\">{{ item.producto.cod_prod }}</th>
                    <td class=\"align-middle\">{{ item.producto.nombre }}</td><td class=\"align-middle text-center\">{{ item.producto.categoria.nombre}}</td>
                    <td class=\"align-middle text-center\">{{ item.uds * item.producto.precio }} Euros</td>
                    <td class=\"align-middle text-center\">{{ item.uds }}</td>
                    <form method=\"POST\" action=\"{{ path('carrito') }}\">
                        <input type=\"hidden\" name=\"id\" value=\"{{ item.producto.cod_prod }}\">
                        <td class=\"align-middle text-center\">
                            <input type=\"submit\" class=\"btn btn-danger py-0 px-4\" value=\"X\">
                        </td>
                    </form>
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
