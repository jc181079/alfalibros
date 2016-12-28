<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_ab7f1592d2e354cde89457565b3a8b3a4cb75e01de5d9acd87f7c61e99dc315b extends Twig_Template
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
        $__internal_071c663361e9f96f4e77eaba78ac91bddecd00686626b9bfeb6f9fa0b047eef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_071c663361e9f96f4e77eaba78ac91bddecd00686626b9bfeb6f9fa0b047eef7->enter($__internal_071c663361e9f96f4e77eaba78ac91bddecd00686626b9bfeb6f9fa0b047eef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_071c663361e9f96f4e77eaba78ac91bddecd00686626b9bfeb6f9fa0b047eef7->leave($__internal_071c663361e9f96f4e77eaba78ac91bddecd00686626b9bfeb6f9fa0b047eef7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\alfalibros\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
