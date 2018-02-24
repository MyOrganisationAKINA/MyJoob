<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_0cfb685605403b31fdc9011d614d4a0f14659577d64e31fdc4447084c712781f extends Twig_Template
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
        $__internal_ca9bfad2b39b7781afdc8c66df9778224202bbc00d5a61dfe3cd6c437e1aef10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca9bfad2b39b7781afdc8c66df9778224202bbc00d5a61dfe3cd6c437e1aef10->enter($__internal_ca9bfad2b39b7781afdc8c66df9778224202bbc00d5a61dfe3cd6c437e1aef10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_af194a92d55f479906f222e80d360f00b2cc94d0d6167db527542c7df98a0f96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af194a92d55f479906f222e80d360f00b2cc94d0d6167db527542c7df98a0f96->enter($__internal_af194a92d55f479906f222e80d360f00b2cc94d0d6167db527542c7df98a0f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_ca9bfad2b39b7781afdc8c66df9778224202bbc00d5a61dfe3cd6c437e1aef10->leave($__internal_ca9bfad2b39b7781afdc8c66df9778224202bbc00d5a61dfe3cd6c437e1aef10_prof);

        
        $__internal_af194a92d55f479906f222e80d360f00b2cc94d0d6167db527542c7df98a0f96->leave($__internal_af194a92d55f479906f222e80d360f00b2cc94d0d6167db527542c7df98a0f96_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
