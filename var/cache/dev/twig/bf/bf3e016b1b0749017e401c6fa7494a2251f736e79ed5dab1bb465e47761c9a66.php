<?php

/* ::base.html.twig */
class __TwigTemplate_a0483be191faa1e02990afaa9a83b43734d803e33c36294e5b03b68faa847fc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce9c22a0cb2545e81931216fc2f1e6a2c0d3e00dd2f81bbf1b3214d0298789b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce9c22a0cb2545e81931216fc2f1e6a2c0d3e00dd2f81bbf1b3214d0298789b7->enter($__internal_ce9c22a0cb2545e81931216fc2f1e6a2c0d3e00dd2f81bbf1b3214d0298789b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_5720871e06899f3af49cf6e3f930e420e001114b3ba9912e9538e7ee96b00dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5720871e06899f3af49cf6e3f930e420e001114b3ba9912e9538e7ee96b00dcf->enter($__internal_5720871e06899f3af49cf6e3f930e420e001114b3ba9912e9538e7ee96b00dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "    </head>
    <body>
        ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "



        ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "    </body>
</html>

";
        
        $__internal_ce9c22a0cb2545e81931216fc2f1e6a2c0d3e00dd2f81bbf1b3214d0298789b7->leave($__internal_ce9c22a0cb2545e81931216fc2f1e6a2c0d3e00dd2f81bbf1b3214d0298789b7_prof);

        
        $__internal_5720871e06899f3af49cf6e3f930e420e001114b3ba9912e9538e7ee96b00dcf->leave($__internal_5720871e06899f3af49cf6e3f930e420e001114b3ba9912e9538e7ee96b00dcf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7bdab9706b1c0ab2ce1772dd1589633ab389891dc285d11c89e9408005e2a8e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bdab9706b1c0ab2ce1772dd1589633ab389891dc285d11c89e9408005e2a8e4->enter($__internal_7bdab9706b1c0ab2ce1772dd1589633ab389891dc285d11c89e9408005e2a8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a6f9a632aca2f091006fab2dd3253f670a56e5224ec61a4fd57c18257dc948ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6f9a632aca2f091006fab2dd3253f670a56e5224ec61a4fd57c18257dc948ff->enter($__internal_a6f9a632aca2f091006fab2dd3253f670a56e5224ec61a4fd57c18257dc948ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a6f9a632aca2f091006fab2dd3253f670a56e5224ec61a4fd57c18257dc948ff->leave($__internal_a6f9a632aca2f091006fab2dd3253f670a56e5224ec61a4fd57c18257dc948ff_prof);

        
        $__internal_7bdab9706b1c0ab2ce1772dd1589633ab389891dc285d11c89e9408005e2a8e4->leave($__internal_7bdab9706b1c0ab2ce1772dd1589633ab389891dc285d11c89e9408005e2a8e4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b84827560a4fa0324349b735ac1f1b990b30891a16c07308265a1026263b935f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b84827560a4fa0324349b735ac1f1b990b30891a16c07308265a1026263b935f->enter($__internal_b84827560a4fa0324349b735ac1f1b990b30891a16c07308265a1026263b935f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_296d6c60612fc1242a5d5e9a46f1fd008be15e5e47ae181d626cd6e7f17083cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_296d6c60612fc1242a5d5e9a46f1fd008be15e5e47ae181d626cd6e7f17083cc->enter($__internal_296d6c60612fc1242a5d5e9a46f1fd008be15e5e47ae181d626cd6e7f17083cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "

  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style/css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style/css/shop-homepage.css"), "html", null, true);
        echo "\">

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    
      <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.16/css/jquery.dataTables.css\">


        ";
        
        $__internal_296d6c60612fc1242a5d5e9a46f1fd008be15e5e47ae181d626cd6e7f17083cc->leave($__internal_296d6c60612fc1242a5d5e9a46f1fd008be15e5e47ae181d626cd6e7f17083cc_prof);

        
        $__internal_b84827560a4fa0324349b735ac1f1b990b30891a16c07308265a1026263b935f->leave($__internal_b84827560a4fa0324349b735ac1f1b990b30891a16c07308265a1026263b935f_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_d70f20ae6e4570028346244bfe5b8097df7f5719ce519967c62532308d5f3cb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d70f20ae6e4570028346244bfe5b8097df7f5719ce519967c62532308d5f3cb3->enter($__internal_d70f20ae6e4570028346244bfe5b8097df7f5719ce519967c62532308d5f3cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5ec2a965ba83bfc3c2a8f09efee03d1b14b974f88294f9bea30a69f04d3da27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5ec2a965ba83bfc3c2a8f09efee03d1b14b974f88294f9bea30a69f04d3da27->enter($__internal_e5ec2a965ba83bfc3c2a8f09efee03d1b14b974f88294f9bea30a69f04d3da27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e5ec2a965ba83bfc3c2a8f09efee03d1b14b974f88294f9bea30a69f04d3da27->leave($__internal_e5ec2a965ba83bfc3c2a8f09efee03d1b14b974f88294f9bea30a69f04d3da27_prof);

        
        $__internal_d70f20ae6e4570028346244bfe5b8097df7f5719ce519967c62532308d5f3cb3->leave($__internal_d70f20ae6e4570028346244bfe5b8097df7f5719ce519967c62532308d5f3cb3_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5d76b7f7e03526dd1963d4fa2356a4ba96d995f26464e1ac2d9bd922055211b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d76b7f7e03526dd1963d4fa2356a4ba96d995f26464e1ac2d9bd922055211b1->enter($__internal_5d76b7f7e03526dd1963d4fa2356a4ba96d995f26464e1ac2d9bd922055211b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7baadf707f69296dc061e2648ff6895b87cc25180ac67b8e3076dda07aec4f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7baadf707f69296dc061e2648ff6895b87cc25180ac67b8e3076dda07aec4f40->enter($__internal_7baadf707f69296dc061e2648ff6895b87cc25180ac67b8e3076dda07aec4f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo " 

<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.16/js/jquery.dataTables.js\"></script>

        ";
        
        $__internal_7baadf707f69296dc061e2648ff6895b87cc25180ac67b8e3076dda07aec4f40->leave($__internal_7baadf707f69296dc061e2648ff6895b87cc25180ac67b8e3076dda07aec4f40_prof);

        
        $__internal_5d76b7f7e03526dd1963d4fa2356a4ba96d995f26464e1ac2d9bd922055211b1->leave($__internal_5d76b7f7e03526dd1963d4fa2356a4ba96d995f26464e1ac2d9bd922055211b1_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  163 => 31,  159 => 30,  155 => 28,  146 => 27,  129 => 22,  112 => 13,  107 => 11,  103 => 10,  99 => 9,  95 => 7,  86 => 6,  68 => 5,  55 => 35,  53 => 27,  47 => 23,  45 => 22,  41 => 20,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}


  <link rel=\"stylesheet\" href=\"{{ asset('style/css/bootstrap.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('style/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('style/css/shop-homepage.css') }}\">

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    
      <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.16/css/jquery.dataTables.css\">


        {% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}




        {% block javascripts %}
 

<script src=\"{{ asset('js/jquery.min.js') }}\"></script>
  <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
<script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.16/js/jquery.dataTables.js\"></script>

        {% endblock %}
    </body>
</html>

", "::base.html.twig", "/var/www/html/finalSprint1/app/Resources/views/base.html.twig");
    }
}
