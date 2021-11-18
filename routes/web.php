<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.home');
})->name('site.home');

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

Route::post('/busca', function () {
    return view('site.embreve');
})->name('site.search');

Route::get('/contato', function () {
    return view('site.contactArea');
})->name('site.contact');