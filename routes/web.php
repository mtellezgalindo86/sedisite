<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ConveniosAlianzasController;
use App\Http\Controllers\ModeloEducativoController;
use App\Http\Controllers\QuienesSomosController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\VideotecaController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*

*/



Route::get('/', [WelcomeController::class, 'index'])->name('home');

//Quienes somos
Route::get('/historia-sedi', [QuienesSomosController::class, 'historiaSedi'])->name('historia-sedi');
Route::get('/mision', [QuienesSomosController::class, 'mision'])->name('mision');
Route::get('/vision', [QuienesSomosController::class, 'vision'])->name('vision');
Route::get('/valores', [QuienesSomosController::class, 'valores'])->name('valores');
Route::get('/certificaciones', [QuienesSomosController::class, 'certificaciones'])->name('certificaciones');


//Modelo educativo
Route::get('/modelo-educativo-integral-sedi', [ModeloEducativoController::class, 'modeloeducativo'])->name('modelo-educativo-integral-sedi');
Route::get('/educacion-positiva',[ModeloEducativoController::class, 'educacionpositiva'])->name('educacion-positiva');
Route::get('/educacion-en-valores', [ModeloEducativoController::class,'educacionenvalores'])->name('educacion-en-valores');
Route::get('/disciplina-personal', [ModeloEducativoController::class,'disciplinapersonal'])->name('disciplina-personal');
Route::get('/inteligencia-emocional', [ModeloEducativoController::class,'inteligenciaemocional'])->name('inteligencia-emocional');

Route::get('/perfil-de-egresado', [ModeloEducativoController::class,'perfilEgresado'])->name('perfil-de-egresado');
//Programas
Route::get('/programas-de-desarollo-y-cuidado-infantil-guarderia-kinder', [ProgramasController::class, 'programasdesarrollo'])->name('programas-de-desarollo-y-cuidado-infantil-guarderia-kinder');
Route::get('/after-school', [ProgramasController::class, 'afterschool'])->name('after-school');
Route::get('/programa-de-verano', [ProgramasController::class, 'verano'])->name('programa-de-verano');

//Servicios
Route::get('/servicios-de-alimentacion', [ServiciosController::class,'servicioalimentancion'])->name('servicios-de-alimentacion');
Route::get('/protocolo-covid', [ServiciosController::class,'protocolo'])->name('protocolo-covid');
Route::get('/filtro-diario-de-salud', [ServiciosController::class,'filtro'])->name('filtro-diario-de-salud');
Route::get('/servicios-de-video-permanente', [ServiciosController::class,'videopermanente'])->name('servicios-de-video-permanente');
Route::get('/servicios-de-transporte', [ServiciosController::class,'transporte'])->name('servicios-de-transporte');


//Convenios y alianzas
Route::get('/convenios-con-empresas', [ConveniosAlianzasController::class,'convenios'])->name('convenios-con-empresas');
Route::get('/alianzas-con-instituciones-educativas', [ConveniosAlianzasController::class,'alianzas'])->name('alianzas-con-instituciones-educativas');

//Blog
Route::get('/blog', [BlogController::class,'index'])->name('blog');

Route::get('/blog-detail',[BlogController::class,'detail'])->name('blog-detail');


//Videoteca
Route::get('/videoteca',[VideotecaController::class,'getlist'])->name('videoteca');


//Contacto
Route::get('/contacto', [ContactoController::class,'contacto'])->name('contacto');
Route::post('/post-contact', [ContactoController::class,'postContact'])->name('post-contact');
Route::get('/gracias', [ContactoController::class,'thankyou'])->name('gracias');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
