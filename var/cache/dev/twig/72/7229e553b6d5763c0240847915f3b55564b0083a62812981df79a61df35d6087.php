<?php

/* phppospeople/edit.html.twig */
class __TwigTemplate_1ed72d2ca2d00112020378252662a1bd2438216527a8e8dda7654ebeddd131dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "phppospeople/edit.html.twig", 1);
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
        $__internal_078bc1cb40b894d9d8f623ba06202819aa94f4b9ceba99bd622f47c6e6a8bb56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_078bc1cb40b894d9d8f623ba06202819aa94f4b9ceba99bd622f47c6e6a8bb56->enter($__internal_078bc1cb40b894d9d8f623ba06202819aa94f4b9ceba99bd622f47c6e6a8bb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "phppospeople/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_078bc1cb40b894d9d8f623ba06202819aa94f4b9ceba99bd622f47c6e6a8bb56->leave($__internal_078bc1cb40b894d9d8f623ba06202819aa94f4b9ceba99bd622f47c6e6a8bb56_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1878c0fc843624b8acffaed6cb75e7df4e633b3defc7329e429da745280e5a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1878c0fc843624b8acffaed6cb75e7df4e633b3defc7329e429da745280e5a53->enter($__internal_1878c0fc843624b8acffaed6cb75e7df4e633b3defc7329e429da745280e5a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Phpposperson edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("phppospeople_index");
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
        
        $__internal_1878c0fc843624b8acffaed6cb75e7df4e633b3defc7329e429da745280e5a53->leave($__internal_1878c0fc843624b8acffaed6cb75e7df4e633b3defc7329e429da745280e5a53_prof);

    }

    public function getTemplateName()
    {
        return "phppospeople/edit.html.twig";
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
    <h1>Phpposperson edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('phppospeople_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "phppospeople/edit.html.twig", "C:\\xampp\\htdocs\\alfalibros\\app\\Resources\\views\\phppospeople\\edit.html.twig");
    }
}
