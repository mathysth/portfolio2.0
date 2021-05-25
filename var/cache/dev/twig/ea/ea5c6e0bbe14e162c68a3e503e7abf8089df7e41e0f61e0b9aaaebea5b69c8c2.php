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

/* pages/panier.html.twig */
class __TwigTemplate_7324c6579a505d19732dda44848c4d564f76653cc40ceed722052b76f0d5f9a4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/panier.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/panier.html.twig", 1);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 23
            echo "                <div class=\"col-md-4\">
                    ";
            // line 24
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "filename", [], "any", false, false, false, 24), "empty.jpg"))) {
                // line 25
                echo "                    <div class=\"project img ftco-animate d-flex justify-content-center align-items-center\" style=\"background-image: url(";
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["produit"], "imageFile"), "html", null, true);
                echo ");\">
                        ";
            } else {
                // line 27
                echo "                        <div class=\"project img ftco-animate d-flex justify-content-center align-items-center\" style=\"background-image: url(http://via.placeholder.com/1000x600);\">
                            ";
            }
            // line 29
            echo "                            <div class=\"overlay\"></div>
                            <div class=\"text text-center p-4\">
                                <h3><a href=\"#\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 31), "html", null, true);
            echo "</a></h3>
                                <span>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 32), "html", null, true);
            echo " €</span>
                                <a class=\"btn btn-primary d-block px-2 py-3\" onclick=\"addToBasket(";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo ")\">Ajouter au panier</a>
                                <a class=\"btn btn-primary d-block px-2 py-3\" onclick=\"deleteFromBasket(";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo ")\">Supprimer du panier</a>

                            </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "

                </div>

                ";
        // line 44
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 44, $this->source); })()));
        echo "

            </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 50
        echo "    <script>

        async function deleteFromBasket(productId){
            if (Number.isInteger(parseInt(productId))){
                let data = {
                    productId
                };
                sendAjaxRequest(\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFilterExtension']->setApiCorrectLinkFormat($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_deleteFromBasket")), "html", null, true);
        echo "\",\"html\",data)
            }else{
                swal('Erreur interne');
            }
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 57,  176 => 50,  166 => 49,  151 => 44,  145 => 40,  133 => 34,  129 => 33,  125 => 32,  121 => 31,  117 => 29,  113 => 27,  107 => 25,  105 => 24,  102 => 23,  98 => 22,  85 => 12,  78 => 10,  69 => 3,  59 => 2,  36 => 1,);
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

                {% for produit in produits %}
                <div class=\"col-md-4\">
                    {% if produit.filename != \"empty.jpg\" %}
                    <div class=\"project img ftco-animate d-flex justify-content-center align-items-center\" style=\"background-image: url({{ vich_uploader_asset(produit,\"imageFile\") }});\">
                        {% else %}
                        <div class=\"project img ftco-animate d-flex justify-content-center align-items-center\" style=\"background-image: url(http://via.placeholder.com/1000x600);\">
                            {% endif %}
                            <div class=\"overlay\"></div>
                            <div class=\"text text-center p-4\">
                                <h3><a href=\"#\">{{ produit.nom }}</a></h3>
                                <span>{{ produit.prix }} €</span>
                                <a class=\"btn btn-primary d-block px-2 py-3\" onclick=\"addToBasket({{ produit.id }})\">Ajouter au panier</a>
                                <a class=\"btn btn-primary d-block px-2 py-3\" onclick=\"deleteFromBasket({{ produit.id }})\">Supprimer du panier</a>

                            </div>
                        </div>
                    </div>
                    {% endfor %}


                </div>

                {{ knp_pagination_render(produits) }}

            </div>
    </section>
{% endblock %}
{% block script %}
    <script>

        async function deleteFromBasket(productId){
            if (Number.isInteger(parseInt(productId))){
                let data = {
                    productId
                };
                sendAjaxRequest(\"{{ path('api_deleteFromBasket') | setApiCorrectLinkFormat }}\",\"html\",data)
            }else{
                swal('Erreur interne');
            }
        }
    </script>
{% endblock %}", "pages/panier.html.twig", "C:\\xampp\\htdocs\\www\\Sites\\Ecole\\PPE\\mainSite\\templates\\pages\\panier.html.twig");
    }
}
