<?php

/* phpposemployees/index.html.twig */
class __TwigTemplate_3c4b34322ba9fa1c9bc1ea206dcdba12ffc582739fc9ca8304fcf5604bc1cb21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "phpposemployees/index.html.twig", 1);
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
        $__internal_6ab293671c5940eebe27ba47a6ceb11fd8476ada8f83b47e3eaeed07dd97502e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab293671c5940eebe27ba47a6ceb11fd8476ada8f83b47e3eaeed07dd97502e->enter($__internal_6ab293671c5940eebe27ba47a6ceb11fd8476ada8f83b47e3eaeed07dd97502e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "phpposemployees/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ab293671c5940eebe27ba47a6ceb11fd8476ada8f83b47e3eaeed07dd97502e->leave($__internal_6ab293671c5940eebe27ba47a6ceb11fd8476ada8f83b47e3eaeed07dd97502e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_447ce340300638bbab26ef4f6dbfb6c30b4a9f31fdf85a3ed3e35e289dffd8a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_447ce340300638bbab26ef4f6dbfb6c30b4a9f31fdf85a3ed3e35e289dffd8a0->enter($__internal_447ce340300638bbab26ef4f6dbfb6c30b4a9f31fdf85a3ed3e35e289dffd8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Phpposemployees list</h1>

    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Forcepasswordchange</th>
                <th>Language</th>
                <th>Commissionpercent</th>
                <th>Commissionpercenttype</th>
                <th>Hourlypayrate</th>
                <th>Inactive</th>
                <th>Reasoninactive</th>
                <th>Hiredate</th>
                <th>Employeenumber</th>
                <th>Birthday</th>
                <th>Terminationdate</th>
                <th>Deleted</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["phpposEmployees"]) ? $context["phpposEmployees"] : $this->getContext($context, "phpposEmployees")));
        foreach ($context['_seq'] as $context["_key"] => $context["phpposEmployee"]) {
            // line 29
            echo "            <tr>
                <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("phpposemployees_show", array("id" => $this->getAttribute($context["phpposEmployee"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["phpposEmployee"], "username", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["phpposEmployee"], "password", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["phpposEmployee"], "forcePasswordChange", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["phpposEmployee"], "language", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["phpposEmployee"], "commissionPercent", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["phpposEmployee"], "commissionPercentType", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["phpposEmployee"], "hourlyPayRate", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["phpposEmployee"], "inactive", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["phpposEmployee"], "reasonInactive", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            if ($this->getAttribute($context["phpposEmployee"], "hireDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["phpposEmployee"], "hireDate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["phpposEmployee"], "employeeNumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            if ($this->getAttribute($context["phpposEmployee"], "birthday", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["phpposEmployee"], "birthday", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 42
            if ($this->getAttribute($context["phpposEmployee"], "terminationDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["phpposEmployee"], "terminationDate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["phpposEmployee"], "deleted", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["phpposEmployee"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("phpposemployees_show", array("id" => $this->getAttribute($context["phpposEmployee"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("phpposemployees_edit", array("id" => $this->getAttribute($context["phpposEmployee"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phpposEmployee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("phpposemployees_new");
        echo "\">Create a new phpposEmployee</a>
        </li>
    </ul>
";
        
        $__internal_447ce340300638bbab26ef4f6dbfb6c30b4a9f31fdf85a3ed3e35e289dffd8a0->leave($__internal_447ce340300638bbab26ef4f6dbfb6c30b4a9f31fdf85a3ed3e35e289dffd8a0_prof);

    }

    public function getTemplateName()
    {
        return "phpposemployees/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 62,  162 => 57,  150 => 51,  144 => 48,  137 => 44,  133 => 43,  127 => 42,  121 => 41,  117 => 40,  111 => 39,  107 => 38,  103 => 37,  99 => 36,  95 => 35,  91 => 34,  87 => 33,  83 => 32,  79 => 31,  73 => 30,  70 => 29,  66 => 28,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Phpposemployees list</h1>

    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Forcepasswordchange</th>
                <th>Language</th>
                <th>Commissionpercent</th>
                <th>Commissionpercenttype</th>
                <th>Hourlypayrate</th>
                <th>Inactive</th>
                <th>Reasoninactive</th>
                <th>Hiredate</th>
                <th>Employeenumber</th>
                <th>Birthday</th>
                <th>Terminationdate</th>
                <th>Deleted</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for phpposEmployee in phpposEmployees %}
            <tr>
                <td><a href=\"{{ path('phpposemployees_show', { 'id': phpposEmployee.id }) }}\">{{ phpposEmployee.username }}</a></td>
                <td>{{ phpposEmployee.password }}</td>
                <td>{{ phpposEmployee.forcePasswordChange }}</td>
                <td>{{ phpposEmployee.language }}</td>
                <td>{{ phpposEmployee.commissionPercent }}</td>
                <td>{{ phpposEmployee.commissionPercentType }}</td>
                <td>{{ phpposEmployee.hourlyPayRate }}</td>
                <td>{{ phpposEmployee.inactive }}</td>
                <td>{{ phpposEmployee.reasonInactive }}</td>
                <td>{% if phpposEmployee.hireDate %}{{ phpposEmployee.hireDate|date('Y-m-d') }}{% endif %}</td>
                <td>{{ phpposEmployee.employeeNumber }}</td>
                <td>{% if phpposEmployee.birthday %}{{ phpposEmployee.birthday|date('Y-m-d') }}{% endif %}</td>
                <td>{% if phpposEmployee.terminationDate %}{{ phpposEmployee.terminationDate|date('Y-m-d') }}{% endif %}</td>
                <td>{{ phpposEmployee.deleted }}</td>
                <td>{{ phpposEmployee.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('phpposemployees_show', { 'id': phpposEmployee.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('phpposemployees_edit', { 'id': phpposEmployee.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('phpposemployees_new') }}\">Create a new phpposEmployee</a>
        </li>
    </ul>
{% endblock %}
", "phpposemployees/index.html.twig", "C:\\xampp\\htdocs\\alfalibros\\app\\Resources\\views\\phpposemployees\\index.html.twig");
    }
}
