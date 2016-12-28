<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d7d7ef28d48ff9d7c7d2b4020f0710abe26093c7adb49bd787e00ce481e6dcda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_ef7e4be04dd74fe6644f3fa921fc99a1552359407d03d0b5a1ae102a22faaf7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef7e4be04dd74fe6644f3fa921fc99a1552359407d03d0b5a1ae102a22faaf7e->enter($__internal_ef7e4be04dd74fe6644f3fa921fc99a1552359407d03d0b5a1ae102a22faaf7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef7e4be04dd74fe6644f3fa921fc99a1552359407d03d0b5a1ae102a22faaf7e->leave($__internal_ef7e4be04dd74fe6644f3fa921fc99a1552359407d03d0b5a1ae102a22faaf7e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ce0b8843146be1026204c532bd73f9e39649e91f72abaf3d043a5291ea8dd792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce0b8843146be1026204c532bd73f9e39649e91f72abaf3d043a5291ea8dd792->enter($__internal_ce0b8843146be1026204c532bd73f9e39649e91f72abaf3d043a5291ea8dd792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ce0b8843146be1026204c532bd73f9e39649e91f72abaf3d043a5291ea8dd792->leave($__internal_ce0b8843146be1026204c532bd73f9e39649e91f72abaf3d043a5291ea8dd792_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e1f7f08f3bab38be680daa9401aa7a59cd22020903307369b6789e51ba3003e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e1f7f08f3bab38be680daa9401aa7a59cd22020903307369b6789e51ba3003e->enter($__internal_0e1f7f08f3bab38be680daa9401aa7a59cd22020903307369b6789e51ba3003e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0e1f7f08f3bab38be680daa9401aa7a59cd22020903307369b6789e51ba3003e->leave($__internal_0e1f7f08f3bab38be680daa9401aa7a59cd22020903307369b6789e51ba3003e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_245a350ade62d5de69a36189b65f7bc18f315a9f542ab15518e2b77be242e432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_245a350ade62d5de69a36189b65f7bc18f315a9f542ab15518e2b77be242e432->enter($__internal_245a350ade62d5de69a36189b65f7bc18f315a9f542ab15518e2b77be242e432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_245a350ade62d5de69a36189b65f7bc18f315a9f542ab15518e2b77be242e432->leave($__internal_245a350ade62d5de69a36189b65f7bc18f315a9f542ab15518e2b77be242e432_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\alfalibros\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
