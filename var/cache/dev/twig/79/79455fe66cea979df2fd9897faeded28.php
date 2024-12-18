<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* base.html.twig */
class __TwigTemplate_5f9881c3418d275345b0a62ee900f8bc extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
        integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js\"></script>

    ";
        // line 12
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 28
        yield "</head>

<body>

    ";
        // line 33
        yield "    ";
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 34
            yield "    <nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
        <div class=\"container-fluid\">
            <img src=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.jpg"), "html", null, true);
            yield "\" alt=\"logo brand\" class=\"icon ms-3 brand\" />
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Home</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 43
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_book");
            yield "\">Nos Livres</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link disabled\" aria-disabled=\"true\">Disabled</a>
                    </li>
                </ul>
                <form class=\"d-flex\" role=\"search\">
                    <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                    <button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
                </form>
            </div>
            <div class=\"text-end me-5 mb-4\">
                <div class=\"d-flex align-items-center pt-4\" id=\"logs\">
                    <img src=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user.png"), "html", null, true);
            yield "\" alt=\"User Icon\" class=\"icon notco ms-3\" />
                    <a href=\"";
            // line 57
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-link\">Connexion</a>
                    <img src=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/signup.png"), "html", null, true);
            yield "\" alt=\"Sign Up Icon\" class=\"icon ms-3\" />
                    <a href=\"";
            // line 59
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"btn btn-link\">Inscription</a>
                </div>
            </div>
        </div>
    </nav>
    ";
        } else {
            // line 65
            yield "    ";
            // line 66
            yield "    <nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
        <div class=\"container-fluid\">
            <img src=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.jpg"), "html", null, true);
            yield "\" alt=\"logo brand\" class=\"icon ms-3 brand\" />
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Home</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 75
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_book");
            yield "\">Nos Livres</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\"
                            aria-expanded=\"false\">Mes Actions</a>
                        <ul class=\"dropdown-menu\">
                            <li><a class=\"dropdown-item\" href=\"#\">Emprunter un livre</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
            // line 82
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_book_loans");
            yield "\">Voir tous mes emprunts</a></li> 
                            <li><hr class=\"dropdown-divider\"></li>
                            <li><a class=\"dropdown-item\" href=\"#\">Something else here</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link disabled\" aria-disabled=\"true\">Disabled</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 91
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
            yield "\">Admin</a>
                    </li>
                    ";
            // line 93
            if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 94
                yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
                // line 95
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_promote_user");
                yield "\">Devenir Admin</a>
                    </li>
                    ";
            } else {
                // line 98
                yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
                // line 99
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
                yield "\">Admin Dashboard</a>
                    </li>
                    ";
            }
            // line 102
            yield "                </ul>
                <form class=\"d-flex\" role=\"search\">
                    <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                    <button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
                </form>
            </div>
            <div class=\"text-end me-5 mb-4\">
                <div class=\"d-flex align-items-center pt-4\" id=\"logs\">
                    <img src=\"";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/useraccount.png"), "html", null, true);
            yield "\" alt=\"User Icon\" class=\"icon ms-3\" />
                    <a href=\"#\" class=\"btn btn-link\">Profil</a>
                    <img src=\"";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/trolley.png"), "html", null, true);
            yield "\" alt=\"Cart Icon\" class=\"icon ms-3\" />
                    <a href=\"#\" class=\"btn btn-link\">Panier</a>
                    <img src=\"";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logout.png"), "html", null, true);
            yield "\" alt=\"Logout Icon\" class=\"icon ms-3 notco\" />
                    <a href=\"";
            // line 115
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"btn btn-link\">Déconnexion</a>
                </div>
            </div>
        </div>
    </nav>
    ";
        }
        // line 121
        yield "
    ";
        // line 122
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 123
        yield "
    ";
        // line 124
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 127
        yield "</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        yield "    <link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("path/to/your/css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <style>
        .brand {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }

        .notco {
            width: 50px;
            height: 50px;
        }
    </style>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 122
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 124
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 125
        yield "    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  348 => 125,  335 => 124,  313 => 122,  286 => 13,  273 => 12,  250 => 6,  236 => 127,  234 => 124,  231 => 123,  229 => 122,  226 => 121,  217 => 115,  213 => 114,  208 => 112,  203 => 110,  193 => 102,  187 => 99,  184 => 98,  178 => 95,  175 => 94,  173 => 93,  168 => 91,  156 => 82,  146 => 75,  136 => 68,  132 => 66,  130 => 65,  121 => 59,  117 => 58,  113 => 57,  109 => 56,  93 => 43,  83 => 36,  79 => 34,  76 => 33,  70 => 28,  68 => 12,  59 => 6,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>

    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
        integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js\"></script>

    {% block stylesheets %}
    <link href=\"{{ asset('path/to/your/css/style.css') }}\" rel=\"stylesheet\">
    <style>
        .brand {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }

        .notco {
            width: 50px;
            height: 50px;
        }
    </style>
    {% endblock %}
</head>

<body>

    {# Affiche la première barre si l'utilisateur n'est pas connecté #}
    {% if not is_granted('IS_AUTHENTICATED_FULLY') %}
    <nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
        <div class=\"container-fluid\">
            <img src=\"{{ asset('images/logo.jpg') }}\" alt=\"logo brand\" class=\"icon ms-3 brand\" />
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Home</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_book') }}\">Nos Livres</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link disabled\" aria-disabled=\"true\">Disabled</a>
                    </li>
                </ul>
                <form class=\"d-flex\" role=\"search\">
                    <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                    <button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
                </form>
            </div>
            <div class=\"text-end me-5 mb-4\">
                <div class=\"d-flex align-items-center pt-4\" id=\"logs\">
                    <img src=\"{{ asset('images/user.png') }}\" alt=\"User Icon\" class=\"icon notco ms-3\" />
                    <a href=\"{{ path('app_login') }}\" class=\"btn btn-link\">Connexion</a>
                    <img src=\"{{ asset('images/signup.png') }}\" alt=\"Sign Up Icon\" class=\"icon ms-3\" />
                    <a href=\"{{ path('app_register') }}\" class=\"btn btn-link\">Inscription</a>
                </div>
            </div>
        </div>
    </nav>
    {% else %}
    {# Affiche la deuxième barre si l'utilisateur est connecté #}
    <nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
        <div class=\"container-fluid\">
            <img src=\"{{ asset('images/logo.jpg') }}\" alt=\"logo brand\" class=\"icon ms-3 brand\" />
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Home</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_book') }}\">Nos Livres</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\"
                            aria-expanded=\"false\">Mes Actions</a>
                        <ul class=\"dropdown-menu\">
                            <li><a class=\"dropdown-item\" href=\"#\">Emprunter un livre</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('app_book_loans') }}\">Voir tous mes emprunts</a></li> 
                            <li><hr class=\"dropdown-divider\"></li>
                            <li><a class=\"dropdown-item\" href=\"#\">Something else here</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link disabled\" aria-disabled=\"true\">Disabled</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('admin_dashboard') }}\">Admin</a>
                    </li>
                    {% if not is_granted('ROLE_ADMIN') %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('admin_promote_user') }}\">Devenir Admin</a>
                    </li>
                    {% else %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('admin_dashboard') }}\">Admin Dashboard</a>
                    </li>
                    {% endif %}
                </ul>
                <form class=\"d-flex\" role=\"search\">
                    <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                    <button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
                </form>
            </div>
            <div class=\"text-end me-5 mb-4\">
                <div class=\"d-flex align-items-center pt-4\" id=\"logs\">
                    <img src=\"{{ asset('images/useraccount.png') }}\" alt=\"User Icon\" class=\"icon ms-3\" />
                    <a href=\"#\" class=\"btn btn-link\">Profil</a>
                    <img src=\"{{ asset('images/trolley.png') }}\" alt=\"Cart Icon\" class=\"icon ms-3\" />
                    <a href=\"#\" class=\"btn btn-link\">Panier</a>
                    <img src=\"{{ asset('images/logout.png') }}\" alt=\"Logout Icon\" class=\"icon ms-3 notco\" />
                    <a href=\"{{ path('app_logout') }}\" class=\"btn btn-link\">Déconnexion</a>
                </div>
            </div>
        </div>
    </nav>
    {% endif %}

    {% block body %}{% endblock %}

    {% block javascripts %}
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"></script>
    {% endblock %}
</body>

</html>
", "base.html.twig", "C:\\Users\\axell\\Documents\\ECF Symfony\\ECF Symfony\\ECF\\templates\\base.html.twig");
    }
}
