<?php

/* base.html.twig */
class __TwigTemplate_5f66cbf62dadb25e2ca25d256ab9996a667404de083343a12715cd996c055019 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d84f2e5be62c4b2bf785d9aa1b3d1f06a1be57d419a190b695b161a15eb7ebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d84f2e5be62c4b2bf785d9aa1b3d1f06a1be57d419a190b695b161a15eb7ebc->enter($__internal_7d84f2e5be62c4b2bf785d9aa1b3d1f06a1be57d419a190b695b161a15eb7ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_fcd33cae19aa2bbeb33723e4b46d190c5a7650e4711205ad4b60665cd43e7015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcd33cae19aa2bbeb33723e4b46d190c5a7650e4711205ad4b60665cd43e7015->enter($__internal_fcd33cae19aa2bbeb33723e4b46d190c5a7650e4711205ad4b60665cd43e7015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
        <meta charset=\"UTF-8\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>
    ";
        // line 10
        $context["current_path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "_route"), "method"));
        // line 11
        echo "    <body style=\"background-color: #4DE885;\">
    ";
        // line 12
        $this->displayBlock('navbar', $context, $blocks);
        // line 31
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "    </body>
</html>
";
        
        $__internal_7d84f2e5be62c4b2bf785d9aa1b3d1f06a1be57d419a190b695b161a15eb7ebc->leave($__internal_7d84f2e5be62c4b2bf785d9aa1b3d1f06a1be57d419a190b695b161a15eb7ebc_prof);

        
        $__internal_fcd33cae19aa2bbeb33723e4b46d190c5a7650e4711205ad4b60665cd43e7015->leave($__internal_fcd33cae19aa2bbeb33723e4b46d190c5a7650e4711205ad4b60665cd43e7015_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_927afd3ba0120a07a08265c44f3cd95304dcd92dfa326881514ce6bc3511dd18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_927afd3ba0120a07a08265c44f3cd95304dcd92dfa326881514ce6bc3511dd18->enter($__internal_927afd3ba0120a07a08265c44f3cd95304dcd92dfa326881514ce6bc3511dd18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2185294dfd3e6ce10c009d1a25a1dcea147176beeeedec3a695a3af48ede34c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2185294dfd3e6ce10c009d1a25a1dcea147176beeeedec3a695a3af48ede34c5->enter($__internal_2185294dfd3e6ce10c009d1a25a1dcea147176beeeedec3a695a3af48ede34c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2185294dfd3e6ce10c009d1a25a1dcea147176beeeedec3a695a3af48ede34c5->leave($__internal_2185294dfd3e6ce10c009d1a25a1dcea147176beeeedec3a695a3af48ede34c5_prof);

        
        $__internal_927afd3ba0120a07a08265c44f3cd95304dcd92dfa326881514ce6bc3511dd18->leave($__internal_927afd3ba0120a07a08265c44f3cd95304dcd92dfa326881514ce6bc3511dd18_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d9d4eee2fe66a97fbbed937f1acb1bffe1e1f45c34cec6c8d7b77c676cd92b42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d4eee2fe66a97fbbed937f1acb1bffe1e1f45c34cec6c8d7b77c676cd92b42->enter($__internal_d9d4eee2fe66a97fbbed937f1acb1bffe1e1f45c34cec6c8d7b77c676cd92b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_caa5cf61c6c834b33827aad8318d5ffffae3fa7914bd56fa8a10277cb711880a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caa5cf61c6c834b33827aad8318d5ffffae3fa7914bd56fa8a10277cb711880a->enter($__internal_caa5cf61c6c834b33827aad8318d5ffffae3fa7914bd56fa8a10277cb711880a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_caa5cf61c6c834b33827aad8318d5ffffae3fa7914bd56fa8a10277cb711880a->leave($__internal_caa5cf61c6c834b33827aad8318d5ffffae3fa7914bd56fa8a10277cb711880a_prof);

        
        $__internal_d9d4eee2fe66a97fbbed937f1acb1bffe1e1f45c34cec6c8d7b77c676cd92b42->leave($__internal_d9d4eee2fe66a97fbbed937f1acb1bffe1e1f45c34cec6c8d7b77c676cd92b42_prof);

    }

    // line 12
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_2afb1fcaad7a4bc00f68fe5ab84613b475e1e54708a409c41f9b4cfb4ff24f85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2afb1fcaad7a4bc00f68fe5ab84613b475e1e54708a409c41f9b4cfb4ff24f85->enter($__internal_2afb1fcaad7a4bc00f68fe5ab84613b475e1e54708a409c41f9b4cfb4ff24f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_ac544618b1fee63be1a19f68ffa2ac33d505af43630ae480726de3dba2f9b2ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac544618b1fee63be1a19f68ffa2ac33d505af43630ae480726de3dba2f9b2ad->enter($__internal_ac544618b1fee63be1a19f68ffa2ac33d505af43630ae480726de3dba2f9b2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 13
        echo "    <nav class=\"navbar navbar-expand bg-light\">
        <h4 class=\"navbar-brand my-0\">Bienvenido ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->getSourceContext()); })()), "user", array()), "correo", array()), "html", null, true);
        echo "</h4>
        <div class=\"navbar w-100 justify-content-between\">
            <div class=\"btn-group\" role=\"group\">
                <a class=\"btn btn-outline-success ";
        // line 17
        if (((isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new Twig_Error_Runtime('Variable "current_path" does not exist.', 17, $this->getSourceContext()); })()) == $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("principal"))) {
            // line 18
            echo "                    active
                  ";
        }
        // line 19
        echo "px-5\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("principal");
        echo "\">Principal</a>
                <a class=\"btn btn-outline-success ";
        // line 20
        if (((isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new Twig_Error_Runtime('Variable "current_path" does not exist.', 20, $this->getSourceContext()); })()) == $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carrito"))) {
            // line 21
            echo "                    active
                  ";
        }
        // line 22
        echo "px-5\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carrito");
        echo "\">Carrito</a>
                ";
        // line 23
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 23, $this->getSourceContext()); })()), "user", array()), "admin", array())) {
            // line 24
            echo "                <a class=\"btn btn-outline-info px-5\" href=\"/zonaAdmin\">Zona admin</a>
                ";
        }
        // line 26
        echo "            </div>
        <a class=\"btn btn-danger ml-3\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\">Cerrar Sesion</a>
        </div>
    </nav>
    ";
        
        $__internal_ac544618b1fee63be1a19f68ffa2ac33d505af43630ae480726de3dba2f9b2ad->leave($__internal_ac544618b1fee63be1a19f68ffa2ac33d505af43630ae480726de3dba2f9b2ad_prof);

        
        $__internal_2afb1fcaad7a4bc00f68fe5ab84613b475e1e54708a409c41f9b4cfb4ff24f85->leave($__internal_2afb1fcaad7a4bc00f68fe5ab84613b475e1e54708a409c41f9b4cfb4ff24f85_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_e65c3ec2ae72ae3f31ac55add24cd2ec6eafc9ecc887f32e4519eb7b5c1893db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e65c3ec2ae72ae3f31ac55add24cd2ec6eafc9ecc887f32e4519eb7b5c1893db->enter($__internal_e65c3ec2ae72ae3f31ac55add24cd2ec6eafc9ecc887f32e4519eb7b5c1893db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ddb24f7599cbe95de80bd189b1408085deae306c97d8550cab0ab0a80fabbfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ddb24f7599cbe95de80bd189b1408085deae306c97d8550cab0ab0a80fabbfd->enter($__internal_3ddb24f7599cbe95de80bd189b1408085deae306c97d8550cab0ab0a80fabbfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3ddb24f7599cbe95de80bd189b1408085deae306c97d8550cab0ab0a80fabbfd->leave($__internal_3ddb24f7599cbe95de80bd189b1408085deae306c97d8550cab0ab0a80fabbfd_prof);

        
        $__internal_e65c3ec2ae72ae3f31ac55add24cd2ec6eafc9ecc887f32e4519eb7b5c1893db->leave($__internal_e65c3ec2ae72ae3f31ac55add24cd2ec6eafc9ecc887f32e4519eb7b5c1893db_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_91e4dd5ae98f31e9ee0060bea122299ea9bf309873b611f73db405fe47fa62ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e4dd5ae98f31e9ee0060bea122299ea9bf309873b611f73db405fe47fa62ad->enter($__internal_91e4dd5ae98f31e9ee0060bea122299ea9bf309873b611f73db405fe47fa62ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_53ffe498d8e5b3f0f64a0eb8dddc0698326110a588421fe74187931e0b2a38d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53ffe498d8e5b3f0f64a0eb8dddc0698326110a588421fe74187931e0b2a38d6->enter($__internal_53ffe498d8e5b3f0f64a0eb8dddc0698326110a588421fe74187931e0b2a38d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_53ffe498d8e5b3f0f64a0eb8dddc0698326110a588421fe74187931e0b2a38d6->leave($__internal_53ffe498d8e5b3f0f64a0eb8dddc0698326110a588421fe74187931e0b2a38d6_prof);

        
        $__internal_91e4dd5ae98f31e9ee0060bea122299ea9bf309873b611f73db405fe47fa62ad->leave($__internal_91e4dd5ae98f31e9ee0060bea122299ea9bf309873b611f73db405fe47fa62ad_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 32,  169 => 31,  155 => 27,  152 => 26,  148 => 24,  146 => 23,  141 => 22,  137 => 21,  135 => 20,  130 => 19,  126 => 18,  124 => 17,  118 => 14,  115 => 13,  106 => 12,  89 => 8,  72 => 7,  60 => 33,  57 => 32,  54 => 31,  52 => 12,  49 => 11,  47 => 10,  44 => 9,  42 => 8,  38 => 7,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
        <meta charset=\"UTF-8\">
        <title>{% block title %}{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    {% set current_path = path(app.request.get('_route')) %}
    <body style=\"background-color: #4DE885;\">
    {% block navbar %}
    <nav class=\"navbar navbar-expand bg-light\">
        <h4 class=\"navbar-brand my-0\">Bienvenido {{ app.user.correo }}</h4>
        <div class=\"navbar w-100 justify-content-between\">
            <div class=\"btn-group\" role=\"group\">
                <a class=\"btn btn-outline-success {% if current_path == path('principal') %}
                    active
                  {% endif %}px-5\" href=\"{{ url('principal') }}\">Principal</a>
                <a class=\"btn btn-outline-success {% if current_path == path('carrito') %}
                    active
                  {% endif %}px-5\" href=\"{{ path('carrito') }}\">Carrito</a>
                {% if app.user.admin %}
                <a class=\"btn btn-outline-info px-5\" href=\"/zonaAdmin\">Zona admin</a>
                {% endif %}
            </div>
        <a class=\"btn btn-danger ml-3\" href=\"{{ path('logout') }}\">Cerrar Sesion</a>
        </div>
    </nav>
    {% endblock %}
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "D:\\Pedidos\\templates\\base.html.twig");
    }
}
