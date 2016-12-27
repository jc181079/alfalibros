<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_850deba423749dfb392adb61f6fc6e57fcf2ea3ea9a5b0dfdc18c442aa62becc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c47cd8675b21ee0b811108f7dc80c518c60b4c7f5cc0801b0c4ed065df41fc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c47cd8675b21ee0b811108f7dc80c518c60b4c7f5cc0801b0c4ed065df41fc7->enter($__internal_5c47cd8675b21ee0b811108f7dc80c518c60b4c7f5cc0801b0c4ed065df41fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5c47cd8675b21ee0b811108f7dc80c518c60b4c7f5cc0801b0c4ed065df41fc7->leave($__internal_5c47cd8675b21ee0b811108f7dc80c518c60b4c7f5cc0801b0c4ed065df41fc7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\alfalibros\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
