<?php

/* acordion.html.twig */
class __TwigTemplate_2dfbe5b84a9f41dac102eadfc175eb659c6a4b72ea108fe72ba68988ee5fa6f0 extends Twig_Template
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
        $__internal_09602daba2dbfaf42d62a5819581ae1765c77ead2859372be56182796b51f181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09602daba2dbfaf42d62a5819581ae1765c77ead2859372be56182796b51f181->enter($__internal_09602daba2dbfaf42d62a5819581ae1765c77ead2859372be56182796b51f181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "acordion.html.twig"));

        // line 1
        $this->displayBlock('acordion', $context, $blocks);
        
        $__internal_09602daba2dbfaf42d62a5819581ae1765c77ead2859372be56182796b51f181->leave($__internal_09602daba2dbfaf42d62a5819581ae1765c77ead2859372be56182796b51f181_prof);

    }

    public function block_acordion($context, array $blocks = array())
    {
        $__internal_8960b5448022478925e130a03878dd7899f38f7633d7dc1e9c9976a68087efac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8960b5448022478925e130a03878dd7899f38f7633d7dc1e9c9976a68087efac->enter($__internal_8960b5448022478925e130a03878dd7899f38f7633d7dc1e9c9976a68087efac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "acordion"));

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
        
        $__internal_8960b5448022478925e130a03878dd7899f38f7633d7dc1e9c9976a68087efac->leave($__internal_8960b5448022478925e130a03878dd7899f38f7633d7dc1e9c9976a68087efac_prof);

    }

    public function getTemplateName()
    {
        return "acordion.html.twig";
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
{% endblock %}", "acordion.html.twig", "C:\\xampp\\htdocs\\alfalibros\\app\\Resources\\views\\acordion.html.twig");
    }
}
