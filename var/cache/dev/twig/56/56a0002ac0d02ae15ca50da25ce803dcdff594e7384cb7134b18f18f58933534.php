<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d4db75a3f396f04b1f9037fbbf5034109d7f685d4d1c3e29e534b993f308bb42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_fdb4cebb279e635d3dcddac3d11e3374e27a836a1761709eec276e7439c212b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdb4cebb279e635d3dcddac3d11e3374e27a836a1761709eec276e7439c212b4->enter($__internal_fdb4cebb279e635d3dcddac3d11e3374e27a836a1761709eec276e7439c212b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdb4cebb279e635d3dcddac3d11e3374e27a836a1761709eec276e7439c212b4->leave($__internal_fdb4cebb279e635d3dcddac3d11e3374e27a836a1761709eec276e7439c212b4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5fdcbb9a9c753b4f2b449f128522e5af75d7a8840570de2ed87836ec35f583c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fdcbb9a9c753b4f2b449f128522e5af75d7a8840570de2ed87836ec35f583c3->enter($__internal_5fdcbb9a9c753b4f2b449f128522e5af75d7a8840570de2ed87836ec35f583c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5fdcbb9a9c753b4f2b449f128522e5af75d7a8840570de2ed87836ec35f583c3->leave($__internal_5fdcbb9a9c753b4f2b449f128522e5af75d7a8840570de2ed87836ec35f583c3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_93f946ae4f553536823065de81fd9ee2b2f2b44eff4732515f6ca09806025ff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93f946ae4f553536823065de81fd9ee2b2f2b44eff4732515f6ca09806025ff3->enter($__internal_93f946ae4f553536823065de81fd9ee2b2f2b44eff4732515f6ca09806025ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_93f946ae4f553536823065de81fd9ee2b2f2b44eff4732515f6ca09806025ff3->leave($__internal_93f946ae4f553536823065de81fd9ee2b2f2b44eff4732515f6ca09806025ff3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1f8ec7f34d14548f35113d6002413ec6ab764bcb1aceba305a9171e8e96c946c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f8ec7f34d14548f35113d6002413ec6ab764bcb1aceba305a9171e8e96c946c->enter($__internal_1f8ec7f34d14548f35113d6002413ec6ab764bcb1aceba305a9171e8e96c946c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1f8ec7f34d14548f35113d6002413ec6ab764bcb1aceba305a9171e8e96c946c->leave($__internal_1f8ec7f34d14548f35113d6002413ec6ab764bcb1aceba305a9171e8e96c946c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\alfalibros\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
