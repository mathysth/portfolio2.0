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

/* pages/includes/_footer.html.twig */
class __TwigTemplate_2b8aaea78ad4366fdccdcfab091455556c0547e77872f846b55d16cfe63ab055 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/includes/_footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/includes/_footer.html.twig"));

        // line 1
        echo "<footer class=\"ftco-footer\">
    <div class=\"container-xl\">
        <div class=\"row\">
            <div class=\"col-md-12 text-center\">
                <p class=\"mb-0 copyright\"> <strong>&copy ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("ownerFullName"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Repository Github :
                        <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppFunctionExtension']->TranslateTextByKey("githubRepo"), "html", null, true);
        echo "\" target=\"_blank\">Here</a> </strong> </p>            </div>
        </div>
    </div>
</footer>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/includes/_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"ftco-footer\">
    <div class=\"container-xl\">
        <div class=\"row\">
            <div class=\"col-md-12 text-center\">
                <p class=\"mb-0 copyright\"> <strong>&copy {{ translate('ownerFullName') }} - {{ \"now\"|date(\"Y\") }} - Repository Github :
                        <a href=\"{{ translate('githubRepo') }}\" target=\"_blank\">Here</a> </strong> </p>            </div>
        </div>
    </div>
</footer>", "pages/includes/_footer.html.twig", "C:\\xampp\\htdocs\\www\\Sites\\Ecole\\PPE\\mainSite\\templates\\pages\\includes\\_footer.html.twig");
    }
}
