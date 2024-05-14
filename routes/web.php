<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\PlayerController;

Route::get('/',[WelcomeController::class,'index'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/add-players', [PlayerController::class, 'create'])->name('player.create');
    Route::post('/add-players', [PlayerController::class, 'store'])->name('player.store');
    Route::get('/all-players', [PlayerController::class, 'index'])->name('player.index');
    Route::get('/edit-players/{player_id}', [PlayerController::class, 'edit'])->name('player.edit');
    Route::post('/update-players/{player_id}', [PlayerController::class, 'update'])->name('player.update');
    Route::post('/delete-player', [PlayerController::class, 'destroy'])->name('player.delete'); 
});

Route::get('/cricket-all-players', [PlayerController::class, 'allPlayers'])->name('players.all');

require __DIR__.'/auth.php';

Route::get('/auth/{provider}/redirect',[ProviderController::class,'redirect']); 

Route::get('/auth/{provider}/callback',[ProviderController::class,'callback']); 
