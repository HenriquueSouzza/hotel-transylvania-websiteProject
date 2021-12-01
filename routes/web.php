<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\routeController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\roomController;
use App\Http\Controllers\PhotoController;
/*main routes*/
Route::get('/', [routeController::class, 'index'] )->name('site.home');

Route::get('/create', [routeController::class, 'Create'])->name('site.Create');

Route::get('/hotel', [routeController::class, 'hotel'])->name('site.hotel');

Route::get('/quartos', [roomController::class, 'quartos'])->name('site.roons');
route::post('/quartos/create', [roomController::class, 'store'])->name('site.roomsCreate');

Route::get('/fotos', [PhotoController::class, 'Photo'])->name('site.imgs');
route::post('/fotos/create', [PhotoController::class, 'store'])->name('site.photosCreate');

Route::get('/atividades', [routeController::class, 'emBreve'])->name('site.activities');

Route::get('/reserva', [routeController::class, 'booking'])->name('site.booking');

Route::get('/contato', [routeController::class, 'contato'])->name('site.contact');

/*search route*/
Route::get('/reserva/search', [searchController::class, 'searchReserva'] )->name('site.search');