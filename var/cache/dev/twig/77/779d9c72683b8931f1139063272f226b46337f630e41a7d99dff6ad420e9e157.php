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

/* template/main.html */
class __TwigTemplate_516e80aa921df104f9c24670e141345bfcbfa8b770c68b0f1604f564e17d5f19 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template/main.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template/main.html"));

        // line 1
        echo "<a href=\"https://colorlib.com/wp/templates/\"><img src=\"https://colorlib.com/wp/wp-content/uploads/sites/2/colorlib-push-logo.png\" alt=\"Colorlib logo\"></a>
<h1 style=\"text-align:center;\">Thank you for using our template!</h1>
<p style=\"text-align:center;\">For more awesome templates please visit <strong><a href=\"https://colorlib.com/wp/templates/\">Colorlib</a></strong>.</p>
<br>
<p style=\"text-align:center; color:red;\"><strong>Copyright information for the template can't be altered/removed unless you purchase a license.</strong>

<p style=\"text-align:center;\"><strong>Removing copyright information without the license will result in suspension of your hosting and/or domain name(s).</strong>

<p style=\"text-align:center;\"><strong>More information about the license is available <a href=\"https://colorlib.com/wp/licence/\">here</a></strong>.</p>

<style>
img {
  margin: 0 auto;
  display: block;
  margin-top: 20%;
}
</style>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "template/main.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a href=\"https://colorlib.com/wp/templates/\"><img src=\"https://colorlib.com/wp/wp-content/uploads/sites/2/colorlib-push-logo.png\" alt=\"Colorlib logo\"></a>
<h1 style=\"text-align:center;\">Thank you for using our template!</h1>
<p style=\"text-align:center;\">For more awesome templates please visit <strong><a href=\"https://colorlib.com/wp/templates/\">Colorlib</a></strong>.</p>
<br>
<p style=\"text-align:center; color:red;\"><strong>Copyright information for the template can't be altered/removed unless you purchase a license.</strong>

<p style=\"text-align:center;\"><strong>Removing copyright information without the license will result in suspension of your hosting and/or domain name(s).</strong>

<p style=\"text-align:center;\"><strong>More information about the license is available <a href=\"https://colorlib.com/wp/licence/\">here</a></strong>.</p>

<style>
img {
  margin: 0 auto;
  display: block;
  margin-top: 20%;
}
</style>
", "template/main.html", "C:\\xampp\\htdocs\\www\\Sites\\Ecole\\PPE\\mainSite\\templates\\template\\main.html");
    }
}
