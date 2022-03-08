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

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/inicial', function () {
    return view('inicial');
});

/* Rotas estarão disponiveis somante após autenticação - Produtos */
#GET
Route::get('produtos', 'ProductController@index')->name('product.index'); /* VISÃO:LISTAR TODOS: INDEX */
Route::get('produtos/novo','ProductController@create')->name('product.create'); /* VISÃO: CRIAR NOVO: ADD */
Route::get('produtos/editar/{product}','ProductController@edit')->name('product.edit'); /* VISÃO: EDITAR/ATUALIZAR: UPDATE */
Route::get('produtos/{product}', 'ProductController@show')->name('product.show'); /* VISÃO: LISTAR UM: SHOW */
#POST
Route::post('produtos/store','ProductController@store')->name('product.store');/* CRIAR NOVO: ADD */
#PUT
Route::put('produtos/edit/{product}','ProductController@update')->name('product.update'); /* EDITAR: UPDATE */
#DETETE
Route::delete('produtos/destroy/{product}', 'ProductController@destroy')->name('product.destroy'); /* DELETAR*/

/* Rotas estarão disponiveis somante após autenticação - Tags */
#GET
Route::get('tags', 'TagController@index')->name('tag.index'); /* VISÃO:LISTAR TODOS: INDEX */
Route::get('tags/nova','TagController@create')->name('tag.create'); /* VISÃO: CRIAR NOVO: ADD */
Route::get('tags/editar/{tag}','TagController@edit')->name('tag.edit'); /* VISÃO: EDITAR/ATUALIZAR: UPDATE */
Route::get('tags/{tag}', 'TagController@show')->name('tag.show'); /* VISÃO: LISTAR UM: SHOW */
#POST
Route::post('tag/store','TagController@store')->name('tag.store');/* CRIAR NOVO: ADD */
#PUT
Route::put('tag/edit/{tag}','TagController@update')->name('tag.update'); /* EDITAR: UPDATE */
#DETETE
Route::delete('tag/destroy/{tag}', 'TagController@destroy')->name('tag.destroy'); /* DELETAR*/

require __DIR__.'/auth.php';

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
