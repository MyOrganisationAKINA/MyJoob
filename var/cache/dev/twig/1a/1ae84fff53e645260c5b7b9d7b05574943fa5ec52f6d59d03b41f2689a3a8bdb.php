<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_b184eb827511296740f03ac869d4875e6ad99eaf725f233ca1d05b9f7ac35da3 extends Twig_Template
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
        $__internal_8b0ba9d6b264d3d8ae4ac3ba81843dce1020e5dfc387e07da4da3c14240ca0c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b0ba9d6b264d3d8ae4ac3ba81843dce1020e5dfc387e07da4da3c14240ca0c5->enter($__internal_8b0ba9d6b264d3d8ae4ac3ba81843dce1020e5dfc387e07da4da3c14240ca0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_0ecb0924550b8ad0195551fa39cc23a1797aff4339ba5bb8e25ec2cec2c64370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ecb0924550b8ad0195551fa39cc23a1797aff4339ba5bb8e25ec2cec2c64370->enter($__internal_0ecb0924550b8ad0195551fa39cc23a1797aff4339ba5bb8e25ec2cec2c64370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_8b0ba9d6b264d3d8ae4ac3ba81843dce1020e5dfc387e07da4da3c14240ca0c5->leave($__internal_8b0ba9d6b264d3d8ae4ac3ba81843dce1020e5dfc387e07da4da3c14240ca0c5_prof);

        
        $__internal_0ecb0924550b8ad0195551fa39cc23a1797aff4339ba5bb8e25ec2cec2c64370->leave($__internal_0ecb0924550b8ad0195551fa39cc23a1797aff4339ba5bb8e25ec2cec2c64370_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
