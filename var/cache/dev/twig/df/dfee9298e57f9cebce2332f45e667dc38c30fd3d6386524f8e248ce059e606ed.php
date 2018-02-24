<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_a59743d5b4216716b4258f7a8b3b31150423e90672021301d7620ffaf2fe9c8b extends Twig_Template
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
        $__internal_76edff679e2f6e0084f9366aa0bf778a2dfb3f3749dc7dd6d4811bfd01d4b38d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76edff679e2f6e0084f9366aa0bf778a2dfb3f3749dc7dd6d4811bfd01d4b38d->enter($__internal_76edff679e2f6e0084f9366aa0bf778a2dfb3f3749dc7dd6d4811bfd01d4b38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_0e9715ecde2febf08bdf976a0edd1eeabda8272a90b69ec5d23ddb98e7fa6fac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e9715ecde2febf08bdf976a0edd1eeabda8272a90b69ec5d23ddb98e7fa6fac->enter($__internal_0e9715ecde2febf08bdf976a0edd1eeabda8272a90b69ec5d23ddb98e7fa6fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_76edff679e2f6e0084f9366aa0bf778a2dfb3f3749dc7dd6d4811bfd01d4b38d->leave($__internal_76edff679e2f6e0084f9366aa0bf778a2dfb3f3749dc7dd6d4811bfd01d4b38d_prof);

        
        $__internal_0e9715ecde2febf08bdf976a0edd1eeabda8272a90b69ec5d23ddb98e7fa6fac->leave($__internal_0e9715ecde2febf08bdf976a0edd1eeabda8272a90b69ec5d23ddb98e7fa6fac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
