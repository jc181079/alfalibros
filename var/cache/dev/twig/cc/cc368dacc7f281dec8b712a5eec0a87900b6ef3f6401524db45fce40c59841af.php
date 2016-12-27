<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_42ac793b9d68179d897be24276b0808e9980ebc2a94b47a45e21ab22e8aa5e78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_d48ef17dde3261935b8a5d8fce84795354a2b7a9728bd2149577f37db473e87f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d48ef17dde3261935b8a5d8fce84795354a2b7a9728bd2149577f37db473e87f->enter($__internal_d48ef17dde3261935b8a5d8fce84795354a2b7a9728bd2149577f37db473e87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d48ef17dde3261935b8a5d8fce84795354a2b7a9728bd2149577f37db473e87f->leave($__internal_d48ef17dde3261935b8a5d8fce84795354a2b7a9728bd2149577f37db473e87f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd8c92d94afced6faac2e6027a90bc0dd11cc65f412789ef0093c8d452ce6d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd8c92d94afced6faac2e6027a90bc0dd11cc65f412789ef0093c8d452ce6d89->enter($__internal_bd8c92d94afced6faac2e6027a90bc0dd11cc65f412789ef0093c8d452ce6d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bd8c92d94afced6faac2e6027a90bc0dd11cc65f412789ef0093c8d452ce6d89->leave($__internal_bd8c92d94afced6faac2e6027a90bc0dd11cc65f412789ef0093c8d452ce6d89_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c58614a6feaececa91737481ee48f4017c416092eb937bd8e13d9cc4158c0ed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58614a6feaececa91737481ee48f4017c416092eb937bd8e13d9cc4158c0ed3->enter($__internal_c58614a6feaececa91737481ee48f4017c416092eb937bd8e13d9cc4158c0ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c58614a6feaececa91737481ee48f4017c416092eb937bd8e13d9cc4158c0ed3->leave($__internal_c58614a6feaececa91737481ee48f4017c416092eb937bd8e13d9cc4158c0ed3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\alfalibros\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
