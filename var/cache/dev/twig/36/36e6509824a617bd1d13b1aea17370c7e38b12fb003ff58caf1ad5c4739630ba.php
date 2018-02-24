<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_4b5fb074796073dcc4e0731d73ddf6bad9a4a7f78f7113fb63123c542dc736cf extends Twig_Template
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
        $__internal_ccec9177467767dc92189b40afe7ca4bbc12878f155999732716e63c84619f2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccec9177467767dc92189b40afe7ca4bbc12878f155999732716e63c84619f2b->enter($__internal_ccec9177467767dc92189b40afe7ca4bbc12878f155999732716e63c84619f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_9f118470446295b2d5024db34cc5c7eae1410893cd1becc4fe9c094b503b06b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f118470446295b2d5024db34cc5c7eae1410893cd1becc4fe9c094b503b06b5->enter($__internal_9f118470446295b2d5024db34cc5c7eae1410893cd1becc4fe9c094b503b06b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ccec9177467767dc92189b40afe7ca4bbc12878f155999732716e63c84619f2b->leave($__internal_ccec9177467767dc92189b40afe7ca4bbc12878f155999732716e63c84619f2b_prof);

        
        $__internal_9f118470446295b2d5024db34cc5c7eae1410893cd1becc4fe9c094b503b06b5->leave($__internal_9f118470446295b2d5024db34cc5c7eae1410893cd1becc4fe9c094b503b06b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
