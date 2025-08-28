<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return redirect()->route('login');
});


// Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Registro
Route::get('/registro', [PersonaController::class, 'create'])->name('registro');
Route::get('/condiciones', function () {
    return view('persona.condiciones');
})->name('condiciones');

// Dashboards según rol
Route::middleware(['auth', 'role:Administrador'])->get('/admin/dashboard', function () {
    return view('dashboards.admin');
})->name('admin.dashboard');

Route::middleware(['auth', 'role:Técnico'])->get('/tecnico/dashboard', function () {
    return view('dashboards.tecnico');
})->name('tecnico.dashboard');

Route::middleware(['auth', 'role:Coordinador'])->get('/coordinador/dashboard', function () {
    return view('dashboards.coordinador');
})->name('coordinador.dashboard');

Route::middleware(['auth', 'role:Director'])->get('/director/dashboard', function () {
    return view('dashboards.director');
})->name('director.dashboard');

Route::middleware(['auth', 'role:Usuario externo'])->get('/usuario/dashboard', function () {
    return view('dashboards.usuario');
})->name('usuario.dashboard');

Route::get('/api/cantones/{provincia}', [PersonaController::class, 'getCantonesPorProvincia'])->name('api.cantones');
Route::get('/api/parroquias/{canton}', [PersonaController::class, 'getParroquiasPorCanton'])->name('api.parroquias');


// Rutas Admin protegidas
Route::middleware(['auth', 'role:Administrador'])->group(function () {
    Route::get('/admin/personas/{id}/edit', [PersonaController::class, 'editAdmin'])->name('admin.personas.edit');
    Route::put('/admin/personas/{id}', [PersonaController::class, 'updateAdmin'])->name('admin.personas.update');
});

// Mostrar perfil del usuario autenticado
Route::middleware(['auth'])->get('/perfil', [PersonaController::class, 'perfil'])->name('persona.perfil');

// Actualizar perfil del usuario autenticado
Route::middleware(['auth'])->post('/perfil', [PersonaController::class, 'updatePerfil'])->name('persona.perfil.update');

// Público: SOLO el POST de registro
Route::post('personas', [PersonaController::class, 'store'])
    ->name('personas.store'); // sin middleware (ni auth ni guest)
    // ->middleware('throttle:10,1'); // opcional, para evitar spam

// Privado: todo lo demás del resource
Route::resource('personas', PersonaController::class)
    ->except(['store'])
    ->middleware('auth');

Route::post('/perfil/password', [PersonaController::class, 'updatePassword'])
    ->name('persona.password.update')
    ->middleware('auth');

Route::middleware(['auth', 'role:Usuario externo'])
    ->prefix('usuario')
    ->name('usuario.')
    ->group(function () {

        // Bandeja de entrada
        Route::get('/inbox', function () {
            return view('usuario.inbox');
        })->name('inbox');

        // Proyectos
        Route::get('/proyectos', function () {
            return view('usuario.proyectos.index');
        })->name('proyectos.index');

        Route::get('/proyectos/crear', function () {
            return view('usuario.proyectos.create');
        })->name('proyectos.create');

        // (Opcional futuro)
        // Route::post('/proyectos', [ProyectoUsuarioController::class, 'store'])->name('proyectos.store');
    });


// gestionar nacionalidades
Route::get('/nacionalidad', function () {
    return view('nacionalidad.index');
})->name('nacionalidad.index');

Route::resource('nacionalidades', NacionalidadController::class);

//tipos de obligacion
Route::get('/tipos-obligacion', function () {
    return view('obligacion.index');
})->name('obligacion.index');

//catastro
Route::get('/catastro', function () {
    return view('catastro.index');
})->name('catastro.index');

// Ruta para la vista principal de reportes
Route::get('/reportes', function () {
    return view('reportes.documentos');
})->name('reportes.documentos');

// Ruta para generar el reporte de coordenadas
Route::get('/reportes/coordenadas', function () {
    return view('reportes.coordenadas');
})->name('reportes.coordenadas');

//ruta para formatos
Route::get('/formatos', function () {
    return view('formatos.index');
})->name('formatos.index');

// Ruta para el archivo de trámites
Route::get('/archivo', function () {
    return view('archivo.index');
})->name('archivo.index');

// Ruta para el formato de informe observado
Route::get('/formatos/observado', function () {
    return view('formatos.observado');
})->name('formatos.observado');

// Ruta para el mapa
Route::get('/mapa', function () {
    return view('mapa.proyectos');
})->name('mapa.proyectos');

Route::get('/mapa/proyectos-canton', function () {
    return view('mapa.proyectos_canton');
})->name('mapa.proyectos_canton');

// Ruta para el formato de informe aprobación
Route::get('/formatos/aprobacion', function () {
    return view('formatos.aprobacion');
})->name('formatos.aprobacion');

// Ruta para el actualizat proyecto
Route::get('/actualizar_proyecto', function () {
    return view('actualizar_proyecto.index');
})->name('actualizar_proyecto.index');

// Ruta para el formato de informe de pronunciamiento favorable
Route::get('/formatos/infpronunciamiento', function () {
    return view('formatos.infpronunciamiento');
})->name('formatos.infpronunciamiento');

// Ruta para el formato de memo de aprobación
Route::get('/formatos/memoaprobacion', function () {
    return view('formatos.memoaprobacion');
})->name('formatos.memoaprobacion');

// Ruta para el formato de memo observado
Route::get('/formatos/memoobservado', function () {
    return view('formatos.memoobservado');
})->name('formatos.memoobservado');

// Ruta para el formato de memo pronunciamiento
Route::get('/formatos/memopronunciamiento', function () {
    return view('formatos.memopronunciamiento');
})->name('formatos.memopronunciamiento');

// Ruta para el formato de oficio aprobación
Route::get('/formatos/ofiaprobacion', function () {
    return view('formatos.ofiaprobacion');
})->name('formatos.ofiaprobacion');

// Ruta para el formato de oficio observado
Route::get('/formatos/ofiobservado', function () {
    return view('formatos.ofiobservado');
})->name('formatos.ofiobservado');

// Ruta para el formato de oficio pronunciamiento
Route::get('/formatos/ofipronunciamiento', function () {
    return view('formatos.ofipronunciamiento');
})->name('formatos.ofipronunciamiento');

// Ruta para el formato de resolución
Route::get('/formatos/resolucion', function () {
    return view('formatos.resolucion');
})->name('formatos.resolucion');