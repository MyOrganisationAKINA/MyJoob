<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_3ef7adea19b42e823b956d611d77402e24e99ed76369e90e992ee56e2902b811 extends Twig_Template
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
        $__internal_6cba1ca48a976ee6d7d3b6b5d0ce6842969a4aae6d7cc63b045f1cae0fb56fd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cba1ca48a976ee6d7d3b6b5d0ce6842969a4aae6d7cc63b045f1cae0fb56fd0->enter($__internal_6cba1ca48a976ee6d7d3b6b5d0ce6842969a4aae6d7cc63b045f1cae0fb56fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_edbaf631f2779d8e722b4ab3a580e2a50aeb9059d4731538c8a965ce314417ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edbaf631f2779d8e722b4ab3a580e2a50aeb9059d4731538c8a965ce314417ab->enter($__internal_edbaf631f2779d8e722b4ab3a580e2a50aeb9059d4731538c8a965ce314417ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_6cba1ca48a976ee6d7d3b6b5d0ce6842969a4aae6d7cc63b045f1cae0fb56fd0->leave($__internal_6cba1ca48a976ee6d7d3b6b5d0ce6842969a4aae6d7cc63b045f1cae0fb56fd0_prof);

        
        $__internal_edbaf631f2779d8e722b4ab3a580e2a50aeb9059d4731538c8a965ce314417ab->leave($__internal_edbaf631f2779d8e722b4ab3a580e2a50aeb9059d4731538c8a965ce314417ab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
