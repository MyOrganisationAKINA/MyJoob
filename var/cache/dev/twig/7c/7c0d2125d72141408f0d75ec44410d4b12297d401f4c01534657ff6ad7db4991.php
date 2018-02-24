<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_cc5c9a17a39cbdfb14c004a546539773c656b0bbd2bec7720df92e108b0e6ff1 extends Twig_Template
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
        $__internal_31236e7f8462751aa7bd9a27d6ef719de006ceea990e0732c2bce04d48dc3e1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31236e7f8462751aa7bd9a27d6ef719de006ceea990e0732c2bce04d48dc3e1b->enter($__internal_31236e7f8462751aa7bd9a27d6ef719de006ceea990e0732c2bce04d48dc3e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_622a62e3e50428daa33d4c791c4974cfd3f8316e685bd2d93e82b98d2fe2f301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_622a62e3e50428daa33d4c791c4974cfd3f8316e685bd2d93e82b98d2fe2f301->enter($__internal_622a62e3e50428daa33d4c791c4974cfd3f8316e685bd2d93e82b98d2fe2f301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_31236e7f8462751aa7bd9a27d6ef719de006ceea990e0732c2bce04d48dc3e1b->leave($__internal_31236e7f8462751aa7bd9a27d6ef719de006ceea990e0732c2bce04d48dc3e1b_prof);

        
        $__internal_622a62e3e50428daa33d4c791c4974cfd3f8316e685bd2d93e82b98d2fe2f301->leave($__internal_622a62e3e50428daa33d4c791c4974cfd3f8316e685bd2d93e82b98d2fe2f301_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
