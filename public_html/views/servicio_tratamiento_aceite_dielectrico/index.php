<?php
$metaTitle = "Tratamiento de Aceite Dieléctrico y Termovacío | ST América";
$metaDescription = "Termovacío, regeneración y filtrado de aceite dieléctrico para transformadores en operación o fuera de servicio. Lima y provincias del Perú.";
$metaImage = "https://stamerica.com.pe/public/img/Servicios/Electricidad/Portada_Mantenimiento_Subestaciones.png";

$schemaServiceJsonLd = json_encode([
  "@context" => "https://schema.org",
  "@type" => "Service",
  "serviceType" => "Tratamiento de aceite dieléctrico",
  "name" => "Tratamiento de Aceite Dieléctrico y Termovacío para Transformadores",
  "description" => "Servicio técnico especializado de termovacío, regeneración con tierra fuller, desgasificado y análisis fisicoquímico de aceite dieléctrico en transformadores.",
  "provider" => [
    "@type" => "ElectricalContractor",
    "name" => "ST América S.R.L."
  ],
  "areaServed" => [
    ["@type" => "City", "name" => "Lima"],
    ["@type" => "Country", "name" => "Perú"]
  ],
  "url" => "https://stamerica.com.pe/servicio_tratamiento_aceite_dielectrico",
  "hasOfferCatalog" => [
    "@type" => "OfferCatalog",
    "name" => "Servicios de tratamiento de aceite",
    "itemListElement" => [
      ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Tratamiento de aceite por termovacío en sitio"]],
      ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Regeneración de aceite dieléctrico con tierra fuller"]],
      ["@type" => "Offer", "itemOffered" => ["@type" => "Service", "name" => "Análisis fisicoquímico y cromatografía de gases disueltos (DGA)"]]
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
                        <h1 class="text-white">Tratamiento de Aceite Dieléctrico para Transformadores</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portada Fin -->

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-7 mb-5">
                <h2 class="font-weight-bold" style="color: #4156a5;">Tratamiento por Termovacío: En Qué Consiste el Proceso</h2>
                <div class="row mt-4">
                    <div class="col-6">
                        <img src="public/img/Servicios/Electricidad/aceite_tratamiendo_2.jpg"
                            alt="Proceso de filtrado y termovacío de aceite dieléctrico en transformador de potencia en Lima"
                            class="img-fluid rounded"
                            width="400" height="300"
                            loading="lazy" decoding="async">
                    </div>
                    <div class="col-6">
                        <img src="public/img/Servicios/Electricidad/tratamiento_aceite.png"
                            alt="Planta móvil de regeneración y termovacío de aceite dieléctrico ST América"
                            class="img-fluid rounded"
                            width="400" height="300"
                            loading="lazy" decoding="async">
                    </div>
                </div>
                <br>
                <p>En <strong>SOLUCIONES TÉCNICAS AMÉRICA</strong> contamos con plantas móviles de termovacío para el reacondicionamiento in situ de aceites dieléctricos en transformadores de distribución y potencia, operando tanto desenergizados como en servicio según las condiciones del sistema.</p>
                <p>El tratamiento por termovacío calienta el aceite y lo somete a alto vacío en una cámara desgasificadora para extraer eficazmente la humedad disuelta, los gases combustibles y las micropartículas sólidas en suspensión. Evaluamos el resultado mediante pruebas de <strong>rigidez dieléctrica bajo normas ASTM D877 y ASTM D1816</strong>, logrando valores superiores a los 50 kV y contenidos de agua por debajo de 10 ppm.</p>

                <br>
                <h2 class="font-weight-bold" style="color: #4156a5;">Regeneración de Aceite Dieléctrico con Tierra Fuller</h2>
                <p>Cuando el aceite presenta degradación química severa, acidez elevada (mayor a 0.20 mg KOH/g) o coloración oscura por envejecimiento térmico, el termovacío simple no es suficiente. El proceso de <strong>regeneración con columnas de tierra fuller</strong> reactiva las propiedades del fluido eliminando lodos, barnices, productos polares de oxidación y restaurando la tensión interfacial.</p>
                <ul style="padding-left: 0%; list-style: none;">
                    <li><i class="fas fa-check mr-2" style="color: #4156a5;"></i> Restauración del número de neutralización (acidez) a valores de aceite nuevo.</li>
                    <li><i class="fas fa-check mr-2" style="color: #4156a5;"></i> Aumento de la tensión interfacial y mejora del factor de potencia / tangente delta.</li>
                    <li><i class="fas fa-check mr-2" style="color: #4156a5;"></i> Retardo significativo en el envejecimiento del papel aislante celulósico del devanado.</li>
                </ul>

                <br>
                <h2 class="font-weight-bold" style="color: #4156a5;">Análisis Fisicoquímico y Cromatografía de Gases Disueltos (DGA)</h2>
                <p>Antes y después de cada tratamiento, emitimos protocolos certificados con laboratorios especializados:</p>
                <ul style="padding-left: 0%; list-style: none;">
                    <li><i class="fas fa-tools mr-2" style="color: #4156a5;"></i> <strong>Análisis Fisicoquímico:</strong> Rigidez dieléctrica (kV), contenido de agua (ppm por Karl Fischer), acidez (mg KOH/g), tensión interfacial y densidad.</li>
                    <li><i class="fas fa-tools mr-2" style="color: #4156a5;"></i> <strong>Cromatografía de Gases Disueltos (DGA):</strong> Detección de hidrógeno, metano, etano, etileno, acetileno y monóxido de carbono para diagnosticar descargas parciales, arcos eléctricos o sobrecalentamiento interno.</li>
                    <li><i class="fas fa-tools mr-2" style="color: #4156a5;"></i> Complementario con <a href="<?php echo constant('URL'); ?>servicio_analisis_pruebas_electricas" style="color: #4156a5; font-weight: 500;">Pruebas Eléctricas TTR y Aislamiento Megado</a>.</li>
                </ul>

                <br>
                <h2 class="font-weight-bold" style="color: #4156a5;">¿Cuándo Hay que Tratar el Aceite de un Transformador?</h2>
                <p>Se recomienda realizar inspección semestral o anual dentro del plan de <a href="<?php echo constant('URL'); ?>servicio_mantenimiento_subestaciones_electricas" style="color: #4156a5; font-weight: 500;">mantenimiento de subestaciones eléctricas</a>. Es urgente intervenir cuando la rigidez dieléctrica cae por debajo de 30 kV o la humedad supera los 25–30 ppm.</p>

                <br>
                <h2 class="font-weight-bold" style="color: #4156a5;">Atención en Lima y Provincias del Perú</h2>
                <p>Desplazamos nuestras unidades de tratamiento de termovacío a subestaciones en Lima Metropolitana, Callao y plantas mineras e industriales en todo el Perú, con personal certificado y equipamiento calibrado.</p>
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
                                <textarea id="apellidos" name="mensaje" class="form-control" placeholder="Indica volumen de aceite, potencia del transformador o requerimiento..." style="width: 100%; height: 180px; resize: none;" required></textarea>
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