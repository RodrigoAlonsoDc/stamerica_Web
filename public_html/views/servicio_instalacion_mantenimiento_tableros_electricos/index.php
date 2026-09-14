<?php
$metaTitle = "Mantenimiento de Tableros Eléctricos en Lima | ST América";
$metaDescription = "Montaje, instalación y mantenimiento de tableros eléctricos de distribución y control, con termografía y ajuste de protecciones. Todo el Perú.";
$metaImage = "https://stamerica.com.pe/public/img/Servicios/Electricidad/Portada_Mantenimiento_Subestaciones.png";

$schemaServiceJsonLd = json_encode([
  "@context" => "https://schema.org",
  "@type" => "Service",
  "serviceType" => "Instalación y mantenimiento de tableros eléctricos",
  "name" => "Instalación y Mantenimiento de Tableros Eléctricos",
  "description" => "Fabricación, montaje, mantenimiento preventivo y termografía infrarroja de tableros eléctricos de distribución, control y fuerza según normas IEC.",
  "provider" => [
    "@type" => "ElectricalContractor",
    "name" => "ST América S.R.L."
  ],
  "areaServed" => [
    ["@type" => "City", "name" => "Lima"],
    ["@type" => "Country", "name" => "Perú"]
  ],
  "url" => "https://stamerica.com.pe/servicio_instalacion_mantenimiento_tableros_electricos",
  "hasOfferCatalog" => [
    "@type" => "OfferCatalog",
    "name" => "Servicios en tableros eléctricos",
    "itemListElement" => [
      ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Montaje y ensamblaje de tableros eléctricos de distribución y fuerza"]],
      ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Mantenimiento preventivo y correctivo de tableros eléctricos"]],
      ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Inspección termográfica y calibración de interruptores termomagnéticos y diferenciales"]]
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
                        <h1 class="text-white">Instalación y Mantenimiento de Tableros Eléctricos</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portada Fin -->

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-7 mb-5">
                <h2 class="font-weight-bold" style="color: #4156a5;">Montaje y Ensamblaje de Tableros Eléctricos</h2>
                <div class="row mt-4">
                    <div class="col-6">
                        <img src="public/img/Servicios/Electricidad/instalacion_tablero_electrico1.png"
                            alt="Montaje y conexionado de tablero eléctrico de distribución general en planta industrial de Lima"
                            class="img-fluid rounded"
                            width="400" height="300"
                            loading="lazy" decoding="async">
                    </div>
                    <div class="col-6">
                        <img src="public/img/Servicios/Electricidad/instalacion_tablero_electrico2.png"
                            alt="Inspección y rotulado técnico de barras y llaves termomagnéticas en tablero eléctrico ST América"
                            class="img-fluid rounded"
                            width="400" height="300"
                            loading="lazy" decoding="async">
                    </div>
                </div>
                <br>
                <p>En <strong>SOLUCIONES TÉCNICAS AMÉRICA</strong> diseñamos, integramos, ensamblamos e instalamos tableros eléctricos en baja y media tensión con componentes certificados de marcas líderes globales (Schneider Electric, ABB, Siemens, Legrand). Cumplimos rigurosamente con las directrices del Código Nacional de Electricidad (CNE) y las normas internacionales IEC 61439-1 / IEC 61439-2.</p>

                <br>
                <h2 class="font-weight-bold" style="color: #4156a5;">Mantenimiento Preventivo de Tableros de Distribución</h2>
                <p>El mantenimiento preventivo periódico previene cortocircuitos, sobrecalentamientos de barras e incendios eléctricos en instalaciones industriales y comerciales. Nuestro procedimiento comprende:</p>
                <ul style="padding-left: 0%; list-style: none;">
                    <li><i class="fas fa-check mr-2" style="color: #4156a5;"></i> Limpieza dieléctrica y aspirado de polvo y residuos en barras y envolventes.</li>
                    <li><i class="fas fa-check mr-2" style="color: #4156a5;"></i> Reajuste y torqueo de pernos en barras colectoras y bornes de conexión.</li>
                    <li><i class="fas fa-check mr-2" style="color: #4156a5;"></i> Pruebas de disparo y verificación operativa de interruptores termomagnéticos y diferenciales.</li>
                    <li><i class="fas fa-check mr-2" style="color: #4156a5;"></i> Revisión de conexión a la barra de tierra conectada al <a href="<?php echo constant('URL'); ?>servicio_construccion_mantenimiento_puesta_tierra" style="color: #4156a5; font-weight: 500;">sistema de pozo a tierra</a>.</li>
                </ul>

                <br>
                <h2 class="font-weight-bold" style="color: #4156a5;">Termografía Infrarroja y Ajuste de Protecciones</h2>
                <p>Realizamos inspección termográfica con cámaras infrarrojas Fluke calibradas con carga eléctrica activa para identificar de inmediato puntos calientes, sobrecargas o conexiones flojas antes de que provoquen una parada de planta. Entregamos informe termográfico con imágenes térmicas y cuadro de severidad.</p>

                <br>
                <h2 class="font-weight-bold" style="color: #4156a5;">Tipos de Tableros que Fabricamos e Instalamos</h2>
                <ul style="padding-left: 0%; list-style: none;">
                    <li><i class="fas fa-tools mr-2" style="color: #4156a5;"></i> <strong>Tablero General (TG):</strong> Centro neurálgico de recepción y derivación de la energía eléctrica de la edificación o planta.</li>
                    <li><i class="fas fa-tools mr-2" style="color: #4156a5;"></i> <strong>Tableros de Distribución (TD):</strong> Control y protección de circuitos derivados de fuerza, iluminación y tomacorrientes.</li>
                    <li><i class="fas fa-tools mr-2" style="color: #4156a5;"></i> <strong>Tableros de Transferencia Automática (TTA):</strong> Conmutación automática instantánea entre la red pública y grupos electrógenos de respaldo.</li>
                    <li><i class="fas fa-tools mr-2" style="color: #4156a5;"></i> <strong>Centro de Control de Motores (CCM):</strong> Control de bombas, compresoras y motores con arrancadores suaves o variadores de frecuencia.</li>
                    <li><i class="fas fa-tools mr-2" style="color: #4156a5;"></i> <strong><a href="<?php echo constant('URL'); ?>servicio_instalacion_mantenimiento_banco_condensadores" style="color: #4156a5; font-weight: 500;">Tableros de Banco de Condensadores</a>:</strong> Compensación de energía reactiva para eliminar penalizaciones en el recibo de luz.</li>
                </ul>
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
                                <textarea id="apellidos" name="mensaje" class="form-control" placeholder="Indica tipo de tablero, mantenimiento, termografía o requerimiento..." style="width: 100%; height: 180px; resize: none;" required></textarea>
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