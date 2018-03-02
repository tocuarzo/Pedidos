<?php

/* login/login.html.twig */
class __TwigTemplate_57977d410c5b0055c9ac4dc0f543e441a2f913385d81234730670aa3bc48ffcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_424cbd07a37e1bb040e5bfa3b9eca6887f6151e60448381d2199467a996f1e81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_424cbd07a37e1bb040e5bfa3b9eca6887f6151e60448381d2199467a996f1e81->enter($__internal_424cbd07a37e1bb040e5bfa3b9eca6887f6151e60448381d2199467a996f1e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        $__internal_03e2e3ffc6aa9bfc8b93ffded0cbc3b560daa9c176dea8624354bba64f5a9faa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03e2e3ffc6aa9bfc8b93ffded0cbc3b560daa9c176dea8624354bba64f5a9faa->enter($__internal_03e2e3ffc6aa9bfc8b93ffded0cbc3b560daa9c176dea8624354bba64f5a9faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        // line 1
        echo "<!doctype html>
<html>
<head>
<meta charset=\"utf-8\">
<title>Login</title>
<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/estilos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js\"></script>
\t<style>
\t\tinput:focus {outline: none; margin: 0;}
\t</style>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
</head>

<body>
<div class=\"text-center\" style=\"padding:50px 0; text-align: center\">

\t<div class=\"logo\">Login</div>

\t<!-- Main Form -->

\t<div class=\"login-form-1\">

\t\t<form method=\"POST\" id=\"login-form\" class=\"text-left\">

\t\t\t<div class=\"login-form-main-message\"></div>

\t\t\t<div class=\"main-login-form\">

\t\t\t\t<div class=\"login-group\" style=\"text-align: left;\">

\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t<label for=\"lg_username\" class=\"sr-only\">Nombre de usuario</label>

\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"lg_username\" name=\"_username\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["lastuser"]) || array_key_exists("lastuser", $context) ? $context["lastuser"] : (function () { throw new Twig_Error_Runtime('Variable "lastuser" does not exist.', 36, $this->getSourceContext()); })()), "html", null, true);
        echo "\">

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t<label for=\"lg_password\" class=\"sr-only\">Contraseña</label>

\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"lg_password\" name=\"_password\">

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group login-group-checkbox\">

\t\t\t\t\t\t<input type=\"checkbox\" id=\"lg_remember\" name=\"lg_remember\">

\t\t\t\t\t\t<label for=\"lg_remember\">Recordar</label>

\t\t\t\t\t</div>
                    ";
        // line 55
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 55, $this->getSourceContext()); })())) {
            // line 56
            echo "
\t\t\t\t\t<div class=\"invalid-feedback\" id=\"lg_error\">

\t\t\t\t\t\t<p style=\"color: red\">";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 59, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 59, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</p>

\t\t\t\t\t</div>
                    ";
        }
        // line 63
        echo "
\t\t\t\t</div>

\t\t\t\t<button type=\"submit\" class=\"login-button\"><i class=\"fa fa-chevron-right\">ir</i></button>

\t\t\t</div>

\t\t\t<div class=\"etc-login-form\">

\t\t\t\t<p>¿Nuevo usuario? <a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("registro");
        echo "\"><br>Crear una cuenta</a></p>

\t\t\t</div>

\t\t</form>

\t</div>

\t<!-- end:Main Form -->

</div>
</body>

</html>";
        
        $__internal_424cbd07a37e1bb040e5bfa3b9eca6887f6151e60448381d2199467a996f1e81->leave($__internal_424cbd07a37e1bb040e5bfa3b9eca6887f6151e60448381d2199467a996f1e81_prof);

        
        $__internal_03e2e3ffc6aa9bfc8b93ffded0cbc3b560daa9c176dea8624354bba64f5a9faa->leave($__internal_03e2e3ffc6aa9bfc8b93ffded0cbc3b560daa9c176dea8624354bba64f5a9faa_prof);

    }

    public function getTemplateName()
    {
        return "login/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 72,  101 => 63,  94 => 59,  89 => 56,  87 => 55,  65 => 36,  32 => 6,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html>
<head>
<meta charset=\"utf-8\">
<title>Login</title>
<link href=\"{{ asset('/css/estilos.css') }}\" rel=\"stylesheet\" type=\"text/css\">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js\"></script>
\t<style>
\t\tinput:focus {outline: none; margin: 0;}
\t</style>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
</head>

<body>
<div class=\"text-center\" style=\"padding:50px 0; text-align: center\">

\t<div class=\"logo\">Login</div>

\t<!-- Main Form -->

\t<div class=\"login-form-1\">

\t\t<form method=\"POST\" id=\"login-form\" class=\"text-left\">

\t\t\t<div class=\"login-form-main-message\"></div>

\t\t\t<div class=\"main-login-form\">

\t\t\t\t<div class=\"login-group\" style=\"text-align: left;\">

\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t<label for=\"lg_username\" class=\"sr-only\">Nombre de usuario</label>

\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"lg_username\" name=\"_username\" value=\"{{ lastuser }}\">

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t<label for=\"lg_password\" class=\"sr-only\">Contraseña</label>

\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"lg_password\" name=\"_password\">

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group login-group-checkbox\">

\t\t\t\t\t\t<input type=\"checkbox\" id=\"lg_remember\" name=\"lg_remember\">

\t\t\t\t\t\t<label for=\"lg_remember\">Recordar</label>

\t\t\t\t\t</div>
                    {% if error %}

\t\t\t\t\t<div class=\"invalid-feedback\" id=\"lg_error\">

\t\t\t\t\t\t<p style=\"color: red\">{{ error.messageKey|trans(error.messageData, 'security') }}</p>

\t\t\t\t\t</div>
                    {% endif %}

\t\t\t\t</div>

\t\t\t\t<button type=\"submit\" class=\"login-button\"><i class=\"fa fa-chevron-right\">ir</i></button>

\t\t\t</div>

\t\t\t<div class=\"etc-login-form\">

\t\t\t\t<p>¿Nuevo usuario? <a href=\"{{ url(\"registro\") }}\"><br>Crear una cuenta</a></p>

\t\t\t</div>

\t\t</form>

\t</div>

\t<!-- end:Main Form -->

</div>
</body>

</html>", "login/login.html.twig", "D:\\Pedidos\\templates\\login\\login.html.twig");
    }
}
