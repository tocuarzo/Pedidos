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
        $__internal_78910c081982b9425cc14d15aaff5947731379b1f6ffc3320bc8c5dd18d771b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78910c081982b9425cc14d15aaff5947731379b1f6ffc3320bc8c5dd18d771b1->enter($__internal_78910c081982b9425cc14d15aaff5947731379b1f6ffc3320bc8c5dd18d771b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tienda/tienda.html.twig"));

        $__internal_6448f9351de666c1a3058ee1e977c24fa605e120fad30dc78301dc69087ee635 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6448f9351de666c1a3058ee1e977c24fa605e120fad30dc78301dc69087ee635->enter($__internal_6448f9351de666c1a3058ee1e977c24fa605e120fad30dc78301dc69087ee635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tienda/tienda.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78910c081982b9425cc14d15aaff5947731379b1f6ffc3320bc8c5dd18d771b1->leave($__internal_78910c081982b9425cc14d15aaff5947731379b1f6ffc3320bc8c5dd18d771b1_prof);

        
        $__internal_6448f9351de666c1a3058ee1e977c24fa605e120fad30dc78301dc69087ee635->leave($__internal_6448f9351de666c1a3058ee1e977c24fa605e120fad30dc78301dc69087ee635_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b02ae500f27f727c5d0a08ebafc8f87fc10b230d74e7ba8a1173a5f0bee24a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b02ae500f27f727c5d0a08ebafc8f87fc10b230d74e7ba8a1173a5f0bee24a4->enter($__internal_5b02ae500f27f727c5d0a08ebafc8f87fc10b230d74e7ba8a1173a5f0bee24a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c3ca419554a5809a11f2d1e634d4e2dc09beb8faf7c130d2b146ea6810734ae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3ca419554a5809a11f2d1e634d4e2dc09beb8faf7c130d2b146ea6810734ae2->enter($__internal_c3ca419554a5809a11f2d1e634d4e2dc09beb8faf7c130d2b146ea6810734ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenido ";
        echo twig_escape_filter($this->env, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        
        $__internal_c3ca419554a5809a11f2d1e634d4e2dc09beb8faf7c130d2b146ea6810734ae2->leave($__internal_c3ca419554a5809a11f2d1e634d4e2dc09beb8faf7c130d2b146ea6810734ae2_prof);

        
        $__internal_5b02ae500f27f727c5d0a08ebafc8f87fc10b230d74e7ba8a1173a5f0bee24a4->leave($__internal_5b02ae500f27f727c5d0a08ebafc8f87fc10b230d74e7ba8a1173a5f0bee24a4_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c79c992527d92ab405384ca791a62cb9d08ad49d1e750c2f71772664b241b56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c79c992527d92ab405384ca791a62cb9d08ad49d1e750c2f71772664b241b56->enter($__internal_7c79c992527d92ab405384ca791a62cb9d08ad49d1e750c2f71772664b241b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_42326940efb46abb65c2373ecd309ac5fe8ddd00d0b728daef183f638fa526b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42326940efb46abb65c2373ecd309ac5fe8ddd00d0b728daef183f638fa526b4->enter($__internal_42326940efb46abb65c2373ecd309ac5fe8ddd00d0b728daef183f638fa526b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        ";
            // line 15
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), 'form_start');
            echo "
                        <th class=\"align-middle\" scope=\"row\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["producto"], "cod_prod", array()), "html", null, true);
            echo "</th>
                            <td class=\"align-middle\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["producto"], "nombre", array()), "html", null, true);
            echo "</td>
                            <td class=\"align-middle\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["producto"], "categoria", array()), "nombre", array()), "html", null, true);
            echo "</td>
                            <td class=\"align-middle\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["producto"], "precio", array()), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "cantidad", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "</td><td>";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-outline-primary")));
            echo "
                            </td>
                        ";
            // line 23
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), 'form_end');
            echo "
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                </tbody>
            </table>
        </div>
    ";
        
        $__internal_42326940efb46abb65c2373ecd309ac5fe8ddd00d0b728daef183f638fa526b4->leave($__internal_42326940efb46abb65c2373ecd309ac5fe8ddd00d0b728daef183f638fa526b4_prof);

        
        $__internal_7c79c992527d92ab405384ca791a62cb9d08ad49d1e750c2f71772664b241b56->leave($__internal_7c79c992527d92ab405384ca791a62cb9d08ad49d1e750c2f71772664b241b56_prof);

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
        return array (  124 => 26,  115 => 23,  108 => 21,  103 => 19,  99 => 18,  95 => 17,  91 => 16,  87 => 15,  84 => 14,  80 => 13,  70 => 5,  61 => 4,  41 => 2,  11 => 1,);
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
                        {{ form_start(form) }}
                        <th class=\"align-middle\" scope=\"row\">{{ producto.cod_prod }}</th>
                            <td class=\"align-middle\">{{ producto.nombre }}</td>
                            <td class=\"align-middle\">{{ producto.categoria.nombre}}</td>
                            <td class=\"align-middle\">{{ producto.precio }}</td>
                            <td>
                                {{ form_widget(form.cantidad, {'attr' : {'class' : 'form-control'}}) }}</td><td>{{ form_widget(form.submit, {'attr' : {'class' : 'btn btn-outline-primary'}}) }}
                            </td>
                        {{ form_end(form) }}
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    {% endblock %}

", "tienda/tienda.html.twig", "D:\\Pedidos\\templates\\tienda\\tienda.html.twig");
    }
}
