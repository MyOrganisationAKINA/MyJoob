<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_79733b2a24c70c8d8cd405c4fb95780759248e0b82335b12740c68859af6a889 extends Twig_Template
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
        $__internal_21107509309978ac2f396f5049a6cfe9e05f1ff35c2b248696e7d34128db0583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21107509309978ac2f396f5049a6cfe9e05f1ff35c2b248696e7d34128db0583->enter($__internal_21107509309978ac2f396f5049a6cfe9e05f1ff35c2b248696e7d34128db0583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_5a0ebfcf13bf4c5c204b79d09d7cdc6e5ed940928e37084db34c3254db8e98b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a0ebfcf13bf4c5c204b79d09d7cdc6e5ed940928e37084db34c3254db8e98b6->enter($__internal_5a0ebfcf13bf4c5c204b79d09d7cdc6e5ed940928e37084db34c3254db8e98b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_21107509309978ac2f396f5049a6cfe9e05f1ff35c2b248696e7d34128db0583->leave($__internal_21107509309978ac2f396f5049a6cfe9e05f1ff35c2b248696e7d34128db0583_prof);

        
        $__internal_5a0ebfcf13bf4c5c204b79d09d7cdc6e5ed940928e37084db34c3254db8e98b6->leave($__internal_5a0ebfcf13bf4c5c204b79d09d7cdc6e5ed940928e37084db34c3254db8e98b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
