<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_5e2ecfb51ed6b3744dcbf5f9f8059f76210e30b1fe13bc787aef3672bc6f8d24 extends Twig_Template
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
        $__internal_3e406349be22df9413d0ee6ce32d109165e2624613b6fd5098c46c83966595f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e406349be22df9413d0ee6ce32d109165e2624613b6fd5098c46c83966595f5->enter($__internal_3e406349be22df9413d0ee6ce32d109165e2624613b6fd5098c46c83966595f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_9b38127f6a182d79e64f8d023de57bf792c082cb4a824a5f04b7e56916d2b53d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b38127f6a182d79e64f8d023de57bf792c082cb4a824a5f04b7e56916d2b53d->enter($__internal_9b38127f6a182d79e64f8d023de57bf792c082cb4a824a5f04b7e56916d2b53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_3e406349be22df9413d0ee6ce32d109165e2624613b6fd5098c46c83966595f5->leave($__internal_3e406349be22df9413d0ee6ce32d109165e2624613b6fd5098c46c83966595f5_prof);

        
        $__internal_9b38127f6a182d79e64f8d023de57bf792c082cb4a824a5f04b7e56916d2b53d->leave($__internal_9b38127f6a182d79e64f8d023de57bf792c082cb4a824a5f04b7e56916d2b53d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\Pedidos\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
