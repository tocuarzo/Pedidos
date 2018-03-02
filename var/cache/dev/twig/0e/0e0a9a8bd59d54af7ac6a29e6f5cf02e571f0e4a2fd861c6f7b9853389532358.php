<?php

/* @EasyAdmin/default/field_file.html.twig */
class __TwigTemplate_bb2cffbab22f4f310b4126fedde01f7c0dcac8945a5a6cedd51c6478b0012594 extends Twig_Template
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
        $__internal_09e8394fedb83041be3d3c8456b5ee4d3606242667d53af32c5c0ae77a1725f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e8394fedb83041be3d3c8456b5ee4d3606242667d53af32c5c0ae77a1725f2->enter($__internal_09e8394fedb83041be3d3c8456b5ee4d3606242667d53af32c5c0ae77a1725f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_file.html.twig"));

        $__internal_bb09e2a6006651974b8d6bc422e08c5139788a4535cc1b773b5d3005df662e21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb09e2a6006651974b8d6bc422e08c5139788a4535cc1b773b5d3005df662e21->enter($__internal_bb09e2a6006651974b8d6bc422e08c5139788a4535cc1b773b5d3005df662e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_file.html.twig"));

        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })())), "html", null, true);
        echo "\" target=\"_blank\">
    ";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 2, $this->getSourceContext()); })())), "html", null, true);
        echo "
</a>
";
        
        $__internal_09e8394fedb83041be3d3c8456b5ee4d3606242667d53af32c5c0ae77a1725f2->leave($__internal_09e8394fedb83041be3d3c8456b5ee4d3606242667d53af32c5c0ae77a1725f2_prof);

        
        $__internal_bb09e2a6006651974b8d6bc422e08c5139788a4535cc1b773b5d3005df662e21->leave($__internal_bb09e2a6006651974b8d6bc422e08c5139788a4535cc1b773b5d3005df662e21_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"{{ asset(value) }}\" target=\"_blank\">
    {{ filename|easyadmin_truncate }}
</a>
", "@EasyAdmin/default/field_file.html.twig", "C:\\Pedidos\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\field_file.html.twig");
    }
}
