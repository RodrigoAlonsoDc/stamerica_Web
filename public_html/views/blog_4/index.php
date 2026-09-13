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
            <div class="row">
                <!-- Imagen principal -->
                <div class="col-12 mb-4">
                    <img src="public/img/Servicios/6.1.jpg" alt="Transformadores Eléctricos: Secos y en Aceite" class="img-fluid rounded w-100" style="object-fit: cover; max-height: 400px;">
                </div>

                <!-- Título -->
                <div class="col-12">
                    <h1 class="mb-4" style="color: #1a1a1a;">Cuidados y Mantenimiento de Transformadores Eléctricos: Secos vs. en Aceite</h1>
                </div>

                <!-- Introducción -->
                <div class="col-12 mb-4">
                    <p>Los transformadores eléctricos son componentes fundamentales en las redes de distribución y subtransmisión de energía. Su correcto funcionamiento es vital para garantizar la continuidad del servicio eléctrico y la protección de equipos e instalaciones. Existen distintos tipos de transformadores, pero dos de los más utilizados son los <strong>transformadores secos</strong> y los <strong>transformadores en aceite</strong>.</p>
                    <p>En este artículo analizamos sus diferencias, necesidades de mantenimiento y los cuidados específicos que requiere cada uno para extender su vida útil y evitar fallas inesperadas.</p>
                </div>

                <!-- Imagen secundaria -->
                <div class="col-md-6 mb-4">
                    <img src="public/img/Servicios/6.2.jpg" alt="Transformador seco" class="img-fluid rounded w-100" style="object-fit: cover;">
                </div>

                <div class="col-md-6 mb-4">
                    <img src="public/img/Servicios/6.3.jpg" alt="Transformador en aceite" class="img-fluid rounded w-100" style="object-fit: cover;">
                </div>

                <!-- Contenido principal -->
                <div class="col-md-6 mb-4">
                    <h4>Transformadores Secos: Características y Mantenimiento</h4>
                    <p>Los transformadores secos no utilizan aceite para refrigerarse. En su lugar, el enfriamiento se produce a través del aire, lo que los hace más seguros en espacios cerrados y sensibles a incendios.</p>
                    <p><strong>Cuidados y mantenimiento:</strong></p>
                    <ul>
                        <li>Inspección visual periódica para detectar signos de sobrecalentamiento o corrosión.</li>
                        <li>Limpieza de bobinas y componentes para evitar acumulación de polvo o humedad.</li>
                        <li>Revisión de terminales, apriete de conexiones y verificación de aislación.</li>
                        <li>Mediciones dieléctricas y termográficas anuales.</li>
                        <li>Verificación del sistema de ventilación forzada (si aplica).</li>
                    </ul>
                </div>

                <div class="col-md-6 mb-4">
                    <h4>Transformadores en Aceite: Características y Mantenimiento</h4>
                    <p>Los transformadores en aceite utilizan un líquido dieléctrico (aceite mineral o vegetal) para aislar y enfriar internamente. Son ideales para ambientes exteriores y cargas de mayor capacidad.</p>
                    <p><strong>Cuidados y mantenimiento:</strong></p>
                    <ul>
                        <li>Análisis físico-químico y cromatográfico del aceite (DGA).</li>
                        <li>Medición de rigidez dieléctrica y contenido de humedad en el aceite.</li>
                        <li>Revisión de juntas, válvulas y niveles de aceite.</li>
                        <li>Inspección de bujes, conexiones y pararrayos.</li>
                        <li>Pruebas eléctricas periódicas: relación de transformación, resistencia de aislamiento, factor de potencia, etc.</li>
                        <li>Limpieza externa del tanque y revisión de sistema de protección.</li>
                    </ul>
                </div>

                <!-- Comparación -->
                <div class="col-12 mb-4">
                    <h4>Comparación Rápida: Seco vs. en Aceite</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center" style="background-color: #4156a5; color: white;">
                                <th>Aspecto</th>
                                <th>Seco</th>
                                <th>En Aceite</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Ubicación ideal</strong></td>
                                <td>Interiores (hospitales, edificios, industrias)</td>
                                <td>Exteriores, subestaciones, ambientes severos</td>
                            </tr>
                            <tr>
                                <td><strong>Sistema de enfriamiento</strong></td>
                                <td>Aire natural o forzado</td>
                                <td>Aceite dieléctrico</td>
                            </tr>
                            <tr>
                                <td><strong>Riesgo de incendio</strong></td>
                                <td>Bajo</td>
                                <td>Moderado (requiere monitoreo de fugas)</td>
                            </tr>
                            <tr>
                                <td><strong>Frecuencia de mantenimiento</strong></td>
                                <td>Moderada</td>
                                <td>Alta (requiere análisis de aceite regular)</td>
                            </tr>
                            <tr>
                                <td><strong>Vida útil esperada</strong></td>
                                <td>20 – 30 años</td>
                                <td>30 – 40 años</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Conclusión -->
                <div class="col-12 mb-4">
                    <h4>Conclusión</h4>
                    <p>Tanto los transformadores secos como los de aceite cumplen funciones clave en la distribución eléctrica. Elegir el adecuado depende del entorno, la capacidad requerida y los riesgos asociados.</p>
                    <p>Un mantenimiento correcto no solo extiende su vida útil, sino que también <strong>previene fallos costosos, incendios, cortes de energía y accidentes eléctricos</strong>.</p>
                    <p>Establecer un plan de mantenimiento programado y especializado es la mejor inversión para la seguridad y eficiencia energética de cualquier instalación.</p>
                </div>

                <!-- Llamado a la acción -->
                <div class="col-12 mt-5 p-4 bg-light rounded border shadow-sm">
                    <h4 class="text-primary mb-3">¿Necesitas mantener tus transformadores eléctricos en óptimas condiciones?</h4>
                    <p class="mb-3">En <strong>ST América</strong> contamos con personal técnico capacitado, herramientas certificadas y experiencia en mantenimiento integral de transformadores secos y en aceite. Atendemos instalaciones industriales, mineras, comerciales y energéticas.</p>
                    <a href="<?php echo constant('URL'); ?>contacto" class="btn btn-primary px-4 py-2">Contáctanos y solicita tu inspección técnica</a>
                </div>
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