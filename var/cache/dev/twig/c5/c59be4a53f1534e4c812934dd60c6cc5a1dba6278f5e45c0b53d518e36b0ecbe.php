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
        $__internal_951501a8605a78a2b1e6f362ccb462299afae7b3d9a974c9eddb88b18996df77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_951501a8605a78a2b1e6f362ccb462299afae7b3d9a974c9eddb88b18996df77->enter($__internal_951501a8605a78a2b1e6f362ccb462299afae7b3d9a974c9eddb88b18996df77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_951501a8605a78a2b1e6f362ccb462299afae7b3d9a974c9eddb88b18996df77->leave($__internal_951501a8605a78a2b1e6f362ccb462299afae7b3d9a974c9eddb88b18996df77_prof);

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
