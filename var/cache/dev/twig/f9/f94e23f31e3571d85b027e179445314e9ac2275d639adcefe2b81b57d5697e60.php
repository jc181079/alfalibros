<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_4eb3095df69edff75f2f8bc68f2d88ad9659b0d8367219e2f9ee72715518236e extends Twig_Template
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
        $__internal_0c4a2b218f907d047171f98c0d5d108c1afab0d6e803eb29bd19e95a50e35dc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c4a2b218f907d047171f98c0d5d108c1afab0d6e803eb29bd19e95a50e35dc9->enter($__internal_0c4a2b218f907d047171f98c0d5d108c1afab0d6e803eb29bd19e95a50e35dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_0c4a2b218f907d047171f98c0d5d108c1afab0d6e803eb29bd19e95a50e35dc9->leave($__internal_0c4a2b218f907d047171f98c0d5d108c1afab0d6e803eb29bd19e95a50e35dc9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\alfalibros\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
