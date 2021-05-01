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

/* pages/realisation.html.twig */
class __TwigTemplate_3b2618beecf10c83c1d797cb8073d9c17e97cef0e455c0d0476a2c7eaa46784c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/realisation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/realisation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/realisation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <section class=\"hero-wrap hero-wrap-2\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row no-gutters slider-text align-items-end justify-content-center\">
                <div class=\"col-md-9 pt-4 text-center\">
                    <p class=\"breadcrumbs\"><span class=\"me-2\"><a
                                    href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["lang" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "get", [0 => "lang"], "method", false, false, false, 10)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("nav_homePage", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "get", [0 => "lang"], "method", false, false, false, 10)), "html", null, true);
        echo " <i
                                        class=\"fa fa-chevron-right\"></i></a></p>
                    <h1 class=\"mb-0 bread\">";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("nav_realisation", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "get", [0 => "lang"], "method", false, false, false, 12)), "html", null, true);
        echo "</h1>
                </div>
            </div>
        </div>
    </section>

    <section class=\"ftco-section ftco-project\">
        <div class=\"container\">
            <div class=\"row\">

                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["realisations"]) || array_key_exists("realisations", $context) ? $context["realisations"] : (function () { throw new RuntimeError('Variable "realisations" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["realisation"]) {
            // line 23
            echo "                    <div class=\"col-md-4\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">
                        ";
            // line 24
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["realisation"], "filename", [], "any", false, false, false, 24), "empty.jpg"))) {
                // line 25
                echo "                            <div class=\"project img ftco-animate d-flex justify-content-center align-items-center\" style=\"background-image: url(";
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["realisation"], "images"), "html", null, true);
                echo ");\">
                        ";
            } else {
                // line 27
                echo "                            <div class=\"project img ftco-animate d-flex justify-content-center align-items-center\" style=\"background-image: url(http://via.placeholder.com/1000x600);\">
                        ";
            }
            // line 29
            echo "                            <div class=\"overlay\"></div>
                            <div class=\"text text-center p-4\">
                                <span>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["realisation"], "titre", [], "any", false, false, false, 31), "html", null, true);
            echo "</span>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\"> ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["realisation"], "titre", [], "any", false, false, false, 40), "html", null, true);
            echo " </h5>
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                </div>
                                <div class=\"modal-body\">
                                    ";
            // line 44
            echo twig_get_attribute($this->env, $this->source, $context["realisation"], "description", [], "any", false, false, false, 44);
            echo "
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['realisation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "

            </div>

            ";
        // line 54
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["realisations"]) || array_key_exists("realisations", $context) ? $context["realisations"] : (function () { throw new RuntimeError('Variable "realisations" does not exist.', 54, $this->source); })()));
        echo "

        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/realisation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 54,  151 => 50,  139 => 44,  132 => 40,  120 => 31,  116 => 29,  112 => 27,  106 => 25,  104 => 24,  101 => 23,  97 => 22,  84 => 12,  77 => 10,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

    <section class=\"hero-wrap hero-wrap-2\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row no-gutters slider-text align-items-end justify-content-center\">
                <div class=\"col-md-9 pt-4 text-center\">
                    <p class=\"breadcrumbs\"><span class=\"me-2\"><a
                                    href=\"{{ path('home',{\"lang\": app.request.get(\"lang\")}) }}\">{{ translate('nav_homePage',app.request.get('lang')) }} <i
                                        class=\"fa fa-chevron-right\"></i></a></p>
                    <h1 class=\"mb-0 bread\">{{ translate('nav_realisation',app.request.get('lang')) }}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class=\"ftco-section ftco-project\">
        <div class=\"container\">
            <div class=\"row\">

                {% for realisation in realisations %}
                    <div class=\"col-md-4\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">
                        {% if realisation.filename != \"empty.jpg\" %}
                            <div class=\"project img ftco-animate d-flex justify-content-center align-items-center\" style=\"background-image: url({{ vich_uploader_asset(realisation,\"images\") }});\">
                        {% else %}
                            <div class=\"project img ftco-animate d-flex justify-content-center align-items-center\" style=\"background-image: url(http://via.placeholder.com/1000x600);\">
                        {% endif %}
                            <div class=\"overlay\"></div>
                            <div class=\"text text-center p-4\">
                                <span>{{ realisation.titre }}</span>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\"> {{ realisation.titre }} </h5>
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                </div>
                                <div class=\"modal-body\">
                                    {{ realisation.description | raw }}
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}


            </div>

            {{ knp_pagination_render(realisations) }}

        </div>
    </section>
{% endblock %}", "pages/realisation.html.twig", "C:\\xampp\\htdocs\\www\\Sites\\Ecole\\PPE\\mainSite\\templates\\pages\\realisation.html.twig");
    }
}
