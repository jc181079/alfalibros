<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_029de8aac6cb57f81db1167eda07d0ebdcafad9e472e6c738beed6c0ed2f1978 extends Twig_Template
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
        $__internal_3ef357fcdd9bd4bc3f4b558f4cf4d2ace1213f5b4cfc5039c0df30beb1479cda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef357fcdd9bd4bc3f4b558f4cf4d2ace1213f5b4cfc5039c0df30beb1479cda->enter($__internal_3ef357fcdd9bd4bc3f4b558f4cf4d2ace1213f5b4cfc5039c0df30beb1479cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_3ef357fcdd9bd4bc3f4b558f4cf4d2ace1213f5b4cfc5039c0df30beb1479cda->leave($__internal_3ef357fcdd9bd4bc3f4b558f4cf4d2ace1213f5b4cfc5039c0df30beb1479cda_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\alfalibros\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
