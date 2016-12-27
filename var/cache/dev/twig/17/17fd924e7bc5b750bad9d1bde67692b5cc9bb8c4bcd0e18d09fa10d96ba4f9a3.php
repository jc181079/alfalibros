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
        $__internal_35a3e36176b62c6eecfed07b7f35bb56b156a9b354d93582f1877fb9bed0e972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35a3e36176b62c6eecfed07b7f35bb56b156a9b354d93582f1877fb9bed0e972->enter($__internal_35a3e36176b62c6eecfed07b7f35bb56b156a9b354d93582f1877fb9bed0e972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_35a3e36176b62c6eecfed07b7f35bb56b156a9b354d93582f1877fb9bed0e972->leave($__internal_35a3e36176b62c6eecfed07b7f35bb56b156a9b354d93582f1877fb9bed0e972_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_de10366d0e9c6bbd32c683a49d19279e14430343275116f1c7ceaaee160e82f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de10366d0e9c6bbd32c683a49d19279e14430343275116f1c7ceaaee160e82f3->enter($__internal_de10366d0e9c6bbd32c683a49d19279e14430343275116f1c7ceaaee160e82f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_de10366d0e9c6bbd32c683a49d19279e14430343275116f1c7ceaaee160e82f3->leave($__internal_de10366d0e9c6bbd32c683a49d19279e14430343275116f1c7ceaaee160e82f3_prof);

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
