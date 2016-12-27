<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_eb46a84e461c227d8ba56bbf45e44b86c1e4e2dbc9ff7da6252f0d27b60614e6 extends Twig_Template
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
        $__internal_c04bf46036e74eada00a2150752be545ce63e89c917e88ef3a48255b63f864ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c04bf46036e74eada00a2150752be545ce63e89c917e88ef3a48255b63f864ad->enter($__internal_c04bf46036e74eada00a2150752be545ce63e89c917e88ef3a48255b63f864ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c04bf46036e74eada00a2150752be545ce63e89c917e88ef3a48255b63f864ad->leave($__internal_c04bf46036e74eada00a2150752be545ce63e89c917e88ef3a48255b63f864ad_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fae0bd54c0909abaf737eb5078e3519a13b4bac2afa52fc473ed85ecd82e2385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fae0bd54c0909abaf737eb5078e3519a13b4bac2afa52fc473ed85ecd82e2385->enter($__internal_fae0bd54c0909abaf737eb5078e3519a13b4bac2afa52fc473ed85ecd82e2385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fae0bd54c0909abaf737eb5078e3519a13b4bac2afa52fc473ed85ecd82e2385->leave($__internal_fae0bd54c0909abaf737eb5078e3519a13b4bac2afa52fc473ed85ecd82e2385_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb7da180f9fff74605499fb7d8e4a5b75a9b8eabd0714e6f978ef9f271936e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb7da180f9fff74605499fb7d8e4a5b75a9b8eabd0714e6f978ef9f271936e7f->enter($__internal_eb7da180f9fff74605499fb7d8e4a5b75a9b8eabd0714e6f978ef9f271936e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_eb7da180f9fff74605499fb7d8e4a5b75a9b8eabd0714e6f978ef9f271936e7f->leave($__internal_eb7da180f9fff74605499fb7d8e4a5b75a9b8eabd0714e6f978ef9f271936e7f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_705ddb9ce0b262068e0aa5457ffbea86c1daaa6c9f8484e25387b2efb95bdadc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_705ddb9ce0b262068e0aa5457ffbea86c1daaa6c9f8484e25387b2efb95bdadc->enter($__internal_705ddb9ce0b262068e0aa5457ffbea86c1daaa6c9f8484e25387b2efb95bdadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_705ddb9ce0b262068e0aa5457ffbea86c1daaa6c9f8484e25387b2efb95bdadc->leave($__internal_705ddb9ce0b262068e0aa5457ffbea86c1daaa6c9f8484e25387b2efb95bdadc_prof);

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
