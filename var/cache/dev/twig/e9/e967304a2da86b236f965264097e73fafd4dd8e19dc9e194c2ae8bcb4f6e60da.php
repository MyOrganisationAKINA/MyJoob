<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_b77cccddd6ba272ae7e2538ea355c6aacc97b708f0698a147f89dbfd55aee97f extends Twig_Template
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
        $__internal_2145c3cc152513973b8a49252b91084d207f65da46be291fc0e31d7dfec102ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2145c3cc152513973b8a49252b91084d207f65da46be291fc0e31d7dfec102ac->enter($__internal_2145c3cc152513973b8a49252b91084d207f65da46be291fc0e31d7dfec102ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_b46bed87020f02a1f010601becb12294b230bfcd113af32f68bebb72074541b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b46bed87020f02a1f010601becb12294b230bfcd113af32f68bebb72074541b4->enter($__internal_b46bed87020f02a1f010601becb12294b230bfcd113af32f68bebb72074541b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_2145c3cc152513973b8a49252b91084d207f65da46be291fc0e31d7dfec102ac->leave($__internal_2145c3cc152513973b8a49252b91084d207f65da46be291fc0e31d7dfec102ac_prof);

        
        $__internal_b46bed87020f02a1f010601becb12294b230bfcd113af32f68bebb72074541b4->leave($__internal_b46bed87020f02a1f010601becb12294b230bfcd113af32f68bebb72074541b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
