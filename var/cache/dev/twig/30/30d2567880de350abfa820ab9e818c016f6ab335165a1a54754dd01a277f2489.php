<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_484efdfdf27ddcfc0b243a0edf7e61c112de5b5d17d23075d5a8c92755ea8dfb extends Twig_Template
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
        $__internal_1f500df8d61a0fc6e15a2c3d2f39dc680ec59e1cdaa3d0cafd56589e3e589893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f500df8d61a0fc6e15a2c3d2f39dc680ec59e1cdaa3d0cafd56589e3e589893->enter($__internal_1f500df8d61a0fc6e15a2c3d2f39dc680ec59e1cdaa3d0cafd56589e3e589893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_1f500df8d61a0fc6e15a2c3d2f39dc680ec59e1cdaa3d0cafd56589e3e589893->leave($__internal_1f500df8d61a0fc6e15a2c3d2f39dc680ec59e1cdaa3d0cafd56589e3e589893_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\alfalibros\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
