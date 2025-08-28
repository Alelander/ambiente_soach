@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('styles/obligacion.css') }}">
<script src="{{asset('js/obligacion.js') }}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<div class="main-container">

    {{-- Menú lateral --}}
    @include('menu_general.menu_general')

    <!-- WRAPPER DEL CONTENIDO -->
    <div class="obligacion-wrapper">
        <div class="soca-container">
            <div class="header-with-button">
                <h1>Gestión de Tipos de Obligación</h1>
            </div>

            <hr class="soca-divider">

            <div class="soca-content">
                <div class="soca-form">
                    <h2>Crear nuevo</h2>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <input type="text" id="nuevaDescripcion" class="form-control" placeholder="Nuevo tipo de obligación">
                    </div>
                    <button class="btn btn-primary" id="btnGuardarNuevo">Guardar</button>
                </div>

                <div class="soca-list">
                    <h2>Listado de Tipos de Obligación</h2>
                    <table class="soca-table" id="tablaObligaciones">
                        <thead>
                            <tr>
                                <th>DESCRIPCIÓN</th>
                                <th>ACCIÓN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-id="1">
                                <td class="descripcion">Auditoría ambiental de cumplimiento</td>
                                <td class="acciones">
                                    <button class="btn-editar">Editar</button>
                                    <div class="edicion" style="display: none;">
                                        <button class="btn-guardar">Guardar</button>
                                        <button class="btn-cancelar">Cancelar</button>
                                    </div>
                                </td>
                            </tr>
                            <tr data-id="2">
                                <td class="descripcion">Cambio de representante legal</td>
                                <td class="acciones">
                                    <button class="btn-editar">Editar</button>
                                    <div class="edicion" style="display: none;">
                                        <button class="btn-guardar">Guardar</button>
                                        <button class="btn-cancelar">Cancelar</button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Más filas según tu imagen -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/obligacion.js') }}"></script>
@endsection
