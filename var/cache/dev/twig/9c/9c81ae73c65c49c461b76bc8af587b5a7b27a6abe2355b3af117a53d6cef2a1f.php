<?php

/* principalBundle:Default:index.html.twig */
class __TwigTemplate_c46ee07e48a16303429526ab9a914235eb8f54f908398162c7ad784713e7efbc extends Twig_Template
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
        $__internal_9ec0c56abdc132b10dabe205cb4fee9330009a1868d49c72e5054790e6a6fb5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ec0c56abdc132b10dabe205cb4fee9330009a1868d49c72e5054790e6a6fb5d->enter($__internal_9ec0c56abdc132b10dabe205cb4fee9330009a1868d49c72e5054790e6a6fb5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "principalBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ec0c56abdc132b10dabe205cb4fee9330009a1868d49c72e5054790e6a6fb5d->leave($__internal_9ec0c56abdc132b10dabe205cb4fee9330009a1868d49c72e5054790e6a6fb5d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f787cb52b1a32abdac2aa1c84667f3f68212f3058238e872c5fe734e06e85210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f787cb52b1a32abdac2aa1c84667f3f68212f3058238e872c5fe734e06e85210->enter($__internal_f787cb52b1a32abdac2aa1c84667f3f68212f3058238e872c5fe734e06e85210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_f787cb52b1a32abdac2aa1c84667f3f68212f3058238e872c5fe734e06e85210->leave($__internal_f787cb52b1a32abdac2aa1c84667f3f68212f3058238e872c5fe734e06e85210_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_b81ef58adc5d8187e008321530b0bd0dd7dcbf24cf5d0e74b0a095eac2c70524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b81ef58adc5d8187e008321530b0bd0dd7dcbf24cf5d0e74b0a095eac2c70524->enter($__internal_b81ef58adc5d8187e008321530b0bd0dd7dcbf24cf5d0e74b0a095eac2c70524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b81ef58adc5d8187e008321530b0bd0dd7dcbf24cf5d0e74b0a095eac2c70524->leave($__internal_b81ef58adc5d8187e008321530b0bd0dd7dcbf24cf5d0e74b0a095eac2c70524_prof);

    }

    // line 24
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_c2a0bb3f583717dcb88f7e288d63c0019711d626a578627693a1d5502a679ef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2a0bb3f583717dcb88f7e288d63c0019711d626a578627693a1d5502a679ef5->enter($__internal_c2a0bb3f583717dcb88f7e288d63c0019711d626a578627693a1d5502a679ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 25
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
        
        $__internal_c2a0bb3f583717dcb88f7e288d63c0019711d626a578627693a1d5502a679ef5->leave($__internal_c2a0bb3f583717dcb88f7e288d63c0019711d626a578627693a1d5502a679ef5_prof);

    }

    // line 33
    public function block_info($context, array $blocks = array())
    {
        $__internal_da7294d7c5399b472c71338d8ec32e3a7c07d54667950e456b888e4cf4803c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da7294d7c5399b472c71338d8ec32e3a7c07d54667950e456b888e4cf4803c55->enter($__internal_da7294d7c5399b472c71338d8ec32e3a7c07d54667950e456b888e4cf4803c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "info"));

        // line 34
        echo "                        ";
        $this->displayParentBlock("info", $context, $blocks);
        echo "
                    ";
        
        $__internal_da7294d7c5399b472c71338d8ec32e3a7c07d54667950e456b888e4cf4803c55->leave($__internal_da7294d7c5399b472c71338d8ec32e3a7c07d54667950e456b888e4cf4803c55_prof);

    }

    // line 37
    public function block_acordion($context, array $blocks = array())
    {
        $__internal_871d3fc763fbc420f09a4349eb7a9edf87194017072f2ff1a872479726215401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_871d3fc763fbc420f09a4349eb7a9edf87194017072f2ff1a872479726215401->enter($__internal_871d3fc763fbc420f09a4349eb7a9edf87194017072f2ff1a872479726215401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "acordion"));

        // line 38
        echo "                        ";
        $this->displayParentBlock("acordion", $context, $blocks);
        echo "
                    ";
        
        $__internal_871d3fc763fbc420f09a4349eb7a9edf87194017072f2ff1a872479726215401->leave($__internal_871d3fc763fbc420f09a4349eb7a9edf87194017072f2ff1a872479726215401_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b67903f2b40d4c09334c0f03a868edb27376c9b6cc2c7a6e8932d6b670298265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b67903f2b40d4c09334c0f03a868edb27376c9b6cc2c7a6e8932d6b670298265->enter($__internal_b67903f2b40d4c09334c0f03a868edb27376c9b6cc2c7a6e8932d6b670298265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b67903f2b40d4c09334c0f03a868edb27376c9b6cc2c7a6e8932d6b670298265->leave($__internal_b67903f2b40d4c09334c0f03a868edb27376c9b6cc2c7a6e8932d6b670298265_prof);

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
        return array (  265 => 80,  259 => 79,  249 => 38,  243 => 37,  233 => 34,  227 => 33,  217 => 25,  211 => 24,  192 => 65,  177 => 57,  171 => 54,  159 => 49,  153 => 45,  149 => 44,  143 => 40,  141 => 37,  138 => 36,  136 => 33,  128 => 27,  125 => 24,  116 => 21,  112 => 19,  107 => 18,  101 => 17,  84 => 7,  78 => 6,  63 => 1,  35 => 5,  28 => 4,  21 => 3,  14 => 2,  11 => 1,);
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
            </div>
            <!-- creacion del div de contenido de producto-->
            <div class =\"col-xs-6 col-md-4\">
                

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
    
{% endblock %}", "principalBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\alfalibros\\src\\principalBundle/Resources/views/Default/index.html.twig");
    }
}
