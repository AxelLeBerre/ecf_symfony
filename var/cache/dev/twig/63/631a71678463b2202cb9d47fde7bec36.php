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

/* book/index.html.twig */
class __TwigTemplate_419f1f20dcaa43698c56bef28266485a extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "book/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Nos livres";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<style>
    /* Styles du header */
    .custom-header {
        background-color: #005144; /* Couleur de fond sombre */
        color: white;
        padding: 60px 0;
        text-align: center;
    }

    .custom-header h1 {
        font-size: 2.5rem;
        margin-bottom: 20px;
    }

    .custom-header p {
        font-size: 1.2rem;
    }

    .custom-header button {
        background-color: #fff;
        color: #005144;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 1rem;
        cursor: pointer;
    }

    .custom-header button:hover {
        background-color: #ddd;
    }

    /* Section des cartes */
    .card-container {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px; /* Espacement uniforme entre les cartes */
    margin: 20px auto;
    max-width: 1200px;
    }

.custom-card {
    display: flex;
    flex-direction: column; /* Organise les éléments verticalement */
    justify-content: space-between; /* Répartit uniformément les espaces */
    background-color: #F5F5DC; /* Fond beige */
    border: none;
    border-radius: 8px;
    padding: 20px;
    text-align: center;
    flex: 1 1 calc(25% - 20px);
    max-width: calc(25% - 20px);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    height: 400px; /* Hauteur uniforme */
    box-sizing: border-box;
}

.custom-card img {
    width: 100%;
    height: 200px; /* Hauteur fixe pour les images */
    object-fit: cover;
    border-radius: 8px;
}

.custom-card h5 {
    margin-top: 10px;
    margin-bottom: 10px;
    font-size: 1.2rem;
    color: #333;
    min-height: 40px; /* Assure une hauteur fixe pour les titres */
    display: flex;
    align-items: center; /* Centre verticalement le titre */
    justify-content: center;
}

.custom-card p {
    color: #666;
    font-size: 0.9rem;
    margin-bottom: 10px;
    min-height: 40px; /* Assure une hauteur fixe pour la description */
    display: flex;
    align-items: center;
    justify-content: center;
}

.card-footer {
    margin-top: auto; /* Pousse le contenu en bas */
    display: flex;
    flex-direction: column;
    gap: 10px; /* Espacement entre les éléments */
}

.custom-card .btn-details {
    padding: 8px 12px;
    background-color: #005144; /* Couleur principale */
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-size: 0.9rem;
}

.custom-card .btn-details:hover {
    background-color: #00382F;
}

.custom-card .availability {
    font-weight: bold;
    color: green;
}


/* Responsive pour tablette */
@media (max-width: 768px) {
    .custom-card {
        flex: 1 1 calc(50% - 20px); /* 2 cartes par ligne */
        height: 350px; /* Ajuste la hauteur */
    }
}

/* Responsive pour mobile */
@media (max-width: 480px) {
    .custom-card {
        flex: 1 1 100%; /* 1 carte par ligne */
        height: 300px; /* Ajuste la hauteur */
    }
}

    /* Responsive pour tablette */
    @media (max-width: 768px) {
        .custom-card {
            flex: 1 1 calc(50% - 20px);
        }
    }

    /* Responsive pour mobile */
    @media (max-width: 480px) {
        .custom-card {
            flex: 1 1 100%;
        }
    }
</style>

<!-- Header -->
<div class=\"custom-header\">
    <h1>Assurez-vous que le père Noël arrivera à temps</h1>
    <p>Plus que quelques jours pour commander de belles histoires à offrir</p>
    <button>J'y vais !</button>
</div>

<!-- Section des cartes -->
<h1 class='text-center'>Nos livres</h1>
<div class=\"card-container\">
    ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 159, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 160
            yield "        <div class=\"custom-card\">
            <img src=\"https://picsum.photos/250/300\" alt=\"Image de livre ";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "titre", [], "any", false, false, false, 161), "html", null, true);
            yield "\">
            <h5>";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "titre", [], "any", false, false, false, 162), "html", null, true);
            yield "</h5>
            <p>";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "auteur", [], "any", false, false, false, 163), "html", null, true);
            yield "</p>
            <!-- Bouton Détails -->
            <a href=\"";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 165)]), "html", null, true);
            yield "\" class=\"btn-details\">Détails</a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['book'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        yield "</div>
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
        return "book/index.html.twig";
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
        return array (  284 => 168,  275 => 165,  270 => 163,  266 => 162,  262 => 161,  259 => 160,  255 => 159,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nos livres{% endblock %}

{% block body %}
<style>
    /* Styles du header */
    .custom-header {
        background-color: #005144; /* Couleur de fond sombre */
        color: white;
        padding: 60px 0;
        text-align: center;
    }

    .custom-header h1 {
        font-size: 2.5rem;
        margin-bottom: 20px;
    }

    .custom-header p {
        font-size: 1.2rem;
    }

    .custom-header button {
        background-color: #fff;
        color: #005144;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 1rem;
        cursor: pointer;
    }

    .custom-header button:hover {
        background-color: #ddd;
    }

    /* Section des cartes */
    .card-container {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px; /* Espacement uniforme entre les cartes */
    margin: 20px auto;
    max-width: 1200px;
    }

.custom-card {
    display: flex;
    flex-direction: column; /* Organise les éléments verticalement */
    justify-content: space-between; /* Répartit uniformément les espaces */
    background-color: #F5F5DC; /* Fond beige */
    border: none;
    border-radius: 8px;
    padding: 20px;
    text-align: center;
    flex: 1 1 calc(25% - 20px);
    max-width: calc(25% - 20px);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    height: 400px; /* Hauteur uniforme */
    box-sizing: border-box;
}

.custom-card img {
    width: 100%;
    height: 200px; /* Hauteur fixe pour les images */
    object-fit: cover;
    border-radius: 8px;
}

.custom-card h5 {
    margin-top: 10px;
    margin-bottom: 10px;
    font-size: 1.2rem;
    color: #333;
    min-height: 40px; /* Assure une hauteur fixe pour les titres */
    display: flex;
    align-items: center; /* Centre verticalement le titre */
    justify-content: center;
}

.custom-card p {
    color: #666;
    font-size: 0.9rem;
    margin-bottom: 10px;
    min-height: 40px; /* Assure une hauteur fixe pour la description */
    display: flex;
    align-items: center;
    justify-content: center;
}

.card-footer {
    margin-top: auto; /* Pousse le contenu en bas */
    display: flex;
    flex-direction: column;
    gap: 10px; /* Espacement entre les éléments */
}

.custom-card .btn-details {
    padding: 8px 12px;
    background-color: #005144; /* Couleur principale */
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-size: 0.9rem;
}

.custom-card .btn-details:hover {
    background-color: #00382F;
}

.custom-card .availability {
    font-weight: bold;
    color: green;
}


/* Responsive pour tablette */
@media (max-width: 768px) {
    .custom-card {
        flex: 1 1 calc(50% - 20px); /* 2 cartes par ligne */
        height: 350px; /* Ajuste la hauteur */
    }
}

/* Responsive pour mobile */
@media (max-width: 480px) {
    .custom-card {
        flex: 1 1 100%; /* 1 carte par ligne */
        height: 300px; /* Ajuste la hauteur */
    }
}

    /* Responsive pour tablette */
    @media (max-width: 768px) {
        .custom-card {
            flex: 1 1 calc(50% - 20px);
        }
    }

    /* Responsive pour mobile */
    @media (max-width: 480px) {
        .custom-card {
            flex: 1 1 100%;
        }
    }
</style>

<!-- Header -->
<div class=\"custom-header\">
    <h1>Assurez-vous que le père Noël arrivera à temps</h1>
    <p>Plus que quelques jours pour commander de belles histoires à offrir</p>
    <button>J'y vais !</button>
</div>

<!-- Section des cartes -->
<h1 class='text-center'>Nos livres</h1>
<div class=\"card-container\">
    {% for book in books %}
        <div class=\"custom-card\">
            <img src=\"https://picsum.photos/250/300\" alt=\"Image de livre {{ book.titre }}\">
            <h5>{{ book.titre }}</h5>
            <p>{{ book.auteur }}</p>
            <!-- Bouton Détails -->
            <a href=\"{{ path('book_detail', {'id': book.id}) }}\" class=\"btn-details\">Détails</a>
        </div>
    {% endfor %}
</div>
{% endblock %}

{# templates/book/index.html.twig #}
", "book/index.html.twig", "C:\\Users\\axell\\Documents\\ECF Symfony\\ECF Symfony\\ECF\\templates\\book\\index.html.twig");
    }
}
