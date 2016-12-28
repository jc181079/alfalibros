<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_9cd93871d58bfe156d8a16ccf3c8a491a8a20f48f6df6827045202e372f22630 extends Twig_Template
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
        $__internal_e9764f97c5bb4497869f58a74470af921b8a6c874194f6cf221a376aa8d34fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9764f97c5bb4497869f58a74470af921b8a6c874194f6cf221a376aa8d34fb4->enter($__internal_e9764f97c5bb4497869f58a74470af921b8a6c874194f6cf221a376aa8d34fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_e9764f97c5bb4497869f58a74470af921b8a6c874194f6cf221a376aa8d34fb4->leave($__internal_e9764f97c5bb4497869f58a74470af921b8a6c874194f6cf221a376aa8d34fb4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\alfalibros\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
