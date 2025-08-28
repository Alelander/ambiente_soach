<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor de Oficio Observado</title>
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
                <h1>Edición de la Plantilla para Oficio Observado</h1>
                <p class="subtitle">Por favor ingrese los datos solicitados</p>


                <!-- Sección Asunto -->
                <div class="editor-section">
                    <h2>Asunto</h2>

                    <textarea id="asunto-editor" class="tiny-editor">
                        <div class="template-variable">
                            <p>
                                ASUNTO: OBSERVACIONES AL <span class="variable"><strong>[tipoObligacion]</strong></span> DEL PROYECTO "<span class="variable"><strong>[nombreProyecto]</strong></span>" PERIODO <span class="variable"><strong>[periodo]</strong></span>
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
                                <span class="variable"><strong>[antecedentes]</strong></span>
                            </p>

                            <p>
                                Al respecto, una vez realizado el análisis correspondiente y sobre la base del <span class="variable"><strong>[numeroInforme]</strong></span> del <span class="variable"><strong>[fechaInforme]</strong></span>, remitido mediante MEMORANDO <span class="variable"><strong>[numeroMemo]</strong></span> del <span class="variable"><strong>[fechaMemo]</strong></span>, se determina que la información que consta en <span class="variable"><strong>[tipoObligacion]</strong></span> del Proyecto "<span class="variable"><strong>[nombreProyecto]</strong></span>", <span class="variable"><strong>[valorCumple]</strong></span> con los requerimientos establecidos en la Normativa Ambiental Vigente por lo que esta Dependencia Administrativa <span class="variable"><strong>[valorAcepta]</strong></span> el <span class="variable"><strong>[tipoObligacion]</strong></span>, se solicita se realicen las modificaciones a las observaciones realizadas a la documentación presentada conforme al siguiente detalle:
                            </p>
                                
                            <p>
                                <span class="variable"><strong>[detalle]</strong></span>
                            </p>
                                
                            <p>
                                Esta información deberá ser presentada en un plazo no mayor a los 20 DÍAS a partir de su notificación conforme a lo establecido en el Reglamento al Código Orgánico del Ambiente, Art. 516 respuesta a las notificaciones a la Autoridad Ambiental, a través de la siguiente página web <a href="https://www.ambiente.chimborazo.gob.ec" target="_blank">www.ambiente.chimborazo.gob.ec</a>, en el link del sistema de control y calidad ambiental, de la Prefectura de Chimborazo.
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