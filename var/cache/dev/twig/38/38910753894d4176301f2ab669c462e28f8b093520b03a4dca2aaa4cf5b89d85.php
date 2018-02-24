<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_9f2aeb7b686b20d170484168c5491bc67bdd403ec78ab977f5f3640a430e686e extends Twig_Template
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
        $__internal_cc640e34770bf32c3fb9d1e87b2786a1eede0d22dd79d36af974b5736e3c879e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc640e34770bf32c3fb9d1e87b2786a1eede0d22dd79d36af974b5736e3c879e->enter($__internal_cc640e34770bf32c3fb9d1e87b2786a1eede0d22dd79d36af974b5736e3c879e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_8813bf98dbba23d67b8e6754c7a694a78360cbd0ab7aff3073031f1f198e2179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8813bf98dbba23d67b8e6754c7a694a78360cbd0ab7aff3073031f1f198e2179->enter($__internal_8813bf98dbba23d67b8e6754c7a694a78360cbd0ab7aff3073031f1f198e2179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_cc640e34770bf32c3fb9d1e87b2786a1eede0d22dd79d36af974b5736e3c879e->leave($__internal_cc640e34770bf32c3fb9d1e87b2786a1eede0d22dd79d36af974b5736e3c879e_prof);

        
        $__internal_8813bf98dbba23d67b8e6754c7a694a78360cbd0ab7aff3073031f1f198e2179->leave($__internal_8813bf98dbba23d67b8e6754c7a694a78360cbd0ab7aff3073031f1f198e2179_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
