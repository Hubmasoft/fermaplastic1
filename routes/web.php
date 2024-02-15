<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\FormController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

/*
Route::get('/', function () {
    return view('store.template');
});*/


Route::get('/', [StoreController::class,'index']);

/*
Route::resource('contacto', 'FormController@contactoForm')->name('contacto');
*/

/*
Route::post('contacto', dd('hola mundo'))->name('contacto');
*/
/*
 * Route::post('contacto', 'FormController@contactoForm')->name('contacto');
 */

Route::post('/contacto',[FormController::class,'store']);

//Route::post('contacto', function (){
//    dd("hola mundo");
//})->name('contacto');
Route::get('/sobre_nosotros', [StoreController::class, 'sobre_nosotros'])->name('sobre_nosotros');
