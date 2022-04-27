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
use Illuminate\Http\Request;
use App\http\Controllers\CadProduct;
use App\Models\Produto;


Route::get('/', function () {
    return view('welcome');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/financeiro', function () {
    return view('finance.finance');
})->middleware(['auth'])->name('finance');

Route::get('/produtos', [CadProduct::class, "create"])->middleware(['auth'])->name('product');
Route::post('/produtos', [CadProduct::class, "store"])->middleware(['auth'])->name('regis_product');
Route::get('/produtos/ver/{id}', [CadProduct::class, "show"]);
Route::get('/produtos/search', [CadProduct::class, "search"])->middleware(['auth'])->name('procurar_product');





require __DIR__.'/auth.php';
