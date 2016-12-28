<?php

/* phpposemployees/new.html.twig */
class __TwigTemplate_a960299647a8b54a9e6dc69fd067976937ad2a08341d9f10cd0edd2b75b0184f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "phpposemployees/new.html.twig", 1);
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
        $__internal_2025c69af7a2a530a8ccc91bba6aae6bfca43b39c003f516fea4c9ae453b83f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2025c69af7a2a530a8ccc91bba6aae6bfca43b39c003f516fea4c9ae453b83f1->enter($__internal_2025c69af7a2a530a8ccc91bba6aae6bfca43b39c003f516fea4c9ae453b83f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "phpposemployees/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2025c69af7a2a530a8ccc91bba6aae6bfca43b39c003f516fea4c9ae453b83f1->leave($__internal_2025c69af7a2a530a8ccc91bba6aae6bfca43b39c003f516fea4c9ae453b83f1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_87eee30f609e58dd3e56d4f55aa169e6aadbf55094f362bff1806bd14675e2ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87eee30f609e58dd3e56d4f55aa169e6aadbf55094f362bff1806bd14675e2ce->enter($__internal_87eee30f609e58dd3e56d4f55aa169e6aadbf55094f362bff1806bd14675e2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_87eee30f609e58dd3e56d4f55aa169e6aadbf55094f362bff1806bd14675e2ce->leave($__internal_87eee30f609e58dd3e56d4f55aa169e6aadbf55094f362bff1806bd14675e2ce_prof);

    }

    public function getTemplateName()
    {
        return "phpposemployees/new.html.twig";
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
", "phpposemployees/new.html.twig", "C:\\xampp\\htdocs\\alfalibros\\app\\Resources\\views\\phpposemployees\\new.html.twig");
    }
}
