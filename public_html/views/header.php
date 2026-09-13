<!DOCTYPE html>
<html lang="es">

<head>
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z151GC5NQK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-Z151GC5NQK');
    </script> -->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SHVEYEC255"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-SHVEYEC255');
    </script>
    <meta charset="UTF-8">
    <title><?php echo isset($metaTitle) ? htmlspecialchars($metaTitle) : 'ST América - Venta y Alquiler de Equipos de Construcción'; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo isset($metaDescription) ? htmlspecialchars($metaDescription) : 'ST América - Soluciones Técnicas en Ingeniería Eléctrica y Construcción.'; ?>">
    <meta name="keywords" content="<?php echo isset($metaKeywords) ? htmlspecialchars($metaKeywords) : 'ST América, Soluciones Técnicas, Ingeniería Eléctrica, Construcción, Alquiler de Equipos, Venta de Cables, Pernos y Tuercas'; ?>">
    <meta name="author" content="ST América">

    <?php
    // Obtiene la URL actual completa
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $currentUrl = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    // Limpia parámetros innecesarios (opcional)
    $currentUrl = strtok($currentUrl, '?'); // elimina query string si quieres canonical limpio
    ?>
    <link rel="canonical" href="<?php echo $currentUrl; ?>" />

    <!-- ESTILOS -->
    <link rel="shortcut icon" href="public/img/Logos/LOGO-FAVICON.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/style.min.css">
    <link rel="stylesheet" href="public/css/bootstrap-grid.css">
    <link rel="stylesheet" href="public/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="public/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="public/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/styles.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/animate.min.css">
    <link rel="stylesheet" href="public/css/assets/owl.carousel.css">
    <link rel="stylesheet" href="public/css/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="public/css/assets/owl.theme.default.css">
    <link rel="stylesheet" href="public/css/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="public/css/assets/owl.theme.green.css">
    <link rel="stylesheet" href="public/css/assets/owl.theme.green.min.css">

    <!-- SCRIPTS -->
    <script src="public/js/jquery.js"></script>
    <script src="public/js/jquery.dataTables.min.js"></script>

</head>

<body>
    <?php require 'views/barra_busqueda.php'; ?>
    <div class="container-fluid bg-light mb-10 fixed-top" style="padding-top: 10px; padding-bottom: 10px; z-index: 1030; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">
        <div class="row px-xl-5 align-items-center">
            <div class="col-lg-3 d-none d-lg-block text-right">
                <a href="<?php echo constant('URL'); ?>inicio" class="text-decoration-none">
                    <img src="public/img/Logos/LOGO-WEB-1.png" alt="LogoStAmerica" title="ST América - Soluciones Técnicas" style="width: 180px; height: auto;">
                </a>
            </div>
            <div class="col-lg-8">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="<?php echo constant('URL'); ?>inicio" class="text-decoration-none d-block d-lg-none">
                        <img src="public/img/Logos/LOGO-WEB-1.png" alt="LogoStAmerica" title="ST América - Soluciones Técnicas" style=" width: 140px;">
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                        <div class="navbar-nav py-0">
                            <br>
                            <a href="<?php echo constant('URL'); ?>inicio" class="texto nav-item nav-link mx-1">Inicio</a>
                            <a href="<?php echo constant('URL'); ?>nosotros_stamerica" class="nav-item texto nav-link mx-1">Nosotros</a>
                            <div class="nav-item mx-1 position-relative" id="serviciosDropdownContainer">
                                <a href="<?php echo constant('URL'); ?>servicios_stamerica"
                                    class="nav-link texto"
                                    id="serviciosDropdownLink"
                                    role="button"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    data-href="<?php echo constant('URL'); ?>servicios_stamerica">
                                    Servicios <i class="fa fa-angle-down" id="iconoServicios"></i>
                                </a>
                                <div class="dropdown-menu position-absolute mt-2" aria-labelledby="serviciosDropdownLink" id="serviciosDropdownMenu">
                                    <a class="dropdown-item texto" href="<?php echo constant('URL'); ?>servicio_mantenimiento_subestaciones_electricas">Mantenimiento de Subestaciones Eléctricas</a>
                                    <a class="dropdown-item texto" href="<?php echo constant('URL'); ?>servicio_tratamiento_aceite_dielectrico">Tratamiento de Aceite Dieléctrico</a>
                                    <a class="dropdown-item texto" href="<?php echo constant('URL'); ?>servicio_diseno_construccion_subestaciones_electricas">Proyectos Electromecánicos</a>
                                    <!-- <a class="dropdown-item texto" href="<?php echo constant('URL'); ?>servicio_analisis_pruebas_electricas">Pruebas Eléctricas a Transformadores y Subestaciones</a> -->
                                    <a class="dropdown-item texto" href="<?php echo constant('URL'); ?>servicio_construccion_mantenimiento_puesta_tierra">Sistema de Puesta a Tierra</a>
                                    <a class="dropdown-item texto" href="<?php echo constant('URL'); ?>servicio_instalacion_mantenimiento_tableros_electricos">Mantenimiento de Tableros Electricos</a>
                                    <a class="dropdown-item texto" href="<?php echo constant('URL'); ?>servicio_instalacion_mantenimiento_banco_condensadores">Banco de Condensadores</a>
                                </div>
                            </div>
                            <a href="<?php echo constant('URL') ?>proyectos_realizados" class="nav-item nav-link texto mx-1" style="color: ;">Proyectos</a>
                            <a href="<?php echo constant('URL') ?>blog_informativo" class="nav-item nav-link texto mx-1" style="color: ;">Blog</a>
                            <a href="<?php echo constant('URL'); ?>contactanos_STAmerica" class="nav-item nav-link texto mx-1">Contáctanos</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <style>
        body,
        html {
            overflow-x: hidden;
        }

        #serviciosDropdownMenu {
            display: none;
            z-index: 1000;
            min-width: 260px;
        }

        #iconoServicios {
            transition: transform 0.3s ease;
        }

        #serviciosDropdownContainer a:focus,
        #serviciosDropdownContainer a:hover,
        #serviciosDropdownContainer:focus,
        #serviciosDropdownContainer:hover {
            outline: none;
            box-shadow: none;
        }

        .nav-link.texto {
            color: #4156a5 !important;
            /* font-size: 1.15rem; */
            font-weight: 700;
            font-family: "Open Sans", sans-serif;
            letter-spacing: 0.5px;
        }

        .nav-link.texto:hover,
        .nav-link.texto:focus {
            color: #59e3ff !important;
            text-decoration: none;
        }

        .dropdown-item.texto {
            color: #4156a5 !important;
            /* font-size: 1.15rem; */
            font-weight: 700;
            font-family: "Open Sans", sans-serif;
            letter-spacing: 0.5px;
        }

        .dropdown-item.texto:hover,
        .dropdown-item.texto:focus {
            color: #59e3ff !important;
            text-decoration: none;
        }
    </style>
    <script>
        $(document).ready(function() {
            var timeout;

            $('#serviciosDropdownContainer').on('mouseenter', function() {
                clearTimeout(timeout);
                $('#serviciosDropdownMenu').stop(true, true).fadeIn(200);
                $('#iconoServicios').removeClass('fa-angle-down').addClass('fa-angle-up');
            });

            $('#serviciosDropdownContainer').on('mouseleave', function() {
                timeout = setTimeout(function() {
                    $('#serviciosDropdownMenu').stop(true, true).fadeOut(200);
                    $('#iconoServicios').removeClass('fa-angle-up').addClass('fa-angle-down');
                }, 200);
            });

            $('#serviciosDropdownMenu').on('mouseenter', function() {
                clearTimeout(timeout);
            });

            $('#serviciosDropdownMenu').on('mouseleave', function() {
                timeout = setTimeout(function() {
                    $('#serviciosDropdownMenu').stop(true, true).fadeOut(200);
                    $('#iconoServicios').removeClass('fa-angle-up').addClass('fa-angle-down');
                }, 200);
            });

            // NUEVA LÓGICA DE CLIC EN MÓVILES
            let clickCount = 0;
            let clickTimer;
            const $menu = $('#serviciosDropdownMenu');
            const $icon = $('#iconoServicios');
            const $link = $('#serviciosDropdownLink');

            $link.on('click', function(e) {
                e.preventDefault();
                clickCount++;

                if (clickCount === 1) {
                    if ($menu.is(':visible')) {
                        $menu.fadeOut(200);
                        $icon.removeClass('fa-angle-up').addClass('fa-angle-down');
                    } else {
                        $menu.fadeIn(200);
                        $icon.removeClass('fa-angle-down').addClass('fa-angle-up');
                    }

                    // Reiniciar si no hubo segundo clic
                    clickTimer = setTimeout(function() {
                        clickCount = 0;
                    }, 500);
                } else if (clickCount === 2) {
                    clearTimeout(clickTimer);
                    window.location.href = $link.data('href');
                }
            });
        });
    </script>
</body>

</html>