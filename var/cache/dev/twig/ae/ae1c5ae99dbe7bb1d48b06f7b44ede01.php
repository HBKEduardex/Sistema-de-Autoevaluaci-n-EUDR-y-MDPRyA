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

/* public/contact.html.twig */
class __TwigTemplate_85d9d75103bd55d55aa7c3a1f64830eb extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/contact.html.twig"));

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
    <div class=\"card-header bg-primary text-white pt-4 pb-3 text-center\">
        <h3 class=\"fw-bold m-0\">A. Datos de la Empresa</h3>
    </div>
    <div class=\"card-body p-4 p-md-5\">
        <p class=\"text-center mb-5 text-muted\">Complete la siguiente información institucional obligatoria antes de proceder a la evaluación.</p>
        
        <form action=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_public_contact");
        yield "\" method=\"POST\">
            <div class=\"row g-4\">
                <div class=\"col-md-6\">
                    <label class=\"form-label fw-bold\">Nombre de la Empresa *</label>
                    <input type=\"text\" class=\"form-control\" name=\"companyName\" required oninvalid=\"this.setCustomValidity('Por favor, complete este campo.')\" oninput=\"this.setCustomValidity('')\">
                </div>
                <div class=\"col-md-6\">
                    <label class=\"form-label fw-bold\">Nombre Comercial</label>
                    <input type=\"text\" class=\"form-control\" name=\"commercialName\">
                </div>

                <div class=\"col-md-6\">
                    <label class=\"form-label fw-bold\">Representante Legal *</label>
                    <input type=\"text\" class=\"form-control\" name=\"legalRepresentative\" required oninvalid=\"this.setCustomValidity('Por favor, complete este campo.')\" oninput=\"this.setCustomValidity('')\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold\">Año de Fundación</label>
                    <input type=\"number\" class=\"form-control\" name=\"foundationYear\" min=\"1800\" max=\"2030\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold\">Cantidad de Socios</label>
                    <input type=\"number\" class=\"form-control\" name=\"partnersCount\" min=\"1\">
                </div>

                <div class=\"col-md-6\">
                    <label class=\"form-label fw-bold\">Teléfono de Contacto *</label>
                    <input type=\"text\" class=\"form-control\" name=\"phone\" required oninvalid=\"this.setCustomValidity('Por favor, complete este campo.')\" oninput=\"this.setCustomValidity('')\">
                </div>
                <div class=\"col-md-6\">
                    <label class=\"form-label fw-bold\">Correo Electrónico *</label>
                    <input type=\"email\" class=\"form-control\" name=\"email\" required oninvalid=\"this.setCustomValidity(this.validity.typeMismatch ? 'Por favor, ingrese un correo válido.' : 'Por favor, complete este campo.')\" oninput=\"this.setCustomValidity('')\">
                </div>

                <div class=\"col-md-6\">
                    <label class=\"form-label fw-bold\">Actividad Principal *</label>
                    <input type=\"text\" class=\"form-control\" name=\"mainActivity\" required oninvalid=\"this.setCustomValidity('Por favor, complete este campo.')\" oninput=\"this.setCustomValidity('')\">
                </div>
                <div class=\"col-md-6\">
                    <label class=\"form-label fw-bold\">Producto Principal *</label>
                    <input type=\"text\" class=\"form-control\" name=\"mainProduct\" required oninvalid=\"this.setCustomValidity('Por favor, complete este campo.')\" oninput=\"this.setCustomValidity('')\">
                </div>

                <div class=\"col-12\">
                    <label class=\"form-label fw-bold\">Otros Productos</label>
                    <input type=\"text\" class=\"form-control\" name=\"otherProducts\">
                </div>

                <div class=\"col-12\">
                    <label class=\"form-label fw-bold\">Certificaciones Vigentes</label>
                    <input type=\"text\" class=\"form-control\" name=\"certifications\" placeholder=\"Ej. Fairtrade, Orgánico...\">
                </div>

                <div class=\"col-12 mb-4\">
                    <label class=\"form-label fw-bold\">Clientes Principales</label>
                    <textarea class=\"form-control\" name=\"mainClients\" rows=\"2\"></textarea>
                </div>
            </div>

            <div class=\"d-grid mt-4\">
                <button type=\"submit\" class=\"btn btn-primary btn-lg fw-bold shadow-sm\">Guardar y Continuar a la Evaluación</button>
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
        return "public/contact.html.twig";
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
        return array (  76 => 11,  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'public_base.html.twig' %}

{% block content %}
<div class=\"card shadow-lg border-0\">
    <div class=\"card-header bg-primary text-white pt-4 pb-3 text-center\">
        <h3 class=\"fw-bold m-0\">A. Datos de la Empresa</h3>
    </div>
    <div class=\"card-body p-4 p-md-5\">
        <p class=\"text-center mb-5 text-muted\">Complete la siguiente información institucional obligatoria antes de proceder a la evaluación.</p>
        
        <form action=\"{{ path('app_public_contact') }}\" method=\"POST\">
            <div class=\"row g-4\">
                <div class=\"col-md-6\">
                    <label class=\"form-label fw-bold\">Nombre de la Empresa *</label>
                    <input type=\"text\" class=\"form-control\" name=\"companyName\" required oninvalid=\"this.setCustomValidity('Por favor, complete este campo.')\" oninput=\"this.setCustomValidity('')\">
                </div>
                <div class=\"col-md-6\">
                    <label class=\"form-label fw-bold\">Nombre Comercial</label>
                    <input type=\"text\" class=\"form-control\" name=\"commercialName\">
                </div>

                <div class=\"col-md-6\">
                    <label class=\"form-label fw-bold\">Representante Legal *</label>
                    <input type=\"text\" class=\"form-control\" name=\"legalRepresentative\" required oninvalid=\"this.setCustomValidity('Por favor, complete este campo.')\" oninput=\"this.setCustomValidity('')\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold\">Año de Fundación</label>
                    <input type=\"number\" class=\"form-control\" name=\"foundationYear\" min=\"1800\" max=\"2030\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold\">Cantidad de Socios</label>
                    <input type=\"number\" class=\"form-control\" name=\"partnersCount\" min=\"1\">
                </div>

                <div class=\"col-md-6\">
                    <label class=\"form-label fw-bold\">Teléfono de Contacto *</label>
                    <input type=\"text\" class=\"form-control\" name=\"phone\" required oninvalid=\"this.setCustomValidity('Por favor, complete este campo.')\" oninput=\"this.setCustomValidity('')\">
                </div>
                <div class=\"col-md-6\">
                    <label class=\"form-label fw-bold\">Correo Electrónico *</label>
                    <input type=\"email\" class=\"form-control\" name=\"email\" required oninvalid=\"this.setCustomValidity(this.validity.typeMismatch ? 'Por favor, ingrese un correo válido.' : 'Por favor, complete este campo.')\" oninput=\"this.setCustomValidity('')\">
                </div>

                <div class=\"col-md-6\">
                    <label class=\"form-label fw-bold\">Actividad Principal *</label>
                    <input type=\"text\" class=\"form-control\" name=\"mainActivity\" required oninvalid=\"this.setCustomValidity('Por favor, complete este campo.')\" oninput=\"this.setCustomValidity('')\">
                </div>
                <div class=\"col-md-6\">
                    <label class=\"form-label fw-bold\">Producto Principal *</label>
                    <input type=\"text\" class=\"form-control\" name=\"mainProduct\" required oninvalid=\"this.setCustomValidity('Por favor, complete este campo.')\" oninput=\"this.setCustomValidity('')\">
                </div>

                <div class=\"col-12\">
                    <label class=\"form-label fw-bold\">Otros Productos</label>
                    <input type=\"text\" class=\"form-control\" name=\"otherProducts\">
                </div>

                <div class=\"col-12\">
                    <label class=\"form-label fw-bold\">Certificaciones Vigentes</label>
                    <input type=\"text\" class=\"form-control\" name=\"certifications\" placeholder=\"Ej. Fairtrade, Orgánico...\">
                </div>

                <div class=\"col-12 mb-4\">
                    <label class=\"form-label fw-bold\">Clientes Principales</label>
                    <textarea class=\"form-control\" name=\"mainClients\" rows=\"2\"></textarea>
                </div>
            </div>

            <div class=\"d-grid mt-4\">
                <button type=\"submit\" class=\"btn btn-primary btn-lg fw-bold shadow-sm\">Guardar y Continuar a la Evaluación</button>
            </div>
        </form>
    </div>
</div>
{% endblock %}
", "public/contact.html.twig", "/var/www/html/templates/public/contact.html.twig");
    }
}
