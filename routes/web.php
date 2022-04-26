<?php

use Illuminate\Support\Facades\Route;

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

use App\http\Controllers\CadProduct;


Route::get('/', function () {
    return view('welcome');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/financeiro', function () {
    return view('finance.finance');
})->middleware(['auth'])->name('finance');

Route::get('/produtos/new', [CadProduct::class, "create"])->middleware(['auth'])->name('product');
Route::post('/produtos/new', [CadProduct::class, "store"])->middleware(['auth'])->name('regis_product');
Route::get('/produtos/ver/{id}', [CadProduct::class, "show"]);
Route::get('/produtos/editar/{id}', [CadProduct::class, "edit"]);
Route::post('/produtos/editar/{id}', [CadProduct::class, "update"])->middleware(['auth'])->name('alterar_product');
Route::get('/produtos/excluir/{id}', [CadProduct::class, "delete"]);
Route::delete('/produtos/excluir/{id}', [CadProduct::class, "delete"]);




require __DIR__.'/auth.php';
