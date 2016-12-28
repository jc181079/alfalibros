<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d856640c3289fabb4e891c0ead05905594329911fee769bf0cbd2e9f2c443632 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3ea91222133ce599323c7f002fc83fe3f44c363253490b9a0a7e098e63fb001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ea91222133ce599323c7f002fc83fe3f44c363253490b9a0a7e098e63fb001->enter($__internal_a3ea91222133ce599323c7f002fc83fe3f44c363253490b9a0a7e098e63fb001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3ea91222133ce599323c7f002fc83fe3f44c363253490b9a0a7e098e63fb001->leave($__internal_a3ea91222133ce599323c7f002fc83fe3f44c363253490b9a0a7e098e63fb001_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2bb8f62fb24605a98b9bac8f77dbea71248fd8b2cb8ab747ceec4f467352d8d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb8f62fb24605a98b9bac8f77dbea71248fd8b2cb8ab747ceec4f467352d8d7->enter($__internal_2bb8f62fb24605a98b9bac8f77dbea71248fd8b2cb8ab747ceec4f467352d8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2bb8f62fb24605a98b9bac8f77dbea71248fd8b2cb8ab747ceec4f467352d8d7->leave($__internal_2bb8f62fb24605a98b9bac8f77dbea71248fd8b2cb8ab747ceec4f467352d8d7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dd701c810cd05f199f5ca70ee1a1cbcaba06e964ff93e767bf4007c6ffd5bd26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd701c810cd05f199f5ca70ee1a1cbcaba06e964ff93e767bf4007c6ffd5bd26->enter($__internal_dd701c810cd05f199f5ca70ee1a1cbcaba06e964ff93e767bf4007c6ffd5bd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dd701c810cd05f199f5ca70ee1a1cbcaba06e964ff93e767bf4007c6ffd5bd26->leave($__internal_dd701c810cd05f199f5ca70ee1a1cbcaba06e964ff93e767bf4007c6ffd5bd26_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_525dd10684cca354966a623de66c786f30ac69eee6027ac576ecc2f66b45f4f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_525dd10684cca354966a623de66c786f30ac69eee6027ac576ecc2f66b45f4f5->enter($__internal_525dd10684cca354966a623de66c786f30ac69eee6027ac576ecc2f66b45f4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_525dd10684cca354966a623de66c786f30ac69eee6027ac576ecc2f66b45f4f5->leave($__internal_525dd10684cca354966a623de66c786f30ac69eee6027ac576ecc2f66b45f4f5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\alfalibros\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
