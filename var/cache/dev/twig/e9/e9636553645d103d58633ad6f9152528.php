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

/* Modules/Dashboard/index.html.twig */
class __TwigTemplate_d1ab2aa170925fe61ac73c74171a110a extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Modules/Dashboard/index.html.twig"));

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

        yield "Dashboard Institucional - EUDR";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"d-flex justify-content-between align-items-center mb-4\">
    <h1 class=\"h3 text-gray-800\">DASHBOARD DE CUMPLIMIENTO EUDR REGLAMENTO (UE) 2023/1115</h1>
</div>

<div class=\"row mb-4\">
    <div class=\"col-xl-6 col-md-6 mb-4\">
        <div class=\"card border-left-primary shadow h-100 py-2\">
            <div class=\"card-body\">
                <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                        <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">Evaluaciones Registradas</div>
                        <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 17, $this->source); })()), "total_evaluations", [], "any", false, false, false, 17), "html", null, true);
        yield " empresas evaluadas</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"col-xl-6 col-md-6 mb-4\">
        <div class=\"card border-left-success shadow h-100 py-2\">
            <div class=\"card-body\">
                <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                        <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">Cumplimiento Global Promedio</div>
                        <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 30, $this->source); })()), "avg_compliance", [], "any", false, false, false, 30), 1), "html", null, true);
        yield "%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-lg-12 mb-4\">
        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Resumen General por Áreas</h6>
            </div>
            <div class=\"card-body\">
                <p>El sistema ahora recolecta dinámicamente las evaluaciones desde el formulario público, almacenando las respuestas ponderadas en áreas estratégicas.</p>
                <div class=\"chart-bar\" style=\"height: 300px; width: 100%;\">
                    <canvas id=\"areasChart\"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        yield "<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        const ctx = document.getElementById('areasChart');
        if (ctx) {
            const chartDataRaw = ";
        // line 61
        yield (isset($context["chartData"]) || array_key_exists("chartData", $context) ? $context["chartData"] : (function () { throw new RuntimeError('Variable "chartData" does not exist.', 61, $this->source); })());
        yield ";
            
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: chartDataRaw.labels,
                    datasets: [{
                        label: 'Nivel de Cumplimiento Promedio (%)',
                        backgroundColor: '#4e73df',
                        hoverBackgroundColor: '#2e59d9',
                        borderColor: '#4e73df',
                        data: chartDataRaw.data,
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100
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
        return "Modules/Dashboard/index.html.twig";
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
        return array (  164 => 61,  157 => 56,  147 => 55,  115 => 30,  99 => 17,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard Institucional - EUDR{% endblock %}

{% block body %}
<div class=\"d-flex justify-content-between align-items-center mb-4\">
    <h1 class=\"h3 text-gray-800\">DASHBOARD DE CUMPLIMIENTO EUDR REGLAMENTO (UE) 2023/1115</h1>
</div>

<div class=\"row mb-4\">
    <div class=\"col-xl-6 col-md-6 mb-4\">
        <div class=\"card border-left-primary shadow h-100 py-2\">
            <div class=\"card-body\">
                <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                        <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">Evaluaciones Registradas</div>
                        <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ stats.total_evaluations }} empresas evaluadas</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"col-xl-6 col-md-6 mb-4\">
        <div class=\"card border-left-success shadow h-100 py-2\">
            <div class=\"card-body\">
                <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                        <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">Cumplimiento Global Promedio</div>
                        <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ stats.avg_compliance|number_format(1) }}%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-lg-12 mb-4\">
        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Resumen General por Áreas</h6>
            </div>
            <div class=\"card-body\">
                <p>El sistema ahora recolecta dinámicamente las evaluaciones desde el formulario público, almacenando las respuestas ponderadas en áreas estratégicas.</p>
                <div class=\"chart-bar\" style=\"height: 300px; width: 100%;\">
                    <canvas id=\"areasChart\"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        const ctx = document.getElementById('areasChart');
        if (ctx) {
            const chartDataRaw = {{ chartData|raw }};
            
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: chartDataRaw.labels,
                    datasets: [{
                        label: 'Nivel de Cumplimiento Promedio (%)',
                        backgroundColor: '#4e73df',
                        hoverBackgroundColor: '#2e59d9',
                        borderColor: '#4e73df',
                        data: chartDataRaw.data,
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100
                        }
                    }
                }
            });
        }
    });
</script>
{% endblock %}
", "Modules/Dashboard/index.html.twig", "/var/www/html/templates/Modules/Dashboard/index.html.twig");
    }
}
