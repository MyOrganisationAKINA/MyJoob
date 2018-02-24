<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_219835b3ae468b62cc10b048f2f2ab6e4b9c7979fb5e4f65edc09a8eb37c84a9 extends Twig_Template
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
        $__internal_006f462ccc66556ae76bad7f92160462f4dab4952433f4d69288e7bde24e526b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_006f462ccc66556ae76bad7f92160462f4dab4952433f4d69288e7bde24e526b->enter($__internal_006f462ccc66556ae76bad7f92160462f4dab4952433f4d69288e7bde24e526b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_a7f6107cb4de956df7a70ae78e60aceb8c32aa6d4714c371aa149bb6b716eff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f6107cb4de956df7a70ae78e60aceb8c32aa6d4714c371aa149bb6b716eff8->enter($__internal_a7f6107cb4de956df7a70ae78e60aceb8c32aa6d4714c371aa149bb6b716eff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_006f462ccc66556ae76bad7f92160462f4dab4952433f4d69288e7bde24e526b->leave($__internal_006f462ccc66556ae76bad7f92160462f4dab4952433f4d69288e7bde24e526b_prof);

        
        $__internal_a7f6107cb4de956df7a70ae78e60aceb8c32aa6d4714c371aa149bb6b716eff8->leave($__internal_a7f6107cb4de956df7a70ae78e60aceb8c32aa6d4714c371aa149bb6b716eff8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
