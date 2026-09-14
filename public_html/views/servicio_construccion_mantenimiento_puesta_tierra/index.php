<?php
$metaTitle = "Pozo a Tierra: Instalación, Medición y Certificado | Lima";
$metaDescription = "Instalación, mantenimiento y medición de pozo a tierra con telurómetro. Entregamos certificado y protocolo según el CNE. Lima y provincias.";
$metaImage = "https://stamerica.com.pe/public/img/Servicios/Electricidad/Portada_Mantenimiento_Subestaciones.png";

$schemaServiceJsonLd = json_encode([
  "@context" => "https://schema.org",
  "@type" => "Service",
  "serviceType" => "Instalación y mantenimiento de pozo a tierra",
  "name" => "Sistema de Puesta a Tierra: Instalación, Mantenimiento y Medición",
  "description" => "Instalación de pozos a tierra verticales y horizontales, medición con telurómetro calibrado y emisión de protocolo y certificado de pozo a tierra firmado por ingeniero colegiado.",
  "provider" => [
    "@type" => "ElectricalContractor",
    "name" => "ST América S.R.L."
  ],
  "areaServed" => [
    ["@type" => "City", "name" => "Lima"],
    ["@type" => "Country", "name" => "Perú"]
  ],
  "url" => "https://stamerica.com.pe/servicio_construccion_mantenimiento_puesta_tierra",
  "hasOfferCatalog" => [
    "@type" => "OfferCatalog",
    "name" => "Servicios de puesta a tierra",
    "itemListElement" => [
      ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Instalación y construcción de pozo a tierra vertical y horizontal"]],
      ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Mantenimiento y reactivación química de pozos a tierra con bentonita y gel conductivo"]],
      ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Medición de telurómetro y emisión de certificado de operatividad INDECI"]]
    ]
  ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
?>

<?php require 'views/header.php'; ?>

<!-- Portada Inicio -->
<section style="background-color: white;">
    <div class="container-fluid bg-registration" style="margin: 0px; background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(public/img/Servicios/Electricidad/Portada_Mantenimiento_Subestaciones.png), no-repeat center center; background-size: cover;">
        <div class="container py-5" style="padding-top: 8rem !important;">
            <div class="row">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <p class="text-white text-uppercase" style="letter-spacing: 5px;">Soluciones Técnicas América</p>
                        <h1 class="text-white">Sistema de Puesta a Tierra: Instalación, Mantenimiento y Medición</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portada Fin -->

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-7 mb-5">
                <h2 class="font-weight-bold" style="color: #4156a5;">Instalación de Pozo a Tierra en Lima y Provincias</h2>
                <div class="row mt-4">
                    <div class="col-6">
                        <img src="public/img/Servicios/Electricidad/Puesta-Tierra.webp"
                            alt="Construcción e instalación de pozo a tierra vertical con tierra de chacra y cemento conductivo en Lima"
                            class="img-fluid rounded"
                            width="400" height="300"
                            loading="lazy" decoding="async">
                    </div>
                    <div class="col-6">
                        <img src="public/img/Servicios/puesta_tierra.jpg"
                            alt="Medición de resistencia óhmica de pozo a tierra con telurómetro digital calibrado por ST América"
                            class="img-fluid rounded"
                            width="400" height="300"
                            loading="lazy" decoding="async">
                    </div>
                </div>
                <br>
                <p>Un pozo a tierra o sistema de puesta a tierra es una instalación de seguridad eléctrica indispensable para derivar fallas y descargas atmosféricas directamente a tierra. Protege la vida de las personas contra tensiones de contacto y resguarda equipos sensibles, servidores y maquinaria industrial de sobretensiones transitorias.</p>
                <p>En <strong>SOLUCIONES TÉCNICAS AMÉRICA</strong> diseñamos y construimos pozos a tierra verticales y horizontales empleando electrodos de cobre electrolítico, cemento conductivo y dosis químicas de gel de alta dispersión (Thor-Gel / Tierra-Gel), asegurando bajísima resistencia y durabilidad extendida.</p>

                <br>
                <h2 class="font-weight-bold" style="color: #4156a5;">Mantenimiento y Recuperación de Pozos a Tierra Existentes</h2>
                <p>Con el paso del tiempo, la sequedad del terreno y la corrosión aumentan la resistencia eléctrica del pozo, superando los límites permitidos. Nuestro servicio de mantenimiento incluye:</p>
                <ul style="padding-left: 0%; list-style: none;">
                    <li><i class="fas fa-check mr-2" style="color: #4156a5;"></i> Limpieza profunda de la caja de registro y desoxidación de la varilla de cobre y conector tipo AB.</li>
                    <li><i class="fas fa-check mr-2" style="color: #4156a5;"></i> Aplicación y reactivación con sales minerales y dosis química electrolítica / gel conductivo.</li>
                    <li><i class="fas fa-check mr-2" style="color: #4156a5;"></i> Verificación de continuidad en conductores de enlace equipotencial y barra de tierra en <a href="<?php echo constant('URL'); ?>servicio_instalacion_mantenimiento_tableros_electricos" style="color: #4156a5; font-weight: 500;">tableros eléctricos</a>.</li>
                </ul>

                <br>
                <h2 class="font-weight-bold" style="color: #4156a5;">Medición de Resistencia con Telurómetro y Certificado Firmado</h2>
                <p>Efectuamos la medición de resistencia con telurómetro digital con certificado de calibración vigente (método de caída de potencial de 3 hilos o pinza telurópica). Entregamos el <strong>Protocolo de Prueba y Certificado de Operatividad de Pozo a Tierra</strong> firmado por Ingeniero Electricista / Electromecánico colegiado y habilitado (CIP), indispensable para inspecciones de <strong>Defensa Civil (ITSE / INDECI)</strong>, licencias municipales de funcionamiento y pólizas de seguro.</p>

                <br>
                <h2 class="font-weight-bold" style="color: #4156a5;">Preguntas Frecuentes sobre Pozo a Tierra y Certificación</h2>
                <h3 style="color: #4156a5; font-size: 1.15rem;">¿Cuál es el valor de resistencia exigido por el Código Nacional de Electricidad (CNE)?</h3>
                <p>Según la regla 060-712 del CNE (Suministro y Utilización):</p>
                <ul style="padding-left: 0%; list-style: none;">
                    <li><i class="fas fa-bolt mr-2" style="color: #4156a5;"></i> <strong>Instalaciones comerciales, residenciales e industriales en baja tensión:</strong> Menor o igual a <strong>25 Ohmios (Ω)</strong>.</li>
                    <li><i class="fas fa-bolt mr-2" style="color: #4156a5;"></i> <strong>Sistemas de protección contra descargas atmosféricas (pararrayos) y subestaciones:</strong> Menor o igual a <strong>15 Ohmios (Ω)</strong> o 10 Ω.</li>
                    <li><i class="fas fa-bolt mr-2" style="color: #4156a5;"></i> <strong>Centros de datos, cómputo y equipos médicos sensibles:</strong> Menor o igual a <strong>5 Ohmios (Ω)</strong>.</li>
                </ul>

                <h3 style="color: #4156a5; font-size: 1.15rem;">¿Con qué frecuencia debe renovarse el certificado de pozo a tierra?</h3>
                <p>Las municipalidades y Defensa Civil (INDECI) exigen la renovación del protocolo de medición de pozo a tierra con una <strong>vigencia máxima de 1 año (12 meses)</strong>.</p>
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
                                <textarea id="apellidos" name="mensaje" class="form-control" placeholder="Solicita tu pozo a tierra nuevo, mantenimiento o certificado INDECI..." style="width: 100%; height: 180px; resize: none;" required></textarea>
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