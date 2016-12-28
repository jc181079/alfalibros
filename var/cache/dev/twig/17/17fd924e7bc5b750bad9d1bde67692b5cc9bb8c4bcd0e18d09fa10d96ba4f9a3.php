<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_5bcd3878e8abbe78a9348fe58564c0050e89a79d011312c7592a3e64d69589e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c037b562d879c80fb13cc8c38819d4006488fc1e9b4bb8c359eae06ff88162e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c037b562d879c80fb13cc8c38819d4006488fc1e9b4bb8c359eae06ff88162e->enter($__internal_7c037b562d879c80fb13cc8c38819d4006488fc1e9b4bb8c359eae06ff88162e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7c037b562d879c80fb13cc8c38819d4006488fc1e9b4bb8c359eae06ff88162e->leave($__internal_7c037b562d879c80fb13cc8c38819d4006488fc1e9b4bb8c359eae06ff88162e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0150c7d9ed19f0cda048c69390746dd5bf8c9c313a24ff7d2a2c66d375326f1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0150c7d9ed19f0cda048c69390746dd5bf8c9c313a24ff7d2a2c66d375326f1b->enter($__internal_0150c7d9ed19f0cda048c69390746dd5bf8c9c313a24ff7d2a2c66d375326f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0150c7d9ed19f0cda048c69390746dd5bf8c9c313a24ff7d2a2c66d375326f1b->leave($__internal_0150c7d9ed19f0cda048c69390746dd5bf8c9c313a24ff7d2a2c66d375326f1b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\alfalibros\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
