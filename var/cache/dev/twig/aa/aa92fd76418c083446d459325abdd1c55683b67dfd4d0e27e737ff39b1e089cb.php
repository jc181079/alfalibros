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
        $__internal_86930962175d65e3cc3743dd8f2b8e947db5084c815761179c6666ecf47d032f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86930962175d65e3cc3743dd8f2b8e947db5084c815761179c6666ecf47d032f->enter($__internal_86930962175d65e3cc3743dd8f2b8e947db5084c815761179c6666ecf47d032f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base-original.html.twig"));

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
        
        $__internal_86930962175d65e3cc3743dd8f2b8e947db5084c815761179c6666ecf47d032f->leave($__internal_86930962175d65e3cc3743dd8f2b8e947db5084c815761179c6666ecf47d032f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_715c2712a5c19f37ba1e701a967f9613a6a587e9eb1f1c469a572a9e4c7e32ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_715c2712a5c19f37ba1e701a967f9613a6a587e9eb1f1c469a572a9e4c7e32ca->enter($__internal_715c2712a5c19f37ba1e701a967f9613a6a587e9eb1f1c469a572a9e4c7e32ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_715c2712a5c19f37ba1e701a967f9613a6a587e9eb1f1c469a572a9e4c7e32ca->leave($__internal_715c2712a5c19f37ba1e701a967f9613a6a587e9eb1f1c469a572a9e4c7e32ca_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_86d9e70f487ed3b95a377b84724a825f214303be670cd03b1403fdcf360f0802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86d9e70f487ed3b95a377b84724a825f214303be670cd03b1403fdcf360f0802->enter($__internal_86d9e70f487ed3b95a377b84724a825f214303be670cd03b1403fdcf360f0802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_86d9e70f487ed3b95a377b84724a825f214303be670cd03b1403fdcf360f0802->leave($__internal_86d9e70f487ed3b95a377b84724a825f214303be670cd03b1403fdcf360f0802_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e0af65b552c87f0ce68f45ef97c712acad90865b4e2f0beb71e61ed911ea2fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e0af65b552c87f0ce68f45ef97c712acad90865b4e2f0beb71e61ed911ea2fe->enter($__internal_3e0af65b552c87f0ce68f45ef97c712acad90865b4e2f0beb71e61ed911ea2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3e0af65b552c87f0ce68f45ef97c712acad90865b4e2f0beb71e61ed911ea2fe->leave($__internal_3e0af65b552c87f0ce68f45ef97c712acad90865b4e2f0beb71e61ed911ea2fe_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ed41311da0cf981e9563dd4b8889cd64beb073ce4a374c31d732d1c4337872a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed41311da0cf981e9563dd4b8889cd64beb073ce4a374c31d732d1c4337872a5->enter($__internal_ed41311da0cf981e9563dd4b8889cd64beb073ce4a374c31d732d1c4337872a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ed41311da0cf981e9563dd4b8889cd64beb073ce4a374c31d732d1c4337872a5->leave($__internal_ed41311da0cf981e9563dd4b8889cd64beb073ce4a374c31d732d1c4337872a5_prof);

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
