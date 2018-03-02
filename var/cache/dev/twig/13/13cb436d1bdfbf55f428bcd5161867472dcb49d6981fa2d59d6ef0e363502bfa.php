<?php

/* /login/Registro.html.twig */
class __TwigTemplate_bfba5d5ea70211437f1b52e6e1054a3fd4f1047681392c4e3fb2fd0e71d2a52b extends Twig_Template
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
        $__internal_eb54a02e1408ed1306505fde61536e63475be9163b38f3f5a81e367f8a91933f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb54a02e1408ed1306505fde61536e63475be9163b38f3f5a81e367f8a91933f->enter($__internal_eb54a02e1408ed1306505fde61536e63475be9163b38f3f5a81e367f8a91933f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/login/Registro.html.twig"));

        $__internal_9d8c542c3d38c5478bef3423763d9630c7aaa08a05b11512dfadc8971e55c003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d8c542c3d38c5478bef3423763d9630c7aaa08a05b11512dfadc8971e55c003->enter($__internal_9d8c542c3d38c5478bef3423763d9630c7aaa08a05b11512dfadc8971e55c003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/login/Registro.html.twig"));

        // line 1
        echo "<!doctype html>

<html>

<head>
<meta charset=\"utf-8\">
<title>Registro</title>
\t<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styles.css"), "html", null, true);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), 'form_start');
        echo "
\t\t<div class=\"login-form-main-message\"></div>
\t\t<div class=\"main-login-form\">
\t\t\t<div class=\"login-group\" style=\"text-align: left;\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"correo\" class=\"sr-only\">Direccion de Correo</label><br/>
\t\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), "correo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 33
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), "correo", array()), 'errors')) {
            // line 34
            echo "\t\t\t\t\t\t<div id=\"reg_error\">
                            ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), "correo", array()), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->getSourceContext()); })()), "password", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 42
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), "password", array()), "first", array()), 'errors')) {
            // line 43
            echo "\t\t\t\t\t\t<div id=\"reg_error\">
                            ";
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->getSourceContext()); })()), "password", array()), "first", array()), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), "password", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"codigo_postal\" class=\"sr-only\">Codigo Postal</label>
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->getSourceContext()); })()), "CP", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 55
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->getSourceContext()); })()), "CP", array()), 'errors')) {
            // line 56
            echo "\t\t\t\t\t\t<div id=\"reg_error\">
                            ";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->getSourceContext()); })()), "CP", array()), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->getSourceContext()); })()), "direccion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"telefono\" class=\"sr-only\">Telefono</label>
                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 67, $this->getSourceContext()); })()), "telefono", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 68
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->getSourceContext()); })()), "telefono", array()), 'errors')) {
            // line 69
            echo "\t\t\t\t\t\t<div id=\"reg_error\">
                            ";
            // line 70
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 70, $this->getSourceContext()); })()), "telefono", array()), 'errors');
            echo "
\t\t\t\t\t\t</div>
                    ";
        }
        // line 73
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->getSourceContext()); })()), "Registro", array()), 'widget', array("attr" => array("class" => "login-button")));
        echo "
\t\t</div>
\t\t<div class=\"etc-login-form\">
\t\t\t<p>¿Ya tienes una cuenta? <br><a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("login");
        echo "\">Iniciar sesión</a></p>
\t\t</div>
        ";
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 80, $this->getSourceContext()); })()), 'form_end');
        echo "
\t</div>

\t<!-- end:Main Form -->

</div>
<script type=\"text/javascript\">
</script>
</body>

</html>";
        
        $__internal_eb54a02e1408ed1306505fde61536e63475be9163b38f3f5a81e367f8a91933f->leave($__internal_eb54a02e1408ed1306505fde61536e63475be9163b38f3f5a81e367f8a91933f_prof);

        
        $__internal_9d8c542c3d38c5478bef3423763d9630c7aaa08a05b11512dfadc8971e55c003->leave($__internal_9d8c542c3d38c5478bef3423763d9630c7aaa08a05b11512dfadc8971e55c003_prof);

    }

    public function getTemplateName()
    {
        return "/login/Registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 80,  163 => 78,  157 => 75,  153 => 73,  147 => 70,  144 => 69,  142 => 68,  138 => 67,  131 => 63,  126 => 60,  120 => 57,  117 => 56,  115 => 55,  111 => 54,  104 => 50,  99 => 47,  93 => 44,  90 => 43,  88 => 42,  84 => 41,  79 => 38,  73 => 35,  70 => 34,  68 => 33,  64 => 32,  55 => 26,  34 => 8,  25 => 1,);
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

</html>", "/login/Registro.html.twig", "D:\\Pedidos\\templates\\login\\Registro.html.twig");
    }
}
