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
            max-height: 60px; /* Reducido */
            margin: 0 25px; /* Más espacio para separar */
            display: inline-block;
            vertical-align: middle;
        }
        .cover-logos img.logo-center {
            max-height: 160px; /* Masivo en comparación */
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
            page-break-after: avoid;
        }

        /* Columnas para dompdf (flotantes) */
        .clearfix::after {
            content: \"\";
            clear: both;
            display: table;
        }
        .chart-container {
            text-align: center;
            margin-bottom: 30px;
            page-break-after: avoid;
        }
        .chart-container img {
            max-height: 250px;
        }

        /* Tablas */
        table {
            width: 100%;
            table-layout: fixed;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        thead {
            display: table-header-group;
        }
        tr {
            page-break-inside: avoid;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
            vertical-align: top;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
        th {
            background-color: #f8f9fa;
            font-weight: bold;
            color: #495057;
            text-align: center;
            vertical-align: middle;
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
            page-break-after: avoid;
        }
    </style>
</head>
<body>

    <!-- PORTADA -->
    <div class=\"cover-page page-break\">
        <div class=\"cover-title\">
            ";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["toolLabel"]) || array_key_exists("toolLabel", $context) ? $context["toolLabel"] : (function () { throw new RuntimeError('Variable "toolLabel" does not exist.', 139, $this->source); })()), "html", null, true);
        yield "
        </div>
        
        ";
        // line 142
        if (array_key_exists("logos", $context)) {
            // line 143
            yield "        <div class=\"cover-logos\">
            ";
            // line 144
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["logos"]) || array_key_exists("logos", $context) ? $context["logos"] : (function () { throw new RuntimeError('Variable "logos" does not exist.', 144, $this->source); })()), "ue", [], "any", false, false, false, 144)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["logos"]) || array_key_exists("logos", $context) ? $context["logos"] : (function () { throw new RuntimeError('Variable "logos" does not exist.', 144, $this->source); })()), "ue", [], "any", false, false, false, 144), "html", null, true);
                yield "\" alt=\"EUDR\">";
            }
            // line 145
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["logos"]) || array_key_exists("logos", $context) ? $context["logos"] : (function () { throw new RuntimeError('Variable "logos" does not exist.', 145, $this->source); })()), "gob", [], "any", false, false, false, 145)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["logos"]) || array_key_exists("logos", $context) ? $context["logos"] : (function () { throw new RuntimeError('Variable "logos" does not exist.', 145, $this->source); })()), "gob", [], "any", false, false, false, 145), "html", null, true);
                yield "\" alt=\"Gobierno\" class=\"logo-center\">";
            }
            // line 146
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["logos"]) || array_key_exists("logos", $context) ? $context["logos"] : (function () { throw new RuntimeError('Variable "logos" does not exist.', 146, $this->source); })()), "al_invest", [], "any", false, false, false, 146)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["logos"]) || array_key_exists("logos", $context) ? $context["logos"] : (function () { throw new RuntimeError('Variable "logos" does not exist.', 146, $this->source); })()), "al_invest", [], "any", false, false, false, 146), "html", null, true);
                yield "\" alt=\"AL INVEST\">";
            }
            // line 147
            yield "        </div>
        ";
        }
        // line 149
        yield "
        <div class=\"cover-footer\">
            <p>Empresa: <strong>";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["companyName"]) || array_key_exists("companyName", $context) ? $context["companyName"] : (function () { throw new RuntimeError('Variable "companyName" does not exist.', 151, $this->source); })()), "html", null, true);
        yield "</strong></p>
        </div>
    </div>

    <!-- HOJAS DE ÁREAS -->
    ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["areasData"]) || array_key_exists("areasData", $context) ? $context["areasData"] : (function () { throw new RuntimeError('Variable "areasData" does not exist.', 156, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["area"]) {
            // line 157
            yield "    <div class=\"page-break\">
        <div class=\"area-header\">
            ";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["area"], "name", [], "any", false, false, false, 159), "html", null, true);
            yield "
        </div>

        ";
            // line 162
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["area"], "chartBase64", [], "any", false, false, false, 162)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 163
                yield "        <div class=\"chart-container\">
            <img src=\"";
                // line 164
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["area"], "chartBase64", [], "any", false, false, false, 164), "html", null, true);
                yield "\" alt=\"Gráfico del Área\">
        </div>
        ";
            }
            // line 167
            yield "
        <table>
            <thead>
                <tr>
                    <th style=\"width: 4%;\">Nro</th>
                    <th style=\"width: 22%;\">Criterio</th>
                    <th style=\"width: 25%;\">Indique qué documentación tiene y dónde está almacenada según este criterio</th>
                    <th style=\"width: 15%;\">¿Cuál es el documento verificado?</th>
                    <th style=\"width: 25%;\">Observación / Riesgo Identificado</th>
                    <th style=\"width: 9%;\">Resultado<br><small>(sobre 10)</small></th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 180
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["area"], "items", [], "any", false, false, false, 180));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 181
                yield "                    ";
                $context["scoreColor"] = "score-danger";
                // line 182
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "score", [], "any", false, false, false, 182) >= 9)) {
                    // line 183
                    yield "                        ";
                    $context["scoreColor"] = "score-success";
                    // line 184
                    yield "                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "score", [], "any", false, false, false, 184) >= 6)) {
                    // line 185
                    yield "                        ";
                    $context["scoreColor"] = "score-warning";
                    // line 186
                    yield "                    ";
                }
                // line 187
                yield "                    
                    <tr>
                        <td class=\"text-center\">";
                // line 189
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "number", [], "any", false, false, false, 189), "html", null, true);
                yield "</td>
                        <td style=\"font-size: 11px;\">";
                // line 190
                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "criterion", [], "any", false, false, false, 190);
                yield "</td>
                        <td style=\"font-size: 11px; color: #555;\">";
                // line 191
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "docLocation", [], "any", false, false, false, 191), "html", null, true));
                yield "</td>
                        <td style=\"font-size: 11px; color: #555;\">";
                // line 192
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "verifiedDoc", [], "any", false, false, false, 192), "html", null, true));
                yield "</td>
                        <td style=\"font-size: 11px; color: #d9534f;\">";
                // line 193
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "observation", [], "any", false, false, false, 193), "html", null, true));
                yield "</td>
                        <td class=\"text-center score-box ";
                // line 194
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["scoreColor"]) || array_key_exists("scoreColor", $context) ? $context["scoreColor"] : (function () { throw new RuntimeError('Variable "scoreColor" does not exist.', 194, $this->source); })()), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "score", [], "any", false, false, false, 194), "html", null, true);
                yield "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            yield "            </tbody>
        </table>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['area'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        yield "
    <!-- HOJA FINAL DE DESAFÍOS Y BRECHAS -->
    <div>
        <div class=\"challenges-title\">
            Reporte de Desafíos y Brechas / Plan de Mejora
        </div>
        
        ";
        // line 208
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["challenges"]) || array_key_exists("challenges", $context) ? $context["challenges"] : (function () { throw new RuntimeError('Variable "challenges" does not exist.', 208, $this->source); })())) > 0)) {
            // line 209
            yield "        <table>
            <thead>
                <tr>
                    <th style=\"width: 15%;\">Área Estratégica</th>
                    <th style=\"width: 20%;\">Criterio</th>
                    <th style=\"width: 4%;\">Nro</th>
                    <th style=\"width: 22%;\">Riesgo Identificado</th>
                    <th style=\"width: 8%;\">Plazo</th>
                    <th style=\"width: 11%;\">Responsable</th>
                    <th style=\"width: 20%;\">Acción / Comentario</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 222
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["challenges"]) || array_key_exists("challenges", $context) ? $context["challenges"] : (function () { throw new RuntimeError('Variable "challenges" does not exist.', 222, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
                // line 223
                yield "                <tr>
                    <td style=\"font-size: 11px;\">";
                // line 224
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "areaName", [], "any", false, false, false, 224), "html", null, true);
                yield "</td>
                    <td style=\"font-size: 11px;\">";
                // line 225
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "criterion", [], "any", false, false, false, 225), "html", null, true);
                yield "</td>
                    <td class=\"text-center\">";
                // line 226
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "number", [], "any", false, false, false, 226), "html", null, true);
                yield "</td>
                    <td style=\"font-size: 11px;\">";
                // line 227
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "risk", [], "any", false, false, false, 227), "html", null, true));
                yield "</td>
                    <td class=\"text-center\" style=\"font-size: 11px;\">";
                // line 228
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "timeframe", [], "any", false, false, false, 228), "html", null, true));
                yield "</td>
                    <td style=\"font-size: 11px;\">";
                // line 229
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "responsible", [], "any", false, false, false, 229), "html", null, true));
                yield "</td>
                    <td style=\"font-size: 11px;\">";
                // line 230
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "action", [], "any", false, false, false, 230), "html", null, true));
                yield "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['plan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 233
            yield "            </tbody>
        </table>
        ";
        } else {
            // line 236
            yield "        <p style=\"text-align:center; padding: 20px; border: 1px dashed #ccc;\">
            No se identificaron brechas críticas (puntajes menores o iguales a 5) en esta evaluación.
        </p>
        ";
        }
        // line 240
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
        return array (  415 => 240,  409 => 236,  404 => 233,  395 => 230,  391 => 229,  387 => 228,  383 => 227,  379 => 226,  375 => 225,  371 => 224,  368 => 223,  364 => 222,  349 => 209,  347 => 208,  338 => 201,  329 => 197,  318 => 194,  314 => 193,  310 => 192,  306 => 191,  302 => 190,  298 => 189,  294 => 187,  291 => 186,  288 => 185,  285 => 184,  282 => 183,  279 => 182,  276 => 181,  272 => 180,  257 => 167,  251 => 164,  248 => 163,  246 => 162,  240 => 159,  236 => 157,  232 => 156,  224 => 151,  220 => 149,  216 => 147,  209 => 146,  202 => 145,  196 => 144,  193 => 143,  191 => 142,  185 => 139,  45 => 1,);
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
            max-height: 60px; /* Reducido */
            margin: 0 25px; /* Más espacio para separar */
            display: inline-block;
            vertical-align: middle;
        }
        .cover-logos img.logo-center {
            max-height: 160px; /* Masivo en comparación */
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
            page-break-after: avoid;
        }

        /* Columnas para dompdf (flotantes) */
        .clearfix::after {
            content: \"\";
            clear: both;
            display: table;
        }
        .chart-container {
            text-align: center;
            margin-bottom: 30px;
            page-break-after: avoid;
        }
        .chart-container img {
            max-height: 250px;
        }

        /* Tablas */
        table {
            width: 100%;
            table-layout: fixed;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        thead {
            display: table-header-group;
        }
        tr {
            page-break-inside: avoid;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
            vertical-align: top;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
        th {
            background-color: #f8f9fa;
            font-weight: bold;
            color: #495057;
            text-align: center;
            vertical-align: middle;
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
            page-break-after: avoid;
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
            {% if logos.ue %}<img src=\"{{ logos.ue }}\" alt=\"EUDR\">{% endif %}
            {% if logos.gob %}<img src=\"{{ logos.gob }}\" alt=\"Gobierno\" class=\"logo-center\">{% endif %}
            {% if logos.al_invest %}<img src=\"{{ logos.al_invest }}\" alt=\"AL INVEST\">{% endif %}
        </div>
        {% endif %}

        <div class=\"cover-footer\">
            <p>Empresa: <strong>{{ companyName }}</strong></p>
        </div>
    </div>

    <!-- HOJAS DE ÁREAS -->
    {% for area in areasData %}
    <div class=\"page-break\">
        <div class=\"area-header\">
            {{ area.name }}
        </div>

        {% if area.chartBase64 %}
        <div class=\"chart-container\">
            <img src=\"{{ area.chartBase64 }}\" alt=\"Gráfico del Área\">
        </div>
        {% endif %}

        <table>
            <thead>
                <tr>
                    <th style=\"width: 4%;\">Nro</th>
                    <th style=\"width: 22%;\">Criterio</th>
                    <th style=\"width: 25%;\">Indique qué documentación tiene y dónde está almacenada según este criterio</th>
                    <th style=\"width: 15%;\">¿Cuál es el documento verificado?</th>
                    <th style=\"width: 25%;\">Observación / Riesgo Identificado</th>
                    <th style=\"width: 9%;\">Resultado<br><small>(sobre 10)</small></th>
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
                        <td style=\"font-size: 11px;\">{{ item.criterion|raw }}</td>
                        <td style=\"font-size: 11px; color: #555;\">{{ item.docLocation|nl2br }}</td>
                        <td style=\"font-size: 11px; color: #555;\">{{ item.verifiedDoc|nl2br }}</td>
                        <td style=\"font-size: 11px; color: #d9534f;\">{{ item.observation|nl2br }}</td>
                        <td class=\"text-center score-box {{ scoreColor }}\">{{ item.score }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
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
                    <th style=\"width: 15%;\">Área Estratégica</th>
                    <th style=\"width: 20%;\">Criterio</th>
                    <th style=\"width: 4%;\">Nro</th>
                    <th style=\"width: 22%;\">Riesgo Identificado</th>
                    <th style=\"width: 8%;\">Plazo</th>
                    <th style=\"width: 11%;\">Responsable</th>
                    <th style=\"width: 20%;\">Acción / Comentario</th>
                </tr>
            </thead>
            <tbody>
                {% for plan in challenges %}
                <tr>
                    <td style=\"font-size: 11px;\">{{ plan.areaName }}</td>
                    <td style=\"font-size: 11px;\">{{ plan.criterion }}</td>
                    <td class=\"text-center\">{{ plan.number }}</td>
                    <td style=\"font-size: 11px;\">{{ plan.risk|nl2br }}</td>
                    <td class=\"text-center\" style=\"font-size: 11px;\">{{ plan.timeframe|nl2br }}</td>
                    <td style=\"font-size: 11px;\">{{ plan.responsible|nl2br }}</td>
                    <td style=\"font-size: 11px;\">{{ plan.action|nl2br }}</td>
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
