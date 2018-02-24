<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_fcbc65df1a0322b55d6cc099884424eaeb0e898507bc962f1da7f16d12ff7865 extends Twig_Template
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
        $__internal_e0d6e3ca171876262f27185fea8713732cfb4675eac3b168c2dc800aa1436a18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0d6e3ca171876262f27185fea8713732cfb4675eac3b168c2dc800aa1436a18->enter($__internal_e0d6e3ca171876262f27185fea8713732cfb4675eac3b168c2dc800aa1436a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_91ab1851b2c3b389df14d214fc2c63f348b1526b7f577b62852fd2758f292915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91ab1851b2c3b389df14d214fc2c63f348b1526b7f577b62852fd2758f292915->enter($__internal_91ab1851b2c3b389df14d214fc2c63f348b1526b7f577b62852fd2758f292915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e0d6e3ca171876262f27185fea8713732cfb4675eac3b168c2dc800aa1436a18->leave($__internal_e0d6e3ca171876262f27185fea8713732cfb4675eac3b168c2dc800aa1436a18_prof);

        
        $__internal_91ab1851b2c3b389df14d214fc2c63f348b1526b7f577b62852fd2758f292915->leave($__internal_91ab1851b2c3b389df14d214fc2c63f348b1526b7f577b62852fd2758f292915_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
