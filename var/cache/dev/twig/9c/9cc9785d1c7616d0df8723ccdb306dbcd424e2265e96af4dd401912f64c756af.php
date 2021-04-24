<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/experience/show.html.twig */
class __TwigTemplate_0489360f7b320b0a2c6aaedc0c590cfd35c842141ffee19bd704e1efa28a7010 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/experience/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/experience/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/experience/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Experience";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Experience</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["experience"]) || array_key_exists("experience", $context) ? $context["experience"] : (function () { throw new RuntimeError('Variable "experience" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Libelle</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["experience"]) || array_key_exists("experience", $context) ? $context["experience"] : (function () { throw new RuntimeError('Variable "experience" does not exist.', 16, $this->source); })()), "libelle", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Societe</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["experience"]) || array_key_exists("experience", $context) ? $context["experience"] : (function () { throw new RuntimeError('Variable "experience" does not exist.', 20, $this->source); })()), "societe", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>TypeContrat</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["experience"]) || array_key_exists("experience", $context) ? $context["experience"] : (function () { throw new RuntimeError('Variable "experience" does not exist.', 24, $this->source); })()), "typeContrat", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>StartDate</th>
                <td>";
        // line 28
        ((twig_get_attribute($this->env, $this->source, (isset($context["experience"]) || array_key_exists("experience", $context) ? $context["experience"] : (function () { throw new RuntimeError('Variable "experience" does not exist.', 28, $this->source); })()), "startDate", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["experience"]) || array_key_exists("experience", $context) ? $context["experience"] : (function () { throw new RuntimeError('Variable "experience" does not exist.', 28, $this->source); })()), "startDate", [], "any", false, false, false, 28), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>EndDate</th>
                <td>";
        // line 32
        ((twig_get_attribute($this->env, $this->source, (isset($context["experience"]) || array_key_exists("experience", $context) ? $context["experience"] : (function () { throw new RuntimeError('Variable "experience" does not exist.', 32, $this->source); })()), "endDate", [], "any", false, false, false, 32)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["experience"]) || array_key_exists("experience", $context) ? $context["experience"] : (function () { throw new RuntimeError('Variable "experience" does not exist.', 32, $this->source); })()), "endDate", [], "any", false, false, false, 32), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["experience"]) || array_key_exists("experience", $context) ? $context["experience"] : (function () { throw new RuntimeError('Variable "experience" does not exist.', 36, $this->source); })()), "description", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Location</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["experience"]) || array_key_exists("experience", $context) ? $context["experience"] : (function () { throw new RuntimeError('Variable "experience" does not exist.', 40, $this->source); })()), "location", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("experience_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("experience_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["experience"]) || array_key_exists("experience", $context) ? $context["experience"] : (function () { throw new RuntimeError('Variable "experience" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 49
        echo twig_include($this->env, $context, "experience/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/experience/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 49,  158 => 47,  153 => 45,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Experience{% endblock %}

{% block body %}
    <h1>Experience</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ experience.id }}</td>
            </tr>
            <tr>
                <th>Libelle</th>
                <td>{{ experience.libelle }}</td>
            </tr>
            <tr>
                <th>Societe</th>
                <td>{{ experience.societe }}</td>
            </tr>
            <tr>
                <th>TypeContrat</th>
                <td>{{ experience.typeContrat }}</td>
            </tr>
            <tr>
                <th>StartDate</th>
                <td>{{ experience.startDate ? experience.startDate|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>EndDate</th>
                <td>{{ experience.endDate ? experience.endDate|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ experience.description }}</td>
            </tr>
            <tr>
                <th>Location</th>
                <td>{{ experience.location }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('experience_index') }}\">back to list</a>

    <a href=\"{{ path('experience_edit', {'id': experience.id}) }}\">edit</a>

    {{ include('experience/_delete_form.html.twig') }}
{% endblock %}
", "admin/experience/show.html.twig", "C:\\xampp\\htdocs\\www\\Sites\\Ecole\\PPE\\mainSite\\templates\\admin\\experience\\show.html.twig");
    }
}
