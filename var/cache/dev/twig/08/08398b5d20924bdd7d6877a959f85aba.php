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

/* Modules/Risks/index.html.twig */
class __TwigTemplate_6c05216892b20b808aab7504879df7d2 extends Template
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
            'content' => [$this, 'block_content'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Modules/Risks/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Evaluaciones de Riesgos - EUDR";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        yield "<div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
    <h1 class=\"h2\">Gestión de Riesgos</h1>
    <div class=\"btn-toolbar mb-2 mb-md-0\">
        <a href=\"#\" class=\"btn btn-sm btn-primary\">Nueva Evaluación</a>
    </div>
</div>

<div class=\"card shadow-sm\">
    <div class=\"card-body\">
        <table class=\"table table-hover align-middle\">
            <thead class=\"table-light\">
                <tr>
                    <th>ID</th>
                    <th>Organización</th>
                    <th>Fecha Registro</th>
                    <th>Nivel de Riesgo</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evaluations"]) || array_key_exists("evaluations", $context) ? $context["evaluations"] : (function () { throw new RuntimeError('Variable "evaluations" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["eval"]) {
            // line 28
            yield "                    <tr>
                        <td>#";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["eval"], "id", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
                        <td><strong>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["eval"], "organization", [], "any", false, false, false, 30), "html", null, true);
            yield "</strong></td>
                        <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["eval"], "date", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 33
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["eval"], "riskLevel", [], "any", false, false, false, 33) == "Alto")) {
                // line 34
                yield "                                <span class=\"badge bg-danger\">Riesgo Alto</span>
                            ";
            } else {
                // line 36
                yield "                                <span class=\"badge bg-warning text-dark\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["eval"], "riskLevel", [], "any", false, false, false, 36), "html", null, true);
                yield "</span>
                            ";
            }
            // line 38
            yield "                        </td>
                        <td>
                            ";
            // line 40
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["eval"], "status", [], "any", false, false, false, 40) == "draft")) {
                // line 41
                yield "                                <span class=\"badge bg-secondary\">Borrador</span>
                            ";
            } else {
                // line 43
                yield "                                <span class=\"badge bg-success\">Completado</span>
                            ";
            }
            // line 45
            yield "                        </td>
                        <td>
                            <a href=\"#\" class=\"btn btn-sm btn-outline-primary\">Ver</a>
                            <a href=\"#\" class=\"btn btn-sm btn-outline-secondary\">Reporte</a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 51
        if (!$context['_iterated']) {
            // line 52
            yield "                    <tr><td colspan=\"6\" class=\"text-center text-muted\">No hay evaluaciones registradas.</td></tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['eval'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "            </tbody>
        </table>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Modules/Risks/index.html.twig";
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
        return array (  174 => 54,  167 => 52,  165 => 51,  155 => 45,  151 => 43,  147 => 41,  145 => 40,  141 => 38,  135 => 36,  131 => 34,  129 => 33,  124 => 31,  120 => 30,  116 => 29,  113 => 28,  108 => 27,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Evaluaciones de Riesgos - EUDR{% endblock %}

{% block content %}
<div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
    <h1 class=\"h2\">Gestión de Riesgos</h1>
    <div class=\"btn-toolbar mb-2 mb-md-0\">
        <a href=\"#\" class=\"btn btn-sm btn-primary\">Nueva Evaluación</a>
    </div>
</div>

<div class=\"card shadow-sm\">
    <div class=\"card-body\">
        <table class=\"table table-hover align-middle\">
            <thead class=\"table-light\">
                <tr>
                    <th>ID</th>
                    <th>Organización</th>
                    <th>Fecha Registro</th>
                    <th>Nivel de Riesgo</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                {% for eval in evaluations %}
                    <tr>
                        <td>#{{ eval.id }}</td>
                        <td><strong>{{ eval.organization }}</strong></td>
                        <td>{{ eval.date }}</td>
                        <td>
                            {% if eval.riskLevel == 'Alto' %}
                                <span class=\"badge bg-danger\">Riesgo Alto</span>
                            {% else %}
                                <span class=\"badge bg-warning text-dark\">{{ eval.riskLevel }}</span>
                            {% endif %}
                        </td>
                        <td>
                            {% if eval.status == 'draft' %}
                                <span class=\"badge bg-secondary\">Borrador</span>
                            {% else %}
                                <span class=\"badge bg-success\">Completado</span>
                            {% endif %}
                        </td>
                        <td>
                            <a href=\"#\" class=\"btn btn-sm btn-outline-primary\">Ver</a>
                            <a href=\"#\" class=\"btn btn-sm btn-outline-secondary\">Reporte</a>
                        </td>
                    </tr>
                {% else %}
                    <tr><td colspan=\"6\" class=\"text-center text-muted\">No hay evaluaciones registradas.</td></tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}
", "Modules/Risks/index.html.twig", "/var/www/html/templates/Modules/Risks/index.html.twig");
    }
}
