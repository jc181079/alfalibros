<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_cb30a12dec943810536c9bc41c243aba57927286455d46902e414d6e76f25fd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef7d10b9f7eacb83ddbb3540bfc6cf16ed6c7c0e3858ed680e8be8bcfec801fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef7d10b9f7eacb83ddbb3540bfc6cf16ed6c7c0e3858ed680e8be8bcfec801fb->enter($__internal_ef7d10b9f7eacb83ddbb3540bfc6cf16ed6c7c0e3858ed680e8be8bcfec801fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ef7d10b9f7eacb83ddbb3540bfc6cf16ed6c7c0e3858ed680e8be8bcfec801fb->leave($__internal_ef7d10b9f7eacb83ddbb3540bfc6cf16ed6c7c0e3858ed680e8be8bcfec801fb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "C:\\xampp\\htdocs\\alfalibros\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
