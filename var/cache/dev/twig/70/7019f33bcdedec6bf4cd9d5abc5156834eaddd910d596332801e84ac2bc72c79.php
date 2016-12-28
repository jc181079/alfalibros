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
        $__internal_5cf3e30486281ee589590bfe659e58b848b1ecd61bddb70bb5ad1a758cd3921d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf3e30486281ee589590bfe659e58b848b1ecd61bddb70bb5ad1a758cd3921d->enter($__internal_5cf3e30486281ee589590bfe659e58b848b1ecd61bddb70bb5ad1a758cd3921d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5cf3e30486281ee589590bfe659e58b848b1ecd61bddb70bb5ad1a758cd3921d->leave($__internal_5cf3e30486281ee589590bfe659e58b848b1ecd61bddb70bb5ad1a758cd3921d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ac1006de1400669106ffdd81224fa553a31a60a775d00b01cfcd61f630ef08d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ac1006de1400669106ffdd81224fa553a31a60a775d00b01cfcd61f630ef08d->enter($__internal_4ac1006de1400669106ffdd81224fa553a31a60a775d00b01cfcd61f630ef08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4ac1006de1400669106ffdd81224fa553a31a60a775d00b01cfcd61f630ef08d->leave($__internal_4ac1006de1400669106ffdd81224fa553a31a60a775d00b01cfcd61f630ef08d_prof);

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
