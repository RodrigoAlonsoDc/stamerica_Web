<?php
$metaTitle = "Contáctanos | ST América";
$metaDescription = "Contáctanos para más información sobre nuestros servicios de alquiler de maquinaria y equipos de construcción en ST América.";
$metaKeywords = "contáctanos, ST América, alquiler de maquinaria, equipos de construcción";
?>

<?php require 'views/header.php'; ?>



<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Inicio</a>
                <span class="breadcrumb-item active">Contáctanos</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<!-- Contact Start -->
<div class="container-fluid">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Contáctanos</span></h2>
    <div class="row px-xl-5">
        <div class="col-lg-7 mb-5">
            <div class="contact-form bg-light p-30">
                <div id="success"></div>
                <form name="sentMessage" action="https://formsubmit.co/ventas@stamerica.com.pe" method="POST" novalidate="novalidate">
                    <div class="control-group">
                        <input type="text" class="form-control" name="name" placeholder="Ingrese su Nombre"
                            required="required" data-validation-required-message="Por favor ingrese su nombre" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su Correo"
                            required="required" data-validation-required-message="Por favor ingrese su correo" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" id="subject" name="subjet" placeholder="Asunto"
                            required="required" data-validation-required-message="Porfavor ingrese el asunto" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control" rows="8" id="message" name="comments" placeholder="Mensaje"
                            required="required"
                            data-validation-required-message="Por favor ingrese el mensaje"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>
                        <button class="btn btn-primary py-2 px-4" type="submit" name="submit" id="sendMessageButton"><i class="fa fa-envelope"></i> Enviar Mensaje</button>
                        <!--Etiqueta para el botón de descargar Brochure -->
                        <button class="btn btn-primary py-2 px-4"><i class="fa fa-file"></i> <a title="Click para descargar brochure" href="https://stamerica.com.pe/Brochures/brochure%202025_st.pdf" target="_blank" rel="noopener">Descargar Brochure</a></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-5 mb-5">
            <div class="bg-light p-30 mb-30">
                <!-- <iframe style="width: 100%; height: 250px;"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15606.896035146092!2d-76.9917692!3d-12.0625007!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c63e15bd3083%3A0x2795cd59f05664d2!2sST%20AMERICA!5e0!3m2!1ses!2spe!4v1684184961469!5m2!1ses!2spe"
                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
                <iframe
                    src="https://www.google.com/maps?q=-12.088384109074982,-77.03349196777974&hl=es;z=16&output=embed"
                    width="100%"
                    height="235px"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    title="ST AMERICA"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="bg-light p-30 mb-3">
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Av. Arequipa Nro. 2447 Int. 409 Lima - Lince</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>proyectos@stamerica.com.pe</p>
                <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+51 941 683 636</p>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->




<?php require 'views/footer.php'; ?>