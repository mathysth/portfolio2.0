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

/* security/login.html.twig */
class __TwigTemplate_b8e40ed4685a37013cddb570312b351a11998e9d564e4be395bdb5912f227d8a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Se connecter";
        
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
        echo "

    <section class=\"hero-wrap hero-wrap-2\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row no-gutters slider-text align-items-end justify-content-center\">
                <div class=\"col-md-9 pt-5 text-center\">
                    <p class=\"breadcrumbs\"><span class=\"me-2\"><a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home <i class=\"fa fa-chevron-right\"></i></a></span> <span>Security <i class=\"fa fa-chevron-right\"></i></span></p>
                    <h1 class=\"mb-0 bread\">Connexion</h1>
                </div>
            </div>
        </div>
    </section>-

    <section class=\"ftco-section bg-light\">
        <div class=\"d-flex justify-content-center\">
            <div class=\"row no-gutters justify-content-center\">
                <div class=\"col-md-12\">
                    <div class=\"wrapper\">
                        <div class=\"row g-0\">
                            <div class=\"col-lg-12\">
                                <div class=\"contact-wrap w-100 p-md-5 p-4\">
                                    ";
        // line 28
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 28, $this->source); })())) {
            // line 29
            echo "                                        <p class=\"mb-4 alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 29, $this->source); })()), "messageKey", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 29, $this->source); })()), "messagedata", [], "any", false, false, false, 29), "security"), "html", null, true);
            echo "</p>
                                    ";
        }
        // line 31
        echo "
                                    <form action=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
                                        <div class=\"row\">
                                            <div class=\"col-md-12 mb-2\">
                                                <div class=\"form-group\">
                                                    <input type=\"text\" required style=\"border-radius: 10px;\"  class=\"form-control\" name=\"_username\" placeholder=\"Nom d'utilisateur\">
                                                </div>
                                            </div>
                                            <div class=\"col-md-12 mb-3\">
                                                <div class=\"form-group\">
                                                    <input class=\"form-control\" required style=\"border-radius: 10px;\" type=\"password\" name=\"_password\" placeholder=\"Password\">
                                                </div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    <button type=\"submit\" style=\"border-radius: 5px;\" class=\"btn btn-primary\">Connexion</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
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
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 32,  123 => 31,  117 => 29,  115 => 28,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title 'Se connecter' %}

{% block body %}


    <section class=\"hero-wrap hero-wrap-2\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row no-gutters slider-text align-items-end justify-content-center\">
                <div class=\"col-md-9 pt-5 text-center\">
                    <p class=\"breadcrumbs\"><span class=\"me-2\"><a href=\"{{ path('home') }}\">Home <i class=\"fa fa-chevron-right\"></i></a></span> <span>Security <i class=\"fa fa-chevron-right\"></i></span></p>
                    <h1 class=\"mb-0 bread\">Connexion</h1>
                </div>
            </div>
        </div>
    </section>-

    <section class=\"ftco-section bg-light\">
        <div class=\"d-flex justify-content-center\">
            <div class=\"row no-gutters justify-content-center\">
                <div class=\"col-md-12\">
                    <div class=\"wrapper\">
                        <div class=\"row g-0\">
                            <div class=\"col-lg-12\">
                                <div class=\"contact-wrap w-100 p-md-5 p-4\">
                                    {% if error %}
                                        <p class=\"mb-4 alert alert-danger\">{{ error.messageKey | trans(error.messagedata, 'security') }}</p>
                                    {% endif %}

                                    <form action=\"{{ path('login') }}\" method=\"post\">
                                        <div class=\"row\">
                                            <div class=\"col-md-12 mb-2\">
                                                <div class=\"form-group\">
                                                    <input type=\"text\" required style=\"border-radius: 10px;\"  class=\"form-control\" name=\"_username\" placeholder=\"Nom d'utilisateur\">
                                                </div>
                                            </div>
                                            <div class=\"col-md-12 mb-3\">
                                                <div class=\"form-group\">
                                                    <input class=\"form-control\" required style=\"border-radius: 10px;\" type=\"password\" name=\"_password\" placeholder=\"Password\">
                                                </div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    <button type=\"submit\" style=\"border-radius: 5px;\" class=\"btn btn-primary\">Connexion</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock %}
", "security/login.html.twig", "C:\\xampp\\htdocs\\www\\Sites\\Ecole\\PPE\\mainSite\\templates\\security\\login.html.twig");
    }
}
