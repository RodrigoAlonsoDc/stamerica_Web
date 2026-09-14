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
    <!-- 1. Top Bar Informativa Fina y Corporativa -->
    <div class="topbar-info d-none d-lg-block">
        <div class="container-fluid px-xl-5">
            <div class="d-flex justify-content-between align-items-center py-2">
                <div class="d-flex align-items-center">
                    <span class="mr-4 text-white"><i class="fas fa-phone-alt text-warning mr-2"></i><strong>Central:</strong> +51 941 683 636</span>
                    <span class="mr-4 text-white"><i class="fas fa-envelope text-warning mr-2"></i>proyectos@stamerica.com.pe</span>
                    <span class="text-white"><i class="fas fa-map-marker-alt text-warning mr-2"></i>Lima & Provincias, Perú</span>
                </div>
                <div class="d-flex align-items-center">
                    <span class="mr-3 text-light small"><i class="far fa-clock mr-1 text-warning"></i> Lun - Sáb: 8:00 AM - 6:00 PM</span>
                    <a href="https://www.facebook.com/profile.php?id=100090141630434" target="_blank" rel="noopener" class="topbar-social mr-2" title="Facebook"><i class="fab fa-facebook-f text-white"></i></a>
                    <a href="https://www.instagram.com/stamerica.oficial/" target="_blank" rel="noopener" class="topbar-social mr-2" title="Instagram"><i class="fab fa-instagram text-white"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=51941683636&text=Hola%20ST%20América,%20deseo%20solicitar%20una%20cotización" target="_blank" rel="noopener" class="topbar-social" title="WhatsApp"><i class="fab fa-whatsapp text-success"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. Navbar Principal Moderno y Limpio (Sticky) -->
    <header class="main-header sticky-top">
        <div class="container-fluid px-xl-5">
            <nav class="navbar navbar-expand-lg navbar-light py-2 px-0">
                <!-- Logo -->
                <a href="<?php echo constant('URL'); ?>inicio" class="navbar-brand py-0">
                    <img src="public/img/Logos/LOGO-WEB-1.png" alt="ST América - Soluciones Técnicas en Ingeniería Eléctrica" class="header-logo">
                </a>

                <!-- Toggler móvil moderno -->
                <button class="navbar-toggler custom-toggler border-0" type="button" data-toggle="collapse" data-target="#mainNavbarNav" aria-controls="mainNavbarNav" aria-expanded="false" aria-label="Abrir navegación">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Menú de Enlaces -->
                <div class="collapse navbar-collapse" id="mainNavbarNav">
                    <ul class="navbar-nav ml-auto align-items-lg-center">
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom" href="<?php echo constant('URL'); ?>inicio">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom" href="<?php echo constant('URL'); ?>nosotros_stamerica">Nosotros</a>
                        </li>
                        
                        <!-- Dropdown de Servicios Mejorado con Iconos -->
                        <li class="nav-item dropdown custom-dropdown" id="serviciosDropdownContainer">
                            <a class="nav-link nav-link-custom dropdown-toggle" href="<?php echo constant('URL'); ?>servicios_stamerica" id="serviciosDropdownLink" role="button" aria-haspopup="true" aria-expanded="false">
                                Servicios Eléctricos <i class="fas fa-chevron-down ml-1 chevron-icon"></i>
                            </a>
                            <div class="dropdown-menu custom-dropdown-menu shadow-lg border-0" id="serviciosDropdownMenu" aria-labelledby="serviciosDropdownLink">
                                <div class="dropdown-header text-uppercase text-muted font-weight-bold" style="font-size: 0.75rem; letter-spacing: 1px;">
                                    Nuestras Especialidades
                                </div>
                                <a class="dropdown-item custom-dropdown-item py-2" href="<?php echo constant('URL'); ?>servicio_mantenimiento_subestaciones_electricas">
                                    <span class="icon-circle mr-3" style="color: #4156a5;"><i class="fas fa-bolt"></i></span>
                                    <div>
                                        <div class="dropdown-title">Mantenimiento de Subestaciones</div>
                                        <small class="text-muted">Media y alta tensión 10kV - 60kV</small>
                                    </div>
                                </a>
                                <a class="dropdown-item custom-dropdown-item py-2" href="<?php echo constant('URL'); ?>servicio_tratamiento_aceite_dielectrico">
                                    <span class="icon-circle mr-3" style="color: #d97706;"><i class="fas fa-oil-can"></i></span>
                                    <div>
                                        <div class="dropdown-title">Tratamiento de Aceite Dieléctrico</div>
                                        <small class="text-muted">Termovacío, filtrado y regeneración</small>
                                    </div>
                                </a>
                                <a class="dropdown-item custom-dropdown-item py-2" href="<?php echo constant('URL'); ?>servicio_diseno_construccion_subestaciones_electricas">
                                    <span class="icon-circle mr-3" style="color: #0284c7;"><i class="fas fa-network-wired"></i></span>
                                    <div>
                                        <div class="dropdown-title">Proyectos Electromecánicos</div>
                                        <small class="text-muted">Montaje de subestaciones y redes</small>
                                    </div>
                                </a>
                                <a class="dropdown-item custom-dropdown-item py-2" href="<?php echo constant('URL'); ?>servicio_construccion_mantenimiento_puesta_tierra">
                                    <span class="icon-circle mr-3" style="color: #16a34a;"><i class="fas fa-shield-alt"></i></span>
                                    <div>
                                        <div class="dropdown-title">Pozo a Tierra (Medición y Certificado)</div>
                                        <small class="text-muted">Protocolo firmado CIP para INDECI</small>
                                    </div>
                                </a>
                                <a class="dropdown-item custom-dropdown-item py-2" href="<?php echo constant('URL'); ?>servicio_instalacion_mantenimiento_tableros_electricos">
                                    <span class="icon-circle mr-3" style="color: #dc2626;"><i class="fas fa-th-large"></i></span>
                                    <div>
                                        <div class="dropdown-title">Mantenimiento de Tableros Eléctricos</div>
                                        <small class="text-muted">Distribución, control y termografía</small>
                                    </div>
                                </a>
                                <a class="dropdown-item custom-dropdown-item py-2" href="<?php echo constant('URL'); ?>servicio_instalacion_mantenimiento_banco_condensadores">
                                    <span class="icon-circle mr-3" style="color: #4f46e5;"><i class="fas fa-chart-line"></i></span>
                                    <div>
                                        <div class="dropdown-title">Banco de Condensadores</div>
                                        <small class="text-muted">Ahorro y corrección factor de potencia</small>
                                    </div>
                                </a>
                                <a class="dropdown-item custom-dropdown-item py-2" href="<?php echo constant('URL'); ?>servicio_analisis_pruebas_electricas">
                                    <span class="icon-circle mr-3" style="color: #0d9488;"><i class="fas fa-vial"></i></span>
                                    <div>
                                        <div class="dropdown-title">Pruebas Eléctricas a Transformadores</div>
                                        <small class="text-muted">Megado de aislamiento, TTR y devanados</small>
                                    </div>
                                </a>
                                <div class="dropdown-divider my-2"></div>
                                <a class="dropdown-item text-center font-weight-bold py-2" href="<?php echo constant('URL'); ?>servicios_stamerica" style="font-size: 0.9rem; color: #4156a5;">
                                    Ver todos los servicios <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link nav-link-custom" href="<?php echo constant('URL'); ?>proyectos_realizados">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom" href="<?php echo constant('URL'); ?>blog_informativo">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom" href="<?php echo constant('URL'); ?>contactanos_STAmerica">Contáctanos</a>
                        </li>
                        <li class="nav-item d-lg-none mt-3">
                            <a href="https://api.whatsapp.com/send?phone=51941683636&text=Hola%20ST%20América,%20deseo%20solicitar%20una%20cotización" target="_blank" rel="noopener" class="btn btn-block btn-cta-header">
                                <i class="fab fa-whatsapp mr-1"></i> Cotizar Proyecto
                            </a>
                        </li>
                    </ul>

                    <!-- Botón CTA llamativo en escritorio -->
                    <div class="d-none d-lg-block ml-lg-3">
                        <a href="https://api.whatsapp.com/send?phone=51941683636&text=Hola%20ST%20América,%20deseo%20solicitar%20una%20cotización" target="_blank" rel="noopener" class="btn btn-cta-header">
                            <i class="fab fa-whatsapp mr-1" style="font-size: 1.1rem;"></i> Cotizar Proyecto
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <style>
        /* Tipografía y Reset */
        body {
            font-family: 'Roboto', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            color: #334155;
            background-color: #ffffff;
            overflow-x: hidden;
        }

        /* Topbar Info */
        .topbar-info {
            background-color: #0f172a;
            color: #94a3b8;
            font-size: 0.84rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }
        .topbar-social {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.12);
            font-size: 0.8rem;
            text-decoration: none !important;
            transition: all 0.2s ease;
        }
        .topbar-social:hover {
            background: #4156a5;
            transform: scale(1.1);
        }

        /* Main Header Sticky */
        .main-header {
            background-color: #ffffff;
            box-shadow: 0 4px 20px -2px rgba(15, 23, 42, 0.08);
            border-bottom: 1px solid #f1f5f9;
            transition: all 0.3s ease;
            z-index: 1040;
        }
        .header-logo {
            max-height: 92px;
            width: auto;
            transition: transform 0.2s ease;
        }
        .header-logo:hover {
            transform: scale(1.02);
        }

        /* Nav Links */
        .nav-link-custom {
            color: #1e293b !important;
            font-weight: 600;
            font-size: 0.95rem;
            padding: 0.75rem 1rem !important;
            letter-spacing: 0.2px;
            position: relative;
            transition: color 0.2s ease;
        }
        .nav-link-custom:hover,
        .nav-link-custom:focus {
            color: #4156a5 !important;
        }
        .nav-link-custom::after {
            content: '';
            position: absolute;
            bottom: 4px;
            left: 50%;
            width: 0;
            height: 2.5px;
            background-color: #4156a5;
            transition: all 0.25s ease;
            transform: translateX(-50%);
            border-radius: 2px;
        }
        .nav-link-custom:hover::after {
            width: 60%;
        }

        /* Dropdown Servicios Moderno */
        .custom-dropdown-menu {
            border-radius: 14px;
            padding: 12px;
            min-width: 380px;
            box-shadow: 0 20px 45px -5px rgba(15, 23, 42, 0.18) !important;
            border: 1px solid #e2e8f0 !important;
            margin-top: 8px;
            animation: dropdownFade 0.25s ease;
        }
        @keyframes dropdownFade {
            from { opacity: 0; transform: translateY(8px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .custom-dropdown-item {
            display: flex;
            align-items: center;
            padding: 10px 14px;
            border-radius: 8px;
            transition: background 0.2s ease, transform 0.15s ease;
            text-decoration: none !important;
        }
        .custom-dropdown-item:hover {
            background-color: #f1f5f9;
            transform: translateX(4px);
        }
        .dropdown-title {
            font-weight: 600;
            color: #1e293b;
            font-size: 0.92rem;
            line-height: 1.3;
        }
        .custom-dropdown-item:hover .dropdown-title {
            color: #4156a5;
        }
        .icon-circle {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background-color: #f1f5f9;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            flex-shrink: 0;
            transition: background 0.2s ease;
        }
        .custom-dropdown-item:hover .icon-circle {
            background-color: #e0e7ff;
        }
        .chevron-icon {
            font-size: 0.75rem;
            transition: transform 0.2s ease;
        }

        /* Botón CTA Header */
        .btn-cta-header {
            background: linear-gradient(135deg, #4156a5 0%, #29386d 100%);
            color: #ffffff !important;
            font-weight: 700;
            font-size: 0.92rem;
            padding: 9px 22px;
            border-radius: 50px;
            box-shadow: 0 4px 15px rgba(65, 86, 165, 0.35);
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            border: none;
            text-decoration: none !important;
        }
        .btn-cta-header:hover {
            background: linear-gradient(135deg, #59e3ff 0%, #4156a5 100%);
            color: #ffffff !important;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(65, 86, 165, 0.45);
        }
        
        @media (max-width: 991.98px) {
            .custom-dropdown-menu {
                min-width: 100%;
                box-shadow: none !important;
                border: 1px solid #f1f5f9 !important;
            }
            .header-logo {
                max-height: 56px;
            }
        }
    </style>

    <script>
        $(document).ready(function() {
            var timeout;
            if (window.innerWidth >= 992) {
                $('#serviciosDropdownContainer').on('mouseenter', function() {
                    clearTimeout(timeout);
                    $('#serviciosDropdownMenu').stop(true, true).fadeIn(150);
                    $(this).find('.chevron-icon').css('transform', 'rotate(180deg)');
                });

                $('#serviciosDropdownContainer').on('mouseleave', function() {
                    var $this = $(this);
                    timeout = setTimeout(function() {
                        $('#serviciosDropdownMenu').stop(true, true).fadeOut(150);
                        $this.find('.chevron-icon').css('transform', 'rotate(0deg)');
                    }, 150);
                });
            } else {
                $('#serviciosDropdownLink').on('click', function(e) {
                    e.preventDefault();
                    $('#serviciosDropdownMenu').slideToggle(200);
                });
            }
        });
    </script>