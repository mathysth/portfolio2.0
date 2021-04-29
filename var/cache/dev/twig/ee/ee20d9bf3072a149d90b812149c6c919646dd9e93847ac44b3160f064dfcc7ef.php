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

/* Pagination/custom_pagination.html.twig */
class __TwigTemplate_04d67e9c36049ffa1a54635753d1402a001b477d0a3c92cc72e9bc6207390086 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Pagination/custom_pagination.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Pagination/custom_pagination.html.twig"));

        // line 1
        if ((1 === twig_compare((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 1, $this->source); })()), 1))) {
            // line 2
            echo "    <div class=\"row mt-5\">
        <div class=\"col text-center\">
            <div class=\"block-27\">
                <ul>
                    ";
            // line 21
            echo "
                    ";
            // line 22
            if (array_key_exists("previous", $context)) {
                // line 23
                echo "                        <li>
                            <a rel=\"prev\" href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 24, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 24, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 24, $this->source); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 24, $this->source); })())])), "html", null, true);
                echo "\">
                                <i class=\"material-icons\"> < </i>
                            </a>
                        </li>
                    ";
            } else {
                // line 29
                echo "                        <li class=\"pagination_disabled\">
                            <a href=\"#!\">
                                <i class=\"material-icons\"> < </i>
                            </a>
                        </li>
                    ";
            }
            // line 35
            echo "
                    ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 36, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 37
                echo "                        ";
                if ((0 !== twig_compare($context["page"], (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 37, $this->source); })())))) {
                    // line 38
                    echo "                            <li>
                                <a href=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 39, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 39, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 39, $this->source); })()) => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                            </li>
                        ";
                } else {
                    // line 42
                    echo "                            <li class=\"active\">
                                <a href=\"#!\">";
                    // line 43
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                            </li>
                        ";
                }
                // line 46
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "
                    ";
            // line 48
            if (array_key_exists("next", $context)) {
                // line 49
                echo "                        <li>
                            <a rel=\"next\" href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 50, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 50, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 50, $this->source); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 50, $this->source); })())])), "html", null, true);
                echo "\">
                                <i class=\"material-icons\"> > </i>
                            </a>
                        </li>
                    ";
            } else {
                // line 55
                echo "                        <li class=\"pagination_disabled\" >
                            <a href=\"#!\">
                                <i class=\"material-icons\"> > </i>
                            </a>
                        </li>
                    ";
            }
            // line 61
            echo "                    ";
            // line 76
            echo "                </ul>
            </div>
        </div>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Pagination/custom_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 76,  135 => 61,  127 => 55,  119 => 50,  116 => 49,  114 => 48,  111 => 47,  105 => 46,  99 => 43,  96 => 42,  88 => 39,  85 => 38,  82 => 37,  78 => 36,  75 => 35,  67 => 29,  59 => 24,  56 => 23,  54 => 22,  51 => 21,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if pageCount > 1 %}
    <div class=\"row mt-5\">
        <div class=\"col text-center\">
            <div class=\"block-27\">
                <ul>
                    {#
                    {% if first is defined and current != first %}
                        <li>
                            <a href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\">
                                <i class=\"material-icons\"> << </i>
                            </a>
                        </li>
                    {% else %}
                        <li class=\"pagination_disabled\">
                            <a href=\"#!\">
                                <i class=\"material-icons\"> << </i>
                            </a>
                        </li>
                    {% endif %}
                    #}

                    {% if previous is defined %}
                        <li>
                            <a rel=\"prev\" href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">
                                <i class=\"material-icons\"> < </i>
                            </a>
                        </li>
                    {% else %}
                        <li class=\"pagination_disabled\">
                            <a href=\"#!\">
                                <i class=\"material-icons\"> < </i>
                            </a>
                        </li>
                    {% endif %}

                    {% for page in pagesInRange %}
                        {% if page != current %}
                            <li>
                                <a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
                            </li>
                        {% else %}
                            <li class=\"active\">
                                <a href=\"#!\">{{ page }}</a>
                            </li>
                        {% endif %}
                    {% endfor %}

                    {% if next is defined %}
                        <li>
                            <a rel=\"next\" href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">
                                <i class=\"material-icons\"> > </i>
                            </a>
                        </li>
                    {% else %}
                        <li class=\"pagination_disabled\" >
                            <a href=\"#!\">
                                <i class=\"material-icons\"> > </i>
                            </a>
                        </li>
                    {% endif %}
                    {#
                    {% if last is defined and current != last %}
                        <li>
                            <a href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\">
                                <i class=\"material-icons\"> >> </i>
                            </a>
                        </li>
                    {% else %}
                        <li class=\"pagination_disabled\">
                            <a href=\"#!\">
                                <i class=\"material-icons\"> >> </i>
                            </a>
                        </li>
                    {% endif %}
                    #}
                </ul>
            </div>
        </div>
    </div>
{% endif %}
", "Pagination/custom_pagination.html.twig", "C:\\xampp\\htdocs\\www\\Sites\\Ecole\\PPE\\mainSite\\templates\\Pagination\\custom_pagination.html.twig");
    }
}
