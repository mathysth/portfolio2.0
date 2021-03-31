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

/* pages/home.html.twig */
class __TwigTemplate_fe8484e249a8a28e4de94df137ace1ea20d2bb2c7e3dd353394a620d184ba35d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'inline_css' => [$this, 'block_inline_css'],
            'script' => [$this, 'block_script'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/home.html.twig", 1);
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
        echo "    <section class=\"hero-wrap\">
        <div class=\"overlay\"></div>
        <div class=\"container-xl\">
            <div class=\"row slider-text align-items-center align-items-stretch justify-content-between\">
                <div class=\"col-lg-6 text d-flex align-items-start align-items-sm-center\">
                    <div class=\"desc mt-4 mt-md-0\">
                        <span class=\"subheading\">";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->TranslateTextByKey("desiredProfession", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "get", [0 => "lang"], "method", false, false, false, 9)), "html", null, true);
        echo "</span>
                        <h1 class=\"mb-4\">";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->TranslateTextByKey("Hello", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "get", [0 => "lang"], "method", false, false, false, 10)), "html", null, true);
        echo "</h1>
                        <p>
                            <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("presentation", ["lang" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "get", [0 => "lang"], "method", false, false, false, 12)]), "html", null, true);
        echo "\" class=\"btn btn-primary p-4 py-3\">";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->TranslateTextByKey("moreAboutMe", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "get", [0 => "lang"], "method", false, false, false, 12)), "html", null, true);
        echo " <span class=\"ion-ios-arrow-round-forward\"></span></a>
                            <a href=\"mailto:";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->TranslateTextByKey("email", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "get", [0 => "lang"], "method", false, false, false, 13)), "html", null, true);
        echo "\" class=\"btn btn-white p-4 py-3\">";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->TranslateTextByKey("contactMe", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "get", [0 => "lang"], "method", false, false, false, 13)), "html", null, true);
        echo " <span class=\"ion-ios-arrow-round-forward\"></span></a>
                        </p>

                    </div>
                </div>
                <div class=\"col-lg-6 d-flex align-items-end justify-content-end\">
                    <!--
                    <div class=\"carousel-about\">
                        <div class=\"item\">
                            <img src=\"/build/img/jshmidt.png\" class=\"img-fluid\" alt=\"Me\">
                        </div>
                        <div class=\"item\">
                            <img src=\"/build/img/jshmidt-2.png\" class=\"img-fluid\" alt=\"Me\">
                        </div>
                        </span>
                         <img src=\"images/jschmidt-2.png\" class=\"img-fluid\" alt=\"Colorlib\">
                    </div>
                -->
                </div>
            </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_inline_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inline_css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inline_css"));

        // line 36
        echo "<style>
    .hero-wrap .overlay{

    }
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 43
        echo "    <script>
        // Permet de print un resultat donné par l'api
       let salut;
       let test = sendAjaxRequest(\"http/checkDns\",\"html\").then(function (g){
           console.log(g);
           salut = g;
       })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 43,  152 => 42,  137 => 36,  127 => 35,  93 => 13,  87 => 12,  82 => 10,  78 => 9,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block body %}
    <section class=\"hero-wrap\">
        <div class=\"overlay\"></div>
        <div class=\"container-xl\">
            <div class=\"row slider-text align-items-center align-items-stretch justify-content-between\">
                <div class=\"col-lg-6 text d-flex align-items-start align-items-sm-center\">
                    <div class=\"desc mt-4 mt-md-0\">
                        <span class=\"subheading\">{{ translate('desiredProfession',app.request.get('lang')) }}</span>
                        <h1 class=\"mb-4\">{{ translate('Hello',app.request.get('lang')) }}</h1>
                        <p>
                            <a href=\"{{ path('presentation',{\"lang\": app.request.get('lang')}) }}\" class=\"btn btn-primary p-4 py-3\">{{ translate('moreAboutMe',app.request.get('lang')) }} <span class=\"ion-ios-arrow-round-forward\"></span></a>
                            <a href=\"mailto:{{ translate('email',app.request.get('lang')) }}\" class=\"btn btn-white p-4 py-3\">{{ translate('contactMe',app.request.get('lang')) }} <span class=\"ion-ios-arrow-round-forward\"></span></a>
                        </p>

                    </div>
                </div>
                <div class=\"col-lg-6 d-flex align-items-end justify-content-end\">
                    <!--
                    <div class=\"carousel-about\">
                        <div class=\"item\">
                            <img src=\"/build/img/jshmidt.png\" class=\"img-fluid\" alt=\"Me\">
                        </div>
                        <div class=\"item\">
                            <img src=\"/build/img/jshmidt-2.png\" class=\"img-fluid\" alt=\"Me\">
                        </div>
                        </span>
                         <img src=\"images/jschmidt-2.png\" class=\"img-fluid\" alt=\"Colorlib\">
                    </div>
                -->
                </div>
            </div>
    </section>
{% endblock %}
{% block inline_css %}
<style>
    .hero-wrap .overlay{

    }
</style>
{% endblock %}
{% block script %}
    <script>
        // Permet de print un resultat donné par l'api
       let salut;
       let test = sendAjaxRequest(\"http/checkDns\",\"html\").then(function (g){
           console.log(g);
           salut = g;
       })
    </script>
{% endblock %}", "pages/home.html.twig", "C:\\wamp64\\www\\mathys.theolade\\Theolade\\04_sitePPE_dynamique\\portfolio2.0\\templates\\pages\\home.html.twig");
    }
}
