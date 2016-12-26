<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_562421d76a7651b22cf8291d64198037522e9ab4094e404ecd000a702e609482 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_ab5debcfafe23604d2d1b4f47c2cc016f7091b68141e5befef7735348c304db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab5debcfafe23604d2d1b4f47c2cc016f7091b68141e5befef7735348c304db4->enter($__internal_ab5debcfafe23604d2d1b4f47c2cc016f7091b68141e5befef7735348c304db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab5debcfafe23604d2d1b4f47c2cc016f7091b68141e5befef7735348c304db4->leave($__internal_ab5debcfafe23604d2d1b4f47c2cc016f7091b68141e5befef7735348c304db4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b1dba573cf383802a2dfe3ff8dd39d95be83b061ec59f9a05deaa5a6151298f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1dba573cf383802a2dfe3ff8dd39d95be83b061ec59f9a05deaa5a6151298f2->enter($__internal_b1dba573cf383802a2dfe3ff8dd39d95be83b061ec59f9a05deaa5a6151298f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b1dba573cf383802a2dfe3ff8dd39d95be83b061ec59f9a05deaa5a6151298f2->leave($__internal_b1dba573cf383802a2dfe3ff8dd39d95be83b061ec59f9a05deaa5a6151298f2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c9ae0aa44b0f071941fb0e8621793b6150dff624e3f3e6f863e3712ec6812a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9ae0aa44b0f071941fb0e8621793b6150dff624e3f3e6f863e3712ec6812a4->enter($__internal_1c9ae0aa44b0f071941fb0e8621793b6150dff624e3f3e6f863e3712ec6812a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1c9ae0aa44b0f071941fb0e8621793b6150dff624e3f3e6f863e3712ec6812a4->leave($__internal_1c9ae0aa44b0f071941fb0e8621793b6150dff624e3f3e6f863e3712ec6812a4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_27ded03e119287ac1b60779df8ed1e8cbc3c311332ceb00911c552c1553ee234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ded03e119287ac1b60779df8ed1e8cbc3c311332ceb00911c552c1553ee234->enter($__internal_27ded03e119287ac1b60779df8ed1e8cbc3c311332ceb00911c552c1553ee234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_27ded03e119287ac1b60779df8ed1e8cbc3c311332ceb00911c552c1553ee234->leave($__internal_27ded03e119287ac1b60779df8ed1e8cbc3c311332ceb00911c552c1553ee234_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\alfalibros\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
