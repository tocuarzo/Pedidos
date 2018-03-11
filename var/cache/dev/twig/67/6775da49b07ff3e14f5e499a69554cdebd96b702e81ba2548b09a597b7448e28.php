<?php

/* tienda/carrito.html.twig */
class __TwigTemplate_72eea3aeb0bdbaf82de9cf843a8210f9bc3c1641f8f857a5d5d9179a5f0f9552 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tienda/carrito.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tienda/carrito.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tienda/carrito.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["carrito"]) || array_key_exists("carrito", $context) ? $context["carrito"] : (function () { throw new Twig_Error_Runtime('Variable "carrito" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 18
            echo "                <tr>
                    <th class=\"align-middle text-center\" scope=\"row\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "producto", array()), "cod_prod", array()), "html", null, true);
            echo "</th>
                    <td class=\"align-middle\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "producto", array()), "nombre", array()), "html", null, true);
            echo "</td><td class=\"align-middle text-center\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "producto", array()), "categoria", array()), "nombre", array()), "html", null, true);
            echo "</td>
                    <td class=\"align-middle text-center\">";
            // line 21
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "uds", array()) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "producto", array()), "precio", array())), "html", null, true);
            echo " Euros</td>
                    <td class=\"align-middle text-center\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "uds", array()), "html", null, true);
            echo "</td>
                    <form method=\"POST\" action=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("carrito");
            echo "\">
                        <input type=\"hidden\" name=\"id\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "producto", array()), "cod_prod", array()), "html", null, true);
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
        if ((isset($context["compra"]) || array_key_exists("compra", $context) ? $context["compra"] : (function () { throw new Twig_Error_Runtime('Variable "compra" does not exist.', 34, $this->source); })())) {
            // line 35
            echo "            <div class=\"text-center\">
                <button id=\"botonaco\" class=\"btn btn-success px-5\">Procesar Pedido</button>
            </div>

        ";
        }
        // line 40
        echo "        <div id=\"resultado\"></div>
    </div>
    <script type=\"text/javascript\">
        var boton = \$(\"#botonaco\");
        boton.click(peticionAjax);

        function peticionAjax(){
            console.log(\"antes del ajax\");
            var jqxhr =  \$.get('";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("procesar");
        echo "', function (data){
                \$.each(data, function (key, value){
                    alert(key + \" \" + value);
                }).done(function () {
                    alert(\"done\")
                });
            }, \"json\");
            console.log(\"despues del ajax\");
        }

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  163 => 60,  141 => 48,  131 => 40,  124 => 35,  122 => 34,  118 => 32,  112 => 31,  110 => 30,  101 => 24,  97 => 23,  93 => 22,  89 => 21,  83 => 20,  79 => 19,  76 => 18,  72 => 17,  57 => 4,  54 => 3,  45 => 2,  15 => 1,);
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
                <button id=\"botonaco\" class=\"btn btn-success px-5\">Procesar Pedido</button>
            </div>

        {% endif %}
        <div id=\"resultado\"></div>
    </div>
    <script type=\"text/javascript\">
        var boton = \$(\"#botonaco\");
        boton.click(peticionAjax);

        function peticionAjax(){
            console.log(\"antes del ajax\");
            var jqxhr =  \$.get('{{ path('procesar') }}', function (data){
                \$.each(data, function (key, value){
                    alert(key + \" \" + value);
                }).done(function () {
                    alert(\"done\")
                });
            }, \"json\");
            console.log(\"despues del ajax\");
        }

    </script>
{% endblock %}
{% block javascripts %}
{% endblock %}", "tienda/carrito.html.twig", "C:\\Pedidos\\templates\\tienda\\carrito.html.twig");
    }
}
