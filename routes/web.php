<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\routeController;
use App\Http\Controllers\searchController;

/*main routes*/
Route::get('/', [routeController::class, 'index'] )->name('site.home');

Route::get('/hotel', [routeController::class, 'emBreve'])->name('site.hotel');

Route::get('/quartos', [routeController::class, 'emBreve'])->name('site.bedrooms');

Route::get('/fotos', [routeController::class, 'emBreve'])->name('site.imgs');

Route::get('/atividades', [routeController::class, 'emBreve'])->name('site.activities');

Route::get('/reserva', [routeController::class, 'emBreve'])->name('site.booking');

Route::get('/contato', [routeController::class, 'emBreve'])->name('site.contact');

/*search route*/
Route::get('/reserva/search', [searchController::class, 'searchReserva'] )->name('site.search');