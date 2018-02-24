<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_cfd5706fcd02e042f12ad936a8599982598c9401143d3278f02130268b20b5fd extends Twig_Template
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
        $__internal_8c65a234381b4a65faae0d8485361b767846ecda44f5837357dceffe08e640f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c65a234381b4a65faae0d8485361b767846ecda44f5837357dceffe08e640f2->enter($__internal_8c65a234381b4a65faae0d8485361b767846ecda44f5837357dceffe08e640f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_7aa719f2e278fa253223deed9047f2ad0d5391ce609ec1573ad756da1b5f2e6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aa719f2e278fa253223deed9047f2ad0d5391ce609ec1573ad756da1b5f2e6a->enter($__internal_7aa719f2e278fa253223deed9047f2ad0d5391ce609ec1573ad756da1b5f2e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_8c65a234381b4a65faae0d8485361b767846ecda44f5837357dceffe08e640f2->leave($__internal_8c65a234381b4a65faae0d8485361b767846ecda44f5837357dceffe08e640f2_prof);

        
        $__internal_7aa719f2e278fa253223deed9047f2ad0d5391ce609ec1573ad756da1b5f2e6a->leave($__internal_7aa719f2e278fa253223deed9047f2ad0d5391ce609ec1573ad756da1b5f2e6a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
