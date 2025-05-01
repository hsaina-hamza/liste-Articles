<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


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

Route::get('/Article/create',[ArticleController::class,"create"]);
Route::post('/Articl',[ArticleController::class,"store"])->name("store");

Route::get('/articleDetal',[ArticleController::class,'index']);
Route::get('/show/{id}',[ArticleController::class,'show']);



require __DIR__.'/auth.php';
