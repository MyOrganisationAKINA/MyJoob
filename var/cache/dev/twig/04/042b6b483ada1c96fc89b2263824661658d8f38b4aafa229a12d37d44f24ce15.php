<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_da2f81008a6023aedfa23043385f41ef6405f34d22bb018f42ebd0518c035f64 extends Twig_Template
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
        $__internal_d9402abd882f4ce1a98623b2d2f533f3d0474b3bb0c6faaa5bf618973f265580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9402abd882f4ce1a98623b2d2f533f3d0474b3bb0c6faaa5bf618973f265580->enter($__internal_d9402abd882f4ce1a98623b2d2f533f3d0474b3bb0c6faaa5bf618973f265580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_1dd577170733b3dcc3bcaf0ffbf8bae86f44004d56f726c587602c0472324acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd577170733b3dcc3bcaf0ffbf8bae86f44004d56f726c587602c0472324acc->enter($__internal_1dd577170733b3dcc3bcaf0ffbf8bae86f44004d56f726c587602c0472324acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_d9402abd882f4ce1a98623b2d2f533f3d0474b3bb0c6faaa5bf618973f265580->leave($__internal_d9402abd882f4ce1a98623b2d2f533f3d0474b3bb0c6faaa5bf618973f265580_prof);

        
        $__internal_1dd577170733b3dcc3bcaf0ffbf8bae86f44004d56f726c587602c0472324acc->leave($__internal_1dd577170733b3dcc3bcaf0ffbf8bae86f44004d56f726c587602c0472324acc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
