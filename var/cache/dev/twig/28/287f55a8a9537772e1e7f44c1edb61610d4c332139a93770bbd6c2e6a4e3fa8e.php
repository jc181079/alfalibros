<?php

/* ::base-original.html.twig */
class __TwigTemplate_7e493c880310a008ab030c204437def356ed3cbfe62ac7e082253754559f1b95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57e59bc5e6a63850b3998d12e3a2e71d24ae57f6571a59ebc083753b170c2707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57e59bc5e6a63850b3998d12e3a2e71d24ae57f6571a59ebc083753b170c2707->enter($__internal_57e59bc5e6a63850b3998d12e3a2e71d24ae57f6571a59ebc083753b170c2707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base-original.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_57e59bc5e6a63850b3998d12e3a2e71d24ae57f6571a59ebc083753b170c2707->leave($__internal_57e59bc5e6a63850b3998d12e3a2e71d24ae57f6571a59ebc083753b170c2707_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f59fac41253570a86ebdf2027bc51f4577acd70a969780d70fb13b676c86a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f59fac41253570a86ebdf2027bc51f4577acd70a969780d70fb13b676c86a62->enter($__internal_7f59fac41253570a86ebdf2027bc51f4577acd70a969780d70fb13b676c86a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7f59fac41253570a86ebdf2027bc51f4577acd70a969780d70fb13b676c86a62->leave($__internal_7f59fac41253570a86ebdf2027bc51f4577acd70a969780d70fb13b676c86a62_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_58c1dc77dee965ed20f0c0bbe726f926edd4ec55dd6331be5293e65535197960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c1dc77dee965ed20f0c0bbe726f926edd4ec55dd6331be5293e65535197960->enter($__internal_58c1dc77dee965ed20f0c0bbe726f926edd4ec55dd6331be5293e65535197960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_58c1dc77dee965ed20f0c0bbe726f926edd4ec55dd6331be5293e65535197960->leave($__internal_58c1dc77dee965ed20f0c0bbe726f926edd4ec55dd6331be5293e65535197960_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_008e2126eb187ba905be060bb2802f84e59c053924e04cecf3d72ebb76a7e97e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_008e2126eb187ba905be060bb2802f84e59c053924e04cecf3d72ebb76a7e97e->enter($__internal_008e2126eb187ba905be060bb2802f84e59c053924e04cecf3d72ebb76a7e97e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_008e2126eb187ba905be060bb2802f84e59c053924e04cecf3d72ebb76a7e97e->leave($__internal_008e2126eb187ba905be060bb2802f84e59c053924e04cecf3d72ebb76a7e97e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eb917080475d7fa32aed79a2b20dc370def2fa97c4b468ebf6ee7f424b566668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb917080475d7fa32aed79a2b20dc370def2fa97c4b468ebf6ee7f424b566668->enter($__internal_eb917080475d7fa32aed79a2b20dc370def2fa97c4b468ebf6ee7f424b566668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_eb917080475d7fa32aed79a2b20dc370def2fa97c4b468ebf6ee7f424b566668->leave($__internal_eb917080475d7fa32aed79a2b20dc370def2fa97c4b468ebf6ee7f424b566668_prof);

    }

    public function getTemplateName()
    {
        return "::base-original.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base-original.html.twig", "C:\\xampp\\htdocs\\alfalibros\\app/Resources\\views/base-original.html.twig");
    }
}
