<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_9f0b7b137cc8cbb9e18a7ab8953b94e90c1288173c9966599fd3d0528c7f6b99 extends Twig_Template
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
        $__internal_ffe4982784654ae9dc95df42e2b20f7ffd28f67b396473e687d85debea3fe4dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffe4982784654ae9dc95df42e2b20f7ffd28f67b396473e687d85debea3fe4dd->enter($__internal_ffe4982784654ae9dc95df42e2b20f7ffd28f67b396473e687d85debea3fe4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_23ae3043112aeedbb0e0636dee42d165b30b59003dd3216a80e1d2567451b417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23ae3043112aeedbb0e0636dee42d165b30b59003dd3216a80e1d2567451b417->enter($__internal_23ae3043112aeedbb0e0636dee42d165b30b59003dd3216a80e1d2567451b417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ffe4982784654ae9dc95df42e2b20f7ffd28f67b396473e687d85debea3fe4dd->leave($__internal_ffe4982784654ae9dc95df42e2b20f7ffd28f67b396473e687d85debea3fe4dd_prof);

        
        $__internal_23ae3043112aeedbb0e0636dee42d165b30b59003dd3216a80e1d2567451b417->leave($__internal_23ae3043112aeedbb0e0636dee42d165b30b59003dd3216a80e1d2567451b417_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
