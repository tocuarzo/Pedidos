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
        $__internal_3819cf4b70248667485bc3702d7615711c7023b406687dbe935e6af12df71296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3819cf4b70248667485bc3702d7615711c7023b406687dbe935e6af12df71296->enter($__internal_3819cf4b70248667485bc3702d7615711c7023b406687dbe935e6af12df71296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_2b788b33af845cb52ad2859b6f9ecd9247c634d5c4b8659719978d55032c3f47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b788b33af845cb52ad2859b6f9ecd9247c634d5c4b8659719978d55032c3f47->enter($__internal_2b788b33af845cb52ad2859b6f9ecd9247c634d5c4b8659719978d55032c3f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_3819cf4b70248667485bc3702d7615711c7023b406687dbe935e6af12df71296->leave($__internal_3819cf4b70248667485bc3702d7615711c7023b406687dbe935e6af12df71296_prof);

        
        $__internal_2b788b33af845cb52ad2859b6f9ecd9247c634d5c4b8659719978d55032c3f47->leave($__internal_2b788b33af845cb52ad2859b6f9ecd9247c634d5c4b8659719978d55032c3f47_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4eeba7f306edfec21cb00ba8d0c4da9ec674018b9433f48c8b41bd321e5dadf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4eeba7f306edfec21cb00ba8d0c4da9ec674018b9433f48c8b41bd321e5dadf->enter($__internal_c4eeba7f306edfec21cb00ba8d0c4da9ec674018b9433f48c8b41bd321e5dadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c73a4139fb763ec59dfba73a9f3dee079d5634b51eba9cdcc25908b2c51965d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c73a4139fb763ec59dfba73a9f3dee079d5634b51eba9cdcc25908b2c51965d3->enter($__internal_c73a4139fb763ec59dfba73a9f3dee079d5634b51eba9cdcc25908b2c51965d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c73a4139fb763ec59dfba73a9f3dee079d5634b51eba9cdcc25908b2c51965d3->leave($__internal_c73a4139fb763ec59dfba73a9f3dee079d5634b51eba9cdcc25908b2c51965d3_prof);

        
        $__internal_c4eeba7f306edfec21cb00ba8d0c4da9ec674018b9433f48c8b41bd321e5dadf->leave($__internal_c4eeba7f306edfec21cb00ba8d0c4da9ec674018b9433f48c8b41bd321e5dadf_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_421ff37b6802b26f547fee9bf91c9c78bcc9b0320e92ae507f346fdcd57b99e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_421ff37b6802b26f547fee9bf91c9c78bcc9b0320e92ae507f346fdcd57b99e2->enter($__internal_421ff37b6802b26f547fee9bf91c9c78bcc9b0320e92ae507f346fdcd57b99e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_29c654b9ee531fc16f99e39affa17a398c6ce9612c9c2ab42a905913ad79283b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29c654b9ee531fc16f99e39affa17a398c6ce9612c9c2ab42a905913ad79283b->enter($__internal_29c654b9ee531fc16f99e39affa17a398c6ce9612c9c2ab42a905913ad79283b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_29c654b9ee531fc16f99e39affa17a398c6ce9612c9c2ab42a905913ad79283b->leave($__internal_29c654b9ee531fc16f99e39affa17a398c6ce9612c9c2ab42a905913ad79283b_prof);

        
        $__internal_421ff37b6802b26f547fee9bf91c9c78bcc9b0320e92ae507f346fdcd57b99e2->leave($__internal_421ff37b6802b26f547fee9bf91c9c78bcc9b0320e92ae507f346fdcd57b99e2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccbc12bf4f30d67c82831179ec7fc4f3630fc062b4c358bf7f66129f8a31d714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccbc12bf4f30d67c82831179ec7fc4f3630fc062b4c358bf7f66129f8a31d714->enter($__internal_ccbc12bf4f30d67c82831179ec7fc4f3630fc062b4c358bf7f66129f8a31d714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f7ada5ec963c486c71475fcde95e5c1cb589e975e07a4c9890543240dd262fea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7ada5ec963c486c71475fcde95e5c1cb589e975e07a4c9890543240dd262fea->enter($__internal_f7ada5ec963c486c71475fcde95e5c1cb589e975e07a4c9890543240dd262fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f7ada5ec963c486c71475fcde95e5c1cb589e975e07a4c9890543240dd262fea->leave($__internal_f7ada5ec963c486c71475fcde95e5c1cb589e975e07a4c9890543240dd262fea_prof);

        
        $__internal_ccbc12bf4f30d67c82831179ec7fc4f3630fc062b4c358bf7f66129f8a31d714->leave($__internal_ccbc12bf4f30d67c82831179ec7fc4f3630fc062b4c358bf7f66129f8a31d714_prof);

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
", "@Twig/layout.html.twig", "D:\\Pedidos\\vendor\\symfony\\twig-bundle\\Resources\\views\\layout.html.twig");
    }
}
