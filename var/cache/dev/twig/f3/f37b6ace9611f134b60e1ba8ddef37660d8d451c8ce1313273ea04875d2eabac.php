<?php

/* :phppospeople:index.html.twig */
class __TwigTemplate_fdf5501145409878d7a0c3645983c6ada7092e8395a23a6e83f318038579db67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":phppospeople:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95f7ba8c90ca3cce530d36234704d2324382f930f0f50c7cbff61154d39dfb2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95f7ba8c90ca3cce530d36234704d2324382f930f0f50c7cbff61154d39dfb2b->enter($__internal_95f7ba8c90ca3cce530d36234704d2324382f930f0f50c7cbff61154d39dfb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":phppospeople:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95f7ba8c90ca3cce530d36234704d2324382f930f0f50c7cbff61154d39dfb2b->leave($__internal_95f7ba8c90ca3cce530d36234704d2324382f930f0f50c7cbff61154d39dfb2b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_daf8f47a73ffdfc734c76bd9dc760a7bc27ae8d1cb61ac3e15046cce29a6abd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daf8f47a73ffdfc734c76bd9dc760a7bc27ae8d1cb61ac3e15046cce29a6abd5->enter($__internal_daf8f47a73ffdfc734c76bd9dc760a7bc27ae8d1cb61ac3e15046cce29a6abd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Phppospeoples list</h1>

    <table>
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Phonenumber</th>
                <th>Email</th>
                <th>Address1</th>
                <th>Address2</th>
                <th>City</th>
                <th>State</th>
                <th>Zip</th>
                <th>Country</th>
                <th>Comments</th>
                <th>Personid</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["phpposPeoples"]) ? $context["phpposPeoples"] : $this->getContext($context, "phpposPeoples")));
        foreach ($context['_seq'] as $context["_key"] => $context["phpposPerson"]) {
            // line 26
            echo "            <tr>
                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("phppospeople_show", array("id" => $this->getAttribute($context["phpposPerson"], "personId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["phpposPerson"], "firstName", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["phpposPerson"], "lastName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["phpposPerson"], "phoneNumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["phpposPerson"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["phpposPerson"], "address1", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["phpposPerson"], "address2", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["phpposPerson"], "city", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["phpposPerson"], "state", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["phpposPerson"], "zip", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["phpposPerson"], "country", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["phpposPerson"], "comments", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["phpposPerson"], "personId", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("phppospeople_show", array("id" => $this->getAttribute($context["phpposPerson"], "personId", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("phppospeople_edit", array("id" => $this->getAttribute($context["phpposPerson"], "personId", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phpposPerson'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("phppospeople_new");
        echo "\">Create a new phpposPerson</a>
        </li>
    </ul>
";
        
        $__internal_daf8f47a73ffdfc734c76bd9dc760a7bc27ae8d1cb61ac3e15046cce29a6abd5->leave($__internal_daf8f47a73ffdfc734c76bd9dc760a7bc27ae8d1cb61ac3e15046cce29a6abd5_prof);

    }

    public function getTemplateName()
    {
        return ":phppospeople:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 56,  141 => 51,  129 => 45,  123 => 42,  116 => 38,  112 => 37,  108 => 36,  104 => 35,  100 => 34,  96 => 33,  92 => 32,  88 => 31,  84 => 30,  80 => 29,  76 => 28,  70 => 27,  67 => 26,  63 => 25,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Phppospeoples list</h1>

    <table>
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Phonenumber</th>
                <th>Email</th>
                <th>Address1</th>
                <th>Address2</th>
                <th>City</th>
                <th>State</th>
                <th>Zip</th>
                <th>Country</th>
                <th>Comments</th>
                <th>Personid</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for phpposPerson in phpposPeoples %}
            <tr>
                <td><a href=\"{{ path('phppospeople_show', { 'id': phpposPerson.personId }) }}\">{{ phpposPerson.firstName }}</a></td>
                <td>{{ phpposPerson.lastName }}</td>
                <td>{{ phpposPerson.phoneNumber }}</td>
                <td>{{ phpposPerson.email }}</td>
                <td>{{ phpposPerson.address1 }}</td>
                <td>{{ phpposPerson.address2 }}</td>
                <td>{{ phpposPerson.city }}</td>
                <td>{{ phpposPerson.state }}</td>
                <td>{{ phpposPerson.zip }}</td>
                <td>{{ phpposPerson.country }}</td>
                <td>{{ phpposPerson.comments }}</td>
                <td>{{ phpposPerson.personId }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('phppospeople_show', { 'id': phpposPerson.personId }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('phppospeople_edit', { 'id': phpposPerson.personId }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('phppospeople_new') }}\">Create a new phpposPerson</a>
        </li>
    </ul>
{% endblock %}
", ":phppospeople:index.html.twig", "C:\\xampp\\htdocs\\alfalibros\\app/Resources\\views/phppospeople/index.html.twig");
    }
}
