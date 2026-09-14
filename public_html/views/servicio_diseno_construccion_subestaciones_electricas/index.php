<?php
$metaTitle = "Proyectos Electromecánicos y Montaje de Subestaciones | Perú";
$metaDescription = "Diseño, montaje de subestaciones eléctricas y tendido de redes aéreas y subterráneas de media tensión. Proyectos llave en mano en todo el Perú.";
$metaImage = "https://stamerica.com.pe/public/img/Servicios/Electricidad/Portada_Mantenimiento_Subestaciones.png";

$schemaServiceJsonLd = json_encode([
  "@context" => "https://schema.org",
  "@type" => "Service",
  "serviceType" => "Montaje de subestaciones y proyectos electromecánicos",
  "name" => "Proyectos Electromecánicos y Montaje de Subestaciones Eléctricas",
  "description" => "Diseño, ingeniería, montaje electromecánico de subestaciones eléctricas y tendido de redes de media y alta tensión llave en mano.",
  "provider" => [
    "@type" => "ElectricalContractor",
    "name" => "ST América S.R.L."
  ],
  "areaServed" => [
    ["@type" => "City", "name" => "Lima"],
    ["@type" => "Country", "name" => "Perú"]
  ],
  "url" => "https://stamerica.com.pe/servicio_diseno_construccion_subestaciones_electricas",
  "hasOfferCatalog" => [
    "@type" => "OfferCatalog",
    "name" => "Servicios de montaje electromecánico",
    "itemListElement" => [
      ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Montaje de subestaciones eléctricas compactas y convencionales"]],
      ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Tendido de redes eléctricas aéreas y subterráneas de media tensión"]],
      ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Obras y proyectos electromecánicos llave en mano"]]
    ]
  ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
?>

<?php require 'views/header.php'; ?>

<!-- Portada Inicio -->
<section style="background-color: white;">
    <div class="container-fluid bg-registration" style="margin-top: 10px; background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(public/img/Servicios/Electricidad/Portada_Mantenimiento_Subestaciones.png), no-repeat center center; background-size: cover;">
        <div class="container py-5" style="padding-top: 8rem !important;">
            <div class="row">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <p class="text-white text-uppercase" style="letter-spacing: 5px;">Soluciones Técnicas América</p>
                        <h1 class="text-white">Proyectos Electromecánicos y Montaje de Subestaciones Eléctricas</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portada Fin -->

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-7 mb-5">
                <h2 class="font-weight-bold" style="color: #4156a5;">Diseño y Montaje de Subestaciones Eléctricas</h2>
                <div class="row mt-4">
                    <div class="col-12">
                        <img src="public/img/Servicios/Electricidad/Diseno-Construccion-Subestaciones-Electricas.webp"
                            alt="Montaje electromecánico de subestación eléctrica de media tensión por ingenieros de ST América en Perú"
                            class="img-fluid rounded"
                            width="700" height="400"
                            loading="lazy" decoding="async">
                    </div>
                </div>
                <br>
                <p>Una subestación eléctrica comprende trabajos electromecánicos integrales: montaje de celdas (celda de llegada, celda de transformación, celda de salida y medición), equipamiento de maniobra y protección, así como obras civiles complementarias para cimentaciones y canalizaciones.</p>
                <p>En <strong>SOLUCIONES TÉCNICAS AMÉRICA</strong> ejecutamos proyectos de construcción y montaje de subestaciones en media y alta tensión (10 kV, 22.9 kV, 60 kV) bajo modalidad llave en mano, suministrando ingeniería de detalle, mano de obra calificada y equipamiento homologado para los sectores industrial, minero, comercial y de distribución eléctrica.</p>

                <h3 style="color: #4156a5;">Tipos de subestaciones que diseñamos y montamos:</h3>
                <ul style="padding-left: 0%; list-style: none;">
                    <li><i class="fas fa-check mr-2" style="color: #4156a5;"></i> <strong>Subestaciones Compactas:</strong> Tipo pedestal o bóveda para centros comerciales y edificaciones urbanas con espacio reducido.</li>
                    <li><i class="fas fa-check mr-2" style="color: #4156a5;"></i> <strong>Subestaciones Convencionales:</strong> Casetas de mampostería o intemperie para grandes plantas industriales.</li>
                    <li><i class="fas fa-check mr-2" style="color: #4156a5;"></i> <strong>Subestaciones Aéreas Monoposte y Biposte:</strong> Para electrificación rural, alimentadores y zonas periféricas.</li>
                    <li><i class="fas fa-check mr-2" style="color: #4156a5;"></i> Montaje electromecánico de celdas en SF6 y aire, transformadores y barras colectoras.</li>
                </ul>

                <br>
                <h2 class="font-weight-bold" style="color: #4156a5;">Tendido de Redes Eléctricas Aéreas de Media Tensión</h2>
                <p>Instalación y montaje integral de líneas de distribución aérea en media tensión, incluyendo izado de postes de concreto o torres metálicas, armado de estructuras, retenidas, aisladores poliméricos o de porcelana y tendido de conductores desnudos o protegidos.</p>

                <br>
                <h2 class="font-weight-bold" style="color: #4156a5;">Tendido de Redes Eléctricas Subterráneas</h2>
                <p>Ejecución de zanjas, bancos de ductos, buzones de pase, tendido y conexionado de cables secos tipo N2XSY con terminales termocontraíbles y pruebas de rigidez dieléctrica VLF para garantizar máxima confiabilidad y seguridad operativa.</p>

                <br>
                <h2 class="font-weight-bold" style="color: #4156a5;">Proyectos Electromecánicos Ejecutados en el Perú</h2>
                <p>Conoce nuestros principales casos de éxito y obras entregadas a satisfacción en nuestra sección de <a href="<?php echo constant('URL'); ?>proyectos_realizados" style="color: #4156a5; font-weight: 500;">Proyectos Realizados</a>. Además, complementamos la puesta en servicio con planes de <a href="<?php echo constant('URL'); ?>servicio_mantenimiento_subestaciones_electricas" style="color: #4156a5; font-weight: 500;">mantenimiento preventivo de subestaciones</a>.</p>
            </div>

            <div class="col-lg-5">
                <br><br>
                <div class="bg-light shadow rounded overflow-hidden sticky-top" style="top: 100px;">
                    <div class="bg-white text-center p-3">
                        <h3 class="m-0" style="color: #4156a5;"><b>Cotiza tu Proyecto</b></h3>
                    </div>
                    <div class="p-4">
                        <form action="https://formsubmit.co/ventas@stamerica.com.pe" method="POST">
                            <div class="form-group">
                                <input id="nombres" name="nombre" type="text" class="form-control" placeholder="Ingrese Nombre / Razón Social" required>
                            </div>
                            <div class="form-group">
                                <textarea id="apellidos" name="mensaje" class="form-control" placeholder="Describe los alcances de tu proyecto electromecánico o subestación..." style="width: 100%; height: 180px; resize: none;" required></textarea>
                            </div>
                            <button type="submit" id="send" class="btn btn-block" style="background-color: #4156a5; color: white;">Solicitar Cotización</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require 'views/footer.php'; ?>