<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_b0dcf729e21e7b2b63f9fca65ac5f30971d8cc7e9e01e35338e38f87c0545039 extends Twig_Template
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
        $__internal_ec86cfe34907bf471cbc99f33a4a9641865c7dda4128e6fadb7672a201929c5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec86cfe34907bf471cbc99f33a4a9641865c7dda4128e6fadb7672a201929c5b->enter($__internal_ec86cfe34907bf471cbc99f33a4a9641865c7dda4128e6fadb7672a201929c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_7a39124617132f460aa22a3570ede2e252d4ca040f1afa9a1f45aeec03714e8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a39124617132f460aa22a3570ede2e252d4ca040f1afa9a1f45aeec03714e8b->enter($__internal_7a39124617132f460aa22a3570ede2e252d4ca040f1afa9a1f45aeec03714e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_ec86cfe34907bf471cbc99f33a4a9641865c7dda4128e6fadb7672a201929c5b->leave($__internal_ec86cfe34907bf471cbc99f33a4a9641865c7dda4128e6fadb7672a201929c5b_prof);

        
        $__internal_7a39124617132f460aa22a3570ede2e252d4ca040f1afa9a1f45aeec03714e8b->leave($__internal_7a39124617132f460aa22a3570ede2e252d4ca040f1afa9a1f45aeec03714e8b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
