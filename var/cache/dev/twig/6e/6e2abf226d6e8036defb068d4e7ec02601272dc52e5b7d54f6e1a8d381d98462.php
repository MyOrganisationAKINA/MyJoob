<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_44eba0b7a500ba481eb8c8a7fe8a3d0e7987d61bf84b9d172386a710eab887d0 extends Twig_Template
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
        $__internal_da730c9e653a411b67c83956bcb4570b5b7f7dfa55126ca10429065bf6b6aa7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da730c9e653a411b67c83956bcb4570b5b7f7dfa55126ca10429065bf6b6aa7c->enter($__internal_da730c9e653a411b67c83956bcb4570b5b7f7dfa55126ca10429065bf6b6aa7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_e64f69a63a224a3b6d504d4e35bbdfe7cc339c2d3978fecef4851845a176d167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64f69a63a224a3b6d504d4e35bbdfe7cc339c2d3978fecef4851845a176d167->enter($__internal_e64f69a63a224a3b6d504d4e35bbdfe7cc339c2d3978fecef4851845a176d167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_da730c9e653a411b67c83956bcb4570b5b7f7dfa55126ca10429065bf6b6aa7c->leave($__internal_da730c9e653a411b67c83956bcb4570b5b7f7dfa55126ca10429065bf6b6aa7c_prof);

        
        $__internal_e64f69a63a224a3b6d504d4e35bbdfe7cc339c2d3978fecef4851845a176d167->leave($__internal_e64f69a63a224a3b6d504d4e35bbdfe7cc339c2d3978fecef4851845a176d167_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
