<?php

/* AkinaImmobilierBundle:Front:search.html.twig */
class __TwigTemplate_b11dcfccebfad3502ebc70adb18ee6bc7b5b66ddf5cad0f7f21f9762a5ed20be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout.html.twig", "AkinaImmobilierBundle:Front:search.html.twig", 1);
        $this->blocks = array(
            'catalogue' => array($this, 'block_catalogue'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_038a667e7ab297241d02f18d8bb568769fa12521141d6010f0b6d8bfe63783c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_038a667e7ab297241d02f18d8bb568769fa12521141d6010f0b6d8bfe63783c4->enter($__internal_038a667e7ab297241d02f18d8bb568769fa12521141d6010f0b6d8bfe63783c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Front:search.html.twig"));

        $__internal_1ca753c8f7fd02de8593b4a6d6421a362d68021d4635ad3669251540480acc8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ca753c8f7fd02de8593b4a6d6421a362d68021d4635ad3669251540480acc8e->enter($__internal_1ca753c8f7fd02de8593b4a6d6421a362d68021d4635ad3669251540480acc8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Front:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_038a667e7ab297241d02f18d8bb568769fa12521141d6010f0b6d8bfe63783c4->leave($__internal_038a667e7ab297241d02f18d8bb568769fa12521141d6010f0b6d8bfe63783c4_prof);

        
        $__internal_1ca753c8f7fd02de8593b4a6d6421a362d68021d4635ad3669251540480acc8e->leave($__internal_1ca753c8f7fd02de8593b4a6d6421a362d68021d4635ad3669251540480acc8e_prof);

    }

    // line 3
    public function block_catalogue($context, array $blocks = array())
    {
        $__internal_835f42334cbff0e8286eca6bb62dd5f37adee26cb4cdcffb9886d94959c914d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_835f42334cbff0e8286eca6bb62dd5f37adee26cb4cdcffb9886d94959c914d6->enter($__internal_835f42334cbff0e8286eca6bb62dd5f37adee26cb4cdcffb9886d94959c914d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        $__internal_0861a1297f90483578803cff93af60d76f3f450b752708b0f0fe33a003443432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0861a1297f90483578803cff93af60d76f3f450b752708b0f0fe33a003443432->enter($__internal_0861a1297f90483578803cff93af60d76f3f450b752708b0f0fe33a003443432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        // line 4
        echo "  
  <div class=\"row\">
 ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 7
            echo "            
                    <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"#\"><img class=\"card-img-top\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Subu-Design-08.jpg"), "html", null, true);
            echo "\" alt=\"\"></a>
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <a href=\"#\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "NomBien", array()), "html", null, true);
            echo "</a>
                  </h4>
                  <h5>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "Prix", array()), "html", null, true);
            echo " Fcfa</h5>
                  <p class=\"card-text\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "Description", array()), "html", null, true);
            echo "...<br/>
                  </p>
                  <h4> Type: ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "Type", array()), "Libelle", array()), "html", null, true);
            echo "</h4>
                  <h4> Localité: ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "Localite", array()), "Libelle", array()), "html", null, true);
            echo "</h4>
                  <a href=\"";
            // line 20
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
        // line 29
        echo " <div class=\"text-center\" style=\"margin-left:450px\">";
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["reservations"] ?? $this->getContext($context, "reservations")));
        echo "</div>

   </div>
   
          <!-- /.row -->
           ";
        
        $__internal_0861a1297f90483578803cff93af60d76f3f450b752708b0f0fe33a003443432->leave($__internal_0861a1297f90483578803cff93af60d76f3f450b752708b0f0fe33a003443432_prof);

        
        $__internal_835f42334cbff0e8286eca6bb62dd5f37adee26cb4cdcffb9886d94959c914d6->leave($__internal_835f42334cbff0e8286eca6bb62dd5f37adee26cb4cdcffb9886d94959c914d6_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Front:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 29,  90 => 20,  86 => 19,  82 => 18,  77 => 16,  73 => 15,  68 => 13,  62 => 10,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
 <div class=\"text-center\" style=\"margin-left:450px\">{{ knp_pagination_render(reservations) }}</div>

   </div>
   
          <!-- /.row -->
           {% endblock %}", "AkinaImmobilierBundle:Front:search.html.twig", "/var/www/html/finalSprint1/src/Akina/ImmobilierBundle/Resources/views/Front/search.html.twig");
    }
}
