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

/* public/success.html.twig */
class __TwigTemplate_f921a843937a5db85ba53a6319c0f9af extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/success.html.twig"));

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
        yield "<div class=\"card shadow-lg border-0 border-top border-success border-5\">
    <div class=\"card-body p-5 text-center\">
        <div class=\"mb-4\">
            <!-- Icono de Check en SVG -->
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"80\" height=\"80\" fill=\"currentColor\" class=\"bi bi-check-circle-fill text-success\" viewBox=\"0 0 16 16\">
              <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z\"/>
            </svg>
        </div>
        <h2 class=\"display-6 fw-bold text-success mb-3\">¡Evaluación Registrada Exitosamente!</h2>
        <p class=\"lead text-muted mb-5\">Gracias. Tu encuesta fue registrada y tus resultados están siendo procesados en segundo plano. Te hemos enviado un correo con el consolidado a la dirección proporcionada.</p>
        
        <div class=\"d-grid gap-3 d-md-flex justify-content-md-center mb-4\">
            ";
        // line 16
        if ((($tmp = (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 16, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_public_export_pdf", ["token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 17, $this->source); })())]), "html", null, true);
            yield "\" target=\"_blank\" class=\"btn btn-danger px-4 py-2\">
                    <i class=\"bi bi-file-pdf\"></i> Descargar Reporte PDF
                </a>
                

            ";
        }
        // line 23
        yield "            <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_public_welcome");
        yield "\" class=\"btn btn-outline-secondary px-4 py-2\">Volver al Inicio</a>
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
        return "public/success.html.twig";
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
        return array (  93 => 23,  83 => 17,  81 => 16,  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'public_base.html.twig' %}

{% block content %}
<div class=\"card shadow-lg border-0 border-top border-success border-5\">
    <div class=\"card-body p-5 text-center\">
        <div class=\"mb-4\">
            <!-- Icono de Check en SVG -->
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"80\" height=\"80\" fill=\"currentColor\" class=\"bi bi-check-circle-fill text-success\" viewBox=\"0 0 16 16\">
              <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z\"/>
            </svg>
        </div>
        <h2 class=\"display-6 fw-bold text-success mb-3\">¡Evaluación Registrada Exitosamente!</h2>
        <p class=\"lead text-muted mb-5\">Gracias. Tu encuesta fue registrada y tus resultados están siendo procesados en segundo plano. Te hemos enviado un correo con el consolidado a la dirección proporcionada.</p>
        
        <div class=\"d-grid gap-3 d-md-flex justify-content-md-center mb-4\">
            {% if token %}
                <a href=\"{{ path('app_public_export_pdf', {'token': token}) }}\" target=\"_blank\" class=\"btn btn-danger px-4 py-2\">
                    <i class=\"bi bi-file-pdf\"></i> Descargar Reporte PDF
                </a>
                

            {% endif %}
            <a href=\"{{ path('app_public_welcome') }}\" class=\"btn btn-outline-secondary px-4 py-2\">Volver al Inicio</a>
        </div>
    </div>
</div>
{% endblock %}
", "public/success.html.twig", "/var/www/html/templates/public/success.html.twig");
    }
}
