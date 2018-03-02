<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_6fad290243e436e513d678ac219eebf2c448aa351f244051e78ce378eafb2c9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4fc9a974583cd9aa0c9133b8a1fd93c3c641c87f35a365ea5c71cd569bb8969c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fc9a974583cd9aa0c9133b8a1fd93c3c641c87f35a365ea5c71cd569bb8969c->enter($__internal_4fc9a974583cd9aa0c9133b8a1fd93c3c641c87f35a365ea5c71cd569bb8969c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_0786711ea00916fe619580f85e6371871df90b35e5ce2e92c29955155be2034d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0786711ea00916fe619580f85e6371871df90b35e5ce2e92c29955155be2034d->enter($__internal_0786711ea00916fe619580f85e6371871df90b35e5ce2e92c29955155be2034d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_4fc9a974583cd9aa0c9133b8a1fd93c3c641c87f35a365ea5c71cd569bb8969c->leave($__internal_4fc9a974583cd9aa0c9133b8a1fd93c3c641c87f35a365ea5c71cd569bb8969c_prof);

        
        $__internal_0786711ea00916fe619580f85e6371871df90b35e5ce2e92c29955155be2034d->leave($__internal_0786711ea00916fe619580f85e6371871df90b35e5ce2e92c29955155be2034d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2db5d6fe64f569c4157c03e75361612c0fe9408830f89f7929982656a64145d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2db5d6fe64f569c4157c03e75361612c0fe9408830f89f7929982656a64145d->enter($__internal_e2db5d6fe64f569c4157c03e75361612c0fe9408830f89f7929982656a64145d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8817816d77dcd39322477dd5034342d7ead07ac0262b99477dcb26b316ca5111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8817816d77dcd39322477dd5034342d7ead07ac0262b99477dcb26b316ca5111->enter($__internal_8817816d77dcd39322477dd5034342d7ead07ac0262b99477dcb26b316ca5111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8817816d77dcd39322477dd5034342d7ead07ac0262b99477dcb26b316ca5111->leave($__internal_8817816d77dcd39322477dd5034342d7ead07ac0262b99477dcb26b316ca5111_prof);

        
        $__internal_e2db5d6fe64f569c4157c03e75361612c0fe9408830f89f7929982656a64145d->leave($__internal_e2db5d6fe64f569c4157c03e75361612c0fe9408830f89f7929982656a64145d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1993558d02fff57aaaced3319e0856e2c3248f336f27116e899b0f7677d0c680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1993558d02fff57aaaced3319e0856e2c3248f336f27116e899b0f7677d0c680->enter($__internal_1993558d02fff57aaaced3319e0856e2c3248f336f27116e899b0f7677d0c680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3a2880163278a61f23fd49a9510481f030ae965b42d69ff8766835a37a8f69d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a2880163278a61f23fd49a9510481f030ae965b42d69ff8766835a37a8f69d9->enter($__internal_3a2880163278a61f23fd49a9510481f030ae965b42d69ff8766835a37a8f69d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3a2880163278a61f23fd49a9510481f030ae965b42d69ff8766835a37a8f69d9->leave($__internal_3a2880163278a61f23fd49a9510481f030ae965b42d69ff8766835a37a8f69d9_prof);

        
        $__internal_1993558d02fff57aaaced3319e0856e2c3248f336f27116e899b0f7677d0c680->leave($__internal_1993558d02fff57aaaced3319e0856e2c3248f336f27116e899b0f7677d0c680_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a58f1a10949cfde8f19073d0196010bfc3d4e3f0999b820178b21ff365d806be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a58f1a10949cfde8f19073d0196010bfc3d4e3f0999b820178b21ff365d806be->enter($__internal_a58f1a10949cfde8f19073d0196010bfc3d4e3f0999b820178b21ff365d806be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b351bae6f1b193b5fa62d75aab1fb3013cceabb5761e2b4920a2bd5ffb78900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b351bae6f1b193b5fa62d75aab1fb3013cceabb5761e2b4920a2bd5ffb78900->enter($__internal_8b351bae6f1b193b5fa62d75aab1fb3013cceabb5761e2b4920a2bd5ffb78900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8b351bae6f1b193b5fa62d75aab1fb3013cceabb5761e2b4920a2bd5ffb78900->leave($__internal_8b351bae6f1b193b5fa62d75aab1fb3013cceabb5761e2b4920a2bd5ffb78900_prof);

        
        $__internal_a58f1a10949cfde8f19073d0196010bfc3d4e3f0999b820178b21ff365d806be->leave($__internal_a58f1a10949cfde8f19073d0196010bfc3d4e3f0999b820178b21ff365d806be_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\Pedidos\\vendor\\symfony\\twig-bundle\\Resources\\views\\layout.html.twig");
    }
}
