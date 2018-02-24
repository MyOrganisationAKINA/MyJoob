<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_eded5744b039d44764e1fc06cdb4192251e9dd5a5d2a7e76a2b5783dfbff0566 extends Twig_Template
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
        $__internal_517a8ea36089d79e5344c8d4384eeb71fe9bbeacebde69eec59461604a149bf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_517a8ea36089d79e5344c8d4384eeb71fe9bbeacebde69eec59461604a149bf6->enter($__internal_517a8ea36089d79e5344c8d4384eeb71fe9bbeacebde69eec59461604a149bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_2041dd0368963505db8a20cb05cdca04f6e73abec9f6ae380f7c15935377febd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2041dd0368963505db8a20cb05cdca04f6e73abec9f6ae380f7c15935377febd->enter($__internal_2041dd0368963505db8a20cb05cdca04f6e73abec9f6ae380f7c15935377febd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_517a8ea36089d79e5344c8d4384eeb71fe9bbeacebde69eec59461604a149bf6->leave($__internal_517a8ea36089d79e5344c8d4384eeb71fe9bbeacebde69eec59461604a149bf6_prof);

        
        $__internal_2041dd0368963505db8a20cb05cdca04f6e73abec9f6ae380f7c15935377febd->leave($__internal_2041dd0368963505db8a20cb05cdca04f6e73abec9f6ae380f7c15935377febd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
