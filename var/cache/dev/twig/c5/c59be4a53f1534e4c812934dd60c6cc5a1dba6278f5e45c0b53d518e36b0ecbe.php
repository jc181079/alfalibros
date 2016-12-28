<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_206a6cc1590080d69497cf92f2dd400aee05a0eef400e2736abe9ed16fecb148 extends Twig_Template
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
        $__internal_9bd5a1d20c55884432e1b1d35fe73f54517f7f3875e39b6228fd9f6882b2e1cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bd5a1d20c55884432e1b1d35fe73f54517f7f3875e39b6228fd9f6882b2e1cf->enter($__internal_9bd5a1d20c55884432e1b1d35fe73f54517f7f3875e39b6228fd9f6882b2e1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_9bd5a1d20c55884432e1b1d35fe73f54517f7f3875e39b6228fd9f6882b2e1cf->leave($__internal_9bd5a1d20c55884432e1b1d35fe73f54517f7f3875e39b6228fd9f6882b2e1cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\alfalibros\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
