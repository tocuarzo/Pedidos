<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_c42b45a9375696d336c36bf89039d44a58acc6c330ccb6abf16912834433ec31 extends Twig_Template
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
        $__internal_88defee229b67075463d5eb4322d4382ef7a5a42f0b7dd1aa16462433a0b2e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88defee229b67075463d5eb4322d4382ef7a5a42f0b7dd1aa16462433a0b2e0e->enter($__internal_88defee229b67075463d5eb4322d4382ef7a5a42f0b7dd1aa16462433a0b2e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_99e0bb033ae601e9b9527a06961ebb35dfbcc2509d697d885bbfa3607d1c7f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99e0bb033ae601e9b9527a06961ebb35dfbcc2509d697d885bbfa3607d1c7f56->enter($__internal_99e0bb033ae601e9b9527a06961ebb35dfbcc2509d697d885bbfa3607d1c7f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_88defee229b67075463d5eb4322d4382ef7a5a42f0b7dd1aa16462433a0b2e0e->leave($__internal_88defee229b67075463d5eb4322d4382ef7a5a42f0b7dd1aa16462433a0b2e0e_prof);

        
        $__internal_99e0bb033ae601e9b9527a06961ebb35dfbcc2509d697d885bbfa3607d1c7f56->leave($__internal_99e0bb033ae601e9b9527a06961ebb35dfbcc2509d697d885bbfa3607d1c7f56_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_eac0a64d5e94e33bc7d5bd836d4a9e6b4ff8282126d7413fd425dbfa4e0357d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac0a64d5e94e33bc7d5bd836d4a9e6b4ff8282126d7413fd425dbfa4e0357d6->enter($__internal_eac0a64d5e94e33bc7d5bd836d4a9e6b4ff8282126d7413fd425dbfa4e0357d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_81f44efe3044cf3d41c8cbf30e0c7ce8ac510315f57a6fc070d9d05d65362b26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81f44efe3044cf3d41c8cbf30e0c7ce8ac510315f57a6fc070d9d05d65362b26->enter($__internal_81f44efe3044cf3d41c8cbf30e0c7ce8ac510315f57a6fc070d9d05d65362b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_81f44efe3044cf3d41c8cbf30e0c7ce8ac510315f57a6fc070d9d05d65362b26->leave($__internal_81f44efe3044cf3d41c8cbf30e0c7ce8ac510315f57a6fc070d9d05d65362b26_prof);

        
        $__internal_eac0a64d5e94e33bc7d5bd836d4a9e6b4ff8282126d7413fd425dbfa4e0357d6->leave($__internal_eac0a64d5e94e33bc7d5bd836d4a9e6b4ff8282126d7413fd425dbfa4e0357d6_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_823c953095a14c893a9835e5672c7864e82977a72eb9bb2e4bf213470e094e25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_823c953095a14c893a9835e5672c7864e82977a72eb9bb2e4bf213470e094e25->enter($__internal_823c953095a14c893a9835e5672c7864e82977a72eb9bb2e4bf213470e094e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d2fed2a3d5396069bbcbf34c0e6a336339fcce5bc93151566e10d4820f483e9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2fed2a3d5396069bbcbf34c0e6a336339fcce5bc93151566e10d4820f483e9a->enter($__internal_d2fed2a3d5396069bbcbf34c0e6a336339fcce5bc93151566e10d4820f483e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d2fed2a3d5396069bbcbf34c0e6a336339fcce5bc93151566e10d4820f483e9a->leave($__internal_d2fed2a3d5396069bbcbf34c0e6a336339fcce5bc93151566e10d4820f483e9a_prof);

        
        $__internal_823c953095a14c893a9835e5672c7864e82977a72eb9bb2e4bf213470e094e25->leave($__internal_823c953095a14c893a9835e5672c7864e82977a72eb9bb2e4bf213470e094e25_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b0817f4031e04d2f7fae7f2c41e377710e9eba50d9c195cdefb923279dcbedf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b0817f4031e04d2f7fae7f2c41e377710e9eba50d9c195cdefb923279dcbedf->enter($__internal_0b0817f4031e04d2f7fae7f2c41e377710e9eba50d9c195cdefb923279dcbedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7f50cb0e736e1ec336cff51c6a8fe66cf6f878fca802c4be6647171a98c6812f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f50cb0e736e1ec336cff51c6a8fe66cf6f878fca802c4be6647171a98c6812f->enter($__internal_7f50cb0e736e1ec336cff51c6a8fe66cf6f878fca802c4be6647171a98c6812f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7f50cb0e736e1ec336cff51c6a8fe66cf6f878fca802c4be6647171a98c6812f->leave($__internal_7f50cb0e736e1ec336cff51c6a8fe66cf6f878fca802c4be6647171a98c6812f_prof);

        
        $__internal_0b0817f4031e04d2f7fae7f2c41e377710e9eba50d9c195cdefb923279dcbedf->leave($__internal_0b0817f4031e04d2f7fae7f2c41e377710e9eba50d9c195cdefb923279dcbedf_prof);

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
