<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ea4dc136d508d6d192d44052dc29d0c01e6b0c8782a3b34f7fab78e4a06811c2 extends Twig_Template
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
        $__internal_de513eedee68d282d097cfb4919d0efeca61ac6fece0ff0b0bc961979182113e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de513eedee68d282d097cfb4919d0efeca61ac6fece0ff0b0bc961979182113e->enter($__internal_de513eedee68d282d097cfb4919d0efeca61ac6fece0ff0b0bc961979182113e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_de513eedee68d282d097cfb4919d0efeca61ac6fece0ff0b0bc961979182113e->leave($__internal_de513eedee68d282d097cfb4919d0efeca61ac6fece0ff0b0bc961979182113e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_20e11eaaa1f0c7f31b4bdf1f631dbed07d603385945dc399d19cc022b70c35dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e11eaaa1f0c7f31b4bdf1f631dbed07d603385945dc399d19cc022b70c35dc->enter($__internal_20e11eaaa1f0c7f31b4bdf1f631dbed07d603385945dc399d19cc022b70c35dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_20e11eaaa1f0c7f31b4bdf1f631dbed07d603385945dc399d19cc022b70c35dc->leave($__internal_20e11eaaa1f0c7f31b4bdf1f631dbed07d603385945dc399d19cc022b70c35dc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\alfalibros\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
