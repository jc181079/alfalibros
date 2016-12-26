<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_798e135bf6edec44636ed42af0a2f22e2a8324c43ed2a5494e38e601f0136231 extends Twig_Template
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
        $__internal_bbb8b4d128e06ac3cf9406efa541fccf4a46d1af7bde4980609ae2bfb532a254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbb8b4d128e06ac3cf9406efa541fccf4a46d1af7bde4980609ae2bfb532a254->enter($__internal_bbb8b4d128e06ac3cf9406efa541fccf4a46d1af7bde4980609ae2bfb532a254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbb8b4d128e06ac3cf9406efa541fccf4a46d1af7bde4980609ae2bfb532a254->leave($__internal_bbb8b4d128e06ac3cf9406efa541fccf4a46d1af7bde4980609ae2bfb532a254_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_67fee250f466e29777e31aee6d533fd238ec880a9c25a709cd9e10e0e99462e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67fee250f466e29777e31aee6d533fd238ec880a9c25a709cd9e10e0e99462e5->enter($__internal_67fee250f466e29777e31aee6d533fd238ec880a9c25a709cd9e10e0e99462e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_67fee250f466e29777e31aee6d533fd238ec880a9c25a709cd9e10e0e99462e5->leave($__internal_67fee250f466e29777e31aee6d533fd238ec880a9c25a709cd9e10e0e99462e5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ccdfb53aec0230d4c4ad3757924a477a67a94a1f0ec7285a5995ec8ddddfb344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccdfb53aec0230d4c4ad3757924a477a67a94a1f0ec7285a5995ec8ddddfb344->enter($__internal_ccdfb53aec0230d4c4ad3757924a477a67a94a1f0ec7285a5995ec8ddddfb344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ccdfb53aec0230d4c4ad3757924a477a67a94a1f0ec7285a5995ec8ddddfb344->leave($__internal_ccdfb53aec0230d4c4ad3757924a477a67a94a1f0ec7285a5995ec8ddddfb344_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_36396fea41866bddf9c4ecd4dd4b9197cfb20f935c1f88f6bbf3480d75831eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36396fea41866bddf9c4ecd4dd4b9197cfb20f935c1f88f6bbf3480d75831eda->enter($__internal_36396fea41866bddf9c4ecd4dd4b9197cfb20f935c1f88f6bbf3480d75831eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_36396fea41866bddf9c4ecd4dd4b9197cfb20f935c1f88f6bbf3480d75831eda->leave($__internal_36396fea41866bddf9c4ecd4dd4b9197cfb20f935c1f88f6bbf3480d75831eda_prof);

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
