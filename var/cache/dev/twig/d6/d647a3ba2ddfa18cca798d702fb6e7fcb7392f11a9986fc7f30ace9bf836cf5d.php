<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4bbc7e4dce6764e6403b2acf6d41b6b6a63594e652242894fe97823f82747950 extends Twig_Template
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
        $__internal_01c75f1fc2b7a94c6d58a57c71d52337b41e47063328fd442e7d9288f06ef602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01c75f1fc2b7a94c6d58a57c71d52337b41e47063328fd442e7d9288f06ef602->enter($__internal_01c75f1fc2b7a94c6d58a57c71d52337b41e47063328fd442e7d9288f06ef602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01c75f1fc2b7a94c6d58a57c71d52337b41e47063328fd442e7d9288f06ef602->leave($__internal_01c75f1fc2b7a94c6d58a57c71d52337b41e47063328fd442e7d9288f06ef602_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7753cc1d67eb2016d119753f999a69d6b74f6411548c6e2f8d866ce2ee12671f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7753cc1d67eb2016d119753f999a69d6b74f6411548c6e2f8d866ce2ee12671f->enter($__internal_7753cc1d67eb2016d119753f999a69d6b74f6411548c6e2f8d866ce2ee12671f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7753cc1d67eb2016d119753f999a69d6b74f6411548c6e2f8d866ce2ee12671f->leave($__internal_7753cc1d67eb2016d119753f999a69d6b74f6411548c6e2f8d866ce2ee12671f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c7fb1bb92557df086280e30194a0d8b77d65f20ec8969995639000a3a6bee830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7fb1bb92557df086280e30194a0d8b77d65f20ec8969995639000a3a6bee830->enter($__internal_c7fb1bb92557df086280e30194a0d8b77d65f20ec8969995639000a3a6bee830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c7fb1bb92557df086280e30194a0d8b77d65f20ec8969995639000a3a6bee830->leave($__internal_c7fb1bb92557df086280e30194a0d8b77d65f20ec8969995639000a3a6bee830_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7975ae68a0989ac6f1db8f95aa8d834e0c59e0ae74bb2751588edbeac16592dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7975ae68a0989ac6f1db8f95aa8d834e0c59e0ae74bb2751588edbeac16592dd->enter($__internal_7975ae68a0989ac6f1db8f95aa8d834e0c59e0ae74bb2751588edbeac16592dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7975ae68a0989ac6f1db8f95aa8d834e0c59e0ae74bb2751588edbeac16592dd->leave($__internal_7975ae68a0989ac6f1db8f95aa8d834e0c59e0ae74bb2751588edbeac16592dd_prof);

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
