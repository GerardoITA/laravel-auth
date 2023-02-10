<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [MainController::class, 'home'])->name('home');
/* Route::middleware(['auth', 'verified'])
    ->name('private.')
    ->group('private')
    ->group(function () {
        Route::get('/', [ProfileController::class, 'priv']);
}); */
Route::get('/dashboard', [MainController::class, 'privateHome'])->middleware(['auth', 'verified'])->name('dashboard');
/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */
Route::get('/project/show/{id}', [MainController::class, 'showProject'])->name('showProject');
Route::get('/project/delete/{id}', [MainController::class, 'deleteProject'])->middleware(['auth', 'verified'])->name('deleteProject');
Route::get('/dashboard/create', [MainController::class, 'createProject'])->middleware(['auth', 'verified'])->name('createProject');
Route::post('/dashboard/store', [MainController::class, 'storeProject'])->name('storeProject');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
