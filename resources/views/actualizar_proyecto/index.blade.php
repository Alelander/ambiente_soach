@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('styles/archivo.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<div class="main-container">
    @include('menu_general.menu_general')

    <div class="archivo-wrapper">
        <div class="soca-container">
            <div class="header-with-button">
                <h1>Listado de Obligaciones Registradas</h1>
            </div>

            <div class="summary-info">
                <!-- Botón Imprimir (izquierda) -->
                <div class="left-actions">
                    <button class="print-button">
                        <i class="fas fa-print"></i> Imprimir
                    </button>
                </div>

                <!-- Selector de registros (centro) -->
                <div class="records-selector">
                    <i class="fas fa-list-ol"></i>
                    <span>Mostrar</span>
                    <select class="records-select">
                        <option>10</option>
                        <option>20</option>
                        <option>25</option>
                    </select>
                    <span>registros</span>
                </div>

                <!-- Barra de búsqueda (derecha) -->
                <div class="right-actions">
                    <div class="search-box">
                        <input type="text" placeholder="Buscar...">
                        <button class="search-button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="tramites-table-container">
                <table class="tramites-table">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nombre del Proyecto</th>
                            <th>Fecha de Registro</th>
                            <th>Actividad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="empty-row">
                            <td colspan="10">No hay obligaciones disponibles</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

        <script src="{{ asset('js/archivo.js') }}"></script>
@endsection