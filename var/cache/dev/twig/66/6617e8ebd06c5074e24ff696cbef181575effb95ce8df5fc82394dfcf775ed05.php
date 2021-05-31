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
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("nav_homePage"), "html", null, true);
        echo " <i
                                        class=\"fa fa-chevron-right\"></i></a></p>
                    <h1 class=\"mb-0 bread\">";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("moreAboutMe"), "html", null, true);
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
                        <div class=\"col-md-12 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                            <div class=\"counter-wrap\">
                                <span class=\"number\"><span class=\"countup\">0</span></span>
                                <span class=\"caption\">";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("soon"), "html", null, true);
        echo "</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"row section-counter\">
                        <div class=\"col-md-12 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                            <div class=\"counter-wrap\">
                                <span class=\"number\"><span class=\"countup\">0</span></span>
                                <span class=\"caption\">";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("soon"), "html", null, true);
        echo "</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-6 heading-section d-flex align-items-center\" data-aos=\"fade-up\" data-aos-delay=\"500\"
                     data-aos-duration=\"1000\">
                    <div class=\"mt-5 mt-md-0\">
                        <span class=\"subheading\">";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("moreAboutMe"), "html", null, true);
        echo "</span>
                        <h2 class=\"mb-4\">";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("desiredProfession"), "html", null, true);
        echo "</h2>
                        <p class=\"\">";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("speech"), "html", null, true);
        echo "</p>
                        <div class=\"row mb-4\">
                            <div class=\"col-lg-6\">
                                <ul class=\"about-info mt-4 px-md-0 px-2\">
                                    <li class=\"d-flex\">
                                        <span>";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("nameLabel"), "html", null, true);
        echo ":</span>
                                        <span> ";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("nameResult"), "html", null, true);
        echo "</span></li>
                                    <li class=\"d-flex\">
                                        <span>";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("BirthdayLabel"), "html", null, true);
        echo ":</span>
                                        <span> ";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("BirthdayResult"), "html", null, true);
        echo "</span></li>
                                    <li class=\"d-flex\">
                                        <span>";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("AddressLabel"), "html", null, true);
        echo ":</span>
                                        <span> ";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("AddressResult"), "html", null, true);
        echo "</span></li>
                                </ul>
                            </div>
                            <div class=\"col-lg-6\">
                                <ul class=\"about-info mt-4 px-md-0 px-2\">
                                    <li class=\"d-flex\"><span>";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("zipLabel"), "html", null, true);
        echo ":</span>
                                        <span>";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("zipResult"), "html", null, true);
        echo "</span></li>
                                    <li class=\"d-flex\">
                                        <span>";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("emailLabel"), "html", null, true);
        echo ":</span>
                                        <span>";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("email"), "html", null, true);
        echo "</span></li>
                                </ul>
                            </div>
                        </div>
                        <!--
                        <p><a href=\"#\" class=\"btn btn-primary py-3 px-4\">Download CV</a></p>
                        -->
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
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("skills"), "html", null, true);
        echo "</span>
                    <h2 class=\"mb-5\">";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("mySkills"), "html", null, true);
        echo "</h2>
                </div>
            </div>
            ";
        // line 86
        $context["continue"] = false;
        // line 87
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoryCompetence"]) || array_key_exists("categoryCompetence", $context) ? $context["categoryCompetence"] : (function () { throw new RuntimeError('Variable "categoryCompetence" does not exist.', 87, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categoryCompetences"]) {
            // line 88
            echo "                ";
            if ((0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoryCompetences"], "getCompetences", [], "any", false, false, false, 88)), 0))) {
                // line 89
                echo "                    ";
                $context["continue"] = true;
                // line 90
                echo "                ";
            }
            // line 91
            echo "                ";
            if ( !(isset($context["continue"]) || array_key_exists("continue", $context) ? $context["continue"] : (function () { throw new RuntimeError('Variable "continue" does not exist.', 91, $this->source); })())) {
                // line 92
                echo "                    <h4 class=\"mb-3\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoryCompetences"], "nom", [], "any", false, false, false, 92), "html", null, true);
                echo "</h4>
                    ";
                // line 93
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["competence"]) || array_key_exists("competence", $context) ? $context["competence"] : (function () { throw new RuntimeError('Variable "competence" does not exist.', 93, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["competences"]) {
                    // line 94
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["competences"], "competencesCategories", [], "any", false, false, false, 94), "contains", [0 => $context["categoryCompetences"]], "method", false, false, false, 94)) {
                        // line 95
                        echo "                            <div class=\"row\">
                                <div class=\"col-md-4\" data-aos=\"fade-up\" data-aos-duration=\"1000\" data-aos-delay=\"100\">
                                    <div class=\"progress-wrap\">
                                        <h3>";
                        // line 98
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competences"], "nom", [], "any", false, false, false, 98), "html", null, true);
                        echo "</h3>
                                        <div class=\"progress\">
                                            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"90\"
                                                 aria-valuemin=\"0\" aria-valuemax=\"100\"
                                                 style=\"width:";
                        // line 102
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competences"], "niveauCompetence", [], "any", false, false, false, 102), "html", null, true);
                        echo "%\">
                                                <span>";
                        // line 103
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competences"], "niveauCompetence", [], "any", false, false, false, 103), "html", null, true);
                        echo "%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
                    }
                    // line 110
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competences'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                echo "
                ";
            }
            // line 113
            echo "                ";
            if ((isset($context["continue"]) || array_key_exists("continue", $context) ? $context["continue"] : (function () { throw new RuntimeError('Variable "continue" does not exist.', 113, $this->source); })())) {
                // line 114
                echo "                    ";
                $context["continue"] = false;
                // line 115
                echo "                ";
            }
            // line 116
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoryCompetences'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "        </div>
    </section>
    ";
        // line 119
        $this->loadTemplate("pages/includes/_footer.html.twig", "pages/presentation.html.twig", 119)->display($context);
        
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
        return array (  298 => 119,  294 => 117,  288 => 116,  285 => 115,  282 => 114,  279 => 113,  275 => 111,  269 => 110,  259 => 103,  255 => 102,  248 => 98,  243 => 95,  240 => 94,  236 => 93,  231 => 92,  228 => 91,  225 => 90,  222 => 89,  219 => 88,  214 => 87,  212 => 86,  206 => 83,  202 => 82,  182 => 65,  178 => 64,  173 => 62,  169 => 61,  161 => 56,  157 => 55,  152 => 53,  148 => 52,  143 => 50,  139 => 49,  131 => 44,  127 => 43,  123 => 42,  111 => 33,  100 => 25,  83 => 11,  76 => 9,  68 => 3,  58 => 2,  35 => 1,);
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
                                    href=\"{{ path('home',{\"lang\": app.request.get(\"lang\")}) }}\">{{ translate('nav_homePage') }} <i
                                        class=\"fa fa-chevron-right\"></i></a></p>
                    <h1 class=\"mb-0 bread\">{{ translate('moreAboutMe') }}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class=\"ftco-section ftco-about-section\">
        <div class=\"container\">
            <div class=\"row g-xl-5\">
                <div class=\"col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"100\" data-aos-duration=\"1000\">
                    <div class=\"row section-counter\">
                        <div class=\"col-md-12 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                            <div class=\"counter-wrap\">
                                <span class=\"number\"><span class=\"countup\">0</span></span>
                                <span class=\"caption\">{{ translate(\"soon\") }}</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"row section-counter\">
                        <div class=\"col-md-12 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                            <div class=\"counter-wrap\">
                                <span class=\"number\"><span class=\"countup\">0</span></span>
                                <span class=\"caption\">{{ translate(\"soon\") }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-6 heading-section d-flex align-items-center\" data-aos=\"fade-up\" data-aos-delay=\"500\"
                     data-aos-duration=\"1000\">
                    <div class=\"mt-5 mt-md-0\">
                        <span class=\"subheading\">{{ translate('moreAboutMe') }}</span>
                        <h2 class=\"mb-4\">{{ translate('desiredProfession') }}</h2>
                        <p class=\"\">{{ translate('speech') }}</p>
                        <div class=\"row mb-4\">
                            <div class=\"col-lg-6\">
                                <ul class=\"about-info mt-4 px-md-0 px-2\">
                                    <li class=\"d-flex\">
                                        <span>{{ translate('nameLabel') }}:</span>
                                        <span> {{ translate('nameResult') }}</span></li>
                                    <li class=\"d-flex\">
                                        <span>{{ translate('BirthdayLabel') }}:</span>
                                        <span> {{ translate('BirthdayResult') }}</span></li>
                                    <li class=\"d-flex\">
                                        <span>{{ translate('AddressLabel') }}:</span>
                                        <span> {{ translate('AddressResult') }}</span></li>
                                </ul>
                            </div>
                            <div class=\"col-lg-6\">
                                <ul class=\"about-info mt-4 px-md-0 px-2\">
                                    <li class=\"d-flex\"><span>{{ translate('zipLabel') }}:</span>
                                        <span>{{ translate('zipResult') }}</span></li>
                                    <li class=\"d-flex\">
                                        <span>{{ translate('emailLabel') }}:</span>
                                        <span>{{ translate('email') }}</span></li>
                                </ul>
                            </div>
                        </div>
                        <!--
                        <p><a href=\"#\" class=\"btn btn-primary py-3 px-4\">Download CV</a></p>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"ftco-section testimony-section\">
        <div class=\"container-xl\">
            <div class=\"row justify-content-center pb-5\">
                <div class=\"col-md-7 text-center heading-section\" data-aos=\"fade-up\" data-aos-duration=\"1000\">
                    <span class=\"subheading\">{{ translate('skills') }}</span>
                    <h2 class=\"mb-5\">{{ translate('mySkills') }}</h2>
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
