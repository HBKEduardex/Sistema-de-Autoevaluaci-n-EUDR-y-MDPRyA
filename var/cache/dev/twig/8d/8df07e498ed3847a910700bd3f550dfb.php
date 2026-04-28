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

/* Modules/Compliance/evaluate.html.twig */
class __TwigTemplate_c6f2206e9528383bce073f963b0e6d26 extends Template
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
            'content' => [$this, 'block_content'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Modules/Compliance/evaluate.html.twig"));

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

        yield "Completar Evaluación - EUDR";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        yield "<div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
    <h1 class=\"h2\">Evaluación de Cumplimiento</h1>
    <div class=\"btn-toolbar mb-2 mb-md-0\">
        <span class=\"badge bg-secondary fs-6 me-2\">Eval: #";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "html", null, true);
        yield "</span>
        <span class=\"badge bg-primary fs-6\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 10, $this->source); })()), "organization", [], "any", false, false, false, 10), "html", null, true);
        yield "</span>
    </div>
</div>

<form action=\"#\" method=\"POST\">
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["areas"]) || array_key_exists("areas", $context) ? $context["areas"] : (function () { throw new RuntimeError('Variable "areas" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["area"] => $context["indicators"]) {
            // line 16
            yield "        <div class=\"card mb-4 shadow-sm\">
            <div class=\"card-header bg-light\">
                <h4 class=\"mb-0 text-primary\">";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["area"], "html", null, true);
            yield "</h4>
            </div>
            <div class=\"card-body\">
                ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["indicators"]);
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["ind"]) {
                // line 22
                yield "                    <div class=\"row mb-4 pb-3 ";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "border-bottom";
                }
                yield "\">
                        <div class=\"col-md-5\">
                            <h5>";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ind"], "name", [], "any", false, false, false, 24), "html", null, true);
                yield " ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ind"], "critical", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span class=\"badge bg-danger\">CRÍTICO</span>";
                }
                yield "</h5>
                            <p class=\"text-muted small\">";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ind"], "desc", [], "any", false, false, false, 25), "html", null, true);
                yield "</p>
                        </div>
                        <div class=\"col-md-7\">
                            <div class=\"row\">
                                <div class=\"col-md-4 mb-3\">
                                    <label class=\"form-label fw-bold\">Puntuación (1-10)</label>
                                    <input type=\"number\" class=\"form-control form-control-lg text-center\" name=\"score[";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ind"], "id", [], "any", false, false, false, 31), "html", null, true);
                yield "]\" min=\"1\" max=\"10\" placeholder=\"-\" required>
                                </div>
                                <div class=\"col-md-8 mb-3\">
                                    <label class=\"form-label fw-bold\">Evidencia / Adjunto</label>
                                    <input class=\"form-control\" type=\"file\" name=\"evidence[";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ind"], "id", [], "any", false, false, false, 35), "html", null, true);
                yield "]\">
                                </div>
                                <div class=\"col-12\">
                                    <label class=\"form-label fw-bold\">Observaciones</label>
                                    <textarea class=\"form-control\" name=\"observation[";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ind"], "id", [], "any", false, false, false, 39), "html", null, true);
                yield "]\" rows=\"2\" placeholder=\"Escriba un comentario o justificación...\"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['ind'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            yield "            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['area'], $context['indicators'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "
    <div class=\"d-grid gap-2 d-md-flex justify-content-md-end mb-5\">
        <a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_compliance_index");
        yield "\" class=\"btn btn-outline-secondary me-md-2\">Cancelar</a>
        <button type=\"submit\" class=\"btn btn-primary btn-lg\">Guardar Evaluación</button>
    </div>
</form>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Modules/Compliance/evaluate.html.twig";
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
        return array (  204 => 50,  200 => 48,  192 => 45,  172 => 39,  165 => 35,  158 => 31,  149 => 25,  141 => 24,  133 => 22,  116 => 21,  110 => 18,  106 => 16,  102 => 15,  94 => 10,  90 => 9,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Completar Evaluación - EUDR{% endblock %}

{% block content %}
<div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
    <h1 class=\"h2\">Evaluación de Cumplimiento</h1>
    <div class=\"btn-toolbar mb-2 mb-md-0\">
        <span class=\"badge bg-secondary fs-6 me-2\">Eval: #{{ evaluation.id }}</span>
        <span class=\"badge bg-primary fs-6\">{{ evaluation.organization }}</span>
    </div>
</div>

<form action=\"#\" method=\"POST\">
    {% for area, indicators in areas %}
        <div class=\"card mb-4 shadow-sm\">
            <div class=\"card-header bg-light\">
                <h4 class=\"mb-0 text-primary\">{{ area }}</h4>
            </div>
            <div class=\"card-body\">
                {% for ind in indicators %}
                    <div class=\"row mb-4 pb-3 {% if not loop.last %}border-bottom{% endif %}\">
                        <div class=\"col-md-5\">
                            <h5>{{ ind.name }} {% if ind.critical %}<span class=\"badge bg-danger\">CRÍTICO</span>{% endif %}</h5>
                            <p class=\"text-muted small\">{{ ind.desc }}</p>
                        </div>
                        <div class=\"col-md-7\">
                            <div class=\"row\">
                                <div class=\"col-md-4 mb-3\">
                                    <label class=\"form-label fw-bold\">Puntuación (1-10)</label>
                                    <input type=\"number\" class=\"form-control form-control-lg text-center\" name=\"score[{{ ind.id }}]\" min=\"1\" max=\"10\" placeholder=\"-\" required>
                                </div>
                                <div class=\"col-md-8 mb-3\">
                                    <label class=\"form-label fw-bold\">Evidencia / Adjunto</label>
                                    <input class=\"form-control\" type=\"file\" name=\"evidence[{{ ind.id }}]\">
                                </div>
                                <div class=\"col-12\">
                                    <label class=\"form-label fw-bold\">Observaciones</label>
                                    <textarea class=\"form-control\" name=\"observation[{{ ind.id }}]\" rows=\"2\" placeholder=\"Escriba un comentario o justificación...\"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    {% endfor %}

    <div class=\"d-grid gap-2 d-md-flex justify-content-md-end mb-5\">
        <a href=\"{{ path('app_compliance_index') }}\" class=\"btn btn-outline-secondary me-md-2\">Cancelar</a>
        <button type=\"submit\" class=\"btn btn-primary btn-lg\">Guardar Evaluación</button>
    </div>
</form>

{% endblock %}
", "Modules/Compliance/evaluate.html.twig", "/var/www/html/templates/Modules/Compliance/evaluate.html.twig");
    }
}
