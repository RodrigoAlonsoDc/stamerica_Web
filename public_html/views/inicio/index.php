<?php
$metaTitle = "Ingeniería Eléctrica en Media y Alta Tensión | ST América";
$metaDescription = "Mantenimiento de subestaciones eléctricas, termovacío de aceite dieléctrico, pozo a tierra y tableros. Servicio en Lima y provincias. Cotiza hoy.";
$metaImage = "https://stamerica.com.pe/public/img/Servicios/Electricidad/PORTADA-STAMERICA-sin-texto-2.jpg";
require 'views/header.php';
?>
<!-- AOS CSS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<style>
    .letra {
        font-size: 42px;
        font-family: Teko, sans-serif;
        font-weight: 700;
        line-height: 1.2;
    }

    .letra2 {
        font-size: 26px;
        font-family: Teko, sans-serif !important;
        font-weight: 900;
        color: white;
        letter-spacing: 2px;
    }

    .btn-contacto {
        background-color: #4156a5;
        color: white;
        border: none;
        padding: 10px 24px;
        font-weight: bold;
        border-radius: 4px;
    }

    .btn-contacto:hover {
        background-color: #59e3ff;
        transition: background-color 0.4s ease, color 0.4s ease;
        color: white;
    }
</style>

<div class="container-fluid bg-registration py-5" style="background: url(public/img/Servicios/Electricidad/PORTADA-STAMERICA-sin-texto-2.jpg), no-repeat center center; background-size: cover; padding-bottom: 10rem !important; min-height: 850px;">
    <div class="container py-5" style="padding-bottom: 0rem !important; padding-top: 3rem !important; font-family: 'Open Sans', sans-serif;">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-5" style="padding-top: 15rem;">
                <div class="mb-4">
                    <p class="letra2" data-aos="fade-down" data-aos-delay="600" data-aos-duration="900"><b>BIENVENIDOS A ST AMÉRICA</b></p>
                    <h1 class="letra text-white" data-aos="fade-left" data-aos-duration="900"><span class="text-white">Soluciones Técnicas América: Ingeniería Eléctrica en Media y Alta Tensión</span></h1>
                </div>
                <a href="<?php echo constant('URL'); ?>contactanos_STAmerica" class="btn btn-contacto text-white text-decoration-none" data-aos="fade-left" data-aos-delay="900" data-aos-duration="900">
                    <i class="fa fa-envelope mr-2"></i> Contáctanos
                </a>
            </div>
            <div class="col-lg-4">
            </div>
        </div>
    </div>
</div>

<!-- SECCIÓN SERVICIOS DESTACADOS (Enlazando los 7 servicios principales) -->
<section style="background-color: white;">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-8 m-auto">
                <h2 class="h1 font-weight-bold" style="color: #4156a5;" data-aos="fade-up" data-aos-duration="900">Servicios Destacados de Ingeniería Eléctrica</h2>
                <p class="text-muted">Especialistas en montaje, mantenimiento, pruebas y asesoría técnica en Lima y todo el Perú.</p>
            </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="300" data-aos-duration="900">
            <!-- 1. Mantenimiento de Subestaciones -->
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <a href="<?php echo constant('URL'); ?>servicio_mantenimiento_subestaciones_electricas">
                        <div style="overflow: hidden;">
                            <img src="public/img/Servicios/PaginaPincipalServicios/Servicios_Generales_Subestaciones.webp" width="100%" height="220" class="card-img-top" alt="Mantenimiento de subestaciones eléctricas en Lima" style="transition: transform 0.5s ease; display: block; object-fit: cover;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'" loading="lazy" decoding="async">
                        </div>
                    </a>
                    <div class="card-body">
                        <h3 class="h5"><a href="<?php echo constant('URL'); ?>servicio_mantenimiento_subestaciones_electricas" class="text-decoration-none" style="color: #4156a5;">Mantenimiento de Subestaciones Eléctricas</a></h3>
                        <p class="card-text text-muted">Mantenimiento preventivo y correctivo en media y alta tensión, transformadores de potencia y pruebas operativas.</p>
                    </div>
                </div>
            </div>

            <!-- 2. Proyectos Electromecánicos -->
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <a href="<?php echo constant('URL'); ?>servicio_diseno_construccion_subestaciones_electricas">
                        <div style="overflow: hidden;">
                            <img src="public/img/Servicios/PaginaPincipalServicios/Proyectos_Electromecanicos.webp" width="100%" height="220" class="card-img-top" alt="Montaje de subestaciones y tendido de redes de media tensión" style="transition: transform 0.5s ease; display: block; object-fit: cover;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'" loading="lazy" decoding="async">
                        </div>
                    </a>
                    <div class="card-body">
                        <h3 class="h5"><a href="<?php echo constant('URL'); ?>servicio_diseno_construccion_subestaciones_electricas" class="text-decoration-none" style="color: #4156a5;">Proyectos Electromecánicos y Montaje de Subestaciones</a></h3>
                        <p class="card-text text-muted">Construcción y montaje llave en mano de subestaciones compactas, convencionales y tendido de redes aéreas y subterráneas.</p>
                    </div>
                </div>
            </div>

            <!-- 3. Tratamiento de Aceite Dieléctrico -->
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <a href="<?php echo constant('URL'); ?>servicio_tratamiento_aceite_dielectrico">
                        <div style="overflow: hidden;">
                            <img src="public/img/Servicios/PaginaPincipalServicios/Tratamiento_Aceite.webp" width="100%" height="220" class="card-img-top" alt="Termovacío y regeneración de aceite dieléctrico en Perú" style="transition: transform 0.5s ease; display: block; object-fit: cover;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'" loading="lazy" decoding="async">
                        </div>
                    </a>
                    <div class="card-body">
                        <h3 class="h5"><a href="<?php echo constant('URL'); ?>servicio_tratamiento_aceite_dielectrico" class="text-decoration-none" style="color: #4156a5;">Tratamiento de Aceite Dieléctrico y Termovacío</a></h3>
                        <p class="card-text text-muted">Termovacío móvil in situ, regeneración con tierra fuller y análisis fisicoquímico bajo normas ASTM.</p>
                    </div>
                </div>
            </div>

            <!-- 4. Pozo a Tierra -->
            <div class="col-12 col-md-3 col-sm-6 mb-4">
                <div class="card h-100 border-0 shadow-sm p-3 text-center">
                    <i class="fas fa-shield-alt fa-3x mb-3" style="color: #4156a5;"></i>
                    <h3 class="h6 font-weight-bold"><a href="<?php echo constant('URL'); ?>servicio_construccion_mantenimiento_puesta_tierra" class="text-decoration-none text-dark">Pozo a Tierra: Instalación y Certificado</a></h3>
                    <p class="text-muted small">Medición con telurómetro calibrado y protocolo firmado por ingeniero CIP para INDECI.</p>
                </div>
            </div>

            <!-- 5. Tableros Eléctricos -->
            <div class="col-12 col-md-3 col-sm-6 mb-4">
                <div class="card h-100 border-0 shadow-sm p-3 text-center">
                    <i class="fas fa-bolt fa-3x mb-3" style="color: #4156a5;"></i>
                    <h3 class="h6 font-weight-bold"><a href="<?php echo constant('URL'); ?>servicio_instalacion_mantenimiento_tableros_electricos" class="text-decoration-none text-dark">Mantenimiento de Tableros Eléctricos</a></h3>
                    <p class="text-muted small">Montaje, reajuste de barras y termografía infrarroja de tableros generales y de distribución.</p>
                </div>
            </div>

            <!-- 6. Banco de Condensadores -->
            <div class="col-12 col-md-3 col-sm-6 mb-4">
                <div class="card h-100 border-0 shadow-sm p-3 text-center">
                    <i class="fas fa-chart-line fa-3x mb-3" style="color: #4156a5;"></i>
                    <h3 class="h6 font-weight-bold"><a href="<?php echo constant('URL'); ?>servicio_instalacion_mantenimiento_banco_condensadores" class="text-decoration-none text-dark">Banco de Condensadores</a></h3>
                    <p class="text-muted small">Corrección del factor de potencia para evitar penalizaciones y recargos por energía reactiva.</p>
                </div>
            </div>

            <!-- 7. Pruebas Eléctricas -->
            <div class="col-12 col-md-3 col-sm-6 mb-4">
                <div class="card h-100 border-0 shadow-sm p-3 text-center">
                    <i class="fas fa-microchip fa-3x mb-3" style="color: #4156a5;"></i>
                    <h3 class="h6 font-weight-bold"><a href="<?php echo constant('URL'); ?>servicio_analisis_pruebas_electricas" class="text-decoration-none text-dark">Pruebas Eléctricas a Transformadores</a></h3>
                    <p class="text-muted small">Ensayos de aislamiento (megado), relación de transformación TTR y resistencia de devanados.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- INICIO BIENVENIDA -->
<div class="container-fluid" style="padding-block: 2rem; background-color: white !important; color: #4156a5 !important;">
    <div class="container">
        <div class="row">
            <div class="col-lg-5" data-aos="fade-right" data-aos-duration="900">
                <div class="d-flex flex-column align-items-center justify-content-center bg-primary h-100 py-5 px-3" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(public/img/Servicios/Electricidad/Diseno-Construccion-Subestaciones-Electricas.jpeg), no-repeat center center;">
                    <i class="flaticon-brickwall display-1 font-weight-normal text-secondary mb-3"></i>
                    <h4 id="counter" class="display-3 mb-3" style="color: white !important">+253</h4>
                    <h2 class="h4 m-0 text-white">Servicios Realizados</h2>
                </div>
            </div>
            <div class="col-lg-7 m-0 my-lg-5 pt-5 pb-5 pb-lg-2 pl-lg-5" data-aos="fade-left" data-aos-duration="900">
                <p class="text-primary font-weight-normal text-uppercase mb-2">EMPRESA</p>
                <h2 class="mb-4 section-title" style="color: #4156a5 !important;">Soluciones Técnicas América</h2>
                <p>¡ST América les da la bienvenida! Somos una empresa peruana especializada en ingeniería eléctrica, ofreciendo soluciones confiables, seguras y profesionales para el sector industrial, comercial y de infraestructura.</p>
                <div class="row py-2">
                    <div class="col-12 mb-3">
                        <h3 class="h5" style="color: #4156a5 !important;">Misión</h3>
                        <p class="text-muted">Proporcionar soluciones integrales de ingeniería eléctrica respaldadas por ingenieros certificados, tecnología de vanguardia y estricto apego a normas de seguridad y medio ambiente.</p>
                    </div>
                    <div class="col-12">
                        <h3 class="h5" style="color: #4156a5 !important;">Visión</h3>
                        <p class="text-muted">Consolidarnos como el referente líder en el mercado peruano en mantenimiento de subestaciones, tratamiento de fluidos dieléctricos y proyectos electromecánicos de alta exigencia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FIN BIENVENIDA -->

<!-- SECCIÓN SEGURIDAD -->
<div class="container-fluid" style="background-color: #4156a5; padding: 5%;">
    <div class="container" style="border: none !important; outline: none !important;">
        <div class="row">
            <div class="col-lg-7 mt-5 py-5 pr-lg-5" data-aos="fade-up" data-aos-duration="900">
                <p class="text-white font-weight-normal text-uppercase mb-2">SEGURIDAD Y SALUD EN EL TRABAJO</p>
                <h2 class="mb-4 section-title text-white">Gestión en la Seguridad y Calidad Operativa</h2>
                <p class="mb-4 text-white">En ST AMÉRICA la prevención de riesgos es nuestra prioridad. Nuestro sistema integrado de gestión garantiza operaciones seguras conforme a la Ley N° 29783 y estándares SSOMA internacionales.</p>
                <ul class="list-inline text-white">
                    <li class="py-1"><i class="far fa-check-square mr-3"></i>Capacitación continua en trabajos de alto riesgo eléctrico</li>
                    <li class="py-1"><i class="far fa-check-square mr-3"></i>Supervisión SSOMA permanente en campo</li>
                    <li class="py-1"><i class="far fa-check-square mr-3"></i>Equipos de protección personal (EPP) dieléctricos y antiarco certificados</li>
                </ul>
            </div>
            <div class="col-lg-5 mt-5 py-5 pr-lg-5" style="padding-bottom: 12rem !important;" data-aos="fade-up" data-aos-delay="600" data-aos-duration="900">
                <div class="frame">
                    <div class="box-galery" style="background-color: #4156a5 !important;">
                        <input type="checkbox" id="btn1">
                        <input type="checkbox" id="btn2">
                        <input type="checkbox" id="btn3">
                        <input type="checkbox" id="btn4">
                        <input type="checkbox" id="btn5">
                        <input type="checkbox" id="btn6">
                        <input type="checkbox" id="btn7">
                        <input type="checkbox" id="btn8">
                        <input type="checkbox" id="btn9">

                        <label for="btn1" class="imgs img1"></label>
                        <label for="btn2" class="imgs img2"></label>
                        <label for="btn3" class="imgs img3"></label>
                        <label for="btn4" class="imgs img4"></label>
                        <label for="btn5" class="imgs img5"></label>
                        <label for="btn6" class="imgs img6"></label>
                        <label for="btn7" class="imgs img7"></label>
                        <label for="btn8" class="imgs img8"></label>
                        <label for="btn9" class="imgs img9"></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'views/footer.php'; ?>

<!-- AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<script>
    const counter = document.getElementById("counter");
    if (counter) {
        let count = 0;
        const target = 253;
        const speed = 10;

        const updateCounter = () => {
            if (count < target) {
                count += 1;
                counter.textContent = '+' + count;
                setTimeout(updateCounter, speed);
            } else {
                counter.textContent = "+" + target;
            }
        };

        document.addEventListener("DOMContentLoaded", updateCounter);
    }
</script>