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
                <div class="col-12 mb-4">
                    <img src="public/img/Servicios/5.1.jpg" alt="Diferencias entre mantenimiento preventivo y correctivo" class="img-fluid rounded w-100" style="object-fit: cover; max-height: 400px;">
                </div>

                <!-- Título -->
                <div class="col-12">
                    <h1 class="mb-4" style="color: #1a1a1a;">Diferencias entre Mantenimiento Preventivo y Correctivo en Instalaciones Eléctricas</h1>
                </div>

                <!-- Introducción -->
                <div class="col-12 mb-4">
                    <p>Las instalaciones eléctricas, ya sean industriales, comerciales o residenciales, requieren cuidados permanentes para funcionar de forma segura y eficiente. Entre las estrategias de conservación más importantes se encuentran el <strong>mantenimiento preventivo</strong> y el <strong>mantenimiento correctivo</strong>. Aunque ambos son fundamentales, cumplen funciones distintas y se aplican en diferentes momentos.</p>
                    <p>En este artículo te explicamos en detalle las diferencias, ventajas y aplicaciones de cada uno para que puedas tomar decisiones informadas en la gestión de tu sistema eléctrico.</p>
                </div>

                <!-- Imagen secundaria -->
                <div class="col-md-6 mb-4">
                    <img src="public/img/Servicios/5.2.jpeg" alt="Comparación entre mantenimiento preventivo y correctivo" class="img-fluid rounded w-100" style="object-fit: cover;">
                </div>

                <!-- Contenido principal -->
                <div class="col-md-6 mb-4">
                    <h4>¿Qué es el mantenimiento preventivo?</h4>
                    <p>Es un conjunto de inspecciones, pruebas y ajustes realizados de forma periódica para anticipar fallas. Su objetivo es <strong>garantizar la continuidad del servicio eléctrico y reducir riesgos</strong>.</p>
                    <p>Incluye tareas como:</p>
                    <ul>
                        <li>Verificación de conexiones y terminales.</li>
                        <li>Limpieza de tableros y componentes.</li>
                        <li>Medición de resistencia de aislamiento.</li>
                        <li>Análisis termográfico de puntos críticos.</li>
                        <li>Pruebas a transformadores, relés y protecciones.</li>
                    </ul>
                </div>

                <!-- Otra sección -->
                <div class="col-md-6 mb-4">
                    <h4>¿Qué es el mantenimiento correctivo?</h4>
                    <p>Se realiza cuando ya ocurrió una falla o daño. Su función es <strong>restaurar el funcionamiento de la instalación</strong> lo antes posible.</p>
                    <p>Incluye:</p>
                    <ul>
                        <li>Reemplazo de componentes defectuosos.</li>
                        <li>Reparación de líneas, tableros o protecciones.</li>
                        <li>Diagnóstico de la causa de la falla.</li>
                        <li>Pruebas para validar la reparación antes de reenergizar.</li>
                    </ul>
                </div>

                <!-- Tabla comparativa -->
                <div class="col-12 mb-4">
                    <h4>Comparación entre Mantenimiento Preventivo y Correctivo</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center" style="background-color: #4156a5; color: white;">
                                <th>Aspecto</th>
                                <th>Preventivo</th>
                                <th>Correctivo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Momento de ejecución</strong></td>
                                <td>Antes de que ocurra una falla</td>
                                <td>Después de una falla</td>
                            </tr>
                            <tr>
                                <td><strong>Objetivo</strong></td>
                                <td>Evitar interrupciones</td>
                                <td>Restaurar el servicio</td>
                            </tr>
                            <tr>
                                <td><strong>Frecuencia</strong></td>
                                <td>Periódica (mensual, semestral, anual)</td>
                                <td>Eventual, según necesidad</td>
                            </tr>
                            <tr>
                                <td><strong>Costo</strong></td>
                                <td>Moderado y planificado</td>
                                <td>Alto e imprevisto</td>
                            </tr>
                            <tr>
                                <td><strong>Riesgos</strong></td>
                                <td>Bajos, controlados</td>
                                <td>Altos: paros, daños, accidentes</td>
                            </tr>
                            <tr>
                                <td><strong>Ejemplos</strong></td>
                                <td>Mediciones periódicas, limpieza de celdas</td>
                                <td>Reparación de transformador quemado</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Conclusión -->
                <div class="col-12 mb-4">
                    <h4>Conclusión</h4>
                    <p>Ambos tipos de mantenimiento son fundamentales, pero el mantenimiento preventivo es clave para prolongar la vida útil de los equipos, reducir paradas no programadas y garantizar la seguridad eléctrica.</p>
                    <p>El mantenimiento correctivo debe verse como una respuesta inmediata, pero no debe ser la norma. Las instalaciones que invierten en prevención sufren menos fallas, optimizan sus recursos y evitan emergencias costosas.</p>
                </div>

                <!-- Llamado a la acción -->
                <div class="col-12 mt-5 p-4 bg-light rounded border shadow-sm">
                    <h4 class="text-primary mb-3">¿Deseas mantener tus instalaciones eléctricas seguras y operativas?</h4>
                    <p class="mb-3">En <strong>ST América</strong> diseñamos planes de mantenimiento eléctrico personalizados, tanto preventivo como correctivo. Contamos con técnicos especializados, equipos certificados y experiencia en entornos industriales y comerciales.</p>
                    <a href="<?php echo constant('URL'); ?>contacto" class="btn btn-primary px-4 py-2">Contáctanos para una asesoría técnica</a>
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