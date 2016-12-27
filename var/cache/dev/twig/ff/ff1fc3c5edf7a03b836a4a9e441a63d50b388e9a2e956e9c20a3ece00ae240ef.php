<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_7c2e5ef7b45b69286f1ed845c948fe6022952040dc60af7206e424d015a04c04 extends Twig_Template
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
        $__internal_bf284f47dae77812a08db8132b96546ad0a1798021d3fa6e054dd5abc937782c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf284f47dae77812a08db8132b96546ad0a1798021d3fa6e054dd5abc937782c->enter($__internal_bf284f47dae77812a08db8132b96546ad0a1798021d3fa6e054dd5abc937782c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_bf284f47dae77812a08db8132b96546ad0a1798021d3fa6e054dd5abc937782c->leave($__internal_bf284f47dae77812a08db8132b96546ad0a1798021d3fa6e054dd5abc937782c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\xampp\\htdocs\\alfalibros\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
