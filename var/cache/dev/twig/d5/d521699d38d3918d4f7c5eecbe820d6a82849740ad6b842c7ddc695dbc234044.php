<?php

/* principalBundle:Default:productList.html.twig */
class __TwigTemplate_bdbf81a51778ae790229ecaa69763f2ba83a17045057a0bd84db30a2ec3c728a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'productList' => array($this, 'block_productList'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_743f2ad14b168b22a9bf75e3cebebee30e9b5254fb2426b0fa0e3effa3a81dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743f2ad14b168b22a9bf75e3cebebee30e9b5254fb2426b0fa0e3effa3a81dfb->enter($__internal_743f2ad14b168b22a9bf75e3cebebee30e9b5254fb2426b0fa0e3effa3a81dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "principalBundle:Default:productList.html.twig"));

        // line 1
        $this->displayBlock('productList', $context, $blocks);
        // line 25
        echo "  ";
        
        $__internal_743f2ad14b168b22a9bf75e3cebebee30e9b5254fb2426b0fa0e3effa3a81dfb->leave($__internal_743f2ad14b168b22a9bf75e3cebebee30e9b5254fb2426b0fa0e3effa3a81dfb_prof);

    }

    // line 1
    public function block_productList($context, array $blocks = array())
    {
        $__internal_29692243355ee2562cd8e94e221450dd06d805d9837c7fa72cac06f69a4f2152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29692243355ee2562cd8e94e221450dd06d805d9837c7fa72cac06f69a4f2152->enter($__internal_29692243355ee2562cd8e94e221450dd06d805d9837c7fa72cac06f69a4f2152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "productList"));

        // line 2
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["producto1"]) ? $context["producto1"] : $this->getContext($context, "producto1")));
        foreach ($context['_seq'] as $context["_key"] => $context["p1"]) {
            // line 3
            echo "  <div  class=\"w3-padding-large2 w3-theme-d8\">  
        <form method=\"post\" action=\"#\">  
            <div class=\"w3-padding-large2 w3-theme-d8\">                           
                <!-- IMAGENES -->                           
                <a href=\"#\"><span class=\"text-info\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["p1"], "file_data", array()), "html", null, true);
            echo "</a><br />
                <!-- Titulo y Link -->
                ssss
                <a href=\"#\">
                  <span class=\"text-info\">                       
                  <!-- Titulo y Link -->                               
                       ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["p1"], "name", array()), "html", null, true);
            echo "                                            
                  </span>
                </a>                             
                <h4 class=\"text-danger\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["p1"], "unit_price", array()), "html", null, true);
            echo "</h4>  
                <input type=\"text\" name=\"quantity\" class=\"form-control\" value=\"\" />  
                <input type=\"hidden\" name=\"hidden_name\" value=\"\" />  
                <input type=\"hidden\" name=\"hidden_price\" value=\"\" />  
                <input type=\"submit\" name=\"add_to_cart\" style=\"margin-top:5px;\" class=\"btn btn-success\" value=\"Agregar\" />              
            </div>
        </form>  
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_29692243355ee2562cd8e94e221450dd06d805d9837c7fa72cac06f69a4f2152->leave($__internal_29692243355ee2562cd8e94e221450dd06d805d9837c7fa72cac06f69a4f2152_prof);

    }

    public function getTemplateName()
    {
        return "principalBundle:Default:productList.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  58 => 13,  49 => 7,  43 => 3,  38 => 2,  32 => 1,  25 => 25,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block productList %}
  {% for p1 in producto1 %}
  <div  class=\"w3-padding-large2 w3-theme-d8\">  
        <form method=\"post\" action=\"#\">  
            <div class=\"w3-padding-large2 w3-theme-d8\">                           
                <!-- IMAGENES -->                           
                <a href=\"#\"><span class=\"text-info\">{{ p1.file_data }}</a><br />
                <!-- Titulo y Link -->
                ssss
                <a href=\"#\">
                  <span class=\"text-info\">                       
                  <!-- Titulo y Link -->                               
                       {{ p1.name }}                                            
                  </span>
                </a>                             
                <h4 class=\"text-danger\">{{ p1.unit_price }}</h4>  
                <input type=\"text\" name=\"quantity\" class=\"form-control\" value=\"\" />  
                <input type=\"hidden\" name=\"hidden_name\" value=\"\" />  
                <input type=\"hidden\" name=\"hidden_price\" value=\"\" />  
                <input type=\"submit\" name=\"add_to_cart\" style=\"margin-top:5px;\" class=\"btn btn-success\" value=\"Agregar\" />              
            </div>
        </form>  
  </div>
{% endfor %}
{% endblock %}  ", "principalBundle:Default:productList.html.twig", "C:\\xampp\\htdocs\\alfalibros\\src\\principalBundle/Resources/views/Default/productList.html.twig");
    }
}
