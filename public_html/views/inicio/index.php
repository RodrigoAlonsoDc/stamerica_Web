<?php
$metaTitle = "Servicios de Ingeniería Eléctrica | ST América";
$metaDescription = "Alquiler de equipos en ST América, ideal para trabajos de construcción y remodelación. Equipos de seguridad y medición disponibles con entrega inmediata.";
$metaKeywords = "equipos en alquiler, alquiler de equipos, equipos de seguridad, alquiler de equipos de seguridad, st américa";
require 'views/header.php';
?>
<!-- AOS CSS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<style>
    .letra {
        font-size: 48px;
        font-family: Teko, sans-serif;
        font-weight: 700;
    }

    .letra2 {
        font-size: 30px;
        font-family: Teko, sans-serif !important;
        font-weight: 900;
        color: white
    }

    .btn-contacto {
        background-color: #4156a5;
        color: white;
    }

    .btn-contacto:hover {
        background-color: #59e3ff;
        transition: background-color 1s ease, color 1s ease;
        color: white;
    }
</style>

<div class="container-fluid bg-registration py-5" style="background:  url(public/img/Servicios/Electricidad/PORTADA-STAMERICA-sin-texto-2.jpg), no-repeat center center;
        background-size: cover;     padding-bottom: 10rem !important; min-height: 900px;">
    <div class="container py-5" style="padding-bottom: 0rem !important; padding-top: 3rem !important; font-family: 'Open Sans', sans-serif;">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-5" style="padding-top: 17rem;">
                <div class="mb-4">
                    <!-- <br><br><br><br><br><br><br> -->
                    <h6 class="letra2" data-aos="fade-down" data-aos-delay="600" data-aos-duration="900"><b>BIENVENIDOS A STAMERICA</b></h6>
                    <h1 class="letra text-white" data-aos="fade-left" data-aos-duration="900"><span class="text-white">ENERGÍA, SOLUCIONES ELÉCTRICAS</span></h1>
                </div>
                <button class="btn-contacto" data-aos="fade-left" data-aos-delay="900" data-aos-duration="900">
                    <a href="<?php echo constant('URL'); ?>contactanos_STAmerica" class="text-white">
                        Contáctanos
                    </a>
                </button>
            </div>
            <div class="col-lg-4">
            </div>
        </div>
    </div>
</div>

<section style="background-color: white;">
    <br><br>
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto" style="flex: 0 0 100% !important; max-width: 70% !important;">
                <h1 class="h1" style="color: #4156a5;" data-aos="fade-up" data-aos-duration="900">Servicios Destacados</h1>
            </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="600" data-aos-duration="900">
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <a href="<?php echo constant('URL'); ?>servicio_mantenimiento_subestaciones_electricas">
                        <div style="overflow: hidden;">
                            <img src="public/img/Servicios/PaginaPincipalServicios/Servicios_Generales_Subestaciones.webp" width="100%" height="100%" class="card-img-top" alt="..." style="transition: transform 1s ease; display: block;"
                                onmouseover="this.style.transform='scale(1.1)'"
                                onmouseout="this.style.transform='scale(1)'">
                        </div>
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">
                            <li>
                                <i class="text-primary fa fa-star"></i>
                                <i class="text-primary fa fa-star"></i>
                                <i class="text-primary fa fa-star"></i>
                                <i class="text-primary fa fa-star"></i>
                                <i class="text-primary fa fa-star"></i>
                            </li>
                            <li class="text-muted text-right">ST América</li>
                        </ul>
                        <a href="<?php echo constant('URL'); ?>servicio_mantenimiento_subestaciones_electricas" class="h4 text-decoration-none" style="color: #4156a5;">Mantenimiento de Subestaciones Eléctricas</a>
                        <p class="card-text">
                            Realizamos mantenimiento preventivo y correctivo de subestaciones eléctricas, ademas de mantenimiento integral a transformadores.
                        </p>
                        <!-- <p class="text-muted">Reviews (24)</p> -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <a href="<?php echo constant('URL'); ?>servicio_diseno_construccion_subestaciones_electricas">
                        <div style="overflow: hidden;">
                            <img src="public/img/Servicios/PaginaPincipalServicios/Proyectos_Electromecanicos.webp" width="100%" height="100%" class="card-img-top" alt="..." style="transition: transform 1s ease; display: block;"
                                onmouseover="this.style.transform='scale(1.1)'"
                                onmouseout="this.style.transform='scale(1)'">
                        </div>
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">
                            <li>
                                <i class="text-primary fa fa-star"></i>
                                <i class="text-primary fa fa-star"></i>
                                <i class="text-primary fa fa-star"></i>
                                <i class="text-primary fa fa-star"></i>
                                <i class="text-primary fa fa-star"></i>
                            </li>
                            <li class="text-muted text-right">ST América</li>
                        </ul>
                        <a href="<?php echo constant('URL'); ?>servicio_diseno_construccion_subestaciones_electricas" class="h4 text-decoration-none" style="color: #4156a5;">Proyectos Electromecánicos</a>
                        <p class="card-text">
                            Realizamos montaje de subestaciones eléctricas y tendido de redes eléctricas aéreas y subterraneas.
                        </p>
                        <!-- <p class="text-muted">Reviews (48)</p> -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <a href="<?php echo constant('URL'); ?>servicio_tratamiento_aceite_dielectrico">
                        <div style="overflow: hidden;">
                            <img src="public/img/Servicios/PaginaPincipalServicios/Tratamiento_Aceite.webp"
                                width="100%" height="100%"
                                class="card-img-top"
                                alt="..."
                                style="transition: transform 1s ease; display: block;"
                                onmouseover="this.style.transform='scale(1.1)'"
                                onmouseout="this.style.transform='scale(1)'">
                        </div>
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">
                            <li>
                                <i class="text-primary fa fa-star"></i>
                                <i class="text-primary fa fa-star"></i>
                                <i class="text-primary fa fa-star"></i>
                                <i class="text-primary fa fa-star"></i>
                                <i class="text-primary fa fa-star"></i>
                            </li>
                            <li class="text-muted text-right">ST América</li>
                        </ul>
                        <a href="<?php echo constant('URL'); ?>servicio_tratamiento_aceite_dielectrico" class="h4 text-decoration-none" style="color: #4156a5;">Tratamiento de Aceite Dieléctrico</a>
                        <p class="card-text">
                            Realizamos tratamiento de termovacío de aceite dieléctrico y refigeración de aceite dieléctrico.
                        </p>
                    </div>
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
                    <h1 class="m-0" style="color:  white !important">Servicios Realizados</h1>
                </div>
            </div>
            <div class="col-lg-7 m-0 my-lg-5 pt-5 pb-5 pb-lg-2 pl-lg-5" data-aos="fade-left" data-aos-duration="900">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">EMPRESA</h6>
                <h1 class="mb-4 section-title" style="color: #4156a5 !important;">Soluciones Técnicas América</h1>
                <p>¡ST América les da la bienvenida! Estamos aquí para iluminar tu vida con soluciones
                    eléctricas confiables y profesionales. ¡Gracias por confiar en nosotros para satisfacer
                    todas tus necesidades eléctricas!</p>
                <div class="row py-2">
                    <h3 style="color: #4156a5 !important;">Misión</h3>
                    <p>Es proporcionar soluciones confiables, seguras y eficientes para las necesidades eléctricas
                        de nuestros clientes. Nos comprometemos a ofrecer un servicio excepcional, respaldado por
                        un equipo de profesionales altamente capacitados y dedicados. </p>
                    <h3 style="color: #4156a5 !important;">Visión</h3>
                    <p>Es convertirnos en un referente de excelencia y confianza en el sector, reconocidos por nuestra innovación, calidad y compromiso con la sostenibilidad. Buscamos liderar el mercado ofreciendo soluciones eléctricas vanguardistas que impulsen el progreso y la eficiencia en todas las áreas de nuestra operación. </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FIN BIENVENIDA-->


<!-- <section style="background-color: #e7faff;">
        <div class="container-fluid pt-5">
            <div class="row px-xl-5 pb-3" style="padding-block-start: 3rem !important;">
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                        <h1 class="fa fa-user-tie m-0 mr-3" style="color: #4156a5;"></h1>
                        <h5 class="font-weight-semi-bold m-0">Profesionalismo y Experiencia</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                        <h1 class="fa fa-user-shield text-primary m-0 mr-2"></h1>
                        <h5 class="font-weight-semi-bold m-0">Cumplimiento Normativo y Seguridad</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                        <h1 class="fas fa-users text-primary m-0 mr-3"></h1>
                        <h5 class="font-weight-semi-bold m-0">Atención al Cliente y Transparencia</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                        <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1><i class="fa fa-user-gear"></i>
                        <h5 class="font-weight-semi-bold m-0">Innovación y Actualización Tecnológica</h5>
                    </div>
                </div>
            </div>
        </div>
     </section> -->

<!--  -->
<div class="container-fluid" style="background-color: #4156a5; padding: 5%;">
    <div class="container" style="border: none !important; outline: none !important;">
        <div class="row">
            <div class="col-lg-7 mt-5 py-5 pr-lg-5" data-aos="fade-up" data-aos-duration="900">
                <h6 class="text-white font-weight-normal text-uppercase mb-3">SEGURIDAD</h6>
                <h1 class="mb-4 section-title" style="color: white; border: none !important;">Gestión en la Seguridad</h1>
                <p class="mb-4 text-white">La visión en Seguridad y Salud en el Trabajo de ST AMÉRICA es lograr en cada uno de sus colaboradores una cultura de Prevención de Riesgos; para alcanzar los objetivos y metas de SST fomentando la mejora continua.</p>
                <p class="text-white">Nuestra Misión en SST, es mantener los estándares de Seguridad y Salud en todos los aspectos de las actividades de ST AMÉRICA.</p>
                <ul class="list-inline">
                    <li>
                        <h5 style="color: white;"><i class="far fa-check-square mr-3" aria-hidden="true"></i>Capacitación en contingencia y emergencia</h5>
                    </li>
                    <li>
                        <h5 style="color: white;"><i class="far fa-check-square mr-3" aria-hidden="true"></i>Supervisión SSOMA</h5>
                    </li>
                    <li>
                        <h5 style="color: white;"><i class="far fa-check-square mr-3" aria-hidden="true"></i>Auditoria interna SGSST</h5>
                    </li>
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
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </div>
</div>

<!--  -->

<!--  -->
<!-- <section id="pipeline" class="ds color background_cover page_features section_padding_top_150 section_padding_bottom_150" style="background: linear-gradient(rgb(255 255 255), rgb(0 0 0 / 48%)), url(public/img/Seguridad/atencion.png), no-repeat center center;">
				<div class="container" style="padding-block:7rem">
					<div class="row">
						<div class="col-lg-6 col-md-8 col-md-offset-4 col-lg-offset-6">
							<h2 class="section_header">¡Tu Satisfacción, Nuestra Prioridad!</h2>
							<p>Nuestro excepcional equipo del área comercial y atención al cliente está aquí para ofrecerte una experiencia incomparable. Con un enfoque centrado en tus necesidades, nos esforzamos por brindarte soluciones personalizadas que superen tus expectativas. </p>
							<p>Con nuestra dedicación y compromiso, estamos aquí para convertirte en un cliente satisfecho y para construir una relación duradera contigo. ¡Descubre cómo nuestro equipo puede hacer la diferencia para ti hoy mismo!</p>
							<div class="d-flex align-items-center mb-4 pt-4">
                                <button class="btn btn-primary px-4 py-2"><i class="fa fa-envelope"></i> <a title="Click para chatear" class="text-white px-2 py-2" href="https://api.whatsapp.com/send?phone=+51941683636&amp;text=Web:%20Hola%20ST%20América%20me%20gustaría%20realizar%20una%20cotización%20" target="_blank" rel="noopener">Solicitar Cotización</a></button>
                            </div>
						</div>
					</div>
				</div>
			</section> -->
<!--  -->



<?php require 'views/footer.php'; ?>

<!-- AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<script>
    const counter = document.getElementById("counter");
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
</script>