<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_a6e23cf060e4f4e0b992f60bc7946d956232e7d2e7dc0b865bece2019419196f extends Twig_Template
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
        $__internal_17446b550fa9cb508d483979baa7dfe260c4b773827cdf44df25f0b0651174be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17446b550fa9cb508d483979baa7dfe260c4b773827cdf44df25f0b0651174be->enter($__internal_17446b550fa9cb508d483979baa7dfe260c4b773827cdf44df25f0b0651174be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_5e87cce3762c33ee571d1537521cc92ac0b457bb92985d55b74798bc4af4758e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e87cce3762c33ee571d1537521cc92ac0b457bb92985d55b74798bc4af4758e->enter($__internal_5e87cce3762c33ee571d1537521cc92ac0b457bb92985d55b74798bc4af4758e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_17446b550fa9cb508d483979baa7dfe260c4b773827cdf44df25f0b0651174be->leave($__internal_17446b550fa9cb508d483979baa7dfe260c4b773827cdf44df25f0b0651174be_prof);

        
        $__internal_5e87cce3762c33ee571d1537521cc92ac0b457bb92985d55b74798bc4af4758e->leave($__internal_5e87cce3762c33ee571d1537521cc92ac0b457bb92985d55b74798bc4af4758e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
