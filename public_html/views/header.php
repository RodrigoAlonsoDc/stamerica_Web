<!DOCTYPE html>
<html lang="es">

<head>
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
    <?php
    $pageTitle = isset($metaTitle) ? $metaTitle : 'ST América | Soluciones Técnicas en Ingeniería Eléctrica';
    $pageDescription = isset($metaDescription) ? $metaDescription : 'Soluciones Técnicas América: Especialistas en mantenimiento de subestaciones, tratamiento de aceite dieléctrico, pozo a tierra y proyectos electromecánicos en Lima y Perú.';
    $pageRobots = isset($metaRobots) ? $metaRobots : 'index, follow';

    // Obtiene la URL actual limpia
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) ? "https://" : "http://";
    $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'stamerica.com.pe';
    $uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
    $currentUrl = strtok($protocol . $host . $uri, '?');
    
    // Imagen representativa para Open Graph
    $ogImage = isset($metaImage) ? $metaImage : 'https://stamerica.com.pe/public/img/Logos/LOGO-WEB-1.png';
    ?>
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="robots" content="<?php echo htmlspecialchars($pageRobots); ?>">
    <meta name="author" content="ST América S.R.L.">

    <!-- Canonical -->
    <link rel="canonical" href="<?php echo $currentUrl; ?>" />

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_PE">
    <meta property="og:site_name" content="ST América">
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta property="og:url" content="<?php echo $currentUrl; ?>">
    <meta property="og:image" content="<?php echo $ogImage; ?>">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="twitter:image" content="<?php echo $ogImage; ?>">

    <!-- Schema.org Datos Estructurados (LocalBusiness / ElectricalContractor) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ElectricalContractor",
      "name": "ST América S.R.L.",
      "alternateName": "Soluciones Técnicas América",
      "url": "https://stamerica.com.pe/",
      "logo": "https://stamerica.com.pe/public/img/Logos/LOGO-WEB-1.png",
      "image": "https://stamerica.com.pe/public/img/Logos/LOGO-WEB-1.png",
      "telephone": "+51941683636",
      "email": "proyectos@stamerica.com.pe",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Pj. San Hilarión Alto Mz. B Lote 16",
        "addressLocality": "San Juan de Lurigancho",
        "addressRegion": "Lima",
        "addressCountry": "PE"
      },
      "areaServed": [
        { "@type": "City", "name": "Lima" },
        { "@type": "Country", "name": "Perú" }
      ],
      "sameAs": [
        "https://www.facebook.com/profile.php?id=100090141630434",
        "https://www.instagram.com/stamerica.oficial/",
        "https://maps.google.com/?cid=2852445839074092242"
      ]
    }
    </script>
    <?php if (isset($schemaServiceJsonLd) && !empty($schemaServiceJsonLd)): ?>
    <!-- Schema.org Servicio Específico -->
    <script type="application/ld+json">
    <?php echo $schemaServiceJsonLd; ?>
    </script>
    <?php endif; ?>

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
    <!-- Topbar y Menú -->
    <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center h-100">
                    <a class="text-body mr-3" href="<?php echo constant('URL'); ?>nosotros_stamerica">Nosotros</a>
                    <a class="text-body mr-3" href="<?php echo constant('URL'); ?>contactanos_STAmerica">Contáctanos</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Mi Cuenta</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">Ingresar</button>
                            <button class="dropdown-item" type="button">Registrarse</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="<?php echo constant('URL'); ?>inicio" class="text-decoration-none">
                    <img src="public/img/Logos/LOGO-WEB-1.png" alt="Logo ST América - Soluciones Técnicas" width="220" height="auto">
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <!-- Barra de búsqueda opcional -->
            </div>
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0">Servicio al Cliente:</p>
                <h5 class="m-0">+51 941 683 636</h5>
            </div>
        </div>
    </div>

    <!-- Barra de Navegación -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categorías</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <a href="<?php echo constant('URL'); ?>servicios_stamerica" class="nav-item nav-link">Servicios de Ingeniería Eléctrica</a>
                        <a href="<?php echo constant('URL'); ?>equipos_en_alquiler" class="nav-item nav-link">Equipos en Alquiler</a>
                        <a href="<?php echo constant('URL'); ?>venta_suministros" class="nav-item nav-link">Venta de Suministros</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="<?php echo constant('URL'); ?>inicio" class="text-decoration-none d-block d-lg-none">
                        <img src="public/img/Logos/LOGO-WEB-1.png" alt="Logo ST América" width="180" height="auto">
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
                                    <a class="dropdown-item texto" href="<?php echo constant('URL'); ?>servicio_analisis_pruebas_electricas">Pruebas Eléctricas a Transformadores y Subestaciones</a>
                                    <a class="dropdown-item texto" href="<?php echo constant('URL'); ?>servicio_construccion_mantenimiento_puesta_tierra">Sistema de Puesta a Tierra</a>
                                    <a class="dropdown-item texto" href="<?php echo constant('URL'); ?>servicio_instalacion_mantenimiento_tableros_electricos">Mantenimiento de Tableros Eléctricos</a>
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