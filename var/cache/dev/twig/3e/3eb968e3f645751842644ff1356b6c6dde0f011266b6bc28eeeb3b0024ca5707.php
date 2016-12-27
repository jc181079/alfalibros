<?php

/* :phppospeople:new.html.twig */
class __TwigTemplate_09aaf1c97551db76b74144f156646c7d064456ca41be547b6c8131c150cf960e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":phppospeople:new.html.twig", 1);
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
        $__internal_9238405502fbd5ce26b98fb4612244864c238468f6e5cc61fcefe7a5a9579f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9238405502fbd5ce26b98fb4612244864c238468f6e5cc61fcefe7a5a9579f1e->enter($__internal_9238405502fbd5ce26b98fb4612244864c238468f6e5cc61fcefe7a5a9579f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":phppospeople:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9238405502fbd5ce26b98fb4612244864c238468f6e5cc61fcefe7a5a9579f1e->leave($__internal_9238405502fbd5ce26b98fb4612244864c238468f6e5cc61fcefe7a5a9579f1e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0bb6fa00cf78a795703ec443b8e110f09073f4e62f1fd55ab6a728105a628db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0bb6fa00cf78a795703ec443b8e110f09073f4e62f1fd55ab6a728105a628db->enter($__internal_d0bb6fa00cf78a795703ec443b8e110f09073f4e62f1fd55ab6a728105a628db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d0bb6fa00cf78a795703ec443b8e110f09073f4e62f1fd55ab6a728105a628db->leave($__internal_d0bb6fa00cf78a795703ec443b8e110f09073f4e62f1fd55ab6a728105a628db_prof);

    }

    public function getTemplateName()
    {
        return ":phppospeople:new.html.twig";
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
", ":phppospeople:new.html.twig", "C:\\xampp\\htdocs\\alfalibros\\app/Resources\\views/phppospeople/new.html.twig");
    }
}
