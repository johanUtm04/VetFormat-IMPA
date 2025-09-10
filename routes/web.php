<?php /* revisado por johan  */
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\LoginController;   
use App\Http\Controllers\ReportController;  
use App\Http\Controllers\MedicoController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FormatoPdfController;
/*
|--------------------------------------------------------------------------
| Rutas login 🟡🟡🟡
|--------------------------------------------------------------------------
*/
Route::get('/', [LoginController::class, 'login'])->name('login');  
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/autenticar', [LoginController::class, 'autenticar'])->name('autenticar'); 
Route::get('/error404', [LoginController::class, 'errorCredenciales'])->name('errorCredenciales');
Route::get('/logout', function () {Auth::logout(); 
request()->session()->invalidate();
request()->session()->regenerateToken();
return redirect('/')->with('success', 'Sesión cerrada correctamente.');})
->name('logout');


/*
|--------------------------------------------------------------------------
| Rutas Medicos 🟡🟡🟡
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {
    Route::get('/main', [ReportController::class, 'main'])->name('reports.inicio');
    Route::get('/capture-data', [ReportController::class, 'captureData'])->name('reports.capture-data');
    Route::post('/guardar-datos-generales', [ReportController::class, 'guardarDatosGenerales'])->name('guardar.datos.generales');
    Route::get('/select-format/{id}', [ReportController::class, 'select'])->name('reports.select-format');
    Route::get('/select-format/{variableDinamica}/{id}', [ReportController::class, 'mostrarFormatoEspecifico'])->name('formatos.reporte.conid');
    Route::post('/formato/subir', [FormatoPdfController::class, 'subirPDF'])->name('formato.pdf.subir');
    Route::get('/historial', [FormatoPdfController::class, 'historial'])->name('formato.pdf.historial');
});


/*
|--------------------------------------------------------------------------
| Rutas Administrador 🟡🟡🟡
|--------------------------------------------------------------------------
*/
Route::middleware(['tipoUsuario:Admin'])->group(function () {
    Route::get('/medicos', [MedicoController::class, 'index'])->name('medicos.index');
    Route::get('/medicos/{id}/edit', [MedicoController::class, 'edit'])->name('medicos.edit');
    Route::get('/medicos/create', [MedicoController::class, 'create'])->name('medicos.create');
    Route::post('/medicos', [MedicoController::class, 'store'])->name('medicos.store');
    Route::put('/medicos/{id}', [MedicoController::class, 'update'])->name('medicos.update');
    Route::delete('/medicos/{id}', [MedicoController::class, 'destroy'])->name('medicos.destroy');
    Route::get('medicos/{id}/historial', [FormatoPdfController::class, 'verHistorialEspecifico'])->name('ver.historial.especifico');
    Route::get('/historial/{id}', [FormatoPdfController::class, 'verPdf'])->name('formato.pdf.ver');
});