<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e2058e593fb310591c285313506d0a26e4aaa3ac3b4057def899ffd12e20cf84 extends Twig_Template
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
        $__internal_724ee6ee01576ecc213173cc3fee92d8763b52fcd812129998ebf5193ef3ee13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_724ee6ee01576ecc213173cc3fee92d8763b52fcd812129998ebf5193ef3ee13->enter($__internal_724ee6ee01576ecc213173cc3fee92d8763b52fcd812129998ebf5193ef3ee13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_3a396145fc0950baea0d4d6c6afdc5361734e411bbf23454b3973a6806e126f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a396145fc0950baea0d4d6c6afdc5361734e411bbf23454b3973a6806e126f8->enter($__internal_3a396145fc0950baea0d4d6c6afdc5361734e411bbf23454b3973a6806e126f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_724ee6ee01576ecc213173cc3fee92d8763b52fcd812129998ebf5193ef3ee13->leave($__internal_724ee6ee01576ecc213173cc3fee92d8763b52fcd812129998ebf5193ef3ee13_prof);

        
        $__internal_3a396145fc0950baea0d4d6c6afdc5361734e411bbf23454b3973a6806e126f8->leave($__internal_3a396145fc0950baea0d4d6c6afdc5361734e411bbf23454b3973a6806e126f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
