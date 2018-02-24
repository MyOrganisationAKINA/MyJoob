<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_68c23db07e3b56d6ffe8fc87c0841c1503c65d7f0d06a280686cae3fd7996572 extends Twig_Template
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
        $__internal_4d33e63d4aaf54ef08a4497c4f69c5a42544b243f5fd2b1b0939f93dec5b9d7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d33e63d4aaf54ef08a4497c4f69c5a42544b243f5fd2b1b0939f93dec5b9d7a->enter($__internal_4d33e63d4aaf54ef08a4497c4f69c5a42544b243f5fd2b1b0939f93dec5b9d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_3e25b2ae0be58bbf0098c5b3e1ee893252b96c0a6626c83ce153bbd063431f6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e25b2ae0be58bbf0098c5b3e1ee893252b96c0a6626c83ce153bbd063431f6e->enter($__internal_3e25b2ae0be58bbf0098c5b3e1ee893252b96c0a6626c83ce153bbd063431f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_4d33e63d4aaf54ef08a4497c4f69c5a42544b243f5fd2b1b0939f93dec5b9d7a->leave($__internal_4d33e63d4aaf54ef08a4497c4f69c5a42544b243f5fd2b1b0939f93dec5b9d7a_prof);

        
        $__internal_3e25b2ae0be58bbf0098c5b3e1ee893252b96c0a6626c83ce153bbd063431f6e->leave($__internal_3e25b2ae0be58bbf0098c5b3e1ee893252b96c0a6626c83ce153bbd063431f6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
