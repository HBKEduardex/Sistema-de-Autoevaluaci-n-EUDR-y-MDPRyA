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

/* public/pdf_report.html.twig */
class __TwigTemplate_808b8fbbe028e6fdc995cf8c1cf8fc2e extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/pdf_report.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <title>Reporte EUDR</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            font-size: 12px;
            line-height: 1.5;
        }
        .header {
            text-align: center;
            border-bottom: 2px solid #0056b3;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }
        .logos {
            width: 100%;
            margin-bottom: 15px;
            text-align: center;
        }
        .logos img {
            max-height: 50px;
            margin: 0 10px;
            display: inline-block;
        }
        h1 {
            color: #0056b3;
            font-size: 18px;
            margin: 10px 0;
        }
        .section-title {
            background-color: #f4f4f4;
            padding: 8px;
            font-weight: bold;
            font-size: 14px;
            border-left: 4px solid #0056b3;
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

    <div class=\"header\">
        <div class=\"logos\">
            ";
        // line 63
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["logos"]) || array_key_exists("logos", $context) ? $context["logos"] : (function () { throw new RuntimeError('Variable "logos" does not exist.', 63, $this->source); })()), "ue", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["logos"]) || array_key_exists("logos", $context) ? $context["logos"] : (function () { throw new RuntimeError('Variable "logos" does not exist.', 63, $this->source); })()), "ue", [], "any", false, false, false, 63), "html", null, true);
            yield "\" alt=\"Unión Europea\">";
        }
        // line 64
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["logos"]) || array_key_exists("logos", $context) ? $context["logos"] : (function () { throw new RuntimeError('Variable "logos" does not exist.', 64, $this->source); })()), "gob", [], "any", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["logos"]) || array_key_exists("logos", $context) ? $context["logos"] : (function () { throw new RuntimeError('Variable "logos" does not exist.', 64, $this->source); })()), "gob", [], "any", false, false, false, 64), "html", null, true);
            yield "\" alt=\"Gobierno\">";
        }
        // line 65
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["logos"]) || array_key_exists("logos", $context) ? $context["logos"] : (function () { throw new RuntimeError('Variable "logos" does not exist.', 65, $this->source); })()), "al_invest", [], "any", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["logos"]) || array_key_exists("logos", $context) ? $context["logos"] : (function () { throw new RuntimeError('Variable "logos" does not exist.', 65, $this->source); })()), "al_invest", [], "any", false, false, false, 65), "html", null, true);
            yield "\" alt=\"AL INVEST\">";
        }
        // line 66
        yield "        </div>
        <h1>";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["toolLabel"]) || array_key_exists("toolLabel", $context) ? $context["toolLabel"] : (function () { throw new RuntimeError('Variable "toolLabel" does not exist.', 67, $this->source); })()), "html", null, true);
        yield "</h1>
        <p>Fecha de Evaluación: ";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 68, $this->source); })()), "createdAt", [], "any", false, false, false, 68), "d/m/Y"), "html", null, true);
        yield "</p>
    </div>

    ";
        // line 71
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 71, $this->source); })()), "organization", [], "any", false, false, false, 71)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 72
            yield "    <div class=\"section-title\">Datos de la Empresa</div>
    <table>
        <tr>
            <th>Razón Social</th>
            <td>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 76, $this->source); })()), "organization", [], "any", false, false, false, 76), "name", [], "any", false, false, false, 76), "html", null, true);
            yield "</td>
        </tr>
    </table>
    ";
        }
        // line 80
        yield "
    ";
        // line 81
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "temporaryData", [], "any", false, true, false, 81), "results", [], "any", true, true, false, 81)) {
            // line 82
            yield "    <div class=\"section-title\">Resumen de Cumplimiento por Áreas</div>
    <table>
        <thead>
            <tr>
                <th>Área Estratégica</th>
                <th>Puntaje Obtenido</th>
                <th>Máximo Posible</th>
                <th>Porcentaje</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 93, $this->source); })()), "temporaryData", [], "any", false, false, false, 93), "results", [], "any", false, false, false, 93));
            foreach ($context['_seq'] as $context["areaId"] => $context["res"]) {
                // line 94
                yield "            <tr>
                <td>Área ";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["areaId"], "html", null, true);
                yield "</td>
                <td>";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["res"], "score", [], "any", false, false, false, 96), "html", null, true);
                yield "</td>
                <td>";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["res"], "max", [], "any", false, false, false, 97), "html", null, true);
                yield "</td>
                <td>";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["res"], "percentage", [], "any", false, false, false, 98), 1), "html", null, true);
                yield "%</td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['areaId'], $context['res'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            yield "            <tr>
                <th colspan=\"3\" style=\"text-align: right;\">Cumplimiento Global:</th>
                <th>";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 103, $this->source); })()), "temporaryData", [], "any", false, false, false, 103), "global_percentage", [], "any", false, false, false, 103), 1), "html", null, true);
            yield "%</th>
            </tr>
        </tbody>
    </table>
    ";
        }
        // line 108
        yield "
    <div class=\"section-title\">Respuestas a los Criterios</div>
    ";
        // line 110
        if ((($tmp = (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 110, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 111
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 111, $this->source); })()), "answers", [], "any", false, false, false, 111));
            foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                // line 112
                yield "            <div style=\"margin-bottom: 15px; border-bottom: 1px dashed #ccc; padding-bottom: 10px;\">
                <p><strong>Criterio ";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["answer"], "indicator", [], "any", false, false, false, 113), "orderNumber", [], "any", false, false, false, 113), "html", null, true);
                yield ":</strong> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["answer"], "indicator", [], "any", false, false, false, 113), "criterion", [], "any", false, false, false, 113), "html", null, true);
                yield "</p>
                <p><strong>Puntuación:</strong> ";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["answer"], "score", [], "any", false, false, false, 114), "html", null, true);
                yield " / 10</p>
                
                ";
                // line 116
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["answer"], "hasDocumentation", [], "any", false, false, false, 116)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 117
                    yield "                    <p><strong>Documentación:</strong> Sí</p>
                    <p><strong>Ubicación:</strong> ";
                    // line 118
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["answer"], "documentationLocation", [], "any", false, false, false, 118), "html", null, true);
                    yield "</p>
                    ";
                    // line 119
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["answer"], "verifiedDocument", [], "any", false, false, false, 119)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 120
                        yield "                        <p><strong>Doc Verificado:</strong> ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["answer"], "verifiedDocument", [], "any", false, false, false, 120), "html", null, true);
                        yield "</p>
                    ";
                    }
                    // line 122
                    yield "                ";
                } else {
                    // line 123
                    yield "                    <p><strong>Documentación:</strong> No</p>
                ";
                }
                // line 125
                yield "                
                ";
                // line 126
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["answer"], "observation", [], "any", false, false, false, 126)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 127
                    yield "                    <p><strong>Observación:</strong> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["answer"], "observation", [], "any", false, false, false, 127), "html", null, true);
                    yield "</p>
                ";
                }
                // line 129
                yield "            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['answer'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            yield "    ";
        } else {
            // line 132
            yield "        <p>No se encontraron respuestas guardadas (quizás la sesión no fue completada formalmente en base de datos).</p>
    ";
        }
        // line 134
        yield "
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "public/pdf_report.html.twig";
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
        return array (  289 => 134,  285 => 132,  282 => 131,  275 => 129,  269 => 127,  267 => 126,  264 => 125,  260 => 123,  257 => 122,  251 => 120,  249 => 119,  245 => 118,  242 => 117,  240 => 116,  235 => 114,  229 => 113,  226 => 112,  221 => 111,  219 => 110,  215 => 108,  207 => 103,  203 => 101,  194 => 98,  190 => 97,  186 => 96,  182 => 95,  179 => 94,  175 => 93,  162 => 82,  160 => 81,  157 => 80,  150 => 76,  144 => 72,  142 => 71,  136 => 68,  132 => 67,  129 => 66,  122 => 65,  115 => 64,  109 => 63,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <title>Reporte EUDR</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            font-size: 12px;
            line-height: 1.5;
        }
        .header {
            text-align: center;
            border-bottom: 2px solid #0056b3;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }
        .logos {
            width: 100%;
            margin-bottom: 15px;
            text-align: center;
        }
        .logos img {
            max-height: 50px;
            margin: 0 10px;
            display: inline-block;
        }
        h1 {
            color: #0056b3;
            font-size: 18px;
            margin: 10px 0;
        }
        .section-title {
            background-color: #f4f4f4;
            padding: 8px;
            font-weight: bold;
            font-size: 14px;
            border-left: 4px solid #0056b3;
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

    <div class=\"header\">
        <div class=\"logos\">
            {% if logos.ue %}<img src=\"{{ logos.ue }}\" alt=\"Unión Europea\">{% endif %}
            {% if logos.gob %}<img src=\"{{ logos.gob }}\" alt=\"Gobierno\">{% endif %}
            {% if logos.al_invest %}<img src=\"{{ logos.al_invest }}\" alt=\"AL INVEST\">{% endif %}
        </div>
        <h1>{{ toolLabel }}</h1>
        <p>Fecha de Evaluación: {{ session.createdAt|date('d/m/Y') }}</p>
    </div>

    {% if session.organization %}
    <div class=\"section-title\">Datos de la Empresa</div>
    <table>
        <tr>
            <th>Razón Social</th>
            <td>{{ session.organization.name }}</td>
        </tr>
    </table>
    {% endif %}

    {% if session.temporaryData.results is defined %}
    <div class=\"section-title\">Resumen de Cumplimiento por Áreas</div>
    <table>
        <thead>
            <tr>
                <th>Área Estratégica</th>
                <th>Puntaje Obtenido</th>
                <th>Máximo Posible</th>
                <th>Porcentaje</th>
            </tr>
        </thead>
        <tbody>
            {% for areaId, res in session.temporaryData.results %}
            <tr>
                <td>Área {{ areaId }}</td>
                <td>{{ res.score }}</td>
                <td>{{ res.max }}</td>
                <td>{{ res.percentage|number_format(1) }}%</td>
            </tr>
            {% endfor %}
            <tr>
                <th colspan=\"3\" style=\"text-align: right;\">Cumplimiento Global:</th>
                <th>{{ session.temporaryData.global_percentage|number_format(1) }}%</th>
            </tr>
        </tbody>
    </table>
    {% endif %}

    <div class=\"section-title\">Respuestas a los Criterios</div>
    {% if evaluation %}
        {% for answer in evaluation.answers %}
            <div style=\"margin-bottom: 15px; border-bottom: 1px dashed #ccc; padding-bottom: 10px;\">
                <p><strong>Criterio {{ answer.indicator.orderNumber }}:</strong> {{ answer.indicator.criterion }}</p>
                <p><strong>Puntuación:</strong> {{ answer.score }} / 10</p>
                
                {% if answer.hasDocumentation %}
                    <p><strong>Documentación:</strong> Sí</p>
                    <p><strong>Ubicación:</strong> {{ answer.documentationLocation }}</p>
                    {% if answer.verifiedDocument %}
                        <p><strong>Doc Verificado:</strong> {{ answer.verifiedDocument }}</p>
                    {% endif %}
                {% else %}
                    <p><strong>Documentación:</strong> No</p>
                {% endif %}
                
                {% if answer.observation %}
                    <p><strong>Observación:</strong> {{ answer.observation }}</p>
                {% endif %}
            </div>
        {% endfor %}
    {% else %}
        <p>No se encontraron respuestas guardadas (quizás la sesión no fue completada formalmente en base de datos).</p>
    {% endif %}

</body>
</html>
", "public/pdf_report.html.twig", "/var/www/html/templates/public/pdf_report.html.twig");
    }
}
