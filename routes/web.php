<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home.main-home');
})->name('home');

Route::get('/profilFakultas', function () {
    return view('pages.profile.main-profile');
})->name('profile');

Route::get('/programStudi', [ProgramController::class, 'index'])->name('programs');
Route::get('/programStudi/{slug}', [ProgramController::class, 'show'])->name('program.show');

Route::get('/beritaDanPengumuman', [ArticleController::class, 'index'])->name('articles');
Route::get('/beritaDanPengumuman/{slug}', [ArticleController::class, 'show'])->name('article.show');