<?php

/* principalBundle:Default:productList.html.twig */
class __TwigTemplate_3d6c6972bb57944beee15030073ea615f69e3eeb5dd082e1c51923355d442764 extends Twig_Template
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
        // line 1
        $this->displayBlock('productList', $context, $blocks);
        // line 25
        echo "  ";
    }

    // line 1
    public function block_productList($context, array $blocks = array())
    {
        // line 2
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["producto1"]) ? $context["producto1"] : null));
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
    }

    public function getTemplateName()
    {
        return "principalBundle:Default:productList.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 16,  49 => 13,  40 => 7,  34 => 3,  29 => 2,  26 => 1,  22 => 25,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "principalBundle:Default:productList.html.twig", "C:\\xampp\\htdocs\\alfalibros\\src\\principalBundle/Resources/views/Default/productList.html.twig");
    }
}
