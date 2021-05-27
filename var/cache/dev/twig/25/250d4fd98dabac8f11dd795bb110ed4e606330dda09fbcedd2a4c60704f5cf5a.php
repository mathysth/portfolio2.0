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

/* admin/member/profil.html.twig */
class __TwigTemplate_cbf88aaa2b2e8083e74e9c1616730bea3aa7f21145e8e669f3ade4ade2115899 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/member/profil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/member/profil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/member/profil.html.twig", 1);
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

        echo "Profil!";
        
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
        echo "    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", [0 => "info"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 10
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            <div class=\"col-lg-12\">
                <!--author box-->
                <div class=\"author-bio mb-50 p-30 border-radius-10 bg-grey mt-50 pb-50\">
                    <div class=\"author-image mb-30\">
                        <a href=\"#\"><img src=\"/build/assets/imgs/thumb.png\" alt=\"\" class=\"avatar\"></a>
                    </div>
                    <div class=\"author-info\">
                        <h3 class=\"font-weight-900\"><span class=\"vcard author\"><span class=\"fn\"><a href=\"#\"
                                                                                                   title=\"Pseudo\"
                                                                                                   rel=\"author\">";
        // line 22
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "pseudo", [], "any", false, false, false, 22)), "html", null, true);
        echo "</a></span></span>
                        </h3>
                        <h5 class=\"text-muted\">Informations</h5>
                        <div class=\"author-description text-muted\">
                            <div class=\"row\">
                                <div class=\"col-lg-4 pb-20\">
                                    <strong>Email :</strong> <small> ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "email", [], "any", false, false, false, 28), "html", null, true);
        echo " </small><br/>
                                    <strong>Role :</strong> <small> <code> Admin </code> </small>
                                </div>
                                <div class=\"col-lg-4\" id=\"passwordAsker\">
                                    <strong style=\"text-decoration: underline\"><a onclick=\"showResetForm()\" style=\"color: black !important;\">Changer votre mot de passe</a></strong><br/>
                                </div>
                                <div class=\"col-lg-4\" id=\"hidden\" style=\"display: none\">
                                    <form method=\"post\" id=\"passwordForm\" action=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_member_reset", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\"
                                          onsubmit=\"return confirm('Est-vous sûr de vouloir changer votre mot de passe?');\">
                                        <input type=\"hidden\" name=\"_method\" value=\"RESET\">
                                        <input type=\"password\" name=\"_password\" id=\"password\" onfocusout=\"validateFirstPassword()\" placeholder=\"votre nouveau mot de passe\" class=\"form-control mb-10\">
                                        <input type=\"password\" name=\"_reassword\" id=\"repassword\" onfocusout=\"validatePassword()\" placeholder=\"veuillez repeter votre mot de passe\" class=\"form-control mb-10\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("reset" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40))), "html", null, true);
        echo "\">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
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
        echo "    <script>
        let password = document.getElementById(\"password\");
        let repassword = document.getElementById(\"repassword\");
        let form = document.getElementById('passwordForm');
        let count = 0;
        function validatePassword(){
            if (password.value == \"\" && repassword.value == \"\" || password.value.length < 6 && repassword.value.length < 6){
                alert(\"Merci de rentrer un mot de passe valide, minimum 6 caractères \");
            }else{
                if (password.value === repassword.value){
                    if (count == 0){
                        count = 1;
                        let btn = document.createElement(\"BUTTON\");
                        btn.className = 'btn btn-outline-info';
                        btn.id = \"submitButton\";
                        btn.innerText = \"Modifier\"
                        form.append(btn);
                    }
                }else{
                    count = 0;
                    let button = document.getElementById('submitButton');
                    try {
                        form.removeChild(button);
                    }catch (e){
                        console.log(e)
                    }
                    alert(\"Vos mots de passe ne corresponde pas\");
                }
            }
        }

        function validateFirstPassword(){
            if (password.value == \"\" && repassword.value == \"\" || password.value.length < 6 && repassword.value.length < 6){
                alert(\"Merci de rentrer un mot de passe valide, minimum 6 caractères \");
            }else{
                if (password.value === repassword.value){
                    if (count == 0){
                        count = 1;
                        let btn = document.createElement(\"BUTTON\");
                        btn.className = 'btn btn-outline-info';
                        btn.id = \"submitButton\";
                        btn.innerText = \"Modifier\"
                        form.append(btn);
                    }
                }else{
                    count = 0;
                    if (document.getElementById('submitButton')){
                        let button = document.getElementById('submitButton');
                        try {
                            form.removeChild(button);
                        }catch (e){

                        }
                    }
                }
            }
        }
        function showResetForm(){
            let passwordAsker = document.getElementById(\"passwordAsker\");
            let hiddenDiv = document.getElementById('hidden');
            hiddenDiv.style.transition = \"all 1s\";
            hiddenDiv.style.display = \"block\";
            passwordAsker.style.display = \"none\";
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/member/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 53,  169 => 52,  147 => 40,  139 => 35,  129 => 28,  120 => 22,  109 => 13,  100 => 10,  97 => 9,  93 => 8,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil!{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            {% for message in app.flashes('info') %}
                <div class=\"alert alert-success\">
                    {{ message }}
                </div>
            {% endfor %}
            <div class=\"col-lg-12\">
                <!--author box-->
                <div class=\"author-bio mb-50 p-30 border-radius-10 bg-grey mt-50 pb-50\">
                    <div class=\"author-image mb-30\">
                        <a href=\"#\"><img src=\"/build/assets/imgs/thumb.png\" alt=\"\" class=\"avatar\"></a>
                    </div>
                    <div class=\"author-info\">
                        <h3 class=\"font-weight-900\"><span class=\"vcard author\"><span class=\"fn\"><a href=\"#\"
                                                                                                   title=\"Pseudo\"
                                                                                                   rel=\"author\">{{ app.user.pseudo | capitalize }}</a></span></span>
                        </h3>
                        <h5 class=\"text-muted\">Informations</h5>
                        <div class=\"author-description text-muted\">
                            <div class=\"row\">
                                <div class=\"col-lg-4 pb-20\">
                                    <strong>Email :</strong> <small> {{ app.user.email }} </small><br/>
                                    <strong>Role :</strong> <small> <code> Admin </code> </small>
                                </div>
                                <div class=\"col-lg-4\" id=\"passwordAsker\">
                                    <strong style=\"text-decoration: underline\"><a onclick=\"showResetForm()\" style=\"color: black !important;\">Changer votre mot de passe</a></strong><br/>
                                </div>
                                <div class=\"col-lg-4\" id=\"hidden\" style=\"display: none\">
                                    <form method=\"post\" id=\"passwordForm\" action=\"{{ path('admin_member_reset', {'id': app.user.id}) }}\"
                                          onsubmit=\"return confirm('Est-vous sûr de vouloir changer votre mot de passe?');\">
                                        <input type=\"hidden\" name=\"_method\" value=\"RESET\">
                                        <input type=\"password\" name=\"_password\" id=\"password\" onfocusout=\"validateFirstPassword()\" placeholder=\"votre nouveau mot de passe\" class=\"form-control mb-10\">
                                        <input type=\"password\" name=\"_reassword\" id=\"repassword\" onfocusout=\"validatePassword()\" placeholder=\"veuillez repeter votre mot de passe\" class=\"form-control mb-10\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('reset' ~ app.user.id) }}\">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
{% endblock %}
{% block script %}
    <script>
        let password = document.getElementById(\"password\");
        let repassword = document.getElementById(\"repassword\");
        let form = document.getElementById('passwordForm');
        let count = 0;
        function validatePassword(){
            if (password.value == \"\" && repassword.value == \"\" || password.value.length < 6 && repassword.value.length < 6){
                alert(\"Merci de rentrer un mot de passe valide, minimum 6 caractères \");
            }else{
                if (password.value === repassword.value){
                    if (count == 0){
                        count = 1;
                        let btn = document.createElement(\"BUTTON\");
                        btn.className = 'btn btn-outline-info';
                        btn.id = \"submitButton\";
                        btn.innerText = \"Modifier\"
                        form.append(btn);
                    }
                }else{
                    count = 0;
                    let button = document.getElementById('submitButton');
                    try {
                        form.removeChild(button);
                    }catch (e){
                        console.log(e)
                    }
                    alert(\"Vos mots de passe ne corresponde pas\");
                }
            }
        }

        function validateFirstPassword(){
            if (password.value == \"\" && repassword.value == \"\" || password.value.length < 6 && repassword.value.length < 6){
                alert(\"Merci de rentrer un mot de passe valide, minimum 6 caractères \");
            }else{
                if (password.value === repassword.value){
                    if (count == 0){
                        count = 1;
                        let btn = document.createElement(\"BUTTON\");
                        btn.className = 'btn btn-outline-info';
                        btn.id = \"submitButton\";
                        btn.innerText = \"Modifier\"
                        form.append(btn);
                    }
                }else{
                    count = 0;
                    if (document.getElementById('submitButton')){
                        let button = document.getElementById('submitButton');
                        try {
                            form.removeChild(button);
                        }catch (e){

                        }
                    }
                }
            }
        }
        function showResetForm(){
            let passwordAsker = document.getElementById(\"passwordAsker\");
            let hiddenDiv = document.getElementById('hidden');
            hiddenDiv.style.transition = \"all 1s\";
            hiddenDiv.style.display = \"block\";
            passwordAsker.style.display = \"none\";
        }
    </script>
{% endblock %}", "admin/member/profil.html.twig", "C:\\xampp\\htdocs\\www\\Sites\\Ecole\\PPE\\mainSite\\templates\\admin\\member\\profil.html.twig");
    }
}
