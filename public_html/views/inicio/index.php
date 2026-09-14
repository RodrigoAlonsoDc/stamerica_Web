<?php
$metaTitle = "Ingeniería Eléctrica en Media y Alta Tensión | ST América";
$metaDescription = "Mantenimiento de subestaciones eléctricas, termovacío de aceite dieléctrico, pozo a tierra y tableros. Servicio en Lima y provincias. Cotiza hoy.";
$metaImage = "https://stamerica.com.pe/public/img/Servicios/Electricidad/PORTADA-STAMERICA-sin-texto-2.jpg";
require 'views/header.php';
?>
<!-- AOS CSS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<style>
    /* Tipografía y Hero */
    .hero-section {
        background: linear-gradient(rgba(0, 0, 0, 0.72), rgba(0, 0, 0, 0.72)), 
                    url('public/img/Servicios/Electricidad/PORTADA-STAMERICA-sin-texto-2.jpg') center center / cover no-repeat;
        min-height: 560px;
        display: flex;
        align-items: center;
        padding: 4.5rem 0;
        position: relative;
    }

    .hero-title {
        font-size: 2.6rem;
        font-weight: 800;
        line-height: 1.25;
        letter-spacing: -0.5px;
        color: #ffffff;
        margin-bottom: 1.25rem;
    }

    @media (max-width: 767.98px) {
        .hero-title {
            font-size: 1.9rem;
        }
        .hero-section {
            padding: 3rem 0;
            min-height: auto;
        }
    }

    .hero-lead {
        font-size: 1.1rem;
        line-height: 1.6;
        color: #f1f5f9;
        margin-bottom: 2rem;
        max-width: 650px;
    }

    .hero-badge {
        display: inline-flex;
        align-items: center;
        background: rgba(0, 0, 0, 0.55);
        border: 1px solid rgba(255, 255, 255, 0.25);
        padding: 6px 16px;
        border-radius: 50px;
        margin-bottom: 1.5rem;
    }

    .btn-hero-primary {
        background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
        color: #ffffff !important;
        font-weight: 700;
        padding: 13px 28px;
        border-radius: 50px;
        box-shadow: 0 8px 25px rgba(37, 211, 102, 0.35);
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        font-size: 1rem;
        border: none;
        text-decoration: none !important;
    }

    .btn-hero-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 30px rgba(37, 211, 102, 0.45);
        color: #ffffff !important;
    }

    .btn-hero-outline {
        background: rgba(0, 0, 0, 0.45);
        border: 1.5px solid rgba(255, 255, 255, 0.6);
        color: #ffffff !important;
        font-weight: 600;
        padding: 12px 26px;
        border-radius: 50px;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        font-size: 1rem;
        text-decoration: none !important;
    }

    .btn-hero-outline:hover {
        background: #ffffff;
        color: #1e293b !important;
        transform: translateY(-2px);
    }

    /* Trust Card Hero */
    .hero-trust-box {
        background: rgba(0, 0, 0, 0.55);
        border: 1px solid rgba(255, 255, 255, 0.18);
        border-radius: 16px;
        padding: 24px;
        color: #ffffff;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.35);
    }

    .trust-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 18px;
    }
    .trust-item:last-child {
        margin-bottom: 0;
    }
    .trust-icon {
        width: 42px;
        height: 42px;
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.1rem;
        margin-right: 14px;
        flex-shrink: 0;
    }

    /* Tarjetas de Servicio Modernas */
    .service-card {
        border-radius: 16px;
        overflow: hidden;
        border: 1px solid #e2e8f0;
        background: #ffffff;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .service-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 35px -5px rgba(15, 23, 42, 0.12) !important;
    }
    .service-card-img-wrap {
        position: relative;
        overflow: hidden;
        height: 220px;
    }
    .service-card-img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }
    .service-card:hover .service-card-img-wrap img {
        transform: scale(1.08);
    }
    .service-card-badge {
        position: absolute;
        top: 14px;
        left: 14px;
        background: rgba(15, 23, 42, 0.85);
        backdrop-filter: blur(4px);
        color: #ffffff;
        font-size: 0.75rem;
        font-weight: 700;
        padding: 5px 12px;
        border-radius: 30px;
        letter-spacing: 0.5px;
    }

    .service-mini-card {
        border-radius: 14px;
        border: 1px solid #e2e8f0;
        background: #ffffff;
        padding: 24px 18px;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    }
    .service-mini-card:hover {
        transform: translateY(-6px);
        border-color: #4156a5;
        box-shadow: 0 15px 30px -5px rgba(65, 86, 165, 0.15) !important;
    }
    .mini-icon-circle {
        width: 56px;
        height: 56px;
        border-radius: 16px;
        background: #eef2ff;
        color: #4156a5;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 1.4rem;
        margin-bottom: 16px;
        transition: transform 0.3s ease, background 0.3s ease, color 0.3s ease;
    }
    .service-mini-card:hover .mini-icon-circle {
        transform: scale(1.1);
        background: #4156a5;
        color: #ffffff;
    }
</style>

<!-- HERO SECTION MODERNA -->
<section class="hero-section">
    <div class="container py-4">
        <div class="row align-items-center">
            <!-- Columna Texto Principal -->
            <div class="col-lg-7 mb-4 mb-lg-0" data-aos="fade-right" data-aos-duration="800">
                <div class="hero-badge">
                    <span class="badge badge-warning text-dark font-weight-bold mr-2"><i class="fas fa-bolt mr-1"></i> INGENIERÍA ELÉCTRICA</span>
                    <span class="text-white small font-weight-bold">Lima & Todo el Perú</span>
                </div>
                
                <h1 class="hero-title">
                    Soluciones Técnicas América: Ingeniería Eléctrica en Media y Alta Tensión
                </h1>
                
                <p class="hero-lead">
                    Especialistas en mantenimiento preventivo de subestaciones, tratamiento y filtrado de aceite dieléctrico por termovacío, pozos a tierra con protocolo CIP y montaje electromecánico llave en mano.
                </p>
                
                <div class="d-flex flex-wrap align-items-center pt-2">
                    <a href="https://api.whatsapp.com/send?phone=51941683636&text=Hola%20ST%20América,%20deseo%20solicitar%20una%20cotización%20técnica" target="_blank" rel="noopener" class="btn btn-hero-primary mr-sm-3 mb-3">
                        <i class="fab fa-whatsapp mr-2" style="font-size: 1.2rem;"></i> Cotizar por WhatsApp
                    </a>
                    <a href="#servicios-destacados" class="btn btn-hero-outline mb-3">
                        <i class="fas fa-tools mr-2"></i> Conocer Servicios
                    </a>
                </div>
            </div>

            <!-- Columna Card de Confianza / Garantías -->
            <div class="col-lg-5" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                <div class="hero-trust-box">
                    <h3 class="h5 font-weight-bold text-white mb-4 d-flex align-items-center">
                        <i class="fas fa-shield-alt text-warning mr-2"></i> ¿Por qué elegir ST América?
                    </h3>
                    
                    <div class="trust-item">
                        <div class="trust-icon text-warning"><i class="fas fa-user-check"></i></div>
                        <div>
                            <div class="font-weight-bold text-white">Ingenieros Colegiados CIP</div>
                            <small class="text-light" style="opacity: 0.85;">Protocolos técnicos válidos ante INDECI, municipalidades y auditorías.</small>
                        </div>
                    </div>

                    <div class="trust-item">
                        <div class="trust-icon text-warning"><i class="fas fa-truck-moving"></i></div>
                        <div>
                            <div class="font-weight-bold text-white">Planta Móvil de Termovacío</div>
                            <small class="text-light" style="opacity: 0.85;">Tratamiento in situ de transformadores de potencia sin interrumpir su operación.</small>
                        </div>
                    </div>

                    <div class="trust-item">
                        <div class="trust-icon text-success"><i class="fas fa-clipboard-check"></i></div>
                        <div>
                            <div class="font-weight-bold text-white">Equipos Calibrados ASTM / IEEE</div>
                            <small class="text-light" style="opacity: 0.85;">Megómetros, telurómetros y microohmímetros con certificación de calibración vigente.</small>
                        </div>
                    </div>

                    <div class="trust-item">
                        <div class="trust-icon" style="color: #fbbf24;"><i class="fas fa-clock"></i></div>
                        <div>
                            <div class="font-weight-bold text-white">Atención 24/7 y Paradas de Planta</div>
                            <small class="text-light" style="opacity: 0.85;">Disponibilidad inmediata para emergencias eléctricas y paradas programadas.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECCIÓN SERVICIOS DESTACADOS (Enlazando los 7 servicios principales) -->
<section id="servicios-destacados" class="py-5" style="background-color: #f8fafc;">
    <div class="container py-3">
        <div class="row text-center mb-5">
            <div class="col-lg-8 m-auto" data-aos="fade-up" data-aos-duration="700">
                <span class="badge badge-pill badge-primary px-3 py-2 text-uppercase mb-2" style="background-color: #e0e7ff; color: #4156a5; font-weight: 700;">Especialidades Técnicas</span>
                <h2 class="h2 font-weight-bold text-dark mt-2">Nuestros Servicios de Ingeniería Eléctrica</h2>
                <p class="text-muted lead" style="font-size: 1.05rem;">Soluciones integrales de alta exigencia para industrias, centros comerciales, minería e infraestructura en todo el Perú.</p>
            </div>
        </div>

        <!-- 3 Servicios Principales con Imagen -->
        <div class="row mb-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
            <!-- 1. Mantenimiento de Subestaciones -->
            <div class="col-12 col-lg-4 col-md-6 mb-4">
                <div class="card h-100 service-card shadow-sm">
                    <div class="service-card-img-wrap">
                        <span class="service-card-badge"><i class="fas fa-bolt text-warning mr-1"></i> 10kV - 60kV</span>
                        <img src="public/img/Servicios/PaginaPincipalServicios/Servicios_Generales_Subestaciones.webp" alt="Mantenimiento de subestaciones eléctricas en Lima" loading="lazy" decoding="async">
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h3 class="h5 font-weight-bold mb-2">
                            <a href="<?php echo constant('URL'); ?>servicio_mantenimiento_subestaciones_electricas" class="text-dark text-decoration-none" style="transition: color 0.2s ease;">Mantenimiento de Subestaciones</a>
                        </h3>
                        <p class="card-text text-muted small flex-grow-1">Mantenimiento preventivo y correctivo en media y alta tensión, transformadores de potencia, celdas y pruebas operativas.</p>
                        <a href="<?php echo constant('URL'); ?>servicio_mantenimiento_subestaciones_electricas" class="font-weight-bold text-primary text-decoration-none mt-3 d-inline-flex align-items-center" style="color: #4156a5 !important;">
                            Conocer servicio <i class="fas fa-arrow-right ml-2" style="font-size: 0.85rem;"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 2. Proyectos Electromecánicos -->
            <div class="col-12 col-lg-4 col-md-6 mb-4">
                <div class="card h-100 service-card shadow-sm">
                    <div class="service-card-img-wrap">
                        <span class="service-card-badge"><i class="fas fa-network-wired text-info mr-1"></i> Montaje Llave en Mano</span>
                        <img src="public/img/Servicios/PaginaPincipalServicios/Proyectos_Electromecanicos.webp" alt="Montaje de subestaciones y tendido de redes de media tensión" loading="lazy" decoding="async">
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h3 class="h5 font-weight-bold mb-2">
                            <a href="<?php echo constant('URL'); ?>servicio_diseno_construccion_subestaciones_electricas" class="text-dark text-decoration-none">Proyectos Electromecánicos</a>
                        </h3>
                        <p class="card-text text-muted small flex-grow-1">Diseño, construcción y montaje de subestaciones compactas y convencionales, tendido de redes aéreas y subterráneas.</p>
                        <a href="<?php echo constant('URL'); ?>servicio_diseno_construccion_subestaciones_electricas" class="font-weight-bold text-primary text-decoration-none mt-3 d-inline-flex align-items-center" style="color: #4156a5 !important;">
                            Conocer servicio <i class="fas fa-arrow-right ml-2" style="font-size: 0.85rem;"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 3. Tratamiento de Aceite Dieléctrico -->
            <div class="col-12 col-lg-4 col-md-6 mb-4">
                <div class="card h-100 service-card shadow-sm">
                    <div class="service-card-img-wrap">
                        <span class="service-card-badge"><i class="fas fa-oil-can text-warning mr-1"></i> Planta Móvil</span>
                        <img src="public/img/Servicios/PaginaPincipalServicios/Tratamiento_Aceite.webp" alt="Termovacío y regeneración de aceite dieléctrico en Perú" loading="lazy" decoding="async">
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h3 class="h5 font-weight-bold mb-2">
                            <a href="<?php echo constant('URL'); ?>servicio_tratamiento_aceite_dielectrico" class="text-dark text-decoration-none">Tratamiento de Aceite Dieléctrico</a>
                        </h3>
                        <p class="card-text text-muted small flex-grow-1">Termovacío móvil in situ, regeneración con tierra fuller, desgasificado y análisis fisicoquímico y cromatográfico ASTM.</p>
                        <a href="<?php echo constant('URL'); ?>servicio_tratamiento_aceite_dielectrico" class="font-weight-bold text-primary text-decoration-none mt-3 d-inline-flex align-items-center" style="color: #4156a5 !important;">
                            Conocer servicio <i class="fas fa-arrow-right ml-2" style="font-size: 0.85rem;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4 Servicios Complementarios en Cards de Alto Rendimiento -->
        <div class="row" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
            <!-- 4. Pozo a Tierra -->
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="service-mini-card h-100 shadow-sm">
                    <div class="mini-icon-circle"><i class="fas fa-shield-alt"></i></div>
                    <h3 class="h6 font-weight-bold mb-2">
                        <a href="<?php echo constant('URL'); ?>servicio_construccion_mantenimiento_puesta_tierra" class="text-dark text-decoration-none">Pozo a Tierra & Certificado</a>
                    </h3>
                    <p class="text-muted small mb-3">Medición con telurómetro calibrado y protocolo firmado CIP para INDECI.</p>
                    <a href="<?php echo constant('URL'); ?>servicio_construccion_mantenimiento_puesta_tierra" class="small font-weight-bold" style="color: #4156a5;">Ver detalles &rarr;</a>
                </div>
            </div>

            <!-- 5. Tableros Eléctricos -->
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="service-mini-card h-100 shadow-sm">
                    <div class="mini-icon-circle"><i class="fas fa-th-large"></i></div>
                    <h3 class="h6 font-weight-bold mb-2">
                        <a href="<?php echo constant('URL'); ?>servicio_instalacion_mantenimiento_tableros_electricos" class="text-dark text-decoration-none">Tableros Eléctricos</a>
                    </h3>
                    <p class="text-muted small mb-3">Mantenimiento, ajuste de barras y termografía infrarroja de tableros de control y fuerza.</p>
                    <a href="<?php echo constant('URL'); ?>servicio_instalacion_mantenimiento_tableros_electricos" class="small font-weight-bold" style="color: #4156a5;">Ver detalles &rarr;</a>
                </div>
            </div>

            <!-- 6. Banco de Condensadores -->
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="service-mini-card h-100 shadow-sm">
                    <div class="mini-icon-circle"><i class="fas fa-chart-line"></i></div>
                    <h3 class="h6 font-weight-bold mb-2">
                        <a href="<?php echo constant('URL'); ?>servicio_instalacion_mantenimiento_banco_condensadores" class="text-dark text-decoration-none">Banco de Condensadores</a>
                    </h3>
                    <p class="text-muted small mb-3">Corrección de factor de potencia para eliminar penalizaciones en la factura eléctrica.</p>
                    <a href="<?php echo constant('URL'); ?>servicio_instalacion_mantenimiento_banco_condensadores" class="small font-weight-bold" style="color: #4156a5;">Ver detalles &rarr;</a>
                </div>
            </div>

            <!-- 7. Pruebas Eléctricas -->
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="service-mini-card h-100 shadow-sm">
                    <div class="mini-icon-circle"><i class="fas fa-vial"></i></div>
                    <h3 class="h6 font-weight-bold mb-2">
                        <a href="<?php echo constant('URL'); ?>servicio_analisis_pruebas_electricas" class="text-dark text-decoration-none">Pruebas a Transformadores</a>
                    </h3>
                    <p class="text-muted small mb-3">Ensayos de aislamiento (megado), relación de transformación TTR y devanados.</p>
                    <a href="<?php echo constant('URL'); ?>servicio_analisis_pruebas_electricas" class="small font-weight-bold" style="color: #4156a5;">Ver detalles &rarr;</a>
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

<?php require 'views/footer.php'; ?>