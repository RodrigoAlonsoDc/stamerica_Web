<?php
$metaTitle = "Servicios Construcción Drywall | ST América";
$metaDescription = "Conoce nuestros servicios de construcción drywall en ST América, donde ofrecemos soluciones integrales en construcción.";
$metaKeywords = "construcción drywall, paneles de yeso, sistemas de construcción, instalación drywall";
?>
<?php require 'views/header.php'; ?>



<!-- Inicio de Portada -->
<div class="container-fluid py-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="public/img/Servicios/Generales/Portada_drywall.png">
                </div>
            </div>
            <div class="col-lg-6 pt-5 pb-lg-5">
                <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Servicios ST América</h6>
                    <h1 class="mb-3">Sistema Drywall</h1>
                    <p>El servicio de instalación de sistema Drywall se refiere a la construcción de paredes, techos y otros elementos estructurales utilizando paneles de yeso, también conocidos como placas de yeso, gypsum board o similares. El término "Drywall" se refiere a la construcción en seco, ya que no se utilizan métodos húmedos, como el mortero de cemento, en el proceso de instalación. En lugar de eso, se emplean paneles prefabricados y sistemas de estructuras metálicas.</p>
                    <p>Este tipo de construcción es común en proyectos residenciales y comerciales, por ello trabajamos con profesionales experimentados en la instalación de sistemas Drywall para garantizar resultados seguros y de alta calidad.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin de Portada -->

<!-- Inicio -->
<div class="container-fluid pb-5">
    <div class="container pb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="d-flex mb-4 mb-lg-0">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                        <i class="fa fa-2x fa-ruler-combined text-white"></i>
                    </div>
                    <div class="d-flex flex-column">
                        <h5 class="">Planificación</h5>
                        <p class="m-0">Se realiza el calculo y planificación del número de recursos, personal y equipos necesarios a tener en cuenta para la ejecutar el proyecto dentro de lo previsto.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex mb-4 mb-lg-0">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                        <i class="fa fa-2x fa-wrench text-white"></i>
                    </div>
                    <div class="d-flex flex-column">
                        <h5 class="">Ejecución</h5>
                        <p class="m-0">En base a la planificación, se ejecutara las actividades programadas, es esta etapa se gestionara : Riesgo al Cambio, Eventos, Gastos, Recursos, Tiempo, Actualizaciones y Modificaciones.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex mb-4 mb-lg-0">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                        <i class="fa fa-2x fa-handshake text-white"></i>
                    </div>
                    <div class="d-flex flex-column">
                        <h5 class="">Monitoreo y Cierre</h5>
                        <p class="m-0">En esta face del proyecto se realiza el seguimiento, revición y monitorización del progreso del proyecto. Luego del Monitoreo y Supervición se establece formalmente que el proyecto se a concluido.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin -->


<!-- Inicio formulario -->
<div class="container-fluid bg-registration py-5" style="margin: 0px 0px 90px; background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(public/img/Servicios/Electricidad/Portada_Mantenimiento_Subestaciones.png), no-repeat center center;
    background-size: cover;     padding-bottom: 3rem !important;">
    <div class="container py-5" style="padding-bottom: 0rem !important; padding-top: 3rem !important;">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="mb-4">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">ST AMERICA</h6>
                    <h1 class="text-white"><span class="text-primary">Cotiza con</span> Nosotros</h1>
                </div>
                <p class="text-white">Recibimos tu solicitud para poder ealizar la cotización de tu proyecto y asi darte las mejores propuestas</p>
                <ul class="list-inline text-white m-0">
                    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Compromiso</li>
                    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Puntualidad</li>
                    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Responsabilidad</li>
                </ul>
            </div>
            <div class="col-lg-5">
                <div class="card border-0">
                    <div class="card-header bg-primary text-center p-4">
                        <h1 class="text-white m-0">Envianos un Mensaje</h1>
                    </div>
                    <div class="card-body rounded-bottom bg-white p-5">
                        <form>
                            <div class="form-group">
                                <input type="text" id="nombres" class="form-control p-4" placeholder="Ingrese Nombre / Razón Social" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="text" id="apellidos" class="form-control p-4" placeholder="Ingrese Correo" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="text" id="apellidos" class="form-control p-4" placeholder="Servicio a Cotizar" autocomplete="off">
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-3" id="send">Enviar Registro</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin Formulario -->

<!-- inicio de contenido -->
<div class="container-fluid pb-5">
    <div class="row px-xl-5">
        <div class="col-lg-5 mb-30">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner bg-light">
                    <div class="carousel-item">
                        <img class="w-100 h-100" src="public/img/Servicios/Generales/drywall1.png" alt="Image">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 h-100" src="public/img/Servicios/Generales/drywall2.png" alt="Image">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 h-100" src="public/img/Servicios/Generales/drywall3.png" alt="Image">
                    </div>
                    <div class="carousel-item active">
                        <img class="w-100 h-100" src="public/img/Servicios/Generales/drywall.png" alt="Image">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                    <i class="fa fa-2x fa-angle-left text-dark"></i>
                </a>
                <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                    <i class="fa fa-2x fa-angle-right text-dark"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-7 h-auto mb-30">
            <div class="h-100 bg-light p-30">
                <h6 class="text-primary text-uppercase">Servicios Generales</h6>
                <h2 class="font-weight-semi-bold mb-4">Instalación de Sistema Drywall</h2>
                <p class="mb-4">La instalación de un sistema Drywall implica varios pasos, desde la planificación hasta la finalización. Aquí te doy un resumen general de cómo se realiza la instalación del sistema Drywall:</p>
                <ul>
                    <li>Planificación</li>
                    <li>Preparación del sitio</li>
                    <li>Instalación de la estructura</li>
                    <li>Instalación de paneles de yeso</li>
                    <li>Tratamiento de juntas</li>
                    <li>Acabado</li>
                    <li>Instalación de accesorios</li>
                    <li>Aislamiento y terminaciones finales</li>
                    <li>Limpieza del sitio</li>
                </ul>
                Es importante destacar que, aunque la instalación de Drywall es un proceso relativamente rápido y limpio en comparación con métodos tradicionales, se debe realizar con precisión para garantizar un resultado final de alta calidad. <br>
                Contamos con profesionales con experienci en instalación de sistemas Drywall, ya que son clave para asegurar que se sigan las mejores prácticas y que el proyecto se complete de manera eficiente y satisfactoria.
                <div class="d-flex align-items-center mb-4 pt-2">

                    <button class="btn btn-primary px-3"><i class="fa fa-envelope"></i> <a title="Click para chatear" href="https://api.whatsapp.com/send?phone=+51941683636&amp;text=Me%20gustaría%20alquilar%20el%20siguiente%20equipo:%20Arnes%20Completo" target="_blank" rel="noopener">Solicitar Cotización</a></button>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- fin de contenido -->

<?php require 'views/footer.php'; ?>