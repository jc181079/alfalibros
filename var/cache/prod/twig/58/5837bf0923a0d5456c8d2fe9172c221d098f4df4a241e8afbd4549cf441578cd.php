<?php

/* principalBundle:Default:index.html.twig */
class __TwigTemplate_19754e715ad8590bd96842d4c4649dd9ab6df87bdd5ffe11f405091b769a8497 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "principalBundle:Default:index.html.twig", 1);
        $_trait_0 = $this->loadTemplate("::navbarAdvance.html.twig", "principalBundle:Default:index.html.twig", 2);
        // line 2
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."::navbarAdvance.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->loadTemplate("::info.html.twig", "principalBundle:Default:index.html.twig", 3);
        // line 3
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."::info.html.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $_trait_2 = $this->loadTemplate("::acordion.html.twig", "principalBundle:Default:index.html.twig", 4);
        // line 4
        if (!$_trait_2->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."::acordion.html.twig".'" cannot be used as a trait.');
        }
        $_trait_2_blocks = $_trait_2->getBlocks();

        $_trait_3 = $this->loadTemplate("principalBundle:Default:productList.html.twig", "principalBundle:Default:index.html.twig", 5);
        // line 5
        if (!$_trait_3->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."principalBundle:Default:productList.html.twig".'" cannot be used as a trait.');
        }
        $_trait_3_blocks = $_trait_3->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks,
            $_trait_3_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
                'stylesheets' => array($this, 'block_stylesheets'),
                'body' => array($this, 'block_body'),
                'navbar' => array($this, 'block_navbar'),
                'info' => array($this, 'block_info'),
                'acordion' => array($this, 'block_acordion'),
                'javascripts' => array($this, 'block_javascripts'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<style>
\t\tbody,h1,h2,h3,h4,h5 {
\t\t\tfont-family: \"Open Sans\", sans-serif;
\t\t\t
\t\t\tmargin-top: 45px;
\t\t} 
\t</style>
";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "Mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 19
            echo "            <div class=\"alert alert-danger\" role=\"alert\">
                <span class=\"glyphicon glyphicon-warning-sign\" ></span> 
                ";
            // line 21
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "...
            </div>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t";
        $this->displayBlock('navbar', $context, $blocks);
        // line 27
        echo "    <br>
    <div class=\"container-fluid\"> \t
        <!-- creacion de la estructura de triple div -->
        <div class =\"row\">
                <!-- creacion del div de informacion-->
                <div class =\"col-md-8 \">
                    ";
        // line 33
        $this->displayBlock('info', $context, $blocks);
        // line 36
        echo "                    <br>
                    ";
        // line 37
        $this->displayBlock('acordion', $context, $blocks);
        // line 40
        echo "                    a
                </div>
            <!-- creacion del div de contenido de producto-->
            <div class =\"col-md-4\">
                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["producto1"]) ? $context["producto1"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p1"]) {
            // line 45
            echo "                  <div  class=\"w3-padding-large2 w3-theme-d8\">  
                        <form method=\"post\" action=\"#\">  
                            <div class=\"w3-padding-large2 w3-theme-d8\">                           
                                <!-- IMAGENES -->                           
                                <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["p1"], "fileData", array()), "html", null, true);
            echo "\"\"><span class=\"text-info\"><img src=\"data:image/png;base64,";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p1"], "fileData", array()), "html", null, true);
            echo "\"></a><br />";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p1"], "fileData", array()), "html", null, true);
            echo "
                                <!-- Titulo y Link -->                                
                                <a href=\"#\">
                                  <span class=\"text-info\">                       
                                  <!-- Titulo y Link -->                               
                                       //";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["p1"], "name", array()), "html", null, true);
            echo "                                            
                                  </span>
                                </a>                             
                                <h4 class=\"text-danger\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["p1"], "unitPrice", array()), "html", null, true);
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
        // line 65
        echo "                
            </div>
            <!-- creacion del div de contenido de producto-->
            <div class =\"col-xs-6 col-md-4\">
                

            </div>
        </div>
        <!-- fin creacion de la estructura de triple div -->
    </div>
    
    
";
    }

    // line 24
    public function block_navbar($context, array $blocks = array())
    {
        // line 25
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
    }

    // line 33
    public function block_info($context, array $blocks = array())
    {
        // line 34
        echo "                        ";
        $this->displayParentBlock("info", $context, $blocks);
        echo "
                    ";
    }

    // line 37
    public function block_acordion($context, array $blocks = array())
    {
        // line 38
        echo "                        ";
        $this->displayParentBlock("acordion", $context, $blocks);
        echo "
                    ";
    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        // line 80
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            
           \$(document).delegate('*[data-toggle=\"lightbox\"]', 'click', function(event) {
                event.preventDefault();
                \$(this).ekkoLightbox();
            }); 
        });
          
    </script>
    
";
    }

    public function getTemplateName()
    {
        return "principalBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 80,  223 => 79,  216 => 38,  213 => 37,  206 => 34,  203 => 33,  196 => 25,  193 => 24,  177 => 65,  162 => 57,  156 => 54,  144 => 49,  138 => 45,  134 => 44,  128 => 40,  126 => 37,  123 => 36,  121 => 33,  113 => 27,  110 => 24,  101 => 21,  97 => 19,  92 => 18,  89 => 17,  75 => 7,  72 => 6,  63 => 1,  35 => 5,  28 => 4,  21 => 3,  14 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "principalBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\alfalibros\\src\\principalBundle/Resources/views/Default/index.html.twig");
    }
}
