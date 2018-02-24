<?php

/* AkinaImmobilierBundle:Admin:add.html.twig */
class __TwigTemplate_5819b47ba7aef4999bf2fb996a4ffb375fc1f39b76e66f17869028f73da68286 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AkinaImmobilierBundle:Admin:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_923e01391f98c0b714ca0d48ee98b8c71c35b5d1b03f2cd038399f62749d6157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_923e01391f98c0b714ca0d48ee98b8c71c35b5d1b03f2cd038399f62749d6157->enter($__internal_923e01391f98c0b714ca0d48ee98b8c71c35b5d1b03f2cd038399f62749d6157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:add.html.twig"));

        $__internal_a3f9bd13bdb7cd8a3d31927d2a385228ececfca4e77ecf7ec160ede21b34266d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3f9bd13bdb7cd8a3d31927d2a385228ececfca4e77ecf7ec160ede21b34266d->enter($__internal_a3f9bd13bdb7cd8a3d31927d2a385228ececfca4e77ecf7ec160ede21b34266d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_923e01391f98c0b714ca0d48ee98b8c71c35b5d1b03f2cd038399f62749d6157->leave($__internal_923e01391f98c0b714ca0d48ee98b8c71c35b5d1b03f2cd038399f62749d6157_prof);

        
        $__internal_a3f9bd13bdb7cd8a3d31927d2a385228ececfca4e77ecf7ec160ede21b34266d->leave($__internal_a3f9bd13bdb7cd8a3d31927d2a385228ececfca4e77ecf7ec160ede21b34266d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ada7b05522bbf1d91ea6e8c1ba46aa9ab5406fecc1b8f7cc3b982aa794b03677 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ada7b05522bbf1d91ea6e8c1ba46aa9ab5406fecc1b8f7cc3b982aa794b03677->enter($__internal_ada7b05522bbf1d91ea6e8c1ba46aa9ab5406fecc1b8f7cc3b982aa794b03677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_926f97c42e375724d00a404ea5b6381f71ab01bc3fee6c7201f97f4afb00d101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_926f97c42e375724d00a404ea5b6381f71ab01bc3fee6c7201f97f4afb00d101->enter($__internal_926f97c42e375724d00a404ea5b6381f71ab01bc3fee6c7201f97f4afb00d101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AkinaImmobilierBundle:Admin:add";
        
        $__internal_926f97c42e375724d00a404ea5b6381f71ab01bc3fee6c7201f97f4afb00d101->leave($__internal_926f97c42e375724d00a404ea5b6381f71ab01bc3fee6c7201f97f4afb00d101_prof);

        
        $__internal_ada7b05522bbf1d91ea6e8c1ba46aa9ab5406fecc1b8f7cc3b982aa794b03677->leave($__internal_ada7b05522bbf1d91ea6e8c1ba46aa9ab5406fecc1b8f7cc3b982aa794b03677_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_23acec3f94f56d13ef58ba5e32f652e91ec426556221e9e78ce7a16c1d3b2408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23acec3f94f56d13ef58ba5e32f652e91ec426556221e9e78ce7a16c1d3b2408->enter($__internal_23acec3f94f56d13ef58ba5e32f652e91ec426556221e9e78ce7a16c1d3b2408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0acf50d35dd90c31b8bbed157ce931bb03e8f7e63d17d1e08a344fed49bf9a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0acf50d35dd90c31b8bbed157ce931bb03e8f7e63d17d1e08a344fed49bf9a18->enter($__internal_0acf50d35dd90c31b8bbed157ce931bb03e8f7e63d17d1e08a344fed49bf9a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Admin:add page</h1>
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formI"] ?? $this->getContext($context, "formI")), 'form_start');
        echo " 
            ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["formI"] ?? $this->getContext($context, "formI")), 'widget');
        echo "
            <input class=\"btn btn-success\" type=\"submit\" value=\"Ajouter\" /> 
        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formI"] ?? $this->getContext($context, "formI")), 'form_end');
        echo "
";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formB"] ?? $this->getContext($context, "formB")), 'form_start');
        echo " 
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["formB"] ?? $this->getContext($context, "formB")), 'widget');
        echo "
            <input class=\"btn btn-success\" type=\"submit\" value=\"Ajouter\" /> 
        ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formB"] ?? $this->getContext($context, "formB")), 'form_end');
        echo "
";
        
        $__internal_0acf50d35dd90c31b8bbed157ce931bb03e8f7e63d17d1e08a344fed49bf9a18->leave($__internal_0acf50d35dd90c31b8bbed157ce931bb03e8f7e63d17d1e08a344fed49bf9a18_prof);

        
        $__internal_23acec3f94f56d13ef58ba5e32f652e91ec426556221e9e78ce7a16c1d3b2408->leave($__internal_23acec3f94f56d13ef58ba5e32f652e91ec426556221e9e78ce7a16c1d3b2408_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Admin:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 14,  88 => 12,  84 => 11,  80 => 10,  75 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}AkinaImmobilierBundle:Admin:add{% endblock %}

{% block body %}
<h1>Welcome to the Admin:add page</h1>
{{form_start(formI)}} 
            {{form_widget(formI)}}
            <input class=\"btn btn-success\" type=\"submit\" value=\"Ajouter\" /> 
        {{form_end(formI)}}
{{form_start(formB)}} 
            {{form_widget(formB)}}
            <input class=\"btn btn-success\" type=\"submit\" value=\"Ajouter\" /> 
        {{form_end(formB)}}
{% endblock %}
", "AkinaImmobilierBundle:Admin:add.html.twig", "/var/www/html/finalSprint1/src/Akina/ImmobilierBundle/Resources/views/Admin/add.html.twig");
    }
}
