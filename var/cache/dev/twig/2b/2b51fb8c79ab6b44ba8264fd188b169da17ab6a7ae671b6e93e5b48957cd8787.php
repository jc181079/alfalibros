<?php

/* ::navbar.html.twig */
class __TwigTemplate_22e239371e4ef2c659df8106ba4ea5e20410215e1c3678b28e0b94acf8db9404 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_347dfaf24c2c606c94b40e1c090b042dabaf1219e19a770d67a91c06f43c74b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347dfaf24c2c606c94b40e1c090b042dabaf1219e19a770d67a91c06f43c74b7->enter($__internal_347dfaf24c2c606c94b40e1c090b042dabaf1219e19a770d67a91c06f43c74b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::navbar.html.twig"));

        // line 1
        $this->displayBlock('navbar', $context, $blocks);
        // line 37
        echo " ";
        
        $__internal_347dfaf24c2c606c94b40e1c090b042dabaf1219e19a770d67a91c06f43c74b7->leave($__internal_347dfaf24c2c606c94b40e1c090b042dabaf1219e19a770d67a91c06f43c74b7_prof);

    }

    // line 1
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_44e610fd262b19205eae6119a0ab418a98abccb7d9945e974bc92b8d12b5ce6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e610fd262b19205eae6119a0ab418a98abccb7d9945e974bc92b8d12b5ce6e->enter($__internal_44e610fd262b19205eae6119a0ab418a98abccb7d9945e974bc92b8d12b5ce6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 2
        echo "<div class=\"w3-top\">
 <ul class=\"w3-navbar w3-theme-d2 w3-left-align w3-large\">
  <li class=\"w3-hide-medium w3-hide-large w3-opennav w3-right\">
    <a class=\"w3-padding-large w3-hover-white w3-large w3-theme-d2\" href=\"javascript:void(0);\" onclick=\"openNav()\"><i class=\"fa fa-bars\"></i></a>
  </li>
  <li><a href=\"http://www.alfalibros.net\" class=\"w3-padding-large w3-theme-d4\"><i class=\"fa fa-home w3-margin-right\"></i>Alfalibros</a></li>
 
 <!--
  <li class=\"w3-hide-small\"><a href=\"#\" class=\"w3-padding-large w3-hover-white\" title=\"News\"><i class=\"fa fa-globe\"></i> Libros</a></li>
  <li class=\"w3-hide-small\"><a href=\"#\" class=\"w3-padding-large w3-hover-white\" title=\"Account Settings\"><i class=\"fa fa-user\"></i></a></li>
  <li class=\"w3-hide-small\"><a href=\"#\" class=\"w3-padding-large w3-hover-white\" title=\"Messages\"><i class=\"fa fa-envelope\"></i></a></li>
  -->
  
  
  <li class=\"w3-hide-small w3-dropdown-hover\">
    <a href=\"#\" class=\"w3-padding-large w3-hover-white\" title=\"Notifications\"></i><span class=\"fa fa-globe\"> Libros</span></a>
    <div class=\"w3-dropdown-content w3-white w3-card-4\">
      <a href=\"./categoria.php?pa=1&cat=7\">Autoayuda</a>
      <a href=\"./categoria.php?pa=1&cat=5\">Economia</a>
      <a href=\"./categoria.php?pa=1&cat=6\">Politica</a>
      <a href=\"#\">Jane likes your post</a>
    </div>
  </li>
  
  <li class=\"w3-hide-small w3-dropdown-hover\">
    <a href=\"#\" class=\"w3-padding-large w3-hover-white\" title=\"Notifications\"><i class=\"fa fa-bell\"></i><span class=\"w3-badge w3-right w3-small w3-green\">3</span></a>
    <div class=\"w3-dropdown-content w3-white w3-card-4\">
      <a href=\"#\">One new friend request</a>
      <a href=\"#\">John Doe posted on your wall</a>
      <a href=\"#\">Jane likes your post</a>
    </div>
  </li>
  <li class=\"w3-hide-small w3-right\"><a href=\"#\" class=\"w3-padding-large w3-hover-white\" title=\"My Account\"><img src=\"../../paneldelibros/index.php/app_files/view/4\" class=\"w3-circle\" style=\"height:25px;width:25px\" alt=\"Avatar\"></a></li>
 </ul>
</div>
";
        
        $__internal_44e610fd262b19205eae6119a0ab418a98abccb7d9945e974bc92b8d12b5ce6e->leave($__internal_44e610fd262b19205eae6119a0ab418a98abccb7d9945e974bc92b8d12b5ce6e_prof);

    }

    public function getTemplateName()
    {
        return "::navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 2,  32 => 1,  25 => 37,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block navbar %}
<div class=\"w3-top\">
 <ul class=\"w3-navbar w3-theme-d2 w3-left-align w3-large\">
  <li class=\"w3-hide-medium w3-hide-large w3-opennav w3-right\">
    <a class=\"w3-padding-large w3-hover-white w3-large w3-theme-d2\" href=\"javascript:void(0);\" onclick=\"openNav()\"><i class=\"fa fa-bars\"></i></a>
  </li>
  <li><a href=\"http://www.alfalibros.net\" class=\"w3-padding-large w3-theme-d4\"><i class=\"fa fa-home w3-margin-right\"></i>Alfalibros</a></li>
 
 <!--
  <li class=\"w3-hide-small\"><a href=\"#\" class=\"w3-padding-large w3-hover-white\" title=\"News\"><i class=\"fa fa-globe\"></i> Libros</a></li>
  <li class=\"w3-hide-small\"><a href=\"#\" class=\"w3-padding-large w3-hover-white\" title=\"Account Settings\"><i class=\"fa fa-user\"></i></a></li>
  <li class=\"w3-hide-small\"><a href=\"#\" class=\"w3-padding-large w3-hover-white\" title=\"Messages\"><i class=\"fa fa-envelope\"></i></a></li>
  -->
  
  
  <li class=\"w3-hide-small w3-dropdown-hover\">
    <a href=\"#\" class=\"w3-padding-large w3-hover-white\" title=\"Notifications\"></i><span class=\"fa fa-globe\"> Libros</span></a>
    <div class=\"w3-dropdown-content w3-white w3-card-4\">
      <a href=\"./categoria.php?pa=1&cat=7\">Autoayuda</a>
      <a href=\"./categoria.php?pa=1&cat=5\">Economia</a>
      <a href=\"./categoria.php?pa=1&cat=6\">Politica</a>
      <a href=\"#\">Jane likes your post</a>
    </div>
  </li>
  
  <li class=\"w3-hide-small w3-dropdown-hover\">
    <a href=\"#\" class=\"w3-padding-large w3-hover-white\" title=\"Notifications\"><i class=\"fa fa-bell\"></i><span class=\"w3-badge w3-right w3-small w3-green\">3</span></a>
    <div class=\"w3-dropdown-content w3-white w3-card-4\">
      <a href=\"#\">One new friend request</a>
      <a href=\"#\">John Doe posted on your wall</a>
      <a href=\"#\">Jane likes your post</a>
    </div>
  </li>
  <li class=\"w3-hide-small w3-right\"><a href=\"#\" class=\"w3-padding-large w3-hover-white\" title=\"My Account\"><img src=\"../../paneldelibros/index.php/app_files/view/4\" class=\"w3-circle\" style=\"height:25px;width:25px\" alt=\"Avatar\"></a></li>
 </ul>
</div>
{% endblock %} ", "::navbar.html.twig", "C:\\xampp\\htdocs\\alfalibros\\app/Resources\\views/navbar.html.twig");
    }
}
