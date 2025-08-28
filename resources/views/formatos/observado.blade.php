<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor de Informe Observado</title>
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
            <h1>Edición De La Plantilla Para Informe Observado</h1>
            <p class="subtitle">Por favor ingrese los datos solicitados</p>

            <!-- Sección Asunto -->
            <div class="editor-section">
                <h2>Asunto</h2>

                <textarea id="asunto-editor" class="tiny-editor">
                    <div class="template-variable">
                        <p>OBSERVACIONES <span class="variable"><strong>[tipoObligacion]</span></strong> DEL PROYECTO <span class="variable"><strong>"[nombreProyecto]"</strong></span> PERIODO <span><strong>[periodo]</strong></span></p>
                    </div>
                </textarea>
            </div>



            <!-- Sección Antecedentes -->
            <div class="editor-section">
                <h2>Antecedentes</h2>

                <textarea id="antecedentes-editor" class="tiny-editor">
                    <!-- Texto con variables -->
                    <div class="template-text">
                        <p>Mediante Oficio Nro. <span class="variable"><strong>[numeroOficio]</strong></span> de fecha <span class="variable"><strong>[fechaOficio]</strong></span>, ingresado a esta dependencia administrativa el <span class="variable"><strong>[fechaIngreso]</strong></span> con código <span class="variable"><strong>[numeroTramite]</strong></span>, remite el <strong><span class="variable">[nombreSolicitante]</span></strong>, el <span class="variable"><strong>[tipoObligacion]</strong></span> del Proyecto.</p>
                    </div>
                </textarea>
            </div>



            <!-- Sección Contenido -->
            <div class="editor-section">
                <h2>Objetivos</h2>

                <textarea id="contenido-editor" class="tiny-editor">
                    <!-- Texto legal -->
                    <div class="legal-text">
                        <p>Verificar el cumplimiento del Art. 488 de los informes ambientales de cumplimiento, establecido en el Reglamento al Código Orgánico del Ambiente publicado mediante Registro Oficial N° 507 del 17 de Junio del 2019.</p>
                    </div>
                </textarea>
            </div>



            <!-- Sección Detalle -->
            <div class="editor-section">
                <h2>Detalle</h2>

                <textarea id="detalle-editor" class="tiny-editor">
                    <p>1. Mejorar la Introducción, Antecedentes, Ficha técnica, Objetivos, Alcance, Normativa legal, Metodología y Descripción general de proyecto para lo cual se sugiere descargar el formato establecido en la página web
                    <a href="https://www.ambiente.chimborazo.gob.ec" target="_blank">www.ambiente.chimborazo.gob.ec</a>, menú biblioteca, para la guía en la elaboración y presentación del documento en mención.</p>
                </textarea>
            </div>


            <!-- Sección Conclusiones -->
            <div class="editor-section">
                <h2>Conclusiones</h2>

                <textarea id="conclusiones-editor" class="tiny-editor">
                    <p>La documentación que consta en el <span class="variable"><strong>[tipoObligacion]</strong></span> del Proyecto "<span class="variable"><strong> [nombreProyecto] </strong></span>", <span class="variable"><strong>[valorCumple]</strong></span> con los requerimientos establecidos en la Normativa Ambiental Vigente por lo que esta Dependencia
                    Administrativa <span class="variable"><strong>[valorAcepta]</strong></span> el <span class="variable"><strong>[tipoObligacion]</strong></span> correspondiente al proyecto "<span class="variable"><strong> [nombreProyecto] </strong></span>", ubicado en el Cantón <span class="variable"><strong>[nombreCanton]</strong></span>, Provincia de <span class="variable"><strong>[nombreProvincia]</strong></span> debiendo el Representante legal atender los
                    siguientes requerimientos, el cual no podrá ser superior a <strong>20 DÍAS</strong> a partir de su notificación conforme a lo establecido en el Reglamento al Código Orgánico del Ambiente, Art. 516 Respuesta a las notificaciones de la
                    Autoridad Ambiental; en tal virtud se recomienda a la Autoridad Ambiental, solicitar información ampliatoria a la documentación presentada.</p>
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