<?php

/* ::navbarAdvance.html.twig */
class __TwigTemplate_b7587a281687a839862aa12c1d2ac1efd9b3ceb111fe855ade5067ee4e2068be extends Twig_Template
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
        $__internal_cb3455e47f27b3654cb3e912fd5bda05599ef7c209f8dd61cd55ccd83a6fd38f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb3455e47f27b3654cb3e912fd5bda05599ef7c209f8dd61cd55ccd83a6fd38f->enter($__internal_cb3455e47f27b3654cb3e912fd5bda05599ef7c209f8dd61cd55ccd83a6fd38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::navbarAdvance.html.twig"));

        // line 2
        $this->displayBlock('navbar', $context, $blocks);
        // line 73
        echo "    ";
        
        $__internal_cb3455e47f27b3654cb3e912fd5bda05599ef7c209f8dd61cd55ccd83a6fd38f->leave($__internal_cb3455e47f27b3654cb3e912fd5bda05599ef7c209f8dd61cd55ccd83a6fd38f_prof);

    }

    // line 2
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_db0f5f54f05d2c85641606fe8565c8b749ff12f305e30cea9d4a714879d83d82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db0f5f54f05d2c85641606fe8565c8b749ff12f305e30cea9d4a714879d83d82->enter($__internal_db0f5f54f05d2c85641606fe8565c8b749ff12f305e30cea9d4a714879d83d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 3
        echo "    <header> 
        <nav class=\"navbar navbar-default navbar-fixed-top\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\"></a>
                </div>               
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav\">
                        
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-book\"></span> Libros<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                ";
        // line 21
        if ((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias"))) {
            // line 22
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")));
            foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
                // line 23
                echo "                                    <li><a href=\"#\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "name", array()), "html", null, true);
                echo "</a></li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                                ";
        } else {
            // line 26
            echo "                                    <li><a href=\"#\">No hay categorias registradas, disculpe los inconvenientes</a></li>
                                ";
        }
        // line 28
        echo "                               
                            </ul>
                        </li>
                    <form class=\"navbar-form navbar-left\" role=\"search\">
                        <div class=\"form-group\">
                            <input class=\"form-control\" placeholder=\"Buscar producto\" type=\"text\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-search\"></span> Buscar</button>
                    </form> 
                    <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-user\"> Session<span class=\"caret\"></span></a>
                            ";
        // line 39
        if (((isset($context["sessionActiva"]) ? $context["sessionActiva"] : $this->getContext($context, "sessionActiva")) == 0)) {
            // line 40
            echo "                                    <ul class=\"dropdown-menu\">                                
                                        <form class=\"navbar-form navbar-left\" role=\"search\"  class=\"form-signin\" method=\"post\" action=\"";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("checkSession");
            echo "\">
                                            <div class=\"form-group\">
                                                <label>Usuario</label>
                                                <input name=\"Usuario\" class=\"form-control\" placeholder=\"Usuario\" type=\"text\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label>Clave</label>
                                                <input name=\"Clave\" type=\"password\" class=\"form-control\" placeholder=\"Clave\" type=\"text\">
                                            </div>
                                            <hr>
                                            <div class=\"form-group\">
                                                <button name=\"iniciarsession\" type=\"submit\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-log-in\"></span> Aceptar</button>
                                            </div>
                                            <hr>
                                            <a id=\"registrar\" class=\"btn btn-link\" href=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modal");
            echo "\" data-title=\"Alfalibros nuevo cliente\" data-toggle=\"lightbox\" >Registrate</a> 
                                        </form>
                                    </ul>
                            ";
        } else {
            // line 58
            echo " 
                                <ul class=\"dropdown-menu\">                                 
                                    <li><a href=\"#\" data-toggle=\"lightbox\" data-title=\"Cambio de clave del sistema\"><span class=\"glyphicon glyphicon-user\"></span> Cambiar clave</a></li>
                                    <li><a href=\"";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\"><span class=\"glyphicon glyphicon-off\"></span> Salir</a></li>
                                </ul>
                                
                            ";
        }
        // line 65
        echo "                    </li>                   
                                           
                    
                </div>
            </div>
        </nav>
    </header>
   
";
        
        $__internal_db0f5f54f05d2c85641606fe8565c8b749ff12f305e30cea9d4a714879d83d82->leave($__internal_db0f5f54f05d2c85641606fe8565c8b749ff12f305e30cea9d4a714879d83d82_prof);

    }

    public function getTemplateName()
    {
        return "::navbarAdvance.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  135 => 65,  128 => 61,  123 => 58,  116 => 55,  99 => 41,  96 => 40,  94 => 39,  81 => 28,  77 => 26,  74 => 25,  65 => 23,  60 => 22,  58 => 21,  38 => 3,  32 => 2,  25 => 73,  23 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# --- SE CREA UN SOLO NAVBAR PARA EVITAR TENER VARIOS EN DIFERENTES PAGES --- #}
{% block navbar %}
    <header> 
        <nav class=\"navbar navbar-default navbar-fixed-top\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\"></a>
                </div>               
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav\">
                        
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-book\"></span> Libros<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                {% if categorias %}
                                    {% for categoria in categorias %}
                                    <li><a href=\"#\">{{ categoria.name }}</a></li>
                                    {% endfor%}
                                {% else %}
                                    <li><a href=\"#\">No hay categorias registradas, disculpe los inconvenientes</a></li>
                                {% endif %}
                               
                            </ul>
                        </li>
                    <form class=\"navbar-form navbar-left\" role=\"search\">
                        <div class=\"form-group\">
                            <input class=\"form-control\" placeholder=\"Buscar producto\" type=\"text\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-search\"></span> Buscar</button>
                    </form> 
                    <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-user\"> Session<span class=\"caret\"></span></a>
                            {% if sessionActiva==0 %}
                                    <ul class=\"dropdown-menu\">                                
                                        <form class=\"navbar-form navbar-left\" role=\"search\"  class=\"form-signin\" method=\"post\" action=\"{{ path('checkSession') }}\">
                                            <div class=\"form-group\">
                                                <label>Usuario</label>
                                                <input name=\"Usuario\" class=\"form-control\" placeholder=\"Usuario\" type=\"text\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label>Clave</label>
                                                <input name=\"Clave\" type=\"password\" class=\"form-control\" placeholder=\"Clave\" type=\"text\">
                                            </div>
                                            <hr>
                                            <div class=\"form-group\">
                                                <button name=\"iniciarsession\" type=\"submit\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-log-in\"></span> Aceptar</button>
                                            </div>
                                            <hr>
                                            <a id=\"registrar\" class=\"btn btn-link\" href=\"{{path('modal')}}\" data-title=\"Alfalibros nuevo cliente\" data-toggle=\"lightbox\" >Registrate</a> 
                                        </form>
                                    </ul>
                            {% else %} 
                                <ul class=\"dropdown-menu\">                                 
                                    <li><a href=\"#\" data-toggle=\"lightbox\" data-title=\"Cambio de clave del sistema\"><span class=\"glyphicon glyphicon-user\"></span> Cambiar clave</a></li>
                                    <li><a href=\"{{path('logout')}}\"><span class=\"glyphicon glyphicon-off\"></span> Salir</a></li>
                                </ul>
                                
                            {% endif %}
                    </li>                   
                                           
                    
                </div>
            </div>
        </nav>
    </header>
   
{% endblock %}    ", "::navbarAdvance.html.twig", "C:\\xampp\\htdocs\\alfalibros\\app/Resources\\views/navbarAdvance.html.twig");
    }
}
