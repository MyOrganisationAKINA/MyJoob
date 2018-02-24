<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_7ac10e4c7cfd9f0e418af8b0a87d6e13617a033ff54b3b1771ed357fe3a708cb extends Twig_Template
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
        $__internal_4feec1420351cb67e54f40ed0cdd4a31fdf1011d696fa547004f6d294b564f9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4feec1420351cb67e54f40ed0cdd4a31fdf1011d696fa547004f6d294b564f9f->enter($__internal_4feec1420351cb67e54f40ed0cdd4a31fdf1011d696fa547004f6d294b564f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_c8a5c189bccf343ff840a0f094f40a602a3a3cb5a516fce5d98e63dde22adbfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a5c189bccf343ff840a0f094f40a602a3a3cb5a516fce5d98e63dde22adbfc->enter($__internal_c8a5c189bccf343ff840a0f094f40a602a3a3cb5a516fce5d98e63dde22adbfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_4feec1420351cb67e54f40ed0cdd4a31fdf1011d696fa547004f6d294b564f9f->leave($__internal_4feec1420351cb67e54f40ed0cdd4a31fdf1011d696fa547004f6d294b564f9f_prof);

        
        $__internal_c8a5c189bccf343ff840a0f094f40a602a3a3cb5a516fce5d98e63dde22adbfc->leave($__internal_c8a5c189bccf343ff840a0f094f40a602a3a3cb5a516fce5d98e63dde22adbfc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
