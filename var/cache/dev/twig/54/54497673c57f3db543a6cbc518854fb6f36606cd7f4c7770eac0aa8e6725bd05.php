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

/* admin/member/index.html.twig */
class __TwigTemplate_157e819917718fe85595b149033c3e3919b7e87b0bdb581ff66e7bc1da0bf6f4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/member/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/member/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/member/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Member index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container single-content\">
        <div class=\"entry-header entry-header-style-1 mb-50 pt-50\">
            <h1 class=\"entry-title mb-50 font-weight-900 text-center\">
                Gérer les administrateurs
            </h1>

            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", [0 => "info"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "                <div class=\"alert alert-info\">
                    ";
            // line 14
            echo $context["message"];
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        </div>
        <article class=\"entry-wraper mb-50\">
            <div class=\"entry-main-content\">
                <table class=\"table table-responsive\">
                    <thead>
                    <tr>
                        <th>Pseudo</th>
                        <th>Email</th>
                        <th>Power</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["members"]) || array_key_exists("members", $context) ? $context["members"] : (function () { throw new RuntimeError('Variable "members" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 31
            echo "                        <tr>
                            <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "pseudo", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "email", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "currentRole", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                            <td>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <a class=\"btn btn-outline-info\"
                                           href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_member_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["member"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">edit</a>
                                    </div>
                                    <div class=\"col\">
                                        ";
            // line 42
            $this->loadTemplate("/admin/member/_delete_form.html.twig", "admin/member/index.html.twig", 42)->display($context);
            // line 43
            echo "                                    </div>
                                    <div class=\"col\">
                                        <form method=\"post\" action=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_member_reset", ["id" => twig_get_attribute($this->env, $this->source, $context["member"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\"
                                              onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                                            <input type=\"hidden\" name=\"_method\" value=\"RESET\">
                                            <input type=\"hidden\" name=\"_token\"
                                                   value=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("reset" . twig_get_attribute($this->env, $this->source, $context["member"], "id", [], "any", false, false, false, 49))), "html", null, true);
            echo "\">
                                            <button class=\"btn btn-outline-info\">Réinitialiser le mot de passe</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 57
            echo "                        <tr>
                            <td colspan=\"7\">Aucun membre trouvé</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                    </tbody>
                </table>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"pagination-area mb-30 wow fadeInUp  animated\"
                         style=\"visibility: visible; animation-name: fadeInUp;\">
                        ";
        // line 68
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["members"]) || array_key_exists("members", $context) ? $context["members"] : (function () { throw new RuntimeError('Variable "members" does not exist.', 68, $this->source); })()));
        echo "
                    </div>
                </div>
                <div class=\"col\">
                    <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_member_new");
        echo "\" class=\"btn btn-outline-info\">Ajouter un membre</a>
                </div>
            </div>
        </article>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/member/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 72,  222 => 68,  213 => 61,  204 => 57,  183 => 49,  176 => 45,  172 => 43,  170 => 42,  164 => 39,  156 => 34,  152 => 33,  148 => 32,  145 => 31,  127 => 30,  112 => 17,  103 => 14,  100 => 13,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Member index{% endblock %}

{% block body %}
    <div class=\"container single-content\">
        <div class=\"entry-header entry-header-style-1 mb-50 pt-50\">
            <h1 class=\"entry-title mb-50 font-weight-900 text-center\">
                Gérer les administrateurs
            </h1>

            {% for message in app.flashes('info') %}
                <div class=\"alert alert-info\">
                    {{ message | raw }}
                </div>
            {% endfor %}
        </div>
        <article class=\"entry-wraper mb-50\">
            <div class=\"entry-main-content\">
                <table class=\"table table-responsive\">
                    <thead>
                    <tr>
                        <th>Pseudo</th>
                        <th>Email</th>
                        <th>Power</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for member in members %}
                        <tr>
                            <td>{{ member.pseudo }}</td>
                            <td>{{ member.email }}</td>
                            <td>{{ member.currentRole }}</td>
                            <td>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <a class=\"btn btn-outline-info\"
                                           href=\"{{ path('admin_member_edit', {'id': member.id}) }}\">edit</a>
                                    </div>
                                    <div class=\"col\">
                                        {% include '/admin/member/_delete_form.html.twig' %}
                                    </div>
                                    <div class=\"col\">
                                        <form method=\"post\" action=\"{{ path('admin_member_reset', {'id': member.id}) }}\"
                                              onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                                            <input type=\"hidden\" name=\"_method\" value=\"RESET\">
                                            <input type=\"hidden\" name=\"_token\"
                                                   value=\"{{ csrf_token('reset' ~ member.id) }}\">
                                            <button class=\"btn btn-outline-info\">Réinitialiser le mot de passe</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"7\">Aucun membre trouvé</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"pagination-area mb-30 wow fadeInUp  animated\"
                         style=\"visibility: visible; animation-name: fadeInUp;\">
                        {{ knp_pagination_render(members) }}
                    </div>
                </div>
                <div class=\"col\">
                    <a href=\"{{ path('admin_member_new') }}\" class=\"btn btn-outline-info\">Ajouter un membre</a>
                </div>
            </div>
        </article>
    </div>
{% endblock %}
", "admin/member/index.html.twig", "C:\\xampp\\htdocs\\www\\Sites\\Ecole\\PPE\\mainSite\\templates\\admin\\member\\index.html.twig");
    }
}
