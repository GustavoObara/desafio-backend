<?php

use App\Livewire\Web\CreateFilm;
use App\Livewire\Web\Home;
use App\Livewire\Web\ViewFilm;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/cadastrar', CreateFilm::class)->name('create');
Route::get('/film/{filmId}', ViewFilm::class)->name('film.show');
