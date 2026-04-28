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
        yield "<div class=\"card shadow-lg border-0\">
    <div class=\"card-body p-5 text-center\">
        <!-- Logos Institucionales -->
        <div class=\"d-flex justify-content-center align-items-center mb-4 gap-4 flex-wrap\">
            <img src=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo presidencia.png"), "html", null, true);
        yield "\" alt=\"Gobierno\" style=\"max-height: 120px;\">
            <img src=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/al_invest.png"), "html", null, true);
        yield "\" alt=\"AL INVEST\" style=\"max-height: 120px;\">
        </div>

        <h1 class=\"display-5 mb-4\">Evaluación EUDR</h1>
        <p class=\"lead mb-4 text-secondary\">Esta herramienta le guiará a través de una serie de indicadores para evaluar el nivel de cumplimiento y riesgo de su organización respecto a las normativas vigentes.</p>
        
        <div class=\"alert alert-info text-start mb-5\">
            <strong>Instrucciones:</strong>
            <ul class=\"mb-0 mt-2\">
                <li>Primero deberá leer el reglamento correspondiente.</li>
                <li>Luego le solicitaremos sus datos para enviarle los resultados consolidados.</li>
                <li>Finalmente, seleccionará la herramienta y responderá una breve encuesta por áreas.</li>
            </ul>
        </div>
        
        <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_public_regulations");
        yield "\" class=\"btn btn-primary btn-lg px-5 py-3 fw-bold shadow-sm\">INICIAR PROCESO</a>
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
        return array (  95 => 24,  77 => 9,  73 => 8,  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'public_base.html.twig' %}

{% block content %}
<div class=\"card shadow-lg border-0\">
    <div class=\"card-body p-5 text-center\">
        <!-- Logos Institucionales -->
        <div class=\"d-flex justify-content-center align-items-center mb-4 gap-4 flex-wrap\">
            <img src=\"{{ asset('images/logo presidencia.png') }}\" alt=\"Gobierno\" style=\"max-height: 120px;\">
            <img src=\"{{ asset('images/al_invest.png') }}\" alt=\"AL INVEST\" style=\"max-height: 120px;\">
        </div>

        <h1 class=\"display-5 mb-4\">Evaluación EUDR</h1>
        <p class=\"lead mb-4 text-secondary\">Esta herramienta le guiará a través de una serie de indicadores para evaluar el nivel de cumplimiento y riesgo de su organización respecto a las normativas vigentes.</p>
        
        <div class=\"alert alert-info text-start mb-5\">
            <strong>Instrucciones:</strong>
            <ul class=\"mb-0 mt-2\">
                <li>Primero deberá leer el reglamento correspondiente.</li>
                <li>Luego le solicitaremos sus datos para enviarle los resultados consolidados.</li>
                <li>Finalmente, seleccionará la herramienta y responderá una breve encuesta por áreas.</li>
            </ul>
        </div>
        
        <a href=\"{{ path('app_public_regulations') }}\" class=\"btn btn-primary btn-lg px-5 py-3 fw-bold shadow-sm\">INICIAR PROCESO</a>
    </div>
</div>
{% endblock %}
", "public/welcome.html.twig", "/var/www/html/templates/public/welcome.html.twig");
    }
}
