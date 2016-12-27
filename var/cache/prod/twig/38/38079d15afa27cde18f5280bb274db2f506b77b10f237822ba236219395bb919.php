<?php

/* ::acordion.html.twig */
class __TwigTemplate_569941365d78298a580abcbfb9dd01db5f445000c342349b190b3f78f45524d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'acordion' => array($this, 'block_acordion'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e143d43731c45ebbc785de93dcf3db522601bae0d193ecc5d2bec739b493ace7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e143d43731c45ebbc785de93dcf3db522601bae0d193ecc5d2bec739b493ace7->enter($__internal_e143d43731c45ebbc785de93dcf3db522601bae0d193ecc5d2bec739b493ace7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::acordion.html.twig"));

        // line 1
        $this->displayBlock('acordion', $context, $blocks);
        
        $__internal_e143d43731c45ebbc785de93dcf3db522601bae0d193ecc5d2bec739b493ace7->leave($__internal_e143d43731c45ebbc785de93dcf3db522601bae0d193ecc5d2bec739b493ace7_prof);

    }

    public function block_acordion($context, array $blocks = array())
    {
        $__internal_9b10090e9eef436d774949b17712c0fcc1e0279efb09892fc85eccbf99be8ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b10090e9eef436d774949b17712c0fcc1e0279efb09892fc85eccbf99be8ba8->enter($__internal_9b10090e9eef436d774949b17712c0fcc1e0279efb09892fc85eccbf99be8ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "acordion"));

        // line 2
        echo "  <div class=\"row\">
  <div class=\"col-md-3\">
    <div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
          <h4 class=\"panel-title\">
            <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne1\" aria-expanded=\"false\" aria-controls=\"collapseOne\">
              <span class=\"glyphicon glyphicon-user\"> Mis grupos
            </a>
          </h4>
        </div>
        <div id=\"collapseOne1\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
          <div class=\"panel-body\">
            Grupos
          </div>
        </div>
      </div>
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">
          <h4 class=\"panel-title\">
            <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
             <span class=\"glyphicon glyphicon-calendar\"> Mis eventos
            </a>
          </h4>
        </div>
        <div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
          <div class=\"panel-body\">
            Eventos
          </div>
        </div>
      </div>
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\" role=\"tab\" id=\"headingThree\">
          <h4 class=\"panel-title\">
            <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
              <span class=\"glyphicon glyphicon-film\"> Mis fotos
            </a>
          </h4>
        </div>
        <div id=\"collapseThree\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree\">
          <div class=\"panel-body\">
            Fotos
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
";
        
        $__internal_9b10090e9eef436d774949b17712c0fcc1e0279efb09892fc85eccbf99be8ba8->leave($__internal_9b10090e9eef436d774949b17712c0fcc1e0279efb09892fc85eccbf99be8ba8_prof);

    }

    public function getTemplateName()
    {
        return "::acordion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block acordion %}
  <div class=\"row\">
  <div class=\"col-md-3\">
    <div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
          <h4 class=\"panel-title\">
            <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne1\" aria-expanded=\"false\" aria-controls=\"collapseOne\">
              <span class=\"glyphicon glyphicon-user\"> Mis grupos
            </a>
          </h4>
        </div>
        <div id=\"collapseOne1\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
          <div class=\"panel-body\">
            Grupos
          </div>
        </div>
      </div>
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">
          <h4 class=\"panel-title\">
            <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
             <span class=\"glyphicon glyphicon-calendar\"> Mis eventos
            </a>
          </h4>
        </div>
        <div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
          <div class=\"panel-body\">
            Eventos
          </div>
        </div>
      </div>
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\" role=\"tab\" id=\"headingThree\">
          <h4 class=\"panel-title\">
            <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
              <span class=\"glyphicon glyphicon-film\"> Mis fotos
            </a>
          </h4>
        </div>
        <div id=\"collapseThree\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree\">
          <div class=\"panel-body\">
            Fotos
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
{% endblock %}", "::acordion.html.twig", "C:\\xampp\\htdocs\\alfalibros\\app/Resources\\views/acordion.html.twig");
    }
}
