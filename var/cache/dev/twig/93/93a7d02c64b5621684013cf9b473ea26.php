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
class __TwigTemplate_88c44300dc9f4fa35733b9dd6489ab1d extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <style>
        body { background-color: #f8f9fa; }
        .sidebar { min-height: 100vh; background-color: #343a40; color: white; }
        .sidebar a { color: #adb5bd; text-decoration: none; padding: 10px 15px; display: block; }
        .sidebar a:hover { color: white; background-color: #495057; }
        .sidebar .active { color: white; background-color: #0d6efd; }
    </style>
</head>
<body>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <!-- Sidebar Menu -->
            <nav class=\"col-md-3 col-lg-2 d-md-block sidebar py-4\">
                <h4 class=\"text-center text-white mb-4\">EUDR VCI</h4>
                <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "request", [], "any", false, false, false, 23), "attributes", [], "any", false, false, false, 23), "get", ["_route"], "method", false, false, false, 23) == "app_dashboard")) {
            yield "active";
        }
        yield "\">Dashboard</a>
                <a href=\"#\">Organizaciones</a>
                <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_compliance_index");
        yield "\" class=\"";
        if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "attributes", [], "any", false, false, false, 25), "get", ["_route"], "method", false, false, false, 25)) && is_string($_v1 = "app_compliance_") && str_starts_with($_v0, $_v1))) {
            yield "active";
        }
        yield "\">Cumplimiento</a>
                <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_risks_index");
        yield "\" class=\"";
        if ((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, false, 26), "attributes", [], "any", false, false, false, 26), "get", ["_route"], "method", false, false, false, 26)) && is_string($_v3 = "app_risks_") && str_starts_with($_v2, $_v3))) {
            yield "active";
        }
        yield "\">Riesgos</a>
                <a href=\"#\">Planes de Mejora</a>
                <a href=\"#\">Reportes</a>
                <hr class=\"text-secondary\">
                <a href=\"#\">Configuración</a>
                <a href=\"#\">Salir</a>
            </nav>

            <!-- Main Content -->
            <main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4\">
                ";
        // line 36
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 37
        yield "            </main>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"></script>
</body>
</html>
";
        
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "EUDR - Gestión de Riesgos";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  143 => 36,  126 => 6,  110 => 37,  108 => 36,  91 => 26,  83 => 25,  74 => 23,  54 => 6,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}EUDR - Gestión de Riesgos{% endblock %}</title>
    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <style>
        body { background-color: #f8f9fa; }
        .sidebar { min-height: 100vh; background-color: #343a40; color: white; }
        .sidebar a { color: #adb5bd; text-decoration: none; padding: 10px 15px; display: block; }
        .sidebar a:hover { color: white; background-color: #495057; }
        .sidebar .active { color: white; background-color: #0d6efd; }
    </style>
</head>
<body>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <!-- Sidebar Menu -->
            <nav class=\"col-md-3 col-lg-2 d-md-block sidebar py-4\">
                <h4 class=\"text-center text-white mb-4\">EUDR VCI</h4>
                <a href=\"{{ path('app_dashboard') }}\" class=\"{% if app.request.attributes.get('_route') == 'app_dashboard' %}active{% endif %}\">Dashboard</a>
                <a href=\"#\">Organizaciones</a>
                <a href=\"{{ path('app_compliance_index') }}\" class=\"{% if app.request.attributes.get('_route') starts with 'app_compliance_' %}active{% endif %}\">Cumplimiento</a>
                <a href=\"{{ path('app_risks_index') }}\" class=\"{% if app.request.attributes.get('_route') starts with 'app_risks_' %}active{% endif %}\">Riesgos</a>
                <a href=\"#\">Planes de Mejora</a>
                <a href=\"#\">Reportes</a>
                <hr class=\"text-secondary\">
                <a href=\"#\">Configuración</a>
                <a href=\"#\">Salir</a>
            </nav>

            <!-- Main Content -->
            <main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4\">
                {% block content %}{% endblock %}
            </main>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"></script>
</body>
</html>
", "base.html.twig", "/var/www/html/templates/base.html.twig");
    }
}
