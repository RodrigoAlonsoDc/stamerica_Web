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
                <!-- Blog Card 1 -->
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div class="card border-0 mb-2 h-100 shadow-card transition-card" id="card-titulo-trabajo" style="min-height: 100%;">
                        <figure class="snip1477 border-top" style="height: 220px; overflow: hidden;">
                            <img src="public/img/blogs/blog-1.png" alt="Montaje Electromecánico y Construcciones" style="object-fit: cover; width: 100%; height: 100%;" />
                            <a href="<?php echo constant('URL'); ?>blog_1" aria-label="Servicio AE Energy"></a>
                        </figure>
                        <div class="card-body bg-white p-4">
                            <a style="text-decoration: none;" href="<?php echo constant('URL'); ?>blog_1">
                                <h4 class="m-0 mb-2 text-center" style="color: #4156a5;">Mantenimiento Preventivo en Subestaciones</h4>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Blog Card 2 -->
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div class="card border-0 mb-2 shadow-card transition-card" id="card-titulo-trabajo" style="min-height: 100%;">
                        <figure class="snip1477 border-top" style="height: 220px; overflow: hidden;">
                            <img src="public/img/blogs/blog-2.png" alt="Análisis Termográfico" style="object-fit: cover; width: 100%; height: 100%;" />
                            <a href="<?php echo constant('URL'); ?>blog_2" aria-label="Blog Análisis Termográfico"></a>
                        </figure>
                        <div class="card-body bg-white p-4">
                            <a style="text-decoration: none;" href="<?php echo constant('URL'); ?>blog_2">
                                <h4 class="m-0 mb-2 text-center" style="color: #4156a5;">Qué hacer ante Fallas en Subestaciones</h4>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Blog Card 3 -->
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div class="card border-0 mb-2 shadow-card transition-card" style="min-height: 100%;">
                        <figure class="snip1477 border-top" style="height: 220px; overflow: hidden;">
                            <img src="public/img/blogs/blog-3.jpg" alt="Diseño de Subestaciones" style="object-fit: cover; width: 100%; height: 100%;" />
                            <a href="<?php echo constant('URL'); ?>blog_3" aria-label="Diseño Subestaciones"></a>
                        </figure>
                        <div class="card-body bg-white p-4">
                            <a style="text-decoration: none;" href="<?php echo constant('URL'); ?>blog_3">
                                <h4 class="m-0 mb-2 text-center" style="color: #4156a5;">Preventivo vs. Correctivo: ¿Cuál elegir?</h4>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Blog Card 4 -->
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div class="card border-0 mb-2 shadow-card transition-card" style="min-height: 100%;">
                        <figure class="snip1477 border-top" style="height: 220px; overflow: hidden;">
                            <img src="public/img/blogs/blog-4.jpg" alt="Pozo a Tierra" style="object-fit: cover; width: 100%; height: 100%;" />
                            <a href="<?php echo constant('URL'); ?>blog_4" aria-label="Pozo a Tierra"></a>
                        </figure>
                        <div class="card-body bg-white p-4">
                            <a style="text-decoration: none;" href="<?php echo constant('URL'); ?>blog_4">
                                <h4 class="m-0 mb-2 text-center" style="color: #4156a5;">Mantenimiento de Transformadores Secos y en Aceite</h4>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Blog Card 5 -->
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div class="card border-0 mb-2 shadow-card transition-card" style="min-height: 100%;">
                        <figure class="snip1477 border-top" style="height: 220px; overflow: hidden;">
                            <img src="public/img/blogs/blog-5.jpg" alt="Tableros Eléctricos" style="object-fit: cover; width: 100%; height: 100%;" />
                            <a href="<?php echo constant('URL'); ?>blog_5" aria-label="Tableros Eléctricos"></a>
                        </figure>
                        <div class="card-body bg-white p-4">
                            <a style="text-decoration: none;" href="<?php echo constant('URL'); ?>blog_5">
                                <h4 class="m-0 mb-2 text-center" style="color: #4156a5;">Checklist para Subestaciones Comerciales</h4>
                            </a>

                        </div>
                    </div>
                </div>

                <!-- Blog Card 6 -->
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div class="card border-0 mb-2 shadow-card transition-card" style="min-height: 100%;">
                        <figure class="snip1477 border-top" style="height: 220px; overflow: hidden;">
                            <img src="public/img/blogs/blog-6.jpg" alt="Redes Aéreas" style="object-fit: cover; width: 100%; height: 100%;" />
                            <a href="<?php echo constant('URL'); ?>blog_6" aria-label="Redes Aéreas"></a>
                        </figure>
                        <div class="card-body bg-white p-4">
                            <a style="text-decoration: none;" href="<?php echo constant('URL'); ?>blog_6">
                                <h4 class="m-0 mb-2 text-center" style="color: #4156a5;">Subestaciones Seguras en Empresas</h4>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Blog Card 7 -->
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div class="card border-0 mb-2 shadow-card transition-card" style="min-height: 100%;">
                        <figure class="snip1477 border-top" style="height: 220px; overflow: hidden;">
                            <img src="public/img/blogs/blog-7.jpg" alt="Bancos de Condensadores" style="object-fit: cover; width: 100%; height: 100%;" />
                            <a href="<?php echo constant('URL'); ?>blog_7" aria-label="Bancos Condensadores"></a>
                        </figure>
                        <div class="card-body bg-white p-4">
                            <a style="text-decoration: none;" href="<?php echo constant('URL'); ?>blog_7">
                                <h4 class="m-0 mb-2 text-center" style="color: #4156a5;">¿Cuándo Revisar tu Instalación Residencial?</h4>
                            </a>

                        </div>
                    </div>
                </div>

                <!-- Blog Card 8 -->
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div class="card border-0 mb-2 shadow-card transition-card" style="min-height: 100%;">
                        <figure class="snip1477 border-top" style="height: 220px; overflow: hidden;">
                            <img src="public/img/blogs/blog-8.jpg" alt="Medición Eléctrica" style="object-fit: cover; width: 100%; height: 100%;" />
                            <a href="<?php echo constant('URL'); ?>blog_8" aria-label="Medición Eléctrica"></a>
                        </figure>
                        <div class="card-body bg-white p-4">
                            <a style="text-decoration: none;" href="<?php echo constant('URL'); ?>blog_8">
                                <h4 class="m-0 mb-2 text-center" style="color: #4156a5;">Fallas Comunes por Falta de Mantenimiento</h4>
                            </a>

                        </div>
                    </div>
                </div>

                <!-- Blog Card 9 -->
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div class="card border-0 mb-2 shadow-card transition-card" style="min-height: 100%;">
                        <figure class="snip1477 border-top" style="height: 220px; overflow: hidden;">
                            <img src="public/img/blogs/blog-9.jpg" alt="Capacitación técnica" style="object-fit: cover; width: 100%; height: 100%;" />
                            <a href="<?php echo constant('URL'); ?>blog_9" aria-label="Capacitación Técnica"></a>
                        </figure>
                        <div class="card-body bg-white p-4">
                            <a style="text-decoration: none;" href="<?php echo constant('URL'); ?>blog_9">
                                <h4 class="m-0 mb-2 text-center" style="color: #4156a5;">Ahorro y Sostenibilidad con Buen Mantenimiento</h4>
                            </a>
                        </div>
                    </div>
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