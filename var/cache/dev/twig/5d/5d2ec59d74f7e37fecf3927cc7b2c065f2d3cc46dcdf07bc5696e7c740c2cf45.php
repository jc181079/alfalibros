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
        $__internal_3bc20eade6aae4a565b228a62f8b7337a451ee8ab649408774b5f4bcbc8a3100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bc20eade6aae4a565b228a62f8b7337a451ee8ab649408774b5f4bcbc8a3100->enter($__internal_3bc20eade6aae4a565b228a62f8b7337a451ee8ab649408774b5f4bcbc8a3100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":phpposemployees:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bc20eade6aae4a565b228a62f8b7337a451ee8ab649408774b5f4bcbc8a3100->leave($__internal_3bc20eade6aae4a565b228a62f8b7337a451ee8ab649408774b5f4bcbc8a3100_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_62257a88522b2d40cbd1909815932cc8e1ccc163da25217cdf160d51c63b514a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62257a88522b2d40cbd1909815932cc8e1ccc163da25217cdf160d51c63b514a->enter($__internal_62257a88522b2d40cbd1909815932cc8e1ccc163da25217cdf160d51c63b514a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_62257a88522b2d40cbd1909815932cc8e1ccc163da25217cdf160d51c63b514a->leave($__internal_62257a88522b2d40cbd1909815932cc8e1ccc163da25217cdf160d51c63b514a_prof);

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
