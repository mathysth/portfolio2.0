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

/* template/work.html */
class __TwigTemplate_a151856ba69489090304dbac2a23ec87c6128035cebd679595bedc7208ed15ff extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template/work.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template/work.html"));

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
      <div class=\"container-xl\">
        <a class=\"navbar-brand align-items-center\" href=\"index.html\">
          <span class=\"\">Schmt.</span>
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"\"></span> 
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
          <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"index.html\">Home</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"about.html\">About</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"services.html\">Services</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"experience.html\">Experiences</a></li>
            <li class=\"nav-item\"><a class=\"nav-link active\" href=\"work.html\">Works</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"blog.html\">Blog</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"contact.html\">Contact</a></li>
          </ul>
          <!-- <p class=\"mb-0\"><a href=\"#\" class=\"btn btn-primary rounded\">Submit A Property</a></p> -->
        </div>
      </div>
    </nav>

    <section class=\"hero-wrap hero-wrap-2\">
      <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-end justify-content-center\">
          <div class=\"col-md-9 pt-5 text-center\">
            <p class=\"breadcrumbs\"><span class=\"me-2\"><a href=\"index.html\">Home <i class=\"fa fa-chevron-right\"></i></a></span> <span>Work <i class=\"fa fa-chevron-right\"></i></span></p>
            <h1 class=\"mb-0 bread\">Portfolio</h1>
          </div>
        </div>
      </div>
    </section>

    <section class=\"ftco-section ftco-project\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-4\">
            <div class=\"project img ftco-animate d-flex justify-content-center align-items-center\" style=\"background-image: url(images/project-1.jpg);\">
              <div class=\"overlay\"></div>
              <div class=\"text text-center p-4\">
                <h3><a href=\"#\">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"project img ftco-animate d-flex justify-content-center align-items-center\" style=\"background-image: url(images/project-2.jpg);\">
              <div class=\"overlay\"></div>
              <div class=\"text text-center p-4\">
                <h3><a href=\"#\">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div>
            </div>
          </div>

          <div class=\"col-md-4\">
            <div class=\"project img ftco-animate d-flex justify-content-center align-items-center\" style=\"background-image: url(images/project-3.jpg);\">
              <div class=\"overlay\"></div>
              <div class=\"text text-center p-4\">
                <h3><a href=\"#\">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"project img ftco-animate d-flex justify-content-center align-items-center\" style=\"background-image: url(images/project-4.jpg);\">
              <div class=\"overlay\"></div>
              <div class=\"text text-center p-4\">
                <h3><a href=\"#\">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"project img ftco-animate d-flex justify-content-center align-items-center\" style=\"background-image: url(images/project-5.jpg);\">
              <div class=\"overlay\"></div>
              <div class=\"text text-center p-4\">
                <h3><a href=\"#\">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"project img ftco-animate d-flex justify-content-center align-items-center\" style=\"background-image: url(images/project-6.jpg);\">
              <div class=\"overlay\"></div>
              <div class=\"text text-center p-4\">
                <h3><a href=\"#\">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"project img ftco-animate d-flex justify-content-center align-items-center\" style=\"background-image: url(images/project-7.jpg);\">
              <div class=\"overlay\"></div>
              <div class=\"text text-center p-4\">
                <h3><a href=\"#\">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"project img ftco-animate d-flex justify-content-center align-items-center\" style=\"background-image: url(images/project-8.jpg);\">
              <div class=\"overlay\"></div>
              <div class=\"text text-center p-4\">
                <h3><a href=\"#\">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"project img ftco-animate d-flex justify-content-center align-items-center\" style=\"background-image: url(images/project-9.jpg);\">
              <div class=\"overlay\"></div>
              <div class=\"text text-center p-4\">
                <h3><a href=\"#\">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div>
            </div>
          </div>
        </div>
        <div class=\"row mt-5\">
          <div class=\"col text-center\">
            <div class=\"block-27\">
              <ul>
                <li><a href=\"#\">&lt;</a></li>
                <li class=\"active\"><span>1</span></li>
                <li><a href=\"#\">2</a></li>
                <li><a href=\"#\">3</a></li>
                <li><a href=\"#\">4</a></li>
                <li><a href=\"#\">5</a></li>
                <li><a href=\"#\">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <footer class=\"ftco-footer\">
      <div class=\"container-xl\">
        <div class=\"row\">
          <div class=\"col-md-12 text-center\">
            <p class=\"mb-0 copyright\">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart color-danger\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\" rel=\"nofollow noopener\">Colorlib</a></p>
          </div>
        </div>
      </div>
    </footer>
    
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
        return "template/work.html";
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
      <div class=\"container-xl\">
        <a class=\"navbar-brand align-items-center\" href=\"index.html\">
          <span class=\"\">Schmt.</span>
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"\"></span> 
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
          <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"index.html\">Home</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"about.html\">About</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"services.html\">Services</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"experience.html\">Experiences</a></li>
            <li class=\"nav-item\"><a class=\"nav-link active\" href=\"work.html\">Works</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"blog.html\">Blog</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"contact.html\">Contact</a></li>
          </ul>
          <!-- <p class=\"mb-0\"><a href=\"#\" class=\"btn btn-primary rounded\">Submit A Property</a></p> -->
        </div>
      </div>
    </nav>

    <section class=\"hero-wrap hero-wrap-2\">
      <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-end justify-content-center\">
          <div class=\"col-md-9 pt-5 text-center\">
            <p class=\"breadcrumbs\"><span class=\"me-2\"><a href=\"index.html\">Home <i class=\"fa fa-chevron-right\"></i></a></span> <span>Work <i class=\"fa fa-chevron-right\"></i></span></p>
            <h1 class=\"mb-0 bread\">Portfolio</h1>
          </div>
        </div>
      </div>
    </section>

    <section class=\"ftco-section ftco-project\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-4\">
            <div class=\"project img ftco-animate d-flex justify-content-center align-items-center\" style=\"background-image: url(images/project-1.jpg);\">
              <div class=\"overlay\"></div>
              <div class=\"text text-center p-4\">
                <h3><a href=\"#\">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"project img ftco-animate d-flex justify-content-center align-items-center\" style=\"background-image: url(images/project-2.jpg);\">
              <div class=\"overlay\"></div>
              <div class=\"text text-center p-4\">
                <h3><a href=\"#\">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div>
            </div>
          </div>

          <div class=\"col-md-4\">
            <div class=\"project img ftco-animate d-flex justify-content-center align-items-center\" style=\"background-image: url(images/project-3.jpg);\">
              <div class=\"overlay\"></div>
              <div class=\"text text-center p-4\">
                <h3><a href=\"#\">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"project img ftco-animate d-flex justify-content-center align-items-center\" style=\"background-image: url(images/project-4.jpg);\">
              <div class=\"overlay\"></div>
              <div class=\"text text-center p-4\">
                <h3><a href=\"#\">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"project img ftco-animate d-flex justify-content-center align-items-center\" style=\"background-image: url(images/project-5.jpg);\">
              <div class=\"overlay\"></div>
              <div class=\"text text-center p-4\">
                <h3><a href=\"#\">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"project img ftco-animate d-flex justify-content-center align-items-center\" style=\"background-image: url(images/project-6.jpg);\">
              <div class=\"overlay\"></div>
              <div class=\"text text-center p-4\">
                <h3><a href=\"#\">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"project img ftco-animate d-flex justify-content-center align-items-center\" style=\"background-image: url(images/project-7.jpg);\">
              <div class=\"overlay\"></div>
              <div class=\"text text-center p-4\">
                <h3><a href=\"#\">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"project img ftco-animate d-flex justify-content-center align-items-center\" style=\"background-image: url(images/project-8.jpg);\">
              <div class=\"overlay\"></div>
              <div class=\"text text-center p-4\">
                <h3><a href=\"#\">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"project img ftco-animate d-flex justify-content-center align-items-center\" style=\"background-image: url(images/project-9.jpg);\">
              <div class=\"overlay\"></div>
              <div class=\"text text-center p-4\">
                <h3><a href=\"#\">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div>
            </div>
          </div>
        </div>
        <div class=\"row mt-5\">
          <div class=\"col text-center\">
            <div class=\"block-27\">
              <ul>
                <li><a href=\"#\">&lt;</a></li>
                <li class=\"active\"><span>1</span></li>
                <li><a href=\"#\">2</a></li>
                <li><a href=\"#\">3</a></li>
                <li><a href=\"#\">4</a></li>
                <li><a href=\"#\">5</a></li>
                <li><a href=\"#\">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <footer class=\"ftco-footer\">
      <div class=\"container-xl\">
        <div class=\"row\">
          <div class=\"col-md-12 text-center\">
            <p class=\"mb-0 copyright\">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart color-danger\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\" rel=\"nofollow noopener\">Colorlib</a></p>
          </div>
        </div>
      </div>
    </footer>
    
  <script src=\"js/bootstrap.bundle.min.js\"></script>
  <script src=\"js/tiny-slider.js\"></script>
  <script src=\"js/glightbox.min.js\"></script>
  <script src=\"js/aos.js\"></script>
  <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false\"></script>
  <script src=\"js/google-map.js\"></script>
  <script src=\"js/main.js\"></script>
    
  </body>
</html>", "template/work.html", "C:\\wamp64\\www\\mathys.theolade\\Theolade\\04_sitePPE_dynamique\\portfolio2.0\\templates\\template\\work.html");
    }
}
