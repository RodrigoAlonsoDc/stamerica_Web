<?php
$metaTitle = "Banco de Condensadores: Instalación y Mantenimiento | Perú";
$metaDescription = "Instalamos y mantenemos bancos de condensadores para corregir el factor de potencia y evitar recargos en tu recibo eléctrico. Lima y provincias.";
$metaImage = "https://stamerica.com.pe/public/img/Servicios/Electricidad/Portada_Mantenimiento_Subestaciones.png";

$schemaServiceJsonLd = json_encode([
  "@context" => "https://schema.org",
  "@type" => "Service",
  "serviceType" => "Instalación y mantenimiento de banco de condensadores",
  "name" => "Instalación y Mantenimiento de Banco de Condensadores",
  "description" => "Diseño, dimensionamiento, montaje y mantenimiento de bancos de condensadores automáticos y fijos para corrección del factor de potencia y eliminación de recargos por energía reactiva.",
  "provider" => [
    "@type" => "ElectricalContractor",
    "name" => "ST América S.R.L."
  ],
  "areaServed" => [
    ["@type" => "City", "name" => "Lima"],
    ["@type" => "Country", "name" => "Perú"]
  ],
  "url" => "https://stamerica.com.pe/servicio_instalacion_mantenimiento_banco_condensadores",
  "hasOfferCatalog" => [
    "@type" => "OfferCatalog",
    "name" => "Servicios de bancos de condensadores",
    "itemListElement" => [
      ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Dimensionamiento y montaje de banco de condensadores automático"]],
      ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Mantenimiento preventivo y correctivo de condensadores y reguladores"]],
      ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Estudio de calidad de energía y compensación de reactivos"]]
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
                        <h1 class="text-white">Instalación y Mantenimiento de Banco de Condensadores</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portada Fin -->

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-7 mb-5">
                <h2 class="font-weight-bold" style="color: #4156a5;">Corrección del Factor de Potencia y Ahorro en el Recibo de Luz</h2>
                <div class="row mt-4">
                    <div class="col-6">
                        <img src="public/img/Servicios/Electricidad/Medicion_de_Aislamiento.png"
                            alt="Medición de capacitancia y revisión de celdas en banco de condensadores en Lima"
                            class="img-fluid rounded"
                            width="400" height="300"
                            loading="lazy" decoding="async">
                    </div>
                    <div class="col-6">
                        <img src="public/img/Servicios/Electricidad/analisis_pruebas_electricas1.webp"
                            alt="Mantenimiento preventivo y termografía de banco de condensadores industrial ST América"
                            class="img-fluid rounded"
                            width="400" height="300"
                            loading="lazy" decoding="async">
                    </div>
                </div>
                <br>
                <p>En el sector comercial e industrial peruano, uno de los mayores sobrecostos en la facturación eléctrica se debe a la <strong>penalización por consumo de energía reactiva (kVARh)</strong> cuando el factor de potencia cae por debajo de <strong>0.96</strong> según la normativa de OSINERGMIN.</p>
                <p>La instalación de un <strong>banco de condensadores automático</strong> compensa la energía reactiva demandada por motores, transformadores y cargas inductivas, elevando el factor de potencia a valores óptimos (0.98 – 1.00), eliminando de inmediato los recargos en el recibo y liberando capacidad de carga en sus <a href="<?php echo constant('URL'); ?>servicio_instalacion_mantenimiento_tableros_electricos" style="color: #4156a5; font-weight: 500;">tableros eléctricos</a> y transformadores.</p>

                <br>
                <h2 class="font-weight-bold" style="color: #4156a5;">Dimensionamiento del Banco de Condensadores (kVAR)</h2>
                <p>Para determinar la potencia reactiva exacta requerida, realizamos un <a href="<?php echo constant('URL'); ?>servicio_estudio_calidad_energia" style="color: #4156a5; font-weight: 500;">estudio de calidad de energía</a> con analizador de redes de clase A. Esto permite medir la distorsión armónica total (THD) y dimensionar el banco con o sin reactancias de rechazo (desintonizadas) para evitar resonancias peligrosas.</p>

                <br>
                <h2 class="font-weight-bold" style="color: #4156a5;">Mantenimiento de Bancos de Condensadores Automáticos y Fijos</h2>
                <p>El protocolo de mantenimiento preventivo de ST América incluye:</p>
                <ul style="padding-left: 0%; list-style: none;">
                    <li><i class="fas fa-check mr-2" style="color: #4156a5;"></i> <strong>Inspección visual y termográfica:</strong> Detección de celdas hinchadas, fugas dieléctricas o calentamiento en bornes.</li>
                    <li><i class="fas fa-check mr-2" style="color: #4156a5;"></i> <strong>Medición de capacitancia:</strong> Verificación de microfaradios (µF) por paso para descartar celdas degradadas.</li>
                    <li><i class="fas fa-check mr-2" style="color: #4156a5;"></i> <strong>Revisión de contactores y contactores especiales:</strong> Verificación de resistencias de preinserción contra picos de corriente.</li>
                    <li><i class="fas fa-check mr-2" style="color: #4156a5;"></i> <strong>Configuración del regulador automático de factor de potencia:</strong> Ajuste de cos φ objetivo, tiempos de retardo y secuencia de pasos.</li>
                    <li><i class="fas fa-check mr-2" style="color: #4156a5;"></i> Limpieza con solvente dieléctrico y reajuste de torque en todas las conexiones.</li>
                </ul>

                <br>
                <h2 class="font-weight-bold" style="color: #4156a5;">Atención en Lima y Provincias del Perú</h2>
                <p>Brindamos asesoría técnica, suministro, montaje y mantenimiento correctivo de emergencia en plantas industriales, edificios corporativos y centros comerciales en Lima y provincias del Perú.</p>
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
                                <textarea id="apellidos" name="mensaje" class="form-control" placeholder="Indica recargo en tu recibo, potencia o requerimiento de banco de condensadores..." style="width: 100%; height: 180px; resize: none;" required></textarea>
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