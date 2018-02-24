<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_79f9eb8e3dc67018ed6a890410d4c3381ca0beb23b94da85bc5fe4c4af6fd1ff extends Twig_Template
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
        $__internal_5a7adfb3220d863c16308f7913bd66f81eadad1b3035b5f0a1957610e299f973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a7adfb3220d863c16308f7913bd66f81eadad1b3035b5f0a1957610e299f973->enter($__internal_5a7adfb3220d863c16308f7913bd66f81eadad1b3035b5f0a1957610e299f973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_2c97b0a266be9a69224279a493e5757ac342ca5bf53b9aa70e1aba1331eb02a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c97b0a266be9a69224279a493e5757ac342ca5bf53b9aa70e1aba1331eb02a3->enter($__internal_2c97b0a266be9a69224279a493e5757ac342ca5bf53b9aa70e1aba1331eb02a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5a7adfb3220d863c16308f7913bd66f81eadad1b3035b5f0a1957610e299f973->leave($__internal_5a7adfb3220d863c16308f7913bd66f81eadad1b3035b5f0a1957610e299f973_prof);

        
        $__internal_2c97b0a266be9a69224279a493e5757ac342ca5bf53b9aa70e1aba1331eb02a3->leave($__internal_2c97b0a266be9a69224279a493e5757ac342ca5bf53b9aa70e1aba1331eb02a3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
