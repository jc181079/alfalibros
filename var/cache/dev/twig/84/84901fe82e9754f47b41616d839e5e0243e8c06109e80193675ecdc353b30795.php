<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_539c900b7e905da1e06cb765686a552cb526382cac73b889be9dac577fd28b43 extends Twig_Template
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
        $__internal_8882eee3b9acf0f2da80edcad737cd10528da1e6e7fcd580ceb7d3cd308d8ebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8882eee3b9acf0f2da80edcad737cd10528da1e6e7fcd580ceb7d3cd308d8ebc->enter($__internal_8882eee3b9acf0f2da80edcad737cd10528da1e6e7fcd580ceb7d3cd308d8ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8882eee3b9acf0f2da80edcad737cd10528da1e6e7fcd580ceb7d3cd308d8ebc->leave($__internal_8882eee3b9acf0f2da80edcad737cd10528da1e6e7fcd580ceb7d3cd308d8ebc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\alfalibros\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
