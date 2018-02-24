<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_e65021b70df3063e338bc3fb48ad3dcec789e7d1cea81df187348b0363f5c53b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_537e43d64f2b56d801812a511a40d170d7be3da41433ec58a045a9c2e6ba4e2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_537e43d64f2b56d801812a511a40d170d7be3da41433ec58a045a9c2e6ba4e2f->enter($__internal_537e43d64f2b56d801812a511a40d170d7be3da41433ec58a045a9c2e6ba4e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_a5f4f93968b5c3001647e3c71a313981e224d53562d6ce3bc9c487b336a4dbef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5f4f93968b5c3001647e3c71a313981e224d53562d6ce3bc9c487b336a4dbef->enter($__internal_a5f4f93968b5c3001647e3c71a313981e224d53562d6ce3bc9c487b336a4dbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_537e43d64f2b56d801812a511a40d170d7be3da41433ec58a045a9c2e6ba4e2f->leave($__internal_537e43d64f2b56d801812a511a40d170d7be3da41433ec58a045a9c2e6ba4e2f_prof);

        
        $__internal_a5f4f93968b5c3001647e3c71a313981e224d53562d6ce3bc9c487b336a4dbef->leave($__internal_a5f4f93968b5c3001647e3c71a313981e224d53562d6ce3bc9c487b336a4dbef_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_088d09538a5aa50dc13ef80212663569be3907b46ad993c8ce6a09082daf9325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_088d09538a5aa50dc13ef80212663569be3907b46ad993c8ce6a09082daf9325->enter($__internal_088d09538a5aa50dc13ef80212663569be3907b46ad993c8ce6a09082daf9325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4de05fd3e2ada90905892cec9ac959ab5784db8e909b974cc3e17105b4fb8abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de05fd3e2ada90905892cec9ac959ab5784db8e909b974cc3e17105b4fb8abc->enter($__internal_4de05fd3e2ada90905892cec9ac959ab5784db8e909b974cc3e17105b4fb8abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4de05fd3e2ada90905892cec9ac959ab5784db8e909b974cc3e17105b4fb8abc->leave($__internal_4de05fd3e2ada90905892cec9ac959ab5784db8e909b974cc3e17105b4fb8abc_prof);

        
        $__internal_088d09538a5aa50dc13ef80212663569be3907b46ad993c8ce6a09082daf9325->leave($__internal_088d09538a5aa50dc13ef80212663569be3907b46ad993c8ce6a09082daf9325_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_c67935312fb03a718bf8d094b11a9b33884bd34dd28d9e9809e9b8e151befd60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c67935312fb03a718bf8d094b11a9b33884bd34dd28d9e9809e9b8e151befd60->enter($__internal_c67935312fb03a718bf8d094b11a9b33884bd34dd28d9e9809e9b8e151befd60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8a8684c7cfba467e12cbe8c0d4252853b5341bbcad8d6e7fbdbaaa1bcfad0cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a8684c7cfba467e12cbe8c0d4252853b5341bbcad8d6e7fbdbaaa1bcfad0cb8->enter($__internal_8a8684c7cfba467e12cbe8c0d4252853b5341bbcad8d6e7fbdbaaa1bcfad0cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8a8684c7cfba467e12cbe8c0d4252853b5341bbcad8d6e7fbdbaaa1bcfad0cb8->leave($__internal_8a8684c7cfba467e12cbe8c0d4252853b5341bbcad8d6e7fbdbaaa1bcfad0cb8_prof);

        
        $__internal_c67935312fb03a718bf8d094b11a9b33884bd34dd28d9e9809e9b8e151befd60->leave($__internal_c67935312fb03a718bf8d094b11a9b33884bd34dd28d9e9809e9b8e151befd60_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_4aa9795b9b546e1200e3be031dc9e5b2bfa7370ae0a22920d7ca7a2ba70e68fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aa9795b9b546e1200e3be031dc9e5b2bfa7370ae0a22920d7ca7a2ba70e68fe->enter($__internal_4aa9795b9b546e1200e3be031dc9e5b2bfa7370ae0a22920d7ca7a2ba70e68fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_67f82e67e911046ff0c742babbfa5f2ffafef26d70c04a3fd26c84444c09e4e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67f82e67e911046ff0c742babbfa5f2ffafef26d70c04a3fd26c84444c09e4e1->enter($__internal_67f82e67e911046ff0c742babbfa5f2ffafef26d70c04a3fd26c84444c09e4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_67f82e67e911046ff0c742babbfa5f2ffafef26d70c04a3fd26c84444c09e4e1->leave($__internal_67f82e67e911046ff0c742babbfa5f2ffafef26d70c04a3fd26c84444c09e4e1_prof);

        
        $__internal_4aa9795b9b546e1200e3be031dc9e5b2bfa7370ae0a22920d7ca7a2ba70e68fe->leave($__internal_4aa9795b9b546e1200e3be031dc9e5b2bfa7370ae0a22920d7ca7a2ba70e68fe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
