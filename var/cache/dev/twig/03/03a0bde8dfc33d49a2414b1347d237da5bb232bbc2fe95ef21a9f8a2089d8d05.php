<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f059ae2991ae060f000cfc242cc4ac2599f75e2ae978013c7ccac99c4f17fbb6 extends Twig_Template
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
        $__internal_c5b0efd2ec43e1e64c446e14b76c9d3489a305cdce54147b5dd9b03853a781b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5b0efd2ec43e1e64c446e14b76c9d3489a305cdce54147b5dd9b03853a781b9->enter($__internal_c5b0efd2ec43e1e64c446e14b76c9d3489a305cdce54147b5dd9b03853a781b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_93ab1818123173c6f537c17da06c6ad6ecee6699ee6a966229208f245f1f8574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ab1818123173c6f537c17da06c6ad6ecee6699ee6a966229208f245f1f8574->enter($__internal_93ab1818123173c6f537c17da06c6ad6ecee6699ee6a966229208f245f1f8574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_c5b0efd2ec43e1e64c446e14b76c9d3489a305cdce54147b5dd9b03853a781b9->leave($__internal_c5b0efd2ec43e1e64c446e14b76c9d3489a305cdce54147b5dd9b03853a781b9_prof);

        
        $__internal_93ab1818123173c6f537c17da06c6ad6ecee6699ee6a966229208f245f1f8574->leave($__internal_93ab1818123173c6f537c17da06c6ad6ecee6699ee6a966229208f245f1f8574_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
