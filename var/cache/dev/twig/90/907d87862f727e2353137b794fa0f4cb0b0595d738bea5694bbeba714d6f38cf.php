<?php

/* AkinaImmobilierBundle:Admin:list.html.twig */
class __TwigTemplate_209234cd1c26305ce66b20eac471cf074364a472171ee223dfef8c035c6ae664 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::LayoutAdmin/layout.html.twig", "AkinaImmobilierBundle:Admin:list.html.twig", 1);
        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'biens' => array($this, 'block_biens'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::LayoutAdmin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1475cf6fe20155058a7499534a12f6a3ef5127bc38b0e9757b97a366753c58d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1475cf6fe20155058a7499534a12f6a3ef5127bc38b0e9757b97a366753c58d->enter($__internal_b1475cf6fe20155058a7499534a12f6a3ef5127bc38b0e9757b97a366753c58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:list.html.twig"));

        $__internal_af5b75fd7ebd517979ba3d33d6ad720cffeeca1601d3bb19149c9ad3b53f09f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af5b75fd7ebd517979ba3d33d6ad720cffeeca1601d3bb19149c9ad3b53f09f1->enter($__internal_af5b75fd7ebd517979ba3d33d6ad720cffeeca1601d3bb19149c9ad3b53f09f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1475cf6fe20155058a7499534a12f6a3ef5127bc38b0e9757b97a366753c58d->leave($__internal_b1475cf6fe20155058a7499534a12f6a3ef5127bc38b0e9757b97a366753c58d_prof);

        
        $__internal_af5b75fd7ebd517979ba3d33d6ad720cffeeca1601d3bb19149c9ad3b53f09f1->leave($__internal_af5b75fd7ebd517979ba3d33d6ad720cffeeca1601d3bb19149c9ad3b53f09f1_prof);

    }

    // line 2
    public function block_form($context, array $blocks = array())
    {
        $__internal_161228d090818dba66debf02d74bed4d97270e99736f3c0e9f46c397498747bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_161228d090818dba66debf02d74bed4d97270e99736f3c0e9f46c397498747bc->enter($__internal_161228d090818dba66debf02d74bed4d97270e99736f3c0e9f46c397498747bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_069750ece0895a53e3254443b8350458319f3e689c665a4dc98c6a52d5950f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_069750ece0895a53e3254443b8350458319f3e689c665a4dc98c6a52d5950f59->enter($__internal_069750ece0895a53e3254443b8350458319f3e689c665a4dc98c6a52d5950f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 3
        echo " <h1 class=\"my-4 list-group-item\">Recherche de bien</h1>
<div class=\"form-group list-group-item\">


</div>
  ";
        
        $__internal_069750ece0895a53e3254443b8350458319f3e689c665a4dc98c6a52d5950f59->leave($__internal_069750ece0895a53e3254443b8350458319f3e689c665a4dc98c6a52d5950f59_prof);

        
        $__internal_161228d090818dba66debf02d74bed4d97270e99736f3c0e9f46c397498747bc->leave($__internal_161228d090818dba66debf02d74bed4d97270e99736f3c0e9f46c397498747bc_prof);

    }

    // line 9
    public function block_biens($context, array $blocks = array())
    {
        $__internal_91a543fc0058ccde6f58c5a7f57bff2b45a4cb9ff09ddc7ca2e1ef63c564e3a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91a543fc0058ccde6f58c5a7f57bff2b45a4cb9ff09ddc7ca2e1ef63c564e3a9->enter($__internal_91a543fc0058ccde6f58c5a7f57bff2b45a4cb9ff09ddc7ca2e1ef63c564e3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "biens"));

        $__internal_9a698aae15fcfc906607e1be0a02f7a363a65ada30664c7f97dce9cab4617708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a698aae15fcfc906607e1be0a02f7a363a65ada30664c7f97dce9cab4617708->enter($__internal_9a698aae15fcfc906607e1be0a02f7a363a65ada30664c7f97dce9cab4617708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "biens"));

        // line 10
        echo "<script >\$(document).ready( function () {
    \$('#example').DataTable();
} );</script>
<h3>
Portail Utilisateur
</h3>
 <div class=\"container\">

  
 <div class=\"table-responsive \"> 
<table class=\"table table-bordred table-striped table-inverse display\" id=\"example\">
<thead>
<tr>
    <th>N° </th>
<th>Nom Bien</th>
<th>Etat</th>

<th>Description</th>
<th>Localite</th>
<th>Type</th>
<th>Proprietaire</th>
<th>Détails</th>
</tr>
</thead>
<tbody>
";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 36
            echo "<tr>
<td>

</td>

<td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nomBien", array()), "html", null, true);
            echo "</td>
<td><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("disponibilite", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "\">
";
            // line 43
            if (($this->getAttribute($context["bien"], "etat", array()) == 1)) {
                // line 44
                echo "Disponible
";
            } else {
                // line 46
                echo "Occupé
";
            }
            // line 48
            echo "</a></td>
<td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "description", array()), "html", null, true);
            echo "</td>


<td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "Localite", array()), "libelle", array()), "html", null, true);
            echo "</td>
<td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "Type", array()), "libelle", array()), "html", null, true);
            echo "</td>

<td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "Proprietaire", array()), "numeroPiece", array()), "html", null, true);
            echo "</td>
<td><a href=\"#\">Détails</a></td>
<td></td>
</tr>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 61
            echo "<td colspan=\"6\">Aucun utilisateur</td>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "</tbody>
</table>
</div>

</div>
 

";
        
        $__internal_9a698aae15fcfc906607e1be0a02f7a363a65ada30664c7f97dce9cab4617708->leave($__internal_9a698aae15fcfc906607e1be0a02f7a363a65ada30664c7f97dce9cab4617708_prof);

        
        $__internal_91a543fc0058ccde6f58c5a7f57bff2b45a4cb9ff09ddc7ca2e1ef63c564e3a9->leave($__internal_91a543fc0058ccde6f58c5a7f57bff2b45a4cb9ff09ddc7ca2e1ef63c564e3a9_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Admin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 64,  160 => 61,  149 => 55,  144 => 53,  140 => 52,  134 => 49,  131 => 48,  127 => 46,  123 => 44,  121 => 43,  117 => 42,  113 => 41,  106 => 36,  101 => 35,  74 => 10,  65 => 9,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::LayoutAdmin/layout.html.twig\" %}
 {% block form %}
 <h1 class=\"my-4 list-group-item\">Recherche de bien</h1>
<div class=\"form-group list-group-item\">


</div>
  {% endblock %}
{% block biens %}
<script >\$(document).ready( function () {
    \$('#example').DataTable();
} );</script>
<h3>
Portail Utilisateur
</h3>
 <div class=\"container\">

  
 <div class=\"table-responsive \"> 
<table class=\"table table-bordred table-striped table-inverse display\" id=\"example\">
<thead>
<tr>
    <th>N° </th>
<th>Nom Bien</th>
<th>Etat</th>

<th>Description</th>
<th>Localite</th>
<th>Type</th>
<th>Proprietaire</th>
<th>Détails</th>
</tr>
</thead>
<tbody>
{%for bien in reservations%}
<tr>
<td>

</td>

<td>{{bien.nomBien}}</td>
<td><a href=\"{{path('disponibilite',{'id':bien.id})}}\">
{%if bien.etat == 1%}
Disponible
{% else %}
Occupé
{% endif%}
</a></td>
<td>{{bien.description}}</td>


<td>{{bien.Localite.libelle }}</td>
<td>{{bien.Type.libelle}}</td>

<td>{{bien.Proprietaire.numeroPiece}}</td>
<td><a href=\"#\">Détails</a></td>
<td></td>
</tr>

{%else%}
<td colspan=\"6\">Aucun utilisateur</td>

{%endfor%}
</tbody>
</table>
</div>

</div>
 

{% endblock %}", "AkinaImmobilierBundle:Admin:list.html.twig", "/var/www/html/finalSprint1/src/Akina/ImmobilierBundle/Resources/views/Admin/list.html.twig");
    }
}
