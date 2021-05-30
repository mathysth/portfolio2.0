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

/* admin/presentation/_form.html.twig */
class __TwigTemplate_a9980ed764c79eeb7b3c7d423926811ecdc7c981ab33059519f53f06e16b5fc7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/presentation/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/presentation/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
    <div class=\"form-group mb-2\">
        <label>Travail : </label>
        ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "job", [], "any", false, false, false, 4), 'widget');
        echo "
    </div>

    <div class=\"form-group mb-2\">
        <label>Ville d'origine : </label>
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "nativeCountry", [], "any", false, false, false, 9), 'widget');
        echo "
    </div>

    <div class=\"form-group mb-2\">
        <label> Email</label>
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "email", [], "any", false, false, false, 14), 'widget');
        echo "
    </div>

    <div class=\"form-group mb-2\">
        <label>Cv :</label>
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "cv", [], "any", false, false, false, 19), 'widget');
        echo "
    </div>

    <div class=\"form-group mb-2\">
        <label>Anniversaire : </label>
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "birthday", [], "any", false, false, false, 24), 'widget');
        echo "
    </div>

    <div class=\"form-group mb-2\">
        <label>Texte de présentation</label>
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "presentationText", [], "any", false, false, false, 29), 'widget');
        echo "
    </div>

    <div class=\"form-group mb-2\">
        <label> Lettre de motivation : </label>
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "coverLetter", [], "any", false, false, false, 34), 'widget');
        echo "
    </div>

    <div class=\"form-group mb-2\">
        <label>Centre d'intérêts :</label>
        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "centerOfInterest", [], "any", false, false, false, 39), 'widget');
        echo "
    </div>

    <button class=\"btn btn-primary mb-3 mt-3\" style=\"border-radius: 5px;\">";
        // line 42
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 42, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/presentation/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 43,  111 => 42,  105 => 39,  97 => 34,  89 => 29,  81 => 24,  73 => 19,  65 => 14,  57 => 9,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
    <div class=\"form-group mb-2\">
        <label>Travail : </label>
        {{ form_widget(form.job) }}
    </div>

    <div class=\"form-group mb-2\">
        <label>Ville d'origine : </label>
        {{ form_widget(form.nativeCountry) }}
    </div>

    <div class=\"form-group mb-2\">
        <label> Email</label>
        {{ form_widget(form.email) }}
    </div>

    <div class=\"form-group mb-2\">
        <label>Cv :</label>
        {{ form_widget(form.cv) }}
    </div>

    <div class=\"form-group mb-2\">
        <label>Anniversaire : </label>
        {{ form_widget(form.birthday) }}
    </div>

    <div class=\"form-group mb-2\">
        <label>Texte de présentation</label>
        {{ form_widget(form.presentationText) }}
    </div>

    <div class=\"form-group mb-2\">
        <label> Lettre de motivation : </label>
        {{ form_widget(form.coverLetter) }}
    </div>

    <div class=\"form-group mb-2\">
        <label>Centre d'intérêts :</label>
        {{ form_widget(form.centerOfInterest) }}
    </div>

    <button class=\"btn btn-primary mb-3 mt-3\" style=\"border-radius: 5px;\">{{ button_label|default('Save') }}</button>
{{ form_end(form) }}
", "admin/presentation/_form.html.twig", "C:\\xampp\\htdocs\\www\\Sites\\Ecole\\PPE\\mainSite\\templates\\admin\\presentation\\_form.html.twig");
    }
}
