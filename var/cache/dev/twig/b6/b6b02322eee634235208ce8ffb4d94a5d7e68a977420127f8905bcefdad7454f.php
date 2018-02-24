<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_85c530d3975891c050cb6bdad4c250874f67374c3805621f6bb63732c6fa1725 extends Twig_Template
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
        $__internal_e7fb71427023ad7f70ca9051ce89bb096303ca4cfc2cb6719be5abc9963a4361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7fb71427023ad7f70ca9051ce89bb096303ca4cfc2cb6719be5abc9963a4361->enter($__internal_e7fb71427023ad7f70ca9051ce89bb096303ca4cfc2cb6719be5abc9963a4361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_720c0808e3bfbbcaed184cd3d097ac9c0186500f301f19cb3e16c8e3e8c3179a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_720c0808e3bfbbcaed184cd3d097ac9c0186500f301f19cb3e16c8e3e8c3179a->enter($__internal_720c0808e3bfbbcaed184cd3d097ac9c0186500f301f19cb3e16c8e3e8c3179a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e7fb71427023ad7f70ca9051ce89bb096303ca4cfc2cb6719be5abc9963a4361->leave($__internal_e7fb71427023ad7f70ca9051ce89bb096303ca4cfc2cb6719be5abc9963a4361_prof);

        
        $__internal_720c0808e3bfbbcaed184cd3d097ac9c0186500f301f19cb3e16c8e3e8c3179a->leave($__internal_720c0808e3bfbbcaed184cd3d097ac9c0186500f301f19cb3e16c8e3e8c3179a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
