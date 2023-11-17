<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

Route::get('/buffet', function () { // Ponta inicial do fluxo - onde o usuario acessa
    return view('buffet'); //Ponto final - fim da manipulação de dados
});

Route::get('/reserva', function () {
    return view('reserva'); 
});

Route::get('/contato', function () {
    return view('contato'); 
});

Route::get('/login', function () {
    return view('login'); 
});

Route::get('/produtos', function () {

    $busca = request('search');

    return view('products', ['busca'=>$busca]); 
});

Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('product', ['id' => $id]); 
});
