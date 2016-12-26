<?php

/* base.html.twig */
class __TwigTemplate_fa09866cf2c8ef19fd734b0fc5573439fa4691dbc5daa670377d7303f7971c0d extends Twig_Template
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
        $__internal_76568f52f92121eab2c9a20d121a02b0553b052125bbc80d9ea521dc5c762a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76568f52f92121eab2c9a20d121a02b0553b052125bbc80d9ea521dc5c762a7a->enter($__internal_76568f52f92121eab2c9a20d121a02b0553b052125bbc80d9ea521dc5c762a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_76568f52f92121eab2c9a20d121a02b0553b052125bbc80d9ea521dc5c762a7a->leave($__internal_76568f52f92121eab2c9a20d121a02b0553b052125bbc80d9ea521dc5c762a7a_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef92b1a1490c98203fddee00d7857ebeda64cf8176a228bf38ba6d8209cf9dbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef92b1a1490c98203fddee00d7857ebeda64cf8176a228bf38ba6d8209cf9dbe->enter($__internal_ef92b1a1490c98203fddee00d7857ebeda64cf8176a228bf38ba6d8209cf9dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Alfalibros C.A - La mejor libreria en Venezuela";
        
        $__internal_ef92b1a1490c98203fddee00d7857ebeda64cf8176a228bf38ba6d8209cf9dbe->leave($__internal_ef92b1a1490c98203fddee00d7857ebeda64cf8176a228bf38ba6d8209cf9dbe_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d858ae3ac02e8b1a74feb170b508b5b67f377551aea3fa707c069be7dbbcf2f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d858ae3ac02e8b1a74feb170b508b5b67f377551aea3fa707c069be7dbbcf2f9->enter($__internal_d858ae3ac02e8b1a74feb170b508b5b67f377551aea3fa707c069be7dbbcf2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d858ae3ac02e8b1a74feb170b508b5b67f377551aea3fa707c069be7dbbcf2f9->leave($__internal_d858ae3ac02e8b1a74feb170b508b5b67f377551aea3fa707c069be7dbbcf2f9_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_2dc68dc280fee717a1ce1f0158583074f01203da5c4a03fafe5d2989eaac64b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc68dc280fee717a1ce1f0158583074f01203da5c4a03fafe5d2989eaac64b5->enter($__internal_2dc68dc280fee717a1ce1f0158583074f01203da5c4a03fafe5d2989eaac64b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2dc68dc280fee717a1ce1f0158583074f01203da5c4a03fafe5d2989eaac64b5->leave($__internal_2dc68dc280fee717a1ce1f0158583074f01203da5c4a03fafe5d2989eaac64b5_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b817f1d08f3fb1af01308ffad041032d2b3632b52b38fafbca8ee8ea74046f1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b817f1d08f3fb1af01308ffad041032d2b3632b52b38fafbca8ee8ea74046f1c->enter($__internal_b817f1d08f3fb1af01308ffad041032d2b3632b52b38fafbca8ee8ea74046f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b817f1d08f3fb1af01308ffad041032d2b3632b52b38fafbca8ee8ea74046f1c->leave($__internal_b817f1d08f3fb1af01308ffad041032d2b3632b52b38fafbca8ee8ea74046f1c_prof);

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
", "base.html.twig", "C:\\xampp\\htdocs\\alfalibros\\app\\Resources\\views\\base.html.twig");
    }
}
