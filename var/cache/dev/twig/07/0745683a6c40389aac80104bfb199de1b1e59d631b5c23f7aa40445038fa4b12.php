<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_793db0e16e3bdba4e13d216bac91f26bbb45df7737287128d2f2b34e8f05488f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ee5ce445451331af6216d61ca8dd2ef861017e43c5a30235efa172a9baebe74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ee5ce445451331af6216d61ca8dd2ef861017e43c5a30235efa172a9baebe74->enter($__internal_0ee5ce445451331af6216d61ca8dd2ef861017e43c5a30235efa172a9baebe74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_402950fcc0b0f9b436c15bfe74507662722285967203c5f1dab485faa7784ab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_402950fcc0b0f9b436c15bfe74507662722285967203c5f1dab485faa7784ab8->enter($__internal_402950fcc0b0f9b436c15bfe74507662722285967203c5f1dab485faa7784ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ee5ce445451331af6216d61ca8dd2ef861017e43c5a30235efa172a9baebe74->leave($__internal_0ee5ce445451331af6216d61ca8dd2ef861017e43c5a30235efa172a9baebe74_prof);

        
        $__internal_402950fcc0b0f9b436c15bfe74507662722285967203c5f1dab485faa7784ab8->leave($__internal_402950fcc0b0f9b436c15bfe74507662722285967203c5f1dab485faa7784ab8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_203879c1f8c05373e23e1ccec2857ae0af7e55f5b414e8bd9dd38dc9fb33bc11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_203879c1f8c05373e23e1ccec2857ae0af7e55f5b414e8bd9dd38dc9fb33bc11->enter($__internal_203879c1f8c05373e23e1ccec2857ae0af7e55f5b414e8bd9dd38dc9fb33bc11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cd9f90268810f28f2eb38436a444fa698f35f4a1bf3e1b3896c2641cdea957a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd9f90268810f28f2eb38436a444fa698f35f4a1bf3e1b3896c2641cdea957a3->enter($__internal_cd9f90268810f28f2eb38436a444fa698f35f4a1bf3e1b3896c2641cdea957a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cd9f90268810f28f2eb38436a444fa698f35f4a1bf3e1b3896c2641cdea957a3->leave($__internal_cd9f90268810f28f2eb38436a444fa698f35f4a1bf3e1b3896c2641cdea957a3_prof);

        
        $__internal_203879c1f8c05373e23e1ccec2857ae0af7e55f5b414e8bd9dd38dc9fb33bc11->leave($__internal_203879c1f8c05373e23e1ccec2857ae0af7e55f5b414e8bd9dd38dc9fb33bc11_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f18490e9f21ff0afa1e8536f06c83f1931727a9ae4b3d9387f1cb8c0f33fbf25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f18490e9f21ff0afa1e8536f06c83f1931727a9ae4b3d9387f1cb8c0f33fbf25->enter($__internal_f18490e9f21ff0afa1e8536f06c83f1931727a9ae4b3d9387f1cb8c0f33fbf25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b314f6b4afa6cb945e162bc8cd5bae95e6ecc7648a22084ed7ca7d211cde3d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b314f6b4afa6cb945e162bc8cd5bae95e6ecc7648a22084ed7ca7d211cde3d1->enter($__internal_0b314f6b4afa6cb945e162bc8cd5bae95e6ecc7648a22084ed7ca7d211cde3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_0b314f6b4afa6cb945e162bc8cd5bae95e6ecc7648a22084ed7ca7d211cde3d1->leave($__internal_0b314f6b4afa6cb945e162bc8cd5bae95e6ecc7648a22084ed7ca7d211cde3d1_prof);

        
        $__internal_f18490e9f21ff0afa1e8536f06c83f1931727a9ae4b3d9387f1cb8c0f33fbf25->leave($__internal_f18490e9f21ff0afa1e8536f06c83f1931727a9ae4b3d9387f1cb8c0f33fbf25_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
