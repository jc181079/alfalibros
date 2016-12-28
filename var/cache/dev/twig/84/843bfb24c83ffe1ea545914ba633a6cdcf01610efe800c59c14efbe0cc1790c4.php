<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_b5d3ec301c49e59d04575c79f899aa6314731ae9faf27a56dafaf5e9c31b8dd7 extends Twig_Template
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
        $__internal_540d2b44a435c034f6eefed5d6aa858a58a2fe3dc6e1c7a6a9e60d01849af6cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_540d2b44a435c034f6eefed5d6aa858a58a2fe3dc6e1c7a6a9e60d01849af6cd->enter($__internal_540d2b44a435c034f6eefed5d6aa858a58a2fe3dc6e1c7a6a9e60d01849af6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_540d2b44a435c034f6eefed5d6aa858a58a2fe3dc6e1c7a6a9e60d01849af6cd->leave($__internal_540d2b44a435c034f6eefed5d6aa858a58a2fe3dc6e1c7a6a9e60d01849af6cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\alfalibros\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
