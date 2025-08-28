@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('styles/formatos.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


<div class="main-container">
        {{-- Menú lateral --}}
        @include('menu_general.menu_general')
    <div class="page-wrapper">
        <div class="soca-container">
            <div class="header-with-button">
                <h1>Formatos Para Informe, Memo Y Oficio</h1>
            </div>

            <div class="formatos-content">
                <div class="formatos-header">
                    <h2>DESCRIPCIÓN</h2>
                    <h2>ACCIÓN</h2>
                </div>

                <div class="formatos-list">
                   <!-- Informes -->
                    <div class="formato-item">
                        <span>Informe aprobación</span>
                        <!--
                        <button class="edit-btn">
                            <i class="fas fa-edit"></i> Editar
                        </button>
                        -->
                        <a class="edit-btn" href="{{ route('formatos.aprobacion') }}" style="text-decoration: none;">
                            <i class="fas fa-edit"></i> Editar
                        </a>
                    </div>
                    
                    <div class="formato-item">
                        <span>Informe observado</span>
                        <!--
                        <button class="edit-btn" onclick="window.location.href='{{ route('formatos.observado') }}'">
                            <i class="fas fa-edit"></i> Editar
                        </button>
                        -->
                        <a class="edit-btn" href="{{ route('formatos.observado') }}" style="text-decoration: none;">
                            <i class="fas fa-edit"></i> Editar
                        </a>
                    </div>

                    <div class="formato-item">
                <span>Informe pronunciamiento favorable</span>
                <!--
                <button class="edit-btn">
                    <i class="fas fa-edit"></i> Editar
                </button>
                -->
                <a class="edit-btn" href="{{ route('formatos.infpronunciamiento') }}" style="text-decoration: none;">
                    <i class="fas fa-edit"></i> Editar
                </a>
                     </div>
            
                     <!-- Memos -->
                    <div class="formato-item">
                        <span>Memo aprobación</span>
                        <!--
                        <button class="edit-btn">
                            <i class="fas fa-edit"></i> Editar
                        </button>
                        -->
                        <a class="edit-btn" href="{{ route('formatos.memoaprobacion') }}" style="text-decoration: none;">
                            <i class="fas fa-edit"></i> Editar
                        </a>
                    </div>
                    <div class="formato-item">
                        <span>Memo observado</span>
                        <!--
                        <button class="edit-btn">
                            <i class="fas fa-edit"></i> Editar
                        </button>
                        -->
                        <a class="edit-btn" href="{{ route('formatos.memoobservado') }}" style="text-decoration: none;">
                            <i class="fas fa-edit"></i> Editar
                        </a>
                    </div>
                    <div class="formato-item">
                        <span>Memo pronunciamiento favorable</span>
                        <!--
                        <button class="edit-btn">
                            <i class="fas fa-edit"></i> Editar
                        </button>
                        -->
                        <a class="edit-btn" href="{{ route('formatos.memopronunciamiento') }}" style="text-decoration: none;">
                            <i class="fas fa-edit"></i> Editar
                        </a>
                    </div>
            
                    <!-- Oficios -->
                    <div class="formato-item">
                        <span>Oficio aprobación</span>
                        <!--
                        <button class="edit-btn">
                            <i class="fas fa-edit"></i> Editar
                        </button>
                        -->
                        <a class="edit-btn" href="{{ route('formatos.ofiaprobacion') }}" style="text-decoration: none;">
                            <i class="fas fa-edit"></i> Editar
                        </a>
                    </div>
                    <div class="formato-item">
                        <span>Oficio observado</span>
                        <!--
                        <button class="edit-btn">
                            <i class="fas fa-edit"></i> Editar
                        </button>
                        -->
                        <a class="edit-btn" href="{{ route('formatos.ofiobservado') }}" style="text-decoration: none;">
                            <i class="fas fa-edit"></i> Editar
                        </a>
                    </div>
                    <div class="formato-item">
                        <span>Oficio pronunciamiento favorable</span>
                        <!--
                        <button class="edit-btn">
                            <i class="fas fa-edit"></i> Editar
                        </button>
                        -->
                        <a class="edit-btn" href="{{ route('formatos.ofipronunciamiento') }}" style="text-decoration: none;">
                            <i class="fas fa-edit"></i> Editar
                        </a>
                    </div>

                    <!-- Resolución -->
                    <div class="formato-item">
                        <span>Resolución</span>
                        <!--
                        <button class="edit-btn">
                            <i class="fas fa-edit"></i> Editar
                        </button>
                        -->
                        <a class="edit-btn" href="{{ route('formatos.resolucion') }}" style="text-decoration: none;">
                            <i class="fas fa-edit"></i> Editar
                        </a>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection