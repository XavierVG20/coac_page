<?php

use App\Http\Controllers\Admin\InformacionInstitucionalController;
use App\Http\Controllers\Admin\AgenciasController;
use App\Http\Controllers\Admin\SliderCategoriaController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\AvidoPDController;
use App\Http\Controllers\CreditosController;
use App\Http\Controllers\EducacionController;
use App\Http\Controllers\InversionesController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\NuestrasAgenciasController;
use App\Http\Controllers\QuejasController;
use App\Http\Controllers\ServiciosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiaFrontController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\InicioController;

use App\Http\Controllers\Admin\NoticiaController;
use App\Http\Controllers\Admin\CategoriaController;



Route::get('/', [InicioController::class, 'index'])->name('inicio');
Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicios');
Route::get('/inversiones', [InversionesController::class, 'index'])->name('inversiones');
Route::get('/creditos', [CreditosController::class, 'index'])->name('creditos');

Route::get('/contactos', [ContactoController::class, 'index'])->name('contactos');

Route::post('/contactos', [ContactoController::class, 'enviar'])->name('contacto.enviar');

Route::get('/nuestras-agencias', [NuestrasAgenciasController::class, 'index'])->name('agencias');


// Noticias FRONT
Route::get('/noticia', [NoticiaFrontController::class, 'index'])->name('noticia');
Route::get('/noticia/{noticia}', [NoticiaFrontController::class, 'show'])->name('noticia.show');

Route::get('/educacion', [EducacionController::class, 'index'])->name('educacion');

Route::get('/nosotros', [NosotrosController::class, 'index'])->name('nosotros');
Route::get('/quejas', [QuejasController::class, 'index'])->name('quejas');
Route::post('/quejas', [QuejasController::class, 'store'])
    ->name('quejas.store');
Route::get('/aviso_privacidad', [AvidoPDController::class, 'index'])->name('aviso_privacidad');




Auth::routes();
Route::middleware('auth')->group(function () {

    Route::get(
        '/change-password',
        [PasswordController::class, 'edit']
    )->name('password.change.form');

    Route::post(
        '/change-password',
        [PasswordController::class, 'update']
    )->name('password.change');

});

Route::resource('noticias', NoticiaController::class);
Route::prefix('admin')->name('admin.')->middleware(['auth',  'password.expiration'])->group(function () {

    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // CRUD NOTICIAS
    Route::resource('noticias', NoticiaController::class);
    // CATEGORÍAS
    Route::resource('categorias', CategoriaController::class);
    Route::get('institucional', [InformacionInstitucionalController::class, 'index'])->name('institucional.index');
    Route::post('institucional', [InformacionInstitucionalController::class, 'store'])->name('institucional.store');
    Route::put('institucional/{id}', [InformacionInstitucionalController::class, 'update'])->name('institucional.update');

    // routes/web.php

    Route::resource('agencias', AgenciasController::class);
    Route::resource('sliders', SliderController::class);
    Route::resource('slider-categorias', SliderCategoriaController::class);

});