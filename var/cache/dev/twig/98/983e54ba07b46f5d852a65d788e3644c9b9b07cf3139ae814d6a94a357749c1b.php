<?php

/* AkinaImmobilierBundle:Front:reserve.html.twig */
class __TwigTemplate_6ad0c1e04a9b2c4540e61c173249cc552dfd86de5d59f57bdc93aa6f081504c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout.html.twig", "AkinaImmobilierBundle:Front:reserve.html.twig", 1);
        $this->blocks = array(
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d43ee4a1c5a7be6b7bd73447786a379f49a325ae0e483a12d9a424bb87a9264a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d43ee4a1c5a7be6b7bd73447786a379f49a325ae0e483a12d9a424bb87a9264a->enter($__internal_d43ee4a1c5a7be6b7bd73447786a379f49a325ae0e483a12d9a424bb87a9264a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Front:reserve.html.twig"));

        $__internal_0fd0f24cf49d0034dc4743f4335a60980274543660a46e93f37c9b4c4766e57f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd0f24cf49d0034dc4743f4335a60980274543660a46e93f37c9b4c4766e57f->enter($__internal_0fd0f24cf49d0034dc4743f4335a60980274543660a46e93f37c9b4c4766e57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Front:reserve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d43ee4a1c5a7be6b7bd73447786a379f49a325ae0e483a12d9a424bb87a9264a->leave($__internal_d43ee4a1c5a7be6b7bd73447786a379f49a325ae0e483a12d9a424bb87a9264a_prof);

        
        $__internal_0fd0f24cf49d0034dc4743f4335a60980274543660a46e93f37c9b4c4766e57f->leave($__internal_0fd0f24cf49d0034dc4743f4335a60980274543660a46e93f37c9b4c4766e57f_prof);

    }

    // line 2
    public function block_form($context, array $blocks = array())
    {
        $__internal_d2e816f9730ef5d808c08c4e2ec57006d812a0330df05f0afa2e0e024c612dcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2e816f9730ef5d808c08c4e2ec57006d812a0330df05f0afa2e0e024c612dcf->enter($__internal_d2e816f9730ef5d808c08c4e2ec57006d812a0330df05f0afa2e0e024c612dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_ae3967743527eb1ad9dee6f9ef4f1b86d37a86212571ec756d58b443545af05c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae3967743527eb1ad9dee6f9ef4f1b86d37a86212571ec756d58b443545af05c->enter($__internal_ae3967743527eb1ad9dee6f9ef4f1b86d37a86212571ec756d58b443545af05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
 ";
        
        $__internal_ae3967743527eb1ad9dee6f9ef4f1b86d37a86212571ec756d58b443545af05c->leave($__internal_ae3967743527eb1ad9dee6f9ef4f1b86d37a86212571ec756d58b443545af05c_prof);

        
        $__internal_d2e816f9730ef5d808c08c4e2ec57006d812a0330df05f0afa2e0e024c612dcf->leave($__internal_d2e816f9730ef5d808c08c4e2ec57006d812a0330df05f0afa2e0e024c612dcf_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Front:reserve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::Layout/layout.html.twig\" %}
 {% block form %}
{{form(form)}}
 {% endblock %}", "AkinaImmobilierBundle:Front:reserve.html.twig", "/var/www/html/finalSprint1/src/Akina/ImmobilierBundle/Resources/views/Front/reserve.html.twig");
    }
}
