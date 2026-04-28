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

/* public/pdf.html.twig */
class __TwigTemplate_2ef3dad3c3883ba753a67e60cd223d66 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/pdf.html.twig"));

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
        yield "<div class=\"card shadow-lg border-0\">
    <div class=\"card-header bg-white border-bottom-0 pt-4 pb-0 text-center\">
        <h3 class=\"fw-bold\">Reglamento EUDR</h3>
        <p class=\"text-muted\">Por favor, lea detenidamente el siguiente documento.</p>
    </div>
    <div class=\"card-body p-4\">
        <!-- Visor PDF embebido -->
        <div class=\"pdf-container rounded bg-light border p-2 mb-4\" style=\"height: 500px; display: flex; align-items: center; justify-content: center;\">
            <p class=\"text-muted\"><em>(Aquí se embebería el PDF mediante &lt;iframe src=\"/path/to/reglamento.pdf\"&gt; o PDF.js)</em></p>
        </div>

        <div class=\"d-grid gap-3 d-md-flex justify-content-md-center\">
            <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_public_welcome");
        yield "\" class=\"btn btn-outline-secondary btn-lg px-4\">No, quiero seguir leyendo</a>
            <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_public_survey_start");
        yield "\" class=\"btn btn-primary btn-lg px-4\">He leído y estoy listo para la encuesta</a>
        </div>
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
        return "public/pdf.html.twig";
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
        return array (  85 => 17,  81 => 16,  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'public_base.html.twig' %}

{% block content %}
<div class=\"card shadow-lg border-0\">
    <div class=\"card-header bg-white border-bottom-0 pt-4 pb-0 text-center\">
        <h3 class=\"fw-bold\">Reglamento EUDR</h3>
        <p class=\"text-muted\">Por favor, lea detenidamente el siguiente documento.</p>
    </div>
    <div class=\"card-body p-4\">
        <!-- Visor PDF embebido -->
        <div class=\"pdf-container rounded bg-light border p-2 mb-4\" style=\"height: 500px; display: flex; align-items: center; justify-content: center;\">
            <p class=\"text-muted\"><em>(Aquí se embebería el PDF mediante &lt;iframe src=\"/path/to/reglamento.pdf\"&gt; o PDF.js)</em></p>
        </div>

        <div class=\"d-grid gap-3 d-md-flex justify-content-md-center\">
            <a href=\"{{ path('app_public_welcome') }}\" class=\"btn btn-outline-secondary btn-lg px-4\">No, quiero seguir leyendo</a>
            <a href=\"{{ path('app_public_survey_start') }}\" class=\"btn btn-primary btn-lg px-4\">He leído y estoy listo para la encuesta</a>
        </div>
    </div>
</div>
{% endblock %}
", "public/pdf.html.twig", "/var/www/html/templates/public/pdf.html.twig");
    }
}
