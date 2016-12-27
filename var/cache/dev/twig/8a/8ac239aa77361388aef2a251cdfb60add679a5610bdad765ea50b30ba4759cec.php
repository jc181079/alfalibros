<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_1e3d5e6084cd4022c5cdfe9843e0598d4522bbeeb46f4828fcbbaa7e68f22ade extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73463cffc30a6315ee26f1d3e06e56c0a06262b0e780496f008a2015be60491d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73463cffc30a6315ee26f1d3e06e56c0a06262b0e780496f008a2015be60491d->enter($__internal_73463cffc30a6315ee26f1d3e06e56c0a06262b0e780496f008a2015be60491d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73463cffc30a6315ee26f1d3e06e56c0a06262b0e780496f008a2015be60491d->leave($__internal_73463cffc30a6315ee26f1d3e06e56c0a06262b0e780496f008a2015be60491d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7e414a383414a2bbae4d3741d75b190901c3a6bdf6a02d6baa72473179036c80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e414a383414a2bbae4d3741d75b190901c3a6bdf6a02d6baa72473179036c80->enter($__internal_7e414a383414a2bbae4d3741d75b190901c3a6bdf6a02d6baa72473179036c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7e414a383414a2bbae4d3741d75b190901c3a6bdf6a02d6baa72473179036c80->leave($__internal_7e414a383414a2bbae4d3741d75b190901c3a6bdf6a02d6baa72473179036c80_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f20c458295306bf2a2eab941c8983aecea66c16f0cb9f73139d43741206ce402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f20c458295306bf2a2eab941c8983aecea66c16f0cb9f73139d43741206ce402->enter($__internal_f20c458295306bf2a2eab941c8983aecea66c16f0cb9f73139d43741206ce402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f20c458295306bf2a2eab941c8983aecea66c16f0cb9f73139d43741206ce402->leave($__internal_f20c458295306bf2a2eab941c8983aecea66c16f0cb9f73139d43741206ce402_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cdd0f569c9970120670b17c9d0d5b4a5a7a3df712b35f85204c748b5b7ff1b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cdd0f569c9970120670b17c9d0d5b4a5a7a3df712b35f85204c748b5b7ff1b5->enter($__internal_4cdd0f569c9970120670b17c9d0d5b4a5a7a3df712b35f85204c748b5b7ff1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4cdd0f569c9970120670b17c9d0d5b4a5a7a3df712b35f85204c748b5b7ff1b5->leave($__internal_4cdd0f569c9970120670b17c9d0d5b4a5a7a3df712b35f85204c748b5b7ff1b5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\alfalibros\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
