<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\JogosController;
use App\Http\Controllers\ProfileController;
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

Route::get('/home', [JogosController::class, 'index'])->middleware(['auth', 'verified'])->name('jogos');

Route::get('/create', [JogosController::class, 'create']);

Route::post('/new', [JogosController::class, 'store']);




Route::get('/jogos', function () {
    return view('jogos');
})->middleware(['auth', 'verified'])->name('jogos');


Route::get('/adicionar', function () {
    return view('adicionar');
})->middleware(['auth', 'verified'])->name('adicionar');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/register', [ProfileController::class, 'create'])->name('auth.register');

    Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('auth.login');


});

// Route::middleware('register')->group(function () {
//     Route::get('/register', [RegisteredUserController::class, 'create'])->name('profile.edit');
//     Route::patch('/register', [RegisteredUserController::class, 'update'])->name('profile.update');
//     Route::delete('/register', [RegisteredUserController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
