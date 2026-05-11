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

/* public/welcome.html.twig */
class __TwigTemplate_e435cd4eed20c09f74dd3f2fcf140be0 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/welcome.html.twig"));

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
    .welcome-card {
        border-radius: 16px;
        box-shadow: 0 20px 50px rgba(0,0,0,0.15);
        border: none;
        overflow: hidden;
        background-color: #ffffff;
    }
    .logos-header {
        background-color: #f8fafd;
        border-bottom: 1px solid #eaeaea;
        padding: 25px 30px;
    }
    .logos-header img {
        max-height: 60px; /* Reducidos para dar protagonismo al centro */
        object-fit: contain;
    }
    .logos-header img.logo-center {
        max-height: 140px; /* Aumentado para máxima jerarquía */
    }
    .welcome-body {
        padding: 50px 60px;
        background-color: #ffffff;
    }
    .welcome-title {
        font-weight: 800;
        color: #0f172a;
        letter-spacing: -0.5px;
        margin-bottom: 15px;
        font-size: 2.5rem;
    }
    .welcome-subtitle {
        font-size: 1.15rem;
        color: #475569;
        line-height: 1.7;
        margin-bottom: 40px;
        font-weight: 400;
    }
    .instructions-box {
        background-color: #f8fafc;
        border-left: 4px solid #0056b3;
        border-radius: 0 8px 8px 0;
        padding: 25px 30px;
        color: #334155;
    }
    .instructions-box h5 {
        color: #0056b3;
        font-weight: 700;
        margin-bottom: 15px;
        font-size: 1.15rem;
    }
    .instructions-box ul li {
        margin-bottom: 12px;
        font-size: 1.05rem;
    }
    .btn-start {
        background-color: #0056b3;
        border: none;
        border-radius: 8px;
        padding: 16px 45px;
        font-size: 1.15rem;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
    }
    .btn-start:hover {
        background-color: #003d82;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 86, 179, 0.25);
    }
</style>

<div class=\"card welcome-card\">
    <!-- Logos Institucionales en franja superior -->
    <div class=\"logos-header d-flex justify-content-center align-items-center flex-wrap gap-4 gap-md-5\">
        <img src=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/eudr.png"), "html", null, true);
        yield "\" alt=\"EUDR\">
        <img src=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo presidencia.png"), "html", null, true);
        yield "\" alt=\"Gobierno\" class=\"logo-center\">
        <img src=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/al_invest.png"), "html", null, true);
        yield "\" alt=\"AL INVEST\">
    </div>

    <div class=\"welcome-body text-center\">
        <h1 class=\"welcome-title\">Sistema de Autoevaluación<br><span class=\"text-primary\">Reglamento EUDR</span></h1>
        
        <p class=\"welcome-subtitle mx-auto\" style=\"max-width: 700px;\">
            Bienvenido. Esta herramienta oficial le guiará a través de una serie de indicadores estratégicos para evaluar rigurosamente el nivel de cumplimiento y riesgo de su organización respecto a las normativas europeas vigentes.
        </p>
        
        <div class=\"instructions-box text-start mx-auto mb-5 shadow-sm\" style=\"max-width: 650px;\">
            <h5><i class=\"bi bi-info-circle-fill me-2\"></i>Instrucciones del Proceso</h5>
            <ul class=\"mb-0 ps-3\">
                <li><strong>Revisión Normativa:</strong> Deberá leer el reglamento correspondiente en el siguiente paso.</li>
                <li><strong>Registro de Datos:</strong> Le solicitaremos su información institucional para enviarle los resultados.</li>
                <li><strong>Evaluación Integral:</strong> Seleccionará la herramienta de diagnóstico y responderá la evaluación por áreas.</li>
            </ul>
        </div>
        
        <a href=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_public_regulations");
        yield "\" class=\"btn btn-primary btn-start fw-bold text-white shadow\">
            COMENZAR EL PROCESO <i class=\"bi bi-arrow-right ms-2\"></i>
        </a>
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
        return "public/welcome.html.twig";
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
        return array (  173 => 99,  151 => 80,  147 => 79,  143 => 78,  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'public_base.html.twig' %}

{% block content %}
<style>
    .welcome-card {
        border-radius: 16px;
        box-shadow: 0 20px 50px rgba(0,0,0,0.15);
        border: none;
        overflow: hidden;
        background-color: #ffffff;
    }
    .logos-header {
        background-color: #f8fafd;
        border-bottom: 1px solid #eaeaea;
        padding: 25px 30px;
    }
    .logos-header img {
        max-height: 60px; /* Reducidos para dar protagonismo al centro */
        object-fit: contain;
    }
    .logos-header img.logo-center {
        max-height: 140px; /* Aumentado para máxima jerarquía */
    }
    .welcome-body {
        padding: 50px 60px;
        background-color: #ffffff;
    }
    .welcome-title {
        font-weight: 800;
        color: #0f172a;
        letter-spacing: -0.5px;
        margin-bottom: 15px;
        font-size: 2.5rem;
    }
    .welcome-subtitle {
        font-size: 1.15rem;
        color: #475569;
        line-height: 1.7;
        margin-bottom: 40px;
        font-weight: 400;
    }
    .instructions-box {
        background-color: #f8fafc;
        border-left: 4px solid #0056b3;
        border-radius: 0 8px 8px 0;
        padding: 25px 30px;
        color: #334155;
    }
    .instructions-box h5 {
        color: #0056b3;
        font-weight: 700;
        margin-bottom: 15px;
        font-size: 1.15rem;
    }
    .instructions-box ul li {
        margin-bottom: 12px;
        font-size: 1.05rem;
    }
    .btn-start {
        background-color: #0056b3;
        border: none;
        border-radius: 8px;
        padding: 16px 45px;
        font-size: 1.15rem;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
    }
    .btn-start:hover {
        background-color: #003d82;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 86, 179, 0.25);
    }
</style>

<div class=\"card welcome-card\">
    <!-- Logos Institucionales en franja superior -->
    <div class=\"logos-header d-flex justify-content-center align-items-center flex-wrap gap-4 gap-md-5\">
        <img src=\"{{ asset('images/eudr.png') }}\" alt=\"EUDR\">
        <img src=\"{{ asset('images/logo presidencia.png') }}\" alt=\"Gobierno\" class=\"logo-center\">
        <img src=\"{{ asset('images/al_invest.png') }}\" alt=\"AL INVEST\">
    </div>

    <div class=\"welcome-body text-center\">
        <h1 class=\"welcome-title\">Sistema de Autoevaluación<br><span class=\"text-primary\">Reglamento EUDR</span></h1>
        
        <p class=\"welcome-subtitle mx-auto\" style=\"max-width: 700px;\">
            Bienvenido. Esta herramienta oficial le guiará a través de una serie de indicadores estratégicos para evaluar rigurosamente el nivel de cumplimiento y riesgo de su organización respecto a las normativas europeas vigentes.
        </p>
        
        <div class=\"instructions-box text-start mx-auto mb-5 shadow-sm\" style=\"max-width: 650px;\">
            <h5><i class=\"bi bi-info-circle-fill me-2\"></i>Instrucciones del Proceso</h5>
            <ul class=\"mb-0 ps-3\">
                <li><strong>Revisión Normativa:</strong> Deberá leer el reglamento correspondiente en el siguiente paso.</li>
                <li><strong>Registro de Datos:</strong> Le solicitaremos su información institucional para enviarle los resultados.</li>
                <li><strong>Evaluación Integral:</strong> Seleccionará la herramienta de diagnóstico y responderá la evaluación por áreas.</li>
            </ul>
        </div>
        
        <a href=\"{{ path('app_public_regulations') }}\" class=\"btn btn-primary btn-start fw-bold text-white shadow\">
            COMENZAR EL PROCESO <i class=\"bi bi-arrow-right ms-2\"></i>
        </a>
    </div>
</div>
{% endblock %}
", "public/welcome.html.twig", "/var/www/html/templates/public/welcome.html.twig");
    }
}
