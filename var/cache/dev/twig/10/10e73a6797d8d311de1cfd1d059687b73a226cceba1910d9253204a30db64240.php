<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_fb269e3c0afc6f0809bac498c2f59af66ac7ad19fcada8257845f778d27a7607 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11e0cfc8393756f2bba9c39a099fbadb6ad62caf7e4e7ebb5ec7e14f1101f53a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11e0cfc8393756f2bba9c39a099fbadb6ad62caf7e4e7ebb5ec7e14f1101f53a->enter($__internal_11e0cfc8393756f2bba9c39a099fbadb6ad62caf7e4e7ebb5ec7e14f1101f53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_a6e039b6a97cdffbe21aadf7769feac1d4b311839e1a78803a3794bb0b5a8b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6e039b6a97cdffbe21aadf7769feac1d4b311839e1a78803a3794bb0b5a8b44->enter($__internal_a6e039b6a97cdffbe21aadf7769feac1d4b311839e1a78803a3794bb0b5a8b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11e0cfc8393756f2bba9c39a099fbadb6ad62caf7e4e7ebb5ec7e14f1101f53a->leave($__internal_11e0cfc8393756f2bba9c39a099fbadb6ad62caf7e4e7ebb5ec7e14f1101f53a_prof);

        
        $__internal_a6e039b6a97cdffbe21aadf7769feac1d4b311839e1a78803a3794bb0b5a8b44->leave($__internal_a6e039b6a97cdffbe21aadf7769feac1d4b311839e1a78803a3794bb0b5a8b44_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a3d375037ab27d5541c11b2c5791a9c38ec399ac02b2f70bc02d8f37a4e6fe3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3d375037ab27d5541c11b2c5791a9c38ec399ac02b2f70bc02d8f37a4e6fe3f->enter($__internal_a3d375037ab27d5541c11b2c5791a9c38ec399ac02b2f70bc02d8f37a4e6fe3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9b6edcf98f308ab0b10dcf7300336c6d67488f06472e8c45fdc1c8ed223e9632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b6edcf98f308ab0b10dcf7300336c6d67488f06472e8c45fdc1c8ed223e9632->enter($__internal_9b6edcf98f308ab0b10dcf7300336c6d67488f06472e8c45fdc1c8ed223e9632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_9b6edcf98f308ab0b10dcf7300336c6d67488f06472e8c45fdc1c8ed223e9632->leave($__internal_9b6edcf98f308ab0b10dcf7300336c6d67488f06472e8c45fdc1c8ed223e9632_prof);

        
        $__internal_a3d375037ab27d5541c11b2c5791a9c38ec399ac02b2f70bc02d8f37a4e6fe3f->leave($__internal_a3d375037ab27d5541c11b2c5791a9c38ec399ac02b2f70bc02d8f37a4e6fe3f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b97d669a3fd33ee649114111d74a3adca9c522d83567d924eea9a5e005715cb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b97d669a3fd33ee649114111d74a3adca9c522d83567d924eea9a5e005715cb6->enter($__internal_b97d669a3fd33ee649114111d74a3adca9c522d83567d924eea9a5e005715cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de8402e8588356ec64d75898c27caae83883abe44890823cd3ea289aed553d38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de8402e8588356ec64d75898c27caae83883abe44890823cd3ea289aed553d38->enter($__internal_de8402e8588356ec64d75898c27caae83883abe44890823cd3ea289aed553d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_de8402e8588356ec64d75898c27caae83883abe44890823cd3ea289aed553d38->leave($__internal_de8402e8588356ec64d75898c27caae83883abe44890823cd3ea289aed553d38_prof);

        
        $__internal_b97d669a3fd33ee649114111d74a3adca9c522d83567d924eea9a5e005715cb6->leave($__internal_b97d669a3fd33ee649114111d74a3adca9c522d83567d924eea9a5e005715cb6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
