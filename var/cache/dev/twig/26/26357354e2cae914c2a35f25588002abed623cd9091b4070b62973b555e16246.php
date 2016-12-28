<?php

/* :phppospeople:show.html.twig */
class __TwigTemplate_d7ad092ccd74cee7a9c6cbce69aac7dc6fe365e717f2807a1d06fc2740219bcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":phppospeople:show.html.twig", 1);
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
        $__internal_0dc621ba39102349603053c63c27f6d5757088fbd9fcfc50d4fd51411ab6cb33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc621ba39102349603053c63c27f6d5757088fbd9fcfc50d4fd51411ab6cb33->enter($__internal_0dc621ba39102349603053c63c27f6d5757088fbd9fcfc50d4fd51411ab6cb33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":phppospeople:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dc621ba39102349603053c63c27f6d5757088fbd9fcfc50d4fd51411ab6cb33->leave($__internal_0dc621ba39102349603053c63c27f6d5757088fbd9fcfc50d4fd51411ab6cb33_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d667ed5b5eb52a3b7cb04713d7b435c7866840564679d084cf5befb09185db1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d667ed5b5eb52a3b7cb04713d7b435c7866840564679d084cf5befb09185db1e->enter($__internal_d667ed5b5eb52a3b7cb04713d7b435c7866840564679d084cf5befb09185db1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Phpposperson</h1>

    <table>
        <tbody>
            <tr>
                <th>Firstname</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phpposPerson"]) ? $context["phpposPerson"] : $this->getContext($context, "phpposPerson")), "firstName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phpposPerson"]) ? $context["phpposPerson"] : $this->getContext($context, "phpposPerson")), "lastName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Phonenumber</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phpposPerson"]) ? $context["phpposPerson"] : $this->getContext($context, "phpposPerson")), "phoneNumber", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phpposPerson"]) ? $context["phpposPerson"] : $this->getContext($context, "phpposPerson")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Address1</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phpposPerson"]) ? $context["phpposPerson"] : $this->getContext($context, "phpposPerson")), "address1", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Address2</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phpposPerson"]) ? $context["phpposPerson"] : $this->getContext($context, "phpposPerson")), "address2", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>City</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phpposPerson"]) ? $context["phpposPerson"] : $this->getContext($context, "phpposPerson")), "city", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>State</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phpposPerson"]) ? $context["phpposPerson"] : $this->getContext($context, "phpposPerson")), "state", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Zip</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phpposPerson"]) ? $context["phpposPerson"] : $this->getContext($context, "phpposPerson")), "zip", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Country</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phpposPerson"]) ? $context["phpposPerson"] : $this->getContext($context, "phpposPerson")), "country", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Comments</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phpposPerson"]) ? $context["phpposPerson"] : $this->getContext($context, "phpposPerson")), "comments", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Personid</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phpposPerson"]) ? $context["phpposPerson"] : $this->getContext($context, "phpposPerson")), "personId", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("phppospeople_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("phppospeople_edit", array("id" => $this->getAttribute((isset($context["phpposPerson"]) ? $context["phpposPerson"] : $this->getContext($context, "phpposPerson")), "personId", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 67
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 69
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_d667ed5b5eb52a3b7cb04713d7b435c7866840564679d084cf5befb09185db1e->leave($__internal_d667ed5b5eb52a3b7cb04713d7b435c7866840564679d084cf5befb09185db1e_prof);

    }

    public function getTemplateName()
    {
        return ":phppospeople:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 69,  147 => 67,  141 => 64,  135 => 61,  125 => 54,  118 => 50,  111 => 46,  104 => 42,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Phpposperson</h1>

    <table>
        <tbody>
            <tr>
                <th>Firstname</th>
                <td>{{ phpposPerson.firstName }}</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>{{ phpposPerson.lastName }}</td>
            </tr>
            <tr>
                <th>Phonenumber</th>
                <td>{{ phpposPerson.phoneNumber }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ phpposPerson.email }}</td>
            </tr>
            <tr>
                <th>Address1</th>
                <td>{{ phpposPerson.address1 }}</td>
            </tr>
            <tr>
                <th>Address2</th>
                <td>{{ phpposPerson.address2 }}</td>
            </tr>
            <tr>
                <th>City</th>
                <td>{{ phpposPerson.city }}</td>
            </tr>
            <tr>
                <th>State</th>
                <td>{{ phpposPerson.state }}</td>
            </tr>
            <tr>
                <th>Zip</th>
                <td>{{ phpposPerson.zip }}</td>
            </tr>
            <tr>
                <th>Country</th>
                <td>{{ phpposPerson.country }}</td>
            </tr>
            <tr>
                <th>Comments</th>
                <td>{{ phpposPerson.comments }}</td>
            </tr>
            <tr>
                <th>Personid</th>
                <td>{{ phpposPerson.personId }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('phppospeople_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('phppospeople_edit', { 'id': phpposPerson.personId }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":phppospeople:show.html.twig", "C:\\xampp\\htdocs\\alfalibros\\app/Resources\\views/phppospeople/show.html.twig");
    }
}
