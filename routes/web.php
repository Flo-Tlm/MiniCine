<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\RealisateursController;



Route::get('/', function () {
    return view('welcome');
});

route::get('/films', [FilmsController::class, 'getall'])->name('films');

route::post('/films', [FilmsController::class, 'add']);

Route::get('/realisateur/{id}', [RealisateursController::class, 'getOne'])->whereNumber('id');

route::delete('/delete/{id}', [FilmsController::class, 'destroy'])->name('delete');

route::post('/update/{id}', [FilmsController::class, 'update'])->name('updateFilms');

route::get('/update/{id}', [FilmsController::class, 'showUpdate'])->whereNumber('id')->name('update');

route::get('film/{id}',[filmsController::class,'show'])->whereNumber('id');
