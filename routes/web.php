<?php


use App\Http\Controllers\InicioController;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\App;

use App\Http\Controllers\ActividesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CalendarioActividadesController;
use App\Http\Controllers\copasstController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\FormulariosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SedeController;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\EstadosFinancierosController;
use App\Models\Actividad;
use App\Models\CalendarioActividades;
use App\Models\Sede;
use Illuminate\Support\Facades\Route;
use App\Models\Imagen;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class, 'Index'])->name('home.inicio');
Route::get('Acerca-de-Nosotros', [HomeController::class, 'acercadenosotros'])->name('home.acercadenosotros');
Route::get('Servicios', [HomeController::class, 'servicios'])->name('home.servicios');
Route::get('Plataforma-Estrategica', [HomeController::class, 'plataformaEstrategica'])->name('home.plataformaEstrategica');
Route::get('Codigos-De-Etica', [HomeController::class, 'codigosdeEtica'])->name('home.codigosdeEtica');
Route::get('Estados-Financieros', [HomeController::class, 'estadosFinancieros'])->name('home.estadosFinancieros');
//Route::get('/estados-financieros/{year}', 'EstadosFinancierosController@show')->name('estados-financieros');
Route::get('Sarlaft', [HomeController::class, 'Sarlaft'])->name('home.Sarlaft');
Route::get('Calendario-De-Actividades', [HomeController::class, 'CalendaiodeActividades'])->name('home.Calendario');
Route::get('Derechos-Y-Deberes', [HomeController::class, 'DerechosyDeberes'])->name('home.DerechosyDeberes');
Route::get('Asociación-de-usuarios', [HomeController::class, 'AsociacionUsuarios'])->name('home.AsociacionUsuarios');
Route::get('Valore-Agregados', [HomeController::class, 'ValoreAgregados'])->name('home.ValoreAgregados');
Route::get('Actividades-Pacientes', [HomeController::class, 'ActividadesPacientes'])->name('home.actividadesPacientes');
Route::get('Preguntas-frecuentes', [HomeController::class, 'prefuntasFrecuentes'])->name('prefuntasFrecuentes.home');

//<===========================Fin Rutas principales

//>=========================Rutas Estados Financieros
// Route::get('Año-Gravable-2019', [EstadosFinancierosController::class, 'Año2019'])->name('EstadosFinancieros.Año2019');
// Route::get('Año-Gravable-2020', [EstadosFinancierosController::class, 'Año2020'])->name('EstadosFinancieros.Año2020');
// Route::get('Año-Gravable-2021', [EstadosFinancierosController::class, 'Año2021'])->name('EstadosFinancieros.Año2021');
// Route::get('Año-Gravable-2022', [EstadosFinancierosController::class, 'Año2022'])->name('EstadosFinancieros.Año2022');
// Route::get('Año-Gravable-2023', [EstadosFinancierosController::class, 'Año2023'])->name('EstadosFinancieros.Año2023');


//<===========================Fin Rutas Estados Financieros




//>=========================Rutas Copasst
Route::get('Informe-Nefrouros-Fundacion', [copasstController::class, 'nefrourosFundacion'])->name('copasst.nefrourosFundacion');
Route::get('Informe-Nefroservicios-Sas', [copasstController::class, 'nefroServicios'])->name('copasst.nefroServicios');
Route::get('Informe-SesSalud', [copasstController::class, 'sesSalud'])->name('copasst.sesSalud');
Route::get('Informe-Nefrouros-Mom-Garzon', [copasstController::class, 'Garzon'])->name('copasst.Garzon');
Route::get('Informe-Nefrouros-Mom-Envigado', [copasstController::class, 'Envigado'])->name('copasst.Envigado');
Route::get('Informe-Nefrouros-Mom-Rionegro', [copasstController::class, 'Rionegro'])->name('copasst.Rionegro');
Route::get('Informe-Nefrouros-Mom-Pitalito', [copasstController::class, 'Pitalito'])->name('copasst.Pitalito');

//>=============================== Rutas Emails
Route::get('Contactenos', [FormulariosController::class, 'contactenos'])->name('Contactenos.home');
Route::post('enviarcontactenos', [FormulariosController::class, 'enviarContactenos'])->name('enviar.contactenos');
Route::get('Citas-En-Linea', [FormulariosController::class, 'citas'])->name('citas.home');
Route::post('enviarCita', [FormulariosController::class, 'enviarCitas'])->name('enviar.citas');
Route::get('Evaluar-O-Sugerir', [FormulariosController::class, 'sugerencias'])->name('sugerir.home');
Route::post('EnviarSugerencias', [FormulariosController::class, 'enviarSugerencias'])->name('enviar.sugerencias');
Route::get('trabajaConNosotros', [FormulariosController::class, 'trabajaConNosotros'])->name('trabajar.home');
Route::post('enviartrabajaConNosotros', [FormulariosController::class, 'enviarTrabajaConNosotros'])->name('enviar.trabajo');

//>================================== Actividades 
Route::get('actividades-{sede}-{id}', [HomeController::class, 'actividadGaleria'])->name('actividades.galeria'); // actividadGaleria
Route::get('pacientes-actividades-{sede}-{id}', [HomeController::class, 'todasLasactividades'])->name('actividades.pacientes');
Route::post('img_upload', [ActividadController::class, 'store'])->name('imgActividadUpload')->middleware('auth');
Route::get('Subir-actividad', [ActividadController::class, 'create'])->name('upload.files')->middleware('auth');


//>================================Route Galeria de actividades

//======================> Sedes 

Route::get('Sede-{id}-{sede}', [SedeController::class, 'index'])->name('sedes.home');

//===============>>>>>>>>>>>>>>> Blog de noticicias 

Route::get('Blog-de-Noticias', [BlogController::class, 'index'])->name('blog.home');
Route::get('Subir-noticia', [BlogController::class, 'create'])->name('subir.blog')->middleware('auth');
Route::post('Noticia-upgrade', [BlogController::class, 'store'])->name('update.blog')->middleware('auth');

Route::get('Blog-{id}-{categoria}', [BlogController::class, 'blogdetalles'])->name('blogdetalles.home');
Route::get('Blognov-{id}-{categoria}', [BlogController::class, 'novedad'])->name('Novedad.home');
Route::get('Subir-calendario', [CalendarioActividadesController::class, 'index'])->name('calendario.home')->middleware('auth');
Route::post('upload-calendario', [CalendarioActividadesController::class, 'store'])->name('update.calendario')->middleware('auth');














// Route::get('/', 'App\Http\Controllers\InicioController@index');
//Rutas Actividades 
// Route::get('Subir-actividad', [ActividadController::class, 'store'])->name('upload.files');
Route::get('Carga-actividad', [DashController::class, 'cargaactividad'])->name('carga-actividad')->middleware('auth');
Route::get('Editar-actividad-{sede}-{id}', [DashController::class, 'edit'])->name('editar.actividad')->middleware('auth');
Route::put('Actualizar-actividad-{id}', [DashController::class, 'update'])->name('actualizar.actividad')->middleware('auth');
Route::delete('Eliminar-actividad-{sede}-{id}', [DashController::class, 'destroy'])->name('delete.actividad')->middleware('auth');
Route::put('Eliminar-imagen-{id}', [DashController::class, 'destroyprin'])->name('delete.imagen')->middleware('auth');
Route::put('Eliminar-imagenprin-{id}', [DashController::class, 'destroyimg'])->name('delete.imagenprin')->middleware('auth');
//Rutas Calendario
Route::get('Carga-calendario', [DashController::class, 'cargacalendario'])->name('carga-calendario')->middleware('auth');
Route::get('Editar-calendario-{id}', [DashController::class, 'editarcalendario'])->name('editar-calendario')->middleware('auth');
Route::put('Actualizar-calendario-{id}', [DashController::class, 'updatecalem'])->name('actualizar-calendario')->middleware('auth');
Route::delete('Eliminar-calendario-{id}', [DashController::class, 'destroycalem'])->name('delete.calendario')->middleware('auth');
//Rutas Noticias
Route::get('Carga-noticias', [DashController::class, 'carganoticias'])->name('carga-noticas')->middleware('auth');
Route::get('Editar-noticia-{id}', [DashController::class, 'editarnoticia'])->name('editar-noticia')->middleware('auth');
Route::put('Actualizar-noticia-{id}', [DashController::class, 'updatenoticia'])->name('actualizar-noticia')->middleware('auth');
Route::delete('Eliminar-noticia-{id}', [DashController::class, 'destroynoticia'])->name('delete.news')->middleware('auth');
Route::put('Eliminar-imagenoticia-{id}', [DashController::class, 'destroyimgnews'])->name('delete.imagenoticia')->middleware('auth');


// Route::group(['middleware' => ['cors']], function () {
//     Route::post('img_upload', [ActividadController::class, 'store'])->name('imgActividadUpload');
// });


Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
    return view('dash.index');
})->name('dash');
