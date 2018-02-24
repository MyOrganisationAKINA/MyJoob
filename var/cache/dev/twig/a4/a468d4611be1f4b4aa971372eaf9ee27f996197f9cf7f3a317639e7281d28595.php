<?php

/* AkinaImmobilierBundle:Default:index.html.twig */
class __TwigTemplate_8e508bd5be0b23bddbbe1a29984f1151890784d84518dd9d10af7fbea50d47da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout.html.twig", "AkinaImmobilierBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff09ef80c61047aae911cd0435022dbb00da1f7ce2096dacd17b1d599251e496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff09ef80c61047aae911cd0435022dbb00da1f7ce2096dacd17b1d599251e496->enter($__internal_ff09ef80c61047aae911cd0435022dbb00da1f7ce2096dacd17b1d599251e496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Default:index.html.twig"));

        $__internal_8500d00e908db5d8537d8d670484f9111fd6f6e03dc2ecc25b70cc94ea82ac28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8500d00e908db5d8537d8d670484f9111fd6f6e03dc2ecc25b70cc94ea82ac28->enter($__internal_8500d00e908db5d8537d8d670484f9111fd6f6e03dc2ecc25b70cc94ea82ac28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff09ef80c61047aae911cd0435022dbb00da1f7ce2096dacd17b1d599251e496->leave($__internal_ff09ef80c61047aae911cd0435022dbb00da1f7ce2096dacd17b1d599251e496_prof);

        
        $__internal_8500d00e908db5d8537d8d670484f9111fd6f6e03dc2ecc25b70cc94ea82ac28->leave($__internal_8500d00e908db5d8537d8d670484f9111fd6f6e03dc2ecc25b70cc94ea82ac28_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::Layout/layout.html.twig\" %}


", "AkinaImmobilierBundle:Default:index.html.twig", "/var/www/html/finalSprint1/src/Akina/ImmobilierBundle/Resources/views/Default/index.html.twig");
    }
}
