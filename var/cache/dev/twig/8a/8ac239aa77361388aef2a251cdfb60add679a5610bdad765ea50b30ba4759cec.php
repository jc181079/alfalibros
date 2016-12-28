<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_1e3d5e6084cd4022c5cdfe9843e0598d4522bbeeb46f4828fcbbaa7e68f22ade extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00fb4242f1e932e414e70db13bb33f737b76aee5c5b05a50b154cc21f45b93f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00fb4242f1e932e414e70db13bb33f737b76aee5c5b05a50b154cc21f45b93f0->enter($__internal_00fb4242f1e932e414e70db13bb33f737b76aee5c5b05a50b154cc21f45b93f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00fb4242f1e932e414e70db13bb33f737b76aee5c5b05a50b154cc21f45b93f0->leave($__internal_00fb4242f1e932e414e70db13bb33f737b76aee5c5b05a50b154cc21f45b93f0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_056c823dcd2cd25d2b712b7470ddfc82bd50ce501675cf5e562c4cebc65d874b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_056c823dcd2cd25d2b712b7470ddfc82bd50ce501675cf5e562c4cebc65d874b->enter($__internal_056c823dcd2cd25d2b712b7470ddfc82bd50ce501675cf5e562c4cebc65d874b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_056c823dcd2cd25d2b712b7470ddfc82bd50ce501675cf5e562c4cebc65d874b->leave($__internal_056c823dcd2cd25d2b712b7470ddfc82bd50ce501675cf5e562c4cebc65d874b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0dadeaa7a186733e75f89c9d7b5c42e91a0cec6b8298b7674b13e1fd96078c2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dadeaa7a186733e75f89c9d7b5c42e91a0cec6b8298b7674b13e1fd96078c2e->enter($__internal_0dadeaa7a186733e75f89c9d7b5c42e91a0cec6b8298b7674b13e1fd96078c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0dadeaa7a186733e75f89c9d7b5c42e91a0cec6b8298b7674b13e1fd96078c2e->leave($__internal_0dadeaa7a186733e75f89c9d7b5c42e91a0cec6b8298b7674b13e1fd96078c2e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac061a92f2dbe17b352a45787f38a7e1b747d848afe3ce0d55f3dd40f3ddab03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac061a92f2dbe17b352a45787f38a7e1b747d848afe3ce0d55f3dd40f3ddab03->enter($__internal_ac061a92f2dbe17b352a45787f38a7e1b747d848afe3ce0d55f3dd40f3ddab03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ac061a92f2dbe17b352a45787f38a7e1b747d848afe3ce0d55f3dd40f3ddab03->leave($__internal_ac061a92f2dbe17b352a45787f38a7e1b747d848afe3ce0d55f3dd40f3ddab03_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\alfalibros\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
