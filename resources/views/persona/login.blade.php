@extends('layouts.app')
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Login | Prefectura de Chimborazo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('styles/login.css') }}">
</head>
<body>

  <div class="login-box">
    <img src="{{ asset('img/logo_login.jpg') }}" alt="Prefectura de Chimborazo" class="logo">
    
    <h2>Ingreso al Sistema</h2>

    @if ($errors->any())
      <div class="errors">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    @if (session('success'))
      <div class="alert-success" id="flash-success" style="margin:12px 0; padding:10px; border:1px solid #cce5ff; background:#e6f2ff; border-radius:6px;">
        {{ session('success') }}
      </div>
    @endif

    <form action="{{ route('login.submit') }}" method="POST">
      @csrf

      <label for="usuario">Usuario (Documento CI)</label>
      <input type="text" id="usuario" name="usuario" required>

      <label for="password">Contraseña</label>
      <input type="password" id="password" name="password" required>

      <!-- Enlace para recuperar contraseña -->
      <div style="text-align: right; margin: 1px 0 12px 0;">
        <a href="/recuperar" style="font-size: 0.9em; color: #007BFF; text-decoration: none;">
          ¿Olvidaste tu contraseña?
        </a>
      </div>

      <button type="submit" class="btn-login">Iniciar Sesión</button>
      <br><br>
      <center>
        ¿No tienes una cuenta? 
        <a href="{{ route('registro') }}">Regístrate</a>
      </center>
    </form>

    <div class="footer">
      © 2025 Prefectura de Chimborazo
    </div>
  </div>

</body>
</html>
