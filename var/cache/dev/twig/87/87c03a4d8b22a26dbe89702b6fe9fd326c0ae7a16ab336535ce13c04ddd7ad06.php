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
class __TwigTemplate_b0e0e9494309b560f3790178009e4b76f892f04e10c33d9a5f9b641187e9d7e6 extends Template
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
        // line 42
        $this->displayBlock('inline_css', $context, $blocks);
        // line 43
        echo "
    <title>";
        // line 44
        $this->displayBlock('title', $context, $blocks);
        echo "</title>


</head>
<body>
<nav class=\"navbar ftco-navbar-light\"><!-- navbar-expand-lg  -->
    <div class=\"container-xl\">
        <a class=\"navbar-brand align-items-center\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["lang" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "request", [], "any", false, false, false, 51), "get", [0 => "lang"], "method", false, false, false, 51)]), "html", null, true);
        echo "\">
            <span class=\"\">";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->TranslateTextByKey("websiteName", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "request", [], "any", false, false, false, 52), "get", [0 => "lang"], "method", false, false, false, 52)), "html", null, true);
        echo "</span>
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"index.html\">Home</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"about.html\">About</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"services.html\">Services</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"experience.html\">Experiences</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"work.html\">Works</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"blog.html\">Blog</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"contact.html\">Contact</a></li>
            </ul>
            <!-- <p class=\"mb-0\"><a href=\"#\" class=\"btn btn-primary rounded\">Submit A Property</a></p> -->
        </div>
    </div>
</nav>

    ";
        // line 72
        $this->displayBlock('body', $context, $blocks);
        // line 73
        echo "


    <!-- JS -->
    <script src=\"/build/js/bootstrap.bundle.min.js\"></script>
    <script src=\"/build/js/tiny-slider.js\"></script>
    <script src=\"/build/js/glightbox.min.js\"></script>
    <script src=\"/build/js/aos.js\"></script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false\"></script>
    <script src=\"/build/js/main.js\"></script>


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
    <!--
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js\"
            integrity=\"sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==\"
            crossorigin=\"anonymous\"></script>
    <script>
        \$('select').select2();
    </script>

    ";
        // line 108
        $this->displayBlock('script', $context, $blocks);
        // line 109
        echo "</div>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 42
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

    // line 44
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Portfolio Mathys Theolade ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
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

    // line 108
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
        return array (  242 => 108,  223 => 72,  204 => 44,  186 => 42,  173 => 109,  171 => 108,  134 => 73,  132 => 72,  109 => 52,  105 => 51,  95 => 44,  92 => 43,  90 => 42,  47 => 1,);
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

    <title>{% block title %}Portfolio Mathys Theolade {% endblock %}</title>


</head>
<body>
<nav class=\"navbar ftco-navbar-light\"><!-- navbar-expand-lg  -->
    <div class=\"container-xl\">
        <a class=\"navbar-brand align-items-center\" href=\"{{ path('home',{\"lang\": app.request.get(\"lang\")}) }}\">
            <span class=\"\">{{ translate('websiteName',app.request.get('lang')) }}</span>
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"index.html\">Home</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"about.html\">About</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"services.html\">Services</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"experience.html\">Experiences</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"work.html\">Works</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"blog.html\">Blog</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"contact.html\">Contact</a></li>
            </ul>
            <!-- <p class=\"mb-0\"><a href=\"#\" class=\"btn btn-primary rounded\">Submit A Property</a></p> -->
        </div>
    </div>
</nav>

    {% block body %} {%  endblock %}



    <!-- JS -->
    <script src=\"/build/js/bootstrap.bundle.min.js\"></script>
    <script src=\"/build/js/tiny-slider.js\"></script>
    <script src=\"/build/js/glightbox.min.js\"></script>
    <script src=\"/build/js/aos.js\"></script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false\"></script>
    <script src=\"/build/js/main.js\"></script>


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
    <!--
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js\"
            integrity=\"sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==\"
            crossorigin=\"anonymous\"></script>
    <script>
        \$('select').select2();
    </script>

    {% block script %}{% endblock %}
</div>
</body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\mathys.theolade\\Theolade\\04_sitePPE_dynamique\\portfolio2.0\\templates\\base.html.twig");
    }
}
