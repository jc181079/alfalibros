<?php

/* :phpposemployees:new.html.twig */
class __TwigTemplate_a63df1f3a82c8633da1886cd133a6ce9ff79a0fb3df27888645768672c89435f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":phpposemployees:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d7786b43d0beedb5e38f3a1da398c90db8169847b3f3f1858a7ccd5d431dae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d7786b43d0beedb5e38f3a1da398c90db8169847b3f3f1858a7ccd5d431dae8->enter($__internal_0d7786b43d0beedb5e38f3a1da398c90db8169847b3f3f1858a7ccd5d431dae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":phpposemployees:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d7786b43d0beedb5e38f3a1da398c90db8169847b3f3f1858a7ccd5d431dae8->leave($__internal_0d7786b43d0beedb5e38f3a1da398c90db8169847b3f3f1858a7ccd5d431dae8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_24521218292852be8bdbbf1125ff034a8b4b520815362ac3ade5dbec7498e414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24521218292852be8bdbbf1125ff034a8b4b520815362ac3ade5dbec7498e414->enter($__internal_24521218292852be8bdbbf1125ff034a8b4b520815362ac3ade5dbec7498e414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Phpposemployee creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("phpposemployees_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_24521218292852be8bdbbf1125ff034a8b4b520815362ac3ade5dbec7498e414->leave($__internal_24521218292852be8bdbbf1125ff034a8b4b520815362ac3ade5dbec7498e414_prof);

    }

    public function getTemplateName()
    {
        return ":phpposemployees:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Phpposemployee creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('phpposemployees_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":phpposemployees:new.html.twig", "C:\\xampp\\htdocs\\alfalibros\\app/Resources\\views/phpposemployees/new.html.twig");
    }
}
