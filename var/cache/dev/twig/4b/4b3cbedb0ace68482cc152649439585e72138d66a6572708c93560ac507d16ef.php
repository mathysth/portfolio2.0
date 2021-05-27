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

/* base.html.twig */
class __TwigTemplate_74cc2e3c63616474bb7f5ca47edd95ab5e681556dc2330d55905b372fbe778c5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'inline_css' => [$this, 'block_inline_css'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">

    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css\">

    <link rel=\"stylesheet\" href=\"/build/css/animate.css\">
    <link rel=\"stylesheet\" href=\"/build/css/flaticon.css\">
    <link rel=\"stylesheet\" href=\"/build/css/tiny-slider.css\">
    <link rel=\"stylesheet\" href=\"/build/css/glightbox.min.css\">
    <link rel=\"stylesheet\" href=\"/build/css/aos.css\">
    <link rel=\"stylesheet\" href=\"/build/css/style.css\">
    <link rel=\"stylesheet\" href=\"/build/css/feature.css\">

    <!-- Font / ScrollTools  -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\" integrity=\"sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==\" crossorigin=\"anonymous\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>
    <!-- <script src=\"https://www.paypalobjects.com/api/checkout.js\"></script> -->
    <script src=\"https://kit.fontawesome.com/54309b8d30.js\" crossorigin=\"anonymous\"></script>
    <script>
        function alertPlugin(title,content,type){
            swal(title, content, type);
        }
    </script>

    <style>
        .select2-container {
            width: auto !important;
        }
    </style>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css\"
          integrity=\"sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==\"
          crossorigin=\"anonymous\"/>
    ";
        // line 43
        $this->displayBlock('inline_css', $context, $blocks);
        // line 44
        echo "
    <title>";
        // line 45
        $this->displayBlock('title', $context, $blocks);
        echo "</title>


</head>
<body>
<nav class=\"navbar ftco-navbar-light\"><!-- navbar-expand-lg  -->
    <div class=\"container-xl\">
        <a class=\"navbar-brand align-items-center\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
            <span class=\"\">";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("websiteName"), "html", null, true);
        echo "</span>
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
                <li class=\"nav-item\"><a class=\"nav-link ";
        // line 60
        if ((array_key_exists("current_menu", $context) && (0 === twig_compare((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 60, $this->source); })()), "home")))) {
            echo " active ";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("nav_homePage"), "html", null, true);
        echo "</a></li>
                <li class=\"nav-item\"><a class=\"nav-link ";
        // line 61
        if ((array_key_exists("current_menu", $context) && (0 === twig_compare((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 61, $this->source); })()), "about")))) {
            echo " active ";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("presentation");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("nav_aboutPage"), "html", null, true);
        echo "</a></li>
                <li class=\"nav-item\"><a class=\"nav-link ";
        // line 62
        if ((array_key_exists("current_menu", $context) && (0 === twig_compare((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 62, $this->source); })()), "realisation")))) {
            echo " active ";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("realisation");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("nav_realisation"), "html", null, true);
        echo "</a></li>
                <li class=\"nav-item\"><a class=\"nav-link ";
        // line 63
        if ((array_key_exists("current_menu", $context) && (0 === twig_compare((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 63, $this->source); })()), "experience")))) {
            echo " active ";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("experience");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("nav_experiencePage"), "html", null, true);
        echo "</a></li>
                <li class=\"nav-item\"><a class=\"nav-link ";
        // line 64
        if ((array_key_exists("current_menu", $context) && (0 === twig_compare((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 64, $this->source); })()), "parcour")))) {
            echo " active ";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parcours");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("nav_parcour"), "html", null, true);
        echo "</a></li>
                <li class=\"nav-item\"><a class=\"nav-link ";
        // line 65
        if ((array_key_exists("current_menu", $context) && (0 === twig_compare((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 65, $this->source); })()), "boutique")))) {
            echo " active ";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("boutique");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("nav_shopPage"), "html", null, true);
        echo "</a></li>
                <li class=\"nav-item\"><a class=\"nav-link \" href=\"mailto:";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("email"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("contactMe"), "html", null, true);
        echo "</a></li>
                ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67)) {
            // line 68
            echo "                    <li class=\"nav-item\"><a class=\"nav-link active\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("nav_logout"), "html", null, true);
            echo "</a></li>
                ";
        }
        // line 70
        echo "            </ul>
        </div>
    </div>
</nav>

    ";
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "
<!-- Button trigger modal -->
<button type=\"button\" class=\"changeLang\" data-bs-toggle=\"modal\" data-bs-target=\"#langChange\">
    <i class=\"fas fa-language fa-3x\"></i>
</button>

<!-- Modal -->
<div class=\"modal fade\" id=\"langChange\" tabindex=\"-1\" aria-labelledby=\"langChangeLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"langChangeLabel\">Changement de Langue</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"customLang\" onclick=\"updateLangSelect('FR')\" id=\"FR\">
                    FR
                </div>
                <div class=\"customLang\" onclick=\"updateLangSelect('EN')\" id=\"EN\">
                    EN
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                <button type=\"button\" class=\"btn btn-primary\" onclick=\"confirmLangChange()\">Sauvegarder</button>
            </div>
        </div>
    </div>
</div>

    <!-- JS -->
    <script>
        function sendAjaxRequest(url,dataType,param = null,method = \"POST\"){
            return \$.ajax({
                url: \"/api/\"+url,
                method: method,
                data: {
                    explode: param
                },
                dataType: dataType,
                async: true
            })
        }
    </script>


    <script src=\"/build/js/LangController.js\"></script>
    <script src=\"/build/js/bootstrap.bundle.min.js\"></script>
    <script src=\"/build/js/tiny-slider.js\"></script>
    <script src=\"/build/js/glightbox.min.js\"></script>
    <script src=\"/build/js/aos.js\"></script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false\"></script>
    <script src=\"/build/js/main.js\"></script>
    <script src=\"/build/js/feature.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js\" integrity=\"sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==\" crossorigin=\"anonymous\"></script>

    <!--
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js\"
            integrity=\"sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==\"
            crossorigin=\"anonymous\"></script>
    <script>
        \$('select').select2();
    </script>

    <script>
        // Permet de print un resultat donné par l'api
        let currentLang = new LangController();
        function setLang(requiredLang = null,param = {}){
            if (currentLang.getCurrentLang() === null || param['_force'] === true){
                /** SetUp de la langue **/
                if (requiredLang){
                    currentLang.setCurrentLang(requiredLang);
                }else{
                    currentLang.setCurrentLang(currentLang.supportedLang[0]);
                }
                currentLang.setLang();
                /** Mise en place de la langue au niveau de l'api **/
                sendAjaxRequest(\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFilterExtension']->setApiCorrectLinkFormat($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_Lang_set")), "html", null, true);
        echo "\", \"html\", {lang: currentLang.getCurrentLang()}).then(function (e) {
                    console.log(\"Changement de langue effectué avec succès\");
                }).catch(function (e) {
                    console.log(\"erreur\");
                    console.log(e);
                })
            }
        }

        sendAjaxRequest(\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFilterExtension']->setApiCorrectLinkFormat($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_Lang_get")), "html", null, true);
        echo "\", \"html\").then(function (data) {
            console.log(data);
        });

        // Lancer cette fonction que si il n'y a aucune langue détecté
        if (currentLang.getCurrentLang() === null) {
            setLang();
            setTimeout(function (e){
                document.location.href = document.location;
            },1000)
        }
    </script>

    ";
        // line 177
        $this->displayBlock('script', $context, $blocks);
        // line 178
        echo "</div>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 43
    public function block_inline_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inline_css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inline_css"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Portfolio ";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("ownerFullName"), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 177
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 177,  368 => 75,  347 => 45,  329 => 43,  316 => 178,  314 => 177,  298 => 164,  286 => 155,  205 => 76,  203 => 75,  196 => 70,  188 => 68,  186 => 67,  180 => 66,  170 => 65,  160 => 64,  150 => 63,  140 => 62,  130 => 61,  120 => 60,  110 => 53,  106 => 52,  96 => 45,  93 => 44,  91 => 43,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">

    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css\">

    <link rel=\"stylesheet\" href=\"/build/css/animate.css\">
    <link rel=\"stylesheet\" href=\"/build/css/flaticon.css\">
    <link rel=\"stylesheet\" href=\"/build/css/tiny-slider.css\">
    <link rel=\"stylesheet\" href=\"/build/css/glightbox.min.css\">
    <link rel=\"stylesheet\" href=\"/build/css/aos.css\">
    <link rel=\"stylesheet\" href=\"/build/css/style.css\">
    <link rel=\"stylesheet\" href=\"/build/css/feature.css\">

    <!-- Font / ScrollTools  -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\" integrity=\"sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==\" crossorigin=\"anonymous\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>
    <!-- <script src=\"https://www.paypalobjects.com/api/checkout.js\"></script> -->
    <script src=\"https://kit.fontawesome.com/54309b8d30.js\" crossorigin=\"anonymous\"></script>
    <script>
        function alertPlugin(title,content,type){
            swal(title, content, type);
        }
    </script>

    <style>
        .select2-container {
            width: auto !important;
        }
    </style>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css\"
          integrity=\"sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==\"
          crossorigin=\"anonymous\"/>
    {% block inline_css %}{% endblock %}

    <title>{% block title %}Portfolio {{ translate(\"ownerFullName\")}} {% endblock %}</title>


</head>
<body>
<nav class=\"navbar ftco-navbar-light\"><!-- navbar-expand-lg  -->
    <div class=\"container-xl\">
        <a class=\"navbar-brand align-items-center\" href=\"{{ path('home') }}\">
            <span class=\"\">{{ translate('websiteName') }}</span>
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
                <li class=\"nav-item\"><a class=\"nav-link {% if current_menu is defined and current_menu == \"home\" %} active {% endif %}\" href=\"{{ path('home') }}\">{{ translate('nav_homePage') }}</a></li>
                <li class=\"nav-item\"><a class=\"nav-link {% if current_menu is defined and current_menu == \"about\" %} active {% endif %}\" href=\"{{ path('presentation') }}\">{{ translate('nav_aboutPage') }}</a></li>
                <li class=\"nav-item\"><a class=\"nav-link {% if current_menu is defined and current_menu == \"realisation\" %} active {% endif %}\" href=\"{{ path('realisation') }}\">{{ translate('nav_realisation') }}</a></li>
                <li class=\"nav-item\"><a class=\"nav-link {% if current_menu is defined and current_menu == \"experience\" %} active {% endif %}\" href=\"{{ path('experience') }}\">{{ translate('nav_experiencePage') }}</a></li>
                <li class=\"nav-item\"><a class=\"nav-link {% if current_menu is defined and current_menu == \"parcour\" %} active {% endif %}\" href=\"{{ path('parcours') }}\">{{ translate('nav_parcour') }}</a></li>
                <li class=\"nav-item\"><a class=\"nav-link {% if current_menu is defined and current_menu == \"boutique\" %} active {% endif %}\" href=\"{{ path('boutique') }}\">{{ translate('nav_shopPage') }}</a></li>
                <li class=\"nav-item\"><a class=\"nav-link \" href=\"mailto:{{ translate('email') }}\">{{ translate('contactMe') }}</a></li>
                {% if app.user %}
                    <li class=\"nav-item\"><a class=\"nav-link active\" href=\"{{ path('logout') }}\">{{ translate('nav_logout') }}</a></li>
                {% endif %}
            </ul>
        </div>
    </div>
</nav>

    {% block body %} {%  endblock %}

<!-- Button trigger modal -->
<button type=\"button\" class=\"changeLang\" data-bs-toggle=\"modal\" data-bs-target=\"#langChange\">
    <i class=\"fas fa-language fa-3x\"></i>
</button>

<!-- Modal -->
<div class=\"modal fade\" id=\"langChange\" tabindex=\"-1\" aria-labelledby=\"langChangeLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"langChangeLabel\">Changement de Langue</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"customLang\" onclick=\"updateLangSelect('FR')\" id=\"FR\">
                    FR
                </div>
                <div class=\"customLang\" onclick=\"updateLangSelect('EN')\" id=\"EN\">
                    EN
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                <button type=\"button\" class=\"btn btn-primary\" onclick=\"confirmLangChange()\">Sauvegarder</button>
            </div>
        </div>
    </div>
</div>

    <!-- JS -->
    <script>
        function sendAjaxRequest(url,dataType,param = null,method = \"POST\"){
            return \$.ajax({
                url: \"/api/\"+url,
                method: method,
                data: {
                    explode: param
                },
                dataType: dataType,
                async: true
            })
        }
    </script>


    <script src=\"/build/js/LangController.js\"></script>
    <script src=\"/build/js/bootstrap.bundle.min.js\"></script>
    <script src=\"/build/js/tiny-slider.js\"></script>
    <script src=\"/build/js/glightbox.min.js\"></script>
    <script src=\"/build/js/aos.js\"></script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false\"></script>
    <script src=\"/build/js/main.js\"></script>
    <script src=\"/build/js/feature.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js\" integrity=\"sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==\" crossorigin=\"anonymous\"></script>

    <!--
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js\"
            integrity=\"sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==\"
            crossorigin=\"anonymous\"></script>
    <script>
        \$('select').select2();
    </script>

    <script>
        // Permet de print un resultat donné par l'api
        let currentLang = new LangController();
        function setLang(requiredLang = null,param = {}){
            if (currentLang.getCurrentLang() === null || param['_force'] === true){
                /** SetUp de la langue **/
                if (requiredLang){
                    currentLang.setCurrentLang(requiredLang);
                }else{
                    currentLang.setCurrentLang(currentLang.supportedLang[0]);
                }
                currentLang.setLang();
                /** Mise en place de la langue au niveau de l'api **/
                sendAjaxRequest(\"{{ path('api_Lang_set') | setApiCorrectLinkFormat }}\", \"html\", {lang: currentLang.getCurrentLang()}).then(function (e) {
                    console.log(\"Changement de langue effectué avec succès\");
                }).catch(function (e) {
                    console.log(\"erreur\");
                    console.log(e);
                })
            }
        }

        sendAjaxRequest(\"{{ path('api_Lang_get') | setApiCorrectLinkFormat }}\", \"html\").then(function (data) {
            console.log(data);
        });

        // Lancer cette fonction que si il n'y a aucune langue détecté
        if (currentLang.getCurrentLang() === null) {
            setLang();
            setTimeout(function (e){
                document.location.href = document.location;
            },1000)
        }
    </script>

    {% block script %}{% endblock %}
</div>
</body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\www\\Sites\\Ecole\\PPE\\mainSite\\templates\\base.html.twig");
    }
}
