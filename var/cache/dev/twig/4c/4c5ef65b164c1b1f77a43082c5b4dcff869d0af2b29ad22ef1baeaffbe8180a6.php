<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_b69ccc6025c5703dd947b769a2f853c514d559e8d7b0cc9e316a4501dd3840b9 extends Twig_Template
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
        $__internal_31795d34fce50ef9413fb517d4bbba5fe7763ec23415725b6ba16ecdabdc8e54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31795d34fce50ef9413fb517d4bbba5fe7763ec23415725b6ba16ecdabdc8e54->enter($__internal_31795d34fce50ef9413fb517d4bbba5fe7763ec23415725b6ba16ecdabdc8e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_31795d34fce50ef9413fb517d4bbba5fe7763ec23415725b6ba16ecdabdc8e54->leave($__internal_31795d34fce50ef9413fb517d4bbba5fe7763ec23415725b6ba16ecdabdc8e54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\alfalibros\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
