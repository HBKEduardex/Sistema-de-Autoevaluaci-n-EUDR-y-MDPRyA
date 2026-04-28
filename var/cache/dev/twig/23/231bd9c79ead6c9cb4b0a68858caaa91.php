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

/* public/instructions.html.twig */
class __TwigTemplate_cb54caccd14d3fa08c23c842f6d49248 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/instructions.html.twig"));

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
        yield "<div class=\"card shadow-lg border-0 border-top border-primary border-5\">
    <div class=\"card-body p-4 p-md-5\">
        <h2 class=\"fw-bold text-center mb-4\">Instrucciones de la Autoevaluación</h2>
        
        <p class=\"lead text-secondary text-center mb-5\">
            El propósito de esta encuesta es brindarle una herramienta de diagnóstico para conocer el grado de preparación de su organización frente a los requerimientos del <strong>Reglamento EUDR</strong>. Sus respuestas nos ayudarán a identificar brechas y proponer planes de mejora.
        </p>

        <div class=\"row g-4 mb-5\">
            <div class=\"col-md-6\">
                <div class=\"p-4 bg-light rounded shadow-sm text-center h-100\">
                    <h1 class=\"display-4 text-primary fw-bold mb-0\">2</h1>
                    <h4 class=\"text-secondary mt-2\">Herramientas de Evaluación</h4>
                    <p class=\"small text-muted mt-3\">La plataforma integra dos herramientas: Evaluación de cumplimiento y Gestión de riesgos.</p>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"p-4 bg-light rounded shadow-sm text-center h-100\">
                    <h1 class=\"display-4 text-primary fw-bold mb-0\">36</h1>
                    <h4 class=\"text-secondary mt-2\">Preguntas en Total</h4>
                    <p class=\"small text-muted mt-3\">Deberá puntuar cada indicador del 1 al 10 y justificar si cuenta con documentación de respaldo.</p>
                </div>
            </div>
        </div>

        <div class=\"alert alert-warning border-0 border-start border-warning border-4 mb-5\">
            <strong>Nota importante:</strong> Le pedimos total sinceridad en sus respuestas. Puede adjuntar archivos de evidencia u observaciones en cada pregunta si lo considera necesario para justificar su puntaje.
        </div>

        <form action=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_public_instructions");
        yield "\" method=\"POST\">
            <div class=\"card bg-light border-0 shadow-sm mb-4\">
                <div class=\"card-body p-4\">
                    <h5 class=\"fw-bold mb-4 text-center\">Seleccione la herramienta a evaluar antes de continuar:</h5>
                    
                    <div class=\"row g-3 justify-content-center\">
                        <div class=\"col-md-8\">
                            <div class=\"form-check mb-3\">
                                <input class=\"form-check-input fs-5\" type=\"radio\" name=\"selected_tool\" id=\"tool1\" value=\"tool1\" required>
                                <label class=\"form-check-label fs-5\" for=\"tool1\">
                                    <strong>Herramienta 1:</strong> Evaluación de cumplimiento
                                </label>
                            </div>
                            <div class=\"form-check mb-3\">
                                <input class=\"form-check-input fs-5\" type=\"radio\" name=\"selected_tool\" id=\"tool2\" value=\"tool2\" required>
                                <label class=\"form-check-label fs-5\" for=\"tool2\">
                                    <strong>Herramienta 2:</strong> Gestión de riesgos
                                </label>
                            </div>
                            <div class=\"form-check\">
                                <input class=\"form-check-input fs-5\" type=\"radio\" name=\"selected_tool\" id=\"toolBoth\" value=\"both\" required>
                                <label class=\"form-check-label fs-5\" for=\"toolBoth\">
                                    Ambas herramientas (Total: 36 preguntas)
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"d-grid gap-2 mt-4\">
                <button type=\"submit\" class=\"btn btn-primary btn-lg fw-bold px-5 py-3 shadow-sm\">COMENZAR LA ENCUESTA</button>
            </div>
        </form>
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
        return "public/instructions.html.twig";
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
        return array (  98 => 33,  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'public_base.html.twig' %}

{% block content %}
<div class=\"card shadow-lg border-0 border-top border-primary border-5\">
    <div class=\"card-body p-4 p-md-5\">
        <h2 class=\"fw-bold text-center mb-4\">Instrucciones de la Autoevaluación</h2>
        
        <p class=\"lead text-secondary text-center mb-5\">
            El propósito de esta encuesta es brindarle una herramienta de diagnóstico para conocer el grado de preparación de su organización frente a los requerimientos del <strong>Reglamento EUDR</strong>. Sus respuestas nos ayudarán a identificar brechas y proponer planes de mejora.
        </p>

        <div class=\"row g-4 mb-5\">
            <div class=\"col-md-6\">
                <div class=\"p-4 bg-light rounded shadow-sm text-center h-100\">
                    <h1 class=\"display-4 text-primary fw-bold mb-0\">2</h1>
                    <h4 class=\"text-secondary mt-2\">Herramientas de Evaluación</h4>
                    <p class=\"small text-muted mt-3\">La plataforma integra dos herramientas: Evaluación de cumplimiento y Gestión de riesgos.</p>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"p-4 bg-light rounded shadow-sm text-center h-100\">
                    <h1 class=\"display-4 text-primary fw-bold mb-0\">36</h1>
                    <h4 class=\"text-secondary mt-2\">Preguntas en Total</h4>
                    <p class=\"small text-muted mt-3\">Deberá puntuar cada indicador del 1 al 10 y justificar si cuenta con documentación de respaldo.</p>
                </div>
            </div>
        </div>

        <div class=\"alert alert-warning border-0 border-start border-warning border-4 mb-5\">
            <strong>Nota importante:</strong> Le pedimos total sinceridad en sus respuestas. Puede adjuntar archivos de evidencia u observaciones en cada pregunta si lo considera necesario para justificar su puntaje.
        </div>

        <form action=\"{{ path('app_public_instructions') }}\" method=\"POST\">
            <div class=\"card bg-light border-0 shadow-sm mb-4\">
                <div class=\"card-body p-4\">
                    <h5 class=\"fw-bold mb-4 text-center\">Seleccione la herramienta a evaluar antes de continuar:</h5>
                    
                    <div class=\"row g-3 justify-content-center\">
                        <div class=\"col-md-8\">
                            <div class=\"form-check mb-3\">
                                <input class=\"form-check-input fs-5\" type=\"radio\" name=\"selected_tool\" id=\"tool1\" value=\"tool1\" required>
                                <label class=\"form-check-label fs-5\" for=\"tool1\">
                                    <strong>Herramienta 1:</strong> Evaluación de cumplimiento
                                </label>
                            </div>
                            <div class=\"form-check mb-3\">
                                <input class=\"form-check-input fs-5\" type=\"radio\" name=\"selected_tool\" id=\"tool2\" value=\"tool2\" required>
                                <label class=\"form-check-label fs-5\" for=\"tool2\">
                                    <strong>Herramienta 2:</strong> Gestión de riesgos
                                </label>
                            </div>
                            <div class=\"form-check\">
                                <input class=\"form-check-input fs-5\" type=\"radio\" name=\"selected_tool\" id=\"toolBoth\" value=\"both\" required>
                                <label class=\"form-check-label fs-5\" for=\"toolBoth\">
                                    Ambas herramientas (Total: 36 preguntas)
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"d-grid gap-2 mt-4\">
                <button type=\"submit\" class=\"btn btn-primary btn-lg fw-bold px-5 py-3 shadow-sm\">COMENZAR LA ENCUESTA</button>
            </div>
        </form>
    </div>
</div>
{% endblock %}
", "public/instructions.html.twig", "/var/www/html/templates/public/instructions.html.twig");
    }
}
