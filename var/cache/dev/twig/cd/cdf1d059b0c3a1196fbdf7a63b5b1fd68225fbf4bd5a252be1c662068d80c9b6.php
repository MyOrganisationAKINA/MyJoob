<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ec54a3e07847b95f4576d7d493ad687fe46d2fa86a318c7c42f9c50c24f2aaac extends Twig_Template
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
        $__internal_d824b4f94258d95f21750b66dc25157862af46182979e013aa4f64c231495444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d824b4f94258d95f21750b66dc25157862af46182979e013aa4f64c231495444->enter($__internal_d824b4f94258d95f21750b66dc25157862af46182979e013aa4f64c231495444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_51fc6209ca337a6259b44d9c2fb097e0c3e60db7039536f2566454f1134afbcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51fc6209ca337a6259b44d9c2fb097e0c3e60db7039536f2566454f1134afbcf->enter($__internal_51fc6209ca337a6259b44d9c2fb097e0c3e60db7039536f2566454f1134afbcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d824b4f94258d95f21750b66dc25157862af46182979e013aa4f64c231495444->leave($__internal_d824b4f94258d95f21750b66dc25157862af46182979e013aa4f64c231495444_prof);

        
        $__internal_51fc6209ca337a6259b44d9c2fb097e0c3e60db7039536f2566454f1134afbcf->leave($__internal_51fc6209ca337a6259b44d9c2fb097e0c3e60db7039536f2566454f1134afbcf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
