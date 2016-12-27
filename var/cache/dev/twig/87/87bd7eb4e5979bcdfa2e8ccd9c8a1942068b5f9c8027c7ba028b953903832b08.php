<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_41f713e2d8f369d39ba73d86a3e714c34fe80d031d4f1da425bc5ee995a76218 extends Twig_Template
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
        $__internal_7bbb2bd2ea024f4e8f4fc9ede4323dcb94cad455f7a48a80aadcdfeb1b48887f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bbb2bd2ea024f4e8f4fc9ede4323dcb94cad455f7a48a80aadcdfeb1b48887f->enter($__internal_7bbb2bd2ea024f4e8f4fc9ede4323dcb94cad455f7a48a80aadcdfeb1b48887f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_7bbb2bd2ea024f4e8f4fc9ede4323dcb94cad455f7a48a80aadcdfeb1b48887f->leave($__internal_7bbb2bd2ea024f4e8f4fc9ede4323dcb94cad455f7a48a80aadcdfeb1b48887f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\xampp\\htdocs\\alfalibros\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
