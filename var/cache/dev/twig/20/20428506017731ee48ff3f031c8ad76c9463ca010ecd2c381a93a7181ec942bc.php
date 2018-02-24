<?php

/* AkinaImmobilierBundle:Front:listRes.html.twig */
class __TwigTemplate_89e53231bf5ba9482c4bb33f3ecb821af5ac75e6aaf63f9a6c9ef8787479df28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout.html.twig", "AkinaImmobilierBundle:Front:listRes.html.twig", 1);
        $this->blocks = array(
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89a3ba02dbc016d9a72b5b582c75ceec96efcacee3496c809f8ae9d7ea773950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89a3ba02dbc016d9a72b5b582c75ceec96efcacee3496c809f8ae9d7ea773950->enter($__internal_89a3ba02dbc016d9a72b5b582c75ceec96efcacee3496c809f8ae9d7ea773950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Front:listRes.html.twig"));

        $__internal_e9b676febb93407e13244567440bec8d99d20da856b1fa8a29d03b74d29cbf8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9b676febb93407e13244567440bec8d99d20da856b1fa8a29d03b74d29cbf8d->enter($__internal_e9b676febb93407e13244567440bec8d99d20da856b1fa8a29d03b74d29cbf8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Front:listRes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89a3ba02dbc016d9a72b5b582c75ceec96efcacee3496c809f8ae9d7ea773950->leave($__internal_89a3ba02dbc016d9a72b5b582c75ceec96efcacee3496c809f8ae9d7ea773950_prof);

        
        $__internal_e9b676febb93407e13244567440bec8d99d20da856b1fa8a29d03b74d29cbf8d->leave($__internal_e9b676febb93407e13244567440bec8d99d20da856b1fa8a29d03b74d29cbf8d_prof);

    }

    // line 3
    public function block_Content($context, array $blocks = array())
    {
        $__internal_dcd9c06cec1bc2d98846f54e667c342e93e8466d97863cd49876ed1b6f56d95c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcd9c06cec1bc2d98846f54e667c342e93e8466d97863cd49876ed1b6f56d95c->enter($__internal_dcd9c06cec1bc2d98846f54e667c342e93e8466d97863cd49876ed1b6f56d95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_7510a840cd62ab9a578c0130c77e9b85f33931d02d962f13dcba4a3771632700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7510a840cd62ab9a578c0130c77e9b85f33931d02d962f13dcba4a3771632700->enter($__internal_7510a840cd62ab9a578c0130c77e9b85f33931d02d962f13dcba4a3771632700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        // line 4
        echo "

 <div class=\"container\">

  ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 9
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "dateDeReservation", array()), "html", null, true);
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</div>
 

";
        
        $__internal_7510a840cd62ab9a578c0130c77e9b85f33931d02d962f13dcba4a3771632700->leave($__internal_7510a840cd62ab9a578c0130c77e9b85f33931d02d962f13dcba4a3771632700_prof);

        
        $__internal_dcd9c06cec1bc2d98846f54e667c342e93e8466d97863cd49876ed1b6f56d95c->leave($__internal_dcd9c06cec1bc2d98846f54e667c342e93e8466d97863cd49876ed1b6f56d95c_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Front:listRes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 11,  59 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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

{% block Content %}


 <div class=\"container\">

  {%for bien in reservations%}
  {{bien.dateDeReservation}}
  {%endfor%}
</div>
 

{% endblock %}", "AkinaImmobilierBundle:Front:listRes.html.twig", "/var/www/html/finalSprint1/src/Akina/ImmobilierBundle/Resources/views/Front/listRes.html.twig");
    }
}
