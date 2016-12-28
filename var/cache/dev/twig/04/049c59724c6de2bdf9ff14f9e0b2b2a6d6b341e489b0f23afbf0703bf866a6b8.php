<?php

/* :phpposemployees:show.html.twig */
class __TwigTemplate_6522e5787f5030ca50eca2f0a3410e3b53ace769547074b5d02155846c9945fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":phpposemployees:show.html.twig", 1);
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
        $__internal_9778fd42671705c5b214b3b8c193b80e8293e39a7a1453a6d2af3052d0a599c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9778fd42671705c5b214b3b8c193b80e8293e39a7a1453a6d2af3052d0a599c2->enter($__internal_9778fd42671705c5b214b3b8c193b80e8293e39a7a1453a6d2af3052d0a599c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":phpposemployees:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9778fd42671705c5b214b3b8c193b80e8293e39a7a1453a6d2af3052d0a599c2->leave($__internal_9778fd42671705c5b214b3b8c193b80e8293e39a7a1453a6d2af3052d0a599c2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f18d89a3ab3ab54144defca1bea0bc997fc46c0d657e58d9c56dab3d206e6792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f18d89a3ab3ab54144defca1bea0bc997fc46c0d657e58d9c56dab3d206e6792->enter($__internal_f18d89a3ab3ab54144defca1bea0bc997fc46c0d657e58d9c56dab3d206e6792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Phpposemployee</h1>

    <table>
        <tbody>
            <tr>
                <th>Username</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phpposEmployee"]) ? $context["phpposEmployee"] : $this->getContext($context, "phpposEmployee")), "username", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phpposEmployee"]) ? $context["phpposEmployee"] : $this->getContext($context, "phpposEmployee")), "password", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Forcepasswordchange</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phpposEmployee"]) ? $context["phpposEmployee"] : $this->getContext($context, "phpposEmployee")), "forcePasswordChange", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Language</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phpposEmployee"]) ? $context["phpposEmployee"] : $this->getContext($context, "phpposEmployee")), "language", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Commissionpercent</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phpposEmployee"]) ? $context["phpposEmployee"] : $this->getContext($context, "phpposEmployee")), "commissionPercent", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Commissionpercenttype</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phpposEmployee"]) ? $context["phpposEmployee"] : $this->getContext($context, "phpposEmployee")), "commissionPercentType", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Hourlypayrate</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phpposEmployee"]) ? $context["phpposEmployee"] : $this->getContext($context, "phpposEmployee")), "hourlyPayRate", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Inactive</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phpposEmployee"]) ? $context["phpposEmployee"] : $this->getContext($context, "phpposEmployee")), "inactive", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Reasoninactive</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phpposEmployee"]) ? $context["phpposEmployee"] : $this->getContext($context, "phpposEmployee")), "reasonInactive", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Hiredate</th>
                <td>";
        // line 46
        if ($this->getAttribute((isset($context["phpposEmployee"]) ? $context["phpposEmployee"] : $this->getContext($context, "phpposEmployee")), "hireDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["phpposEmployee"]) ? $context["phpposEmployee"] : $this->getContext($context, "phpposEmployee")), "hireDate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Employeenumber</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phpposEmployee"]) ? $context["phpposEmployee"] : $this->getContext($context, "phpposEmployee")), "employeeNumber", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Birthday</th>
                <td>";
        // line 54
        if ($this->getAttribute((isset($context["phpposEmployee"]) ? $context["phpposEmployee"] : $this->getContext($context, "phpposEmployee")), "birthday", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["phpposEmployee"]) ? $context["phpposEmployee"] : $this->getContext($context, "phpposEmployee")), "birthday", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Terminationdate</th>
                <td>";
        // line 58
        if ($this->getAttribute((isset($context["phpposEmployee"]) ? $context["phpposEmployee"] : $this->getContext($context, "phpposEmployee")), "terminationDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["phpposEmployee"]) ? $context["phpposEmployee"] : $this->getContext($context, "phpposEmployee")), "terminationDate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Deleted</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phpposEmployee"]) ? $context["phpposEmployee"] : $this->getContext($context, "phpposEmployee")), "deleted", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phpposEmployee"]) ? $context["phpposEmployee"] : $this->getContext($context, "phpposEmployee")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("phpposemployees_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("phpposemployees_edit", array("id" => $this->getAttribute((isset($context["phpposEmployee"]) ? $context["phpposEmployee"] : $this->getContext($context, "phpposEmployee")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 79
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 81
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_f18d89a3ab3ab54144defca1bea0bc997fc46c0d657e58d9c56dab3d206e6792->leave($__internal_f18d89a3ab3ab54144defca1bea0bc997fc46c0d657e58d9c56dab3d206e6792_prof);

    }

    public function getTemplateName()
    {
        return ":phpposemployees:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 81,  174 => 79,  168 => 76,  162 => 73,  152 => 66,  145 => 62,  136 => 58,  127 => 54,  120 => 50,  111 => 46,  104 => 42,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Phpposemployee</h1>

    <table>
        <tbody>
            <tr>
                <th>Username</th>
                <td>{{ phpposEmployee.username }}</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>{{ phpposEmployee.password }}</td>
            </tr>
            <tr>
                <th>Forcepasswordchange</th>
                <td>{{ phpposEmployee.forcePasswordChange }}</td>
            </tr>
            <tr>
                <th>Language</th>
                <td>{{ phpposEmployee.language }}</td>
            </tr>
            <tr>
                <th>Commissionpercent</th>
                <td>{{ phpposEmployee.commissionPercent }}</td>
            </tr>
            <tr>
                <th>Commissionpercenttype</th>
                <td>{{ phpposEmployee.commissionPercentType }}</td>
            </tr>
            <tr>
                <th>Hourlypayrate</th>
                <td>{{ phpposEmployee.hourlyPayRate }}</td>
            </tr>
            <tr>
                <th>Inactive</th>
                <td>{{ phpposEmployee.inactive }}</td>
            </tr>
            <tr>
                <th>Reasoninactive</th>
                <td>{{ phpposEmployee.reasonInactive }}</td>
            </tr>
            <tr>
                <th>Hiredate</th>
                <td>{% if phpposEmployee.hireDate %}{{ phpposEmployee.hireDate|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Employeenumber</th>
                <td>{{ phpposEmployee.employeeNumber }}</td>
            </tr>
            <tr>
                <th>Birthday</th>
                <td>{% if phpposEmployee.birthday %}{{ phpposEmployee.birthday|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Terminationdate</th>
                <td>{% if phpposEmployee.terminationDate %}{{ phpposEmployee.terminationDate|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Deleted</th>
                <td>{{ phpposEmployee.deleted }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ phpposEmployee.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('phpposemployees_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('phpposemployees_edit', { 'id': phpposEmployee.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":phpposemployees:show.html.twig", "C:\\xampp\\htdocs\\alfalibros\\app/Resources\\views/phpposemployees/show.html.twig");
    }
}
