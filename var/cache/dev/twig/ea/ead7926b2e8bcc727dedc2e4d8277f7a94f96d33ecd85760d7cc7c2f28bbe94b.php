<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7b8d992e0044cc7d3a8d2d8755987f6337ec2ac3cf9e8eaa4bdbc8b6aa85b1c5 extends Twig_Template
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
        $__internal_710b3f29e9bd7e43116382f9d9abd83aa8bdcd8188f6d144352501b15fc0bd49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_710b3f29e9bd7e43116382f9d9abd83aa8bdcd8188f6d144352501b15fc0bd49->enter($__internal_710b3f29e9bd7e43116382f9d9abd83aa8bdcd8188f6d144352501b15fc0bd49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_710b3f29e9bd7e43116382f9d9abd83aa8bdcd8188f6d144352501b15fc0bd49->leave($__internal_710b3f29e9bd7e43116382f9d9abd83aa8bdcd8188f6d144352501b15fc0bd49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\alfalibros\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
