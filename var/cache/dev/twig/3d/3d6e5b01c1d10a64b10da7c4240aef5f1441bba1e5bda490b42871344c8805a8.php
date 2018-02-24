<?php

/* AkinaImmobilierBundle:Front:list.html.twig */
class __TwigTemplate_662a4d3cf36862770eaee7b277e9255ae79b8cbe48c36be836b889eaf24a5a59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout.html.twig", "AkinaImmobilierBundle:Front:list.html.twig", 1);
        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'formu' => array($this, 'block_formu'),
            'catalogue' => array($this, 'block_catalogue'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fd560049e3eb1cacd09b7cd5b8d008decc306e21858859bdb064b25d0977527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fd560049e3eb1cacd09b7cd5b8d008decc306e21858859bdb064b25d0977527->enter($__internal_9fd560049e3eb1cacd09b7cd5b8d008decc306e21858859bdb064b25d0977527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Front:list.html.twig"));

        $__internal_bf32453e7673b8af436f8f854be16fb42a6e20cab484328535fab100d27bb504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf32453e7673b8af436f8f854be16fb42a6e20cab484328535fab100d27bb504->enter($__internal_bf32453e7673b8af436f8f854be16fb42a6e20cab484328535fab100d27bb504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Front:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fd560049e3eb1cacd09b7cd5b8d008decc306e21858859bdb064b25d0977527->leave($__internal_9fd560049e3eb1cacd09b7cd5b8d008decc306e21858859bdb064b25d0977527_prof);

        
        $__internal_bf32453e7673b8af436f8f854be16fb42a6e20cab484328535fab100d27bb504->leave($__internal_bf32453e7673b8af436f8f854be16fb42a6e20cab484328535fab100d27bb504_prof);

    }

    // line 2
    public function block_form($context, array $blocks = array())
    {
        $__internal_f84f965146b133519eb0dd64a62c086a3093f017cfb399aec48fe02682c34a06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f84f965146b133519eb0dd64a62c086a3093f017cfb399aec48fe02682c34a06->enter($__internal_f84f965146b133519eb0dd64a62c086a3093f017cfb399aec48fe02682c34a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_4091b654cf6eb46081fdcd5b2211dbde2bdd6ff66be80f0c984b6620461267c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4091b654cf6eb46081fdcd5b2211dbde2bdd6ff66be80f0c984b6620461267c6->enter($__internal_4091b654cf6eb46081fdcd5b2211dbde2bdd6ff66be80f0c984b6620461267c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 3
        echo "<h1 class=\"my-4 list-group-item\">Recherche de bien</h1>
<div class=\"form-group list-group-item\">
<form action=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\" methode=\"post\">
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">Prix</label>
    <input type=\"number\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter un montant\" name=\"prix\">
    
  </div>
  <div class=\"form-group\">
    <label for=\"exampleSelect1\">Localité</label>
    <select class=\"form-control\" id=\"exampleSelect1\" name=\"Localite\"> 
      <option>--Choisir une localité--</option>
      ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Localite"] ?? $this->getContext($context, "Localite")));
        foreach ($context['_seq'] as $context["_key"] => $context["localite"]) {
            // line 16
            echo "      <option>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "libelle", array()), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </select>
  </div>
  <div class=\"form-group\">
    <label for=\"exampleSelect2\">Type</label>
    <select class=\"form-control\" id=\"exampleSelect2\" name=\"Type\">
      <option>--Choisir un type--</option>
      ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Type"] ?? $this->getContext($context, "Type")));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            echo "<option>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "libelle", array()), "html", null, true);
            echo "</option> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </select>
  </div>
 
  
  <button type=\"submit\" class=\"btn btn-dark\" name=\"chercher\">Rechercher</button>
</form>

</div>
 ";
        
        $__internal_4091b654cf6eb46081fdcd5b2211dbde2bdd6ff66be80f0c984b6620461267c6->leave($__internal_4091b654cf6eb46081fdcd5b2211dbde2bdd6ff66be80f0c984b6620461267c6_prof);

        
        $__internal_f84f965146b133519eb0dd64a62c086a3093f017cfb399aec48fe02682c34a06->leave($__internal_f84f965146b133519eb0dd64a62c086a3093f017cfb399aec48fe02682c34a06_prof);

    }

    // line 33
    public function block_formu($context, array $blocks = array())
    {
        $__internal_85c666b066bb8fe67881f29ec407aeb967e70f90ed618f37064a7ddf65c1cb5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85c666b066bb8fe67881f29ec407aeb967e70f90ed618f37064a7ddf65c1cb5a->enter($__internal_85c666b066bb8fe67881f29ec407aeb967e70f90ed618f37064a7ddf65c1cb5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formu"));

        $__internal_4796a15f3b0a0565122998cc47d122d600451ed05483ac9c447b9c438d50777b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4796a15f3b0a0565122998cc47d122d600451ed05483ac9c447b9c438d50777b->enter($__internal_4796a15f3b0a0565122998cc47d122d600451ed05483ac9c447b9c438d50777b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formu"));

        // line 34
        echo "
 ";
        
        $__internal_4796a15f3b0a0565122998cc47d122d600451ed05483ac9c447b9c438d50777b->leave($__internal_4796a15f3b0a0565122998cc47d122d600451ed05483ac9c447b9c438d50777b_prof);

        
        $__internal_85c666b066bb8fe67881f29ec407aeb967e70f90ed618f37064a7ddf65c1cb5a->leave($__internal_85c666b066bb8fe67881f29ec407aeb967e70f90ed618f37064a7ddf65c1cb5a_prof);

    }

    // line 36
    public function block_catalogue($context, array $blocks = array())
    {
        $__internal_02cb879003ca8acbe254627ea6f00ef3ab5c456c544f56464978cb29e59d1c75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02cb879003ca8acbe254627ea6f00ef3ab5c456c544f56464978cb29e59d1c75->enter($__internal_02cb879003ca8acbe254627ea6f00ef3ab5c456c544f56464978cb29e59d1c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        $__internal_66118cea85c98d2e67b5e84156adeac2d40b8888da1156363aed5109d78d390e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66118cea85c98d2e67b5e84156adeac2d40b8888da1156363aed5109d78d390e->enter($__internal_66118cea85c98d2e67b5e84156adeac2d40b8888da1156363aed5109d78d390e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        // line 37
        echo "
  <div class=\"row\">
 ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 40
            echo "            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"#\"><img class=\"card-img-top\" src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Subu-Design-08.jpg"), "html", null, true);
            echo "\" alt=\"\"></a>
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <a href=\"#\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "NomBien", array()), "html", null, true);
            echo "</a>
                  </h4>
                  <h5>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "Prix", array()), "html", null, true);
            echo " Fcfa</h5>
                  <p class=\"card-text\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "Description", array()), "html", null, true);
            echo "...<br/>
                  </p>
                  <h4> Type: ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "Type", array()), "Libelle", array()), "html", null, true);
            echo "</h4>
                  <h4> Localité: ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "Localite", array()), "Libelle", array()), "html", null, true);
            echo "</h4>
                  <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Reserve", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "\">Reserver</a>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
   </div>
   <div class=\"text-center\" style=\"margin-left:450px\">";
        // line 63
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["reservations"] ?? $this->getContext($context, "reservations")));
        echo "</div>

          <!-- /.row -->
           ";
        
        $__internal_66118cea85c98d2e67b5e84156adeac2d40b8888da1156363aed5109d78d390e->leave($__internal_66118cea85c98d2e67b5e84156adeac2d40b8888da1156363aed5109d78d390e_prof);

        
        $__internal_02cb879003ca8acbe254627ea6f00ef3ab5c456c544f56464978cb29e59d1c75->leave($__internal_02cb879003ca8acbe254627ea6f00ef3ab5c456c544f56464978cb29e59d1c75_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Front:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 63,  201 => 61,  186 => 52,  182 => 51,  178 => 50,  173 => 48,  169 => 47,  164 => 45,  158 => 42,  154 => 40,  150 => 39,  146 => 37,  137 => 36,  126 => 34,  117 => 33,  99 => 24,  88 => 23,  80 => 17,  72 => 16,  68 => 15,  55 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
<h1 class=\"my-4 list-group-item\">Recherche de bien</h1>
<div class=\"form-group list-group-item\">
<form action=\"{{path('search')}}\" methode=\"post\">
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">Prix</label>
    <input type=\"number\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter un montant\" name=\"prix\">
    
  </div>
  <div class=\"form-group\">
    <label for=\"exampleSelect1\">Localité</label>
    <select class=\"form-control\" id=\"exampleSelect1\" name=\"Localite\"> 
      <option>--Choisir une localité--</option>
      {%for localite in Localite%}
      <option>{{localite.libelle}}</option>{%endfor%}
    </select>
  </div>
  <div class=\"form-group\">
    <label for=\"exampleSelect2\">Type</label>
    <select class=\"form-control\" id=\"exampleSelect2\" name=\"Type\">
      <option>--Choisir un type--</option>
      {%for type in Type%}<option>{{type.libelle}}</option> {%endfor%}
    </select>
  </div>
 
  
  <button type=\"submit\" class=\"btn btn-dark\" name=\"chercher\">Rechercher</button>
</form>

</div>
 {% endblock %}
 {% block formu %}

 {% endblock %}
   {% block catalogue %}

  <div class=\"row\">
 {%for bien in reservations%}
            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"#\"><img class=\"card-img-top\" src=\"{{ asset('img/Subu-Design-08.jpg') }}\" alt=\"\"></a>
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <a href=\"#\">{{bien.NomBien}}</a>
                  </h4>
                  <h5>{{bien.Prix}} Fcfa</h5>
                  <p class=\"card-text\">{{bien.Description}}...<br/>
                  </p>
                  <h4> Type: {{bien.Type.Libelle}}</h4>
                  <h4> Localité: {{bien.Localite.Libelle}}</h4>
                  <a href=\"{{path('Reserve',{'id':bien.id})}}\">Reserver</a>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

   {%endfor%}

   </div>
   <div class=\"text-center\" style=\"margin-left:450px\">{{ knp_pagination_render(reservations) }}</div>

          <!-- /.row -->
           {% endblock %}", "AkinaImmobilierBundle:Front:list.html.twig", "/var/www/html/finalSprint1/src/Akina/ImmobilierBundle/Resources/views/Front/list.html.twig");
    }
}
