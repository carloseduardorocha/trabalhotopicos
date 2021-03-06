<?php

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

Route::get('/atividades', 'AtividadeController@index');
Route::get('/mensagens', 'MensagemController@index');

Route::group(['middleware' => 'auth'], function(){

//ROUTE ATIVIDADES
Route::get('/atividades/create', 'AtividadeController@create');

//ROUTE PDF
Route::get('/atividades/visualiza', 'AtividadeController@relatorioAtividades');

Route::post('/atividades', 'AtividadeController@store');
Route::get('/atividades/{id}', 'AtividadeController@show');
Route::get('/atividades/{id}/edit', 'AtividadeController@edit');
Route::put('/atividades/{id}', 'AtividadeController@update');
Route::get('/atividades/{id}/delete', 'AtividadeController@delete');
Route::delete('/atividades/{id}', 'AtividadeController@destroy');   

//ROUTE MENSAGENS
Route::get('/mensagens/create', 'MensagemController@create');
Route::post('/mensagens', 'MensagemController@store');
Route::get('/mensagens/{id}', 'MensagemController@show');
Route::post('/mensagens', 'MensagemController@store');
Route::get('/mensagens/{id}/edit', 'MensagemController@edit');
Route::put('/mensagens/{id}', 'MensagemController@update');
Route::get('/mensagens/{id}/delete', 'MensagemController@delete');
Route::delete('/mensagens/{id}', 'MensagemController@destroy');



});





//php artisan key:generate
//composer dump-autoload
//php artisan migrate --seed
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
