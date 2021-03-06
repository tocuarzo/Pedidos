<?php

/* tienda/tienda.html.twig */
class __TwigTemplate_9d0df70eb90955fcea9e6da4439a8b62e80334862726cbd0a15e37f65ca74a16 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tienda/tienda.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tienda/tienda.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tienda/tienda.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenido ";
        echo twig_escape_filter($this->env, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 2, $this->source); })()), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "        <div class=\"jumbotron container p-4\">
            <table class=\"table table-bordered table-striped bg-light\">
                <thead>
                <tr>
                    <th class=\"text-center\" width=\"12%\" scope=\"col\">id de articulo</th><th scope=\"col\">nombre de articulo</th><th width=\"1%\" scope=\"col\">Categoria</th><th width=\"1%\" scope=\"col\">precio</th><th width=\"5%\" scope=\"col\">Unidades</th><th class=\"text-center\" width=\"15%\" scope=\"col\">añadir al carrito</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new Twig_Error_Runtime('Variable "productos" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 14
            echo "                    <tr>
                            <th class=\"align-middle\" scope=\"row\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "cod_prod", array()), "html", null, true);
            echo "</th>
                            <td class=\"align-middle\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "nombre", array()), "html", null, true);
            echo "</td>
                            <td class=\"align-middle\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "categoria", array()), "nombre", array()), "html", null, true);
            echo "</td>
                            <td class=\"align-middle\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "precio", array()), "html", null, true);
            echo "</td>
                            <form method=\"POST\" action=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("principal");
            echo "\">
                                <input type=\"hidden\" name=\"id\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "cod_prod", array()), "html", null, true);
            echo "\">
                                <td>
                                    <input name=\"cantidad\" type=\"number\" min=\"1\" value=\"1\" class=\"form-control\">
                                </td>
                                <td>
                                    <input type=\"submit\" class=\"btn btn-outline-primary\" value=\"añadir al carrito\">
                                </td>
                            </form>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                </tbody>
            </table>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tienda/tienda.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 30,  111 => 20,  107 => 19,  103 => 18,  99 => 17,  95 => 16,  91 => 15,  88 => 14,  84 => 13,  74 => 5,  65 => 4,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("    {% extends \"base.html.twig\" %}
    {% block title %}Bienvenido {{ user }} {% endblock %}

    {% block body %}
        <div class=\"jumbotron container p-4\">
            <table class=\"table table-bordered table-striped bg-light\">
                <thead>
                <tr>
                    <th class=\"text-center\" width=\"12%\" scope=\"col\">id de articulo</th><th scope=\"col\">nombre de articulo</th><th width=\"1%\" scope=\"col\">Categoria</th><th width=\"1%\" scope=\"col\">precio</th><th width=\"5%\" scope=\"col\">Unidades</th><th class=\"text-center\" width=\"15%\" scope=\"col\">añadir al carrito</th>
                </tr>
                </thead>
                <tbody>
                {% for producto in productos %}
                    <tr>
                            <th class=\"align-middle\" scope=\"row\">{{ producto.cod_prod }}</th>
                            <td class=\"align-middle\">{{ producto.nombre }}</td>
                            <td class=\"align-middle\">{{ producto.categoria.nombre}}</td>
                            <td class=\"align-middle\">{{ producto.precio }}</td>
                            <form method=\"POST\" action=\"{{ path('principal') }}\">
                                <input type=\"hidden\" name=\"id\" value=\"{{ producto.cod_prod }}\">
                                <td>
                                    <input name=\"cantidad\" type=\"number\" min=\"1\" value=\"1\" class=\"form-control\">
                                </td>
                                <td>
                                    <input type=\"submit\" class=\"btn btn-outline-primary\" value=\"añadir al carrito\">
                                </td>
                            </form>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    {% endblock %}

", "tienda/tienda.html.twig", "C:\\Pedidos\\templates\\tienda\\tienda.html.twig");
    }
}
