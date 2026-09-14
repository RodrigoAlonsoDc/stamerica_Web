<?php
$metaTitle = "Página no encontrada (Error 404) | ST América";
$metaDescription = "La página solicitada no se encuentra disponible. Te invitamos a explorar nuestros servicios de ingeniería eléctrica.";
$metaRobots = "noindex, follow";
require 'views/header.php';
?>

<div class="container py-5 my-5 text-center">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h1 class="display-1 font-weight-bold" style="color: #4156a5;">404</h1>
            <h2 class="mb-4">Página no encontrada</h2>
            <p class="lead mb-5 text-muted">Lo sentimos, la página que buscas no existe o ha sido movida. Puedes volver al inicio o conocer nuestros servicios de ingeniería eléctrica.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="<?php echo constant('URL'); ?>inicio" class="btn btn-primary py-3 px-4 mr-3" style="background-color: #4156a5; border-color: #4156a5;">
                    <i class="fa fa-home mr-2"></i> Ir al Inicio
                </a>
                <a href="<?php echo constant('URL'); ?>servicios_stamerica" class="btn btn-outline-dark py-3 px-4">
                    <i class="fa fa-cogs mr-2"></i> Ver Servicios
                </a>
            </div>
        </div>
    </div>
</div>

<?php require 'views/footer.php'; ?>
