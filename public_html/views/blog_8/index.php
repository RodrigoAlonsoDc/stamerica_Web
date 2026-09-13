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
                <img src="public/img/Servicios/9.1.webp" alt="Fallas por falta de mantenimiento en subestaciones" class="img-fluid rounded w-100" style="object-fit: cover; max-height: 400px;">
            </div>

            <!-- Título -->
            <div class="col-12">
                <h1 class="mb-4" style="color: #1a1a1a;">Casos reales de fallas por falta de mantenimiento en subestaciones: Lo que debes evitar</h1>
            </div>

            <!-- Introducción -->
            <div class="col-12 mb-4">
                <p>Las subestaciones eléctricas son el corazón del sistema energético de muchas industrias y empresas. Sin embargo, cuando no se les da el mantenimiento adecuado, los resultados pueden ser catastróficos. Desde pérdidas económicas hasta paradas de producción o incluso incendios, las consecuencias son reales y graves.</p>
                <p>En este artículo exploramos casos reales de fallas en subestaciones por falta de mantenimiento y qué lecciones puedes aprender para evitarlas.</p>
            </div>

            <!-- Caso 1 -->
            <div class="col-12 mb-4">
                <h4>Caso 1: Incendio por acumulación de polvo en celdas de media tensión</h4>
                <p>Una fábrica textil sufrió una pérdida total en una de sus plantas luego de que un cortocircuito se produjera por acumulación de polvo y pelusa dentro de las celdas eléctricas. Las tareas de limpieza nunca se habían programado, y los sistemas de protección no respondieron a tiempo.</p>
                <p><strong>Lección:</strong> Las inspecciones periódicas y la limpieza preventiva pueden evitar este tipo de tragedias.</p>
            </div>

            <!-- Imagen intermedia -->
            <div class="col-md-6 mb-4">
                <img src="public/img/Servicios/9.2.jpg" alt="Acumulación de polvo en subestaciones" class="img-fluid rounded w-100">
            </div>
            <div class="col-md-6 mb-4">
                <img src="public/img/Servicios/9.3.webp" alt="Consecuencias de falla eléctrica" class="img-fluid rounded w-100">
            </div>

            <!-- Caso 2 -->
            <div class="col-12 mb-4">
                <h4>Caso 2: Pérdida de producción por fallo en transformador</h4>
                <p>Una planta de alimentos reportó una pérdida de más de $40,000 USD debido a la interrupción total de operaciones tras un fallo en su transformador principal. La causa: niveles bajos de aceite dieléctrico que nunca fueron monitoreados.</p>
                <p><strong>Lección:</strong> El mantenimiento predictivo, como la revisión del aceite en transformadores, es fundamental para evitar paradas no programadas.</p>
            </div>

            <!-- Caso 3 -->
            <div class="col-12 mb-4">
                <h4>Caso 3: Falla en interruptores por oxidación</h4>
                <p>Una empresa minera ubicada en zona costera experimentó una falla en su sistema de distribución tras la oxidación de interruptores de maniobra. Nunca se realizó mantenimiento preventivo ni se aplicaron productos anticorrosivos.</p>
                <p><strong>Lección:</strong> Las condiciones ambientales deben tenerse en cuenta al definir los planes de mantenimiento.</p>
            </div>

            <!-- Consecuencias comunes -->
            <div class="col-12 mb-4">
                <h4>Consecuencias comunes por falta de mantenimiento</h4>
                <ul>
                    <li>Paradas inesperadas de producción.</li>
                    <li>Costos elevados por reparaciones de emergencia.</li>
                    <li>Riesgos de incendios eléctricos.</li>
                    <li>Daños irreversibles en transformadores o relés de protección.</li>
                    <li>Pérdida de confianza por parte de clientes o socios comerciales.</li>
                </ul>
            </div>

            <!-- Recomendaciones -->
            <div class="col-12 mb-4">
                <h4>¿Cómo evitar estas fallas?</h4>
                <ul>
                    <li>Establecer un programa de mantenimiento preventivo anual.</li>
                    <li>Realizar análisis termográficos y pruebas dieléctricas periódicas.</li>
                    <li>Capacitar al personal de mantenimiento interno.</li>
                    <li>Llevar un historial de revisiones, reparaciones y repuestos.</li>
                    <li>Contratar especialistas certificados para evaluaciones detalladas.</li>
                </ul>
            </div>

            <!-- Conclusión -->
            <div class="col-12 mb-4">
                <h4>Conclusión</h4>
                <p>No se trata de si ocurrirá una falla, sino de cuándo y con qué impacto. La mayoría de fallas en subestaciones pueden preverse y evitarse con un buen plan de mantenimiento.</p>
                <p>Ignorar el estado de tu sistema eléctrico puede significar poner en riesgo a tus trabajadores, tu inversión y la continuidad de tus operaciones.</p>
            </div>

            <!-- Llamado a la acción -->
            <div class="col-12 mt-5 p-4 bg-light rounded border shadow-sm">
                <h4 class="text-primary mb-3">¿Tus equipos eléctricos están en riesgo?</h4>
                <p class="mb-3">En <strong>ST América</strong> ayudamos a empresas e industrias a prevenir fallas graves con programas de mantenimiento preventivo, predictivo y correctivo de subestaciones eléctricas. Evaluamos tu situación actual y proponemos soluciones integrales.</p>
                <a href="<?php echo constant('URL'); ?>contacto" class="btn btn-primary px-4 py-2">Contáctanos antes de que ocurra una falla</a>
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