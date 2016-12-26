<?php

/* ::acordion.html.twig */
class __TwigTemplate_11ff19a8b266af0b76de15a52fc5aa2ea3fed5c5aad1940300c2db69d43384b5 extends Twig_Template
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
        $__internal_c447d533b4e8a6cfb1445e42cc7cc15ffdb4d4e7c86a7a7247eabfb37c3fe2df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c447d533b4e8a6cfb1445e42cc7cc15ffdb4d4e7c86a7a7247eabfb37c3fe2df->enter($__internal_c447d533b4e8a6cfb1445e42cc7cc15ffdb4d4e7c86a7a7247eabfb37c3fe2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::acordion.html.twig"));

        // line 1
        $this->displayBlock('acordion', $context, $blocks);
        
        $__internal_c447d533b4e8a6cfb1445e42cc7cc15ffdb4d4e7c86a7a7247eabfb37c3fe2df->leave($__internal_c447d533b4e8a6cfb1445e42cc7cc15ffdb4d4e7c86a7a7247eabfb37c3fe2df_prof);

    }

    public function block_acordion($context, array $blocks = array())
    {
        $__internal_a87ed461a2e241cb3eaf33861975abb18b1481ed5604d605c57991fff7874caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a87ed461a2e241cb3eaf33861975abb18b1481ed5604d605c57991fff7874caa->enter($__internal_a87ed461a2e241cb3eaf33861975abb18b1481ed5604d605c57991fff7874caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "acordion"));

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
        
        $__internal_a87ed461a2e241cb3eaf33861975abb18b1481ed5604d605c57991fff7874caa->leave($__internal_a87ed461a2e241cb3eaf33861975abb18b1481ed5604d605c57991fff7874caa_prof);

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
