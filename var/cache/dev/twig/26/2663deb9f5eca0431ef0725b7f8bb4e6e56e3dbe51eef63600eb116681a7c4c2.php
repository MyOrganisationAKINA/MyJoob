<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_ed34b914cf7dc7c8fedf49e61a80c56d208916b4e7fe450faa7a846e0d6cd330 extends Twig_Template
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
        $__internal_feb270908128fd233e65497aa5b10cac6a0adff1825e1e7840a842a3258e705c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feb270908128fd233e65497aa5b10cac6a0adff1825e1e7840a842a3258e705c->enter($__internal_feb270908128fd233e65497aa5b10cac6a0adff1825e1e7840a842a3258e705c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_48de0e15a043a9ab04dee7780e80356da898d7a827c1d1dbe6cf2245b9db9add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48de0e15a043a9ab04dee7780e80356da898d7a827c1d1dbe6cf2245b9db9add->enter($__internal_48de0e15a043a9ab04dee7780e80356da898d7a827c1d1dbe6cf2245b9db9add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_feb270908128fd233e65497aa5b10cac6a0adff1825e1e7840a842a3258e705c->leave($__internal_feb270908128fd233e65497aa5b10cac6a0adff1825e1e7840a842a3258e705c_prof);

        
        $__internal_48de0e15a043a9ab04dee7780e80356da898d7a827c1d1dbe6cf2245b9db9add->leave($__internal_48de0e15a043a9ab04dee7780e80356da898d7a827c1d1dbe6cf2245b9db9add_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
