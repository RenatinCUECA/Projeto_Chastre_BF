<?php

use App\Http\Controllers\BuffetController;
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

Route::get('/', [EventController::class, 'index'])->name('events.index');
Route::get('/events/create',[EventController::class, 'create'])->name('events.create');
Route::get('/events/{id}',[EventController::class, 'show'])->name('events.show');
Route::post('/events',[EventController::class, 'store'])->name('events.store');
Route::resource('events', EventController::class);



Route::get('/buffets', [BuffetController::class, 'index'])->name('buffets.index');
Route::get('/buffets/create',[BuffetController::class, 'create'])->name('buffets.create');
Route::post('/buffets',[BuffetController::class, 'store'])->name('buffets.store');
Route::get('/buffets/edit/{id}',[BuffetController::class, 'edit'])->name('buffets.edit');
Route::put('/buffets/{id}',[BuffetController::class, 'update'])->name('buffets.update');
Route::delete('/buffets/{id}',[BuffetController::class, 'destroy'])->name('buffets.destroy');



Route::get('/events/reserva', function () {
    return view('events/reserva'); 
});

Route::get('/contato', function () {
    return view('contato'); 
})->name('contato');

Route::get('/login', function () {
    return view('/login'); 
});

