<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_9c5fd0b37dec71bb257be231602d9ee56c4c8e65c5513840aa200aead2940606 extends Twig_Template
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
        $__internal_0f26be69d5fd94639af004e7dc803b6da084fb2a2fb08b7b39d0169973a15ce5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f26be69d5fd94639af004e7dc803b6da084fb2a2fb08b7b39d0169973a15ce5->enter($__internal_0f26be69d5fd94639af004e7dc803b6da084fb2a2fb08b7b39d0169973a15ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_fdfdbf6eb9c2dc1e4f0790af1c8697f01b6a122a83bdee12576123787f4b0847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdfdbf6eb9c2dc1e4f0790af1c8697f01b6a122a83bdee12576123787f4b0847->enter($__internal_fdfdbf6eb9c2dc1e4f0790af1c8697f01b6a122a83bdee12576123787f4b0847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_0f26be69d5fd94639af004e7dc803b6da084fb2a2fb08b7b39d0169973a15ce5->leave($__internal_0f26be69d5fd94639af004e7dc803b6da084fb2a2fb08b7b39d0169973a15ce5_prof);

        
        $__internal_fdfdbf6eb9c2dc1e4f0790af1c8697f01b6a122a83bdee12576123787f4b0847->leave($__internal_fdfdbf6eb9c2dc1e4f0790af1c8697f01b6a122a83bdee12576123787f4b0847_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
