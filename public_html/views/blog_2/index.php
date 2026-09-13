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
                    <img src="public/img/Servicios/4.1.jpg" alt="Mantenimiento Correctivo en Subestaciones" class="img-fluid rounded w-100" style="object-fit: cover; max-height: 400px;">
                </div>

                <!-- Título -->
                <div class="col-12">
                    <h1 class="mb-4" style="color: #1a1a1a;">Mantenimiento Correctivo en Subestaciones: ¿Qué hacer cuando ya ocurrió la falla?</h1>
                </div>

                <!-- Introducción -->
                <div class="col-12 mb-4">
                    <p>Las subestaciones eléctricas son puntos neurálgicos en el sistema de distribución de energía. Cuando uno de sus componentes falla, puede generar apagones, parálisis de procesos productivos e incluso poner en riesgo la seguridad del personal. En esos casos, actuar con rapidez y precisión es fundamental. Aquí es donde entra en acción el <strong>mantenimiento correctivo</strong>.</p>
                    <p>A diferencia del mantenimiento preventivo, que busca evitar averías, el mantenimiento correctivo se realiza una vez ocurrida una falla, con el objetivo de <strong>restaurar la operatividad del sistema</strong> en el menor tiempo posible.</p>
                </div>

                <!-- Imagen secundaria -->
                <div class="col-md-6 mb-4">
                    <img src="public/img/Servicios/4.2.webp" alt="Falla en transformador eléctrico" class="img-fluid rounded w-100" style="object-fit: cover;">
                </div>

                <!-- Contenido principal -->
                <div class="col-md-6 mb-4">
                    <h4>¿Qué se debe hacer ante una falla en una subestación?</h4>
                    <p>Cuando se detecta una interrupción, comportamiento anómalo o daño en una subestación, se deben seguir estos pasos:</p>
                    <ul>
                        <li><strong>Desenergizar la zona afectada</strong> para evitar riesgos mayores.</li>
                        <li><strong>Realizar un diagnóstico inmediato</strong> con personal calificado y equipos de medición.</li>
                        <li><strong>Detectar el componente fallado</strong>: puede ser un transformador, seccionador, fusible, cable o relé.</li>
                        <li><strong>Reemplazar o reparar la parte dañada</strong> con repuestos certificados.</li>
                        <li><strong>Realizar pruebas eléctricas</strong> antes de reenergizar el sistema.</li>
                        <li><strong>Elaborar un informe técnico</strong> detallando la causa raíz y recomendaciones para evitar recurrencias.</li>
                    </ul>
                </div>

                <!-- Frecuencia y ejemplos -->
                <div class="col-12 mb-4">
                    <h4>Tipos de fallas comunes en subestaciones eléctricas</h4>
                    <p>Algunas de las fallas más frecuentes que requieren mantenimiento correctivo son:</p>
                    <ul>
                        <li><strong>Fallas en transformadores</strong> por sobrecalentamiento, fuga de aceite o corto interno.</li>
                        <li><strong>Relés de protección defectuosos</strong> que no actúan ante una sobrecorriente.</li>
                        <li><strong>Conexiones sueltas</strong> que generan chispas o puntos calientes.</li>
                        <li><strong>Oxidación o sulfatación</strong> en barras, interruptores y contactos.</li>
                        <li><strong>Componentes eléctricos quemados</strong> por cortocircuitos o picos de voltaje.</li>
                    </ul>
                    <p>La correcta identificación del problema es clave para una reparación segura y duradera.</p>
                </div>

                <!-- Imagen adicional -->
                <div class="col-12 mb-4">
                    <img src="public/img/Servicios/4.3.jpg" alt="Reparación de falla en subestación" class="img-fluid rounded w-100" style="object-fit: cover;">
                </div>

                <!-- Técnicas y herramientas -->
                <div class="col-12 mb-4">
                    <h4>¿Qué herramientas y pruebas se utilizan?</h4>
                    <p>Durante un mantenimiento correctivo, los técnicos especializados utilizan:</p>
                    <ul>
                        <li>Medidores de resistencia de aislamiento (megóhmetro).</li>
                        <li>Equipos para pruebas de transformadores y relés.</li>
                        <li>Cámaras termográficas para identificar puntos de falla térmica.</li>
                        <li>Herramientas dieléctricas y equipos de protección personal certificados.</li>
                        <li>Sistemas de monitoreo remoto, si la subestación lo permite.</li>
                    </ul>
                </div>

                <!-- Riesgos de no actuar -->
                <div class="col-12 mb-4">
                    <h4>¿Qué riesgos hay si no se atiende una falla a tiempo?</h4>
                    <p>No intervenir de inmediato ante una falla eléctrica puede derivar en consecuencias mayores:</p>
                    <ul>
                        <li>Daño irreversible a equipos costosos.</li>
                        <li>Incendios eléctricos por arcos o cortocircuitos no contenidos.</li>
                        <li>Paralización total de procesos industriales o comerciales.</li>
                        <li>Riesgo para la vida del personal técnico y usuarios.</li>
                    </ul>
                    <p>Por eso, toda subestación debe contar con un plan de respuesta ante emergencias y personal calificado de respaldo.</p>
                </div>

                <!-- Conclusión -->
                <div class="col-12 mb-4">
                    <h4>Conclusión</h4>
                    <p>El mantenimiento correctivo en subestaciones eléctricas es una acción crítica que requiere rapidez, conocimiento técnico y responsabilidad. Un fallo puede poner en jaque a toda una operación empresarial, por lo que contar con un aliado confiable y con experiencia es vital para actuar con seguridad y eficiencia.</p>
                    <p>Además de reparar la falla, es importante analizar sus causas y tomar medidas preventivas que reduzcan el riesgo de repetición. Esto asegura un sistema eléctrico más estable y seguro para todos.</p>
                </div>

                <!-- Llamado a la acción -->
                <div class="col-12 mt-5 p-4 bg-light rounded border shadow-sm">
                    <h4 class="text-primary mb-3">¿Tu subestación presentó una falla? ¿Necesitas asistencia urgente?</h4>
                    <p class="mb-3">En <strong>ST América</strong> atendemos emergencias eléctricas, realizamos diagnósticos precisos y brindamos soluciones correctivas seguras y eficientes. Nuestro equipo está preparado para actuar rápidamente y ayudarte a restablecer el funcionamiento de tu sistema eléctrico.</p>
                    <a href="<?php echo constant('URL'); ?>contacto" class="btn btn-primary px-4 py-2">Contáctanos de inmediato</a>
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