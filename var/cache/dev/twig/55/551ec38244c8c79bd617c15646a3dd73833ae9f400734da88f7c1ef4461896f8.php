<?php

/* base.html.twig */
class __TwigTemplate_523ed2c145eee82d4c9628f7b9c96add2095f7ab9dc83fb449c6897aa33e2cb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59b05bcb589c4362a2489032a5b93df2e36f3f932bdeaf7c27c21866e28d0efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b05bcb589c4362a2489032a5b93df2e36f3f932bdeaf7c27c21866e28d0efd->enter($__internal_59b05bcb589c4362a2489032a5b93df2e36f3f932bdeaf7c27c21866e28d0efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3c2fda800c49293a5c357f6fe70c4b4c3fd9c1f61555318e7c705078ac61da1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c2fda800c49293a5c357f6fe70c4b4c3fd9c1f61555318e7c705078ac61da1c->enter($__internal_3c2fda800c49293a5c357f6fe70c4b4c3fd9c1f61555318e7c705078ac61da1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "    </body>
</html>
";
        
        $__internal_59b05bcb589c4362a2489032a5b93df2e36f3f932bdeaf7c27c21866e28d0efd->leave($__internal_59b05bcb589c4362a2489032a5b93df2e36f3f932bdeaf7c27c21866e28d0efd_prof);

        
        $__internal_3c2fda800c49293a5c357f6fe70c4b4c3fd9c1f61555318e7c705078ac61da1c->leave($__internal_3c2fda800c49293a5c357f6fe70c4b4c3fd9c1f61555318e7c705078ac61da1c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_97fb305baf6c2524c14fd82979d557cdc18b6358af48152137c1b671fc1fae02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97fb305baf6c2524c14fd82979d557cdc18b6358af48152137c1b671fc1fae02->enter($__internal_97fb305baf6c2524c14fd82979d557cdc18b6358af48152137c1b671fc1fae02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9605dfe04132d81691dc9a7339d7d3049d030c1c60562cc5702878fd6331a0ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9605dfe04132d81691dc9a7339d7d3049d030c1c60562cc5702878fd6331a0ce->enter($__internal_9605dfe04132d81691dc9a7339d7d3049d030c1c60562cc5702878fd6331a0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9605dfe04132d81691dc9a7339d7d3049d030c1c60562cc5702878fd6331a0ce->leave($__internal_9605dfe04132d81691dc9a7339d7d3049d030c1c60562cc5702878fd6331a0ce_prof);

        
        $__internal_97fb305baf6c2524c14fd82979d557cdc18b6358af48152137c1b671fc1fae02->leave($__internal_97fb305baf6c2524c14fd82979d557cdc18b6358af48152137c1b671fc1fae02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d84a2499c2c1a46a7aa776aecd32ea37ab00172ffc73c02b4c97775a3098fce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d84a2499c2c1a46a7aa776aecd32ea37ab00172ffc73c02b4c97775a3098fce2->enter($__internal_d84a2499c2c1a46a7aa776aecd32ea37ab00172ffc73c02b4c97775a3098fce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_765ae53fa0e8714607b24da3d01f5bb554d96af5111fb5c34df3a4f8ff58c31b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_765ae53fa0e8714607b24da3d01f5bb554d96af5111fb5c34df3a4f8ff58c31b->enter($__internal_765ae53fa0e8714607b24da3d01f5bb554d96af5111fb5c34df3a4f8ff58c31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_765ae53fa0e8714607b24da3d01f5bb554d96af5111fb5c34df3a4f8ff58c31b->leave($__internal_765ae53fa0e8714607b24da3d01f5bb554d96af5111fb5c34df3a4f8ff58c31b_prof);

        
        $__internal_d84a2499c2c1a46a7aa776aecd32ea37ab00172ffc73c02b4c97775a3098fce2->leave($__internal_d84a2499c2c1a46a7aa776aecd32ea37ab00172ffc73c02b4c97775a3098fce2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_14b85a0a1b53e6211f23c5ae63b23a9e58fb9b4afec3810cc13d2990c2855f1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14b85a0a1b53e6211f23c5ae63b23a9e58fb9b4afec3810cc13d2990c2855f1d->enter($__internal_14b85a0a1b53e6211f23c5ae63b23a9e58fb9b4afec3810cc13d2990c2855f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a12b81fc0ded3396ee1944aec3c3fb64ddc50dce3cc99b47112cbf9e187d97fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a12b81fc0ded3396ee1944aec3c3fb64ddc50dce3cc99b47112cbf9e187d97fb->enter($__internal_a12b81fc0ded3396ee1944aec3c3fb64ddc50dce3cc99b47112cbf9e187d97fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a12b81fc0ded3396ee1944aec3c3fb64ddc50dce3cc99b47112cbf9e187d97fb->leave($__internal_a12b81fc0ded3396ee1944aec3c3fb64ddc50dce3cc99b47112cbf9e187d97fb_prof);

        
        $__internal_14b85a0a1b53e6211f23c5ae63b23a9e58fb9b4afec3810cc13d2990c2855f1d->leave($__internal_14b85a0a1b53e6211f23c5ae63b23a9e58fb9b4afec3810cc13d2990c2855f1d_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1c42aad57817cf37ca3fb01623ba005adab752cee3ec00fdd5da05e21787a75c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c42aad57817cf37ca3fb01623ba005adab752cee3ec00fdd5da05e21787a75c->enter($__internal_1c42aad57817cf37ca3fb01623ba005adab752cee3ec00fdd5da05e21787a75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_beb082b00cb89905cbe9db0a8ac23896d5c2613c539ebd57586c6ac465aeb810 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beb082b00cb89905cbe9db0a8ac23896d5c2613c539ebd57586c6ac465aeb810->enter($__internal_beb082b00cb89905cbe9db0a8ac23896d5c2613c539ebd57586c6ac465aeb810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_beb082b00cb89905cbe9db0a8ac23896d5c2613c539ebd57586c6ac465aeb810->leave($__internal_beb082b00cb89905cbe9db0a8ac23896d5c2613c539ebd57586c6ac465aeb810_prof);

        
        $__internal_1c42aad57817cf37ca3fb01623ba005adab752cee3ec00fdd5da05e21787a75c->leave($__internal_1c42aad57817cf37ca3fb01623ba005adab752cee3ec00fdd5da05e21787a75c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 10,  97 => 9,  80 => 6,  62 => 5,  50 => 11,  47 => 10,  45 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Pedidos\\templates\\base.html.twig");
    }
}
