<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\RealisateursController;
use App\Http\Controllers\LoginController;



Route::get('/', function () {
    return view('welcome');
});

route::get('/films', [FilmsController::class, 'getall'])->name('films');

route::post('/films', [FilmsController::class, 'add']);

Route::get('/realisateur/{id}', [RealisateursController::class, 'getOne'])->whereNumber('id');

route::delete('/delete/{id}', [FilmsController::class, 'destroy'])->name('delete');

route::post('/update/{id}', [FilmsController::class, 'update'])->name('updateFilms');

route::get('/update/{id}', [FilmsController::class, 'showUpdate'])->whereNumber('id')->name('update');

route::get('film/{id}',[FilmsController::class,'show'])->whereNumber('id');







/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', [LoginController::class, 'dashboard']); 
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/custom-login', [LoginController::class, 'customLogin'])->name('login.custom'); 
Route::get('/registration', [LoginController::class, 'registration'])->name('register-user');
Route::post('/custom-registration', [LoginController::class, 'customRegistration'])->name('register.custom'); 
Route::get('/signout', [LoginController::class, 'signOut'])->name('signout');