<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_e65e64201a0806cad25e171e2a61f7bb862dfdbba389d1ed2cdf715f0c6d77a4 extends Twig_Template
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
        $__internal_52dce586dbce158ba9ca90d7765ff80c78b706cf3874a55218d8b4e998b8d277 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52dce586dbce158ba9ca90d7765ff80c78b706cf3874a55218d8b4e998b8d277->enter($__internal_52dce586dbce158ba9ca90d7765ff80c78b706cf3874a55218d8b4e998b8d277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_ecf598484d8755b45761a6bcd327088a6a6c27d4cfdab4bebe43a16add4c32bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf598484d8755b45761a6bcd327088a6a6c27d4cfdab4bebe43a16add4c32bc->enter($__internal_ecf598484d8755b45761a6bcd327088a6a6c27d4cfdab4bebe43a16add4c32bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_52dce586dbce158ba9ca90d7765ff80c78b706cf3874a55218d8b4e998b8d277->leave($__internal_52dce586dbce158ba9ca90d7765ff80c78b706cf3874a55218d8b4e998b8d277_prof);

        
        $__internal_ecf598484d8755b45761a6bcd327088a6a6c27d4cfdab4bebe43a16add4c32bc->leave($__internal_ecf598484d8755b45761a6bcd327088a6a6c27d4cfdab4bebe43a16add4c32bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
