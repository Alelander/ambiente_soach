<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor de Resolucion</title>
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
            <h1>Edición de la Plantilla para Resolucion</h1>
            <p class="subtitle">Por favor ingrese los datos solicitados</p>


            <!-- Sección Asunto -->
            <div class="editor-section">
                <h2>Asunto</h2>

                <textarea id="asunto-editor" class="tiny-editor">
                    <div class="template-variable">
                        <div class="resolucion">
                            <center>
                                <h2>RESOLUCIÓN GENERAL Nro. <span class="variable"><strong>[numeroResolucion]</strong></span></h2>

                                <div class="encabezado">
                                    <p><strong>HONORABLE GOBIERNO AUTÓNOMO DESCENTRALIZADO DE LA PROVINCIA DE<br>
                                    CHIMBORAZO</strong></p>
                                </div>

                                <div class="considerando">
                                    <p><strong>CONSIDERANDO:</strong></p>
                                </div>
                            </center>
                        </div>

                        <style>
                        .resolucion {
                            font-family: 'Times New Roman', serif;
                            line-height: 1.5;
                            margin: 20px;
                        }

                        .encabezado {
                            text-align: center;
                            margin: 25px 0;
                            font-weight: bold;
                            font-size: 1.1em;
                        }

                        .considerando {
                            margin-top: 30px;
                            text-align: justify;
                        }

                        .variable {
                            background-color: #fff8e1;
                            padding: 2px 5px;
                            border-radius: 3px;
                            font-family: monospace;
                            color: #d35400;
                            font-weight: bold;
                        }

                        h2 {
                            text-align: center;
                            border-bottom: 2px solid #000;
                            padding-bottom: 10px;
                            margin-bottom: 20px;
                        }
                        </style>
                    </div>
                </textarea>
            </div>


            <!-- Sección Cuerpo -->
            <div class="editor-section">
                <h2>Cuerpo</h2>
                    
                <textarea id="antecedentes-editor" class="tiny-editor">
                    <!-- Texto con variables -->
                    <div class="template-text">

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