<?php

/* principalBundle:Default:index.html.twig */
class __TwigTemplate_8176101784dd7b99715f6b718e853ef065db123f8ab96d9aae57c39d97633043 extends Twig_Template
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
        $__internal_40a897847058c0d836271cfc3c1defa7fe2b54179c4ec358ebbaa5d3a31ac964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40a897847058c0d836271cfc3c1defa7fe2b54179c4ec358ebbaa5d3a31ac964->enter($__internal_40a897847058c0d836271cfc3c1defa7fe2b54179c4ec358ebbaa5d3a31ac964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "principalBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40a897847058c0d836271cfc3c1defa7fe2b54179c4ec358ebbaa5d3a31ac964->leave($__internal_40a897847058c0d836271cfc3c1defa7fe2b54179c4ec358ebbaa5d3a31ac964_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e60cf2171827fd4c3f8318473c5f9fd2ae403c61684ccb2bcb17088ea974dca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e60cf2171827fd4c3f8318473c5f9fd2ae403c61684ccb2bcb17088ea974dca8->enter($__internal_e60cf2171827fd4c3f8318473c5f9fd2ae403c61684ccb2bcb17088ea974dca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e60cf2171827fd4c3f8318473c5f9fd2ae403c61684ccb2bcb17088ea974dca8->leave($__internal_e60cf2171827fd4c3f8318473c5f9fd2ae403c61684ccb2bcb17088ea974dca8_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_94d633a8e72bf8ab04f4ef3b522c2bc24a4863349888f71e3c5b8995f6cdf971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d633a8e72bf8ab04f4ef3b522c2bc24a4863349888f71e3c5b8995f6cdf971->enter($__internal_94d633a8e72bf8ab04f4ef3b522c2bc24a4863349888f71e3c5b8995f6cdf971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
                <!-- creacion del div de informacion-->
                <div class =\"col-md-4 \">
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
            echo "                  <div  class=\"w3-padding-large2 w3-theme-d4\">  
                        <form method=\"post\" action=\"#\">  
                            <div class=\"w3-padding-large2 w3-theme-d4\">                           
                                <!-- IMAGENES -->                           
                                <a href=\"#\"><span class=\"text-info\">
                                    <img src=\"#\">
                                </a>
                                <br />
                                <!-- Titulo y Link -->                                
                                <a href=\"#\">
                                  <span class=\"text-info\">                       
                                  <!-- Titulo y Link -->                               
                                       ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["p1"], "name", array()), "html", null, true);
            echo "                                            
                                  </span>
                                </a>                             
                                <h4 class=\"text-danger\">Bs. ";
            // line 60
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["p1"], "unitPrice", array()), 2, ".", ","), "html", null, true);
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
        // line 69
        echo "                <ul class=\"pagination\">
                    ";
        // line 70
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
            // line 71
            echo "                        ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 72
                echo "                            <li>
                                <a href=\"";
                // line 73
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inicio", array("pagina" => 1));
                echo "\"><</a>
                            </li>
                        ";
            }
            // line 76
            echo "                        <li>
                            <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inicio", array("pagina" => $context["i"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a>
                        </li>
                         ";
            // line 79
            if ($this->getAttribute($context["loop"], "last", array())) {
                // line 80
                echo "                            <li>
                                <a href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inicio", array("pagina" => (isset($context["totalRegPorPagina"]) ? $context["totalRegPorPagina"] : $this->getContext($context, "totalRegPorPagina")))), "html", null, true);
                echo "\">></a>
                            </li>
                        ";
            }
            // line 84
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
        // line 85
        echo "                </ul>                
            </div>
            <!-- creacion del div de contenido de producto-->
            <div class =\"col-xs-6 col-md-4\">                
                Cantidad de registros ";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["trItem"]) ? $context["trItem"] : $this->getContext($context, "trItem")), "html", null, true);
        echo "
            </div>
        
        <!-- fin creacion de la estructura de triple div -->
    </div>
    
    
";
        
        $__internal_94d633a8e72bf8ab04f4ef3b522c2bc24a4863349888f71e3c5b8995f6cdf971->leave($__internal_94d633a8e72bf8ab04f4ef3b522c2bc24a4863349888f71e3c5b8995f6cdf971_prof);

    }

    // line 24
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_125b35e9cc2652eb95acac9bc4a37b374a052718011943467a0e9a6edac6ddc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_125b35e9cc2652eb95acac9bc4a37b374a052718011943467a0e9a6edac6ddc6->enter($__internal_125b35e9cc2652eb95acac9bc4a37b374a052718011943467a0e9a6edac6ddc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 25
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
        
        $__internal_125b35e9cc2652eb95acac9bc4a37b374a052718011943467a0e9a6edac6ddc6->leave($__internal_125b35e9cc2652eb95acac9bc4a37b374a052718011943467a0e9a6edac6ddc6_prof);

    }

    // line 33
    public function block_info($context, array $blocks = array())
    {
        $__internal_28b25b89fe5bee256f8c936825e07de5f1c6be4be32e8856649643f21d56234e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28b25b89fe5bee256f8c936825e07de5f1c6be4be32e8856649643f21d56234e->enter($__internal_28b25b89fe5bee256f8c936825e07de5f1c6be4be32e8856649643f21d56234e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "info"));

        // line 34
        echo "                        ";
        $this->displayParentBlock("info", $context, $blocks);
        echo "
                    ";
        
        $__internal_28b25b89fe5bee256f8c936825e07de5f1c6be4be32e8856649643f21d56234e->leave($__internal_28b25b89fe5bee256f8c936825e07de5f1c6be4be32e8856649643f21d56234e_prof);

    }

    // line 37
    public function block_acordion($context, array $blocks = array())
    {
        $__internal_9ffe4ed99c9d44932432a572f6131a61b05027ece8d5aa614ac37acebe4a7ae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ffe4ed99c9d44932432a572f6131a61b05027ece8d5aa614ac37acebe4a7ae8->enter($__internal_9ffe4ed99c9d44932432a572f6131a61b05027ece8d5aa614ac37acebe4a7ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "acordion"));

        // line 38
        echo "                        ";
        $this->displayParentBlock("acordion", $context, $blocks);
        echo "
                    ";
        
        $__internal_9ffe4ed99c9d44932432a572f6131a61b05027ece8d5aa614ac37acebe4a7ae8->leave($__internal_9ffe4ed99c9d44932432a572f6131a61b05027ece8d5aa614ac37acebe4a7ae8_prof);

    }

    // line 98
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_05702c69d81c54ea71c4c5c79b99ab53125a74143e19777567650184f6a03c46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05702c69d81c54ea71c4c5c79b99ab53125a74143e19777567650184f6a03c46->enter($__internal_05702c69d81c54ea71c4c5c79b99ab53125a74143e19777567650184f6a03c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 99
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
        
        $__internal_05702c69d81c54ea71c4c5c79b99ab53125a74143e19777567650184f6a03c46->leave($__internal_05702c69d81c54ea71c4c5c79b99ab53125a74143e19777567650184f6a03c46_prof);

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
        return array (  330 => 99,  324 => 98,  314 => 38,  308 => 37,  298 => 34,  292 => 33,  282 => 25,  276 => 24,  261 => 89,  255 => 85,  241 => 84,  235 => 81,  232 => 80,  230 => 79,  223 => 77,  220 => 76,  214 => 73,  211 => 72,  208 => 71,  191 => 70,  188 => 69,  173 => 60,  167 => 57,  153 => 45,  149 => 44,  143 => 40,  141 => 37,  138 => 36,  136 => 33,  128 => 27,  125 => 24,  116 => 21,  112 => 19,  107 => 18,  101 => 17,  84 => 7,  78 => 6,  63 => 1,  35 => 5,  28 => 4,  21 => 3,  14 => 2,  11 => 1,);
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
        
                <!-- creacion del div de informacion-->
                <div class =\"col-md-4 \">
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
                  <div  class=\"w3-padding-large2 w3-theme-d4\">  
                        <form method=\"post\" action=\"#\">  
                            <div class=\"w3-padding-large2 w3-theme-d4\">                           
                                <!-- IMAGENES -->                           
                                <a href=\"#\"><span class=\"text-info\">
                                    <img src=\"#\">
                                </a>
                                <br />
                                <!-- Titulo y Link -->                                
                                <a href=\"#\">
                                  <span class=\"text-info\">                       
                                  <!-- Titulo y Link -->                               
                                       {{ p1.name }}                                            
                                  </span>
                                </a>                             
                                <h4 class=\"text-danger\">Bs. {{ p1.unitPrice|number_format(2, '.', ',') }}</h4>  
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
                                <a href=\"{{ path('inicio',{'pagina': 1 }) }}\"><</a>
                            </li>
                        {% endif %}
                        <li>
                            <a href=\"{{ path('inicio',{'pagina': i }) }}\">{{i}}</a>
                        </li>
                         {%  if loop.last %}
                            <li>
                                <a href=\"{{ path('inicio',{'pagina': totalRegPorPagina }) }}\">></a>
                            </li>
                        {% endif %}
                    {%  endfor %}
                </ul>                
            </div>
            <!-- creacion del div de contenido de producto-->
            <div class =\"col-xs-6 col-md-4\">                
                Cantidad de registros {{ trItem }}
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
    
{% endblock %}", "principalBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\alfalibros\\src\\principalBundle/Resources/views/Default/index.html.twig");
    }
}
