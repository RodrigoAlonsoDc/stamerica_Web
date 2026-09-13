<?php
$metaTitle = "Blog | ST América";
$metaDescription = "Blog de ST América, donde compartimos noticias, consejos y artículos sobre alquiler de maquinaria y equipos de construcción.";
$metaKeywords = "blog, ST América, alquiler de maquinaria, equipos de construcción";
?>

<?php require 'views/header.php'; ?>

<style>
    .shadow-card {
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        /* sombra suave */
        border-radius: 8px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .transition-card:hover {
        transform: scale(1.03);
        /* efecto zoom */
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        /* sombra más fuerte al pasar el mouse */
    }
</style>

<div class="uno">
    <div class="container-fluid bg-secondary py-5 d-flex align-items-center" style="
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('public/img/Servicios/ServiciosCiviles.png');
        background-size: cover;
        background-position: center 2%;
        background-repeat: no-repeat;
        min-height: 500px;
    ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <br><br><br><br><br>
                    <h2 class="text-white">NUESTROS ARTÍCULOS</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Blog Section Start -->
<div class="container py-5">
    <br><br>
    <div class="row">
        <!-- Blog Entries Left -->
        <div class="col-lg-10">
            <!-- Imagen principal -->
            <div class="col-12 mb-4">
                <img src="public/img/Servicios/10.1.png" alt="Mantenimiento eléctrico sostenible" class="img-fluid rounded w-100" style="object-fit: cover; max-height: 400px;">
            </div>
            <!-- Título -->
            <div class="col-12">
                <h1 class="mb-4" style="color: #1a1a1a;">Cómo un mantenimiento eléctrico eficiente reduce costos y mejora la sostenibilidad energética</h1>
            </div>
            <!-- Introducción -->
            <div class="col-12 mb-4">
                <p>El mantenimiento eléctrico eficiente no solo prolonga la vida útil de los equipos, sino que también puede generar un ahorro significativo en consumo energético, prevenir fallas costosas y contribuir a la sostenibilidad ambiental de una empresa. En un entorno donde la eficiencia energética es clave, aplicar buenas prácticas de mantenimiento puede marcar la diferencia.</p>
            </div>
            <!-- Beneficio 1 -->
            <div class="col-12 mb-4">
                <h4>Menor consumo de energía</h4>
                <p>Un sistema eléctrico bien mantenido opera con mayor eficiencia. Por ejemplo, una conexión floja o una mala calidad de aislamiento pueden generar pérdidas de energía innecesarias. Detectar y corregir estos puntos mejora el rendimiento de todo el sistema, disminuyendo el consumo eléctrico mes a mes.</p>
            </div>
            <!-- Imagen ilustrativa -->
            <div class="col-md-6 mb-4">
                <img src="public/img/Servicios/10.2.jpeg" alt="Reducción del consumo eléctrico" class="img-fluid rounded w-100">
            </div>
            <div class="col-md-6 mb-4">
                <img src="public/img/Servicios/10.3.jpg" alt="Equipos revisados energéticamente" class="img-fluid rounded w-100">
            </div>
            <!-- Beneficio 2 -->
            <div class="col-12 mb-4">
                <h4>Reducción de costos operativos</h4>
                <p>Un mantenimiento eficiente reduce las fallas inesperadas que suelen ser más costosas por reparaciones de emergencia, compra de repuestos urgentes y paradas no programadas de producción. Además, evita sanciones por incumplimientos normativos en instalaciones eléctricas críticas.</p>
            </div>
            <!-- Beneficio 3 -->
            <div class="col-12 mb-4">
                <h4>Aporte a la sostenibilidad</h4>
                <p>Menos consumo energético significa menor demanda de recursos fósiles. Empresas que optimizan su eficiencia eléctrica reducen su huella de carbono, lo que mejora su reputación, permite certificaciones ambientales y responde a exigencias de responsabilidad social empresarial (RSE).</p>
            </div>
            <!-- Beneficio 4 -->
            <div class="col-12 mb-4">
                <h4>Diagnósticos predictivos: clave para anticiparse</h4>
                <p>El mantenimiento predictivo mediante análisis termográficos, medición de armónicos o pruebas dieléctricas ayuda a anticipar fallos antes de que ocurran. Esto permite planificar intervenciones y reducir desperdicios energéticos por equipos defectuosos o mal calibrados.</p>
            </div>
            <!-- Listado de buenas prácticas -->
            <div class="col-12 mb-4">
                <h4>Buenas prácticas para un mantenimiento eficiente y sostenible</h4>
                <ul>
                    <li>Programar mantenimientos preventivos periódicos.</li>
                    <li>Verificar el estado de interruptores, relés, transformadores y tableros.</li>
                    <li>Realizar análisis termográficos para detectar puntos calientes.</li>
                    <li>Medir el consumo eléctrico por área o equipo para identificar fugas energéticas.</li>
                    <li>Renovar equipos antiguos por sistemas de mayor eficiencia energética.</li>
                </ul>
            </div>
            <!-- Conclusión -->
            <div class="col-12 mb-4">
                <h4>Conclusión</h4>
                <p>Un sistema eléctrico en buen estado no solo evita fallas, sino que también reduce significativamente los costos operativos y refuerza el compromiso de una empresa con el medio ambiente. Invertir en mantenimiento eléctrico eficiente es invertir en sostenibilidad, continuidad operativa y ahorro económico.</p>
            </div>

            <!-- Llamado a la acción -->
            <div class="col-12 mt-5 p-4 bg-light rounded border shadow-sm">
                <h4 class="text-primary mb-3">¿Tu empresa está desperdiciando energía sin saberlo?</h4>
                <p class="mb-3">En <strong>ST América</strong> realizamos diagnósticos energéticos, mantenimientos integrales y actualizaciones de sistemas eléctricos para garantizar que tu empresa sea más eficiente, segura y sostenible.</p>
                <a href="<?php echo constant('URL'); ?>contacto" class="btn btn-primary px-4 py-2">Contáctanos para una evaluación energética</a>
            </div>
        </div>
        <!-- Sidebar Right -->
        <div class="col-lg-2">
            <div class="mb-5">
                <div class="accordion" id="accordionArchive">
                    <div class="card border-0 mb-2 shadow-sm rounded">
                        <div class="card-header p-0" id="headingJuly">
                            <h3 class="mb-0">
                                <button class="btn btn-block text-left px-3 py-2 font-weight-bold text-light collapsed border-0" type="button" data-toggle="collapse" data-target="#collapseJuly" aria-expanded="true" aria-controls="collapseJuly"
                                    style="background-color: #4156a5">
                                    <i class="far fa-calendar-alt mr-2 text-light"></i> Julio 2025
                                </button>
                            </h3>
                        </div>
                        <div id="collapseJuly" class="collapse show" aria-labelledby="headingJuly" data-parent="#accordionArchive">
                            <div class="card-body py-2 px-3">
                                <ul class="list-unstyled" style="width: 100%;">
                                    <li class="mb-2"><a href="<?php echo constant('URL'); ?>blog_1" class="text-primary">Mantenimiento Preventivo en Subestaciones</a></li>
                                    <li class="mb-2"><a href="<?php echo constant('URL'); ?>blog_2" class="text-primary">Qué hacer ante Fallas en Subestaciones</a></li>
                                    <li class="mb-2"><a href="<?php echo constant('URL'); ?>blog_3" class="text-primary">Preventivo vs. Correctivo: ¿Cuál elegir?</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Junio -->
                    <div class="card border-0 mb-2 shadow-sm rounded">
                        <div class="card-header p-0" id="headingJune">
                            <h3 class="mb-0">
                                <button class="btn btn-block text-left px-3 py-2 font-weight-bold text-light collapsed border-0" type="button" data-toggle="collapse" data-target="#collapseJune" aria-expanded="false" aria-controls="collapseJune" style="background-color: #4156a5">
                                    <i class="far fa-calendar-alt mr-2 text-light"></i> Junio 2025
                                </button>
                            </h3>
                        </div>
                        <div id="collapseJune" class="collapse" aria-labelledby="headingJune" data-parent="#accordionArchive">
                            <div class="card-body py-2 px-3">
                                <ul class="list-unstyled" style="width: 100%;">
                                    <li class="mb-2"><a href="<?php echo constant('URL'); ?>blog_4" class="text-primary">Mantenimiento de Transformadores Secos y en Aceite</a></li>
                                    <li class="mb-2"><a href="<?php echo constant('URL'); ?>blog_5" class="text-primary">Checklist para Subestaciones Comerciales</a></li>
                                    <li class="mb-2"><a href="<?php echo constant('URL'); ?>blog_6" class="text-primary">Subestaciones Seguras en Empresas</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Mayo -->
                    <div class="card border-0 mb-2 shadow-sm rounded">
                        <div class="card-header p-0" id="headingMay">
                            <h3 class="mb-0">
                                <button class="btn btn-block text-left px-3 py-2 font-weight-bold text-light collapsed border-0" type="button" data-toggle="collapse" data-target="#collapseMay" aria-expanded="false" aria-controls="collapseMay" style="background-color: #4156a5">
                                    <i class="far fa-calendar-alt mr-2 text-light"></i> Mayo 2025
                                </button>
                            </h3>
                        </div>
                        <div id="collapseMay" class="collapse" aria-labelledby="headingMay" data-parent="#accordionArchive">
                            <div class="card-body py-2 px-3">
                                <ul class="list-unstyled" style="width: 100%;">
                                    <li class="mb-2"><a href="<?php echo constant('URL'); ?>blog_7" class="text-primary">Cuándo Revisar tu Instalación Residencial</a></li>
                                    <li class="mb-2"><a href="<?php echo constant('URL'); ?>blog_8" class="text-primary">Fallas Comunes por Falta de Mantenimiento</a></li>
                                    <li class="mb-2"><a href="<?php echo constant('URL'); ?>blog_9" class="text-primary">Ahorro y Sostenibilidad con Buen Mantenimiento</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Section End -->

<style>
    #clientesCarousel {
        max-width: 100%;
        padding: 0 40px;
    }

    .carousel-item {
        transition: transform 1.5s ease-in-out;
    }

    .carousel-item img {
        max-height: 220px;
        object-fit: contain;
        padding: 20px 30px;
    }

    .carousel-item .row {
        justify-content: center;
        align-items: center;
    }

    .carousel-control-prev,
    .carousel-control-next {
        display: none;
    }

    .text-center h3 {
        font-size: 2.5rem;
    }

    .product-action p {
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.4s ease, visibility 0.4s ease;
    }

    .product-action:hover p {
        opacity: 1;
        visibility: visible;
    }

    .responsive-text {
        font-size: clamp(0.9rem, 1.5vw, 1.1rem);
        line-height: 1.6;
        padding: 10px;
        word-wrap: break-word;
        text-align: left;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var myCarousel = document.querySelector('#clientesCarousel');
        var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 5000,
            ride: 'carousel',
            pause: false,
            wrap: true
        });
    });
</script>







<?php require 'views/footer.php'; ?>