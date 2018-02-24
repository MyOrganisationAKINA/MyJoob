<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_effd22203229c89bf1f4ca8b9ba03818384218e3093cf3105bbbf61f556a017c extends Twig_Template
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
        $__internal_433de09ff9bc4d8b4232852f13119765aa1484b80da583a86781bb8015111475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_433de09ff9bc4d8b4232852f13119765aa1484b80da583a86781bb8015111475->enter($__internal_433de09ff9bc4d8b4232852f13119765aa1484b80da583a86781bb8015111475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_39dd78338d7e1d44763134a2b208c95e8a3675fecec6a9e4b71ffe168b32ee28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39dd78338d7e1d44763134a2b208c95e8a3675fecec6a9e4b71ffe168b32ee28->enter($__internal_39dd78338d7e1d44763134a2b208c95e8a3675fecec6a9e4b71ffe168b32ee28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_433de09ff9bc4d8b4232852f13119765aa1484b80da583a86781bb8015111475->leave($__internal_433de09ff9bc4d8b4232852f13119765aa1484b80da583a86781bb8015111475_prof);

        
        $__internal_39dd78338d7e1d44763134a2b208c95e8a3675fecec6a9e4b71ffe168b32ee28->leave($__internal_39dd78338d7e1d44763134a2b208c95e8a3675fecec6a9e4b71ffe168b32ee28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
