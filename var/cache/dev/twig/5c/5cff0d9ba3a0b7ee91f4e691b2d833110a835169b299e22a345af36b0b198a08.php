<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_ea489ac037eff5b6cc5da6e46398cb3142524f8b1f8d695642203ccc4ca0976f extends Twig_Template
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
        $__internal_bb5dfd9a60b20c34776bf555c8ec807499a9b2f55581e62dad93b02b1313ccaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb5dfd9a60b20c34776bf555c8ec807499a9b2f55581e62dad93b02b1313ccaf->enter($__internal_bb5dfd9a60b20c34776bf555c8ec807499a9b2f55581e62dad93b02b1313ccaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_08bbc1ef4426868a7902dbbb08bf2b4f157e6c2d7ef20392be2745944fbe0208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08bbc1ef4426868a7902dbbb08bf2b4f157e6c2d7ef20392be2745944fbe0208->enter($__internal_08bbc1ef4426868a7902dbbb08bf2b4f157e6c2d7ef20392be2745944fbe0208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_bb5dfd9a60b20c34776bf555c8ec807499a9b2f55581e62dad93b02b1313ccaf->leave($__internal_bb5dfd9a60b20c34776bf555c8ec807499a9b2f55581e62dad93b02b1313ccaf_prof);

        
        $__internal_08bbc1ef4426868a7902dbbb08bf2b4f157e6c2d7ef20392be2745944fbe0208->leave($__internal_08bbc1ef4426868a7902dbbb08bf2b4f157e6c2d7ef20392be2745944fbe0208_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
