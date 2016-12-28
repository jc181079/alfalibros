<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_1feab114b3ca82e636b25453eda1d73600ac37521d5ad7d94e2b00d5063dae35 extends Twig_Template
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
        $__internal_caf2f6110165b5097cc6de64b2b4ac58b9c7fc02026d725d5de01ce90ecc9af4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf2f6110165b5097cc6de64b2b4ac58b9c7fc02026d725d5de01ce90ecc9af4->enter($__internal_caf2f6110165b5097cc6de64b2b4ac58b9c7fc02026d725d5de01ce90ecc9af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_caf2f6110165b5097cc6de64b2b4ac58b9c7fc02026d725d5de01ce90ecc9af4->leave($__internal_caf2f6110165b5097cc6de64b2b4ac58b9c7fc02026d725d5de01ce90ecc9af4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\alfalibros\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
