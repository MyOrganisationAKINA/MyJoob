<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_7c5ca4a68698dc2b74d160f7220e4b43f2bc8a2e1b7fdd4026a31f026f8b66e1 extends Twig_Template
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
        $__internal_d01c541b9f46ebb57c64578f3fcd6846f029bc299856dc444f4b217102c031b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d01c541b9f46ebb57c64578f3fcd6846f029bc299856dc444f4b217102c031b0->enter($__internal_d01c541b9f46ebb57c64578f3fcd6846f029bc299856dc444f4b217102c031b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_ed355a5cb5aa35e913c38ae387cd2d09f28cfbcaa9f5f738f8a39c1cd3f360aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed355a5cb5aa35e913c38ae387cd2d09f28cfbcaa9f5f738f8a39c1cd3f360aa->enter($__internal_ed355a5cb5aa35e913c38ae387cd2d09f28cfbcaa9f5f738f8a39c1cd3f360aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_d01c541b9f46ebb57c64578f3fcd6846f029bc299856dc444f4b217102c031b0->leave($__internal_d01c541b9f46ebb57c64578f3fcd6846f029bc299856dc444f4b217102c031b0_prof);

        
        $__internal_ed355a5cb5aa35e913c38ae387cd2d09f28cfbcaa9f5f738f8a39c1cd3f360aa->leave($__internal_ed355a5cb5aa35e913c38ae387cd2d09f28cfbcaa9f5f738f8a39c1cd3f360aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
