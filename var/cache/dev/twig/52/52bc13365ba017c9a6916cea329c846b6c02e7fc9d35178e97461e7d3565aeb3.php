<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_fb432cb2a926f5c0bae4a820050455fd38bb4bf20a529781b70730ba90751b2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8f3be75ebb91297f83eb4239e6adf09d426d8bcf351aea0cae7ac0390d3dbb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8f3be75ebb91297f83eb4239e6adf09d426d8bcf351aea0cae7ac0390d3dbb9->enter($__internal_b8f3be75ebb91297f83eb4239e6adf09d426d8bcf351aea0cae7ac0390d3dbb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_a9ce2883a154c38f663bd31d976db2811034a41cad512b0497157ec415e92e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ce2883a154c38f663bd31d976db2811034a41cad512b0497157ec415e92e82->enter($__internal_a9ce2883a154c38f663bd31d976db2811034a41cad512b0497157ec415e92e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8f3be75ebb91297f83eb4239e6adf09d426d8bcf351aea0cae7ac0390d3dbb9->leave($__internal_b8f3be75ebb91297f83eb4239e6adf09d426d8bcf351aea0cae7ac0390d3dbb9_prof);

        
        $__internal_a9ce2883a154c38f663bd31d976db2811034a41cad512b0497157ec415e92e82->leave($__internal_a9ce2883a154c38f663bd31d976db2811034a41cad512b0497157ec415e92e82_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a5060594879b9eb157e9f9f9e701e9559cb2591e32198dec6adbb30ea1f7dd74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5060594879b9eb157e9f9f9e701e9559cb2591e32198dec6adbb30ea1f7dd74->enter($__internal_a5060594879b9eb157e9f9f9e701e9559cb2591e32198dec6adbb30ea1f7dd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_afcf2cef2603f6dd586ba17ab3989a1913ebe48ccc94ae258ad5012416b94d39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afcf2cef2603f6dd586ba17ab3989a1913ebe48ccc94ae258ad5012416b94d39->enter($__internal_afcf2cef2603f6dd586ba17ab3989a1913ebe48ccc94ae258ad5012416b94d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_afcf2cef2603f6dd586ba17ab3989a1913ebe48ccc94ae258ad5012416b94d39->leave($__internal_afcf2cef2603f6dd586ba17ab3989a1913ebe48ccc94ae258ad5012416b94d39_prof);

        
        $__internal_a5060594879b9eb157e9f9f9e701e9559cb2591e32198dec6adbb30ea1f7dd74->leave($__internal_a5060594879b9eb157e9f9f9e701e9559cb2591e32198dec6adbb30ea1f7dd74_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5708416c964564d8ee25d1ccb086a530d17b4ea9922c79012df6474d5b87d7b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5708416c964564d8ee25d1ccb086a530d17b4ea9922c79012df6474d5b87d7b7->enter($__internal_5708416c964564d8ee25d1ccb086a530d17b4ea9922c79012df6474d5b87d7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c4659491f20f3041011db3b925b93acc1697b9f1f6b06767487addcdbff2fb5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4659491f20f3041011db3b925b93acc1697b9f1f6b06767487addcdbff2fb5c->enter($__internal_c4659491f20f3041011db3b925b93acc1697b9f1f6b06767487addcdbff2fb5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c4659491f20f3041011db3b925b93acc1697b9f1f6b06767487addcdbff2fb5c->leave($__internal_c4659491f20f3041011db3b925b93acc1697b9f1f6b06767487addcdbff2fb5c_prof);

        
        $__internal_5708416c964564d8ee25d1ccb086a530d17b4ea9922c79012df6474d5b87d7b7->leave($__internal_5708416c964564d8ee25d1ccb086a530d17b4ea9922c79012df6474d5b87d7b7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2b93f082c7dc73a06dd316e19494fb4a8db4a98d79ef60e56f4dcf0e11f36220 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b93f082c7dc73a06dd316e19494fb4a8db4a98d79ef60e56f4dcf0e11f36220->enter($__internal_2b93f082c7dc73a06dd316e19494fb4a8db4a98d79ef60e56f4dcf0e11f36220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_52e9058c8f22d715b7375e8af293b6445e9e65b030861b7da658882ce02c61e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52e9058c8f22d715b7375e8af293b6445e9e65b030861b7da658882ce02c61e1->enter($__internal_52e9058c8f22d715b7375e8af293b6445e9e65b030861b7da658882ce02c61e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_52e9058c8f22d715b7375e8af293b6445e9e65b030861b7da658882ce02c61e1->leave($__internal_52e9058c8f22d715b7375e8af293b6445e9e65b030861b7da658882ce02c61e1_prof);

        
        $__internal_2b93f082c7dc73a06dd316e19494fb4a8db4a98d79ef60e56f4dcf0e11f36220->leave($__internal_2b93f082c7dc73a06dd316e19494fb4a8db4a98d79ef60e56f4dcf0e11f36220_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/finalSprint1/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
