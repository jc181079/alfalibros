<?php

/* @principal/Default/modalRegistrate.html.twig */
class __TwigTemplate_1cdfae9f2adb4ed11c1039a080240c66bf72ac340631b21be32c94525925292d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@principal/Default/modalRegistrate.html.twig", 1);
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
        $__internal_b353c5bc96c3234f4f68d9e408027476bfbcc4260e9e6be6e4b04bc1c978026e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b353c5bc96c3234f4f68d9e408027476bfbcc4260e9e6be6e4b04bc1c978026e->enter($__internal_b353c5bc96c3234f4f68d9e408027476bfbcc4260e9e6be6e4b04bc1c978026e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@principal/Default/modalRegistrate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b353c5bc96c3234f4f68d9e408027476bfbcc4260e9e6be6e4b04bc1c978026e->leave($__internal_b353c5bc96c3234f4f68d9e408027476bfbcc4260e9e6be6e4b04bc1c978026e_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e323915767cd75e916f55bc15181ce88179c2a5be37873682e542ec7e3c46bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e323915767cd75e916f55bc15181ce88179c2a5be37873682e542ec7e3c46bbd->enter($__internal_e323915767cd75e916f55bc15181ce88179c2a5be37873682e542ec7e3c46bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "    
";
        
        $__internal_e323915767cd75e916f55bc15181ce88179c2a5be37873682e542ec7e3c46bbd->leave($__internal_e323915767cd75e916f55bc15181ce88179c2a5be37873682e542ec7e3c46bbd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_650f0e8994f52cb919ad74f52fc84898235f344bbdcbf57ee436340c518c98db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_650f0e8994f52cb919ad74f52fc84898235f344bbdcbf57ee436340c518c98db->enter($__internal_650f0e8994f52cb919ad74f52fc84898235f344bbdcbf57ee436340c518c98db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_650f0e8994f52cb919ad74f52fc84898235f344bbdcbf57ee436340c518c98db->leave($__internal_650f0e8994f52cb919ad74f52fc84898235f344bbdcbf57ee436340c518c98db_prof);

    }

    public function getTemplateName()
    {
        return "@principal/Default/modalRegistrate.html.twig";
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
                            
{% endblock %}", "@principal/Default/modalRegistrate.html.twig", "C:\\xampp\\htdocs\\alfalibros\\src\\principalBundle\\Resources\\views\\Default\\modalRegistrate.html.twig");
    }
}
