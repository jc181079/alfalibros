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
        $__internal_e2fd60f56a7a14dd0b291ee1fba7a4fcdee02bc7d345ed72cc6be29371556061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2fd60f56a7a14dd0b291ee1fba7a4fcdee02bc7d345ed72cc6be29371556061->enter($__internal_e2fd60f56a7a14dd0b291ee1fba7a4fcdee02bc7d345ed72cc6be29371556061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2fd60f56a7a14dd0b291ee1fba7a4fcdee02bc7d345ed72cc6be29371556061->leave($__internal_e2fd60f56a7a14dd0b291ee1fba7a4fcdee02bc7d345ed72cc6be29371556061_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b93db38460841ee2981bb67336855f4ac1a3ba0739e3171de553795cc7af28d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b93db38460841ee2981bb67336855f4ac1a3ba0739e3171de553795cc7af28d1->enter($__internal_b93db38460841ee2981bb67336855f4ac1a3ba0739e3171de553795cc7af28d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b93db38460841ee2981bb67336855f4ac1a3ba0739e3171de553795cc7af28d1->leave($__internal_b93db38460841ee2981bb67336855f4ac1a3ba0739e3171de553795cc7af28d1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0626d2fa7d13c526d85c393aa596c8e1639ab1a06c5d409c814b16f59fd5cd66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0626d2fa7d13c526d85c393aa596c8e1639ab1a06c5d409c814b16f59fd5cd66->enter($__internal_0626d2fa7d13c526d85c393aa596c8e1639ab1a06c5d409c814b16f59fd5cd66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0626d2fa7d13c526d85c393aa596c8e1639ab1a06c5d409c814b16f59fd5cd66->leave($__internal_0626d2fa7d13c526d85c393aa596c8e1639ab1a06c5d409c814b16f59fd5cd66_prof);

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
