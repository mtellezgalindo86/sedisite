<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ConveniosAlianzasController;
use App\Http\Controllers\ModeloEducativoController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\QuienesSomosController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\VideotecaController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProgramasController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController\DashboardController;
use App\Http\Controllers\AdminController\AdminPostsController;
use App\Http\Controllers\AdminController\TinyMCEController;
use App\Http\Controllers\AdminController\AdminCategoriesController;
use App\Http\Controllers\AdminController\AdminContactoController;
use App\Http\Controllers\AdminController\AdminRoles;
use App\Http\Controllers\AdminController\AdminTagController;
use App\Http\Controllers\AdminController\AdminUserController;

//home
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
Route::get('/perfil-de-egresado',[ModeloEducativoController::class,'perfilEgresado'])->name('perfil-de-egresado');


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
Route::get('/posts/{post:slug}',[PostsController::class,'show'])->name('posts.show');
Route::get('/categories/{category:slug}',[CategoryController::class,'show'])->name('categories.show');
Route::get('/tags/{tag:name}',[TagController::class,'show'])->name('tags.show');
//Videoteca
Route::get('/videoteca',[VideotecaController::class,'getlist'])->name('videoteca');

//Contacto
Route::get('/contacto', [ContactoController::class,'contacto'])->name('contacto');
Route::post('/post-contact', [ContactoController::class,'postContact'])->name('post-contact');
Route::get('/gracias', [ContactoController::class,'thankyou'])->name('gracias'); 





//admin
require __DIR__.'/auth.php';

Route::name('sediadministrador.')->prefix('sediadministrador')->middleware(['auth', 'check_permissions'])->group(function(){
    Route::get('/',[DashboardController::class, 'index'])->name('index');
    Route::post('/upload_tintymce_image', [TinyMCEController::class, 'upload_tinymce_image'])->name('upload_tinymce_image');
    Route::resource('/posts', AdminPostsController::class);
    Route::resource('/categories', AdminCategoriesController::class);
    Route::resource('/tags', AdminTagController::class)->only(['index','show','destroy']);
    Route::resource('/roles', AdminRoles::class)->except('show');
    Route::resource('/users', AdminUserController::class);
    
    Route::get('/update-contact/{id}', [AdminContactoController::class, 'updateContacto'])->name('update-contact');
    Route::get('/get-list', [AdminContactoController::class, 'index'])->name('get-list');
});
