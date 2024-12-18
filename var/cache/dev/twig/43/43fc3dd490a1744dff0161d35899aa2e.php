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

/* book/loans.html.twig */
class __TwigTemplate_59b1b1e37b565b9871b040064acca00e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/loans.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/loans.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "book/loans.html.twig", 1);
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

        yield "Liste des prêts";
        
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
        yield "<h1>Liste des prêts</h1>

<table border=\"1\" cellspacing=\"0\" cellpadding=\"5\">
    <thead>
        <tr>
            <th>ID du prêt</th>
            <th>Nom du livre</th>
            <th>Auteur</th>
            <th>Emprunté par</th>
            <th>Date d'emprunt</th>
            <th>Date retour prévue</th>
            <th>Date retour réelle</th>
            <th>Extension utilisée</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["bookLoans"]) || array_key_exists("bookLoans", $context) ? $context["bookLoans"] : (function () { throw new RuntimeError('Variable "bookLoans" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["loan"]) {
            // line 23
            yield "            <tr>
                <td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "id", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
                <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "book", [], "any", false, false, false, 25), "titre", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "book", [], "any", false, false, false, 26), "auteur", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "user", [], "any", false, false, false, 27), "username", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "dateEmprunt", [], "any", false, false, false, 28), "Y-m-d"), "html", null, true);
            yield "</td>
                <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "dateRetourPrevue", [], "any", false, false, false, 29), "Y-m-d"), "html", null, true);
            yield "</td>
                <td>
                    ";
            // line 31
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "dateRetourReelle", [], "any", false, false, false, 31)) {
                // line 32
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "dateRetourReelle", [], "any", false, false, false, 32), "Y-m-d"), "html", null, true);
                yield "
                    ";
            } else {
                // line 34
                yield "                        Non retourné
                    ";
            }
            // line 36
            yield "                </td>
                <td>
                    ";
            // line 38
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "extensionUtilisee", [], "any", false, false, false, 38)) {
                // line 39
                yield "                        Oui
                    ";
            } else {
                // line 41
                yield "                        Non
                    ";
            }
            // line 43
            yield "                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            yield "            <tr>
                <td colspan=\"8\">Aucun prêt trouvé.</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['loan'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "    </tbody>
</table>

<a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Retour à l'accueil</a>
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
        return "book/loans.html.twig";
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
        return array (  198 => 53,  193 => 50,  184 => 46,  177 => 43,  173 => 41,  169 => 39,  167 => 38,  163 => 36,  159 => 34,  153 => 32,  151 => 31,  146 => 29,  142 => 28,  138 => 27,  134 => 26,  130 => 25,  126 => 24,  123 => 23,  118 => 22,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des prêts{% endblock %}

{% block body %}
<h1>Liste des prêts</h1>

<table border=\"1\" cellspacing=\"0\" cellpadding=\"5\">
    <thead>
        <tr>
            <th>ID du prêt</th>
            <th>Nom du livre</th>
            <th>Auteur</th>
            <th>Emprunté par</th>
            <th>Date d'emprunt</th>
            <th>Date retour prévue</th>
            <th>Date retour réelle</th>
            <th>Extension utilisée</th>
        </tr>
    </thead>
    <tbody>
        {% for loan in bookLoans %}
            <tr>
                <td>{{ loan.id }}</td>
                <td>{{ loan.book.titre }}</td>
                <td>{{ loan.book.auteur }}</td>
                <td>{{ loan.user.username }}</td>
                <td>{{ loan.dateEmprunt|date('Y-m-d') }}</td>
                <td>{{ loan.dateRetourPrevue|date('Y-m-d') }}</td>
                <td>
                    {% if loan.dateRetourReelle %}
                        {{ loan.dateRetourReelle|date('Y-m-d') }}
                    {% else %}
                        Non retourné
                    {% endif %}
                </td>
                <td>
                    {% if loan.extensionUtilisee %}
                        Oui
                    {% else %}
                        Non
                    {% endif %}
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\">Aucun prêt trouvé.</td>
            </tr>
        {% endfor %}
    </tbody>
</table>

<a href=\"{{ path('app_home') }}\">Retour à l'accueil</a>
{% endblock %}

", "book/loans.html.twig", "C:\\Users\\axell\\Documents\\ECF Symfony\\ECF Symfony\\ECF\\templates\\book\\loans.html.twig");
    }
}
