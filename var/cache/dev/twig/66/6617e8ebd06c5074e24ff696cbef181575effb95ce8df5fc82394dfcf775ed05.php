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

/* pages/presentation.html.twig */
class __TwigTemplate_97147719b7ab448f887b38bc60f9990dd27d9a10bee430f790ccf19cf5b4f999 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/presentation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/presentation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/presentation.html.twig", 1);
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
        echo "    <section class=\"hero-wrap hero-wrap-2\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row no-gutters slider-text align-items-end justify-content-center\">
                <div class=\"col-md-9 pt-4 text-center\">
                    <p class=\"breadcrumbs\"><span class=\"me-2\"><a
                                    href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["lang" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "get", [0 => "lang"], "method", false, false, false, 9)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("nav_homePage", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "get", [0 => "lang"], "method", false, false, false, 9)), "html", null, true);
        echo " <i
                                        class=\"fa fa-chevron-right\"></i></a></p>
                    <h1 class=\"mb-0 bread\">";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("moreAboutMe", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "get", [0 => "lang"], "method", false, false, false, 11)), "html", null, true);
        echo "</h1>
                </div>
            </div>
        </div>
    </section>

    <section class=\"ftco-section ftco-about-section\">
        <div class=\"container\">
            <div class=\"row g-xl-5\">
                <div class=\"col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"100\" data-aos-duration=\"1000\">
                    <div class=\"row section-counter\">
                        <div class=\"col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                            <div class=\"counter-wrap\">
                                <span class=\"number\"><span class=\"countup\">5000</span></span>
                                <span class=\"caption\">Happy Clients</span>
                            </div>
                        </div>
                        <div class=\"col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                            <div class=\"counter-wrap\">
                                <span class=\"number\"><span class=\"countup\">1200</span></span>
                                <span class=\"caption\">Projects Done</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 heading-section d-flex align-items-center\" data-aos=\"fade-up\" data-aos-delay=\"500\"
                     data-aos-duration=\"1000\">
                    <div class=\"mt-5 mt-md-0\">
                        <span class=\"subheading\">";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("moreAboutMe", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "request", [], "any", false, false, false, 39), "get", [0 => "lang"], "method", false, false, false, 39)), "html", null, true);
        echo "</span>
                        <h2 class=\"mb-4\">";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("desiredProfession", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "request", [], "any", false, false, false, 40), "get", [0 => "lang"], "method", false, false, false, 40)), "html", null, true);
        echo "</h2>
                        <p class=\"\">Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia, there live the blind texts.</p>
                        <div class=\"row mb-4\">
                            <div class=\"col-lg-6\">
                                <ul class=\"about-info mt-4 px-md-0 px-2\">
                                    <li class=\"d-flex\">
                                        <span>";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("nameLabel", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "request", [], "any", false, false, false, 47), "get", [0 => "lang"], "method", false, false, false, 47)), "html", null, true);
        echo ":</span>
                                        <span> ";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("nameResult", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "request", [], "any", false, false, false, 48), "get", [0 => "lang"], "method", false, false, false, 48)), "html", null, true);
        echo "</span></li>
                                    <li class=\"d-flex\">
                                        <span>";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("BirthdayLabel", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "request", [], "any", false, false, false, 50), "get", [0 => "lang"], "method", false, false, false, 50)), "html", null, true);
        echo ":</span>
                                        <span> ";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("BirthdayResult", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "request", [], "any", false, false, false, 51), "get", [0 => "lang"], "method", false, false, false, 51)), "html", null, true);
        echo "</span></li>
                                    <li class=\"d-flex\">
                                        <span>";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("AddressLabel", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "request", [], "any", false, false, false, 53), "get", [0 => "lang"], "method", false, false, false, 53)), "html", null, true);
        echo ":</span>
                                        <span> ";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("AddressResult", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "get", [0 => "lang"], "method", false, false, false, 54)), "html", null, true);
        echo "</span></li>
                                </ul>
                            </div>
                            <div class=\"col-lg-6\">
                                <ul class=\"about-info mt-4 px-md-0 px-2\">
                                    <li class=\"d-flex\"><span>";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("zipLabel", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "request", [], "any", false, false, false, 59), "get", [0 => "lang"], "method", false, false, false, 59)), "html", null, true);
        echo ":</span>
                                        <span>";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("zipResult", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "request", [], "any", false, false, false, 60), "get", [0 => "lang"], "method", false, false, false, 60)), "html", null, true);
        echo "</span></li>
                                    <li class=\"d-flex\">
                                        <span>";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("emailLabel", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "request", [], "any", false, false, false, 62), "get", [0 => "lang"], "method", false, false, false, 62)), "html", null, true);
        echo ":</span>
                                        <span>";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("email", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "request", [], "any", false, false, false, 63), "get", [0 => "lang"], "method", false, false, false, 63)), "html", null, true);
        echo "</span></li>
                                </ul>
                            </div>
                        </div>
                        <p><a href=\"#\" class=\"btn btn-primary py-3 px-4\">Download CV</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"ftco-section testimony-section\">
        <div class=\"container-xl\">
            <div class=\"row justify-content-center pb-5\">
                <div class=\"col-md-7 text-center heading-section\" data-aos=\"fade-up\" data-aos-duration=\"1000\">
                    <span class=\"subheading\">";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("skills", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "request", [], "any", false, false, false, 78), "get", [0 => "lang"], "method", false, false, false, 78)), "html", null, true);
        echo "</span>
                    <h2 class=\"mb-5\">";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("mySkills", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "request", [], "any", false, false, false, 79), "get", [0 => "lang"], "method", false, false, false, 79)), "html", null, true);
        echo "</h2>
                </div>
            </div>
            ";
        // line 82
        $context["continue"] = false;
        // line 83
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoryCompetence"]) || array_key_exists("categoryCompetence", $context) ? $context["categoryCompetence"] : (function () { throw new RuntimeError('Variable "categoryCompetence" does not exist.', 83, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categoryCompetences"]) {
            // line 84
            echo "                ";
            if ((0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoryCompetences"], "getCompetences", [], "any", false, false, false, 84)), 0))) {
                // line 85
                echo "                    ";
                $context["continue"] = true;
                // line 86
                echo "                ";
            }
            // line 87
            echo "                ";
            if ( !(isset($context["continue"]) || array_key_exists("continue", $context) ? $context["continue"] : (function () { throw new RuntimeError('Variable "continue" does not exist.', 87, $this->source); })())) {
                // line 88
                echo "                    <h4 class=\"mb-3\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoryCompetences"], "nom", [], "any", false, false, false, 88), "html", null, true);
                echo "</h4>
                    ";
                // line 89
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["competence"]) || array_key_exists("competence", $context) ? $context["competence"] : (function () { throw new RuntimeError('Variable "competence" does not exist.', 89, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["competences"]) {
                    // line 90
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["competences"], "competencesCategories", [], "any", false, false, false, 90), "contains", [0 => $context["categoryCompetences"]], "method", false, false, false, 90)) {
                        // line 91
                        echo "                            <div class=\"row\">
                                <div class=\"col-md-4\" data-aos=\"fade-up\" data-aos-duration=\"1000\" data-aos-delay=\"100\">
                                    <div class=\"progress-wrap\">
                                        <h3>";
                        // line 94
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competences"], "nom", [], "any", false, false, false, 94), "html", null, true);
                        echo "</h3>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"90\"
                                                 aria-valuemin=\"0\" aria-valuemax=\"100\"
                                                 style=\"width:";
                        // line 98
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competences"], "niveauCompetence", [], "any", false, false, false, 98), "html", null, true);
                        echo "%\">
                                                <span>";
                        // line 99
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competences"], "niveauCompetence", [], "any", false, false, false, 99), "html", null, true);
                        echo "%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
                    }
                    // line 106
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competences'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "
                ";
            }
            // line 109
            echo "                ";
            if ((isset($context["continue"]) || array_key_exists("continue", $context) ? $context["continue"] : (function () { throw new RuntimeError('Variable "continue" does not exist.', 109, $this->source); })())) {
                // line 110
                echo "                    ";
                $context["continue"] = false;
                // line 111
                echo "                ";
            }
            // line 112
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoryCompetences'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "        </div>
    </section>
    ";
        // line 115
        $this->loadTemplate("pages/includes/_footer.html.twig", "pages/presentation.html.twig", 115)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 115,  281 => 113,  275 => 112,  272 => 111,  269 => 110,  266 => 109,  262 => 107,  256 => 106,  246 => 99,  242 => 98,  235 => 94,  230 => 91,  227 => 90,  223 => 89,  218 => 88,  215 => 87,  212 => 86,  209 => 85,  206 => 84,  201 => 83,  199 => 82,  193 => 79,  189 => 78,  171 => 63,  167 => 62,  162 => 60,  158 => 59,  150 => 54,  146 => 53,  141 => 51,  137 => 50,  132 => 48,  128 => 47,  118 => 40,  114 => 39,  83 => 11,  76 => 9,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block body %}
    <section class=\"hero-wrap hero-wrap-2\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row no-gutters slider-text align-items-end justify-content-center\">
                <div class=\"col-md-9 pt-4 text-center\">
                    <p class=\"breadcrumbs\"><span class=\"me-2\"><a
                                    href=\"{{ path('home',{\"lang\": app.request.get(\"lang\")}) }}\">{{ translate('nav_homePage',app.request.get('lang')) }} <i
                                        class=\"fa fa-chevron-right\"></i></a></p>
                    <h1 class=\"mb-0 bread\">{{ translate('moreAboutMe',app.request.get('lang')) }}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class=\"ftco-section ftco-about-section\">
        <div class=\"container\">
            <div class=\"row g-xl-5\">
                <div class=\"col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"100\" data-aos-duration=\"1000\">
                    <div class=\"row section-counter\">
                        <div class=\"col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                            <div class=\"counter-wrap\">
                                <span class=\"number\"><span class=\"countup\">5000</span></span>
                                <span class=\"caption\">Happy Clients</span>
                            </div>
                        </div>
                        <div class=\"col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                            <div class=\"counter-wrap\">
                                <span class=\"number\"><span class=\"countup\">1200</span></span>
                                <span class=\"caption\">Projects Done</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 heading-section d-flex align-items-center\" data-aos=\"fade-up\" data-aos-delay=\"500\"
                     data-aos-duration=\"1000\">
                    <div class=\"mt-5 mt-md-0\">
                        <span class=\"subheading\">{{ translate('moreAboutMe',app.request.get('lang')) }}</span>
                        <h2 class=\"mb-4\">{{ translate('desiredProfession',app.request.get('lang')) }}</h2>
                        <p class=\"\">Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia, there live the blind texts.</p>
                        <div class=\"row mb-4\">
                            <div class=\"col-lg-6\">
                                <ul class=\"about-info mt-4 px-md-0 px-2\">
                                    <li class=\"d-flex\">
                                        <span>{{ translate('nameLabel',app.request.get('lang')) }}:</span>
                                        <span> {{ translate('nameResult',app.request.get('lang')) }}</span></li>
                                    <li class=\"d-flex\">
                                        <span>{{ translate('BirthdayLabel',app.request.get('lang')) }}:</span>
                                        <span> {{ translate('BirthdayResult',app.request.get('lang')) }}</span></li>
                                    <li class=\"d-flex\">
                                        <span>{{ translate('AddressLabel',app.request.get('lang')) }}:</span>
                                        <span> {{ translate('AddressResult',app.request.get('lang')) }}</span></li>
                                </ul>
                            </div>
                            <div class=\"col-lg-6\">
                                <ul class=\"about-info mt-4 px-md-0 px-2\">
                                    <li class=\"d-flex\"><span>{{ translate('zipLabel',app.request.get('lang')) }}:</span>
                                        <span>{{ translate('zipResult',app.request.get('lang')) }}</span></li>
                                    <li class=\"d-flex\">
                                        <span>{{ translate('emailLabel',app.request.get('lang')) }}:</span>
                                        <span>{{ translate('email',app.request.get('lang')) }}</span></li>
                                </ul>
                            </div>
                        </div>
                        <p><a href=\"#\" class=\"btn btn-primary py-3 px-4\">Download CV</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"ftco-section testimony-section\">
        <div class=\"container-xl\">
            <div class=\"row justify-content-center pb-5\">
                <div class=\"col-md-7 text-center heading-section\" data-aos=\"fade-up\" data-aos-duration=\"1000\">
                    <span class=\"subheading\">{{ translate('skills',app.request.get('lang')) }}</span>
                    <h2 class=\"mb-5\">{{ translate('mySkills',app.request.get('lang')) }}</h2>
                </div>
            </div>
            {% set continue = false %}
            {% for categoryCompetences in categoryCompetence %}
                {% if categoryCompetences.getCompetences | length == 0 %}
                    {% set continue = true %}
                {% endif %}
                {% if not continue %}
                    <h4 class=\"mb-3\">{{ categoryCompetences.nom }}</h4>
                    {% for competences in competence %}
                        {% if competences.competencesCategories.contains(categoryCompetences) %}
                            <div class=\"row\">
                                <div class=\"col-md-4\" data-aos=\"fade-up\" data-aos-duration=\"1000\" data-aos-delay=\"100\">
                                    <div class=\"progress-wrap\">
                                        <h3>{{ competences.nom }}</h3>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"90\"
                                                 aria-valuemin=\"0\" aria-valuemax=\"100\"
                                                 style=\"width:{{ competences.niveauCompetence }}%\">
                                                <span>{{ competences.niveauCompetence }}%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% endif %}
                    {% endfor %}

                {% endif %}
                {% if continue %}
                    {% set continue = false %}
                {% endif %}
            {% endfor %}
        </div>
    </section>
    {% include (\"pages/includes/_footer.html.twig\") %}
{% endblock %}
", "pages/presentation.html.twig", "C:\\xampp\\htdocs\\www\\Sites\\Ecole\\PPE\\mainSite\\templates\\pages\\presentation.html.twig");
    }
}
