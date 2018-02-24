<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_e69ea2fbd87db996559795308b3031e71f4932b97828f8343b9e480366be8bbe extends Twig_Template
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
        $__internal_6eda26ef44728967f62e8ee43e21620533747bfb7d4c259c83a5dc3b7aacb259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eda26ef44728967f62e8ee43e21620533747bfb7d4c259c83a5dc3b7aacb259->enter($__internal_6eda26ef44728967f62e8ee43e21620533747bfb7d4c259c83a5dc3b7aacb259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_3b34f5170d26462131e1d6ad74fb207204eec0644f3848e642c8f45abbc56e2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b34f5170d26462131e1d6ad74fb207204eec0644f3848e642c8f45abbc56e2b->enter($__internal_3b34f5170d26462131e1d6ad74fb207204eec0644f3848e642c8f45abbc56e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6eda26ef44728967f62e8ee43e21620533747bfb7d4c259c83a5dc3b7aacb259->leave($__internal_6eda26ef44728967f62e8ee43e21620533747bfb7d4c259c83a5dc3b7aacb259_prof);

        
        $__internal_3b34f5170d26462131e1d6ad74fb207204eec0644f3848e642c8f45abbc56e2b->leave($__internal_3b34f5170d26462131e1d6ad74fb207204eec0644f3848e642c8f45abbc56e2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
