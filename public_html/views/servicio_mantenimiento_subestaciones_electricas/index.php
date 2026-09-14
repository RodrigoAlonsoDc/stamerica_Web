<?php
$metaTitle = "Mantenimiento de Subestaciones Eléctricas | Lima y Perú";
$metaDescription = "Mantenimiento preventivo y correctivo de subestaciones eléctricas de media y alta tensión, con pruebas e informes. Lima y provincias del Perú.";
$metaImage = "https://stamerica.com.pe/public/img/Servicios/Electricidad/Portada_Mantenimiento_Subestaciones.png";

$schemaServiceJsonLd = json_encode([
  "@context" => "https://schema.org",
  "@type" => "Service",
  "serviceType" => "Mantenimiento de subestaciones eléctricas",
  "name" => "Mantenimiento de Subestaciones Eléctricas en Media y Alta Tensión",
  "description" => "Mantenimiento preventivo y correctivo de subestaciones eléctricas de media y alta tensión, con protocolos de pruebas e informes técnicos.",
  "provider" => [
    "@type" => "ElectricalContractor",
    "name" => "ST América S.R.L."
  ],
  "areaServed" => [
    ["@type" => "City", "name" => "Lima"],
    ["@type" => "Country", "name" => "Perú"]
  ],
  "url" => "https://stamerica.com.pe/servicio_mantenimiento_subestaciones_electricas",
  "hasOfferCatalog" => [
    "@type" => "OfferCatalog",
    "name" => "Actividades del servicio de subestaciones",
    "itemListElement" => [
      ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Mantenimiento preventivo de subestaciones eléctricas"]],
      ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Mantenimiento correctivo de subestaciones eléctricas"]],
      ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Mantenimiento integral de transformadores de potencia"]]
    ]
  ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
?>

<?php require 'views/header.php'; ?>

<!-- Portada Inicio -->
<section style="background-color: white;">
    <div class="container-fluid" style="margin-top: 10px; background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(public/img/Servicios/Electricidad/Portada_Mantenimiento_Subestaciones.png), no-repeat center center; background-size: cover;">
        <div class="container py-5" style="padding-top: 8rem !important;">
            <div class="row">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <p class="text-white text-uppercase" style="letter-spacing: 5px;">Soluciones Técnicas América</p>
                        <h1 class="text-white">Mantenimiento de Subestaciones Eléctricas en Media y Alta Tensión</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portada Fin -->

    <!-- Sección Descripción + Formulario -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-7 mb-5">
                <h2 class="font-weight-bold" style="color: #4156a5;">Mantenimiento Preventivo de Subestaciones Eléctricas</h2>
                <br>
                <div class="text-center">
                    <img src="public/img/Servicios/Electricidad/stamerica_nosotros_2.jpeg"
                        alt="Especialistas de ST América realizando mantenimiento preventivo en subestación eléctrica de media y alta tensión en Lima"
                        class="img-fluid rounded"
                        width="300"
                        height="200"
                        loading="lazy"
                        decoding="async">
                </div>
                <br>
                <p>Realizamos el servicio de <strong>mantenimiento de subestaciones eléctricas de media y alta tensión</strong> con un plan estratégico riguroso basado en el Código Nacional de Electricidad (CNE) y normas internacionales. Aplicamos protocolos de inspección termográfica, análisis físico-químico y cromatografía de gases, así como pruebas eléctricas operativas con informes técnicos detallados para su seguimiento y control.</p>
                <p>Prolongamos la vida útil y aseguramos el funcionamiento óptimo continuo de los equipos y componentes en subestaciones de 10 kV, 22.9 kV y 60 kV.</p>
                
                <h3 style="color: #4156a5;">¿Qué actividades incluye el mantenimiento preventivo?</h3>
                <ul style="padding-left: 0%; list-style: none;">
                    <li><i class="fas fa-check mr-2" style="color: #4156a5;"></i> Mantenimiento preventivo programado de subestaciones eléctricas aéreas, compactas y convencionales.</li>
                    <li><i class="fas fa-check mr-2" style="color: #4156a5;"></i> Mantenimiento integral de transformadores secos y sumergidos en aceite.</li>
                    <li><i class="fas fa-check mr-2" style="color: #4156a5;"></i> Inspección, limpieza dieléctrica y ajuste de torque en barras, aisladores y seccionadores.</li>
                    <li><i class="fas fa-check mr-2" style="color: #4156a5;"></i> Pruebas de aislamiento (megado) a conductores y transformadores (<a href="<?php echo constant('URL'); ?>servicio_analisis_pruebas_electricas" style="color: #4156a5; font-weight: 500;">ver Pruebas Eléctricas</a>).</li>
                    <li><i class="fas fa-check mr-2" style="color: #4156a5;"></i> <a href="<?php echo constant('URL'); ?>servicio_tratamiento_aceite_dielectrico" style="color: #4156a5; font-weight: 500;">Tratamiento y regeneración de aceite dieléctrico por termovacío</a>.</li>
                </ul>

                <br>
                <h2 class="font-weight-bold" style="color: #4156a5;">Mantenimiento Correctivo de Subestaciones Eléctricas de Media y Alta Tensión</h2>
                <p>Atención oportuna ante fallas imprevistas, con diagnóstico rápido y reemplazo de componentes averiados para restablecer el suministro eléctrico minimizando paradas operativas industriales.</p>
                
                <h3 style="color: #4156a5;">Actividades en el mantenimiento correctivo</h3>
                <ul style="padding-left: 0%; list-style: none;">
                    <li><i class="fas fa-tools mr-2" style="color: #4156a5;"></i> Reemplazo de interruptores de potencia y seccionadores bajo carga.</li>
                    <li><i class="fas fa-tools mr-2" style="color: #4156a5;"></i> Cambio y reparación de transformadores de distribución y potencia.</li>
                    <li><i class="fas fa-tools mr-2" style="color: #4156a5;"></i> Reemplazo de barras colectoras, aisladores pasamuros y pararrayos.</li>
                    <li><i class="fas fa-tools mr-2" style="color: #4156a5;"></i> Atención de emergencias eléctricas 24/7 en plantas industriales y centros comerciales.</li>
                </ul>

                <br>
                <h2 class="font-weight-bold" style="color: #4156a5;">Mantenimiento Integral de Transformadores de Potencia</h2>
                <p>El mantenimiento integral preventivo y correctivo devuelve a los transformadores sus parámetros de diseño, garantizando rigidez dieléctrica, refrigeración adecuada y aislamiento óptimo.</p>
                <ul style="padding-left: 0%; list-style: none;">
                    <li><i class="fas fa-tools mr-2" style="color: #4156a5;"></i> Cambio y ajuste de empaquetaduras para control de fugas de aceite.</li>
                    <li><i class="fas fa-tools mr-2" style="color: #4156a5;"></i> Secado de devanados y eliminación de humedad residual.</li>
                    <li><i class="fas fa-tools mr-2" style="color: #4156a5;"></i> Filtrado, desgasificado y deshumidificación de aceite en sitio.</li>
                    <li><i class="fas fa-tools mr-2" style="color: #4156a5;"></i> Reemplazo de bushings de alta y baja tensión y reparación de fisuras.</li>
                </ul>

                <br>
                <h2 class="font-weight-bold" style="color: #4156a5;">Atención en Lima y Provincias del Perú</h2>
                <p>En <strong>ST América</strong> brindamos cobertura en Lima Metropolitana y a nivel nacional en las principales regiones mineras, industriales y agroindustriales del Perú, cumpliendo con los estándares de seguridad SSOMA y el Código Nacional de Electricidad.</p>
            </div>

            <!-- Formulario de cotización -->
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
                                <textarea id="apellidos" name="mensaje" class="form-control" placeholder="Describe tu requerimiento de mantenimiento de subestaciones..." style="width: 100%; height: 180px; resize: none;" required></textarea>
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