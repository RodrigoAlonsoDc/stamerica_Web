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


            <!-- Título -->
            <div class="col-12">
                <h1 class="mb-4" style="color: #1a1a1a;">Checklist de Mantenimiento Preventivo para Subestaciones Eléctricas Comerciales</h1>
            </div>

            <!-- Introducción -->
            <div class="col-12 mb-4">
                <p>Las subestaciones eléctricas comerciales son esenciales para garantizar el suministro eficiente y seguro de energía en centros empresariales, malls, hospitales, edificios y grandes instalaciones. Un programa de <strong>mantenimiento preventivo</strong> no solo alarga la vida útil de los equipos, sino que reduce riesgos de fallas, pérdidas económicas y accidentes eléctricos.</p>
                <p>En este artículo, te presentamos un checklist práctico y completo para realizar el mantenimiento preventivo de una subestación eléctrica comercial.</p>
            </div>

            <!-- Checklist -->
            <div class="col-12 mb-4">
                <h4 class="mb-3">Checklist de Mantenimiento Preventivo</h4>
                <ul>
                    <li><strong>✔ Inspección visual general:</strong> Buscar signos de corrosión, fugas, sobrecalentamiento o acumulación de polvo.</li>
                    <li><strong>✔ Limpieza de celdas:</strong> Retirar suciedad, nidos, residuos y polvo en los compartimentos de media tensión.</li>
                    <li><strong>✔ Revisión de conexiones:</strong> Verificar y reapretar bornes, terminales y empalmes.</li>
                    <li><strong>✔ Medición de resistencia de aislamiento:</strong> Evaluar el estado del aislamiento en cables, interruptores y barras.</li>
                    <li><strong>✔ Pruebas de relés de protección:</strong> Comprobar su correcta operación y calibración.</li>
                    <li><strong>✔ Análisis termográfico:</strong> Detectar puntos calientes y conexiones flojas mediante cámara infrarroja.</li>
                    <li><strong>✔ Verificación del sistema de puesta a tierra:</strong> Medir resistencia de tierra y continuidad del sistema.</li>
                    <li><strong>✔ Control del sistema de ventilación:</strong> Asegurar el correcto funcionamiento de ventiladores y extractores.</li>
                    <li><strong>✔ Evaluación de transformadores:</strong> Revisión de aceite (si aplica), temperatura, nivel y posibles fugas.</li>
                    <li><strong>✔ Comprobación de pararrayos:</strong> Medir continuidad y estado de los descargadores de sobretensión.</li>
                    <li><strong>✔ Revisión de interruptores y seccionadores:</strong> Operar y verificar el estado mecánico y eléctrico de los equipos.</li>
                    <li><strong>✔ Registro de resultados:</strong> Documentar hallazgos, valores medidos y recomendaciones.</li>
                </ul>
            </div>

            <!-- Consejos adicionales -->
            <div class="col-12 mb-4">
                <h4>Consejos para un Mantenimiento Efectivo</h4>
                <p>✅ Realizar el mantenimiento preventivo al menos una vez al año.</p>
                <p>✅ Contar con personal técnico calificado y equipos certificados.</p>
                <p>✅ Programar paradas técnicas fuera del horario comercial para evitar interrupciones.</p>
                <p>✅ Usar equipos de medición calibrados (termografía, telurometro, megóhmetro, etc.).</p>
                <p>✅ Actualizar el historial de mantenimiento y monitorear tendencias.</p>
            </div>

            <!-- Conclusión -->
            <div class="col-12 mb-4">
                <h4>Conclusión</h4>
                <p>Un mantenimiento preventivo bien ejecutado no es solo una buena práctica, es una necesidad para garantizar la seguridad eléctrica, la continuidad del negocio y la eficiencia operativa de las subestaciones comerciales.</p>
                <p>Con este checklist, podrás tener un mejor control del estado de tu infraestructura eléctrica y actuar antes de que se produzcan fallas mayores.</p>
            </div>

            <!-- Llamado a la acción -->
            <div class="col-12 mt-5 p-4 bg-light rounded border shadow-sm">
                <h4 class="text-primary mb-3">¿Necesitas realizar el mantenimiento preventivo de tu subestación comercial?</h4>
                <p class="mb-3">En <strong>ST América</strong> ofrecemos servicios especializados de inspección, pruebas eléctricas, análisis termográfico y mantenimiento integral para subestaciones eléctricas de media tensión.</p>
                <a href="<?php echo constant('URL'); ?>contacto" class="btn btn-primary px-4 py-2">Contáctanos ahora y solicita tu evaluación técnica</a>
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