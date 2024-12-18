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

/* book/detail.html.twig */
class __TwigTemplate_3e8dcc4408a67439c086f2f3423f73c2 extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "book/detail.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 5, $this->source); })()), "titre", [], "any", false, false, false, 5), "html", null, true);
        yield " - Détails";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "<style>
    /* Conteneur principal */
    .book-detail-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        margin: 40px auto;
        max-width: 1200px;
    }

    /* Section image principale */
    .book-image-section {
        flex: 1 1 40%;
        text-align: center;
    }

    .book-image-section img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    }

    .thumbnail-gallery {
        display: flex;
        gap: 10px;
        justify-content: center;
        margin-top: 10px;
    }

    .thumbnail-gallery img {
        width: 60px;
        height: 80px;
        cursor: pointer;
        border-radius: 4px;
        border: 1px solid #ddd;
        transition: transform 0.3s;
    }

    .thumbnail-gallery img:hover {
        transform: scale(1.1);
        border-color: #333;
    }

    /* Section informations */
    .book-info-section {
        flex: 1 1 55%;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
    }

    .book-info-section h1 {
        font-size: 2rem;
        margin-bottom: 10px;
    }

    .book-info-section p {
        margin: 8px 0;
        color: #333;
        line-height: 1.6;
    }

    .book-price {
        font-size: 1.5rem;
        font-weight: bold;
        margin: 10px 0;
        color: #005144;
    }

    .book-button {
        display: inline-block;
        margin: 15px 0;
        background-color: #005144;
        color: white;
        padding: 12px 20px;
        text-decoration: none;
        font-size: 1rem;
        border-radius: 5px;
        text-align: center;
    }

    .book-button:hover {
        background-color: #003d33;
    }

    /* Accordéons */
    .accordion {
        margin-top: 20px;
    }

    .accordion-item {
        border-bottom: 1px solid #ddd;
    }

    .accordion-item button {
        background: none;
        border: none;
        width: 100%;
        text-align: left;
        font-size: 1.1rem;
        padding: 10px 0;
        cursor: pointer;
    }

    .accordion-item p {
        display: none;
        margin: 10px 0;
    }

    .accordion-item.active p {
        display: block;
    }

    /* Image principale */
    #mainImage {
        width: 450px; /* Largeur fixe */
        height: 500px; /* Hauteur fixe */
        object-fit: cover; /* Assure un ajustement sans déformation */
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    }

    .availability {
        margin-top: 15px;
        font-weight: bold;
        font-size: 1.1rem;
    }

    .available {
        color: green;
    }

    .unavailable {
        color: red;
    }

</style>

<div class=\"book-detail-container\">
    <!-- Section Image principale -->
    <div class=\"book-image-section\">
        <img src=\"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 150, $this->source); })()), "image", [], "any", false, false, false, 150), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 150, $this->source); })()), "titre", [], "any", false, false, false, 150), "html", null, true);
        yield "\" id=\"mainImage\">
        <!-- Galerie des miniatures -->
        <div class=\"thumbnail-gallery\">
            <img src=\"";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 153, $this->source); })()), "image", [], "any", false, false, false, 153), "html", null, true);
        yield "\" alt=\"Miniature 1\" onclick=\"changeImage(this)\">
            <img src=\"https://picsum.photos/200/300?random=2\" alt=\"Miniature 2\" onclick=\"changeImage(this)\">
            <img src=\"https://picsum.photos/200/300?random=3\" alt=\"Miniature 3\" onclick=\"changeImage(this)\">
            <img src=\"https://picsum.photos/200/300?random=4\" alt=\"Miniature 4\" onclick=\"changeImage(this)\">
        </div>
    </div>

    <!-- Section Informations -->
    <div class=\"book-info-section\">
        <h1>";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 162, $this->source); })()), "titre", [], "any", false, false, false, 162), "html", null, true);
        yield "</h1>
        <p><strong>Auteur :</strong> ";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 163, $this->source); })()), "auteur", [], "any", false, false, false, 163), "html", null, true);
        yield "</p>
        <p>";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 164, $this->source); })()), "resume", [], "any", false, false, false, 164), "html", null, true);
        yield "</p>

        <!-- Affichage de la disponibilité -->
        <div class=\"availability ";
        // line 167
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 167, $this->source); })()), "getIsAvailable", [], "method", false, false, false, 167)) {
            yield "available";
        } else {
            yield "unavailable";
        }
        yield "\">
            ";
        // line 168
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 168, $this->source); })()), "getIsAvailable", [], "method", false, false, false, 168)) {
            // line 169
            yield "                Livre disponible
            ";
        } else {
            // line 171
            yield "                Livre non disponible
            ";
        }
        // line 173
        yield "        </div>

        <!-- Affichage de l'état du livre -->
        <div class=\"book-condition\">
            <strong>État du livre :</strong> ";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["bookCondition"]) || array_key_exists("bookCondition", $context) ? $context["bookCondition"] : (function () { throw new RuntimeError('Variable "bookCondition" does not exist.', 177, $this->source); })()), "html", null, true);
        yield "
        </div>

        <!-- Bouton avec condition pour désactiver si le livre est non disponible -->
        <a href=\"";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_book_loan", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 181, $this->source); })()), "id", [], "any", false, false, false, 181)]), "html", null, true);
        yield "\" 
           class=\"book-button ";
        // line 182
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 182, $this->source); })()), "getIsAvailable", [], "method", false, false, false, 182)) {
            yield "unavailable-button";
        }
        yield "\">
           Vérifier la disponibilité
        </a>

        <!-- Accordéon pour plus d'infos -->
        <div class=\"accordion\">
            <div class=\"accordion-item\">
                <button onclick=\"toggleAccordion(this)\">Comment le livre est-il personnalisé ?</button>
                <p>Ce livre est personnalisé avec le prénom et les membres de la famille.</p>
            </div>
            <div class=\"accordion-item\">
                <button onclick=\"toggleAccordion(this)\">De quoi parle l'histoire ?</button>
                <p>Une aventure passionnante où les enfants recherchent leurs héros préférés.</p>
            </div>
            <div class=\"accordion-item\">
                <button onclick=\"toggleAccordion(this)\">Format et qualité</button>
                <p>Impression de haute qualité avec une couverture rigide.</p>
            </div>
        </div>
    </div>
</div>

";
        // line 205
        yield "<h2 class=\"mt-5 mb-4 text-center\">Ajouter un commentaire</h2>

<div class=\"card shadow-sm mx-auto\" style=\"max-width: 600px;\">
    <div class=\"card-body\">
        ";
        // line 209
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reviewForm"]) || array_key_exists("reviewForm", $context) ? $context["reviewForm"] : (function () { throw new RuntimeError('Variable "reviewForm" does not exist.', 209, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation"]]);
        yield "
            <div class=\"mb-3\">
                ";
        // line 211
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewForm"]) || array_key_exists("reviewForm", $context) ? $context["reviewForm"] : (function () { throw new RuntimeError('Variable "reviewForm" does not exist.', 211, $this->source); })()), "commentaire", [], "any", false, false, false, 211), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Votre commentaire"]);
        yield "
                ";
        // line 212
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewForm"]) || array_key_exists("reviewForm", $context) ? $context["reviewForm"] : (function () { throw new RuntimeError('Variable "reviewForm" does not exist.', 212, $this->source); })()), "commentaire", [], "any", false, false, false, 212), 'widget', ["attr" => ["class" => "form-control", "rows" => "5", "placeholder" => "Partagez votre avis..."]]);
        yield "
                ";
        // line 213
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewForm"]) || array_key_exists("reviewForm", $context) ? $context["reviewForm"] : (function () { throw new RuntimeError('Variable "reviewForm" does not exist.', 213, $this->source); })()), "commentaire", [], "any", false, false, false, 213), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
            </div>

            <div class=\"mb-3\">
                ";
        // line 217
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewForm"]) || array_key_exists("reviewForm", $context) ? $context["reviewForm"] : (function () { throw new RuntimeError('Variable "reviewForm" does not exist.', 217, $this->source); })()), "note", [], "any", false, false, false, 217), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Note"]);
        yield "
                ";
        // line 218
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewForm"]) || array_key_exists("reviewForm", $context) ? $context["reviewForm"] : (function () { throw new RuntimeError('Variable "reviewForm" does not exist.', 218, $this->source); })()), "note", [], "any", false, false, false, 218), 'widget', ["attr" => ["class" => "form-control", "min" => "0", "max" => "5", "placeholder" => "Entrez une note de 1 à 5"]]);
        yield "
                ";
        // line 219
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewForm"]) || array_key_exists("reviewForm", $context) ? $context["reviewForm"] : (function () { throw new RuntimeError('Variable "reviewForm" does not exist.', 219, $this->source); })()), "note", [], "any", false, false, false, 219), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
            </div>

            <div class=\"text-center\">
                <button type=\"submit\" class=\"btn btn-primary btn-lg px-4\">Soumettre</button>
            </div>
        ";
        // line 225
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reviewForm"]) || array_key_exists("reviewForm", $context) ? $context["reviewForm"] : (function () { throw new RuntimeError('Variable "reviewForm" does not exist.', 225, $this->source); })()), 'form_end');
        yield "
    </div>
</div>

<script>
    // Fonction pour changer l'image principale
    function changeImage(element) {
        const mainImage = document.getElementById('mainImage');
        mainImage.src = element.src;
    }

    // Fonction pour basculer l'accordéon
    function toggleAccordion(button) {
        const item = button.parentElement;
        item.classList.toggle('active');
    }
</script>

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
        return "book/detail.html.twig";
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
        return array (  384 => 225,  375 => 219,  371 => 218,  367 => 217,  360 => 213,  356 => 212,  352 => 211,  347 => 209,  341 => 205,  314 => 182,  310 => 181,  303 => 177,  297 => 173,  293 => 171,  289 => 169,  287 => 168,  279 => 167,  273 => 164,  269 => 163,  265 => 162,  253 => 153,  245 => 150,  101 => 8,  88 => 7,  64 => 5,  41 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/book/detail.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}{{ book.titre }} - Détails{% endblock %}

{% block body %}
<style>
    /* Conteneur principal */
    .book-detail-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        margin: 40px auto;
        max-width: 1200px;
    }

    /* Section image principale */
    .book-image-section {
        flex: 1 1 40%;
        text-align: center;
    }

    .book-image-section img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    }

    .thumbnail-gallery {
        display: flex;
        gap: 10px;
        justify-content: center;
        margin-top: 10px;
    }

    .thumbnail-gallery img {
        width: 60px;
        height: 80px;
        cursor: pointer;
        border-radius: 4px;
        border: 1px solid #ddd;
        transition: transform 0.3s;
    }

    .thumbnail-gallery img:hover {
        transform: scale(1.1);
        border-color: #333;
    }

    /* Section informations */
    .book-info-section {
        flex: 1 1 55%;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
    }

    .book-info-section h1 {
        font-size: 2rem;
        margin-bottom: 10px;
    }

    .book-info-section p {
        margin: 8px 0;
        color: #333;
        line-height: 1.6;
    }

    .book-price {
        font-size: 1.5rem;
        font-weight: bold;
        margin: 10px 0;
        color: #005144;
    }

    .book-button {
        display: inline-block;
        margin: 15px 0;
        background-color: #005144;
        color: white;
        padding: 12px 20px;
        text-decoration: none;
        font-size: 1rem;
        border-radius: 5px;
        text-align: center;
    }

    .book-button:hover {
        background-color: #003d33;
    }

    /* Accordéons */
    .accordion {
        margin-top: 20px;
    }

    .accordion-item {
        border-bottom: 1px solid #ddd;
    }

    .accordion-item button {
        background: none;
        border: none;
        width: 100%;
        text-align: left;
        font-size: 1.1rem;
        padding: 10px 0;
        cursor: pointer;
    }

    .accordion-item p {
        display: none;
        margin: 10px 0;
    }

    .accordion-item.active p {
        display: block;
    }

    /* Image principale */
    #mainImage {
        width: 450px; /* Largeur fixe */
        height: 500px; /* Hauteur fixe */
        object-fit: cover; /* Assure un ajustement sans déformation */
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    }

    .availability {
        margin-top: 15px;
        font-weight: bold;
        font-size: 1.1rem;
    }

    .available {
        color: green;
    }

    .unavailable {
        color: red;
    }

</style>

<div class=\"book-detail-container\">
    <!-- Section Image principale -->
    <div class=\"book-image-section\">
        <img src=\"{{ book.image }}\" alt=\"{{ book.titre }}\" id=\"mainImage\">
        <!-- Galerie des miniatures -->
        <div class=\"thumbnail-gallery\">
            <img src=\"{{ book.image }}\" alt=\"Miniature 1\" onclick=\"changeImage(this)\">
            <img src=\"https://picsum.photos/200/300?random=2\" alt=\"Miniature 2\" onclick=\"changeImage(this)\">
            <img src=\"https://picsum.photos/200/300?random=3\" alt=\"Miniature 3\" onclick=\"changeImage(this)\">
            <img src=\"https://picsum.photos/200/300?random=4\" alt=\"Miniature 4\" onclick=\"changeImage(this)\">
        </div>
    </div>

    <!-- Section Informations -->
    <div class=\"book-info-section\">
        <h1>{{ book.titre }}</h1>
        <p><strong>Auteur :</strong> {{ book.auteur }}</p>
        <p>{{ book.resume }}</p>

        <!-- Affichage de la disponibilité -->
        <div class=\"availability {% if book.getIsAvailable() %}available{% else %}unavailable{% endif %}\">
            {% if book.getIsAvailable() %}
                Livre disponible
            {% else %}
                Livre non disponible
            {% endif %}
        </div>

        <!-- Affichage de l'état du livre -->
        <div class=\"book-condition\">
            <strong>État du livre :</strong> {{ bookCondition }}
        </div>

        <!-- Bouton avec condition pour désactiver si le livre est non disponible -->
        <a href=\"{{ path('app_book_loan', {'id': book.id}) }}\" 
           class=\"book-button {% if not book.getIsAvailable() %}unavailable-button{% endif %}\">
           Vérifier la disponibilité
        </a>

        <!-- Accordéon pour plus d'infos -->
        <div class=\"accordion\">
            <div class=\"accordion-item\">
                <button onclick=\"toggleAccordion(this)\">Comment le livre est-il personnalisé ?</button>
                <p>Ce livre est personnalisé avec le prénom et les membres de la famille.</p>
            </div>
            <div class=\"accordion-item\">
                <button onclick=\"toggleAccordion(this)\">De quoi parle l'histoire ?</button>
                <p>Une aventure passionnante où les enfants recherchent leurs héros préférés.</p>
            </div>
            <div class=\"accordion-item\">
                <button onclick=\"toggleAccordion(this)\">Format et qualité</button>
                <p>Impression de haute qualité avec une couverture rigide.</p>
            </div>
        </div>
    </div>
</div>

{# Formulaire pour ajouter un commentaire #}
<h2 class=\"mt-5 mb-4 text-center\">Ajouter un commentaire</h2>

<div class=\"card shadow-sm mx-auto\" style=\"max-width: 600px;\">
    <div class=\"card-body\">
        {{ form_start(reviewForm, {'attr': {'class': 'needs-validation'}}) }}
            <div class=\"mb-3\">
                {{ form_label(reviewForm.commentaire, 'Votre commentaire', {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(reviewForm.commentaire, {'attr': {'class': 'form-control', 'rows': '5', 'placeholder': 'Partagez votre avis...'}}) }}
                {{ form_errors(reviewForm.commentaire, {'attr': {'class': 'text-danger'}}) }}
            </div>

            <div class=\"mb-3\">
                {{ form_label(reviewForm.note, 'Note', {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(reviewForm.note, {'attr': {'class': 'form-control', 'min': '0', 'max': '5', 'placeholder': 'Entrez une note de 1 à 5'}}) }}
                {{ form_errors(reviewForm.note, {'attr': {'class': 'text-danger'}}) }}
            </div>

            <div class=\"text-center\">
                <button type=\"submit\" class=\"btn btn-primary btn-lg px-4\">Soumettre</button>
            </div>
        {{ form_end(reviewForm) }}
    </div>
</div>

<script>
    // Fonction pour changer l'image principale
    function changeImage(element) {
        const mainImage = document.getElementById('mainImage');
        mainImage.src = element.src;
    }

    // Fonction pour basculer l'accordéon
    function toggleAccordion(button) {
        const item = button.parentElement;
        item.classList.toggle('active');
    }
</script>

{% endblock %}
", "book/detail.html.twig", "C:\\Users\\axell\\Documents\\ECF Symfony\\ECF Symfony\\ECF\\templates\\book\\detail.html.twig");
    }
}
