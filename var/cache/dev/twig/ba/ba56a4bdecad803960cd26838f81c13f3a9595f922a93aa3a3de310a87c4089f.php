<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_46a88d1816d170abcc06724a5def530c791573744108c96a72928da4b0e3e018 extends Twig_Template
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
        $__internal_ee7bbd0fed4f3e2c57a3c263cede01f0e6c1c2fe3290907e5662d9823abb39b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee7bbd0fed4f3e2c57a3c263cede01f0e6c1c2fe3290907e5662d9823abb39b1->enter($__internal_ee7bbd0fed4f3e2c57a3c263cede01f0e6c1c2fe3290907e5662d9823abb39b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_ee7bbd0fed4f3e2c57a3c263cede01f0e6c1c2fe3290907e5662d9823abb39b1->leave($__internal_ee7bbd0fed4f3e2c57a3c263cede01f0e6c1c2fe3290907e5662d9823abb39b1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\alfalibros\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
