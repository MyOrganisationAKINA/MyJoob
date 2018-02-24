<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_88423b3302e4e5745f2b650e220f4ac10d40f006b54b9885dfd888fa32f80857 extends Twig_Template
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
        $__internal_a1d191b570bad568a580a91da3bf67bcf46e400987aaa984012b771b45863774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1d191b570bad568a580a91da3bf67bcf46e400987aaa984012b771b45863774->enter($__internal_a1d191b570bad568a580a91da3bf67bcf46e400987aaa984012b771b45863774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_ff1332fa3fe12082a8fa41479ae7903d828785b37962ce3799b62d4a441af0a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff1332fa3fe12082a8fa41479ae7903d828785b37962ce3799b62d4a441af0a3->enter($__internal_ff1332fa3fe12082a8fa41479ae7903d828785b37962ce3799b62d4a441af0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_a1d191b570bad568a580a91da3bf67bcf46e400987aaa984012b771b45863774->leave($__internal_a1d191b570bad568a580a91da3bf67bcf46e400987aaa984012b771b45863774_prof);

        
        $__internal_ff1332fa3fe12082a8fa41479ae7903d828785b37962ce3799b62d4a441af0a3->leave($__internal_ff1332fa3fe12082a8fa41479ae7903d828785b37962ce3799b62d4a441af0a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
