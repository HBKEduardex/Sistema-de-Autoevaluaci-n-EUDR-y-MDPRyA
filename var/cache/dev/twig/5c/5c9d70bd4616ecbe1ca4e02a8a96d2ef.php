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

/* public_base.html.twig */
class __TwigTemplate_2be289c7b4b64c7eaa168f1094c0c60d extends Template
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
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public_base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <!-- Bootstrap CSS -->
    <link href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <style>
        body { 
            background-color: #f8f9fa; 
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }
        
        /* Contenedor del Carrusel de Fondo */
        #bg-carousel {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: -1;
            background-color: #343a40;
            overflow: hidden;
        }
        #bg-carousel::after {
            content: \"\";
            position: absolute;
            top: 0; 
            left: 0; 
            width: 100%; 
            height: 100%;
            background: rgba(0, 0, 0, 0.55); /* Capa oscura para estética */
            z-index: 1;
        }
        .bg-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition: opacity 1.5s ease-in-out;
        }
        .bg-slide.active {
            opacity: 1;
        }

        /* Ajuste del contenedor principal para que sea legible sobre el fondo */
        .public-container { 
            max-width: 900px; 
            margin: 0 auto; 
            margin-top: 50px; 
            margin-bottom: 50px;
            position: relative;
            z-index: 1;
        }
        .institutional-header { 
            text-align: center; 
            margin-bottom: 40px; 
            color: white;
            text-shadow: 0 2px 10px rgba(0,0,0,0.5);
        }
        .institutional-header h2 { 
            color: #ffffff !important; 
            font-weight: 800; 
            letter-spacing: -0.5px;
        }
        .institutional-header p { 
            color: #e2e8f0 !important; 
            font-weight: 500;
        }
    </style>
</head>
<body>
    <!-- Contenedor del fondo animado -->
    <div id=\"bg-carousel\"></div>
    <div class=\"container public-container\">
        <div class=\"institutional-header\">
            <h2 class=\"text-primary fw-bold\">Viceministerio de Comercio y Logística Interna</h2>
            <p class=\"text-muted fs-5\">Sistema de Autoevaluación - Reglamento EUDR</p>
        </div>
        
        <main>
            ";
        // line 89
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 90
        yield "        </main>
        
        <footer class=\"mt-5 text-center text-muted small pb-4\">
            &copy; 2026 VCLI. Todos los derechos reservados.
        </footer>
    </div>
    ";
        // line 96
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 97
        yield "    
    <script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        const bgFolder = \"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/backgrounds"), "html", null, true);
        yield "/\";
        const maxImagesToTry = 20;
        const carousel = document.getElementById('bg-carousel');

        function appendSlide(src, isActive) {
            const div = document.createElement('div');
            div.className = 'bg-slide' + (isActive ? ' active' : '');
            div.style.backgroundImage = 'url(\"' + src + '\")';
            carousel.appendChild(div);
        }

        function startTimeBasedCarousel(validImages) {
            let startTime = sessionStorage.getItem('bg_start_time');
            if (!startTime) {
                startTime = Date.now();
                sessionStorage.setItem('bg_start_time', startTime);
            }

            // Limpiamos el carrusel para evitar duplicados del cargador inicial
            carousel.innerHTML = '';
            validImages.forEach((src) => appendSlide(src, false));

            function updateSlide() {
                const elapsed = Date.now() - parseInt(startTime);
                const current = Math.floor(elapsed / 30000) % validImages.length;
                
                const slides = document.querySelectorAll('.bg-slide');
                slides.forEach((s, idx) => {
                    if (idx === current) {
                        s.classList.add('active');
                    } else {
                        s.classList.remove('active');
                    }
                });
            }

            updateSlide(); // Ejecutar inmediatamente
            setInterval(updateSlide, 1000); // Revisar cada segundo para la transición exacta
        }

        let storedImages = sessionStorage.getItem('bg_images');
        if (storedImages) {
            startTimeBasedCarousel(JSON.parse(storedImages));
        } else {
            let validImages = [];
            function checkImage(index) {
                if (index > maxImagesToTry) {
                    if (validImages.length > 0) {
                        sessionStorage.setItem('bg_images', JSON.stringify(validImages));
                        startTimeBasedCarousel(validImages);
                    }
                    return;
                }
                const imgPath = bgFolder + index + '.jpg?v=2';
                const img = new Image();
                img.onload = function() {
                    validImages.push(imgPath);
                    if (validImages.length === 1) {
                        // Mostrar la primera imagen instantáneamente mientras carga el resto
                        appendSlide(imgPath, true);
                    }
                    checkImage(index + 1);
                };
                img.onerror = function() {
                    checkImage(index + 1);
                };
                img.src = imgPath;
            }
            checkImage(1);
        }
    });
    </script>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Autoevaluación EUDR";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 89
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 96
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "public_base.html.twig";
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
        return array (  277 => 96,  261 => 89,  244 => 6,  161 => 100,  156 => 97,  154 => 96,  146 => 90,  144 => 89,  60 => 8,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Autoevaluación EUDR{% endblock %}</title>
    <!-- Bootstrap CSS -->
    <link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <style>
        body { 
            background-color: #f8f9fa; 
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }
        
        /* Contenedor del Carrusel de Fondo */
        #bg-carousel {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: -1;
            background-color: #343a40;
            overflow: hidden;
        }
        #bg-carousel::after {
            content: \"\";
            position: absolute;
            top: 0; 
            left: 0; 
            width: 100%; 
            height: 100%;
            background: rgba(0, 0, 0, 0.55); /* Capa oscura para estética */
            z-index: 1;
        }
        .bg-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition: opacity 1.5s ease-in-out;
        }
        .bg-slide.active {
            opacity: 1;
        }

        /* Ajuste del contenedor principal para que sea legible sobre el fondo */
        .public-container { 
            max-width: 900px; 
            margin: 0 auto; 
            margin-top: 50px; 
            margin-bottom: 50px;
            position: relative;
            z-index: 1;
        }
        .institutional-header { 
            text-align: center; 
            margin-bottom: 40px; 
            color: white;
            text-shadow: 0 2px 10px rgba(0,0,0,0.5);
        }
        .institutional-header h2 { 
            color: #ffffff !important; 
            font-weight: 800; 
            letter-spacing: -0.5px;
        }
        .institutional-header p { 
            color: #e2e8f0 !important; 
            font-weight: 500;
        }
    </style>
</head>
<body>
    <!-- Contenedor del fondo animado -->
    <div id=\"bg-carousel\"></div>
    <div class=\"container public-container\">
        <div class=\"institutional-header\">
            <h2 class=\"text-primary fw-bold\">Viceministerio de Comercio y Logística Interna</h2>
            <p class=\"text-muted fs-5\">Sistema de Autoevaluación - Reglamento EUDR</p>
        </div>
        
        <main>
            {% block content %}{% endblock %}
        </main>
        
        <footer class=\"mt-5 text-center text-muted small pb-4\">
            &copy; 2026 VCLI. Todos los derechos reservados.
        </footer>
    </div>
    {% block javascripts %}{% endblock %}
    
    <script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        const bgFolder = \"{{ asset('images/backgrounds') }}/\";
        const maxImagesToTry = 20;
        const carousel = document.getElementById('bg-carousel');

        function appendSlide(src, isActive) {
            const div = document.createElement('div');
            div.className = 'bg-slide' + (isActive ? ' active' : '');
            div.style.backgroundImage = 'url(\"' + src + '\")';
            carousel.appendChild(div);
        }

        function startTimeBasedCarousel(validImages) {
            let startTime = sessionStorage.getItem('bg_start_time');
            if (!startTime) {
                startTime = Date.now();
                sessionStorage.setItem('bg_start_time', startTime);
            }

            // Limpiamos el carrusel para evitar duplicados del cargador inicial
            carousel.innerHTML = '';
            validImages.forEach((src) => appendSlide(src, false));

            function updateSlide() {
                const elapsed = Date.now() - parseInt(startTime);
                const current = Math.floor(elapsed / 30000) % validImages.length;
                
                const slides = document.querySelectorAll('.bg-slide');
                slides.forEach((s, idx) => {
                    if (idx === current) {
                        s.classList.add('active');
                    } else {
                        s.classList.remove('active');
                    }
                });
            }

            updateSlide(); // Ejecutar inmediatamente
            setInterval(updateSlide, 1000); // Revisar cada segundo para la transición exacta
        }

        let storedImages = sessionStorage.getItem('bg_images');
        if (storedImages) {
            startTimeBasedCarousel(JSON.parse(storedImages));
        } else {
            let validImages = [];
            function checkImage(index) {
                if (index > maxImagesToTry) {
                    if (validImages.length > 0) {
                        sessionStorage.setItem('bg_images', JSON.stringify(validImages));
                        startTimeBasedCarousel(validImages);
                    }
                    return;
                }
                const imgPath = bgFolder + index + '.jpg?v=2';
                const img = new Image();
                img.onload = function() {
                    validImages.push(imgPath);
                    if (validImages.length === 1) {
                        // Mostrar la primera imagen instantáneamente mientras carga el resto
                        appendSlide(imgPath, true);
                    }
                    checkImage(index + 1);
                };
                img.onerror = function() {
                    checkImage(index + 1);
                };
                img.src = imgPath;
            }
            checkImage(1);
        }
    });
    </script>
</body>
</html>
", "public_base.html.twig", "/var/www/html/templates/public_base.html.twig");
    }
}
