<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_255d8bf66f01a718c12d074b8c62fabcc7b1184788aecb33939ae85ac905be64 extends Twig_Template
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
        $__internal_e95f031acc40332862e93da6adcb4d83f553147fa67dd4ccb40bcb9f95035477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e95f031acc40332862e93da6adcb4d83f553147fa67dd4ccb40bcb9f95035477->enter($__internal_e95f031acc40332862e93da6adcb4d83f553147fa67dd4ccb40bcb9f95035477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        $__internal_eb1f597d288c6cccfbf4ceef65b0ef3a0e4264055e5b97f76f64b74635788036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb1f597d288c6cccfbf4ceef65b0ef3a0e4264055e5b97f76f64b74635788036->enter($__internal_eb1f597d288c6cccfbf4ceef65b0ef3a0e4264055e5b97f76f64b74635788036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
        
        $__internal_e95f031acc40332862e93da6adcb4d83f553147fa67dd4ccb40bcb9f95035477->leave($__internal_e95f031acc40332862e93da6adcb4d83f553147fa67dd4ccb40bcb9f95035477_prof);

        
        $__internal_eb1f597d288c6cccfbf4ceef65b0ef3a0e4264055e5b97f76f64b74635788036->leave($__internal_eb1f597d288c6cccfbf4ceef65b0ef3a0e4264055e5b97f76f64b74635788036_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a{% for attr, value in options %} {{ attr }}=\"{{ value }}\"{% endfor %}>{{ title }}</a>
", "KnpPaginatorBundle:Pagination:sortable_link.html.twig", "/var/www/html/finalSprint1/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/sortable_link.html.twig");
    }
}
