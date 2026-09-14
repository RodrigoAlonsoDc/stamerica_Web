<?php
$metaTitle = "Nosotros | ST América";
$metaDescription = "Conoce más sobre ST América, tu aliado en soluciones de ingeniería eléctrica. Nuestro compromiso es ofrecer servicios de calidad y confianza.";
$metaKeywords = "nosotros, ST América, ingeniería eléctrica, soluciones eléctricas, mantenimiento eléctrico";
?>
<meta property="og:url" content="https://www.stamerica.com.pe/">


<?php require 'views/header.php'; ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<style>
    .letra {
        font-size: 48px;
        font-family: Teko, sans-serif;
        font-weight: 700;
    }

    .letra2 {
        font-family: Teko, sans-serif;
        font-size: 18px;
        font-weight: 300;
        color: #4156a5;
    }
</style>

<!-- portada inicio-->
<section style="background-color: white;">
    <div class="container-fluid" style="margin-top: 10px; background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(public/img/Servicios/Electricidad/Portada_Mantenimiento_Subestaciones.png), no-repeat center center;
    background-size: cover;">
        <div class="container-center py-5" style="padding-top: 8rem !important;">
            <div class="row">
                <div class="col-lg-3 mb-5 mb-lg-5">
                </div>
                <div class="col-lg-9 mb-5 mb-lg-5">
                    <div class="mb-4">
                        <br><br>
                        <h1 class="letra text-white" data-aos="fade-up" data-aos-delay="600" data-aos-duration="900">NOSOTROS</h1>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- portada fiin -->


    <!-- Sección Descripción + Formulario -->
    <div class="container py-5">
        <div class="row">
            <div class="letra2 col-lg-6 mb-5" data-aos="fade-right" data-aos-duration="900">

                <h6 class="font-weight-bold" style="color: #59e3ff;">¿Quienes Somos?</h6>
                <h2 class="font-weight-bold" style="color: #4156a5;">Brindamos Servicios Integrales</h2>
                <br>
                <p>Nosotros ofrecemos Soluciones integrales y eficientes para Instalaciones Eléctricas residenciales y comerciales.
                    Con un equipo altamente capacitado, garantizamos seguridad y calidad en cada proyecto, respaldo la confianza de nuestros clientes.
                    <br>
                    ¿Que tipo de mantenimiento se realiza en las subestaciones?
                </p>
                <br>
                <ul style="padding-left: 0%;">
                    <li><i class="fas fa-check" style="color: #4156a5;"></i> Mantenimiento preventivo de subestaciones eléctricas.</li>
                    <li><i class="fas fa-check" style="color: #4156a5;"></i> Mantenimiento correctivo de subestaciones eléctricas.</li>
                    <li><i class="fas fa-check" style="color: #4156a5;"></i> Mantenimiento de transformadores eléctricos secos y en aceite.</li>
                </ul>
            </div>

            <!-- Formulario de cotización -->
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="900">
                <br><br>
                <div class="bg-light shadow rounded overflow-hidden" style="max-width: 400px; height: 350pxs;">
                    <img src="public/img/Servicios/Electricidad/stamerica_nosotros_1.jpeg" alt="Subestación 1" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
</section>
<section style="background-color: white;">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-duration="900">
                <br><br>
                <div class="bg-light shadow rounded overflow-hidden" style="max-width: 400px; height: 350pxs;">
                    <img src="public/img/Servicios/Electricidad/stamerica_nosotros_2.jpeg" alt="Subestación 1" class="img-fluid rounded">
                </div>
            </div>

            <!-- Formulario de cotización -->
            <div class="letra2 col-lg-6 mb-5" data-aos="fade-right" data-aos-duration="900">
                <br><br><br><br><br><br>
                <h6 class="font-weight-bold" style="color: #59e3ff;">¿Cuanto tiempo tenemos?</h6>
                <h2 class="font-weight-bold" style="color: #4156a5;">Nuestra Historia</h2>
                <br>
                <p>Nuestra empresa se creó en el 2017, con la finalidad de realizar servicios de consultoría en la elaboración de proyectos
                    eléctricos en media y baja tensión para la industria y el comercio.
                    <br><br>
                    Somos Especialidas en equipamiento eléctrico de media y baja tensión. Tenemos en nuestra cartera a clientes como
                    TUPEMESA, LINEA 1 METRO, FABER CASTEL entre muchos otros.
                </p>
                <br>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-4">
                <div class="titlepage">
                    <h3><span class="letra" style="color: #4156a5;">ALGUNOS DE NUESTROS CLIENTES</span></h3>
                </div>
            </div>
            <div id="clientesCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row text-center gx-5 gy-4">
                            <div class="col"><img src="public/img/rectangularLogoEmpresas/Rectangular-Tupemesa.png" class="img-fluid"></div>
                            <div class="col"><img src="public/img/rectangularLogoEmpresas/Rectangulo-FaberCastel.png" class="img-fluid"></div>
                            <div class="col"><img src="public/img/rectangularLogoEmpresas/Rectangulo-Famesa.png" class="img-fluid"></div>
                            <div class="col"><img src="public/img/rectangularLogoEmpresas/Rectangulo-Ism.png" class="img-fluid"></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row text-center gx-5 gy-4">
                            <div class="col"><img src="public/img/rectangularLogoEmpresas/Rectangulo-Maccaferri.png" class="img-fluid"></div>
                            <div class="col"><img src="public/img/rectangularLogoEmpresas/Rectangulo-Ministro.png" class="img-fluid"></div>
                            <div class="col"><img src="public/img/rectangularLogoEmpresas/Rectangulo-Molitalia.png" class="img-fluid"></div>
                            <div class="col"><img src="public/img/rectangularLogoEmpresas/Rectangulo-Ingenieros.png" class="img-fluid"></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row text-center gx-5 gy-4">
                            <div class="col"><img src="public/img/rectangularLogoEmpresas/Rectangular-Linea1.png" class="img-fluid"></div>
                            <div class="col"><img src="public/img/rectangularLogoEmpresas/Rectangular-Concyssa.png" class="img-fluid"></div>
                            <div class="col"><img src="public/img/rectangularLogoEmpresas/Rectangular-Economia.png" class="img-fluid"></div>
                            <div class="col"><img src="public/img/rectangularLogoEmpresas/Rectangular-Educacion.png" class="img-fluid"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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

<!-- AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>


<?php require 'views/footer.php'; ?>