<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_36075ede147c617102b0b28fe4b3eeebc6e5dc49e144ed396e14a1111ac5774d extends Twig_Template
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
        $__internal_fc02764cdc35b28585a6bf04422b9aac0f61ee7a21c20101000b323e7c7add32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc02764cdc35b28585a6bf04422b9aac0f61ee7a21c20101000b323e7c7add32->enter($__internal_fc02764cdc35b28585a6bf04422b9aac0f61ee7a21c20101000b323e7c7add32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_3f327f66c9abffb2c51e8aeee1c45dec067763ff611144f617ef2c9e5f624d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f327f66c9abffb2c51e8aeee1c45dec067763ff611144f617ef2c9e5f624d3a->enter($__internal_3f327f66c9abffb2c51e8aeee1c45dec067763ff611144f617ef2c9e5f624d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_fc02764cdc35b28585a6bf04422b9aac0f61ee7a21c20101000b323e7c7add32->leave($__internal_fc02764cdc35b28585a6bf04422b9aac0f61ee7a21c20101000b323e7c7add32_prof);

        
        $__internal_3f327f66c9abffb2c51e8aeee1c45dec067763ff611144f617ef2c9e5f624d3a->leave($__internal_3f327f66c9abffb2c51e8aeee1c45dec067763ff611144f617ef2c9e5f624d3a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_923e1079828f12c777fe4531cca1ead806992a9a8109a2ebb2ee5db4f510ae5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_923e1079828f12c777fe4531cca1ead806992a9a8109a2ebb2ee5db4f510ae5d->enter($__internal_923e1079828f12c777fe4531cca1ead806992a9a8109a2ebb2ee5db4f510ae5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_235ab205f4eaa64aaa46054e4232172d30639752f9b6af2318db1857f960b56b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_235ab205f4eaa64aaa46054e4232172d30639752f9b6af2318db1857f960b56b->enter($__internal_235ab205f4eaa64aaa46054e4232172d30639752f9b6af2318db1857f960b56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_235ab205f4eaa64aaa46054e4232172d30639752f9b6af2318db1857f960b56b->leave($__internal_235ab205f4eaa64aaa46054e4232172d30639752f9b6af2318db1857f960b56b_prof);

        
        $__internal_923e1079828f12c777fe4531cca1ead806992a9a8109a2ebb2ee5db4f510ae5d->leave($__internal_923e1079828f12c777fe4531cca1ead806992a9a8109a2ebb2ee5db4f510ae5d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6b3886a7def175f367d139ee618051b653a501f3f9cb61632e9140385377f6bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b3886a7def175f367d139ee618051b653a501f3f9cb61632e9140385377f6bd->enter($__internal_6b3886a7def175f367d139ee618051b653a501f3f9cb61632e9140385377f6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_49945404653a5b96bb2cc24480feee9da1b8144b01ff6b9877c65341e5dc9781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49945404653a5b96bb2cc24480feee9da1b8144b01ff6b9877c65341e5dc9781->enter($__internal_49945404653a5b96bb2cc24480feee9da1b8144b01ff6b9877c65341e5dc9781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_49945404653a5b96bb2cc24480feee9da1b8144b01ff6b9877c65341e5dc9781->leave($__internal_49945404653a5b96bb2cc24480feee9da1b8144b01ff6b9877c65341e5dc9781_prof);

        
        $__internal_6b3886a7def175f367d139ee618051b653a501f3f9cb61632e9140385377f6bd->leave($__internal_6b3886a7def175f367d139ee618051b653a501f3f9cb61632e9140385377f6bd_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_658a95826e2f9455bec92d45e0dca9442cdad25ad1a94c00a13a66e441b02143 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_658a95826e2f9455bec92d45e0dca9442cdad25ad1a94c00a13a66e441b02143->enter($__internal_658a95826e2f9455bec92d45e0dca9442cdad25ad1a94c00a13a66e441b02143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_30232ed7e2da1290487968231811c017de555be9dbfe55efe4afa079fedf1ff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30232ed7e2da1290487968231811c017de555be9dbfe55efe4afa079fedf1ff7->enter($__internal_30232ed7e2da1290487968231811c017de555be9dbfe55efe4afa079fedf1ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_30232ed7e2da1290487968231811c017de555be9dbfe55efe4afa079fedf1ff7->leave($__internal_30232ed7e2da1290487968231811c017de555be9dbfe55efe4afa079fedf1ff7_prof);

        
        $__internal_658a95826e2f9455bec92d45e0dca9442cdad25ad1a94c00a13a66e441b02143->leave($__internal_658a95826e2f9455bec92d45e0dca9442cdad25ad1a94c00a13a66e441b02143_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
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
", "@Twig/layout.html.twig", "/var/www/html/AkinaImmobier/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
