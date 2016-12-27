<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_3ea2b406f90fb12acea50dcccd19eac0b730d20ed00248ccd7b88b2b3b55aeec extends Twig_Template
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
        $__internal_d4b8772e95163a335cb05ca4c0b5d7283e97f9d7ce9b0c714ae5fc770bf0613b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4b8772e95163a335cb05ca4c0b5d7283e97f9d7ce9b0c714ae5fc770bf0613b->enter($__internal_d4b8772e95163a335cb05ca4c0b5d7283e97f9d7ce9b0c714ae5fc770bf0613b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d4b8772e95163a335cb05ca4c0b5d7283e97f9d7ce9b0c714ae5fc770bf0613b->leave($__internal_d4b8772e95163a335cb05ca4c0b5d7283e97f9d7ce9b0c714ae5fc770bf0613b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\alfalibros\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
