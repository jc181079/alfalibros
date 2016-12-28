<?php

/* navbar_advance.html */
class __TwigTemplate_440cddcbda7b7a182388b88eb72aaf42918befea3a26e572bdf96ace0e232cfb extends Twig_Template
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
        $__internal_803bf3beabf04263d3dd80ec86c354e1a6ba09f7dda4a9166cd1b54a9c325ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_803bf3beabf04263d3dd80ec86c354e1a6ba09f7dda4a9166cd1b54a9c325ea9->enter($__internal_803bf3beabf04263d3dd80ec86c354e1a6ba09f7dda4a9166cd1b54a9c325ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navbar_advance.html"));

        // line 2
        $this->displayBlock('navbar', $context, $blocks);
        // line 89
        echo "    ";
        
        $__internal_803bf3beabf04263d3dd80ec86c354e1a6ba09f7dda4a9166cd1b54a9c325ea9->leave($__internal_803bf3beabf04263d3dd80ec86c354e1a6ba09f7dda4a9166cd1b54a9c325ea9_prof);

    }

    // line 2
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_f3f6e3f48d7bcd17ed9910f9a2ae02cbca903dfe888e6f9d8024561ca715dbc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3f6e3f48d7bcd17ed9910f9a2ae02cbca903dfe888e6f9d8024561ca715dbc6->enter($__internal_f3f6e3f48d7bcd17ed9910f9a2ae02cbca903dfe888e6f9d8024561ca715dbc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

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
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Libros <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Balance del dia</a></li>
                                
                            </ul>
                        </li>

                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Administracion <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                               
                                <li><a href=\"#\"><span class=\"badge\">2</span> Plan de distribucion</a></li>
                                <li class=\"dropdown-header\"><span class=\"badge\">3</span> Proveedores</li>
                                <li><a href=\"#\">Compra o entradas</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li class=\"dropdown-header\"><span class=\"badge\">4</span>  distribuciones entregas y/o pagos</li>
                                <li><a href=\"#\">entregas pagadas en efectivo</a></li>
                                <li><a href=\"#\">entregas pagadas en cheque</a></li>
                                <li><a href=\"#\">entregas pagadas por transferencia</a></li>
                                <li><a href=\"#\">entregas a credito</a></li>                            
                                <li class=\"dropdown-header\"><span class=\"badge\">5</span> Gastos operativos</li>
                                <li><a href=\"#\">Gastos realizados</a></li>                            
                                <li class=\"dropdown-header\"><span class=\"badge\">6</span> Gastos de nomina</li>
                                <li><a href=\"#\">Gastos de nominas realizados</a></li>
                                <li class=\"dropdown-header\"><span class=\"badge\">7</span> Cierre del dia</li>
                                <li><a href=\"#\">Cerrar el dia</a></li>
                               
                            </ul>
                        </li>                   
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Maestro <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Unidad de Medidas</a></li>
                                <li><a href=\"#\">Productos</a></li>
                                <li><a href=\"#\">Almacen</a></li>                                
                                <li role=\"separator\" class=\"divider\"></li>
                                <li class=\"dropdown-header\">Rutas/Solicitudes</li>
                                <li><a href=\"#\">Rutas</a></li>
                                <li><a href=\"#\">Solicitudes</a></li>
                                <li class=\"dropdown-header\">Proveedores</li>
                                <li><a href=\"#\">Proveedores</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li class=\"dropdown-header\">Movimiento de almacen</li>
                                <li><a href=\"#\">Movimiento</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                    <form class=\"navbar-form navbar-left\" role=\"search\">
                        <div class=\"form-group\">
                            <input class=\"form-control\" placeholder=\"Buscar modulo\" type=\"text\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-search\"></span> Buscar</button>
                    </form>
                    <ul class=\"nav navbar-nav navbar-lef\">
                        <li><a href=\"#\" data-toggle=\"lightbox\" data-title=\"Cambio de clave del sistema\"><span class=\"glyphicon glyphicon-user\"></span> Cambiar clave</a></li>
                    </ul>
                   
                    <ul class=\"nav navbar-nav navbar-lef\">
                        <li><a href=\"#\" ><span class=\"glyphicon glyphicon-tasks\"></span> Panel de control</a></li>
                    </ul>
                   
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon-off\"></span> Salir</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
   
";
        
        $__internal_f3f6e3f48d7bcd17ed9910f9a2ae02cbca903dfe888e6f9d8024561ca715dbc6->leave($__internal_f3f6e3f48d7bcd17ed9910f9a2ae02cbca903dfe888e6f9d8024561ca715dbc6_prof);

    }

    public function getTemplateName()
    {
        return "navbar_advance.html";
    }

    public function getDebugInfo()
    {
        return array (  38 => 3,  32 => 2,  25 => 89,  23 => 2,);
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
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Libros <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Balance del dia</a></li>
                                
                            </ul>
                        </li>

                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Administracion <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                               
                                <li><a href=\"#\"><span class=\"badge\">2</span> Plan de distribucion</a></li>
                                <li class=\"dropdown-header\"><span class=\"badge\">3</span> Proveedores</li>
                                <li><a href=\"#\">Compra o entradas</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li class=\"dropdown-header\"><span class=\"badge\">4</span>  distribuciones entregas y/o pagos</li>
                                <li><a href=\"#\">entregas pagadas en efectivo</a></li>
                                <li><a href=\"#\">entregas pagadas en cheque</a></li>
                                <li><a href=\"#\">entregas pagadas por transferencia</a></li>
                                <li><a href=\"#\">entregas a credito</a></li>                            
                                <li class=\"dropdown-header\"><span class=\"badge\">5</span> Gastos operativos</li>
                                <li><a href=\"#\">Gastos realizados</a></li>                            
                                <li class=\"dropdown-header\"><span class=\"badge\">6</span> Gastos de nomina</li>
                                <li><a href=\"#\">Gastos de nominas realizados</a></li>
                                <li class=\"dropdown-header\"><span class=\"badge\">7</span> Cierre del dia</li>
                                <li><a href=\"#\">Cerrar el dia</a></li>
                               
                            </ul>
                        </li>                   
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Maestro <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Unidad de Medidas</a></li>
                                <li><a href=\"#\">Productos</a></li>
                                <li><a href=\"#\">Almacen</a></li>                                
                                <li role=\"separator\" class=\"divider\"></li>
                                <li class=\"dropdown-header\">Rutas/Solicitudes</li>
                                <li><a href=\"#\">Rutas</a></li>
                                <li><a href=\"#\">Solicitudes</a></li>
                                <li class=\"dropdown-header\">Proveedores</li>
                                <li><a href=\"#\">Proveedores</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li class=\"dropdown-header\">Movimiento de almacen</li>
                                <li><a href=\"#\">Movimiento</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                    <form class=\"navbar-form navbar-left\" role=\"search\">
                        <div class=\"form-group\">
                            <input class=\"form-control\" placeholder=\"Buscar modulo\" type=\"text\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-search\"></span> Buscar</button>
                    </form>
                    <ul class=\"nav navbar-nav navbar-lef\">
                        <li><a href=\"#\" data-toggle=\"lightbox\" data-title=\"Cambio de clave del sistema\"><span class=\"glyphicon glyphicon-user\"></span> Cambiar clave</a></li>
                    </ul>
                   
                    <ul class=\"nav navbar-nav navbar-lef\">
                        <li><a href=\"#\" ><span class=\"glyphicon glyphicon-tasks\"></span> Panel de control</a></li>
                    </ul>
                   
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon-off\"></span> Salir</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
   
{% endblock %}    ", "navbar_advance.html", "C:\\xampp\\htdocs\\alfalibros\\app\\Resources\\views\\navbar_advance.html");
    }
}
