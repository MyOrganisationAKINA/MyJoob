<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_6b8caad697d66c3cda9d6e55807e266079d09256cbeeb140711b8c5e4a11c223 extends Twig_Template
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
        $__internal_7517b46908a35b896085c2f4d3b4ceb946da5e3176fffbc6a3a45adf6195504a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7517b46908a35b896085c2f4d3b4ceb946da5e3176fffbc6a3a45adf6195504a->enter($__internal_7517b46908a35b896085c2f4d3b4ceb946da5e3176fffbc6a3a45adf6195504a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_c07944f06a0ab153f64990f75932904893c43c258b3bedad81b2da3c7d6830a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c07944f06a0ab153f64990f75932904893c43c258b3bedad81b2da3c7d6830a4->enter($__internal_c07944f06a0ab153f64990f75932904893c43c258b3bedad81b2da3c7d6830a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_7517b46908a35b896085c2f4d3b4ceb946da5e3176fffbc6a3a45adf6195504a->leave($__internal_7517b46908a35b896085c2f4d3b4ceb946da5e3176fffbc6a3a45adf6195504a_prof);

        
        $__internal_c07944f06a0ab153f64990f75932904893c43c258b3bedad81b2da3c7d6830a4->leave($__internal_c07944f06a0ab153f64990f75932904893c43c258b3bedad81b2da3c7d6830a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
