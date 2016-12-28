<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_93c09b4c2b569c4136e51cea9d64f5a6141e2f52dabacd54db15c2874c9b793d extends Twig_Template
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
        $__internal_b1fe81dc6783e18c56cd0a5eadb0628af0b69021b8245527c82ca4e3dacd52a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1fe81dc6783e18c56cd0a5eadb0628af0b69021b8245527c82ca4e3dacd52a4->enter($__internal_b1fe81dc6783e18c56cd0a5eadb0628af0b69021b8245527c82ca4e3dacd52a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_b1fe81dc6783e18c56cd0a5eadb0628af0b69021b8245527c82ca4e3dacd52a4->leave($__internal_b1fe81dc6783e18c56cd0a5eadb0628af0b69021b8245527c82ca4e3dacd52a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\alfalibros\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
