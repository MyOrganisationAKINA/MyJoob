<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_a3fcc35fa7aa65649a1583e787e531feb8ba14e6237a34607039ec9db7423e38 extends Twig_Template
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
        $__internal_48a81e35f34df912edb94bcc109e83077d12f95eefcf4b81ea6dbac90be4696d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48a81e35f34df912edb94bcc109e83077d12f95eefcf4b81ea6dbac90be4696d->enter($__internal_48a81e35f34df912edb94bcc109e83077d12f95eefcf4b81ea6dbac90be4696d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_62597b1755975bbb34d7961800c7d7468405ecd4be1ee22b65677b61027f2549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62597b1755975bbb34d7961800c7d7468405ecd4be1ee22b65677b61027f2549->enter($__internal_62597b1755975bbb34d7961800c7d7468405ecd4be1ee22b65677b61027f2549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_48a81e35f34df912edb94bcc109e83077d12f95eefcf4b81ea6dbac90be4696d->leave($__internal_48a81e35f34df912edb94bcc109e83077d12f95eefcf4b81ea6dbac90be4696d_prof);

        
        $__internal_62597b1755975bbb34d7961800c7d7468405ecd4be1ee22b65677b61027f2549->leave($__internal_62597b1755975bbb34d7961800c7d7468405ecd4be1ee22b65677b61027f2549_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
