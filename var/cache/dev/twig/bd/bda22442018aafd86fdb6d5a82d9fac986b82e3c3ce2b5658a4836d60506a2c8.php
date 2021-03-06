<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_a46f4dcafd0600c870d42bc5e0e1867f0e89c949ea054eaab8f37b056af8ceee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd61140612c07bd6f68c6cb0ce673ea6e62b31db73641fff6e01b85f2e95843e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd61140612c07bd6f68c6cb0ce673ea6e62b31db73641fff6e01b85f2e95843e->enter($__internal_bd61140612c07bd6f68c6cb0ce673ea6e62b31db73641fff6e01b85f2e95843e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_110a2fe3cb85cb91a47fb41166fc61a0f79c0b277d05b26642ff489b4cadb069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_110a2fe3cb85cb91a47fb41166fc61a0f79c0b277d05b26642ff489b4cadb069->enter($__internal_110a2fe3cb85cb91a47fb41166fc61a0f79c0b277d05b26642ff489b4cadb069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd61140612c07bd6f68c6cb0ce673ea6e62b31db73641fff6e01b85f2e95843e->leave($__internal_bd61140612c07bd6f68c6cb0ce673ea6e62b31db73641fff6e01b85f2e95843e_prof);

        
        $__internal_110a2fe3cb85cb91a47fb41166fc61a0f79c0b277d05b26642ff489b4cadb069->leave($__internal_110a2fe3cb85cb91a47fb41166fc61a0f79c0b277d05b26642ff489b4cadb069_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_ea851b00b8d016c9075b725853c060bc1761a786b7e9eace8f60f2e4c9537ec9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea851b00b8d016c9075b725853c060bc1761a786b7e9eace8f60f2e4c9537ec9->enter($__internal_ea851b00b8d016c9075b725853c060bc1761a786b7e9eace8f60f2e4c9537ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_6a6d79af4c9a79bba3c62547e4d4dda6724d0d4300453f8044f4499a5605d6b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a6d79af4c9a79bba3c62547e4d4dda6724d0d4300453f8044f4499a5605d6b3->enter($__internal_6a6d79af4c9a79bba3c62547e4d4dda6724d0d4300453f8044f4499a5605d6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_6a6d79af4c9a79bba3c62547e4d4dda6724d0d4300453f8044f4499a5605d6b3->leave($__internal_6a6d79af4c9a79bba3c62547e4d4dda6724d0d4300453f8044f4499a5605d6b3_prof);

        
        $__internal_ea851b00b8d016c9075b725853c060bc1761a786b7e9eace8f60f2e4c9537ec9->leave($__internal_ea851b00b8d016c9075b725853c060bc1761a786b7e9eace8f60f2e4c9537ec9_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c02eec14070d1cbf7f53e6ddd15128e4d1027fe326187559d7c8ec00588094c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c02eec14070d1cbf7f53e6ddd15128e4d1027fe326187559d7c8ec00588094c9->enter($__internal_c02eec14070d1cbf7f53e6ddd15128e4d1027fe326187559d7c8ec00588094c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0e13b37ab5abc72d92bb081b2d05c3961f42204fb2b0ce3f3c2e6a89140a27bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e13b37ab5abc72d92bb081b2d05c3961f42204fb2b0ce3f3c2e6a89140a27bf->enter($__internal_0e13b37ab5abc72d92bb081b2d05c3961f42204fb2b0ce3f3c2e6a89140a27bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_0e13b37ab5abc72d92bb081b2d05c3961f42204fb2b0ce3f3c2e6a89140a27bf->leave($__internal_0e13b37ab5abc72d92bb081b2d05c3961f42204fb2b0ce3f3c2e6a89140a27bf_prof);

        
        $__internal_c02eec14070d1cbf7f53e6ddd15128e4d1027fe326187559d7c8ec00588094c9->leave($__internal_c02eec14070d1cbf7f53e6ddd15128e4d1027fe326187559d7c8ec00588094c9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
