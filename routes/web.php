<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\GroundController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\ScheduleController;

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
    Route::get('/add-grounds', [GroundController::class, 'create'])->name('ground.create');
    Route::post('/add-grounds', [GroundController::class, 'store'])->name('ground.store');
    Route::get('/all-grounds', [GroundController::class, 'index'])->name('ground.index');
    Route::get('/edit-grounds/{ground_id}', [GroundController::class, 'edit'])->name('ground.edit');
    Route::post('/update-grounds/{ground_id}', [GroundController::class, 'update'])->name('ground.update');
    Route::post('/delete-ground', [GroundController::class, 'destroy'])->name('ground.delete');
    Route::get('/add-schedule', [ScheduleController::class, 'create'])->name('schedule.create');
    Route::post('/add-schedule', [ScheduleController::class, 'store'])->name('schedule.store');
    Route::get('/all-schedules', [ScheduleController::class, 'index'])->name('schedule.index');
    Route::get('/edit-schedule/{schedule_id}', [ScheduleController::class, 'edit'])->name('schedule.edit');
    Route::post('/update-schedule/{schedule_id}', [ScheduleController::class, 'update'])->name('schedule.update');
    Route::post('/delete-schedule', [ScheduleController::class, 'destroy'])->name('schedule.delete'); 
});

Route::get('/cricket-all-players', [PlayerController::class, 'allPlayers'])->name('players.all');

Route::get('/cricket-all-grounds', [GroundController::class, 'allGrounds'])->name('grounds.all');

Route::get('/cricket-all-schedules', [ScheduleController::class, 'allSchedules'])->name('schedules.all');

Route::get('/about', [AboutController::class, 'index'])->name('about');

require __DIR__.'/auth.php';

Route::get('/auth/{provider}/redirect',[ProviderController::class,'redirect']); 

Route::get('/auth/{provider}/callback',[ProviderController::class,'callback']); 
