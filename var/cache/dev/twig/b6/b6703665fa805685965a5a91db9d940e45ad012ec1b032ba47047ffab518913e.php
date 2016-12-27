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
        $__internal_05eaba306efbbd42640a68710edd815d64345f49d6e23c1480b19cbdf0a7fb2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05eaba306efbbd42640a68710edd815d64345f49d6e23c1480b19cbdf0a7fb2b->enter($__internal_05eaba306efbbd42640a68710edd815d64345f49d6e23c1480b19cbdf0a7fb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05eaba306efbbd42640a68710edd815d64345f49d6e23c1480b19cbdf0a7fb2b->leave($__internal_05eaba306efbbd42640a68710edd815d64345f49d6e23c1480b19cbdf0a7fb2b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4495f79ec4f7485b90ff8f053782b05abde12e48db2caf5f8ab5959a4cf5dc3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4495f79ec4f7485b90ff8f053782b05abde12e48db2caf5f8ab5959a4cf5dc3a->enter($__internal_4495f79ec4f7485b90ff8f053782b05abde12e48db2caf5f8ab5959a4cf5dc3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4495f79ec4f7485b90ff8f053782b05abde12e48db2caf5f8ab5959a4cf5dc3a->leave($__internal_4495f79ec4f7485b90ff8f053782b05abde12e48db2caf5f8ab5959a4cf5dc3a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_09b824b9a3d7a6dee67b1b4113e576ca59c041a451060d82cc5ded83d93bfc96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09b824b9a3d7a6dee67b1b4113e576ca59c041a451060d82cc5ded83d93bfc96->enter($__internal_09b824b9a3d7a6dee67b1b4113e576ca59c041a451060d82cc5ded83d93bfc96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_09b824b9a3d7a6dee67b1b4113e576ca59c041a451060d82cc5ded83d93bfc96->leave($__internal_09b824b9a3d7a6dee67b1b4113e576ca59c041a451060d82cc5ded83d93bfc96_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0a584c107eebe52f38da7bb364a84a4cf837db629371e89562a8175b7b8a8f0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a584c107eebe52f38da7bb364a84a4cf837db629371e89562a8175b7b8a8f0d->enter($__internal_0a584c107eebe52f38da7bb364a84a4cf837db629371e89562a8175b7b8a8f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0a584c107eebe52f38da7bb364a84a4cf837db629371e89562a8175b7b8a8f0d->leave($__internal_0a584c107eebe52f38da7bb364a84a4cf837db629371e89562a8175b7b8a8f0d_prof);

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
