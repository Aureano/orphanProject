<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DonController;
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
    return view('welcome');
});

Route::get('/don', function () {
    return view('pages.don');
})->middleware('auth')->name('don');



Route::post('/chat', [ChatController::class, 'chat'])
    ->name('chat');


Route::get('/language/{locale}', [LanguageController::class, 'change'])
    ->name('language.change');

// Route::get('/dons', [DonController::class, 'index']);
// Route::post('/don/checkout', [DonController::class, 'payer']);
// Route::post('/don/status', [DonController::class, 'status']);
// Route::get('/don/success', [DonController::class, 'success'])->name('don.success');






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
