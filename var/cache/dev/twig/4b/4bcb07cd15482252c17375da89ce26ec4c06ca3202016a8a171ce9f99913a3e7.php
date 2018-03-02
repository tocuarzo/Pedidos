<?php

/* tienda/tienda.html.twig */
class __TwigTemplate_e487b1a59e0ff01e4e158516f597a2d13006cd682d530991e15fedd6bd7c0847 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

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
        $__internal_1f380db594295503b18197c08f1b9e785bfa0a2089a4ba6b7bed679c1aec6a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f380db594295503b18197c08f1b9e785bfa0a2089a4ba6b7bed679c1aec6a3b->enter($__internal_1f380db594295503b18197c08f1b9e785bfa0a2089a4ba6b7bed679c1aec6a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tienda/tienda.html.twig"));

        $__internal_af281fa0198eccb30ab2d16f8258525699c3e16c5051f3cd34b366f5413588b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af281fa0198eccb30ab2d16f8258525699c3e16c5051f3cd34b366f5413588b3->enter($__internal_af281fa0198eccb30ab2d16f8258525699c3e16c5051f3cd34b366f5413588b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tienda/tienda.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f380db594295503b18197c08f1b9e785bfa0a2089a4ba6b7bed679c1aec6a3b->leave($__internal_1f380db594295503b18197c08f1b9e785bfa0a2089a4ba6b7bed679c1aec6a3b_prof);

        
        $__internal_af281fa0198eccb30ab2d16f8258525699c3e16c5051f3cd34b366f5413588b3->leave($__internal_af281fa0198eccb30ab2d16f8258525699c3e16c5051f3cd34b366f5413588b3_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8cf5307046c2187bafba4d24121bf00908e5c55927ab90336e5b7582f02e5efa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cf5307046c2187bafba4d24121bf00908e5c55927ab90336e5b7582f02e5efa->enter($__internal_8cf5307046c2187bafba4d24121bf00908e5c55927ab90336e5b7582f02e5efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bc3febb94e9a86c1b148ead96ad91c1cf398643cc76189a67d1ae25267c56214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc3febb94e9a86c1b148ead96ad91c1cf398643cc76189a67d1ae25267c56214->enter($__internal_bc3febb94e9a86c1b148ead96ad91c1cf398643cc76189a67d1ae25267c56214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenido ";
        echo twig_escape_filter($this->env, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        
        $__internal_bc3febb94e9a86c1b148ead96ad91c1cf398643cc76189a67d1ae25267c56214->leave($__internal_bc3febb94e9a86c1b148ead96ad91c1cf398643cc76189a67d1ae25267c56214_prof);

        
        $__internal_8cf5307046c2187bafba4d24121bf00908e5c55927ab90336e5b7582f02e5efa->leave($__internal_8cf5307046c2187bafba4d24121bf00908e5c55927ab90336e5b7582f02e5efa_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_98612d4791f5e285eccfa2c3eabf28672ed096c035a6000abded114460e838ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98612d4791f5e285eccfa2c3eabf28672ed096c035a6000abded114460e838ca->enter($__internal_98612d4791f5e285eccfa2c3eabf28672ed096c035a6000abded114460e838ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_731ec9f163118a9f2f1cf11271881711fcc5e5888f387dfc358f06a188bdcea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_731ec9f163118a9f2f1cf11271881711fcc5e5888f387dfc358f06a188bdcea6->enter($__internal_731ec9f163118a9f2f1cf11271881711fcc5e5888f387dfc358f06a188bdcea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new Twig_Error_Runtime('Variable "productos" does not exist.', 13, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 14
            echo "                    <tr>
                        <th class=\"align-middle\" scope=\"row\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["producto"], "cod_prod", array()), "html", null, true);
            echo "</th><td class=\"align-middle\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["producto"], "nombre", array()), "html", null, true);
            echo "</td><td class=\"align-middle\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["producto"], "categoria", array()), "nombre", array()), "html", null, true);
            echo "</td><td class=\"align-middle\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["producto"], "precio", array()), "html", null, true);
            echo "</td><td>
                            <input class=\"form-control\" type=\"number\"></td><td><button class=\"btn btn-outline-primary\" onclick=\"window.location.href = '";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addCarrito", array("item_id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["producto"], "cod_prod", array())), array("cantidad" => 1)), "html", null, true);
            echo "'\">añadir al carrito</button></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                </tbody>
            </table>
        </div>
    ";
        
        $__internal_731ec9f163118a9f2f1cf11271881711fcc5e5888f387dfc358f06a188bdcea6->leave($__internal_731ec9f163118a9f2f1cf11271881711fcc5e5888f387dfc358f06a188bdcea6_prof);

        
        $__internal_98612d4791f5e285eccfa2c3eabf28672ed096c035a6000abded114460e838ca->leave($__internal_98612d4791f5e285eccfa2c3eabf28672ed096c035a6000abded114460e838ca_prof);

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
        return array (  106 => 19,  97 => 16,  87 => 15,  84 => 14,  80 => 13,  70 => 5,  61 => 4,  41 => 2,  11 => 1,);
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
                        <th class=\"align-middle\" scope=\"row\">{{ producto.cod_prod }}</th><td class=\"align-middle\">{{ producto.nombre }}</td><td class=\"align-middle\">{{ producto.categoria.nombre}}</td><td class=\"align-middle\">{{ producto.precio }}</td><td>
                            <input class=\"form-control\" type=\"number\"></td><td><button class=\"btn btn-outline-primary\" onclick=\"window.location.href = '{{ path('addCarrito', {'item_id' : producto.cod_prod}, {'cantidad' : 1})}}'\">añadir al carrito</button></td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    {% endblock %}

", "tienda/tienda.html.twig", "C:\\Pedidos\\templates\\tienda\\tienda.html.twig");
    }
}
