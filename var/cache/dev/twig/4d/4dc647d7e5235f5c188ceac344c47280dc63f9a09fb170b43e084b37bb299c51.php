<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_928da1a3c57cd16768568e7d32dbd6957e047fb59803ecddd70291a8a0b260a8 extends Twig_Template
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
        $__internal_ac73dc9e3ddc87641b41188983fe0eaca8b3392ae95720033e9f6a30080c02ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac73dc9e3ddc87641b41188983fe0eaca8b3392ae95720033e9f6a30080c02ba->enter($__internal_ac73dc9e3ddc87641b41188983fe0eaca8b3392ae95720033e9f6a30080c02ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_4266119ce194c98f4278b9a107ebfeeea0b80b64ee3ce38d278c2bd16b487947 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4266119ce194c98f4278b9a107ebfeeea0b80b64ee3ce38d278c2bd16b487947->enter($__internal_4266119ce194c98f4278b9a107ebfeeea0b80b64ee3ce38d278c2bd16b487947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_ac73dc9e3ddc87641b41188983fe0eaca8b3392ae95720033e9f6a30080c02ba->leave($__internal_ac73dc9e3ddc87641b41188983fe0eaca8b3392ae95720033e9f6a30080c02ba_prof);

        
        $__internal_4266119ce194c98f4278b9a107ebfeeea0b80b64ee3ce38d278c2bd16b487947->leave($__internal_4266119ce194c98f4278b9a107ebfeeea0b80b64ee3ce38d278c2bd16b487947_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\Pedidos\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
