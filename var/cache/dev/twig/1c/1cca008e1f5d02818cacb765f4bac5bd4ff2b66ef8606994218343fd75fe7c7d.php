<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3eeea3648654dcf47b5c2647aee25501c2f48088aecd05b6aac9f58c169a5974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_8cfac3608c8c70f35a875031bc685ee0e74e5d7eb9db3cd04db8d3ef0284ca4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cfac3608c8c70f35a875031bc685ee0e74e5d7eb9db3cd04db8d3ef0284ca4c->enter($__internal_8cfac3608c8c70f35a875031bc685ee0e74e5d7eb9db3cd04db8d3ef0284ca4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_73a3fa31855c7af077aa53a7c9e5376e69ac12783815fba2c286707067ea6187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73a3fa31855c7af077aa53a7c9e5376e69ac12783815fba2c286707067ea6187->enter($__internal_73a3fa31855c7af077aa53a7c9e5376e69ac12783815fba2c286707067ea6187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cfac3608c8c70f35a875031bc685ee0e74e5d7eb9db3cd04db8d3ef0284ca4c->leave($__internal_8cfac3608c8c70f35a875031bc685ee0e74e5d7eb9db3cd04db8d3ef0284ca4c_prof);

        
        $__internal_73a3fa31855c7af077aa53a7c9e5376e69ac12783815fba2c286707067ea6187->leave($__internal_73a3fa31855c7af077aa53a7c9e5376e69ac12783815fba2c286707067ea6187_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a3025c1aab56c4f1191fc1ef97072251e35c185c8c34d9bb4378d35aa8a6eb98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3025c1aab56c4f1191fc1ef97072251e35c185c8c34d9bb4378d35aa8a6eb98->enter($__internal_a3025c1aab56c4f1191fc1ef97072251e35c185c8c34d9bb4378d35aa8a6eb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d529f5bc413db1a434b0f16cf4e8ed504a7acab411063ed0b908977ce31f79ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d529f5bc413db1a434b0f16cf4e8ed504a7acab411063ed0b908977ce31f79ed->enter($__internal_d529f5bc413db1a434b0f16cf4e8ed504a7acab411063ed0b908977ce31f79ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d529f5bc413db1a434b0f16cf4e8ed504a7acab411063ed0b908977ce31f79ed->leave($__internal_d529f5bc413db1a434b0f16cf4e8ed504a7acab411063ed0b908977ce31f79ed_prof);

        
        $__internal_a3025c1aab56c4f1191fc1ef97072251e35c185c8c34d9bb4378d35aa8a6eb98->leave($__internal_a3025c1aab56c4f1191fc1ef97072251e35c185c8c34d9bb4378d35aa8a6eb98_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d60254f0b25651b89a5ea1ffd6d6fa9104bc4e1e21df14d07d4e38720465b829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d60254f0b25651b89a5ea1ffd6d6fa9104bc4e1e21df14d07d4e38720465b829->enter($__internal_d60254f0b25651b89a5ea1ffd6d6fa9104bc4e1e21df14d07d4e38720465b829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1445548e2ecc69bb065b0011369180dfc07ac012f3ab28146e89c93823dffb38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1445548e2ecc69bb065b0011369180dfc07ac012f3ab28146e89c93823dffb38->enter($__internal_1445548e2ecc69bb065b0011369180dfc07ac012f3ab28146e89c93823dffb38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1445548e2ecc69bb065b0011369180dfc07ac012f3ab28146e89c93823dffb38->leave($__internal_1445548e2ecc69bb065b0011369180dfc07ac012f3ab28146e89c93823dffb38_prof);

        
        $__internal_d60254f0b25651b89a5ea1ffd6d6fa9104bc4e1e21df14d07d4e38720465b829->leave($__internal_d60254f0b25651b89a5ea1ffd6d6fa9104bc4e1e21df14d07d4e38720465b829_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d586cafc4bdba65fa002c05a848d9104a20a86e8c9a1e2beb7563cd3a3325ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d586cafc4bdba65fa002c05a848d9104a20a86e8c9a1e2beb7563cd3a3325ae->enter($__internal_8d586cafc4bdba65fa002c05a848d9104a20a86e8c9a1e2beb7563cd3a3325ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_65c7e9ff5fbd87da9bcf712a98cdd1e9aab6e6df10fce5d26f64de823273ad0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c7e9ff5fbd87da9bcf712a98cdd1e9aab6e6df10fce5d26f64de823273ad0c->enter($__internal_65c7e9ff5fbd87da9bcf712a98cdd1e9aab6e6df10fce5d26f64de823273ad0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_65c7e9ff5fbd87da9bcf712a98cdd1e9aab6e6df10fce5d26f64de823273ad0c->leave($__internal_65c7e9ff5fbd87da9bcf712a98cdd1e9aab6e6df10fce5d26f64de823273ad0c_prof);

        
        $__internal_8d586cafc4bdba65fa002c05a848d9104a20a86e8c9a1e2beb7563cd3a3325ae->leave($__internal_8d586cafc4bdba65fa002c05a848d9104a20a86e8c9a1e2beb7563cd3a3325ae_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/AkinaImmobier/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
