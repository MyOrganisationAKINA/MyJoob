<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_8d8103488eef645b6ac74dd657c977a6824705ce944d54fef03ea74b2c6b137e extends Twig_Template
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
        $__internal_3d1307839cb0ad39bc2d6f875abd7ed158f57ebf6fb7c7c852905a73e8ff1da1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d1307839cb0ad39bc2d6f875abd7ed158f57ebf6fb7c7c852905a73e8ff1da1->enter($__internal_3d1307839cb0ad39bc2d6f875abd7ed158f57ebf6fb7c7c852905a73e8ff1da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_3390167655dacaf296128c7214ab4ec35ab80a2ca9f23ec0fb9fe4e1924bcb28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3390167655dacaf296128c7214ab4ec35ab80a2ca9f23ec0fb9fe4e1924bcb28->enter($__internal_3390167655dacaf296128c7214ab4ec35ab80a2ca9f23ec0fb9fe4e1924bcb28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_3d1307839cb0ad39bc2d6f875abd7ed158f57ebf6fb7c7c852905a73e8ff1da1->leave($__internal_3d1307839cb0ad39bc2d6f875abd7ed158f57ebf6fb7c7c852905a73e8ff1da1_prof);

        
        $__internal_3390167655dacaf296128c7214ab4ec35ab80a2ca9f23ec0fb9fe4e1924bcb28->leave($__internal_3390167655dacaf296128c7214ab4ec35ab80a2ca9f23ec0fb9fe4e1924bcb28_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
