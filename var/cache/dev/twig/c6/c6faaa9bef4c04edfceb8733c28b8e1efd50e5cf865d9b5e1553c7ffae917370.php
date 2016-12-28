<?php

/* phpposemployees/edit.html.twig */
class __TwigTemplate_b7916a9ce522d691f8f348081a6816da6b58c21e4c2054c2d18eb521d123afdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "phpposemployees/edit.html.twig", 1);
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
        $__internal_960a51ee8775ff848be104542751e5be077da32ec5ca39b9a2bcaa8011b2dd6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960a51ee8775ff848be104542751e5be077da32ec5ca39b9a2bcaa8011b2dd6e->enter($__internal_960a51ee8775ff848be104542751e5be077da32ec5ca39b9a2bcaa8011b2dd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "phpposemployees/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_960a51ee8775ff848be104542751e5be077da32ec5ca39b9a2bcaa8011b2dd6e->leave($__internal_960a51ee8775ff848be104542751e5be077da32ec5ca39b9a2bcaa8011b2dd6e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ab7c9fb9a63e71c3928258cfdc33eeb25dbbfcaac40fbe5aefb32e72a601ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab7c9fb9a63e71c3928258cfdc33eeb25dbbfcaac40fbe5aefb32e72a601ba8->enter($__internal_2ab7c9fb9a63e71c3928258cfdc33eeb25dbbfcaac40fbe5aefb32e72a601ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Phpposemployee edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("phpposemployees_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_2ab7c9fb9a63e71c3928258cfdc33eeb25dbbfcaac40fbe5aefb32e72a601ba8->leave($__internal_2ab7c9fb9a63e71c3928258cfdc33eeb25dbbfcaac40fbe5aefb32e72a601ba8_prof);

    }

    public function getTemplateName()
    {
        return "phpposemployees/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Phpposemployee edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('phpposemployees_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "phpposemployees/edit.html.twig", "C:\\xampp\\htdocs\\alfalibros\\app\\Resources\\views\\phpposemployees\\edit.html.twig");
    }
}
