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
        $__internal_ff6694b09b60bbd8a76e39642912d8e4185e8c1a9b0d97760442822f3b35444d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff6694b09b60bbd8a76e39642912d8e4185e8c1a9b0d97760442822f3b35444d->enter($__internal_ff6694b09b60bbd8a76e39642912d8e4185e8c1a9b0d97760442822f3b35444d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_ff6694b09b60bbd8a76e39642912d8e4185e8c1a9b0d97760442822f3b35444d->leave($__internal_ff6694b09b60bbd8a76e39642912d8e4185e8c1a9b0d97760442822f3b35444d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_9dc362a2f6df7eb62f6ee1de653d5c5057aa4dbb3c68f903defecf359e4d9edc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dc362a2f6df7eb62f6ee1de653d5c5057aa4dbb3c68f903defecf359e4d9edc->enter($__internal_9dc362a2f6df7eb62f6ee1de653d5c5057aa4dbb3c68f903defecf359e4d9edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Alfalibros C.A - La mejor libreria en Venezuela";
        
        $__internal_9dc362a2f6df7eb62f6ee1de653d5c5057aa4dbb3c68f903defecf359e4d9edc->leave($__internal_9dc362a2f6df7eb62f6ee1de653d5c5057aa4dbb3c68f903defecf359e4d9edc_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2b7fba0d9ccb39fae6ab87ff01695facd56317ec39ee78fc33700776e50c2160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b7fba0d9ccb39fae6ab87ff01695facd56317ec39ee78fc33700776e50c2160->enter($__internal_2b7fba0d9ccb39fae6ab87ff01695facd56317ec39ee78fc33700776e50c2160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_2b7fba0d9ccb39fae6ab87ff01695facd56317ec39ee78fc33700776e50c2160->leave($__internal_2b7fba0d9ccb39fae6ab87ff01695facd56317ec39ee78fc33700776e50c2160_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_9526f042b8601c31feffe83db73c19d7fe1fccaa0020e26884cd126ffd94a59a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9526f042b8601c31feffe83db73c19d7fe1fccaa0020e26884cd126ffd94a59a->enter($__internal_9526f042b8601c31feffe83db73c19d7fe1fccaa0020e26884cd126ffd94a59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9526f042b8601c31feffe83db73c19d7fe1fccaa0020e26884cd126ffd94a59a->leave($__internal_9526f042b8601c31feffe83db73c19d7fe1fccaa0020e26884cd126ffd94a59a_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dcb2da879da6badf9771eaa1e2f6c2ae49ad5417d948162b597bd10800ea968e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcb2da879da6badf9771eaa1e2f6c2ae49ad5417d948162b597bd10800ea968e->enter($__internal_dcb2da879da6badf9771eaa1e2f6c2ae49ad5417d948162b597bd10800ea968e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_dcb2da879da6badf9771eaa1e2f6c2ae49ad5417d948162b597bd10800ea968e->leave($__internal_dcb2da879da6badf9771eaa1e2f6c2ae49ad5417d948162b597bd10800ea968e_prof);

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
