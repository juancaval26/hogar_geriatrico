<?php
use App\Http\Controllers\GeriatriaController;
use App\Http\Controllers\KardexController;
use App\Http\Controllers\MedicinaController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\EvolucionController;
use App\Http\Controllers\ValoracionController;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

Route::get('/nota_imp/{id}', [NotaController::class,'imp'])->name('imp');

// registrar varios controladores
// Route::get($uri, $callback);
Route::resources([
    'geriatria' => GeriatriaController::class,
    'kardex' => KardexController::class,
    'medicina' => MedicinaController::class,
    'nota' => NotaController::class,
    'evolucion' => EvolucionController::class,
    'valoracion' => ValoracionController::class,
]);


// Route::controller(KardexController::class)->group(function () {
//     Route::get('/', 'index');
// Route::post('/kardex', 'store');
// Route::get('/kardex/{id}', 'show');
// Route::put('/kardex/{id}','update');
// Route::delete('/kardex/{id}', 'destroy');
// });
// Route::group(['middleware' => ['role:enfermero']], function () {
//     Route::resources(['nota' => NotaController::class]);
//     Route::get('/nota', [NotaController::class,'index']);
//     Route::get('/nota_imp/{id}', [NotaController::class,'imp'])->name('imp');
//     Route::post('/nota', [NotaController::class,'store']);
//     Route::get('/nota/{id}', [NotaController::class,'show']);
//     Route::put('/nota/{id}', [NotaController::class,'update']);
//     Route::delete('/nota/{id}', [NotaController::class,'destroy']);

// });

// Route::controller(KardexController::class)->group(function(){
//     Route::get('/kardex', [KardexController::class,'index']);
//     Route::post('/kardex', 'store');
//     Route::get('/kardex/{id}', 'show');
//     Route::put('/kardex/{id}', 'update');
//     Route::delete('/kardex/{id}', 'destroy');

// });

// Route::controller(EvolucionController::class)->group(function(){
//     Route::get('/evolucion', [EvolucionController::class, 'index']);
//     Route::post('/evolucion', 'store');
//     Route::get('/evolucion/{id}', 'show');
//     Route::put('/evolucion/{id}', 'update');
//     Route::delete('/evolucion/{id}', 'destroy');

// });

// Route::controller(MedicinaController::class)->group(function(){
//     Route::get('/medicina', [MedicinaController::class, 'index']);
//     Route::post('/medicina', 'store');
//     Route::get('/medicina/{id}', 'show');
//     Route::put('/medicina/{id}', 'update');
//     Route::delete('/medicina/{id}', 'destroy');

// });


// Route::controller(NotaController::class)->group(function(){
//     Route::get('/nota', 'index');
//     Route::get('/nota', 'imp');
//     Route::post('/nota', 'store');
//     Route::get('/nota/{id}', 'show');
//     Route::put('/nota/{id}', 'update');
//     Route::delete('/nota/{id}', 'destroy');

// });


// muestra el login al inicio
Route::get('/', function () {
    return view('index');
})->middleware(['auth'])->name('index');

require __DIR__.'/auth.php';

// si no encuentra una ruta en vez de devolver no encontrado(error 404), nos devuelve al index
// Route::resource('geriatria', GeriatriaController::class)
//     ->missing(function (Request $request) {
//         // return Redirect::route('geriatria.index');
//         return view('index');

// });

// Route::resource('/kardex', KardexController::class)
//     ->missing(function (Request $request) {
//         // return Redirect::route('kardex.index');
//         return view('index');

// });

// Route::resource('/medicina', MedicinaController::class)
//     ->missing(function (Request $request) {
//         // return Redirect::route('medicina.index');
//         return view('index');

// });

// Route::resource('/nota', NotaController::class)
//     ->missing(function (Request $request) {
//         // return Redirect::route('nota.index');
//         return view('index');
        
// });

// Route::resource('/evolucion', EvolucionController::class)
//     ->missing(function (Request $request) {
//         // return Redirect::route('evolucion.index');
//         return view('index');

// });

// Route::resource('/valoracion', ValoracionController::class)
//     ->missing(function (Request $request) {
//         // return Redirect::route('valoracion.index');
//         return view('index');

// });