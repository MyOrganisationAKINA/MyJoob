<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_2351a5b935525f17b8ff6d50b069b054ebd428032c01581b18e67a2be136ec09 extends Twig_Template
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
        $__internal_ab619429591452b407fb14eae710a76d650edf6702b2a4e155a3318325052b4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab619429591452b407fb14eae710a76d650edf6702b2a4e155a3318325052b4a->enter($__internal_ab619429591452b407fb14eae710a76d650edf6702b2a4e155a3318325052b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_a6e019a5c22ae7650d9baae6515f8c6430ce52ca249951117f0598de15a59fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6e019a5c22ae7650d9baae6515f8c6430ce52ca249951117f0598de15a59fb0->enter($__internal_a6e019a5c22ae7650d9baae6515f8c6430ce52ca249951117f0598de15a59fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_ab619429591452b407fb14eae710a76d650edf6702b2a4e155a3318325052b4a->leave($__internal_ab619429591452b407fb14eae710a76d650edf6702b2a4e155a3318325052b4a_prof);

        
        $__internal_a6e019a5c22ae7650d9baae6515f8c6430ce52ca249951117f0598de15a59fb0->leave($__internal_a6e019a5c22ae7650d9baae6515f8c6430ce52ca249951117f0598de15a59fb0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
