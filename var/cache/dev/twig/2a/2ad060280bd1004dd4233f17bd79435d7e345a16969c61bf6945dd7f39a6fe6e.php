<?php

/* principalBundle:Default:modalRegistrate.html.twig */
class __TwigTemplate_bc1b81319c5f1241e71ea4c3538274b230a782a2b70875f62d6f33760c9ef3df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "principalBundle:Default:modalRegistrate.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5165dbd557084bf1b93d9ea719878b66b1db6f4b504caea8fe3ea92dc9c9d7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5165dbd557084bf1b93d9ea719878b66b1db6f4b504caea8fe3ea92dc9c9d7b->enter($__internal_a5165dbd557084bf1b93d9ea719878b66b1db6f4b504caea8fe3ea92dc9c9d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "principalBundle:Default:modalRegistrate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5165dbd557084bf1b93d9ea719878b66b1db6f4b504caea8fe3ea92dc9c9d7b->leave($__internal_a5165dbd557084bf1b93d9ea719878b66b1db6f4b504caea8fe3ea92dc9c9d7b_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_38d32974dc1f0e33c0330edce1d04025c4ee665c5da15f67cebe2b74f2075896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38d32974dc1f0e33c0330edce1d04025c4ee665c5da15f67cebe2b74f2075896->enter($__internal_38d32974dc1f0e33c0330edce1d04025c4ee665c5da15f67cebe2b74f2075896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "    
";
        
        $__internal_38d32974dc1f0e33c0330edce1d04025c4ee665c5da15f67cebe2b74f2075896->leave($__internal_38d32974dc1f0e33c0330edce1d04025c4ee665c5da15f67cebe2b74f2075896_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_da5ca006b512853214d6990a3e8f7392fd269ca6f06cea004cd2ca57d307aa1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da5ca006b512853214d6990a3e8f7392fd269ca6f06cea004cd2ca57d307aa1f->enter($__internal_da5ca006b512853214d6990a3e8f7392fd269ca6f06cea004cd2ca57d307aa1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <!-- Modal -->
                
                                <form class=\"form-signin\" method=\"post\" action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registrate");
        echo "\" >
                                    <div class=\"form-group\">
                                      <label  class=\"\">Cedula</label>
                                      <input  id=\"Cedula\" name=\"Cedula\" class=\"form-control\" placeholder=\"Cedula\">
                                    </div>
                                    <div class=\"form-group\">
                                      <label  class=\"\">Nombre</label>
                                      <input  id=\"FirstName\" name=\"FirstName\" class=\"form-control\" placeholder=\"Nombre\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label  class=\"\">Apellido</label>
                                        <input  id=\"LastName\" name=\"LastName\" class=\"form-control\" placeholder=\"Apellido\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label  class=\"\">Email</label>
                                        <input  id=\"Email\" name=\"Email\" class=\"form-control\" placeholder=\"Email\"   >
                                    </div>
                                    <div class=\"form-group\">
                                        <label  class=\"\">Telefono</label>
                                        <input  id=\"PhoneNumber\" name=\"PhoneNumber\" class=\"form-control\" placeholder=\"Telefono\" >
                                    </div>
                                    <div class=\"form-group\">
                                        <label  class=\"\">Direccion 1</label>
                                        <input  id=\"Address1\" name=\"Address1\" class=\"form-control\" placeholder=\"Direccion 2\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label  class=\"\">Direccion 2</label>
                                        <input  id=\"Address2\" name=\"Address2\" class=\"form-control\" placeholder=\"Direccion 2\">
                                    </div>                                    
                                    <div class=\"form-group\">
                                        <label  class=\"\">Ciudad</label>
                                        <input  id=\"City\" name=\"City\" class=\"form-control\" placeholder=\"Ciudad\"   >
                                    </div>
                                    <div class=\"form-group\">
                                        <label  class=\"\">Estado</label>
                                        <input  id=\"State\" name=\"State\" class=\"form-control\" placeholder=\"Estado\"   >
                                    </div>
                                    <div class=\"form-group\">
                                        <label  class=\"\">Codigo Postal</label>
                                        <input  id=\"Zip\" name=\"Zip\" class=\"form-control\" placeholder=\"Codigo postal\"   >
                                    </div>
                                    <div class=\"form-group\">
                                        <label  class=\"\">Pais</label>
                                        <input  id=\"Country\" name=\"Country\" class=\"form-control\" placeholder=\"Pais\">
                                    </div>
                                    <hr>
                                    <div class=\"form-group\">
                                      <label  class=\"\">Clave</label>
                                      <input  id=\"Clave1\" name=\"Clave1\" class=\"form-control\" placeholder=\"escriba clave\" type=\"password\">
                                    </div>
                                    <div class=\"form-group\">
                                      <label  class=\"\">Repite clave</label>
                                      <input  id=\"Clave2\" name=\"Clave2\" class=\"form-control\" placeholder=\"Repita clave\" type=\"password\">
                                    </div>                                                         
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                                        <button  class=\"btn btn-success\" type=\"submit\"><span class=\"glyphicon glyphicon-floppy-disk\"></span>Guardar</button>
                                    </div>
                                </form>
                            
";
        
        $__internal_da5ca006b512853214d6990a3e8f7392fd269ca6f06cea004cd2ca57d307aa1f->leave($__internal_da5ca006b512853214d6990a3e8f7392fd269ca6f06cea004cd2ca57d307aa1f_prof);

    }

    public function getTemplateName()
    {
        return "principalBundle:Default:modalRegistrate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 9,  57 => 6,  51 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block stylesheets %}
    {{ parent() }}    
{% endblock %}
{% block body %}

    <!-- Modal -->
                
                                <form class=\"form-signin\" method=\"post\" action=\"{{ path('registrate') }}\" >
                                    <div class=\"form-group\">
                                      <label  class=\"\">Cedula</label>
                                      <input  id=\"Cedula\" name=\"Cedula\" class=\"form-control\" placeholder=\"Cedula\">
                                    </div>
                                    <div class=\"form-group\">
                                      <label  class=\"\">Nombre</label>
                                      <input  id=\"FirstName\" name=\"FirstName\" class=\"form-control\" placeholder=\"Nombre\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label  class=\"\">Apellido</label>
                                        <input  id=\"LastName\" name=\"LastName\" class=\"form-control\" placeholder=\"Apellido\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label  class=\"\">Email</label>
                                        <input  id=\"Email\" name=\"Email\" class=\"form-control\" placeholder=\"Email\"   >
                                    </div>
                                    <div class=\"form-group\">
                                        <label  class=\"\">Telefono</label>
                                        <input  id=\"PhoneNumber\" name=\"PhoneNumber\" class=\"form-control\" placeholder=\"Telefono\" >
                                    </div>
                                    <div class=\"form-group\">
                                        <label  class=\"\">Direccion 1</label>
                                        <input  id=\"Address1\" name=\"Address1\" class=\"form-control\" placeholder=\"Direccion 2\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label  class=\"\">Direccion 2</label>
                                        <input  id=\"Address2\" name=\"Address2\" class=\"form-control\" placeholder=\"Direccion 2\">
                                    </div>                                    
                                    <div class=\"form-group\">
                                        <label  class=\"\">Ciudad</label>
                                        <input  id=\"City\" name=\"City\" class=\"form-control\" placeholder=\"Ciudad\"   >
                                    </div>
                                    <div class=\"form-group\">
                                        <label  class=\"\">Estado</label>
                                        <input  id=\"State\" name=\"State\" class=\"form-control\" placeholder=\"Estado\"   >
                                    </div>
                                    <div class=\"form-group\">
                                        <label  class=\"\">Codigo Postal</label>
                                        <input  id=\"Zip\" name=\"Zip\" class=\"form-control\" placeholder=\"Codigo postal\"   >
                                    </div>
                                    <div class=\"form-group\">
                                        <label  class=\"\">Pais</label>
                                        <input  id=\"Country\" name=\"Country\" class=\"form-control\" placeholder=\"Pais\">
                                    </div>
                                    <hr>
                                    <div class=\"form-group\">
                                      <label  class=\"\">Clave</label>
                                      <input  id=\"Clave1\" name=\"Clave1\" class=\"form-control\" placeholder=\"escriba clave\" type=\"password\">
                                    </div>
                                    <div class=\"form-group\">
                                      <label  class=\"\">Repite clave</label>
                                      <input  id=\"Clave2\" name=\"Clave2\" class=\"form-control\" placeholder=\"Repita clave\" type=\"password\">
                                    </div>                                                         
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                                        <button  class=\"btn btn-success\" type=\"submit\"><span class=\"glyphicon glyphicon-floppy-disk\"></span>Guardar</button>
                                    </div>
                                </form>
                            
{% endblock %}", "principalBundle:Default:modalRegistrate.html.twig", "C:\\xampp\\htdocs\\alfalibros\\src\\principalBundle/Resources/views/Default/modalRegistrate.html.twig");
    }
}
