<?php

/* login/Registro.html.twig */
class __TwigTemplate_fdf197dafdf41c919a833350fe7bb2ae0c4552cd7b400e02acc4a957baf431fd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login/Registro.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login/Registro.html.twig"));

        // line 1
        echo "<!doctype html>

<html>

<head>
<meta charset=\"utf-8\">
<title>Registro</title>
\t<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">
\t<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js\"></script>
\t<style>
\t\tli {color: red;}
\t\tinput:focus {outline: none; margin: 0;}
\t</style>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
</head>

<body>
<div class=\"text-center\" style=\"padding:50px 0; text-align: center;\">
\t<div class=\"logo\">Registro</div>

\t<!-- Main Form -->

\t<div class=\"login-form-1\">
        ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), 'form_start');
        echo "
\t\t<div class=\"login-form-main-message\"></div>
\t\t<div class=\"main-login-form\">
\t\t\t<div class=\"login-group\" style=\"text-align: left;\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"correo\" class=\"sr-only\">Direccion de Correo</label><br/>
\t\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), "correo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 33
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "correo", array()), 'errors')) {
            // line 34
            echo "\t\t\t\t\t\t<div id=\"reg_error\">
                            ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "correo", array()), 'errors');
            echo "
\t\t\t\t\t\t</div>
                    ";
        }
        // line 38
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"reg_password\" class=\"sr-only\">Password</label>
\t\t\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()), "password", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 42
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "password", array()), "first", array()), 'errors')) {
            // line 43
            echo "\t\t\t\t\t\t<div id=\"reg_error\">
                            ";
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), "password", array()), "first", array()), 'errors');
            echo "
\t\t\t\t\t\t</div>
                    ";
        }
        // line 47
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"reg_password_confirm\" class=\"sr-only\">Confirmar Password</label>
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), "password", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"codigo_postal\" class=\"sr-only\">Codigo Postal</label>
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->source); })()), "CP", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 55
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->source); })()), "CP", array()), 'errors')) {
            // line 56
            echo "\t\t\t\t\t\t<div id=\"reg_error\">
                            ";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), "CP", array()), 'errors');
            echo "
\t\t\t\t\t\t</div>
                    ";
        }
        // line 60
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"direccion\" class=\"sr-only\">Direccion</label>
                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->source); })()), "direccion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"telefono\" class=\"sr-only\">Telefono</label>
                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 67, $this->source); })()), "telefono", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 68
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->source); })()), "telefono", array()), 'errors')) {
            // line 69
            echo "\t\t\t\t\t\t<div id=\"reg_error\">
                            ";
            // line 70
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 70, $this->source); })()), "telefono", array()), 'errors');
            echo "
\t\t\t\t\t\t</div>
                    ";
        }
        // line 73
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->source); })()), "Registro", array()), 'widget', array("attr" => array("class" => "login-button")));
        echo "
\t\t</div>
\t\t<div class=\"etc-login-form\">
\t\t\t<p>¿Ya tienes una cuenta? <br><a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("login");
        echo "\">Iniciar sesión</a></p>
\t\t</div>
        ";
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 80, $this->source); })()), 'form_end');
        echo "
\t</div>

\t<!-- end:Main Form -->

</div>
<script type=\"text/javascript\">
</script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "login/Registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 80,  167 => 78,  161 => 75,  157 => 73,  151 => 70,  148 => 69,  146 => 68,  142 => 67,  135 => 63,  130 => 60,  124 => 57,  121 => 56,  119 => 55,  115 => 54,  108 => 50,  103 => 47,  97 => 44,  94 => 43,  92 => 42,  88 => 41,  83 => 38,  77 => 35,  74 => 34,  72 => 33,  68 => 32,  59 => 26,  38 => 8,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>

<html>

<head>
<meta charset=\"utf-8\">
<title>Registro</title>
\t<link href=\"{{ asset(\"css/styles.css\") }}\" rel=\"stylesheet\" type=\"text/css\">
\t<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">
\t<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js\"></script>
\t<style>
\t\tli {color: red;}
\t\tinput:focus {outline: none; margin: 0;}
\t</style>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
</head>

<body>
<div class=\"text-center\" style=\"padding:50px 0; text-align: center;\">
\t<div class=\"logo\">Registro</div>

\t<!-- Main Form -->

\t<div class=\"login-form-1\">
        {{ form_start(form) }}
\t\t<div class=\"login-form-main-message\"></div>
\t\t<div class=\"main-login-form\">
\t\t\t<div class=\"login-group\" style=\"text-align: left;\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"correo\" class=\"sr-only\">Direccion de Correo</label><br/>
\t\t\t\t\t{{ form_widget(form.correo, {\"attr\": {\"class\": \"form-control\"}}) }}
                    {% if form_errors(form.correo) %}
\t\t\t\t\t\t<div id=\"reg_error\">
                            {{ form_errors(form.correo) }}
\t\t\t\t\t\t</div>
                    {% endif %}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"reg_password\" class=\"sr-only\">Password</label>
\t\t\t\t\t{{ form_widget(form.password.first, {'attr': {\"class\": \"form-control\"}}) }}
                    {% if form_errors(form.password.first) %}
\t\t\t\t\t\t<div id=\"reg_error\">
                            {{ form_errors(form.password.first) }}
\t\t\t\t\t\t</div>
                    {% endif %}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"reg_password_confirm\" class=\"sr-only\">Confirmar Password</label>
                    {{ form_widget(form.password.second, {'attr': {\"class\": \"form-control\"}}) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"codigo_postal\" class=\"sr-only\">Codigo Postal</label>
                    {{ form_widget(form.CP, {'attr': {\"class\": \"form-control\"}}) }}
                    {% if form_errors(form.CP) %}
\t\t\t\t\t\t<div id=\"reg_error\">
                            {{ form_errors(form.CP) }}
\t\t\t\t\t\t</div>
                    {% endif %}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"direccion\" class=\"sr-only\">Direccion</label>
                    {{ form_widget(form.direccion, {'attr': {\"class\": \"form-control\"}}) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"telefono\" class=\"sr-only\">Telefono</label>
                    {{ form_widget(form.telefono, {'attr': {\"class\": \"form-control\"}}) }}
                    {% if form_errors(form.telefono) %}
\t\t\t\t\t\t<div id=\"reg_error\">
                            {{ form_errors(form.telefono) }}
\t\t\t\t\t\t</div>
                    {% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{{ form_widget(form.Registro, {'attr': {\"class\": \"login-button\"}}) }}
\t\t</div>
\t\t<div class=\"etc-login-form\">
\t\t\t<p>¿Ya tienes una cuenta? <br><a href=\"{{ url('login') }}\">Iniciar sesión</a></p>
\t\t</div>
        {{ form_end(form) }}
\t</div>

\t<!-- end:Main Form -->

</div>
<script type=\"text/javascript\">
</script>
</body>

</html>", "login/Registro.html.twig", "C:\\Pedidos\\templates\\login\\Registro.html.twig");
    }
}
