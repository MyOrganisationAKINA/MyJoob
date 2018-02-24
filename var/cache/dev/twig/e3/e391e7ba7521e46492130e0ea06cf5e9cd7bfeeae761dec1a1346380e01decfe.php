<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_a76abfc728d79ab80cc4d55769dee31d2436132b39305a0cba693936feca5ebf extends Twig_Template
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
        $__internal_8eadb8a7b8489fe91c3b59459e6cbeb29da88b56a180f709c076d43cfdfd7fb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eadb8a7b8489fe91c3b59459e6cbeb29da88b56a180f709c076d43cfdfd7fb1->enter($__internal_8eadb8a7b8489fe91c3b59459e6cbeb29da88b56a180f709c076d43cfdfd7fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_b801a30b98b9e09383292ecf775f0f7ede0f2eb71875a13dde00082d741ea996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b801a30b98b9e09383292ecf775f0f7ede0f2eb71875a13dde00082d741ea996->enter($__internal_b801a30b98b9e09383292ecf775f0f7ede0f2eb71875a13dde00082d741ea996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_8eadb8a7b8489fe91c3b59459e6cbeb29da88b56a180f709c076d43cfdfd7fb1->leave($__internal_8eadb8a7b8489fe91c3b59459e6cbeb29da88b56a180f709c076d43cfdfd7fb1_prof);

        
        $__internal_b801a30b98b9e09383292ecf775f0f7ede0f2eb71875a13dde00082d741ea996->leave($__internal_b801a30b98b9e09383292ecf775f0f7ede0f2eb71875a13dde00082d741ea996_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
