<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_a467abe01d857974dcbdafb06fa74b66f9e633a88ece3a07b67204986cbd3d8f extends Twig_Template
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
        $__internal_2aef492b444d8550a1168841835abd77244b369b2f956c88aa6b95d069aa3975 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aef492b444d8550a1168841835abd77244b369b2f956c88aa6b95d069aa3975->enter($__internal_2aef492b444d8550a1168841835abd77244b369b2f956c88aa6b95d069aa3975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_2ba9327d3f59741829cf94b346182e67b30b1311d3b97386dc19879c9b57a20a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ba9327d3f59741829cf94b346182e67b30b1311d3b97386dc19879c9b57a20a->enter($__internal_2ba9327d3f59741829cf94b346182e67b30b1311d3b97386dc19879c9b57a20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_2aef492b444d8550a1168841835abd77244b369b2f956c88aa6b95d069aa3975->leave($__internal_2aef492b444d8550a1168841835abd77244b369b2f956c88aa6b95d069aa3975_prof);

        
        $__internal_2ba9327d3f59741829cf94b346182e67b30b1311d3b97386dc19879c9b57a20a->leave($__internal_2ba9327d3f59741829cf94b346182e67b30b1311d3b97386dc19879c9b57a20a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
