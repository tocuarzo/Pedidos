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
        $__internal_e56c3364a3b15ac1482117d7b8a0db9d748d86cc43931e398c543241fc7668ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e56c3364a3b15ac1482117d7b8a0db9d748d86cc43931e398c543241fc7668ab->enter($__internal_e56c3364a3b15ac1482117d7b8a0db9d748d86cc43931e398c543241fc7668ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tienda/tienda.html.twig"));

        $__internal_19201cf2dc0811d23d4b1a013060e42b08dae1a5358a6a08c703134fb72a7b55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19201cf2dc0811d23d4b1a013060e42b08dae1a5358a6a08c703134fb72a7b55->enter($__internal_19201cf2dc0811d23d4b1a013060e42b08dae1a5358a6a08c703134fb72a7b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tienda/tienda.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e56c3364a3b15ac1482117d7b8a0db9d748d86cc43931e398c543241fc7668ab->leave($__internal_e56c3364a3b15ac1482117d7b8a0db9d748d86cc43931e398c543241fc7668ab_prof);

        
        $__internal_19201cf2dc0811d23d4b1a013060e42b08dae1a5358a6a08c703134fb72a7b55->leave($__internal_19201cf2dc0811d23d4b1a013060e42b08dae1a5358a6a08c703134fb72a7b55_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2bfd1950e73e8980fb5837e49819116afb5894505f330f96fd8c99c33609b3c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bfd1950e73e8980fb5837e49819116afb5894505f330f96fd8c99c33609b3c9->enter($__internal_2bfd1950e73e8980fb5837e49819116afb5894505f330f96fd8c99c33609b3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bf690b46370f284c95c2f76f14a5c1db6085475afa543753e120a2203509773e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf690b46370f284c95c2f76f14a5c1db6085475afa543753e120a2203509773e->enter($__internal_bf690b46370f284c95c2f76f14a5c1db6085475afa543753e120a2203509773e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenido ";
        echo twig_escape_filter($this->env, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        
        $__internal_bf690b46370f284c95c2f76f14a5c1db6085475afa543753e120a2203509773e->leave($__internal_bf690b46370f284c95c2f76f14a5c1db6085475afa543753e120a2203509773e_prof);

        
        $__internal_2bfd1950e73e8980fb5837e49819116afb5894505f330f96fd8c99c33609b3c9->leave($__internal_2bfd1950e73e8980fb5837e49819116afb5894505f330f96fd8c99c33609b3c9_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5b509e2c592d34e866db2de18205afa8ec2bceed0787d0d30b7a7ccbaf745ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5b509e2c592d34e866db2de18205afa8ec2bceed0787d0d30b7a7ccbaf745ca->enter($__internal_c5b509e2c592d34e866db2de18205afa8ec2bceed0787d0d30b7a7ccbaf745ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_16e9d1c20924dd3b2fc7be15adcad79b1fd8eba42f931e8a25fcf763dffc021a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16e9d1c20924dd3b2fc7be15adcad79b1fd8eba42f931e8a25fcf763dffc021a->enter($__internal_16e9d1c20924dd3b2fc7be15adcad79b1fd8eba42f931e8a25fcf763dffc021a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "</th>
                            <td class=\"align-middle\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["producto"], "nombre", array()), "html", null, true);
            echo "</td>
                            <td class=\"align-middle\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["producto"], "categoria", array()), "nombre", array()), "html", null, true);
            echo "</td>
                            <td class=\"align-middle\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["producto"], "precio", array()), "html", null, true);
            echo "</td>
                            <form method=\"POST\" action=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("principal");
            echo "\">
                                <input type=\"hidden\" name=\"id\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["producto"], "cod_prod", array()), "html", null, true);
            echo "\">
                                <td>
                                    <input name=\"cantidad\" type=\"number\" min=\"1\" class=\"form-control\">
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
        
        $__internal_16e9d1c20924dd3b2fc7be15adcad79b1fd8eba42f931e8a25fcf763dffc021a->leave($__internal_16e9d1c20924dd3b2fc7be15adcad79b1fd8eba42f931e8a25fcf763dffc021a_prof);

        
        $__internal_c5b509e2c592d34e866db2de18205afa8ec2bceed0787d0d30b7a7ccbaf745ca->leave($__internal_c5b509e2c592d34e866db2de18205afa8ec2bceed0787d0d30b7a7ccbaf745ca_prof);

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
        return array (  123 => 30,  107 => 20,  103 => 19,  99 => 18,  95 => 17,  91 => 16,  87 => 15,  84 => 14,  80 => 13,  70 => 5,  61 => 4,  41 => 2,  11 => 1,);
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
                                    <input name=\"cantidad\" type=\"number\" min=\"1\" class=\"form-control\">
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

", "tienda/tienda.html.twig", "D:\\Pedidos\\templates\\tienda\\tienda.html.twig");
    }
}
