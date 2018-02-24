<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_2e0783b5da51e384bf021c1b96e39e92a61479f08f6e34190b4571ddcb100c22 extends Twig_Template
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
        $__internal_36f05396b40feea1db1ac7ddee1d069b1347e95317a5f7b8036285e80ec4d2ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36f05396b40feea1db1ac7ddee1d069b1347e95317a5f7b8036285e80ec4d2ac->enter($__internal_36f05396b40feea1db1ac7ddee1d069b1347e95317a5f7b8036285e80ec4d2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_71eef9812ec9a0203e2339d0d82852078275ea8a6cacf8167347644e40f084be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71eef9812ec9a0203e2339d0d82852078275ea8a6cacf8167347644e40f084be->enter($__internal_71eef9812ec9a0203e2339d0d82852078275ea8a6cacf8167347644e40f084be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_36f05396b40feea1db1ac7ddee1d069b1347e95317a5f7b8036285e80ec4d2ac->leave($__internal_36f05396b40feea1db1ac7ddee1d069b1347e95317a5f7b8036285e80ec4d2ac_prof);

        
        $__internal_71eef9812ec9a0203e2339d0d82852078275ea8a6cacf8167347644e40f084be->leave($__internal_71eef9812ec9a0203e2339d0d82852078275ea8a6cacf8167347644e40f084be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
