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

/* public/results.html.twig */
class __TwigTemplate_d48bbe4d2ee96cc9cc9640bf5911bb5a extends Template
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
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "public_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/results.html.twig"));

        $this->parent = $this->load("public_base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        yield "<div class=\"card shadow-lg border-0 mb-5\">
    <div class=\"card-header bg-primary text-white pt-4 pb-3 text-center\">
        <h3 class=\"fw-bold m-0\">B. Resultados de la Evaluación</h3>
    </div>
    <div class=\"card-body p-4 p-md-5\">
        ";
        // line 9
        $context["data"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 9, $this->source); })()), "temporaryData", [], "any", false, false, false, 9);
        // line 10
        yield "        ";
        $context["results"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "results", [], "any", true, true, false, 10) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "results", [], "any", false, false, false, 10)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "results", [], "any", false, false, false, 10)) : ([]));
        // line 11
        yield "        ";
        $context["global"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "global_percentage", [], "any", true, true, false, 11) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 11, $this->source); })()), "global_percentage", [], "any", false, false, false, 11)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 11, $this->source); })()), "global_percentage", [], "any", false, false, false, 11)) : (0));
        // line 12
        yield "
        <div class=\"text-center mb-5\">
            <h1 class=\"display-3 fw-bold ";
        // line 14
        if (((isset($context["global"]) || array_key_exists("global", $context) ? $context["global"] : (function () { throw new RuntimeError('Variable "global" does not exist.', 14, $this->source); })()) >= 90)) {
            yield "text-success";
        } elseif (((isset($context["global"]) || array_key_exists("global", $context) ? $context["global"] : (function () { throw new RuntimeError('Variable "global" does not exist.', 14, $this->source); })()) > 50)) {
            yield "text-warning";
        } else {
            yield "text-danger";
        }
        yield "\">
                ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["global"]) || array_key_exists("global", $context) ? $context["global"] : (function () { throw new RuntimeError('Variable "global" does not exist.', 15, $this->source); })()), 1), "html", null, true);
        yield "%
            </h1>
            <h4 class=\"text-secondary\">Cumplimiento Global EUDR</h4>
        </div>

        <div class=\"row mb-5\">
            <div class=\"col-md-12\">
                <div class=\"chart-container\" style=\"position: relative; height:40vh; width:100%\">
                    <canvas id=\"resultsChart\"></canvas>
                </div>
            </div>
        </div>

        <table class=\"table table-bordered table-hover align-middle\">
            <thead class=\"table-light\">
                <tr>
                    <th>Área Estratégica</th>
                    <th class=\"text-center\">Puntaje</th>
                    <th class=\"text-center\">Resultado (%)</th>
                    <th class=\"text-center\">Nivel</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 38
        $context["areasNames"] = [1 => "1. Capacidad Organizativa", 2 => "2. Disponibilidad de la Información", 3 => "3. Capacidad de Autoevaluación", 4 => "4. Medidas para Minimizar el Riesgo"];
        // line 44
        yield "
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["i"] => $context["r"]) {
            // line 46
            yield "                    ";
            $context["perc"] = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "percentage", [], "any", false, false, false, 46);
            // line 47
            yield "                    ";
            $context["color"] = "danger";
            // line 48
            yield "                    ";
            $context["nivel"] = "Crítico (Acción Inmediata)";
            // line 49
            yield "                    ";
            if (((isset($context["perc"]) || array_key_exists("perc", $context) ? $context["perc"] : (function () { throw new RuntimeError('Variable "perc" does not exist.', 49, $this->source); })()) >= 90)) {
                // line 50
                yield "                        ";
                $context["color"] = "success";
                // line 51
                yield "                        ";
                $context["nivel"] = "Sólido (Mantener)";
                // line 52
                yield "                    ";
            } elseif (((isset($context["perc"]) || array_key_exists("perc", $context) ? $context["perc"] : (function () { throw new RuntimeError('Variable "perc" does not exist.', 52, $this->source); })()) > 50)) {
                // line 53
                yield "                        ";
                $context["color"] = "warning";
                // line 54
                yield "                        ";
                $context["nivel"] = "Moderado (Seguimiento)";
                // line 55
                yield "                    ";
            }
            // line 56
            yield "
                    <tr>
                        <td class=\"fw-bold\">";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["areasNames"]) || array_key_exists("areasNames", $context) ? $context["areasNames"] : (function () { throw new RuntimeError('Variable "areasNames" does not exist.', 58, $this->source); })()), $context["i"], [], "array", false, false, false, 58), "html", null, true);
            yield "</td>
                        <td class=\"text-center\">";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "score", [], "any", false, false, false, 59), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "max", [], "any", false, false, false, 59), "html", null, true);
            yield "</td>
                        <td class=\"text-center fw-bold text-";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 60, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["perc"]) || array_key_exists("perc", $context) ? $context["perc"] : (function () { throw new RuntimeError('Variable "perc" does not exist.', 60, $this->source); })()), 1), "html", null, true);
            yield "%</td>
                        <td class=\"text-center\"><span class=\"badge bg-";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 61, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nivel"]) || array_key_exists("nivel", $context) ? $context["nivel"] : (function () { throw new RuntimeError('Variable "nivel" does not exist.', 61, $this->source); })()), "html", null, true);
            yield "</span></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['i'], $context['r'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "            </tbody>
        </table>

        <div class=\"alert alert-info mt-5 border-start border-info border-5\">
            <h5 class=\"fw-bold\"><i class=\"bi bi-info-circle\"></i> Siguiente Paso: Plan de Mejora</h5>
            <p class=\"mb-0\">A continuación, el sistema ha filtrado los indicadores donde su puntuación fue 5 o menor (nivel crítico). Deberá establecer un plan de mejora para cada uno de ellos.</p>
        </div>

        <div class=\"d-grid mt-4\">
            <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_public_challenges");
        yield "\" class=\"btn btn-primary btn-lg fw-bold shadow-sm\">Continuar al Plan de Mejora</a>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 79
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
        yield "<script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/chart.min.js"), "html", null, true);
        yield "\"></script>
<script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        const ctx = document.getElementById('resultsChart');
        if (ctx) {
            // Prepare data from Twig
            const labels = [];
            const data = [];
            const colors = [];

            ";
        // line 90
        $context["areasNames"] = [1 => "Capacidad Organizativa", 2 => "Disponibilidad de la Información", 3 => "Capacidad de Autoevaluación", 4 => "Medidas para Minimizar el Riesgo"];
        // line 96
        yield "            
            ";
        // line 97
        $context["chart_results"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "temporaryData", [], "any", false, true, false, 97), "results", [], "any", true, true, false, 97) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 97, $this->source); })()), "temporaryData", [], "any", false, false, false, 97), "results", [], "any", false, false, false, 97)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 97, $this->source); })()), "temporaryData", [], "any", false, false, false, 97), "results", [], "any", false, false, false, 97)) : ([]));
        // line 98
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["chart_results"]) || array_key_exists("chart_results", $context) ? $context["chart_results"] : (function () { throw new RuntimeError('Variable "chart_results" does not exist.', 98, $this->source); })()));
        foreach ($context['_seq'] as $context["i"] => $context["r"]) {
            // line 99
            yield "                labels.push(\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["areasNames"]) || array_key_exists("areasNames", $context) ? $context["areasNames"] : (function () { throw new RuntimeError('Variable "areasNames" does not exist.', 99, $this->source); })()), $context["i"], [], "array", false, false, false, 99), "html", null, true);
            yield "\");
                data.push(";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "percentage", [], "any", false, false, false, 100), 1), "html", null, true);
            yield ");
                ";
            // line 101
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["r"], "percentage", [], "any", false, false, false, 101) >= 90)) {
                // line 102
                yield "                    colors.push('#198754');
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 103
$context["r"], "percentage", [], "any", false, false, false, 103) > 50)) {
                // line 104
                yield "                    colors.push('#ffc107');
                ";
            } else {
                // line 106
                yield "                    colors.push('#dc3545');
                ";
            }
            // line 108
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['i'], $context['r'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        yield "
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Cumplimiento (%)',
                        backgroundColor: colors,
                        data: data,
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });
        }
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "public/results.html.twig";
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
        return array (  283 => 109,  277 => 108,  273 => 106,  269 => 104,  267 => 103,  264 => 102,  262 => 101,  258 => 100,  253 => 99,  248 => 98,  246 => 97,  243 => 96,  241 => 90,  227 => 80,  217 => 79,  204 => 73,  193 => 64,  182 => 61,  176 => 60,  170 => 59,  166 => 58,  162 => 56,  159 => 55,  156 => 54,  153 => 53,  150 => 52,  147 => 51,  144 => 50,  141 => 49,  138 => 48,  135 => 47,  132 => 46,  128 => 45,  125 => 44,  123 => 38,  97 => 15,  87 => 14,  83 => 12,  80 => 11,  77 => 10,  75 => 9,  68 => 4,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'public_base.html.twig' %}

{% block content %}
<div class=\"card shadow-lg border-0 mb-5\">
    <div class=\"card-header bg-primary text-white pt-4 pb-3 text-center\">
        <h3 class=\"fw-bold m-0\">B. Resultados de la Evaluación</h3>
    </div>
    <div class=\"card-body p-4 p-md-5\">
        {% set data = session.temporaryData %}
        {% set results = data.results ?? [] %}
        {% set global = data.global_percentage ?? 0 %}

        <div class=\"text-center mb-5\">
            <h1 class=\"display-3 fw-bold {% if global >= 90 %}text-success{% elseif global > 50 %}text-warning{% else %}text-danger{% endif %}\">
                {{ global|number_format(1) }}%
            </h1>
            <h4 class=\"text-secondary\">Cumplimiento Global EUDR</h4>
        </div>

        <div class=\"row mb-5\">
            <div class=\"col-md-12\">
                <div class=\"chart-container\" style=\"position: relative; height:40vh; width:100%\">
                    <canvas id=\"resultsChart\"></canvas>
                </div>
            </div>
        </div>

        <table class=\"table table-bordered table-hover align-middle\">
            <thead class=\"table-light\">
                <tr>
                    <th>Área Estratégica</th>
                    <th class=\"text-center\">Puntaje</th>
                    <th class=\"text-center\">Resultado (%)</th>
                    <th class=\"text-center\">Nivel</th>
                </tr>
            </thead>
            <tbody>
                {% set areasNames = {
                    1: '1. Capacidad Organizativa',
                    2: '2. Disponibilidad de la Información',
                    3: '3. Capacidad de Autoevaluación',
                    4: '4. Medidas para Minimizar el Riesgo'
                } %}

                {% for i, r in results %}
                    {% set perc = r.percentage %}
                    {% set color = 'danger' %}
                    {% set nivel = 'Crítico (Acción Inmediata)' %}
                    {% if perc >= 90 %}
                        {% set color = 'success' %}
                        {% set nivel = 'Sólido (Mantener)' %}
                    {% elseif perc > 50 %}
                        {% set color = 'warning' %}
                        {% set nivel = 'Moderado (Seguimiento)' %}
                    {% endif %}

                    <tr>
                        <td class=\"fw-bold\">{{ areasNames[i] }}</td>
                        <td class=\"text-center\">{{ r.score }} / {{ r.max }}</td>
                        <td class=\"text-center fw-bold text-{{ color }}\">{{ perc|number_format(1) }}%</td>
                        <td class=\"text-center\"><span class=\"badge bg-{{ color }}\">{{ nivel }}</span></td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

        <div class=\"alert alert-info mt-5 border-start border-info border-5\">
            <h5 class=\"fw-bold\"><i class=\"bi bi-info-circle\"></i> Siguiente Paso: Plan de Mejora</h5>
            <p class=\"mb-0\">A continuación, el sistema ha filtrado los indicadores donde su puntuación fue 5 o menor (nivel crítico). Deberá establecer un plan de mejora para cada uno de ellos.</p>
        </div>

        <div class=\"d-grid mt-4\">
            <a href=\"{{ path('app_public_challenges') }}\" class=\"btn btn-primary btn-lg fw-bold shadow-sm\">Continuar al Plan de Mejora</a>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
<script src=\"{{ asset('assets/js/chart.min.js') }}\"></script>
<script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        const ctx = document.getElementById('resultsChart');
        if (ctx) {
            // Prepare data from Twig
            const labels = [];
            const data = [];
            const colors = [];

            {% set areasNames = {
                1: 'Capacidad Organizativa',
                2: 'Disponibilidad de la Información',
                3: 'Capacidad de Autoevaluación',
                4: 'Medidas para Minimizar el Riesgo'
            } %}
            
            {% set chart_results = session.temporaryData.results ?? [] %}
            {% for i, r in chart_results %}
                labels.push(\"{{ areasNames[i] }}\");
                data.push({{ r.percentage|number_format(1) }});
                {% if r.percentage >= 90 %}
                    colors.push('#198754');
                {% elseif r.percentage > 50 %}
                    colors.push('#ffc107');
                {% else %}
                    colors.push('#dc3545');
                {% endif %}
            {% endfor %}

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Cumplimiento (%)',
                        backgroundColor: colors,
                        data: data,
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });
        }
    });
</script>
{% endblock %}
", "public/results.html.twig", "/var/www/html/templates/public/results.html.twig");
    }
}
