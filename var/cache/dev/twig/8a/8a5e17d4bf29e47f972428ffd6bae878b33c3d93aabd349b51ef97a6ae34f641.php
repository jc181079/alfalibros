<?php

/* ::navbar.html.twig */
class __TwigTemplate_387ce72cb97fcc9dfc9ed2a03890bae651ca8ca1ae4fb82f25db4062d81d40a1 extends Twig_Template
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
        $__internal_017c9de0059192d6c5c55005b62348b4553505a8ab09e850c5433de8716c03f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_017c9de0059192d6c5c55005b62348b4553505a8ab09e850c5433de8716c03f8->enter($__internal_017c9de0059192d6c5c55005b62348b4553505a8ab09e850c5433de8716c03f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::navbar.html.twig"));

        // line 1
        $this->displayBlock('navbar', $context, $blocks);
        // line 37
        echo " ";
        
        $__internal_017c9de0059192d6c5c55005b62348b4553505a8ab09e850c5433de8716c03f8->leave($__internal_017c9de0059192d6c5c55005b62348b4553505a8ab09e850c5433de8716c03f8_prof);

    }

    // line 1
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_56d7ad623455c3b9b137cd69ca444132e93835aaa266e78ad1b56283dc7d8fd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56d7ad623455c3b9b137cd69ca444132e93835aaa266e78ad1b56283dc7d8fd4->enter($__internal_56d7ad623455c3b9b137cd69ca444132e93835aaa266e78ad1b56283dc7d8fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

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
        
        $__internal_56d7ad623455c3b9b137cd69ca444132e93835aaa266e78ad1b56283dc7d8fd4->leave($__internal_56d7ad623455c3b9b137cd69ca444132e93835aaa266e78ad1b56283dc7d8fd4_prof);

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
