<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_248d7bfd4b3cfc9c65853e9d39f03d050f837b7352376bd57e191b85fb869eb8 extends Twig_Template
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
        $__internal_b0d81c1fc21c022c18f5911fb2a7d570a2800ad181a979884fadc4d33abc67d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0d81c1fc21c022c18f5911fb2a7d570a2800ad181a979884fadc4d33abc67d0->enter($__internal_b0d81c1fc21c022c18f5911fb2a7d570a2800ad181a979884fadc4d33abc67d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_ace35baa8843dbf0543020531aaec467ede55d1b3fa8beadab92736bd53f13c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ace35baa8843dbf0543020531aaec467ede55d1b3fa8beadab92736bd53f13c6->enter($__internal_ace35baa8843dbf0543020531aaec467ede55d1b3fa8beadab92736bd53f13c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_b0d81c1fc21c022c18f5911fb2a7d570a2800ad181a979884fadc4d33abc67d0->leave($__internal_b0d81c1fc21c022c18f5911fb2a7d570a2800ad181a979884fadc4d33abc67d0_prof);

        
        $__internal_ace35baa8843dbf0543020531aaec467ede55d1b3fa8beadab92736bd53f13c6->leave($__internal_ace35baa8843dbf0543020531aaec467ede55d1b3fa8beadab92736bd53f13c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
