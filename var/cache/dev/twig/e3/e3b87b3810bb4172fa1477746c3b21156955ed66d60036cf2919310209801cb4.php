<?php

/* phppospeople/new.html.twig */
class __TwigTemplate_900076699f8258b798767d2bfc27cd8e2bd9200f8db057a507c09391dc8db47b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "phppospeople/new.html.twig", 1);
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
        $__internal_eb34363afe8900611e2444a33fe6a3fbc44d326fad3a21b311156aa7db9bb61b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb34363afe8900611e2444a33fe6a3fbc44d326fad3a21b311156aa7db9bb61b->enter($__internal_eb34363afe8900611e2444a33fe6a3fbc44d326fad3a21b311156aa7db9bb61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "phppospeople/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb34363afe8900611e2444a33fe6a3fbc44d326fad3a21b311156aa7db9bb61b->leave($__internal_eb34363afe8900611e2444a33fe6a3fbc44d326fad3a21b311156aa7db9bb61b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_49300b339cb1b7dc38486b07e5171967ec700017174437cd840f7e30c9f56a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49300b339cb1b7dc38486b07e5171967ec700017174437cd840f7e30c9f56a06->enter($__internal_49300b339cb1b7dc38486b07e5171967ec700017174437cd840f7e30c9f56a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Phpposperson creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("phppospeople_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_49300b339cb1b7dc38486b07e5171967ec700017174437cd840f7e30c9f56a06->leave($__internal_49300b339cb1b7dc38486b07e5171967ec700017174437cd840f7e30c9f56a06_prof);

    }

    public function getTemplateName()
    {
        return "phppospeople/new.html.twig";
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
    <h1>Phpposperson creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('phppospeople_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "phppospeople/new.html.twig", "C:\\xampp\\htdocs\\alfalibros\\app\\Resources\\views\\phppospeople\\new.html.twig");
    }
}
