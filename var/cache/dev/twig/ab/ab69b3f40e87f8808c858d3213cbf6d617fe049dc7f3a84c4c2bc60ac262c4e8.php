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

/* pages/experience/realisation.html.twig */
class __TwigTemplate_89cd7ddaf104c3979bd97d6ab755573d9aae49a72cde505e101839a685dc6f24 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/experience/realisation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/experience/realisation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/experience/realisation.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("homePage", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "get", [0 => "lang"], "method", false, false, false, 9)), "html", null, true);
        echo " <i class=\"fa fa-chevron-right\"></i></a></span> <span>";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("experiencePage", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "get", [0 => "lang"], "method", false, false, false, 9)), "html", null, true);
        echo " <i class=\"fa fa-chevron-right\"></i></span></p>
                    <h1 class=\"mb-0 bread\">Experiences</h1>
                </div>
            </div>
        </div>
    </section>

    <section class=\"ftco-section\">
        <div class=\"container-xl\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"resume-wrap d-flex align-item-stretch\" data-aos=\"fade-up\" data-aos-duration=\"1000\" data-aos-delay=\"100\">
                        <div class=\"w-100\">
                            <div class=\"icon\"><span class=\"flaticon-graduated\"></span></div>
                            <span class=\"date\">2014-2015</span>
                            <h2>Master Degree of Design</h2>
                            <span class=\"position\"><i class=\"ion-ios-pin me-2\"></i>Google Inc.</span>
                            <p class=\"mt-4\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        </div>
                    </div>
                    <div class=\"resume-wrap d-flex align-item-stretch\" data-aos=\"fade-up\" data-aos-duration=\"1000\" data-aos-delay=\"200\">
                        <div class=\"w-100\">
                            <div class=\"icon\"><span class=\"flaticon-graduated\"></span></div>
                            <span class=\"date\">2014-2015</span>
                            <h2>Bachelor's Degree of C.A</h2>
                            <span class=\"position\"><i class=\"ion-ios-pin me-2\"></i>Google Inc.</span>
                            <p class=\"mt-4\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        </div>
                    </div>
                    <div class=\"resume-wrap d-flex align-item-stretch\" data-aos=\"fade-up\" data-aos-duration=\"1000\" data-aos-delay=\"900\">
                        <div class=\"w-300\">
                            <div class=\"icon\"><span class=\"flaticon-graduated\"></span></div>
                            <span class=\"date\">2014-2015</span>
                            <h2>Diploma in Computer</h2>
                            <span class=\"position\"><i class=\"ion-ios-pin me-2\"></i>Google Inc.</span>
                            <p class=\"mt-4\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-6\">
                    <div class=\"resume-wrap d-flex align-item-stretch\" data-aos=\"fade-up\" data-aos-duration=\"1000\" data-aos-delay=\"400\">
                        <div class=\"w-100\">
                            <div class=\"icon\"><span class=\"flaticon-work-from-home\"></span></div>
                            <span class=\"date\">2014-2015</span>
                            <h2>Art &amp; Creative Director</h2>
                            <span class=\"position\"><i class=\"ion-ios-pin me-2\"></i>Google Inc.</span>
                            <p class=\"mt-4\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        </div>
                    </div>
                    <div class=\"resume-wrap d-flex align-item-stretch\" data-aos=\"fade-up\" data-aos-duration=\"1000\" data-aos-delay=\"500\">
                        <div class=\"w-100\">
                            <div class=\"icon\"><span class=\"flaticon-work-from-home\"></span></div>
                            <span class=\"date\">2015-2017</span>
                            <h2>Wordpress Developer</h2>
                            <span class=\"position\"><i class=\"ion-ios-pin me-2\"></i>Google Inc.</span>
                            <p class=\"mt-4\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        </div>
                    </div>
                    <div class=\"resume-wrap d-flex align-item-stretch\" data-aos=\"fade-up\" data-aos-duration=\"1000\" data-aos-delay=\"600\">
                        <div class=\"w-100\">
                            <div class=\"icon\"><span class=\"flaticon-work-from-home\"></span></div>
                            <span class=\"date\">2018-2020</span>
                            <h2>UI/UX Designer</h2>
                            <span class=\"position\"><i class=\"ion-ios-pin me-2\"></i>Google Inc.</span>
                            <p class=\"mt-4\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/experience/realisation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 9,  68 => 3,  58 => 2,  35 => 1,);
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
                    <p class=\"breadcrumbs\"><span class=\"me-2\"><a href=\"{{ path('home',{\"lang\": app.request.get('lang')}) }}\"> {{ translate('homePage',app.request.get('lang')) }} <i class=\"fa fa-chevron-right\"></i></a></span> <span>{{ translate('experiencePage',app.request.get('lang')) }} <i class=\"fa fa-chevron-right\"></i></span></p>
                    <h1 class=\"mb-0 bread\">Experiences</h1>
                </div>
            </div>
        </div>
    </section>

    <section class=\"ftco-section\">
        <div class=\"container-xl\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"resume-wrap d-flex align-item-stretch\" data-aos=\"fade-up\" data-aos-duration=\"1000\" data-aos-delay=\"100\">
                        <div class=\"w-100\">
                            <div class=\"icon\"><span class=\"flaticon-graduated\"></span></div>
                            <span class=\"date\">2014-2015</span>
                            <h2>Master Degree of Design</h2>
                            <span class=\"position\"><i class=\"ion-ios-pin me-2\"></i>Google Inc.</span>
                            <p class=\"mt-4\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        </div>
                    </div>
                    <div class=\"resume-wrap d-flex align-item-stretch\" data-aos=\"fade-up\" data-aos-duration=\"1000\" data-aos-delay=\"200\">
                        <div class=\"w-100\">
                            <div class=\"icon\"><span class=\"flaticon-graduated\"></span></div>
                            <span class=\"date\">2014-2015</span>
                            <h2>Bachelor's Degree of C.A</h2>
                            <span class=\"position\"><i class=\"ion-ios-pin me-2\"></i>Google Inc.</span>
                            <p class=\"mt-4\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        </div>
                    </div>
                    <div class=\"resume-wrap d-flex align-item-stretch\" data-aos=\"fade-up\" data-aos-duration=\"1000\" data-aos-delay=\"900\">
                        <div class=\"w-300\">
                            <div class=\"icon\"><span class=\"flaticon-graduated\"></span></div>
                            <span class=\"date\">2014-2015</span>
                            <h2>Diploma in Computer</h2>
                            <span class=\"position\"><i class=\"ion-ios-pin me-2\"></i>Google Inc.</span>
                            <p class=\"mt-4\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-6\">
                    <div class=\"resume-wrap d-flex align-item-stretch\" data-aos=\"fade-up\" data-aos-duration=\"1000\" data-aos-delay=\"400\">
                        <div class=\"w-100\">
                            <div class=\"icon\"><span class=\"flaticon-work-from-home\"></span></div>
                            <span class=\"date\">2014-2015</span>
                            <h2>Art &amp; Creative Director</h2>
                            <span class=\"position\"><i class=\"ion-ios-pin me-2\"></i>Google Inc.</span>
                            <p class=\"mt-4\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        </div>
                    </div>
                    <div class=\"resume-wrap d-flex align-item-stretch\" data-aos=\"fade-up\" data-aos-duration=\"1000\" data-aos-delay=\"500\">
                        <div class=\"w-100\">
                            <div class=\"icon\"><span class=\"flaticon-work-from-home\"></span></div>
                            <span class=\"date\">2015-2017</span>
                            <h2>Wordpress Developer</h2>
                            <span class=\"position\"><i class=\"ion-ios-pin me-2\"></i>Google Inc.</span>
                            <p class=\"mt-4\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        </div>
                    </div>
                    <div class=\"resume-wrap d-flex align-item-stretch\" data-aos=\"fade-up\" data-aos-duration=\"1000\" data-aos-delay=\"600\">
                        <div class=\"w-100\">
                            <div class=\"icon\"><span class=\"flaticon-work-from-home\"></span></div>
                            <span class=\"date\">2018-2020</span>
                            <h2>UI/UX Designer</h2>
                            <span class=\"position\"><i class=\"ion-ios-pin me-2\"></i>Google Inc.</span>
                            <p class=\"mt-4\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock %}", "pages/experience/realisation.html.twig", "C:\\xampp\\htdocs\\www\\Sites\\Ecole\\PPE\\mainSite\\templates\\pages\\experience\\realisation.html.twig");
    }
}
