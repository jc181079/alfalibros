<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_7bb30b029b15eae9ef109763c6390853a592690a67e38446a07af4ed2937ee9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_62fb3e994516d3785b309123dccf9f64b4651e6536ffb7463aa257efbf1aedd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62fb3e994516d3785b309123dccf9f64b4651e6536ffb7463aa257efbf1aedd3->enter($__internal_62fb3e994516d3785b309123dccf9f64b4651e6536ffb7463aa257efbf1aedd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62fb3e994516d3785b309123dccf9f64b4651e6536ffb7463aa257efbf1aedd3->leave($__internal_62fb3e994516d3785b309123dccf9f64b4651e6536ffb7463aa257efbf1aedd3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fcee629f22af9856b61794d385f3baeb83891fb3618859504b84be829a640d34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcee629f22af9856b61794d385f3baeb83891fb3618859504b84be829a640d34->enter($__internal_fcee629f22af9856b61794d385f3baeb83891fb3618859504b84be829a640d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_fcee629f22af9856b61794d385f3baeb83891fb3618859504b84be829a640d34->leave($__internal_fcee629f22af9856b61794d385f3baeb83891fb3618859504b84be829a640d34_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4380ccf614c5d66899d395ae0dd303d2f625915b00bedabced0aefd7ae35098b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4380ccf614c5d66899d395ae0dd303d2f625915b00bedabced0aefd7ae35098b->enter($__internal_4380ccf614c5d66899d395ae0dd303d2f625915b00bedabced0aefd7ae35098b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4380ccf614c5d66899d395ae0dd303d2f625915b00bedabced0aefd7ae35098b->leave($__internal_4380ccf614c5d66899d395ae0dd303d2f625915b00bedabced0aefd7ae35098b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\alfalibros\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
