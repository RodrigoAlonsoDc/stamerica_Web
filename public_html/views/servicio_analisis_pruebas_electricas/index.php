<?php
$metaTitle = "Pruebas Eléctricas a Transformadores y Subestaciones | Perú";
$metaDescription = "Pruebas de aislamiento, TTR, resistencia de devanados y análisis de aceite con protocolo e informe firmado. Lima y provincias del Perú.";
$metaImage = "https://stamerica.com.pe/public/img/Servicios/Electricidad/Portada_Mantenimiento_Subestaciones.png";

$schemaServiceJsonLd = json_encode([
  "@context" => "https://schema.org",
  "@type" => "Service",
  "serviceType" => "Pruebas eléctricas a transformadores y subestaciones",
  "name" => "Pruebas Eléctricas en Transformadores y Subestaciones",
  "description" => "Ensayos de rutina y diagnóstico predictivo: resistencia de aislamiento (megado), relación de transformación (TTR), resistencia de devanados y factor de potencia.",
  "provider" => [
    "@type" => "ElectricalContractor",
    "name" => "ST América S.R.L."
  ],
  "areaServed" => [
    ["@type" => "City", "name" => "Lima"],
    ["@type" => "Country", "name" => "Perú"]
  ],
  "url" => "https://stamerica.com.pe/servicio_analisis_pruebas_electricas",
  "hasOfferCatalog" => [
    "@type" => "OfferCatalog",
    "name" => "Servicios de pruebas eléctricas",
    "itemListElement" => [
      ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Prueba de resistencia de aislamiento y rigidez dieléctrica (Megado)"]],
      ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Medición de relación de transformación y polaridad (TTR)"]],
      ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Medición de resistencia óhmica de devanados y corriente de excitación"]]
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
                        <h1 class="text-white">Pruebas Eléctricas en Transformadores y Subestaciones</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portada Fin -->

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-7 mb-5">
                <h2 class="font-weight-bold" style="color: #4156a5;">Pruebas de Resistencia de Aislamiento (Megado)</h2>
                <div class="row mt-4">
                    <div class="col-6">
                        <img src="public/img/Servicios/Electricidad/portada_analisis_pruebas_electricas.webp"
                            alt="Prueba de resistencia de aislamiento con megóhmetro a transformador de potencia en subestación de Lima"
                            class="img-fluid rounded"
                            width="400" height="300"
                            loading="lazy" decoding="async">
                    </div>
                    <div class="col-6">
                        <img src="public/img/Servicios/Electricidad/Medicion_de_Aislamiento.webp"
                            alt="Medición de relación de transformación TTR e índice de polarización por ingenieros de ST América"
                            class="img-fluid rounded"
                            width="400" height="300"
                            loading="lazy" decoding="async">
                    </div>
                </div>
                <br>
                <p>Las mediciones y pruebas eléctricas de rutina y diagnóstico predictivo en transformadores eléctricos y subestaciones permiten determinar el estado real del activo, detectar a tiempo envejecimiento de aislamientos y ejecutar acciones preventivas antes de que ocurran fallas catastróficas.</p>
                <p>La prueba con megóhmetro (5 kV / 10 kV) determina el nivel de aislamiento entre devanados primario, secundario y tierra, calculando el <strong>Índice de Polarización (IP)</strong> y la <strong>Relación de Absorción Dieléctrica (DAR)</strong> para descartar humedad o contaminación interna.</p>

                <br>
                <h2 class="font-weight-bold" style="color: #4156a5;">Relación de Transformación (TTR) y Polaridad</h2>
                <p>Determinamos la relación de espiras entre el devanado primario y secundario en todas las posiciones del conmutador de tomas (Tap Changer). Comprobamos que el error de relación no supere el límite normativo de ±0.5% según la norma IEEE C57.12.90 y verificamos el grupo de conexión vectorial del transformador.</p>

                <br>
                <h2 class="font-weight-bold" style="color: #4156a5;">Resistencia de Devanados y Factor de Potencia (Tangente Delta)</h2>
                <p>Medimos la resistencia óhmica de los devanados en corriente continua con microóhmetro de precisión para verificar la continuidad de bobinas, calidad de soldaduras internas y contactos del cambiador de tomas. La prueba de tangente delta (Tan δ) evalúa las pérdidas dieléctricas del sistema de aislamiento en conjunto.</p>

                <br>
                <h2 class="font-weight-bold" style="color: #4156a5;">Protocolo e Informe de Pruebas Eléctricas Certificado</h2>
                <p>Todos nuestros ensayos incluyen la emisión de un <strong>Protocolo de Pruebas Eléctricas</strong> con datos de placa, valores medidos corregidos por temperatura a 75 °C / 85 °C, comparación con tolerancias normativas internacionales (IEEE / IEC) y conclusiones técnicas firmadas por Ingeniero Colegiado.</p>
                <p>Complementamos estos ensayos con el servicio de <a href="<?php echo constant('URL'); ?>servicio_tratamiento_aceite_dielectrico" style="color: #4156a5; font-weight: 500;">tratamiento de aceite dieléctrico</a> y el <a href="<?php echo constant('URL'); ?>servicio_mantenimiento_subestaciones_electricas" style="color: #4156a5; font-weight: 500;">mantenimiento preventivo de subestaciones eléctricas</a>.</p>
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
                                <textarea id="apellidos" name="mensaje" class="form-control" placeholder="Indica tipo de transformador, potencia, pruebas requeridas o protocolo..." style="width: 100%; height: 180px; resize: none;" required></textarea>
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