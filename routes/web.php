<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlertaController;
use App\Http\Controllers\AdopcionController;
use App\Http\Controllers\RegistroMascotaController;
use App\Http\Controllers\EstadisticaController;
use App\Http\Controllers\BusquedaMascotaController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PerrosController;
use App\Http\Controllers\GatosController;
use App\Http\Controllers\EspecieController;
use App\Models\Especie;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/registromascota', [App\Http\Controllers\RegistroMascotaController::class, 'index'])->name('registromascota');

Route::get('/alerta', [App\Http\Controllers\AlertaController::class, 'index'])->name('alerta');

/*----------------------------------------------------------------*/

Route::get('/alerta', 'App\Http\Controllers\AlertaController@index')->name('alerta');

Route::get('/adopcion', 'App\Http\Controllers\AdopcionController@index')->name('adopcion');

Route::get('/busquedamascota', 'App\Http\Controllers\BusquedaMascotaController@index' )->name('busquedamascota');

Route::resource('/busquedamascota/index', BusquedaMascotaController::class);

Route::get('/alerta/create', 'App\Http\Controllers\AlertaController@create')->name('alerta');

Route::post('/alerta', 'App\Http\Controllers\AlertaController@store')->name('alerta');


Route::get('/registromascota/create', 'App\Http\Controllers\RegistroMascotaController@create')->name('registromascota');

Route::post('/registromascota', 'App\Http\Controllers\RegistroMascotaController@store')->name('registromascota');

Route::get('/registromascota', 'App\Http\Controllers\RegistroMascotaController@index')->name('registromascota');

Route::get('/estadistica', 'App\Http\Controllers\EstadisticaController@index')->name('estadistica');

Route::get('/registromascota', function(){
$especies = Especie::all();
return view('/registromascota')->with(['especies' => $especies, ]);
});

Route::get('especies/{id}/razas', function ($id) {

    $especie = Especie::find($id);
return Raza::where('especies_id', $especie->id)->get();
});