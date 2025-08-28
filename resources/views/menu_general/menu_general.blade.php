@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('styles/listau.css') }}">
<link rel="stylesheet" href="{{ asset('styles/menu_general.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Montserrat:wght@600&display=swap" rel="stylesheet">



  <!-- HEADER -->
   <header class="header">
    <div class="logo-header">
      <img src="{{ asset('img/logo1.jpg') }}" alt="Logo" />
    </div>

    <div class="header-title">
          <h3>SOACH - Sistema de Obligaciones Ambientales - HGADPCH </h1>
    </div>

    <div class="header-right">
      <a href="{{ route('admin.dashboard') }}" class="home-button" title="Volver al menú principal">
        <i class="fas fa-home"></i>
        <span>Inicio</span>
      </a>
    </div>

  </header>

  <!-- MENÚ HORIZONTAL -->
  <nav class="menu-horizontal">
    <ul>
      <li><a href="#"><i class="fas fa-project-diagram"></i> Proyectos</a></li>
        <li><a href="#"><i class="fas fa-tasks"></i> <span>Obligaciones 1</span></a></li>
        <li><a href="#"><i class="fas fa-tasks"></i> <span>Obligaciones 2</span></a></li>
        <li><a href="#"><i class="fas fa-tasks"></i> <span>Obligaciones 3</span></a></li>
      <li class="submenu">
         <a href="#" class="submenu-toggle">
             <i class="fas fa-cogs"></i> 
             <span>Reportes</span>
             <span class="flecha"><i class="fas fa-angle-down"></i></span>
         </a>
         <ul class="submenu-items">
             <li><a href="{{ route('reportes.documentos') }}"><i class="fas fa-file"></i> Documentos</a></li>
             <li><a href="{{ route('reportes.coordenadas') }}"><i class="fas fa-chart-bar"></i> Coordenadas</a></li>
         </ul>
      </li>


      <li class="submenu">
        <a href="#" class="submenu-toggle">
          <i class="fas fa-cogs"></i> Administración 
          <i class="fas fa-angle-down flecha"></i>
        </a>
        <ul class="submenu-items">
            <li><a href="{{ route('personas.index') }}"><i class="fas fa-users"></i> Usuarios</a></li>
            <li><a href="{{ route('obligacion.index') }}"><i class="fas fa-tasks"></i> Tipo de Obligación</a></li>
            <li><a href="{{route('formatos.index')}}"><i class="fas fa-user-shield"></i> Formatos</a></li>
            <li><a href="#"><i class="fas fa-user-shield"></i> Gestión De Actividades</a></li>
            <li><a href="{{ route('nacionalidad.index') }}"><i class="fas fa-user"></i> Gestión de Nacionalidades</a></li>
            <li><a href="{{route('actualizar_proyecto.index')}}"><i class="fas fa-user-shield"></i> Actualizar Proyecto</a></li>
        </ul>
      </li>
      
      <!-- Submenú Mapa -->
          <li class="submenu">
            <a href="#" class="submenu-toggle">
              <i class="fas fa-map"></i> <span>Mapa</span>
              <span class="flecha"><i class="fas fa-angle-down"></i></span>
            </a>
            <ul class="submenu-items">
              <li>
                <a href="{{ route('mapa.proyectos') }}">
                  <i class="fas fa-project-diagram"></i> Proyectos
                </a>
              </li>
              <li>
                <a href="{{ route('mapa.proyectos_canton') }}">
                  <i class="fas fa-map-marker-alt"></i> Proyectos por cantón
                </a>
              </li>
            </ul>
          </li>


      <li class='submenu'>
        <a href="#" class="submenu-toggle">
          <i class="fas fa-chart-bar"></i> 
          <span>Catastro</span>
          <span class="flecha"><i class="fas fa-angle-down"></i></span>
        </a>
        <ul class="submenu-items">
          <li><a href="{{ route('catastro.index') }}"><i class="fas fa-file"></i> Estudios Impacto Ambiental</a></li>
        </ul>
      </li>
        <li class="submenu">
    <a href="#" class="submenu-toggle">
        <i class="fas fa-archive"></i>
        <span>Archivo</span>
        <span class="flecha"><i class="fas fa-angle-down"></i></span>
    </a>
    <ul class="submenu-items">
        <li>
            <a href="{{ route('archivo.index') }}">
                <i class="fas fa-file"></i> Listado de Trámites
            </a>
        </li>
    </ul>
</li>

      
    </ul>
  </nav>

  <script>
document.addEventListener('DOMContentLoaded', function () {
  const toggles = document.querySelectorAll('.submenu-toggle');

  toggles.forEach(toggle => {
    toggle.addEventListener('click', function (e) {
      e.preventDefault();
      e.stopPropagation(); // <- clave: evita que el click llegue al document y cierre inmediatamente

      const parent = this.parentElement;

      // Cerrar otros submenús abiertos
      document.querySelectorAll('.submenu.active').forEach(s => {
        if (s !== parent) s.classList.remove('active');
      });

      // Alternar el submenú actual
      parent.classList.toggle('active');
    });
  });

  // Cerrar submenús al hacer clic fuera del menú
  document.addEventListener('click', function (e) {
    if (!e.target.closest('.menu-horizontal')) {
      document.querySelectorAll('.submenu.active').forEach(s => s.classList.remove('active'));
    }
  });

  // Cerrar con ESC
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      document.querySelectorAll('.submenu.active').forEach(s => s.classList.remove('active'));
    }
  });
});
</script>
