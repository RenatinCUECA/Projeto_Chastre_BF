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

Route::get('/', function () { 
    $nome = "Renato";
    $idade = 19;

    $arr = [10,20,30,40,50];
    $nomes = ['Mateus', 'Renato', 'Pé de manga', 'Chastre corno'];


    return view('welcome', 
    [
    'nome' => $nome, 
    'idade' => $idade,
    'array' => $arr,
    'nomes' => $nomes
    ]);
});

Route::get('/buffet', function () { // Ponta inicial do fluxo - onde o usuario acessa
    return view('buffet'); //Ponto final - fim da manipulação de dados
});

Route::get('/reserva', function () {
    return view('reserva'); 
});

Route::get('/contato', function () {
    return view('contato'); 
});