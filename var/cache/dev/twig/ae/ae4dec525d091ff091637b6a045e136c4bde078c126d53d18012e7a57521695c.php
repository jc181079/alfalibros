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
        $__internal_24b6be3422d8de29fedb2724bb0cf3c4023cbbd345dab05bb4c5b81ff414f4f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b6be3422d8de29fedb2724bb0cf3c4023cbbd345dab05bb4c5b81ff414f4f2->enter($__internal_24b6be3422d8de29fedb2724bb0cf3c4023cbbd345dab05bb4c5b81ff414f4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_24b6be3422d8de29fedb2724bb0cf3c4023cbbd345dab05bb4c5b81ff414f4f2->leave($__internal_24b6be3422d8de29fedb2724bb0cf3c4023cbbd345dab05bb4c5b81ff414f4f2_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_065e91e99c598365ae8676de66ba9d394ebbf574b38546e38b9b351915cca41c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065e91e99c598365ae8676de66ba9d394ebbf574b38546e38b9b351915cca41c->enter($__internal_065e91e99c598365ae8676de66ba9d394ebbf574b38546e38b9b351915cca41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Alfalibros C.A - La mejor libreria en Venezuela";
        
        $__internal_065e91e99c598365ae8676de66ba9d394ebbf574b38546e38b9b351915cca41c->leave($__internal_065e91e99c598365ae8676de66ba9d394ebbf574b38546e38b9b351915cca41c_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_be8650cbac85235133eb341013e1726f5eeef12e04367a6b8389ba06dff164de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8650cbac85235133eb341013e1726f5eeef12e04367a6b8389ba06dff164de->enter($__internal_be8650cbac85235133eb341013e1726f5eeef12e04367a6b8389ba06dff164de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_be8650cbac85235133eb341013e1726f5eeef12e04367a6b8389ba06dff164de->leave($__internal_be8650cbac85235133eb341013e1726f5eeef12e04367a6b8389ba06dff164de_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5900bce43dcdad3b2b5dfb83ff7d0d0614fdb8ee71124feb349d647b9eb5b7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5900bce43dcdad3b2b5dfb83ff7d0d0614fdb8ee71124feb349d647b9eb5b7a->enter($__internal_a5900bce43dcdad3b2b5dfb83ff7d0d0614fdb8ee71124feb349d647b9eb5b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a5900bce43dcdad3b2b5dfb83ff7d0d0614fdb8ee71124feb349d647b9eb5b7a->leave($__internal_a5900bce43dcdad3b2b5dfb83ff7d0d0614fdb8ee71124feb349d647b9eb5b7a_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_002cec10810c3f95f7b725c58e4e615825d06a284234c21712d3dc5ec32545ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_002cec10810c3f95f7b725c58e4e615825d06a284234c21712d3dc5ec32545ae->enter($__internal_002cec10810c3f95f7b725c58e4e615825d06a284234c21712d3dc5ec32545ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_002cec10810c3f95f7b725c58e4e615825d06a284234c21712d3dc5ec32545ae->leave($__internal_002cec10810c3f95f7b725c58e4e615825d06a284234c21712d3dc5ec32545ae_prof);

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
