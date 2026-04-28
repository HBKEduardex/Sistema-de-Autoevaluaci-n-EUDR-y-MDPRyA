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

/* public/pdf_report_visual.html.twig */
class __TwigTemplate_309b571f1935f3acb7a3dc5676fef263 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/pdf_report_visual.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <title>Reporte EUDR</title>
    <style>
        @page {
            margin: 40px;
        }
        body {
            font-family: Arial, sans-serif;
            color: #333;
            font-size: 11px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
        }
        .page-break {
            page-break-after: always;
        }
        
        /* Portada */
        .cover-page {
            text-align: center;
            padding-top: 150px;
        }
        .cover-title {
            font-size: 28px;
            color: #0056b3;
            font-weight: bold;
            margin-bottom: 60px;
            text-transform: uppercase;
        }
        .cover-logos {
            margin-top: 50px;
        }
        .cover-logos img {
            max-height: 80px;
            margin: 0 15px;
            display: inline-block;
        }
        .cover-footer {
            margin-top: 100px;
            font-size: 14px;
            color: #666;
        }

        /* Encabezados de Área */
        .area-header {
            background-color: #e6f2ff; /* Celeste claro */
            padding: 10px;
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            color: #004085;
            margin-bottom: 20px;
            border: 1px solid #b8daff;
            border-radius: 4px;
        }

        /* Columnas para dompdf (flotantes) */
        .clearfix::after {
            content: \"\";
            clear: both;
            display: table;
        }
        .col-left {
            float: left;
            width: 60%;
        }
        .col-right {
            float: right;
            width: 35%;
            text-align: center;
            padding-top: 20px;
        }

        /* Tablas */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            vertical-align: middle;
        }
        th {
            background-color: #f8f9fa;
            font-weight: bold;
            color: #495057;
            text-align: center;
        }
        td.text-center {
            text-align: center;
        }
        
        /* Resultados numéricos */
        .score-box {
            font-weight: bold;
            font-size: 14px;
        }
        .score-danger { color: #dc3545; }
        .score-warning { color: #ffc107; }
        .score-success { color: #198754; }

        /* Título Hoja de Desafíos */
        .challenges-title {
            font-size: 18px;
            font-weight: bold;
            color: #0056b3;
            margin-bottom: 20px;
            text-align: center;
            text-transform: uppercase;
        }
    </style>
</head>
<body>

    <!-- PORTADA -->
    <div class=\"cover-page page-break\">
        <div class=\"cover-title\">
            ";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["toolLabel"]) || array_key_exists("toolLabel", $context) ? $context["toolLabel"] : (function () { throw new RuntimeError('Variable "toolLabel" does not exist.', 125, $this->source); })()), "html", null, true);
        yield "
        </div>
        
        ";
        // line 128
        if (array_key_exists("logos", $context)) {
            // line 129
            yield "        <div class=\"cover-logos\">
            ";
            // line 130
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["logos"]) || array_key_exists("logos", $context) ? $context["logos"] : (function () { throw new RuntimeError('Variable "logos" does not exist.', 130, $this->source); })()), "ue", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["logos"]) || array_key_exists("logos", $context) ? $context["logos"] : (function () { throw new RuntimeError('Variable "logos" does not exist.', 130, $this->source); })()), "ue", [], "any", false, false, false, 130), "html", null, true);
                yield "\" alt=\"Unión Europea\">";
            }
            // line 131
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["logos"]) || array_key_exists("logos", $context) ? $context["logos"] : (function () { throw new RuntimeError('Variable "logos" does not exist.', 131, $this->source); })()), "gob", [], "any", false, false, false, 131)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["logos"]) || array_key_exists("logos", $context) ? $context["logos"] : (function () { throw new RuntimeError('Variable "logos" does not exist.', 131, $this->source); })()), "gob", [], "any", false, false, false, 131), "html", null, true);
                yield "\" alt=\"Gobierno\">";
            }
            // line 132
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["logos"]) || array_key_exists("logos", $context) ? $context["logos"] : (function () { throw new RuntimeError('Variable "logos" does not exist.', 132, $this->source); })()), "al_invest", [], "any", false, false, false, 132)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["logos"]) || array_key_exists("logos", $context) ? $context["logos"] : (function () { throw new RuntimeError('Variable "logos" does not exist.', 132, $this->source); })()), "al_invest", [], "any", false, false, false, 132), "html", null, true);
                yield "\" alt=\"AL INVEST\">";
            }
            // line 133
            yield "        </div>
        ";
        }
        // line 135
        yield "
        <div class=\"cover-footer\">
            <p>Empresa: <strong>";
        // line 137
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "organization", [], "any", false, true, false, 137), "name", [], "any", true, true, false, 137) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 137, $this->source); })()), "organization", [], "any", false, false, false, 137), "name", [], "any", false, false, false, 137)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 137, $this->source); })()), "organization", [], "any", false, false, false, 137), "name", [], "any", false, false, false, 137), "html", null, true)) : ("No especificada"));
        yield "</strong></p>
            <p>Fecha de Generación: ";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y H:i"), "html", null, true);
        yield "</p>
        </div>
    </div>

    <!-- HOJAS DE ÁREAS -->
    ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["areasData"]) || array_key_exists("areasData", $context) ? $context["areasData"] : (function () { throw new RuntimeError('Variable "areasData" does not exist.', 143, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["area"]) {
            // line 144
            yield "    <div class=\"page-break\">
        <div class=\"area-header\">
            ";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["area"], "name", [], "any", false, false, false, 146), "html", null, true);
            yield "
        </div>

        <div class=\"clearfix\">
            <div class=\"col-left\">
                <table>
                    <thead>
                        <tr>
                            <th width=\"10%\">Nro</th>
                            <th width=\"70%\">Criterio</th>
                            <th width=\"20%\">Resultado<br><small>(sobre 10)</small></th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 160
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["area"], "items", [], "any", false, false, false, 160));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 161
                yield "                            ";
                $context["scoreColor"] = "score-danger";
                // line 162
                yield "                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "score", [], "any", false, false, false, 162) >= 9)) {
                    // line 163
                    yield "                                ";
                    $context["scoreColor"] = "score-success";
                    // line 164
                    yield "                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "score", [], "any", false, false, false, 164) >= 6)) {
                    // line 165
                    yield "                                ";
                    $context["scoreColor"] = "score-warning";
                    // line 166
                    yield "                            ";
                }
                // line 167
                yield "                            
                            <tr>
                                <td class=\"text-center\">";
                // line 169
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "number", [], "any", false, false, false, 169), "html", null, true);
                yield "</td>
                                <td>";
                // line 170
                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "criterion", [], "any", false, false, false, 170);
                yield "</td>
                                <td class=\"text-center score-box ";
                // line 171
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["scoreColor"]) || array_key_exists("scoreColor", $context) ? $context["scoreColor"] : (function () { throw new RuntimeError('Variable "scoreColor" does not exist.', 171, $this->source); })()), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "score", [], "any", false, false, false, 171), "html", null, true);
                yield "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            yield "                    </tbody>
                </table>
            </div>

            <div class=\"col-right\">
                ";
            // line 179
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["area"], "chartBase64", [], "any", false, false, false, 179)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 180
                yield "                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["area"], "chartBase64", [], "any", false, false, false, 180), "html", null, true);
                yield "\" alt=\"Gráfico del Área\" style=\"max-width: 100%; height: auto;\">
                ";
            }
            // line 182
            yield "            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['area'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        yield "
    <!-- HOJA FINAL DE DESAFÍOS Y BRECHAS -->
    <div>
        <div class=\"challenges-title\">
            Reporte de Desafíos y Brechas / Plan de Mejora
        </div>
        
        ";
        // line 193
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["challenges"]) || array_key_exists("challenges", $context) ? $context["challenges"] : (function () { throw new RuntimeError('Variable "challenges" does not exist.', 193, $this->source); })())) > 0)) {
            // line 194
            yield "        <table>
            <thead>
                <tr>
                    <th width=\"15%\">Área Estratégica</th>
                    <th width=\"20%\">Criterio</th>
                    <th width=\"5%\">Nro</th>
                    <th width=\"20%\">Riesgo Identificado</th>
                    <th width=\"10%\">Plazo</th>
                    <th width=\"10%\">Responsable</th>
                    <th width=\"20%\">Acción / Comentario</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 207
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["challenges"]) || array_key_exists("challenges", $context) ? $context["challenges"] : (function () { throw new RuntimeError('Variable "challenges" does not exist.', 207, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
                // line 208
                yield "                <tr>
                    <td>";
                // line 209
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "areaName", [], "any", false, false, false, 209), "html", null, true);
                yield "</td>
                    <td>";
                // line 210
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "criterion", [], "any", false, false, false, 210), "html", null, true);
                yield "</td>
                    <td class=\"text-center\">";
                // line 211
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "number", [], "any", false, false, false, 211), "html", null, true);
                yield "</td>
                    <td>";
                // line 212
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "risk", [], "any", false, false, false, 212), "html", null, true);
                yield "</td>
                    <td>";
                // line 213
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "timeframe", [], "any", false, false, false, 213), "html", null, true);
                yield "</td>
                    <td>";
                // line 214
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "responsible", [], "any", false, false, false, 214), "html", null, true);
                yield "</td>
                    <td>";
                // line 215
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "action", [], "any", false, false, false, 215), "html", null, true);
                yield "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['plan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            yield "            </tbody>
        </table>
        ";
        } else {
            // line 221
            yield "        <p style=\"text-align:center; padding: 20px; border: 1px dashed #ccc;\">
            No se identificaron brechas críticas (puntajes menores o iguales a 5) en esta evaluación.
        </p>
        ";
        }
        // line 225
        yield "    </div>

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
        return "public/pdf_report_visual.html.twig";
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
        return array (  393 => 225,  387 => 221,  382 => 218,  373 => 215,  369 => 214,  365 => 213,  361 => 212,  357 => 211,  353 => 210,  349 => 209,  346 => 208,  342 => 207,  327 => 194,  325 => 193,  316 => 186,  307 => 182,  301 => 180,  299 => 179,  292 => 174,  281 => 171,  277 => 170,  273 => 169,  269 => 167,  266 => 166,  263 => 165,  260 => 164,  257 => 163,  254 => 162,  251 => 161,  247 => 160,  230 => 146,  226 => 144,  222 => 143,  214 => 138,  210 => 137,  206 => 135,  202 => 133,  195 => 132,  188 => 131,  182 => 130,  179 => 129,  177 => 128,  171 => 125,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <title>Reporte EUDR</title>
    <style>
        @page {
            margin: 40px;
        }
        body {
            font-family: Arial, sans-serif;
            color: #333;
            font-size: 11px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
        }
        .page-break {
            page-break-after: always;
        }
        
        /* Portada */
        .cover-page {
            text-align: center;
            padding-top: 150px;
        }
        .cover-title {
            font-size: 28px;
            color: #0056b3;
            font-weight: bold;
            margin-bottom: 60px;
            text-transform: uppercase;
        }
        .cover-logos {
            margin-top: 50px;
        }
        .cover-logos img {
            max-height: 80px;
            margin: 0 15px;
            display: inline-block;
        }
        .cover-footer {
            margin-top: 100px;
            font-size: 14px;
            color: #666;
        }

        /* Encabezados de Área */
        .area-header {
            background-color: #e6f2ff; /* Celeste claro */
            padding: 10px;
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            color: #004085;
            margin-bottom: 20px;
            border: 1px solid #b8daff;
            border-radius: 4px;
        }

        /* Columnas para dompdf (flotantes) */
        .clearfix::after {
            content: \"\";
            clear: both;
            display: table;
        }
        .col-left {
            float: left;
            width: 60%;
        }
        .col-right {
            float: right;
            width: 35%;
            text-align: center;
            padding-top: 20px;
        }

        /* Tablas */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            vertical-align: middle;
        }
        th {
            background-color: #f8f9fa;
            font-weight: bold;
            color: #495057;
            text-align: center;
        }
        td.text-center {
            text-align: center;
        }
        
        /* Resultados numéricos */
        .score-box {
            font-weight: bold;
            font-size: 14px;
        }
        .score-danger { color: #dc3545; }
        .score-warning { color: #ffc107; }
        .score-success { color: #198754; }

        /* Título Hoja de Desafíos */
        .challenges-title {
            font-size: 18px;
            font-weight: bold;
            color: #0056b3;
            margin-bottom: 20px;
            text-align: center;
            text-transform: uppercase;
        }
    </style>
</head>
<body>

    <!-- PORTADA -->
    <div class=\"cover-page page-break\">
        <div class=\"cover-title\">
            {{ toolLabel }}
        </div>
        
        {% if logos is defined %}
        <div class=\"cover-logos\">
            {% if logos.ue %}<img src=\"{{ logos.ue }}\" alt=\"Unión Europea\">{% endif %}
            {% if logos.gob %}<img src=\"{{ logos.gob }}\" alt=\"Gobierno\">{% endif %}
            {% if logos.al_invest %}<img src=\"{{ logos.al_invest }}\" alt=\"AL INVEST\">{% endif %}
        </div>
        {% endif %}

        <div class=\"cover-footer\">
            <p>Empresa: <strong>{{ session.organization.name ?? 'No especificada' }}</strong></p>
            <p>Fecha de Generación: {{ \"now\"|date('d/m/Y H:i') }}</p>
        </div>
    </div>

    <!-- HOJAS DE ÁREAS -->
    {% for area in areasData %}
    <div class=\"page-break\">
        <div class=\"area-header\">
            {{ area.name }}
        </div>

        <div class=\"clearfix\">
            <div class=\"col-left\">
                <table>
                    <thead>
                        <tr>
                            <th width=\"10%\">Nro</th>
                            <th width=\"70%\">Criterio</th>
                            <th width=\"20%\">Resultado<br><small>(sobre 10)</small></th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in area.items %}
                            {% set scoreColor = 'score-danger' %}
                            {% if item.score >= 9 %}
                                {% set scoreColor = 'score-success' %}
                            {% elseif item.score >= 6 %}
                                {% set scoreColor = 'score-warning' %}
                            {% endif %}
                            
                            <tr>
                                <td class=\"text-center\">{{ item.number }}</td>
                                <td>{{ item.criterion|raw }}</td>
                                <td class=\"text-center score-box {{ scoreColor }}\">{{ item.score }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>

            <div class=\"col-right\">
                {% if area.chartBase64 %}
                    <img src=\"{{ area.chartBase64 }}\" alt=\"Gráfico del Área\" style=\"max-width: 100%; height: auto;\">
                {% endif %}
            </div>
        </div>
    </div>
    {% endfor %}

    <!-- HOJA FINAL DE DESAFÍOS Y BRECHAS -->
    <div>
        <div class=\"challenges-title\">
            Reporte de Desafíos y Brechas / Plan de Mejora
        </div>
        
        {% if challenges|length > 0 %}
        <table>
            <thead>
                <tr>
                    <th width=\"15%\">Área Estratégica</th>
                    <th width=\"20%\">Criterio</th>
                    <th width=\"5%\">Nro</th>
                    <th width=\"20%\">Riesgo Identificado</th>
                    <th width=\"10%\">Plazo</th>
                    <th width=\"10%\">Responsable</th>
                    <th width=\"20%\">Acción / Comentario</th>
                </tr>
            </thead>
            <tbody>
                {% for plan in challenges %}
                <tr>
                    <td>{{ plan.areaName }}</td>
                    <td>{{ plan.criterion }}</td>
                    <td class=\"text-center\">{{ plan.number }}</td>
                    <td>{{ plan.risk }}</td>
                    <td>{{ plan.timeframe }}</td>
                    <td>{{ plan.responsible }}</td>
                    <td>{{ plan.action }}</td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
        {% else %}
        <p style=\"text-align:center; padding: 20px; border: 1px dashed #ccc;\">
            No se identificaron brechas críticas (puntajes menores o iguales a 5) en esta evaluación.
        </p>
        {% endif %}
    </div>

</body>
</html>
", "public/pdf_report_visual.html.twig", "/var/www/html/templates/public/pdf_report_visual.html.twig");
    }
}
