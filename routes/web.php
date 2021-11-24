<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\routeController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\roomController;
/*main routes*/
Route::get('/', [routeController::class, 'index'] )->name('site.home');

Route::get('/hotel', [routeController::class, 'hotel'])->name('site.hotel');

Route::get('/quartos', [roomController::class, 'quartos'])->name('site.roons');
Route::get('/quartos/create', [roomController::class, 'quartosCreate'])->name('site.roonsCreate');

route::post('/create', [roomController::class, 'store'])->name('site.Create');


Route::get('/fotos', [routeController::class, 'emBreve'])->name('site.imgs');

Route::get('/atividades', [routeController::class, 'emBreve'])->name('site.activities');

Route::get('/reserva', [routeController::class, 'emBreve'])->name('site.booking');

Route::get('/contato', [routeController::class, 'contato'])->name('site.contact');

/*search route*/
Route::get('/reserva/search', [searchController::class, 'searchReserva'] )->name('site.search');