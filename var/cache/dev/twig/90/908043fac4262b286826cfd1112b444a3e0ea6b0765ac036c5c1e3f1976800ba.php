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

/* template/index.html */
class __TwigTemplate_e5d47a635484d2bd4bf456923d44c3daec1d5042ecba13668ef3a25392966b23 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template/index.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template/index.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <title>Schmidt - Free Bootstrap 5 Template by Colorlib</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css\">

    <link rel=\"stylesheet\" href=\"css/animate.css\">
    <link rel=\"stylesheet\" href=\"css/flaticon.css\">
    <link rel=\"stylesheet\" href=\"css/tiny-slider.css\">
    <link rel=\"stylesheet\" href=\"css/glightbox.min.css\">
    <link rel=\"stylesheet\" href=\"css/aos.css\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
  </head>
  <body>

    
    <nav class=\"navbar ftco-navbar-light\"><!-- navbar-expand-lg  -->
\t\t  <div class=\"container-xl\">
\t\t    <a class=\"navbar-brand align-items-center\" href=\"index.html\">
    \t\t\t<span class=\"\">Schmt.</span>
    \t\t</a>
\t\t    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t      <span class=\"\"></span> 
\t\t    </button>
\t\t    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t      <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
\t\t        <li class=\"nav-item\"><a class=\"nav-link active\" href=\"index.html\">Home</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"about.html\">About</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"services.html\">Services</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"experience.html\">Experiences</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"work.html\">Works</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"blog.html\">Blog</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"contact.html\">Contact</a></li>
\t\t      </ul>
\t\t      <!-- <p class=\"mb-0\"><a href=\"#\" class=\"btn btn-primary rounded\">Submit A Property</a></p> -->
\t\t    </div>
\t\t  </div>
\t\t</nav>

\t\t<section class=\"hero-wrap\">
      <div class=\"overlay\"></div>
      <div class=\"container-xl\">
        <div class=\"row slider-text align-items-center align-items-stretch justify-content-between\">
        \t<div class=\"col-lg-6 text d-flex align-items-start align-items-sm-center\">
            <div class=\"desc mt-4 mt-md-0\">
          \t\t<span class=\"subheading\">UI/UX Designer &amp; Developer</span>
          \t\t<h1 class=\"mb-4\">I'm John Schmidt</h1>
          \t\t<p><a href=\"#\" class=\"btn btn-primary p-4 py-3\">More About Me <span class=\"ion-ios-arrow-round-forward\"></span></a> <a href=\"#\" class=\"btn btn-white p-4 py-3\">Hire Me <span class=\"ion-ios-arrow-round-forward\"></span></a></p>

              <p class=\"mb-0 copyright\">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart color-danger\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\" rel=\"nofollow noopener\">Colorlib</a></p>
            </div>
        \t</div>
          <div class=\"col-lg-6 d-flex align-items-end justify-content-end\">
            <div class=\"carousel-about\">
              <div class=\"item\">
                <img src=\"images/jschmidt.png\" class=\"img-fluid\" alt=\"Colorlib\">
              </div>
              <div class=\"item\">
                <img src=\"images/jschmidt-2.png\" class=\"img-fluid\" alt=\"Colorlib\">
              </div>
            </span>
            <!-- <img src=\"images/jschmidt-2.png\" class=\"img-fluid\" alt=\"Colorlib\"> -->
          </div>
        </div>
      </div>
    </section>


    
  <script src=\"js/bootstrap.bundle.min.js\"></script>
  <script src=\"js/tiny-slider.js\"></script>
  <script src=\"js/glightbox.min.js\"></script>
  <script src=\"js/aos.js\"></script>
  <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false\"></script>
  <script src=\"js/google-map.js\"></script>
  <script src=\"js/main.js\"></script>
    
  </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "template/index.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <title>Schmidt - Free Bootstrap 5 Template by Colorlib</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css\">

    <link rel=\"stylesheet\" href=\"css/animate.css\">
    <link rel=\"stylesheet\" href=\"css/flaticon.css\">
    <link rel=\"stylesheet\" href=\"css/tiny-slider.css\">
    <link rel=\"stylesheet\" href=\"css/glightbox.min.css\">
    <link rel=\"stylesheet\" href=\"css/aos.css\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
  </head>
  <body>

    
    <nav class=\"navbar ftco-navbar-light\"><!-- navbar-expand-lg  -->
\t\t  <div class=\"container-xl\">
\t\t    <a class=\"navbar-brand align-items-center\" href=\"index.html\">
    \t\t\t<span class=\"\">Schmt.</span>
    \t\t</a>
\t\t    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t      <span class=\"\"></span> 
\t\t    </button>
\t\t    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t      <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
\t\t        <li class=\"nav-item\"><a class=\"nav-link active\" href=\"index.html\">Home</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"about.html\">About</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"services.html\">Services</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"experience.html\">Experiences</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"work.html\">Works</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"blog.html\">Blog</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"contact.html\">Contact</a></li>
\t\t      </ul>
\t\t      <!-- <p class=\"mb-0\"><a href=\"#\" class=\"btn btn-primary rounded\">Submit A Property</a></p> -->
\t\t    </div>
\t\t  </div>
\t\t</nav>

\t\t<section class=\"hero-wrap\">
      <div class=\"overlay\"></div>
      <div class=\"container-xl\">
        <div class=\"row slider-text align-items-center align-items-stretch justify-content-between\">
        \t<div class=\"col-lg-6 text d-flex align-items-start align-items-sm-center\">
            <div class=\"desc mt-4 mt-md-0\">
          \t\t<span class=\"subheading\">UI/UX Designer &amp; Developer</span>
          \t\t<h1 class=\"mb-4\">I'm John Schmidt</h1>
          \t\t<p><a href=\"#\" class=\"btn btn-primary p-4 py-3\">More About Me <span class=\"ion-ios-arrow-round-forward\"></span></a> <a href=\"#\" class=\"btn btn-white p-4 py-3\">Hire Me <span class=\"ion-ios-arrow-round-forward\"></span></a></p>

              <p class=\"mb-0 copyright\">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart color-danger\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\" rel=\"nofollow noopener\">Colorlib</a></p>
            </div>
        \t</div>
          <div class=\"col-lg-6 d-flex align-items-end justify-content-end\">
            <div class=\"carousel-about\">
              <div class=\"item\">
                <img src=\"images/jschmidt.png\" class=\"img-fluid\" alt=\"Colorlib\">
              </div>
              <div class=\"item\">
                <img src=\"images/jschmidt-2.png\" class=\"img-fluid\" alt=\"Colorlib\">
              </div>
            </span>
            <!-- <img src=\"images/jschmidt-2.png\" class=\"img-fluid\" alt=\"Colorlib\"> -->
          </div>
        </div>
      </div>
    </section>


    
  <script src=\"js/bootstrap.bundle.min.js\"></script>
  <script src=\"js/tiny-slider.js\"></script>
  <script src=\"js/glightbox.min.js\"></script>
  <script src=\"js/aos.js\"></script>
  <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false\"></script>
  <script src=\"js/google-map.js\"></script>
  <script src=\"js/main.js\"></script>
    
  </body>
</html>", "template/index.html", "C:\\wamp64\\www\\mathys.theolade\\Theolade\\04_sitePPE_dynamique\\portfolio2.0\\templates\\template\\index.html");
    }
}
