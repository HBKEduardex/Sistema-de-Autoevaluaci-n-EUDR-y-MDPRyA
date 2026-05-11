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
        yield "<style>
    .pdf-card {
        border-radius: 16px;
        box-shadow: 0 20px 50px rgba(0,0,0,0.15);
        border: none;
        overflow: hidden;
        background-color: #ffffff;
    }
    .pdf-header {
        background-color: #f8fafd;
        border-bottom: 1px solid #eaeaea;
        padding: 30px 40px;
        text-align: center;
    }
    .pdf-title {
        font-weight: 800;
        color: #003366;
        margin-bottom: 8px;
        font-size: 2rem;
        letter-spacing: -0.5px;
    }
    .pdf-subtitle {
        color: #64748b;
        font-size: 1.1rem;
        margin: 0;
    }
    .pdf-body {
        padding: 40px 50px;
    }
    .pdf-viewer-wrapper {
        border: 1px solid #cbd5e1;
        border-radius: 8px;
        background-color: #f1f5f9;
        box-shadow: inset 0 2px 4px rgba(0,0,0,0.05);
        overflow: hidden;
        margin-bottom: 40px;
    }
    .pdf-viewer-toolbar {
        background-color: #334155;
        color: white;
        padding: 12px 20px;
        display: flex;
        align-items: center;
        font-size: 0.95rem;
    }
    .pdf-viewer-content {
        height: 550px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #e2e8f0;
    }
    .pdf-viewer-content .placeholder-text {
        color: #64748b;
        text-align: center;
    }
    .pdf-viewer-content .placeholder-text i {
        font-size: 3.5rem;
        margin-bottom: 15px;
        color: #94a3b8;
    }
    .btn-action {
        border-radius: 8px;
        padding: 14px 32px;
        font-size: 1.1rem;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    .btn-primary-action {
        background-color: #0056b3;
        border: none;
        color: white;
    }
    .btn-primary-action:hover {
        background-color: #003d82;
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(0, 86, 179, 0.25);
        color: white;
    }
    .btn-secondary-action {
        background-color: white;
        border: 2px solid #cbd5e1;
        color: #475569;
    }
    .btn-secondary-action:hover {
        background-color: #f8fafc;
        border-color: #94a3b8;
        color: #334155;
    }
</style>

<div class=\"card pdf-card\">
    <div class=\"pdf-header\">
        <h3 class=\"pdf-title\">Reglamento EUDR</h3>
        <p class=\"pdf-subtitle\">Por favor, lea detenidamente el documento oficial antes de continuar con la evaluación.</p>
    </div>
    
    <div class=\"pdf-body\">
        <!-- Contenedor Estilizado del Visor PDF -->
        <div class=\"pdf-viewer-wrapper\">
            <!-- Barra superior simulando visor -->
            <div class=\"pdf-viewer-toolbar\">
                <i class=\"bi bi-file-earmark-pdf-fill text-danger me-2 fs-5\"></i>
                <span class=\"fw-semibold\">reglamento_oficial_eudr.pdf</span>
                <div class=\"ms-auto\">
                    <span class=\"badge bg-secondary fs-6 px-3\">1 / 1</span>
                </div>
            </div>
            <!-- Área de visualización -->
            <div class=\"pdf-viewer-content\">
                <div class=\"placeholder-text\">
                    <i class=\"bi bi-file-text\"></i>
                    <h5 class=\"fw-bold\">Visor de Documento</h5>
                    <p class=\"small text-muted mb-0\">(Área designada para cargar el PDF oficial o un iframe)</p>
                </div>
            </div>
        </div>

        <!-- Botones de Acción -->
        <div class=\"d-flex flex-column flex-md-row justify-content-center gap-3\">
            <a href=\"";
        // line 124
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_public_welcome");
        yield "\" class=\"btn btn-secondary-action btn-action text-decoration-none text-center\">
                <i class=\"bi bi-arrow-left me-2\"></i> Volver al Inicio
            </a>
            <a href=\"";
        // line 127
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_public_survey_start");
        yield "\" class=\"btn btn-primary-action btn-action text-decoration-none text-center shadow-sm\">
                He leído y acepto continuar <i class=\"bi bi-check2-circle ms-2\"></i>
            </a>
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
        return array (  195 => 127,  189 => 124,  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'public_base.html.twig' %}

{% block content %}
<style>
    .pdf-card {
        border-radius: 16px;
        box-shadow: 0 20px 50px rgba(0,0,0,0.15);
        border: none;
        overflow: hidden;
        background-color: #ffffff;
    }
    .pdf-header {
        background-color: #f8fafd;
        border-bottom: 1px solid #eaeaea;
        padding: 30px 40px;
        text-align: center;
    }
    .pdf-title {
        font-weight: 800;
        color: #003366;
        margin-bottom: 8px;
        font-size: 2rem;
        letter-spacing: -0.5px;
    }
    .pdf-subtitle {
        color: #64748b;
        font-size: 1.1rem;
        margin: 0;
    }
    .pdf-body {
        padding: 40px 50px;
    }
    .pdf-viewer-wrapper {
        border: 1px solid #cbd5e1;
        border-radius: 8px;
        background-color: #f1f5f9;
        box-shadow: inset 0 2px 4px rgba(0,0,0,0.05);
        overflow: hidden;
        margin-bottom: 40px;
    }
    .pdf-viewer-toolbar {
        background-color: #334155;
        color: white;
        padding: 12px 20px;
        display: flex;
        align-items: center;
        font-size: 0.95rem;
    }
    .pdf-viewer-content {
        height: 550px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #e2e8f0;
    }
    .pdf-viewer-content .placeholder-text {
        color: #64748b;
        text-align: center;
    }
    .pdf-viewer-content .placeholder-text i {
        font-size: 3.5rem;
        margin-bottom: 15px;
        color: #94a3b8;
    }
    .btn-action {
        border-radius: 8px;
        padding: 14px 32px;
        font-size: 1.1rem;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    .btn-primary-action {
        background-color: #0056b3;
        border: none;
        color: white;
    }
    .btn-primary-action:hover {
        background-color: #003d82;
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(0, 86, 179, 0.25);
        color: white;
    }
    .btn-secondary-action {
        background-color: white;
        border: 2px solid #cbd5e1;
        color: #475569;
    }
    .btn-secondary-action:hover {
        background-color: #f8fafc;
        border-color: #94a3b8;
        color: #334155;
    }
</style>

<div class=\"card pdf-card\">
    <div class=\"pdf-header\">
        <h3 class=\"pdf-title\">Reglamento EUDR</h3>
        <p class=\"pdf-subtitle\">Por favor, lea detenidamente el documento oficial antes de continuar con la evaluación.</p>
    </div>
    
    <div class=\"pdf-body\">
        <!-- Contenedor Estilizado del Visor PDF -->
        <div class=\"pdf-viewer-wrapper\">
            <!-- Barra superior simulando visor -->
            <div class=\"pdf-viewer-toolbar\">
                <i class=\"bi bi-file-earmark-pdf-fill text-danger me-2 fs-5\"></i>
                <span class=\"fw-semibold\">reglamento_oficial_eudr.pdf</span>
                <div class=\"ms-auto\">
                    <span class=\"badge bg-secondary fs-6 px-3\">1 / 1</span>
                </div>
            </div>
            <!-- Área de visualización -->
            <div class=\"pdf-viewer-content\">
                <div class=\"placeholder-text\">
                    <i class=\"bi bi-file-text\"></i>
                    <h5 class=\"fw-bold\">Visor de Documento</h5>
                    <p class=\"small text-muted mb-0\">(Área designada para cargar el PDF oficial o un iframe)</p>
                </div>
            </div>
        </div>

        <!-- Botones de Acción -->
        <div class=\"d-flex flex-column flex-md-row justify-content-center gap-3\">
            <a href=\"{{ path('app_public_welcome') }}\" class=\"btn btn-secondary-action btn-action text-decoration-none text-center\">
                <i class=\"bi bi-arrow-left me-2\"></i> Volver al Inicio
            </a>
            <a href=\"{{ path('app_public_survey_start') }}\" class=\"btn btn-primary-action btn-action text-decoration-none text-center shadow-sm\">
                He leído y acepto continuar <i class=\"bi bi-check2-circle ms-2\"></i>
            </a>
        </div>
    </div>
</div>
{% endblock %}
", "public/pdf.html.twig", "/var/www/html/templates/public/pdf.html.twig");
    }
}
