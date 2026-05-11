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

/* public/wizard.html.twig */
class __TwigTemplate_43e3bff23261e007c98d87810eb876ae extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/wizard.html.twig"));

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
        yield "<div class=\"mb-4\">
    <div class=\"progress\" style=\"height: 10px;\">
        <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 6, $this->source); })()) / 4) * 100), "html", null, true);
        yield "%\"></div>
    </div>
    <div class=\"text-end text-muted small mt-1\">Área Estratégica ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 8, $this->source); })()), "html", null, true);
        yield " de 4</div>
</div>

<div class=\"card shadow-lg border-0 mb-5\">
    <div class=\"card-header bg-light pt-4 border-bottom\">
        <h4 class=\"fw-bold text-primary\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["areaName"]) || array_key_exists("areaName", $context) ? $context["areaName"] : (function () { throw new RuntimeError('Variable "areaName" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "</h4>
    </div>
    <div class=\"card-body p-4 p-md-5\">
        <!-- Escala de Calificaciones -->
        <div class=\"card border-0 shadow-sm mb-5 bg-light\">
            <div class=\"card-body p-4\">
                <h6 class=\"fw-bold mb-3 text-dark\"><i class=\"bi bi-info-circle-fill text-primary me-2\"></i> Guía de Calificaciones y Resultados</h6>
                <div class=\"row g-3\">
                    <div class=\"col-md-4\">
                        <div class=\"p-3 border-start border-danger border-4 bg-white rounded shadow-sm h-100\">
                            <h6 class=\"fw-bold text-danger mb-1\">1 a 5 Puntos</h6>
                            <p class=\"small text-muted mb-0\">Áreas críticas que requieren acciones inmediatas.</p>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"p-3 border-start border-warning border-4 bg-white rounded shadow-sm h-100\">
                            <h6 class=\"fw-bold text-warning mb-1\">6 a 8 Puntos</h6>
                            <p class=\"small text-muted mb-0\">Áreas moderadas, requieren seguimiento y fortalecimiento.</p>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"p-3 border-start border-success border-4 bg-white rounded shadow-sm h-100\">
                            <h6 class=\"fw-bold text-success mb-1\">9 a 10 Puntos</h6>
                            <p class=\"small text-muted mb-0\">Áreas sólidas, mantener las prácticas actuales.</p>
                        </div>
                    </div>
                </div>
                <div class=\"mt-3 text-center\">
                    <small class=\"text-secondary\"><em>El sistema genera gráficos automáticos al finalizar para visualizar el nivel general de cumplimiento.</em></small>
                </div>
            </div>
        </div>

        <form action=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_public_wizard", ["step" => (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 46, $this->source); })())]), "html", null, true);
        yield "\" method=\"POST\">
            
            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["indicators"]) || array_key_exists("indicators", $context) ? $context["indicators"] : (function () { throw new RuntimeError('Variable "indicators" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["indicator"]) {
            // line 49
            yield "            <div class=\"border-bottom pb-4 mb-4\">
                <div class=\"d-flex align-items-center mb-2\">
                    <span class=\"badge bg-primary me-2\">Criterio ";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["indicator"], "orderNumber", [], "any", false, false, false, 51), "html", null, true);
            yield "</span>
                    <h5 class=\"fw-bold m-0 text-dark\">";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["indicator"], "criterion", [], "any", false, false, false, 52), "html", null, true);
            yield "</h5>
                </div>
                
                <div class=\"text-secondary mb-4 fs-6 bg-white p-3 rounded border\">
                    <p class=\"fw-bold text-dark mb-2\">Indicadores a evaluar:</p>
                    <ul class=\"list-unstyled mb-0\">
                        ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["indicator"], "name", [], "any", false, false, false, 58), "
"));
            foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                // line 59
                yield "                            ";
                if ((Twig\Extension\CoreExtension::trim($context["line"]) != "")) {
                    // line 60
                    yield "                                <li class=\"mb-2 d-flex align-items-start\">
                                    <span class=\"text-primary me-2\">👉</span> 
                                    <span>";
                    // line 62
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["line"], "html", null, true);
                    yield "</span>
                                </li>
                            ";
                }
                // line 65
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['line'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            yield "                    </ul>
                </div>
                
                <div class=\"row g-4 bg-light p-3 rounded mb-4\">
                    <div class=\"col-12 mb-2\">
                        <label class=\"form-label fw-bold text-dark\">¿Cuenta con documentación?</label>
                        <div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"has_doc_";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["indicator"], "id", [], "any", false, false, false, 74), "html", null, true);
            yield "\" id=\"has_doc_yes_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["indicator"], "id", [], "any", false, false, false, 74), "html", null, true);
            yield "\" value=\"1\" onchange=\"toggleDocFields(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["indicator"], "id", [], "any", false, false, false, 74), "html", null, true);
            yield ", true)\" required oninvalid=\"this.setCustomValidity('Por favor, seleccione una opción.')\" oninput=\"this.setCustomValidity('')\">
                                <label class=\"form-check-label\" for=\"has_doc_yes_";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["indicator"], "id", [], "any", false, false, false, 75), "html", null, true);
            yield "\">Sí</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"has_doc_";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["indicator"], "id", [], "any", false, false, false, 78), "html", null, true);
            yield "\" id=\"has_doc_no_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["indicator"], "id", [], "any", false, false, false, 78), "html", null, true);
            yield "\" value=\"0\" onchange=\"toggleDocFields(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["indicator"], "id", [], "any", false, false, false, 78), "html", null, true);
            yield ", false)\" required oninvalid=\"this.setCustomValidity('Por favor, seleccione una opción.')\" oninput=\"this.setCustomValidity('')\">
                                <label class=\"form-check-label\" for=\"has_doc_no_";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["indicator"], "id", [], "any", false, false, false, 79), "html", null, true);
            yield "\">No</label>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-6 doc-fields-";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["indicator"], "id", [], "any", false, false, false, 84), "html", null, true);
            yield "\" style=\"display: none;\">
                        <label class=\"form-label fw-bold\">Indique qué documentación tiene y dónde está almacenada según este criterio:</label>
                        <textarea class=\"form-control\" name=\"doc_location_";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["indicator"], "id", [], "any", false, false, false, 86), "html", null, true);
            yield "\" id=\"doc_location_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["indicator"], "id", [], "any", false, false, false, 86), "html", null, true);
            yield "\" rows=\"3\" placeholder=\"Ej. Está en la ISO 9001, archivador central...\"></textarea>
                    </div>

                    <div class=\"col-md-6 doc-fields-";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["indicator"], "id", [], "any", false, false, false, 89), "html", null, true);
            yield "\" style=\"display: none;\">
                        <label class=\"form-label fw-bold\">¿Cuál es el documento verificado? (Opcional)</label>
                        <textarea class=\"form-control\" name=\"verified_doc_";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["indicator"], "id", [], "any", false, false, false, 91), "html", null, true);
            yield "\" rows=\"3\" placeholder=\"Opcional...\"></textarea>
                    </div>
                </div>

                <div class=\"row g-4\">
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-bold text-primary\">Puntuación (1 al 10)</label>
                        <input type=\"range\" class=\"form-range\" min=\"1\" max=\"10\" name=\"score_";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["indicator"], "id", [], "any", false, false, false, 98), "html", null, true);
            yield "\" id=\"score_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["indicator"], "id", [], "any", false, false, false, 98), "html", null, true);
            yield "\" oninput=\"document.getElementById('out_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["indicator"], "id", [], "any", false, false, false, 98), "html", null, true);
            yield "').innerText = this.value\" required oninvalid=\"this.setCustomValidity('Por favor, seleccione una opción.')\" oninput=\"this.setCustomValidity('')\">
                        <div class=\"text-center fw-bold fs-3 text-primary\" id=\"out_";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["indicator"], "id", [], "any", false, false, false, 99), "html", null, true);
            yield "\">6</div>
                        <div class=\"small text-muted text-center\">1=Crítico | 10=Sólido</div>
                    </div>
                    
                    <div class=\"col-md-8\">
                        <label class=\"form-label fw-bold\">Observación / Riesgo Identificado</label>
                        <textarea class=\"form-control\" name=\"observation_";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["indicator"], "id", [], "any", false, false, false, 105), "html", null, true);
            yield "\" rows=\"3\" placeholder=\"Describa el riesgo si el puntaje es bajo...\"></textarea>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['indicator'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        yield "
            <div class=\"d-flex justify-content-between mt-5\">
                ";
        // line 112
        if (((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 112, $this->source); })()) > 1)) {
            // line 113
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_public_wizard", ["step" => ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 113, $this->source); })()) - 1)]), "html", null, true);
            yield "\" class=\"btn btn-outline-secondary px-4\">Atrás</a>
                ";
        } else {
            // line 115
            yield "                    <div></div>
                ";
        }
        // line 117
        yield "                <button type=\"submit\" class=\"btn btn-primary btn-lg px-5 fw-bold\">";
        if (((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 117, $this->source); })()) == 4)) {
            yield "Ver Resultados Generales";
        } else {
            yield "Siguiente Área";
        }
        yield "</button>
            </div>
        </form>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 123
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 124
        yield "<script>
    function toggleDocFields(indicatorId, show) {
        const fields = document.querySelectorAll('.doc-fields-' + indicatorId);
        const requiredInput = document.getElementById('doc_location_' + indicatorId);
        
        fields.forEach(field => {
            field.style.display = show ? 'block' : 'none';
        });
        
        if (show) {
            requiredInput.setAttribute('required', 'required');
        } else {
            requiredInput.removeAttribute('required');
            requiredInput.value = '';
        }
    }
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
        return "public/wizard.html.twig";
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
        return array (  312 => 124,  302 => 123,  283 => 117,  279 => 115,  273 => 113,  271 => 112,  267 => 110,  256 => 105,  247 => 99,  239 => 98,  229 => 91,  224 => 89,  216 => 86,  211 => 84,  203 => 79,  195 => 78,  189 => 75,  181 => 74,  171 => 66,  165 => 65,  159 => 62,  155 => 60,  152 => 59,  147 => 58,  138 => 52,  134 => 51,  130 => 49,  126 => 48,  121 => 46,  85 => 13,  77 => 8,  72 => 6,  68 => 4,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'public_base.html.twig' %}

{% block content %}
<div class=\"mb-4\">
    <div class=\"progress\" style=\"height: 10px;\">
        <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: {{ (step / 4) * 100 }}%\"></div>
    </div>
    <div class=\"text-end text-muted small mt-1\">Área Estratégica {{ step }} de 4</div>
</div>

<div class=\"card shadow-lg border-0 mb-5\">
    <div class=\"card-header bg-light pt-4 border-bottom\">
        <h4 class=\"fw-bold text-primary\">{{ areaName }}</h4>
    </div>
    <div class=\"card-body p-4 p-md-5\">
        <!-- Escala de Calificaciones -->
        <div class=\"card border-0 shadow-sm mb-5 bg-light\">
            <div class=\"card-body p-4\">
                <h6 class=\"fw-bold mb-3 text-dark\"><i class=\"bi bi-info-circle-fill text-primary me-2\"></i> Guía de Calificaciones y Resultados</h6>
                <div class=\"row g-3\">
                    <div class=\"col-md-4\">
                        <div class=\"p-3 border-start border-danger border-4 bg-white rounded shadow-sm h-100\">
                            <h6 class=\"fw-bold text-danger mb-1\">1 a 5 Puntos</h6>
                            <p class=\"small text-muted mb-0\">Áreas críticas que requieren acciones inmediatas.</p>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"p-3 border-start border-warning border-4 bg-white rounded shadow-sm h-100\">
                            <h6 class=\"fw-bold text-warning mb-1\">6 a 8 Puntos</h6>
                            <p class=\"small text-muted mb-0\">Áreas moderadas, requieren seguimiento y fortalecimiento.</p>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"p-3 border-start border-success border-4 bg-white rounded shadow-sm h-100\">
                            <h6 class=\"fw-bold text-success mb-1\">9 a 10 Puntos</h6>
                            <p class=\"small text-muted mb-0\">Áreas sólidas, mantener las prácticas actuales.</p>
                        </div>
                    </div>
                </div>
                <div class=\"mt-3 text-center\">
                    <small class=\"text-secondary\"><em>El sistema genera gráficos automáticos al finalizar para visualizar el nivel general de cumplimiento.</em></small>
                </div>
            </div>
        </div>

        <form action=\"{{ path('app_public_wizard', {'step': step}) }}\" method=\"POST\">
            
            {% for indicator in indicators %}
            <div class=\"border-bottom pb-4 mb-4\">
                <div class=\"d-flex align-items-center mb-2\">
                    <span class=\"badge bg-primary me-2\">Criterio {{ indicator.orderNumber }}</span>
                    <h5 class=\"fw-bold m-0 text-dark\">{{ indicator.criterion }}</h5>
                </div>
                
                <div class=\"text-secondary mb-4 fs-6 bg-white p-3 rounded border\">
                    <p class=\"fw-bold text-dark mb-2\">Indicadores a evaluar:</p>
                    <ul class=\"list-unstyled mb-0\">
                        {% for line in indicator.name|split('\\n') %}
                            {% if line|trim != '' %}
                                <li class=\"mb-2 d-flex align-items-start\">
                                    <span class=\"text-primary me-2\">👉</span> 
                                    <span>{{ line }}</span>
                                </li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                </div>
                
                <div class=\"row g-4 bg-light p-3 rounded mb-4\">
                    <div class=\"col-12 mb-2\">
                        <label class=\"form-label fw-bold text-dark\">¿Cuenta con documentación?</label>
                        <div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"has_doc_{{ indicator.id }}\" id=\"has_doc_yes_{{ indicator.id }}\" value=\"1\" onchange=\"toggleDocFields({{ indicator.id }}, true)\" required oninvalid=\"this.setCustomValidity('Por favor, seleccione una opción.')\" oninput=\"this.setCustomValidity('')\">
                                <label class=\"form-check-label\" for=\"has_doc_yes_{{ indicator.id }}\">Sí</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"has_doc_{{ indicator.id }}\" id=\"has_doc_no_{{ indicator.id }}\" value=\"0\" onchange=\"toggleDocFields({{ indicator.id }}, false)\" required oninvalid=\"this.setCustomValidity('Por favor, seleccione una opción.')\" oninput=\"this.setCustomValidity('')\">
                                <label class=\"form-check-label\" for=\"has_doc_no_{{ indicator.id }}\">No</label>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-6 doc-fields-{{ indicator.id }}\" style=\"display: none;\">
                        <label class=\"form-label fw-bold\">Indique qué documentación tiene y dónde está almacenada según este criterio:</label>
                        <textarea class=\"form-control\" name=\"doc_location_{{ indicator.id }}\" id=\"doc_location_{{ indicator.id }}\" rows=\"3\" placeholder=\"Ej. Está en la ISO 9001, archivador central...\"></textarea>
                    </div>

                    <div class=\"col-md-6 doc-fields-{{ indicator.id }}\" style=\"display: none;\">
                        <label class=\"form-label fw-bold\">¿Cuál es el documento verificado? (Opcional)</label>
                        <textarea class=\"form-control\" name=\"verified_doc_{{ indicator.id }}\" rows=\"3\" placeholder=\"Opcional...\"></textarea>
                    </div>
                </div>

                <div class=\"row g-4\">
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-bold text-primary\">Puntuación (1 al 10)</label>
                        <input type=\"range\" class=\"form-range\" min=\"1\" max=\"10\" name=\"score_{{ indicator.id }}\" id=\"score_{{ indicator.id }}\" oninput=\"document.getElementById('out_{{ indicator.id }}').innerText = this.value\" required oninvalid=\"this.setCustomValidity('Por favor, seleccione una opción.')\" oninput=\"this.setCustomValidity('')\">
                        <div class=\"text-center fw-bold fs-3 text-primary\" id=\"out_{{ indicator.id }}\">6</div>
                        <div class=\"small text-muted text-center\">1=Crítico | 10=Sólido</div>
                    </div>
                    
                    <div class=\"col-md-8\">
                        <label class=\"form-label fw-bold\">Observación / Riesgo Identificado</label>
                        <textarea class=\"form-control\" name=\"observation_{{ indicator.id }}\" rows=\"3\" placeholder=\"Describa el riesgo si el puntaje es bajo...\"></textarea>
                    </div>
                </div>
            </div>
            {% endfor %}

            <div class=\"d-flex justify-content-between mt-5\">
                {% if step > 1 %}
                    <a href=\"{{ path('app_public_wizard', {'step': step - 1}) }}\" class=\"btn btn-outline-secondary px-4\">Atrás</a>
                {% else %}
                    <div></div>
                {% endif %}
                <button type=\"submit\" class=\"btn btn-primary btn-lg px-5 fw-bold\">{% if step == 4 %}Ver Resultados Generales{% else %}Siguiente Área{% endif %}</button>
            </div>
        </form>
    </div>
</div>
{% endblock %}
{% block javascripts %}
<script>
    function toggleDocFields(indicatorId, show) {
        const fields = document.querySelectorAll('.doc-fields-' + indicatorId);
        const requiredInput = document.getElementById('doc_location_' + indicatorId);
        
        fields.forEach(field => {
            field.style.display = show ? 'block' : 'none';
        });
        
        if (show) {
            requiredInput.setAttribute('required', 'required');
        } else {
            requiredInput.removeAttribute('required');
            requiredInput.value = '';
        }
    }
</script>
{% endblock %}
", "public/wizard.html.twig", "/var/www/html/templates/public/wizard.html.twig");
    }
}
