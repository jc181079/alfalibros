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
        $__internal_4a91191a6764f114688935eb5bd4d6951d10c4ae64bc399971c6696e72acf727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a91191a6764f114688935eb5bd4d6951d10c4ae64bc399971c6696e72acf727->enter($__internal_4a91191a6764f114688935eb5bd4d6951d10c4ae64bc399971c6696e72acf727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a91191a6764f114688935eb5bd4d6951d10c4ae64bc399971c6696e72acf727->leave($__internal_4a91191a6764f114688935eb5bd4d6951d10c4ae64bc399971c6696e72acf727_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4fbcb3e8275224eef4908f3ecc78e4a7d4001addc1e916db68d1f4efb8f75b57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fbcb3e8275224eef4908f3ecc78e4a7d4001addc1e916db68d1f4efb8f75b57->enter($__internal_4fbcb3e8275224eef4908f3ecc78e4a7d4001addc1e916db68d1f4efb8f75b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4fbcb3e8275224eef4908f3ecc78e4a7d4001addc1e916db68d1f4efb8f75b57->leave($__internal_4fbcb3e8275224eef4908f3ecc78e4a7d4001addc1e916db68d1f4efb8f75b57_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_00d47a2cbdf3f4fd14e0504ece4a260c9b23dfffc2b9494a263680f81fe20cc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00d47a2cbdf3f4fd14e0504ece4a260c9b23dfffc2b9494a263680f81fe20cc8->enter($__internal_00d47a2cbdf3f4fd14e0504ece4a260c9b23dfffc2b9494a263680f81fe20cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_00d47a2cbdf3f4fd14e0504ece4a260c9b23dfffc2b9494a263680f81fe20cc8->leave($__internal_00d47a2cbdf3f4fd14e0504ece4a260c9b23dfffc2b9494a263680f81fe20cc8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_57c5d4969a50afe947517713aa5d6f5be5a082a71ce86c096feb74ab8e28781d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c5d4969a50afe947517713aa5d6f5be5a082a71ce86c096feb74ab8e28781d->enter($__internal_57c5d4969a50afe947517713aa5d6f5be5a082a71ce86c096feb74ab8e28781d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_57c5d4969a50afe947517713aa5d6f5be5a082a71ce86c096feb74ab8e28781d->leave($__internal_57c5d4969a50afe947517713aa5d6f5be5a082a71ce86c096feb74ab8e28781d_prof);

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
