<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_fc094dc87b6e74b1ebdf7badb1ef3716fde64fca4f1046a401fb2dc7642cbfe9 extends Twig_Template
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
        $__internal_85f10886cc624a48bdad0a2fc574c9d5461fe351f5989b750379dfd344ba5d46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85f10886cc624a48bdad0a2fc574c9d5461fe351f5989b750379dfd344ba5d46->enter($__internal_85f10886cc624a48bdad0a2fc574c9d5461fe351f5989b750379dfd344ba5d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_0d950be43ab1ecbfc8cd0a17d9df7f6110374445cb05fdef185b22eff3a936bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d950be43ab1ecbfc8cd0a17d9df7f6110374445cb05fdef185b22eff3a936bb->enter($__internal_0d950be43ab1ecbfc8cd0a17d9df7f6110374445cb05fdef185b22eff3a936bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_85f10886cc624a48bdad0a2fc574c9d5461fe351f5989b750379dfd344ba5d46->leave($__internal_85f10886cc624a48bdad0a2fc574c9d5461fe351f5989b750379dfd344ba5d46_prof);

        
        $__internal_0d950be43ab1ecbfc8cd0a17d9df7f6110374445cb05fdef185b22eff3a936bb->leave($__internal_0d950be43ab1ecbfc8cd0a17d9df7f6110374445cb05fdef185b22eff3a936bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
