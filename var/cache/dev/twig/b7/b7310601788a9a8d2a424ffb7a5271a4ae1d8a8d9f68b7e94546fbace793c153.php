<?php

/* navbar.html.twig */
class __TwigTemplate_545963bf22f53fdf0316e79bc242540606c4752899cba60fc70df24efb86f80e extends Twig_Template
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
        $__internal_ed9b6db5bf13e4feb9389556973b904c4067d285ab80f46c48c0c2a686335603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed9b6db5bf13e4feb9389556973b904c4067d285ab80f46c48c0c2a686335603->enter($__internal_ed9b6db5bf13e4feb9389556973b904c4067d285ab80f46c48c0c2a686335603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        $this->displayBlock('navbar', $context, $blocks);
        // line 37
        echo " ";
        
        $__internal_ed9b6db5bf13e4feb9389556973b904c4067d285ab80f46c48c0c2a686335603->leave($__internal_ed9b6db5bf13e4feb9389556973b904c4067d285ab80f46c48c0c2a686335603_prof);

    }

    // line 1
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_009e1617267ac015c6aef8cd71d06c9a26ff8494c79d4b4d71cbce9b70776e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_009e1617267ac015c6aef8cd71d06c9a26ff8494c79d4b4d71cbce9b70776e2a->enter($__internal_009e1617267ac015c6aef8cd71d06c9a26ff8494c79d4b4d71cbce9b70776e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

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
        
        $__internal_009e1617267ac015c6aef8cd71d06c9a26ff8494c79d4b4d71cbce9b70776e2a->leave($__internal_009e1617267ac015c6aef8cd71d06c9a26ff8494c79d4b4d71cbce9b70776e2a_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
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
{% endblock %} ", "navbar.html.twig", "C:\\xampp\\htdocs\\alfalibros\\app\\Resources\\views\\navbar.html.twig");
    }
}
