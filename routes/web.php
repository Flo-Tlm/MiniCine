<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmsController;

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

Route::get('/', function () {
    return view('welcome');
});

route::get('/films', [FilmsController::class, 'getall'])->name('films');



route::post('/films', [FilmsController::class, 'add']);


route::get('/realisateur/{id}', [RéalisateurController::class, 'index'])->name('auteur');






route::delete('/delete/{id}', [FilmsController::class, 'destroy'])->name('delete');




route::post('/update/{id}', [FilmsController::class, 'update'])->name('updateFilms');

route::get('/update/{id}', [FilmsController::class, 'showUpdate'])->whereNumber('id')->name('update');
