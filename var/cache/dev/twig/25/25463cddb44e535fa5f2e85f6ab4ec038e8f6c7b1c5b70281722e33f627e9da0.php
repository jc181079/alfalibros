<?php

/* ::info.html.twig */
class __TwigTemplate_5829043495787b7863680819582895395ec327772fe25b6f045e085d7fe8a89f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'info' => array($this, 'block_info'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f188d64ef54191f3280422738148fcde7ad3138dd8153058e4d373f4adfffa9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f188d64ef54191f3280422738148fcde7ad3138dd8153058e4d373f4adfffa9b->enter($__internal_f188d64ef54191f3280422738148fcde7ad3138dd8153058e4d373f4adfffa9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::info.html.twig"));

        // line 1
        $this->displayBlock('info', $context, $blocks);
        
        $__internal_f188d64ef54191f3280422738148fcde7ad3138dd8153058e4d373f4adfffa9b->leave($__internal_f188d64ef54191f3280422738148fcde7ad3138dd8153058e4d373f4adfffa9b_prof);

    }

    public function block_info($context, array $blocks = array())
    {
        $__internal_a223ea0843d7bcf1050bf5917a3ac4f1a67198125b625c1d37185a62c4819c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a223ea0843d7bcf1050bf5917a3ac4f1a67198125b625c1d37185a62c4819c26->enter($__internal_a223ea0843d7bcf1050bf5917a3ac4f1a67198125b625c1d37185a62c4819c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "info"));

        // line 2
        echo "
    \t<div class=\"row\">
    \t\t<div class=\"w3-col m3\">
    \t\t\t<div class=\"w3-card-2 w3-round w3-white\">
        \t\t\t<div class=\"w3-container\">
        
         \t\t\t\t<p class=\"w3-center\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/images/logo.png"), "html", null, true);
        echo "\" class=\"w3-circle\" alt=\"Avatar\"></p>
         \t\t\t\t<hr>
         \t\t\t\t<p><i class=\"fa fa-pencil fa-fw w3-margin-right w3-text-theme\"></i> Ciudad Bolivar</p>
         \t\t\t\t<p><i class=\"fa fa-home fa-fw w3-margin-right w3-text-theme\"></i> Paseo Heres</p>
         \t\t\t\t<p><i class=\"fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme\"></i> Tel: 0285-66666668</p>
        \t\t\t</div>
      \t\t\t</div>
    \t\t</div>
    \t</div>
   
";
        
        $__internal_a223ea0843d7bcf1050bf5917a3ac4f1a67198125b625c1d37185a62c4819c26->leave($__internal_a223ea0843d7bcf1050bf5917a3ac4f1a67198125b625c1d37185a62c4819c26_prof);

    }

    public function getTemplateName()
    {
        return "::info.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block info %}

    \t<div class=\"row\">
    \t\t<div class=\"w3-col m3\">
    \t\t\t<div class=\"w3-card-2 w3-round w3-white\">
        \t\t\t<div class=\"w3-container\">
        
         \t\t\t\t<p class=\"w3-center\"><img src=\"{{ asset('public/images/logo.png')}}\" class=\"w3-circle\" alt=\"Avatar\"></p>
         \t\t\t\t<hr>
         \t\t\t\t<p><i class=\"fa fa-pencil fa-fw w3-margin-right w3-text-theme\"></i> Ciudad Bolivar</p>
         \t\t\t\t<p><i class=\"fa fa-home fa-fw w3-margin-right w3-text-theme\"></i> Paseo Heres</p>
         \t\t\t\t<p><i class=\"fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme\"></i> Tel: 0285-66666668</p>
        \t\t\t</div>
      \t\t\t</div>
    \t\t</div>
    \t</div>
   
{% endblock %}", "::info.html.twig", "C:\\xampp\\htdocs\\alfalibros\\app/Resources\\views/info.html.twig");
    }
}
