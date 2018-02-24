<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_625b8ffe509a8ff1f02c975345ccd05abe7a67c0efb71d0b1e5e72f78161d78f extends Twig_Template
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
        $__internal_568b3a38a6ee4eac95d8e4ca07408a35a26e860aea933bd39df1da796dddac20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_568b3a38a6ee4eac95d8e4ca07408a35a26e860aea933bd39df1da796dddac20->enter($__internal_568b3a38a6ee4eac95d8e4ca07408a35a26e860aea933bd39df1da796dddac20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_fa7a617d7345fcadd673514881dc12db15271a8cde8d74dc9a17ba408bfb26b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7a617d7345fcadd673514881dc12db15271a8cde8d74dc9a17ba408bfb26b5->enter($__internal_fa7a617d7345fcadd673514881dc12db15271a8cde8d74dc9a17ba408bfb26b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_568b3a38a6ee4eac95d8e4ca07408a35a26e860aea933bd39df1da796dddac20->leave($__internal_568b3a38a6ee4eac95d8e4ca07408a35a26e860aea933bd39df1da796dddac20_prof);

        
        $__internal_fa7a617d7345fcadd673514881dc12db15271a8cde8d74dc9a17ba408bfb26b5->leave($__internal_fa7a617d7345fcadd673514881dc12db15271a8cde8d74dc9a17ba408bfb26b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
