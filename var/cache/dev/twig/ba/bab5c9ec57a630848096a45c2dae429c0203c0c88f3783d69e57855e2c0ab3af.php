<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_677c3f2f9313e200db4b7d2cfccebe243c6daaad2009789dccbd3915ca97049d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_419268730f7b8b4d160a73019fc5d88b782629fed2a4a7bdcfaa8002df65c000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_419268730f7b8b4d160a73019fc5d88b782629fed2a4a7bdcfaa8002df65c000->enter($__internal_419268730f7b8b4d160a73019fc5d88b782629fed2a4a7bdcfaa8002df65c000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_820ff1ce5e3a375ac8cbe32020124a2d373db00fb20a28d90f9c9a6cee831a88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_820ff1ce5e3a375ac8cbe32020124a2d373db00fb20a28d90f9c9a6cee831a88->enter($__internal_820ff1ce5e3a375ac8cbe32020124a2d373db00fb20a28d90f9c9a6cee831a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_419268730f7b8b4d160a73019fc5d88b782629fed2a4a7bdcfaa8002df65c000->leave($__internal_419268730f7b8b4d160a73019fc5d88b782629fed2a4a7bdcfaa8002df65c000_prof);

        
        $__internal_820ff1ce5e3a375ac8cbe32020124a2d373db00fb20a28d90f9c9a6cee831a88->leave($__internal_820ff1ce5e3a375ac8cbe32020124a2d373db00fb20a28d90f9c9a6cee831a88_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3fd414976944de7e6626ab25c2edca16c29a3382d09df7fdce51578b52eb8728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fd414976944de7e6626ab25c2edca16c29a3382d09df7fdce51578b52eb8728->enter($__internal_3fd414976944de7e6626ab25c2edca16c29a3382d09df7fdce51578b52eb8728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_01a93207115408bdddc3b9c8cb13ae971deb99422cbd554f3fa564ebf76e7ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01a93207115408bdddc3b9c8cb13ae971deb99422cbd554f3fa564ebf76e7ac1->enter($__internal_01a93207115408bdddc3b9c8cb13ae971deb99422cbd554f3fa564ebf76e7ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_01a93207115408bdddc3b9c8cb13ae971deb99422cbd554f3fa564ebf76e7ac1->leave($__internal_01a93207115408bdddc3b9c8cb13ae971deb99422cbd554f3fa564ebf76e7ac1_prof);

        
        $__internal_3fd414976944de7e6626ab25c2edca16c29a3382d09df7fdce51578b52eb8728->leave($__internal_3fd414976944de7e6626ab25c2edca16c29a3382d09df7fdce51578b52eb8728_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d8d5c784a027810d3549a1ea6be9f349a9989f0a73d04933173f47692dfa7094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8d5c784a027810d3549a1ea6be9f349a9989f0a73d04933173f47692dfa7094->enter($__internal_d8d5c784a027810d3549a1ea6be9f349a9989f0a73d04933173f47692dfa7094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6ecd70a790ab2f30cdf6906b02b2247a4eb18fd271ed6177bf7b5365425b7189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ecd70a790ab2f30cdf6906b02b2247a4eb18fd271ed6177bf7b5365425b7189->enter($__internal_6ecd70a790ab2f30cdf6906b02b2247a4eb18fd271ed6177bf7b5365425b7189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6ecd70a790ab2f30cdf6906b02b2247a4eb18fd271ed6177bf7b5365425b7189->leave($__internal_6ecd70a790ab2f30cdf6906b02b2247a4eb18fd271ed6177bf7b5365425b7189_prof);

        
        $__internal_d8d5c784a027810d3549a1ea6be9f349a9989f0a73d04933173f47692dfa7094->leave($__internal_d8d5c784a027810d3549a1ea6be9f349a9989f0a73d04933173f47692dfa7094_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_21faa4547c036fa53a10c1d3aee898987eb0b8b7c2d91b50b6ec5548b7e61a59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21faa4547c036fa53a10c1d3aee898987eb0b8b7c2d91b50b6ec5548b7e61a59->enter($__internal_21faa4547c036fa53a10c1d3aee898987eb0b8b7c2d91b50b6ec5548b7e61a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fd877926e3e96624612c5d52097db9e693c119d71bdd9bfde2658a99b9acca7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd877926e3e96624612c5d52097db9e693c119d71bdd9bfde2658a99b9acca7e->enter($__internal_fd877926e3e96624612c5d52097db9e693c119d71bdd9bfde2658a99b9acca7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fd877926e3e96624612c5d52097db9e693c119d71bdd9bfde2658a99b9acca7e->leave($__internal_fd877926e3e96624612c5d52097db9e693c119d71bdd9bfde2658a99b9acca7e_prof);

        
        $__internal_21faa4547c036fa53a10c1d3aee898987eb0b8b7c2d91b50b6ec5548b7e61a59->leave($__internal_21faa4547c036fa53a10c1d3aee898987eb0b8b7c2d91b50b6ec5548b7e61a59_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
