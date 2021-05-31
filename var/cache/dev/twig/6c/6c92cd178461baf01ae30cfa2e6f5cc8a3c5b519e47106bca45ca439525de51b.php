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
class __TwigTemplate_5c3bfaf18edd849b93d77dd916e817d8816d3212181388814ccc6048ee79a5bd extends Template
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
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("nav_homePage"), "html", null, true);
        echo " <i
                                        class=\"fa fa-chevron-right\"></i></a></p>
                    <h1 class=\"mb-0 bread\">";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("nav_Basket"), "html", null, true);
        echo "</h1>
                </div>
            </div>
        </div>
    </section>

    <section class=\"ftco-section ftco-project\">
        <div class=\"container\">
            <div class=\"row\">
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th scope=\"col\">Produit</th>
                        <th scope=\"col\">Prix</th>
                        <th scope=\"col\">Quantité</th>
                        <th scope=\"col\">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 31
        $context["total"] = 0;
        // line 32
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 33
            echo "                        <tr>
                        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["produit"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 35
                echo "                            ";
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 35, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "item", [], "any", false, false, false, 35), "prix", [], "any", false, false, false, 35) * twig_get_attribute($this->env, $this->source, $context["item"], "qte", [], "any", false, false, false, 35)));
                // line 36
                echo "                            <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "item", [], "any", false, false, false, 36), "nom", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
                            <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "item", [], "any", false, false, false, 37), "prix", [], "any", false, false, false, 37), "html", null, true);
                echo "</td>
                            <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "qte", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
                            <td><button class=\"btn btn-primary\" style=\"border-radius: 5px;\" onclick=\"alertBeforePush(";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "item", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39), "html", null, true);
                echo ")\">Supprimer</button> </td>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                    </tbody>
                </table>
                Total : ";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "
                ";
        // line 46
        if ((1 === twig_compare((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 46, $this->source); })()), 0))) {
            // line 47
            echo "                <div id=\"paypal-button\" ></div>
                ";
        }
        // line 49
        echo "            </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 53
        echo "    <script src=\"https://www.paypalobjects.com/api/checkout.js\"></script>
    <script>
        function alertBeforePush(productId) {
            swal({
                title: \"Etes vous sûr ?\",
                text: \"Voulez vous vraiment supprimer le produit\",
                icon: \"warning\",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        deleteFromBasket(productId)
                    }
                });
        }


        async function deleteFromBasket(productId){
            if (Number.isInteger(parseInt(productId))){
                let data = {
                    productId
                };
                sendAjaxRequest(\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFilterExtension']->setApiCorrectLinkFormat($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_deleteFromBasket")), "html", null, true);
        echo "\",\"html\",data).then(function (e){
                    alertPlugin(\"Success\",\"Produit supprimé avec succès\",\"success\")
                    setTimeout(function (e){
                        document.location.href = document.location;
                    },1500);
                }).catch(function(e){
                    swal('Erreur interne');
                })
            }else{
                swal('Erreur interne');
            }
        }


        paypal.Button.render({
            env: 'sandbox',
            commit: true,
            locale: 'fr_FR',
            style: {
                size: 'medium',
                color: 'white',
                shape: 'rect',
                label: 'checkout',
                tagline: 'true'
            },
            payment: function () {
                return paypal.request.post('";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_paypal_setup");
        echo "').then(function (data) {
                    return data.id;
                });
            },
            onAuthorize: function (data, actions) {
                return paypal.request.post('";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_paypal_confirm");
        echo "', {
                    paymentID: data.paymentID,
                    payerID: data.payerID
                }).then(function (data) {
                    if (data === 400) {
                        alertPlugin(\"Erreur\", \"INTERNAL SERVER ERROR : Veuillez contacter le support \", \"error\");
                    } else {
                        alertPlugin(\"Succès Paiement\", \" Le paiement a été validé. Id de paiement : \"+ data.paymentID +\". L'id de votre compte Paypal : \" + data.payerID, \"success\");

                    }
                }).catch(function (err) {
                    console.log('erreur', err);
                    alertPlugin(\"Erreur Paiement\", \" Le paiement n'a pas été validé. Veuillez retenter le paiement. Si malgré cela le paiement ne fonctionne toujours pas veuillez contacter le support   \", \"error\");
                });
            }
        }, '#paypal-button');
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
        return array (  250 => 107,  242 => 102,  213 => 76,  188 => 53,  178 => 52,  166 => 49,  162 => 47,  160 => 46,  156 => 45,  152 => 43,  145 => 41,  137 => 39,  133 => 38,  129 => 37,  124 => 36,  121 => 35,  117 => 34,  114 => 33,  109 => 32,  107 => 31,  85 => 12,  78 => 10,  69 => 3,  59 => 2,  36 => 1,);
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
                                    href=\"{{ path('home',{\"lang\": app.request.get(\"lang\")}) }}\">{{ translate('nav_homePage') }} <i
                                        class=\"fa fa-chevron-right\"></i></a></p>
                    <h1 class=\"mb-0 bread\">{{ translate('nav_Basket') }}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class=\"ftco-section ftco-project\">
        <div class=\"container\">
            <div class=\"row\">
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th scope=\"col\">Produit</th>
                        <th scope=\"col\">Prix</th>
                        <th scope=\"col\">Quantité</th>
                        <th scope=\"col\">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% set total = 0 %}
                    {% for produit in produits %}
                        <tr>
                        {% for item in produit %}
                            {% set total = total + item.item.prix * item.qte %}
                            <td>{{ item.item.nom }}</td>
                            <td>{{ item.item.prix }}</td>
                            <td>{{ item.qte }}</td>
                            <td><button class=\"btn btn-primary\" style=\"border-radius: 5px;\" onclick=\"alertBeforePush({{ item.item.id }})\">Supprimer</button> </td>
                        {% endfor %}
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
                Total : {{ total }}
                {% if total > 0 %}
                <div id=\"paypal-button\" ></div>
                {% endif %}
            </div>
    </section>
{% endblock %}
{% block script %}
    <script src=\"https://www.paypalobjects.com/api/checkout.js\"></script>
    <script>
        function alertBeforePush(productId) {
            swal({
                title: \"Etes vous sûr ?\",
                text: \"Voulez vous vraiment supprimer le produit\",
                icon: \"warning\",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        deleteFromBasket(productId)
                    }
                });
        }


        async function deleteFromBasket(productId){
            if (Number.isInteger(parseInt(productId))){
                let data = {
                    productId
                };
                sendAjaxRequest(\"{{ path('api_deleteFromBasket') | setApiCorrectLinkFormat }}\",\"html\",data).then(function (e){
                    alertPlugin(\"Success\",\"Produit supprimé avec succès\",\"success\")
                    setTimeout(function (e){
                        document.location.href = document.location;
                    },1500);
                }).catch(function(e){
                    swal('Erreur interne');
                })
            }else{
                swal('Erreur interne');
            }
        }


        paypal.Button.render({
            env: 'sandbox',
            commit: true,
            locale: 'fr_FR',
            style: {
                size: 'medium',
                color: 'white',
                shape: 'rect',
                label: 'checkout',
                tagline: 'true'
            },
            payment: function () {
                return paypal.request.post('{{ path('api_paypal_setup') }}').then(function (data) {
                    return data.id;
                });
            },
            onAuthorize: function (data, actions) {
                return paypal.request.post('{{ path('api_paypal_confirm') }}', {
                    paymentID: data.paymentID,
                    payerID: data.payerID
                }).then(function (data) {
                    if (data === 400) {
                        alertPlugin(\"Erreur\", \"INTERNAL SERVER ERROR : Veuillez contacter le support \", \"error\");
                    } else {
                        alertPlugin(\"Succès Paiement\", \" Le paiement a été validé. Id de paiement : \"+ data.paymentID +\". L'id de votre compte Paypal : \" + data.payerID, \"success\");

                    }
                }).catch(function (err) {
                    console.log('erreur', err);
                    alertPlugin(\"Erreur Paiement\", \" Le paiement n'a pas été validé. Veuillez retenter le paiement. Si malgré cela le paiement ne fonctionne toujours pas veuillez contacter le support   \", \"error\");
                });
            }
        }, '#paypal-button');
    </script>
{% endblock %}", "pages/panier.html.twig", "C:\\xampp\\htdocs\\www\\Sites\\Ecole\\PPE\\mainSite\\templates\\pages\\panier.html.twig");
    }
}
