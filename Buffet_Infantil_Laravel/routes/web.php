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
Route::get('/events/create',[EventController::class, 'create'])->middleware('auth');
Route::get('/events/{id}',[EventController::class, 'show']);
Route::post('/events',[EventController::class, 'store']);
Route::post('/events', 'EventsController@store')->name('events.store');



Route::get('/buffet', function () { // Ponta inicial do fluxo - onde o usuario acessa
    return view('buffet'); //Ponto final - fim da manipulação de dados
});

Route::get('/contato', function () {
    return view('contato'); 
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
