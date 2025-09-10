<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ReporteController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HistorialFormatoController;
use App\Http\Controllers\CaptureDataController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\FormatoPdfController;

/*
|--------------------------------------------------------------------------
| Rutas de autenticación
|--------------------------------------------------------------------------
*/

// Validar credenciales
Route::post('/autenticar', [LoginController::class, 'autenticar'])->name('autenticar');

// Registro de usuarios
Route::get('/register', [LoginController::class, 'register'])->name('register');

// Errores de login
Route::get('/errorCredenciales', [LoginController::class, 'errorCredenciales'])->name('errorCredenciales');
Route::get('/error', [LoginController::class, 'error'])->name('error');

/*
|--------------------------------------------------------------------------
| Vistas principales según tipo de usuario
|--------------------------------------------------------------------------
*/

Route::get('/inicio-admin', [LoginController::class, 'admin'])
    ->middleware(['auth', 'tipoUsuario:Admin'])
    ->name('admin');

Route::get('/medicos/historial', [ReporteController::class, 'historialMedico'])->name('medicos.historial');

Route::get('medicos/{id}/historial', [FormatoPdfController::class, 'verHistorialEspecifico'])->name('ver.historial.especifico');
Route::get('/inicio-medico', [LoginController::class, 'medico'])
    ->middleware('tipoUsuario:Medico')
    ->name('medico');

/*
|--------------------------------------------------------------------------
| Vistas públicas
|--------------------------------------------------------------------------
*/

Route::get('/', [LoginController::class, 'login'])->name('login');

Route::get('/test-auth', function () {
    if (auth()->check()) {
        return "Estás autenticado como: " . auth()->user()->email;
    } else {
        return redirect()->route('login');
    }
});

Route::get('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/')->with('success', 'Sesión cerrada correctamente.');
})->name('logout');

/*
|--------------------------------------------------------------------------
| Formulario de Reporte (autenticado)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    Route::get('/main', [ReportController::class, 'main'])->name('reports.inicio');
    Route::get('/capture-data', [ReporteController::class, 'create'])->name('reports.capture-data');

    Route::post('/capture-data', [ReporteController::class, 'store'])->name('reports.store');

    Route::get('/select-format', [ReportController::class, 'select'])->name('reports.select-format');
    Route::get('/generate-report', [ReportController::class, 'generate'])->name('reports.generate-report');
    Route::get('/report-history', [ReportController::class, 'history'])->name('prueba');

        // Selección de formato con sesión id
    Route::get('/select-format/{id}', [ReportController::class, 'selectFormat'])->name('select.format');

    // Formato dinámico según parámetro
    Route::get('/select-format/{variableDinamica}', [ReportController::class, 'mostrarFormato'])->name('formatos.reporte');

    // Guardar datos generales dentro del grupo auth para evitar error de ruta no definida
    Route::post('/guardar-datos-generales', [CaptureDataController::class, 'guardarDatosGenerales'])->name('guardar.datos.generales');

});

/*
|--------------------------------------------------------------------------
| CRUD de Médicos (solo Admin)
|--------------------------------------------------------------------------
*/

Route::middleware(['tipoUsuario:Admin'])->group(function () {
    Route::get('/medicos', [MedicoController::class, 'index'])->name('medicos.index');
    Route::get('/medicos/create', [MedicoController::class, 'create'])->name('medicos.create');
    Route::post('/medicos', [MedicoController::class, 'store'])->name('medicos.store');
    Route::get('/medicos/{id}/edit', [MedicoController::class, 'edit'])->name('medicos.edit');
    Route::put('/medicos/{id}', [MedicoController::class, 'update'])->name('medicos.update');
    Route::delete('/medicos/{id}', [MedicoController::class, 'destroy'])->name('medicos.destroy');
});

/*
|--------------------------------------------------------------------------
| Recuperación y creación de contraseñas
|--------------------------------------------------------------------------
*/

Route::get('/crear-password/{token}', [PasswordController::class, 'showCreateForm'])->name('password.create');
Route::post('/crear-password', [PasswordController::class, 'storePassword'])->name('password.store');

Route::get('/mis-reportes', [ReporteController::class, 'misReportes'])->name('mis.reportes')->middleware('auth');

/*
|--------------------------------------------------------------------------
| Guardar datos en el historial
|--------------------------------------------------------------------------
*/


////////////////////////////////////////////////////////////////////////////////////
Route::post('/guardar-formato', [HistorialFormatoController::class, 'guardar'])->name('guardar.formato');
// Route::get('/historial', [HistorialFormatoController::class, 'index'])->name('historial.index')->middleware('auth');
// Route::get('/historial/{id}', [HistorialFormatoController::class, 'show'])->name('historial.show')->middleware('auth');

Route::post('/guardar-formato-pdf', [HistorialFormatoController::class, 'guardarComoPdf'])->name('guardar.formato.pdf');
Route::get('/ver-formato/{id}', [HistorialFormatoController::class, 'vistaImpresion'])->name('formato.vista');
Route::get('/historial/ver-formato/{id}', [HistorialFormatoController::class, 'vistaImpresion'])->name('historial.vista');


Route::get('/download-pdf/{id}/{variableDinamica}', [PdfController::class, 'download'])->name('pdf.download');


Route::post('/guardar-formato', [HistorialFormatoController::class, 'guardar'])->name('guardar.formato');


Route::get('/select-format/{variableDinamica}/{id}', [ReportController::class, 'mostrarFormato2'])->name('formatos.reporte.conid');

// Rutas del historial...
//1.-
Route::post('/guardar-formato', [FormatoPdfController::class, 'guardarFormato'])->name('guardar.formato');

Route::get('/historial', [FormatoPdfController::class, 'historial'])->name('formato.pdf.historial');

Route::get('/historial/{id}', [FormatoPdfController::class, 'verPdf'])->name('formato.pdf.ver');

Route::get('/historial-pdf', [FormatoPdfController::class, 'historialPDF'])->name('formato.pdf.historialPDF')->middleware('auth');

Route::post('/formato/guardar-imagen', [FormatoPdfController::class, 'guardarImagen'])->name('guardar.imagen.formato');
Route::post('/formato/subir', [FormatoPdfController::class, 'subirPDF'])->name('formato.pdf.subir');
