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
            <!--             <h1 class="text-primary">Blog 1</h1> -->
            <div class="row">
                <div class="col-12 mb-4">
                    <img src="public/img/Servicios/3.1.jpg" alt="Mantenimiento Preventivo en Subestaciones" class="img-fluid rounded w-100" style="object-fit: cover; max-height: 400px;">
                </div>

                <!-- Título -->
                <div class="col-12">
                    <h1 class="mb-4" style="color: #1a1a1a;">¿Qué es el Mantenimiento Preventivo en Subestaciones Eléctricas y por qué es clave para evitar fallos?</h1>
                </div>

                <!-- Introducción -->
                <div class="col-12 mb-4">
                    <p>Las subestaciones eléctricas son instalaciones críticas en cualquier sistema eléctrico, ya que permiten transformar y distribuir la energía con seguridad y eficiencia. Sin embargo, al estar expuestas a factores como sobrecargas, humedad, contaminación o envejecimiento de materiales, requieren un mantenimiento periódico para seguir funcionando correctamente.</p>

                    <p>El <strong>mantenimiento preventivo</strong> es una práctica esencial para reducir fallas inesperadas, prevenir riesgos eléctricos y garantizar la operatividad continua de las instalaciones. A diferencia del mantenimiento correctivo, que actúa cuando ya ocurrió un daño, el mantenimiento preventivo busca anticiparse mediante inspecciones, pruebas y ajustes programados.</p>
                </div>

                <!-- Imagen secundaria -->
                <div class="col-md-6 mb-4">
                    <img src="public/img/Servicios/3.2.jpeg" alt="Inspección eléctrica en subestaciones" class="img-fluid rounded w-100" style="object-fit: cover;">
                </div>

                <!-- Contenido principal -->
                <div class="col-md-6 mb-4">
                    <h4>¿Qué incluye un mantenimiento preventivo?</h4>
                    <p>El mantenimiento preventivo en subestaciones eléctricas incluye una combinación de tareas mecánicas, eléctricas y de diagnóstico técnico. Las principales son:</p>
                    <ul>
                        <li>Inspección visual de celdas, transformadores, seccionadores y cables.</li>
                        <li>Limpieza de componentes para eliminar polvo, humedad o residuos contaminantes.</li>
                        <li>Verificación del sistema de puesta a tierra y conexiones eléctricas.</li>
                        <li>Pruebas de aislamiento eléctrico (megado) para evaluar la salud de los cables.</li>
                        <li>Análisis termográfico para detectar puntos calientes o sobrecalentamientos.</li>
                        <li>Revisión del aceite en transformadores (contenido de humedad, rigidez dieléctrica, etc.).</li>
                        <li>Verificación del funcionamiento de relés de protección y sistemas de control.</li>
                    </ul>
                </div>

                <!-- Frecuencia -->
                <div class="col-12 mb-4">
                    <h4>¿Cada cuánto se debe hacer el mantenimiento preventivo?</h4>
                    <p>La periodicidad depende de varios factores: carga instalada, tipo de subestación (interior o exterior), condiciones ambientales, tipo de transformadores y exigencias normativas. Generalmente se recomienda realizar mantenimientos preventivos al menos una vez al año, aunque en ambientes industriales o con alta demanda, puede ser necesario cada seis meses.</p>
                    <p>En instalaciones críticas, como hospitales, plantas industriales, data centers o empresas mineras, este tipo de mantenimiento es obligatorio y regulado por normas técnicas específicas.</p>
                </div>

                <!-- Beneficios -->
                <div class="col-12 mb-4">
                    <h4>Principales beneficios del mantenimiento preventivo</h4>
                    <ul>
                        <li>Evita interrupciones inesperadas del suministro eléctrico.</li>
                        <li>Minimiza el riesgo de accidentes eléctricos y fallos catastróficos.</li>
                        <li>Extiende la vida útil de los transformadores y componentes eléctricos.</li>
                        <li>Reduce costos de reparación y reposición de equipos dañados.</li>
                        <li>Mejora la eficiencia energética y reduce pérdidas técnicas.</li>
                        <li>Permite planificar paradas técnicas sin afectar la producción.</li>
                    </ul>
                </div>

                <!-- Casos comunes de falla -->
                <div class="col-12 mb-4">
                    <h4>¿Qué puede pasar si no se realiza mantenimiento preventivo?</h4>
                    <p>La falta de mantenimiento en subestaciones puede provocar problemas como:</p>
                    <ul>
                        <li>Explosión o fuga en transformadores por deterioro del aceite.</li>
                        <li>Cortocircuitos por acumulación de polvo o humedad.</li>
                        <li>Falla de seccionadores por contactos desgastados.</li>
                        <li>Sobrecalentamiento de cables por conexiones flojas.</li>
                        <li>Desconexión intempestiva por errores en relés de protección no calibrados.</li>
                    </ul>
                    <p>Todos estos eventos pueden significar desde un corte de energía menor hasta la paralización completa de una planta, afectando seriamente la producción y la seguridad de los operarios.</p>
                </div>

                <!-- Conclusión -->
                <div class="col-12 mb-4">
                    <h4>Conclusión</h4>
                    <p>El mantenimiento preventivo es una inversión inteligente para cualquier empresa o institución que depende de la energía eléctrica para su funcionamiento. No se trata solo de revisar equipos, sino de asegurar la continuidad, la seguridad y el rendimiento energético de la instalación.</p>
                    <p>Contar con una empresa especializada que utilice equipos certificados y técnicos capacitados es la clave para garantizar que cada mantenimiento se realice conforme a las normas técnicas vigentes.</p>
                </div>

                <!-- Llamado a la acción -->
                <div class="col-12 mt-5 p-4 bg-light rounded border shadow-sm">
                    <h4 class="text-primary mb-3">¿Tienes problemas eléctricos o necesitas un mantenimiento preventivo?</h4>
                    <p class="mb-3">En <strong>ST América</strong>, ofrecemos soluciones integrales y personalizadas en mantenimiento de subestaciones, transformadores y sistemas eléctricos. Nuestro equipo técnico está altamente capacitado para garantizar seguridad, eficiencia y cumplimiento normativo en cada proyecto.</p>
                    <a href="<?php echo constant('URL'); ?>contacto" class="btn btn-primary px-4 py-2">Contáctanos hoy mismo</a>
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