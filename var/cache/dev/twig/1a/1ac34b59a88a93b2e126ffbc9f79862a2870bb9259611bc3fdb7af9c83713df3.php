<?php

/* @principal/Default/index.html.twig */
class __TwigTemplate_b21957774876050dd1a8bfec59a6cd81b932b0d1caa73611f6397cb955f13dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@principal/Default/index.html.twig", 1);
        $_trait_0 = $this->loadTemplate("::navbarAdvance.html.twig", "@principal/Default/index.html.twig", 2);
        // line 2
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."::navbarAdvance.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->loadTemplate("::info.html.twig", "@principal/Default/index.html.twig", 3);
        // line 3
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."::info.html.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $_trait_2 = $this->loadTemplate("::acordion.html.twig", "@principal/Default/index.html.twig", 4);
        // line 4
        if (!$_trait_2->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."::acordion.html.twig".'" cannot be used as a trait.');
        }
        $_trait_2_blocks = $_trait_2->getBlocks();

        $_trait_3 = $this->loadTemplate("principalBundle:Default:productList.html.twig", "@principal/Default/index.html.twig", 5);
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
        $__internal_7485319468af9c3b80448c77a5155a9cf04aa3b1c9905fc851f82363a1abe4d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7485319468af9c3b80448c77a5155a9cf04aa3b1c9905fc851f82363a1abe4d6->enter($__internal_7485319468af9c3b80448c77a5155a9cf04aa3b1c9905fc851f82363a1abe4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@principal/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7485319468af9c3b80448c77a5155a9cf04aa3b1c9905fc851f82363a1abe4d6->leave($__internal_7485319468af9c3b80448c77a5155a9cf04aa3b1c9905fc851f82363a1abe4d6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_210b27787bf24b39df09c37f8f6265818a77f4e3c562085411796a05e48d07bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_210b27787bf24b39df09c37f8f6265818a77f4e3c562085411796a05e48d07bf->enter($__internal_210b27787bf24b39df09c37f8f6265818a77f4e3c562085411796a05e48d07bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_210b27787bf24b39df09c37f8f6265818a77f4e3c562085411796a05e48d07bf->leave($__internal_210b27787bf24b39df09c37f8f6265818a77f4e3c562085411796a05e48d07bf_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_b40114365eddf86b0f1cb6c03361229c2f3efe8162ceae00eba5809327344db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40114365eddf86b0f1cb6c03361229c2f3efe8162ceae00eba5809327344db8->enter($__internal_b40114365eddf86b0f1cb6c03361229c2f3efe8162ceae00eba5809327344db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "Mensaje"), "method"));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["producto1"]) ? $context["producto1"] : $this->getContext($context, "producto1")));
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
        // line 66
        echo "                <ul class=\"pagination\">
                    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["totalRegPorPagina"]) ? $context["totalRegPorPagina"] : $this->getContext($context, "totalRegPorPagina"))));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 68
            echo "                        ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 69
                echo "                            <li>
                                <a href=\"#\"><</a>
                            </li>
                        ";
            }
            // line 73
            echo "                        <li>
                            <a href=\"#\">";
            // line 74
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a>
                        </li>
                         ";
            // line 76
            if ($this->getAttribute($context["loop"], "last", array())) {
                // line 77
                echo "                            <li>
                                <a href=\"#\">></a>
                            </li>
                        ";
            }
            // line 81
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                </ul>                
            </div>
            <!-- creacion del div de contenido de producto-->
            <div class =\"col-xs-6 col-md-4\">                
                Cantidad de registros ";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["trItem"]) ? $context["trItem"] : $this->getContext($context, "trItem")), "html", null, true);
        echo "
            </div>
        </div>
        <!-- fin creacion de la estructura de triple div -->
    </div>
    
    
";
        
        $__internal_b40114365eddf86b0f1cb6c03361229c2f3efe8162ceae00eba5809327344db8->leave($__internal_b40114365eddf86b0f1cb6c03361229c2f3efe8162ceae00eba5809327344db8_prof);

    }

    // line 24
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_b665e33af9bce41c9e571a75ed2aacd46f31f1698b27977d91b90225bbcfef7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b665e33af9bce41c9e571a75ed2aacd46f31f1698b27977d91b90225bbcfef7b->enter($__internal_b665e33af9bce41c9e571a75ed2aacd46f31f1698b27977d91b90225bbcfef7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 25
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
        
        $__internal_b665e33af9bce41c9e571a75ed2aacd46f31f1698b27977d91b90225bbcfef7b->leave($__internal_b665e33af9bce41c9e571a75ed2aacd46f31f1698b27977d91b90225bbcfef7b_prof);

    }

    // line 33
    public function block_info($context, array $blocks = array())
    {
        $__internal_f990831eeab8da80e5e02bee2420da718bf417c6a2f08bad5c5d954944ee2333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f990831eeab8da80e5e02bee2420da718bf417c6a2f08bad5c5d954944ee2333->enter($__internal_f990831eeab8da80e5e02bee2420da718bf417c6a2f08bad5c5d954944ee2333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "info"));

        // line 34
        echo "                        ";
        $this->displayParentBlock("info", $context, $blocks);
        echo "
                    ";
        
        $__internal_f990831eeab8da80e5e02bee2420da718bf417c6a2f08bad5c5d954944ee2333->leave($__internal_f990831eeab8da80e5e02bee2420da718bf417c6a2f08bad5c5d954944ee2333_prof);

    }

    // line 37
    public function block_acordion($context, array $blocks = array())
    {
        $__internal_305c3ee79cbb9ceceb8a2f60f5dfb93549f273ec614dfa684c6d3291134289c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_305c3ee79cbb9ceceb8a2f60f5dfb93549f273ec614dfa684c6d3291134289c0->enter($__internal_305c3ee79cbb9ceceb8a2f60f5dfb93549f273ec614dfa684c6d3291134289c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "acordion"));

        // line 38
        echo "                        ";
        $this->displayParentBlock("acordion", $context, $blocks);
        echo "
                    ";
        
        $__internal_305c3ee79cbb9ceceb8a2f60f5dfb93549f273ec614dfa684c6d3291134289c0->leave($__internal_305c3ee79cbb9ceceb8a2f60f5dfb93549f273ec614dfa684c6d3291134289c0_prof);

    }

    // line 95
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9478972ca5227a1249bed7222d9fb0e3756e960788e8e3b1d0efc6bef1df9e32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9478972ca5227a1249bed7222d9fb0e3756e960788e8e3b1d0efc6bef1df9e32->enter($__internal_9478972ca5227a1249bed7222d9fb0e3756e960788e8e3b1d0efc6bef1df9e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 96
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
        
        $__internal_9478972ca5227a1249bed7222d9fb0e3756e960788e8e3b1d0efc6bef1df9e32->leave($__internal_9478972ca5227a1249bed7222d9fb0e3756e960788e8e3b1d0efc6bef1df9e32_prof);

    }

    public function getTemplateName()
    {
        return "@principal/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 96,  320 => 95,  310 => 38,  304 => 37,  294 => 34,  288 => 33,  278 => 25,  272 => 24,  257 => 86,  251 => 82,  237 => 81,  231 => 77,  229 => 76,  224 => 74,  221 => 73,  215 => 69,  212 => 68,  195 => 67,  192 => 66,  177 => 57,  171 => 54,  159 => 49,  153 => 45,  149 => 44,  143 => 40,  141 => 37,  138 => 36,  136 => 33,  128 => 27,  125 => 24,  116 => 21,  112 => 19,  107 => 18,  101 => 17,  84 => 7,  78 => 6,  63 => 1,  35 => 5,  28 => 4,  21 => 3,  14 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% use \"::navbarAdvance.html.twig\" %}
{% use \"::info.html.twig\" %}
{% use \"::acordion.html.twig\" %}
{% use \"principalBundle:Default:productList.html.twig\" %}
{% block stylesheets %}
\t{{ parent() }}
\t<style>
\t\tbody,h1,h2,h3,h4,h5 {
\t\t\tfont-family: \"Open Sans\", sans-serif;
\t\t\t
\t\t\tmargin-top: 45px;
\t\t} 
\t</style>
{% endblock %}

{% block body %}
\t{% for flashMessage in app.session.flashbag.get('Mensaje') %}
            <div class=\"alert alert-danger\" role=\"alert\">
                <span class=\"glyphicon glyphicon-warning-sign\" ></span> 
                {{flashMessage}}...
            </div>
     {% endfor%}
\t{% block navbar %}
        {{ parent() }}
    {% endblock %}
    <br>
    <div class=\"container-fluid\"> \t
        <!-- creacion de la estructura de triple div -->
        <div class =\"row\">
                <!-- creacion del div de informacion-->
                <div class =\"col-md-8 \">
                    {% block info %}
                        {{ parent() }}
                    {% endblock %}
                    <br>
                    {% block acordion %}
                        {{ parent() }}
                    {% endblock %}
                    a
                </div>
            <!-- creacion del div de contenido de producto-->
            <div class =\"col-md-4\">
                {% for p1 in producto1 %}
                  <div  class=\"w3-padding-large2 w3-theme-d8\">  
                        <form method=\"post\" action=\"#\">  
                            <div class=\"w3-padding-large2 w3-theme-d8\">                           
                                <!-- IMAGENES -->                           
                                <a href=\"{{ p1.fileData }}\"\"><span class=\"text-info\"><img src=\"data:image/png;base64,{{ p1.fileData }}\"></a><br />{{ p1.fileData }}
                                <!-- Titulo y Link -->                                
                                <a href=\"#\">
                                  <span class=\"text-info\">                       
                                  <!-- Titulo y Link -->                               
                                       //{{ p1.name }}                                            
                                  </span>
                                </a>                             
                                <h4 class=\"text-danger\">{{ p1.unitPrice }}</h4>  
                                <input type=\"text\" name=\"quantity\" class=\"form-control\" value=\"\" />  
                                <input type=\"hidden\" name=\"hidden_name\" value=\"\" />  
                                <input type=\"hidden\" name=\"hidden_price\" value=\"\" />  
                                <input type=\"submit\" name=\"add_to_cart\" style=\"margin-top:5px;\" class=\"btn btn-success\" value=\"Agregar\" />              
                            </div>
                        </form>  
                  </div>
                {% endfor %}
                <ul class=\"pagination\">
                    {%  for i in 1.. totalRegPorPagina %}
                        {%  if loop.first %}
                            <li>
                                <a href=\"#\"><</a>
                            </li>
                        {% endif %}
                        <li>
                            <a href=\"#\">{{i}}</a>
                        </li>
                         {%  if loop.last %}
                            <li>
                                <a href=\"#\">></a>
                            </li>
                        {% endif %}
                    {%  endfor %}
                </ul>                
            </div>
            <!-- creacion del div de contenido de producto-->
            <div class =\"col-xs-6 col-md-4\">                
                Cantidad de registros {{ trItem }}
            </div>
        </div>
        <!-- fin creacion de la estructura de triple div -->
    </div>
    
    
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            
           \$(document).delegate('*[data-toggle=\"lightbox\"]', 'click', function(event) {
                event.preventDefault();
                \$(this).ekkoLightbox();
            }); 
        });
          
    </script>
    
{% endblock %}", "@principal/Default/index.html.twig", "C:\\xampp\\htdocs\\alfalibros\\src\\principalBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
