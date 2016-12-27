<?php

/* ::base.html.twig */
class __TwigTemplate_52b2563d9ad9a3beb937b38a47dd8343ce6e3f2d3518b96112b679a61286404d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da255fa79a777d7f8f18d4b16cba4d033c221e5c600bbff5519fb929144ad676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da255fa79a777d7f8f18d4b16cba4d033c221e5c600bbff5519fb929144ad676->enter($__internal_da255fa79a777d7f8f18d4b16cba4d033c221e5c600bbff5519fb929144ad676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
         <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"w3-theme-l5\">
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "    </body>
</html>
";
        
        $__internal_da255fa79a777d7f8f18d4b16cba4d033c221e5c600bbff5519fb929144ad676->leave($__internal_da255fa79a777d7f8f18d4b16cba4d033c221e5c600bbff5519fb929144ad676_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_41d37ff719bc62a2d01df8a8e7a88444d140ef528caa4e59183f5b24453be95c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41d37ff719bc62a2d01df8a8e7a88444d140ef528caa4e59183f5b24453be95c->enter($__internal_41d37ff719bc62a2d01df8a8e7a88444d140ef528caa4e59183f5b24453be95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Alfalibros C.A - La mejor libreria en Venezuela";
        
        $__internal_41d37ff719bc62a2d01df8a8e7a88444d140ef528caa4e59183f5b24453be95c->leave($__internal_41d37ff719bc62a2d01df8a8e7a88444d140ef528caa4e59183f5b24453be95c_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fca5edff66a719a3454e7470ebb06c2963284bc47bc3bc56d7ab0f33b1d0bffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca5edff66a719a3454e7470ebb06c2963284bc47bc3bc56d7ab0f33b1d0bffd->enter($__internal_fca5edff66a719a3454e7470ebb06c2963284bc47bc3bc56d7ab0f33b1d0bffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">            
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/w3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/w3-theme-blue-grey.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        ";
        
        $__internal_fca5edff66a719a3454e7470ebb06c2963284bc47bc3bc56d7ab0f33b1d0bffd->leave($__internal_fca5edff66a719a3454e7470ebb06c2963284bc47bc3bc56d7ab0f33b1d0bffd_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf022998b743c361e5d3c236ca1ab184c0da1ea81627bb3cc6c9715f0f6929a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf022998b743c361e5d3c236ca1ab184c0da1ea81627bb3cc6c9715f0f6929a1->enter($__internal_bf022998b743c361e5d3c236ca1ab184c0da1ea81627bb3cc6c9715f0f6929a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bf022998b743c361e5d3c236ca1ab184c0da1ea81627bb3cc6c9715f0f6929a1->leave($__internal_bf022998b743c361e5d3c236ca1ab184c0da1ea81627bb3cc6c9715f0f6929a1_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_abefce9d4864f8afce92c6377f136b084b7a40581110430a0e2c8e236272499e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abefce9d4864f8afce92c6377f136b084b7a40581110430a0e2c8e236272499e->enter($__internal_abefce9d4864f8afce92c6377f136b084b7a40581110430a0e2c8e236272499e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "          
           <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery-1.12.0.js"), "html", null, true);
        echo "\" ></script>
           <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>           
           <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/ekko-lightbox.min.js"), "html", null, true);
        echo "\" ></script>
           
        ";
        
        $__internal_abefce9d4864f8afce92c6377f136b084b7a40581110430a0e2c8e236272499e->leave($__internal_abefce9d4864f8afce92c6377f136b084b7a40581110430a0e2c8e236272499e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 20,  123 => 19,  119 => 18,  111 => 17,  100 => 16,  91 => 11,  87 => 10,  83 => 9,  78 => 8,  72 => 7,  60 => 6,  51 => 23,  48 => 17,  46 => 16,  39 => 13,  37 => 7,  33 => 6,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
         <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}Alfalibros C.A - La mejor libreria en Venezuela{% endblock %}</title>
        {% block stylesheets %}
            <link href=\"{{ asset('public/css/bootstrap.css') }}\" rel=\"stylesheet\">            
            <link href=\"{{ asset('public/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('public/css/w3.css') }}\" rel=\"stylesheet\" media=\"screen\">
            <link href=\"{{ asset('public/css/w3-theme-blue-grey.css') }}\" rel=\"stylesheet\" media=\"screen\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body class=\"w3-theme-l5\">
        {% block body %}{% endblock %}
        {% block javascripts %}          
           <script src=\"{{ asset('public/js/jquery-1.12.0.js') }}\" ></script>
           <script src=\"{{ asset('public/js/bootstrap.min.js') }}\" ></script>           
           <script src=\"{{ asset('public/js/ekko-lightbox.min.js') }}\" ></script>
           
        {% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\xampp\\htdocs\\alfalibros\\app/Resources\\views/base.html.twig");
    }
}
