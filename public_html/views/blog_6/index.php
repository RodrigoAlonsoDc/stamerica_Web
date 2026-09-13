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
                <img src="public/img/Servicios/7.1.jpg" alt="Subestación eléctrica en buen estado" class="img-fluid rounded w-100" style="object-fit: cover; max-height: 400px;">
            </div>

            <!-- Título -->
            <div class="col-12">
                <h1 class="mb-4" style="color: #1a1a1a;">Importancia de una Subestación en Buen Estado para la Seguridad de tu Empresa o Negocio</h1>
            </div>

            <!-- Introducción -->
            <div class="col-12 mb-4">
                <p>La subestación eléctrica es el corazón de la infraestructura energética de cualquier empresa o negocio. Su correcto funcionamiento no solo garantiza el suministro de energía, sino que es un factor clave para la <strong>seguridad, continuidad operativa y protección de activos</strong>.</p>
                <p>Descuidar su mantenimiento o permitir que opere en malas condiciones puede desencadenar riesgos graves, como fallas eléctricas, incendios o paradas no programadas que afecten la productividad y generen pérdidas económicas considerables.</p>
            </div>

            <!-- Imagen secundaria -->
            <div class="col-md-6 mb-4" style="padding-left: 50px;">
                <img src="public/img/Servicios/7.2.jpg" alt="Técnicos revisando subestación" class="img-fluid rounded w-100">
            </div>

            <!-- Beneficios de una subestación bien mantenida -->
            <div class="col-12 mb-4">
                <h4 class="mb-3">Beneficios de una Subestación en Buen Estado</h4>
                <ul>
                    <li><strong>✔ Seguridad del personal:</strong> Una subestación mantenida reduce riesgos de descargas eléctricas y accidentes laborales.</li>
                    <li><strong>✔ Continuidad operativa:</strong> Evita interrupciones inesperadas que puedan afectar la producción o los servicios.</li>
                    <li><strong>✔ Protección de equipos:</strong> Minimiza fallas en maquinaria, sistemas electrónicos o centros de datos conectados.</li>
                    <li><strong>✔ Prevención de incendios eléctricos:</strong> Un mal aislamiento o conexiones deterioradas pueden provocar incendios.</li>
                    <li><strong>✔ Cumplimiento de normativas:</strong> Asegura que la empresa opere bajo los estándares técnicos exigidos por ley.</li>
                    <li><strong>✔ Mayor vida útil:</strong> Los equipos eléctricos duran más cuando se monitorean, limpian y prueban regularmente.</li>
                </ul>
            </div>

            <!-- Riesgos de una subestación deteriorada -->
            <div class="col-12 mb-4">
                <h4 class="mb-3">¿Qué puede pasar si tu subestación está en mal estado?</h4>
                <p>Una subestación con cables deteriorados, relés descalibrados o sin pruebas periódicas es un foco de riesgo constante. Algunas consecuencias son:</p>
                <ul>
                    <li>Cortocircuitos y arcos eléctricos peligrosos.</li>
                    <li>Daños costosos en tableros, transformadores o variadores.</li>
                    <li>Parálisis operativa durante horas o días.</li>
                    <li>Multas o sanciones por incumplimiento de normativas eléctricas.</li>
                    <li>Pérdida de confianza de clientes o proveedores por fallos repetitivos.</li>
                </ul>
            </div>

            <!-- Recomendaciones -->
            <div class="col-12 mb-4">
                <h4 class="mb-3">Recomendaciones para mantener tu subestación segura</h4>
                <p>Programa <strong>mantenimientos preventivos</strong> al menos una vez al año.</p>
                <p>Realiza <strong>pruebas eléctricas y termográficas</strong> con empresas especializadas.</p>
                <p>Lleva un registro actualizado de inspecciones y reportes técnicos.</p>
                <p>Revisa los sistemas de protección (relés, interruptores, fusibles) y las conexiones a tierra.</p>
            </div>

            <!-- Conclusión -->
            <div class="col-12 mb-4">
                <h4>Conclusión</h4>
                <p>Una subestación eléctrica en buen estado no es un lujo, es una <strong>necesidad estratégica</strong> para garantizar el desarrollo continuo, seguro y eficiente de tu empresa o negocio.</p>
                <p>No esperes a que ocurra una falla crítica. Invertir hoy en el buen estado de tu sistema eléctrico es proteger tu patrimonio, tu personal y tu reputación.</p>
            </div>

            <!-- Llamado a la acción -->
            <div class="col-12 mt-5 p-4 bg-light rounded border shadow-sm">
                <h4 class="text-primary mb-3">¿Necesitas evaluar el estado de tu subestación eléctrica?</h4>
                <p class="mb-3">En <strong>ST América</strong> realizamos inspecciones técnicas, mantenimiento preventivo, correctivo y servicios especializados para asegurar que tu subestación opere bajo los más altos estándares de seguridad.</p>
                <a href="<?php echo constant('URL'); ?>contacto" class="btn btn-primary px-4 py-2">Contáctanos y protege tu empresa hoy</a>
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