<?php

/* ::LayoutAdmin/layout.html.twig */
class __TwigTemplate_e5b263af4919d5c5ca270d5bf3df191dbfdb4a397ff7aa446dde65e9ad1ec1a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::LayoutAdmin/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'Content' => array($this, 'block_Content'),
            'header' => array($this, 'block_header'),
            'connexion' => array($this, 'block_connexion'),
            'contenu' => array($this, 'block_contenu'),
            'formu' => array($this, 'block_formu'),
            'biens' => array($this, 'block_biens'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ccb03d88db0cdf81d02883ec198ee1c835d3b2b604a0d8463fb4bfecf42a738 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ccb03d88db0cdf81d02883ec198ee1c835d3b2b604a0d8463fb4bfecf42a738->enter($__internal_4ccb03d88db0cdf81d02883ec198ee1c835d3b2b604a0d8463fb4bfecf42a738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::LayoutAdmin/layout.html.twig"));

        $__internal_15db8ff7f82cbbc8e848176511832566a60b6f094e91b29a464abbf5229fcb35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15db8ff7f82cbbc8e848176511832566a60b6f094e91b29a464abbf5229fcb35->enter($__internal_15db8ff7f82cbbc8e848176511832566a60b6f094e91b29a464abbf5229fcb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::LayoutAdmin/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ccb03d88db0cdf81d02883ec198ee1c835d3b2b604a0d8463fb4bfecf42a738->leave($__internal_4ccb03d88db0cdf81d02883ec198ee1c835d3b2b604a0d8463fb4bfecf42a738_prof);

        
        $__internal_15db8ff7f82cbbc8e848176511832566a60b6f094e91b29a464abbf5229fcb35->leave($__internal_15db8ff7f82cbbc8e848176511832566a60b6f094e91b29a464abbf5229fcb35_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_53912ead0fda2b2cb5321adea8310dcf53fbd3cc215821f9653bb41081542e08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53912ead0fda2b2cb5321adea8310dcf53fbd3cc215821f9653bb41081542e08->enter($__internal_53912ead0fda2b2cb5321adea8310dcf53fbd3cc215821f9653bb41081542e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_02f55f775f35d62f5e435558de66f2c5e5c2856f682ae04c045173bf7482508a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02f55f775f35d62f5e435558de66f2c5e5c2856f682ae04c045173bf7482508a->enter($__internal_02f55f775f35d62f5e435558de66f2c5e5c2856f682ae04c045173bf7482508a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
 
   
    ";
        // line 7
        $this->displayBlock('Content', $context, $blocks);
        // line 75
        echo " 

";
        
        $__internal_02f55f775f35d62f5e435558de66f2c5e5c2856f682ae04c045173bf7482508a->leave($__internal_02f55f775f35d62f5e435558de66f2c5e5c2856f682ae04c045173bf7482508a_prof);

        
        $__internal_53912ead0fda2b2cb5321adea8310dcf53fbd3cc215821f9653bb41081542e08->leave($__internal_53912ead0fda2b2cb5321adea8310dcf53fbd3cc215821f9653bb41081542e08_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_7422402ace64998e3d76662b0b6f8ec58b1f0c1a0928b8b42776c3202a6e2e4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7422402ace64998e3d76662b0b6f8ec58b1f0c1a0928b8b42776c3202a6e2e4d->enter($__internal_7422402ace64998e3d76662b0b6f8ec58b1f0c1a0928b8b42776c3202a6e2e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_0582032ea55603aea15ea609bb3b08a50f165377f38268a23ae148e3f0258764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0582032ea55603aea15ea609bb3b08a50f165377f38268a23ae148e3f0258764->enter($__internal_0582032ea55603aea15ea609bb3b08a50f165377f38268a23ae148e3f0258764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        // line 8
        echo "    
          ";
        // line 9
        $this->displayBlock('header', $context, $blocks);
        // line 46
        echo "           ";
        $this->displayBlock('contenu', $context, $blocks);
        // line 61
        echo "
    <!-- Footer -->
    ";
        // line 63
        $this->displayBlock('footer', $context, $blocks);
        // line 72
        echo "
    <!-- Bootstrap core JavaScript -->    

   ";
        
        $__internal_0582032ea55603aea15ea609bb3b08a50f165377f38268a23ae148e3f0258764->leave($__internal_0582032ea55603aea15ea609bb3b08a50f165377f38268a23ae148e3f0258764_prof);

        
        $__internal_7422402ace64998e3d76662b0b6f8ec58b1f0c1a0928b8b42776c3202a6e2e4d->leave($__internal_7422402ace64998e3d76662b0b6f8ec58b1f0c1a0928b8b42776c3202a6e2e4d_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_cdb6d67187904c903773490804c75468380236763dfee647e21ece6cf98764f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdb6d67187904c903773490804c75468380236763dfee647e21ece6cf98764f2->enter($__internal_cdb6d67187904c903773490804c75468380236763dfee647e21ece6cf98764f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_21ad4f13c1790ba01025ecc346c204e088a80120ce486732fede3ce1a6de5241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21ad4f13c1790ba01025ecc346c204e088a80120ce486732fede3ce1a6de5241->enter($__internal_21ad4f13c1790ba01025ecc346c204e088a80120ce486732fede3ce1a6de5241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 10
        echo "        <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\" >
      <div class=\"container\">
       <div class=\"row\">
         
          <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo change.png"), "html", null, true);
        echo "\" style=\"width:60px\">
           <h1 class=\"my-4\" style=\"color:white\">Immobilier</h1>
           </div> 

        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item active\" >
              <a class=\"nav-link\" href=\"#\">Home
                <span class=\"sr-only\">(current)</span>
              </a>
            </li>
            <li class=\"nav-item\" style=\"margin-left:10px\">
              <a class=\"nav-link\" href=\"#\">About</a>
            </li>
            <li class=\"nav-item\" style=\"margin-left:10px\">
              <a class=\"nav-link\" href=\"#\">Services</a>
            </li>
            <li class=\"nav-item\" style=\"margin-left:10px\">
              <a class=\"nav-link\" href=\"#\">Contact</a>
            </li>
             ";
        // line 38
        $this->displayBlock('connexion', $context, $blocks);
        // line 41
        echo "          </ul>
        </div>
      </div>
    </nav>
          ";
        
        $__internal_21ad4f13c1790ba01025ecc346c204e088a80120ce486732fede3ce1a6de5241->leave($__internal_21ad4f13c1790ba01025ecc346c204e088a80120ce486732fede3ce1a6de5241_prof);

        
        $__internal_cdb6d67187904c903773490804c75468380236763dfee647e21ece6cf98764f2->leave($__internal_cdb6d67187904c903773490804c75468380236763dfee647e21ece6cf98764f2_prof);

    }

    // line 38
    public function block_connexion($context, array $blocks = array())
    {
        $__internal_8dc0b4bf5c5778b570a65d3cbb48174d1e4e3f1d4dfc94704445c0505ace07a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dc0b4bf5c5778b570a65d3cbb48174d1e4e3f1d4dfc94704445c0505ace07a6->enter($__internal_8dc0b4bf5c5778b570a65d3cbb48174d1e4e3f1d4dfc94704445c0505ace07a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connexion"));

        $__internal_7f0696b98f7bb3ed0fa87edf6cbce88c1d40223959149753cc2d089c15f11580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0696b98f7bb3ed0fa87edf6cbce88c1d40223959149753cc2d089c15f11580->enter($__internal_7f0696b98f7bb3ed0fa87edf6cbce88c1d40223959149753cc2d089c15f11580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connexion"));

        // line 39
        echo "                                <li class=\"nav-item\" style=\"margin-left:100px;border:2px solid white;height:20px;padding-top:-10px\"><a class=\"btn nav-link btn-dark btn-xs\" href=\"#\">Connexion / Inscription</a></li>
 ";
        
        $__internal_7f0696b98f7bb3ed0fa87edf6cbce88c1d40223959149753cc2d089c15f11580->leave($__internal_7f0696b98f7bb3ed0fa87edf6cbce88c1d40223959149753cc2d089c15f11580_prof);

        
        $__internal_8dc0b4bf5c5778b570a65d3cbb48174d1e4e3f1d4dfc94704445c0505ace07a6->leave($__internal_8dc0b4bf5c5778b570a65d3cbb48174d1e4e3f1d4dfc94704445c0505ace07a6_prof);

    }

    // line 46
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_7eaf3c826eaf6447334c8a249b8cddbbd74c7580b25c8a80b96025d693d45da2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eaf3c826eaf6447334c8a249b8cddbbd74c7580b25c8a80b96025d693d45da2->enter($__internal_7eaf3c826eaf6447334c8a249b8cddbbd74c7580b25c8a80b96025d693d45da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_a1c180958f92fb9760ee78b85c19f5263c2c9ca47220b7a1103cfab4cd8b57f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1c180958f92fb9760ee78b85c19f5263c2c9ca47220b7a1103cfab4cd8b57f4->enter($__internal_a1c180958f92fb9760ee78b85c19f5263c2c9ca47220b7a1103cfab4cd8b57f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 47
        echo "             <div class=\"container\" style=\"margin-top:40px\">
              ";
        // line 48
        $this->displayBlock('formu', $context, $blocks);
        // line 49
        echo "         
      ";
        // line 50
        $this->displayBlock('biens', $context, $blocks);
        // line 53
        echo "        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->
     
</div>
     ";
        
        $__internal_a1c180958f92fb9760ee78b85c19f5263c2c9ca47220b7a1103cfab4cd8b57f4->leave($__internal_a1c180958f92fb9760ee78b85c19f5263c2c9ca47220b7a1103cfab4cd8b57f4_prof);

        
        $__internal_7eaf3c826eaf6447334c8a249b8cddbbd74c7580b25c8a80b96025d693d45da2->leave($__internal_7eaf3c826eaf6447334c8a249b8cddbbd74c7580b25c8a80b96025d693d45da2_prof);

    }

    // line 48
    public function block_formu($context, array $blocks = array())
    {
        $__internal_e7ed933ee4e12620b0259ae55c240349c9af0c9588351e483109d44875faad7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7ed933ee4e12620b0259ae55c240349c9af0c9588351e483109d44875faad7f->enter($__internal_e7ed933ee4e12620b0259ae55c240349c9af0c9588351e483109d44875faad7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formu"));

        $__internal_72aae93c56e11c40d8204e157e1a37b90bd49e8cb63a3aa3d2e38bfcb9b6f074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72aae93c56e11c40d8204e157e1a37b90bd49e8cb63a3aa3d2e38bfcb9b6f074->enter($__internal_72aae93c56e11c40d8204e157e1a37b90bd49e8cb63a3aa3d2e38bfcb9b6f074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formu"));

        
        $__internal_72aae93c56e11c40d8204e157e1a37b90bd49e8cb63a3aa3d2e38bfcb9b6f074->leave($__internal_72aae93c56e11c40d8204e157e1a37b90bd49e8cb63a3aa3d2e38bfcb9b6f074_prof);

        
        $__internal_e7ed933ee4e12620b0259ae55c240349c9af0c9588351e483109d44875faad7f->leave($__internal_e7ed933ee4e12620b0259ae55c240349c9af0c9588351e483109d44875faad7f_prof);

    }

    // line 50
    public function block_biens($context, array $blocks = array())
    {
        $__internal_fe533082d76ae142b552e03028f424254d2ba099d351c083104d123ee8ea806d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe533082d76ae142b552e03028f424254d2ba099d351c083104d123ee8ea806d->enter($__internal_fe533082d76ae142b552e03028f424254d2ba099d351c083104d123ee8ea806d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "biens"));

        $__internal_473bf6eb9758c2506446d38fb223a657d195fe13685ff7ecb71746e2caf46320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_473bf6eb9758c2506446d38fb223a657d195fe13685ff7ecb71746e2caf46320->enter($__internal_473bf6eb9758c2506446d38fb223a657d195fe13685ff7ecb71746e2caf46320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "biens"));

        // line 51
        echo "     
 ";
        
        $__internal_473bf6eb9758c2506446d38fb223a657d195fe13685ff7ecb71746e2caf46320->leave($__internal_473bf6eb9758c2506446d38fb223a657d195fe13685ff7ecb71746e2caf46320_prof);

        
        $__internal_fe533082d76ae142b552e03028f424254d2ba099d351c083104d123ee8ea806d->leave($__internal_fe533082d76ae142b552e03028f424254d2ba099d351c083104d123ee8ea806d_prof);

    }

    // line 63
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8b1e9f15080b6b9736ddbb1abeb8b78dc7369fb698d602467f95e5129a211b53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b1e9f15080b6b9736ddbb1abeb8b78dc7369fb698d602467f95e5129a211b53->enter($__internal_8b1e9f15080b6b9736ddbb1abeb8b78dc7369fb698d602467f95e5129a211b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_07b27ee56c1e80576f1c08e95453ff9d4f0b1a29ffb60d237db10db13c262540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b27ee56c1e80576f1c08e95453ff9d4f0b1a29ffb60d237db10db13c262540->enter($__internal_07b27ee56c1e80576f1c08e95453ff9d4f0b1a29ffb60d237db10db13c262540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 64
        echo "<footer class=\"py-5 bg-dark\">
      <div class=\"container\">
        <p class=\"m-0 text-center text-white\">Copyright &copy; Akina Group 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    ";
        
        $__internal_07b27ee56c1e80576f1c08e95453ff9d4f0b1a29ffb60d237db10db13c262540->leave($__internal_07b27ee56c1e80576f1c08e95453ff9d4f0b1a29ffb60d237db10db13c262540_prof);

        
        $__internal_8b1e9f15080b6b9736ddbb1abeb8b78dc7369fb698d602467f95e5129a211b53->leave($__internal_8b1e9f15080b6b9736ddbb1abeb8b78dc7369fb698d602467f95e5129a211b53_prof);

    }

    public function getTemplateName()
    {
        return "::LayoutAdmin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 64,  262 => 63,  251 => 51,  242 => 50,  225 => 48,  208 => 53,  206 => 50,  203 => 49,  201 => 48,  198 => 47,  189 => 46,  178 => 39,  169 => 38,  155 => 41,  153 => 38,  127 => 15,  120 => 10,  111 => 9,  98 => 72,  96 => 63,  92 => 61,  89 => 46,  87 => 9,  84 => 8,  75 => 7,  63 => 75,  61 => 7,  56 => 4,  47 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block body %}

 
   
    {% block Content %}
    
          {% block header %}
        <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\" >
      <div class=\"container\">
       <div class=\"row\">
         
          <img src=\"{{ asset('img/logo change.png')}}\" style=\"width:60px\">
           <h1 class=\"my-4\" style=\"color:white\">Immobilier</h1>
           </div> 

        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item active\" >
              <a class=\"nav-link\" href=\"#\">Home
                <span class=\"sr-only\">(current)</span>
              </a>
            </li>
            <li class=\"nav-item\" style=\"margin-left:10px\">
              <a class=\"nav-link\" href=\"#\">About</a>
            </li>
            <li class=\"nav-item\" style=\"margin-left:10px\">
              <a class=\"nav-link\" href=\"#\">Services</a>
            </li>
            <li class=\"nav-item\" style=\"margin-left:10px\">
              <a class=\"nav-link\" href=\"#\">Contact</a>
            </li>
             {% block connexion %}
                                <li class=\"nav-item\" style=\"margin-left:100px;border:2px solid white;height:20px;padding-top:-10px\"><a class=\"btn nav-link btn-dark btn-xs\" href=\"#\">Connexion / Inscription</a></li>
 {% endblock %}
          </ul>
        </div>
      </div>
    </nav>
          {% endblock %}
           {% block contenu %}
             <div class=\"container\" style=\"margin-top:40px\">
              {% block formu %}{% endblock %}
         
      {% block biens %}
     
 {% endblock %}
        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->
     
</div>
     {% endblock %}

    <!-- Footer -->
    {% block footer %}
<footer class=\"py-5 bg-dark\">
      <div class=\"container\">
        <p class=\"m-0 text-center text-white\">Copyright &copy; Akina Group 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    {% endblock %}

    <!-- Bootstrap core JavaScript -->    

   {% endblock %} 

{% endblock %}
", "::LayoutAdmin/layout.html.twig", "/var/www/html/finalSprint1/app/Resources/views/LayoutAdmin/layout.html.twig");
    }
}
