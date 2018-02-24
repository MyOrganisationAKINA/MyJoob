<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_8fb0a95e2d5c765dd83f0e7bd9221b26b5d3d1500864e4581b4c2e6c39eab5b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2095106161f3cd730482ee7d699529702ddfa45388f5f83e05fe613669dcb8c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2095106161f3cd730482ee7d699529702ddfa45388f5f83e05fe613669dcb8c9->enter($__internal_2095106161f3cd730482ee7d699529702ddfa45388f5f83e05fe613669dcb8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_06aa7076575106ce39daec8dc6d65b3d9151b406d25eb04a4561d6347c17c2f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06aa7076575106ce39daec8dc6d65b3d9151b406d25eb04a4561d6347c17c2f8->enter($__internal_06aa7076575106ce39daec8dc6d65b3d9151b406d25eb04a4561d6347c17c2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2095106161f3cd730482ee7d699529702ddfa45388f5f83e05fe613669dcb8c9->leave($__internal_2095106161f3cd730482ee7d699529702ddfa45388f5f83e05fe613669dcb8c9_prof);

        
        $__internal_06aa7076575106ce39daec8dc6d65b3d9151b406d25eb04a4561d6347c17c2f8->leave($__internal_06aa7076575106ce39daec8dc6d65b3d9151b406d25eb04a4561d6347c17c2f8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b26067af016ba19ae396338bcfbd8197f84cb34ed20e93dc92201350e3d7ad56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b26067af016ba19ae396338bcfbd8197f84cb34ed20e93dc92201350e3d7ad56->enter($__internal_b26067af016ba19ae396338bcfbd8197f84cb34ed20e93dc92201350e3d7ad56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a983af7e78ce7d78eb526bc1a60d9ad6b6c48d814031f5f24ddc410ca9818fc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a983af7e78ce7d78eb526bc1a60d9ad6b6c48d814031f5f24ddc410ca9818fc2->enter($__internal_a983af7e78ce7d78eb526bc1a60d9ad6b6c48d814031f5f24ddc410ca9818fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_a983af7e78ce7d78eb526bc1a60d9ad6b6c48d814031f5f24ddc410ca9818fc2->leave($__internal_a983af7e78ce7d78eb526bc1a60d9ad6b6c48d814031f5f24ddc410ca9818fc2_prof);

        
        $__internal_b26067af016ba19ae396338bcfbd8197f84cb34ed20e93dc92201350e3d7ad56->leave($__internal_b26067af016ba19ae396338bcfbd8197f84cb34ed20e93dc92201350e3d7ad56_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
