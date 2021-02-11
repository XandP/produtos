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

Route::group(['middleware' => 'web'], function(){
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::get('/produtos', [App\Http\Controllers\ProdutosController::class, 'index']);
Route::get('/produtos/new', [App\Http\Controllers\ProdutosController::class, 'new']);
Route::post('/produtos/add', [App\Http\Controllers\ProdutosController::class, 'add']);
Route::get('/produtos/{id}/change', [App\Http\Controllers\ProdutosController::class, 'change']);
Route::post('/produtos/update/{id}', [App\Http\Controllers\ProdutosController::class, 'update']);
Route::delete('/produtos/delete/{id}', [App\Http\Controllers\ProdutosController::class, 'delete']);
