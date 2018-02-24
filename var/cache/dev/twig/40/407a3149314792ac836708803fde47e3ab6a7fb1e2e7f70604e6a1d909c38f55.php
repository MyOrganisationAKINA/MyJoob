<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_8c374e12e73914b5f102e3be95402f14f258e97959a5553ee752256db776868e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0bb581ce644f6677f8467a49d980ab6d4c6a7b991eec10130ac61a0101467cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0bb581ce644f6677f8467a49d980ab6d4c6a7b991eec10130ac61a0101467cf->enter($__internal_c0bb581ce644f6677f8467a49d980ab6d4c6a7b991eec10130ac61a0101467cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_339b3ef292e51474cf1df077dbf6dec9dd603cddff14cc99376e64e249805fba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_339b3ef292e51474cf1df077dbf6dec9dd603cddff14cc99376e64e249805fba->enter($__internal_339b3ef292e51474cf1df077dbf6dec9dd603cddff14cc99376e64e249805fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0bb581ce644f6677f8467a49d980ab6d4c6a7b991eec10130ac61a0101467cf->leave($__internal_c0bb581ce644f6677f8467a49d980ab6d4c6a7b991eec10130ac61a0101467cf_prof);

        
        $__internal_339b3ef292e51474cf1df077dbf6dec9dd603cddff14cc99376e64e249805fba->leave($__internal_339b3ef292e51474cf1df077dbf6dec9dd603cddff14cc99376e64e249805fba_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0c15253cf479af548a5f5577c34a412bab34830c1b46168d01f34b2eaac3babe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c15253cf479af548a5f5577c34a412bab34830c1b46168d01f34b2eaac3babe->enter($__internal_0c15253cf479af548a5f5577c34a412bab34830c1b46168d01f34b2eaac3babe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e7a09b1e2c52d90ed2c2fcd126f7caed3a1116686ee6ef8ec4b37972b7b61fbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a09b1e2c52d90ed2c2fcd126f7caed3a1116686ee6ef8ec4b37972b7b61fbb->enter($__internal_e7a09b1e2c52d90ed2c2fcd126f7caed3a1116686ee6ef8ec4b37972b7b61fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_e7a09b1e2c52d90ed2c2fcd126f7caed3a1116686ee6ef8ec4b37972b7b61fbb->leave($__internal_e7a09b1e2c52d90ed2c2fcd126f7caed3a1116686ee6ef8ec4b37972b7b61fbb_prof);

        
        $__internal_0c15253cf479af548a5f5577c34a412bab34830c1b46168d01f34b2eaac3babe->leave($__internal_0c15253cf479af548a5f5577c34a412bab34830c1b46168d01f34b2eaac3babe_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d094beee5c8fe572d7824c8b1d952e0ce6f9f360fcf65d6ab3019f7bbee05580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d094beee5c8fe572d7824c8b1d952e0ce6f9f360fcf65d6ab3019f7bbee05580->enter($__internal_d094beee5c8fe572d7824c8b1d952e0ce6f9f360fcf65d6ab3019f7bbee05580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5f9030603c3869db646bfc40ae6a87a4e7e10f80df00575b3ef4904d96166e9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f9030603c3869db646bfc40ae6a87a4e7e10f80df00575b3ef4904d96166e9f->enter($__internal_5f9030603c3869db646bfc40ae6a87a4e7e10f80df00575b3ef4904d96166e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5f9030603c3869db646bfc40ae6a87a4e7e10f80df00575b3ef4904d96166e9f->leave($__internal_5f9030603c3869db646bfc40ae6a87a4e7e10f80df00575b3ef4904d96166e9f_prof);

        
        $__internal_d094beee5c8fe572d7824c8b1d952e0ce6f9f360fcf65d6ab3019f7bbee05580->leave($__internal_d094beee5c8fe572d7824c8b1d952e0ce6f9f360fcf65d6ab3019f7bbee05580_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_68ed838ee28ba46bae6ed88620368bf88c6c7a39bacf20ae837ec80846b580e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68ed838ee28ba46bae6ed88620368bf88c6c7a39bacf20ae837ec80846b580e4->enter($__internal_68ed838ee28ba46bae6ed88620368bf88c6c7a39bacf20ae837ec80846b580e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9306b6461c17a946236a003214f7c62506b481081d4242a5c80036abe378b879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9306b6461c17a946236a003214f7c62506b481081d4242a5c80036abe378b879->enter($__internal_9306b6461c17a946236a003214f7c62506b481081d4242a5c80036abe378b879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_9306b6461c17a946236a003214f7c62506b481081d4242a5c80036abe378b879->leave($__internal_9306b6461c17a946236a003214f7c62506b481081d4242a5c80036abe378b879_prof);

        
        $__internal_68ed838ee28ba46bae6ed88620368bf88c6c7a39bacf20ae837ec80846b580e4->leave($__internal_68ed838ee28ba46bae6ed88620368bf88c6c7a39bacf20ae837ec80846b580e4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
