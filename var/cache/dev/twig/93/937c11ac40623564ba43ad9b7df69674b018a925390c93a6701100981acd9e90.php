<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_346c5eebd3437b7b0e49a5af1b93c509fa13069816f602ea7960a9d2b8c6b6f9 extends Twig_Template
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
        $__internal_f18a404cdf63e7e8d09a6e89a4ec0122cf3d1228cf02455ccbae8a2adf3f6754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f18a404cdf63e7e8d09a6e89a4ec0122cf3d1228cf02455ccbae8a2adf3f6754->enter($__internal_f18a404cdf63e7e8d09a6e89a4ec0122cf3d1228cf02455ccbae8a2adf3f6754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f18a404cdf63e7e8d09a6e89a4ec0122cf3d1228cf02455ccbae8a2adf3f6754->leave($__internal_f18a404cdf63e7e8d09a6e89a4ec0122cf3d1228cf02455ccbae8a2adf3f6754_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\alfalibros\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
