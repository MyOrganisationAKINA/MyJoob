<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_ec64245912791ab202fa1a1ee9b050ef1f408e9c2047c8788aa4d16c10976e26 extends Twig_Template
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
        $__internal_e66632c7aaa0b7ed2f9ff916fe7da394cd57704032f523938f7259387680b428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e66632c7aaa0b7ed2f9ff916fe7da394cd57704032f523938f7259387680b428->enter($__internal_e66632c7aaa0b7ed2f9ff916fe7da394cd57704032f523938f7259387680b428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_d25c75948881e6e91cdc0dccc83814ae0b0865f3380e6b2c6f70825e5a5768ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d25c75948881e6e91cdc0dccc83814ae0b0865f3380e6b2c6f70825e5a5768ac->enter($__internal_d25c75948881e6e91cdc0dccc83814ae0b0865f3380e6b2c6f70825e5a5768ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e66632c7aaa0b7ed2f9ff916fe7da394cd57704032f523938f7259387680b428->leave($__internal_e66632c7aaa0b7ed2f9ff916fe7da394cd57704032f523938f7259387680b428_prof);

        
        $__internal_d25c75948881e6e91cdc0dccc83814ae0b0865f3380e6b2c6f70825e5a5768ac->leave($__internal_d25c75948881e6e91cdc0dccc83814ae0b0865f3380e6b2c6f70825e5a5768ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
