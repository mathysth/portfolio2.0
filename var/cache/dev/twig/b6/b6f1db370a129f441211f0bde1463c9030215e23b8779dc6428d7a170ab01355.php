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

/* pages/parcours.html.twig */
class __TwigTemplate_2b20d211b8070004a7d1e0d8f81313fa5c22515650d7131deb0eb067828581bf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/parcours.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/parcours.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/parcours.html.twig", 1);
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
                <div class=\"col-md-9 pt-5 text-center\">
                    <p class=\"breadcrumbs\"><span class=\"me-2\"><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["lang" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "get", [0 => "lang"], "method", false, false, false, 9)]), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("nav_homePage", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "get", [0 => "lang"], "method", false, false, false, 9)), "html", null, true);
        echo " <i class=\"fa fa-chevron-right\"></i></a></span> <span>";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("experiencePage", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "get", [0 => "lang"], "method", false, false, false, 9)), "html", null, true);
        echo " <i class=\"fa fa-chevron-right\"></i></span></p>
                    <h1 class=\"mb-0 bread\">Parcours</h1>
                </div>
            </div>
        </div>
    </section>

    <section class=\"ftco-section\">
        <div class=\"container-xl\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["parcour"]) {
            // line 21
            echo "                        <div class=\"resume-wrap d-flex align-item-stretch\" data-aos=\"fade-up\" data-aos-duration=\"1000\" data-aos-delay=\"400\">
                            <div class=\"w-100\">
                                <div class=\"icon\"><span class=\"flaticon-work-from-home\"></span></div>
                                <span class=\"date\">";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parcour"], "annee", [], "any", false, false, false, 24), "m/d/Y"), "html", null, true);
            echo "</span>
                                <h2>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parcour"], "diplome", [], "any", false, false, false, 25), "html", null, true);
            echo "</h2>
                                <span class=\"position\"><i class=\"ion-ios-pin me-2\"></i>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parcour"], "commune", [], "any", false, false, false, 26), "html", null, true);
            echo "</span>
                                <p class=\"mt-4\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parcour"], "etablissement", [], "any", false, false, false, 27), "html", null, true);
            echo "</p>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parcour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
                </div>

            </div>
            ";
        // line 35
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 35, $this->source); })()));
        echo "
        </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/parcours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 35,  125 => 31,  115 => 27,  111 => 26,  107 => 25,  103 => 24,  98 => 21,  94 => 20,  76 => 9,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

    <section class=\"hero-wrap hero-wrap-2\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row no-gutters slider-text align-items-end justify-content-center\">
                <div class=\"col-md-9 pt-5 text-center\">
                    <p class=\"breadcrumbs\"><span class=\"me-2\"><a href=\"{{ path('home',{\"lang\": app.request.get('lang')}) }}\"> {{ translate('nav_homePage',app.request.get('lang')) }} <i class=\"fa fa-chevron-right\"></i></a></span> <span>{{ translate('experiencePage',app.request.get('lang')) }} <i class=\"fa fa-chevron-right\"></i></span></p>
                    <h1 class=\"mb-0 bread\">Parcours</h1>
                </div>
            </div>
        </div>
    </section>

    <section class=\"ftco-section\">
        <div class=\"container-xl\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    {% for parcour in parcours %}
                        <div class=\"resume-wrap d-flex align-item-stretch\" data-aos=\"fade-up\" data-aos-duration=\"1000\" data-aos-delay=\"400\">
                            <div class=\"w-100\">
                                <div class=\"icon\"><span class=\"flaticon-work-from-home\"></span></div>
                                <span class=\"date\">{{ parcour.annee | date('m/d/Y') }}</span>
                                <h2>{{ parcour.diplome }}</h2>
                                <span class=\"position\"><i class=\"ion-ios-pin me-2\"></i>{{ parcour.commune }}</span>
                                <p class=\"mt-4\">{{ parcour.etablissement }}</p>
                            </div>
                        </div>
                    {% endfor %}

                </div>

            </div>
            {{ knp_pagination_render(parcours) }}
        </div>
    </section>

{% endblock %}", "pages/parcours.html.twig", "C:\\xampp\\htdocs\\www\\Sites\\Ecole\\PPE\\mainSite\\templates\\pages\\parcours.html.twig");
    }
}
