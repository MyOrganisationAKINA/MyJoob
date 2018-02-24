<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_535b12708e659651471c8c9ab58d74684ffb5475148b6571aee3622d1eb7f1a5 extends Twig_Template
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
        $__internal_b453336668abc865b4e6b4fb3b98ab58e54b3462053d5d3f976da1fe96be87fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b453336668abc865b4e6b4fb3b98ab58e54b3462053d5d3f976da1fe96be87fa->enter($__internal_b453336668abc865b4e6b4fb3b98ab58e54b3462053d5d3f976da1fe96be87fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_b8cd15707a4ce95a17308105b6f27f90c4c2934593f2eb5a4d1af13abcbff9fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8cd15707a4ce95a17308105b6f27f90c4c2934593f2eb5a4d1af13abcbff9fa->enter($__internal_b8cd15707a4ce95a17308105b6f27f90c4c2934593f2eb5a4d1af13abcbff9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_b453336668abc865b4e6b4fb3b98ab58e54b3462053d5d3f976da1fe96be87fa->leave($__internal_b453336668abc865b4e6b4fb3b98ab58e54b3462053d5d3f976da1fe96be87fa_prof);

        
        $__internal_b8cd15707a4ce95a17308105b6f27f90c4c2934593f2eb5a4d1af13abcbff9fa->leave($__internal_b8cd15707a4ce95a17308105b6f27f90c4c2934593f2eb5a4d1af13abcbff9fa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
