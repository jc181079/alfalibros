<?php

/* base-original.html.twig */
class __TwigTemplate_22e8de3e827f6a3f314cd694b1b369c1e3c73eb5c42eff393cc03f87af845b99 extends Twig_Template
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
        $__internal_05f251ccf3fe14abbc3b6e0e819e9ee445578647f57b0c42048cc0c4b8be8a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05f251ccf3fe14abbc3b6e0e819e9ee445578647f57b0c42048cc0c4b8be8a2e->enter($__internal_05f251ccf3fe14abbc3b6e0e819e9ee445578647f57b0c42048cc0c4b8be8a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base-original.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_05f251ccf3fe14abbc3b6e0e819e9ee445578647f57b0c42048cc0c4b8be8a2e->leave($__internal_05f251ccf3fe14abbc3b6e0e819e9ee445578647f57b0c42048cc0c4b8be8a2e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8d830b18e592c1177bafbdd8fcc559ba5092625210231d96c93a187ae2c9bdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8d830b18e592c1177bafbdd8fcc559ba5092625210231d96c93a187ae2c9bdd->enter($__internal_c8d830b18e592c1177bafbdd8fcc559ba5092625210231d96c93a187ae2c9bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c8d830b18e592c1177bafbdd8fcc559ba5092625210231d96c93a187ae2c9bdd->leave($__internal_c8d830b18e592c1177bafbdd8fcc559ba5092625210231d96c93a187ae2c9bdd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cca82dc4c5c9e17dbe0134bd83f1fcef05c0a7386391655509074835d316bb64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cca82dc4c5c9e17dbe0134bd83f1fcef05c0a7386391655509074835d316bb64->enter($__internal_cca82dc4c5c9e17dbe0134bd83f1fcef05c0a7386391655509074835d316bb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cca82dc4c5c9e17dbe0134bd83f1fcef05c0a7386391655509074835d316bb64->leave($__internal_cca82dc4c5c9e17dbe0134bd83f1fcef05c0a7386391655509074835d316bb64_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff29e74219ab34a51b51d633384c21d324cdb37b4ce7d7d8f5819e08156e4322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff29e74219ab34a51b51d633384c21d324cdb37b4ce7d7d8f5819e08156e4322->enter($__internal_ff29e74219ab34a51b51d633384c21d324cdb37b4ce7d7d8f5819e08156e4322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ff29e74219ab34a51b51d633384c21d324cdb37b4ce7d7d8f5819e08156e4322->leave($__internal_ff29e74219ab34a51b51d633384c21d324cdb37b4ce7d7d8f5819e08156e4322_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fbcbd11d2f206c845c6f7e2205a9098f0bca55eaa07efdfff00bf4c927ef2f45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbcbd11d2f206c845c6f7e2205a9098f0bca55eaa07efdfff00bf4c927ef2f45->enter($__internal_fbcbd11d2f206c845c6f7e2205a9098f0bca55eaa07efdfff00bf4c927ef2f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fbcbd11d2f206c845c6f7e2205a9098f0bca55eaa07efdfff00bf4c927ef2f45->leave($__internal_fbcbd11d2f206c845c6f7e2205a9098f0bca55eaa07efdfff00bf4c927ef2f45_prof);

    }

    public function getTemplateName()
    {
        return "base-original.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base-original.html.twig", "C:\\xampp\\htdocs\\alfalibros\\app\\Resources\\views\\base-original.html.twig");
    }
}
