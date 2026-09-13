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
                <img src="public/img/Servicios/8.1.webp" alt="Instalaciones eléctricas residenciales" class="img-fluid rounded w-100" style="object-fit: cover; max-height: 400px;">
            </div>

            <!-- Título -->
            <div class="col-12">
                <h1 class="mb-4" style="color: #1a1a1a;">Instalaciones Eléctricas Residenciales: ¿Cuándo es hora de hacer una revisión completa?</h1>
            </div>

            <!-- Introducción -->
            <div class="col-12 mb-4">
                <p>Las instalaciones eléctricas en viviendas suelen pasar desapercibidas hasta que surge un problema. Sin embargo, una instalación en mal estado representa un riesgo directo para la seguridad de las personas, la vida útil de los electrodomésticos y el valor del inmueble.</p>
                <p>En este artículo te explicamos en qué situaciones es recomendable realizar una revisión eléctrica completa de tu casa o departamento y qué señales de alerta debes tener en cuenta.</p>
            </div>

            <!-- Imagen secundaria -->
            <div class="col-md-6 mb-4">
                <img src="public/img/Servicios/8.2.jpg" alt="Técnico realizando revisión eléctrica" class="img-fluid rounded w-100">
            </div>

            <!-- Sección señales de alerta -->
            <div class="col-12 mb-4">
                <h4>Señales de que necesitas revisar la instalación eléctrica de tu hogar</h4>
                <ul>
                    <li><strong>Bajones de luz frecuentes:</strong> Luces que parpadean o se atenúan sin motivo aparente.</li>
                    <li><strong>Tomas calientes o con chispas:</strong> Un enchufe que se calienta o genera chispas es un riesgo inmediato.</li>
                    <li><strong>Disyuntores que se disparan constantemente:</strong> Una sobrecarga o cortocircuito puede estar ocurriendo.</li>
                    <li><strong>Cables antiguos o visibles:</strong> Instalaciones con más de 20 años o sin canaletas adecuadas.</li>
                    <li><strong>Remodelaciones recientes:</strong> Si hiciste ampliaciones o agregaste electrodomésticos, debes reevaluar la capacidad eléctrica.</li>
                    <li><strong>Olores a quemado:</strong> Un olor extraño cerca del tablero eléctrico o enchufes puede indicar un sobrecalentamiento.</li>
                </ul>
            </div>

            <!-- ¿Cuándo hacer una revisión completa? -->
            <div class="col-12 mb-4">
                <h4>¿Cuándo hacer una revisión eléctrica completa en una vivienda?</h4>
                <p>La revisión total de una instalación residencial debe realizarse en estos casos:</p>
                <ul>
                    <li>✔ Cuando el sistema eléctrico tiene más de 10 a 15 años.</li>
                    <li>✔ Al comprar una vivienda antigua o de segunda mano.</li>
                    <li>✔ Después de una sobrecarga o cortocircuito importante.</li>
                    <li>✔ Si planeas instalar equipos de alto consumo (aires acondicionados, termas, cocinas eléctricas).</li>
                    <li>✔ Cuando se detectan síntomas de deterioro en cables, llaves termomagnéticas o tomacorrientes.</li>
                </ul>
            </div>

            <!-- Revisión técnica: ¿Qué incluye? -->
            <div class="col-12 mb-4">
                <h4>¿Qué incluye una revisión profesional?</h4>
                <p>Una revisión eléctrica completa realizada por técnicos calificados debe incluir:</p>
                <ul>
                    <li>✔ Inspección del tablero eléctrico, conexiones y protecciones.</li>
                    <li>✔ Pruebas de continuidad y aislamiento en los circuitos.</li>
                    <li>✔ Verificación de tomacorrientes, puntos de luz y puesta a tierra.</li>
                    <li>✔ Medición de consumo y análisis de distribución de carga.</li>
                    <li>✔ Recomendaciones para mejorar la eficiencia y seguridad.</li>
                </ul>
            </div>

            <!-- Conclusión -->
            <div class="col-12 mb-4">
                <h4>Conclusión</h4>
                <p>Una instalación eléctrica segura y en buen estado no solo protege tu hogar, también te da tranquilidad. La revisión preventiva puede evitar accidentes, incendios, fallos de equipos y pérdidas económicas.</p>
                <p>Recuerda que una pequeña inversión hoy puede ahorrarte grandes problemas mañana.</p>
            </div>

            <!-- Llamado a la acción -->
            <div class="col-12 mt-5 p-4 bg-light rounded border shadow-sm">
                <h4 class="text-primary mb-3">¿No estás seguro del estado de tu instalación eléctrica residencial?</h4>
                <p class="mb-3">En <strong>ST América</strong> contamos con especialistas en instalaciones eléctricas residenciales. Realizamos diagnósticos, mantenimientos y actualizaciones bajo normativas técnicas.</p>
                <a href="<?php echo constant('URL'); ?>contacto" class="btn btn-primary px-4 py-2">Solicita una inspección técnica ahora</a>
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