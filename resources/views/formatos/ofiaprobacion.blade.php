<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor de Oficio Aprobacion</title>
    <link rel="stylesheet" href="{{ asset('styles/infobservado.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="{{ asset('js/infobservado.js') }}"></script>
    <script src="https://cdn.tiny.cloud/1/nyuio3arpf9o0ihwut9yxxpf7a4xoiz6iyh525sv0m26z7q2/tinymce/6/langs/es.min.js"></script>
    <!-- TinyMCE CDN - Reemplaza 'no-api-key' con tu clave real -->
    <script src="https://cdn.tiny.cloud/1/nyuio3arpf9o0ihwut9yxxpf7a4xoiz6iyh525sv0m26z7q2/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
    <div class="main-container">
        {{-- Menú lateral --}}
        @include('menu_general.menu_general')
        
    <div class="page-wrapper">
        <div class="editor-container">
            <h1>Edición de la Plantilla para Oficio Aprobación</h1>
            <p class="subtitle">Por favor ingrese los datos solicitados</p>


            <!-- Sección Asunto -->
            <div class="editor-section">
                <h2>Asunto</h2>

                <textarea id="asunto-editor" class="tiny-editor">
                    <div class="template-variable">
                        <p>
                            APROBACIÓN AL <span class="variable"><strong>[tipoObligacion]</strong></span> DEL PROYECTO "<span class="variable"><strong>[nombreProyecto]</strong></span>" PERIODO <span class="variable"><strong>[periodo]</strong></span>
                        </p>
                    </div>
                </textarea>
            </div>

            <!-- Sección Para -->
            <div class="editor-section">
                <h2>Para</h2>

                <textarea id="asunto-editor" class="tiny-editor">
                    <div class="template-variable">
                        <p>
                            <span class="variable"><strong>[nivelInstruccion]</strong></span><br>
                            <span class="variable"><strong>[nombresApellidos]</strong></span><br><br>
                            <strong>REPRESENTANTE LEGAL</strong>
                        </p>
                    </div>
                </textarea>
            </div>


            <!-- Sección Cuerpo -->
            <div class="editor-section">
                <h2>Cuerpo</h2>

                <textarea id="antecedentes-editor" class="tiny-editor">
                    <!-- Texto con variables -->
                    <div class="template-text">
                        <p>
                            Mediante Oficio Nro. <span class="variable"><strong>[numeroOficio]</strong></span> de fecha <span class="variable"><strong>[fechaOficio]</strong></span>, ingresado a esta dependencia administrativa el <span class="variable"><strong>[fechaIngreso]</strong></span> con Trámite <span class="variable"><strong>[numeroTramite]</strong></span>, remite el <span class="variable"><strong>[nombreSolicitante]</strong></span>, las facturas de pago por concepto pronunciamiento respecto a <span class="variable"><strong>[tipoObligacion]</strong></span> Nº <span class="variable"><strong>[numeroFactura]</strong></span> de fecha <span class="variable"><strong>[fechaFactura]</strong></span> por un valor de USD <span class="variable"><strong>[valorFactura]</strong></span> y pago por control y seguimiento de Pcs Nº <span class="variable"><strong>[numeroFacturaControl]</strong></span> de fecha <span class="variable"><strong>[fechaFacturaControl]</strong></span> por un valor de USD <span class="variable"><strong>[valorFacturaControl]</strong></span>, del <span class="variable"><strong>[tipoObligacion]</strong></span> del Proyecto "<span class="variable"><strong>[nombreProyecto]</strong></span>", ubicado en el cantón <span class="variable"><strong>[nombreCanton]</strong></span> correspondiente al periodo <span class="variable"><strong>[periodo]</strong></span> para su análisis y pronunciamiento.
                        </p>

                        <p>
                            Al respecto, y en base al Informe técnico remitido mediante Memorando, se determina que las facturas ingresadas corresponden al pago por concepto pronunciamiento respecto a informes ambientales de cumplimiento Nº <span class="variable"><strong>[numeroFactura]</strong></span> de fecha <span class="variable"><strong>[fechaFactura]</strong></span> por un valor de USD <span class="variable"><strong>[valorFactura]</strong></span> y el pago por control y seguimiento Pcs Nº <span class="variable"><strong>[numeroFacturaControl]</strong></span> de fecha <span class="variable"><strong>[fechafacturaControl]</strong></span> por un valor de USD <span class="variable"><strong>[valorFacturaControl]</strong></span>, Aprueba, el <span class="variable"><strong>[tipoObligacion]</strong></span> proyecto "<span class="variable"><strong>[nombreProyecto]</strong></span>", ubicado en el Cantón <span class="variable"><strong>[nombreCanton]</strong></span>, Provincia de <span class="variable"><strong>[nombreProvincia]</strong></span>, correspondiente al periodo <span class="variable"><strong>[periodo]</strong></span>, cabe recalcar que el representante legal deberá cumplir estrictamente con el Plan de Manejo Ambiental para lo cual la Autoridad Ambiental Competente se encargará del control y seguimiento.
                        </p>
                    </div>
                </textarea>
            </div>

            <div class="action-buttons">
                <button class="btn-save"><i class="fas fa-save"></i> Guardar</button>
                <button class="btn-cancel"><i class="fas fa-times"></i> Cancelar</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>