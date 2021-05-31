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
                <strong>
                    ";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("identifiant"), "html", null, true);
        echo " : <br/>
                    Email : sb-safa23533798@business.example.com <br/>
                    ";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("password"), "html", null, true);
        echo " : 7/JpV0Oe
                </strong>
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th scope=\"col\">";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("product"), "html", null, true);
        echo "</th>
                        <th scope=\"col\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("price"), "html", null, true);
        echo "</th>
                        <th scope=\"col\">";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("quantity"), "html", null, true);
        echo "</th>
                        <th scope=\"col\"></th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 36
        $context["total"] = 0;
        // line 37
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 38
            echo "                        <tr>
                        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["produit"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 40
                echo "                            ";
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 40, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "item", [], "any", false, false, false, 40), "prix", [], "any", false, false, false, 40) * twig_get_attribute($this->env, $this->source, $context["item"], "qte", [], "any", false, false, false, 40)));
                // line 41
                echo "                            <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "item", [], "any", false, false, false, 41), "nom", [], "any", false, false, false, 41), "html", null, true);
                echo "</td>
                            <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "item", [], "any", false, false, false, 42), "prix", [], "any", false, false, false, 42), "html", null, true);
                echo "</td>
                            <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "qte", [], "any", false, false, false, 43), "html", null, true);
                echo "</td>
                            <td><button class=\"btn btn-primary\" style=\"border-radius: 5px;\" onclick=\"alertBeforePush(";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "item", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44), "html", null, true);
                echo ")\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("delete"), "html", null, true);
                echo "</button> </td>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                    </tbody>
                </table>
                <p align=\"center\" style=\"font-weight: bold;\">";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("total"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 50, $this->source); })()), "html", null, true);
        echo " €</p>
                ";
        // line 51
        if ((1 === twig_compare((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 51, $this->source); })()), 0))) {
            // line 52
            echo "                    <div id=\"paypal-button\" ></div>
                ";
        }
        // line 54
        echo "            </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 58
        echo "    <script src=\"https://www.paypalobjects.com/api/checkout.js\"></script>
    <script>
        function alertBeforePush(productId) {
            swal({
                title: \"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("AreYouSure"), "html", null, true);
        echo "\",
                text: \"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("SureDeleteProduct"), "html", null, true);
        echo "\",
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
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFilterExtension']->setApiCorrectLinkFormat($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_deleteFromBasket")), "html", null, true);
        echo "\",\"html\",data).then(function (e){
                    alertPlugin(\"Success\",\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("productDeleteSuccess"), "html", null, true);
        echo "\",\"success\")
                    setTimeout(function (e){
                        document.location.href = document.location;
                    },1500);
                }).catch(function(e){
                    swal('";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("internalError"), "html", null, true);
        echo "');
                })
            }else{
                swal('";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("internalError"), "html", null, true);
        echo "');
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
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_paypal_setup");
        echo "').then(function (data) {
                    return data.id;
                });
            },
            onAuthorize: function (data, actions) {
                return paypal.request.post('";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_paypal_confirm");
        echo "', {
                    paymentID: data.paymentID,
                    payerID: data.payerID
                }).then(function (data) {
                    if (data === 400) {
                        alertPlugin(\"Erreur\", \"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("internalError"), "html", null, true);
        echo "\", \"error\");
                    } else {
                        alertPlugin(\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("paymentError"), "html", null, true);
        echo "\", \" Le paiement a été validé. Id de paiement : \"+ data.paymentID +\". L'id de votre compte Paypal : \" + data.payerID, \"success\");

                    }
                }).catch(function (err) {
                    console.log('erreur', err);
                    alertPlugin(\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("paymentSuccess"), "html", null, true);
        echo "\", \" ";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("paymentNotValid"), "html", null, true);
        echo "\", \"error\");
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
        return array (  310 => 124,  302 => 119,  297 => 117,  289 => 112,  281 => 107,  261 => 90,  255 => 87,  247 => 82,  243 => 81,  222 => 63,  218 => 62,  212 => 58,  202 => 57,  190 => 54,  186 => 52,  184 => 51,  178 => 50,  174 => 48,  167 => 46,  157 => 44,  153 => 43,  149 => 42,  144 => 41,  141 => 40,  137 => 39,  134 => 38,  129 => 37,  127 => 36,  119 => 31,  115 => 30,  111 => 29,  103 => 24,  98 => 22,  85 => 12,  78 => 10,  69 => 3,  59 => 2,  36 => 1,);
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
                <strong>
                    {{ translate('identifiant') }} : <br/>
                    Email : sb-safa23533798@business.example.com <br/>
                    {{ translate('password') }} : 7/JpV0Oe
                </strong>
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th scope=\"col\">{{ translate(\"product\") }}</th>
                        <th scope=\"col\">{{ translate(\"price\") }}</th>
                        <th scope=\"col\">{{ translate(\"quantity\") }}</th>
                        <th scope=\"col\"></th>
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
                            <td><button class=\"btn btn-primary\" style=\"border-radius: 5px;\" onclick=\"alertBeforePush({{ item.item.id }})\">{{ translate(\"delete\") }}</button> </td>
                        {% endfor %}
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
                <p align=\"center\" style=\"font-weight: bold;\">{{ translate(\"total\") }} : {{ total }} €</p>
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
                title: \"{{ translate(\"AreYouSure\") }}\",
                text: \"{{ translate(\"SureDeleteProduct\") }}\",
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
                    alertPlugin(\"Success\",\"{{translate('productDeleteSuccess')}}\",\"success\")
                    setTimeout(function (e){
                        document.location.href = document.location;
                    },1500);
                }).catch(function(e){
                    swal('{{ translate(\"internalError\") }}');
                })
            }else{
                swal('{{ translate(\"internalError\") }}');
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
                        alertPlugin(\"Erreur\", \"{{ translate('internalError') }}\", \"error\");
                    } else {
                        alertPlugin(\"{{translate(\"paymentError\")}}\", \" Le paiement a été validé. Id de paiement : \"+ data.paymentID +\". L'id de votre compte Paypal : \" + data.payerID, \"success\");

                    }
                }).catch(function (err) {
                    console.log('erreur', err);
                    alertPlugin(\"{{translate(\"paymentSuccess\")}}\", \" {{ translate(\"paymentNotValid\") }}\", \"error\");
                });
            }
        }, '#paypal-button');
    </script>
{% endblock %}", "pages/panier.html.twig", "C:\\xampp\\htdocs\\www\\Sites\\Ecole\\PPE\\mainSite\\templates\\pages\\panier.html.twig");
    }
}
