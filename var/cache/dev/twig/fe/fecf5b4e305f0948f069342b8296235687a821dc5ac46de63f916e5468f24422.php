<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_b1abb08a224193f7d6a4a119b832201857688eb5994d3134fb944320e8ce030d extends Twig_Template
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
        $__internal_030c8f3642a05489597de6b35e87d8819afec376ded6f9ea84b38bea8b678d78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_030c8f3642a05489597de6b35e87d8819afec376ded6f9ea84b38bea8b678d78->enter($__internal_030c8f3642a05489597de6b35e87d8819afec376ded6f9ea84b38bea8b678d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_5764b0b59ccb6edc3cb1c94a2d7fab00330425f0822e8103cc4efcc855bae009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5764b0b59ccb6edc3cb1c94a2d7fab00330425f0822e8103cc4efcc855bae009->enter($__internal_5764b0b59ccb6edc3cb1c94a2d7fab00330425f0822e8103cc4efcc855bae009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_030c8f3642a05489597de6b35e87d8819afec376ded6f9ea84b38bea8b678d78->leave($__internal_030c8f3642a05489597de6b35e87d8819afec376ded6f9ea84b38bea8b678d78_prof);

        
        $__internal_5764b0b59ccb6edc3cb1c94a2d7fab00330425f0822e8103cc4efcc855bae009->leave($__internal_5764b0b59ccb6edc3cb1c94a2d7fab00330425f0822e8103cc4efcc855bae009_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
