<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor de Informe pronunciamiento favorable</title>
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
            <h1>Edición De La Plantilla Para Informe Pronunciamiento Favorable</h1>
            <p class="subtitle">Por favor ingrese los datos solicitados</p>

            <!-- Sección Asunto -->
            <div class="editor-section">
                <h2>Asunto</h2>

                <textarea id="asunto-editor" class="tiny-editor">
                    <div class="template-variable">
                        <p>PRONUNCIAMIENTO FAVORABLE AL <span class="variable"><strong>[tipoObligacion]</span></strong> DEL PROYECTO <span class="variable"><strong>"[nombreProyecto]",</strong></span> PERIODO <span><strong>[periodo]</strong></span></p>
                    </div>
                </textarea>
            </div>



            <!-- Sección Antecedentes -->
            <div class="editor-section">
                <h2>Antecedentes</h2>

                <textarea id="antecedentes-editor" class="tiny-editor">
                    <!-- Texto con variables -->
                    <div class="template-text">
                        <p>
                            Mediante Oficio Nro. <span class="variable"><strong>[numeroOficio]</strong></span> de fecha <span class="variable"><strong>[fechaOficio]</strong></span>, ingresado a esta dependencia administrativa el <span class="variable"><strong>[fechaIngreso]</strong></span> con Trámite <span class="variable"><strong>[numeroTramite]</strong></span>, remite el <span class="variable"><strong>[nombreSolicitante]</strong></span> el <span class="variable"><strong>[tipoObligacion]</strong></span> del Proyecto "<span class="variable"><strong>[nombreProyecto]</strong></span>", ubicado en el cantón <span class="variable"><strong>[nombreCanton]</strong></span> correspondiente al periodo <span class="variable"><strong>[periodo]</strong></span> para su análisis y pronunciamiento.
                        </p>
                    </div>
                </textarea>
            </div>



            <!-- Sección Objetivos -->
            <div class="editor-section">
                <h2>Objetivos</h2>

                <textarea id="contenido-editor" class="tiny-editor">
                    <!-- Texto legal -->
                    <div class="legal-text">
                        <p>
                            Verificar el cumplimiento de lo establecido en el Reglamento Orgánico del Ambiente, Art. 488 de los informes ambientales de cumplimiento.
                        </p>
                    </div>
                </textarea>
            </div>

            <!-- Sección Observaciones -->
            <div class="editor-section">
                <h2>Observaciones</h2>

                <textarea id="contenido-editor" class="tiny-editor">
                    <!-- Texto legal -->
                    <div class="legal-text">
                        <p>
                            El informe ambiental de cumplimiento contiene:<br><br>
                            &nbsp;&nbsp;• Ficha técnica<br>
                            &nbsp;&nbsp;• Objetivos<br>
                            &nbsp;&nbsp;• Alcance<br>
                            &nbsp;&nbsp;• Marco legal<br>
                            &nbsp;&nbsp;• Descripción del proyecto<br>
                            &nbsp;&nbsp;• Conclusiones<br>
                            &nbsp;&nbsp;• Recomendaciones<br>
                            &nbsp;&nbsp;• Anexos
                        </p>
                    </div>
                </textarea>
            </div>

            <!-- Sección Conclusiones -->
            <div class="editor-section">
                <h2>Conclusiones</h2>

                <textarea id="conclusiones-editor" class="tiny-editor">
                    <p>
                        Una vez analizado el <span class="variable"><strong>[tipoObligacion]</strong></span> del proyecto <span class="variable"><strong>[nombreProyecto]</strong></span> ubicada en el Cantón <span class="variable"><strong>[nombreCanton]</strong></span>, provincia de <span class="variable"><strong>[nombreProvincia]</strong></span>, se concluye que la información <span class="variable"><strong>[valorCumple]</strong></span> con lo establecido en el Reglamento del Código Orgánico del Ambiente, Art. 488 de los informes ambientales de cumplimiento; en tal virtud se recomienda a la Autoridad Ambiental emitir el pronunciamiento final al <span class="variable"><strong>[tipoObligacion]</strong></span> del Proyecto <span class="variable"><strong>[nombreProyecto]</strong></span> correspondiente al periodo <span class="variable"><strong>[periodo]</strong></span>, previo a la presentación de las facturas por pronunciamiento, respecto a informes ambientales de cumplimiento y pagos por control y seguimiento.
                    </p>

                    <p>
                        El pago de tasas por servicios ambientales que presta el Gobierno Autónomo Descentralizado de la Provincia de Chimborazo al estar acreditada como Autoridad Ambiental de Aplicación Responsable el mismo que se debe realizar a la cuenta corriente N° 7534655 del Banco del Pacífico, reguladas dentro del Acuerdo Ministerial N°083-B mediante el cual reforma al libro IX del Texto Unificado de Legislación Secundaria del Ministerio del Ambiente y se detalla en el siguiente cuadro:
                    </p>

                    <div class="table-container">
                        <table class="pagos-table">
                            <thead>
                                <tr>
                                    <th>PAGOS POR SERVICIOS ADMINISTRATIVOS DE REGULARIZACIÓN, CONTROL Y SEGUIMIENTO</th>
                                    <th>DERECHO ASIGNADO</th>
                                    <th>USD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Pronunciamiento respecto a informes ambientales de cumplimiento</td>
                                    <td>10% del costo total de la elaboración del informe</td>
                                    <td>Mínimo USD 50.00</td>
                                </tr>
                                <tr>
                                    <td>Pago por control y seguimiento (PCS)</td>
                                    <td>PCS=PID *Nt*Nd</td>
                                    <td>PCS=80*1*1=80.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <style>
                    .variable {
                        background-color: #fff8e1;
                        padding: 2px 5px;
                        border-radius: 3px;
                        font-family: monospace;
                        color: #d35400;
                        font-weight: bold;
                    }

                    .table-container {
                        margin: 20px 0;
                        overflow-x: auto;
                    }

                    .pagos-table {
                        width: 100%;
                        border-collapse: collapse;
                        font-family: Arial, sans-serif;
                    }

                    .pagos-table th {
                        background-color: #2c3e50;
                        color: white;
                        padding: 12px 15px;
                        text-align: left;
                        font-weight: bold;
                    }

                    .pagos-table td {
                        padding: 12px 15px;
                        border-bottom: 1px solid #e0e0e0;
                    }

                    .pagos-table tr:nth-child(even) {
                        background-color: #f5f5f5;
                    }

                    .pagos-table tr:hover {
                        background-color: #e9e9e9;
                    }
                    </style>
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