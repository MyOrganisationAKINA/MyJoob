<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_50693584840fd2c13d39c1f93dd92abb20fa1cdba7a64e1b72c3efffa7bb7bd0 extends Twig_Template
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
        $__internal_03c643e3127a180a1ef0efff9eeb2e22a8a55172fb26863cd71be7fa27e5f4da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03c643e3127a180a1ef0efff9eeb2e22a8a55172fb26863cd71be7fa27e5f4da->enter($__internal_03c643e3127a180a1ef0efff9eeb2e22a8a55172fb26863cd71be7fa27e5f4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_6905f10f37e9253fa57cd50b44d5e231863f5422e4326112fbd7b2faaf8ab665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6905f10f37e9253fa57cd50b44d5e231863f5422e4326112fbd7b2faaf8ab665->enter($__internal_6905f10f37e9253fa57cd50b44d5e231863f5422e4326112fbd7b2faaf8ab665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_03c643e3127a180a1ef0efff9eeb2e22a8a55172fb26863cd71be7fa27e5f4da->leave($__internal_03c643e3127a180a1ef0efff9eeb2e22a8a55172fb26863cd71be7fa27e5f4da_prof);

        
        $__internal_6905f10f37e9253fa57cd50b44d5e231863f5422e4326112fbd7b2faaf8ab665->leave($__internal_6905f10f37e9253fa57cd50b44d5e231863f5422e4326112fbd7b2faaf8ab665_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
