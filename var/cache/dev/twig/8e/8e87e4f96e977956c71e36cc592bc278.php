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

/* public/challenges.html.twig */
class __TwigTemplate_3c273a3d60ee195cb676a01a0ca9184b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/challenges.html.twig"));

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
        yield "<div class=\"card shadow-lg border-0 mb-5 border-top border-warning border-5\">
    <div class=\"card-header bg-white pt-4 pb-3\">
        <h3 class=\"fw-bold m-0 text-dark\">C. Reporte de Desafíos y Brechas</h3>
        <p class=\"text-muted mt-2 mb-0\">Debe plantear una acción de mejora para los indicadores donde haya obtenido un puntaje de 5 o menos.</p>
    </div>
    <div class=\"card-body p-4 p-md-5\">
        
        ";
        // line 11
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["answers"]) || array_key_exists("answers", $context) ? $context["answers"] : (function () { throw new RuntimeError('Variable "answers" does not exist.', 11, $this->source); })())) == 0)) {
            // line 12
            yield "            <div class=\"text-center py-5\">
                <h4 class=\"text-success\"><i class=\"bi bi-check-circle-fill\"></i> ¡Felicidades!</h4>
                <p>No tiene indicadores críticos que requieran un plan de mejora inmediato.</p>
                <a href=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_public_success", ["token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 15, $this->source); })())]), "html", null, true);
            yield "\" class=\"btn btn-primary mt-3\">Finalizar Proceso</a>
            </div>
        ";
        } else {
            // line 18
            yield "            <form action=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_public_challenges");
            yield "\" method=\"POST\">
                
                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["answers"]) || array_key_exists("answers", $context) ? $context["answers"] : (function () { throw new RuntimeError('Variable "answers" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ans"]) {
                // line 21
                yield "                    ";
                $context["ind"] = CoreExtension::getAttribute($this->env, $this->source, $context["ans"], "indicator", [], "any", false, false, false, 21);
                // line 22
                yield "                    <div class=\"card bg-light border-0 mb-4\">
                        <div class=\"card-body\">
                            <span class=\"badge bg-danger mb-2\">Puntaje: ";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ans"], "score", [], "any", false, false, false, 24), "html", null, true);
                yield "/10</span>
                            <h5 class=\"fw-bold text-dark\">";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ind"]) || array_key_exists("ind", $context) ? $context["ind"] : (function () { throw new RuntimeError('Variable "ind" does not exist.', 25, $this->source); })()), "area", [], "any", false, false, false, 25), "html", null, true);
                yield "</h5>
                            <p class=\"text-secondary fw-bold mb-1\">";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ind"]) || array_key_exists("ind", $context) ? $context["ind"] : (function () { throw new RuntimeError('Variable "ind" does not exist.', 26, $this->source); })()), "criterion", [], "any", false, false, false, 26), "html", null, true);
                yield "</p>
                            <p class=\"small text-muted\">";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ind"]) || array_key_exists("ind", $context) ? $context["ind"] : (function () { throw new RuntimeError('Variable "ind" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27), "html", null, true);
                yield "</p>

                            <div class=\"row g-3 mt-3\">
                                <div class=\"col-md-12\">
                                    <label class=\"form-label fw-bold\">Riesgo o Comentario Identificado</label>
                                    <input type=\"text\" class=\"form-control\" value=\"";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ans"], "observation", [], "any", false, false, false, 32), "html", null, true);
                yield "\" disabled>
                                </div>
                                <div class=\"col-md-4\">
                                    <label class=\"form-label fw-bold text-primary\">Responsable</label>
                                    <input type=\"text\" class=\"form-control\" name=\"resp_";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ind"]) || array_key_exists("ind", $context) ? $context["ind"] : (function () { throw new RuntimeError('Variable "ind" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36), "html", null, true);
                yield "\" placeholder=\"Ej. Gerente, RRHH...\" required>
                                </div>
                                <div class=\"col-md-4\">
                                    <label class=\"form-label fw-bold text-primary\">Plazo</label>
                                    <input type=\"text\" class=\"form-control\" name=\"time_";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ind"]) || array_key_exists("ind", $context) ? $context["ind"] : (function () { throw new RuntimeError('Variable "ind" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40), "html", null, true);
                yield "\" placeholder=\"Ej. 2 meses, 1 semana...\" required>
                                </div>
                                <div class=\"col-md-12\">
                                    <label class=\"form-label fw-bold text-primary\">Acción Específica a Realizar</label>
                                    <textarea class=\"form-control\" name=\"action_";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ind"]) || array_key_exists("ind", $context) ? $context["ind"] : (function () { throw new RuntimeError('Variable "ind" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44), "html", null, true);
                yield "\" rows=\"2\" placeholder=\"Describa la acción correctiva...\" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['ans'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            yield "
                <div class=\"d-grid mt-5\">
                    <button type=\"submit\" class=\"btn btn-warning btn-lg fw-bold shadow-sm\">Confirmar Planes y Finalizar</button>
                </div>
            </form>
        ";
        }
        // line 56
        yield "
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
        return "public/challenges.html.twig";
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
        return array (  167 => 56,  159 => 50,  147 => 44,  140 => 40,  133 => 36,  126 => 32,  118 => 27,  114 => 26,  110 => 25,  106 => 24,  102 => 22,  99 => 21,  95 => 20,  89 => 18,  83 => 15,  78 => 12,  76 => 11,  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'public_base.html.twig' %}

{% block content %}
<div class=\"card shadow-lg border-0 mb-5 border-top border-warning border-5\">
    <div class=\"card-header bg-white pt-4 pb-3\">
        <h3 class=\"fw-bold m-0 text-dark\">C. Reporte de Desafíos y Brechas</h3>
        <p class=\"text-muted mt-2 mb-0\">Debe plantear una acción de mejora para los indicadores donde haya obtenido un puntaje de 5 o menos.</p>
    </div>
    <div class=\"card-body p-4 p-md-5\">
        
        {% if answers|length == 0 %}
            <div class=\"text-center py-5\">
                <h4 class=\"text-success\"><i class=\"bi bi-check-circle-fill\"></i> ¡Felicidades!</h4>
                <p>No tiene indicadores críticos que requieran un plan de mejora inmediato.</p>
                <a href=\"{{ path('app_public_success', {'token': token}) }}\" class=\"btn btn-primary mt-3\">Finalizar Proceso</a>
            </div>
        {% else %}
            <form action=\"{{ path('app_public_challenges') }}\" method=\"POST\">
                
                {% for ans in answers %}
                    {% set ind = ans.indicator %}
                    <div class=\"card bg-light border-0 mb-4\">
                        <div class=\"card-body\">
                            <span class=\"badge bg-danger mb-2\">Puntaje: {{ ans.score }}/10</span>
                            <h5 class=\"fw-bold text-dark\">{{ ind.area }}</h5>
                            <p class=\"text-secondary fw-bold mb-1\">{{ ind.criterion }}</p>
                            <p class=\"small text-muted\">{{ ind.name }}</p>

                            <div class=\"row g-3 mt-3\">
                                <div class=\"col-md-12\">
                                    <label class=\"form-label fw-bold\">Riesgo o Comentario Identificado</label>
                                    <input type=\"text\" class=\"form-control\" value=\"{{ ans.observation }}\" disabled>
                                </div>
                                <div class=\"col-md-4\">
                                    <label class=\"form-label fw-bold text-primary\">Responsable</label>
                                    <input type=\"text\" class=\"form-control\" name=\"resp_{{ ind.id }}\" placeholder=\"Ej. Gerente, RRHH...\" required>
                                </div>
                                <div class=\"col-md-4\">
                                    <label class=\"form-label fw-bold text-primary\">Plazo</label>
                                    <input type=\"text\" class=\"form-control\" name=\"time_{{ ind.id }}\" placeholder=\"Ej. 2 meses, 1 semana...\" required>
                                </div>
                                <div class=\"col-md-12\">
                                    <label class=\"form-label fw-bold text-primary\">Acción Específica a Realizar</label>
                                    <textarea class=\"form-control\" name=\"action_{{ ind.id }}\" rows=\"2\" placeholder=\"Describa la acción correctiva...\" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}

                <div class=\"d-grid mt-5\">
                    <button type=\"submit\" class=\"btn btn-warning btn-lg fw-bold shadow-sm\">Confirmar Planes y Finalizar</button>
                </div>
            </form>
        {% endif %}

    </div>
</div>
{% endblock %}
", "public/challenges.html.twig", "/var/www/html/templates/public/challenges.html.twig");
    }
}
