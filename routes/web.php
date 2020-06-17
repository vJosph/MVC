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
    return view('welcome');
});

Route::get('/avisos', function () {
    return view('avisos', ['nome' => 'Vinicius', 'mostrar' => true, 'avisos' => [
        ['id' => 1, 'texto' => 'Aviso 1'],
        ['id' => 2, 'texto' => 'Aviso 2']
    ]]);
});
Route::get('/produtos', function () {
    return view('produtos', ['produto' => 'Instrumentos', 'visivel' => true, 'instrumentos' => [
        ['id' => 1, 'nome' => 'Violão', 'valor' => 'R$ 150,00'],
        ['id' => 2, 'nome' => 'Ukulele', 'valor' => 'R$ 200,00'],
        ['id' => 3, 'nome' => 'Guitarra', 'valor' => 'R$ 250,00']
    ]]);
});




Route::get('/listar', 'ClientesController@listar')->middleware('auth');
Route::get('/listaJogos', 'JogosController@listar')->middleware('auth');
Route::get('/clientes', 'ClientesController@index')->middleware('auth');
Route::get('/criar', 'ClientesController@create')->middleware('auth');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
