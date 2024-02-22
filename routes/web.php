<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\LocalityController;
use App\Http\Controllers\RoleController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/artist', [ArtistController::class, 'index'])->name('artist.index');
Route::get('/artist/{id}', [ArtistController::class, 'show'])
	->where('id', '[0-9]+')->name('artist.show');
    Route::get('/artist/create', [ArtistController::class, 'create'])->name('artist.create');
Route::post('/artist', [ArtistController::class, 'store'])->name('artist.store');
Route::get('/type', [TypeController::class, 'index'])->name('type.index');
Route::get('/type/{id}', [TypeController::class, 'show'])
		->where('id', '[0-9]+')->name('type.show');

Route::get('/locality', [LocalityController::class, 'index']) ->name('locality_index');
Route::get('/locality/{id}', [LocalityController::class, 'show'])
		->where('id', '[0-9]+')->name('locality_show');

Route::get('/role', [RoleController::class, 'index'])->name('role_index');
Route::get('/role/{id}', [RoleController::class, 'show'])
		->where('id', '[0-9]+')->name('role_show');
require __DIR__.'/auth.php';
