<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_d7c6312e26d73a3697325d60fe7bc8a1a0bbd8aed9aa7445a11e50591250cdce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_caa0c00db867eec5a077ab9a5ec45dfb7abdd45a481476066ce4af77ea313d31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caa0c00db867eec5a077ab9a5ec45dfb7abdd45a481476066ce4af77ea313d31->enter($__internal_caa0c00db867eec5a077ab9a5ec45dfb7abdd45a481476066ce4af77ea313d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_f788cf407d28bd37817498b048c26f9c37426c50e672d51c3a620301e2a328ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f788cf407d28bd37817498b048c26f9c37426c50e672d51c3a620301e2a328ef->enter($__internal_f788cf407d28bd37817498b048c26f9c37426c50e672d51c3a620301e2a328ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_caa0c00db867eec5a077ab9a5ec45dfb7abdd45a481476066ce4af77ea313d31->leave($__internal_caa0c00db867eec5a077ab9a5ec45dfb7abdd45a481476066ce4af77ea313d31_prof);

        
        $__internal_f788cf407d28bd37817498b048c26f9c37426c50e672d51c3a620301e2a328ef->leave($__internal_f788cf407d28bd37817498b048c26f9c37426c50e672d51c3a620301e2a328ef_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f0ea49f8d3545df42fa420b24f1b821b0ac29c22ca4bf90ab31b5c5fd5e9cc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f0ea49f8d3545df42fa420b24f1b821b0ac29c22ca4bf90ab31b5c5fd5e9cc0->enter($__internal_2f0ea49f8d3545df42fa420b24f1b821b0ac29c22ca4bf90ab31b5c5fd5e9cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7e4f0ce9e90b25b96a0de6523123cb7bd7edaead5ae19756441e4674e5a767e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e4f0ce9e90b25b96a0de6523123cb7bd7edaead5ae19756441e4674e5a767e0->enter($__internal_7e4f0ce9e90b25b96a0de6523123cb7bd7edaead5ae19756441e4674e5a767e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7e4f0ce9e90b25b96a0de6523123cb7bd7edaead5ae19756441e4674e5a767e0->leave($__internal_7e4f0ce9e90b25b96a0de6523123cb7bd7edaead5ae19756441e4674e5a767e0_prof);

        
        $__internal_2f0ea49f8d3545df42fa420b24f1b821b0ac29c22ca4bf90ab31b5c5fd5e9cc0->leave($__internal_2f0ea49f8d3545df42fa420b24f1b821b0ac29c22ca4bf90ab31b5c5fd5e9cc0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
