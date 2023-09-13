<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ConsiderationController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;

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


Route::get('/', function () { return view('welcome');});
    
Route::get('/reviews', [ReviewController::class, 'index'])->name('review');
Route::get('/considerations', [ConsiderationController::class, 'index'])->name('consideration');
Route::get('/considerations/create', [ConsiderationController::class, 'create']);
Route::get('/considerations/{consideration}', [ConsiderationController::class, 'show']);
Route::get('/reviews/create', [ReviewController::class, 'create']);
Route::get('/reviews/{review}', [ReviewController::class, 'show']);
Route::post('/considerations', [ConsiderationController::class, 'store']);
Route::post('/reviews', [ReviewController::class, 'store']);
Route::get('/users/{user}', [UserController::class ,'index'])->name('user');
Route::get('/movies/{movie}', [MovieController::class ,'index']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
