<?php

/* base.html.twig */
class __TwigTemplate_1c95cdca3f4ddd6df0ac74c986723d5c3c854e63709c822671a906af2b9f4626 extends Twig_Template
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
        $__internal_e84d3e14d22fb49e5236760e4868a73601f2d14c13b73b975967b132fe1241e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84d3e14d22fb49e5236760e4868a73601f2d14c13b73b975967b132fe1241e6->enter($__internal_e84d3e14d22fb49e5236760e4868a73601f2d14c13b73b975967b132fe1241e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e84d3e14d22fb49e5236760e4868a73601f2d14c13b73b975967b132fe1241e6->leave($__internal_e84d3e14d22fb49e5236760e4868a73601f2d14c13b73b975967b132fe1241e6_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_a57ebabbc8e0d35420dfdcfff7dd9519d0b97c5b6976f0bb0f7be565a5dae760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a57ebabbc8e0d35420dfdcfff7dd9519d0b97c5b6976f0bb0f7be565a5dae760->enter($__internal_a57ebabbc8e0d35420dfdcfff7dd9519d0b97c5b6976f0bb0f7be565a5dae760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Alfalibros C.A - La mejor libreria en Venezuela";
        
        $__internal_a57ebabbc8e0d35420dfdcfff7dd9519d0b97c5b6976f0bb0f7be565a5dae760->leave($__internal_a57ebabbc8e0d35420dfdcfff7dd9519d0b97c5b6976f0bb0f7be565a5dae760_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f3813582a6e6cf01de13fe4097d8a45fcea87d882185d561dba23940f3da8c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3813582a6e6cf01de13fe4097d8a45fcea87d882185d561dba23940f3da8c4c->enter($__internal_f3813582a6e6cf01de13fe4097d8a45fcea87d882185d561dba23940f3da8c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_f3813582a6e6cf01de13fe4097d8a45fcea87d882185d561dba23940f3da8c4c->leave($__internal_f3813582a6e6cf01de13fe4097d8a45fcea87d882185d561dba23940f3da8c4c_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_aef4068158fc74ebba4e5c026b680c11d6a5b505b8276527e2a14e38413633d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aef4068158fc74ebba4e5c026b680c11d6a5b505b8276527e2a14e38413633d9->enter($__internal_aef4068158fc74ebba4e5c026b680c11d6a5b505b8276527e2a14e38413633d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aef4068158fc74ebba4e5c026b680c11d6a5b505b8276527e2a14e38413633d9->leave($__internal_aef4068158fc74ebba4e5c026b680c11d6a5b505b8276527e2a14e38413633d9_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_55eabf1c8f754612a92241f65b939d06cd59daeef527fb1ff6014f7f6a5603fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55eabf1c8f754612a92241f65b939d06cd59daeef527fb1ff6014f7f6a5603fb->enter($__internal_55eabf1c8f754612a92241f65b939d06cd59daeef527fb1ff6014f7f6a5603fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_55eabf1c8f754612a92241f65b939d06cd59daeef527fb1ff6014f7f6a5603fb->leave($__internal_55eabf1c8f754612a92241f65b939d06cd59daeef527fb1ff6014f7f6a5603fb_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\xampp\\htdocs\\alfalibros\\app\\Resources\\views\\base.html.twig");
    }
}
