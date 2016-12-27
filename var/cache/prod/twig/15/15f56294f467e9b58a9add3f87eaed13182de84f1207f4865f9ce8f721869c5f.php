<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d41e2cbb16634ce41368358b29c94a34a1f17e782383ee4db16b9f058f72bdaa extends Twig_Template
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
        $__internal_5bbff99a6b670362be0df994ebbf5c6e759427a6218679cb82edbb0d8a12d3c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bbff99a6b670362be0df994ebbf5c6e759427a6218679cb82edbb0d8a12d3c2->enter($__internal_5bbff99a6b670362be0df994ebbf5c6e759427a6218679cb82edbb0d8a12d3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bbff99a6b670362be0df994ebbf5c6e759427a6218679cb82edbb0d8a12d3c2->leave($__internal_5bbff99a6b670362be0df994ebbf5c6e759427a6218679cb82edbb0d8a12d3c2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e098c54e7cb623fe3624ac3f82811ad214befca5e68edd6506f75ebadf2bb1e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e098c54e7cb623fe3624ac3f82811ad214befca5e68edd6506f75ebadf2bb1e7->enter($__internal_e098c54e7cb623fe3624ac3f82811ad214befca5e68edd6506f75ebadf2bb1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e098c54e7cb623fe3624ac3f82811ad214befca5e68edd6506f75ebadf2bb1e7->leave($__internal_e098c54e7cb623fe3624ac3f82811ad214befca5e68edd6506f75ebadf2bb1e7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9498a63a4c013856c3f99e6c3ba689dd5fd938e238922979f8cb53146d30ef8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9498a63a4c013856c3f99e6c3ba689dd5fd938e238922979f8cb53146d30ef8c->enter($__internal_9498a63a4c013856c3f99e6c3ba689dd5fd938e238922979f8cb53146d30ef8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9498a63a4c013856c3f99e6c3ba689dd5fd938e238922979f8cb53146d30ef8c->leave($__internal_9498a63a4c013856c3f99e6c3ba689dd5fd938e238922979f8cb53146d30ef8c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e32838055472c49542a4e4266644f39a6c2fae9021fdaeb77ad54a4d28a483b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e32838055472c49542a4e4266644f39a6c2fae9021fdaeb77ad54a4d28a483b9->enter($__internal_e32838055472c49542a4e4266644f39a6c2fae9021fdaeb77ad54a4d28a483b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e32838055472c49542a4e4266644f39a6c2fae9021fdaeb77ad54a4d28a483b9->leave($__internal_e32838055472c49542a4e4266644f39a6c2fae9021fdaeb77ad54a4d28a483b9_prof);

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
