<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\envent;

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

Route::get('/', [envent::class,"index"]);
Route::get('/eventos/criar', [envent::class,"criar"])->middleware('auth');
Route::get('/eventos/{id}', [envent::class,"show"]);
Route::post('/envent', [envent::class,"store"]);

Route::get('/contato', function () {
    return view('contact');
});
Route::get('/produto/{id?}', function ($id=null) {
    return view('produto');
});

Route::get('/pesquisar-produto', function () {
    $busca=request('pesquisa');


    return view('pesquisar-produtos',[
        "busca"=>$busca

    ]);
});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
