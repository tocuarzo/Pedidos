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
        $__internal_7b2acb91a94baa325cd8d21822f49f41b0ce0feaad51403744bde64c5b83b3bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b2acb91a94baa325cd8d21822f49f41b0ce0feaad51403744bde64c5b83b3bc->enter($__internal_7b2acb91a94baa325cd8d21822f49f41b0ce0feaad51403744bde64c5b83b3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_da3fd1b9c1548dca620bdf66b5ccc480d496b7d117a55bfcf8bd7cd7624648bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da3fd1b9c1548dca620bdf66b5ccc480d496b7d117a55bfcf8bd7cd7624648bc->enter($__internal_da3fd1b9c1548dca620bdf66b5ccc480d496b7d117a55bfcf8bd7cd7624648bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    <body style=\"background-color: #4DE885;\">
    ";
        // line 11
        $this->displayBlock('navbar', $context, $blocks);
        // line 30
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "    </body>
</html>
";
        
        $__internal_7b2acb91a94baa325cd8d21822f49f41b0ce0feaad51403744bde64c5b83b3bc->leave($__internal_7b2acb91a94baa325cd8d21822f49f41b0ce0feaad51403744bde64c5b83b3bc_prof);

        
        $__internal_da3fd1b9c1548dca620bdf66b5ccc480d496b7d117a55bfcf8bd7cd7624648bc->leave($__internal_da3fd1b9c1548dca620bdf66b5ccc480d496b7d117a55bfcf8bd7cd7624648bc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f81a53e07a58cc3c271c00aec0c6d1fbab29375fc35796f7bcc1da7029eb231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f81a53e07a58cc3c271c00aec0c6d1fbab29375fc35796f7bcc1da7029eb231->enter($__internal_5f81a53e07a58cc3c271c00aec0c6d1fbab29375fc35796f7bcc1da7029eb231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_96d3162fb1d129c61d564048b5d69a9a152f562f2dc41f0652bb984c1f0c907f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96d3162fb1d129c61d564048b5d69a9a152f562f2dc41f0652bb984c1f0c907f->enter($__internal_96d3162fb1d129c61d564048b5d69a9a152f562f2dc41f0652bb984c1f0c907f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_96d3162fb1d129c61d564048b5d69a9a152f562f2dc41f0652bb984c1f0c907f->leave($__internal_96d3162fb1d129c61d564048b5d69a9a152f562f2dc41f0652bb984c1f0c907f_prof);

        
        $__internal_5f81a53e07a58cc3c271c00aec0c6d1fbab29375fc35796f7bcc1da7029eb231->leave($__internal_5f81a53e07a58cc3c271c00aec0c6d1fbab29375fc35796f7bcc1da7029eb231_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_52e60c21a74d1f8433af9ad60548a0c616b114f30ef9585dc946620121fa58ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52e60c21a74d1f8433af9ad60548a0c616b114f30ef9585dc946620121fa58ce->enter($__internal_52e60c21a74d1f8433af9ad60548a0c616b114f30ef9585dc946620121fa58ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ea26243fb48b50ae2497ba3fe769e57cf1a0fffa898928426027508e22a1eca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea26243fb48b50ae2497ba3fe769e57cf1a0fffa898928426027508e22a1eca2->enter($__internal_ea26243fb48b50ae2497ba3fe769e57cf1a0fffa898928426027508e22a1eca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ea26243fb48b50ae2497ba3fe769e57cf1a0fffa898928426027508e22a1eca2->leave($__internal_ea26243fb48b50ae2497ba3fe769e57cf1a0fffa898928426027508e22a1eca2_prof);

        
        $__internal_52e60c21a74d1f8433af9ad60548a0c616b114f30ef9585dc946620121fa58ce->leave($__internal_52e60c21a74d1f8433af9ad60548a0c616b114f30ef9585dc946620121fa58ce_prof);

    }

    // line 11
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_ca76152adc305af5f9f4bd4367c85d7ca7654852bce985ddf99831b2ef538e49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca76152adc305af5f9f4bd4367c85d7ca7654852bce985ddf99831b2ef538e49->enter($__internal_ca76152adc305af5f9f4bd4367c85d7ca7654852bce985ddf99831b2ef538e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_9ee2f8669d16bdeacfe3ee7c4b25cdd6e8ebd6e7c261a0a4a94d85f66c7787a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ee2f8669d16bdeacfe3ee7c4b25cdd6e8ebd6e7c261a0a4a94d85f66c7787a8->enter($__internal_9ee2f8669d16bdeacfe3ee7c4b25cdd6e8ebd6e7c261a0a4a94d85f66c7787a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 12
        echo "    <nav class=\"navbar navbar-expand bg-light\">
        <h4 class=\"navbar-brand my-0\">Bienvenido ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->getSourceContext()); })()), "user", array()), "correo", array()), "html", null, true);
        echo "</h4>
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Mi usuario</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Compras</a></li>
            <li class=\"nav-item\"><a class=\"nav-item btn btn-outline-success ml-3 px-5\" href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carrito");
        echo "\">Carrito</a></li>
            ";
        // line 18
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 18, $this->getSourceContext()); })()), "user", array()), "admin", array())) {
            // line 19
            echo "            <li class=\"nav-item\"><a class=\"nav-item btn btn-outline-info ml-3 px-5\" href=\"/zonaAdmin\">Zona admin</a></li>
            ";
        }
        // line 21
        echo "        </ul>

        <form class=\"form form-inline\">
            <input type=\"text\" class=\"form-control mr-3\">
            <button class=\"btn btn-outline-success\">Buscar</button>
        </form>
        <a class=\"btn btn-danger ml-3\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\">Cerrar Sesion</a>
    </nav>
    ";
        
        $__internal_9ee2f8669d16bdeacfe3ee7c4b25cdd6e8ebd6e7c261a0a4a94d85f66c7787a8->leave($__internal_9ee2f8669d16bdeacfe3ee7c4b25cdd6e8ebd6e7c261a0a4a94d85f66c7787a8_prof);

        
        $__internal_ca76152adc305af5f9f4bd4367c85d7ca7654852bce985ddf99831b2ef538e49->leave($__internal_ca76152adc305af5f9f4bd4367c85d7ca7654852bce985ddf99831b2ef538e49_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_642bcfbf864b6d9a34f28cd62a2594736c3b2222505c6a2a26e04d718f925973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_642bcfbf864b6d9a34f28cd62a2594736c3b2222505c6a2a26e04d718f925973->enter($__internal_642bcfbf864b6d9a34f28cd62a2594736c3b2222505c6a2a26e04d718f925973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_55a923ae5d4dd1ab2e290d68ce20a92d3f4a6e72e62838ebc2c135bd1359bda9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55a923ae5d4dd1ab2e290d68ce20a92d3f4a6e72e62838ebc2c135bd1359bda9->enter($__internal_55a923ae5d4dd1ab2e290d68ce20a92d3f4a6e72e62838ebc2c135bd1359bda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_55a923ae5d4dd1ab2e290d68ce20a92d3f4a6e72e62838ebc2c135bd1359bda9->leave($__internal_55a923ae5d4dd1ab2e290d68ce20a92d3f4a6e72e62838ebc2c135bd1359bda9_prof);

        
        $__internal_642bcfbf864b6d9a34f28cd62a2594736c3b2222505c6a2a26e04d718f925973->leave($__internal_642bcfbf864b6d9a34f28cd62a2594736c3b2222505c6a2a26e04d718f925973_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5bf1fec8c2eb236b977a80e55c12ada63092f9494c5fe9c184553f8bc19cb023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf1fec8c2eb236b977a80e55c12ada63092f9494c5fe9c184553f8bc19cb023->enter($__internal_5bf1fec8c2eb236b977a80e55c12ada63092f9494c5fe9c184553f8bc19cb023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0e3b738bc5a8f7e905d5540e67fee7d65e725db4c6d924d59c6ff39a86d93df0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e3b738bc5a8f7e905d5540e67fee7d65e725db4c6d924d59c6ff39a86d93df0->enter($__internal_0e3b738bc5a8f7e905d5540e67fee7d65e725db4c6d924d59c6ff39a86d93df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0e3b738bc5a8f7e905d5540e67fee7d65e725db4c6d924d59c6ff39a86d93df0->leave($__internal_0e3b738bc5a8f7e905d5540e67fee7d65e725db4c6d924d59c6ff39a86d93df0_prof);

        
        $__internal_5bf1fec8c2eb236b977a80e55c12ada63092f9494c5fe9c184553f8bc19cb023->leave($__internal_5bf1fec8c2eb236b977a80e55c12ada63092f9494c5fe9c184553f8bc19cb023_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  169 => 31,  152 => 30,  139 => 27,  131 => 21,  127 => 19,  125 => 18,  121 => 17,  114 => 13,  111 => 12,  102 => 11,  85 => 8,  68 => 7,  56 => 32,  53 => 31,  50 => 30,  48 => 11,  44 => 9,  42 => 8,  38 => 7,  30 => 1,);
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
    <body style=\"background-color: #4DE885;\">
    {% block navbar %}
    <nav class=\"navbar navbar-expand bg-light\">
        <h4 class=\"navbar-brand my-0\">Bienvenido {{ app.user.correo }}</h4>
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Mi usuario</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Compras</a></li>
            <li class=\"nav-item\"><a class=\"nav-item btn btn-outline-success ml-3 px-5\" href=\"{{ path('carrito') }}\">Carrito</a></li>
            {% if app.user.admin %}
            <li class=\"nav-item\"><a class=\"nav-item btn btn-outline-info ml-3 px-5\" href=\"/zonaAdmin\">Zona admin</a></li>
            {% endif %}
        </ul>

        <form class=\"form form-inline\">
            <input type=\"text\" class=\"form-control mr-3\">
            <button class=\"btn btn-outline-success\">Buscar</button>
        </form>
        <a class=\"btn btn-danger ml-3\" href=\"{{ path('logout') }}\">Cerrar Sesion</a>
    </nav>
    {% endblock %}
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Pedidos\\templates\\base.html.twig");
    }
}
