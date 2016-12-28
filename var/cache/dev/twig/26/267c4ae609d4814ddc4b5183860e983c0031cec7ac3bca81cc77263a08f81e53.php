<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_cab4c51e622ded6c21b828564287e697aa72340c7957e1aa45e50e761eb4e655 extends Twig_Template
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
        $__internal_cab5d7e9daa9ec3bb3e6fde38e017c97e238b7eb92a02181c3282bfc568e220b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab5d7e9daa9ec3bb3e6fde38e017c97e238b7eb92a02181c3282bfc568e220b->enter($__internal_cab5d7e9daa9ec3bb3e6fde38e017c97e238b7eb92a02181c3282bfc568e220b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_cab5d7e9daa9ec3bb3e6fde38e017c97e238b7eb92a02181c3282bfc568e220b->leave($__internal_cab5d7e9daa9ec3bb3e6fde38e017c97e238b7eb92a02181c3282bfc568e220b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\alfalibros\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
