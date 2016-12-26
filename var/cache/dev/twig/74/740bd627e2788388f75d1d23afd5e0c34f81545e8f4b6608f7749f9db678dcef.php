<?php

/* ::base.html.twig */
class __TwigTemplate_cd71be1c55e35b535119bbe7d222292e47bbc09d76d1923d5d51bafa6c86d3a7 extends Twig_Template
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
        $__internal_e04f1e644461013e2bc4d7ed08e3beb62add1f088f1e63257e99b84f00c53915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e04f1e644461013e2bc4d7ed08e3beb62add1f088f1e63257e99b84f00c53915->enter($__internal_e04f1e644461013e2bc4d7ed08e3beb62add1f088f1e63257e99b84f00c53915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_e04f1e644461013e2bc4d7ed08e3beb62add1f088f1e63257e99b84f00c53915->leave($__internal_e04f1e644461013e2bc4d7ed08e3beb62add1f088f1e63257e99b84f00c53915_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_64abecc3aba92092e6506ec1ddb77618cb8ca0073b05e769fa41c27bb9d9db2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64abecc3aba92092e6506ec1ddb77618cb8ca0073b05e769fa41c27bb9d9db2b->enter($__internal_64abecc3aba92092e6506ec1ddb77618cb8ca0073b05e769fa41c27bb9d9db2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Alfalibros C.A - La mejor libreria en Venezuela";
        
        $__internal_64abecc3aba92092e6506ec1ddb77618cb8ca0073b05e769fa41c27bb9d9db2b->leave($__internal_64abecc3aba92092e6506ec1ddb77618cb8ca0073b05e769fa41c27bb9d9db2b_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4e5ee3b4257e9718d87dee32fc3f9bad6d2d5ccd7488655965caeeed8331c196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e5ee3b4257e9718d87dee32fc3f9bad6d2d5ccd7488655965caeeed8331c196->enter($__internal_4e5ee3b4257e9718d87dee32fc3f9bad6d2d5ccd7488655965caeeed8331c196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
            
        ";
        
        $__internal_4e5ee3b4257e9718d87dee32fc3f9bad6d2d5ccd7488655965caeeed8331c196->leave($__internal_4e5ee3b4257e9718d87dee32fc3f9bad6d2d5ccd7488655965caeeed8331c196_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4c3b09afb1a5656d07e32c48310797386162783fd00347b5afa19293e285ba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4c3b09afb1a5656d07e32c48310797386162783fd00347b5afa19293e285ba7->enter($__internal_d4c3b09afb1a5656d07e32c48310797386162783fd00347b5afa19293e285ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d4c3b09afb1a5656d07e32c48310797386162783fd00347b5afa19293e285ba7->leave($__internal_d4c3b09afb1a5656d07e32c48310797386162783fd00347b5afa19293e285ba7_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ce4468f90584c990661c56058658074dd863256fefba7bc768435167ccfe3cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce4468f90584c990661c56058658074dd863256fefba7bc768435167ccfe3cae->enter($__internal_ce4468f90584c990661c56058658074dd863256fefba7bc768435167ccfe3cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_ce4468f90584c990661c56058658074dd863256fefba7bc768435167ccfe3cae->leave($__internal_ce4468f90584c990661c56058658074dd863256fefba7bc768435167ccfe3cae_prof);

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
        return array (  124 => 20,  120 => 19,  116 => 18,  108 => 17,  97 => 16,  87 => 10,  83 => 9,  78 => 8,  72 => 7,  60 => 6,  51 => 23,  48 => 17,  46 => 16,  39 => 13,  37 => 7,  33 => 6,  26 => 1,);
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
