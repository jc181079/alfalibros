<?php

/* ::base-original.html.twig */
class __TwigTemplate_7e493c880310a008ab030c204437def356ed3cbfe62ac7e082253754559f1b95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_064f80f9fe7e60214a0ec0114e825c397e543cd01b45c93d2d1aac704b34ac54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_064f80f9fe7e60214a0ec0114e825c397e543cd01b45c93d2d1aac704b34ac54->enter($__internal_064f80f9fe7e60214a0ec0114e825c397e543cd01b45c93d2d1aac704b34ac54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base-original.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_064f80f9fe7e60214a0ec0114e825c397e543cd01b45c93d2d1aac704b34ac54->leave($__internal_064f80f9fe7e60214a0ec0114e825c397e543cd01b45c93d2d1aac704b34ac54_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c88f02446eb0b5dfd3e4d26598b04138e41b1a2003df63febeb213a0d6e6ce03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c88f02446eb0b5dfd3e4d26598b04138e41b1a2003df63febeb213a0d6e6ce03->enter($__internal_c88f02446eb0b5dfd3e4d26598b04138e41b1a2003df63febeb213a0d6e6ce03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c88f02446eb0b5dfd3e4d26598b04138e41b1a2003df63febeb213a0d6e6ce03->leave($__internal_c88f02446eb0b5dfd3e4d26598b04138e41b1a2003df63febeb213a0d6e6ce03_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_40b4be490d5fa66282adf26d8249a06d8a1a937569adba4e45a8a35dd8bfe5f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40b4be490d5fa66282adf26d8249a06d8a1a937569adba4e45a8a35dd8bfe5f9->enter($__internal_40b4be490d5fa66282adf26d8249a06d8a1a937569adba4e45a8a35dd8bfe5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_40b4be490d5fa66282adf26d8249a06d8a1a937569adba4e45a8a35dd8bfe5f9->leave($__internal_40b4be490d5fa66282adf26d8249a06d8a1a937569adba4e45a8a35dd8bfe5f9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0857df919922db1c290c7793386afe04dcc31ec234c62a250fd4cd120282d82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0857df919922db1c290c7793386afe04dcc31ec234c62a250fd4cd120282d82->enter($__internal_c0857df919922db1c290c7793386afe04dcc31ec234c62a250fd4cd120282d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c0857df919922db1c290c7793386afe04dcc31ec234c62a250fd4cd120282d82->leave($__internal_c0857df919922db1c290c7793386afe04dcc31ec234c62a250fd4cd120282d82_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_12d655db1fb04c1f2534b92f6a0f7aaf408557c366b83d44f596ec2257d41905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12d655db1fb04c1f2534b92f6a0f7aaf408557c366b83d44f596ec2257d41905->enter($__internal_12d655db1fb04c1f2534b92f6a0f7aaf408557c366b83d44f596ec2257d41905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_12d655db1fb04c1f2534b92f6a0f7aaf408557c366b83d44f596ec2257d41905->leave($__internal_12d655db1fb04c1f2534b92f6a0f7aaf408557c366b83d44f596ec2257d41905_prof);

    }

    public function getTemplateName()
    {
        return "::base-original.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base-original.html.twig", "C:\\xampp\\htdocs\\alfalibros\\app/Resources\\views/base-original.html.twig");
    }
}
