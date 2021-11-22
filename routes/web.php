<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index'] )->name('site.home');
Route::get('/reserva/search', [EventController::class, 'searchReserva'] )->name('site.search');

Route::get('/hotel', function () {
    return view('site.embreve');
})->name('site.hotel');

Route::get('/quartos', function () {
    return view('site.embreve');
})->name('site.bedrooms');

Route::get('/fotos', function () {
    return view('site.embreve');
})->name('site.imgs');

Route::get('/atividades', function () {
    return view('site.embreve');
})->name('site.activities');

Route::get('/reserva', function () {
    return view('site.embreve');
})->name('site.booking');

Route::get('/contato', function () {
    return view('site.contactArea');
})->name('site.contact');