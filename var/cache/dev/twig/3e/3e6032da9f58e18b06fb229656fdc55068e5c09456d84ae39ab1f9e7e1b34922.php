<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_c59a906b5b11bb9c0795043d67b1e1882c736841e53869cb57e0fa16600276bf extends Twig_Template
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
        $__internal_3fdb6e33a3c7dbd992a8bc2504cd87580122371414548c3f2820e378fb71e38c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fdb6e33a3c7dbd992a8bc2504cd87580122371414548c3f2820e378fb71e38c->enter($__internal_3fdb6e33a3c7dbd992a8bc2504cd87580122371414548c3f2820e378fb71e38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_3fdb6e33a3c7dbd992a8bc2504cd87580122371414548c3f2820e378fb71e38c->leave($__internal_3fdb6e33a3c7dbd992a8bc2504cd87580122371414548c3f2820e378fb71e38c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\alfalibros\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
